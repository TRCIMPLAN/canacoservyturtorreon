<?php
/**
 * TrcIMPLAN Sitio Web - SMIIndicadoresGomezPalacio EconomiaSalarioPromedioMensualParaTrabajadoresDeTiempoCompleto
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

namespace SMIIndicadoresGomezPalacio;

/**
 * Clase EconomiaSalarioPromedioMensualParaTrabajadoresDeTiempoCompleto
 */
class EconomiaSalarioPromedioMensualParaTrabajadoresDeTiempoCompleto extends \SMIBase\PublicacionWeb {

    protected $lenguetas;

    /**
     * Constructor
     */
    public function __construct() {
        // Título, autor y fecha
        $this->nombre                    = 'Salario Promedio Mensual para Trabajadores de Tiempo Completo en Gómez Palacio';
        $this->autor                     = 'Dirección de Investigación Estratégica';
        $this->fecha                     = '2015-07-14T14:29:58';
        // El nombre del archivo a crear
        $this->archivo                   = 'economia-salario-promedio-mensual-para-trabajadores-de-tiempo-completo';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion               = 'Mide el salario promedio que obtienen los trabajadores que laboran 35 horas o más en cada ciudad ponderado por la participación de la población de cada municipio que integra dicha ciudad y descontando la presencia de actividades petroleras en los municipios. La lógica del indicador es que mientras más alto el salario promedio, mayor es la productividad laboral de la ciudad.';
        $this->claves                    = 'IMPLAN, Gómez Palacio, Índice de Competitividad Urbana, Empleo';
        // Opción de navegación a poner como activa
        $this->nombre_menu               = 'Indicadores';
        // Banderas
        $this->poner_imagen_en_contenido = FALSE;
        $this->para_compartir            = TRUE;
        // El estado puede ser 'publicar', 'revisar' o 'ignorar'
        $this->estado                    = 'publicar';
        // Para el Organizador
        $this->categorias                = array('Índice de Competitividad Urbana', 'Empleo');
        $this->fuentes                   = array('IMCO', 'Encuesta Nacional de Ocupación y Empleo (ENOE) Microdatos');
        $this->regiones                  = array('Gómez Palacio');
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
            <td>31/12/2008</td>
            <td>$ 6,214.90</td>
            <td>IMCO</td>
            <td></td>
          </tr>
          <tr>
            <td>31/12/2009</td>
            <td>$ 6,346.57</td>
            <td>IMCO</td>
            <td></td>
          </tr>
          <tr>
            <td>31/12/2010</td>
            <td>$ 5,672.21</td>
            <td>IMCO</td>
            <td></td>
          </tr>
          <tr>
            <td>31/12/2011</td>
            <td>$ 5,475.57</td>
            <td>IMCO</td>
            <td></td>
          </tr>
          <tr>
            <td>31/12/2012</td>
            <td>$ 5,688.95</td>
            <td>IMCO</td>
            <td></td>
          </tr>
          <tr>
            <td>31/03/2015</td>
            <td>$ 5,319.43</td>
            <td>Encuesta Nacional de Ocupación y Empleo (ENOE) Microdatos</td>
            <td></td>
          </tr>
          <tr>
            <td>30/06/2015</td>
            <td>$ 5,252.37</td>
            <td>Encuesta Nacional de Ocupación y Empleo (ENOE) Microdatos</td>
            <td></td>
          </tr>
          <tr>
            <td>30/09/2015</td>
            <td>$ 5,627.16</td>
            <td>Encuesta Nacional de Ocupación y Empleo (ENOE) Microdatos</td>
            <td></td>
          </tr>
          <tr>
            <td>31/12/2015</td>
            <td>$ 5,479.11</td>
            <td>Encuesta Nacional de Ocupación y Empleo (ENOE) Microdatos</td>
            <td></td>
          </tr>
          <tr>
            <td>31/03/2016</td>
            <td>$ 5,148.37</td>
            <td>Encuesta Nacional de Ocupación y Empleo (ENOE) Microdatos</td>
            <td></td>
          </tr>
          <tr>
            <td>30/06/2016</td>
            <td>$ 5,893.86</td>
            <td>Encuesta Nacional de Ocupación y Empleo (ENOE) Microdatos</td>
            <td></td>
          </tr>
          <tr>
            <td>30/09/2016</td>
            <td>$ 5,698.27</td>
            <td>Encuesta Nacional de Ocupación y Empleo (ENOE) Microdatos</td>
            <td></td>
          </tr>
        </tbody>
      </table>
      <p><b>Unidad:</b> Pesos.</p>
      <h3>Observaciones</h3>
<p>Pesos de 2012.</p>

FINAL;
    } // seccion_datos_html

    /**
     * Sección Gráfica 1 HTML
     *
     * @return string Código HTML
     */
    protected function seccion_grafica_1_html() {
        return <<<FINAL
      <h3>Gráfica de Salario Promedio Mensual para Trabajadores de Tiempo Completo en Gómez Palacio con fuente IMCO</h3>
      <div id="graficaDatosImco" class="grafica"></div>
      <p><b>Unidad:</b> Pesos.</p>
      <h3>Observaciones</h3>
<p>Pesos de 2012.</p>

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
  if (typeof vargraficaDatosImco === 'undefined') {
    vargraficaDatosImco = Morris.Line({
      element: 'graficaDatosImco',
      data: [{ fecha: '2008-12-31', dato: 6214.90 },{ fecha: '2009-12-31', dato: 6346.57 },{ fecha: '2010-12-31', dato: 5672.21 },{ fecha: '2011-12-31', dato: 5475.57 },{ fecha: '2012-12-31', dato: 5688.95 }],
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
      <h3>Gráfica de Salario Promedio Mensual para Trabajadores de Tiempo Completo en Gómez Palacio con fuente Encuesta Nacional de Ocupación y Empleo (ENOE) Microdatos</h3>
      <div id="graficaDatosEncuestaNacionalDeOcupacionYEmpleoEnoeMicrodatos" class="grafica"></div>
      <p><b>Unidad:</b> Pesos.</p>
      <h3>Observaciones</h3>
<p>Pesos de 2012.</p>

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
  if (typeof vargraficaDatosEncuestaNacionalDeOcupacionYEmpleoEnoeMicrodatos === 'undefined') {
    vargraficaDatosEncuestaNacionalDeOcupacionYEmpleoEnoeMicrodatos = Morris.Line({
      element: 'graficaDatosEncuestaNacionalDeOcupacionYEmpleoEnoeMicrodatos',
      data: [{ fecha: '2015-03-31', dato: 5319.43 },{ fecha: '2015-06-30', dato: 5252.37 },{ fecha: '2015-09-30', dato: 5627.16 },{ fecha: '2015-12-31', dato: 5479.11 },{ fecha: '2016-03-31', dato: 5148.37 },{ fecha: '2016-06-30', dato: 5893.86 },{ fecha: '2016-09-30', dato: 5698.27 }],
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
      <h3>Gráfica con los últimos datos de Salario Promedio Mensual para Trabajadores de Tiempo Completo</h3>
      <div id="graficaOtrasRegiones" class="grafica"></div>
      <h3>Últimos datos de Salario Promedio Mensual para Trabajadores de Tiempo Completo</h3>
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
            <td>2016-09-30</td>
            <td>$ 6,282.40</td>
            <td>Encuesta Nacional de Ocupación y Empleo (ENOE) Microdatos</td>
            <td></td>
          </tr>
          <tr>
            <td>Gómez Palacio</td>
            <td>2016-09-30</td>
            <td>$ 5,698.27</td>
            <td>Encuesta Nacional de Ocupación y Empleo (ENOE) Microdatos</td>
            <td></td>
          </tr>
          <tr>
            <td>Lerdo</td>
            <td>2016-09-30</td>
            <td>$ 5,896.23</td>
            <td>Encuesta Nacional de Ocupación y Empleo (ENOE) Microdatos</td>
            <td></td>
          </tr>
          <tr>
            <td>Matamoros</td>
            <td>2016-09-30</td>
            <td>$ 4,872.94</td>
            <td>Encuesta Nacional de Ocupación y Empleo (ENOE) Microdatos</td>
            <td></td>
          </tr>
          <tr>
            <td>La Laguna</td>
            <td>2016-09-30</td>
            <td>$ 5,896.38</td>
            <td>Encuesta Nacional de Ocupación y Empleo (ENOE) Microdatos</td>
            <td></td>
          </tr>
          <tr>
            <td>Coahuila</td>
            <td>2016-09-30</td>
            <td>$ 7,063.56</td>
            <td>Encuesta Nacional de Ocupación y Empleo (ENOE) Microdatos</td>
            <td></td>
          </tr>
          <tr>
            <td>Durango</td>
            <td>2016-09-30</td>
            <td>$ 5,759.83</td>
            <td>Encuesta Nacional de Ocupación y Empleo (ENOE) Microdatos</td>
            <td></td>
          </tr>
          <tr>
            <td>Nacional</td>
            <td>2016-09-30</td>
            <td>$ 6,322.63</td>
            <td>Encuesta Nacional de Ocupación y Empleo (ENOE) Microdatos</td>
            <td></td>
          </tr>
        </tbody>
      </table>
      <p><b>Unidad:</b> Pesos.</p>
      <h3>Observaciones</h3>
<p>Pesos de 2012.</p>

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
      data: [{ region: 'Torreón', dato: 6282.40 },{ region: 'Gómez Palacio', dato: 5698.27 },{ region: 'Lerdo', dato: 5896.23 },{ region: 'Matamoros', dato: 4872.94 },{ region: 'La Laguna', dato: 5896.38 },{ region: 'Coahuila', dato: 7063.56 },{ region: 'Durango', dato: 5759.83 },{ region: 'Nacional', dato: 6322.63 }],
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

} // Clase EconomiaSalarioPromedioMensualParaTrabajadoresDeTiempoCompleto

?>
