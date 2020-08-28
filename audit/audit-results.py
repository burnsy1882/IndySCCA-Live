#! python3

""" audit-results.py
"""

#===============================================================================
# IMPORTS
#===============================================================================

import csv
import os
import sys

#===============================================================================
# CONSTANTS
#===============================================================================

TSLIVEDIR = "C:\\ProntoTimingSystem\\web"

#===============================================================================
# DO NOT ALTER BELOW
#===============================================================================

#= TODO:
#       Determine number of heats from HeatXRunOrder files
#       Prompt user for heat to audit
#       Prompt user for audit category: un-audited, provisional, final
#       Import csv from HeatXRunOrder.html file chosen
#       Alter each class php file from csv for audit category