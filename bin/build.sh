#!/bin/bash
PWD=$(pwd)
APP_JS_FILE="${PWD}/../public/js/app.js"
APP_CSS_FILE="${PWD}/../public/css/app.css"

cd "${PWD}/../template" && npm run build

if [ ! -f "$APP_JS_FILE" ]; then
  ln "${PWD}/../template/build/app.js" $APP_JS_FILE
fi

if [ ! -f "$APP_CSS_FILE" ]; then
  ln "${PWD}/../template/build/app.css" $APP_CSS_FILE
fi
