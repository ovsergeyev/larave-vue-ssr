#!/bin/bash
PWD=$(pwd)

cd "${PWD}/../" && composer install && npm run dev && cd "${PWD}/bin" && ./build
