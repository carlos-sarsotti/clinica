

CREATE TABLE `acciones` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nro` int(11) NOT NULL,
  `tipo1` int(1) NOT NULL,
  `tipo` int(2) NOT NULL,
  `zona` int(2) NOT NULL,
  `expediente` int(11) NOT NULL,
  `dni` int(11) NOT NULL,
  `accion` varchar(250) NOT NULL,
  `texto` longtext NOT NULL,
  `fecha` datetime NOT NULL,
  `gestor` int(11) NOT NULL,
  `resp` int(11) NOT NULL,
  `leido` int(1) NOT NULL,
  KEY `id` (`id`),
  KEY `leido` (`leido`),
  KEY `resp` (`resp`)
) ENGINE=MyISAM AUTO_INCREMENT=1612 DEFAULT CHARSET=latin1;

# --------------------------------------------------------

#
# Estructura de tabla para la tabla `adh`
#

CREATE TABLE `adh` (
  `sist` char(3) DEFAULT NULL,
  `lega` varchar(20) DEFAULT NULL,
  `org_nomb` char(30) DEFAULT NULL,
  `nyap` varchar(25) NOT NULL,
  `nudo` int(11) DEFAULT NULL,
  `haaf` double(14,2) DEFAULT NULL,
  `cuot` double(10,2) DEFAULT NULL,
  `cate` char(2) DEFAULT NULL,
  `obs` char(40) DEFAULT NULL,
  `aaaa` smallint(6) DEFAULT NULL,
  `mm` tinyint(4) DEFAULT NULL,
  `fecha_alta` varchar(30) NOT NULL,
  `marca` varchar(1) NOT NULL,
  `marca2` varchar(30) NOT NULL,
  KEY `nyap` (`nyap`),
  KEY `nudo` (`nudo`),
  KEY `nudo_2` (`nudo`),
  KEY `aaaa` (`aaaa`),
  KEY `mm` (`mm`),
  KEY `aaaa_2` (`aaaa`),
  KEY `mm_2` (`mm`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

# --------------------------------------------------------

#
# Estructura de tabla para la tabla `adh2`
#

CREATE TABLE `adh2` (
  `sist` char(3) DEFAULT NULL,
  `lega` varchar(20) DEFAULT NULL,
  `org_nomb` char(30) DEFAULT NULL,
  `nyap` varchar(25) NOT NULL,
  `nudo` int(11) DEFAULT NULL,
  `haaf` double(14,2) DEFAULT NULL,
  `cuot` double(10,2) DEFAULT NULL,
  `cate` char(2) DEFAULT NULL,
  `obs` char(40) DEFAULT NULL,
  `aaaa` smallint(6) DEFAULT NULL,
  `mm` tinyint(4) DEFAULT NULL,
  `fecha_alta` varchar(30) NOT NULL,
  `marca` varchar(1) NOT NULL,
  `marca2` varchar(30) NOT NULL,
  KEY `nyap` (`nyap`),
  KEY `nudo` (`nudo`),
  KEY `nudo_2` (`nudo`),
  KEY `aaaa` (`aaaa`),
  KEY `mm` (`mm`),
  KEY `aaaa_2` (`aaaa`),
  KEY `mm_2` (`mm`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

# --------------------------------------------------------

#
# Estructura de tabla para la tabla `afilepe`
#

CREATE TABLE `afilepe` (
  `nudo` int(11) DEFAULT NULL,
  `nyap` varchar(28) NOT NULL DEFAULT '',
  `sist` char(3) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

# --------------------------------------------------------

#
# Estructura de tabla para la tabla `afilepe9495`
#

CREATE TABLE `afilepe9495` (
  `nudo` int(11) DEFAULT NULL,
  `nyap` varchar(28) NOT NULL DEFAULT '',
  `sist` char(3) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

# --------------------------------------------------------

#
# Estructura de tabla para la tabla `afiliados`
#

CREATE TABLE `afiliados` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `clave` varchar(25) NOT NULL,
  `tido` int(2) NOT NULL,
  `nudo` int(11) NOT NULL DEFAULT '0',
  `nyap` varchar(250) DEFAULT NULL,
  `sist` varchar(100) DEFAULT NULL,
  `pnyap` varchar(30) DEFAULT NULL,
  `provi` varchar(30) NOT NULL,
  `locali` varchar(250) NOT NULL,
  `calle` varchar(250) NOT NULL,
  `nume` varchar(50) NOT NULL,
  `codpos` varchar(15) NOT NULL,
  `resto` varchar(250) NOT NULL,
  `sexo` char(2) NOT NULL,
  `vive` int(1) NOT NULL,
  `estadociv` varchar(10) NOT NULL,
  `telef` varchar(100) NOT NULL,
  `celular` varchar(100) NOT NULL,
  `meil` varchar(250) NOT NULL,
  `tiponoti` int(2) NOT NULL,
  `fechanac` date NOT NULL,
  `fechafalle` date NOT NULL,
  `sucur` varchar(250) NOT NULL,
  `femodif` date NOT NULL,
  KEY `nyap` (`nyap`),
  KEY `id` (`id`),
  KEY `nudo` (`nudo`),
  KEY `clave` (`clave`)
) ENGINE=MyISAM AUTO_INCREMENT=291632 DEFAULT CHARSET=latin1;

# --------------------------------------------------------

#
# Estructura de tabla para la tabla `afiliados1`
#

CREATE TABLE `afiliados1` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `clave` varchar(25) NOT NULL,
  `tido` int(2) NOT NULL,
  `nudo` int(11) NOT NULL DEFAULT '0',
  `nyap` varchar(250) DEFAULT NULL,
  `sist` varchar(100) DEFAULT NULL,
  `pnyap` varchar(30) DEFAULT NULL,
  `provi` varchar(30) NOT NULL,
  `locali` varchar(250) NOT NULL,
  `calle` varchar(250) NOT NULL,
  `nume` varchar(50) NOT NULL,
  `codpos` varchar(15) NOT NULL,
  `resto` varchar(250) NOT NULL,
  `sexo` char(2) NOT NULL,
  `vive` int(1) NOT NULL,
  `estadociv` varchar(10) NOT NULL,
  `telef` varchar(100) NOT NULL,
  `celular` varchar(100) NOT NULL,
  `meil` varchar(250) NOT NULL,
  `tiponoti` int(2) NOT NULL,
  `fechanac` date NOT NULL,
  `fechafalle` date NOT NULL,
  `sucur` varchar(250) NOT NULL,
  `femodif` date NOT NULL,
  `vls` date NOT NULL,
  KEY `nyap` (`nyap`),
  KEY `id` (`id`),
  KEY `nudo` (`nudo`)
) ENGINE=MyISAM AUTO_INCREMENT=222607 DEFAULT CHARSET=latin1;

# --------------------------------------------------------

#
# Estructura de tabla para la tabla `afilmgs`
#

CREATE TABLE `afilmgs` (
  `nudo` int(11) DEFAULT NULL,
  `nyap` varchar(25) NOT NULL DEFAULT '',
  `sist` char(3) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

# --------------------------------------------------------

#
# Estructura de tabla para la tabla `afilssc`
#

CREATE TABLE `afilssc` (
  `nudo` int(11) DEFAULT NULL,
  `nyap` varchar(25) NOT NULL DEFAULT '',
  `sist` char(3) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

# --------------------------------------------------------

#
# Estructura de tabla para la tabla `afilsus`
#

CREATE TABLE `afilsus` (
  `nudo` int(11) DEFAULT NULL,
  `nyap` varchar(25) NOT NULL DEFAULT '',
  `sist` char(3) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

# --------------------------------------------------------

#
# Estructura de tabla para la tabla `afilup`
#

CREATE TABLE `afilup` (
  `afil` int(11) NOT NULL DEFAULT '0',
  `digi` tinyint(4) DEFAULT NULL,
  `nyap` varchar(25) DEFAULT NULL,
  `tido` tinyint(4) DEFAULT NULL,
  `nudo` int(11) NOT NULL DEFAULT '0',
  `carg` tinyint(4) DEFAULT NULL,
  `aana` date DEFAULT NULL,
  `esta` tinyint(4) DEFAULT NULL,
  `sexo` char(1) DEFAULT NULL,
  `domi` varchar(20) DEFAULT NULL,
  `codi` varchar(4) DEFAULT NULL,
  `suco` char(2) DEFAULT NULL,
  `regi` char(1) DEFAULT NULL,
  `dpto` tinyint(4) DEFAULT NULL,
  `refe` tinyint(4) DEFAULT NULL,
  `sist` tinyint(4) DEFAULT NULL,
  `lote` char(2) DEFAULT NULL,
  `rest` varchar(20) DEFAULT NULL,
  `m1fil1` varchar(10) DEFAULT NULL,
  `cate` tinyint(4) DEFAULT NULL,
  `agru` tinyint(4) DEFAULT NULL,
  `repa` tinyint(4) DEFAULT NULL,
  `juri` tinyint(4) DEFAULT NULL,
  `bene` int(11) DEFAULT NULL,
  `fein` date DEFAULT NULL,
  `esca` tinyint(4) DEFAULT NULL,
  `fecgra` date DEFAULT NULL,
  `ultmo` char(1) DEFAULT NULL,
  `passw` char(1) DEFAULT NULL,
  `bloq` char(1) DEFAULT NULL,
  `coca` int(11) DEFAULT NULL,
  `nupu` int(11) DEFAULT NULL,
  `redo` varchar(10) DEFAULT NULL,
  `fedo` int(11) DEFAULT NULL,
  `tepa` int(11) DEFAULT NULL,
  `m1fil2` varchar(10) DEFAULT NULL,
  `teof` int(11) DEFAULT NULL,
  `mifil3` varchar(10) DEFAULT NULL,
  `tito` varchar(12) DEFAULT NULL,
  `bloqesp` char(3) DEFAULT NULL,
  `letran` char(1) DEFAULT NULL,
  `marca` char(3) DEFAULT NULL,
  `cerfil` varchar(36) DEFAULT NULL,
  `dptoa` varchar(16) DEFAULT NULL,
  `minisa` varchar(19) DEFAULT NULL,
  `nom1` varchar(30) DEFAULT NULL,
  `nom2` varchar(30) DEFAULT NULL,
  `nom3` varchar(30) DEFAULT NULL,
  `nom4` varchar(30) DEFAULT NULL,
  `nom5` varchar(30) DEFAULT NULL,
  `clave` varchar(27) DEFAULT NULL,
  `nudoch` varchar(8) DEFAULT NULL,
  `recha` int(11) DEFAULT NULL,
  UNIQUE KEY `afil` (`afil`),
  KEY `nyap` (`nyap`),
  KEY `nudo` (`nudo`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

# --------------------------------------------------------

#
# Estructura de tabla para la tabla `afilvls`
#

CREATE TABLE `afilvls` (
  `nudo` int(11) DEFAULT NULL,
  `nyap` varchar(25) NOT NULL DEFAULT '',
  `sist` char(3) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

# --------------------------------------------------------

#
# Estructura de tabla para la tabla `ajuste_user`
#

CREATE TABLE `ajuste_user` (
  `username` varchar(60) DEFAULT NULL,
  `pass` varchar(30) DEFAULT NULL,
  `nombre_ente` varchar(30) DEFAULT NULL,
  `contnudo` int(8) DEFAULT NULL,
  `estado` int(1) DEFAULT NULL,
  `sist` char(3) NOT NULL,
  `lote` char(2) NOT NULL,
  UNIQUE KEY `contnudo` (`contnudo`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

# --------------------------------------------------------

#
# Estructura de tabla para la tabla `articulos`
#

CREATE TABLE `articulos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `zona` tinyint(4) NOT NULL DEFAULT '0',
  `expe` int(11) NOT NULL DEFAULT '0',
  `coas` tinyint(4) NOT NULL DEFAULT '0',
  `asal` char(1) NOT NULL DEFAULT '',
  `nume` int(11) NOT NULL DEFAULT '0',
  `secu` tinyint(4) NOT NULL DEFAULT '0',
  `fechacur` date DEFAULT NULL,
  `tipotexto` int(2) NOT NULL,
  `texto` longtext,
  `quien` varchar(12) NOT NULL DEFAULT '',
  KEY `id` (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=13480 DEFAULT CHARSET=latin1;

# --------------------------------------------------------

#
# Estructura de tabla para la tabla `asl`
#

CREATE TABLE `asl` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `zona` int(2) NOT NULL,
  `expediente` int(11) NOT NULL,
  `fechaimpu` date NOT NULL,
  `cate` int(2) NOT NULL,
  `porc` double NOT NULL,
  `monto` double NOT NULL,
  KEY `id` (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;

# --------------------------------------------------------

#
# Estructura de tabla para la tabla `asunto`
#

CREATE TABLE `asunto` (
  `coas` varchar(2) DEFAULT NULL,
  `num_largo` char(25) DEFAULT NULL,
  `asunto` char(25) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

# --------------------------------------------------------

#
# Estructura de tabla para la tabla `beneficiariovi`
#

CREATE TABLE `beneficiariovi` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `dnipa` int(11) NOT NULL,
  `dni` int(11) NOT NULL,
  `vinculo` int(2) NOT NULL,
  `porc` double NOT NULL,
  `menor` int(2) NOT NULL,
  `fecha` datetime NOT NULL,
  KEY `id` (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=422 DEFAULT CHARSET=latin1;

# --------------------------------------------------------

#
# Estructura de tabla para la tabla `beneficiariovi_pm`
#

CREATE TABLE `beneficiariovi_pm` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `zona` int(2) NOT NULL,
  `expediente` int(11) NOT NULL,
  `dnipa` int(11) NOT NULL,
  `dni` int(11) NOT NULL,
  `vinculo` int(2) NOT NULL,
  `porc` double NOT NULL,
  `menor` varchar(25) DEFAULT NULL,
  `estadopago` int(1) NOT NULL,
  `textomenor` longtext NOT NULL,
  `obs` longtext NOT NULL,
  `fecha` datetime NOT NULL,
  KEY `id` (`id`),
  KEY `zona` (`zona`),
  KEY `expediente` (`expediente`),
  KEY `dni` (`dni`)
) ENGINE=MyISAM AUTO_INCREMENT=274 DEFAULT CHARSET=latin1;

# --------------------------------------------------------

#
# Estructura de tabla para la tabla `boleta`
#

CREATE TABLE `boleta` (
  `bzona` char(1) DEFAULT NULL,
  `bexpe` varchar(6) DEFAULT NULL,
  `baa` varchar(4) DEFAULT NULL,
  `bmm` char(2) DEFAULT NULL,
  `bdd` char(2) DEFAULT NULL,
  `bdocu` int(11) NOT NULL DEFAULT '0',
  `bnyap` varchar(30) NOT NULL DEFAULT '',
  `bcate` char(2) DEFAULT NULL,
  `bcodi` varchar(4) DEFAULT NULL,
  `bsuco` char(2) DEFAULT NULL,
  `bpcia` varchar(12) DEFAULT NULL,
  `bloca` varchar(25) DEFAULT NULL,
  `bcall` varchar(17) DEFAULT NULL,
  `bnume` varchar(5) DEFAULT NULL,
  `brest` varchar(10) DEFAULT NULL,
  `bsald` varchar(16) DEFAULT NULL,
  `bcomm` char(2) DEFAULT NULL,
  `guion` char(1) DEFAULT NULL,
  `bcoaa` char(2) DEFAULT NULL,
  `bnufa` varchar(8) DEFAULT NULL,
  `bimpo` varchar(14) DEFAULT NULL,
  `baave` char(2) DEFAULT NULL,
  `bmmve` char(2) DEFAULT NULL,
  `bddve` char(2) DEFAULT NULL,
  `bimpon` varchar(13) DEFAULT NULL,
  `bvenc` varchar(8) DEFAULT NULL,
  `barra` varchar(40) DEFAULT NULL,
  `bcuen` varchar(9) DEFAULT NULL,
  `wexpe` varchar(6) DEFAULT NULL,
  `secu` varchar(4) DEFAULT NULL,
  `codlink` varchar(19) DEFAULT NULL,
  KEY `bdocu` (`bdocu`),
  KEY `bnyap` (`bnyap`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

# --------------------------------------------------------

#
# Estructura de tabla para la tabla `categorias`
#

CREATE TABLE `categorias` (
  `cate` tinyint(2) NOT NULL,
  `f1` char(1) DEFAULT NULL,
  `desde` double(10,2) DEFAULT NULL,
  `f2` char(1) DEFAULT NULL,
  `hasta` double(10,2) DEFAULT NULL,
  `f3` char(1) DEFAULT NULL,
  `coef` float(8,4) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

# --------------------------------------------------------

#
# Estructura de tabla para la tabla `cod_gastos`
#

CREATE TABLE `cod_gastos` (
  `cod` int(2) NOT NULL,
  `quien` varchar(30) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

# --------------------------------------------------------

#
# Estructura de tabla para la tabla `cod_gastos2`
#

CREATE TABLE `cod_gastos2` (
  `codi` varchar(2) NOT NULL,
  `que` varchar(40) NOT NULL,
  PRIMARY KEY (`codi`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

# --------------------------------------------------------

#
# Estructura de tabla para la tabla `contame`
#

CREATE TABLE `contame` (
  `id` int(3) NOT NULL AUTO_INCREMENT,
  `cod` varchar(250) DEFAULT NULL,
  `pto` varchar(4) NOT NULL,
  `nro` int(8) NOT NULL,
  `hasta` int(10) NOT NULL,
  `critico` int(10) NOT NULL,
  `tipo` int(2) NOT NULL,
  `gestor` varchar(10) NOT NULL,
  `venccai` date NOT NULL,
  `codcai` varchar(50) NOT NULL,
  `soc` int(2) NOT NULL,
  `tipoform` int(2) NOT NULL,
  `asignado` varchar(150) NOT NULL,
  `uso` longtext NOT NULL,
  `fecha` datetime DEFAULT NULL,
  KEY `id` (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

# --------------------------------------------------------

#
# Estructura de tabla para la tabla `correoarg`
#

CREATE TABLE `correoarg` (
  `coarclie` char(8) DEFAULT NULL,
  `coarlote` char(10) DEFAULT NULL,
  `coaracue` char(8) DEFAULT NULL,
  `coarpieza` char(15) DEFAULT NULL,
  `coarcodent` char(5) DEFAULT NULL,
  `coarestent` char(30) DEFAULT NULL,
  `coarnyarec` char(30) DEFAULT NULL,
  `coarfechen` char(8) DEFAULT NULL,
  `coarhoraen` char(4) DEFAULT NULL,
  `coarcodpen` char(8) DEFAULT NULL,
  `coarlocaen` char(30) DEFAULT NULL,
  `coarzonaen` char(1) DEFAULT NULL,
  `coar1` char(20) DEFAULT NULL,
  `coar2` char(20) DEFAULT NULL,
  `coar3` char(20) DEFAULT NULL,
  `coar4` char(20) DEFAULT NULL,
  `coar5` char(20) DEFAULT NULL,
  `coar6` char(20) DEFAULT NULL,
  `coar7` char(20) DEFAULT NULL,
  `coar8` char(20) DEFAULT NULL,
  `coar9` char(20) DEFAULT NULL,
  `coarnos` char(255) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

# --------------------------------------------------------

#
# Estructura de tabla para la tabla `correosacum`
#

CREATE TABLE `correosacum` (
  `fedesde` date DEFAULT NULL,
  `fehasta` date DEFAULT NULL,
  `nudo` int(11) DEFAULT NULL,
  `nyap` varchar(25) NOT NULL DEFAULT '',
  `zona` tinyint(4) DEFAULT NULL,
  `expe` int(11) NOT NULL DEFAULT '0',
  `asunto` varchar(38) DEFAULT NULL,
  `impo` double(15,2) DEFAULT NULL,
  `resol` int(11) DEFAULT NULL,
  `feresol` date DEFAULT NULL,
  `codpag` tinyint(4) DEFAULT NULL,
  `mepago` varchar(60) DEFAULT NULL,
  `dirbco` varchar(60) DEFAULT NULL,
  `meil` varchar(50) DEFAULT NULL,
  `nyapfall` varchar(25) DEFAULT NULL,
  `asal` char(1) NOT NULL,
  `imm` tinyint(4) NOT NULL,
  `iaaaa` int(11) NOT NULL,
  `fechaenv` date DEFAULT NULL,
  `horaenv` varchar(8) DEFAULT NULL,
  `secu` int(11) NOT NULL DEFAULT '0'
) ENGINE=MyISAM AUTO_INCREMENT=22090 DEFAULT CHARSET=latin1;

# --------------------------------------------------------

#
# Estructura de tabla para la tabla `cpaciu`
#

CREATE TABLE `cpaciu` (
  `id` int(11) NOT NULL DEFAULT '0',
  `nombre` varchar(250) NOT NULL DEFAULT '',
  `cp` int(6) NOT NULL DEFAULT '0',
  `prov` char(2) NOT NULL DEFAULT '0',
  KEY `prov` (`prov`),
  KEY `id` (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

# --------------------------------------------------------

#
# Estructura de tabla para la tabla `creditos_lote`
#

CREATE TABLE `creditos_lote` (
  `sist` char(3) NOT NULL,
  `lote` int(11) NOT NULL,
  `desclote` char(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

# --------------------------------------------------------

#
# Estructura de tabla para la tabla `cuentas`
#

CREATE TABLE `cuentas` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nudo` int(11) NOT NULL,
  `tido` tinyint(4) DEFAULT NULL,
  `tipompago` int(2) NOT NULL,
  `nyap` varchar(30) DEFAULT NULL,
  `sucu` char(5) DEFAULT NULL,
  `cuenta` varchar(10) DEFAULT NULL,
  `cbu` varchar(22) DEFAULT NULL,
  `fecarga` date DEFAULT NULL,
  `femodif` date DEFAULT NULL,
  `operalta` varchar(10) DEFAULT NULL,
  `opermodi` varchar(10) DEFAULT NULL,
  `tipo` int(2) NOT NULL,
  `cuilpres` varchar(2) NOT NULL,
  `cuilnudo` varchar(8) NOT NULL,
  `cuildigi` varchar(1) NOT NULL,
  KEY `nudo` (`nudo`),
  KEY `nyap` (`nyap`),
  KEY `id` (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=177345 DEFAULT CHARSET=latin1;

# --------------------------------------------------------

#
# Estructura de tabla para la tabla `cuotaaporte`
#

CREATE TABLE `cuotaaporte` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `fecha` date NOT NULL,
  `categoria` int(2) NOT NULL,
  `monto` double NOT NULL,
  `afiliados` int(11) NOT NULL,
  KEY `id` (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=20 DEFAULT CHARSET=latin1;

# --------------------------------------------------------

#
# Estructura de tabla para la tabla `cuotaseg`
#

CREATE TABLE `cuotaseg` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `fecha` date NOT NULL,
  `decreto` char(8) DEFAULT NULL,
  `fedecre` char(10) DEFAULT NULL,
  `fecuota` char(7) DEFAULT NULL,
  `primera` double(12,2) DEFAULT NULL,
  `segunda` double(12,2) DEFAULT NULL,
  `tercera` double(12,2) DEFAULT NULL,
  `cuarta` double(12,2) DEFAULT NULL,
  `quinta` double(12,2) DEFAULT NULL,
  `sexta` double(12,2) DEFAULT NULL,
  `septima` double(12,2) DEFAULT NULL,
  `octava` double(12,2) DEFAULT NULL,
  `novena` double(12,2) DEFAULT NULL,
  `decima` double(12,2) DEFAULT NULL,
  `decimapri` double(12,2) DEFAULT NULL,
  `decimaseg` double(12,2) DEFAULT NULL,
  KEY `fecuota` (`fecuota`),
  KEY `id` (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5428 DEFAULT CHARSET=latin1;

# --------------------------------------------------------

#
# Estructura de tabla para la tabla `declaracion_j`
#

CREATE TABLE `declaracion_j` (
  `id` int(11) NOT NULL DEFAULT '0',
  `zona` int(2) NOT NULL,
  `expediente` int(11) NOT NULL,
  `dnipa` int(11) NOT NULL,
  `dni` int(11) NOT NULL,
  `cuil` varchar(11) NOT NULL,
  `nyap` varchar(30) NOT NULL,
  `vinculo` int(2) NOT NULL,
  `textpadre` longtext NOT NULL,
  `textmadre` longtext NOT NULL,
  `textconyuge` longtext NOT NULL,
  `textconyugef` varchar(30) NOT NULL,
  `textdomiconyuf` varchar(40) NOT NULL,
  `textconviviente` longtext NOT NULL,
  `textconvivientef` varchar(30) NOT NULL,
  `textdomiconvif` varchar(40) NOT NULL,
  `texthijo` longtext NOT NULL,
  `textnieto` longtext NOT NULL,
  `textagrego` longtext NOT NULL,
  `textobs` longtext NOT NULL,
  `fechahora` datetime NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

# --------------------------------------------------------

#
# Estructura de tabla para la tabla `direci`
#

CREATE TABLE `direci` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nro` int(11) NOT NULL,
  `tiponoti` int(1) NOT NULL,
  `mail` varchar(250) NOT NULL,
  `celu` varchar(250) NOT NULL,
  `fecha` date NOT NULL,
  `aa` tinyint(4) DEFAULT NULL,
  `mm` tinyint(4) DEFAULT NULL,
  `dd` tinyint(4) DEFAULT NULL,
  `zona` tinyint(4) DEFAULT NULL,
  `expe` int(11) DEFAULT NULL,
  `donde` varchar(60) DEFAULT NULL,
  `codi` int(11) DEFAULT NULL,
  `calle` varchar(25) DEFAULT NULL,
  `nupu` char(6) DEFAULT NULL,
  `local` varchar(25) DEFAULT NULL,
  `provi` char(12) DEFAULT NULL,
  `psucur` char(6) DEFAULT NULL,
  `nyap` varchar(30) DEFAULT NULL,
  `coas` tinyint(4) DEFAULT NULL,
  `imes` tinyint(4) DEFAULT NULL,
  `iano` tinyint(4) DEFAULT NULL,
  `cheq` int(11) DEFAULT NULL,
  `menor` char(1) DEFAULT NULL,
  `avs` char(1) DEFAULT NULL,
  `transf` int(11) DEFAULT NULL,
  `sucu` varchar(5) DEFAULT NULL,
  `ctabanc` int(11) DEFAULT NULL,
  `ofic` tinyint(4) DEFAULT NULL,
  `nudo` int(11) DEFAULT NULL,
  `secu` tinyint(4) DEFAULT NULL,
  `pago` tinyint(4) DEFAULT NULL,
  `resol` int(11) DEFAULT NULL,
  `resosec` tinyint(4) DEFAULT NULL,
  `thora` tinyint(4) DEFAULT NULL,
  `tminu` tinyint(4) DEFAULT NULL,
  `tsegu` tinyint(4) DEFAULT NULL,
  `daa` int(11) DEFAULT NULL,
  `dmm` tinyint(4) DEFAULT NULL,
  `ddd` tinyint(4) DEFAULT NULL,
  `fechaar` date NOT NULL,
  `oblea` char(16) DEFAULT NULL,
  `maa` int(11) DEFAULT NULL,
  `mmm` tinyint(4) DEFAULT NULL,
  `mdd` tinyint(4) DEFAULT NULL,
  `notif` char(1) DEFAULT NULL,
  `morden` int(11) DEFAULT NULL,
  `origen` char(10) DEFAULT NULL,
  `pass` char(10) DEFAULT NULL,
  `clave` int(11) DEFAULT NULL,
  `quien` tinyint(4) DEFAULT NULL,
  `raa` int(11) DEFAULT NULL,
  `rmm` tinyint(4) DEFAULT NULL,
  `rdd` tinyint(4) DEFAULT NULL,
  `rhh` tinyint(4) DEFAULT NULL,
  `rmi` tinyint(4) DEFAULT NULL,
  `rnyap` varchar(25) DEFAULT NULL,
  `estado` int(1) NOT NULL,
  `texto` longtext NOT NULL,
  KEY `id` (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=307958 DEFAULT CHARSET=latin1;

# --------------------------------------------------------

#
# Estructura de tabla para la tabla `domicil`
#

CREATE TABLE `domicil` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `tido` int(2) NOT NULL,
  `nudo` int(11) NOT NULL DEFAULT '0',
  `nyap` varchar(250) DEFAULT NULL,
  `calle` varchar(250) DEFAULT NULL,
  `nume` varchar(6) DEFAULT NULL,
  `resto` varchar(59) DEFAULT NULL,
  `sexo` char(1) DEFAULT NULL,
  `vive` int(1) NOT NULL,
  `estadociv` varchar(10) NOT NULL,
  `telef` varchar(100) DEFAULT NULL,
  `celular` varchar(25) NOT NULL,
  `codpos` varchar(4) DEFAULT NULL,
  `suco` char(2) DEFAULT NULL,
  `locali` varchar(100) DEFAULT NULL,
  `provi` varchar(30) DEFAULT NULL,
  `provi1` varchar(30) NOT NULL,
  `locali1` varchar(250) NOT NULL,
  `calle1` varchar(250) NOT NULL,
  `nume1` varchar(15) NOT NULL,
  `codpos1` varchar(15) NOT NULL,
  `resto1` longtext NOT NULL,
  `sucur` varchar(6) DEFAULT NULL,
  `opera` varchar(10) DEFAULT NULL,
  `fecarga` date DEFAULT NULL,
  `operamod` varchar(10) DEFAULT NULL,
  `femodif` date DEFAULT NULL,
  `meil` varchar(50) DEFAULT NULL,
  `fechanac` date NOT NULL,
  `fechafalle` date NOT NULL,
  `tiponoti` int(2) NOT NULL,
  `tipompago` int(2) NOT NULL,
  `sucu` varchar(25) NOT NULL,
  `cuenta` varchar(25) NOT NULL,
  `cbu` varchar(25) NOT NULL,
  `val` int(1) NOT NULL,
  `cuil` varchar(11) NOT NULL,
  KEY `nudo` (`nudo`),
  KEY `nyap` (`nyap`),
  KEY `id` (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=114223 DEFAULT CHARSET=latin1;

# --------------------------------------------------------

#
# Estructura de tabla para la tabla `domicilsindni`
#

CREATE TABLE `domicilsindni` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `dnipa` int(11) NOT NULL,
  `vinculo` int(11) NOT NULL,
  `tido` int(2) NOT NULL,
  `nudo` int(11) NOT NULL DEFAULT '0',
  `nyap` varchar(250) DEFAULT NULL,
  `calle` varchar(250) DEFAULT NULL,
  `nume` varchar(6) DEFAULT NULL,
  `resto` varchar(59) DEFAULT NULL,
  `sexo` char(1) DEFAULT NULL,
  `vive` int(1) NOT NULL,
  `estadociv` varchar(10) NOT NULL,
  `telef` varchar(50) DEFAULT NULL,
  `celular` varchar(25) NOT NULL,
  `codpos` varchar(4) DEFAULT NULL,
  `suco` char(2) DEFAULT NULL,
  `locali` varchar(100) DEFAULT NULL,
  `provi` varchar(30) DEFAULT NULL,
  `sucur` varchar(6) DEFAULT NULL,
  `opera` varchar(10) DEFAULT NULL,
  `fecarga` date DEFAULT NULL,
  `operamod` varchar(10) DEFAULT NULL,
  `femodif` date DEFAULT NULL,
  `meil` varchar(50) DEFAULT NULL,
  `fechanac` date NOT NULL,
  `tiponoti` int(2) NOT NULL,
  `tipompago` int(2) NOT NULL,
  `sucu` varchar(25) NOT NULL,
  `cuenta` varchar(25) NOT NULL,
  `cbu` varchar(25) NOT NULL,
  KEY `nudo` (`nudo`),
  KEY `nyap` (`nyap`),
  KEY `id` (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=535 DEFAULT CHARSET=latin1;

# --------------------------------------------------------

#
# Estructura de tabla para la tabla `eme`
#

CREATE TABLE `eme` (
  `lote` char(2) DEFAULT NULL,
  `depe` char(3) DEFAULT NULL,
  `boca` varchar(6) DEFAULT NULL,
  `carg` char(2) DEFAULT NULL,
  `nudo` int(11) DEFAULT NULL,
  `tido` char(2) DEFAULT NULL,
  `cone` char(3) DEFAULT NULL,
  `digi` char(1) DEFAULT NULL,
  `sire` char(2) DEFAULT NULL,
  `esca` char(1) DEFAULT NULL,
  `agca` varchar(4) DEFAULT NULL,
  `nyap` varchar(25) NOT NULL DEFAULT '',
  `naci` char(2) DEFAULT NULL,
  `haaf` double(14,2) DEFAULT NULL,
  `cate` char(2) DEFAULT NULL,
  `cuot` double(10,2) DEFAULT NULL,
  `aping` double(12,2) DEFAULT NULL,
  `mmaa` varchar(4) DEFAULT NULL,
  `sexo` char(1) DEFAULT NULL,
  `prest` double(10,2) DEFAULT NULL,
  `sist` char(3) DEFAULT NULL,
  `fema` varchar(8) DEFAULT NULL,
  `aaaa` smallint(6) DEFAULT NULL,
  `mm` tinyint(4) DEFAULT NULL,
  KEY `nudo` (`nudo`),
  KEY `nyap` (`nyap`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

# --------------------------------------------------------

#
# Estructura de tabla para la tabla `envia_creditos`
#

CREATE TABLE `envia_creditos` (
  `num_ges` varchar(30) NOT NULL,
  `meil` varchar(50) NOT NULL,
  `marca1` varchar(1) NOT NULL,
  `marca2` varchar(1) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

# --------------------------------------------------------

#
# Estructura de tabla para la tabla `envia_unipersonales`
#

CREATE TABLE `envia_unipersonales` (
  `cuil` char(11) NOT NULL,
  `apellido` char(25) NOT NULL,
  `nombre` char(30) NOT NULL,
  `caract_te` char(5) NOT NULL,
  `nro_te` char(11) NOT NULL,
  `celular` char(15) NOT NULL,
  `calle` char(50) NOT NULL,
  `nro` char(6) NOT NULL,
  `piso` char(4) NOT NULL,
  `dpto` char(4) NOT NULL,
  `localidad` char(40) NOT NULL,
  `correo` char(60) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

# --------------------------------------------------------

#
# Estructura de tabla para la tabla `epe`
#

CREATE TABLE `epe` (
  `gere` tinyint(1) DEFAULT NULL,
  `aamm` varchar(4) DEFAULT NULL,
  `lega` varchar(5) DEFAULT NULL,
  `nyap` varchar(28) NOT NULL DEFAULT '',
  `tido` char(3) DEFAULT NULL,
  `nudo` int(11) DEFAULT NULL,
  `naci` varchar(6) DEFAULT NULL,
  `haaf` double(14,2) DEFAULT NULL,
  `sig1` char(1) DEFAULT NULL,
  `cuot` double(10,2) DEFAULT NULL,
  `sig2` char(1) DEFAULT NULL,
  `cate` char(2) DEFAULT NULL,
  `ddmmaa` varchar(6) DEFAULT NULL,
  `sire` char(1) DEFAULT NULL,
  `sucu` varchar(4) DEFAULT NULL,
  `cuenta` varchar(8) DEFAULT NULL,
  `mmaa` varchar(4) DEFAULT NULL,
  `sist` char(3) DEFAULT NULL,
  `aaaa` smallint(6) DEFAULT NULL,
  `mm` tinyint(4) DEFAULT NULL,
  `prest` double(10,2) DEFAULT NULL,
  `aping` double(12,2) DEFAULT NULL,
  `fecha` date NOT NULL,
  KEY `nudo` (`nudo`),
  KEY `nyap` (`nyap`),
  KEY `aaaa` (`aaaa`,`mm`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

# --------------------------------------------------------

#
# Estructura de tabla para la tabla `epe9495`
#

CREATE TABLE `epe9495` (
  `gere` tinyint(1) DEFAULT NULL,
  `aamm` varchar(4) DEFAULT NULL,
  `lega` varchar(5) DEFAULT NULL,
  `nyap` varchar(28) NOT NULL DEFAULT '',
  `tido` char(3) DEFAULT NULL,
  `nudo` int(11) DEFAULT NULL,
  `naci` varchar(6) DEFAULT NULL,
  `haaf` double(14,2) DEFAULT NULL,
  `sig1` char(1) DEFAULT NULL,
  `cuot` double(10,2) DEFAULT NULL,
  `sig2` char(1) DEFAULT NULL,
  `cate` char(2) DEFAULT NULL,
  `ddmmaa` varchar(6) DEFAULT NULL,
  `sire` char(1) DEFAULT NULL,
  `sucu` varchar(4) DEFAULT NULL,
  `cuenta` varchar(8) DEFAULT NULL,
  `mmaa` varchar(4) DEFAULT NULL,
  `sist` char(3) DEFAULT NULL,
  `aaaa` smallint(6) DEFAULT NULL,
  `mm` tinyint(4) DEFAULT NULL,
  `prest` double(10,2) DEFAULT NULL,
  `aping` double(12,2) DEFAULT NULL,
  KEY `nyap` (`nyap`),
  KEY `nudo` (`nudo`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

# --------------------------------------------------------

#
# Estructura de tabla para la tabla `escuelas`
#

CREATE TABLE `escuelas` (
  `escu` int(11) NOT NULL DEFAULT '0',
  `regi` char(2) DEFAULT NULL,
  `anex` tinyint(4) DEFAULT NULL,
  `t_esta` varchar(60) DEFAULT NULL,
  `nro` int(11) DEFAULT NULL,
  `nombre` varchar(70) DEFAULT NULL,
  `nodo` varchar(30) DEFAULT NULL,
  `centrex` varchar(15) DEFAULT NULL,
  `telef` varchar(15) DEFAULT NULL,
  `domi` varchar(50) DEFAULT NULL,
  `loca` varchar(30) DEFAULT NULL,
  `depto` varchar(25) DEFAULT NULL,
  KEY `escu` (`escu`),
  KEY `nombre` (`nombre`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

# --------------------------------------------------------

#
# Estructura de tabla para la tabla `estados`
#

CREATE TABLE `estados` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(250) NOT NULL,
  KEY `id` (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=31 DEFAULT CHARSET=latin1;

# --------------------------------------------------------

#
# Estructura de tabla para la tabla `estadosobre`
#

CREATE TABLE `estadosobre` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(250) NOT NULL,
  KEY `id` (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

# --------------------------------------------------------

#
# Estructura de tabla para la tabla `expconfirma`
#

CREATE TABLE `expconfirma` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `zona` int(2) NOT NULL,
  `expediente` int(11) NOT NULL,
  `dni` int(11) NOT NULL,
  `dnipa` int(11) NOT NULL,
  `gestor` int(11) NOT NULL,
  KEY `id` (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=35 DEFAULT CHARSET=latin1;

# --------------------------------------------------------

#
# Estructura de tabla para la tabla `expvinc`
#

CREATE TABLE `expvinc` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `zona` int(2) NOT NULL,
  `expediente` int(11) NOT NULL,
  `zona1` int(2) NOT NULL,
  `expediente1` int(11) NOT NULL,
  KEY `id` (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=29 DEFAULT CHARSET=latin1;

# --------------------------------------------------------

#
# Estructura de tabla para la tabla `falleafil`
#

CREATE TABLE `falleafil` (
  `nudo` int(11) NOT NULL DEFAULT '0',
  `nyap` varchar(30) NOT NULL DEFAULT '',
  `marca` char(1) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

# --------------------------------------------------------

#
# Estructura de tabla para la tabla `falleafiliados`
#

CREATE TABLE `falleafiliados` (
  `nudo` int(11) NOT NULL DEFAULT '0',
  `nyap` varchar(30) NOT NULL DEFAULT '',
  `fecdef` date DEFAULT NULL,
  `loca` char(3) DEFAULT NULL,
  `mesdef` varchar(6) DEFAULT NULL,
  `marca` char(1) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

# --------------------------------------------------------

#
# Estructura de tabla para la tabla `fechaajocuot`
#

CREATE TABLE `fechaajocuot` (
  `dda` int(11) NOT NULL DEFAULT '0',
  `mma` int(11) NOT NULL DEFAULT '0',
  `aaa` int(11) NOT NULL DEFAULT '0',
  `ddap` int(11) NOT NULL DEFAULT '0',
  `mmap` int(11) NOT NULL DEFAULT '0',
  `aaap` int(11) NOT NULL DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

# --------------------------------------------------------

#
# Estructura de tabla para la tabla `fechaanti`
#

CREATE TABLE `fechaanti` (
  `dda` int(11) NOT NULL DEFAULT '0',
  `mma` int(11) NOT NULL DEFAULT '0',
  `aaa` int(11) NOT NULL DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

# --------------------------------------------------------

#
# Estructura de tabla para la tabla `fechaimpu`
#

CREATE TABLE `fechaimpu` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `fecha` date NOT NULL,
  `estado` int(1) DEFAULT NULL,
  KEY `id` (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

# --------------------------------------------------------

#
# Estructura de tabla para la tabla `fechas`
#

CREATE TABLE `fechas` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `tipo` int(2) NOT NULL,
  `fecha` date NOT NULL,
  `fechai` date NOT NULL,
  KEY `id` (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

# --------------------------------------------------------

#
# Estructura de tabla para la tabla `fechasaldo`
#

CREATE TABLE `fechasaldo` (
  `dda` int(11) NOT NULL DEFAULT '0',
  `mma` int(11) NOT NULL DEFAULT '0',
  `aaa` int(11) NOT NULL DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

# --------------------------------------------------------

#
# Estructura de tabla para la tabla `fichas`
#

CREATE TABLE `fichas` (
  `nudo` int(11) NOT NULL DEFAULT '0',
  `tido` tinyint(4) DEFAULT NULL,
  `nyap` varchar(30) NOT NULL DEFAULT '',
  `res_jubi` varchar(20) DEFAULT NULL,
  `fres_jubi` int(11) DEFAULT NULL,
  `fnaci` int(11) DEFAULT NULL,
  `locnaci` varchar(20) DEFAULT NULL,
  `pronaci` varchar(20) DEFAULT NULL,
  `tipo_jub` varchar(40) DEFAULT NULL,
  `ult_empleo` varchar(60) DEFAULT NULL,
  `depos_nro` varchar(30) DEFAULT NULL,
  `fdepos_nro` int(11) DEFAULT NULL,
  `idepos_nro` double(15,2) DEFAULT NULL,
  `periodo` varchar(30) DEFAULT NULL,
  `f_inc_plan` int(11) DEFAULT NULL,
  `f_cese` int(11) DEFAULT NULL,
  `jubi_nro` varchar(10) DEFAULT NULL,
  `cla_sueldo` varchar(10) DEFAULT NULL,
  `circuncri` varchar(10) DEFAULT NULL,
  `observac1` varchar(60) DEFAULT NULL,
  `observac2` varchar(60) DEFAULT NULL,
  `operador` varchar(8) DEFAULT NULL,
  `fcarga` varchar(8) DEFAULT NULL,
  `observac3` varchar(60) DEFAULT NULL,
  `afiliado` char(2) DEFAULT NULL,
  KEY `nudo` (`nudo`),
  KEY `nyap` (`nyap`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

# --------------------------------------------------------

#
# Estructura de tabla para la tabla `formulariod`
#

CREATE TABLE `formulariod` (
  `nyap_f` varchar(250) DEFAULT NULL,
  `cuit_f` varchar(50) DEFAULT NULL,
  `dni_f` varchar(25) DEFAULT NULL,
  `ecivil_f` varchar(30) DEFAULT NULL,
  `sexo_f` char(2) DEFAULT NULL,
  `nacionalidad_f` varchar(250) DEFAULT NULL,
  `fechanac` varchar(20) DEFAULT NULL,
  `fechadef` varchar(20) DEFAULT NULL,
  `nyap_c` varchar(150) DEFAULT NULL,
  `ucargo_f` varchar(150) DEFAULT NULL,
  `nombre_h` varchar(250) DEFAULT NULL,
  `nyap_cvv` varchar(150) DEFAULT NULL,
  `repa_f` varchar(50) DEFAULT NULL,
  `direccion_f` varchar(250) DEFAULT NULL,
  `jubi_f` varchar(50) DEFAULT NULL,
  `cajao` varchar(15) DEFAULT NULL,
  `nyap_m` varchar(250) NOT NULL,
  `nyap_p` varchar(250) NOT NULL,
  `ante_f` varchar(2) NOT NULL,
  `nyap_s` varchar(150) NOT NULL,
  `dni_s` varchar(20) NOT NULL,
  `cuit_s` varchar(20) NOT NULL,
  `localidad` varchar(50) NOT NULL,
  `cp` varchar(10) NOT NULL,
  `dd` varchar(2) NOT NULL,
  `mm` varchar(20) NOT NULL,
  `aaaa` varchar(4) NOT NULL,
  `provincia` varchar(40) NOT NULL,
  `cod_t` varchar(6) NOT NULL,
  `telef` varchar(12) NOT NULL,
  `resol_j` varchar(20) NOT NULL,
  `fecha_r` varchar(15) NOT NULL,
  `fecha_c` varchar(15) NOT NULL,
  `suc` varchar(10) NOT NULL,
  `cuenta` varchar(20) NOT NULL,
  `correo_e` varchar(50) NOT NULL,
  KEY `pass` (`cuit_f`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

# --------------------------------------------------------

#
# Estructura de tabla para la tabla `genero`
#

CREATE TABLE `genero` (
  `id` varchar(1) DEFAULT NULL,
  `nombre` varchar(250) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

# --------------------------------------------------------

#
# Estructura de tabla para la tabla `informeliq`
#

CREATE TABLE `informeliq` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `zona` int(2) NOT NULL,
  `expediente` int(11) NOT NULL,
  `liquidacion` int(11) NOT NULL,
  `informe` int(11) NOT NULL,
  KEY `id` (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=176 DEFAULT CHARSET=latin1;

# --------------------------------------------------------

#
# Estructura de tabla para la tabla `informeplantilla`
#

CREATE TABLE `informeplantilla` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `zona` int(2) NOT NULL,
  `expediente` int(11) NOT NULL,
  `informe` int(11) NOT NULL,
  `plantilla` int(11) NOT NULL,
  KEY `id` (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

# --------------------------------------------------------

#
# Estructura de tabla para la tabla `informes`
#

CREATE TABLE `informes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `zona` int(11) NOT NULL,
  `expediente` int(11) NOT NULL,
  `nro` int(11) DEFAULT NULL,
  `texto` longtext NOT NULL,
  `fecha` datetime NOT NULL,
  `estado` int(1) NOT NULL,
  `gestor` int(11) NOT NULL,
  KEY `id` (`id`),
  KEY `zona` (`zona`),
  KEY `expediente` (`expediente`)
) ENGINE=MyISAM AUTO_INCREMENT=664 DEFAULT CHARSET=latin1;

# --------------------------------------------------------

#
# Estructura de tabla para la tabla `jub`
#

CREATE TABLE `jub` (
  `t` char(1) DEFAULT NULL,
  `nro_ju` int(11) DEFAULT NULL,
  `digi` char(1) DEFAULT NULL,
  `codi` int(11) DEFAULT NULL,
  `sucu` char(3) DEFAULT NULL,
  `nyap` varchar(23) NOT NULL DEFAULT '',
  `sector` varchar(10) DEFAULT NULL,
  `sex` tinyint(4) DEFAULT NULL,
  `nac` char(1) DEFAULT NULL,
  `estciv` varchar(4) DEFAULT NULL,
  `tido` tinyint(4) DEFAULT NULL,
  `nudo` int(11) DEFAULT NULL,
  `let` char(1) DEFAULT NULL,
  `ley` varchar(5) DEFAULT NULL,
  `aana` int(11) DEFAULT NULL,
  `mmna` tinyint(4) DEFAULT NULL,
  `ddna` tinyint(4) DEFAULT NULL,
  `ju_nro` int(11) DEFAULT NULL,
  `dig` char(1) DEFAULT NULL,
  `ci` char(1) DEFAULT NULL,
  `haaf` double(14,2) DEFAULT NULL,
  `cuot` double(10,2) DEFAULT NULL,
  `cate` char(2) DEFAULT NULL,
  `mmaa` varchar(4) DEFAULT NULL,
  `sist` char(3) DEFAULT NULL,
  `prest` double(12,2) DEFAULT NULL,
  `new` tinyint(4) DEFAULT NULL,
  `loca` varchar(30) DEFAULT NULL,
  `depto` varchar(16) DEFAULT NULL,
  `calle` varchar(19) DEFAULT NULL,
  `nume` varchar(6) DEFAULT NULL,
  `piso` char(2) DEFAULT NULL,
  `dto` varchar(4) DEFAULT NULL,
  `pcia` char(3) DEFAULT NULL,
  `codpos` varchar(4) DEFAULT NULL,
  `subpos` char(3) DEFAULT NULL,
  `suc` varchar(4) DEFAULT NULL,
  `cuenta` varchar(6) DEFAULT NULL,
  `dig2` char(2) DEFAULT NULL,
  `nada` char(1) DEFAULT NULL,
  `marco` tinyint(4) DEFAULT NULL,
  `femarca` date DEFAULT NULL,
  `ofic` char(2) DEFAULT NULL,
  `feincl` date DEFAULT NULL,
  `fepago` date DEFAULT NULL,
  `fecese` date DEFAULT NULL,
  `aaaa` smallint(6) DEFAULT NULL,
  `mm` tinyint(4) DEFAULT NULL,
  `sire` char(2) DEFAULT NULL,
  `aping` double(12,2) DEFAULT NULL,
  KEY `nudo` (`nudo`),
  KEY `nyap` (`nyap`),
  KEY `nro_ju` (`nro_ju`),
  KEY `aaaa` (`aaaa`,`mm`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

# --------------------------------------------------------

#
# Estructura de tabla para la tabla `jubsdes`
#

CREATE TABLE `jubsdes` (
  `t` char(1) DEFAULT NULL,
  `nro_ju` int(11) DEFAULT NULL,
  `digi` char(1) DEFAULT NULL,
  `codi` int(11) DEFAULT NULL,
  `sucu` char(3) DEFAULT NULL,
  `nyap` varchar(23) NOT NULL DEFAULT '',
  `sector` varchar(10) DEFAULT NULL,
  `sex` tinyint(4) DEFAULT NULL,
  `nac` char(1) DEFAULT NULL,
  `estciv` varchar(4) DEFAULT NULL,
  `tido` tinyint(4) DEFAULT NULL,
  `nudo` int(11) DEFAULT NULL,
  `let` char(1) DEFAULT NULL,
  `ley` varchar(5) DEFAULT NULL,
  `aana` int(11) DEFAULT NULL,
  `mmna` tinyint(4) DEFAULT NULL,
  `ddna` tinyint(4) DEFAULT NULL,
  `mmaa` varchar(4) DEFAULT NULL,
  `sist` char(3) DEFAULT NULL,
  `feincl` date DEFAULT NULL,
  `fepago` date DEFAULT NULL,
  `fecese` date DEFAULT NULL,
  `haaf` double(14,2) DEFAULT NULL,
  `aaaa` smallint(6) DEFAULT NULL,
  `mm` tinyint(4) DEFAULT NULL,
  `sire` char(2) DEFAULT NULL,
  `aping` double(12,2) DEFAULT NULL,
  `filler` double(14,2) DEFAULT NULL,
  `cuot` double(10,2) DEFAULT NULL,
  `prest` double(10,2) DEFAULT NULL,
  `cate` char(2) DEFAULT NULL,
  KEY `nyap` (`nyap`),
  KEY `nudo` (`nudo`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

# --------------------------------------------------------

#
# Estructura de tabla para la tabla `log`
#

CREATE TABLE `log` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user` varchar(10) NOT NULL DEFAULT '',
  `pag` varchar(250) NOT NULL DEFAULT '',
  `param` longtext NOT NULL,
  `fecha` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `ip` varchar(15) NOT NULL DEFAULT '',
  `session` varchar(32) NOT NULL,
  `resolucion` varchar(25) NOT NULL,
  `texto` longtext NOT NULL,
  KEY `id` (`id`),
  KEY `user` (`user`),
  KEY `fecha` (`fecha`)
) ENGINE=MyISAM AUTO_INCREMENT=13194195 DEFAULT CHARSET=latin1;

# --------------------------------------------------------

#
# Estructura de tabla para la tabla `mesa10`
#

CREATE TABLE `mesa10` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `sobre` int(11) NOT NULL,
  `secue` tinyint(4) DEFAULT NULL,
  `ultsec` tinyint(4) DEFAULT NULL,
  `zona` tinyint(4) DEFAULT NULL,
  `expe` int(11) DEFAULT NULL,
  `vinculo` int(2) NOT NULL,
  `tido` tinyint(4) DEFAULT NULL,
  `nudo` int(11) DEFAULT NULL,
  `bene` varchar(25) DEFAULT NULL,
  `calle` varchar(250) NOT NULL,
  `nume` varchar(15) NOT NULL,
  `resto` varchar(250) NOT NULL,
  `sexo` char(1) NOT NULL,
  `vive` int(1) NOT NULL,
  `estadociv` varchar(10) NOT NULL,
  `telef` varchar(50) NOT NULL,
  `celular` varchar(25) NOT NULL,
  `codpos` varchar(15) NOT NULL,
  `provi` varchar(10) NOT NULL,
  `meil` varchar(250) NOT NULL,
  `fechanac` date NOT NULL,
  `locali` varchar(250) NOT NULL,
  `pass` char(10) DEFAULT NULL,
  `nada` varchar(9) DEFAULT NULL,
  KEY `id` (`id`),
  KEY `sobre` (`sobre`)
) ENGINE=MyISAM AUTO_INCREMENT=28019 DEFAULT CHARSET=latin1;

# --------------------------------------------------------

#
# Estructura de tabla para la tabla `mesa11`
#

CREATE TABLE `mesa11` (
  `sobre` int(11) NOT NULL AUTO_INCREMENT,
  `nyap` varchar(25) DEFAULT NULL,
  `anac` int(11) DEFAULT NULL,
  `mnac` tinyint(4) DEFAULT NULL,
  `dnac` tinyint(4) DEFAULT NULL,
  `naci` tinyint(4) DEFAULT NULL,
  `tido` tinyint(4) DEFAULT NULL,
  `nudo` int(11) DEFAULT NULL,
  `nrofalle` varchar(25) NOT NULL,
  `sexo` char(1) DEFAULT NULL,
  `esci` char(1) DEFAULT NULL,
  `domi` varchar(30) DEFAULT NULL,
  `loca` char(20) DEFAULT NULL,
  `femi` date DEFAULT NULL,
  `frec` date DEFAULT NULL,
  `fbaja` date NOT NULL,
  `ccer` char(1) DEFAULT NULL,
  `ncer` varchar(20) DEFAULT NULL,
  `soant` int(11) DEFAULT NULL,
  `pass` char(10) DEFAULT NULL,
  `zona` tinyint(4) DEFAULT NULL,
  `expe` int(11) DEFAULT NULL,
  `cuaa` int(11) DEFAULT NULL,
  `cumm` tinyint(4) DEFAULT NULL,
  `cudd` tinyint(4) DEFAULT NULL,
  `obs` longtext NOT NULL,
  `estado` int(1) NOT NULL,
  UNIQUE KEY `sobre` (`sobre`),
  KEY `nyap` (`nyap`),
  KEY `nudo` (`nudo`),
  KEY `expe` (`expe`)
) ENGINE=MyISAM AUTO_INCREMENT=990009 DEFAULT CHARSET=latin1 PACK_KEYS=0;

# --------------------------------------------------------

#
# Estructura de tabla para la tabla `mesa19`
#

CREATE TABLE `mesa19` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `zona` tinyint(4) NOT NULL DEFAULT '0',
  `expe` int(11) NOT NULL DEFAULT '0',
  `coas` tinyint(4) NOT NULL DEFAULT '0',
  `asal` char(1) NOT NULL DEFAULT '',
  `nume` int(11) NOT NULL DEFAULT '0',
  `secu` tinyint(4) NOT NULL DEFAULT '0',
  `fechacur` date DEFAULT NULL,
  `cate` tinyint(4) DEFAULT NULL,
  `porc` tinyint(4) DEFAULT NULL,
  `decr` varchar(10) DEFAULT NULL,
  `iaa` tinyint(4) DEFAULT NULL,
  `imm` tinyint(4) DEFAULT NULL,
  `imporeca` double(14,2) DEFAULT NULL,
  `impoocho` double(14,2) DEFAULT NULL,
  `imponeto` double(14,2) DEFAULT NULL,
  `impoane` double(14,2) DEFAULT NULL,
  `impoajo` double(14,2) DEFAULT NULL,
  `impoactu` double(14,2) DEFAULT NULL,
  `porcdist` double(6,3) DEFAULT NULL,
  `nyap` varchar(30) DEFAULT NULL,
  `tido` tinyint(4) DEFAULT NULL,
  `nudo` int(11) DEFAULT NULL,
  `imposegu` double(14,2) DEFAULT NULL,
  `impoanti` double(14,2) DEFAULT NULL,
  `imposald` double(14,2) DEFAULT NULL,
  `menor` char(1) DEFAULT NULL,
  `como` tinyint(4) DEFAULT NULL,
  `cargada` tinyint(4) DEFAULT NULL,
  `fechaanti` date DEFAULT NULL,
  `dh` char(1) DEFAULT NULL,
  `nada` char(2) DEFAULT NULL,
  `desc5` tinyint(4) DEFAULT NULL,
  `moneda` tinyint(4) DEFAULT NULL,
  KEY `id` (`id`),
  KEY `zona` (`zona`),
  KEY `expe` (`expe`),
  KEY `nudo` (`nudo`)
) ENGINE=MyISAM AUTO_INCREMENT=250280 DEFAULT CHARSET=latin1;

# --------------------------------------------------------

#
# Estructura de tabla para la tabla `mesa19a`
#

CREATE TABLE `mesa19a` (
  `zona` tinyint(4) NOT NULL DEFAULT '0',
  `expe` int(11) NOT NULL DEFAULT '0',
  `coas` tinyint(4) NOT NULL DEFAULT '0',
  `asal` char(1) NOT NULL DEFAULT '',
  `nume` int(11) NOT NULL DEFAULT '0',
  `secu` tinyint(4) NOT NULL DEFAULT '0',
  `fechacur` date DEFAULT NULL,
  `cate` tinyint(4) DEFAULT NULL,
  `porc` tinyint(4) DEFAULT NULL,
  `decr` varchar(10) DEFAULT NULL,
  `iaa` tinyint(4) DEFAULT NULL,
  `imm` tinyint(4) DEFAULT NULL,
  `imporeca` double(14,2) DEFAULT NULL,
  `impoocho` double(14,2) DEFAULT NULL,
  `imponeto` double(14,2) DEFAULT NULL,
  `impoane` double(14,2) DEFAULT NULL,
  `impoajo` double(14,2) DEFAULT NULL,
  `impoactu` double(14,2) DEFAULT NULL,
  `porcdist` double(6,3) DEFAULT NULL,
  `nyap` varchar(30) DEFAULT NULL,
  `tido` tinyint(4) DEFAULT NULL,
  `nudo` int(11) DEFAULT NULL,
  `imposegu` double(14,2) DEFAULT NULL,
  `impoanti` double(14,2) DEFAULT NULL,
  `imposald` double(14,2) DEFAULT NULL,
  `menor` char(1) DEFAULT NULL,
  `como` tinyint(4) DEFAULT NULL,
  `cargada` tinyint(4) DEFAULT NULL,
  `fechaanti` date DEFAULT NULL,
  `dh` char(1) DEFAULT NULL,
  `nada` char(2) DEFAULT NULL,
  `desc5` tinyint(4) DEFAULT NULL,
  `moneda` tinyint(4) DEFAULT NULL,
  UNIQUE KEY `coas` (`coas`,`asal`,`nume`,`secu`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

# --------------------------------------------------------

#
# Estructura de tabla para la tabla `mesa19pru`
#

CREATE TABLE `mesa19pru` (
  `zona` tinyint(4) NOT NULL DEFAULT '0',
  `expe` int(11) NOT NULL DEFAULT '0',
  `coas` tinyint(4) NOT NULL DEFAULT '0',
  `asal` char(1) NOT NULL DEFAULT '',
  `nume` int(11) NOT NULL DEFAULT '0',
  `secu` tinyint(4) NOT NULL DEFAULT '0',
  `fechacur` date DEFAULT NULL,
  `cate` tinyint(4) DEFAULT NULL,
  `porc` tinyint(4) DEFAULT NULL,
  `decr` varchar(10) DEFAULT NULL,
  `iaa` tinyint(4) DEFAULT NULL,
  `imm` tinyint(4) DEFAULT NULL,
  `imporeca` double(14,2) DEFAULT NULL,
  `impoocho` double(14,2) DEFAULT NULL,
  `imponeto` double(14,2) DEFAULT NULL,
  `impoane` double(14,2) DEFAULT NULL,
  `impoajo` double(14,2) DEFAULT NULL,
  `impoactu` double(14,2) DEFAULT NULL,
  `porcdist` double(6,3) DEFAULT NULL,
  `nyap` varchar(30) DEFAULT NULL,
  `tido` tinyint(4) DEFAULT NULL,
  `nudo` int(11) DEFAULT NULL,
  `imposegu` double(14,2) DEFAULT NULL,
  `impoanti` double(14,2) DEFAULT NULL,
  `imposald` double(14,2) DEFAULT NULL,
  `menor` char(1) DEFAULT NULL,
  `como` tinyint(4) DEFAULT NULL,
  `cargada` tinyint(4) DEFAULT NULL,
  `fechaanti` date DEFAULT NULL,
  `dh` char(1) DEFAULT NULL,
  `nada` char(2) DEFAULT NULL,
  `desc5` tinyint(4) DEFAULT NULL,
  `moneda` tinyint(4) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

# --------------------------------------------------------

#
# Estructura de tabla para la tabla `mesa1t`
#

CREATE TABLE `mesa1t` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `zona` int(11) NOT NULL,
  `expe` int(11) NOT NULL,
  `nyap` varchar(30) NOT NULL,
  `tipo` tinyint(4) DEFAULT NULL,
  `nudo` int(11) DEFAULT NULL,
  `coas` tinyint(4) DEFAULT NULL,
  `asunto` varchar(27) DEFAULT NULL,
  `fechai` datetime DEFAULT NULL,
  `aaaa` int(11) DEFAULT NULL,
  `mm` tinyint(4) DEFAULT NULL,
  `dd` tinyint(4) DEFAULT NULL,
  `clas` int(11) DEFAULT NULL,
  `fechanac` date NOT NULL,
  `fechafalle` date NOT NULL,
  `empl` varchar(30) DEFAULT NULL,
  `repa` varchar(30) DEFAULT NULL,
  `sobr` int(11) DEFAULT NULL,
  `cate` tinyint(4) DEFAULT NULL,
  `porc` int(11) DEFAULT NULL,
  `decr` varchar(8) DEFAULT NULL,
  `suel` double(15,2) DEFAULT NULL,
  `fechaimpu` date NOT NULL,
  `imm` tinyint(4) DEFAULT NULL,
  `iaa` tinyint(4) DEFAULT NULL,
  `fechasaldo` date NOT NULL,
  `exa1` int(11) DEFAULT NULL,
  `coa1` tinyint(4) DEFAULT NULL,
  `exa2` int(11) DEFAULT NULL,
  `coa2` tinyint(4) DEFAULT NULL,
  `exa3` int(11) DEFAULT NULL,
  `coa3` tinyint(4) DEFAULT NULL,
  `ofant` tinyint(4) DEFAULT NULL,
  `aaan` tinyint(4) DEFAULT NULL,
  `mman` tinyint(4) DEFAULT NULL,
  `ddan` tinyint(4) DEFAULT NULL,
  `resol` int(11) DEFAULT NULL,
  `fechareso` date NOT NULL,
  `aare` int(11) DEFAULT NULL,
  `mmre` tinyint(4) DEFAULT NULL,
  `ddre` tinyint(4) DEFAULT NULL,
  `jubi` tinyint(4) DEFAULT NULL,
  `faaa` tinyint(4) DEFAULT NULL,
  `famm` tinyint(4) DEFAULT NULL,
  `sald` double(15,2) DEFAULT NULL,
  `ssald` char(1) DEFAULT NULL,
  `bene` double(15,2) DEFAULT NULL,
  `sbene` char(1) DEFAULT NULL,
  `coac` tinyint(4) DEFAULT NULL,
  `actu` double(15,2) DEFAULT NULL,
  `sactu` char(1) DEFAULT NULL,
  `ajo` double(15,2) DEFAULT NULL,
  `sajo` char(1) DEFAULT NULL,
  `ane` double(15,2) DEFAULT NULL,
  `sane` char(1) DEFAULT NULL,
  `regi` tinyint(4) DEFAULT NULL,
  `deneg` char(1) DEFAULT NULL,
  `mardoc` char(1) DEFAULT NULL,
  `mano` tinyint(4) DEFAULT NULL,
  `mmes` tinyint(4) DEFAULT NULL,
  `mdia` tinyint(4) DEFAULT NULL,
  `clave` char(7) DEFAULT NULL,
  `estado` int(3) NOT NULL,
  UNIQUE KEY `zona` (`zona`,`expe`),
  KEY `nyap` (`nyap`),
  KEY `nudo` (`nudo`),
  KEY `clave` (`clave`),
  KEY `id` (`id`),
  KEY `expe` (`expe`),
  KEY `estado` (`estado`),
  KEY `fechaimpu` (`fechaimpu`),
  KEY `cate` (`cate`),
  KEY `coas` (`coas`)
) ENGINE=MyISAM AUTO_INCREMENT=244234 DEFAULT CHARSET=latin1;

# --------------------------------------------------------

#
# Estructura de tabla para la tabla `mesa1ta`
#

CREATE TABLE `mesa1ta` (
  `id` int(11) NOT NULL DEFAULT '0',
  `zona` int(11) NOT NULL,
  `expe` int(11) NOT NULL,
  `nyap` varchar(30) NOT NULL,
  `tipo` tinyint(4) DEFAULT NULL,
  `nudo` int(11) DEFAULT NULL,
  `coas` tinyint(4) DEFAULT NULL,
  `asunto` varchar(27) DEFAULT NULL,
  `fechai` datetime DEFAULT NULL,
  `aaaa` int(11) DEFAULT NULL,
  `mm` tinyint(4) DEFAULT NULL,
  `dd` tinyint(4) DEFAULT NULL,
  `clas` int(11) DEFAULT NULL,
  `fechanac` date NOT NULL,
  `fechafalle` date NOT NULL,
  `empl` varchar(30) DEFAULT NULL,
  `repa` varchar(30) DEFAULT NULL,
  `sobr` int(11) DEFAULT NULL,
  `cate` tinyint(4) DEFAULT NULL,
  `porc` int(11) DEFAULT NULL,
  `decr` varchar(8) DEFAULT NULL,
  `suel` double(15,2) DEFAULT NULL,
  `fechaimpu` date NOT NULL,
  `imm` tinyint(4) DEFAULT NULL,
  `iaa` tinyint(4) DEFAULT NULL,
  `fechasaldo` date NOT NULL,
  `exa1` int(11) DEFAULT NULL,
  `coa1` tinyint(4) DEFAULT NULL,
  `exa2` int(11) DEFAULT NULL,
  `coa2` tinyint(4) DEFAULT NULL,
  `exa3` int(11) DEFAULT NULL,
  `coa3` tinyint(4) DEFAULT NULL,
  `ofant` tinyint(4) DEFAULT NULL,
  `aaan` tinyint(4) DEFAULT NULL,
  `mman` tinyint(4) DEFAULT NULL,
  `ddan` tinyint(4) DEFAULT NULL,
  `resol` int(11) DEFAULT NULL,
  `fechareso` date NOT NULL,
  `aare` int(11) DEFAULT NULL,
  `mmre` tinyint(4) DEFAULT NULL,
  `ddre` tinyint(4) DEFAULT NULL,
  `jubi` tinyint(4) DEFAULT NULL,
  `faaa` tinyint(4) DEFAULT NULL,
  `famm` tinyint(4) DEFAULT NULL,
  `sald` double(15,2) DEFAULT NULL,
  `ssald` char(1) DEFAULT NULL,
  `bene` double(15,2) DEFAULT NULL,
  `sbene` char(1) DEFAULT NULL,
  `coac` tinyint(4) DEFAULT NULL,
  `actu` double(15,2) DEFAULT NULL,
  `sactu` char(1) DEFAULT NULL,
  `ajo` double(15,2) DEFAULT NULL,
  `sajo` char(1) DEFAULT NULL,
  `ane` double(15,2) DEFAULT NULL,
  `sane` char(1) DEFAULT NULL,
  `regi` tinyint(4) DEFAULT NULL,
  `deneg` char(1) DEFAULT NULL,
  `mardoc` char(1) DEFAULT NULL,
  `mano` tinyint(4) DEFAULT NULL,
  `mmes` tinyint(4) DEFAULT NULL,
  `mdia` tinyint(4) DEFAULT NULL,
  `clave` char(7) DEFAULT NULL,
  `estado` int(3) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

# --------------------------------------------------------

#
# Estructura de tabla para la tabla `mesa2`
#

CREATE TABLE `mesa2` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `zona` tinyint(1) NOT NULL,
  `expe` int(6) NOT NULL,
  `aa` int(4) NOT NULL,
  `mm` tinyint(2) NOT NULL,
  `dd` tinyint(2) NOT NULL,
  `hh` tinyint(2) NOT NULL,
  `mi` tinyint(2) NOT NULL,
  `fecha` datetime NOT NULL,
  `ofic` tinyint(2) DEFAULT NULL,
  `bole` int(6) DEFAULT NULL,
  `estado` int(2) NOT NULL,
  KEY `id` (`id`),
  KEY `zona` (`zona`),
  KEY `expe` (`expe`),
  KEY `ofic` (`ofic`)
) ENGINE=MyISAM AUTO_INCREMENT=413657 DEFAULT CHARSET=latin1;

# --------------------------------------------------------

#
# Estructura de tabla para la tabla `mesa20`
#

CREATE TABLE `mesa20` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `tipo` int(2) NOT NULL,
  `zona` tinyint(4) NOT NULL,
  `expe` int(11) NOT NULL,
  `coas` tinyint(4) NOT NULL,
  `asal` char(1) NOT NULL,
  `nume` int(11) NOT NULL,
  `secu` tinyint(4) NOT NULL,
  `prescrip` char(1) DEFAULT NULL,
  `anedev` char(1) DEFAULT NULL,
  `aaaad` char(4) DEFAULT NULL,
  `mmd` char(2) DEFAULT NULL,
  `aaaah` char(4) DEFAULT NULL,
  `mmh` char(2) DEFAULT NULL,
  `cata` tinyint(4) DEFAULT NULL,
  `catb` tinyint(4) DEFAULT NULL,
  `catb1` int(2) NOT NULL,
  `catb2` int(2) NOT NULL,
  `afalle` tinyint(4) DEFAULT NULL,
  `monto` double NOT NULL,
  `art` varchar(25) NOT NULL,
  `resolucion` varchar(25) NOT NULL,
  `fecha` date NOT NULL,
  KEY `id` (`id`),
  KEY `zona` (`zona`),
  KEY `expe` (`expe`),
  KEY `coas` (`coas`),
  KEY `asal` (`asal`),
  KEY `nume` (`nume`)
) ENGINE=MyISAM AUTO_INCREMENT=20527 DEFAULT CHARSET=latin1 COMMENT='DEVOLUCION CUOTAS EN RESOLUCION';

# --------------------------------------------------------

#
# Estructura de tabla para la tabla `mesa20copy`
#

CREATE TABLE `mesa20copy` (
  `zona` tinyint(4) NOT NULL DEFAULT '0',
  `expe` int(11) NOT NULL DEFAULT '0',
  `coas` tinyint(4) NOT NULL DEFAULT '0',
  `asal` char(1) NOT NULL DEFAULT '',
  `nume` int(11) NOT NULL DEFAULT '0',
  `secu` tinyint(4) NOT NULL DEFAULT '0',
  `prescrip` char(1) DEFAULT NULL,
  `anedev` char(1) DEFAULT NULL,
  `aaaad` char(4) DEFAULT NULL,
  `mmd` char(2) DEFAULT NULL,
  `aaaah` char(4) DEFAULT NULL,
  `mmh` char(2) DEFAULT NULL,
  `cata` tinyint(4) DEFAULT NULL,
  `catb` tinyint(4) DEFAULT NULL,
  `afalle` tinyint(4) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

# --------------------------------------------------------

#
# Estructura de tabla para la tabla `mesa20tmp`
#

CREATE TABLE `mesa20tmp` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `tipo` int(2) NOT NULL,
  `zona` int(2) NOT NULL,
  `expediente` int(11) NOT NULL,
  `dni` int(11) NOT NULL,
  `fechad` date NOT NULL,
  `fechah` date NOT NULL,
  `cata` int(2) NOT NULL,
  `catb` int(2) DEFAULT NULL,
  `catb1` int(2) NOT NULL,
  `catb2` int(2) NOT NULL,
  `anedev` varchar(10) NOT NULL,
  `prescrip` varchar(15) NOT NULL,
  `afalle` int(1) NOT NULL,
  `monto` double NOT NULL,
  `art` varchar(25) NOT NULL,
  `resolucion` varchar(25) NOT NULL,
  `fecha` date NOT NULL,
  `gestor` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

# --------------------------------------------------------

#
# Estructura de tabla para la tabla `mesa21`
#

CREATE TABLE `mesa21` (
  `zona` tinyint(4) NOT NULL,
  `expe` int(11) NOT NULL,
  `nyap` varchar(30) DEFAULT NULL,
  `tipo` tinyint(4) DEFAULT NULL,
  `nudo` int(11) DEFAULT NULL,
  `resol` int(11) DEFAULT NULL,
  `feres` date DEFAULT NULL,
  `suel` double(15,2) DEFAULT NULL,
  `fealta` date DEFAULT NULL,
  `cate` tinyint(4) DEFAULT NULL,
  `deud` varchar(14) DEFAULT NULL,
  `sipa` char(1) DEFAULT NULL,
  `codi` smallint(6) DEFAULT NULL,
  `suco` tinyint(4) DEFAULT NULL,
  `pcia` varchar(12) DEFAULT NULL,
  `loca` varchar(25) DEFAULT NULL,
  `calle` varchar(17) DEFAULT NULL,
  `nume` int(11) DEFAULT NULL,
  `rest` varchar(10) DEFAULT NULL,
  `tele` varchar(10) DEFAULT NULL,
  `aacu` tinyint(4) DEFAULT NULL,
  `mmcu` tinyint(4) DEFAULT NULL,
  `aadepos` date DEFAULT NULL,
  `sald` double(15,2) DEFAULT NULL,
  `signo` char(1) DEFAULT NULL,
  `febaja` date DEFAULT NULL,
  `aaap` tinyint(4) DEFAULT NULL,
  `mmap` tinyint(4) DEFAULT NULL,
  `fecamcat` date DEFAULT NULL,
  `ulcu` double(15,2) DEFAULT NULL,
  UNIQUE KEY `zona` (`zona`,`expe`),
  KEY `nyap` (`nyap`),
  KEY `nudo` (`nudo`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COMMENT='CESANTES';

# --------------------------------------------------------

#
# Estructura de tabla para la tabla `mesa21cop`
#

CREATE TABLE `mesa21cop` (
  `zona` tinyint(4) NOT NULL,
  `expe` int(11) NOT NULL,
  `nyap` varchar(30) DEFAULT NULL,
  `tipo` tinyint(4) DEFAULT NULL,
  `nudo` int(11) DEFAULT NULL,
  `resol` int(11) DEFAULT NULL,
  `feres` date DEFAULT NULL,
  `suel` double(15,2) DEFAULT NULL,
  `fealta` date DEFAULT NULL,
  `cate` tinyint(4) DEFAULT NULL,
  `deud` varchar(14) DEFAULT NULL,
  `sipa` char(1) DEFAULT NULL,
  `codi` smallint(6) DEFAULT NULL,
  `suco` tinyint(4) DEFAULT NULL,
  `pcia` varchar(12) DEFAULT NULL,
  `loca` varchar(25) DEFAULT NULL,
  `calle` varchar(17) DEFAULT NULL,
  `nume` int(11) DEFAULT NULL,
  `rest` varchar(10) DEFAULT NULL,
  `tele` varchar(10) DEFAULT NULL,
  `aacu` tinyint(4) DEFAULT NULL,
  `mmcu` tinyint(4) DEFAULT NULL,
  `aadepos` date DEFAULT NULL,
  `sald` double(15,2) DEFAULT NULL,
  `signo` char(1) DEFAULT NULL,
  `febaja` date DEFAULT NULL,
  `aaap` tinyint(4) DEFAULT NULL,
  `mmap` tinyint(4) DEFAULT NULL,
  `fecamcat` date DEFAULT NULL,
  `ulcu` double(15,2) DEFAULT NULL,
  `telef` varchar(15) DEFAULT NULL,
  `meil` varchar(50) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

# --------------------------------------------------------

#
# Estructura de tabla para la tabla `mesa23`
#

CREATE TABLE `mesa23` (
  `zona` tinyint(4) NOT NULL DEFAULT '0',
  `expe` int(11) NOT NULL DEFAULT '0',
  `fecha` date NOT NULL DEFAULT '0000-00-00',
  `dh` char(1) NOT NULL DEFAULT '',
  `ord` tinyint(4) NOT NULL DEFAULT '0',
  `conc` char(5) DEFAULT NULL,
  `nure` int(11) DEFAULT NULL,
  `impo` double(15,2) DEFAULT NULL,
  `fechare` date DEFAULT NULL,
  `cate` char(2) DEFAULT NULL,
  `tipa` char(2) DEFAULT NULL,
  `nupa` char(8) DEFAULT NULL,
  `sipa` char(1) DEFAULT NULL,
  `fechacu` date DEFAULT NULL,
  `fechavenc` date DEFAULT NULL,
  UNIQUE KEY `zona` (`zona`,`expe`,`fecha`,`dh`,`ord`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

# --------------------------------------------------------

#
# Estructura de tabla para la tabla `mesa27`
#

CREATE TABLE `mesa27` (
  `zona` int(11) NOT NULL DEFAULT '0',
  `expe` int(11) NOT NULL DEFAULT '0',
  `fecha` date NOT NULL DEFAULT '0000-00-00',
  `ofic` tinyint(4) NOT NULL DEFAULT '0',
  `secu` tinyint(4) NOT NULL DEFAULT '0',
  `lite` varchar(61) NOT NULL DEFAULT '',
  `ultsec` tinyint(4) NOT NULL DEFAULT '0',
  `passwd` varchar(10) DEFAULT NULL,
  UNIQUE KEY `zona` (`zona`,`expe`,`fecha`,`ofic`,`secu`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

# --------------------------------------------------------

#
# Estructura de tabla para la tabla `mesa27a`
#

CREATE TABLE `mesa27a` (
  `zona` int(11) NOT NULL,
  `expe` int(11) NOT NULL,
  `fecha` date NOT NULL,
  `ofic` tinyint(4) NOT NULL,
  `secu` tinyint(4) NOT NULL,
  `lite` varchar(61) NOT NULL,
  `ultsec` tinyint(4) NOT NULL,
  `passwd` varchar(10) DEFAULT NULL,
  UNIQUE KEY `zona` (`zona`,`expe`,`fecha`,`ofic`,`secu`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

# --------------------------------------------------------

#
# Estructura de tabla para la tabla `mesa2a`
#

CREATE TABLE `mesa2a` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `zona` int(11) NOT NULL DEFAULT '0',
  `expe` int(11) NOT NULL DEFAULT '0',
  `aa` int(11) NOT NULL DEFAULT '0',
  `mm` tinyint(4) NOT NULL DEFAULT '0',
  `dd` tinyint(4) NOT NULL DEFAULT '0',
  `hh` int(11) NOT NULL DEFAULT '0',
  `mi` int(11) NOT NULL DEFAULT '0',
  `fecha` datetime NOT NULL,
  `ofic` tinyint(4) DEFAULT NULL,
  `bole` int(11) DEFAULT NULL,
  KEY `id` (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=1940925 DEFAULT CHARSET=latin1;

# --------------------------------------------------------

#
# Estructura de tabla para la tabla `mesa3`
#

CREATE TABLE `mesa3` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `zona` tinyint(4) NOT NULL,
  `expe` int(11) NOT NULL,
  `reso` int(11) NOT NULL,
  `nume` int(11) NOT NULL,
  `secu` tinyint(4) NOT NULL,
  `aare` tinyint(4) DEFAULT NULL,
  `mmre` tinyint(4) DEFAULT NULL,
  `ddre` tinyint(4) DEFAULT NULL,
  `fechare` date NOT NULL,
  `dh` char(1) DEFAULT NULL,
  `nyap` varchar(30) NOT NULL,
  `tipo` tinyint(4) DEFAULT NULL,
  `nudo` int(11) DEFAULT NULL,
  `impo` double(14,2) DEFAULT NULL,
  `sucu` char(4) DEFAULT NULL,
  `cheq` int(11) DEFAULT NULL,
  `tipompago` int(2) NOT NULL,
  `suc` varchar(5) NOT NULL,
  `cuenta` varchar(10) NOT NULL,
  `cbu` varchar(22) NOT NULL,
  `fecha6` date DEFAULT NULL,
  `avs` char(1) DEFAULT NULL,
  `menor` char(1) DEFAULT NULL,
  `cuaa` smallint(6) DEFAULT NULL,
  `cumm` tinyint(4) DEFAULT NULL,
  `cudd` tinyint(4) DEFAULT NULL,
  `descrip` tinyint(4) DEFAULT NULL,
  `n1` varchar(7) DEFAULT NULL,
  `n2` varchar(8) DEFAULT NULL,
  `nyapm1` varchar(30) DEFAULT NULL,
  `n3` varchar(1) DEFAULT NULL,
  `n4` varchar(8) DEFAULT NULL,
  `n5` varchar(4) DEFAULT NULL,
  `n6` varchar(2) DEFAULT NULL,
  `n7` varchar(2) DEFAULT NULL,
  `n8` varchar(4) DEFAULT NULL,
  `n9` varchar(30) DEFAULT NULL,
  `n10` varchar(30) DEFAULT NULL,
  `cate` tinyint(4) DEFAULT NULL,
  `porc` tinyint(4) DEFAULT NULL,
  `iaa` tinyint(4) DEFAULT NULL,
  `imm` tinyint(4) DEFAULT NULL,
  `coas` tinyint(4) DEFAULT NULL,
  `ofant` tinyint(4) DEFAULT NULL,
  `clave` varchar(7) DEFAULT NULL,
  `estado` int(1) NOT NULL,
  KEY `nyap` (`nyap`),
  KEY `nudo` (`nudo`),
  KEY `id` (`id`),
  KEY `zona` (`zona`),
  KEY `expe` (`expe`),
  KEY `reso` (`reso`),
  KEY `estado` (`estado`)
) ENGINE=MyISAM AUTO_INCREMENT=730339 DEFAULT CHARSET=latin1;

# --------------------------------------------------------

#
# Estructura de tabla para la tabla `mesa7`
#

CREATE TABLE `mesa7` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `zona` int(1) NOT NULL,
  `expe` int(6) NOT NULL,
  `fecha` date NOT NULL,
  `aa` int(4) NOT NULL,
  `mm` tinyint(2) NOT NULL,
  `dd` tinyint(2) NOT NULL,
  `ofic` tinyint(2) NOT NULL,
  `secu` tinyint(2) NOT NULL,
  `lite` varchar(61) NOT NULL,
  `ultsec` tinyint(2) NOT NULL,
  `passwd` varchar(10) DEFAULT NULL,
  KEY `zona` (`zona`),
  KEY `expe` (`expe`),
  KEY `id` (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=157442 DEFAULT CHARSET=latin1 COMMENT='DOCUMENTACION';

# --------------------------------------------------------

#
# Estructura de tabla para la tabla `mesa71`
#

CREATE TABLE `mesa71` (
  `zona` int(11) NOT NULL DEFAULT '0',
  `expe` int(11) NOT NULL DEFAULT '0',
  `ofic` tinyint(4) NOT NULL DEFAULT '0',
  `aa` int(11) NOT NULL DEFAULT '0',
  `mm` tinyint(4) NOT NULL DEFAULT '0',
  `dd` tinyint(4) NOT NULL DEFAULT '0',
  `secu` tinyint(4) NOT NULL DEFAULT '0',
  `lite` varchar(61) NOT NULL DEFAULT '',
  `ultsec` tinyint(4) NOT NULL DEFAULT '0',
  `passwd` varchar(10) DEFAULT NULL,
  KEY `expe` (`expe`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

# --------------------------------------------------------

#
# Estructura de tabla para la tabla `mgs`
#

CREATE TABLE `mgs` (
  `lote` char(2) DEFAULT NULL,
  `juri` char(2) DEFAULT NULL,
  `uo` char(3) DEFAULT NULL,
  `suo` char(3) DEFAULT NULL,
  `clap` char(2) DEFAULT NULL,
  `empl` char(8) DEFAULT NULL,
  `digi` char(1) DEFAULT NULL,
  `tido` char(1) DEFAULT NULL,
  `nudo` int(11) DEFAULT NULL,
  `cero1` char(2) DEFAULT NULL,
  `sire` char(2) DEFAULT NULL,
  `esca` char(1) DEFAULT NULL,
  `agca` varchar(4) DEFAULT NULL,
  `nyap` varchar(25) NOT NULL DEFAULT '',
  `naci` char(2) DEFAULT NULL,
  `haaf` double(14,2) DEFAULT NULL,
  `cate` char(2) DEFAULT NULL,
  `cuot` double(10,2) DEFAULT NULL,
  `aping` double(12,2) DEFAULT NULL,
  `mmaa` varchar(4) DEFAULT NULL,
  `sexo` char(1) DEFAULT NULL,
  `prest` double(10,2) DEFAULT NULL,
  `sist` char(3) DEFAULT NULL,
  `fema` varchar(8) DEFAULT NULL,
  `aaaa` smallint(6) DEFAULT NULL,
  `mm` tinyint(4) DEFAULT NULL,
  KEY `nudo` (`nudo`),
  KEY `nyap` (`nyap`),
  KEY `aaaa` (`aaaa`,`mm`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

# --------------------------------------------------------

#
# Estructura de tabla para la tabla `mgs9395`
#

CREATE TABLE `mgs9395` (
  `lote` char(2) DEFAULT NULL,
  `juri` char(2) DEFAULT NULL,
  `uo` char(2) DEFAULT NULL,
  `suo` char(2) DEFAULT NULL,
  `clap` char(2) DEFAULT NULL,
  `empl` varchar(5) DEFAULT NULL,
  `digi` char(1) DEFAULT NULL,
  `tido` char(1) DEFAULT NULL,
  `nudo` int(11) DEFAULT NULL,
  `cero1` char(2) DEFAULT NULL,
  `sire` char(2) DEFAULT NULL,
  `esca` char(1) DEFAULT NULL,
  `agca` varchar(4) DEFAULT NULL,
  `nyap` varchar(25) NOT NULL DEFAULT '',
  `naci` char(2) DEFAULT NULL,
  `haaf` double(14,2) DEFAULT NULL,
  `cate` char(2) DEFAULT NULL,
  `cuot` double(10,2) DEFAULT NULL,
  `aping` double(12,2) DEFAULT NULL,
  `mmaa` varchar(4) DEFAULT NULL,
  `sexo` char(1) DEFAULT NULL,
  `prest` double(10,2) DEFAULT NULL,
  `sist` char(3) DEFAULT NULL,
  `fema` varchar(8) DEFAULT NULL,
  `aaaa` smallint(6) DEFAULT NULL,
  `mm` tinyint(4) DEFAULT NULL,
  KEY `nudo` (`nudo`),
  KEY `nyap` (`nyap`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

# --------------------------------------------------------

#
# Estructura de tabla para la tabla `monto_30re`
#

CREATE TABLE `monto_30re` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `zona` int(2) NOT NULL,
  `expediente` int(11) NOT NULL,
  `monto` double NOT NULL,
  `fecha` date NOT NULL,
  `texto` longtext NOT NULL,
  KEY `id` (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

# --------------------------------------------------------

#
# Estructura de tabla para la tabla `montoadic`
#

CREATE TABLE `montoadic` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `periodo` date NOT NULL,
  `fecha` date NOT NULL,
  `tipo` int(2) NOT NULL,
  `peri1` int(11) NOT NULL DEFAULT '0',
  `peri2` tinyint(4) NOT NULL DEFAULT '0',
  `porce` varchar(10) DEFAULT NULL,
  `a01` double(12,2) DEFAULT NULL,
  `p01` double(12,4) NOT NULL,
  `pr02` int(3) DEFAULT NULL,
  `p02` double(12,4) NOT NULL,
  `pr03` int(3) DEFAULT NULL,
  `p03` double(12,4) NOT NULL,
  `pr04` int(3) DEFAULT NULL,
  `p04` double(12,4) NOT NULL,
  `pr05` int(3) DEFAULT NULL,
  `p05` double(12,4) NOT NULL,
  `pr06` int(3) DEFAULT NULL,
  `p06` double(12,4) NOT NULL,
  `pr07` int(3) DEFAULT NULL,
  `p07` double(12,4) NOT NULL,
  `pr08` int(3) DEFAULT NULL,
  `p08` double(12,4) NOT NULL,
  `pr09` int(3) DEFAULT NULL,
  `p09` double(12,4) NOT NULL,
  `pr01` int(3) DEFAULT NULL,
  `a02` double(12,2) DEFAULT NULL,
  `a03` double(12,2) DEFAULT NULL,
  `a04` double(12,2) DEFAULT NULL,
  `a05` double(12,2) DEFAULT NULL,
  `a06` double(12,2) DEFAULT NULL,
  `a07` double(12,2) DEFAULT NULL,
  `a08` double(12,2) DEFAULT NULL,
  `a09` double(12,2) DEFAULT NULL,
  KEY `id` (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

# --------------------------------------------------------

#
# Estructura de tabla para la tabla `montoant`
#

CREATE TABLE `montoant` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `fecha` date NOT NULL,
  `tipo` int(2) NOT NULL,
  `peri1` int(11) NOT NULL DEFAULT '0',
  `peri2` tinyint(4) NOT NULL DEFAULT '0',
  `porce` varchar(10) DEFAULT NULL,
  `a01` double(12,2) DEFAULT NULL,
  `a02` double(12,2) DEFAULT NULL,
  `a03` double(12,2) DEFAULT NULL,
  `a04` double(12,2) DEFAULT NULL,
  `a05` double(12,2) DEFAULT NULL,
  `a06` double(12,2) DEFAULT NULL,
  `a07` double(12,2) DEFAULT NULL,
  `a08` double(12,2) DEFAULT NULL,
  `a09` double(12,2) DEFAULT NULL,
  KEY `id` (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=266 DEFAULT CHARSET=latin1;

# --------------------------------------------------------

#
# Estructura de tabla para la tabla `montoseg`
#

CREATE TABLE `montoseg` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `fecha` date NOT NULL,
  `peri1` int(11) NOT NULL DEFAULT '0',
  `peri2` tinyint(4) NOT NULL DEFAULT '0',
  `i01` double(12,2) DEFAULT NULL,
  `i02` double(12,2) DEFAULT NULL,
  `i03` double(12,2) DEFAULT NULL,
  `i04` double(12,2) DEFAULT NULL,
  `i05` double(12,2) DEFAULT NULL,
  `i06` double(12,2) DEFAULT NULL,
  `i07` double(12,2) DEFAULT NULL,
  `i08` double(12,2) DEFAULT NULL,
  `i09` double(12,2) DEFAULT NULL,
  KEY `id` (`id`),
  KEY `fecha` (`fecha`)
) ENGINE=MyISAM AUTO_INCREMENT=116 DEFAULT CHARSET=latin1;

# --------------------------------------------------------

#
# Estructura de tabla para la tabla `multiple`
#

CREATE TABLE `multiple` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `zona` int(2) NOT NULL,
  `expediente` int(11) NOT NULL,
  `avs` char(1) DEFAULT NULL,
  `liquidacion` int(11) NOT NULL,
  `resolucion` int(11) NOT NULL,
  KEY `id` (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

# --------------------------------------------------------

#
# Estructura de tabla para la tabla `munis`
#

CREATE TABLE `munis` (
  `nyap` varchar(25) NOT NULL DEFAULT '',
  `nudo` int(11) NOT NULL DEFAULT '0',
  `sist` char(3) DEFAULT NULL,
  `orden` int(11) DEFAULT NULL,
  `crip` tinyint(4) DEFAULT NULL,
  `circjud` char(2) DEFAULT NULL,
  `z` char(1) DEFAULT NULL,
  `poli` char(1) DEFAULT NULL,
  `secu` int(11) DEFAULT NULL,
  `nudoimp` varchar(10) DEFAULT NULL,
  `depto` varchar(16) DEFAULT NULL,
  `delo` varchar(53) DEFAULT NULL,
  `nomrepa` varchar(65) DEFAULT NULL,
  `loca` varchar(30) DEFAULT NULL,
  `comisa` char(1) DEFAULT NULL,
  `cir` tinyint(4) DEFAULT NULL,
  `gr` tinyint(4) DEFAULT NULL,
  `ordfin` int(11) DEFAULT NULL,
  `docente` char(1) DEFAULT NULL,
  `titsup` char(1) DEFAULT NULL,
  `cirmes` tinyint(4) DEFAULT NULL,
  `dom_dest` varchar(35) DEFAULT NULL,
  `cod_dest` varchar(4) DEFAULT NULL,
  `loc_dest` varchar(60) DEFAULT NULL,
  `pmesa` tinyint(4) DEFAULT NULL,
  `cartadoc` char(1) DEFAULT NULL,
  `vmesa` tinyint(4) DEFAULT NULL,
  `secupad` int(11) DEFAULT NULL,
  `voto` varchar(6) DEFAULT NULL,
  `titulo` varchar(30) DEFAULT NULL,
  `cirvmesa` varchar(6) DEFAULT NULL,
  `canti` int(11) DEFAULT NULL,
  `dondevot` varchar(135) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

# --------------------------------------------------------

#
# Estructura de tabla para la tabla `nombres`
#

CREATE TABLE `nombres` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(50) NOT NULL DEFAULT '',
  KEY `id` (`id`),
  KEY `nombre` (`nombre`)
) ENGINE=MyISAM AUTO_INCREMENT=9650 DEFAULT CHARSET=latin1;

# --------------------------------------------------------

#
# Estructura de tabla para la tabla `notifica`
#

CREATE TABLE `notifica` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `zona` int(11) NOT NULL,
  `expediente` int(11) NOT NULL,
  `tipo` varchar(15) NOT NULL,
  `resolucion` int(11) NOT NULL,
  `nume` int(11) NOT NULL,
  `tipodoc` int(2) NOT NULL,
  `dni` int(11) NOT NULL,
  `texto` longtext NOT NULL,
  `fecha` datetime NOT NULL,
  KEY `id` (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

# --------------------------------------------------------

#
# Estructura de tabla para la tabla `oficinas`
#

CREATE TABLE `oficinas` (
  `ofic` tinyint(4) NOT NULL DEFAULT '0',
  `b` char(1) DEFAULT NULL,
  `oficina` varchar(20) DEFAULT NULL,
  KEY `ofic` (`ofic`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

# --------------------------------------------------------

#
# Estructura de tabla para la tabla `pad2010`
#

CREATE TABLE `pad2010` (
  `nyap` varchar(25) NOT NULL DEFAULT '',
  `nudo` int(11) NOT NULL DEFAULT '0',
  `sist` char(3) DEFAULT NULL,
  `z` char(1) DEFAULT NULL,
  `cir` tinyint(4) DEFAULT NULL,
  `vmesa` tinyint(4) DEFAULT NULL,
  `cirvmesa` varchar(6) DEFAULT NULL,
  `dondevot` varchar(135) DEFAULT NULL,
  `actpas` char(1) DEFAULT NULL,
  KEY `nyap` (`nyap`),
  KEY `nudo` (`nudo`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

# --------------------------------------------------------

#
# Estructura de tabla para la tabla `padron`
#

CREATE TABLE `padron` (
  `sexo` char(1) DEFAULT NULL,
  `nudo` int(11) NOT NULL,
  `nyap` varchar(30) NOT NULL,
  `clase` int(11) DEFAULT NULL,
  `domi` varchar(40) DEFAULT NULL,
  `loca` varchar(30) DEFAULT NULL,
  `depto` varchar(20) DEFAULT NULL,
  `dondevot` varchar(70) DEFAULT NULL,
  KEY `nudo` (`nudo`),
  KEY `nyap` (`nyap`),
  KEY `domi` (`domi`),
  KEY `loca` (`loca`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COMMENT='PADRON PROVINCIAL';

# --------------------------------------------------------

#
# Estructura de tabla para la tabla `padron2007`
#

CREATE TABLE `padron2007` (
  `nada` varchar(10) NOT NULL DEFAULT '',
  `sexo` char(1) NOT NULL DEFAULT '',
  `nudo` int(8) NOT NULL DEFAULT '0',
  `nyap` varchar(30) NOT NULL DEFAULT '',
  `clase` int(11) DEFAULT NULL,
  `domi` varchar(40) DEFAULT NULL,
  `loca` varchar(30) NOT NULL DEFAULT '',
  `depto` varchar(20) DEFAULT NULL,
  KEY `nudo` (`nudo`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

# --------------------------------------------------------

#
# Estructura de tabla para la tabla `padronnac`
#

CREATE TABLE `padronnac` (
  `provincia` tinyint(3) NOT NULL,
  `numorden` tinyint(4) NOT NULL,
  `depto` tinyint(4) NOT NULL,
  `crtonum` tinyint(4) NOT NULL,
  `crtoletra` varchar(20) NOT NULL,
  `nudo` int(8) NOT NULL,
  `clase` tinyint(8) NOT NULL,
  `nyap` varchar(40) NOT NULL,
  `prof` varchar(10) NOT NULL,
  `domi` varchar(30) NOT NULL,
  `tdni` varchar(10) NOT NULL,
  `sexo` varchar(10) NOT NULL,
  `numesa` varchar(10) NOT NULL,
  `tomo` varchar(10) NOT NULL,
  KEY `nudo` (`nudo`),
  KEY `nyap` (`nyap`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

# --------------------------------------------------------

#
# Estructura de tabla para la tabla `perfiles`
#

CREATE TABLE `perfiles` (
  `perfilId` int(11) NOT NULL,
  `Nombre` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

# --------------------------------------------------------

#
# Estructura de tabla para la tabla `plantillas`
#

CREATE TABLE `plantillas` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `titulo` varchar(250) NOT NULL,
  `texto` longtext NOT NULL,
  `tipocoas` int(2) NOT NULL,
  KEY `id` (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=88 DEFAULT CHARSET=latin1;

# --------------------------------------------------------

#
# Estructura de tabla para la tabla `plantillas1`
#

CREATE TABLE `plantillas1` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `titulo` varchar(250) NOT NULL,
  `texto` longtext NOT NULL,
  KEY `id` (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=50 DEFAULT CHARSET=latin1;

# --------------------------------------------------------

#
# Estructura de tabla para la tabla `postalsuc`
#

CREATE TABLE `postalsuc` (
  `codi` int(11) NOT NULL,
  `suco` int(11) NOT NULL,
  `loca` varchar(25) NOT NULL,
  `sucur` char(6) DEFAULT NULL,
  `nsucur` varchar(20) NOT NULL,
  `tipo` char(1) DEFAULT NULL,
  `zona` char(1) DEFAULT NULL,
  `dire` varchar(34) DEFAULT NULL,
  KEY `codi` (`codi`),
  KEY `loca` (`loca`),
  KEY `sucur` (`sucur`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

# --------------------------------------------------------

#
# Estructura de tabla para la tabla `postalsuca`
#

CREATE TABLE `postalsuca` (
  `codi` int(11) NOT NULL,
  `suco` int(11) NOT NULL,
  `loca` varchar(25) NOT NULL,
  `sucur` char(6) DEFAULT NULL,
  `nsucur` varchar(20) NOT NULL,
  `tipo` char(1) DEFAULT NULL,
  `zona` char(1) DEFAULT NULL,
  `dire` varchar(34) DEFAULT NULL,
  KEY `codi` (`codi`),
  KEY `loca` (`loca`),
  KEY `sucur` (`sucur`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

# --------------------------------------------------------

#
# Estructura de tabla para la tabla `prestamos`
#

CREATE TABLE `prestamos` (
  `nudo` int(11) DEFAULT NULL,
  `nyap` varchar(30) DEFAULT NULL,
  `presotaaaa` smallint(6) DEFAULT NULL,
  `presotmm` tinyint(4) DEFAULT NULL,
  `prescope` varchar(5) DEFAULT NULL,
  `prestsol` char(1) DEFAULT NULL,
  `pressoli` varchar(8) DEFAULT NULL,
  `presimpo` double(10,2) DEFAULT NULL,
  `prestasa` double(4,2) DEFAULT NULL,
  `prescuotas` char(2) DEFAULT NULL,
  `pressucu` varchar(4) DEFAULT NULL,
  `prescuenta` varchar(10) DEFAULT NULL,
  `pres1daaaa` smallint(6) DEFAULT NULL,
  `pres1dmm` tinyint(4) DEFAULT NULL,
  `presudaaaa` smallint(6) DEFAULT NULL,
  `presudmm` tinyint(4) DEFAULT NULL,
  `presenti` char(3) DEFAULT NULL,
  KEY `presnudo` (`nudo`),
  KEY `presnyap` (`nyap`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

# --------------------------------------------------------

#
# Estructura de tabla para la tabla `primerapor`
#

CREATE TABLE `primerapor` (
  `nudo` int(11) DEFAULT NULL,
  `nyap` varchar(25) NOT NULL DEFAULT '',
  `sist` char(3) DEFAULT NULL,
  `mm` tinyint(4) DEFAULT NULL,
  `aaaa` smallint(6) DEFAULT NULL,
  `sire` char(2) DEFAULT NULL,
  KEY `nudo` (`nudo`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

# --------------------------------------------------------

#
# Estructura de tabla para la tabla `provin`
#

CREATE TABLE `provin` (
  `provincia` int(11) NOT NULL DEFAULT '0',
  `provin` varchar(30) NOT NULL DEFAULT '',
  PRIMARY KEY (`provincia`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

# --------------------------------------------------------

#
# Estructura de tabla para la tabla `provincias`
#

CREATE TABLE `provincias` (
  `Codigo` varchar(2) NOT NULL,
  `Nombre` varchar(34) NOT NULL,
  `Pais` varchar(2) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

# --------------------------------------------------------

#
# Estructura de tabla para la tabla `redactar`
#

CREATE TABLE `redactar` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `tdoc` int(2) NOT NULL,
  `ndoc` int(11) NOT NULL,
  `zona` int(2) NOT NULL,
  `expediente` int(11) NOT NULL,
  `tipo` int(2) NOT NULL,
  `titulo` varchar(250) NOT NULL,
  `texto` longtext NOT NULL,
  `fecha` datetime DEFAULT NULL,
  KEY `id` (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

# --------------------------------------------------------

#
# Estructura de tabla para la tabla `regcivil`
#

CREATE TABLE `regcivil` (
  `nudo` int(11) NOT NULL,
  `nyap` varchar(30) NOT NULL,
  `fecdef` date DEFAULT NULL,
  `loca` char(3) DEFAULT NULL,
  `mesdef` char(6) DEFAULT NULL,
  KEY `nudo` (`nudo`),
  KEY `nyap` (`nyap`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

# --------------------------------------------------------

#
# Estructura de tabla para la tabla `resol`
#

CREATE TABLE `resol` (
  `resol` int(11) NOT NULL DEFAULT '0',
  `fecha` date NOT NULL DEFAULT '0000-00-00',
  `nyap` varchar(30) NOT NULL DEFAULT '',
  `zona` tinyint(4) DEFAULT NULL,
  `expe` int(11) DEFAULT NULL,
  `asunto` varchar(15) DEFAULT NULL,
  `imagen` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`resol`),
  KEY `fecha` (`fecha`),
  KEY `nyap` (`nyap`),
  KEY `expe` (`expe`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

# --------------------------------------------------------

#
# Estructura de tabla para la tabla `resoluciones`
#

CREATE TABLE `resoluciones` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `zona` int(11) NOT NULL,
  `expediente` int(11) NOT NULL,
  `tipo` varchar(15) NOT NULL,
  `resolucion` int(11) NOT NULL,
  `nume` int(11) NOT NULL,
  `texto` longtext NOT NULL,
  `fecha` datetime NOT NULL,
  KEY `id` (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=558 DEFAULT CHARSET=latin1;

# --------------------------------------------------------

#
# Estructura de tabla para la tabla `sexo`
#

CREATE TABLE `sexo` (
  `id` varchar(25) DEFAULT NULL,
  `nombre` varchar(250) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

# --------------------------------------------------------

#
# Estructura de tabla para la tabla `solicitante`
#

CREATE TABLE `solicitante` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `zona` int(2) NOT NULL,
  `expediente` int(11) NOT NULL,
  `dni` int(11) NOT NULL,
  `dnipa` int(11) NOT NULL,
  `gestor` int(11) NOT NULL,
  KEY `id` (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=78 DEFAULT CHARSET=latin1;

# --------------------------------------------------------

#
# Estructura de tabla para la tabla `ssc`
#

CREATE TABLE `ssc` (
  `lote` char(2) DEFAULT NULL,
  `depa` char(2) DEFAULT NULL,
  `escu` varchar(4) DEFAULT NULL,
  `tido` char(1) DEFAULT NULL,
  `nudo` int(11) DEFAULT NULL,
  `vece` char(1) DEFAULT NULL,
  `digi` char(1) DEFAULT NULL,
  `cero1` varchar(10) DEFAULT NULL,
  `sire` char(2) DEFAULT NULL,
  `esca` char(1) DEFAULT NULL,
  `carg` varchar(4) DEFAULT NULL,
  `nyap` varchar(25) NOT NULL DEFAULT '',
  `naci` char(2) DEFAULT NULL,
  `haaf` double(14,2) DEFAULT NULL,
  `cate` char(2) DEFAULT NULL,
  `cuot` double(10,2) DEFAULT NULL,
  `cero2` varchar(8) DEFAULT NULL,
  `mmaa` varchar(4) DEFAULT NULL,
  `sexo` char(1) DEFAULT NULL,
  `sist` char(3) DEFAULT NULL,
  `prest` double(10,2) DEFAULT NULL,
  `fema` date DEFAULT NULL,
  `newcat` char(2) DEFAULT NULL,
  `aaaa` smallint(6) DEFAULT NULL,
  `mm` tinyint(4) DEFAULT NULL,
  `aping` double(12,2) DEFAULT NULL,
  `fecha` date NOT NULL,
  KEY `nudo` (`nudo`),
  KEY `nyap` (`nyap`),
  KEY `aaaa` (`aaaa`,`mm`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

# --------------------------------------------------------

#
# Estructura de tabla para la tabla `ssc9395`
#

CREATE TABLE `ssc9395` (
  `lote` char(2) DEFAULT NULL,
  `depa` char(2) DEFAULT NULL,
  `escu` varchar(4) DEFAULT NULL,
  `tido` char(1) DEFAULT NULL,
  `nudo` int(11) DEFAULT NULL,
  `vece` char(1) DEFAULT NULL,
  `digi` char(1) DEFAULT NULL,
  `cero1` varchar(10) DEFAULT NULL,
  `sire` char(2) DEFAULT NULL,
  `esca` char(1) DEFAULT NULL,
  `carg` varchar(4) DEFAULT NULL,
  `nyap` varchar(25) NOT NULL DEFAULT '',
  `naci` char(2) DEFAULT NULL,
  `haaf` double(14,2) DEFAULT NULL,
  `cate` char(2) DEFAULT NULL,
  `cuot` double(10,2) DEFAULT NULL,
  `cero2` varchar(8) DEFAULT NULL,
  `mmaa` varchar(4) DEFAULT NULL,
  `sexo` char(1) DEFAULT NULL,
  `sist` char(3) DEFAULT NULL,
  `prest` double(10,2) DEFAULT NULL,
  `fema` date DEFAULT NULL,
  `newcat` char(2) DEFAULT NULL,
  `aping` double(12,2) DEFAULT NULL,
  KEY `nudo` (`nudo`),
  KEY `nyap` (`nyap`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

# --------------------------------------------------------

#
# Estructura de tabla para la tabla `sscsin`
#

CREATE TABLE `sscsin` (
  `lote` char(2) DEFAULT NULL,
  `depa` char(2) DEFAULT NULL,
  `escu` varchar(4) DEFAULT NULL,
  `tido` char(1) DEFAULT NULL,
  `nudo` int(11) DEFAULT NULL,
  `vece` char(1) DEFAULT NULL,
  `digi` char(1) DEFAULT NULL,
  `cero1` varchar(10) DEFAULT NULL,
  `sire` char(2) DEFAULT NULL,
  `esca` char(1) DEFAULT NULL,
  `carg` varchar(4) DEFAULT NULL,
  `nyap` varchar(25) NOT NULL DEFAULT '',
  `naci` char(2) DEFAULT NULL,
  `haaf` double(14,2) DEFAULT NULL,
  `cate` char(2) DEFAULT NULL,
  `cuot` double(10,2) DEFAULT NULL,
  `cero2` varchar(8) DEFAULT NULL,
  `mmaa` varchar(4) DEFAULT NULL,
  `sexo` char(1) DEFAULT NULL,
  `sist` char(3) DEFAULT NULL,
  `prest` double(10,2) DEFAULT NULL,
  `fema` date DEFAULT NULL,
  `newcat` char(2) DEFAULT NULL,
  `aaaa` smallint(6) DEFAULT NULL,
  `mm` tinyint(4) DEFAULT NULL,
  `aping` double(12,2) DEFAULT NULL,
  KEY `nudo` (`nudo`),
  KEY `nyap` (`nyap`),
  KEY `aaaa` (`aaaa`,`mm`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

# --------------------------------------------------------

#
# Estructura de tabla para la tabla `sueldoorg`
#

CREATE TABLE `sueldoorg` (
  `lote` char(2) DEFAULT NULL,
  `juri` char(2) DEFAULT NULL,
  `uo` char(3) DEFAULT NULL,
  `suo` char(3) DEFAULT NULL,
  `clap` char(2) DEFAULT NULL,
  `empl` char(8) DEFAULT NULL,
  `digi` char(1) DEFAULT NULL,
  `tido` char(1) DEFAULT NULL,
  `nudo` int(11) DEFAULT NULL,
  `cero1` char(2) DEFAULT NULL,
  `sire` char(2) DEFAULT NULL,
  `esca` char(1) DEFAULT NULL,
  `agca` varchar(4) DEFAULT NULL,
  `nyap` varchar(25) NOT NULL DEFAULT '',
  `naci` char(2) DEFAULT NULL,
  `haaf` double(14,2) DEFAULT NULL,
  `cate` char(2) DEFAULT NULL,
  `cuot` double(10,2) DEFAULT NULL,
  `aping` double(12,2) DEFAULT NULL,
  `mmaa` varchar(4) DEFAULT NULL,
  `sexo` char(1) DEFAULT NULL,
  `prest` double(10,2) DEFAULT NULL,
  `sist` varchar(250) DEFAULT NULL,
  `fema` varchar(8) DEFAULT NULL,
  `aaaa` smallint(6) DEFAULT NULL,
  `mm` tinyint(4) DEFAULT NULL,
  `sistema` varchar(250) DEFAULT NULL,
  KEY `nudo` (`nudo`),
  KEY `nyap` (`nyap`),
  KEY `aaaa` (`aaaa`,`mm`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

# --------------------------------------------------------

#
# Estructura de tabla para la tabla `sus`
#

CREATE TABLE `sus` (
  `lote` char(2) DEFAULT NULL,
  `depe` char(3) DEFAULT NULL,
  `boca` varchar(6) DEFAULT NULL,
  `carg` char(2) DEFAULT NULL,
  `nudo` int(11) DEFAULT NULL,
  `tido` char(2) DEFAULT NULL,
  `cone` char(3) DEFAULT NULL,
  `digi` char(1) DEFAULT NULL,
  `sire` char(2) DEFAULT NULL,
  `esca` char(1) DEFAULT NULL,
  `agca` varchar(4) DEFAULT NULL,
  `nyap` varchar(25) NOT NULL DEFAULT '',
  `naci` char(2) DEFAULT NULL,
  `haaf` double(14,2) DEFAULT NULL,
  `cate` char(2) DEFAULT NULL,
  `cuot` double(10,2) DEFAULT NULL,
  `aping` double(12,2) DEFAULT NULL,
  `mmaa` varchar(4) DEFAULT NULL,
  `sexo` char(1) DEFAULT NULL,
  `prest` double(10,2) DEFAULT NULL,
  `sist` char(3) DEFAULT NULL,
  `fema` varchar(8) DEFAULT NULL,
  `aaaa` smallint(6) DEFAULT NULL,
  `mm` tinyint(4) DEFAULT NULL,
  KEY `nudo` (`nudo`),
  KEY `nyap` (`nyap`),
  KEY `aaaa` (`aaaa`,`mm`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

# --------------------------------------------------------

#
# Estructura de tabla para la tabla `tesore2`
#

CREATE TABLE `tesore2` (
  `parte` varchar(6) NOT NULL,
  `ord` int(4) NOT NULL,
  `fecha` varchar(10) NOT NULL,
  `nro_part` int(4) NOT NULL,
  `sub1` int(4) NOT NULL,
  `nro_fact` varchar(20) NOT NULL,
  `proveedor` varchar(40) NOT NULL,
  `detalle` varchar(40) NOT NULL,
  `importe` double(14,2) NOT NULL,
  `observaciones` varchar(60) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

# --------------------------------------------------------

#
# Estructura de tabla para la tabla `tesore3`
#

CREATE TABLE `tesore3` (
  `parte` varchar(6) NOT NULL,
  `ord` int(4) NOT NULL,
  `fecha` varchar(10) NOT NULL,
  `nro_part` int(4) NOT NULL,
  `sub1` int(4) NOT NULL,
  `nro_fact` varchar(20) NOT NULL,
  `proveedor` varchar(40) NOT NULL,
  `detalle` varchar(40) NOT NULL,
  `importe` double(14,2) NOT NULL,
  `observaciones` varchar(60) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

# --------------------------------------------------------

#
# Estructura de tabla para la tabla `tipoanticipo`
#

CREATE TABLE `tipoanticipo` (
  `id` int(11) NOT NULL,
  `nombre` varchar(250) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

# --------------------------------------------------------

#
# Estructura de tabla para la tabla `tipocoas`
#

CREATE TABLE `tipocoas` (
  `id` int(11) NOT NULL,
  `nombre` varchar(250) NOT NULL,
  `porc` int(11) DEFAULT NULL,
  `estado` int(1) NOT NULL,
  KEY `id` (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

# --------------------------------------------------------

#
# Estructura de tabla para la tabla `tipodoc`
#

CREATE TABLE `tipodoc` (
  `id` int(11) NOT NULL,
  `nombre` varchar(250) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

# --------------------------------------------------------

#
# Estructura de tabla para la tabla `tipoecivil`
#

CREATE TABLE `tipoecivil` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `cod` varchar(15) NOT NULL,
  `nombre` varchar(250) NOT NULL,
  KEY `id` (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

# --------------------------------------------------------

#
# Estructura de tabla para la tabla `tipojub`
#

CREATE TABLE `tipojub` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(250) NOT NULL,
  KEY `id` (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

# --------------------------------------------------------

#
# Estructura de tabla para la tabla `tipojuez`
#

CREATE TABLE `tipojuez` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `cod` varchar(15) NOT NULL,
  `nombre` varchar(250) NOT NULL,
  KEY `id` (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

# --------------------------------------------------------

#
# Estructura de tabla para la tabla `tipomenor`
#

CREATE TABLE `tipomenor` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `cod` varchar(15) NOT NULL,
  `nombre` varchar(250) NOT NULL,
  `estado` int(1) NOT NULL,
  KEY `id` (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

# --------------------------------------------------------

#
# Estructura de tabla para la tabla `tipomodulo`
#

CREATE TABLE `tipomodulo` (
  `id` int(11) DEFAULT NULL,
  `cod` varchar(15) NOT NULL,
  `nombre` varchar(250) NOT NULL,
  KEY `id` (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

# --------------------------------------------------------

#
# Estructura de tabla para la tabla `tipompago`
#

CREATE TABLE `tipompago` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(250) NOT NULL,
  KEY `id` (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;

# --------------------------------------------------------

#
# Estructura de tabla para la tabla `tiponoti`
#

CREATE TABLE `tiponoti` (
  `id` int(11) NOT NULL,
  `nombre` varchar(250) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

# --------------------------------------------------------

#
# Estructura de tabla para la tabla `tiporedaccion`
#

CREATE TABLE `tiporedaccion` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(250) NOT NULL,
  KEY `id` (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

# --------------------------------------------------------

#
# Estructura de tabla para la tabla `tiporepa`
#

CREATE TABLE `tiporepa` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(250) NOT NULL,
  KEY `id` (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=513 DEFAULT CHARSET=latin1;

# --------------------------------------------------------

#
# Estructura de tabla para la tabla `tiposistema`
#

CREATE TABLE `tiposistema` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `cod` varchar(25) NOT NULL,
  `nombre` varchar(250) NOT NULL,
  KEY `id` (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=82 DEFAULT CHARSET=latin1;

# --------------------------------------------------------

#
# Estructura de tabla para la tabla `tipovinc`
#

CREATE TABLE `tipovinc` (
  `id` int(11) NOT NULL,
  `nombre` varchar(250) NOT NULL,
  `estado` int(1) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

# --------------------------------------------------------

#
# Estructura de tabla para la tabla `tipovinculo`
#

CREATE TABLE `tipovinculo` (
  `id` int(11) NOT NULL,
  `nombre` varchar(250) NOT NULL,
  `estado` int(1) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

# --------------------------------------------------------

#
# Estructura de tabla para la tabla `tipovive`
#

CREATE TABLE `tipovive` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `cod` varchar(15) NOT NULL,
  `nombre` varchar(250) NOT NULL,
  KEY `id` (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

# --------------------------------------------------------

#
# Estructura de tabla para la tabla `tmpcaja`
#

CREATE TABLE `tmpcaja` (
  `ax` varchar(250) NOT NULL,
  `ente` varchar(250) NOT NULL,
  `si` varchar(25) NOT NULL,
  `apellido` varchar(250) NOT NULL,
  `nombre` varchar(250) NOT NULL,
  `tipo` varchar(25) NOT NULL,
  `nudo` varchar(25) NOT NULL,
  `sueldos` varchar(25) NOT NULL,
  `falta` varchar(25) NOT NULL,
  `clase` varchar(25) NOT NULL,
  `direccion` varchar(250) NOT NULL,
  `ciudad` varchar(250) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

# --------------------------------------------------------

#
# Estructura de tabla para la tabla `tmpficha`
#

CREATE TABLE `tmpficha` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `doc` int(12) NOT NULL,
  `nombre` varchar(250) NOT NULL,
  `sistema` varchar(15) NOT NULL,
  `sistema1` int(2) NOT NULL,
  `prestamo` double NOT NULL,
  `legajo` varchar(25) NOT NULL,
  `sr` varchar(15) NOT NULL,
  `sueldo` double NOT NULL,
  `cuota` double NOT NULL,
  `cuotaseg` double NOT NULL,
  `dife` double NOT NULL,
  `aping` double NOT NULL,
  `categoria` int(2) NOT NULL,
  `fecha` date NOT NULL,
  `codigo` varchar(15) NOT NULL,
  `lote` varchar(15) NOT NULL,
  `escuela` varchar(15) NOT NULL,
  `cargo` varchar(25) NOT NULL,
  `newcat` varchar(25) NOT NULL,
  `fechanac` varchar(250) DEFAULT NULL,
  `fecese` date NOT NULL,
  `fepago` date NOT NULL,
  `feincl` date NOT NULL,
  `tabla` varchar(25) NOT NULL,
  `gestor` varchar(15) NOT NULL,
  KEY `id` (`id`),
  KEY `gestor` (`gestor`),
  KEY `doc` (`doc`)
) ENGINE=MyISAM AUTO_INCREMENT=750457 DEFAULT CHARSET=latin1;

# --------------------------------------------------------

#
# Estructura de tabla para la tabla `tmpficha2`
#

CREATE TABLE `tmpficha2` (
  `id` int(11) NOT NULL DEFAULT '0',
  `doc` int(12) NOT NULL,
  `nombre` varchar(250) NOT NULL,
  `sistema` varchar(15) NOT NULL,
  `sistema1` int(2) NOT NULL,
  `prestamo` double NOT NULL,
  `legajo` varchar(25) NOT NULL,
  `sr` varchar(15) NOT NULL,
  `sueldo` double NOT NULL,
  `cuota` double NOT NULL,
  `cuotaseg` double NOT NULL,
  `dife` double NOT NULL,
  `aping` double NOT NULL,
  `categoria` int(2) NOT NULL,
  `fecha` date NOT NULL,
  `codigo` varchar(15) NOT NULL,
  `lote` varchar(15) NOT NULL,
  `escuela` varchar(15) NOT NULL,
  `cargo` varchar(25) NOT NULL,
  `newcat` varchar(25) NOT NULL,
  `fechanac` varchar(250) DEFAULT NULL,
  `fecese` date NOT NULL,
  `fepago` date NOT NULL,
  `feincl` date NOT NULL,
  `tabla` varchar(25) NOT NULL,
  `gestor` varchar(15) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

# --------------------------------------------------------

#
# Estructura de tabla para la tabla `tmpficha3`
#

CREATE TABLE `tmpficha3` (
  `id` int(11) NOT NULL DEFAULT '0',
  `doc` int(12) NOT NULL,
  `nombre` varchar(250) NOT NULL,
  `sistema` varchar(15) NOT NULL,
  `sistema1` int(2) NOT NULL,
  `prestamo` double NOT NULL,
  `legajo` varchar(25) NOT NULL,
  `sr` varchar(15) NOT NULL,
  `sueldo` double NOT NULL,
  `cuota` double NOT NULL,
  `cuotaseg` double NOT NULL,
  `dife` double NOT NULL,
  `aping` double NOT NULL,
  `categoria` int(2) NOT NULL,
  `fecha` date NOT NULL,
  `codigo` varchar(15) NOT NULL,
  `lote` varchar(15) NOT NULL,
  `escuela` varchar(15) NOT NULL,
  `cargo` varchar(25) NOT NULL,
  `newcat` varchar(25) NOT NULL,
  `fechanac` varchar(250) DEFAULT NULL,
  `fecese` date NOT NULL,
  `fepago` date NOT NULL,
  `feincl` date NOT NULL,
  `tabla` varchar(25) NOT NULL,
  `gestor` varchar(15) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

# --------------------------------------------------------

#
# Estructura de tabla para la tabla `tmpficha5`
#

CREATE TABLE `tmpficha5` (
  `id` int(11) NOT NULL DEFAULT '0',
  `doc` int(12) NOT NULL,
  `nombre` varchar(250) NOT NULL,
  `sistema` varchar(15) NOT NULL,
  `sistema1` int(2) NOT NULL,
  `prestamo` double NOT NULL,
  `legajo` varchar(25) NOT NULL,
  `sr` varchar(15) NOT NULL,
  `sueldo` double NOT NULL,
  `cuota` double NOT NULL,
  `cuotaseg` double NOT NULL,
  `dife` double NOT NULL,
  `aping` double NOT NULL,
  `categoria` int(2) NOT NULL,
  `fecha` date NOT NULL,
  `codigo` varchar(15) NOT NULL,
  `lote` varchar(15) NOT NULL,
  `escuela` varchar(15) NOT NULL,
  `cargo` varchar(25) NOT NULL,
  `newcat` varchar(25) NOT NULL,
  `fechanac` varchar(250) DEFAULT NULL,
  `fecese` date NOT NULL,
  `fepago` date NOT NULL,
  `feincl` date NOT NULL,
  `tabla` varchar(25) NOT NULL,
  `gestor` varchar(15) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

# --------------------------------------------------------

#
# Estructura de tabla para la tabla `tmpliq`
#

CREATE TABLE `tmpliq` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `zona` int(2) NOT NULL,
  `expediente` int(11) NOT NULL,
  `vinculo` int(2) NOT NULL,
  `menor` varchar(10) NOT NULL,
  `dni` int(11) NOT NULL,
  `total` double NOT NULL,
  `porc` double NOT NULL,
  `monto` double NOT NULL,
  `porc1` double NOT NULL,
  `monto1` double NOT NULL,
  `estadopago` int(1) NOT NULL,
  `gestor` int(11) NOT NULL,
  KEY `id` (`id`),
  KEY `gestor` (`gestor`)
) ENGINE=MyISAM AUTO_INCREMENT=205 DEFAULT CHARSET=latin1;

# --------------------------------------------------------

#
# Estructura de tabla para la tabla `tmpliq1`
#

CREATE TABLE `tmpliq1` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `tipo` int(2) NOT NULL,
  `zona` int(2) NOT NULL,
  `expediente` int(11) NOT NULL,
  `dni` int(11) NOT NULL,
  `fechad` date NOT NULL,
  `fechah` date NOT NULL,
  `cata` int(2) NOT NULL,
  `catb` int(2) DEFAULT NULL,
  `catb1` int(2) NOT NULL,
  `catb2` int(2) NOT NULL,
  `anedev` varchar(10) NOT NULL,
  `prescrip` varchar(15) NOT NULL,
  `afalle` int(1) NOT NULL,
  `monto` double NOT NULL,
  `art` varchar(25) NOT NULL,
  `resolucion` varchar(25) NOT NULL,
  `fecha` date NOT NULL,
  `gestor` int(11) NOT NULL,
  KEY `id` (`id`),
  KEY `gestor` (`gestor`)
) ENGINE=MyISAM AUTO_INCREMENT=43 DEFAULT CHARSET=latin1;

# --------------------------------------------------------

#
# Estructura de tabla para la tabla `tmpmodulo`
#

CREATE TABLE `tmpmodulo` (
  `modulo` int(2) NOT NULL,
  `zona` int(2) NOT NULL,
  `expediente` int(11) NOT NULL,
  `gestor` int(11) NOT NULL,
  `fecha` datetime NOT NULL,
  `sesi` varchar(250) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

# --------------------------------------------------------

#
# Estructura de tabla para la tabla `tmppase`
#

CREATE TABLE `tmppase` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `oficina1` int(2) NOT NULL,
  `oficina2` int(2) NOT NULL,
  `zona` int(2) NOT NULL,
  `expediente` int(11) NOT NULL,
  `obs` longtext NOT NULL,
  `fecha` datetime NOT NULL,
  `gestor` int(11) NOT NULL,
  KEY `id` (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=289 DEFAULT CHARSET=latin1;

# --------------------------------------------------------

#
# Estructura de tabla para la tabla `transferencias`
#

CREATE TABLE `transferencias` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `texto` longtext NOT NULL,
  `fecha` datetime NOT NULL,
  `gestor` int(11) NOT NULL,
  KEY `id` (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=223 DEFAULT CHARSET=latin1;

# --------------------------------------------------------

#
# Estructura de tabla para la tabla `users`
#

CREATE TABLE `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(50) NOT NULL,
  `usuario` varchar(250) NOT NULL,
  `pass` varchar(50) NOT NULL,
  `oficina` int(11) NOT NULL,
  `sello` int(11) NOT NULL,
  `editorial` int(11) NOT NULL,
  `nombre` varchar(250) NOT NULL,
  `apellido` varchar(250) NOT NULL,
  `dni` varchar(25) DEFAULT NULL,
  `zona` int(1) DEFAULT NULL,
  `pais` char(2) NOT NULL,
  `prov` varchar(25) NOT NULL,
  `ciudad` varchar(250) NOT NULL,
  `direccion` varchar(250) NOT NULL,
  `cp` int(11) NOT NULL,
  `tel` varchar(250) NOT NULL,
  `celular` varchar(250) NOT NULL,
  `sexo` varchar(25) DEFAULT NULL,
  `perfil` int(2) NOT NULL,
  `perfil1` int(1) NOT NULL,
  `tipo` int(2) NOT NULL,
  `usuarioCupea` int(11) NOT NULL,
  `estado` int(1) NOT NULL,
  `idmd5` varchar(32) NOT NULL,
  KEY `id` (`id`),
  KEY `editorial` (`editorial`),
  KEY `email` (`email`),
  KEY `pass` (`pass`)
) ENGINE=MyISAM AUTO_INCREMENT=27228 DEFAULT CHARSET=latin1;

# --------------------------------------------------------

#
# Estructura de tabla para la tabla `vincure`
#

CREATE TABLE `vincure` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `zona` int(2) NOT NULL,
  `expediente` int(11) NOT NULL,
  `reservado` int(11) NOT NULL,
  `dni` int(11) NOT NULL,
  KEY `id` (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

# --------------------------------------------------------

#
# Estructura de tabla para la tabla `vls`
#

CREATE TABLE `vls` (
  `carg` char(1) DEFAULT NULL,
  `tido` char(1) DEFAULT NULL,
  `nudo` int(11) DEFAULT NULL,
  `digi` char(1) DEFAULT NULL,
  `tili` char(1) DEFAULT NULL,
  `juri` char(2) DEFAULT NULL,
  `uo` char(2) DEFAULT NULL,
  `suo` char(2) DEFAULT NULL,
  `cero1` varchar(9) DEFAULT NULL,
  `sire` char(2) DEFAULT NULL,
  `esca` char(1) DEFAULT NULL,
  `agca` varchar(4) DEFAULT NULL,
  `nyap` varchar(25) NOT NULL DEFAULT '',
  `naci` char(2) DEFAULT NULL,
  `haaf` double(14,2) DEFAULT NULL,
  `cate` char(2) DEFAULT NULL,
  `cuot` double(10,2) DEFAULT NULL,
  `aping` double(12,2) DEFAULT NULL,
  `mmaa` varchar(4) DEFAULT NULL,
  `sist` char(3) DEFAULT NULL,
  `fema` varchar(8) DEFAULT NULL,
  `aaaa` smallint(6) DEFAULT NULL,
  `mm` tinyint(4) DEFAULT NULL,
  `prest` double(10,2) DEFAULT NULL,
  KEY `nudo` (`nudo`),
  KEY `nyap` (`nyap`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

# --------------------------------------------------------

#
# Estructura de tabla para la tabla `zona`
#

CREATE TABLE `zona` (
  `id` int(2) NOT NULL,
  `nombre` varchar(250) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
