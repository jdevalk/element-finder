<?php

class Entities {
	const DATA = [
		[ 'nbsp', 160, 'no-break space = non-breaking space, U+00A0 ISOnum', [ ' ', 'space' ] ],
		[ 'iexcl', 161, 'inverted exclamation mark, U+00A1 ISOnum', [ '¡', 'exclamation', 'mark', '!' ] ],
		[ 'cent', 162, 'cent sign, U+00A2 ISOnum', [ '¢', 'cent', 'c' ] ],
		[ 'pound', 163, 'pound sign, U+00A3 ISOnum', [ '£', '#', 'pound' ] ],
		[ 'curren', 164, 'currency sign, U+00A4 ISOnum', [ '¤', 'currency' ] ],
		[ 'yen', 165, 'yen sign = yuan sign, U+00A5 ISOnum', [ '¥', 'yen', 'y' ] ],
		[ 'brvbar', 166, 'broken bar = broken vertical bar, U+00A6 ISOnum', [ '¦', 'bar', 'vertical', '|' ] ],
		[ 'sect', 167, 'section sign, U+00A7 ISOnum', [ '§', 'section', 's' ] ],
		[ 'uml', 168, 'diaeresis = spacing diaeresis, U+00A8 ISOdia', [ '¨', '"' ] ],
		[ 'copy', 169, 'copyright sign, U+00A9 ISOnum', [ '©', '(c)', 'c', 'copyright', 'copy' ] ],
		[ 'ordf', 170, 'feminine ordinal indicator, U+00AA ISOnum', [ 'ª', 'a' ] ],
		[
			'laquo',
			171,
			'left-pointing double angle quotation mark = left pointing guillemet, U+00AB ISOnum',
			[ '«', '<', '<<', 'double' ]
		],
		[ 'not', 172, 'not sign, U+00AC ISOnum', [ '¬', 'not', '-' ] ],
		[ 'shy', 173, 'soft hyphen = discretionary hyphen, U+00AD ISOnum', [ '­' ] ],
		[
			'reg',
			174,
			'registered sign = registered trade mark sign, U+00AE ISOnum',
			[ '®', '(r)', 'r', 'registered' ]
		],
		[ 'macr', 175, 'macron = spacing macron = overline = APL overbar, U+00AF ISOdia', [ '¯', '-', 'overline' ] ],
		[ 'deg', 176, 'degree sign, U+00B0 ISOnum', [ '°', 'degree', 'o' ] ],
		[ 'plusmn', 177, 'plus-minus sign = plus-or-minus sign, U+00B1 ISOnum', [ '±', 'plus-minus', '+', '-', '+-' ] ],
		[
			'sup2',
			178,
			'superscript two = superscript digit two = squared, U+00B2 ISOnum',
			[ '²', 'superscript', 'two', '2' ]
		],
		[
			'sup3',
			179,
			'superscript three = superscript digit three = cubed, U+00B3 ISOnum',
			[ '³', 'superscript', 'three', '3' ]
		],
		[ 'acute', 180, 'acute accent = spacing acute, U+00B4 ISOdia', [ '´', 'acute', "'", '`' ] ],
		[ 'micro', 181, 'micro sign, U+00B5 ISOnum', [ 'µ', 'micro', 'u' ] ],
		[ 'para', 182, 'pilcrow sign = paragraph sign, U+00B6 ISOnum', [ '¶', 'pilcrow', 'enter', 'return', 'n' ] ],
		[
			'middot',
			183,
			'middle dot = Georgian comma = Greek middle dot, U+00B7 ISOnum',
			[ '·', '.', 'middle', 'dot' ]
		],
		[ 'cedil', 184, 'cedilla = spacing cedilla, U+00B8 ISOdia', [ '¸', ',' ] ],
		[ 'sup1', 185, 'superscript one = superscript digit one, U+00B9 ISOnum', [ '¹', '1', 'superscript', 'one' ] ],
		[ 'ordm', 186, 'masculine ordinal indicator, U+00BA ISOnum', [ 'º', 'o', 'ordinal' ] ],
		[
			'raquo',
			187,
			'right-pointing double angle quotation mark = right pointing guillemet, U+00BB ISOnum',
			[ '»', 'right-pointing', 'double', '>', '>>' ]
		],
		[
			'frac14',
			188,
			'vulgar fraction one quarter = fraction one quarter, U+00BC ISOnum',
			[ '¼', 'fraction', '1/4', 'quarter' ]
		],
		[
			'frac12',
			189,
			'vulgar fraction one half = fraction one half, U+00BD ISOnum',
			[ '½', 'fraction', 'half', '1/2' ]
		],
		[
			'frac34',
			190,
			'vulgar fraction three quarters = fraction three quarters, U+00BE ISOnum',
			[ '¾', 'fraction', 'quarters', '3/4' ]
		],
		[
			'iquest',
			191,
			'inverted question mark = turned question mark, U+00BF ISOnum',
			[ '¿', '?', 'question', 'inverted' ]
		],
		[
			'Agrave',
			192,
			'latin capital letter A with grave = latin capital letter A grave, U+00C0 ISOlat1',
			[ 'À', 'A', 'grave' ]
		],
		[ 'Aacute', 193, 'latin capital letter A with acute, U+00C1 ISOlat1', [ 'Á', 'A', 'acute' ] ],
		[ 'Acirc', 194, 'latin capital letter A with circumflex, U+00C2 ISOlat1', [ 'Â', 'A', 'circumflex' ] ],
		[ 'Atilde', 195, 'latin capital letter A with tilde, U+00C3 ISOlat1', [ 'Ã', 'A', 'tilde' ] ],
		[ 'Auml', 196, 'latin capital letter A with diaeresis, U+00C4 ISOlat1', [ 'Ä', 'A', 'diaeresis' ] ],
		[
			'Aring',
			197,
			'latin capital letter A with ring above = latin capital letter A ring, U+00C5 ISOlat1',
			[ 'Å', 'A', 'ring' ]
		],
		[ 'AElig', 198, 'latin capital letter AE = latin capital ligature AE, U+00C6 ISOlat1', [ 'Æ', 'AE' ] ],
		[ 'Ccedil', 199, 'latin capital letter C with cedilla, U+00C7 ISOlat1', [ 'Ç', 'C', 'cedilla' ] ],
		[ 'Egrave', 200, 'latin capital letter E with grave, U+00C8 ISOlat1', [ 'È', 'E', 'grave' ] ],
		[ 'Eacute', 201, 'latin capital letter E with acute, U+00C9 ISOlat1', [ 'É', 'E', 'acute' ] ],
		[ 'Ecirc', 202, 'latin capital letter E with circumflex, U+00CA ISOlat1', [ 'Ê', 'E', 'circumflex' ] ],
		[ 'Euml', 203, 'latin capital letter E with diaeresis, U+00CB ISOlat1', [ 'Ë', 'E', 'diaeresis' ] ],
		[ 'Igrave', 204, 'latin capital letter I with grave, U+00CC ISOlat1', [ 'Ì', 'I', 'grave', 'L' ] ],
		[ 'Iacute', 205, 'latin capital letter I with acute, U+00CD ISOlat1', [ 'Í', 'I', 'acute', 'L' ] ],
		[ 'Icirc', 206, 'latin capital letter I with circumflex, U+00CE ISOlat1', [ 'Î', 'I', 'circumflex', 'L' ] ],
		[ 'Iuml', 207, 'latin capital letter I with diaeresis, U+00CF ISOlat1', [ 'Ï', 'I', 'diaeresis', 'L' ] ],
		[ 'ETH', 208, 'latin capital letter ETH, U+00D0 ISOlat1', [ 'Ð', 'ETH', 'D' ] ],
		[ 'Ntilde', 209, 'latin capital letter N with tilde, U+00D1 ISOlat1', [ 'Ñ', 'N', 'tilde' ] ],
		[ 'Ograve', 210, 'latin capital letter O with grave, U+00D2 ISOlat1', [ 'Ò', 'O', 'grave' ] ],
		[ 'Oacute', 211, 'latin capital letter O with acute, U+00D3 ISOlat1', [ 'Ó', 'O', 'acute' ] ],
		[ 'Ocirc', 212, 'latin capital letter O with circumflex, U+00D4 ISOlat1', [ 'Ô', 'O', 'circumflex' ] ],
		[ 'Otilde', 213, 'latin capital letter O with tilde, U+00D5 ISOlat1', [ 'Õ', 'O', 'tilde' ] ],
		[ 'Ouml', 214, 'latin capital letter O with diaeresis, U+00D6 ISOlat1', [ 'Ö', 'O', 'diaeresis' ] ],
		[ 'times', 215, 'multiplication sign, U+00D7 ISOnum', [ '×', 'multiplication', 'x', 'times' ] ],
		[
			'Oslash',
			216,
			'latin capital letter O with stroke = latin capital letter O slash, U+00D8 ISOlat1',
			[ 'Ø', 'O', 'stroke', 'slash' ]
		],
		[ 'Ugrave', 217, 'latin capital letter U with grave, U+00D9 ISOlat1', [ 'Ù', 'U', 'grave' ] ],
		[ 'Uacute', 218, 'latin capital letter U with acute, U+00DA ISOlat1', [ 'Ú', 'U', 'acute' ] ],
		[ 'Ucirc', 219, 'latin capital letter U with circumflex, U+00DB ISOlat1', [ 'Û', 'U', 'circumflex' ] ],
		[ 'Uuml', 220, 'latin capital letter U with diaeresis, U+00DC ISOlat1', [ 'Ü', 'U', 'diaeresis' ] ],
		[ 'Yacute', 221, 'latin capital letter Y with acute, U+00DD ISOlat1', [ 'Ý', 'Y', 'acute' ] ],
		[ 'THORN', 222, 'latin capital letter THORN, U+00DE ISOlat1', [ 'Þ', 'THORN', 'P' ] ],
		[ 'szlig', 223, 'latin small letter sharp s = ess-zed, U+00DF ISOlat1', [ 'ß', 'b', 'beta', 'ess-zed', 's' ] ],
		[
			'agrave',
			224,
			'latin small letter a with grave = latin small letter a grave, U+00E0 ISOlat1',
			[ 'à', 'a', 'grave' ]
		],
		[ 'aacute', 225, 'latin small letter a with acute, U+00E1 ISOlat1', [ 'á', 'a', 'acute' ] ],
		[ 'acirc', 226, 'latin small letter a with circumflex, U+00E2 ISOlat1', [ 'â', 'a', 'circumflex' ] ],
		[ 'atilde', 227, 'latin small letter a with tilde, U+00E3 ISOlat1', [ 'ã', 'a', 'tilde' ] ],
		[ 'auml', 228, 'latin small letter a with diaeresis, U+00E4 ISOlat1', [ 'ä', 'a', 'diaeresis' ] ],
		[
			'aring',
			229,
			'latin small letter a with ring above = latin small letter a ring, U+00E5 ISOlat1',
			[ 'å', 'a', 'ring' ]
		],
		[ 'aelig', 230, 'latin small letter ae = latin small ligature ae, U+00E6 ISOlat1', [ 'æ', 'ae' ] ],
		[ 'ccedil', 231, 'latin small letter c with cedilla, U+00E7 ISOlat1', [ 'ç', 'c', 'cedilla' ] ],
		[ 'egrave', 232, 'latin small letter e with grave, U+00E8 ISOlat1', [ 'è', 'e', 'grave' ] ],
		[ 'eacute', 233, 'latin small letter e with acute, U+00E9 ISOlat1', [ 'é', 'e', 'acute' ] ],
		[ 'ecirc', 234, 'latin small letter e with circumflex, U+00EA ISOlat1', [ 'ê', 'e', 'circumflex' ] ],
		[ 'euml', 235, 'latin small letter e with diaeresis, U+00EB ISOlat1', [ 'ë', 'e', 'diaeresis' ] ],
		[ 'igrave', 236, 'latin small letter i with grave, U+00EC ISOlat1', [ 'ì', 'i', 'grave', 'L' ] ],
		[ 'iacute', 237, 'latin small letter i with acute, U+00ED ISOlat1', [ 'í', 'i', 'acute', 'L' ] ],
		[ 'icirc', 238, 'latin small letter i with circumflex, U+00EE ISOlat1', [ 'î', 'i', 'circumflex', 'L' ] ],
		[ 'iuml', 239, 'latin small letter i with diaeresis, U+00EF ISOlat1', [ 'ï', 'i', 'diaeresis', 'L' ] ],
		[ 'eth', 240, 'latin small letter eth, U+00F0 ISOlat1', [ 'ð', 'eth', 'o' ] ],
		[ 'ntilde', 241, 'latin small letter n with tilde, U+00F1 ISOlat1', [ 'ñ', 'n', 'tilde' ] ],
		[ 'ograve', 242, 'latin small letter o with grave, U+00F2 ISOlat1', [ 'ò', 'o', 'grave' ] ],
		[ 'oacute', 243, 'latin small letter o with acute, U+00F3 ISOlat1', [ 'ó', 'o', 'acute' ] ],
		[ 'ocirc', 244, 'latin small letter o with circumflex, U+00F4 ISOlat1', [ 'ô', 'o', 'circumflex' ] ],
		[ 'otilde', 245, 'latin small letter o with tilde, U+00F5 ISOlat1', [ 'õ', 'o', 'tilde' ] ],
		[ 'ouml', 246, 'latin small letter o with diaeresis, U+00F6 ISOlat1', [ 'ö', 'o', 'diaeresis' ] ],
		[ 'divide', 247, 'division sign, U+00F7 ISOnum', [ '÷', 'division', '/', 'div' ] ],
		[
			'oslash',
			248,
			'latin small letter o with stroke, = latin small letter o slash, U+00F8 ISOlat1',
			[ 'ø', 'o', 'stroke', 'slash' ]
		],
		[ 'ugrave', 249, 'latin small letter u with grave, U+00F9 ISOlat1', [ 'ù', 'u', 'grave' ] ],
		[ 'uacute', 250, 'latin small letter u with acute, U+00FA ISOlat1', [ 'ú', 'u', 'acute' ] ],
		[ 'ucirc', 251, 'latin small letter u with circumflex, U+00FB ISOlat1', [ 'û', 'u', 'circumflex' ] ],
		[ 'uuml', 252, 'latin small letter u with diaeresis, U+00FC ISOlat1', [ 'ü', 'u', 'diaeresis' ] ],
		[ 'yacute', 253, 'latin small letter y with acute, U+00FD ISOlat1', [ 'ý', 'y', 'acute' ] ],
		[ 'thorn', 254, 'latin small letter thorn, U+00FE ISOlat1', [ 'þ', 'p', 'thorn' ] ],
		[ 'yuml', 255, 'latin small letter y with diaeresis, U+00FF ISOlat1', [ 'ÿ', 'y', 'diaeresis' ] ],
		[
			'fnof',
			402,
			'latin small f with hook = function = florin, U+0192 ISOtech',
			[ 'ƒ', 'f', 'hook', 'function', 'florin' ]
		],
		[ 'Alpha', 913, 'greek capital letter alpha, U+0391', [ 'Α', 'a', 'alpha' ] ],
		[ 'Beta', 914, 'greek capital letter beta, U+0392', [ 'Β', 'B', 'beta' ] ],
		[ 'Gamma', 915, 'greek capital letter gamma, U+0393 ISOgrk3', [ 'Γ', 'gamma', 'L' ] ],
		[ 'Delta', 916, 'greek capital letter delta, U+0394 ISOgrk3', [ 'Δ', 'delta', 'triangle' ] ],
		[ 'Epsilon', 917, 'greek capital letter epsilon, U+0395', [ 'Ε', 'e', 'epsilon' ] ],
		[ 'Zeta', 918, 'greek capital letter zeta, U+0396', [ 'Ζ', 'z', 'zeta' ] ],
		[ 'Eta', 919, 'greek capital letter eta, U+0397', [ 'Η', 'h', 'eta' ] ],
		[ 'Theta', 920, 'greek capital letter theta, U+0398 ISOgrk3', [ 'Θ', 'theta', 'o' ] ],
		[ 'Iota', 921, 'greek capital letter iota, U+0399', [ 'Ι', 'i', 'iota' ] ],
		[ 'Kappa', 922, 'greek capital letter kappa, U+039A', [ 'Κ', 'k', 'kappa' ] ],
		[ 'Lambda', 923, 'greek capital letter lambda, U+039B ISOgrk3', [ 'Λ', 'lambda', 'triangle' ] ],
		[ 'Mu', 924, 'greek capital letter mu, U+039C', [ 'Μ', 'm', 'mu' ] ],
		[ 'Nu', 925, 'greek capital letter nu, U+039D', [ 'Ν', 'n', 'nu' ] ],
		[ 'Xi', 926, 'greek capital letter xi, U+039E ISOgrk3', [ 'Ξ', 'xi', 'e' ] ],
		[ 'Omicron', 927, 'greek capital letter omicron, U+039F', [ 'Ο', 'o', 'omicron' ] ],
		[ 'Pi', 928, 'greek capital letter pi, U+03A0 ISOgrk3', [ 'Π', 'pi' ] ],
		[ 'Rho', 929, 'greek capital letter rho, U+03A1', [ 'Ρ', 'p', 'rho' ] ],
		[ 'Sigma', 931, 'greek capital letter sigma, U+03A3 ISOgrk3', [ 'Σ', 'sigma', 'e' ] ],
		[ 'Tau', 932, 'greek capital letter tau, U+03A4', [ 'Τ', 't', 'tau' ] ],
		[ 'Upsilon', 933, 'greek capital letter upsilon, U+03A5 ISOgrk3', [ 'Υ', 'upsilon', 'y' ] ],
		[ 'Phi', 934, 'greek capital letter phi, U+03A6 ISOgrk3', [ 'Φ', 'o', 'phi' ] ],
		[ 'Chi', 935, 'greek capital letter chi, U+03A7', [ 'Χ', 'x', 'chi' ] ],
		[ 'Psi', 936, 'greek capital letter psi, U+03A8 ISOgrk3', [ 'Ψ', 'y', 'psi' ] ],
		[ 'Omega', 937, 'greek capital letter omega, U+03A9 ISOgrk3', [ 'Ω', 'omega', 'o' ] ],
		[ 'alpha', 945, 'greek small letter alpha, U+03B1 ISOgrk3', [ 'α', 'alpha', 'a' ] ],
		[ 'beta', 946, 'greek small letter beta, U+03B2 ISOgrk3', [ 'β', 'b', 'beta' ] ],
		[ 'gamma', 947, 'greek small letter gamma, U+03B3 ISOgrk3', [ 'γ', 'y', 'gamma' ] ],
		[ 'delta', 948, 'greek small letter delta, U+03B4 ISOgrk3', [ 'δ', 'd', 'delta', 'o' ] ],
		[ 'epsilon', 949, 'greek small letter epsilon, U+03B5 ISOgrk3', [ 'ε', 'e', 'epsilon' ] ],
		[ 'zeta', 950, 'greek small letter zeta, U+03B6 ISOgrk3', [ 'ζ', 'z', 'zeta' ] ],
		[ 'eta', 951, 'greek small letter eta, U+03B7 ISOgrk3', [ 'η', 'n', 'eta' ] ],
		[ 'theta', 952, 'greek small letter theta, U+03B8 ISOgrk3', [ 'θ', 'o', 'theta' ] ],
		[ 'iota', 953, 'greek small letter iota, U+03B9 ISOgrk3', [ 'ι', 'i', 'l', 'iota' ] ],
		[ 'kappa', 954, 'greek small letter kappa, U+03BA ISOgrk3', [ 'κ', 'k', 'kappa' ] ],
		[ 'lambda', 955, 'greek small letter lambda, U+03BB ISOgrk3', [ 'λ', 'n', 'lambda', 'y' ] ],
		[ 'mu', 956, 'greek small letter mu, U+03BC ISOgrk3', [ 'μ', 'u', 'mu' ] ],
		[ 'nu', 957, 'greek small letter nu, U+03BD ISOgrk3', [ 'ν', 'nu', 'v' ] ],
		[ 'xi', 958, 'greek small letter xi, U+03BE ISOgrk3', [ 'ξ', 'e', 'xi' ] ],
		[ 'omicron', 959, 'greek small letter omicron, U+03BF NEW', [ 'ο', 'o', 'omicron' ] ],
		[ 'pi', 960, 'greek small letter pi, U+03C0 ISOgrk3', [ 'π', 'pi' ] ],
		[ 'rho', 961, 'greek small letter rho, U+03C1 ISOgrk3', [ 'ρ', 'p', 'o', 'rho' ] ],
		[ 'sigmaf', 962, 'greek small letter final sigma, U+03C2 ISOgrk3', [ 'ς', 'c', 'sigma', 'final' ] ],
		[ 'sigma', 963, 'greek small letter sigma, U+03C3 ISOgrk3', [ 'σ', 'o', 'sigma' ] ],
		[ 'tau', 964, 'greek small letter tau, U+03C4 ISOgrk3', [ 'τ', 't', 'tau' ] ],
		[ 'upsilon', 965, 'greek small letter upsilon, U+03C5 ISOgrk3', [ 'υ', 'u', 'upsilon' ] ],
		[ 'phi', 966, 'greek small letter phi, U+03C6 ISOgrk3', [ 'φ', 'y', 'phi' ] ],
		[ 'chi', 967, 'greek small letter chi, U+03C7 ISOgrk3', [ 'χ', 'x', 'chi' ] ],
		[ 'psi', 968, 'greek small letter psi, U+03C8 ISOgrk3', [ 'ψ', 'y', 'psi' ] ],
		[ 'omega', 969, 'greek small letter omega, U+03C9 ISOgrk3', [ 'ω', 'w', 'omega' ] ],
		[ 'thetasym', 977, 'greek small letter theta symbol, U+03D1 NEW', [ 'ϑ', '0', 'theta' ] ],
		[ 'upsih', 978, 'greek upsilon with hook symbol, U+03D2 NEW', [ 'ϒ', 'y', 'hook', 'upsilon' ] ],
		[ 'piv', 982, 'greek pi symbol, U+03D6 ISOgrk3', [ 'ϖ', 'pi' ] ],
		[ 'bull', 8226, 'bullet = black small circle, U+2022 ISOpub ', [ '•', '*', 'bullet' ] ],
		[ 'hellip', 8230, 'horizontal ellipsis = three dot leader, U+2026 ISOpub ', [ '…', '...' ] ],
		[ 'prime', 8242, 'prime = minutes = feet, U+2032 ISOtech', [ '′', "'", '`', 'prime' ] ],
		[ 'Prime', 8243, 'double prime = seconds = inches, U+2033 ISOtech', [ '″', '"', 'double', "''" ] ],
		[ 'oline', 8254, 'overline = spacing overscore, U+203E NEW', [ '‾', 'overline', 'overscore', '_' ] ],
		[ 'frasl', 8260, 'fraction slash, U+2044 NEW', [ '⁄', '/', 'fraction', 'slash' ] ],
		[ 'weierp', 8472, 'script capital P = power set = Weierstrass p, U+2118 ISOamso', [ '℘', 'P', 'power' ] ],
		[
			'image',
			8465,
			'blackletter capital I = imaginary part, U+2111 ISOamso',
			[ 'ℑ', 'blackletter', 'I', 'imaginary' ]
		],
		[
			'real',
			8476,
			'blackletter capital R = real part symbol, U+211C ISOamso',
			[ 'ℜ', 'R', 'blackletter', 'real', 'part' ]
		],
		[ 'trade', 8482, 'trade mark sign, U+2122 ISOnum', [ '™', 'trade', 'mark', 'tm' ] ],
		[
			'alefsym',
			8501,
			'alef symbol = first transfinite cardinal, U+2135 NEW',
			[ 'ℵ', 'alef', 'transfinite', 'n' ]
		],
		[ 'larr', 8592, 'leftwards arrow, U+21', [ '←', '<-', '<', 'leftwards', 'arrow' ] ],
		[ 'rarr', 8594, 'rightwards arrow, U+2192 ISOnum', [ '→', '->', '>', 'rightwards', 'arrow' ] ],
		[ 'darr', 8595, 'downwards arrow, U+2193 ISOnum', [ '↓', 'downwards', 'arrow' ] ],
		[ 'harr', 8596, 'left right arrow, U+2194 ISOamsa', [ '↔', '<->', 'right', '<>', 'left', 'arrow' ] ],
		[
			'crarr',
			8629,
			'downwards arrow with corner leftwards = carriage return, U+21B5 NEW',
			[ '↵', 'downwards', 'arrow', 'leftwards', 'carriage', 'return', 'enter' ]
		],
		[ 'lArr', 8656, 'leftwards double arrow, U+21D0 ISOtech.', [ '⇐', 'double', 'arrow', '<', '<-', '<=' ] ],
		[ 'uarr', 8593, 'upwards arrow, U+2191 ISOnum', [ 'upwards', 'arrow' ] ],
		[ 'uArr', 8657, 'upwards double arrow, U+21D1 ISOamsa', [ '⇑', 'upwards', 'double', 'arrow' ] ],
		[
			'rArr',
			8658,
			'rightwards double arrow, U+21D2 ISOtech.',
			[ '⇒', '>', '->', 'rightwards', 'double', '=>', 'arrow' ]
		],
		[ 'dArr', 8659, 'downwards double arrow, U+21D3 ISOamsa', [ '⇓', 'downwards', 'double', 'arrow' ] ],
		[
			'hArr',
			8660,
			'left right double arrow, U+21D4 ISOamsa',
			[ '⇔', '<>', '<=>', '<->', 'left', 'right', 'double', 'arrow' ]
		],
		[ 'forall', 8704, 'for all, U+2200 ISOtech', [ '∀', 'all', 'A' ] ],
		[ 'part', 8706, 'partial differential, U+2202 ISOtech ', [ '∂', 'partial', 'differential', 'd' ] ],
		[ 'exist', 8707, 'there exists, U+2203 ISOtech', [ '∃', 'e', 'exists' ] ],
		[
			'empty',
			8709,
			'empty set = null set = diameter, U+2205 ISOamso',
			[ '∅', 'o', 'empty', 'set', 'null', 'diameter' ]
		],
		[ 'nabla', 8711, 'nabla = backward difference, U+2207 ISOtech', [ '∇', 'nabla', 'difference', 'triangle' ] ],
		[ 'isin', 8712, 'element of, U+2208 ISOtech', [ '∈', 'element', 'e' ] ],
		[ 'notin', 8713, 'not an element of, U+2209 ISOtech', [ '∉', 'e', 'not', 'element' ] ],
		[ 'ni', 8715, 'contains as member, U+220B ISOtech', [ '∋', 'contains', 'member', 'e' ] ],
		[ 'prod', 8719, 'n-ary product = product sign, U+220F ISOamsb', [ '∏', 'n-ary', 'product', 'n' ] ],
		[ 'sum', 8721, 'n-ary sumation, U+2211 ISOamsb', [ '∑', 'e', 'n-ary', 'sumation' ] ],
		[ 'minus', 8722, 'minus sign, U+2212 ISOtech', [ '−', '-', 'minus' ] ],
		[ 'lowast', 8727, 'asterisk operator, U+2217 ISOtech', [ '∗', 'asterisk', '*', 'bullet' ] ],
		[ 'radic', 8730, 'square root = radical sign, U+221A ISOtech', [ '√', 'square', 'root', 'y', '^' ] ],
		[ 'prop', 8733, 'proportional to, U+221D ISOtech', [ '∝', 'proportional' ] ],
		[ 'infin', 8734, 'infinity, U+221E ISOtech', [ '∞', 'infinity' ] ],
		[ 'ang', 8736, 'angle, U+2220 ISOamso', [ '∠', 'angle', '<' ] ],
		[ 'and', 8743, 'logical and = wedge, U+2227 ISOtech', [ '∧', 'logical', 'and', 'wedge', '^' ] ],
		[ 'or', 8744, 'logical or = vee, U+2228 ISOtech', [ '∨', 'logical', 'or', 'vee' ] ],
		[ 'cap', 8745, 'intersection = cap, U+2229 ISOtech', [ '∩', 'intersection', 'cap' ] ],
		[ 'cup', 8746, 'union = cup, U+222A ISOtech', [ '∪', 'union', 'cup' ] ],
		[ 'int', 8747, 'integral, U+222B ISOtech', [ '∫', 'integral', 'f' ] ],
		[ 'there4', 8756, 'therefore, U+2234 ISOtech', [ '∴', 'therefore', '...' ] ],
		[ 'sim', 8764, 'tilde operator = varies with = similar to, U+223C ISOtech', [ '∼', 'tilde', '~', 'similar' ] ],
		[ 'cong', 8773, 'approximately equal to, U+2245 ISOtech', [ '≅', 'approximately', 'equal', '=', '~' ] ],
		[
			'asymp',
			8776,
			'almost equal to = asymptotic to, U+2248 ISOamsr',
			[ '≈', 'almost', '~', '~~', '=', 'equal' ]
		],
		[ 'ne', 8800, 'not equal to, U+2260 ISOtech', [ '≠', 'not', 'equal', '=' ] ],
		[ 'equiv', 8801, 'identical to, U+2261 ISOtech', [ '≡', 'identical', '=' ] ],
		[ 'le', 8804, 'less-than or equal to, U+2264 ISOtech', [ '≤', 'less-than', 'equal', '<=', '=<', '<', '=' ] ],
		[
			'ge',
			8805,
			'greater-than or equal to, U+2265 ISOtech',
			[ '≥', 'greater-than', 'equal', '>=', '=>', '=', '>' ]
		],
		[ 'sub', 8834, 'subset of, U+2282 ISOtech', [ '⊂', 'subset', 'c' ] ],
		[ 'sup', 8835, 'superset of, U+2283 ISOtech', [ '⊃', 'superset', 'c' ] ],
		[ 'nsub', 8836, 'not a subset of, U+2284 ISOamsn', [ '⊄', 'c', 'not', 'subset' ] ],
		[ 'sube', 8838, 'subset of or equal to, U+2286 ISOtech', [ '⊆', 'subset', 'equal', 'c', '=' ] ],
		[ 'supe', 8839, 'superset of or equal to, U+2287 ISOtech', [ '⊇', 'c', 'superset', 'equal', '=' ] ],
		[ 'oplus', 8853, 'circled plus = direct sum, U+2295 ISOamsb', [ '⊕', 'circled', 'plus', '+', 'O', '0' ] ],
		[
			'otimes',
			8855,
			'circled times = vector product, U+2297 ISOamsb',
			[ '⊗', 'circled', 'times', 'vector', 'x', '*', 'o', '0' ]
		],
		[
			'perp',
			8869,
			'up tack = orthogonal to = perpendicular, U+22A5 ISOtech',
			[ '⊥', 'up', '|', 'orthogonal', 'perpendicular' ]
		],
		[ 'sdot', 8901, 'dot operator, U+22C5 ISOamsb', [ '⋅', '.', 'dot', '*', 'bullet' ] ],
		[ 'lceil', 8968, 'left ceiling = apl upstile, U+2308 ISOamsc ', [ '⌈', '[', 'ceiling' ] ],
		[ 'rceil', 8969, 'right ceiling, U+2309 ISOamsc ', [ '⌉', ']', 'right' ] ],
		[ 'lfloor', 8970, 'left floor = apl downstile, U+230A ISOamsc ', [ '⌊', '[', 'floor' ] ],
		[ 'rfloor', 8971, 'right floor, U+230B ISOamsc ', [ '⌋', ']', 'right', 'floor' ] ],
		[ 'lang', 9001, 'left-pointing angle bracket = bra, U+2329 ISOtech', [ '〈', '<', 'angle', 'bracket' ] ],
		[ 'rang', 9002, 'right-pointing angle bracket = ket, U+232A ISOtech', [ '〉', '>', 'angle', 'bracket' ] ],
		[ 'loz', 9674, 'lozenge, U+25CA ISOpub', [ '◊', '<>', 'lozenge', 'diamond' ] ],
		[ 'spades', 9824, 'black spade suit, U+2660 ISOpub', [ '♠', 'spade', 'card', 'cards' ] ],
		[ 'clubs', 9827, 'black club suit = shamrock, U+2663 ISOpub', [ '♣', 'club', 'shamrock', 'card', 'cards' ] ],
		[
			'hearts',
			9829,
			'black heart suit = valentine, U+2665 ISOpub',
			[ '♥', 'heart', 'valentine', 'card', 'cards' ]
		],
		[ 'diams', 9830, 'black diamond suit, U+2666 ISOpub', [ '♦', 'card', 'cards', 'diamond' ] ],
		[ 'quot', 34, 'quotation mark = APL quote, U+0022 ISOnum', [ "'", 'quotation' ] ],
		[ 'amp', 38, 'ampersand, U+0026 ISOnum', [ '&', '&', 'and', 'ampersand' ] ],
		[ 'lt', 60, 'less-than sign, U+003C ISOnum', [ '<', 'less-than', '<', 'left', 'arrow' ] ],
		[ 'gt', 62, 'greater-than sign, U+003E ISOnum', [ '>', '>', 'greater-than' ] ],
		[ 'OElig', 338, 'latin capital ligature OE, U+0152 ISOlat2', [ 'Œ', 'OE' ] ],
		[ 'oelig', 339, 'latin small ligature oe, U+0153 ISOlat2', [ 'œ', 'oe' ] ],
		[ 'Scaron', 352, 'latin capital letter S with caron, U+0160 ISOlat2', [ 'Š', 'S', 'caron' ] ],
		[ 'scaron', 353, 'latin small letter s with caron, U+0161 ISOlat2', [ 'š', 's', 'caron' ] ],
		[ 'Yuml', 376, 'latin capital letter Y with diaeresis, U+0178 ISOlat2', [ 'Ÿ', 'Y', 'diaeresis' ] ],
		[ 'circ', 710, 'modifier letter circumflex accent, U+02C6 ISOpub', [ 'ˆ', 'circumflex', 'accent', '^' ] ],
		[ 'tilde', 732, 'small tilde, U+02DC ISOdia', [ '˜', 'tilde', '~' ] ],
		[ 'ensp', 8194, 'en space, U+2002 ISOpub', [ 'en', 'space' ] ],
		[ 'emsp', 8195, 'em space, U+2003 ISOpub', [ 'em', 'space' ] ],
		[ 'thinsp', 8201, 'thin space, U+2009 ISOpub', [ 'thin', 'space' ] ],
		[ 'zwnj', 8204, 'zero width non-joiner, U+200C NEW RFC 2070', [ '‌', ' ', 'zero', 'non-joiner' ] ],
		[ 'zwj', 8205, 'zero width joiner, U+200D NEW RFC 2070', [ '‍', ' ', 'zero' ] ],
		[ 'ndash', 8211, 'en dash, U+2013 ISOpub', [ '–', 'n', 'en', 'dash', '-' ] ],
		[ 'mdash', 8212, 'em dash, U+2014 ISOpub', [ '—', 'm', 'em', 'dash', '-' ] ],
		[ 'lsquo', 8216, 'left single quotation mark, U+2018 ISOnum', [ '‘', 'left', 'quotation', 'quote', '"' ] ],
		[ 'rsquo', 8217, 'right single quotation mark, U+2019 ISOnum', [ '’', "'", 'right', 'quotation', 'quote' ] ],
		[
			'sbquo',
			8218,
			'single low-9 quotation mark, U+201A NEW',
			[ '‚', ',', 'quotation', 'quote', 'low-9', 'low' ]
		],
		[ 'ldquo', 8220, 'left double quotation mark, U+201C ISOnum', [ '“', '"', 'quotation', 'quote' ] ],
		[ 'rdquo', 8221, 'right double quotation mark, U+201D ISOnum', [ '”', '"', 'double', 'quotation', 'quote' ] ],
		[
			'bdquo',
			8222,
			'double low-9 quotation mark, U+201E NEW',
			[ '„', 'double', 'low-9', 'quotation', 'quote', '"' ]
		],
		[ 'dagger', 8224, 'dagger, U+2020 ISOpub', [ '†', '+', 'dagger' ] ],
		[ 'Dagger', 8225, 'double dagger, U+2021 ISOpub', [ '‡', 'double', 'dagger', '++', '+' ] ],
		[ 'permil', 8240, 'per mille sign, U+2030 ISOtech', [ '‰', 'per', 'mille', '%' ] ],
		[
			'lsaquo',
			8249,
			'single left-pointing angle quotation mark, U+2039 ISO proposed',
			[ '‹', 'left-pointing', 'angle', '<' ]
		],
		[
			'rsaquo',
			8250,
			'single right-pointing angle quotation mark, U+203A ISO proposed',
			[ '›', 'right-pointing', 'angle', '>' ]
		],
		[ 'euro', 8364, 'euro sign, U+20AC NEW', [ '€', 'E', '€', 'euro' ] ]
	];

	public static function find( $like ) {
		$results = array();
		foreach ( self::DATA as $item ) {
			if ( in_array( $like, $item[3] ) ) {
				$results[] = array(
					'uid' => $item[1],
					'arg' => '&' . $item[0] . ';',
					'title' => html_entity_decode( '&' . $item[0] . ';' ),
					'subtitle' => '&' . $item[0] . '; - press alt, cmd or control to change what\'s copied to your clipboard',
					'autocomplete' => $item[0],
					'mods' => [
						'alt' => [
							'arg' => html_entity_decode( '&' . $item[0] . ';' ),
							'subtitle' => html_entity_decode( '&' . $item[0] . ';' ) . ' - character'
						],
						'cmd' => [
							'arg' => '&#' . $item[1] . ';',
							'subtitle' => '&#' . $item[1] . '; - decimal entity'
						],
						'ctrl' => [
							'arg' => '\\' . $item[1],
							'subtitle' => '\\' . $item[1] . ' - CSS entity'
						],
					]
				);
			}
		}

		return [ 'items' => $results ];
	}
}

$entities = new Entities();
$results  = $entities->find( $argv[1] );
echo json_encode( $results );
