<?php
/**
 * TrcIMPLAN Sitio Web - SMIIndicadoresLerdo EconomiaTasaDeDesempleoAbierto
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
 * Clase EconomiaTasaDeDesempleoAbierto
 */
class EconomiaTasaDeDesempleoAbierto extends \SMIBase\PublicacionWeb {

    protected $lenguetas;

    /**
     * Constructor
     */
    public function __construct() {
        // Título, autor y fecha
        $this->nombre                    = 'Tasa de Desempleo Abierto en Lerdo';
        $this->autor                     = 'Dirección de Investigación Estratégica';
        $this->fecha                     = '2014-10-21T16:19:49';
        // El nombre del archivo a crear
        $this->archivo                   = 'economia-tasa-de-desempleo-abierto';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion               = 'Número total de desempleados entre la Población económicamente activa.';
        $this->claves                    = 'IMPLAN, Lerdo, Empleo';
        // Opción de navegación a poner como activa
        $this->nombre_menu               = 'Indicadores';
        // Banderas
        $this->poner_imagen_en_contenido = FALSE;
        $this->para_compartir            = TRUE;
        // El estado puede ser 'publicar', 'revisar' o 'ignorar'
        $this->estado                    = 'publicar';
        // Para el Organizador
        $this->categorias                = array('Empleo');
        $this->fuentes                   = array('INEGI', 'Encuesta Nacional de Ocupación y Empleo (ENOE) Microdatos', 'IMCO');
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
            <td>12/03/1990</td>
            <td>2.99 %</td>
            <td>INEGI</td>
            <td></td>
          </tr>
          <tr>
            <td>14/02/2000</td>
            <td>0.94 %</td>
            <td>INEGI</td>
            <td></td>
          </tr>
          <tr>
            <td>31/03/2005</td>
            <td>4.62 %</td>
            <td>Encuesta Nacional de Ocupación y Empleo (ENOE) Microdatos</td>
            <td></td>
          </tr>
          <tr>
            <td>30/06/2005</td>
            <td>1.47 %</td>
            <td>Encuesta Nacional de Ocupación y Empleo (ENOE) Microdatos</td>
            <td></td>
          </tr>
          <tr>
            <td>30/09/2005</td>
            <td>3.65 %</td>
            <td>Encuesta Nacional de Ocupación y Empleo (ENOE) Microdatos</td>
            <td></td>
          </tr>
          <tr>
            <td>31/12/2005</td>
            <td>3.03 %</td>
            <td>Encuesta Nacional de Ocupación y Empleo (ENOE) Microdatos</td>
            <td></td>
          </tr>
          <tr>
            <td>31/03/2006</td>
            <td>3.42 %</td>
            <td>Encuesta Nacional de Ocupación y Empleo (ENOE) Microdatos</td>
            <td></td>
          </tr>
          <tr>
            <td>30/06/2006</td>
            <td>6.47 %</td>
            <td>Encuesta Nacional de Ocupación y Empleo (ENOE) Microdatos</td>
            <td></td>
          </tr>
          <tr>
            <td>30/09/2006</td>
            <td>5.52 %</td>
            <td>Encuesta Nacional de Ocupación y Empleo (ENOE) Microdatos</td>
            <td></td>
          </tr>
          <tr>
            <td>30/12/2006</td>
            <td>7.97 %</td>
            <td>Encuesta Nacional de Ocupación y Empleo (ENOE) Microdatos</td>
            <td></td>
          </tr>
          <tr>
            <td>31/03/2007</td>
            <td>7.69 %</td>
            <td>Encuesta Nacional de Ocupación y Empleo (ENOE) Microdatos</td>
            <td></td>
          </tr>
          <tr>
            <td>30/06/2007</td>
            <td>1.48 %</td>
            <td>Encuesta Nacional de Ocupación y Empleo (ENOE) Microdatos</td>
            <td></td>
          </tr>
          <tr>
            <td>30/09/2007</td>
            <td>3.76 %</td>
            <td>Encuesta Nacional de Ocupación y Empleo (ENOE) Microdatos</td>
            <td></td>
          </tr>
          <tr>
            <td>31/12/2007</td>
            <td>4.00 %</td>
            <td>Encuesta Nacional de Ocupación y Empleo (ENOE) Microdatos</td>
            <td></td>
          </tr>
          <tr>
            <td>31/03/2008</td>
            <td>5.37 %</td>
            <td>Encuesta Nacional de Ocupación y Empleo (ENOE) Microdatos</td>
            <td></td>
          </tr>
          <tr>
            <td>30/06/2008</td>
            <td>2.84 %</td>
            <td>Encuesta Nacional de Ocupación y Empleo (ENOE) Microdatos</td>
            <td></td>
          </tr>
          <tr>
            <td>30/09/2008</td>
            <td>1.54 %</td>
            <td>Encuesta Nacional de Ocupación y Empleo (ENOE) Microdatos</td>
            <td></td>
          </tr>
          <tr>
            <td>31/12/2008</td>
            <td>1.17 %</td>
            <td>IMCO</td>
            <td></td>
          </tr>
          <tr>
            <td>31/12/2008</td>
            <td>3.70 %</td>
            <td>Encuesta Nacional de Ocupación y Empleo (ENOE) Microdatos</td>
            <td></td>
          </tr>
          <tr>
            <td>31/03/2009</td>
            <td>7.32 %</td>
            <td>Encuesta Nacional de Ocupación y Empleo (ENOE) Microdatos</td>
            <td></td>
          </tr>
          <tr>
            <td>30/06/2009</td>
            <td>6.56 %</td>
            <td>Encuesta Nacional de Ocupación y Empleo (ENOE) Microdatos</td>
            <td></td>
          </tr>
          <tr>
            <td>30/09/2009</td>
            <td>9.09 %</td>
            <td>Encuesta Nacional de Ocupación y Empleo (ENOE) Microdatos</td>
            <td></td>
          </tr>
          <tr>
            <td>31/12/2009</td>
            <td>7.20 %</td>
            <td>IMCO</td>
            <td></td>
          </tr>
          <tr>
            <td>31/12/2009</td>
            <td>10.00 %</td>
            <td>Encuesta Nacional de Ocupación y Empleo (ENOE) Microdatos</td>
            <td></td>
          </tr>
          <tr>
            <td>31/03/2010</td>
            <td>5.88 %</td>
            <td>Encuesta Nacional de Ocupación y Empleo (ENOE) Microdatos</td>
            <td></td>
          </tr>
          <tr>
            <td>25/06/2010</td>
            <td>7.41 %</td>
            <td>INEGI</td>
            <td></td>
          </tr>
          <tr>
            <td>30/06/2010</td>
            <td>3.91 %</td>
            <td>Encuesta Nacional de Ocupación y Empleo (ENOE) Microdatos</td>
            <td></td>
          </tr>
          <tr>
            <td>30/09/2010</td>
            <td>5.51 %</td>
            <td>Encuesta Nacional de Ocupación y Empleo (ENOE) Microdatos</td>
            <td></td>
          </tr>
          <tr>
            <td>31/12/2010</td>
            <td>5.88 %</td>
            <td>IMCO</td>
            <td></td>
          </tr>
          <tr>
            <td>31/12/2010</td>
            <td>7.81 %</td>
            <td>Encuesta Nacional de Ocupación y Empleo (ENOE) Microdatos</td>
            <td></td>
          </tr>
          <tr>
            <td>31/03/2011</td>
            <td>4.20 %</td>
            <td>Encuesta Nacional de Ocupación y Empleo (ENOE) Microdatos</td>
            <td></td>
          </tr>
          <tr>
            <td>30/06/2011</td>
            <td>4.35 %</td>
            <td>Encuesta Nacional de Ocupación y Empleo (ENOE) Microdatos</td>
            <td></td>
          </tr>
          <tr>
            <td>30/09/2011</td>
            <td>8.39 %</td>
            <td>Encuesta Nacional de Ocupación y Empleo (ENOE) Microdatos</td>
            <td></td>
          </tr>
          <tr>
            <td>31/12/2011</td>
            <td>8.09 %</td>
            <td>IMCO</td>
            <td></td>
          </tr>
          <tr>
            <td>31/12/2011</td>
            <td>9.23 %</td>
            <td>Encuesta Nacional de Ocupación y Empleo (ENOE) Microdatos</td>
            <td></td>
          </tr>
          <tr>
            <td>31/03/2012</td>
            <td>6.98 %</td>
            <td>Encuesta Nacional de Ocupación y Empleo (ENOE) Microdatos</td>
            <td></td>
          </tr>
          <tr>
            <td>30/06/2012</td>
            <td>4.79 %</td>
            <td>Encuesta Nacional de Ocupación y Empleo (ENOE) Microdatos</td>
            <td></td>
          </tr>
          <tr>
            <td>30/09/2012</td>
            <td>3.76 %</td>
            <td>Encuesta Nacional de Ocupación y Empleo (ENOE) Microdatos</td>
            <td></td>
          </tr>
          <tr>
            <td>31/12/2012</td>
            <td>3.06 %</td>
            <td>IMCO</td>
            <td></td>
          </tr>
          <tr>
            <td>31/12/2012</td>
            <td>8.04 %</td>
            <td>Encuesta Nacional de Ocupación y Empleo (ENOE) Microdatos</td>
            <td></td>
          </tr>
          <tr>
            <td>31/03/2013</td>
            <td>7.78 %</td>
            <td>Encuesta Nacional de Ocupación y Empleo (ENOE) Microdatos</td>
            <td></td>
          </tr>
          <tr>
            <td>30/06/2013</td>
            <td>5.22 %</td>
            <td>Encuesta Nacional de Ocupación y Empleo (ENOE) Microdatos</td>
            <td></td>
          </tr>
          <tr>
            <td>30/09/2013</td>
            <td>4.11 %</td>
            <td>Encuesta Nacional de Ocupación y Empleo (ENOE) Microdatos</td>
            <td></td>
          </tr>
          <tr>
            <td>31/12/2013</td>
            <td>2.80 %</td>
            <td>Encuesta Nacional de Ocupación y Empleo (ENOE) Microdatos</td>
            <td></td>
          </tr>
          <tr>
            <td>31/03/2014</td>
            <td>2.80 %</td>
            <td>Encuesta Nacional de Ocupación y Empleo (ENOE) Microdatos</td>
            <td></td>
          </tr>
          <tr>
            <td>30/06/2014</td>
            <td>1.67 %</td>
            <td>Encuesta Nacional de Ocupación y Empleo (ENOE) Microdatos</td>
            <td></td>
          </tr>
          <tr>
            <td>30/09/2014</td>
            <td>9.23 %</td>
            <td>Encuesta Nacional de Ocupación y Empleo (ENOE) Microdatos</td>
            <td></td>
          </tr>
          <tr>
            <td>31/12/2014</td>
            <td>3.70 %</td>
            <td>Encuesta Nacional de Ocupación y Empleo (ENOE) Microdatos</td>
            <td></td>
          </tr>
          <tr>
            <td>31/03/2015</td>
            <td>4.76 %</td>
            <td>Encuesta Nacional de Ocupación y Empleo (ENOE) Microdatos</td>
            <td></td>
          </tr>
          <tr>
            <td>30/06/2015</td>
            <td>8.33 %</td>
            <td>Encuesta Nacional de Ocupación y Empleo (ENOE) Microdatos</td>
            <td></td>
          </tr>
          <tr>
            <td>31/08/2015</td>
            <td>6.01 %</td>
            <td>INEGI</td>
            <td></td>
          </tr>
          <tr>
            <td>30/09/2015</td>
            <td>0.00 %</td>
            <td>Encuesta Nacional de Ocupación y Empleo (ENOE) Microdatos</td>
            <td></td>
          </tr>
          <tr>
            <td>31/12/2015</td>
            <td>0.00 %</td>
            <td>Encuesta Nacional de Ocupación y Empleo (ENOE) Microdatos</td>
            <td></td>
          </tr>
          <tr>
            <td>31/03/2016</td>
            <td>6.25 %</td>
            <td>Encuesta Nacional de Ocupación y Empleo (ENOE) Microdatos</td>
            <td></td>
          </tr>
          <tr>
            <td>30/06/2016</td>
            <td>11.54 %</td>
            <td>Encuesta Nacional de Ocupación y Empleo (ENOE) Microdatos</td>
            <td></td>
          </tr>
          <tr>
            <td>30/09/2016</td>
            <td>7.32 %</td>
            <td>Encuesta Nacional de Ocupación y Empleo (ENOE) Microdatos</td>
            <td></td>
          </tr>
        </tbody>
      </table>
      <p><b>Unidad:</b> Porcentaje.</p>
      <h3>Observaciones</h3>
<p>Media nacional del indicador:</p>

<ul>
<li>2010 = 3.72</li>
<li>2010 = 0.98%</li>
<li>1990 = 2.32%</li>
</ul>

<p>Datos obtenidos de <a href="http://www.inegi.org.mx/sistemas/consulta_resultados/iter2010.aspx?c=27329&amp;s=est">INEGI. Censos de población y vivienda</a></p>

<p>Media Nacional 2014:
1er. Trimestre: 4.80 %
2do. Trimestre: 4.90 %
3er. Trimestre: 5.20 %</p>

FINAL;
    } // seccion_datos_html

    /**
     * Sección Gráfica 1 HTML
     *
     * @return string Código HTML
     */
    protected function seccion_grafica_1_html() {
        return <<<FINAL
      <h3>Gráfica de Tasa de Desempleo Abierto en Lerdo con fuente INEGI</h3>
      <div id="graficaDatosInegi" class="grafica"></div>
      <p><b>Unidad:</b> Porcentaje.</p>
      <h3>Observaciones</h3>
<p>Media nacional del indicador:</p>

<ul>
<li>2010 = 3.72</li>
<li>2010 = 0.98%</li>
<li>1990 = 2.32%</li>
</ul>

<p>Datos obtenidos de <a href="http://www.inegi.org.mx/sistemas/consulta_resultados/iter2010.aspx?c=27329&amp;s=est">INEGI. Censos de población y vivienda</a></p>

<p>Media Nacional 2014:
1er. Trimestre: 4.80 %
2do. Trimestre: 4.90 %
3er. Trimestre: 5.20 %</p>

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
  if (typeof vargraficaDatosInegi === 'undefined') {
    vargraficaDatosInegi = Morris.Line({
      element: 'graficaDatosInegi',
      data: [{ fecha: '1990-03-12', dato: 2.9900 },{ fecha: '2000-02-14', dato: 0.9400 },{ fecha: '2010-06-25', dato: 7.4100 },{ fecha: '2015-08-31', dato: 6.0100 }],
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
      <h3>Gráfica de Tasa de Desempleo Abierto en Lerdo con fuente Encuesta Nacional de Ocupación y Empleo (ENOE) Microdatos</h3>
      <div id="graficaDatosEncuestaNacionalDeOcupacionYEmpleoEnoeMicrodatos" class="grafica"></div>
      <p><b>Unidad:</b> Porcentaje.</p>
      <h3>Observaciones</h3>
<p>Media nacional del indicador:</p>

<ul>
<li>2010 = 3.72</li>
<li>2010 = 0.98%</li>
<li>1990 = 2.32%</li>
</ul>

<p>Datos obtenidos de <a href="http://www.inegi.org.mx/sistemas/consulta_resultados/iter2010.aspx?c=27329&amp;s=est">INEGI. Censos de población y vivienda</a></p>

<p>Media Nacional 2014:
1er. Trimestre: 4.80 %
2do. Trimestre: 4.90 %
3er. Trimestre: 5.20 %</p>

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
      data: [{ fecha: '2005-03-31', dato: 4.6154 },{ fecha: '2005-06-30', dato: 1.4706 },{ fecha: '2005-09-30', dato: 3.6496 },{ fecha: '2005-12-31', dato: 3.0303 },{ fecha: '2006-03-31', dato: 3.4247 },{ fecha: '2006-06-30', dato: 6.4748 },{ fecha: '2006-09-30', dato: 5.5172 },{ fecha: '2006-12-30', dato: 7.9710 },{ fecha: '2007-03-31', dato: 7.6923 },{ fecha: '2007-06-30', dato: 1.4815 },{ fecha: '2007-09-30', dato: 3.7594 },{ fecha: '2007-12-31', dato: 4.0000 },{ fecha: '2008-03-31', dato: 5.3691 },{ fecha: '2008-06-30', dato: 2.8369 },{ fecha: '2008-09-30', dato: 1.5385 },{ fecha: '2008-12-31', dato: 3.7037 },{ fecha: '2009-03-31', dato: 7.3171 },{ fecha: '2009-06-30', dato: 6.5574 },{ fecha: '2009-09-30', dato: 9.0909 },{ fecha: '2009-12-31', dato: 10.0000 },{ fecha: '2010-03-31', dato: 5.8824 },{ fecha: '2010-06-30', dato: 3.9063 },{ fecha: '2010-09-30', dato: 5.5118 },{ fecha: '2010-12-31', dato: 7.8125 },{ fecha: '2011-03-31', dato: 4.2000 },{ fecha: '2011-06-30', dato: 4.3500 },{ fecha: '2011-09-30', dato: 8.3900 },{ fecha: '2011-12-31', dato: 9.2300 },{ fecha: '2012-03-31', dato: 6.9800 },{ fecha: '2012-06-30', dato: 4.7900 },{ fecha: '2012-09-30', dato: 3.7600 },{ fecha: '2012-12-31', dato: 8.0400 },{ fecha: '2013-03-31', dato: 7.7800 },{ fecha: '2013-06-30', dato: 5.2200 },{ fecha: '2013-09-30', dato: 4.1100 },{ fecha: '2013-12-31', dato: 2.8000 },{ fecha: '2014-03-31', dato: 2.8000 },{ fecha: '2014-06-30', dato: 1.6700 },{ fecha: '2014-09-30', dato: 9.2300 },{ fecha: '2014-12-31', dato: 3.7000 },{ fecha: '2015-03-31', dato: 4.7600 },{ fecha: '2015-06-30', dato: 8.3333 },{ fecha: '2015-09-30', dato: 0.0000 },{ fecha: '2015-12-31', dato: 0.0000 },{ fecha: '2016-03-31', dato: 6.2500 },{ fecha: '2016-06-30', dato: 11.5400 },{ fecha: '2016-09-30', dato: 7.3200 }],
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
     * Sección Gráfica 3 HTML
     *
     * @return string Código HTML
     */
    protected function seccion_grafica_3_html() {
        return <<<FINAL
      <h3>Gráfica de Tasa de Desempleo Abierto en Lerdo con fuente IMCO</h3>
      <div id="graficaDatosImco" class="grafica"></div>
      <p><b>Unidad:</b> Porcentaje.</p>
      <h3>Observaciones</h3>
<p>Media nacional del indicador:</p>

<ul>
<li>2010 = 3.72</li>
<li>2010 = 0.98%</li>
<li>1990 = 2.32%</li>
</ul>

<p>Datos obtenidos de <a href="http://www.inegi.org.mx/sistemas/consulta_resultados/iter2010.aspx?c=27329&amp;s=est">INEGI. Censos de población y vivienda</a></p>

<p>Media Nacional 2014:
1er. Trimestre: 4.80 %
2do. Trimestre: 4.90 %
3er. Trimestre: 5.20 %</p>

FINAL;
    } // seccion_grafica_html

    /**
     * Sección Gráfica 3 JavaScript
     *
     * @return string Código JavaScript
     */
    protected function seccion_grafica_3_javascript() {
        return <<<FINAL
  // Gráfica
  if (typeof vargraficaDatosImco === 'undefined') {
    vargraficaDatosImco = Morris.Line({
      element: 'graficaDatosImco',
      data: [{ fecha: '2008-12-31', dato: 1.1666 },{ fecha: '2009-12-31', dato: 7.1968 },{ fecha: '2010-12-31', dato: 5.8759 },{ fecha: '2011-12-31', dato: 8.0908 },{ fecha: '2012-12-31', dato: 3.0576 }],
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
      <h3>Gráfica con los últimos datos de Tasa de Desempleo Abierto</h3>
      <div id="graficaOtrasRegiones" class="grafica"></div>
      <h3>Últimos datos de Tasa de Desempleo Abierto</h3>
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
            <td>5.69 %</td>
            <td>Encuesta Nacional de Ocupación y Empleo (ENOE) Microdatos</td>
            <td></td>
          </tr>
          <tr>
            <td>Gómez Palacio</td>
            <td>2016-09-30</td>
            <td>6.88 %</td>
            <td>Encuesta Nacional de Ocupación y Empleo (ENOE) Microdatos</td>
            <td></td>
          </tr>
          <tr>
            <td>Lerdo</td>
            <td>2016-09-30</td>
            <td>7.32 %</td>
            <td>Encuesta Nacional de Ocupación y Empleo (ENOE) Microdatos</td>
            <td></td>
          </tr>
          <tr>
            <td>Matamoros</td>
            <td>2016-09-30</td>
            <td>2.17 %</td>
            <td>Encuesta Nacional de Ocupación y Empleo (ENOE) Microdatos</td>
            <td></td>
          </tr>
          <tr>
            <td>La Laguna</td>
            <td>2016-09-30</td>
            <td>5.75 %</td>
            <td>Encuesta Nacional de Ocupación y Empleo (ENOE) Microdatos</td>
            <td></td>
          </tr>
          <tr>
            <td>Coahuila</td>
            <td>2016-09-30</td>
            <td>4.43 %</td>
            <td>Encuesta Nacional de Ocupación y Empleo (ENOE) Microdatos</td>
            <td></td>
          </tr>
          <tr>
            <td>Durango</td>
            <td>2016-09-30</td>
            <td>4.90 %</td>
            <td>Encuesta Nacional de Ocupación y Empleo (ENOE) Microdatos</td>
            <td></td>
          </tr>
          <tr>
            <td>Nacional</td>
            <td>2016-09-30</td>
            <td>4.03 %</td>
            <td>Encuesta Nacional de Ocupación y Empleo (ENOE) Microdatos</td>
            <td></td>
          </tr>
        </tbody>
      </table>
      <p><b>Unidad:</b> Porcentaje.</p>
      <h3>Observaciones</h3>
<p>Media nacional del indicador:</p>

<ul>
<li>2010 = 3.72</li>
<li>2010 = 0.98%</li>
<li>1990 = 2.32%</li>
</ul>

<p>Datos obtenidos de <a href="http://www.inegi.org.mx/sistemas/consulta_resultados/iter2010.aspx?c=27329&amp;s=est">INEGI. Censos de población y vivienda</a></p>

<p>Media Nacional 2014:
1er. Trimestre: 4.80 %
2do. Trimestre: 4.90 %
3er. Trimestre: 5.20 %</p>

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
      data: [{ region: 'Torreón', dato: 5.6900 },{ region: 'Gómez Palacio', dato: 6.8800 },{ region: 'Lerdo', dato: 7.3200 },{ region: 'Matamoros', dato: 2.1700 },{ region: 'La Laguna', dato: 5.7500 },{ region: 'Coahuila', dato: 4.4300 },{ region: 'Durango', dato: 4.9000 },{ region: 'Nacional', dato: 4.0300 }],
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
        $this->lenguetas->agregar('smi-indicador-grafica-3', 'Gráfica 3', $this->seccion_grafica_3_html());
        $this->lenguetas->agregar_javascript($this->seccion_grafica_3_javascript());
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

} // Clase EconomiaTasaDeDesempleoAbierto

?>
