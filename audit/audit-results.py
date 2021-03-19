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
import json
import sys
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
reHeats = "(Heat[0-9])RunOrder.html"

reUnofficial = "\*\*\*\* UNOFFICIAL RESULTS \(INFORMATIONAL ONLY\) \*\*\*\*"
reUnaudited = '<div class="UN-AUDITED">UN-AUDITED RESULTS</div>'
reProvisional = '<div class="PROVISIONAL">PROVISIONAL RESULTS</div>'
reFinal = '<div class="FINAL">FINAL RESULTS</div>'

#===============================================================================
# DO NOT ALTER BELOW
#===============================================================================

def clear():
    if os.name == 'nt':
        _ = os.system('cls')
    else:
        _ = os.system('clear')

clear()

pp = pprint.PrettyPrinter(indent=4)

print("Welcome to the Pronto Timing System Audit Program")
print("")

p = re.compile(reHeats)
for root, directories, files in os.walk(TSLIVEDIR, topdown=False):
    for name in files:
        if p.search(name) is not None:
            result = p.search(name)
            HEATS[result.group(1)] = os.path.join(root, name)

questions = [
    {
        'type': 'list',
        'name': 'Heat',
        'message': 'Please select a heat to audit',
        'choices': HEATS
    },
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

#answers = prompt(questions)
answers = {'Category': 'Provisional', 'Heat': 'Heat1'}
pp.pprint(answers)

#= TODO:
#       Import csv from HeatXRunOrder.html file chosen
#       Alter each class php file from csv for audit category

with open(HEATS[answers['Heat']]) as csvfile:
    reader = csv.reader(csvfile, skipinitialspace=True, delimiter=',')
    for row in reader:
        for column in row:
            CLASSES[column] = []

for i in CLASSES:
    p = re.compile(i)

    for root, directories, files in os.walk(TSLIVEDIR, topdown=False):
        for name in files:
            if p.search(name) is not None:
                result = p.search(name)
                CLASSES[i] = os.path.join(root, name)

pp.pprint(CLASSES)

for key, value in CLASSES.items():

    with open(value) as fp:
        soup = BeautifulSoup(fp, 'html.parser')

    pattern = re.compile(reUnofficial)

    for elem in soup(text=pattern):
        pp.pprint(elem.parent)
        elem.parent.clear()
#         new = soup.new_tag("div", class="UN-AUDITED")
#         elem.parent.append(new)
#         elem.parent.append(reUnaudited)

    f = open(value, "w")
    f.write(str(soup))
    f.close()
#
#
#
#
#
#
#
#
#
# for root, directories, files in os.walk(TSLIVEDIR, topdown=False):
#     for name in files:
#         if p.search(name) is not None:
#             result = p.search(name)
#             HEATS[result.group(1)] = os.path.join(root, name)
