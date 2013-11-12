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
		echo 
		echo "$fra$til:"
		echo "\$antall_km = 0;"
		echo "\$reisetid_min = 0;"
		echo "\$reisetid_tekst = \"0t 0min\";"
		echo
		fi
	done < steder.txt
done < steder.txt
