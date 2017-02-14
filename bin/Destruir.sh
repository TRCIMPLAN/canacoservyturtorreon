#!/bin/bash

#
# Plataforma de Conocimiento - Destruir
#
# Copyright (C) 2016 Guillermo Valdés Lozano <guivaloz@movimientolibre.com>
#
# This program is free software: you can redistribute it and/or modify
# it under the terms of the GNU General Public License as published by
# the Free Software Foundation, either version 3 of the License, or
# (at your option) any later version.
#
# This program is distributed in the hope that it will be useful,
# but WITHOUT ANY WARRANTY; without even the implied warranty of
# MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
# GNU General Public License for more details.
#
# You should have received a copy of the GNU General Public License
# along with this program.  If not, see <http://www.gnu.org/licenses/>.
#

# Constantes que definen los tipos de errores
EXITO=0
E_FATAL=99

# Constantes
SITIO_WEB_DIR="$HOME/Documentos/GitHub/TrcIMPLAN/canacoservyturtorreon"

# Definir directorios
declare -a DIRECTORIOS=(
    "blog"
    "contacto")

# Destruir
echo "[Destruir] Inicia..."
cd "$SITIO_WEB_DIR"
for DIRECTORIO in "${DIRECTORIOS[@]}"
do
    if [ -d "$DIRECTORIO" ]; then
        echo "  Eliminando archivos html en $DIRECTORIO"
        rm -f "$DIRECTORIO/*.html"
    else
        echo "  No existe $DIRECTORIO"
        exit $E_FATAL
    fi
done

# Mostrar mensaje de término
echo "[Destruir] Terminó."
exit $EXITO
