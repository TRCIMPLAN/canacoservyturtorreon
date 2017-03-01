<?php
/**
 * TrcIMPLAN Sitio Web - SMIIndicadoresTorreon EconomiaNuevasEmpresas
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
 * Clase EconomiaNuevasEmpresas
 */
class EconomiaNuevasEmpresas extends \SMIBase\PublicacionWeb {

    protected $lenguetas;

    /**
     * Constructor
     */
    public function __construct() {
        // Título, autor y fecha
        $this->nombre                    = 'Nuevas Empresas en Torreón';
        $this->autor                     = 'Dirección de Investigación Estratégica';
        $this->fecha                     = '2015-02-09T08:43:29';
        // El nombre del archivo a crear
        $this->archivo                   = 'economia-nuevas-empresas';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion               = 'Número de nuevas empresas registradas en ventanilla universal en el periodo señalado.';
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
        $this->fuentes                   = array('Ventanilla Universal, Dirección de Desarrollo Económico del Municipio de Torreón');
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
            <td>31/01/2009</td>
            <td>71</td>
            <td>Ventanilla Universal, Dirección de Desarrollo Económico del Municipio de Torreón</td>
            <td></td>
          </tr>
          <tr>
            <td>28/02/2009</td>
            <td>77</td>
            <td>Ventanilla Universal, Dirección de Desarrollo Económico del Municipio de Torreón</td>
            <td></td>
          </tr>
          <tr>
            <td>31/03/2009</td>
            <td>95</td>
            <td>Ventanilla Universal, Dirección de Desarrollo Económico del Municipio de Torreón</td>
            <td></td>
          </tr>
          <tr>
            <td>30/04/2009</td>
            <td>66</td>
            <td>Ventanilla Universal, Dirección de Desarrollo Económico del Municipio de Torreón</td>
            <td></td>
          </tr>
          <tr>
            <td>31/05/2009</td>
            <td>60</td>
            <td>Ventanilla Universal, Dirección de Desarrollo Económico del Municipio de Torreón</td>
            <td></td>
          </tr>
          <tr>
            <td>30/06/2009</td>
            <td>99</td>
            <td>Ventanilla Universal, Dirección de Desarrollo Económico del Municipio de Torreón</td>
            <td></td>
          </tr>
          <tr>
            <td>31/07/2009</td>
            <td>93</td>
            <td>Ventanilla Universal, Dirección de Desarrollo Económico del Municipio de Torreón</td>
            <td></td>
          </tr>
          <tr>
            <td>31/08/2009</td>
            <td>93</td>
            <td>Ventanilla Universal, Dirección de Desarrollo Económico del Municipio de Torreón</td>
            <td></td>
          </tr>
          <tr>
            <td>30/09/2009</td>
            <td>139</td>
            <td>Ventanilla Universal, Dirección de Desarrollo Económico del Municipio de Torreón</td>
            <td></td>
          </tr>
          <tr>
            <td>31/10/2009</td>
            <td>87</td>
            <td>Ventanilla Universal, Dirección de Desarrollo Económico del Municipio de Torreón</td>
            <td></td>
          </tr>
          <tr>
            <td>30/11/2009</td>
            <td>73</td>
            <td>Ventanilla Universal, Dirección de Desarrollo Económico del Municipio de Torreón</td>
            <td></td>
          </tr>
          <tr>
            <td>31/12/2009</td>
            <td>25</td>
            <td>Ventanilla Universal, Dirección de Desarrollo Económico del Municipio de Torreón</td>
            <td></td>
          </tr>
          <tr>
            <td>31/01/2010</td>
            <td>58</td>
            <td>Ventanilla Universal, Dirección de Desarrollo Económico del Municipio de Torreón</td>
            <td></td>
          </tr>
          <tr>
            <td>28/02/2010</td>
            <td>137</td>
            <td>Ventanilla Universal, Dirección de Desarrollo Económico del Municipio de Torreón</td>
            <td></td>
          </tr>
          <tr>
            <td>31/03/2010</td>
            <td>144</td>
            <td>Ventanilla Universal, Dirección de Desarrollo Económico del Municipio de Torreón</td>
            <td></td>
          </tr>
          <tr>
            <td>30/04/2010</td>
            <td>126</td>
            <td>Ventanilla Universal, Dirección de Desarrollo Económico del Municipio de Torreón</td>
            <td></td>
          </tr>
          <tr>
            <td>31/05/2010</td>
            <td>111</td>
            <td>Ventanilla Universal, Dirección de Desarrollo Económico del Municipio de Torreón</td>
            <td></td>
          </tr>
          <tr>
            <td>30/06/2010</td>
            <td>77</td>
            <td>Ventanilla Universal, Dirección de Desarrollo Económico del Municipio de Torreón</td>
            <td></td>
          </tr>
          <tr>
            <td>31/07/2010</td>
            <td>91</td>
            <td>Ventanilla Universal, Dirección de Desarrollo Económico del Municipio de Torreón</td>
            <td></td>
          </tr>
          <tr>
            <td>31/08/2010</td>
            <td>113</td>
            <td>Ventanilla Universal, Dirección de Desarrollo Económico del Municipio de Torreón</td>
            <td></td>
          </tr>
          <tr>
            <td>30/09/2010</td>
            <td>77</td>
            <td>Ventanilla Universal, Dirección de Desarrollo Económico del Municipio de Torreón</td>
            <td></td>
          </tr>
          <tr>
            <td>31/10/2010</td>
            <td>86</td>
            <td>Ventanilla Universal, Dirección de Desarrollo Económico del Municipio de Torreón</td>
            <td></td>
          </tr>
          <tr>
            <td>30/11/2010</td>
            <td>73</td>
            <td>Ventanilla Universal, Dirección de Desarrollo Económico del Municipio de Torreón</td>
            <td></td>
          </tr>
          <tr>
            <td>31/12/2010</td>
            <td>52</td>
            <td>Ventanilla Universal, Dirección de Desarrollo Económico del Municipio de Torreón</td>
            <td></td>
          </tr>
          <tr>
            <td>31/01/2011</td>
            <td>88</td>
            <td>Ventanilla Universal, Dirección de Desarrollo Económico del Municipio de Torreón</td>
            <td></td>
          </tr>
          <tr>
            <td>28/02/2011</td>
            <td>152</td>
            <td>Ventanilla Universal, Dirección de Desarrollo Económico del Municipio de Torreón</td>
            <td></td>
          </tr>
          <tr>
            <td>31/03/2011</td>
            <td>127</td>
            <td>Ventanilla Universal, Dirección de Desarrollo Económico del Municipio de Torreón</td>
            <td></td>
          </tr>
          <tr>
            <td>30/04/2011</td>
            <td>98</td>
            <td>Ventanilla Universal, Dirección de Desarrollo Económico del Municipio de Torreón</td>
            <td></td>
          </tr>
          <tr>
            <td>31/05/2011</td>
            <td>128</td>
            <td>Ventanilla Universal, Dirección de Desarrollo Económico del Municipio de Torreón</td>
            <td></td>
          </tr>
          <tr>
            <td>30/06/2011</td>
            <td>136</td>
            <td>Ventanilla Universal, Dirección de Desarrollo Económico del Municipio de Torreón</td>
            <td></td>
          </tr>
          <tr>
            <td>31/07/2011</td>
            <td>85</td>
            <td>Ventanilla Universal, Dirección de Desarrollo Económico del Municipio de Torreón</td>
            <td></td>
          </tr>
          <tr>
            <td>31/08/2011</td>
            <td>108</td>
            <td>Ventanilla Universal, Dirección de Desarrollo Económico del Municipio de Torreón</td>
            <td></td>
          </tr>
          <tr>
            <td>30/09/2011</td>
            <td>129</td>
            <td>Ventanilla Universal, Dirección de Desarrollo Económico del Municipio de Torreón</td>
            <td></td>
          </tr>
          <tr>
            <td>31/10/2011</td>
            <td>188</td>
            <td>Ventanilla Universal, Dirección de Desarrollo Económico del Municipio de Torreón</td>
            <td></td>
          </tr>
          <tr>
            <td>30/11/2011</td>
            <td>165</td>
            <td>Ventanilla Universal, Dirección de Desarrollo Económico del Municipio de Torreón</td>
            <td></td>
          </tr>
          <tr>
            <td>31/12/2011</td>
            <td>90</td>
            <td>Ventanilla Universal, Dirección de Desarrollo Económico del Municipio de Torreón</td>
            <td></td>
          </tr>
          <tr>
            <td>31/01/2012</td>
            <td>89</td>
            <td>Ventanilla Universal, Dirección de Desarrollo Económico del Municipio de Torreón</td>
            <td></td>
          </tr>
          <tr>
            <td>29/02/2012</td>
            <td>135</td>
            <td>Ventanilla Universal, Dirección de Desarrollo Económico del Municipio de Torreón</td>
            <td></td>
          </tr>
          <tr>
            <td>31/03/2012</td>
            <td>206</td>
            <td>Ventanilla Universal, Dirección de Desarrollo Económico del Municipio de Torreón</td>
            <td></td>
          </tr>
          <tr>
            <td>30/04/2012</td>
            <td>187</td>
            <td>Ventanilla Universal, Dirección de Desarrollo Económico del Municipio de Torreón</td>
            <td></td>
          </tr>
          <tr>
            <td>31/05/2012</td>
            <td>182</td>
            <td>Ventanilla Universal, Dirección de Desarrollo Económico del Municipio de Torreón</td>
            <td></td>
          </tr>
          <tr>
            <td>30/06/2012</td>
            <td>161</td>
            <td>Ventanilla Universal, Dirección de Desarrollo Económico del Municipio de Torreón</td>
            <td></td>
          </tr>
          <tr>
            <td>31/07/2012</td>
            <td>122</td>
            <td>Ventanilla Universal, Dirección de Desarrollo Económico del Municipio de Torreón</td>
            <td></td>
          </tr>
          <tr>
            <td>31/08/2012</td>
            <td>96</td>
            <td>Ventanilla Universal, Dirección de Desarrollo Económico del Municipio de Torreón</td>
            <td></td>
          </tr>
          <tr>
            <td>30/09/2012</td>
            <td>74</td>
            <td>Ventanilla Universal, Dirección de Desarrollo Económico del Municipio de Torreón</td>
            <td></td>
          </tr>
          <tr>
            <td>31/10/2012</td>
            <td>113</td>
            <td>Ventanilla Universal, Dirección de Desarrollo Económico del Municipio de Torreón</td>
            <td></td>
          </tr>
          <tr>
            <td>30/11/2012</td>
            <td>99</td>
            <td>Ventanilla Universal, Dirección de Desarrollo Económico del Municipio de Torreón</td>
            <td></td>
          </tr>
          <tr>
            <td>31/12/2012</td>
            <td>36</td>
            <td>Ventanilla Universal, Dirección de Desarrollo Económico del Municipio de Torreón</td>
            <td></td>
          </tr>
          <tr>
            <td>31/01/2013</td>
            <td>71</td>
            <td>Ventanilla Universal, Dirección de Desarrollo Económico del Municipio de Torreón</td>
            <td></td>
          </tr>
          <tr>
            <td>28/02/2013</td>
            <td>117</td>
            <td>Ventanilla Universal, Dirección de Desarrollo Económico del Municipio de Torreón</td>
            <td></td>
          </tr>
          <tr>
            <td>31/03/2013</td>
            <td>121</td>
            <td>Ventanilla Universal, Dirección de Desarrollo Económico del Municipio de Torreón</td>
            <td></td>
          </tr>
          <tr>
            <td>30/04/2013</td>
            <td>122</td>
            <td>Ventanilla Universal, Dirección de Desarrollo Económico del Municipio de Torreón</td>
            <td></td>
          </tr>
          <tr>
            <td>31/05/2013</td>
            <td>147</td>
            <td>Ventanilla Universal, Dirección de Desarrollo Económico del Municipio de Torreón</td>
            <td></td>
          </tr>
          <tr>
            <td>30/06/2013</td>
            <td>112</td>
            <td>Ventanilla Universal, Dirección de Desarrollo Económico del Municipio de Torreón</td>
            <td></td>
          </tr>
          <tr>
            <td>31/07/2013</td>
            <td>121</td>
            <td>Ventanilla Universal, Dirección de Desarrollo Económico del Municipio de Torreón</td>
            <td></td>
          </tr>
          <tr>
            <td>31/08/2013</td>
            <td>146</td>
            <td>Ventanilla Universal, Dirección de Desarrollo Económico del Municipio de Torreón</td>
            <td></td>
          </tr>
          <tr>
            <td>30/09/2013</td>
            <td>165</td>
            <td>Ventanilla Universal, Dirección de Desarrollo Económico del Municipio de Torreón</td>
            <td></td>
          </tr>
          <tr>
            <td>31/10/2013</td>
            <td>132</td>
            <td>Ventanilla Universal, Dirección de Desarrollo Económico del Municipio de Torreón</td>
            <td></td>
          </tr>
          <tr>
            <td>30/11/2013</td>
            <td>92</td>
            <td>Ventanilla Universal, Dirección de Desarrollo Económico del Municipio de Torreón</td>
            <td></td>
          </tr>
          <tr>
            <td>31/12/2013</td>
            <td>37</td>
            <td>Ventanilla Universal, Dirección de Desarrollo Económico del Municipio de Torreón</td>
            <td></td>
          </tr>
          <tr>
            <td>31/01/2014</td>
            <td>53</td>
            <td>Ventanilla Universal, Dirección de Desarrollo Económico del Municipio de Torreón</td>
            <td></td>
          </tr>
          <tr>
            <td>28/02/2014</td>
            <td>101</td>
            <td>Ventanilla Universal, Dirección de Desarrollo Económico del Municipio de Torreón</td>
            <td></td>
          </tr>
          <tr>
            <td>31/03/2014</td>
            <td>112</td>
            <td>Ventanilla Universal, Dirección de Desarrollo Económico del Municipio de Torreón</td>
            <td></td>
          </tr>
          <tr>
            <td>30/04/2014</td>
            <td>98</td>
            <td>Ventanilla Universal, Dirección de Desarrollo Económico del Municipio de Torreón</td>
            <td></td>
          </tr>
          <tr>
            <td>31/05/2014</td>
            <td>121</td>
            <td>Ventanilla Universal, Dirección de Desarrollo Económico del Municipio de Torreón</td>
            <td></td>
          </tr>
          <tr>
            <td>30/06/2014</td>
            <td>94</td>
            <td>Ventanilla Universal, Dirección de Desarrollo Económico del Municipio de Torreón</td>
            <td></td>
          </tr>
          <tr>
            <td>31/07/2014</td>
            <td>327</td>
            <td>Ventanilla Universal, Dirección de Desarrollo Económico del Municipio de Torreón</td>
            <td></td>
          </tr>
          <tr>
            <td>31/08/2014</td>
            <td>362</td>
            <td>Ventanilla Universal, Dirección de Desarrollo Económico del Municipio de Torreón</td>
            <td></td>
          </tr>
          <tr>
            <td>30/09/2014</td>
            <td>334</td>
            <td>Ventanilla Universal, Dirección de Desarrollo Económico del Municipio de Torreón</td>
            <td></td>
          </tr>
          <tr>
            <td>31/10/2014</td>
            <td>297</td>
            <td>Ventanilla Universal, Dirección de Desarrollo Económico del Municipio de Torreón</td>
            <td></td>
          </tr>
          <tr>
            <td>30/11/2014</td>
            <td>230</td>
            <td>Ventanilla Universal, Dirección de Desarrollo Económico del Municipio de Torreón</td>
            <td></td>
          </tr>
          <tr>
            <td>31/12/2014</td>
            <td>102</td>
            <td>Ventanilla Universal, Dirección de Desarrollo Económico del Municipio de Torreón</td>
            <td></td>
          </tr>
          <tr>
            <td>31/01/2015</td>
            <td>123</td>
            <td>Ventanilla Universal, Dirección de Desarrollo Económico del Municipio de Torreón</td>
            <td></td>
          </tr>
          <tr>
            <td>28/02/2015</td>
            <td>152</td>
            <td>Ventanilla Universal, Dirección de Desarrollo Económico del Municipio de Torreón</td>
            <td></td>
          </tr>
          <tr>
            <td>31/03/2015</td>
            <td>269</td>
            <td>Ventanilla Universal, Dirección de Desarrollo Económico del Municipio de Torreón</td>
            <td></td>
          </tr>
          <tr>
            <td>30/04/2015</td>
            <td>203</td>
            <td>Ventanilla Universal, Dirección de Desarrollo Económico del Municipio de Torreón</td>
            <td></td>
          </tr>
          <tr>
            <td>31/05/2015</td>
            <td>196</td>
            <td>Ventanilla Universal, Dirección de Desarrollo Económico del Municipio de Torreón</td>
            <td></td>
          </tr>
          <tr>
            <td>30/06/2015</td>
            <td>204</td>
            <td>Ventanilla Universal, Dirección de Desarrollo Económico del Municipio de Torreón</td>
            <td></td>
          </tr>
          <tr>
            <td>31/07/2015</td>
            <td>252</td>
            <td>Ventanilla Universal, Dirección de Desarrollo Económico del Municipio de Torreón</td>
            <td></td>
          </tr>
          <tr>
            <td>31/08/2015</td>
            <td>204</td>
            <td>Ventanilla Universal, Dirección de Desarrollo Económico del Municipio de Torreón</td>
            <td></td>
          </tr>
          <tr>
            <td>30/09/2015</td>
            <td>218</td>
            <td>Ventanilla Universal, Dirección de Desarrollo Económico del Municipio de Torreón</td>
            <td></td>
          </tr>
          <tr>
            <td>31/10/2015</td>
            <td>234</td>
            <td>Ventanilla Universal, Dirección de Desarrollo Económico del Municipio de Torreón</td>
            <td></td>
          </tr>
          <tr>
            <td>30/11/2015</td>
            <td>184</td>
            <td>Ventanilla Universal, Dirección de Desarrollo Económico del Municipio de Torreón</td>
            <td></td>
          </tr>
          <tr>
            <td>31/12/2015</td>
            <td>84</td>
            <td>Ventanilla Universal, Dirección de Desarrollo Económico del Municipio de Torreón</td>
            <td></td>
          </tr>
          <tr>
            <td>31/01/2016</td>
            <td>127</td>
            <td>Ventanilla Universal, Dirección de Desarrollo Económico del Municipio de Torreón</td>
            <td></td>
          </tr>
          <tr>
            <td>29/02/2016</td>
            <td>223</td>
            <td>Ventanilla Universal, Dirección de Desarrollo Económico del Municipio de Torreón</td>
            <td></td>
          </tr>
          <tr>
            <td>31/03/2016</td>
            <td>210</td>
            <td>Ventanilla Universal, Dirección de Desarrollo Económico del Municipio de Torreón</td>
            <td></td>
          </tr>
          <tr>
            <td>30/04/2016</td>
            <td>233</td>
            <td>Ventanilla Universal, Dirección de Desarrollo Económico del Municipio de Torreón</td>
            <td></td>
          </tr>
          <tr>
            <td>31/05/2016</td>
            <td>221</td>
            <td>Ventanilla Universal, Dirección de Desarrollo Económico del Municipio de Torreón</td>
            <td></td>
          </tr>
          <tr>
            <td>30/06/2016</td>
            <td>208</td>
            <td>Ventanilla Universal, Dirección de Desarrollo Económico del Municipio de Torreón</td>
            <td></td>
          </tr>
          <tr>
            <td>31/07/2016</td>
            <td>166</td>
            <td>Ventanilla Universal, Dirección de Desarrollo Económico del Municipio de Torreón</td>
            <td></td>
          </tr>
          <tr>
            <td>31/08/2016</td>
            <td>183</td>
            <td>Ventanilla Universal, Dirección de Desarrollo Económico del Municipio de Torreón</td>
            <td></td>
          </tr>
          <tr>
            <td>30/09/2016</td>
            <td>165</td>
            <td>Ventanilla Universal, Dirección de Desarrollo Económico del Municipio de Torreón</td>
            <td></td>
          </tr>
        </tbody>
      </table>
      <p><b>Unidad:</b> Cantidad.</p>
FINAL;
    } // seccion_datos_html

    /**
     * Sección Gráfica HTML
     *
     * @return string Código HTML
     */
    protected function seccion_grafica_html() {
        return <<<FINAL
      <h3>Gráfica de Nuevas Empresas en Torreón</h3>
      <div id="graficaDatos" class="grafica"></div>
      <p><b>Unidad:</b> Cantidad.</p>
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
      data: [{ fecha: '2009-01-31', dato: 71 },{ fecha: '2009-02-28', dato: 77 },{ fecha: '2009-03-31', dato: 95 },{ fecha: '2009-04-30', dato: 66 },{ fecha: '2009-05-31', dato: 60 },{ fecha: '2009-06-30', dato: 99 },{ fecha: '2009-07-31', dato: 93 },{ fecha: '2009-08-31', dato: 93 },{ fecha: '2009-09-30', dato: 139 },{ fecha: '2009-10-31', dato: 87 },{ fecha: '2009-11-30', dato: 73 },{ fecha: '2009-12-31', dato: 25 },{ fecha: '2010-01-31', dato: 58 },{ fecha: '2010-02-28', dato: 137 },{ fecha: '2010-03-31', dato: 144 },{ fecha: '2010-04-30', dato: 126 },{ fecha: '2010-05-31', dato: 111 },{ fecha: '2010-06-30', dato: 77 },{ fecha: '2010-07-31', dato: 91 },{ fecha: '2010-08-31', dato: 113 },{ fecha: '2010-09-30', dato: 77 },{ fecha: '2010-10-31', dato: 86 },{ fecha: '2010-11-30', dato: 73 },{ fecha: '2010-12-31', dato: 52 },{ fecha: '2011-01-31', dato: 88 },{ fecha: '2011-02-28', dato: 152 },{ fecha: '2011-03-31', dato: 127 },{ fecha: '2011-04-30', dato: 98 },{ fecha: '2011-05-31', dato: 128 },{ fecha: '2011-06-30', dato: 136 },{ fecha: '2011-07-31', dato: 85 },{ fecha: '2011-08-31', dato: 108 },{ fecha: '2011-09-30', dato: 129 },{ fecha: '2011-10-31', dato: 188 },{ fecha: '2011-11-30', dato: 165 },{ fecha: '2011-12-31', dato: 90 },{ fecha: '2012-01-31', dato: 89 },{ fecha: '2012-02-29', dato: 135 },{ fecha: '2012-03-31', dato: 206 },{ fecha: '2012-04-30', dato: 187 },{ fecha: '2012-05-31', dato: 182 },{ fecha: '2012-06-30', dato: 161 },{ fecha: '2012-07-31', dato: 122 },{ fecha: '2012-08-31', dato: 96 },{ fecha: '2012-09-30', dato: 74 },{ fecha: '2012-10-31', dato: 113 },{ fecha: '2012-11-30', dato: 99 },{ fecha: '2012-12-31', dato: 36 },{ fecha: '2013-01-31', dato: 71 },{ fecha: '2013-02-28', dato: 117 },{ fecha: '2013-03-31', dato: 121 },{ fecha: '2013-04-30', dato: 122 },{ fecha: '2013-05-31', dato: 147 },{ fecha: '2013-06-30', dato: 112 },{ fecha: '2013-07-31', dato: 121 },{ fecha: '2013-08-31', dato: 146 },{ fecha: '2013-09-30', dato: 165 },{ fecha: '2013-10-31', dato: 132 },{ fecha: '2013-11-30', dato: 92 },{ fecha: '2013-12-31', dato: 37 },{ fecha: '2014-01-31', dato: 53 },{ fecha: '2014-02-28', dato: 101 },{ fecha: '2014-03-31', dato: 112 },{ fecha: '2014-04-30', dato: 98 },{ fecha: '2014-05-31', dato: 121 },{ fecha: '2014-06-30', dato: 94 },{ fecha: '2014-07-31', dato: 327 },{ fecha: '2014-08-31', dato: 362 },{ fecha: '2014-09-30', dato: 334 },{ fecha: '2014-10-31', dato: 297 },{ fecha: '2014-11-30', dato: 230 },{ fecha: '2014-12-31', dato: 102 },{ fecha: '2015-01-31', dato: 123 },{ fecha: '2015-02-28', dato: 152 },{ fecha: '2015-03-31', dato: 269 },{ fecha: '2015-04-30', dato: 203 },{ fecha: '2015-05-31', dato: 196 },{ fecha: '2015-06-30', dato: 204 },{ fecha: '2015-07-31', dato: 252 },{ fecha: '2015-08-31', dato: 204 },{ fecha: '2015-09-30', dato: 218 },{ fecha: '2015-10-31', dato: 234 },{ fecha: '2015-11-30', dato: 184 },{ fecha: '2015-12-31', dato: 84 },{ fecha: '2016-01-31', dato: 127 },{ fecha: '2016-02-29', dato: 223 },{ fecha: '2016-03-31', dato: 210 },{ fecha: '2016-04-30', dato: 233 },{ fecha: '2016-05-31', dato: 221 },{ fecha: '2016-06-30', dato: 208 },{ fecha: '2016-07-31', dato: 166 },{ fecha: '2016-08-31', dato: 183 },{ fecha: '2016-09-30', dato: 165 }],
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
     * HTML
     *
     * @return string Código HTML
     */
    public function html() {
        // Ejecutar los métodos que alimentan cada lengüeta
        $this->lenguetas->agregar('smi-indicador-datos', 'Datos', $this->seccion_datos_html());
        $this->lenguetas->agregar('smi-indicador-grafica', 'Gráfica', $this->seccion_grafica_html());
        $this->lenguetas->agregar_javascript($this->seccion_grafica_javascript());
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

} // Clase EconomiaNuevasEmpresas

?>
