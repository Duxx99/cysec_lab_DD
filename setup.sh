#!/bin/bash

# Backup the original /bin/sh
mv /bin/sh /bin/sh.orig

# Create a symbolic link from /bin/bash to /bin/sh
ln -s /bin/bash /bin/sh
