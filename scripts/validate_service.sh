#!/bin/bash
echo "Checking Apache service status..."
sudo systemctl status apache2 || exit 1
