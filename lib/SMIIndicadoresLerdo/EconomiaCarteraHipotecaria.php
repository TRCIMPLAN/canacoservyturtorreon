<?php
/**
 * TrcIMPLAN Sitio Web - SMIIndicadoresLerdo EconomiaCarteraHipotecaria
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

namespace SMIIndicadoresLerdo;

/**
 * Clase EconomiaCarteraHipotecaria
 */
class EconomiaCarteraHipotecaria extends \SMIBase\PublicacionWeb {

    protected $lenguetas;

    /**
     * Constructor
     */
    public function __construct() {
        // Título, autor y fecha
        $this->nombre                    = 'Cartera Hipotecaria en Lerdo';
        $this->autor                     = 'Dirección de Investigación Estratégica';
        $this->fecha                     = '2014-10-21T16:19:49';
        // El nombre del archivo a crear
        $this->archivo                   = 'economia-cartera-hipotecaria';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion               = 'Monto total de créditos otorgados hasta la fecha indicada.';
        $this->claves                    = 'IMPLAN, Lerdo, Mercados';
        // Opción de navegación a poner como activa
        $this->nombre_menu               = 'Indicadores';
        // Banderas
        $this->poner_imagen_en_contenido = FALSE;
        $this->para_compartir            = TRUE;
        // El estado puede ser 'publicar', 'revisar' o 'ignorar'
        $this->estado                    = 'publicar';
        // Para el Organizador
        $this->categorias                = array('Mercados');
        $this->fuentes                   = array('Comisión Nacional Bancaria y de Valores (CNBV)');
        $this->regiones                  = array('Lerdo');
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
            <td>31/12/2010</td>
            <td>$ 231,743,194.00</td>
            <td>Comisión Nacional Bancaria y de Valores (CNBV)</td>
            <td></td>
          </tr>
          <tr>
            <td>31/12/2011</td>
            <td>$ 240,598,550.00</td>
            <td>Comisión Nacional Bancaria y de Valores (CNBV)</td>
            <td></td>
          </tr>
          <tr>
            <td>31/12/2012</td>
            <td>$ 261,966,994.00</td>
            <td>Comisión Nacional Bancaria y de Valores (CNBV)</td>
            <td></td>
          </tr>
          <tr>
            <td>31/12/2013</td>
            <td>$ 319,887,703.00</td>
            <td>Comisión Nacional Bancaria y de Valores (CNBV)</td>
            <td></td>
          </tr>
          <tr>
            <td>31/03/2014</td>
            <td>$ 334,888,287.00</td>
            <td>Comisión Nacional Bancaria y de Valores (CNBV)</td>
            <td>Dato trimestral</td>
          </tr>
        </tbody>
      </table>
      <p><b>Unidad:</b> Pesos.</p>
      <h3>Observaciones</h3>
<p>La cartera hipotecaria de La Laguna representa el 1.69% de la cartera nacional.</p>

<p>Datos obtenidos de <a href="http://portafoliodeinformacion.cnbv.gob.mx/bm1/Paginas/carteravivienda.aspx">CNBV</a></p>

FINAL;
    } // seccion_datos_html

    /**
     * Sección Gráfica HTML
     *
     * @return string Código HTML
     */
    protected function seccion_grafica_html() {
        return <<<FINAL
      <h3>Gráfica de Cartera Hipotecaria en Lerdo</h3>
      <div id="graficaDatos" class="grafica"></div>
      <p><b>Unidad:</b> Pesos.</p>
      <h3>Observaciones</h3>
<p>La cartera hipotecaria de La Laguna representa el 1.69% de la cartera nacional.</p>

<p>Datos obtenidos de <a href="http://portafoliodeinformacion.cnbv.gob.mx/bm1/Paginas/carteravivienda.aspx">CNBV</a></p>

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
      data: [{ fecha: '2010-12-31', dato: 231743194.00 },{ fecha: '2011-12-31', dato: 240598550.00 },{ fecha: '2012-12-31', dato: 261966994.00 },{ fecha: '2013-12-31', dato: 319887703.00 },{ fecha: '2014-03-31', dato: 334888287.00 }],
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
      <h3>Gráfica con los últimos datos de Cartera Hipotecaria</h3>
      <div id="graficaOtrasRegiones" class="grafica"></div>
      <h3>Últimos datos de Cartera Hipotecaria</h3>
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
            <td>2014-03-31</td>
            <td>$ 4,664,619,926.00</td>
            <td>Comisión Nacional Bancaria y de Valores (CNBV)</td>
            <td>Dato trimestral</td>
          </tr>
          <tr>
            <td>Gómez Palacio</td>
            <td>2014-03-31</td>
            <td>$ 614,765,352.00</td>
            <td>Comisión Nacional Bancaria y de Valores (CNBV)</td>
            <td>Dato trimestral</td>
          </tr>
          <tr>
            <td>Lerdo</td>
            <td>2014-03-31</td>
            <td>$ 334,888,287.00</td>
            <td>Comisión Nacional Bancaria y de Valores (CNBV)</td>
            <td>Dato trimestral</td>
          </tr>
          <tr>
            <td>Matamoros</td>
            <td>2014-03-31</td>
            <td>$ 57,702,472.00</td>
            <td>Comisión Nacional Bancaria y de Valores (CNBV)</td>
            <td>Dato trimestral</td>
          </tr>
          <tr>
            <td>La Laguna</td>
            <td>2014-03-31</td>
            <td>$ 5,671,976,037.00</td>
            <td>Comisión Nacional Bancaria y de Valores (CNBV)</td>
            <td>Dato trimestral</td>
          </tr>
        </tbody>
      </table>
      <p><b>Unidad:</b> Pesos.</p>
      <h3>Observaciones</h3>
<p>La cartera hipotecaria de La Laguna representa el 1.69% de la cartera nacional.</p>

<p>Datos obtenidos de <a href="http://portafoliodeinformacion.cnbv.gob.mx/bm1/Paginas/carteravivienda.aspx">CNBV</a></p>

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
      data: [{ region: 'Torreón', dato: 4664619926.00 },{ region: 'Gómez Palacio', dato: 614765352.00 },{ region: 'Lerdo', dato: 334888287.00 },{ region: 'Matamoros', dato: 57702472.00 },{ region: 'La Laguna', dato: 5671976037.00 }],
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

} // Clase EconomiaCarteraHipotecaria

?>