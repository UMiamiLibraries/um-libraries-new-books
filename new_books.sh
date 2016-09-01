curl  "https://miami.alma.exlibrisgroup.com/rep/getFile?institution_code=01UOML&file=RichterNewAcq&type=RSS" > richter_new_books.xml
xsltproc alma-rss-to-html/alma-rss-to-html.xsl  richter_new_books.xml > richter_new_books.html
curl "https://miami.alma.exlibrisgroup.com/rep/getFile?institution_code=01UOML&file=ArchitectureNewAcq&type=RSS" > arch_new_books.xml
xsltproc alma-rss-to-html/alma-rss-to-html.xsl arch_new_books.xml > arch_new_books.html
curl "https://miami.alma.exlibrisgroup.com/rep/getFile?institution_code=01UOML&file=BestsellersNewAcq&type=RSS" > bestsellers.xml
xsltproc alma-rss-to-html/alma-rss-to-html.xsl bestsellers.xml > bestsellers.html
curl "https://miami.alma.exlibrisgroup.com/rep/getFile?institution_code=01UOML&file=CHCNewAcq&type=RSS" > chc_new_books.xml
xsltproc alma-rss-to-html/alma-rss-to-html.xsl chc_new_books.xml > chc_new_books.html
curl "https://miami.alma.exlibrisgroup.com/rep/getFile?institution_code=01UOML&file=DVDNewAcq&type=RSS" > dvds.xml
xsltproc alma-rss-to-html/alma-rss-to-html.xsl dvds.xml > dvds.html
curl "https://miami.alma.exlibrisgroup.com/rep/getFile?institution_code=01UOML&file=GraphicNovelsIsNewAcq&type=RSS" > graphic_novels.xml
xsltproc alma-rss-to-html/alma-rss-to-html.xsl graphic_novels.xml > graphic_novels.html
curl "https://miami.alma.exlibrisgroup.com/rep/getFile?institution_code=01UOML&file=LawNewAcq&type=RSS" > law.xml
xsltproc alma-rss-to-html/alma-rss-to-html.xsl law.xml > law.html
curl "https://miami.alma.exlibrisgroup.com/rep/getFile?institution_code=01UOML&file=Marine&type=RSS" > marine.xml
xsltproc alma-rss-to-html/alma-rss-to-html.xsl marine.xml > marine.html
curl "https://miami.alma.exlibrisgroup.com/rep/getFile?institution_code=01UOML&file=MusicNewAcq&type=RSS" > music.xml
xsltproc alma-rss-to-html/alma-rss-to-html.xsl music.xml > music.html
curl "https://miami.alma.exlibrisgroup.com/rep/getFile?institution_code=01UOML&file=MedNewAcq&type=RSS" > medical.xml
xsltproc alma-rss-to-html/alma-rss-to-html.xsl medical.xml > medical.html
curl "https://miami.alma.exlibrisgroup.com/rep/getFile?institution_code=01UOML&file=OpthNewAcq&type=RSS" > opthamology.xml
xsltproc alma-rss-to-html/alma-rss-to-html.xsl opthamology.xml > opthamology.html
