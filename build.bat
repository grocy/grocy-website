pushd "%~dp0"

rd /S /Q ".deploy"
mkdir ".deploy"

xcopy "index.html" ".deploy\"
xcopy "de.html" ".deploy\"
xcopy "datenschutz.html" ".deploy\"
xcopy "impressum.html" ".deploy\"
xcopy "sitemap.xml" ".deploy\"
xcopy "style.css" ".deploy\"

xcopy "img\*.*" ".deploy\img\" /E

xcopy "node_modules\*.*" ".deploy\node_modules\" /E
xcopy "vendor_unmanaged\*.*" ".deploy\vendor_unmanaged\" /E

popd
