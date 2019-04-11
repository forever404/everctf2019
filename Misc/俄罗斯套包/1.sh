#!/bin/bash
# author:curled

zip -m ./workspace/flag.zip ./workspace/*
for ((i=0;i<10000;i++))
do
	mkdir ./workspace/empty
	zip -m ./workspace/flag"$i".zip ./workspace/*
done
zip -m ./workspace/flag.zip ./workspace/*
