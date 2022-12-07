pushd "%~dp0\.."

rd /S /Q ".deploy"
mkdir ".deploy"
mkdir ".deploy\data"
mkdir ".deploy\data\grocyreleasesymlinks"
mkdir ".deploy\data\static"
mkdir ".deploy\data\viewcache"

xcopy "index.php" ".deploy\"
xcopy "sitemap.xml" ".deploy\"
xcopy "StaticFileCacheMiddleware.php" ".deploy\"
xcopy "version.txt" ".deploy\"
xcopy "views\*.*" ".deploy\views\" /E
xcopy "img\*.*" ".deploy\img\" /E

call html-minifier-terser "site.css" --collapse-whitespace --remove-comments --minify-css true --output ".deploy\site.css"
call terser "site.js" --compress --mangle --rename --output ".deploy\site.js"

xcopy "vendor\*.*" ".deploy\vendor\" /E
xcopy "node_modules\*.*" ".deploy\node_modules\" /E
del ".deploy\node_modules\.yarn-integrity"

popd
