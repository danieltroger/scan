scan
====

Command line scanning utility for hp printers (tested with hp photosmart 7510).

Has the functionality to scan multiple pages to a pdf or one to a jpg with loads of options (but still not all that the printer is capable of).
The PDF's are readable with every PDF reader, as far is I know. They are done with FPDF and not HP's bullshit on the printer.

ADF is not yet supported since i haven't figured out how to decode the buggy HP-PDF's.
All I have got are small images with a black bar which is three times the page size and surrounds it, which are only readable and openable with Apple's image viewer and crashes imagemagick and php gd. (Yes, seriusly! It was quite funny because I tried to upload them to image sharing sites and their servers error'ed out...)
