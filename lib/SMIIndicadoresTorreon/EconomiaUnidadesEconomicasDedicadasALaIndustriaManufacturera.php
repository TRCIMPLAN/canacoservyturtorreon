<?php
/**
 * TrcIMPLAN Sitio Web - SMIIndicadoresTorreon EconomiaUnidadesEconomicasDedicadasALaIndustriaManufacturera
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
 * Clase EconomiaUnidadesEconomicasDedicadasALaIndustriaManufacturera
 */
class EconomiaUnidadesEconomicasDedicadasALaIndustriaManufacturera extends \SMIBase\PublicacionWeb {

    protected $lenguetas;

    /**
     * Constructor
     */
    public function __construct() {
        // Título, autor y fecha
        $this->nombre                    = 'Unidades Económicas Dedicadas a la Industria Manufacturera en Torreón';
        $this->autor                     = 'Dirección de Investigación Estratégica';
        $this->fecha                     = '2014-10-21T16:19:49';
        // El nombre del archivo a crear
        $this->archivo                   = 'economia-unidades-economicas-dedicadas-a-la-industria-manufacturera';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion               = 'Unidades económicas dedicadas a la manufactura entre el total de unidades económicas del municipio.';
        $this->claves                    = 'IMPLAN, Torreón, Empresas, Mercados';
        // Opción de navegación a poner como activa
        $this->nombre_menu               = 'Indicadores';
        // Banderas
        $this->poner_imagen_en_contenido = FALSE;
        $this->para_compartir            = TRUE;
        // El estado puede ser 'publicar', 'revisar' o 'ignorar'
        $this->estado                    = 'publicar';
        // Para el Organizador
        $this->categorias                = array('Empresas', 'Mercados');
        $this->fuentes                   = array('INEGI');
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
            <td>31/12/1998</td>
            <td>10.96 %</td>
            <td>INEGI</td>
            <td></td>
          </tr>
          <tr>
            <td>31/12/2003</td>
            <td>9.33 %</td>
            <td>INEGI</td>
            <td></td>
          </tr>
          <tr>
            <td>31/12/2008</td>
            <td>9.24 %</td>
            <td>INEGI</td>
            <td></td>
          </tr>
          <tr>
            <td>31/10/2013</td>
            <td>8.55 %</td>
            <td>INEGI</td>
            <td></td>
          </tr>
          <tr>
            <td>31/12/2014</td>
            <td>7.19 %</td>
            <td>INEGI</td>
            <td></td>
          </tr>
        </tbody>
      </table>
      <p><b>Unidad:</b> Porcentaje.</p>
      <h3>Observaciones</h3>
<p>Datos obtenidos de <a href="http://www3.inegi.org.mx/sistemas/saic/">INEGI. Censos económicos</a></p>

FINAL;
    } // seccion_datos_html

    /**
     * Sección Gráfica HTML
     *
     * @return string Código HTML
     */
    protected function seccion_grafica_html() {
        return <<<FINAL
      <h3>Gráfica de Unidades Económicas Dedicadas a la Industria Manufacturera en Torreón</h3>
      <div id="graficaDatos" class="grafica"></div>
      <p><b>Unidad:</b> Porcentaje.</p>
      <h3>Observaciones</h3>
<p>Datos obtenidos de <a href="http://www3.inegi.org.mx/sistemas/saic/">INEGI. Censos económicos</a></p>

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
      data: [{ fecha: '1998-12-31', dato: 10.9600 },{ fecha: '2003-12-31', dato: 9.3300 },{ fecha: '2008-12-31', dato: 9.2400 },{ fecha: '2013-10-31', dato: 8.5500 },{ fecha: '2014-12-31', dato: 7.1935 }],
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
      <h3>Gráfica con los últimos datos de Unidades Económicas Dedicadas a la Industria Manufacturera</h3>
      <div id="graficaOtrasRegiones" class="grafica"></div>
      <h3>Últimos datos de Unidades Económicas Dedicadas a la Industria Manufacturera</h3>
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
            <td>31/12/2014</td>
            <td>7.19 %</td>
            <td>INEGI</td>
            <td></td>
          </tr>
          <tr>
            <td>Gómez Palacio</td>
            <td>31/12/2014</td>
            <td>7.95 %</td>
            <td>INEGI</td>
            <td></td>
          </tr>
          <tr>
            <td>Lerdo</td>
            <td>31/12/2014</td>
            <td>7.58 %</td>
            <td>INEGI</td>
            <td></td>
          </tr>
          <tr>
            <td>Matamoros</td>
            <td>31/12/2014</td>
            <td>7.41 %</td>
            <td>INEGI</td>
            <td></td>
          </tr>
          <tr>
            <td>La Laguna</td>
            <td>31/12/2014</td>
            <td>7.43 %</td>
            <td>INEGI</td>
            <td></td>
          </tr>
          <tr>
            <td>Nacional</td>
            <td>31/10/2013</td>
            <td>10.71 %</td>
            <td>INEGI</td>
            <td></td>
          </tr>
        </tbody>
      </table>
      <p><b>Unidad:</b> Porcentaje.</p>
      <h3>Observaciones</h3>
<p>Datos obtenidos de <a href="http://www3.inegi.org.mx/sistemas/saic/">INEGI. Censos económicos</a></p>

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
      data: [{ region: 'Torreón', dato: 7.1935 },{ region: 'Gómez Palacio', dato: 7.9537 },{ region: 'Lerdo', dato: 7.5766 },{ region: 'Matamoros', dato: 7.4123 },{ region: 'La Laguna', dato: 7.4282 },{ region: 'Nacional', dato: 10.7100 }],
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

} // Clase EconomiaUnidadesEconomicasDedicadasALaIndustriaManufacturera

?>
