#! python3

""" audit-results.py
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
from PyInquirer import prompt

#===============================================================================
# CONSTANTS
#===============================================================================

TSLIVEDIR = "C:\\ProntoTimingSystem\\web"
HEATS = {}
reHeats = "(Heat[0-9])RunOrder.html"

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

p = re.compile(reHeats)
for root, directories, files in os.walk(TSLIVEDIR, topdown=False):
    for name in files:
        if p.search(name) is not None:
            result = p.search(name)
            HEATS[result.group(1)] = os.path.join(root, name)

#pp.pprint(HEATS)

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

answers = prompt(questions)
pp.pprint(answers)

#= TODO:
#       Import csv from HeatXRunOrder.html file chosen
#       Alter each class php file from csv for audit category
