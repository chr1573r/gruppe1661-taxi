#!/bin/bash
# lag_ruter.sh
# Christer Jonassen 06.11.13

# Lager automatisk unike ruteverdier. f.eks krsman, sogven
# lager A-B og B-A av steder lagt til i filen steder.txt

while read -r fra
do
	while read -r til
	do
		if [ "$fra" != "$til" ]; then
		echo "$fra$til"
		fi
	done < steder.txt
done < steder.txt
