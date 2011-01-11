.PHONY: all clean doc publish pubpilou pubmb

ARCH=`uname`

ifeq ($(ARCH),Darwin)
	DOXYGEN="/Applications/Doxygen.app/Contents/Ressources/doxygen"
else
	DOXYGEN=doxygen
endif

all: clean doc publish

clean:
	rm -rf doc/generated/html
	rm -rf doc/generated/html

doc:
	${DOXYGEN} Doxyfile

publish: pubpilou

pubpilou:
	rsync -avz . root@cas-erasme.erasme.lan:/var/www/cas/ --exclude .git* --exclude doc/

pubmb:
	rsync -avz . root@cas-erasme.erasme.lan:/var/www/cm/ --exclude .git* --exclude doc/
