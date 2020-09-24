#!/usr/bin/python3

accesses = {}

with open('download.log') as f:
    for line in f:
        splitted_line = line.split(',')
        if len(splitted_line) != 2:
            continue
        [file_path, ip_addr] = splitted_line
        if file_path not in accesses:
            accesses[file_path] = []
        if ip_addr not in accesses[file_path]:
            accesses[file_path].append(ip_addr)

for file_path, ip_addr in accesses.items():
    print(file_path + " " + str(len(ip_addr)))
