<?php
/**
 * TrcIMPLAN CANACO - Pagina Inicial Config
 *
 * Copyright (C) 2017 Guillermo Valdés Lozano <guivaloz@movimientolibre.com>
 *
 * This program is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with this program.  If not, see <http://www.gnu.org/licenses/>.
 *
 * @package TrcIMPLANCANACO
 */

namespace Configuracion;

/**
 * Clase PaginaInicialConfig
 */
class PaginaInicialConfig extends \Base\Plantilla {

    public $imprentas;                        // Arreglo con rutas a las clases de ImprentaPublicaciones, es usado en ultimas_publicaciones
    const   ULTIMAS_PUBLICACIONES_LIMITE = 4; // Cantidad límite de últimas publicaciones

    /**
     * Constructor
     */
    public function __construct() {
        parent::__construct();
        // Propiedades para la página inicial
        $this->en_raiz                  = true;
        $this->titulo                   = 'CANACO Torreón / IMPLAN Torreón';
    //~ $this->autor                    = '';
        $this->descripcion              = 'Sitio Web con colaboraciones de la Cámara Nacional de Comercio (CANACO) y el Instituto Municipal de Planeación y Competitividad de Torreón, Coahuila de Zaragoza, México.';
        $this->claves                   = 'IMPLAN, Torreon, CANACO';
        $this->directorio               = '.';
        $this->archivo_ruta             = "index.html";
        $this->imagen_previa_ruta       = 'imagenes/imagen-previa.jpg';
        $this->contenido_en_renglon     = FALSE;
        $this->google_site_verification = '';
    } // constructor

    /**
     * Últimas publicaciones
     */
    protected function ultimas_publicaciones() {
        // Iniciar concentrador
        $concentrador          = new \Base\VinculosDetallados();
        $concentrador->en_raiz = true;
        // Iniciar recolector
        $recolector = new \Base\Recolector();
        $recolector->agregar_publicaciones_de_imprentas($this->imprentas);
        // Ordenar publicaciones por tiempo, de la más nueva a la más antigua
        $recolector->ordenar_por_tiempo_desc();
        // Bucle por las publicaciones
        foreach ($recolector->obtener_publicaciones(self::ULTIMAS_PUBLICACIONES_LIMITE) as $publicacion) {
            // Iniciar vínculo
            $vinculo          = new \Base\Vinculo();
            $vinculo->en_raiz = true;
            $vinculo->en_otro = false;
            $vinculo->definir_con_publicacion($publicacion);
            // Agregar
            $concentrador->agregar($vinculo);
        }
        // Acumular Últimas Publicaciones y Twitter Timeline
        $this->contenido[]  = '  <section id="ultimas-publicaciones">';
        $this->contenido[]  = '    <div class="row">';
        $this->contenido[]  = '      <div class="col-md-8">';
        $this->contenido[]  = '        <div class="ultimas">';
        $this->contenido[]  = '          <h2>Últimas publicaciones</h2>';
        $this->contenido[]  = $concentrador->html();
        $this->contenido[]  = '          <div class="text-center">';
        $this->contenido[]  = "            <a href=\"blog/index.html\" class=\"btn btn-default\" role=\"button\">Todos los Análisis Publicados</a>";
        $this->contenido[]  = '          </div>';
        $this->contenido[]  = '        </div>';
        $this->contenido[]  = '      </div>';
        $this->contenido[]  = '      <div class="col-md-4">';
    //~ $this->contenido[]  = '        <div class="red-social-twitter">';
    //~ $this->contenido[]  = '          <a class="twitter-timeline" height="720px" href="https://twitter.com/trcimplan" data-chrome="nofooter transparent" data-theme="dark" data-widget-id="455819492145127424">Tweets por @trcimplan</a>';
    //~ $this->contenido[]  = '        </div>';
        $this->contenido[]  = '      </div>';
        $this->contenido[]  = '    </div>';
        $this->contenido[]  = '  </section>';
        // Acumular javascipt del Twitter Timeline
    //~ $this->javascript[] = '';
    } // ultimas_publicaciones

    /**
     * HTML
     *
     * @return string Código HTML
     */
    public function html() {
        // Elaborar secciones
    //~ $this->organizacion();
    //~ $this->servicios();
        $this->ultimas_publicaciones();
    //~ $this->categorias();
    //~ $this->mapa();
    //~ $this->redes();
        // Entregar resultado del método en el padre
        return parent::html();
    } // html

} // Clase PaginaInicialConfig

?>
