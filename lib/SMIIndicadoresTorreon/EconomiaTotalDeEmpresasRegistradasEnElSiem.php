<?php
/**
 * TrcIMPLAN Sitio Web - SMIIndicadoresTorreon EconomiaTotalDeEmpresasRegistradasEnElSiem
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
 * @package TrcIMPLANSitioWeb
 */

namespace SMIIndicadoresTorreon;

/**
 * Clase EconomiaTotalDeEmpresasRegistradasEnElSiem
 */
class EconomiaTotalDeEmpresasRegistradasEnElSiem extends \SMIBase\PublicacionWeb {

    protected $lenguetas;

    /**
     * Constructor
     */
    public function __construct() {
        // Título, autor y fecha
        $this->nombre                    = 'Total de Empresas Registradas en el SIEM en Torreón';
        $this->autor                     = 'Dirección de Investigación Estratégica';
        $this->fecha                     = '2014-10-21T16:19:49';
        // El nombre del archivo a crear
        $this->archivo                   = 'economia-total-de-empresas-registradas-en-el-siem';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion               = '';
        $this->claves                    = 'IMPLAN, Torreón, Empresas';
        // Opción de navegación a poner como activa
        $this->nombre_menu               = 'Indicadores';
        // Banderas
        $this->poner_imagen_en_contenido = FALSE;
        $this->para_compartir            = TRUE;
        // El estado puede ser 'publicar', 'revisar' o 'ignorar'
        $this->estado                    = 'publicar';
        // Para el Organizador
        $this->categorias                = array('Empresas');
        $this->fuentes                   = array('Sistema de Información Empresarial Mexicano (SIEM)');
        $this->regiones                  = array('Torreón');
        // Inicializar las lengüetas
        $this->lenguetas                 = new \Base\Lenguetas('smi-indicador');
    } // constructor

    /**
     * Sección Datos HTML
     *
     * @return string Código HTML
     */
    protected function seccion_datos_html() {
        return <<<FINAL
      <h3>Información recopilada</h3>
      <table class="table table-hover table-bordered matriz">
        <thead>
          <tr>
            <th>Fecha</th>
            <th>Dato</th>
            <th>Fuente</th>
            <th>Notas</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>31/12/2013</td>
            <td>6671</td>
            <td>Sistema de Información Empresarial Mexicano (SIEM)</td>
            <td></td>
          </tr>
          <tr>
            <td>31/07/2014</td>
            <td>7402</td>
            <td>Sistema de Información Empresarial Mexicano (SIEM)</td>
            <td></td>
          </tr>
        </tbody>
      </table>
      <p><b>Unidad:</b> Cantidad de Empresas.</p>
      <h3>Observaciones</h3>
<p>Las empresas de La Laguna representan el 1.34% del total de 666,684 empresas a nivel nacional para el año 2013.
Datos obtenidos de <a href="http://www.siem.gob.mx/siem/estadisticas/EstadoTamanoPublico.asp?p=1">SIEM</a></p>

FINAL;
    } // seccion_datos_html

    /**
     * Sección Gráfica HTML
     *
     * @return string Código HTML
     */
    protected function seccion_grafica_html() {
        return <<<FINAL
      <h3>Gráfica de Total de Empresas Registradas en el SIEM en Torreón</h3>
      <div id="graficaDatos" class="grafica"></div>
      <p><b>Unidad:</b> Cantidad de Empresas.</p>
      <h3>Observaciones</h3>
<p>Las empresas de La Laguna representan el 1.34% del total de 666,684 empresas a nivel nacional para el año 2013.
Datos obtenidos de <a href="http://www.siem.gob.mx/siem/estadisticas/EstadoTamanoPublico.asp?p=1">SIEM</a></p>

FINAL;
    } // seccion_grafica_html

    /**
     * Sección Gráfica JavaScript
     *
     * @return string Código JavaScript
     */
    protected function seccion_grafica_javascript() {
        return <<<FINAL
  // Gráfica
  if (typeof vargraficaDatos === 'undefined') {
    vargraficaDatos = Morris.Line({
      element: 'graficaDatos',
      data: [{ fecha: '2013-12-31', dato: 6671 },{ fecha: '2014-07-31', dato: 7402 }],
      xkey: 'fecha',
      ykeys: ['dato'],
      labels: ['Dato'],
      lineColors: ['#FF5B02'],
      xLabelFormat: function(d) { return d.getDate()+'/'+(d.getMonth()+1)+'/'+d.getFullYear(); },
      dateFormat: function(ts) { var d = new Date(ts); return d.getDate() + '/' + (d.getMonth() + 1) + '/' + d.getFullYear(); }
    });
  }
FINAL;
    } // seccion_grafica_javascript

    /**
     * Sección Otras Regiones HTML
     *
     * @return string Código HTML
     */
    protected function seccion_otras_regiones_html() {
        return <<<FINAL
      <h3>Gráfica con los últimos datos de Total de Empresas Registradas en el SIEM</h3>
      <div id="graficaOtrasRegiones" class="grafica"></div>
      <h3>Últimos datos de Total de Empresas Registradas en el SIEM</h3>
      <table class="table table-hover table-bordered matriz">
        <thead>
          <tr>
            <th>Región</th>
            <th>Fecha</th>
            <th>Dato</th>
            <th>Fuente</th>
            <th>Notas</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>Torreón</td>
            <td>2014-07-31</td>
            <td>7402</td>
            <td>Sistema de Información Empresarial Mexicano (SIEM)</td>
            <td></td>
          </tr>
          <tr>
            <td>Gómez Palacio</td>
            <td>2014-07-31</td>
            <td>2032</td>
            <td>Sistema de Información Empresarial Mexicano (SIEM)</td>
            <td></td>
          </tr>
          <tr>
            <td>Lerdo</td>
            <td>2014-07-31</td>
            <td>178</td>
            <td>Sistema de Información Empresarial Mexicano (SIEM)</td>
            <td></td>
          </tr>
          <tr>
            <td>Matamoros</td>
            <td>2014-07-31</td>
            <td>173</td>
            <td>Sistema de Información Empresarial Mexicano (SIEM)</td>
            <td></td>
          </tr>
          <tr>
            <td>La Laguna</td>
            <td>2014-07-31</td>
            <td>9785</td>
            <td>Sistema de Información Empresarial Mexicano (SIEM)</td>
            <td></td>
          </tr>
          <tr>
            <td>Coahuila</td>
            <td>2014-07-31</td>
            <td>17810</td>
            <td>Sistema de Información Empresarial Mexicano (SIEM)</td>
            <td></td>
          </tr>
          <tr>
            <td>Durango</td>
            <td>2014-07-31</td>
            <td>7193</td>
            <td>Sistema de Información Empresarial Mexicano (SIEM)</td>
            <td></td>
          </tr>
          <tr>
            <td>Nacional</td>
            <td>2014-07-31</td>
            <td>701136</td>
            <td>Sistema de Información Empresarial Mexicano (SIEM)</td>
            <td></td>
          </tr>
        </tbody>
      </table>
      <p><b>Unidad:</b> Cantidad de Empresas.</p>
      <h3>Observaciones</h3>
<p>Las empresas de La Laguna representan el 1.34% del total de 666,684 empresas a nivel nacional para el año 2013.
Datos obtenidos de <a href="http://www.siem.gob.mx/siem/estadisticas/EstadoTamanoPublico.asp?p=1">SIEM</a></p>

FINAL;
    } // seccion_otras_regiones_html

    /**
     * Sección Otras Regiones JavaScript
     *
     * @return string Código JavaScript
     */
    protected function seccion_otras_regiones_javascript() {
        return <<<FINAL
  // Gráfica
  if (typeof vargraficaOtrasRegiones === 'undefined') {
    vargraficaOtrasRegiones = Morris.Bar({
      element: 'graficaOtrasRegiones',
      data: [{ region: 'Torreón', dato: 7402 },{ region: 'Gómez Palacio', dato: 2032 },{ region: 'Lerdo', dato: 178 },{ region: 'Matamoros', dato: 173 },{ region: 'La Laguna', dato: 9785 },{ region: 'Coahuila', dato: 17810 },{ region: 'Durango', dato: 7193 },{ region: 'Nacional', dato: 701136 }],
      xkey: 'region',
      ykeys: ['dato'],
      labels: ['Dato'],
      barColors: ['#FF5B02']
    });
  }
FINAL;
    } // seccion_otras_regiones_javascript

    /**
     * HTML
     *
     * @return string Código HTML
     */
    public function html() {
        // Ejecutar los métodos que alimentan cada lengüeta
        $this->lenguetas->agregar('smi-indicador-datos', 'Datos', $this->seccion_datos_html());
        $this->lenguetas->agregar('smi-indicador-grafica', 'Gráfica', $this->seccion_grafica_html());
        $this->lenguetas->agregar_javascript($this->seccion_grafica_javascript());
        $this->lenguetas->agregar('smi-indicador-otras-regiones', 'Otras regiones', $this->seccion_otras_regiones_html());
        $this->lenguetas->agregar_javascript($this->seccion_otras_regiones_javascript());
        $this->lenguetas->definir_activa(); // Primer lengüeta activa
        // Definir contenido HTML en el esquema
        $this->contenido->articleBody = $this->lenguetas->html();
        // Ejecutar este método en el padre
        return parent::html();
    } // html

    /**
     * Javascript
     *
     * @return string Código Javascript
     */
    public function javascript() {
        // JavaScript está dentro de las lengüetas
        $this->javascript = $this->lenguetas->javascript();
        // Ejecutar este método en el padre
        return parent::javascript();
    } // javascript

    /**
     * Redifusion HTML
     *
     * @return string Código HTML
     */
    public function redifusion_html() {
        // Código HTML para redifusión
        $this->redifusion = $this->descripcion;
        // Ejecutar este método en el padre
        return parent::redifusion_html();
    } // redifusion_html

} // Clase EconomiaTotalDeEmpresasRegistradasEnElSiem

?>
