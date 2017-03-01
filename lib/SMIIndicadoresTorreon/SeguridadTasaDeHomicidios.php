<?php
/**
 * TrcIMPLAN Sitio Web - SMIIndicadoresTorreon SeguridadTasaDeHomicidios
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
 * Clase SeguridadTasaDeHomicidios
 */
class SeguridadTasaDeHomicidios extends \SMIBase\PublicacionWeb {

    protected $lenguetas;

    /**
     * Constructor
     */
    public function __construct() {
        // Título, autor y fecha
        $this->nombre                    = 'Tasa de Homicidios en Torreón';
        $this->autor                     = 'Dirección de Investigación Estratégica';
        $this->fecha                     = '2014-10-21T16:19:49';
        // El nombre del archivo a crear
        $this->archivo                   = 'seguridad-tasa-de-homicidios';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion               = 'Forma parte de subíndice de "Sistema de Derecho Confiable y Objetivo". Mide el número relativo de homicidios en cada ciudad. A través del Sistema Estatal y Municipal de Bases de Datos (SIMBAD) fue posible identificar el número de homicidios a nivel municipal. Unidades: Homicidios por cada 100 mil habitantes.
Las tasas de elaboración propia consideran las defunciones por homicidio ocurridas en el municipio de acuerdo a los registros administrativos de INEGI.';
        $this->claves                    = 'IMPLAN, Torreón, Seguridad, Delincuencia, Índice de Competitividad Urbana';
        // Opción de navegación a poner como activa
        $this->nombre_menu               = 'Indicadores';
        // Banderas
        $this->poner_imagen_en_contenido = FALSE;
        $this->para_compartir            = TRUE;
        // El estado puede ser 'publicar', 'revisar' o 'ignorar'
        $this->estado                    = 'publicar';
        // Para el Organizador
        $this->categorias                = array('Seguridad', 'Delincuencia', 'Índice de Competitividad Urbana');
        $this->fuentes                   = array('Elaboración propia con datos obtenidos del INEGI', 'IMCO');
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
            <td>31/12/1990</td>
            <td>9.7788</td>
            <td>Elaboración propia con datos obtenidos del INEGI</td>
            <td></td>
          </tr>
          <tr>
            <td>31/12/1991</td>
            <td>17.0827</td>
            <td>Elaboración propia con datos obtenidos del INEGI</td>
            <td></td>
          </tr>
          <tr>
            <td>31/12/1992</td>
            <td>17.2057</td>
            <td>Elaboración propia con datos obtenidos del INEGI</td>
            <td></td>
          </tr>
          <tr>
            <td>31/12/1993</td>
            <td>11.5461</td>
            <td>Elaboración propia con datos obtenidos del INEGI</td>
            <td></td>
          </tr>
          <tr>
            <td>31/12/1994</td>
            <td>13.9794</td>
            <td>Elaboración propia con datos obtenidos del INEGI</td>
            <td></td>
          </tr>
          <tr>
            <td>01/12/1995</td>
            <td>9.6442</td>
            <td>Elaboración propia con datos obtenidos del INEGI</td>
            <td></td>
          </tr>
          <tr>
            <td>31/12/1996</td>
            <td>6.6275</td>
            <td>Elaboración propia con datos obtenidos del INEGI</td>
            <td></td>
          </tr>
          <tr>
            <td>31/12/1997</td>
            <td>11.7762</td>
            <td>Elaboración propia con datos obtenidos del INEGI</td>
            <td></td>
          </tr>
          <tr>
            <td>31/12/1998</td>
            <td>8.0302</td>
            <td>Elaboración propia con datos obtenidos del INEGI</td>
            <td></td>
          </tr>
          <tr>
            <td>31/12/1999</td>
            <td>7.9530</td>
            <td>Elaboración propia con datos obtenidos del INEGI</td>
            <td></td>
          </tr>
          <tr>
            <td>31/12/2000</td>
            <td>6.9876</td>
            <td>Elaboración propia con datos obtenidos del INEGI</td>
            <td></td>
          </tr>
          <tr>
            <td>31/12/2002</td>
            <td>7.5098</td>
            <td>Elaboración propia con datos obtenidos del INEGI</td>
            <td></td>
          </tr>
          <tr>
            <td>31/12/2003</td>
            <td>5.7724</td>
            <td>Elaboración propia con datos obtenidos del INEGI</td>
            <td></td>
          </tr>
          <tr>
            <td>31/12/2004</td>
            <td>6.0401</td>
            <td>Elaboración propia con datos obtenidos del INEGI</td>
            <td></td>
          </tr>
          <tr>
            <td>31/12/2005</td>
            <td>6.9267</td>
            <td>Elaboración propia con datos obtenidos del INEGI</td>
            <td></td>
          </tr>
          <tr>
            <td>31/12/2006</td>
            <td>5.5912</td>
            <td>Elaboración propia con datos obtenidos del INEGI</td>
            <td></td>
          </tr>
          <tr>
            <td>31/12/2007</td>
            <td>4.3102</td>
            <td>Elaboración propia con datos obtenidos del INEGI</td>
            <td></td>
          </tr>
          <tr>
            <td>31/12/2008</td>
            <td>15.9094</td>
            <td>IMCO</td>
            <td></td>
          </tr>
          <tr>
            <td>31/12/2008</td>
            <td>14.7603</td>
            <td>Elaboración propia con datos obtenidos del INEGI</td>
            <td></td>
          </tr>
          <tr>
            <td>31/12/2009</td>
            <td>23.8267</td>
            <td>IMCO</td>
            <td></td>
          </tr>
          <tr>
            <td>31/12/2009</td>
            <td>22.6945</td>
            <td>Elaboración propia con datos obtenidos del INEGI</td>
            <td></td>
          </tr>
          <tr>
            <td>31/12/2010</td>
            <td>46.6435</td>
            <td>IMCO</td>
            <td></td>
          </tr>
          <tr>
            <td>31/12/2010</td>
            <td>45.0261</td>
            <td>Elaboración propia con datos obtenidos del INEGI</td>
            <td></td>
          </tr>
          <tr>
            <td>31/12/2011</td>
            <td>75.1916</td>
            <td>IMCO</td>
            <td></td>
          </tr>
          <tr>
            <td>31/12/2011</td>
            <td>75.3348</td>
            <td>Elaboración propia con datos obtenidos del INEGI</td>
            <td></td>
          </tr>
          <tr>
            <td>31/12/2012</td>
            <td>109.7160</td>
            <td>IMCO</td>
            <td></td>
          </tr>
          <tr>
            <td>31/12/2012</td>
            <td>120.7270</td>
            <td>Elaboración propia con datos obtenidos del INEGI</td>
            <td></td>
          </tr>
          <tr>
            <td>31/12/2013</td>
            <td>52.6807</td>
            <td>Elaboración propia con datos obtenidos del INEGI</td>
            <td></td>
          </tr>
          <tr>
            <td>31/12/2014</td>
            <td>29.4274</td>
            <td>Elaboración propia con datos obtenidos del INEGI</td>
            <td></td>
          </tr>
          <tr>
            <td>31/12/2015</td>
            <td>19.7265</td>
            <td>Elaboración propia con datos obtenidos del INEGI</td>
            <td></td>
          </tr>
        </tbody>
      </table>
      <p><b>Unidad:</b> Por cada 100 mil.</p>
      <h3>Observaciones</h3>
<p>Fuente: Instituto Nacional de Estadística y Geografía (INEGI), 2008-2012.</p>

FINAL;
    } // seccion_datos_html

    /**
     * Sección Gráfica 1 HTML
     *
     * @return string Código HTML
     */
    protected function seccion_grafica_1_html() {
        return <<<FINAL
      <h3>Gráfica de Tasa de Homicidios en Torreón con fuente Elaboración propia con datos obtenidos del INEGI</h3>
      <div id="graficaDatosElaboracionPropiaConDatosObtenidosDelInegi" class="grafica"></div>
      <p><b>Unidad:</b> Por cada 100 mil.</p>
      <h3>Observaciones</h3>
<p>Fuente: Instituto Nacional de Estadística y Geografía (INEGI), 2008-2012.</p>

FINAL;
    } // seccion_grafica_html

    /**
     * Sección Gráfica 1 JavaScript
     *
     * @return string Código JavaScript
     */
    protected function seccion_grafica_1_javascript() {
        return <<<FINAL
  // Gráfica
  if (typeof vargraficaDatosElaboracionPropiaConDatosObtenidosDelInegi === 'undefined') {
    vargraficaDatosElaboracionPropiaConDatosObtenidosDelInegi = Morris.Line({
      element: 'graficaDatosElaboracionPropiaConDatosObtenidosDelInegi',
      data: [{ fecha: '1990-12-31', dato: 9.7788 },{ fecha: '1991-12-31', dato: 17.0827 },{ fecha: '1992-12-31', dato: 17.2057 },{ fecha: '1993-12-31', dato: 11.5461 },{ fecha: '1994-12-31', dato: 13.9794 },{ fecha: '1995-12-01', dato: 9.6442 },{ fecha: '1996-12-31', dato: 6.6275 },{ fecha: '1997-12-31', dato: 11.7762 },{ fecha: '1998-12-31', dato: 8.0302 },{ fecha: '1999-12-31', dato: 7.9530 },{ fecha: '2000-12-31', dato: 6.9876 },{ fecha: '2002-12-31', dato: 7.5098 },{ fecha: '2003-12-31', dato: 5.7724 },{ fecha: '2004-12-31', dato: 6.0401 },{ fecha: '2005-12-31', dato: 6.9267 },{ fecha: '2006-12-31', dato: 5.5912 },{ fecha: '2007-12-31', dato: 4.3102 },{ fecha: '2008-12-31', dato: 14.7603 },{ fecha: '2009-12-31', dato: 22.6945 },{ fecha: '2010-12-31', dato: 45.0261 },{ fecha: '2011-12-31', dato: 75.3348 },{ fecha: '2012-12-31', dato: 120.7270 },{ fecha: '2013-12-31', dato: 52.6807 },{ fecha: '2014-12-31', dato: 29.4274 },{ fecha: '2015-12-31', dato: 19.7265 }],
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
     * Sección Gráfica 2 HTML
     *
     * @return string Código HTML
     */
    protected function seccion_grafica_2_html() {
        return <<<FINAL
      <h3>Gráfica de Tasa de Homicidios en Torreón con fuente IMCO</h3>
      <div id="graficaDatosImco" class="grafica"></div>
      <p><b>Unidad:</b> Por cada 100 mil.</p>
      <h3>Observaciones</h3>
<p>Fuente: Instituto Nacional de Estadística y Geografía (INEGI), 2008-2012.</p>

FINAL;
    } // seccion_grafica_html

    /**
     * Sección Gráfica 2 JavaScript
     *
     * @return string Código JavaScript
     */
    protected function seccion_grafica_2_javascript() {
        return <<<FINAL
  // Gráfica
  if (typeof vargraficaDatosImco === 'undefined') {
    vargraficaDatosImco = Morris.Line({
      element: 'graficaDatosImco',
      data: [{ fecha: '2008-12-31', dato: 15.9094 },{ fecha: '2009-12-31', dato: 23.8267 },{ fecha: '2010-12-31', dato: 46.6435 },{ fecha: '2011-12-31', dato: 75.1916 },{ fecha: '2012-12-31', dato: 109.7160 }],
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
      <h3>Gráfica con los últimos datos de Tasa de Homicidios</h3>
      <div id="graficaOtrasRegiones" class="grafica"></div>
      <h3>Últimos datos de Tasa de Homicidios</h3>
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
            <td>2015-12-31</td>
            <td>19.7265</td>
            <td>Elaboración propia con datos obtenidos del INEGI</td>
            <td></td>
          </tr>
          <tr>
            <td>Gómez Palacio</td>
            <td>2012-12-31</td>
            <td>43.7146</td>
            <td>IMCO</td>
            <td></td>
          </tr>
          <tr>
            <td>Lerdo</td>
            <td>2012-12-31</td>
            <td>41.8962</td>
            <td>IMCO</td>
            <td></td>
          </tr>
          <tr>
            <td>Matamoros</td>
            <td>2012-12-31</td>
            <td>36.2831</td>
            <td>IMCO</td>
            <td></td>
          </tr>
          <tr>
            <td>La Laguna</td>
            <td>2012-12-31</td>
            <td>77.5463</td>
            <td>IMCO</td>
            <td></td>
          </tr>
          <tr>
            <td>Coahuila</td>
            <td>2001-12-31</td>
            <td>10.2293</td>
            <td>Elaboración propia con datos obtenidos del INEGI</td>
            <td></td>
          </tr>
        </tbody>
      </table>
      <p><b>Unidad:</b> Por cada 100 mil.</p>
      <h3>Observaciones</h3>
<p>Fuente: Instituto Nacional de Estadística y Geografía (INEGI), 2008-2012.</p>

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
      data: [{ region: 'Torreón', dato: 19.7265 },{ region: 'Gómez Palacio', dato: 43.7146 },{ region: 'Lerdo', dato: 41.8962 },{ region: 'Matamoros', dato: 36.2831 },{ region: 'La Laguna', dato: 77.5463 },{ region: 'Coahuila', dato: 10.2293 }],
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
        $this->lenguetas->agregar('smi-indicador-grafica-1', 'Gráfica 1', $this->seccion_grafica_1_html());
        $this->lenguetas->agregar_javascript($this->seccion_grafica_1_javascript());
        $this->lenguetas->agregar('smi-indicador-grafica-2', 'Gráfica 2', $this->seccion_grafica_2_html());
        $this->lenguetas->agregar_javascript($this->seccion_grafica_2_javascript());
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

} // Clase SeguridadTasaDeHomicidios

?>
