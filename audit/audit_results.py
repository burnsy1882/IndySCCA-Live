#! python3

""" audit-results.py

Program to alter Pronto Timing System class files to indicate audited status.

This program is free software: you can redistribute it and/or modify it under
the terms of the GNU General Public License as published by the Free Software
Foundation, either version 3 of the License, or (at your option) any later
version.
This program is distributed in the hope that it will be useful, but WITHOUT
ANY WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS
FOR A PARTICULAR PURPOSE. See the GNU General Public License for more details.
You should have received a copy of the GNU General Public License along with
this program. If not, see <http://www.gnu.org/licenses/>.
"""

#===============================================================================
# IMPORTS
#===============================================================================

import csv
import os
import re
import pprint

from bs4 import BeautifulSoup
from PyInquirer import prompt

#===============================================================================
# CONSTANTS
#===============================================================================

TSLIVEDIR = "C:\\ProntoTimingSystem\\web"
HEATS = {}
CLASSES = {}
REGEX_HEATS = "(Heat[0-9])RunOrder.html"

TEXT_UNOFFICIAL = "**** UNOFFICIAL RESULTS (INFORMATIONAL ONLY) ****"
DIV_UNAUDITED = 'UN-AUDITED'
TEXT_UNAUDITED = 'UN-AUDITED RESULTS'
DIV_PROVISIONAL = 'PROVISIONAL'
TEXT_PROVISIONAL = 'PROVISIONAL RESULTS'
DIV_FINAL = 'FINAL'
TEXT_FINAL = 'FINAL RESULTS'

#===============================================================================
# DO NOT ALTER BELOW
#===============================================================================

def clear():
    """ Handles os independent clearing of the screen
    """

    if os.name == 'nt':
        _ = os.system('cls')
    else:
        _ = os.system('clear')

def compile_heats():
    """ Compile a list of heats
    """

    regex = re.compile(REGEX_HEATS)

    for root, directories, files in os.walk(TSLIVEDIR, topdown=False):
        for name in files:
            result = regex.search(name)
            if result is not None:
                HEATS[result.group(1)] = os.path.join(root, name)

    HEATS['Exit'] = "Exit"

def compile_classes(heat):
    """ Compile a list of classes for provided heat
    """

    with open(heat) as csvfile:
        reader = csv.reader(csvfile, skipinitialspace=True, delimiter=',')

        for row in reader:
            for column in row:
                CLASSES[column] = []

    for i in CLASSES:
        regex = re.compile(i)

        for root, directories, files in os.walk(TSLIVEDIR, topdown=False):
            for name in files:
                result = regex.search(name)
                if result is not None:
                    CLASSES[i] = os.path.join(root, name)

def replace(category):
    """ Function to replace Pronto text with audit category
    """

    div = soup.new_tag('div')
    if category == 'Un-Audited':
        div['class'] = DIV_UNAUDITED
        div.string = TEXT_UNAUDITED
    elif category == 'Provisional':
        div['class'] = DIV_PROVISIONAL
        div.string = TEXT_PROVISIONAL
    elif category == 'Final':
        div['class'] = DIV_FINAL
        div.string = TEXT_FINAL

    return div

clear()
compile_heats()

pp = pprint.PrettyPrinter(indent=4)

print("Welcome to the Pronto Timing System Audit Program")

questionHeats = [
    {
        'type': 'list',
        'name': 'Heat',
        'message': 'Please select the heat you are auditing or Exit',
        'choices': HEATS
    }
]
questionCategory = [
    {
        'type': 'list',
        'name': 'Category',
        'message': 'Please select an audit category',
        'choices':
        [
            'Un-Audited',
            'Provisional',
            'Final'
        ]
    }
]

while True:
    print("")
    answersHeats = prompt(questionHeats)
    #answersHeats = {'Heat': 'Heat1'}

    if (answersHeats == {}) or (answersHeats['Heat'] == 'Exit'):
        break
    else:
        #answersCategory = {'Category': 'Final'}
        answersCategory = prompt(questionCategory)

        compile_classes(HEATS[answersHeats['Heat']])

        for CLASS, FILE in CLASSES.items():

            with open(FILE) as fp:
                soup = BeautifulSoup(fp, 'html.parser')

            tables = soup.find_all('table')

            TABLECOUNT = 0
            for table in tables:
                if TABLECOUNT == 0:
                    rows = table.find_all('tr')

                    ROWCOUNT = 0
                    for row in rows:
                        if ROWCOUNT == 3:
                            cols = row.find_all('td')

                            for col in cols:
                                bs = row.find_all('b')

                                for b in bs:
                                    b.clear()
                                    b.append(replace(answersCategory['Category']))
                        ROWCOUNT += 1

                TABLECOUNT += 1

            f = open(FILE, "w")
            f.write(soup.prettify(formatter="html"))
            f.close()
