<?php

namespace App\Utils;

use Illuminate\Support\Facades\File;

class Ssr
{
    const VUE_SERVER_RENDER_FILE = 'template/node_modules/vue-server-renderer/basic.js';
    const VUE_APP_BUILD_FILE = 'template/build/app.js';

    /**
     * Серверный рендеренг VUE Компанентов
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    static public function render()
    {
        $vueServerRender = File::get(base_path(self::VUE_SERVER_RENDER_FILE));
        $vueAppBuildFIle = File::get(base_path(self::VUE_APP_BUILD_FILE));

        $v8 = new \V8Js();

        ob_start();

        $v8->executeString($vueServerRender);
//        dd($vueAppBuildFIle);
        $v8->executeString($vueAppBuildFIle);

        $result = ob_get_clean();

        return view('app', ['ssr' => $result]);
    }
}
