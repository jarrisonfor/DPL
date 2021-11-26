#!/bin.bash
set -e
ROOT_PASSWORD=${ROOT_PASSWORD:-"csas1234"}
echo root:${ROOT_PASSWORD} | chpasswd

service webmin start && service smbd start && service nmbd start
exec tail -f /webmin-setup.out