#!/bin/bash
service influxdb start
telegraf -config /etc/telegraf.conf
