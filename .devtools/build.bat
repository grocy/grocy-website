pushd "%~dp0\.."

rd /S /Q ".deploy"
mkdir ".deploy"
mkdir ".deploy\data"
mkdir ".deploy\data\grocyreleasesymlinks"
mkdir ".deploy\data\static"
mkdir ".deploy\data\viewcache"

xcopy "index.php" ".deploy\"
xcopy "sitemap.xml" ".deploy\"
xcopy "robots.txt" ".deploy\"
xcopy "StaticFileCacheMiddleware.php" ".deploy\"
xcopy "version.txt" ".deploy\"
xcopy "favicon.ico" ".deploy\"
xcopy "views\*.*" ".deploy\views\" /E
xcopy "img\*.*" ".deploy\img\" /E

call cleancss "site.css" -o ".deploy\site.css"
call terser "site.js" --compress --mangle --rename --output ".deploy\site.js"

xcopy "vendor\*.*" ".deploy\vendor\" /E
xcopy "packages\*.*" ".deploy\packages\" /E
del ".deploy\packages\.yarn-integrity"
rd /s /q ".deploy\packages\@fortawesome\fontawesome-free\js"
rd /s /q ".deploy\packages\@fortawesome\fontawesome-free\less"
rd /s /q ".deploy\packages\@fortawesome\fontawesome-free\metadata"
rd /s /q ".deploy\packages\@fortawesome\fontawesome-free\scss"
rd /s /q ".deploy\packages\@fortawesome\fontawesome-free\sprites"
rd /s /q ".deploy\packages\@fortawesome\fontawesome-free\svgs"

popd
