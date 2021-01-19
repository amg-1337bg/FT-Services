#!/bin/bash
influx -execute "create database nginx;
create database phpmyadmin;
create database grafana;
create database wordpress;
create database mysql;
create database influxdb;"
