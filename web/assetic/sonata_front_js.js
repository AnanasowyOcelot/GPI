/*!
 * jQuery JavaScript Library v2.1.1
 * http://jquery.com/
 *
 * Includes Sizzle.js
 * http://sizzlejs.com/
 *
 * Copyright 2005, 2014 jQuery Foundation, Inc. and other contributors
 * Released under the MIT license
 * http://jquery.org/license
 *
 * Date: 2014-05-01T17:11Z
 */
(function (b, a) {
    if (typeof module === "object" && typeof module.exports === "object") {
        module.exports = b.document ? a(b, true) : function (c) {
            if (!c.document) {
                throw new Error("jQuery requires a window with a document")
            }
            return a(c)
        }
    } else {
        a(b)
    }
}(typeof window !== "undefined" ? window : this, function (window, noGlobal) {
    var arr = [];
    var slice = arr.slice;
    var concat = arr.concat;
    var push = arr.push;
    var indexOf = arr.indexOf;
    var class2type = {};
    var toString = class2type.toString;
    var hasOwn = class2type.hasOwnProperty;
    var support = {};
    var document = window.document, version = "2.1.1", jQuery = function (selector, context) {
        return new jQuery.fn.init(selector, context)
    }, rtrim = /^[\s\uFEFF\xA0]+|[\s\uFEFF\xA0]+$/g, rmsPrefix = /^-ms-/, rdashAlpha = /-([\da-z])/gi, fcamelCase = function (all, letter) {
        return letter.toUpperCase()
    };
    jQuery.fn = jQuery.prototype = {jquery: version, constructor: jQuery, selector: "", length: 0, toArray: function () {
        return slice.call(this)
    }, get: function (num) {
        return num != null ? (num < 0 ? this[num + this.length] : this[num]) : slice.call(this)
    }, pushStack: function (elems) {
        var ret = jQuery.merge(this.constructor(), elems);
        ret.prevObject = this;
        ret.context = this.context;
        return ret
    }, each: function (callback, args) {
        return jQuery.each(this, callback, args)
    }, map: function (callback) {
        return this.pushStack(jQuery.map(this, function (elem, i) {
            return callback.call(elem, i, elem)
        }))
    }, slice: function () {
        return this.pushStack(slice.apply(this, arguments))
    }, first: function () {
        return this.eq(0)
    }, last: function () {
        return this.eq(-1)
    }, eq: function (i) {
        var len = this.length, j = +i + (i < 0 ? len : 0);
        return this.pushStack(j >= 0 && j < len ? [this[j]] : [])
    }, end: function () {
        return this.prevObject || this.constructor(null)
    }, push: push, sort: arr.sort, splice: arr.splice};
    jQuery.extend = jQuery.fn.extend = function () {
        var options, name, src, copy, copyIsArray, clone, target = arguments[0] || {}, i = 1, length = arguments.length, deep = false;
        if (typeof target === "boolean") {
            deep = target;
            target = arguments[i] || {};
            i++
        }
        if (typeof target !== "object" && !jQuery.isFunction(target)) {
            target = {}
        }
        if (i === length) {
            target = this;
            i--
        }
        for (; i < length; i++) {
            if ((options = arguments[i]) != null) {
                for (name in options) {
                    src = target[name];
                    copy = options[name];
                    if (target === copy) {
                        continue
                    }
                    if (deep && copy && (jQuery.isPlainObject(copy) || (copyIsArray = jQuery.isArray(copy)))) {
                        if (copyIsArray) {
                            copyIsArray = false;
                            clone = src && jQuery.isArray(src) ? src : []
                        } else {
                            clone = src && jQuery.isPlainObject(src) ? src : {}
                        }
                        target[name] = jQuery.extend(deep, clone, copy)
                    } else {
                        if (copy !== undefined) {
                            target[name] = copy
                        }
                    }
                }
            }
        }
        return target
    };
    jQuery.extend({expando: "jQuery" + (version + Math.random()).replace(/\D/g, ""), isReady: true, error: function (msg) {
        throw new Error(msg)
    }, noop: function () {
    }, isFunction: function (obj) {
        return jQuery.type(obj) === "function"
    }, isArray: Array.isArray, isWindow: function (obj) {
        return obj != null && obj === obj.window
    }, isNumeric: function (obj) {
        return !jQuery.isArray(obj) && obj - parseFloat(obj) >= 0
    }, isPlainObject: function (obj) {
        if (jQuery.type(obj) !== "object" || obj.nodeType || jQuery.isWindow(obj)) {
            return false
        }
        if (obj.constructor && !hasOwn.call(obj.constructor.prototype, "isPrototypeOf")) {
            return false
        }
        return true
    }, isEmptyObject: function (obj) {
        var name;
        for (name in obj) {
            return false
        }
        return true
    }, type: function (obj) {
        if (obj == null) {
            return obj + ""
        }
        return typeof obj === "object" || typeof obj === "function" ? class2type[toString.call(obj)] || "object" : typeof obj
    }, globalEval: function (code) {
        var script, indirect = eval;
        code = jQuery.trim(code);
        if (code) {
            if (code.indexOf("use strict") === 1) {
                script = document.createElement("script");
                script.text = code;
                document.head.appendChild(script).parentNode.removeChild(script)
            } else {
                indirect(code)
            }
        }
    }, camelCase: function (string) {
        return string.replace(rmsPrefix, "ms-").replace(rdashAlpha, fcamelCase)
    }, nodeName: function (elem, name) {
        return elem.nodeName && elem.nodeName.toLowerCase() === name.toLowerCase()
    }, each: function (obj, callback, args) {
        var value, i = 0, length = obj.length, isArray = isArraylike(obj);
        if (args) {
            if (isArray) {
                for (; i < length; i++) {
                    value = callback.apply(obj[i], args);
                    if (value === false) {
                        break
                    }
                }
            } else {
                for (i in obj) {
                    value = callback.apply(obj[i], args);
                    if (value === false) {
                        break
                    }
                }
            }
        } else {
            if (isArray) {
                for (; i < length; i++) {
                    value = callback.call(obj[i], i, obj[i]);
                    if (value === false) {
                        break
                    }
                }
            } else {
                for (i in obj) {
                    value = callback.call(obj[i], i, obj[i]);
                    if (value === false) {
                        break
                    }
                }
            }
        }
        return obj
    }, trim: function (text) {
        return text == null ? "" : (text + "").replace(rtrim, "")
    }, makeArray: function (arr, results) {
        var ret = results || [];
        if (arr != null) {
            if (isArraylike(Object(arr))) {
                jQuery.merge(ret, typeof arr === "string" ? [arr] : arr)
            } else {
                push.call(ret, arr)
            }
        }
        return ret
    }, inArray: function (elem, arr, i) {
        return arr == null ? -1 : indexOf.call(arr, elem, i)
    }, merge: function (first, second) {
        var len = +second.length, j = 0, i = first.length;
        for (; j < len; j++) {
            first[i++] = second[j]
        }
        first.length = i;
        return first
    }, grep: function (elems, callback, invert) {
        var callbackInverse, matches = [], i = 0, length = elems.length, callbackExpect = !invert;
        for (; i < length; i++) {
            callbackInverse = !callback(elems[i], i);
            if (callbackInverse !== callbackExpect) {
                matches.push(elems[i])
            }
        }
        return matches
    }, map: function (elems, callback, arg) {
        var value, i = 0, length = elems.length, isArray = isArraylike(elems), ret = [];
        if (isArray) {
            for (; i < length; i++) {
                value = callback(elems[i], i, arg);
                if (value != null) {
                    ret.push(value)
                }
            }
        } else {
            for (i in elems) {
                value = callback(elems[i], i, arg);
                if (value != null) {
                    ret.push(value)
                }
            }
        }
        return concat.apply([], ret)
    }, guid: 1, proxy: function (fn, context) {
        var tmp, args, proxy;
        if (typeof context === "string") {
            tmp = fn[context];
            context = fn;
            fn = tmp
        }
        if (!jQuery.isFunction(fn)) {
            return undefined
        }
        args = slice.call(arguments, 2);
        proxy = function () {
            return fn.apply(context || this, args.concat(slice.call(arguments)))
        };
        proxy.guid = fn.guid = fn.guid || jQuery.guid++;
        return proxy
    }, now: Date.now, support: support});
    jQuery.each("Boolean Number String Function Array Date RegExp Object Error".split(" "), function (i, name) {
        class2type["[object " + name + "]"] = name.toLowerCase()
    });
    function isArraylike(obj) {
        var length = obj.length, type = jQuery.type(obj);
        if (type === "function" || jQuery.isWindow(obj)) {
            return false
        }
        if (obj.nodeType === 1 && length) {
            return true
        }
        return type === "array" || length === 0 || typeof length === "number" && length > 0 && (length - 1) in obj
    }

    var Sizzle =
        /*!
         * Sizzle CSS Selector Engine v1.10.19
         * http://sizzlejs.com/
         *
         * Copyright 2013 jQuery Foundation, Inc. and other contributors
         * Released under the MIT license
         * http://jquery.org/license
         *
         * Date: 2014-04-18
         */
        (function (window) {
            var i, support, Expr, getText, isXML, tokenize, compile, select, outermostContext, sortInput, hasDuplicate, setDocument, document, docElem, documentIsHTML, rbuggyQSA, rbuggyMatches, matches, contains, expando = "sizzle" + -(new Date()), preferredDoc = window.document, dirruns = 0, done = 0, classCache = createCache(), tokenCache = createCache(), compilerCache = createCache(), sortOrder = function (a, b) {
                if (a === b) {
                    hasDuplicate = true
                }
                return 0
            }, strundefined = typeof undefined, MAX_NEGATIVE = 1 << 31, hasOwn = ({}).hasOwnProperty, arr = [], pop = arr.pop, push_native = arr.push, push = arr.push, slice = arr.slice, indexOf = arr.indexOf || function (elem) {
                var i = 0, len = this.length;
                for (; i < len; i++) {
                    if (this[i] === elem) {
                        return i
                    }
                }
                return -1
            }, booleans = "checked|selected|async|autofocus|autoplay|controls|defer|disabled|hidden|ismap|loop|multiple|open|readonly|required|scoped", whitespace = "[\\x20\\t\\r\\n\\f]", characterEncoding = "(?:\\\\.|[\\w-]|[^\\x00-\\xa0])+", identifier = characterEncoding.replace("w", "w#"), attributes = "\\[" + whitespace + "*(" + characterEncoding + ")(?:" + whitespace + "*([*^$|!~]?=)" + whitespace + "*(?:'((?:\\\\.|[^\\\\'])*)'|\"((?:\\\\.|[^\\\\\"])*)\"|(" + identifier + "))|)" + whitespace + "*\\]", pseudos = ":(" + characterEncoding + ")(?:\\((('((?:\\\\.|[^\\\\'])*)'|\"((?:\\\\.|[^\\\\\"])*)\")|((?:\\\\.|[^\\\\()[\\]]|" + attributes + ")*)|.*)\\)|)", rtrim = new RegExp("^" + whitespace + "+|((?:^|[^\\\\])(?:\\\\.)*)" + whitespace + "+$", "g"), rcomma = new RegExp("^" + whitespace + "*," + whitespace + "*"), rcombinators = new RegExp("^" + whitespace + "*([>+~]|" + whitespace + ")" + whitespace + "*"), rattributeQuotes = new RegExp("=" + whitespace + "*([^\\]'\"]*?)" + whitespace + "*\\]", "g"), rpseudo = new RegExp(pseudos), ridentifier = new RegExp("^" + identifier + "$"), matchExpr = {ID: new RegExp("^#(" + characterEncoding + ")"), CLASS: new RegExp("^\\.(" + characterEncoding + ")"), TAG: new RegExp("^(" + characterEncoding.replace("w", "w*") + ")"), ATTR: new RegExp("^" + attributes), PSEUDO: new RegExp("^" + pseudos), CHILD: new RegExp("^:(only|first|last|nth|nth-last)-(child|of-type)(?:\\(" + whitespace + "*(even|odd|(([+-]|)(\\d*)n|)" + whitespace + "*(?:([+-]|)" + whitespace + "*(\\d+)|))" + whitespace + "*\\)|)", "i"), bool: new RegExp("^(?:" + booleans + ")$", "i"), needsContext: new RegExp("^" + whitespace + "*[>+~]|:(even|odd|eq|gt|lt|nth|first|last)(?:\\(" + whitespace + "*((?:-\\d)?\\d*)" + whitespace + "*\\)|)(?=[^-]|$)", "i")}, rinputs = /^(?:input|select|textarea|button)$/i, rheader = /^h\d$/i, rnative = /^[^{]+\{\s*\[native \w/, rquickExpr = /^(?:#([\w-]+)|(\w+)|\.([\w-]+))$/, rsibling = /[+~]/, rescape = /'|\\/g, runescape = new RegExp("\\\\([\\da-f]{1,6}" + whitespace + "?|(" + whitespace + ")|.)", "ig"), funescape = function (_, escaped, escapedWhitespace) {
                var high = "0x" + escaped - 65536;
                return high !== high || escapedWhitespace ? escaped : high < 0 ? String.fromCharCode(high + 65536) : String.fromCharCode(high >> 10 | 55296, high & 1023 | 56320)
            };
            try {
                push.apply((arr = slice.call(preferredDoc.childNodes)), preferredDoc.childNodes);
                arr[preferredDoc.childNodes.length].nodeType
            } catch (e) {
                push = {apply: arr.length ? function (target, els) {
                    push_native.apply(target, slice.call(els))
                } : function (target, els) {
                    var j = target.length, i = 0;
                    while ((target[j++] = els[i++])) {
                    }
                    target.length = j - 1
                }}
            }
            function Sizzle(selector, context, results, seed) {
                var match, elem, m, nodeType, i, groups, old, nid, newContext, newSelector;
                if ((context ? context.ownerDocument || context : preferredDoc) !== document) {
                    setDocument(context)
                }
                context = context || document;
                results = results || [];
                if (!selector || typeof selector !== "string") {
                    return results
                }
                if ((nodeType = context.nodeType) !== 1 && nodeType !== 9) {
                    return[]
                }
                if (documentIsHTML && !seed) {
                    if ((match = rquickExpr.exec(selector))) {
                        if ((m = match[1])) {
                            if (nodeType === 9) {
                                elem = context.getElementById(m);
                                if (elem && elem.parentNode) {
                                    if (elem.id === m) {
                                        results.push(elem);
                                        return results
                                    }
                                } else {
                                    return results
                                }
                            } else {
                                if (context.ownerDocument && (elem = context.ownerDocument.getElementById(m)) && contains(context, elem) && elem.id === m) {
                                    results.push(elem);
                                    return results
                                }
                            }
                        } else {
                            if (match[2]) {
                                push.apply(results, context.getElementsByTagName(selector));
                                return results
                            } else {
                                if ((m = match[3]) && support.getElementsByClassName && context.getElementsByClassName) {
                                    push.apply(results, context.getElementsByClassName(m));
                                    return results
                                }
                            }
                        }
                    }
                    if (support.qsa && (!rbuggyQSA || !rbuggyQSA.test(selector))) {
                        nid = old = expando;
                        newContext = context;
                        newSelector = nodeType === 9 && selector;
                        if (nodeType === 1 && context.nodeName.toLowerCase() !== "object") {
                            groups = tokenize(selector);
                            if ((old = context.getAttribute("id"))) {
                                nid = old.replace(rescape, "\\$&")
                            } else {
                                context.setAttribute("id", nid)
                            }
                            nid = "[id='" + nid + "'] ";
                            i = groups.length;
                            while (i--) {
                                groups[i] = nid + toSelector(groups[i])
                            }
                            newContext = rsibling.test(selector) && testContext(context.parentNode) || context;
                            newSelector = groups.join(",")
                        }
                        if (newSelector) {
                            try {
                                push.apply(results, newContext.querySelectorAll(newSelector));
                                return results
                            } catch (qsaError) {
                            } finally {
                                if (!old) {
                                    context.removeAttribute("id")
                                }
                            }
                        }
                    }
                }
                return select(selector.replace(rtrim, "$1"), context, results, seed)
            }

            function createCache() {
                var keys = [];

                function cache(key, value) {
                    if (keys.push(key + " ") > Expr.cacheLength) {
                        delete cache[keys.shift()]
                    }
                    return(cache[key + " "] = value)
                }

                return cache
            }

            function markFunction(fn) {
                fn[expando] = true;
                return fn
            }

            function assert(fn) {
                var div = document.createElement("div");
                try {
                    return !!fn(div)
                } catch (e) {
                    return false
                } finally {
                    if (div.parentNode) {
                        div.parentNode.removeChild(div)
                    }
                    div = null
                }
            }

            function addHandle(attrs, handler) {
                var arr = attrs.split("|"), i = attrs.length;
                while (i--) {
                    Expr.attrHandle[arr[i]] = handler
                }
            }

            function siblingCheck(a, b) {
                var cur = b && a, diff = cur && a.nodeType === 1 && b.nodeType === 1 && (~b.sourceIndex || MAX_NEGATIVE) - (~a.sourceIndex || MAX_NEGATIVE);
                if (diff) {
                    return diff
                }
                if (cur) {
                    while ((cur = cur.nextSibling)) {
                        if (cur === b) {
                            return -1
                        }
                    }
                }
                return a ? 1 : -1
            }

            function createInputPseudo(type) {
                return function (elem) {
                    var name = elem.nodeName.toLowerCase();
                    return name === "input" && elem.type === type
                }
            }

            function createButtonPseudo(type) {
                return function (elem) {
                    var name = elem.nodeName.toLowerCase();
                    return(name === "input" || name === "button") && elem.type === type
                }
            }

            function createPositionalPseudo(fn) {
                return markFunction(function (argument) {
                    argument = +argument;
                    return markFunction(function (seed, matches) {
                        var j, matchIndexes = fn([], seed.length, argument), i = matchIndexes.length;
                        while (i--) {
                            if (seed[(j = matchIndexes[i])]) {
                                seed[j] = !(matches[j] = seed[j])
                            }
                        }
                    })
                })
            }

            function testContext(context) {
                return context && typeof context.getElementsByTagName !== strundefined && context
            }

            support = Sizzle.support = {};
            isXML = Sizzle.isXML = function (elem) {
                var documentElement = elem && (elem.ownerDocument || elem).documentElement;
                return documentElement ? documentElement.nodeName !== "HTML" : false
            };
            setDocument = Sizzle.setDocument = function (node) {
                var hasCompare, doc = node ? node.ownerDocument || node : preferredDoc, parent = doc.defaultView;
                if (doc === document || doc.nodeType !== 9 || !doc.documentElement) {
                    return document
                }
                document = doc;
                docElem = doc.documentElement;
                documentIsHTML = !isXML(doc);
                if (parent && parent !== parent.top) {
                    if (parent.addEventListener) {
                        parent.addEventListener("unload", function () {
                            setDocument()
                        }, false)
                    } else {
                        if (parent.attachEvent) {
                            parent.attachEvent("onunload", function () {
                                setDocument()
                            })
                        }
                    }
                }
                support.attributes = assert(function (div) {
                    div.className = "i";
                    return !div.getAttribute("className")
                });
                support.getElementsByTagName = assert(function (div) {
                    div.appendChild(doc.createComment(""));
                    return !div.getElementsByTagName("*").length
                });
                support.getElementsByClassName = rnative.test(doc.getElementsByClassName) && assert(function (div) {
                    div.innerHTML = "<div class='a'></div><div class='a i'></div>";
                    div.firstChild.className = "i";
                    return div.getElementsByClassName("i").length === 2
                });
                support.getById = assert(function (div) {
                    docElem.appendChild(div).id = expando;
                    return !doc.getElementsByName || !doc.getElementsByName(expando).length
                });
                if (support.getById) {
                    Expr.find.ID = function (id, context) {
                        if (typeof context.getElementById !== strundefined && documentIsHTML) {
                            var m = context.getElementById(id);
                            return m && m.parentNode ? [m] : []
                        }
                    };
                    Expr.filter.ID = function (id) {
                        var attrId = id.replace(runescape, funescape);
                        return function (elem) {
                            return elem.getAttribute("id") === attrId
                        }
                    }
                } else {
                    delete Expr.find.ID;
                    Expr.filter.ID = function (id) {
                        var attrId = id.replace(runescape, funescape);
                        return function (elem) {
                            var node = typeof elem.getAttributeNode !== strundefined && elem.getAttributeNode("id");
                            return node && node.value === attrId
                        }
                    }
                }
                Expr.find.TAG = support.getElementsByTagName ? function (tag, context) {
                    if (typeof context.getElementsByTagName !== strundefined) {
                        return context.getElementsByTagName(tag)
                    }
                } : function (tag, context) {
                    var elem, tmp = [], i = 0, results = context.getElementsByTagName(tag);
                    if (tag === "*") {
                        while ((elem = results[i++])) {
                            if (elem.nodeType === 1) {
                                tmp.push(elem)
                            }
                        }
                        return tmp
                    }
                    return results
                };
                Expr.find.CLASS = support.getElementsByClassName && function (className, context) {
                    if (typeof context.getElementsByClassName !== strundefined && documentIsHTML) {
                        return context.getElementsByClassName(className)
                    }
                };
                rbuggyMatches = [];
                rbuggyQSA = [];
                if ((support.qsa = rnative.test(doc.querySelectorAll))) {
                    assert(function (div) {
                        div.innerHTML = "<select msallowclip=''><option selected=''></option></select>";
                        if (div.querySelectorAll("[msallowclip^='']").length) {
                            rbuggyQSA.push("[*^$]=" + whitespace + "*(?:''|\"\")")
                        }
                        if (!div.querySelectorAll("[selected]").length) {
                            rbuggyQSA.push("\\[" + whitespace + "*(?:value|" + booleans + ")")
                        }
                        if (!div.querySelectorAll(":checked").length) {
                            rbuggyQSA.push(":checked")
                        }
                    });
                    assert(function (div) {
                        var input = doc.createElement("input");
                        input.setAttribute("type", "hidden");
                        div.appendChild(input).setAttribute("name", "D");
                        if (div.querySelectorAll("[name=d]").length) {
                            rbuggyQSA.push("name" + whitespace + "*[*^$|!~]?=")
                        }
                        if (!div.querySelectorAll(":enabled").length) {
                            rbuggyQSA.push(":enabled", ":disabled")
                        }
                        div.querySelectorAll("*,:x");
                        rbuggyQSA.push(",.*:")
                    })
                }
                if ((support.matchesSelector = rnative.test((matches = docElem.matches || docElem.webkitMatchesSelector || docElem.mozMatchesSelector || docElem.oMatchesSelector || docElem.msMatchesSelector)))) {
                    assert(function (div) {
                        support.disconnectedMatch = matches.call(div, "div");
                        matches.call(div, "[s!='']:x");
                        rbuggyMatches.push("!=", pseudos)
                    })
                }
                rbuggyQSA = rbuggyQSA.length && new RegExp(rbuggyQSA.join("|"));
                rbuggyMatches = rbuggyMatches.length && new RegExp(rbuggyMatches.join("|"));
                hasCompare = rnative.test(docElem.compareDocumentPosition);
                contains = hasCompare || rnative.test(docElem.contains) ? function (a, b) {
                    var adown = a.nodeType === 9 ? a.documentElement : a, bup = b && b.parentNode;
                    return a === bup || !!(bup && bup.nodeType === 1 && (adown.contains ? adown.contains(bup) : a.compareDocumentPosition && a.compareDocumentPosition(bup) & 16))
                } : function (a, b) {
                    if (b) {
                        while ((b = b.parentNode)) {
                            if (b === a) {
                                return true
                            }
                        }
                    }
                    return false
                };
                sortOrder = hasCompare ? function (a, b) {
                    if (a === b) {
                        hasDuplicate = true;
                        return 0
                    }
                    var compare = !a.compareDocumentPosition - !b.compareDocumentPosition;
                    if (compare) {
                        return compare
                    }
                    compare = (a.ownerDocument || a) === (b.ownerDocument || b) ? a.compareDocumentPosition(b) : 1;
                    if (compare & 1 || (!support.sortDetached && b.compareDocumentPosition(a) === compare)) {
                        if (a === doc || a.ownerDocument === preferredDoc && contains(preferredDoc, a)) {
                            return -1
                        }
                        if (b === doc || b.ownerDocument === preferredDoc && contains(preferredDoc, b)) {
                            return 1
                        }
                        return sortInput ? (indexOf.call(sortInput, a) - indexOf.call(sortInput, b)) : 0
                    }
                    return compare & 4 ? -1 : 1
                } : function (a, b) {
                    if (a === b) {
                        hasDuplicate = true;
                        return 0
                    }
                    var cur, i = 0, aup = a.parentNode, bup = b.parentNode, ap = [a], bp = [b];
                    if (!aup || !bup) {
                        return a === doc ? -1 : b === doc ? 1 : aup ? -1 : bup ? 1 : sortInput ? (indexOf.call(sortInput, a) - indexOf.call(sortInput, b)) : 0
                    } else {
                        if (aup === bup) {
                            return siblingCheck(a, b)
                        }
                    }
                    cur = a;
                    while ((cur = cur.parentNode)) {
                        ap.unshift(cur)
                    }
                    cur = b;
                    while ((cur = cur.parentNode)) {
                        bp.unshift(cur)
                    }
                    while (ap[i] === bp[i]) {
                        i++
                    }
                    return i ? siblingCheck(ap[i], bp[i]) : ap[i] === preferredDoc ? -1 : bp[i] === preferredDoc ? 1 : 0
                };
                return doc
            };
            Sizzle.matches = function (expr, elements) {
                return Sizzle(expr, null, null, elements)
            };
            Sizzle.matchesSelector = function (elem, expr) {
                if ((elem.ownerDocument || elem) !== document) {
                    setDocument(elem)
                }
                expr = expr.replace(rattributeQuotes, "='$1']");
                if (support.matchesSelector && documentIsHTML && (!rbuggyMatches || !rbuggyMatches.test(expr)) && (!rbuggyQSA || !rbuggyQSA.test(expr))) {
                    try {
                        var ret = matches.call(elem, expr);
                        if (ret || support.disconnectedMatch || elem.document && elem.document.nodeType !== 11) {
                            return ret
                        }
                    } catch (e) {
                    }
                }
                return Sizzle(expr, document, null, [elem]).length > 0
            };
            Sizzle.contains = function (context, elem) {
                if ((context.ownerDocument || context) !== document) {
                    setDocument(context)
                }
                return contains(context, elem)
            };
            Sizzle.attr = function (elem, name) {
                if ((elem.ownerDocument || elem) !== document) {
                    setDocument(elem)
                }
                var fn = Expr.attrHandle[name.toLowerCase()], val = fn && hasOwn.call(Expr.attrHandle, name.toLowerCase()) ? fn(elem, name, !documentIsHTML) : undefined;
                return val !== undefined ? val : support.attributes || !documentIsHTML ? elem.getAttribute(name) : (val = elem.getAttributeNode(name)) && val.specified ? val.value : null
            };
            Sizzle.error = function (msg) {
                throw new Error("Syntax error, unrecognized expression: " + msg)
            };
            Sizzle.uniqueSort = function (results) {
                var elem, duplicates = [], j = 0, i = 0;
                hasDuplicate = !support.detectDuplicates;
                sortInput = !support.sortStable && results.slice(0);
                results.sort(sortOrder);
                if (hasDuplicate) {
                    while ((elem = results[i++])) {
                        if (elem === results[i]) {
                            j = duplicates.push(i)
                        }
                    }
                    while (j--) {
                        results.splice(duplicates[j], 1)
                    }
                }
                sortInput = null;
                return results
            };
            getText = Sizzle.getText = function (elem) {
                var node, ret = "", i = 0, nodeType = elem.nodeType;
                if (!nodeType) {
                    while ((node = elem[i++])) {
                        ret += getText(node)
                    }
                } else {
                    if (nodeType === 1 || nodeType === 9 || nodeType === 11) {
                        if (typeof elem.textContent === "string") {
                            return elem.textContent
                        } else {
                            for (elem = elem.firstChild; elem; elem = elem.nextSibling) {
                                ret += getText(elem)
                            }
                        }
                    } else {
                        if (nodeType === 3 || nodeType === 4) {
                            return elem.nodeValue
                        }
                    }
                }
                return ret
            };
            Expr = Sizzle.selectors = {cacheLength: 50, createPseudo: markFunction, match: matchExpr, attrHandle: {}, find: {}, relative: {">": {dir: "parentNode", first: true}, " ": {dir: "parentNode"}, "+": {dir: "previousSibling", first: true}, "~": {dir: "previousSibling"}}, preFilter: {ATTR: function (match) {
                match[1] = match[1].replace(runescape, funescape);
                match[3] = (match[3] || match[4] || match[5] || "").replace(runescape, funescape);
                if (match[2] === "~=") {
                    match[3] = " " + match[3] + " "
                }
                return match.slice(0, 4)
            }, CHILD: function (match) {
                match[1] = match[1].toLowerCase();
                if (match[1].slice(0, 3) === "nth") {
                    if (!match[3]) {
                        Sizzle.error(match[0])
                    }
                    match[4] = +(match[4] ? match[5] + (match[6] || 1) : 2 * (match[3] === "even" || match[3] === "odd"));
                    match[5] = +((match[7] + match[8]) || match[3] === "odd")
                } else {
                    if (match[3]) {
                        Sizzle.error(match[0])
                    }
                }
                return match
            }, PSEUDO: function (match) {
                var excess, unquoted = !match[6] && match[2];
                if (matchExpr.CHILD.test(match[0])) {
                    return null
                }
                if (match[3]) {
                    match[2] = match[4] || match[5] || ""
                } else {
                    if (unquoted && rpseudo.test(unquoted) && (excess = tokenize(unquoted, true)) && (excess = unquoted.indexOf(")", unquoted.length - excess) - unquoted.length)) {
                        match[0] = match[0].slice(0, excess);
                        match[2] = unquoted.slice(0, excess)
                    }
                }
                return match.slice(0, 3)
            }}, filter: {TAG: function (nodeNameSelector) {
                var nodeName = nodeNameSelector.replace(runescape, funescape).toLowerCase();
                return nodeNameSelector === "*" ? function () {
                    return true
                } : function (elem) {
                    return elem.nodeName && elem.nodeName.toLowerCase() === nodeName
                }
            }, CLASS: function (className) {
                var pattern = classCache[className + " "];
                return pattern || (pattern = new RegExp("(^|" + whitespace + ")" + className + "(" + whitespace + "|$)")) && classCache(className, function (elem) {
                    return pattern.test(typeof elem.className === "string" && elem.className || typeof elem.getAttribute !== strundefined && elem.getAttribute("class") || "")
                })
            }, ATTR: function (name, operator, check) {
                return function (elem) {
                    var result = Sizzle.attr(elem, name);
                    if (result == null) {
                        return operator === "!="
                    }
                    if (!operator) {
                        return true
                    }
                    result += "";
                    return operator === "=" ? result === check : operator === "!=" ? result !== check : operator === "^=" ? check && result.indexOf(check) === 0 : operator === "*=" ? check && result.indexOf(check) > -1 : operator === "$=" ? check && result.slice(-check.length) === check : operator === "~=" ? (" " + result + " ").indexOf(check) > -1 : operator === "|=" ? result === check || result.slice(0, check.length + 1) === check + "-" : false
                }
            }, CHILD: function (type, what, argument, first, last) {
                var simple = type.slice(0, 3) !== "nth", forward = type.slice(-4) !== "last", ofType = what === "of-type";
                return first === 1 && last === 0 ? function (elem) {
                    return !!elem.parentNode
                } : function (elem, context, xml) {
                    var cache, outerCache, node, diff, nodeIndex, start, dir = simple !== forward ? "nextSibling" : "previousSibling", parent = elem.parentNode, name = ofType && elem.nodeName.toLowerCase(), useCache = !xml && !ofType;
                    if (parent) {
                        if (simple) {
                            while (dir) {
                                node = elem;
                                while ((node = node[dir])) {
                                    if (ofType ? node.nodeName.toLowerCase() === name : node.nodeType === 1) {
                                        return false
                                    }
                                }
                                start = dir = type === "only" && !start && "nextSibling"
                            }
                            return true
                        }
                        start = [forward ? parent.firstChild : parent.lastChild];
                        if (forward && useCache) {
                            outerCache = parent[expando] || (parent[expando] = {});
                            cache = outerCache[type] || [];
                            nodeIndex = cache[0] === dirruns && cache[1];
                            diff = cache[0] === dirruns && cache[2];
                            node = nodeIndex && parent.childNodes[nodeIndex];
                            while ((node = ++nodeIndex && node && node[dir] || (diff = nodeIndex = 0) || start.pop())) {
                                if (node.nodeType === 1 && ++diff && node === elem) {
                                    outerCache[type] = [dirruns, nodeIndex, diff];
                                    break
                                }
                            }
                        } else {
                            if (useCache && (cache = (elem[expando] || (elem[expando] = {}))[type]) && cache[0] === dirruns) {
                                diff = cache[1]
                            } else {
                                while ((node = ++nodeIndex && node && node[dir] || (diff = nodeIndex = 0) || start.pop())) {
                                    if ((ofType ? node.nodeName.toLowerCase() === name : node.nodeType === 1) && ++diff) {
                                        if (useCache) {
                                            (node[expando] || (node[expando] = {}))[type] = [dirruns, diff]
                                        }
                                        if (node === elem) {
                                            break
                                        }
                                    }
                                }
                            }
                        }
                        diff -= last;
                        return diff === first || (diff % first === 0 && diff / first >= 0)
                    }
                }
            }, PSEUDO: function (pseudo, argument) {
                var args, fn = Expr.pseudos[pseudo] || Expr.setFilters[pseudo.toLowerCase()] || Sizzle.error("unsupported pseudo: " + pseudo);
                if (fn[expando]) {
                    return fn(argument)
                }
                if (fn.length > 1) {
                    args = [pseudo, pseudo, "", argument];
                    return Expr.setFilters.hasOwnProperty(pseudo.toLowerCase()) ? markFunction(function (seed, matches) {
                        var idx, matched = fn(seed, argument), i = matched.length;
                        while (i--) {
                            idx = indexOf.call(seed, matched[i]);
                            seed[idx] = !(matches[idx] = matched[i])
                        }
                    }) : function (elem) {
                        return fn(elem, 0, args)
                    }
                }
                return fn
            }}, pseudos: {not: markFunction(function (selector) {
                var input = [], results = [], matcher = compile(selector.replace(rtrim, "$1"));
                return matcher[expando] ? markFunction(function (seed, matches, context, xml) {
                    var elem, unmatched = matcher(seed, null, xml, []), i = seed.length;
                    while (i--) {
                        if ((elem = unmatched[i])) {
                            seed[i] = !(matches[i] = elem)
                        }
                    }
                }) : function (elem, context, xml) {
                    input[0] = elem;
                    matcher(input, null, xml, results);
                    return !results.pop()
                }
            }), has: markFunction(function (selector) {
                return function (elem) {
                    return Sizzle(selector, elem).length > 0
                }
            }), contains: markFunction(function (text) {
                return function (elem) {
                    return(elem.textContent || elem.innerText || getText(elem)).indexOf(text) > -1
                }
            }), lang: markFunction(function (lang) {
                if (!ridentifier.test(lang || "")) {
                    Sizzle.error("unsupported lang: " + lang)
                }
                lang = lang.replace(runescape, funescape).toLowerCase();
                return function (elem) {
                    var elemLang;
                    do {
                        if ((elemLang = documentIsHTML ? elem.lang : elem.getAttribute("xml:lang") || elem.getAttribute("lang"))) {
                            elemLang = elemLang.toLowerCase();
                            return elemLang === lang || elemLang.indexOf(lang + "-") === 0
                        }
                    } while ((elem = elem.parentNode) && elem.nodeType === 1);
                    return false
                }
            }), target: function (elem) {
                var hash = window.location && window.location.hash;
                return hash && hash.slice(1) === elem.id
            }, root: function (elem) {
                return elem === docElem
            }, focus: function (elem) {
                return elem === document.activeElement && (!document.hasFocus || document.hasFocus()) && !!(elem.type || elem.href || ~elem.tabIndex)
            }, enabled: function (elem) {
                return elem.disabled === false
            }, disabled: function (elem) {
                return elem.disabled === true
            }, checked: function (elem) {
                var nodeName = elem.nodeName.toLowerCase();
                return(nodeName === "input" && !!elem.checked) || (nodeName === "option" && !!elem.selected)
            }, selected: function (elem) {
                if (elem.parentNode) {
                    elem.parentNode.selectedIndex
                }
                return elem.selected === true
            }, empty: function (elem) {
                for (elem = elem.firstChild; elem; elem = elem.nextSibling) {
                    if (elem.nodeType < 6) {
                        return false
                    }
                }
                return true
            }, parent: function (elem) {
                return !Expr.pseudos.empty(elem)
            }, header: function (elem) {
                return rheader.test(elem.nodeName)
            }, input: function (elem) {
                return rinputs.test(elem.nodeName)
            }, button: function (elem) {
                var name = elem.nodeName.toLowerCase();
                return name === "input" && elem.type === "button" || name === "button"
            }, text: function (elem) {
                var attr;
                return elem.nodeName.toLowerCase() === "input" && elem.type === "text" && ((attr = elem.getAttribute("type")) == null || attr.toLowerCase() === "text")
            }, first: createPositionalPseudo(function () {
                return[0]
            }), last: createPositionalPseudo(function (matchIndexes, length) {
                return[length - 1]
            }), eq: createPositionalPseudo(function (matchIndexes, length, argument) {
                return[argument < 0 ? argument + length : argument]
            }), even: createPositionalPseudo(function (matchIndexes, length) {
                var i = 0;
                for (; i < length; i += 2) {
                    matchIndexes.push(i)
                }
                return matchIndexes
            }), odd: createPositionalPseudo(function (matchIndexes, length) {
                var i = 1;
                for (; i < length; i += 2) {
                    matchIndexes.push(i)
                }
                return matchIndexes
            }), lt: createPositionalPseudo(function (matchIndexes, length, argument) {
                var i = argument < 0 ? argument + length : argument;
                for (; --i >= 0;) {
                    matchIndexes.push(i)
                }
                return matchIndexes
            }), gt: createPositionalPseudo(function (matchIndexes, length, argument) {
                var i = argument < 0 ? argument + length : argument;
                for (; ++i < length;) {
                    matchIndexes.push(i)
                }
                return matchIndexes
            })}};
            Expr.pseudos.nth = Expr.pseudos.eq;
            for (i in {radio: true, checkbox: true, file: true, password: true, image: true}) {
                Expr.pseudos[i] = createInputPseudo(i)
            }
            for (i in {submit: true, reset: true}) {
                Expr.pseudos[i] = createButtonPseudo(i)
            }
            function setFilters() {
            }

            setFilters.prototype = Expr.filters = Expr.pseudos;
            Expr.setFilters = new setFilters();
            tokenize = Sizzle.tokenize = function (selector, parseOnly) {
                var matched, match, tokens, type, soFar, groups, preFilters, cached = tokenCache[selector + " "];
                if (cached) {
                    return parseOnly ? 0 : cached.slice(0)
                }
                soFar = selector;
                groups = [];
                preFilters = Expr.preFilter;
                while (soFar) {
                    if (!matched || (match = rcomma.exec(soFar))) {
                        if (match) {
                            soFar = soFar.slice(match[0].length) || soFar
                        }
                        groups.push((tokens = []))
                    }
                    matched = false;
                    if ((match = rcombinators.exec(soFar))) {
                        matched = match.shift();
                        tokens.push({value: matched, type: match[0].replace(rtrim, " ")});
                        soFar = soFar.slice(matched.length)
                    }
                    for (type in Expr.filter) {
                        if ((match = matchExpr[type].exec(soFar)) && (!preFilters[type] || (match = preFilters[type](match)))) {
                            matched = match.shift();
                            tokens.push({value: matched, type: type, matches: match});
                            soFar = soFar.slice(matched.length)
                        }
                    }
                    if (!matched) {
                        break
                    }
                }
                return parseOnly ? soFar.length : soFar ? Sizzle.error(selector) : tokenCache(selector, groups).slice(0)
            };
            function toSelector(tokens) {
                var i = 0, len = tokens.length, selector = "";
                for (; i < len; i++) {
                    selector += tokens[i].value
                }
                return selector
            }

            function addCombinator(matcher, combinator, base) {
                var dir = combinator.dir, checkNonElements = base && dir === "parentNode", doneName = done++;
                return combinator.first ? function (elem, context, xml) {
                    while ((elem = elem[dir])) {
                        if (elem.nodeType === 1 || checkNonElements) {
                            return matcher(elem, context, xml)
                        }
                    }
                } : function (elem, context, xml) {
                    var oldCache, outerCache, newCache = [dirruns, doneName];
                    if (xml) {
                        while ((elem = elem[dir])) {
                            if (elem.nodeType === 1 || checkNonElements) {
                                if (matcher(elem, context, xml)) {
                                    return true
                                }
                            }
                        }
                    } else {
                        while ((elem = elem[dir])) {
                            if (elem.nodeType === 1 || checkNonElements) {
                                outerCache = elem[expando] || (elem[expando] = {});
                                if ((oldCache = outerCache[dir]) && oldCache[0] === dirruns && oldCache[1] === doneName) {
                                    return(newCache[2] = oldCache[2])
                                } else {
                                    outerCache[dir] = newCache;
                                    if ((newCache[2] = matcher(elem, context, xml))) {
                                        return true
                                    }
                                }
                            }
                        }
                    }
                }
            }

            function elementMatcher(matchers) {
                return matchers.length > 1 ? function (elem, context, xml) {
                    var i = matchers.length;
                    while (i--) {
                        if (!matchers[i](elem, context, xml)) {
                            return false
                        }
                    }
                    return true
                } : matchers[0]
            }

            function multipleContexts(selector, contexts, results) {
                var i = 0, len = contexts.length;
                for (; i < len; i++) {
                    Sizzle(selector, contexts[i], results)
                }
                return results
            }

            function condense(unmatched, map, filter, context, xml) {
                var elem, newUnmatched = [], i = 0, len = unmatched.length, mapped = map != null;
                for (; i < len; i++) {
                    if ((elem = unmatched[i])) {
                        if (!filter || filter(elem, context, xml)) {
                            newUnmatched.push(elem);
                            if (mapped) {
                                map.push(i)
                            }
                        }
                    }
                }
                return newUnmatched
            }

            function setMatcher(preFilter, selector, matcher, postFilter, postFinder, postSelector) {
                if (postFilter && !postFilter[expando]) {
                    postFilter = setMatcher(postFilter)
                }
                if (postFinder && !postFinder[expando]) {
                    postFinder = setMatcher(postFinder, postSelector)
                }
                return markFunction(function (seed, results, context, xml) {
                    var temp, i, elem, preMap = [], postMap = [], preexisting = results.length, elems = seed || multipleContexts(selector || "*", context.nodeType ? [context] : context, []), matcherIn = preFilter && (seed || !selector) ? condense(elems, preMap, preFilter, context, xml) : elems, matcherOut = matcher ? postFinder || (seed ? preFilter : preexisting || postFilter) ? [] : results : matcherIn;
                    if (matcher) {
                        matcher(matcherIn, matcherOut, context, xml)
                    }
                    if (postFilter) {
                        temp = condense(matcherOut, postMap);
                        postFilter(temp, [], context, xml);
                        i = temp.length;
                        while (i--) {
                            if ((elem = temp[i])) {
                                matcherOut[postMap[i]] = !(matcherIn[postMap[i]] = elem)
                            }
                        }
                    }
                    if (seed) {
                        if (postFinder || preFilter) {
                            if (postFinder) {
                                temp = [];
                                i = matcherOut.length;
                                while (i--) {
                                    if ((elem = matcherOut[i])) {
                                        temp.push((matcherIn[i] = elem))
                                    }
                                }
                                postFinder(null, (matcherOut = []), temp, xml)
                            }
                            i = matcherOut.length;
                            while (i--) {
                                if ((elem = matcherOut[i]) && (temp = postFinder ? indexOf.call(seed, elem) : preMap[i]) > -1) {
                                    seed[temp] = !(results[temp] = elem)
                                }
                            }
                        }
                    } else {
                        matcherOut = condense(matcherOut === results ? matcherOut.splice(preexisting, matcherOut.length) : matcherOut);
                        if (postFinder) {
                            postFinder(null, results, matcherOut, xml)
                        } else {
                            push.apply(results, matcherOut)
                        }
                    }
                })
            }

            function matcherFromTokens(tokens) {
                var checkContext, matcher, j, len = tokens.length, leadingRelative = Expr.relative[tokens[0].type], implicitRelative = leadingRelative || Expr.relative[" "], i = leadingRelative ? 1 : 0, matchContext = addCombinator(function (elem) {
                    return elem === checkContext
                }, implicitRelative, true), matchAnyContext = addCombinator(function (elem) {
                    return indexOf.call(checkContext, elem) > -1
                }, implicitRelative, true), matchers = [function (elem, context, xml) {
                    return(!leadingRelative && (xml || context !== outermostContext)) || ((checkContext = context).nodeType ? matchContext(elem, context, xml) : matchAnyContext(elem, context, xml))
                }];
                for (; i < len; i++) {
                    if ((matcher = Expr.relative[tokens[i].type])) {
                        matchers = [addCombinator(elementMatcher(matchers), matcher)]
                    } else {
                        matcher = Expr.filter[tokens[i].type].apply(null, tokens[i].matches);
                        if (matcher[expando]) {
                            j = ++i;
                            for (; j < len; j++) {
                                if (Expr.relative[tokens[j].type]) {
                                    break
                                }
                            }
                            return setMatcher(i > 1 && elementMatcher(matchers), i > 1 && toSelector(tokens.slice(0, i - 1).concat({value: tokens[i - 2].type === " " ? "*" : ""})).replace(rtrim, "$1"), matcher, i < j && matcherFromTokens(tokens.slice(i, j)), j < len && matcherFromTokens((tokens = tokens.slice(j))), j < len && toSelector(tokens))
                        }
                        matchers.push(matcher)
                    }
                }
                return elementMatcher(matchers)
            }

            function matcherFromGroupMatchers(elementMatchers, setMatchers) {
                var bySet = setMatchers.length > 0, byElement = elementMatchers.length > 0, superMatcher = function (seed, context, xml, results, outermost) {
                    var elem, j, matcher, matchedCount = 0, i = "0", unmatched = seed && [], setMatched = [], contextBackup = outermostContext, elems = seed || byElement && Expr.find.TAG("*", outermost), dirrunsUnique = (dirruns += contextBackup == null ? 1 : Math.random() || 0.1), len = elems.length;
                    if (outermost) {
                        outermostContext = context !== document && context
                    }
                    for (; i !== len && (elem = elems[i]) != null; i++) {
                        if (byElement && elem) {
                            j = 0;
                            while ((matcher = elementMatchers[j++])) {
                                if (matcher(elem, context, xml)) {
                                    results.push(elem);
                                    break
                                }
                            }
                            if (outermost) {
                                dirruns = dirrunsUnique
                            }
                        }
                        if (bySet) {
                            if ((elem = !matcher && elem)) {
                                matchedCount--
                            }
                            if (seed) {
                                unmatched.push(elem)
                            }
                        }
                    }
                    matchedCount += i;
                    if (bySet && i !== matchedCount) {
                        j = 0;
                        while ((matcher = setMatchers[j++])) {
                            matcher(unmatched, setMatched, context, xml)
                        }
                        if (seed) {
                            if (matchedCount > 0) {
                                while (i--) {
                                    if (!(unmatched[i] || setMatched[i])) {
                                        setMatched[i] = pop.call(results)
                                    }
                                }
                            }
                            setMatched = condense(setMatched)
                        }
                        push.apply(results, setMatched);
                        if (outermost && !seed && setMatched.length > 0 && (matchedCount + setMatchers.length) > 1) {
                            Sizzle.uniqueSort(results)
                        }
                    }
                    if (outermost) {
                        dirruns = dirrunsUnique;
                        outermostContext = contextBackup
                    }
                    return unmatched
                };
                return bySet ? markFunction(superMatcher) : superMatcher
            }

            compile = Sizzle.compile = function (selector, match) {
                var i, setMatchers = [], elementMatchers = [], cached = compilerCache[selector + " "];
                if (!cached) {
                    if (!match) {
                        match = tokenize(selector)
                    }
                    i = match.length;
                    while (i--) {
                        cached = matcherFromTokens(match[i]);
                        if (cached[expando]) {
                            setMatchers.push(cached)
                        } else {
                            elementMatchers.push(cached)
                        }
                    }
                    cached = compilerCache(selector, matcherFromGroupMatchers(elementMatchers, setMatchers));
                    cached.selector = selector
                }
                return cached
            };
            select = Sizzle.select = function (selector, context, results, seed) {
                var i, tokens, token, type, find, compiled = typeof selector === "function" && selector, match = !seed && tokenize((selector = compiled.selector || selector));
                results = results || [];
                if (match.length === 1) {
                    tokens = match[0] = match[0].slice(0);
                    if (tokens.length > 2 && (token = tokens[0]).type === "ID" && support.getById && context.nodeType === 9 && documentIsHTML && Expr.relative[tokens[1].type]) {
                        context = (Expr.find.ID(token.matches[0].replace(runescape, funescape), context) || [])[0];
                        if (!context) {
                            return results
                        } else {
                            if (compiled) {
                                context = context.parentNode
                            }
                        }
                        selector = selector.slice(tokens.shift().value.length)
                    }
                    i = matchExpr.needsContext.test(selector) ? 0 : tokens.length;
                    while (i--) {
                        token = tokens[i];
                        if (Expr.relative[(type = token.type)]) {
                            break
                        }
                        if ((find = Expr.find[type])) {
                            if ((seed = find(token.matches[0].replace(runescape, funescape), rsibling.test(tokens[0].type) && testContext(context.parentNode) || context))) {
                                tokens.splice(i, 1);
                                selector = seed.length && toSelector(tokens);
                                if (!selector) {
                                    push.apply(results, seed);
                                    return results
                                }
                                break
                            }
                        }
                    }
                }
                (compiled || compile(selector, match))(seed, context, !documentIsHTML, results, rsibling.test(selector) && testContext(context.parentNode) || context);
                return results
            };
            support.sortStable = expando.split("").sort(sortOrder).join("") === expando;
            support.detectDuplicates = !!hasDuplicate;
            setDocument();
            support.sortDetached = assert(function (div1) {
                return div1.compareDocumentPosition(document.createElement("div")) & 1
            });
            if (!assert(function (div) {
                div.innerHTML = "<a href='#'></a>";
                return div.firstChild.getAttribute("href") === "#"
            })) {
                addHandle("type|href|height|width", function (elem, name, isXML) {
                    if (!isXML) {
                        return elem.getAttribute(name, name.toLowerCase() === "type" ? 1 : 2)
                    }
                })
            }
            if (!support.attributes || !assert(function (div) {
                div.innerHTML = "<input/>";
                div.firstChild.setAttribute("value", "");
                return div.firstChild.getAttribute("value") === ""
            })) {
                addHandle("value", function (elem, name, isXML) {
                    if (!isXML && elem.nodeName.toLowerCase() === "input") {
                        return elem.defaultValue
                    }
                })
            }
            if (!assert(function (div) {
                return div.getAttribute("disabled") == null
            })) {
                addHandle(booleans, function (elem, name, isXML) {
                    var val;
                    if (!isXML) {
                        return elem[name] === true ? name.toLowerCase() : (val = elem.getAttributeNode(name)) && val.specified ? val.value : null
                    }
                })
            }
            return Sizzle
        })(window);
    jQuery.find = Sizzle;
    jQuery.expr = Sizzle.selectors;
    jQuery.expr[":"] = jQuery.expr.pseudos;
    jQuery.unique = Sizzle.uniqueSort;
    jQuery.text = Sizzle.getText;
    jQuery.isXMLDoc = Sizzle.isXML;
    jQuery.contains = Sizzle.contains;
    var rneedsContext = jQuery.expr.match.needsContext;
    var rsingleTag = (/^<(\w+)\s*\/?>(?:<\/\1>|)$/);
    var risSimple = /^.[^:#\[\.,]*$/;

    function winnow(elements, qualifier, not) {
        if (jQuery.isFunction(qualifier)) {
            return jQuery.grep(elements, function (elem, i) {
                return !!qualifier.call(elem, i, elem) !== not
            })
        }
        if (qualifier.nodeType) {
            return jQuery.grep(elements, function (elem) {
                return(elem === qualifier) !== not
            })
        }
        if (typeof qualifier === "string") {
            if (risSimple.test(qualifier)) {
                return jQuery.filter(qualifier, elements, not)
            }
            qualifier = jQuery.filter(qualifier, elements)
        }
        return jQuery.grep(elements, function (elem) {
            return(indexOf.call(qualifier, elem) >= 0) !== not
        })
    }

    jQuery.filter = function (expr, elems, not) {
        var elem = elems[0];
        if (not) {
            expr = ":not(" + expr + ")"
        }
        return elems.length === 1 && elem.nodeType === 1 ? jQuery.find.matchesSelector(elem, expr) ? [elem] : [] : jQuery.find.matches(expr, jQuery.grep(elems, function (elem) {
            return elem.nodeType === 1
        }))
    };
    jQuery.fn.extend({find: function (selector) {
        var i, len = this.length, ret = [], self = this;
        if (typeof selector !== "string") {
            return this.pushStack(jQuery(selector).filter(function () {
                for (i = 0; i < len; i++) {
                    if (jQuery.contains(self[i], this)) {
                        return true
                    }
                }
            }))
        }
        for (i = 0; i < len; i++) {
            jQuery.find(selector, self[i], ret)
        }
        ret = this.pushStack(len > 1 ? jQuery.unique(ret) : ret);
        ret.selector = this.selector ? this.selector + " " + selector : selector;
        return ret
    }, filter: function (selector) {
        return this.pushStack(winnow(this, selector || [], false))
    }, not: function (selector) {
        return this.pushStack(winnow(this, selector || [], true))
    }, is: function (selector) {
        return !!winnow(this, typeof selector === "string" && rneedsContext.test(selector) ? jQuery(selector) : selector || [], false).length
    }});
    var rootjQuery, rquickExpr = /^(?:\s*(<[\w\W]+>)[^>]*|#([\w-]*))$/, init = jQuery.fn.init = function (selector, context) {
        var match, elem;
        if (!selector) {
            return this
        }
        if (typeof selector === "string") {
            if (selector[0] === "<" && selector[selector.length - 1] === ">" && selector.length >= 3) {
                match = [null, selector, null]
            } else {
                match = rquickExpr.exec(selector)
            }
            if (match && (match[1] || !context)) {
                if (match[1]) {
                    context = context instanceof jQuery ? context[0] : context;
                    jQuery.merge(this, jQuery.parseHTML(match[1], context && context.nodeType ? context.ownerDocument || context : document, true));
                    if (rsingleTag.test(match[1]) && jQuery.isPlainObject(context)) {
                        for (match in context) {
                            if (jQuery.isFunction(this[match])) {
                                this[match](context[match])
                            } else {
                                this.attr(match, context[match])
                            }
                        }
                    }
                    return this
                } else {
                    elem = document.getElementById(match[2]);
                    if (elem && elem.parentNode) {
                        this.length = 1;
                        this[0] = elem
                    }
                    this.context = document;
                    this.selector = selector;
                    return this
                }
            } else {
                if (!context || context.jquery) {
                    return(context || rootjQuery).find(selector)
                } else {
                    return this.constructor(context).find(selector)
                }
            }
        } else {
            if (selector.nodeType) {
                this.context = this[0] = selector;
                this.length = 1;
                return this
            } else {
                if (jQuery.isFunction(selector)) {
                    return typeof rootjQuery.ready !== "undefined" ? rootjQuery.ready(selector) : selector(jQuery)
                }
            }
        }
        if (selector.selector !== undefined) {
            this.selector = selector.selector;
            this.context = selector.context
        }
        return jQuery.makeArray(selector, this)
    };
    init.prototype = jQuery.fn;
    rootjQuery = jQuery(document);
    var rparentsprev = /^(?:parents|prev(?:Until|All))/, guaranteedUnique = {children: true, contents: true, next: true, prev: true};
    jQuery.extend({dir: function (elem, dir, until) {
        var matched = [], truncate = until !== undefined;
        while ((elem = elem[dir]) && elem.nodeType !== 9) {
            if (elem.nodeType === 1) {
                if (truncate && jQuery(elem).is(until)) {
                    break
                }
                matched.push(elem)
            }
        }
        return matched
    }, sibling: function (n, elem) {
        var matched = [];
        for (; n; n = n.nextSibling) {
            if (n.nodeType === 1 && n !== elem) {
                matched.push(n)
            }
        }
        return matched
    }});
    jQuery.fn.extend({has: function (target) {
        var targets = jQuery(target, this), l = targets.length;
        return this.filter(function () {
            var i = 0;
            for (; i < l; i++) {
                if (jQuery.contains(this, targets[i])) {
                    return true
                }
            }
        })
    }, closest: function (selectors, context) {
        var cur, i = 0, l = this.length, matched = [], pos = rneedsContext.test(selectors) || typeof selectors !== "string" ? jQuery(selectors, context || this.context) : 0;
        for (; i < l; i++) {
            for (cur = this[i]; cur && cur !== context; cur = cur.parentNode) {
                if (cur.nodeType < 11 && (pos ? pos.index(cur) > -1 : cur.nodeType === 1 && jQuery.find.matchesSelector(cur, selectors))) {
                    matched.push(cur);
                    break
                }
            }
        }
        return this.pushStack(matched.length > 1 ? jQuery.unique(matched) : matched)
    }, index: function (elem) {
        if (!elem) {
            return(this[0] && this[0].parentNode) ? this.first().prevAll().length : -1
        }
        if (typeof elem === "string") {
            return indexOf.call(jQuery(elem), this[0])
        }
        return indexOf.call(this, elem.jquery ? elem[0] : elem)
    }, add: function (selector, context) {
        return this.pushStack(jQuery.unique(jQuery.merge(this.get(), jQuery(selector, context))))
    }, addBack: function (selector) {
        return this.add(selector == null ? this.prevObject : this.prevObject.filter(selector))
    }});
    function sibling(cur, dir) {
        while ((cur = cur[dir]) && cur.nodeType !== 1) {
        }
        return cur
    }

    jQuery.each({parent: function (elem) {
        var parent = elem.parentNode;
        return parent && parent.nodeType !== 11 ? parent : null
    }, parents: function (elem) {
        return jQuery.dir(elem, "parentNode")
    }, parentsUntil: function (elem, i, until) {
        return jQuery.dir(elem, "parentNode", until)
    }, next: function (elem) {
        return sibling(elem, "nextSibling")
    }, prev: function (elem) {
        return sibling(elem, "previousSibling")
    }, nextAll: function (elem) {
        return jQuery.dir(elem, "nextSibling")
    }, prevAll: function (elem) {
        return jQuery.dir(elem, "previousSibling")
    }, nextUntil: function (elem, i, until) {
        return jQuery.dir(elem, "nextSibling", until)
    }, prevUntil: function (elem, i, until) {
        return jQuery.dir(elem, "previousSibling", until)
    }, siblings: function (elem) {
        return jQuery.sibling((elem.parentNode || {}).firstChild, elem)
    }, children: function (elem) {
        return jQuery.sibling(elem.firstChild)
    }, contents: function (elem) {
        return elem.contentDocument || jQuery.merge([], elem.childNodes)
    }}, function (name, fn) {
        jQuery.fn[name] = function (until, selector) {
            var matched = jQuery.map(this, fn, until);
            if (name.slice(-5) !== "Until") {
                selector = until
            }
            if (selector && typeof selector === "string") {
                matched = jQuery.filter(selector, matched)
            }
            if (this.length > 1) {
                if (!guaranteedUnique[name]) {
                    jQuery.unique(matched)
                }
                if (rparentsprev.test(name)) {
                    matched.reverse()
                }
            }
            return this.pushStack(matched)
        }
    });
    var rnotwhite = (/\S+/g);
    var optionsCache = {};

    function createOptions(options) {
        var object = optionsCache[options] = {};
        jQuery.each(options.match(rnotwhite) || [], function (_, flag) {
            object[flag] = true
        });
        return object
    }

    jQuery.Callbacks = function (options) {
        options = typeof options === "string" ? (optionsCache[options] || createOptions(options)) : jQuery.extend({}, options);
        var memory, fired, firing, firingStart, firingLength, firingIndex, list = [], stack = !options.once && [], fire = function (data) {
            memory = options.memory && data;
            fired = true;
            firingIndex = firingStart || 0;
            firingStart = 0;
            firingLength = list.length;
            firing = true;
            for (; list && firingIndex < firingLength; firingIndex++) {
                if (list[firingIndex].apply(data[0], data[1]) === false && options.stopOnFalse) {
                    memory = false;
                    break
                }
            }
            firing = false;
            if (list) {
                if (stack) {
                    if (stack.length) {
                        fire(stack.shift())
                    }
                } else {
                    if (memory) {
                        list = []
                    } else {
                        self.disable()
                    }
                }
            }
        }, self = {add: function () {
            if (list) {
                var start = list.length;
                (function add(args) {
                    jQuery.each(args, function (_, arg) {
                        var type = jQuery.type(arg);
                        if (type === "function") {
                            if (!options.unique || !self.has(arg)) {
                                list.push(arg)
                            }
                        } else {
                            if (arg && arg.length && type !== "string") {
                                add(arg)
                            }
                        }
                    })
                })(arguments);
                if (firing) {
                    firingLength = list.length
                } else {
                    if (memory) {
                        firingStart = start;
                        fire(memory)
                    }
                }
            }
            return this
        }, remove: function () {
            if (list) {
                jQuery.each(arguments, function (_, arg) {
                    var index;
                    while ((index = jQuery.inArray(arg, list, index)) > -1) {
                        list.splice(index, 1);
                        if (firing) {
                            if (index <= firingLength) {
                                firingLength--
                            }
                            if (index <= firingIndex) {
                                firingIndex--
                            }
                        }
                    }
                })
            }
            return this
        }, has: function (fn) {
            return fn ? jQuery.inArray(fn, list) > -1 : !!(list && list.length)
        }, empty: function () {
            list = [];
            firingLength = 0;
            return this
        }, disable: function () {
            list = stack = memory = undefined;
            return this
        }, disabled: function () {
            return !list
        }, lock: function () {
            stack = undefined;
            if (!memory) {
                self.disable()
            }
            return this
        }, locked: function () {
            return !stack
        }, fireWith: function (context, args) {
            if (list && (!fired || stack)) {
                args = args || [];
                args = [context, args.slice ? args.slice() : args];
                if (firing) {
                    stack.push(args)
                } else {
                    fire(args)
                }
            }
            return this
        }, fire: function () {
            self.fireWith(this, arguments);
            return this
        }, fired: function () {
            return !!fired
        }};
        return self
    };
    jQuery.extend({Deferred: function (func) {
        var tuples = [
            ["resolve", "done", jQuery.Callbacks("once memory"), "resolved"],
            ["reject", "fail", jQuery.Callbacks("once memory"), "rejected"],
            ["notify", "progress", jQuery.Callbacks("memory")]
        ], state = "pending", promise = {state: function () {
            return state
        }, always: function () {
            deferred.done(arguments).fail(arguments);
            return this
        }, then: function () {
            var fns = arguments;
            return jQuery.Deferred(function (newDefer) {
                jQuery.each(tuples, function (i, tuple) {
                    var fn = jQuery.isFunction(fns[i]) && fns[i];
                    deferred[tuple[1]](function () {
                        var returned = fn && fn.apply(this, arguments);
                        if (returned && jQuery.isFunction(returned.promise)) {
                            returned.promise().done(newDefer.resolve).fail(newDefer.reject).progress(newDefer.notify)
                        } else {
                            newDefer[tuple[0] + "With"](this === promise ? newDefer.promise() : this, fn ? [returned] : arguments)
                        }
                    })
                });
                fns = null
            }).promise()
        }, promise: function (obj) {
            return obj != null ? jQuery.extend(obj, promise) : promise
        }}, deferred = {};
        promise.pipe = promise.then;
        jQuery.each(tuples, function (i, tuple) {
            var list = tuple[2], stateString = tuple[3];
            promise[tuple[1]] = list.add;
            if (stateString) {
                list.add(function () {
                    state = stateString
                }, tuples[i ^ 1][2].disable, tuples[2][2].lock)
            }
            deferred[tuple[0]] = function () {
                deferred[tuple[0] + "With"](this === deferred ? promise : this, arguments);
                return this
            };
            deferred[tuple[0] + "With"] = list.fireWith
        });
        promise.promise(deferred);
        if (func) {
            func.call(deferred, deferred)
        }
        return deferred
    }, when: function (subordinate) {
        var i = 0, resolveValues = slice.call(arguments), length = resolveValues.length, remaining = length !== 1 || (subordinate && jQuery.isFunction(subordinate.promise)) ? length : 0, deferred = remaining === 1 ? subordinate : jQuery.Deferred(), updateFunc = function (i, contexts, values) {
            return function (value) {
                contexts[i] = this;
                values[i] = arguments.length > 1 ? slice.call(arguments) : value;
                if (values === progressValues) {
                    deferred.notifyWith(contexts, values)
                } else {
                    if (!(--remaining)) {
                        deferred.resolveWith(contexts, values)
                    }
                }
            }
        }, progressValues, progressContexts, resolveContexts;
        if (length > 1) {
            progressValues = new Array(length);
            progressContexts = new Array(length);
            resolveContexts = new Array(length);
            for (; i < length; i++) {
                if (resolveValues[i] && jQuery.isFunction(resolveValues[i].promise)) {
                    resolveValues[i].promise().done(updateFunc(i, resolveContexts, resolveValues)).fail(deferred.reject).progress(updateFunc(i, progressContexts, progressValues))
                } else {
                    --remaining
                }
            }
        }
        if (!remaining) {
            deferred.resolveWith(resolveContexts, resolveValues)
        }
        return deferred.promise()
    }});
    var readyList;
    jQuery.fn.ready = function (fn) {
        jQuery.ready.promise().done(fn);
        return this
    };
    jQuery.extend({isReady: false, readyWait: 1, holdReady: function (hold) {
        if (hold) {
            jQuery.readyWait++
        } else {
            jQuery.ready(true)
        }
    }, ready: function (wait) {
        if (wait === true ? --jQuery.readyWait : jQuery.isReady) {
            return
        }
        jQuery.isReady = true;
        if (wait !== true && --jQuery.readyWait > 0) {
            return
        }
        readyList.resolveWith(document, [jQuery]);
        if (jQuery.fn.triggerHandler) {
            jQuery(document).triggerHandler("ready");
            jQuery(document).off("ready")
        }
    }});
    function completed() {
        document.removeEventListener("DOMContentLoaded", completed, false);
        window.removeEventListener("load", completed, false);
        jQuery.ready()
    }

    jQuery.ready.promise = function (obj) {
        if (!readyList) {
            readyList = jQuery.Deferred();
            if (document.readyState === "complete") {
                setTimeout(jQuery.ready)
            } else {
                document.addEventListener("DOMContentLoaded", completed, false);
                window.addEventListener("load", completed, false)
            }
        }
        return readyList.promise(obj)
    };
    jQuery.ready.promise();
    var access = jQuery.access = function (elems, fn, key, value, chainable, emptyGet, raw) {
        var i = 0, len = elems.length, bulk = key == null;
        if (jQuery.type(key) === "object") {
            chainable = true;
            for (i in key) {
                jQuery.access(elems, fn, i, key[i], true, emptyGet, raw)
            }
        } else {
            if (value !== undefined) {
                chainable = true;
                if (!jQuery.isFunction(value)) {
                    raw = true
                }
                if (bulk) {
                    if (raw) {
                        fn.call(elems, value);
                        fn = null
                    } else {
                        bulk = fn;
                        fn = function (elem, key, value) {
                            return bulk.call(jQuery(elem), value)
                        }
                    }
                }
                if (fn) {
                    for (; i < len; i++) {
                        fn(elems[i], key, raw ? value : value.call(elems[i], i, fn(elems[i], key)))
                    }
                }
            }
        }
        return chainable ? elems : bulk ? fn.call(elems) : len ? fn(elems[0], key) : emptyGet
    };
    jQuery.acceptData = function (owner) {
        return owner.nodeType === 1 || owner.nodeType === 9 || !(+owner.nodeType)
    };
    function Data() {
        Object.defineProperty(this.cache = {}, 0, {get: function () {
            return{}
        }});
        this.expando = jQuery.expando + Math.random()
    }

    Data.uid = 1;
    Data.accepts = jQuery.acceptData;
    Data.prototype = {key: function (owner) {
        if (!Data.accepts(owner)) {
            return 0
        }
        var descriptor = {}, unlock = owner[this.expando];
        if (!unlock) {
            unlock = Data.uid++;
            try {
                descriptor[this.expando] = {value: unlock};
                Object.defineProperties(owner, descriptor)
            } catch (e) {
                descriptor[this.expando] = unlock;
                jQuery.extend(owner, descriptor)
            }
        }
        if (!this.cache[unlock]) {
            this.cache[unlock] = {}
        }
        return unlock
    }, set: function (owner, data, value) {
        var prop, unlock = this.key(owner), cache = this.cache[unlock];
        if (typeof data === "string") {
            cache[data] = value
        } else {
            if (jQuery.isEmptyObject(cache)) {
                jQuery.extend(this.cache[unlock], data)
            } else {
                for (prop in data) {
                    cache[prop] = data[prop]
                }
            }
        }
        return cache
    }, get: function (owner, key) {
        var cache = this.cache[this.key(owner)];
        return key === undefined ? cache : cache[key]
    }, access: function (owner, key, value) {
        var stored;
        if (key === undefined || ((key && typeof key === "string") && value === undefined)) {
            stored = this.get(owner, key);
            return stored !== undefined ? stored : this.get(owner, jQuery.camelCase(key))
        }
        this.set(owner, key, value);
        return value !== undefined ? value : key
    }, remove: function (owner, key) {
        var i, name, camel, unlock = this.key(owner), cache = this.cache[unlock];
        if (key === undefined) {
            this.cache[unlock] = {}
        } else {
            if (jQuery.isArray(key)) {
                name = key.concat(key.map(jQuery.camelCase))
            } else {
                camel = jQuery.camelCase(key);
                if (key in cache) {
                    name = [key, camel]
                } else {
                    name = camel;
                    name = name in cache ? [name] : (name.match(rnotwhite) || [])
                }
            }
            i = name.length;
            while (i--) {
                delete cache[name[i]]
            }
        }
    }, hasData: function (owner) {
        return !jQuery.isEmptyObject(this.cache[owner[this.expando]] || {})
    }, discard: function (owner) {
        if (owner[this.expando]) {
            delete this.cache[owner[this.expando]]
        }
    }};
    var data_priv = new Data();
    var data_user = new Data();
    var rbrace = /^(?:\{[\w\W]*\}|\[[\w\W]*\])$/, rmultiDash = /([A-Z])/g;

    function dataAttr(elem, key, data) {
        var name;
        if (data === undefined && elem.nodeType === 1) {
            name = "data-" + key.replace(rmultiDash, "-$1").toLowerCase();
            data = elem.getAttribute(name);
            if (typeof data === "string") {
                try {
                    data = data === "true" ? true : data === "false" ? false : data === "null" ? null : +data + "" === data ? +data : rbrace.test(data) ? jQuery.parseJSON(data) : data
                } catch (e) {
                }
                data_user.set(elem, key, data)
            } else {
                data = undefined
            }
        }
        return data
    }

    jQuery.extend({hasData: function (elem) {
        return data_user.hasData(elem) || data_priv.hasData(elem)
    }, data: function (elem, name, data) {
        return data_user.access(elem, name, data)
    }, removeData: function (elem, name) {
        data_user.remove(elem, name)
    }, _data: function (elem, name, data) {
        return data_priv.access(elem, name, data)
    }, _removeData: function (elem, name) {
        data_priv.remove(elem, name)
    }});
    jQuery.fn.extend({data: function (key, value) {
        var i, name, data, elem = this[0], attrs = elem && elem.attributes;
        if (key === undefined) {
            if (this.length) {
                data = data_user.get(elem);
                if (elem.nodeType === 1 && !data_priv.get(elem, "hasDataAttrs")) {
                    i = attrs.length;
                    while (i--) {
                        if (attrs[i]) {
                            name = attrs[i].name;
                            if (name.indexOf("data-") === 0) {
                                name = jQuery.camelCase(name.slice(5));
                                dataAttr(elem, name, data[name])
                            }
                        }
                    }
                    data_priv.set(elem, "hasDataAttrs", true)
                }
            }
            return data
        }
        if (typeof key === "object") {
            return this.each(function () {
                data_user.set(this, key)
            })
        }
        return access(this, function (value) {
            var data, camelKey = jQuery.camelCase(key);
            if (elem && value === undefined) {
                data = data_user.get(elem, key);
                if (data !== undefined) {
                    return data
                }
                data = data_user.get(elem, camelKey);
                if (data !== undefined) {
                    return data
                }
                data = dataAttr(elem, camelKey, undefined);
                if (data !== undefined) {
                    return data
                }
                return
            }
            this.each(function () {
                var data = data_user.get(this, camelKey);
                data_user.set(this, camelKey, value);
                if (key.indexOf("-") !== -1 && data !== undefined) {
                    data_user.set(this, key, value)
                }
            })
        }, null, value, arguments.length > 1, null, true)
    }, removeData: function (key) {
        return this.each(function () {
            data_user.remove(this, key)
        })
    }});
    jQuery.extend({queue: function (elem, type, data) {
        var queue;
        if (elem) {
            type = (type || "fx") + "queue";
            queue = data_priv.get(elem, type);
            if (data) {
                if (!queue || jQuery.isArray(data)) {
                    queue = data_priv.access(elem, type, jQuery.makeArray(data))
                } else {
                    queue.push(data)
                }
            }
            return queue || []
        }
    }, dequeue: function (elem, type) {
        type = type || "fx";
        var queue = jQuery.queue(elem, type), startLength = queue.length, fn = queue.shift(), hooks = jQuery._queueHooks(elem, type), next = function () {
            jQuery.dequeue(elem, type)
        };
        if (fn === "inprogress") {
            fn = queue.shift();
            startLength--
        }
        if (fn) {
            if (type === "fx") {
                queue.unshift("inprogress")
            }
            delete hooks.stop;
            fn.call(elem, next, hooks)
        }
        if (!startLength && hooks) {
            hooks.empty.fire()
        }
    }, _queueHooks: function (elem, type) {
        var key = type + "queueHooks";
        return data_priv.get(elem, key) || data_priv.access(elem, key, {empty: jQuery.Callbacks("once memory").add(function () {
            data_priv.remove(elem, [type + "queue", key])
        })})
    }});
    jQuery.fn.extend({queue: function (type, data) {
        var setter = 2;
        if (typeof type !== "string") {
            data = type;
            type = "fx";
            setter--
        }
        if (arguments.length < setter) {
            return jQuery.queue(this[0], type)
        }
        return data === undefined ? this : this.each(function () {
            var queue = jQuery.queue(this, type, data);
            jQuery._queueHooks(this, type);
            if (type === "fx" && queue[0] !== "inprogress") {
                jQuery.dequeue(this, type)
            }
        })
    }, dequeue: function (type) {
        return this.each(function () {
            jQuery.dequeue(this, type)
        })
    }, clearQueue: function (type) {
        return this.queue(type || "fx", [])
    }, promise: function (type, obj) {
        var tmp, count = 1, defer = jQuery.Deferred(), elements = this, i = this.length, resolve = function () {
            if (!(--count)) {
                defer.resolveWith(elements, [elements])
            }
        };
        if (typeof type !== "string") {
            obj = type;
            type = undefined
        }
        type = type || "fx";
        while (i--) {
            tmp = data_priv.get(elements[i], type + "queueHooks");
            if (tmp && tmp.empty) {
                count++;
                tmp.empty.add(resolve)
            }
        }
        resolve();
        return defer.promise(obj)
    }});
    var pnum = (/[+-]?(?:\d*\.|)\d+(?:[eE][+-]?\d+|)/).source;
    var cssExpand = ["Top", "Right", "Bottom", "Left"];
    var isHidden = function (elem, el) {
        elem = el || elem;
        return jQuery.css(elem, "display") === "none" || !jQuery.contains(elem.ownerDocument, elem)
    };
    var rcheckableType = (/^(?:checkbox|radio)$/i);
    (function () {
        var fragment = document.createDocumentFragment(), div = fragment.appendChild(document.createElement("div")), input = document.createElement("input");
        input.setAttribute("type", "radio");
        input.setAttribute("checked", "checked");
        input.setAttribute("name", "t");
        div.appendChild(input);
        support.checkClone = div.cloneNode(true).cloneNode(true).lastChild.checked;
        div.innerHTML = "<textarea>x</textarea>";
        support.noCloneChecked = !!div.cloneNode(true).lastChild.defaultValue
    })();
    var strundefined = typeof undefined;
    support.focusinBubbles = "onfocusin" in window;
    var rkeyEvent = /^key/, rmouseEvent = /^(?:mouse|pointer|contextmenu)|click/, rfocusMorph = /^(?:focusinfocus|focusoutblur)$/, rtypenamespace = /^([^.]*)(?:\.(.+)|)$/;

    function returnTrue() {
        return true
    }

    function returnFalse() {
        return false
    }

    function safeActiveElement() {
        try {
            return document.activeElement
        } catch (err) {
        }
    }

    jQuery.event = {global: {}, add: function (elem, types, handler, data, selector) {
        var handleObjIn, eventHandle, tmp, events, t, handleObj, special, handlers, type, namespaces, origType, elemData = data_priv.get(elem);
        if (!elemData) {
            return
        }
        if (handler.handler) {
            handleObjIn = handler;
            handler = handleObjIn.handler;
            selector = handleObjIn.selector
        }
        if (!handler.guid) {
            handler.guid = jQuery.guid++
        }
        if (!(events = elemData.events)) {
            events = elemData.events = {}
        }
        if (!(eventHandle = elemData.handle)) {
            eventHandle = elemData.handle = function (e) {
                return typeof jQuery !== strundefined && jQuery.event.triggered !== e.type ? jQuery.event.dispatch.apply(elem, arguments) : undefined
            }
        }
        types = (types || "").match(rnotwhite) || [""];
        t = types.length;
        while (t--) {
            tmp = rtypenamespace.exec(types[t]) || [];
            type = origType = tmp[1];
            namespaces = (tmp[2] || "").split(".").sort();
            if (!type) {
                continue
            }
            special = jQuery.event.special[type] || {};
            type = (selector ? special.delegateType : special.bindType) || type;
            special = jQuery.event.special[type] || {};
            handleObj = jQuery.extend({type: type, origType: origType, data: data, handler: handler, guid: handler.guid, selector: selector, needsContext: selector && jQuery.expr.match.needsContext.test(selector), namespace: namespaces.join(".")}, handleObjIn);
            if (!(handlers = events[type])) {
                handlers = events[type] = [];
                handlers.delegateCount = 0;
                if (!special.setup || special.setup.call(elem, data, namespaces, eventHandle) === false) {
                    if (elem.addEventListener) {
                        elem.addEventListener(type, eventHandle, false)
                    }
                }
            }
            if (special.add) {
                special.add.call(elem, handleObj);
                if (!handleObj.handler.guid) {
                    handleObj.handler.guid = handler.guid
                }
            }
            if (selector) {
                handlers.splice(handlers.delegateCount++, 0, handleObj)
            } else {
                handlers.push(handleObj)
            }
            jQuery.event.global[type] = true
        }
    }, remove: function (elem, types, handler, selector, mappedTypes) {
        var j, origCount, tmp, events, t, handleObj, special, handlers, type, namespaces, origType, elemData = data_priv.hasData(elem) && data_priv.get(elem);
        if (!elemData || !(events = elemData.events)) {
            return
        }
        types = (types || "").match(rnotwhite) || [""];
        t = types.length;
        while (t--) {
            tmp = rtypenamespace.exec(types[t]) || [];
            type = origType = tmp[1];
            namespaces = (tmp[2] || "").split(".").sort();
            if (!type) {
                for (type in events) {
                    jQuery.event.remove(elem, type + types[t], handler, selector, true)
                }
                continue
            }
            special = jQuery.event.special[type] || {};
            type = (selector ? special.delegateType : special.bindType) || type;
            handlers = events[type] || [];
            tmp = tmp[2] && new RegExp("(^|\\.)" + namespaces.join("\\.(?:.*\\.|)") + "(\\.|$)");
            origCount = j = handlers.length;
            while (j--) {
                handleObj = handlers[j];
                if ((mappedTypes || origType === handleObj.origType) && (!handler || handler.guid === handleObj.guid) && (!tmp || tmp.test(handleObj.namespace)) && (!selector || selector === handleObj.selector || selector === "**" && handleObj.selector)) {
                    handlers.splice(j, 1);
                    if (handleObj.selector) {
                        handlers.delegateCount--
                    }
                    if (special.remove) {
                        special.remove.call(elem, handleObj)
                    }
                }
            }
            if (origCount && !handlers.length) {
                if (!special.teardown || special.teardown.call(elem, namespaces, elemData.handle) === false) {
                    jQuery.removeEvent(elem, type, elemData.handle)
                }
                delete events[type]
            }
        }
        if (jQuery.isEmptyObject(events)) {
            delete elemData.handle;
            data_priv.remove(elem, "events")
        }
    }, trigger: function (event, data, elem, onlyHandlers) {
        var i, cur, tmp, bubbleType, ontype, handle, special, eventPath = [elem || document], type = hasOwn.call(event, "type") ? event.type : event, namespaces = hasOwn.call(event, "namespace") ? event.namespace.split(".") : [];
        cur = tmp = elem = elem || document;
        if (elem.nodeType === 3 || elem.nodeType === 8) {
            return
        }
        if (rfocusMorph.test(type + jQuery.event.triggered)) {
            return
        }
        if (type.indexOf(".") >= 0) {
            namespaces = type.split(".");
            type = namespaces.shift();
            namespaces.sort()
        }
        ontype = type.indexOf(":") < 0 && "on" + type;
        event = event[jQuery.expando] ? event : new jQuery.Event(type, typeof event === "object" && event);
        event.isTrigger = onlyHandlers ? 2 : 3;
        event.namespace = namespaces.join(".");
        event.namespace_re = event.namespace ? new RegExp("(^|\\.)" + namespaces.join("\\.(?:.*\\.|)") + "(\\.|$)") : null;
        event.result = undefined;
        if (!event.target) {
            event.target = elem
        }
        data = data == null ? [event] : jQuery.makeArray(data, [event]);
        special = jQuery.event.special[type] || {};
        if (!onlyHandlers && special.trigger && special.trigger.apply(elem, data) === false) {
            return
        }
        if (!onlyHandlers && !special.noBubble && !jQuery.isWindow(elem)) {
            bubbleType = special.delegateType || type;
            if (!rfocusMorph.test(bubbleType + type)) {
                cur = cur.parentNode
            }
            for (; cur; cur = cur.parentNode) {
                eventPath.push(cur);
                tmp = cur
            }
            if (tmp === (elem.ownerDocument || document)) {
                eventPath.push(tmp.defaultView || tmp.parentWindow || window)
            }
        }
        i = 0;
        while ((cur = eventPath[i++]) && !event.isPropagationStopped()) {
            event.type = i > 1 ? bubbleType : special.bindType || type;
            handle = (data_priv.get(cur, "events") || {})[event.type] && data_priv.get(cur, "handle");
            if (handle) {
                handle.apply(cur, data)
            }
            handle = ontype && cur[ontype];
            if (handle && handle.apply && jQuery.acceptData(cur)) {
                event.result = handle.apply(cur, data);
                if (event.result === false) {
                    event.preventDefault()
                }
            }
        }
        event.type = type;
        if (!onlyHandlers && !event.isDefaultPrevented()) {
            if ((!special._default || special._default.apply(eventPath.pop(), data) === false) && jQuery.acceptData(elem)) {
                if (ontype && jQuery.isFunction(elem[type]) && !jQuery.isWindow(elem)) {
                    tmp = elem[ontype];
                    if (tmp) {
                        elem[ontype] = null
                    }
                    jQuery.event.triggered = type;
                    elem[type]();
                    jQuery.event.triggered = undefined;
                    if (tmp) {
                        elem[ontype] = tmp
                    }
                }
            }
        }
        return event.result
    }, dispatch: function (event) {
        event = jQuery.event.fix(event);
        var i, j, ret, matched, handleObj, handlerQueue = [], args = slice.call(arguments), handlers = (data_priv.get(this, "events") || {})[event.type] || [], special = jQuery.event.special[event.type] || {};
        args[0] = event;
        event.delegateTarget = this;
        if (special.preDispatch && special.preDispatch.call(this, event) === false) {
            return
        }
        handlerQueue = jQuery.event.handlers.call(this, event, handlers);
        i = 0;
        while ((matched = handlerQueue[i++]) && !event.isPropagationStopped()) {
            event.currentTarget = matched.elem;
            j = 0;
            while ((handleObj = matched.handlers[j++]) && !event.isImmediatePropagationStopped()) {
                if (!event.namespace_re || event.namespace_re.test(handleObj.namespace)) {
                    event.handleObj = handleObj;
                    event.data = handleObj.data;
                    ret = ((jQuery.event.special[handleObj.origType] || {}).handle || handleObj.handler).apply(matched.elem, args);
                    if (ret !== undefined) {
                        if ((event.result = ret) === false) {
                            event.preventDefault();
                            event.stopPropagation()
                        }
                    }
                }
            }
        }
        if (special.postDispatch) {
            special.postDispatch.call(this, event)
        }
        return event.result
    }, handlers: function (event, handlers) {
        var i, matches, sel, handleObj, handlerQueue = [], delegateCount = handlers.delegateCount, cur = event.target;
        if (delegateCount && cur.nodeType && (!event.button || event.type !== "click")) {
            for (; cur !== this; cur = cur.parentNode || this) {
                if (cur.disabled !== true || event.type !== "click") {
                    matches = [];
                    for (i = 0; i < delegateCount; i++) {
                        handleObj = handlers[i];
                        sel = handleObj.selector + " ";
                        if (matches[sel] === undefined) {
                            matches[sel] = handleObj.needsContext ? jQuery(sel, this).index(cur) >= 0 : jQuery.find(sel, this, null, [cur]).length
                        }
                        if (matches[sel]) {
                            matches.push(handleObj)
                        }
                    }
                    if (matches.length) {
                        handlerQueue.push({elem: cur, handlers: matches})
                    }
                }
            }
        }
        if (delegateCount < handlers.length) {
            handlerQueue.push({elem: this, handlers: handlers.slice(delegateCount)})
        }
        return handlerQueue
    }, props: "altKey bubbles cancelable ctrlKey currentTarget eventPhase metaKey relatedTarget shiftKey target timeStamp view which".split(" "), fixHooks: {}, keyHooks: {props: "char charCode key keyCode".split(" "), filter: function (event, original) {
        if (event.which == null) {
            event.which = original.charCode != null ? original.charCode : original.keyCode
        }
        return event
    }}, mouseHooks: {props: "button buttons clientX clientY offsetX offsetY pageX pageY screenX screenY toElement".split(" "), filter: function (event, original) {
        var eventDoc, doc, body, button = original.button;
        if (event.pageX == null && original.clientX != null) {
            eventDoc = event.target.ownerDocument || document;
            doc = eventDoc.documentElement;
            body = eventDoc.body;
            event.pageX = original.clientX + (doc && doc.scrollLeft || body && body.scrollLeft || 0) - (doc && doc.clientLeft || body && body.clientLeft || 0);
            event.pageY = original.clientY + (doc && doc.scrollTop || body && body.scrollTop || 0) - (doc && doc.clientTop || body && body.clientTop || 0)
        }
        if (!event.which && button !== undefined) {
            event.which = (button & 1 ? 1 : (button & 2 ? 3 : (button & 4 ? 2 : 0)))
        }
        return event
    }}, fix: function (event) {
        if (event[jQuery.expando]) {
            return event
        }
        var i, prop, copy, type = event.type, originalEvent = event, fixHook = this.fixHooks[type];
        if (!fixHook) {
            this.fixHooks[type] = fixHook = rmouseEvent.test(type) ? this.mouseHooks : rkeyEvent.test(type) ? this.keyHooks : {}
        }
        copy = fixHook.props ? this.props.concat(fixHook.props) : this.props;
        event = new jQuery.Event(originalEvent);
        i = copy.length;
        while (i--) {
            prop = copy[i];
            event[prop] = originalEvent[prop]
        }
        if (!event.target) {
            event.target = document
        }
        if (event.target.nodeType === 3) {
            event.target = event.target.parentNode
        }
        return fixHook.filter ? fixHook.filter(event, originalEvent) : event
    }, special: {load: {noBubble: true}, focus: {trigger: function () {
        if (this !== safeActiveElement() && this.focus) {
            this.focus();
            return false
        }
    }, delegateType: "focusin"}, blur: {trigger: function () {
        if (this === safeActiveElement() && this.blur) {
            this.blur();
            return false
        }
    }, delegateType: "focusout"}, click: {trigger: function () {
        if (this.type === "checkbox" && this.click && jQuery.nodeName(this, "input")) {
            this.click();
            return false
        }
    }, _default: function (event) {
        return jQuery.nodeName(event.target, "a")
    }}, beforeunload: {postDispatch: function (event) {
        if (event.result !== undefined && event.originalEvent) {
            event.originalEvent.returnValue = event.result
        }
    }}}, simulate: function (type, elem, event, bubble) {
        var e = jQuery.extend(new jQuery.Event(), event, {type: type, isSimulated: true, originalEvent: {}});
        if (bubble) {
            jQuery.event.trigger(e, null, elem)
        } else {
            jQuery.event.dispatch.call(elem, e)
        }
        if (e.isDefaultPrevented()) {
            event.preventDefault()
        }
    }};
    jQuery.removeEvent = function (elem, type, handle) {
        if (elem.removeEventListener) {
            elem.removeEventListener(type, handle, false)
        }
    };
    jQuery.Event = function (src, props) {
        if (!(this instanceof jQuery.Event)) {
            return new jQuery.Event(src, props)
        }
        if (src && src.type) {
            this.originalEvent = src;
            this.type = src.type;
            this.isDefaultPrevented = src.defaultPrevented || src.defaultPrevented === undefined && src.returnValue === false ? returnTrue : returnFalse
        } else {
            this.type = src
        }
        if (props) {
            jQuery.extend(this, props)
        }
        this.timeStamp = src && src.timeStamp || jQuery.now();
        this[jQuery.expando] = true
    };
    jQuery.Event.prototype = {isDefaultPrevented: returnFalse, isPropagationStopped: returnFalse, isImmediatePropagationStopped: returnFalse, preventDefault: function () {
        var e = this.originalEvent;
        this.isDefaultPrevented = returnTrue;
        if (e && e.preventDefault) {
            e.preventDefault()
        }
    }, stopPropagation: function () {
        var e = this.originalEvent;
        this.isPropagationStopped = returnTrue;
        if (e && e.stopPropagation) {
            e.stopPropagation()
        }
    }, stopImmediatePropagation: function () {
        var e = this.originalEvent;
        this.isImmediatePropagationStopped = returnTrue;
        if (e && e.stopImmediatePropagation) {
            e.stopImmediatePropagation()
        }
        this.stopPropagation()
    }};
    jQuery.each({mouseenter: "mouseover", mouseleave: "mouseout", pointerenter: "pointerover", pointerleave: "pointerout"}, function (orig, fix) {
        jQuery.event.special[orig] = {delegateType: fix, bindType: fix, handle: function (event) {
            var ret, target = this, related = event.relatedTarget, handleObj = event.handleObj;
            if (!related || (related !== target && !jQuery.contains(target, related))) {
                event.type = handleObj.origType;
                ret = handleObj.handler.apply(this, arguments);
                event.type = fix
            }
            return ret
        }}
    });
    if (!support.focusinBubbles) {
        jQuery.each({focus: "focusin", blur: "focusout"}, function (orig, fix) {
            var handler = function (event) {
                jQuery.event.simulate(fix, event.target, jQuery.event.fix(event), true)
            };
            jQuery.event.special[fix] = {setup: function () {
                var doc = this.ownerDocument || this, attaches = data_priv.access(doc, fix);
                if (!attaches) {
                    doc.addEventListener(orig, handler, true)
                }
                data_priv.access(doc, fix, (attaches || 0) + 1)
            }, teardown: function () {
                var doc = this.ownerDocument || this, attaches = data_priv.access(doc, fix) - 1;
                if (!attaches) {
                    doc.removeEventListener(orig, handler, true);
                    data_priv.remove(doc, fix)
                } else {
                    data_priv.access(doc, fix, attaches)
                }
            }}
        })
    }
    jQuery.fn.extend({on: function (types, selector, data, fn, one) {
        var origFn, type;
        if (typeof types === "object") {
            if (typeof selector !== "string") {
                data = data || selector;
                selector = undefined
            }
            for (type in types) {
                this.on(type, selector, data, types[type], one)
            }
            return this
        }
        if (data == null && fn == null) {
            fn = selector;
            data = selector = undefined
        } else {
            if (fn == null) {
                if (typeof selector === "string") {
                    fn = data;
                    data = undefined
                } else {
                    fn = data;
                    data = selector;
                    selector = undefined
                }
            }
        }
        if (fn === false) {
            fn = returnFalse
        } else {
            if (!fn) {
                return this
            }
        }
        if (one === 1) {
            origFn = fn;
            fn = function (event) {
                jQuery().off(event);
                return origFn.apply(this, arguments)
            };
            fn.guid = origFn.guid || (origFn.guid = jQuery.guid++)
        }
        return this.each(function () {
            jQuery.event.add(this, types, fn, data, selector)
        })
    }, one: function (types, selector, data, fn) {
        return this.on(types, selector, data, fn, 1)
    }, off: function (types, selector, fn) {
        var handleObj, type;
        if (types && types.preventDefault && types.handleObj) {
            handleObj = types.handleObj;
            jQuery(types.delegateTarget).off(handleObj.namespace ? handleObj.origType + "." + handleObj.namespace : handleObj.origType, handleObj.selector, handleObj.handler);
            return this
        }
        if (typeof types === "object") {
            for (type in types) {
                this.off(type, selector, types[type])
            }
            return this
        }
        if (selector === false || typeof selector === "function") {
            fn = selector;
            selector = undefined
        }
        if (fn === false) {
            fn = returnFalse
        }
        return this.each(function () {
            jQuery.event.remove(this, types, fn, selector)
        })
    }, trigger: function (type, data) {
        return this.each(function () {
            jQuery.event.trigger(type, data, this)
        })
    }, triggerHandler: function (type, data) {
        var elem = this[0];
        if (elem) {
            return jQuery.event.trigger(type, data, elem, true)
        }
    }});
    var rxhtmlTag = /<(?!area|br|col|embed|hr|img|input|link|meta|param)(([\w:]+)[^>]*)\/>/gi, rtagName = /<([\w:]+)/, rhtml = /<|&#?\w+;/, rnoInnerhtml = /<(?:script|style|link)/i, rchecked = /checked\s*(?:[^=]|=\s*.checked.)/i, rscriptType = /^$|\/(?:java|ecma)script/i, rscriptTypeMasked = /^true\/(.*)/, rcleanScript = /^\s*<!(?:\[CDATA\[|--)|(?:\]\]|--)>\s*$/g, wrapMap = {option: [1, "<select multiple='multiple'>", "</select>"], thead: [1, "<table>", "</table>"], col: [2, "<table><colgroup>", "</colgroup></table>"], tr: [2, "<table><tbody>", "</tbody></table>"], td: [3, "<table><tbody><tr>", "</tr></tbody></table>"], _default: [0, "", ""]};
    wrapMap.optgroup = wrapMap.option;
    wrapMap.tbody = wrapMap.tfoot = wrapMap.colgroup = wrapMap.caption = wrapMap.thead;
    wrapMap.th = wrapMap.td;
    function manipulationTarget(elem, content) {
        return jQuery.nodeName(elem, "table") && jQuery.nodeName(content.nodeType !== 11 ? content : content.firstChild, "tr") ? elem.getElementsByTagName("tbody")[0] || elem.appendChild(elem.ownerDocument.createElement("tbody")) : elem
    }

    function disableScript(elem) {
        elem.type = (elem.getAttribute("type") !== null) + "/" + elem.type;
        return elem
    }

    function restoreScript(elem) {
        var match = rscriptTypeMasked.exec(elem.type);
        if (match) {
            elem.type = match[1]
        } else {
            elem.removeAttribute("type")
        }
        return elem
    }

    function setGlobalEval(elems, refElements) {
        var i = 0, l = elems.length;
        for (; i < l; i++) {
            data_priv.set(elems[i], "globalEval", !refElements || data_priv.get(refElements[i], "globalEval"))
        }
    }

    function cloneCopyEvent(src, dest) {
        var i, l, type, pdataOld, pdataCur, udataOld, udataCur, events;
        if (dest.nodeType !== 1) {
            return
        }
        if (data_priv.hasData(src)) {
            pdataOld = data_priv.access(src);
            pdataCur = data_priv.set(dest, pdataOld);
            events = pdataOld.events;
            if (events) {
                delete pdataCur.handle;
                pdataCur.events = {};
                for (type in events) {
                    for (i = 0, l = events[type].length; i < l; i++) {
                        jQuery.event.add(dest, type, events[type][i])
                    }
                }
            }
        }
        if (data_user.hasData(src)) {
            udataOld = data_user.access(src);
            udataCur = jQuery.extend({}, udataOld);
            data_user.set(dest, udataCur)
        }
    }

    function getAll(context, tag) {
        var ret = context.getElementsByTagName ? context.getElementsByTagName(tag || "*") : context.querySelectorAll ? context.querySelectorAll(tag || "*") : [];
        return tag === undefined || tag && jQuery.nodeName(context, tag) ? jQuery.merge([context], ret) : ret
    }

    function fixInput(src, dest) {
        var nodeName = dest.nodeName.toLowerCase();
        if (nodeName === "input" && rcheckableType.test(src.type)) {
            dest.checked = src.checked
        } else {
            if (nodeName === "input" || nodeName === "textarea") {
                dest.defaultValue = src.defaultValue
            }
        }
    }

    jQuery.extend({clone: function (elem, dataAndEvents, deepDataAndEvents) {
        var i, l, srcElements, destElements, clone = elem.cloneNode(true), inPage = jQuery.contains(elem.ownerDocument, elem);
        if (!support.noCloneChecked && (elem.nodeType === 1 || elem.nodeType === 11) && !jQuery.isXMLDoc(elem)) {
            destElements = getAll(clone);
            srcElements = getAll(elem);
            for (i = 0, l = srcElements.length; i < l; i++) {
                fixInput(srcElements[i], destElements[i])
            }
        }
        if (dataAndEvents) {
            if (deepDataAndEvents) {
                srcElements = srcElements || getAll(elem);
                destElements = destElements || getAll(clone);
                for (i = 0, l = srcElements.length; i < l; i++) {
                    cloneCopyEvent(srcElements[i], destElements[i])
                }
            } else {
                cloneCopyEvent(elem, clone)
            }
        }
        destElements = getAll(clone, "script");
        if (destElements.length > 0) {
            setGlobalEval(destElements, !inPage && getAll(elem, "script"))
        }
        return clone
    }, buildFragment: function (elems, context, scripts, selection) {
        var elem, tmp, tag, wrap, contains, j, fragment = context.createDocumentFragment(), nodes = [], i = 0, l = elems.length;
        for (; i < l; i++) {
            elem = elems[i];
            if (elem || elem === 0) {
                if (jQuery.type(elem) === "object") {
                    jQuery.merge(nodes, elem.nodeType ? [elem] : elem)
                } else {
                    if (!rhtml.test(elem)) {
                        nodes.push(context.createTextNode(elem))
                    } else {
                        tmp = tmp || fragment.appendChild(context.createElement("div"));
                        tag = (rtagName.exec(elem) || ["", ""])[1].toLowerCase();
                        wrap = wrapMap[tag] || wrapMap._default;
                        tmp.innerHTML = wrap[1] + elem.replace(rxhtmlTag, "<$1></$2>") + wrap[2];
                        j = wrap[0];
                        while (j--) {
                            tmp = tmp.lastChild
                        }
                        jQuery.merge(nodes, tmp.childNodes);
                        tmp = fragment.firstChild;
                        tmp.textContent = ""
                    }
                }
            }
        }
        fragment.textContent = "";
        i = 0;
        while ((elem = nodes[i++])) {
            if (selection && jQuery.inArray(elem, selection) !== -1) {
                continue
            }
            contains = jQuery.contains(elem.ownerDocument, elem);
            tmp = getAll(fragment.appendChild(elem), "script");
            if (contains) {
                setGlobalEval(tmp)
            }
            if (scripts) {
                j = 0;
                while ((elem = tmp[j++])) {
                    if (rscriptType.test(elem.type || "")) {
                        scripts.push(elem)
                    }
                }
            }
        }
        return fragment
    }, cleanData: function (elems) {
        var data, elem, type, key, special = jQuery.event.special, i = 0;
        for (; (elem = elems[i]) !== undefined; i++) {
            if (jQuery.acceptData(elem)) {
                key = elem[data_priv.expando];
                if (key && (data = data_priv.cache[key])) {
                    if (data.events) {
                        for (type in data.events) {
                            if (special[type]) {
                                jQuery.event.remove(elem, type)
                            } else {
                                jQuery.removeEvent(elem, type, data.handle)
                            }
                        }
                    }
                    if (data_priv.cache[key]) {
                        delete data_priv.cache[key]
                    }
                }
            }
            delete data_user.cache[elem[data_user.expando]]
        }
    }});
    jQuery.fn.extend({text: function (value) {
        return access(this, function (value) {
            return value === undefined ? jQuery.text(this) : this.empty().each(function () {
                if (this.nodeType === 1 || this.nodeType === 11 || this.nodeType === 9) {
                    this.textContent = value
                }
            })
        }, null, value, arguments.length)
    }, append: function () {
        return this.domManip(arguments, function (elem) {
            if (this.nodeType === 1 || this.nodeType === 11 || this.nodeType === 9) {
                var target = manipulationTarget(this, elem);
                target.appendChild(elem)
            }
        })
    }, prepend: function () {
        return this.domManip(arguments, function (elem) {
            if (this.nodeType === 1 || this.nodeType === 11 || this.nodeType === 9) {
                var target = manipulationTarget(this, elem);
                target.insertBefore(elem, target.firstChild)
            }
        })
    }, before: function () {
        return this.domManip(arguments, function (elem) {
            if (this.parentNode) {
                this.parentNode.insertBefore(elem, this)
            }
        })
    }, after: function () {
        return this.domManip(arguments, function (elem) {
            if (this.parentNode) {
                this.parentNode.insertBefore(elem, this.nextSibling)
            }
        })
    }, remove: function (selector, keepData) {
        var elem, elems = selector ? jQuery.filter(selector, this) : this, i = 0;
        for (; (elem = elems[i]) != null; i++) {
            if (!keepData && elem.nodeType === 1) {
                jQuery.cleanData(getAll(elem))
            }
            if (elem.parentNode) {
                if (keepData && jQuery.contains(elem.ownerDocument, elem)) {
                    setGlobalEval(getAll(elem, "script"))
                }
                elem.parentNode.removeChild(elem)
            }
        }
        return this
    }, empty: function () {
        var elem, i = 0;
        for (; (elem = this[i]) != null; i++) {
            if (elem.nodeType === 1) {
                jQuery.cleanData(getAll(elem, false));
                elem.textContent = ""
            }
        }
        return this
    }, clone: function (dataAndEvents, deepDataAndEvents) {
        dataAndEvents = dataAndEvents == null ? false : dataAndEvents;
        deepDataAndEvents = deepDataAndEvents == null ? dataAndEvents : deepDataAndEvents;
        return this.map(function () {
            return jQuery.clone(this, dataAndEvents, deepDataAndEvents)
        })
    }, html: function (value) {
        return access(this, function (value) {
            var elem = this[0] || {}, i = 0, l = this.length;
            if (value === undefined && elem.nodeType === 1) {
                return elem.innerHTML
            }
            if (typeof value === "string" && !rnoInnerhtml.test(value) && !wrapMap[(rtagName.exec(value) || ["", ""])[1].toLowerCase()]) {
                value = value.replace(rxhtmlTag, "<$1></$2>");
                try {
                    for (; i < l; i++) {
                        elem = this[i] || {};
                        if (elem.nodeType === 1) {
                            jQuery.cleanData(getAll(elem, false));
                            elem.innerHTML = value
                        }
                    }
                    elem = 0
                } catch (e) {
                }
            }
            if (elem) {
                this.empty().append(value)
            }
        }, null, value, arguments.length)
    }, replaceWith: function () {
        var arg = arguments[0];
        this.domManip(arguments, function (elem) {
            arg = this.parentNode;
            jQuery.cleanData(getAll(this));
            if (arg) {
                arg.replaceChild(elem, this)
            }
        });
        return arg && (arg.length || arg.nodeType) ? this : this.remove()
    }, detach: function (selector) {
        return this.remove(selector, true)
    }, domManip: function (args, callback) {
        args = concat.apply([], args);
        var fragment, first, scripts, hasScripts, node, doc, i = 0, l = this.length, set = this, iNoClone = l - 1, value = args[0], isFunction = jQuery.isFunction(value);
        if (isFunction || (l > 1 && typeof value === "string" && !support.checkClone && rchecked.test(value))) {
            return this.each(function (index) {
                var self = set.eq(index);
                if (isFunction) {
                    args[0] = value.call(this, index, self.html())
                }
                self.domManip(args, callback)
            })
        }
        if (l) {
            fragment = jQuery.buildFragment(args, this[0].ownerDocument, false, this);
            first = fragment.firstChild;
            if (fragment.childNodes.length === 1) {
                fragment = first
            }
            if (first) {
                scripts = jQuery.map(getAll(fragment, "script"), disableScript);
                hasScripts = scripts.length;
                for (; i < l; i++) {
                    node = fragment;
                    if (i !== iNoClone) {
                        node = jQuery.clone(node, true, true);
                        if (hasScripts) {
                            jQuery.merge(scripts, getAll(node, "script"))
                        }
                    }
                    callback.call(this[i], node, i)
                }
                if (hasScripts) {
                    doc = scripts[scripts.length - 1].ownerDocument;
                    jQuery.map(scripts, restoreScript);
                    for (i = 0; i < hasScripts; i++) {
                        node = scripts[i];
                        if (rscriptType.test(node.type || "") && !data_priv.access(node, "globalEval") && jQuery.contains(doc, node)) {
                            if (node.src) {
                                if (jQuery._evalUrl) {
                                    jQuery._evalUrl(node.src)
                                }
                            } else {
                                jQuery.globalEval(node.textContent.replace(rcleanScript, ""))
                            }
                        }
                    }
                }
            }
        }
        return this
    }});
    jQuery.each({appendTo: "append", prependTo: "prepend", insertBefore: "before", insertAfter: "after", replaceAll: "replaceWith"}, function (name, original) {
        jQuery.fn[name] = function (selector) {
            var elems, ret = [], insert = jQuery(selector), last = insert.length - 1, i = 0;
            for (; i <= last; i++) {
                elems = i === last ? this : this.clone(true);
                jQuery(insert[i])[original](elems);
                push.apply(ret, elems.get())
            }
            return this.pushStack(ret)
        }
    });
    var iframe, elemdisplay = {};

    function actualDisplay(name, doc) {
        var style, elem = jQuery(doc.createElement(name)).appendTo(doc.body), display = window.getDefaultComputedStyle && (style = window.getDefaultComputedStyle(elem[0])) ? style.display : jQuery.css(elem[0], "display");
        elem.detach();
        return display
    }

    function defaultDisplay(nodeName) {
        var doc = document, display = elemdisplay[nodeName];
        if (!display) {
            display = actualDisplay(nodeName, doc);
            if (display === "none" || !display) {
                iframe = (iframe || jQuery("<iframe frameborder='0' width='0' height='0'/>")).appendTo(doc.documentElement);
                doc = iframe[0].contentDocument;
                doc.write();
                doc.close();
                display = actualDisplay(nodeName, doc);
                iframe.detach()
            }
            elemdisplay[nodeName] = display
        }
        return display
    }

    var rmargin = (/^margin/);
    var rnumnonpx = new RegExp("^(" + pnum + ")(?!px)[a-z%]+$", "i");
    var getStyles = function (elem) {
        return elem.ownerDocument.defaultView.getComputedStyle(elem, null)
    };

    function curCSS(elem, name, computed) {
        var width, minWidth, maxWidth, ret, style = elem.style;
        computed = computed || getStyles(elem);
        if (computed) {
            ret = computed.getPropertyValue(name) || computed[name]
        }
        if (computed) {
            if (ret === "" && !jQuery.contains(elem.ownerDocument, elem)) {
                ret = jQuery.style(elem, name)
            }
            if (rnumnonpx.test(ret) && rmargin.test(name)) {
                width = style.width;
                minWidth = style.minWidth;
                maxWidth = style.maxWidth;
                style.minWidth = style.maxWidth = style.width = ret;
                ret = computed.width;
                style.width = width;
                style.minWidth = minWidth;
                style.maxWidth = maxWidth
            }
        }
        return ret !== undefined ? ret + "" : ret
    }

    function addGetHookIf(conditionFn, hookFn) {
        return{get: function () {
            if (conditionFn()) {
                delete this.get;
                return
            }
            return(this.get = hookFn).apply(this, arguments)
        }}
    }

    (function () {
        var pixelPositionVal, boxSizingReliableVal, docElem = document.documentElement, container = document.createElement("div"), div = document.createElement("div");
        if (!div.style) {
            return
        }
        div.style.backgroundClip = "content-box";
        div.cloneNode(true).style.backgroundClip = "";
        support.clearCloneStyle = div.style.backgroundClip === "content-box";
        container.style.cssText = "border:0;width:0;height:0;top:0;left:-9999px;margin-top:1px;position:absolute";
        container.appendChild(div);
        function computePixelPositionAndBoxSizingReliable() {
            div.style.cssText = "-webkit-box-sizing:border-box;-moz-box-sizing:border-box;box-sizing:border-box;display:block;margin-top:1%;top:1%;border:1px;padding:1px;width:4px;position:absolute";
            div.innerHTML = "";
            docElem.appendChild(container);
            var divStyle = window.getComputedStyle(div, null);
            pixelPositionVal = divStyle.top !== "1%";
            boxSizingReliableVal = divStyle.width === "4px";
            docElem.removeChild(container)
        }

        if (window.getComputedStyle) {
            jQuery.extend(support, {pixelPosition: function () {
                computePixelPositionAndBoxSizingReliable();
                return pixelPositionVal
            }, boxSizingReliable: function () {
                if (boxSizingReliableVal == null) {
                    computePixelPositionAndBoxSizingReliable()
                }
                return boxSizingReliableVal
            }, reliableMarginRight: function () {
                var ret, marginDiv = div.appendChild(document.createElement("div"));
                marginDiv.style.cssText = div.style.cssText = "-webkit-box-sizing:content-box;-moz-box-sizing:content-box;box-sizing:content-box;display:block;margin:0;border:0;padding:0";
                marginDiv.style.marginRight = marginDiv.style.width = "0";
                div.style.width = "1px";
                docElem.appendChild(container);
                ret = !parseFloat(window.getComputedStyle(marginDiv, null).marginRight);
                docElem.removeChild(container);
                return ret
            }})
        }
    })();
    jQuery.swap = function (elem, options, callback, args) {
        var ret, name, old = {};
        for (name in options) {
            old[name] = elem.style[name];
            elem.style[name] = options[name]
        }
        ret = callback.apply(elem, args || []);
        for (name in options) {
            elem.style[name] = old[name]
        }
        return ret
    };
    var rdisplayswap = /^(none|table(?!-c[ea]).+)/, rnumsplit = new RegExp("^(" + pnum + ")(.*)$", "i"), rrelNum = new RegExp("^([+-])=(" + pnum + ")", "i"), cssShow = {position: "absolute", visibility: "hidden", display: "block"}, cssNormalTransform = {letterSpacing: "0", fontWeight: "400"}, cssPrefixes = ["Webkit", "O", "Moz", "ms"];

    function vendorPropName(style, name) {
        if (name in style) {
            return name
        }
        var capName = name[0].toUpperCase() + name.slice(1), origName = name, i = cssPrefixes.length;
        while (i--) {
            name = cssPrefixes[i] + capName;
            if (name in style) {
                return name
            }
        }
        return origName
    }

    function setPositiveNumber(elem, value, subtract) {
        var matches = rnumsplit.exec(value);
        return matches ? Math.max(0, matches[1] - (subtract || 0)) + (matches[2] || "px") : value
    }

    function augmentWidthOrHeight(elem, name, extra, isBorderBox, styles) {
        var i = extra === (isBorderBox ? "border" : "content") ? 4 : name === "width" ? 1 : 0, val = 0;
        for (; i < 4; i += 2) {
            if (extra === "margin") {
                val += jQuery.css(elem, extra + cssExpand[i], true, styles)
            }
            if (isBorderBox) {
                if (extra === "content") {
                    val -= jQuery.css(elem, "padding" + cssExpand[i], true, styles)
                }
                if (extra !== "margin") {
                    val -= jQuery.css(elem, "border" + cssExpand[i] + "Width", true, styles)
                }
            } else {
                val += jQuery.css(elem, "padding" + cssExpand[i], true, styles);
                if (extra !== "padding") {
                    val += jQuery.css(elem, "border" + cssExpand[i] + "Width", true, styles)
                }
            }
        }
        return val
    }

    function getWidthOrHeight(elem, name, extra) {
        var valueIsBorderBox = true, val = name === "width" ? elem.offsetWidth : elem.offsetHeight, styles = getStyles(elem), isBorderBox = jQuery.css(elem, "boxSizing", false, styles) === "border-box";
        if (val <= 0 || val == null) {
            val = curCSS(elem, name, styles);
            if (val < 0 || val == null) {
                val = elem.style[name]
            }
            if (rnumnonpx.test(val)) {
                return val
            }
            valueIsBorderBox = isBorderBox && (support.boxSizingReliable() || val === elem.style[name]);
            val = parseFloat(val) || 0
        }
        return(val + augmentWidthOrHeight(elem, name, extra || (isBorderBox ? "border" : "content"), valueIsBorderBox, styles)) + "px"
    }

    function showHide(elements, show) {
        var display, elem, hidden, values = [], index = 0, length = elements.length;
        for (; index < length; index++) {
            elem = elements[index];
            if (!elem.style) {
                continue
            }
            values[index] = data_priv.get(elem, "olddisplay");
            display = elem.style.display;
            if (show) {
                if (!values[index] && display === "none") {
                    elem.style.display = ""
                }
                if (elem.style.display === "" && isHidden(elem)) {
                    values[index] = data_priv.access(elem, "olddisplay", defaultDisplay(elem.nodeName))
                }
            } else {
                hidden = isHidden(elem);
                if (display !== "none" || !hidden) {
                    data_priv.set(elem, "olddisplay", hidden ? display : jQuery.css(elem, "display"))
                }
            }
        }
        for (index = 0; index < length; index++) {
            elem = elements[index];
            if (!elem.style) {
                continue
            }
            if (!show || elem.style.display === "none" || elem.style.display === "") {
                elem.style.display = show ? values[index] || "" : "none"
            }
        }
        return elements
    }

    jQuery.extend({cssHooks: {opacity: {get: function (elem, computed) {
        if (computed) {
            var ret = curCSS(elem, "opacity");
            return ret === "" ? "1" : ret
        }
    }}}, cssNumber: {columnCount: true, fillOpacity: true, flexGrow: true, flexShrink: true, fontWeight: true, lineHeight: true, opacity: true, order: true, orphans: true, widows: true, zIndex: true, zoom: true}, cssProps: {"float": "cssFloat"}, style: function (elem, name, value, extra) {
        if (!elem || elem.nodeType === 3 || elem.nodeType === 8 || !elem.style) {
            return
        }
        var ret, type, hooks, origName = jQuery.camelCase(name), style = elem.style;
        name = jQuery.cssProps[origName] || (jQuery.cssProps[origName] = vendorPropName(style, origName));
        hooks = jQuery.cssHooks[name] || jQuery.cssHooks[origName];
        if (value !== undefined) {
            type = typeof value;
            if (type === "string" && (ret = rrelNum.exec(value))) {
                value = (ret[1] + 1) * ret[2] + parseFloat(jQuery.css(elem, name));
                type = "number"
            }
            if (value == null || value !== value) {
                return
            }
            if (type === "number" && !jQuery.cssNumber[origName]) {
                value += "px"
            }
            if (!support.clearCloneStyle && value === "" && name.indexOf("background") === 0) {
                style[name] = "inherit"
            }
            if (!hooks || !("set" in hooks) || (value = hooks.set(elem, value, extra)) !== undefined) {
                style[name] = value
            }
        } else {
            if (hooks && "get" in hooks && (ret = hooks.get(elem, false, extra)) !== undefined) {
                return ret
            }
            return style[name]
        }
    }, css: function (elem, name, extra, styles) {
        var val, num, hooks, origName = jQuery.camelCase(name);
        name = jQuery.cssProps[origName] || (jQuery.cssProps[origName] = vendorPropName(elem.style, origName));
        hooks = jQuery.cssHooks[name] || jQuery.cssHooks[origName];
        if (hooks && "get" in hooks) {
            val = hooks.get(elem, true, extra)
        }
        if (val === undefined) {
            val = curCSS(elem, name, styles)
        }
        if (val === "normal" && name in cssNormalTransform) {
            val = cssNormalTransform[name]
        }
        if (extra === "" || extra) {
            num = parseFloat(val);
            return extra === true || jQuery.isNumeric(num) ? num || 0 : val
        }
        return val
    }});
    jQuery.each(["height", "width"], function (i, name) {
        jQuery.cssHooks[name] = {get: function (elem, computed, extra) {
            if (computed) {
                return rdisplayswap.test(jQuery.css(elem, "display")) && elem.offsetWidth === 0 ? jQuery.swap(elem, cssShow, function () {
                    return getWidthOrHeight(elem, name, extra)
                }) : getWidthOrHeight(elem, name, extra)
            }
        }, set: function (elem, value, extra) {
            var styles = extra && getStyles(elem);
            return setPositiveNumber(elem, value, extra ? augmentWidthOrHeight(elem, name, extra, jQuery.css(elem, "boxSizing", false, styles) === "border-box", styles) : 0)
        }}
    });
    jQuery.cssHooks.marginRight = addGetHookIf(support.reliableMarginRight, function (elem, computed) {
        if (computed) {
            return jQuery.swap(elem, {display: "inline-block"}, curCSS, [elem, "marginRight"])
        }
    });
    jQuery.each({margin: "", padding: "", border: "Width"}, function (prefix, suffix) {
        jQuery.cssHooks[prefix + suffix] = {expand: function (value) {
            var i = 0, expanded = {}, parts = typeof value === "string" ? value.split(" ") : [value];
            for (; i < 4; i++) {
                expanded[prefix + cssExpand[i] + suffix] = parts[i] || parts[i - 2] || parts[0]
            }
            return expanded
        }};
        if (!rmargin.test(prefix)) {
            jQuery.cssHooks[prefix + suffix].set = setPositiveNumber
        }
    });
    jQuery.fn.extend({css: function (name, value) {
        return access(this, function (elem, name, value) {
            var styles, len, map = {}, i = 0;
            if (jQuery.isArray(name)) {
                styles = getStyles(elem);
                len = name.length;
                for (; i < len; i++) {
                    map[name[i]] = jQuery.css(elem, name[i], false, styles)
                }
                return map
            }
            return value !== undefined ? jQuery.style(elem, name, value) : jQuery.css(elem, name)
        }, name, value, arguments.length > 1)
    }, show: function () {
        return showHide(this, true)
    }, hide: function () {
        return showHide(this)
    }, toggle: function (state) {
        if (typeof state === "boolean") {
            return state ? this.show() : this.hide()
        }
        return this.each(function () {
            if (isHidden(this)) {
                jQuery(this).show()
            } else {
                jQuery(this).hide()
            }
        })
    }});
    function Tween(elem, options, prop, end, easing) {
        return new Tween.prototype.init(elem, options, prop, end, easing)
    }

    jQuery.Tween = Tween;
    Tween.prototype = {constructor: Tween, init: function (elem, options, prop, end, easing, unit) {
        this.elem = elem;
        this.prop = prop;
        this.easing = easing || "swing";
        this.options = options;
        this.start = this.now = this.cur();
        this.end = end;
        this.unit = unit || (jQuery.cssNumber[prop] ? "" : "px")
    }, cur: function () {
        var hooks = Tween.propHooks[this.prop];
        return hooks && hooks.get ? hooks.get(this) : Tween.propHooks._default.get(this)
    }, run: function (percent) {
        var eased, hooks = Tween.propHooks[this.prop];
        if (this.options.duration) {
            this.pos = eased = jQuery.easing[this.easing](percent, this.options.duration * percent, 0, 1, this.options.duration)
        } else {
            this.pos = eased = percent
        }
        this.now = (this.end - this.start) * eased + this.start;
        if (this.options.step) {
            this.options.step.call(this.elem, this.now, this)
        }
        if (hooks && hooks.set) {
            hooks.set(this)
        } else {
            Tween.propHooks._default.set(this)
        }
        return this
    }};
    Tween.prototype.init.prototype = Tween.prototype;
    Tween.propHooks = {_default: {get: function (tween) {
        var result;
        if (tween.elem[tween.prop] != null && (!tween.elem.style || tween.elem.style[tween.prop] == null)) {
            return tween.elem[tween.prop]
        }
        result = jQuery.css(tween.elem, tween.prop, "");
        return !result || result === "auto" ? 0 : result
    }, set: function (tween) {
        if (jQuery.fx.step[tween.prop]) {
            jQuery.fx.step[tween.prop](tween)
        } else {
            if (tween.elem.style && (tween.elem.style[jQuery.cssProps[tween.prop]] != null || jQuery.cssHooks[tween.prop])) {
                jQuery.style(tween.elem, tween.prop, tween.now + tween.unit)
            } else {
                tween.elem[tween.prop] = tween.now
            }
        }
    }}};
    Tween.propHooks.scrollTop = Tween.propHooks.scrollLeft = {set: function (tween) {
        if (tween.elem.nodeType && tween.elem.parentNode) {
            tween.elem[tween.prop] = tween.now
        }
    }};
    jQuery.easing = {linear: function (p) {
        return p
    }, swing: function (p) {
        return 0.5 - Math.cos(p * Math.PI) / 2
    }};
    jQuery.fx = Tween.prototype.init;
    jQuery.fx.step = {};
    var fxNow, timerId, rfxtypes = /^(?:toggle|show|hide)$/, rfxnum = new RegExp("^(?:([+-])=|)(" + pnum + ")([a-z%]*)$", "i"), rrun = /queueHooks$/, animationPrefilters = [defaultPrefilter], tweeners = {"*": [function (prop, value) {
        var tween = this.createTween(prop, value), target = tween.cur(), parts = rfxnum.exec(value), unit = parts && parts[3] || (jQuery.cssNumber[prop] ? "" : "px"), start = (jQuery.cssNumber[prop] || unit !== "px" && +target) && rfxnum.exec(jQuery.css(tween.elem, prop)), scale = 1, maxIterations = 20;
        if (start && start[3] !== unit) {
            unit = unit || start[3];
            parts = parts || [];
            start = +target || 1;
            do {
                scale = scale || ".5";
                start = start / scale;
                jQuery.style(tween.elem, prop, start + unit)
            } while (scale !== (scale = tween.cur() / target) && scale !== 1 && --maxIterations)
        }
        if (parts) {
            start = tween.start = +start || +target || 0;
            tween.unit = unit;
            tween.end = parts[1] ? start + (parts[1] + 1) * parts[2] : +parts[2]
        }
        return tween
    }]};

    function createFxNow() {
        setTimeout(function () {
            fxNow = undefined
        });
        return(fxNow = jQuery.now())
    }

    function genFx(type, includeWidth) {
        var which, i = 0, attrs = {height: type};
        includeWidth = includeWidth ? 1 : 0;
        for (; i < 4; i += 2 - includeWidth) {
            which = cssExpand[i];
            attrs["margin" + which] = attrs["padding" + which] = type
        }
        if (includeWidth) {
            attrs.opacity = attrs.width = type
        }
        return attrs
    }

    function createTween(value, prop, animation) {
        var tween, collection = (tweeners[prop] || []).concat(tweeners["*"]), index = 0, length = collection.length;
        for (; index < length; index++) {
            if ((tween = collection[index].call(animation, prop, value))) {
                return tween
            }
        }
    }

    function defaultPrefilter(elem, props, opts) {
        var prop, value, toggle, tween, hooks, oldfire, display, checkDisplay, anim = this, orig = {}, style = elem.style, hidden = elem.nodeType && isHidden(elem), dataShow = data_priv.get(elem, "fxshow");
        if (!opts.queue) {
            hooks = jQuery._queueHooks(elem, "fx");
            if (hooks.unqueued == null) {
                hooks.unqueued = 0;
                oldfire = hooks.empty.fire;
                hooks.empty.fire = function () {
                    if (!hooks.unqueued) {
                        oldfire()
                    }
                }
            }
            hooks.unqueued++;
            anim.always(function () {
                anim.always(function () {
                    hooks.unqueued--;
                    if (!jQuery.queue(elem, "fx").length) {
                        hooks.empty.fire()
                    }
                })
            })
        }
        if (elem.nodeType === 1 && ("height" in props || "width" in props)) {
            opts.overflow = [style.overflow, style.overflowX, style.overflowY];
            display = jQuery.css(elem, "display");
            checkDisplay = display === "none" ? data_priv.get(elem, "olddisplay") || defaultDisplay(elem.nodeName) : display;
            if (checkDisplay === "inline" && jQuery.css(elem, "float") === "none") {
                style.display = "inline-block"
            }
        }
        if (opts.overflow) {
            style.overflow = "hidden";
            anim.always(function () {
                style.overflow = opts.overflow[0];
                style.overflowX = opts.overflow[1];
                style.overflowY = opts.overflow[2]
            })
        }
        for (prop in props) {
            value = props[prop];
            if (rfxtypes.exec(value)) {
                delete props[prop];
                toggle = toggle || value === "toggle";
                if (value === (hidden ? "hide" : "show")) {
                    if (value === "show" && dataShow && dataShow[prop] !== undefined) {
                        hidden = true
                    } else {
                        continue
                    }
                }
                orig[prop] = dataShow && dataShow[prop] || jQuery.style(elem, prop)
            } else {
                display = undefined
            }
        }
        if (!jQuery.isEmptyObject(orig)) {
            if (dataShow) {
                if ("hidden" in dataShow) {
                    hidden = dataShow.hidden
                }
            } else {
                dataShow = data_priv.access(elem, "fxshow", {})
            }
            if (toggle) {
                dataShow.hidden = !hidden
            }
            if (hidden) {
                jQuery(elem).show()
            } else {
                anim.done(function () {
                    jQuery(elem).hide()
                })
            }
            anim.done(function () {
                var prop;
                data_priv.remove(elem, "fxshow");
                for (prop in orig) {
                    jQuery.style(elem, prop, orig[prop])
                }
            });
            for (prop in orig) {
                tween = createTween(hidden ? dataShow[prop] : 0, prop, anim);
                if (!(prop in dataShow)) {
                    dataShow[prop] = tween.start;
                    if (hidden) {
                        tween.end = tween.start;
                        tween.start = prop === "width" || prop === "height" ? 1 : 0
                    }
                }
            }
        } else {
            if ((display === "none" ? defaultDisplay(elem.nodeName) : display) === "inline") {
                style.display = display
            }
        }
    }

    function propFilter(props, specialEasing) {
        var index, name, easing, value, hooks;
        for (index in props) {
            name = jQuery.camelCase(index);
            easing = specialEasing[name];
            value = props[index];
            if (jQuery.isArray(value)) {
                easing = value[1];
                value = props[index] = value[0]
            }
            if (index !== name) {
                props[name] = value;
                delete props[index]
            }
            hooks = jQuery.cssHooks[name];
            if (hooks && "expand" in hooks) {
                value = hooks.expand(value);
                delete props[name];
                for (index in value) {
                    if (!(index in props)) {
                        props[index] = value[index];
                        specialEasing[index] = easing
                    }
                }
            } else {
                specialEasing[name] = easing
            }
        }
    }

    function Animation(elem, properties, options) {
        var result, stopped, index = 0, length = animationPrefilters.length, deferred = jQuery.Deferred().always(function () {
            delete tick.elem
        }), tick = function () {
            if (stopped) {
                return false
            }
            var currentTime = fxNow || createFxNow(), remaining = Math.max(0, animation.startTime + animation.duration - currentTime), temp = remaining / animation.duration || 0, percent = 1 - temp, index = 0, length = animation.tweens.length;
            for (; index < length; index++) {
                animation.tweens[index].run(percent)
            }
            deferred.notifyWith(elem, [animation, percent, remaining]);
            if (percent < 1 && length) {
                return remaining
            } else {
                deferred.resolveWith(elem, [animation]);
                return false
            }
        }, animation = deferred.promise({elem: elem, props: jQuery.extend({}, properties), opts: jQuery.extend(true, {specialEasing: {}}, options), originalProperties: properties, originalOptions: options, startTime: fxNow || createFxNow(), duration: options.duration, tweens: [], createTween: function (prop, end) {
            var tween = jQuery.Tween(elem, animation.opts, prop, end, animation.opts.specialEasing[prop] || animation.opts.easing);
            animation.tweens.push(tween);
            return tween
        }, stop: function (gotoEnd) {
            var index = 0, length = gotoEnd ? animation.tweens.length : 0;
            if (stopped) {
                return this
            }
            stopped = true;
            for (; index < length; index++) {
                animation.tweens[index].run(1)
            }
            if (gotoEnd) {
                deferred.resolveWith(elem, [animation, gotoEnd])
            } else {
                deferred.rejectWith(elem, [animation, gotoEnd])
            }
            return this
        }}), props = animation.props;
        propFilter(props, animation.opts.specialEasing);
        for (; index < length; index++) {
            result = animationPrefilters[index].call(animation, elem, props, animation.opts);
            if (result) {
                return result
            }
        }
        jQuery.map(props, createTween, animation);
        if (jQuery.isFunction(animation.opts.start)) {
            animation.opts.start.call(elem, animation)
        }
        jQuery.fx.timer(jQuery.extend(tick, {elem: elem, anim: animation, queue: animation.opts.queue}));
        return animation.progress(animation.opts.progress).done(animation.opts.done, animation.opts.complete).fail(animation.opts.fail).always(animation.opts.always)
    }

    jQuery.Animation = jQuery.extend(Animation, {tweener: function (props, callback) {
        if (jQuery.isFunction(props)) {
            callback = props;
            props = ["*"]
        } else {
            props = props.split(" ")
        }
        var prop, index = 0, length = props.length;
        for (; index < length; index++) {
            prop = props[index];
            tweeners[prop] = tweeners[prop] || [];
            tweeners[prop].unshift(callback)
        }
    }, prefilter: function (callback, prepend) {
        if (prepend) {
            animationPrefilters.unshift(callback)
        } else {
            animationPrefilters.push(callback)
        }
    }});
    jQuery.speed = function (speed, easing, fn) {
        var opt = speed && typeof speed === "object" ? jQuery.extend({}, speed) : {complete: fn || !fn && easing || jQuery.isFunction(speed) && speed, duration: speed, easing: fn && easing || easing && !jQuery.isFunction(easing) && easing};
        opt.duration = jQuery.fx.off ? 0 : typeof opt.duration === "number" ? opt.duration : opt.duration in jQuery.fx.speeds ? jQuery.fx.speeds[opt.duration] : jQuery.fx.speeds._default;
        if (opt.queue == null || opt.queue === true) {
            opt.queue = "fx"
        }
        opt.old = opt.complete;
        opt.complete = function () {
            if (jQuery.isFunction(opt.old)) {
                opt.old.call(this)
            }
            if (opt.queue) {
                jQuery.dequeue(this, opt.queue)
            }
        };
        return opt
    };
    jQuery.fn.extend({fadeTo: function (speed, to, easing, callback) {
        return this.filter(isHidden).css("opacity", 0).show().end().animate({opacity: to}, speed, easing, callback)
    }, animate: function (prop, speed, easing, callback) {
        var empty = jQuery.isEmptyObject(prop), optall = jQuery.speed(speed, easing, callback), doAnimation = function () {
            var anim = Animation(this, jQuery.extend({}, prop), optall);
            if (empty || data_priv.get(this, "finish")) {
                anim.stop(true)
            }
        };
        doAnimation.finish = doAnimation;
        return empty || optall.queue === false ? this.each(doAnimation) : this.queue(optall.queue, doAnimation)
    }, stop: function (type, clearQueue, gotoEnd) {
        var stopQueue = function (hooks) {
            var stop = hooks.stop;
            delete hooks.stop;
            stop(gotoEnd)
        };
        if (typeof type !== "string") {
            gotoEnd = clearQueue;
            clearQueue = type;
            type = undefined
        }
        if (clearQueue && type !== false) {
            this.queue(type || "fx", [])
        }
        return this.each(function () {
            var dequeue = true, index = type != null && type + "queueHooks", timers = jQuery.timers, data = data_priv.get(this);
            if (index) {
                if (data[index] && data[index].stop) {
                    stopQueue(data[index])
                }
            } else {
                for (index in data) {
                    if (data[index] && data[index].stop && rrun.test(index)) {
                        stopQueue(data[index])
                    }
                }
            }
            for (index = timers.length; index--;) {
                if (timers[index].elem === this && (type == null || timers[index].queue === type)) {
                    timers[index].anim.stop(gotoEnd);
                    dequeue = false;
                    timers.splice(index, 1)
                }
            }
            if (dequeue || !gotoEnd) {
                jQuery.dequeue(this, type)
            }
        })
    }, finish: function (type) {
        if (type !== false) {
            type = type || "fx"
        }
        return this.each(function () {
            var index, data = data_priv.get(this), queue = data[type + "queue"], hooks = data[type + "queueHooks"], timers = jQuery.timers, length = queue ? queue.length : 0;
            data.finish = true;
            jQuery.queue(this, type, []);
            if (hooks && hooks.stop) {
                hooks.stop.call(this, true)
            }
            for (index = timers.length; index--;) {
                if (timers[index].elem === this && timers[index].queue === type) {
                    timers[index].anim.stop(true);
                    timers.splice(index, 1)
                }
            }
            for (index = 0; index < length; index++) {
                if (queue[index] && queue[index].finish) {
                    queue[index].finish.call(this)
                }
            }
            delete data.finish
        })
    }});
    jQuery.each(["toggle", "show", "hide"], function (i, name) {
        var cssFn = jQuery.fn[name];
        jQuery.fn[name] = function (speed, easing, callback) {
            return speed == null || typeof speed === "boolean" ? cssFn.apply(this, arguments) : this.animate(genFx(name, true), speed, easing, callback)
        }
    });
    jQuery.each({slideDown: genFx("show"), slideUp: genFx("hide"), slideToggle: genFx("toggle"), fadeIn: {opacity: "show"}, fadeOut: {opacity: "hide"}, fadeToggle: {opacity: "toggle"}}, function (name, props) {
        jQuery.fn[name] = function (speed, easing, callback) {
            return this.animate(props, speed, easing, callback)
        }
    });
    jQuery.timers = [];
    jQuery.fx.tick = function () {
        var timer, i = 0, timers = jQuery.timers;
        fxNow = jQuery.now();
        for (; i < timers.length; i++) {
            timer = timers[i];
            if (!timer() && timers[i] === timer) {
                timers.splice(i--, 1)
            }
        }
        if (!timers.length) {
            jQuery.fx.stop()
        }
        fxNow = undefined
    };
    jQuery.fx.timer = function (timer) {
        jQuery.timers.push(timer);
        if (timer()) {
            jQuery.fx.start()
        } else {
            jQuery.timers.pop()
        }
    };
    jQuery.fx.interval = 13;
    jQuery.fx.start = function () {
        if (!timerId) {
            timerId = setInterval(jQuery.fx.tick, jQuery.fx.interval)
        }
    };
    jQuery.fx.stop = function () {
        clearInterval(timerId);
        timerId = null
    };
    jQuery.fx.speeds = {slow: 600, fast: 200, _default: 400};
    jQuery.fn.delay = function (time, type) {
        time = jQuery.fx ? jQuery.fx.speeds[time] || time : time;
        type = type || "fx";
        return this.queue(type, function (next, hooks) {
            var timeout = setTimeout(next, time);
            hooks.stop = function () {
                clearTimeout(timeout)
            }
        })
    };
    (function () {
        var input = document.createElement("input"), select = document.createElement("select"), opt = select.appendChild(document.createElement("option"));
        input.type = "checkbox";
        support.checkOn = input.value !== "";
        support.optSelected = opt.selected;
        select.disabled = true;
        support.optDisabled = !opt.disabled;
        input = document.createElement("input");
        input.value = "t";
        input.type = "radio";
        support.radioValue = input.value === "t"
    })();
    var nodeHook, boolHook, attrHandle = jQuery.expr.attrHandle;
    jQuery.fn.extend({attr: function (name, value) {
        return access(this, jQuery.attr, name, value, arguments.length > 1)
    }, removeAttr: function (name) {
        return this.each(function () {
            jQuery.removeAttr(this, name)
        })
    }});
    jQuery.extend({attr: function (elem, name, value) {
        var hooks, ret, nType = elem.nodeType;
        if (!elem || nType === 3 || nType === 8 || nType === 2) {
            return
        }
        if (typeof elem.getAttribute === strundefined) {
            return jQuery.prop(elem, name, value)
        }
        if (nType !== 1 || !jQuery.isXMLDoc(elem)) {
            name = name.toLowerCase();
            hooks = jQuery.attrHooks[name] || (jQuery.expr.match.bool.test(name) ? boolHook : nodeHook)
        }
        if (value !== undefined) {
            if (value === null) {
                jQuery.removeAttr(elem, name)
            } else {
                if (hooks && "set" in hooks && (ret = hooks.set(elem, value, name)) !== undefined) {
                    return ret
                } else {
                    elem.setAttribute(name, value + "");
                    return value
                }
            }
        } else {
            if (hooks && "get" in hooks && (ret = hooks.get(elem, name)) !== null) {
                return ret
            } else {
                ret = jQuery.find.attr(elem, name);
                return ret == null ? undefined : ret
            }
        }
    }, removeAttr: function (elem, value) {
        var name, propName, i = 0, attrNames = value && value.match(rnotwhite);
        if (attrNames && elem.nodeType === 1) {
            while ((name = attrNames[i++])) {
                propName = jQuery.propFix[name] || name;
                if (jQuery.expr.match.bool.test(name)) {
                    elem[propName] = false
                }
                elem.removeAttribute(name)
            }
        }
    }, attrHooks: {type: {set: function (elem, value) {
        if (!support.radioValue && value === "radio" && jQuery.nodeName(elem, "input")) {
            var val = elem.value;
            elem.setAttribute("type", value);
            if (val) {
                elem.value = val
            }
            return value
        }
    }}}});
    boolHook = {set: function (elem, value, name) {
        if (value === false) {
            jQuery.removeAttr(elem, name)
        } else {
            elem.setAttribute(name, name)
        }
        return name
    }};
    jQuery.each(jQuery.expr.match.bool.source.match(/\w+/g), function (i, name) {
        var getter = attrHandle[name] || jQuery.find.attr;
        attrHandle[name] = function (elem, name, isXML) {
            var ret, handle;
            if (!isXML) {
                handle = attrHandle[name];
                attrHandle[name] = ret;
                ret = getter(elem, name, isXML) != null ? name.toLowerCase() : null;
                attrHandle[name] = handle
            }
            return ret
        }
    });
    var rfocusable = /^(?:input|select|textarea|button)$/i;
    jQuery.fn.extend({prop: function (name, value) {
        return access(this, jQuery.prop, name, value, arguments.length > 1)
    }, removeProp: function (name) {
        return this.each(function () {
            delete this[jQuery.propFix[name] || name]
        })
    }});
    jQuery.extend({propFix: {"for": "htmlFor", "class": "className"}, prop: function (elem, name, value) {
        var ret, hooks, notxml, nType = elem.nodeType;
        if (!elem || nType === 3 || nType === 8 || nType === 2) {
            return
        }
        notxml = nType !== 1 || !jQuery.isXMLDoc(elem);
        if (notxml) {
            name = jQuery.propFix[name] || name;
            hooks = jQuery.propHooks[name]
        }
        if (value !== undefined) {
            return hooks && "set" in hooks && (ret = hooks.set(elem, value, name)) !== undefined ? ret : (elem[name] = value)
        } else {
            return hooks && "get" in hooks && (ret = hooks.get(elem, name)) !== null ? ret : elem[name]
        }
    }, propHooks: {tabIndex: {get: function (elem) {
        return elem.hasAttribute("tabindex") || rfocusable.test(elem.nodeName) || elem.href ? elem.tabIndex : -1
    }}}});
    if (!support.optSelected) {
        jQuery.propHooks.selected = {get: function (elem) {
            var parent = elem.parentNode;
            if (parent && parent.parentNode) {
                parent.parentNode.selectedIndex
            }
            return null
        }}
    }
    jQuery.each(["tabIndex", "readOnly", "maxLength", "cellSpacing", "cellPadding", "rowSpan", "colSpan", "useMap", "frameBorder", "contentEditable"], function () {
        jQuery.propFix[this.toLowerCase()] = this
    });
    var rclass = /[\t\r\n\f]/g;
    jQuery.fn.extend({addClass: function (value) {
        var classes, elem, cur, clazz, j, finalValue, proceed = typeof value === "string" && value, i = 0, len = this.length;
        if (jQuery.isFunction(value)) {
            return this.each(function (j) {
                jQuery(this).addClass(value.call(this, j, this.className))
            })
        }
        if (proceed) {
            classes = (value || "").match(rnotwhite) || [];
            for (; i < len; i++) {
                elem = this[i];
                cur = elem.nodeType === 1 && (elem.className ? (" " + elem.className + " ").replace(rclass, " ") : " ");
                if (cur) {
                    j = 0;
                    while ((clazz = classes[j++])) {
                        if (cur.indexOf(" " + clazz + " ") < 0) {
                            cur += clazz + " "
                        }
                    }
                    finalValue = jQuery.trim(cur);
                    if (elem.className !== finalValue) {
                        elem.className = finalValue
                    }
                }
            }
        }
        return this
    }, removeClass: function (value) {
        var classes, elem, cur, clazz, j, finalValue, proceed = arguments.length === 0 || typeof value === "string" && value, i = 0, len = this.length;
        if (jQuery.isFunction(value)) {
            return this.each(function (j) {
                jQuery(this).removeClass(value.call(this, j, this.className))
            })
        }
        if (proceed) {
            classes = (value || "").match(rnotwhite) || [];
            for (; i < len; i++) {
                elem = this[i];
                cur = elem.nodeType === 1 && (elem.className ? (" " + elem.className + " ").replace(rclass, " ") : "");
                if (cur) {
                    j = 0;
                    while ((clazz = classes[j++])) {
                        while (cur.indexOf(" " + clazz + " ") >= 0) {
                            cur = cur.replace(" " + clazz + " ", " ")
                        }
                    }
                    finalValue = value ? jQuery.trim(cur) : "";
                    if (elem.className !== finalValue) {
                        elem.className = finalValue
                    }
                }
            }
        }
        return this
    }, toggleClass: function (value, stateVal) {
        var type = typeof value;
        if (typeof stateVal === "boolean" && type === "string") {
            return stateVal ? this.addClass(value) : this.removeClass(value)
        }
        if (jQuery.isFunction(value)) {
            return this.each(function (i) {
                jQuery(this).toggleClass(value.call(this, i, this.className, stateVal), stateVal)
            })
        }
        return this.each(function () {
            if (type === "string") {
                var className, i = 0, self = jQuery(this), classNames = value.match(rnotwhite) || [];
                while ((className = classNames[i++])) {
                    if (self.hasClass(className)) {
                        self.removeClass(className)
                    } else {
                        self.addClass(className)
                    }
                }
            } else {
                if (type === strundefined || type === "boolean") {
                    if (this.className) {
                        data_priv.set(this, "__className__", this.className)
                    }
                    this.className = this.className || value === false ? "" : data_priv.get(this, "__className__") || ""
                }
            }
        })
    }, hasClass: function (selector) {
        var className = " " + selector + " ", i = 0, l = this.length;
        for (; i < l; i++) {
            if (this[i].nodeType === 1 && (" " + this[i].className + " ").replace(rclass, " ").indexOf(className) >= 0) {
                return true
            }
        }
        return false
    }});
    var rreturn = /\r/g;
    jQuery.fn.extend({val: function (value) {
        var hooks, ret, isFunction, elem = this[0];
        if (!arguments.length) {
            if (elem) {
                hooks = jQuery.valHooks[elem.type] || jQuery.valHooks[elem.nodeName.toLowerCase()];
                if (hooks && "get" in hooks && (ret = hooks.get(elem, "value")) !== undefined) {
                    return ret
                }
                ret = elem.value;
                return typeof ret === "string" ? ret.replace(rreturn, "") : ret == null ? "" : ret
            }
            return
        }
        isFunction = jQuery.isFunction(value);
        return this.each(function (i) {
            var val;
            if (this.nodeType !== 1) {
                return
            }
            if (isFunction) {
                val = value.call(this, i, jQuery(this).val())
            } else {
                val = value
            }
            if (val == null) {
                val = ""
            } else {
                if (typeof val === "number") {
                    val += ""
                } else {
                    if (jQuery.isArray(val)) {
                        val = jQuery.map(val, function (value) {
                            return value == null ? "" : value + ""
                        })
                    }
                }
            }
            hooks = jQuery.valHooks[this.type] || jQuery.valHooks[this.nodeName.toLowerCase()];
            if (!hooks || !("set" in hooks) || hooks.set(this, val, "value") === undefined) {
                this.value = val
            }
        })
    }});
    jQuery.extend({valHooks: {option: {get: function (elem) {
        var val = jQuery.find.attr(elem, "value");
        return val != null ? val : jQuery.trim(jQuery.text(elem))
    }}, select: {get: function (elem) {
        var value, option, options = elem.options, index = elem.selectedIndex, one = elem.type === "select-one" || index < 0, values = one ? null : [], max = one ? index + 1 : options.length, i = index < 0 ? max : one ? index : 0;
        for (; i < max; i++) {
            option = options[i];
            if ((option.selected || i === index) && (support.optDisabled ? !option.disabled : option.getAttribute("disabled") === null) && (!option.parentNode.disabled || !jQuery.nodeName(option.parentNode, "optgroup"))) {
                value = jQuery(option).val();
                if (one) {
                    return value
                }
                values.push(value)
            }
        }
        return values
    }, set: function (elem, value) {
        var optionSet, option, options = elem.options, values = jQuery.makeArray(value), i = options.length;
        while (i--) {
            option = options[i];
            if ((option.selected = jQuery.inArray(option.value, values) >= 0)) {
                optionSet = true
            }
        }
        if (!optionSet) {
            elem.selectedIndex = -1
        }
        return values
    }}}});
    jQuery.each(["radio", "checkbox"], function () {
        jQuery.valHooks[this] = {set: function (elem, value) {
            if (jQuery.isArray(value)) {
                return(elem.checked = jQuery.inArray(jQuery(elem).val(), value) >= 0)
            }
        }};
        if (!support.checkOn) {
            jQuery.valHooks[this].get = function (elem) {
                return elem.getAttribute("value") === null ? "on" : elem.value
            }
        }
    });
    jQuery.each(("blur focus focusin focusout load resize scroll unload click dblclick mousedown mouseup mousemove mouseover mouseout mouseenter mouseleave change select submit keydown keypress keyup error contextmenu").split(" "), function (i, name) {
        jQuery.fn[name] = function (data, fn) {
            return arguments.length > 0 ? this.on(name, null, data, fn) : this.trigger(name)
        }
    });
    jQuery.fn.extend({hover: function (fnOver, fnOut) {
        return this.mouseenter(fnOver).mouseleave(fnOut || fnOver)
    }, bind: function (types, data, fn) {
        return this.on(types, null, data, fn)
    }, unbind: function (types, fn) {
        return this.off(types, null, fn)
    }, delegate: function (selector, types, data, fn) {
        return this.on(types, selector, data, fn)
    }, undelegate: function (selector, types, fn) {
        return arguments.length === 1 ? this.off(selector, "**") : this.off(types, selector || "**", fn)
    }});
    var nonce = jQuery.now();
    var rquery = (/\?/);
    jQuery.parseJSON = function (data) {
        return JSON.parse(data + "")
    };
    jQuery.parseXML = function (data) {
        var xml, tmp;
        if (!data || typeof data !== "string") {
            return null
        }
        try {
            tmp = new DOMParser();
            xml = tmp.parseFromString(data, "text/xml")
        } catch (e) {
            xml = undefined
        }
        if (!xml || xml.getElementsByTagName("parsererror").length) {
            jQuery.error("Invalid XML: " + data)
        }
        return xml
    };
    var ajaxLocParts, ajaxLocation, rhash = /#.*$/, rts = /([?&])_=[^&]*/, rheaders = /^(.*?):[ \t]*([^\r\n]*)$/mg, rlocalProtocol = /^(?:about|app|app-storage|.+-extension|file|res|widget):$/, rnoContent = /^(?:GET|HEAD)$/, rprotocol = /^\/\//, rurl = /^([\w.+-]+:)(?:\/\/(?:[^\/?#]*@|)([^\/?#:]*)(?::(\d+)|)|)/, prefilters = {}, transports = {}, allTypes = "*/".concat("*");
    try {
        ajaxLocation = location.href
    } catch (e) {
        ajaxLocation = document.createElement("a");
        ajaxLocation.href = "";
        ajaxLocation = ajaxLocation.href
    }
    ajaxLocParts = rurl.exec(ajaxLocation.toLowerCase()) || [];
    function addToPrefiltersOrTransports(structure) {
        return function (dataTypeExpression, func) {
            if (typeof dataTypeExpression !== "string") {
                func = dataTypeExpression;
                dataTypeExpression = "*"
            }
            var dataType, i = 0, dataTypes = dataTypeExpression.toLowerCase().match(rnotwhite) || [];
            if (jQuery.isFunction(func)) {
                while ((dataType = dataTypes[i++])) {
                    if (dataType[0] === "+") {
                        dataType = dataType.slice(1) || "*";
                        (structure[dataType] = structure[dataType] || []).unshift(func)
                    } else {
                        (structure[dataType] = structure[dataType] || []).push(func)
                    }
                }
            }
        }
    }

    function inspectPrefiltersOrTransports(structure, options, originalOptions, jqXHR) {
        var inspected = {}, seekingTransport = (structure === transports);

        function inspect(dataType) {
            var selected;
            inspected[dataType] = true;
            jQuery.each(structure[dataType] || [], function (_, prefilterOrFactory) {
                var dataTypeOrTransport = prefilterOrFactory(options, originalOptions, jqXHR);
                if (typeof dataTypeOrTransport === "string" && !seekingTransport && !inspected[dataTypeOrTransport]) {
                    options.dataTypes.unshift(dataTypeOrTransport);
                    inspect(dataTypeOrTransport);
                    return false
                } else {
                    if (seekingTransport) {
                        return !(selected = dataTypeOrTransport)
                    }
                }
            });
            return selected
        }

        return inspect(options.dataTypes[0]) || !inspected["*"] && inspect("*")
    }

    function ajaxExtend(target, src) {
        var key, deep, flatOptions = jQuery.ajaxSettings.flatOptions || {};
        for (key in src) {
            if (src[key] !== undefined) {
                (flatOptions[key] ? target : (deep || (deep = {})))[key] = src[key]
            }
        }
        if (deep) {
            jQuery.extend(true, target, deep)
        }
        return target
    }

    function ajaxHandleResponses(s, jqXHR, responses) {
        var ct, type, finalDataType, firstDataType, contents = s.contents, dataTypes = s.dataTypes;
        while (dataTypes[0] === "*") {
            dataTypes.shift();
            if (ct === undefined) {
                ct = s.mimeType || jqXHR.getResponseHeader("Content-Type")
            }
        }
        if (ct) {
            for (type in contents) {
                if (contents[type] && contents[type].test(ct)) {
                    dataTypes.unshift(type);
                    break
                }
            }
        }
        if (dataTypes[0] in responses) {
            finalDataType = dataTypes[0]
        } else {
            for (type in responses) {
                if (!dataTypes[0] || s.converters[type + " " + dataTypes[0]]) {
                    finalDataType = type;
                    break
                }
                if (!firstDataType) {
                    firstDataType = type
                }
            }
            finalDataType = finalDataType || firstDataType
        }
        if (finalDataType) {
            if (finalDataType !== dataTypes[0]) {
                dataTypes.unshift(finalDataType)
            }
            return responses[finalDataType]
        }
    }

    function ajaxConvert(s, response, jqXHR, isSuccess) {
        var conv2, current, conv, tmp, prev, converters = {}, dataTypes = s.dataTypes.slice();
        if (dataTypes[1]) {
            for (conv in s.converters) {
                converters[conv.toLowerCase()] = s.converters[conv]
            }
        }
        current = dataTypes.shift();
        while (current) {
            if (s.responseFields[current]) {
                jqXHR[s.responseFields[current]] = response
            }
            if (!prev && isSuccess && s.dataFilter) {
                response = s.dataFilter(response, s.dataType)
            }
            prev = current;
            current = dataTypes.shift();
            if (current) {
                if (current === "*") {
                    current = prev
                } else {
                    if (prev !== "*" && prev !== current) {
                        conv = converters[prev + " " + current] || converters["* " + current];
                        if (!conv) {
                            for (conv2 in converters) {
                                tmp = conv2.split(" ");
                                if (tmp[1] === current) {
                                    conv = converters[prev + " " + tmp[0]] || converters["* " + tmp[0]];
                                    if (conv) {
                                        if (conv === true) {
                                            conv = converters[conv2]
                                        } else {
                                            if (converters[conv2] !== true) {
                                                current = tmp[0];
                                                dataTypes.unshift(tmp[1])
                                            }
                                        }
                                        break
                                    }
                                }
                            }
                        }
                        if (conv !== true) {
                            if (conv && s["throws"]) {
                                response = conv(response)
                            } else {
                                try {
                                    response = conv(response)
                                } catch (e) {
                                    return{state: "parsererror", error: conv ? e : "No conversion from " + prev + " to " + current}
                                }
                            }
                        }
                    }
                }
            }
        }
        return{state: "success", data: response}
    }

    jQuery.extend({active: 0, lastModified: {}, etag: {}, ajaxSettings: {url: ajaxLocation, type: "GET", isLocal: rlocalProtocol.test(ajaxLocParts[1]), global: true, processData: true, async: true, contentType: "application/x-www-form-urlencoded; charset=UTF-8", accepts: {"*": allTypes, text: "text/plain", html: "text/html", xml: "application/xml, text/xml", json: "application/json, text/javascript"}, contents: {xml: /xml/, html: /html/, json: /json/}, responseFields: {xml: "responseXML", text: "responseText", json: "responseJSON"}, converters: {"* text": String, "text html": true, "text json": jQuery.parseJSON, "text xml": jQuery.parseXML}, flatOptions: {url: true, context: true}}, ajaxSetup: function (target, settings) {
        return settings ? ajaxExtend(ajaxExtend(target, jQuery.ajaxSettings), settings) : ajaxExtend(jQuery.ajaxSettings, target)
    }, ajaxPrefilter: addToPrefiltersOrTransports(prefilters), ajaxTransport: addToPrefiltersOrTransports(transports), ajax: function (url, options) {
        if (typeof url === "object") {
            options = url;
            url = undefined
        }
        options = options || {};
        var transport, cacheURL, responseHeadersString, responseHeaders, timeoutTimer, parts, fireGlobals, i, s = jQuery.ajaxSetup({}, options), callbackContext = s.context || s, globalEventContext = s.context && (callbackContext.nodeType || callbackContext.jquery) ? jQuery(callbackContext) : jQuery.event, deferred = jQuery.Deferred(), completeDeferred = jQuery.Callbacks("once memory"), statusCode = s.statusCode || {}, requestHeaders = {}, requestHeadersNames = {}, state = 0, strAbort = "canceled", jqXHR = {readyState: 0, getResponseHeader: function (key) {
            var match;
            if (state === 2) {
                if (!responseHeaders) {
                    responseHeaders = {};
                    while ((match = rheaders.exec(responseHeadersString))) {
                        responseHeaders[match[1].toLowerCase()] = match[2]
                    }
                }
                match = responseHeaders[key.toLowerCase()]
            }
            return match == null ? null : match
        }, getAllResponseHeaders: function () {
            return state === 2 ? responseHeadersString : null
        }, setRequestHeader: function (name, value) {
            var lname = name.toLowerCase();
            if (!state) {
                name = requestHeadersNames[lname] = requestHeadersNames[lname] || name;
                requestHeaders[name] = value
            }
            return this
        }, overrideMimeType: function (type) {
            if (!state) {
                s.mimeType = type
            }
            return this
        }, statusCode: function (map) {
            var code;
            if (map) {
                if (state < 2) {
                    for (code in map) {
                        statusCode[code] = [statusCode[code], map[code]]
                    }
                } else {
                    jqXHR.always(map[jqXHR.status])
                }
            }
            return this
        }, abort: function (statusText) {
            var finalText = statusText || strAbort;
            if (transport) {
                transport.abort(finalText)
            }
            done(0, finalText);
            return this
        }};
        deferred.promise(jqXHR).complete = completeDeferred.add;
        jqXHR.success = jqXHR.done;
        jqXHR.error = jqXHR.fail;
        s.url = ((url || s.url || ajaxLocation) + "").replace(rhash, "").replace(rprotocol, ajaxLocParts[1] + "//");
        s.type = options.method || options.type || s.method || s.type;
        s.dataTypes = jQuery.trim(s.dataType || "*").toLowerCase().match(rnotwhite) || [""];
        if (s.crossDomain == null) {
            parts = rurl.exec(s.url.toLowerCase());
            s.crossDomain = !!(parts && (parts[1] !== ajaxLocParts[1] || parts[2] !== ajaxLocParts[2] || (parts[3] || (parts[1] === "http:" ? "80" : "443")) !== (ajaxLocParts[3] || (ajaxLocParts[1] === "http:" ? "80" : "443"))))
        }
        if (s.data && s.processData && typeof s.data !== "string") {
            s.data = jQuery.param(s.data, s.traditional)
        }
        inspectPrefiltersOrTransports(prefilters, s, options, jqXHR);
        if (state === 2) {
            return jqXHR
        }
        fireGlobals = s.global;
        if (fireGlobals && jQuery.active++ === 0) {
            jQuery.event.trigger("ajaxStart")
        }
        s.type = s.type.toUpperCase();
        s.hasContent = !rnoContent.test(s.type);
        cacheURL = s.url;
        if (!s.hasContent) {
            if (s.data) {
                cacheURL = (s.url += (rquery.test(cacheURL) ? "&" : "?") + s.data);
                delete s.data
            }
            if (s.cache === false) {
                s.url = rts.test(cacheURL) ? cacheURL.replace(rts, "$1_=" + nonce++) : cacheURL + (rquery.test(cacheURL) ? "&" : "?") + "_=" + nonce++
            }
        }
        if (s.ifModified) {
            if (jQuery.lastModified[cacheURL]) {
                jqXHR.setRequestHeader("If-Modified-Since", jQuery.lastModified[cacheURL])
            }
            if (jQuery.etag[cacheURL]) {
                jqXHR.setRequestHeader("If-None-Match", jQuery.etag[cacheURL])
            }
        }
        if (s.data && s.hasContent && s.contentType !== false || options.contentType) {
            jqXHR.setRequestHeader("Content-Type", s.contentType)
        }
        jqXHR.setRequestHeader("Accept", s.dataTypes[0] && s.accepts[s.dataTypes[0]] ? s.accepts[s.dataTypes[0]] + (s.dataTypes[0] !== "*" ? ", " + allTypes + "; q=0.01" : "") : s.accepts["*"]);
        for (i in s.headers) {
            jqXHR.setRequestHeader(i, s.headers[i])
        }
        if (s.beforeSend && (s.beforeSend.call(callbackContext, jqXHR, s) === false || state === 2)) {
            return jqXHR.abort()
        }
        strAbort = "abort";
        for (i in {success: 1, error: 1, complete: 1}) {
            jqXHR[i](s[i])
        }
        transport = inspectPrefiltersOrTransports(transports, s, options, jqXHR);
        if (!transport) {
            done(-1, "No Transport")
        } else {
            jqXHR.readyState = 1;
            if (fireGlobals) {
                globalEventContext.trigger("ajaxSend", [jqXHR, s])
            }
            if (s.async && s.timeout > 0) {
                timeoutTimer = setTimeout(function () {
                    jqXHR.abort("timeout")
                }, s.timeout)
            }
            try {
                state = 1;
                transport.send(requestHeaders, done)
            } catch (e) {
                if (state < 2) {
                    done(-1, e)
                } else {
                    throw e
                }
            }
        }
        function done(status, nativeStatusText, responses, headers) {
            var isSuccess, success, error, response, modified, statusText = nativeStatusText;
            if (state === 2) {
                return
            }
            state = 2;
            if (timeoutTimer) {
                clearTimeout(timeoutTimer)
            }
            transport = undefined;
            responseHeadersString = headers || "";
            jqXHR.readyState = status > 0 ? 4 : 0;
            isSuccess = status >= 200 && status < 300 || status === 304;
            if (responses) {
                response = ajaxHandleResponses(s, jqXHR, responses)
            }
            response = ajaxConvert(s, response, jqXHR, isSuccess);
            if (isSuccess) {
                if (s.ifModified) {
                    modified = jqXHR.getResponseHeader("Last-Modified");
                    if (modified) {
                        jQuery.lastModified[cacheURL] = modified
                    }
                    modified = jqXHR.getResponseHeader("etag");
                    if (modified) {
                        jQuery.etag[cacheURL] = modified
                    }
                }
                if (status === 204 || s.type === "HEAD") {
                    statusText = "nocontent"
                } else {
                    if (status === 304) {
                        statusText = "notmodified"
                    } else {
                        statusText = response.state;
                        success = response.data;
                        error = response.error;
                        isSuccess = !error
                    }
                }
            } else {
                error = statusText;
                if (status || !statusText) {
                    statusText = "error";
                    if (status < 0) {
                        status = 0
                    }
                }
            }
            jqXHR.status = status;
            jqXHR.statusText = (nativeStatusText || statusText) + "";
            if (isSuccess) {
                deferred.resolveWith(callbackContext, [success, statusText, jqXHR])
            } else {
                deferred.rejectWith(callbackContext, [jqXHR, statusText, error])
            }
            jqXHR.statusCode(statusCode);
            statusCode = undefined;
            if (fireGlobals) {
                globalEventContext.trigger(isSuccess ? "ajaxSuccess" : "ajaxError", [jqXHR, s, isSuccess ? success : error])
            }
            completeDeferred.fireWith(callbackContext, [jqXHR, statusText]);
            if (fireGlobals) {
                globalEventContext.trigger("ajaxComplete", [jqXHR, s]);
                if (!(--jQuery.active)) {
                    jQuery.event.trigger("ajaxStop")
                }
            }
        }

        return jqXHR
    }, getJSON: function (url, data, callback) {
        return jQuery.get(url, data, callback, "json")
    }, getScript: function (url, callback) {
        return jQuery.get(url, undefined, callback, "script")
    }});
    jQuery.each(["get", "post"], function (i, method) {
        jQuery[method] = function (url, data, callback, type) {
            if (jQuery.isFunction(data)) {
                type = type || callback;
                callback = data;
                data = undefined
            }
            return jQuery.ajax({url: url, type: method, dataType: type, data: data, success: callback})
        }
    });
    jQuery.each(["ajaxStart", "ajaxStop", "ajaxComplete", "ajaxError", "ajaxSuccess", "ajaxSend"], function (i, type) {
        jQuery.fn[type] = function (fn) {
            return this.on(type, fn)
        }
    });
    jQuery._evalUrl = function (url) {
        return jQuery.ajax({url: url, type: "GET", dataType: "script", async: false, global: false, "throws": true})
    };
    jQuery.fn.extend({wrapAll: function (html) {
        var wrap;
        if (jQuery.isFunction(html)) {
            return this.each(function (i) {
                jQuery(this).wrapAll(html.call(this, i))
            })
        }
        if (this[0]) {
            wrap = jQuery(html, this[0].ownerDocument).eq(0).clone(true);
            if (this[0].parentNode) {
                wrap.insertBefore(this[0])
            }
            wrap.map(function () {
                var elem = this;
                while (elem.firstElementChild) {
                    elem = elem.firstElementChild
                }
                return elem
            }).append(this)
        }
        return this
    }, wrapInner: function (html) {
        if (jQuery.isFunction(html)) {
            return this.each(function (i) {
                jQuery(this).wrapInner(html.call(this, i))
            })
        }
        return this.each(function () {
            var self = jQuery(this), contents = self.contents();
            if (contents.length) {
                contents.wrapAll(html)
            } else {
                self.append(html)
            }
        })
    }, wrap: function (html) {
        var isFunction = jQuery.isFunction(html);
        return this.each(function (i) {
            jQuery(this).wrapAll(isFunction ? html.call(this, i) : html)
        })
    }, unwrap: function () {
        return this.parent().each(function () {
            if (!jQuery.nodeName(this, "body")) {
                jQuery(this).replaceWith(this.childNodes)
            }
        }).end()
    }});
    jQuery.expr.filters.hidden = function (elem) {
        return elem.offsetWidth <= 0 && elem.offsetHeight <= 0
    };
    jQuery.expr.filters.visible = function (elem) {
        return !jQuery.expr.filters.hidden(elem)
    };
    var r20 = /%20/g, rbracket = /\[\]$/, rCRLF = /\r?\n/g, rsubmitterTypes = /^(?:submit|button|image|reset|file)$/i, rsubmittable = /^(?:input|select|textarea|keygen)/i;

    function buildParams(prefix, obj, traditional, add) {
        var name;
        if (jQuery.isArray(obj)) {
            jQuery.each(obj, function (i, v) {
                if (traditional || rbracket.test(prefix)) {
                    add(prefix, v)
                } else {
                    buildParams(prefix + "[" + (typeof v === "object" ? i : "") + "]", v, traditional, add)
                }
            })
        } else {
            if (!traditional && jQuery.type(obj) === "object") {
                for (name in obj) {
                    buildParams(prefix + "[" + name + "]", obj[name], traditional, add)
                }
            } else {
                add(prefix, obj)
            }
        }
    }

    jQuery.param = function (a, traditional) {
        var prefix, s = [], add = function (key, value) {
            value = jQuery.isFunction(value) ? value() : (value == null ? "" : value);
            s[s.length] = encodeURIComponent(key) + "=" + encodeURIComponent(value)
        };
        if (traditional === undefined) {
            traditional = jQuery.ajaxSettings && jQuery.ajaxSettings.traditional
        }
        if (jQuery.isArray(a) || (a.jquery && !jQuery.isPlainObject(a))) {
            jQuery.each(a, function () {
                add(this.name, this.value)
            })
        } else {
            for (prefix in a) {
                buildParams(prefix, a[prefix], traditional, add)
            }
        }
        return s.join("&").replace(r20, "+")
    };
    jQuery.fn.extend({serialize: function () {
        return jQuery.param(this.serializeArray())
    }, serializeArray: function () {
        return this.map(function () {
            var elements = jQuery.prop(this, "elements");
            return elements ? jQuery.makeArray(elements) : this
        }).filter(function () {
            var type = this.type;
            return this.name && !jQuery(this).is(":disabled") && rsubmittable.test(this.nodeName) && !rsubmitterTypes.test(type) && (this.checked || !rcheckableType.test(type))
        }).map(function (i, elem) {
            var val = jQuery(this).val();
            return val == null ? null : jQuery.isArray(val) ? jQuery.map(val, function (val) {
                return{name: elem.name, value: val.replace(rCRLF, "\r\n")}
            }) : {name: elem.name, value: val.replace(rCRLF, "\r\n")}
        }).get()
    }});
    jQuery.ajaxSettings.xhr = function () {
        try {
            return new XMLHttpRequest()
        } catch (e) {
        }
    };
    var xhrId = 0, xhrCallbacks = {}, xhrSuccessStatus = {0: 200, 1223: 204}, xhrSupported = jQuery.ajaxSettings.xhr();
    if (window.ActiveXObject) {
        jQuery(window).on("unload", function () {
            for (var key in xhrCallbacks) {
                xhrCallbacks[key]()
            }
        })
    }
    support.cors = !!xhrSupported && ("withCredentials" in xhrSupported);
    support.ajax = xhrSupported = !!xhrSupported;
    jQuery.ajaxTransport(function (options) {
        var callback;
        if (support.cors || xhrSupported && !options.crossDomain) {
            return{send: function (headers, complete) {
                var i, xhr = options.xhr(), id = ++xhrId;
                xhr.open(options.type, options.url, options.async, options.username, options.password);
                if (options.xhrFields) {
                    for (i in options.xhrFields) {
                        xhr[i] = options.xhrFields[i]
                    }
                }
                if (options.mimeType && xhr.overrideMimeType) {
                    xhr.overrideMimeType(options.mimeType)
                }
                if (!options.crossDomain && !headers["X-Requested-With"]) {
                    headers["X-Requested-With"] = "XMLHttpRequest"
                }
                for (i in headers) {
                    xhr.setRequestHeader(i, headers[i])
                }
                callback = function (type) {
                    return function () {
                        if (callback) {
                            delete xhrCallbacks[id];
                            callback = xhr.onload = xhr.onerror = null;
                            if (type === "abort") {
                                xhr.abort()
                            } else {
                                if (type === "error") {
                                    complete(xhr.status, xhr.statusText)
                                } else {
                                    complete(xhrSuccessStatus[xhr.status] || xhr.status, xhr.statusText, typeof xhr.responseText === "string" ? {text: xhr.responseText} : undefined, xhr.getAllResponseHeaders())
                                }
                            }
                        }
                    }
                };
                xhr.onload = callback();
                xhr.onerror = callback("error");
                callback = xhrCallbacks[id] = callback("abort");
                try {
                    xhr.send(options.hasContent && options.data || null)
                } catch (e) {
                    if (callback) {
                        throw e
                    }
                }
            }, abort: function () {
                if (callback) {
                    callback()
                }
            }}
        }
    });
    jQuery.ajaxSetup({accepts: {script: "text/javascript, application/javascript, application/ecmascript, application/x-ecmascript"}, contents: {script: /(?:java|ecma)script/}, converters: {"text script": function (text) {
        jQuery.globalEval(text);
        return text
    }}});
    jQuery.ajaxPrefilter("script", function (s) {
        if (s.cache === undefined) {
            s.cache = false
        }
        if (s.crossDomain) {
            s.type = "GET"
        }
    });
    jQuery.ajaxTransport("script", function (s) {
        if (s.crossDomain) {
            var script, callback;
            return{send: function (_, complete) {
                script = jQuery("<script>").prop({async: true, charset: s.scriptCharset, src: s.url}).on("load error", callback = function (evt) {
                    script.remove();
                    callback = null;
                    if (evt) {
                        complete(evt.type === "error" ? 404 : 200, evt.type)
                    }
                });
                document.head.appendChild(script[0])
            }, abort: function () {
                if (callback) {
                    callback()
                }
            }}
        }
    });
    var oldCallbacks = [], rjsonp = /(=)\?(?=&|$)|\?\?/;
    jQuery.ajaxSetup({jsonp: "callback", jsonpCallback: function () {
        var callback = oldCallbacks.pop() || (jQuery.expando + "_" + (nonce++));
        this[callback] = true;
        return callback
    }});
    jQuery.ajaxPrefilter("json jsonp", function (s, originalSettings, jqXHR) {
        var callbackName, overwritten, responseContainer, jsonProp = s.jsonp !== false && (rjsonp.test(s.url) ? "url" : typeof s.data === "string" && !(s.contentType || "").indexOf("application/x-www-form-urlencoded") && rjsonp.test(s.data) && "data");
        if (jsonProp || s.dataTypes[0] === "jsonp") {
            callbackName = s.jsonpCallback = jQuery.isFunction(s.jsonpCallback) ? s.jsonpCallback() : s.jsonpCallback;
            if (jsonProp) {
                s[jsonProp] = s[jsonProp].replace(rjsonp, "$1" + callbackName)
            } else {
                if (s.jsonp !== false) {
                    s.url += (rquery.test(s.url) ? "&" : "?") + s.jsonp + "=" + callbackName
                }
            }
            s.converters["script json"] = function () {
                if (!responseContainer) {
                    jQuery.error(callbackName + " was not called")
                }
                return responseContainer[0]
            };
            s.dataTypes[0] = "json";
            overwritten = window[callbackName];
            window[callbackName] = function () {
                responseContainer = arguments
            };
            jqXHR.always(function () {
                window[callbackName] = overwritten;
                if (s[callbackName]) {
                    s.jsonpCallback = originalSettings.jsonpCallback;
                    oldCallbacks.push(callbackName)
                }
                if (responseContainer && jQuery.isFunction(overwritten)) {
                    overwritten(responseContainer[0])
                }
                responseContainer = overwritten = undefined
            });
            return"script"
        }
    });
    jQuery.parseHTML = function (data, context, keepScripts) {
        if (!data || typeof data !== "string") {
            return null
        }
        if (typeof context === "boolean") {
            keepScripts = context;
            context = false
        }
        context = context || document;
        var parsed = rsingleTag.exec(data), scripts = !keepScripts && [];
        if (parsed) {
            return[context.createElement(parsed[1])]
        }
        parsed = jQuery.buildFragment([data], context, scripts);
        if (scripts && scripts.length) {
            jQuery(scripts).remove()
        }
        return jQuery.merge([], parsed.childNodes)
    };
    var _load = jQuery.fn.load;
    jQuery.fn.load = function (url, params, callback) {
        if (typeof url !== "string" && _load) {
            return _load.apply(this, arguments)
        }
        var selector, type, response, self = this, off = url.indexOf(" ");
        if (off >= 0) {
            selector = jQuery.trim(url.slice(off));
            url = url.slice(0, off)
        }
        if (jQuery.isFunction(params)) {
            callback = params;
            params = undefined
        } else {
            if (params && typeof params === "object") {
                type = "POST"
            }
        }
        if (self.length > 0) {
            jQuery.ajax({url: url, type: type, dataType: "html", data: params}).done(function (responseText) {
                response = arguments;
                self.html(selector ? jQuery("<div>").append(jQuery.parseHTML(responseText)).find(selector) : responseText)
            }).complete(callback && function (jqXHR, status) {
                self.each(callback, response || [jqXHR.responseText, status, jqXHR])
            })
        }
        return this
    };
    jQuery.expr.filters.animated = function (elem) {
        return jQuery.grep(jQuery.timers,function (fn) {
            return elem === fn.elem
        }).length
    };
    var docElem = window.document.documentElement;

    function getWindow(elem) {
        return jQuery.isWindow(elem) ? elem : elem.nodeType === 9 && elem.defaultView
    }

    jQuery.offset = {setOffset: function (elem, options, i) {
        var curPosition, curLeft, curCSSTop, curTop, curOffset, curCSSLeft, calculatePosition, position = jQuery.css(elem, "position"), curElem = jQuery(elem), props = {};
        if (position === "static") {
            elem.style.position = "relative"
        }
        curOffset = curElem.offset();
        curCSSTop = jQuery.css(elem, "top");
        curCSSLeft = jQuery.css(elem, "left");
        calculatePosition = (position === "absolute" || position === "fixed") && (curCSSTop + curCSSLeft).indexOf("auto") > -1;
        if (calculatePosition) {
            curPosition = curElem.position();
            curTop = curPosition.top;
            curLeft = curPosition.left
        } else {
            curTop = parseFloat(curCSSTop) || 0;
            curLeft = parseFloat(curCSSLeft) || 0
        }
        if (jQuery.isFunction(options)) {
            options = options.call(elem, i, curOffset)
        }
        if (options.top != null) {
            props.top = (options.top - curOffset.top) + curTop
        }
        if (options.left != null) {
            props.left = (options.left - curOffset.left) + curLeft
        }
        if ("using" in options) {
            options.using.call(elem, props)
        } else {
            curElem.css(props)
        }
    }};
    jQuery.fn.extend({offset: function (options) {
        if (arguments.length) {
            return options === undefined ? this : this.each(function (i) {
                jQuery.offset.setOffset(this, options, i)
            })
        }
        var docElem, win, elem = this[0], box = {top: 0, left: 0}, doc = elem && elem.ownerDocument;
        if (!doc) {
            return
        }
        docElem = doc.documentElement;
        if (!jQuery.contains(docElem, elem)) {
            return box
        }
        if (typeof elem.getBoundingClientRect !== strundefined) {
            box = elem.getBoundingClientRect()
        }
        win = getWindow(doc);
        return{top: box.top + win.pageYOffset - docElem.clientTop, left: box.left + win.pageXOffset - docElem.clientLeft}
    }, position: function () {
        if (!this[0]) {
            return
        }
        var offsetParent, offset, elem = this[0], parentOffset = {top: 0, left: 0};
        if (jQuery.css(elem, "position") === "fixed") {
            offset = elem.getBoundingClientRect()
        } else {
            offsetParent = this.offsetParent();
            offset = this.offset();
            if (!jQuery.nodeName(offsetParent[0], "html")) {
                parentOffset = offsetParent.offset()
            }
            parentOffset.top += jQuery.css(offsetParent[0], "borderTopWidth", true);
            parentOffset.left += jQuery.css(offsetParent[0], "borderLeftWidth", true)
        }
        return{top: offset.top - parentOffset.top - jQuery.css(elem, "marginTop", true), left: offset.left - parentOffset.left - jQuery.css(elem, "marginLeft", true)}
    }, offsetParent: function () {
        return this.map(function () {
            var offsetParent = this.offsetParent || docElem;
            while (offsetParent && (!jQuery.nodeName(offsetParent, "html") && jQuery.css(offsetParent, "position") === "static")) {
                offsetParent = offsetParent.offsetParent
            }
            return offsetParent || docElem
        })
    }});
    jQuery.each({scrollLeft: "pageXOffset", scrollTop: "pageYOffset"}, function (method, prop) {
        var top = "pageYOffset" === prop;
        jQuery.fn[method] = function (val) {
            return access(this, function (elem, method, val) {
                var win = getWindow(elem);
                if (val === undefined) {
                    return win ? win[prop] : elem[method]
                }
                if (win) {
                    win.scrollTo(!top ? val : window.pageXOffset, top ? val : window.pageYOffset)
                } else {
                    elem[method] = val
                }
            }, method, val, arguments.length, null)
        }
    });
    jQuery.each(["top", "left"], function (i, prop) {
        jQuery.cssHooks[prop] = addGetHookIf(support.pixelPosition, function (elem, computed) {
            if (computed) {
                computed = curCSS(elem, prop);
                return rnumnonpx.test(computed) ? jQuery(elem).position()[prop] + "px" : computed
            }
        })
    });
    jQuery.each({Height: "height", Width: "width"}, function (name, type) {
        jQuery.each({padding: "inner" + name, content: type, "": "outer" + name}, function (defaultExtra, funcName) {
            jQuery.fn[funcName] = function (margin, value) {
                var chainable = arguments.length && (defaultExtra || typeof margin !== "boolean"), extra = defaultExtra || (margin === true || value === true ? "margin" : "border");
                return access(this, function (elem, type, value) {
                    var doc;
                    if (jQuery.isWindow(elem)) {
                        return elem.document.documentElement["client" + name]
                    }
                    if (elem.nodeType === 9) {
                        doc = elem.documentElement;
                        return Math.max(elem.body["scroll" + name], doc["scroll" + name], elem.body["offset" + name], doc["offset" + name], doc["client" + name])
                    }
                    return value === undefined ? jQuery.css(elem, type, extra) : jQuery.style(elem, type, value, extra)
                }, type, chainable ? margin : undefined, chainable, null)
            }
        })
    });
    jQuery.fn.size = function () {
        return this.length
    };
    jQuery.fn.andSelf = jQuery.fn.addBack;
    if (typeof define === "function" && define.amd) {
        define("jquery", [], function () {
            return jQuery
        })
    }
    var _jQuery = window.jQuery, _$ = window.$;
    jQuery.noConflict = function (deep) {
        if (window.$ === jQuery) {
            window.$ = _$
        }
        if (deep && window.jQuery === jQuery) {
            window.jQuery = _jQuery
        }
        return jQuery
    };
    if (typeof noGlobal === strundefined) {
        window.jQuery = window.$ = jQuery
    }
    return jQuery
}));
/*!
 * Bootstrap v3.2.0 (http://getbootstrap.com)
 * Copyright 2011-2014 Twitter, Inc.
 * Licensed under MIT (https://github.com/twbs/bootstrap/blob/master/LICENSE)
 */
;
if (typeof jQuery === "undefined") {
    throw new Error("Bootstrap's JavaScript requires jQuery")
}
+function (b) {
    function a() {
        var e = document.createElement("bootstrap");
        var d = {WebkitTransition: "webkitTransitionEnd", MozTransition: "transitionend", OTransition: "oTransitionEnd otransitionend", transition: "transitionend"};
        for (var c in d) {
            if (e.style[c] !== undefined) {
                return{end: d[c]}
            }
        }
        return false
    }

    b.fn.emulateTransitionEnd = function (e) {
        var d = false;
        var c = this;
        b(this).one("bsTransitionEnd", function () {
            d = true
        });
        var f = function () {
            if (!d) {
                b(c).trigger(b.support.transition.end)
            }
        };
        setTimeout(f, e);
        return this
    };
    b(function () {
        b.support.transition = a();
        if (!b.support.transition) {
            return
        }
        b.event.special.bsTransitionEnd = {bindType: b.support.transition.end, delegateType: b.support.transition.end, handle: function (c) {
            if (b(c.target).is(this)) {
                return c.handleObj.handler.apply(this, arguments)
            }
        }}
    })
}(jQuery);
+function (e) {
    var d = '[data-dismiss="alert"]';
    var b = function (f) {
        e(f).on("click", d, this.close)
    };
    b.VERSION = "3.2.0";
    b.prototype.close = function (j) {
        var i = e(this);
        var g = i.attr("data-target");
        if (!g) {
            g = i.attr("href");
            g = g && g.replace(/.*(?=#[^\s]*$)/, "")
        }
        var h = e(g);
        if (j) {
            j.preventDefault()
        }
        if (!h.length) {
            h = i.hasClass("alert") ? i : i.parent()
        }
        h.trigger(j = e.Event("close.bs.alert"));
        if (j.isDefaultPrevented()) {
            return
        }
        h.removeClass("in");
        function f() {
            h.detach().trigger("closed.bs.alert").remove()
        }

        e.support.transition && h.hasClass("fade") ? h.one("bsTransitionEnd", f).emulateTransitionEnd(150) : f()
    };
    function c(f) {
        return this.each(function () {
            var h = e(this);
            var g = h.data("bs.alert");
            if (!g) {
                h.data("bs.alert", (g = new b(this)))
            }
            if (typeof f == "string") {
                g[f].call(h)
            }
        })
    }

    var a = e.fn.alert;
    e.fn.alert = c;
    e.fn.alert.Constructor = b;
    e.fn.alert.noConflict = function () {
        e.fn.alert = a;
        return this
    };
    e(document).on("click.bs.alert.data-api", d, b.prototype.close)
}(jQuery);
+function (d) {
    var b = function (f, e) {
        this.$element = d(f);
        this.options = d.extend({}, b.DEFAULTS, e);
        this.isLoading = false
    };
    b.VERSION = "3.2.0";
    b.DEFAULTS = {loadingText: "loading..."};
    b.prototype.setState = function (g) {
        var i = "disabled";
        var e = this.$element;
        var h = e.is("input") ? "val" : "html";
        var f = e.data();
        g = g + "Text";
        if (f.resetText == null) {
            e.data("resetText", e[h]())
        }
        e[h](f[g] == null ? this.options[g] : f[g]);
        setTimeout(d.proxy(function () {
            if (g == "loadingText") {
                this.isLoading = true;
                e.addClass(i).attr(i, i)
            } else {
                if (this.isLoading) {
                    this.isLoading = false;
                    e.removeClass(i).removeAttr(i)
                }
            }
        }, this), 0)
    };
    b.prototype.toggle = function () {
        var f = true;
        var e = this.$element.closest('[data-toggle="buttons"]');
        if (e.length) {
            var g = this.$element.find("input");
            if (g.prop("type") == "radio") {
                if (g.prop("checked") && this.$element.hasClass("active")) {
                    f = false
                } else {
                    e.find(".active").removeClass("active")
                }
            }
            if (f) {
                g.prop("checked", !this.$element.hasClass("active")).trigger("change")
            }
        }
        if (f) {
            this.$element.toggleClass("active")
        }
    };
    function c(e) {
        return this.each(function () {
            var h = d(this);
            var g = h.data("bs.button");
            var f = typeof e == "object" && e;
            if (!g) {
                h.data("bs.button", (g = new b(this, f)))
            }
            if (e == "toggle") {
                g.toggle()
            } else {
                if (e) {
                    g.setState(e)
                }
            }
        })
    }

    var a = d.fn.button;
    d.fn.button = c;
    d.fn.button.Constructor = b;
    d.fn.button.noConflict = function () {
        d.fn.button = a;
        return this
    };
    d(document).on("click.bs.button.data-api", '[data-toggle^="button"]', function (g) {
        var f = d(g.target);
        if (!f.hasClass("btn")) {
            f = f.closest(".btn")
        }
        c.call(f, "toggle");
        g.preventDefault()
    })
}(jQuery);
+function (c) {
    var d = function (f, e) {
        this.$element = c(f).on("keydown.bs.carousel", c.proxy(this.keydown, this));
        this.$indicators = this.$element.find(".carousel-indicators");
        this.options = e;
        this.paused = this.sliding = this.interval = this.$active = this.$items = null;
        this.options.pause == "hover" && this.$element.on("mouseenter.bs.carousel", c.proxy(this.pause, this)).on("mouseleave.bs.carousel", c.proxy(this.cycle, this))
    };
    d.VERSION = "3.2.0";
    d.DEFAULTS = {interval: 5000, pause: "hover", wrap: true};
    d.prototype.keydown = function (f) {
        switch (f.which) {
            case 37:
                this.prev();
                break;
            case 39:
                this.next();
                break;
            default:
                return
        }
        f.preventDefault()
    };
    d.prototype.cycle = function (f) {
        f || (this.paused = false);
        this.interval && clearInterval(this.interval);
        this.options.interval && !this.paused && (this.interval = setInterval(c.proxy(this.next, this), this.options.interval));
        return this
    };
    d.prototype.getItemIndex = function (e) {
        this.$items = e.parent().children(".item");
        return this.$items.index(e || this.$active)
    };
    d.prototype.to = function (g) {
        var f = this;
        var e = this.getItemIndex(this.$active = this.$element.find(".item.active"));
        if (g > (this.$items.length - 1) || g < 0) {
            return
        }
        if (this.sliding) {
            return this.$element.one("slid.bs.carousel", function () {
                f.to(g)
            })
        }
        if (e == g) {
            return this.pause().cycle()
        }
        return this.slide(g > e ? "next" : "prev", c(this.$items[g]))
    };
    d.prototype.pause = function (f) {
        f || (this.paused = true);
        if (this.$element.find(".next, .prev").length && c.support.transition) {
            this.$element.trigger(c.support.transition.end);
            this.cycle(true)
        }
        this.interval = clearInterval(this.interval);
        return this
    };
    d.prototype.next = function () {
        if (this.sliding) {
            return
        }
        return this.slide("next")
    };
    d.prototype.prev = function () {
        if (this.sliding) {
            return
        }
        return this.slide("prev")
    };
    d.prototype.slide = function (m, h) {
        var p = this.$element.find(".item.active");
        var f = h || p[m]();
        var k = this.interval;
        var n = m == "next" ? "left" : "right";
        var i = m == "next" ? "first" : "last";
        var j = this;
        if (!f.length) {
            if (!this.options.wrap) {
                return
            }
            f = this.$element.find(".item")[i]()
        }
        if (f.hasClass("active")) {
            return(this.sliding = false)
        }
        var l = f[0];
        var e = c.Event("slide.bs.carousel", {relatedTarget: l, direction: n});
        this.$element.trigger(e);
        if (e.isDefaultPrevented()) {
            return
        }
        this.sliding = true;
        k && this.pause();
        if (this.$indicators.length) {
            this.$indicators.find(".active").removeClass("active");
            var g = c(this.$indicators.children()[this.getItemIndex(f)]);
            g && g.addClass("active")
        }
        var o = c.Event("slid.bs.carousel", {relatedTarget: l, direction: n});
        if (c.support.transition && this.$element.hasClass("slide")) {
            f.addClass(m);
            f[0].offsetWidth;
            p.addClass(n);
            f.addClass(n);
            p.one("bsTransitionEnd",function () {
                f.removeClass([m, n].join(" ")).addClass("active");
                p.removeClass(["active", n].join(" "));
                j.sliding = false;
                setTimeout(function () {
                    j.$element.trigger(o)
                }, 0)
            }).emulateTransitionEnd(p.css("transition-duration").slice(0, -1) * 1000)
        } else {
            p.removeClass("active");
            f.addClass("active");
            this.sliding = false;
            this.$element.trigger(o)
        }
        k && this.cycle();
        return this
    };
    function b(e) {
        return this.each(function () {
            var i = c(this);
            var h = i.data("bs.carousel");
            var f = c.extend({}, d.DEFAULTS, i.data(), typeof e == "object" && e);
            var g = typeof e == "string" ? e : f.slide;
            if (!h) {
                i.data("bs.carousel", (h = new d(this, f)))
            }
            if (typeof e == "number") {
                h.to(e)
            } else {
                if (g) {
                    h[g]()
                } else {
                    if (f.interval) {
                        h.pause().cycle()
                    }
                }
            }
        })
    }

    var a = c.fn.carousel;
    c.fn.carousel = b;
    c.fn.carousel.Constructor = d;
    c.fn.carousel.noConflict = function () {
        c.fn.carousel = a;
        return this
    };
    c(document).on("click.bs.carousel.data-api", "[data-slide], [data-slide-to]", function (k) {
        var g;
        var j = c(this);
        var f = c(j.attr("data-target") || (g = j.attr("href")) && g.replace(/.*(?=#[^\s]+$)/, ""));
        if (!f.hasClass("carousel")) {
            return
        }
        var h = c.extend({}, f.data(), j.data());
        var i = j.attr("data-slide-to");
        if (i) {
            h.interval = false
        }
        b.call(f, h);
        if (i) {
            f.data("bs.carousel").to(i)
        }
        k.preventDefault()
    });
    c(window).on("load", function () {
        c('[data-ride="carousel"]').each(function () {
            var e = c(this);
            b.call(e, e.data())
        })
    })
}(jQuery);
+function (c) {
    var d = function (f, e) {
        this.$element = c(f);
        this.options = c.extend({}, d.DEFAULTS, e);
        this.transitioning = null;
        if (this.options.parent) {
            this.$parent = c(this.options.parent)
        }
        if (this.options.toggle) {
            this.toggle()
        }
    };
    d.VERSION = "3.2.0";
    d.DEFAULTS = {toggle: true};
    d.prototype.dimension = function () {
        var e = this.$element.hasClass("width");
        return e ? "width" : "height"
    };
    d.prototype.show = function () {
        if (this.transitioning || this.$element.hasClass("in")) {
            return
        }
        var f = c.Event("show.bs.collapse");
        this.$element.trigger(f);
        if (f.isDefaultPrevented()) {
            return
        }
        var i = this.$parent && this.$parent.find("> .panel > .in");
        if (i && i.length) {
            var g = i.data("bs.collapse");
            if (g && g.transitioning) {
                return
            }
            b.call(i, "hide");
            g || i.data("bs.collapse", null)
        }
        var j = this.dimension();
        this.$element.removeClass("collapse").addClass("collapsing")[j](0);
        this.transitioning = 1;
        var e = function () {
            this.$element.removeClass("collapsing").addClass("collapse in")[j]("");
            this.transitioning = 0;
            this.$element.trigger("shown.bs.collapse")
        };
        if (!c.support.transition) {
            return e.call(this)
        }
        var h = c.camelCase(["scroll", j].join("-"));
        this.$element.one("bsTransitionEnd", c.proxy(e, this)).emulateTransitionEnd(350)[j](this.$element[0][h])
    };
    d.prototype.hide = function () {
        if (this.transitioning || !this.$element.hasClass("in")) {
            return
        }
        var f = c.Event("hide.bs.collapse");
        this.$element.trigger(f);
        if (f.isDefaultPrevented()) {
            return
        }
        var g = this.dimension();
        this.$element[g](this.$element[g]())[0].offsetHeight;
        this.$element.addClass("collapsing").removeClass("collapse").removeClass("in");
        this.transitioning = 1;
        var e = function () {
            this.transitioning = 0;
            this.$element.trigger("hidden.bs.collapse").removeClass("collapsing").addClass("collapse")
        };
        if (!c.support.transition) {
            return e.call(this)
        }
        this.$element[g](0).one("bsTransitionEnd", c.proxy(e, this)).emulateTransitionEnd(350)
    };
    d.prototype.toggle = function () {
        this[this.$element.hasClass("in") ? "hide" : "show"]()
    };
    function b(e) {
        return this.each(function () {
            var h = c(this);
            var g = h.data("bs.collapse");
            var f = c.extend({}, d.DEFAULTS, h.data(), typeof e == "object" && e);
            if (!g && f.toggle && e == "show") {
                e = !e
            }
            if (!g) {
                h.data("bs.collapse", (g = new d(this, f)))
            }
            if (typeof e == "string") {
                g[e]()
            }
        })
    }

    var a = c.fn.collapse;
    c.fn.collapse = b;
    c.fn.collapse.Constructor = d;
    c.fn.collapse.noConflict = function () {
        c.fn.collapse = a;
        return this
    };
    c(document).on("click.bs.collapse.data-api", '[data-toggle="collapse"]', function (k) {
        var f;
        var m = c(this);
        var l = m.attr("data-target") || k.preventDefault() || (f = m.attr("href")) && f.replace(/.*(?=#[^\s]+$)/, "");
        var g = c(l);
        var i = g.data("bs.collapse");
        var j = i ? "toggle" : m.data();
        var n = m.attr("data-parent");
        var h = n && c(n);
        if (!i || !i.transitioning) {
            if (h) {
                h.find('[data-toggle="collapse"][data-parent="' + n + '"]').not(m).addClass("collapsed")
            }
            m[g.hasClass("in") ? "addClass" : "removeClass"]("collapsed")
        }
        b.call(g, j)
    })
}(jQuery);
+function (h) {
    var e = ".dropdown-backdrop";
    var b = '[data-toggle="dropdown"]';
    var a = function (i) {
        h(i).on("click.bs.dropdown", this.toggle)
    };
    a.VERSION = "3.2.0";
    a.prototype.toggle = function (m) {
        var l = h(this);
        if (l.is(".disabled, :disabled")) {
            return
        }
        var k = f(l);
        var j = k.hasClass("open");
        d();
        if (!j) {
            if ("ontouchstart" in document.documentElement && !k.closest(".navbar-nav").length) {
                h('<div class="dropdown-backdrop"/>').insertAfter(h(this)).on("click", d)
            }
            var i = {relatedTarget: this};
            k.trigger(m = h.Event("show.bs.dropdown", i));
            if (m.isDefaultPrevented()) {
                return
            }
            l.trigger("focus");
            k.toggleClass("open").trigger("shown.bs.dropdown", i)
        }
        return false
    };
    a.prototype.keydown = function (m) {
        if (!/(38|40|27)/.test(m.keyCode)) {
            return
        }
        var l = h(this);
        m.preventDefault();
        m.stopPropagation();
        if (l.is(".disabled, :disabled")) {
            return
        }
        var k = f(l);
        var j = k.hasClass("open");
        if (!j || (j && m.keyCode == 27)) {
            if (m.which == 27) {
                k.find(b).trigger("focus")
            }
            return l.trigger("click")
        }
        var n = " li:not(.divider):visible a";
        var o = k.find('[role="menu"]' + n + ', [role="listbox"]' + n);
        if (!o.length) {
            return
        }
        var i = o.index(o.filter(":focus"));
        if (m.keyCode == 38 && i > 0) {
            i--
        }
        if (m.keyCode == 40 && i < o.length - 1) {
            i++
        }
        if (!~i) {
            i = 0
        }
        o.eq(i).trigger("focus")
    };
    function d(i) {
        if (i && i.which === 3) {
            return
        }
        h(e).remove();
        h(b).each(function () {
            var k = f(h(this));
            var j = {relatedTarget: this};
            if (!k.hasClass("open")) {
                return
            }
            k.trigger(i = h.Event("hide.bs.dropdown", j));
            if (i.isDefaultPrevented()) {
                return
            }
            k.removeClass("open").trigger("hidden.bs.dropdown", j)
        })
    }

    function f(k) {
        var i = k.attr("data-target");
        if (!i) {
            i = k.attr("href");
            i = i && /#[A-Za-z]/.test(i) && i.replace(/.*(?=#[^\s]*$)/, "")
        }
        var j = i && h(i);
        return j && j.length ? j : k.parent()
    }

    function g(i) {
        return this.each(function () {
            var k = h(this);
            var j = k.data("bs.dropdown");
            if (!j) {
                k.data("bs.dropdown", (j = new a(this)))
            }
            if (typeof i == "string") {
                j[i].call(k)
            }
        })
    }

    var c = h.fn.dropdown;
    h.fn.dropdown = g;
    h.fn.dropdown.Constructor = a;
    h.fn.dropdown.noConflict = function () {
        h.fn.dropdown = c;
        return this
    };
    h(document).on("click.bs.dropdown.data-api", d).on("click.bs.dropdown.data-api", ".dropdown form",function (i) {
        i.stopPropagation()
    }).on("click.bs.dropdown.data-api", b, a.prototype.toggle).on("keydown.bs.dropdown.data-api", b + ', [role="menu"], [role="listbox"]', a.prototype.keydown)
}(jQuery);
+function (d) {
    var b = function (f, e) {
        this.options = e;
        this.$body = d(document.body);
        this.$element = d(f);
        this.$backdrop = this.isShown = null;
        this.scrollbarWidth = 0;
        if (this.options.remote) {
            this.$element.find(".modal-content").load(this.options.remote, d.proxy(function () {
                this.$element.trigger("loaded.bs.modal")
            }, this))
        }
    };
    b.VERSION = "3.2.0";
    b.DEFAULTS = {backdrop: true, keyboard: true, show: true};
    b.prototype.toggle = function (e) {
        return this.isShown ? this.hide() : this.show(e)
    };
    b.prototype.show = function (h) {
        var f = this;
        var g = d.Event("show.bs.modal", {relatedTarget: h});
        this.$element.trigger(g);
        if (this.isShown || g.isDefaultPrevented()) {
            return
        }
        this.isShown = true;
        this.checkScrollbar();
        this.$body.addClass("modal-open");
        this.setScrollbar();
        this.escape();
        this.$element.on("click.dismiss.bs.modal", '[data-dismiss="modal"]', d.proxy(this.hide, this));
        this.backdrop(function () {
            var j = d.support.transition && f.$element.hasClass("fade");
            if (!f.$element.parent().length) {
                f.$element.appendTo(f.$body)
            }
            f.$element.show().scrollTop(0);
            if (j) {
                f.$element[0].offsetWidth
            }
            f.$element.addClass("in").attr("aria-hidden", false);
            f.enforceFocus();
            var i = d.Event("shown.bs.modal", {relatedTarget: h});
            j ? f.$element.find(".modal-dialog").one("bsTransitionEnd",function () {
                f.$element.trigger("focus").trigger(i)
            }).emulateTransitionEnd(300) : f.$element.trigger("focus").trigger(i)
        })
    };
    b.prototype.hide = function (f) {
        if (f) {
            f.preventDefault()
        }
        f = d.Event("hide.bs.modal");
        this.$element.trigger(f);
        if (!this.isShown || f.isDefaultPrevented()) {
            return
        }
        this.isShown = false;
        this.$body.removeClass("modal-open");
        this.resetScrollbar();
        this.escape();
        d(document).off("focusin.bs.modal");
        this.$element.removeClass("in").attr("aria-hidden", true).off("click.dismiss.bs.modal");
        d.support.transition && this.$element.hasClass("fade") ? this.$element.one("bsTransitionEnd", d.proxy(this.hideModal, this)).emulateTransitionEnd(300) : this.hideModal()
    };
    b.prototype.enforceFocus = function () {
        d(document).off("focusin.bs.modal").on("focusin.bs.modal", d.proxy(function (f) {
            if (this.$element[0] !== f.target && !this.$element.has(f.target).length) {
                this.$element.trigger("focus")
            }
        }, this))
    };
    b.prototype.escape = function () {
        if (this.isShown && this.options.keyboard) {
            this.$element.on("keyup.dismiss.bs.modal", d.proxy(function (f) {
                f.which == 27 && this.hide()
            }, this))
        } else {
            if (!this.isShown) {
                this.$element.off("keyup.dismiss.bs.modal")
            }
        }
    };
    b.prototype.hideModal = function () {
        var e = this;
        this.$element.hide();
        this.backdrop(function () {
            e.$element.trigger("hidden.bs.modal")
        })
    };
    b.prototype.removeBackdrop = function () {
        this.$backdrop && this.$backdrop.remove();
        this.$backdrop = null
    };
    b.prototype.backdrop = function (i) {
        var h = this;
        var f = this.$element.hasClass("fade") ? "fade" : "";
        if (this.isShown && this.options.backdrop) {
            var e = d.support.transition && f;
            this.$backdrop = d('<div class="modal-backdrop ' + f + '" />').appendTo(this.$body);
            this.$element.on("click.dismiss.bs.modal", d.proxy(function (j) {
                if (j.target !== j.currentTarget) {
                    return
                }
                this.options.backdrop == "static" ? this.$element[0].focus.call(this.$element[0]) : this.hide.call(this)
            }, this));
            if (e) {
                this.$backdrop[0].offsetWidth
            }
            this.$backdrop.addClass("in");
            if (!i) {
                return
            }
            e ? this.$backdrop.one("bsTransitionEnd", i).emulateTransitionEnd(150) : i()
        } else {
            if (!this.isShown && this.$backdrop) {
                this.$backdrop.removeClass("in");
                var g = function () {
                    h.removeBackdrop();
                    i && i()
                };
                d.support.transition && this.$element.hasClass("fade") ? this.$backdrop.one("bsTransitionEnd", g).emulateTransitionEnd(150) : g()
            } else {
                if (i) {
                    i()
                }
            }
        }
    };
    b.prototype.checkScrollbar = function () {
        if (document.body.clientWidth >= window.innerWidth) {
            return
        }
        this.scrollbarWidth = this.scrollbarWidth || this.measureScrollbar()
    };
    b.prototype.setScrollbar = function () {
        var e = parseInt((this.$body.css("padding-right") || 0), 10);
        if (this.scrollbarWidth) {
            this.$body.css("padding-right", e + this.scrollbarWidth)
        }
    };
    b.prototype.resetScrollbar = function () {
        this.$body.css("padding-right", "")
    };
    b.prototype.measureScrollbar = function () {
        var f = document.createElement("div");
        f.className = "modal-scrollbar-measure";
        this.$body.append(f);
        var e = f.offsetWidth - f.clientWidth;
        this.$body[0].removeChild(f);
        return e
    };
    function c(e, f) {
        return this.each(function () {
            var i = d(this);
            var h = i.data("bs.modal");
            var g = d.extend({}, b.DEFAULTS, i.data(), typeof e == "object" && e);
            if (!h) {
                i.data("bs.modal", (h = new b(this, g)))
            }
            if (typeof e == "string") {
                h[e](f)
            } else {
                if (g.show) {
                    h.show(f)
                }
            }
        })
    }

    var a = d.fn.modal;
    d.fn.modal = c;
    d.fn.modal.Constructor = b;
    d.fn.modal.noConflict = function () {
        d.fn.modal = a;
        return this
    };
    d(document).on("click.bs.modal.data-api", '[data-toggle="modal"]', function (j) {
        var i = d(this);
        var g = i.attr("href");
        var f = d(i.attr("data-target") || (g && g.replace(/.*(?=#[^\s]+$)/, "")));
        var h = f.data("bs.modal") ? "toggle" : d.extend({remote: !/#/.test(g) && g}, f.data(), i.data());
        if (i.is("a")) {
            j.preventDefault()
        }
        f.one("show.bs.modal", function (e) {
            if (e.isDefaultPrevented()) {
                return
            }
            f.one("hidden.bs.modal", function () {
                i.is(":visible") && i.trigger("focus")
            })
        });
        c.call(f, h, this)
    })
}(jQuery);
+function (d) {
    var c = function (f, e) {
        this.type = this.options = this.enabled = this.timeout = this.hoverState = this.$element = null;
        this.init("tooltip", f, e)
    };
    c.VERSION = "3.2.0";
    c.DEFAULTS = {animation: true, placement: "top", selector: false, template: '<div class="tooltip" role="tooltip"><div class="tooltip-arrow"></div><div class="tooltip-inner"></div></div>', trigger: "hover focus", title: "", delay: 0, html: false, container: false, viewport: {selector: "body", padding: 0}};
    c.prototype.init = function (l, j, g) {
        this.enabled = true;
        this.type = l;
        this.$element = d(j);
        this.options = this.getOptions(g);
        this.$viewport = this.options.viewport && d(this.options.viewport.selector || this.options.viewport);
        var k = this.options.trigger.split(" ");
        for (var h = k.length; h--;) {
            var f = k[h];
            if (f == "click") {
                this.$element.on("click." + this.type, this.options.selector, d.proxy(this.toggle, this))
            } else {
                if (f != "manual") {
                    var m = f == "hover" ? "mouseenter" : "focusin";
                    var e = f == "hover" ? "mouseleave" : "focusout";
                    this.$element.on(m + "." + this.type, this.options.selector, d.proxy(this.enter, this));
                    this.$element.on(e + "." + this.type, this.options.selector, d.proxy(this.leave, this))
                }
            }
        }
        this.options.selector ? (this._options = d.extend({}, this.options, {trigger: "manual", selector: ""})) : this.fixTitle()
    };
    c.prototype.getDefaults = function () {
        return c.DEFAULTS
    };
    c.prototype.getOptions = function (e) {
        e = d.extend({}, this.getDefaults(), this.$element.data(), e);
        if (e.delay && typeof e.delay == "number") {
            e.delay = {show: e.delay, hide: e.delay}
        }
        return e
    };
    c.prototype.getDelegateOptions = function () {
        var e = {};
        var f = this.getDefaults();
        this._options && d.each(this._options, function (g, h) {
            if (f[g] != h) {
                e[g] = h
            }
        });
        return e
    };
    c.prototype.enter = function (f) {
        var e = f instanceof this.constructor ? f : d(f.currentTarget).data("bs." + this.type);
        if (!e) {
            e = new this.constructor(f.currentTarget, this.getDelegateOptions());
            d(f.currentTarget).data("bs." + this.type, e)
        }
        clearTimeout(e.timeout);
        e.hoverState = "in";
        if (!e.options.delay || !e.options.delay.show) {
            return e.show()
        }
        e.timeout = setTimeout(function () {
            if (e.hoverState == "in") {
                e.show()
            }
        }, e.options.delay.show)
    };
    c.prototype.leave = function (f) {
        var e = f instanceof this.constructor ? f : d(f.currentTarget).data("bs." + this.type);
        if (!e) {
            e = new this.constructor(f.currentTarget, this.getDelegateOptions());
            d(f.currentTarget).data("bs." + this.type, e)
        }
        clearTimeout(e.timeout);
        e.hoverState = "out";
        if (!e.options.delay || !e.options.delay.hide) {
            return e.hide()
        }
        e.timeout = setTimeout(function () {
            if (e.hoverState == "out") {
                e.hide()
            }
        }, e.options.delay.hide)
    };
    c.prototype.show = function () {
        var q = d.Event("show.bs." + this.type);
        if (this.hasContent() && this.enabled) {
            this.$element.trigger(q);
            var r = d.contains(document.documentElement, this.$element[0]);
            if (q.isDefaultPrevented() || !r) {
                return
            }
            var p = this;
            var n = this.tip();
            var h = this.getUID(this.type);
            this.setContent();
            n.attr("id", h);
            this.$element.attr("aria-describedby", h);
            if (this.options.animation) {
                n.addClass("fade")
            }
            var l = typeof this.options.placement == "function" ? this.options.placement.call(this, n[0], this.$element[0]) : this.options.placement;
            var t = /\s?auto?\s?/i;
            var u = t.test(l);
            if (u) {
                l = l.replace(t, "") || "top"
            }
            n.detach().css({top: 0, left: 0, display: "block"}).addClass(l).data("bs." + this.type, this);
            this.options.container ? n.appendTo(this.options.container) : n.insertAfter(this.$element);
            var s = this.getPosition();
            var f = n[0].offsetWidth;
            var o = n[0].offsetHeight;
            if (u) {
                var j = l;
                var k = this.$element.parent();
                var m = this.getPosition(k);
                l = l == "bottom" && s.top + s.height + o - m.scroll > m.height ? "top" : l == "top" && s.top - m.scroll - o < 0 ? "bottom" : l == "right" && s.right + f > m.width ? "left" : l == "left" && s.left - f < m.left ? "right" : l;
                n.removeClass(j).addClass(l)
            }
            var i = this.getCalculatedOffset(l, s, f, o);
            this.applyPlacement(i, l);
            var g = function () {
                p.$element.trigger("shown.bs." + p.type);
                p.hoverState = null
            };
            d.support.transition && this.$tip.hasClass("fade") ? n.one("bsTransitionEnd", g).emulateTransitionEnd(150) : g()
        }
    };
    c.prototype.applyPlacement = function (k, l) {
        var m = this.tip();
        var g = m[0].offsetWidth;
        var q = m[0].offsetHeight;
        var f = parseInt(m.css("margin-top"), 10);
        var i = parseInt(m.css("margin-left"), 10);
        if (isNaN(f)) {
            f = 0
        }
        if (isNaN(i)) {
            i = 0
        }
        k.top = k.top + f;
        k.left = k.left + i;
        d.offset.setOffset(m[0], d.extend({using: function (r) {
            m.css({top: Math.round(r.top), left: Math.round(r.left)})
        }}, k), 0);
        m.addClass("in");
        var e = m[0].offsetWidth;
        var n = m[0].offsetHeight;
        if (l == "top" && n != q) {
            k.top = k.top + q - n
        }
        var p = this.getViewportAdjustedDelta(l, k, e, n);
        if (p.left) {
            k.left += p.left
        } else {
            k.top += p.top
        }
        var h = p.left ? p.left * 2 - g + e : p.top * 2 - q + n;
        var j = p.left ? "left" : "top";
        var o = p.left ? "offsetWidth" : "offsetHeight";
        m.offset(k);
        this.replaceArrow(h, m[0][o], j)
    };
    c.prototype.replaceArrow = function (g, f, e) {
        this.arrow().css(e, g ? (50 * (1 - g / f) + "%") : "")
    };
    c.prototype.setContent = function () {
        var f = this.tip();
        var e = this.getTitle();
        f.find(".tooltip-inner")[this.options.html ? "html" : "text"](e);
        f.removeClass("fade in top bottom left right")
    };
    c.prototype.hide = function () {
        var g = this;
        var i = this.tip();
        var h = d.Event("hide.bs." + this.type);
        this.$element.removeAttr("aria-describedby");
        function f() {
            if (g.hoverState != "in") {
                i.detach()
            }
            g.$element.trigger("hidden.bs." + g.type)
        }

        this.$element.trigger(h);
        if (h.isDefaultPrevented()) {
            return
        }
        i.removeClass("in");
        d.support.transition && this.$tip.hasClass("fade") ? i.one("bsTransitionEnd", f).emulateTransitionEnd(150) : f();
        this.hoverState = null;
        return this
    };
    c.prototype.fixTitle = function () {
        var e = this.$element;
        if (e.attr("title") || typeof(e.attr("data-original-title")) != "string") {
            e.attr("data-original-title", e.attr("title") || "").attr("title", "")
        }
    };
    c.prototype.hasContent = function () {
        return this.getTitle()
    };
    c.prototype.getPosition = function (f) {
        f = f || this.$element;
        var g = f[0];
        var e = g.tagName == "BODY";
        return d.extend({}, (typeof g.getBoundingClientRect == "function") ? g.getBoundingClientRect() : null, {scroll: e ? document.documentElement.scrollTop || document.body.scrollTop : f.scrollTop(), width: e ? d(window).width() : f.outerWidth(), height: e ? d(window).height() : f.outerHeight()}, e ? {top: 0, left: 0} : f.offset())
    };
    c.prototype.getCalculatedOffset = function (e, h, f, g) {
        return e == "bottom" ? {top: h.top + h.height, left: h.left + h.width / 2 - f / 2} : e == "top" ? {top: h.top - g, left: h.left + h.width / 2 - f / 2} : e == "left" ? {top: h.top + h.height / 2 - g / 2, left: h.left - f} : {top: h.top + h.height / 2 - g / 2, left: h.left + h.width}
    };
    c.prototype.getViewportAdjustedDelta = function (h, k, e, j) {
        var m = {top: 0, left: 0};
        if (!this.$viewport) {
            return m
        }
        var g = this.options.viewport && this.options.viewport.padding || 0;
        var l = this.getPosition(this.$viewport);
        if (/right|left/.test(h)) {
            var n = k.top - g - l.scroll;
            var i = k.top + g - l.scroll + j;
            if (n < l.top) {
                m.top = l.top - n
            } else {
                if (i > l.top + l.height) {
                    m.top = l.top + l.height - i
                }
            }
        } else {
            var o = k.left - g;
            var f = k.left + g + e;
            if (o < l.left) {
                m.left = l.left - o
            } else {
                if (f > l.width) {
                    m.left = l.left + l.width - f
                }
            }
        }
        return m
    };
    c.prototype.getTitle = function () {
        var g;
        var e = this.$element;
        var f = this.options;
        g = e.attr("data-original-title") || (typeof f.title == "function" ? f.title.call(e[0]) : f.title);
        return g
    };
    c.prototype.getUID = function (e) {
        do {
            e += ~~(Math.random() * 1000000)
        } while (document.getElementById(e));
        return e
    };
    c.prototype.tip = function () {
        return(this.$tip = this.$tip || d(this.options.template))
    };
    c.prototype.arrow = function () {
        return(this.$arrow = this.$arrow || this.tip().find(".tooltip-arrow"))
    };
    c.prototype.validate = function () {
        if (!this.$element[0].parentNode) {
            this.hide();
            this.$element = null;
            this.options = null
        }
    };
    c.prototype.enable = function () {
        this.enabled = true
    };
    c.prototype.disable = function () {
        this.enabled = false
    };
    c.prototype.toggleEnabled = function () {
        this.enabled = !this.enabled
    };
    c.prototype.toggle = function (g) {
        var f = this;
        if (g) {
            f = d(g.currentTarget).data("bs." + this.type);
            if (!f) {
                f = new this.constructor(g.currentTarget, this.getDelegateOptions());
                d(g.currentTarget).data("bs." + this.type, f)
            }
        }
        f.tip().hasClass("in") ? f.leave(f) : f.enter(f)
    };
    c.prototype.destroy = function () {
        clearTimeout(this.timeout);
        this.hide().$element.off("." + this.type).removeData("bs." + this.type)
    };
    function b(e) {
        return this.each(function () {
            var h = d(this);
            var g = h.data("bs.tooltip");
            var f = typeof e == "object" && e;
            if (!g && e == "destroy") {
                return
            }
            if (!g) {
                h.data("bs.tooltip", (g = new c(this, f)))
            }
            if (typeof e == "string") {
                g[e]()
            }
        })
    }

    var a = d.fn.tooltip;
    d.fn.tooltip = b;
    d.fn.tooltip.Constructor = c;
    d.fn.tooltip.noConflict = function () {
        d.fn.tooltip = a;
        return this
    }
}(jQuery);
+function (d) {
    var c = function (f, e) {
        this.init("popover", f, e)
    };
    if (!d.fn.tooltip) {
        throw new Error("Popover requires tooltip.js")
    }
    c.VERSION = "3.2.0";
    c.DEFAULTS = d.extend({}, d.fn.tooltip.Constructor.DEFAULTS, {placement: "right", trigger: "click", content: "", template: '<div class="popover" role="tooltip"><div class="arrow"></div><h3 class="popover-title"></h3><div class="popover-content"></div></div>'});
    c.prototype = d.extend({}, d.fn.tooltip.Constructor.prototype);
    c.prototype.constructor = c;
    c.prototype.getDefaults = function () {
        return c.DEFAULTS
    };
    c.prototype.setContent = function () {
        var g = this.tip();
        var f = this.getTitle();
        var e = this.getContent();
        g.find(".popover-title")[this.options.html ? "html" : "text"](f);
        g.find(".popover-content").empty()[this.options.html ? (typeof e == "string" ? "html" : "append") : "text"](e);
        g.removeClass("fade top bottom left right in");
        if (!g.find(".popover-title").html()) {
            g.find(".popover-title").hide()
        }
    };
    c.prototype.hasContent = function () {
        return this.getTitle() || this.getContent()
    };
    c.prototype.getContent = function () {
        var e = this.$element;
        var f = this.options;
        return e.attr("data-content") || (typeof f.content == "function" ? f.content.call(e[0]) : f.content)
    };
    c.prototype.arrow = function () {
        return(this.$arrow = this.$arrow || this.tip().find(".arrow"))
    };
    c.prototype.tip = function () {
        if (!this.$tip) {
            this.$tip = d(this.options.template)
        }
        return this.$tip
    };
    function b(e) {
        return this.each(function () {
            var h = d(this);
            var g = h.data("bs.popover");
            var f = typeof e == "object" && e;
            if (!g && e == "destroy") {
                return
            }
            if (!g) {
                h.data("bs.popover", (g = new c(this, f)))
            }
            if (typeof e == "string") {
                g[e]()
            }
        })
    }

    var a = d.fn.popover;
    d.fn.popover = b;
    d.fn.popover.Constructor = c;
    d.fn.popover.noConflict = function () {
        d.fn.popover = a;
        return this
    }
}(jQuery);
+function (d) {
    function c(f, e) {
        var g = d.proxy(this.process, this);
        this.$body = d("body");
        this.$scrollElement = d(f).is("body") ? d(window) : d(f);
        this.options = d.extend({}, c.DEFAULTS, e);
        this.selector = (this.options.target || "") + " .nav li > a";
        this.offsets = [];
        this.targets = [];
        this.activeTarget = null;
        this.scrollHeight = 0;
        this.$scrollElement.on("scroll.bs.scrollspy", g);
        this.refresh();
        this.process()
    }

    c.VERSION = "3.2.0";
    c.DEFAULTS = {offset: 10};
    c.prototype.getScrollHeight = function () {
        return this.$scrollElement[0].scrollHeight || Math.max(this.$body[0].scrollHeight, document.documentElement.scrollHeight)
    };
    c.prototype.refresh = function () {
        var e = "offset";
        var g = 0;
        if (!d.isWindow(this.$scrollElement[0])) {
            e = "position";
            g = this.$scrollElement.scrollTop()
        }
        this.offsets = [];
        this.targets = [];
        this.scrollHeight = this.getScrollHeight();
        var f = this;
        this.$body.find(this.selector).map(function () {
            var i = d(this);
            var h = i.data("target") || i.attr("href");
            var j = /^#./.test(h) && d(h);
            return(j && j.length && j.is(":visible") && [
                [j[e]().top + g, h]
            ]) || null
        }).sort(function (i, h) {
            return i[0] - h[0]
        }).each(function () {
            f.offsets.push(this[0]);
            f.targets.push(this[1])
        })
    };
    c.prototype.process = function () {
        var k = this.$scrollElement.scrollTop() + this.options.offset;
        var g = this.getScrollHeight();
        var j = this.options.offset + g - this.$scrollElement.height();
        var h = this.offsets;
        var e = this.targets;
        var l = this.activeTarget;
        var f;
        if (this.scrollHeight != g) {
            this.refresh()
        }
        if (k >= j) {
            return l != (f = e[e.length - 1]) && this.activate(f)
        }
        if (l && k <= h[0]) {
            return l != (f = e[0]) && this.activate(f)
        }
        for (f = h.length; f--;) {
            l != e[f] && k >= h[f] && (!h[f + 1] || k <= h[f + 1]) && this.activate(e[f])
        }
    };
    c.prototype.activate = function (g) {
        this.activeTarget = g;
        d(this.selector).parentsUntil(this.options.target, ".active").removeClass("active");
        var e = this.selector + '[data-target="' + g + '"],' + this.selector + '[href="' + g + '"]';
        var f = d(e).parents("li").addClass("active");
        if (f.parent(".dropdown-menu").length) {
            f = f.closest("li.dropdown").addClass("active")
        }
        f.trigger("activate.bs.scrollspy")
    };
    function b(e) {
        return this.each(function () {
            var h = d(this);
            var g = h.data("bs.scrollspy");
            var f = typeof e == "object" && e;
            if (!g) {
                h.data("bs.scrollspy", (g = new c(this, f)))
            }
            if (typeof e == "string") {
                g[e]()
            }
        })
    }

    var a = d.fn.scrollspy;
    d.fn.scrollspy = b;
    d.fn.scrollspy.Constructor = c;
    d.fn.scrollspy.noConflict = function () {
        d.fn.scrollspy = a;
        return this
    };
    d(window).on("load.bs.scrollspy.data-api", function () {
        d('[data-spy="scroll"]').each(function () {
            var e = d(this);
            b.call(e, e.data())
        })
    })
}(jQuery);
+function (d) {
    var b = function (e) {
        this.element = d(e)
    };
    b.VERSION = "3.2.0";
    b.prototype.show = function () {
        var k = this.element;
        var h = k.closest("ul:not(.dropdown-menu)");
        var g = k.data("target");
        if (!g) {
            g = k.attr("href");
            g = g && g.replace(/.*(?=#[^\s]*$)/, "")
        }
        if (k.parent("li").hasClass("active")) {
            return
        }
        var i = h.find(".active:last a")[0];
        var j = d.Event("show.bs.tab", {relatedTarget: i});
        k.trigger(j);
        if (j.isDefaultPrevented()) {
            return
        }
        var f = d(g);
        this.activate(k.closest("li"), h);
        this.activate(f, f.parent(), function () {
            k.trigger({type: "shown.bs.tab", relatedTarget: i})
        })
    };
    b.prototype.activate = function (g, f, j) {
        var e = f.find("> .active");
        var i = j && d.support.transition && e.hasClass("fade");

        function h() {
            e.removeClass("active").find("> .dropdown-menu > .active").removeClass("active");
            g.addClass("active");
            if (i) {
                g[0].offsetWidth;
                g.addClass("in")
            } else {
                g.removeClass("fade")
            }
            if (g.parent(".dropdown-menu")) {
                g.closest("li.dropdown").addClass("active")
            }
            j && j()
        }

        i ? e.one("bsTransitionEnd", h).emulateTransitionEnd(150) : h();
        e.removeClass("in")
    };
    function c(e) {
        return this.each(function () {
            var g = d(this);
            var f = g.data("bs.tab");
            if (!f) {
                g.data("bs.tab", (f = new b(this)))
            }
            if (typeof e == "string") {
                f[e]()
            }
        })
    }

    var a = d.fn.tab;
    d.fn.tab = c;
    d.fn.tab.Constructor = b;
    d.fn.tab.noConflict = function () {
        d.fn.tab = a;
        return this
    };
    d(document).on("click.bs.tab.data-api", '[data-toggle="tab"], [data-toggle="pill"]', function (f) {
        f.preventDefault();
        c.call(d(this), "show")
    })
}(jQuery);
+function (d) {
    var c = function (f, e) {
        this.options = d.extend({}, c.DEFAULTS, e);
        this.$target = d(this.options.target).on("scroll.bs.affix.data-api", d.proxy(this.checkPosition, this)).on("click.bs.affix.data-api", d.proxy(this.checkPositionWithEventLoop, this));
        this.$element = d(f);
        this.affixed = this.unpin = this.pinnedOffset = null;
        this.checkPosition()
    };
    c.VERSION = "3.2.0";
    c.RESET = "affix affix-top affix-bottom";
    c.DEFAULTS = {offset: 0, target: window};
    c.prototype.getPinnedOffset = function () {
        if (this.pinnedOffset) {
            return this.pinnedOffset
        }
        this.$element.removeClass(c.RESET).addClass("affix");
        var f = this.$target.scrollTop();
        var e = this.$element.offset();
        return(this.pinnedOffset = e.top - f)
    };
    c.prototype.checkPositionWithEventLoop = function () {
        setTimeout(d.proxy(this.checkPosition, this), 1)
    };
    c.prototype.checkPosition = function () {
        if (!this.$element.is(":visible")) {
            return
        }
        var n = d(document).height();
        var f = this.$target.scrollTop();
        var k = this.$element.offset();
        var i = this.options.offset;
        var g = i.top;
        var h = i.bottom;
        if (typeof i != "object") {
            h = g = i
        }
        if (typeof g == "function") {
            g = i.top(this.$element)
        }
        if (typeof h == "function") {
            h = i.bottom(this.$element)
        }
        var j = this.unpin != null && (f + this.unpin <= k.top) ? false : h != null && (k.top + this.$element.height() >= n - h) ? "bottom" : g != null && (f <= g) ? "top" : false;
        if (this.affixed === j) {
            return
        }
        if (this.unpin != null) {
            this.$element.css("top", "")
        }
        var m = "affix" + (j ? "-" + j : "");
        var l = d.Event(m + ".bs.affix");
        this.$element.trigger(l);
        if (l.isDefaultPrevented()) {
            return
        }
        this.affixed = j;
        this.unpin = j == "bottom" ? this.getPinnedOffset() : null;
        this.$element.removeClass(c.RESET).addClass(m).trigger(d.Event(m.replace("affix", "affixed")));
        if (j == "bottom") {
            this.$element.offset({top: n - this.$element.height() - h})
        }
    };
    function b(e) {
        return this.each(function () {
            var h = d(this);
            var g = h.data("bs.affix");
            var f = typeof e == "object" && e;
            if (!g) {
                h.data("bs.affix", (g = new c(this, f)))
            }
            if (typeof e == "string") {
                g[e]()
            }
        })
    }

    var a = d.fn.affix;
    d.fn.affix = b;
    d.fn.affix.Constructor = c;
    d.fn.affix.noConflict = function () {
        d.fn.affix = a;
        return this
    };
    d(window).on("load", function () {
        d('[data-spy="affix"]').each(function () {
            var f = d(this);
            var e = f.data();
            e.offset = e.offset || {};
            if (e.offsetBottom) {
                e.offset.bottom = e.offsetBottom
            }
            if (e.offsetTop) {
                e.offset.top = e.offsetTop
            }
            b.call(f, e)
        })
    })
}(jQuery);
var Sonata = Sonata || {};
Sonata.Product = {url: {infoStockPrice: null}, targets: {inputAddBasket: null, productPrice: null, submitBasketBtn: null, addBasketError: null}, variations: {fields: null, form: null, unavailableError: null}, init: function (a) {
    this.setOptions(a);
    this.initAddBasket()
}, setOptions: function (a) {
    a = a || [];
    for (property in a) {
        this[property] = a[property]
    }
}, initVariation: function () {
    for (field in this.variations.fields) {
        this.variations.fields[field].change(jQuery.proxy(this.changeVariation, this))
    }
}, changeVariation: function (b) {
    this.variations.unavailableError.text("");
    this.variations.unavailableError.css("display", "none");
    var a = this.variations.form.attr("action");
    jQuery.ajax({url: a, type: "GET", data: this.variations.form.serialize(), success: jQuery.proxy(this.processChangeVariationResults, this)})
}, processChangeVariationResults: function (a) {
    if (a.error) {
        this.variations.unavailableError.text(a.error);
        this.variations.unavailableError.css("display", "block")
    } else {
        window.location.href = a.variation_url
    }
}, initAddBasket: function () {
    this.targets.inputAddBasket.on("input", jQuery.proxy(this.changeAddBasket, this))
}, changeAddBasket: function (b) {
    this.resetElements();
    var a = this.buildInfoStockPriceUrl(b.currentTarget.value);
    jQuery.getJSON(a, jQuery.proxy(this.processAddBasketResults, this))
}, resetElements: function () {
    this.targets.addBasketError.css("display", "none");
    this.targets.submitBasketBtn.removeClass("disabled");
    this.targets.submitBasketBtn.prop("disabled", false)
}, processAddBasketResults: function (a) {
    if (a.errors.stock) {
        jQuery.proxy(this.addBasketAddErrors(a.errors), this)
    }
    jQuery.proxy(this.addBasketProcessPrice(a.price_text), this)
}, buildInfoStockPriceUrl: function (a) {
    return this.url.infoStockPrice + "?quantity=" + a
}, addBasketAddErrors: function (a) {
    this.targets.addBasketError.text(a.stock);
    this.targets.addBasketError.css("display", "block");
    this.targets.submitBasketBtn.addClass("disabled");
    this.targets.submitBasketBtn.prop("disabled", true)
}, addBasketProcessPrice: function (a) {
    this.targets.productPrice.text(a)
}};
jQuery(document).ready(function () {
    SonataCore.setup_select2(document)
});
var SonataCore = {setup_select2: function (a) {
    jQuery('select:not([data-sonata-select2="false"])', a).each(function () {
        var b = $(this);
        var c = false;
        if (b.find('option[value=""]').length) {
            c = true
        }
        if (b.attr("data-sonata-select2-allow-clear") === "true") {
            c = true
        } else {
            if (b.attr("data-sonata-select2-allow-clear") === "false") {
                c = false
            }
        }
        b.select2({width: "resolve", minimumResultsForSearch: 10, allowClear: c});
        var d = b.data("popover");
        if (undefined !== d) {
            b.select2("container").popover(d.options)
        }
    })
}};
!function (b) {
    "undefined" == typeof b.fn.each2 && b.extend(b.fn, {each2: function (a) {
        for (var h = b([0]), g = -1, f = this.length; ++g < f && (h.context = h[0] = this[g]) && a.call(h[0], g, h) !== !1;) {
        }
        return this
    }})
}(jQuery), function (aE, aD) {
    function aq(a) {
        var d = aE(document.createTextNode(""));
        a.before(d), d.before(a), d.remove()
    }

    function ap(d) {
        function c(b) {
            return ar[b] || b
        }

        return d.replace(/[^\u0000-\u007E]/g, c)
    }

    function ao(f, e) {
        for (var h = 0, g = e.length; g > h; h += 1) {
            if (am(f, e[h])) {
                return h
            }
        }
        return -1
    }

    function an() {
        var a = aE(at);
        a.appendTo("body");
        var d = {width: a.width() - a[0].clientWidth, height: a.height() - a[0].clientHeight};
        return a.remove(), d
    }

    function am(b, d) {
        return b === d ? !0 : b === aD || d === aD ? !1 : null === b || null === d ? !1 : b.constructor === String ? b + "" == d + "" : d.constructor === String ? d + "" == b + "" : !1
    }

    function al(a, j) {
        var i, h, g;
        if (null === a || a.length < 1) {
            return[]
        }
        for (i = a.split(j), h = 0, g = i.length; g > h; h += 1) {
            i[h] = aE.trim(i[h])
        }
        return i
    }

    function ak(b) {
        return b.outerWidth(!1) - b.width()
    }

    function aj(b) {
        var a = "keyup-change-value";
        b.on("keydown", function () {
            aE.data(b, a) === aD && aE.data(b, a, b.val())
        }), b.on("keyup", function () {
            var c = aE.data(b, a);
            c !== aD && b.val() !== c && (aE.removeData(b, a), b.trigger("keyup-change"))
        })
    }

    function ai(a) {
        a.on("mousemove", function (e) {
            var b = aw;
            (b === aD || b.x !== e.pageX || b.y !== e.pageY) && aE(e.target).trigger("mousemove-filtered", e)
        })
    }

    function ah(b, h, g) {
        g = g || aD;
        var f;
        return function () {
            var a = arguments;
            window.clearTimeout(f), f = window.setTimeout(function () {
                h.apply(g, a)
            }, b)
        }
    }

    function ag(e, d) {
        var f = ah(e, function (b) {
            d.trigger("scroll-debounced", b)
        });
        d.on("scroll", function (b) {
            ao(b.target, d.get()) >= 0 && f(b)
        })
    }

    function af(b) {
        b[0] !== document.activeElement && window.setTimeout(function () {
            var g, a = b[0], h = b.val().length;
            b.focus();
            var f = a.offsetWidth > 0 || a.offsetHeight > 0;
            f && a === document.activeElement && (a.setSelectionRange ? a.setSelectionRange(h, h) : a.createTextRange && (g = a.createTextRange(), g.collapse(!1), g.select()))
        }, 0)
    }

    function ae(a) {
        a = aE(a)[0];
        var h = 0, g = 0;
        if ("selectionStart" in a) {
            h = a.selectionStart, g = a.selectionEnd - h
        } else {
            if ("selection" in document) {
                a.focus();
                var f = document.selection.createRange();
                g = document.selection.createRange().text.length, f.moveStart("character", -a.value.length), h = f.text.length - g
            }
        }
        return{offset: h, length: g}
    }

    function ad(b) {
        b.preventDefault(), b.stopPropagation()
    }

    function ac(b) {
        b.preventDefault(), b.stopImmediatePropagation()
    }

    function ab(a) {
        if (!ax) {
            var d = a[0].currentStyle || window.getComputedStyle(a[0], null);
            ax = aE(document.createElement("div")).css({position: "absolute", left: "-10000px", top: "-10000px", display: "none", fontSize: d.fontSize, fontFamily: d.fontFamily, fontStyle: d.fontStyle, fontWeight: d.fontWeight, letterSpacing: d.letterSpacing, textTransform: d.textTransform, whiteSpace: "nowrap"}), ax.attr("class", "select2-sizer"), aE("body").append(ax)
        }
        return ax.text(a.val()), ax.width()
    }

    function aa(a, l, k) {
        var j, h, i = [];
        j = aE.trim(a.attr("class")), j && (j = "" + j, aE(j.split(/\s+/)).each2(function () {
            0 === this.indexOf("select2-") && i.push(this)
        })), j = aE.trim(l.attr("class")), j && (j = "" + j, aE(j.split(/\s+/)).each2(function () {
            0 !== this.indexOf("select2-") && (h = k(this), h && i.push(h))
        })), a.attr("class", i.join(" "))
    }

    function Z(h, g, l, k) {
        var j = ap(h.toUpperCase()).indexOf(ap(g.toUpperCase())), i = g.length;
        return 0 > j ? (l.push(k(h)), void 0) : (l.push(k(h.substring(0, j))), l.push("<span class='select2-match'>"), l.push(k(h.substring(j, j + i))), l.push("</span>"), l.push(k(h.substring(j + i, h.length))), void 0)
    }

    function Y(d) {
        var c = {"\\": "&#92;", "&": "&amp;", "<": "&lt;", ">": "&gt;", '"': "&quot;", "'": "&#39;", "/": "&#47;"};
        return String(d).replace(/[&<>"'\/\\]/g, function (b) {
            return c[b]
        })
    }

    function X(l) {
        var k, j = null, i = l.quietMillis || 100, b = l.url, a = this;
        return function (c) {
            window.clearTimeout(k), k = window.setTimeout(function () {
                var n = l.data, m = b, h = l.transport || aE.fn.select2.ajaxDefaults.transport, g = {type: l.type || "GET", cache: l.cache || !1, jsonpCallback: l.jsonpCallback || aD, dataType: l.dataType || "json"}, e = aE.extend({}, aE.fn.select2.ajaxDefaults.params, g);
                n = n ? n.call(a, c.term, c.page, c.context) : null, m = "function" == typeof m ? m.call(a, c.term, c.page, c.context) : m, j && "function" == typeof j.abort && j.abort(), l.params && (aE.isFunction(l.params) ? aE.extend(e, l.params.call(a)) : aE.extend(e, l.params)), aE.extend(e, {url: m, dataType: l.dataType, data: n, success: function (f) {
                    var d = l.results(f, c.page, c);
                    c.callback(d)
                }, error: function (o, f, q) {
                    var p = {hasError: !0, jqXHR: o, textStatus: f, errorThrown: q};
                    c.callback(p)
                }}), j = h.call(a, e)
            }, i)
        }
    }

    function W(a) {
        var k, j, l = a, i = function (b) {
            return"" + b.text
        };
        aE.isArray(l) && (j = l, l = {results: j}), aE.isFunction(l) === !1 && (j = l, l = function () {
            return j
        });
        var h = l();
        return h.text && (i = h.text, aE.isFunction(i) || (k = h.text, i = function (b) {
            return b[k]
        })), function (c) {
            var f, n = c.term, m = {results: []};
            return"" === n ? (c.callback(l()), void 0) : (f = function (o, g) {
                var d, b;
                if (o = o[0], o.children) {
                    d = {};
                    for (b in o) {
                        o.hasOwnProperty(b) && (d[b] = o[b])
                    }
                    d.children = [], aE(o.children).each2(function (p, e) {
                        f(e, d.children)
                    }), (d.children.length || c.matcher(n, i(d), o)) && g.push(d)
                } else {
                    c.matcher(n, i(o), o) && g.push(o)
                }
            }, aE(l().results).each2(function (e, d) {
                f(d, m.results)
            }), c.callback(m), void 0)
        }
    }

    function V(b) {
        var a = aE.isFunction(b);
        return function (j) {
            var i = j.term, d = {results: []}, c = a ? b(j) : b;
            aE.isArray(c) && (aE(c).each(function () {
                var e = this.text !== aD, f = e ? this.text : this;
                ("" === i || j.matcher(i, f)) && d.results.push(e ? this : {id: this, text: this})
            }), j.callback(d))
        }
    }

    function U(a, d) {
        if (aE.isFunction(a)) {
            return !0
        }
        if (!a) {
            return !1
        }
        if ("string" == typeof a) {
            return !0
        }
        throw new Error(d + " must be a string, function, or falsy value")
    }

    function T(a, f) {
        if (aE.isFunction(a)) {
            var e = Array.prototype.slice.call(arguments, 2);
            return a.apply(f, e)
        }
        return a
    }

    function S(a) {
        var d = 0;
        return aE.each(a, function (e, c) {
            c.children ? d += S(c.children) : d++
        }), d
    }

    function R(v, u, t, s) {
        var p, o, n, m, b, r = v, q = !1;
        if (!s.createSearchChoice || !s.tokenSeparators || s.tokenSeparators.length < 1) {
            return aD
        }
        for (; ;) {
            for (o = -1, n = 0, m = s.tokenSeparators.length; m > n && (b = s.tokenSeparators[n], o = v.indexOf(b), !(o >= 0)); n++) {
            }
            if (0 > o) {
                break
            }
            if (p = v.substring(0, o), v = v.substring(o + b.length), p.length > 0 && (p = s.createSearchChoice.call(this, p, u), p !== aD && null !== p && s.id(p) !== aD && null !== s.id(p))) {
                for (q = !1, n = 0, m = u.length; m > n; n++) {
                    if (am(s.id(p), s.id(u[n]))) {
                        q = !0;
                        break
                    }
                }
                q || t(p)
            }
        }
        return r !== v ? v : void 0
    }

    function Q() {
        var a = this;
        aE.each(arguments, function (b, d) {
            a[d].remove(), a[d] = null
        })
    }

    function P(a, f) {
        var e = function () {
        };
        return e.prototype = new a, e.prototype.constructor = e, e.prototype.parent = a.prototype, e.prototype = aE.extend(e.prototype, f), e
    }

    if (window.Select2 === aD) {
        var aC, aB, aA, az, ay, ax, av, au, aw = {x: 0, y: 0}, aC = {TAB: 9, ENTER: 13, ESC: 27, SPACE: 32, LEFT: 37, UP: 38, RIGHT: 39, DOWN: 40, SHIFT: 16, CTRL: 17, ALT: 18, PAGE_UP: 33, PAGE_DOWN: 34, HOME: 36, END: 35, BACKSPACE: 8, DELETE: 46, isArrow: function (b) {
            switch (b = b.which ? b.which : b) {
                case aC.LEFT:
                case aC.RIGHT:
                case aC.UP:
                case aC.DOWN:
                    return !0
            }
            return !1
        }, isControl: function (d) {
            var c = d.which;
            switch (c) {
                case aC.SHIFT:
                case aC.CTRL:
                case aC.ALT:
                    return !0
            }
            return d.metaKey ? !0 : !1
        }, isFunctionKey: function (b) {
            return b = b.which ? b.which : b, b >= 112 && 123 >= b
        }}, at = "<div class='select2-measure-scrollbar'></div>", ar = {"\u24b6": "A", "\uff21": "A", "\xc0": "A", "\xc1": "A", "\xc2": "A", "\u1ea6": "A", "\u1ea4": "A", "\u1eaa": "A", "\u1ea8": "A", "\xc3": "A", "\u0100": "A", "\u0102": "A", "\u1eb0": "A", "\u1eae": "A", "\u1eb4": "A", "\u1eb2": "A", "\u0226": "A", "\u01e0": "A", "\xc4": "A", "\u01de": "A", "\u1ea2": "A", "\xc5": "A", "\u01fa": "A", "\u01cd": "A", "\u0200": "A", "\u0202": "A", "\u1ea0": "A", "\u1eac": "A", "\u1eb6": "A", "\u1e00": "A", "\u0104": "A", "\u023a": "A", "\u2c6f": "A", "\ua732": "AA", "\xc6": "AE", "\u01fc": "AE", "\u01e2": "AE", "\ua734": "AO", "\ua736": "AU", "\ua738": "AV", "\ua73a": "AV", "\ua73c": "AY", "\u24b7": "B", "\uff22": "B", "\u1e02": "B", "\u1e04": "B", "\u1e06": "B", "\u0243": "B", "\u0182": "B", "\u0181": "B", "\u24b8": "C", "\uff23": "C", "\u0106": "C", "\u0108": "C", "\u010a": "C", "\u010c": "C", "\xc7": "C", "\u1e08": "C", "\u0187": "C", "\u023b": "C", "\ua73e": "C", "\u24b9": "D", "\uff24": "D", "\u1e0a": "D", "\u010e": "D", "\u1e0c": "D", "\u1e10": "D", "\u1e12": "D", "\u1e0e": "D", "\u0110": "D", "\u018b": "D", "\u018a": "D", "\u0189": "D", "\ua779": "D", "\u01f1": "DZ", "\u01c4": "DZ", "\u01f2": "Dz", "\u01c5": "Dz", "\u24ba": "E", "\uff25": "E", "\xc8": "E", "\xc9": "E", "\xca": "E", "\u1ec0": "E", "\u1ebe": "E", "\u1ec4": "E", "\u1ec2": "E", "\u1ebc": "E", "\u0112": "E", "\u1e14": "E", "\u1e16": "E", "\u0114": "E", "\u0116": "E", "\xcb": "E", "\u1eba": "E", "\u011a": "E", "\u0204": "E", "\u0206": "E", "\u1eb8": "E", "\u1ec6": "E", "\u0228": "E", "\u1e1c": "E", "\u0118": "E", "\u1e18": "E", "\u1e1a": "E", "\u0190": "E", "\u018e": "E", "\u24bb": "F", "\uff26": "F", "\u1e1e": "F", "\u0191": "F", "\ua77b": "F", "\u24bc": "G", "\uff27": "G", "\u01f4": "G", "\u011c": "G", "\u1e20": "G", "\u011e": "G", "\u0120": "G", "\u01e6": "G", "\u0122": "G", "\u01e4": "G", "\u0193": "G", "\ua7a0": "G", "\ua77d": "G", "\ua77e": "G", "\u24bd": "H", "\uff28": "H", "\u0124": "H", "\u1e22": "H", "\u1e26": "H", "\u021e": "H", "\u1e24": "H", "\u1e28": "H", "\u1e2a": "H", "\u0126": "H", "\u2c67": "H", "\u2c75": "H", "\ua78d": "H", "\u24be": "I", "\uff29": "I", "\xcc": "I", "\xcd": "I", "\xce": "I", "\u0128": "I", "\u012a": "I", "\u012c": "I", "\u0130": "I", "\xcf": "I", "\u1e2e": "I", "\u1ec8": "I", "\u01cf": "I", "\u0208": "I", "\u020a": "I", "\u1eca": "I", "\u012e": "I", "\u1e2c": "I", "\u0197": "I", "\u24bf": "J", "\uff2a": "J", "\u0134": "J", "\u0248": "J", "\u24c0": "K", "\uff2b": "K", "\u1e30": "K", "\u01e8": "K", "\u1e32": "K", "\u0136": "K", "\u1e34": "K", "\u0198": "K", "\u2c69": "K", "\ua740": "K", "\ua742": "K", "\ua744": "K", "\ua7a2": "K", "\u24c1": "L", "\uff2c": "L", "\u013f": "L", "\u0139": "L", "\u013d": "L", "\u1e36": "L", "\u1e38": "L", "\u013b": "L", "\u1e3c": "L", "\u1e3a": "L", "\u0141": "L", "\u023d": "L", "\u2c62": "L", "\u2c60": "L", "\ua748": "L", "\ua746": "L", "\ua780": "L", "\u01c7": "LJ", "\u01c8": "Lj", "\u24c2": "M", "\uff2d": "M", "\u1e3e": "M", "\u1e40": "M", "\u1e42": "M", "\u2c6e": "M", "\u019c": "M", "\u24c3": "N", "\uff2e": "N", "\u01f8": "N", "\u0143": "N", "\xd1": "N", "\u1e44": "N", "\u0147": "N", "\u1e46": "N", "\u0145": "N", "\u1e4a": "N", "\u1e48": "N", "\u0220": "N", "\u019d": "N", "\ua790": "N", "\ua7a4": "N", "\u01ca": "NJ", "\u01cb": "Nj", "\u24c4": "O", "\uff2f": "O", "\xd2": "O", "\xd3": "O", "\xd4": "O", "\u1ed2": "O", "\u1ed0": "O", "\u1ed6": "O", "\u1ed4": "O", "\xd5": "O", "\u1e4c": "O", "\u022c": "O", "\u1e4e": "O", "\u014c": "O", "\u1e50": "O", "\u1e52": "O", "\u014e": "O", "\u022e": "O", "\u0230": "O", "\xd6": "O", "\u022a": "O", "\u1ece": "O", "\u0150": "O", "\u01d1": "O", "\u020c": "O", "\u020e": "O", "\u01a0": "O", "\u1edc": "O", "\u1eda": "O", "\u1ee0": "O", "\u1ede": "O", "\u1ee2": "O", "\u1ecc": "O", "\u1ed8": "O", "\u01ea": "O", "\u01ec": "O", "\xd8": "O", "\u01fe": "O", "\u0186": "O", "\u019f": "O", "\ua74a": "O", "\ua74c": "O", "\u01a2": "OI", "\ua74e": "OO", "\u0222": "OU", "\u24c5": "P", "\uff30": "P", "\u1e54": "P", "\u1e56": "P", "\u01a4": "P", "\u2c63": "P", "\ua750": "P", "\ua752": "P", "\ua754": "P", "\u24c6": "Q", "\uff31": "Q", "\ua756": "Q", "\ua758": "Q", "\u024a": "Q", "\u24c7": "R", "\uff32": "R", "\u0154": "R", "\u1e58": "R", "\u0158": "R", "\u0210": "R", "\u0212": "R", "\u1e5a": "R", "\u1e5c": "R", "\u0156": "R", "\u1e5e": "R", "\u024c": "R", "\u2c64": "R", "\ua75a": "R", "\ua7a6": "R", "\ua782": "R", "\u24c8": "S", "\uff33": "S", "\u1e9e": "S", "\u015a": "S", "\u1e64": "S", "\u015c": "S", "\u1e60": "S", "\u0160": "S", "\u1e66": "S", "\u1e62": "S", "\u1e68": "S", "\u0218": "S", "\u015e": "S", "\u2c7e": "S", "\ua7a8": "S", "\ua784": "S", "\u24c9": "T", "\uff34": "T", "\u1e6a": "T", "\u0164": "T", "\u1e6c": "T", "\u021a": "T", "\u0162": "T", "\u1e70": "T", "\u1e6e": "T", "\u0166": "T", "\u01ac": "T", "\u01ae": "T", "\u023e": "T", "\ua786": "T", "\ua728": "TZ", "\u24ca": "U", "\uff35": "U", "\xd9": "U", "\xda": "U", "\xdb": "U", "\u0168": "U", "\u1e78": "U", "\u016a": "U", "\u1e7a": "U", "\u016c": "U", "\xdc": "U", "\u01db": "U", "\u01d7": "U", "\u01d5": "U", "\u01d9": "U", "\u1ee6": "U", "\u016e": "U", "\u0170": "U", "\u01d3": "U", "\u0214": "U", "\u0216": "U", "\u01af": "U", "\u1eea": "U", "\u1ee8": "U", "\u1eee": "U", "\u1eec": "U", "\u1ef0": "U", "\u1ee4": "U", "\u1e72": "U", "\u0172": "U", "\u1e76": "U", "\u1e74": "U", "\u0244": "U", "\u24cb": "V", "\uff36": "V", "\u1e7c": "V", "\u1e7e": "V", "\u01b2": "V", "\ua75e": "V", "\u0245": "V", "\ua760": "VY", "\u24cc": "W", "\uff37": "W", "\u1e80": "W", "\u1e82": "W", "\u0174": "W", "\u1e86": "W", "\u1e84": "W", "\u1e88": "W", "\u2c72": "W", "\u24cd": "X", "\uff38": "X", "\u1e8a": "X", "\u1e8c": "X", "\u24ce": "Y", "\uff39": "Y", "\u1ef2": "Y", "\xdd": "Y", "\u0176": "Y", "\u1ef8": "Y", "\u0232": "Y", "\u1e8e": "Y", "\u0178": "Y", "\u1ef6": "Y", "\u1ef4": "Y", "\u01b3": "Y", "\u024e": "Y", "\u1efe": "Y", "\u24cf": "Z", "\uff3a": "Z", "\u0179": "Z", "\u1e90": "Z", "\u017b": "Z", "\u017d": "Z", "\u1e92": "Z", "\u1e94": "Z", "\u01b5": "Z", "\u0224": "Z", "\u2c7f": "Z", "\u2c6b": "Z", "\ua762": "Z", "\u24d0": "a", "\uff41": "a", "\u1e9a": "a", "\xe0": "a", "\xe1": "a", "\xe2": "a", "\u1ea7": "a", "\u1ea5": "a", "\u1eab": "a", "\u1ea9": "a", "\xe3": "a", "\u0101": "a", "\u0103": "a", "\u1eb1": "a", "\u1eaf": "a", "\u1eb5": "a", "\u1eb3": "a", "\u0227": "a", "\u01e1": "a", "\xe4": "a", "\u01df": "a", "\u1ea3": "a", "\xe5": "a", "\u01fb": "a", "\u01ce": "a", "\u0201": "a", "\u0203": "a", "\u1ea1": "a", "\u1ead": "a", "\u1eb7": "a", "\u1e01": "a", "\u0105": "a", "\u2c65": "a", "\u0250": "a", "\ua733": "aa", "\xe6": "ae", "\u01fd": "ae", "\u01e3": "ae", "\ua735": "ao", "\ua737": "au", "\ua739": "av", "\ua73b": "av", "\ua73d": "ay", "\u24d1": "b", "\uff42": "b", "\u1e03": "b", "\u1e05": "b", "\u1e07": "b", "\u0180": "b", "\u0183": "b", "\u0253": "b", "\u24d2": "c", "\uff43": "c", "\u0107": "c", "\u0109": "c", "\u010b": "c", "\u010d": "c", "\xe7": "c", "\u1e09": "c", "\u0188": "c", "\u023c": "c", "\ua73f": "c", "\u2184": "c", "\u24d3": "d", "\uff44": "d", "\u1e0b": "d", "\u010f": "d", "\u1e0d": "d", "\u1e11": "d", "\u1e13": "d", "\u1e0f": "d", "\u0111": "d", "\u018c": "d", "\u0256": "d", "\u0257": "d", "\ua77a": "d", "\u01f3": "dz", "\u01c6": "dz", "\u24d4": "e", "\uff45": "e", "\xe8": "e", "\xe9": "e", "\xea": "e", "\u1ec1": "e", "\u1ebf": "e", "\u1ec5": "e", "\u1ec3": "e", "\u1ebd": "e", "\u0113": "e", "\u1e15": "e", "\u1e17": "e", "\u0115": "e", "\u0117": "e", "\xeb": "e", "\u1ebb": "e", "\u011b": "e", "\u0205": "e", "\u0207": "e", "\u1eb9": "e", "\u1ec7": "e", "\u0229": "e", "\u1e1d": "e", "\u0119": "e", "\u1e19": "e", "\u1e1b": "e", "\u0247": "e", "\u025b": "e", "\u01dd": "e", "\u24d5": "f", "\uff46": "f", "\u1e1f": "f", "\u0192": "f", "\ua77c": "f", "\u24d6": "g", "\uff47": "g", "\u01f5": "g", "\u011d": "g", "\u1e21": "g", "\u011f": "g", "\u0121": "g", "\u01e7": "g", "\u0123": "g", "\u01e5": "g", "\u0260": "g", "\ua7a1": "g", "\u1d79": "g", "\ua77f": "g", "\u24d7": "h", "\uff48": "h", "\u0125": "h", "\u1e23": "h", "\u1e27": "h", "\u021f": "h", "\u1e25": "h", "\u1e29": "h", "\u1e2b": "h", "\u1e96": "h", "\u0127": "h", "\u2c68": "h", "\u2c76": "h", "\u0265": "h", "\u0195": "hv", "\u24d8": "i", "\uff49": "i", "\xec": "i", "\xed": "i", "\xee": "i", "\u0129": "i", "\u012b": "i", "\u012d": "i", "\xef": "i", "\u1e2f": "i", "\u1ec9": "i", "\u01d0": "i", "\u0209": "i", "\u020b": "i", "\u1ecb": "i", "\u012f": "i", "\u1e2d": "i", "\u0268": "i", "\u0131": "i", "\u24d9": "j", "\uff4a": "j", "\u0135": "j", "\u01f0": "j", "\u0249": "j", "\u24da": "k", "\uff4b": "k", "\u1e31": "k", "\u01e9": "k", "\u1e33": "k", "\u0137": "k", "\u1e35": "k", "\u0199": "k", "\u2c6a": "k", "\ua741": "k", "\ua743": "k", "\ua745": "k", "\ua7a3": "k", "\u24db": "l", "\uff4c": "l", "\u0140": "l", "\u013a": "l", "\u013e": "l", "\u1e37": "l", "\u1e39": "l", "\u013c": "l", "\u1e3d": "l", "\u1e3b": "l", "\u017f": "l", "\u0142": "l", "\u019a": "l", "\u026b": "l", "\u2c61": "l", "\ua749": "l", "\ua781": "l", "\ua747": "l", "\u01c9": "lj", "\u24dc": "m", "\uff4d": "m", "\u1e3f": "m", "\u1e41": "m", "\u1e43": "m", "\u0271": "m", "\u026f": "m", "\u24dd": "n", "\uff4e": "n", "\u01f9": "n", "\u0144": "n", "\xf1": "n", "\u1e45": "n", "\u0148": "n", "\u1e47": "n", "\u0146": "n", "\u1e4b": "n", "\u1e49": "n", "\u019e": "n", "\u0272": "n", "\u0149": "n", "\ua791": "n", "\ua7a5": "n", "\u01cc": "nj", "\u24de": "o", "\uff4f": "o", "\xf2": "o", "\xf3": "o", "\xf4": "o", "\u1ed3": "o", "\u1ed1": "o", "\u1ed7": "o", "\u1ed5": "o", "\xf5": "o", "\u1e4d": "o", "\u022d": "o", "\u1e4f": "o", "\u014d": "o", "\u1e51": "o", "\u1e53": "o", "\u014f": "o", "\u022f": "o", "\u0231": "o", "\xf6": "o", "\u022b": "o", "\u1ecf": "o", "\u0151": "o", "\u01d2": "o", "\u020d": "o", "\u020f": "o", "\u01a1": "o", "\u1edd": "o", "\u1edb": "o", "\u1ee1": "o", "\u1edf": "o", "\u1ee3": "o", "\u1ecd": "o", "\u1ed9": "o", "\u01eb": "o", "\u01ed": "o", "\xf8": "o", "\u01ff": "o", "\u0254": "o", "\ua74b": "o", "\ua74d": "o", "\u0275": "o", "\u01a3": "oi", "\u0223": "ou", "\ua74f": "oo", "\u24df": "p", "\uff50": "p", "\u1e55": "p", "\u1e57": "p", "\u01a5": "p", "\u1d7d": "p", "\ua751": "p", "\ua753": "p", "\ua755": "p", "\u24e0": "q", "\uff51": "q", "\u024b": "q", "\ua757": "q", "\ua759": "q", "\u24e1": "r", "\uff52": "r", "\u0155": "r", "\u1e59": "r", "\u0159": "r", "\u0211": "r", "\u0213": "r", "\u1e5b": "r", "\u1e5d": "r", "\u0157": "r", "\u1e5f": "r", "\u024d": "r", "\u027d": "r", "\ua75b": "r", "\ua7a7": "r", "\ua783": "r", "\u24e2": "s", "\uff53": "s", "\xdf": "s", "\u015b": "s", "\u1e65": "s", "\u015d": "s", "\u1e61": "s", "\u0161": "s", "\u1e67": "s", "\u1e63": "s", "\u1e69": "s", "\u0219": "s", "\u015f": "s", "\u023f": "s", "\ua7a9": "s", "\ua785": "s", "\u1e9b": "s", "\u24e3": "t", "\uff54": "t", "\u1e6b": "t", "\u1e97": "t", "\u0165": "t", "\u1e6d": "t", "\u021b": "t", "\u0163": "t", "\u1e71": "t", "\u1e6f": "t", "\u0167": "t", "\u01ad": "t", "\u0288": "t", "\u2c66": "t", "\ua787": "t", "\ua729": "tz", "\u24e4": "u", "\uff55": "u", "\xf9": "u", "\xfa": "u", "\xfb": "u", "\u0169": "u", "\u1e79": "u", "\u016b": "u", "\u1e7b": "u", "\u016d": "u", "\xfc": "u", "\u01dc": "u", "\u01d8": "u", "\u01d6": "u", "\u01da": "u", "\u1ee7": "u", "\u016f": "u", "\u0171": "u", "\u01d4": "u", "\u0215": "u", "\u0217": "u", "\u01b0": "u", "\u1eeb": "u", "\u1ee9": "u", "\u1eef": "u", "\u1eed": "u", "\u1ef1": "u", "\u1ee5": "u", "\u1e73": "u", "\u0173": "u", "\u1e77": "u", "\u1e75": "u", "\u0289": "u", "\u24e5": "v", "\uff56": "v", "\u1e7d": "v", "\u1e7f": "v", "\u028b": "v", "\ua75f": "v", "\u028c": "v", "\ua761": "vy", "\u24e6": "w", "\uff57": "w", "\u1e81": "w", "\u1e83": "w", "\u0175": "w", "\u1e87": "w", "\u1e85": "w", "\u1e98": "w", "\u1e89": "w", "\u2c73": "w", "\u24e7": "x", "\uff58": "x", "\u1e8b": "x", "\u1e8d": "x", "\u24e8": "y", "\uff59": "y", "\u1ef3": "y", "\xfd": "y", "\u0177": "y", "\u1ef9": "y", "\u0233": "y", "\u1e8f": "y", "\xff": "y", "\u1ef7": "y", "\u1e99": "y", "\u1ef5": "y", "\u01b4": "y", "\u024f": "y", "\u1eff": "y", "\u24e9": "z", "\uff5a": "z", "\u017a": "z", "\u1e91": "z", "\u017c": "z", "\u017e": "z", "\u1e93": "z", "\u1e95": "z", "\u01b6": "z", "\u0225": "z", "\u0240": "z", "\u2c6c": "z", "\ua763": "z", "\u0386": "\u0391", "\u0388": "\u0395", "\u0389": "\u0397", "\u038a": "\u0399", "\u03aa": "\u0399", "\u038c": "\u039f", "\u038e": "\u03a5", "\u03ab": "\u03a5", "\u038f": "\u03a9", "\u03ac": "\u03b1", "\u03ad": "\u03b5", "\u03ae": "\u03b7", "\u03af": "\u03b9", "\u03ca": "\u03b9", "\u0390": "\u03b9", "\u03cc": "\u03bf", "\u03cd": "\u03c5", "\u03cb": "\u03c5", "\u03b0": "\u03c5", "\u03c9": "\u03c9", "\u03c2": "\u03c3"};
        av = aE(document), ay = function () {
            var b = 1;
            return function () {
                return b++
            }
        }(), aB = P(Object, {bind: function (d) {
            var c = this;
            return function () {
                d.apply(c, arguments)
            }
        }, init: function (l) {
            var k, j, g = ".select2-results";
            this.opts = l = this.prepareOpts(l), this.id = l.id, l.element.data("select2") !== aD && null !== l.element.data("select2") && l.element.data("select2").destroy(), this.container = this.createContainer(), this.liveRegion = aE("<span>", {role: "status", "aria-live": "polite"}).addClass("select2-hidden-accessible").appendTo(document.body), this.containerId = "s2id_" + (l.element.attr("id") || "autogen" + ay()), this.containerEventName = this.containerId.replace(/([.])/g, "_").replace(/([;&,\-\.\+\*\~':"\!\^#$%@\[\]\(\)=>\|])/g, "\\$1"), this.container.attr("id", this.containerId), this.container.attr("title", l.element.attr("title")), this.body = aE("body"), aa(this.container, this.opts.element, this.opts.adaptContainerCssClass), this.container.attr("style", l.element.attr("style")), this.container.css(T(l.containerCss, this.opts.element)), this.container.addClass(T(l.containerCssClass, this.opts.element)), this.elementTabIndex = this.opts.element.attr("tabindex"), this.opts.element.data("select2", this).attr("tabindex", "-1").before(this.container).on("click.select2", ad), this.container.data("select2", this), this.dropdown = this.container.find(".select2-drop"), aa(this.dropdown, this.opts.element, this.opts.adaptDropdownCssClass), this.dropdown.addClass(T(l.dropdownCssClass, this.opts.element)), this.dropdown.data("select2", this), this.dropdown.on("click", ad), this.results = k = this.container.find(g), this.search = j = this.container.find("input.select2-input"), this.queryCount = 0, this.resultsPage = 0, this.context = null, this.initContainer(), this.container.on("click", ad), ai(this.results), this.dropdown.on("mousemove-filtered", g, this.bind(this.highlightUnderEvent)), this.dropdown.on("touchstart touchmove touchend", g, this.bind(function (c) {
                this._touchEvent = !0, this.highlightUnderEvent(c)
            })), this.dropdown.on("touchmove", g, this.bind(this.touchMoved)), this.dropdown.on("touchstart touchend", g, this.bind(this.clearTouchMoved)), this.dropdown.on("click", this.bind(function () {
                this._touchEvent && (this._touchEvent = !1, this.selectHighlighted())
            })), ag(80, this.results), this.dropdown.on("scroll-debounced", g, this.bind(this.loadMoreIfNeeded)), aE(this.container).on("change", ".select2-input", function (c) {
                c.stopPropagation()
            }), aE(this.dropdown).on("change", ".select2-input", function (c) {
                c.stopPropagation()
            }), aE.fn.mousewheel && k.mousewheel(function (h, d, n, m) {
                var i = k.scrollTop();
                m > 0 && 0 >= i - m ? (k.scrollTop(0), ad(h)) : 0 > m && k.get(0).scrollHeight - k.scrollTop() + m <= k.height() && (k.scrollTop(k.get(0).scrollHeight - k.height()), ad(h))
            }), aj(j), j.on("keyup-change input paste", this.bind(this.updateResults)), j.on("focus", function () {
                j.addClass("select2-focused")
            }), j.on("blur", function () {
                j.removeClass("select2-focused")
            }), this.dropdown.on("mouseup", g, this.bind(function (c) {
                aE(c.target).closest(".select2-result-selectable").length > 0 && (this.highlightUnderEvent(c), this.selectHighlighted(c))
            })), this.dropdown.on("click mouseup mousedown touchstart touchend focusin", function (c) {
                c.stopPropagation()
            }), this.nextSearchTerm = aD, aE.isFunction(this.opts.initSelection) && (this.initSelection(), this.monitorSource()), null !== l.maximumInputLength && this.search.attr("maxlength", l.maximumInputLength);
            var b = l.element.prop("disabled");
            b === aD && (b = !1), this.enable(!b);
            var a = l.element.prop("readonly");
            a === aD && (a = !1), this.readonly(a), au = au || an(), this.autofocus = l.element.prop("autofocus"), l.element.prop("autofocus", !1), this.autofocus && this.focus(), this.search.attr("placeholder", l.searchInputPlaceholder)
        }, destroy: function () {
            var b = this.opts.element, f = b.data("select2"), e = this;
            this.close(), b.length && b[0].detachEvent && b.each(function () {
                this.detachEvent("onpropertychange", e._sync)
            }), this.propertyObserver && (this.propertyObserver.disconnect(), this.propertyObserver = null), this._sync = null, f !== aD && (f.container.remove(), f.liveRegion.remove(), f.dropdown.remove(), b.removeClass("select2-offscreen").removeData("select2").off(".select2").prop("autofocus", this.autofocus || !1), this.elementTabIndex ? b.attr({tabindex: this.elementTabIndex}) : b.removeAttr("tabindex"), b.show()), Q.call(this, "container", "liveRegion", "dropdown", "results", "search")
        }, optionToData: function (b) {
            return b.is("option") ? {id: b.prop("value"), text: b.text(), element: b.get(), css: b.attr("class"), disabled: b.prop("disabled"), locked: am(b.attr("locked"), "locked") || am(b.data("locked"), !0)} : b.is("optgroup") ? {text: b.attr("label"), children: [], element: b.get(), css: b.attr("class")} : void 0
        }, prepareOpts: function (l) {
            var k, j, g, b, a = this;
            if (k = l.element, "select" === k.get(0).tagName.toLowerCase() && (this.select = j = l.element), j && aE.each(["id", "multiple", "ajax", "query", "createSearchChoice", "initSelection", "data", "tags"], function () {
                if (this in l) {
                    throw new Error("Option '" + this + "' is not allowed for Select2 when attached to a <select> element.")
                }
            }), l = aE.extend({}, {populateResults: function (p, o, n) {
                var m, i = this.opts.id, c = this.liveRegion;
                m = function (D, C, B) {
                    var A, z, y, x, h, f, I, H, G, F;
                    D = l.sortResults(D, C, n);
                    var E = [];
                    for (A = 0, z = D.length; z > A; A += 1) {
                        y = D[A], h = y.disabled === !0, x = !h && i(y) !== aD, f = y.children && y.children.length > 0, I = aE("<li></li>"), I.addClass("select2-results-dept-" + B), I.addClass("select2-result"), I.addClass(x ? "select2-result-selectable" : "select2-result-unselectable"), h && I.addClass("select2-disabled"), f && I.addClass("select2-result-with-children"), I.addClass(a.opts.formatResultCssClass(y)), I.attr("role", "presentation"), H = aE(document.createElement("div")), H.addClass("select2-result-label"), H.attr("id", "select2-result-label-" + ay()), H.attr("role", "option"), F = l.formatResult(y, H, n, a.opts.escapeMarkup), F !== aD && (H.html(F), I.append(H)), f && (G = aE("<ul></ul>"), G.addClass("select2-result-sub"), m(y.children, G, B + 1), I.append(G)), I.data("select2-data", y), E.push(I[0])
                    }
                    C.append(E), c.text(l.formatMatches(D.length))
                }, m(o, p, 0)
            }}, aE.fn.select2.defaults, l), "function" != typeof l.id && (g = l.id, l.id = function (c) {
                return c[g]
            }), aE.isArray(l.element.data("select2Tags"))) {
                if ("tags" in l) {
                    throw"tags specified as both an attribute 'data-select2-tags' and in options of Select2 " + l.element.attr("id")
                }
                l.tags = l.element.data("select2Tags")
            }
            if (j ? (l.query = this.bind(function (d) {
                var n, m, i, p = {results: [], more: !1}, o = d.term;
                i = function (e, h) {
                    var f;
                    e.is("option") ? d.matcher(o, e.text(), e) && h.push(a.optionToData(e)) : e.is("optgroup") && (f = a.optionToData(e), e.children().each2(function (q, c) {
                        i(c, f.children)
                    }), f.children.length > 0 && h.push(f))
                }, n = k.children(), this.getPlaceholder() !== aD && n.length > 0 && (m = this.getPlaceholderOption(), m && (n = n.not(m))), n.each2(function (e, c) {
                    i(c, p.results)
                }), d.callback(p)
            }), l.id = function (c) {
                return c.id
            }) : "query" in l || ("ajax" in l ? (b = l.element.data("ajax-url"), b && b.length > 0 && (l.ajax.url = b), l.query = X.call(l.element, l.ajax)) : "data" in l ? l.query = W(l.data) : "tags" in l && (l.query = V(l.tags), l.createSearchChoice === aD && (l.createSearchChoice = function (c) {
                return{id: aE.trim(c), text: aE.trim(c)}
            }), l.initSelection === aD && (l.initSelection = function (c, h) {
                var f = [];
                aE(al(c.val(), l.separator)).each(function () {
                    var e = {id: this, text: this}, i = l.tags;
                    aE.isFunction(i) && (i = i()), aE(i).each(function () {
                        return am(this.id, e.id) ? (e = this, !1) : void 0
                    }), f.push(e)
                }), h(f)
            }))), "function" != typeof l.query) {
                throw"query function not defined for Select2 " + l.element.attr("id")
            }
            if ("top" === l.createSearchChoicePosition) {
                l.createSearchChoicePosition = function (d, c) {
                    d.unshift(c)
                }
            } else {
                if ("bottom" === l.createSearchChoicePosition) {
                    l.createSearchChoicePosition = function (d, c) {
                        d.push(c)
                    }
                } else {
                    if ("function" != typeof l.createSearchChoicePosition) {
                        throw"invalid createSearchChoicePosition option must be 'top', 'bottom' or a custom function"
                    }
                }
            }
            return l
        }, monitorSource: function () {
            var b, f = this.opts.element, a = this;
            f.on("change.select2", this.bind(function () {
                this.opts.element.data("select2-change-triggered") !== !0 && this.initSelection()
            })), this._sync = this.bind(function () {
                var c = f.prop("disabled");
                c === aD && (c = !1), this.enable(!c);
                var e = f.prop("readonly");
                e === aD && (e = !1), this.readonly(e), aa(this.container, this.opts.element, this.opts.adaptContainerCssClass), this.container.addClass(T(this.opts.containerCssClass, this.opts.element)), aa(this.dropdown, this.opts.element, this.opts.adaptDropdownCssClass), this.dropdown.addClass(T(this.opts.dropdownCssClass, this.opts.element))
            }), f.length && f[0].attachEvent && f.each(function () {
                this.attachEvent("onpropertychange", a._sync)
            }), b = window.MutationObserver || window.WebKitMutationObserver || window.MozMutationObserver, b !== aD && (this.propertyObserver && (delete this.propertyObserver, this.propertyObserver = null), this.propertyObserver = new b(function (c) {
                aE.each(c, a._sync)
            }), this.propertyObserver.observe(f.get(0), {attributes: !0, subtree: !1}))
        }, triggerSelect: function (a) {
            var d = aE.Event("select2-selecting", {val: this.id(a), object: a, choice: a});
            return this.opts.element.trigger(d), !d.isDefaultPrevented()
        }, triggerChange: function (a) {
            a = a || {}, a = aE.extend({}, a, {type: "change", val: this.val()}), this.opts.element.data("select2-change-triggered", !0), this.opts.element.trigger(a), this.opts.element.data("select2-change-triggered", !1), this.opts.element.click(), this.opts.blurOnChange && this.opts.element.blur()
        }, isInterfaceEnabled: function () {
            return this.enabledInterface === !0
        }, enableInterface: function () {
            var d = this._enabled && !this._readonly, c = !d;
            return d === this.enabledInterface ? !1 : (this.container.toggleClass("select2-container-disabled", c), this.close(), this.enabledInterface = d, !0)
        }, enable: function (b) {
            b === aD && (b = !0), this._enabled !== b && (this._enabled = b, this.opts.element.prop("disabled", !b), this.enableInterface())
        }, disable: function () {
            this.enable(!1)
        }, readonly: function (b) {
            b === aD && (b = !1), this._readonly !== b && (this._readonly = b, this.opts.element.prop("readonly", b), this.enableInterface())
        }, opened: function () {
            return this.container ? this.container.hasClass("select2-dropdown-open") : !1
        }, positionDropdown: function () {
            var A, z, y, k, a, aH = this.dropdown, aG = this.container.offset(), aF = this.container.outerHeight(!1), O = this.container.outerWidth(!1), N = aH.outerHeight(!1), M = aE(window), L = M.width(), K = M.height(), J = M.scrollLeft() + L, I = M.scrollTop() + K, H = aG.top + aF, G = aG.left, F = I >= H + N, E = aG.top - N >= M.scrollTop(), D = aH.outerWidth(!1), C = J >= G + D, B = aH.hasClass("select2-drop-above");
            B ? (z = !0, !E && F && (y = !0, z = !1)) : (z = !1, !F && E && (y = !0, z = !0)), y && (aH.hide(), aG = this.container.offset(), aF = this.container.outerHeight(!1), O = this.container.outerWidth(!1), N = aH.outerHeight(!1), J = M.scrollLeft() + L, I = M.scrollTop() + K, H = aG.top + aF, G = aG.left, D = aH.outerWidth(!1), C = J >= G + D, aH.show(), this.focusSearch()), this.opts.dropdownAutoWidth ? (a = aE(".select2-results", aH)[0], aH.addClass("select2-drop-auto-width"), aH.css("width", ""), D = aH.outerWidth(!1) + (a.scrollHeight === a.clientHeight ? 0 : au.width), D > O ? O = D : D = O, N = aH.outerHeight(!1), C = J >= G + D) : this.container.removeClass("select2-drop-auto-width"), "static" !== this.body.css("position") && (A = this.body.offset(), H -= A.top, G -= A.left), C || (G = aG.left + this.container.outerWidth(!1) - D), k = {left: G, width: O}, z ? (k.top = aG.top - N, k.bottom = "auto", this.container.addClass("select2-drop-above"), aH.addClass("select2-drop-above")) : (k.top = H, k.bottom = "auto", this.container.removeClass("select2-drop-above"), aH.removeClass("select2-drop-above")), k = aE.extend(k, T(this.opts.dropdownCss, this.opts.element)), aH.css(k)
        }, shouldOpen: function () {
            var a;
            return this.opened() ? !1 : this._enabled === !1 || this._readonly === !0 ? !1 : (a = aE.Event("select2-opening"), this.opts.element.trigger(a), !a.isDefaultPrevented())
        }, clearDropdownAlignmentPreference: function () {
            this.container.removeClass("select2-drop-above"), this.dropdown.removeClass("select2-drop-above")
        }, open: function () {
            return this.shouldOpen() ? (this.opening(), av.on("mousemove.select2Event", function (b) {
                aw.x = b.pageX, aw.y = b.pageY
            }), !0) : !1
        }, opening: function () {
            var i, a = this.containerEventName, l = "scroll." + a, k = "resize." + a, j = "orientationchange." + a;
            this.container.addClass("select2-dropdown-open").addClass("select2-container-active"), this.clearDropdownAlignmentPreference(), this.dropdown[0] !== this.body.children().last()[0] && this.dropdown.detach().appendTo(this.body), i = aE("#select2-drop-mask"), 0 == i.length && (i = aE(document.createElement("div")), i.attr("id", "select2-drop-mask").attr("class", "select2-drop-mask"), i.hide(), i.appendTo(this.body), i.on("mousedown touchstart click", function (e) {
                aq(i);
                var f, g = aE("#select2-drop");
                g.length > 0 && (f = g.data("select2"), f.opts.selectOnBlur && f.selectHighlighted({noFocus: !0}), f.close(), e.preventDefault(), e.stopPropagation())
            })), this.dropdown.prev()[0] !== i[0] && this.dropdown.before(i), aE("#select2-drop").removeAttr("id"), this.dropdown.attr("id", "select2-drop"), i.show(), this.positionDropdown(), this.dropdown.show(), this.positionDropdown(), this.dropdown.addClass("select2-drop-active");
            var h = this;
            this.container.parents().add(window).each(function () {
                aE(this).on(k + " " + l + " " + j, function () {
                    h.opened() && h.positionDropdown()
                })
            })
        }, close: function () {
            if (this.opened()) {
                var a = this.containerEventName, h = "scroll." + a, g = "resize." + a, f = "orientationchange." + a;
                this.container.parents().add(window).each(function () {
                    aE(this).off(h).off(g).off(f)
                }), this.clearDropdownAlignmentPreference(), aE("#select2-drop-mask").hide(), this.dropdown.removeAttr("id"), this.dropdown.hide(), this.container.removeClass("select2-dropdown-open").removeClass("select2-container-active"), this.results.empty(), av.off("mousemove.select2Event"), this.clearSearch(), this.search.removeClass("select2-active"), this.opts.element.trigger(aE.Event("select2-close"))
            }
        }, externalSearch: function (b) {
            this.open(), this.search.val(b), this.updateResults(!1)
        }, clearSearch: function () {
        }, getMaximumSelectionSize: function () {
            return T(this.opts.maximumSelectionSize, this.opts.element)
        }, ensureHighlightVisible: function () {
            var q, p, o, n, m, l, k, a, r = this.results;
            if (p = this.highlight(), !(0 > p)) {
                if (0 == p) {
                    return r.scrollTop(0), void 0
                }
                q = this.findHighlightableChoices().find(".select2-result-label"), o = aE(q[p]), a = (o.offset() || {}).top || 0, n = a + o.outerHeight(!0), p === q.length - 1 && (k = r.find("li.select2-more-results"), k.length > 0 && (n = k.offset().top + k.outerHeight(!0))), m = r.offset().top + r.outerHeight(!0), n > m && r.scrollTop(r.scrollTop() + (n - m)), l = a - r.offset().top, 0 > l && "none" != o.css("display") && r.scrollTop(r.scrollTop() + l)
            }
        }, findHighlightableChoices: function () {
            return this.results.find(".select2-result-selectable:not(.select2-disabled):not(.select2-selected)")
        }, moveHighlight: function (a) {
            for (var h = this.findHighlightableChoices(), g = this.highlight(); g > -1 && g < h.length;) {
                g += a;
                var f = aE(h[g]);
                if (f.hasClass("select2-result-selectable") && !f.hasClass("select2-disabled") && !f.hasClass("select2-selected")) {
                    this.highlight(g);
                    break
                }
            }
        }, highlight: function (a) {
            var g, f, h = this.findHighlightableChoices();
            return 0 === arguments.length ? ao(h.filter(".select2-highlighted")[0], h.get()) : (a >= h.length && (a = h.length - 1), 0 > a && (a = 0), this.removeHighlight(), g = aE(h[a]), g.addClass("select2-highlighted"), this.search.attr("aria-activedescendant", g.find(".select2-result-label").attr("id")), this.ensureHighlightVisible(), this.liveRegion.text(g.text()), f = g.data("select2-data"), f && this.opts.element.trigger({type: "select2-highlight", val: this.id(f), choice: f}), void 0)
        }, removeHighlight: function () {
            this.results.find(".select2-highlighted").removeClass("select2-highlighted")
        }, touchMoved: function () {
            this._touchMoved = !0
        }, clearTouchMoved: function () {
            this._touchMoved = !1
        }, countSelectableResults: function () {
            return this.findHighlightableChoices().length
        }, highlightUnderEvent: function (a) {
            var f = aE(a.target).closest(".select2-result-selectable");
            if (f.length > 0 && !f.is(".select2-highlighted")) {
                var e = this.findHighlightableChoices();
                this.highlight(e.index(f))
            } else {
                0 == f.length && this.removeHighlight()
            }
        }, loadMoreIfNeeded: function () {
            var n, i = this.results, h = i.find("li.select2-more-results"), m = this.resultsPage + 1, l = this, k = this.search.val(), j = this.context;
            0 !== h.length && (n = h.offset().top - i.offset().top - i.height(), n <= this.opts.loadMorePadding && (h.addClass("select2-active"), this.opts.query({element: this.opts.element, term: k, page: m, context: j, matcher: this.opts.matcher, callback: this.bind(function (a) {
                l.opened() && (l.opts.populateResults.call(this, i, a.results, {term: k, page: m, context: j}), l.postprocessResults(a, !1, !1), a.more === !0 ? (h.detach().appendTo(i).text(T(l.opts.formatLoadMore, l.opts.element, m + 1)), window.setTimeout(function () {
                    l.loadMoreIfNeeded()
                }, 10)) : h.remove(), l.positionDropdown(), l.resultsPage = m, l.context = a.context, this.opts.element.trigger({type: "select2-loaded", items: a}))
            })})))
        }, tokenize: function () {
        }, updateResults: function (z) {
            function p() {
                y.removeClass("select2-active"), u.positionDropdown(), x.find(".select2-no-results,.select2-selection-limit,.select2-searching").length ? u.liveRegion.text(x.text()) : u.liveRegion.text(u.opts.formatMatches(x.find(".select2-result-selectable").length))
            }

            function b(c) {
                x.html(c), p()
            }

            var v, t, q, y = this.search, x = this.results, w = this.opts, u = this, s = y.val(), r = aE.data(this.container, "select2-last-term");
            if ((z === !0 || !r || !am(s, r)) && (aE.data(this.container, "select2-last-term", s), z === !0 || this.showSearchInput !== !1 && this.opened())) {
                q = ++this.queryCount;
                var a = this.getMaximumSelectionSize();
                if (a >= 1 && (v = this.data(), aE.isArray(v) && v.length >= a && U(w.formatSelectionTooBig, "formatSelectionTooBig"))) {
                    return b("<li class='select2-selection-limit'>" + T(w.formatSelectionTooBig, w.element, a) + "</li>"), void 0
                }
                if (y.val().length < w.minimumInputLength) {
                    return U(w.formatInputTooShort, "formatInputTooShort") ? b("<li class='select2-no-results'>" + T(w.formatInputTooShort, w.element, y.val(), w.minimumInputLength) + "</li>") : b(""), z && this.showSearch && this.showSearch(!0), void 0
                }
                if (w.maximumInputLength && y.val().length > w.maximumInputLength) {
                    return U(w.formatInputTooLong, "formatInputTooLong") ? b("<li class='select2-no-results'>" + T(w.formatInputTooLong, w.element, y.val(), w.maximumInputLength) + "</li>") : b(""), void 0
                }
                w.formatSearching && 0 === this.findHighlightableChoices().length && b("<li class='select2-searching'>" + T(w.formatSearching, w.element) + "</li>"), y.addClass("select2-active"), this.removeHighlight(), t = this.tokenize(), t != aD && null != t && y.val(t), this.resultsPage = 1, w.query({element: w.element, term: y.val(), page: this.resultsPage, context: null, matcher: w.matcher, callback: this.bind(function (d) {
                    var c;
                    if (q == this.queryCount) {
                        if (!this.opened()) {
                            return this.search.removeClass("select2-active"), void 0
                        }
                        if (d.hasError !== aD && U(w.formatAjaxError, "formatAjaxError")) {
                            return b("<li class='select2-ajax-error'>" + T(w.formatAjaxError, w.element, d.jqXHR, d.textStatus, d.errorThrown) + "</li>"), void 0
                        }
                        if (this.context = d.context === aD ? null : d.context, this.opts.createSearchChoice && "" !== y.val() && (c = this.opts.createSearchChoice.call(u, y.val(), d.results), c !== aD && null !== c && u.id(c) !== aD && null !== u.id(c) && 0 === aE(d.results).filter(function () {
                            return am(u.id(this), u.id(c))
                        }).length && this.opts.createSearchChoicePosition(d.results, c)), 0 === d.results.length && U(w.formatNoMatches, "formatNoMatches")) {
                            return b("<li class='select2-no-results'>" + T(w.formatNoMatches, w.element, y.val()) + "</li>"), void 0
                        }
                        x.empty(), u.opts.populateResults.call(this, x, d.results, {term: y.val(), page: this.resultsPage, context: null}), d.more === !0 && U(w.formatLoadMore, "formatLoadMore") && (x.append("<li class='select2-more-results'>" + w.escapeMarkup(T(w.formatLoadMore, w.element, this.resultsPage)) + "</li>"), window.setTimeout(function () {
                            u.loadMoreIfNeeded()
                        }, 10)), this.postprocessResults(d, z), p(), this.opts.element.trigger({type: "select2-loaded", items: d})
                    }
                })})
            }
        }, cancel: function () {
            this.close()
        }, blur: function () {
            this.opts.selectOnBlur && this.selectHighlighted({noFocus: !0}), this.close(), this.container.removeClass("select2-container-active"), this.search[0] === document.activeElement && this.search.blur(), this.clearSearch(), this.selection.find(".select2-search-choice-focus").removeClass("select2-search-choice-focus")
        }, focusSearch: function () {
            af(this.search)
        }, selectHighlighted: function (f) {
            if (this._touchMoved) {
                return this.clearTouchMoved(), void 0
            }
            var e = this.highlight(), h = this.results.find(".select2-highlighted"), g = h.closest(".select2-result").data("select2-data");
            g ? (this.highlight(e), this.onSelect(g, f)) : f && f.noFocus && this.close()
        }, getPlaceholder: function () {
            var b;
            return this.opts.element.attr("placeholder") || this.opts.element.attr("data-placeholder") || this.opts.element.data("placeholder") || this.opts.placeholder || ((b = this.getPlaceholderOption()) !== aD ? b.text() : aD)
        }, getPlaceholderOption: function () {
            if (this.select) {
                var a = this.select.children("option").first();
                if (this.opts.placeholderOption !== aD) {
                    return"first" === this.opts.placeholderOption && a || "function" == typeof this.opts.placeholderOption && this.opts.placeholderOption(this.select)
                }
                if ("" === aE.trim(a.text()) && "" === a.val()) {
                    return a
                }
            }
        }, initContainerWidth: function () {
            function b() {
                var n, m, l, k, j, i;
                if ("off" === this.opts.width) {
                    return null
                }
                if ("element" === this.opts.width) {
                    return 0 === this.opts.element.outerWidth(!1) ? "auto" : this.opts.element.outerWidth(!1) + "px"
                }
                if ("copy" === this.opts.width || "resolve" === this.opts.width) {
                    if (n = this.opts.element.attr("style"), n !== aD) {
                        for (m = n.split(";"), k = 0, j = m.length; j > k; k += 1) {
                            if (i = m[k].replace(/\s/g, ""), l = i.match(/^width:(([-+]?([0-9]*\.)?[0-9]+)(px|em|ex|%|in|cm|mm|pt|pc))/i), null !== l && l.length >= 1) {
                                return l[1]
                            }
                        }
                    }
                    return"resolve" === this.opts.width ? (n = this.opts.element.css("width"), n.indexOf("%") > 0 ? n : 0 === this.opts.element.outerWidth(!1) ? "auto" : this.opts.element.outerWidth(!1) + "px") : null
                }
                return aE.isFunction(this.opts.width) ? this.opts.width() : this.opts.width
            }

            var a = b.call(this);
            null !== a && this.container.css("width", a)
        }}), aA = P(aB, {createContainer: function () {
            var a = aE(document.createElement("div")).attr({"class": "select2-container"}).html(["<a href='javascript:void(0)' class='select2-choice' tabindex='-1'>", "   <span class='select2-chosen'>&#160;</span><abbr class='select2-search-choice-close'></abbr>", "   <span class='select2-arrow' role='presentation'><b role='presentation'></b></span>", "</a>", "<label for='' class='select2-offscreen'></label>", "<input class='select2-focusser select2-offscreen' type='text' aria-haspopup='true' role='button' />", "<div class='select2-drop select2-display-none'>", "   <div class='select2-search'>", "       <label for='' class='select2-offscreen'></label>", "       <input type='text' autocomplete='off' autocorrect='off' autocapitalize='off' spellcheck='false' class='select2-input' role='combobox' aria-expanded='true'", "       aria-autocomplete='list' />", "   </div>", "   <ul class='select2-results' role='listbox'>", "   </ul>", "</div>"].join(""));
            return a
        }, enableInterface: function () {
            this.parent.enableInterface.apply(this, arguments) && this.focusser.prop("disabled", !this.isInterfaceEnabled())
        }, opening: function () {
            var f, b, a;
            this.opts.minimumResultsForSearch >= 0 && this.showSearch(!0), this.parent.opening.apply(this, arguments), this.showSearchInput !== !1 && this.search.val(this.focusser.val()), this.opts.shouldFocusInput(this) && (this.search.focus(), f = this.search.get(0), f.createTextRange ? (b = f.createTextRange(), b.collapse(!1), b.select()) : f.setSelectionRange && (a = this.search.val().length, f.setSelectionRange(a, a))), "" === this.search.val() && this.nextSearchTerm != aD && (this.search.val(this.nextSearchTerm), this.search.select()), this.focusser.prop("disabled", !0).val(""), this.updateResults(!0), this.opts.element.trigger(aE.Event("select2-open"))
        }, close: function () {
            this.opened() && (this.parent.close.apply(this, arguments), this.focusser.prop("disabled", !1), this.opts.shouldFocusInput(this) && this.focusser.focus())
        }, focus: function () {
            this.opened() ? this.close() : (this.focusser.prop("disabled", !1), this.opts.shouldFocusInput(this) && this.focusser.focus())
        }, isFocused: function () {
            return this.container.hasClass("select2-container-active")
        }, cancel: function () {
            this.parent.cancel.apply(this, arguments), this.focusser.prop("disabled", !1), this.opts.shouldFocusInput(this) && this.focusser.focus()
        }, destroy: function () {
            aE("label[for='" + this.focusser.attr("id") + "']").attr("for", this.opts.element.attr("id")), this.parent.destroy.apply(this, arguments), Q.call(this, "selection", "focusser")
        }, initContainer: function () {
            var a, g, l = this.container, k = this.dropdown, j = ay();
            this.opts.minimumResultsForSearch < 0 ? this.showSearch(!1) : this.showSearch(!0), this.selection = a = l.find(".select2-choice"), this.focusser = l.find(".select2-focusser"), a.find(".select2-chosen").attr("id", "select2-chosen-" + j), this.focusser.attr("aria-labelledby", "select2-chosen-" + j), this.results.attr("id", "select2-results-" + j), this.search.attr("aria-owns", "select2-results-" + j), this.focusser.attr("id", "s2id_autogen" + j), g = aE("label[for='" + this.opts.element.attr("id") + "']"), this.focusser.prev().text(g.text()).attr("for", this.focusser.attr("id"));
            var c = this.opts.element.attr("title");
            this.opts.element.attr("title", c || g.text()), this.focusser.attr("tabindex", this.elementTabIndex), this.search.attr("id", this.focusser.attr("id") + "_search"), this.search.prev().text(aE("label[for='" + this.focusser.attr("id") + "']").text()).attr("for", this.search.attr("id")), this.search.on("keydown", this.bind(function (b) {
                if (this.isInterfaceEnabled() && 229 != b.keyCode) {
                    if (b.which === aC.PAGE_UP || b.which === aC.PAGE_DOWN) {
                        return ad(b), void 0
                    }
                    switch (b.which) {
                        case aC.UP:
                        case aC.DOWN:
                            return this.moveHighlight(b.which === aC.UP ? -1 : 1), ad(b), void 0;
                        case aC.ENTER:
                            return this.selectHighlighted(), ad(b), void 0;
                        case aC.TAB:
                            return this.selectHighlighted({noFocus: !0}), void 0;
                        case aC.ESC:
                            return this.cancel(b), ad(b), void 0
                    }
                }
            })), this.search.on("blur", this.bind(function () {
                document.activeElement === this.body.get(0) && window.setTimeout(this.bind(function () {
                    this.opened() && this.search.focus()
                }), 0)
            })), this.focusser.on("keydown", this.bind(function (b) {
                if (this.isInterfaceEnabled() && b.which !== aC.TAB && !aC.isControl(b) && !aC.isFunctionKey(b) && b.which !== aC.ESC) {
                    if (this.opts.openOnEnter === !1 && b.which === aC.ENTER) {
                        return ad(b), void 0
                    }
                    if (b.which == aC.DOWN || b.which == aC.UP || b.which == aC.ENTER && this.opts.openOnEnter) {
                        if (b.altKey || b.ctrlKey || b.shiftKey || b.metaKey) {
                            return
                        }
                        return this.open(), ad(b), void 0
                    }
                    return b.which == aC.DELETE || b.which == aC.BACKSPACE ? (this.opts.allowClear && this.clear(), ad(b), void 0) : void 0
                }
            })), aj(this.focusser), this.focusser.on("keyup-change input", this.bind(function (b) {
                if (this.opts.minimumResultsForSearch >= 0) {
                    if (b.stopPropagation(), this.opened()) {
                        return
                    }
                    this.open()
                }
            })), a.on("mousedown touchstart", "abbr", this.bind(function (b) {
                this.isInterfaceEnabled() && (this.clear(), ac(b), this.close(), this.selection.focus())
            })), a.on("mousedown touchstart", this.bind(function (b) {
                aq(a), this.container.hasClass("select2-container-active") || this.opts.element.trigger(aE.Event("select2-focus")), this.opened() ? this.close() : this.isInterfaceEnabled() && this.open(), ad(b)
            })), k.on("mousedown touchstart", this.bind(function () {
                this.opts.shouldFocusInput(this) && this.search.focus()
            })), a.on("focus", this.bind(function (b) {
                ad(b)
            })), this.focusser.on("focus", this.bind(function () {
                this.container.hasClass("select2-container-active") || this.opts.element.trigger(aE.Event("select2-focus")), this.container.addClass("select2-container-active")
            })).on("blur", this.bind(function () {
                this.opened() || (this.container.removeClass("select2-container-active"), this.opts.element.trigger(aE.Event("select2-blur")))
            })), this.search.on("focus", this.bind(function () {
                this.container.hasClass("select2-container-active") || this.opts.element.trigger(aE.Event("select2-focus")), this.container.addClass("select2-container-active")
            })), this.initContainerWidth(), this.opts.element.addClass("select2-offscreen"), this.setPlaceholder()
        }, clear: function (a) {
            var h = this.selection.data("select2-data");
            if (h) {
                var g = aE.Event("select2-clearing");
                if (this.opts.element.trigger(g), g.isDefaultPrevented()) {
                    return
                }
                var f = this.getPlaceholderOption();
                this.opts.element.val(f ? f.val() : ""), this.selection.find(".select2-chosen").empty(), this.selection.removeData("select2-data"), this.setPlaceholder(), a !== !1 && (this.opts.element.trigger({type: "select2-removed", val: this.id(h), choice: h}), this.triggerChange({removed: h}))
            }
        }, initSelection: function () {
            if (this.isPlaceholderOptionSelected()) {
                this.updateSelection(null), this.close(), this.setPlaceholder()
            } else {
                var a = this;
                this.opts.initSelection.call(null, this.opts.element, function (b) {
                    b !== aD && null !== b && (a.updateSelection(b), a.close(), a.setPlaceholder(), a.nextSearchTerm = a.opts.nextSearchTerm(b, a.search.val()))
                })
            }
        }, isPlaceholderOptionSelected: function () {
            var b;
            return this.getPlaceholder() === aD ? !1 : (b = this.getPlaceholderOption()) !== aD && b.prop("selected") || "" === this.opts.element.val() || this.opts.element.val() === aD || null === this.opts.element.val()
        }, prepareOpts: function () {
            var a = this.parent.prepareOpts.apply(this, arguments), d = this;
            return"select" === a.element.get(0).tagName.toLowerCase() ? a.initSelection = function (e, c) {
                var f = e.find("option").filter(function () {
                    return this.selected && !this.disabled
                });
                c(d.optionToData(f))
            } : "data" in a && (a.initSelection = a.initSelection || function (i, h) {
                var g = i.val(), b = null;
                a.query({matcher: function (e, k, j) {
                    var f = am(g, a.id(j));
                    return f && (b = j), f
                }, callback: aE.isFunction(h) ? function () {
                    h(b)
                } : aE.noop})
            }), a
        }, getPlaceholder: function () {
            return this.select && this.getPlaceholderOption() === aD ? aD : this.parent.getPlaceholder.apply(this, arguments)
        }, setPlaceholder: function () {
            var b = this.getPlaceholder();
            if (this.isPlaceholderOptionSelected() && b !== aD) {
                if (this.select && this.getPlaceholderOption() === aD) {
                    return
                }
                this.selection.find(".select2-chosen").html(this.opts.escapeMarkup(b)), this.selection.addClass("select2-default"), this.container.removeClass("select2-allowclear")
            }
        }, postprocessResults: function (h, f, l) {
            var k = 0, j = this;
            if (this.findHighlightableChoices().each2(function (d, c) {
                return am(j.id(c.data("select2-data")), j.opts.element.val()) ? (k = d, !1) : void 0
            }), l !== !1 && (f === !0 && k >= 0 ? this.highlight(k) : this.highlight(0)), f === !0) {
                var i = this.opts.minimumResultsForSearch;
                i >= 0 && this.showSearch(S(h.results) >= i)
            }
        }, showSearch: function (a) {
            this.showSearchInput !== a && (this.showSearchInput = a, this.dropdown.find(".select2-search").toggleClass("select2-search-hidden", !a), this.dropdown.find(".select2-search").toggleClass("select2-offscreen", !a), aE(this.dropdown, this.container).toggleClass("select2-with-searchbox", a))
        }, onSelect: function (f, e) {
            if (this.triggerSelect(f)) {
                var h = this.opts.element.val(), g = this.data();
                this.opts.element.val(this.id(f)), this.updateSelection(f), this.opts.element.trigger({type: "select2-selected", val: this.id(f), choice: f}), this.nextSearchTerm = this.opts.nextSearchTerm(f, this.search.val()), this.close(), e && e.noFocus || !this.opts.shouldFocusInput(this) || this.focusser.focus(), am(h, this.id(f)) || this.triggerChange({added: f, removed: g})
            }
        }, updateSelection: function (b) {
            var g, f, h = this.selection.find(".select2-chosen");
            this.selection.data("select2-data", b), h.empty(), null !== b && (g = this.opts.formatSelection(b, h, this.opts.escapeMarkup)), g !== aD && h.append(g), f = this.opts.formatSelectionCssClass(b, h), f !== aD && h.addClass(f), this.selection.removeClass("select2-default"), this.opts.allowClear && this.getPlaceholder() !== aD && this.container.addClass("select2-allowclear")
        }, val: function () {
            var b, j = !1, i = null, h = this, g = this.data();
            if (0 === arguments.length) {
                return this.opts.element.val()
            }
            if (b = arguments[0], arguments.length > 1 && (j = arguments[1]), this.select) {
                this.select.val(b).find("option").filter(function () {
                    return this.selected
                }).each2(function (d, c) {
                    return i = h.optionToData(c), !1
                }), this.updateSelection(i), this.setPlaceholder(), j && this.triggerChange({added: i, removed: g})
            } else {
                if (!b && 0 !== b) {
                    return this.clear(j), void 0
                }
                if (this.opts.initSelection === aD) {
                    throw new Error("cannot call val() if initSelection() is not defined")
                }
                this.opts.element.val(b), this.opts.initSelection(this.opts.element, function (c) {
                    h.opts.element.val(c ? h.id(c) : ""), h.updateSelection(c), h.setPlaceholder(), j && h.triggerChange({added: c, removed: g})
                })
            }
        }, clearSearch: function () {
            this.search.val(""), this.focusser.val("")
        }, data: function (b) {
            var f, e = !1;
            return 0 === arguments.length ? (f = this.selection.data("select2-data"), f == aD && (f = null), f) : (arguments.length > 1 && (e = arguments[1]), b ? (f = this.data(), this.opts.element.val(b ? this.id(b) : ""), this.updateSelection(b), e && this.triggerChange({added: b, removed: f})) : this.clear(e), void 0)
        }}), az = P(aB, {createContainer: function () {
            var a = aE(document.createElement("div")).attr({"class": "select2-container select2-container-multi"}).html(["<ul class='select2-choices'>", "  <li class='select2-search-field'>", "    <label for='' class='select2-offscreen'></label>", "    <input type='text' autocomplete='off' autocorrect='off' autocapitalize='off' spellcheck='false' class='select2-input'>", "  </li>", "</ul>", "<div class='select2-drop select2-drop-multi select2-display-none'>", "   <ul class='select2-results'>", "   </ul>", "</div>"].join(""));
            return a
        }, prepareOpts: function () {
            var a = this.parent.prepareOpts.apply(this, arguments), d = this;
            return"select" === a.element.get(0).tagName.toLowerCase() ? a.initSelection = function (e, c) {
                var f = [];
                e.find("option").filter(function () {
                    return this.selected && !this.disabled
                }).each2(function (h, g) {
                    f.push(d.optionToData(g))
                }), c(f)
            } : "data" in a && (a.initSelection = a.initSelection || function (i, h) {
                var g = al(i.val(), a.separator), b = [];
                a.query({matcher: function (k, j, f) {
                    var e = aE.grep(g,function (c) {
                        return am(c, a.id(f))
                    }).length;
                    return e && b.push(f), e
                }, callback: aE.isFunction(h) ? function () {
                    for (var e = [], l = 0; l < g.length; l++) {
                        for (var k = g[l], j = 0; j < b.length; j++) {
                            var f = b[j];
                            if (am(k, a.id(f))) {
                                e.push(f), b.splice(j, 1);
                                break
                            }
                        }
                    }
                    h(e)
                } : aE.noop})
            }), a
        }, selectChoice: function (d) {
            var c = this.container.find(".select2-search-choice-focus");
            c.length && d && d[0] == c[0] || (c.length && this.opts.element.trigger("choice-deselected", c), c.removeClass("select2-search-choice-focus"), d && d.length && (this.close(), d.addClass("select2-search-choice-focus"), this.opts.element.trigger("choice-selected", d)))
        }, destroy: function () {
            aE("label[for='" + this.search.attr("id") + "']").attr("for", this.opts.element.attr("id")), this.parent.destroy.apply(this, arguments), Q.call(this, "searchContainer", "selection")
        }, initContainer: function () {
            var f, a = ".select2-choices";
            this.searchContainer = this.container.find(".select2-search-field"), this.selection = f = this.container.find(a);
            var c = this;
            this.selection.on("click", ".select2-search-choice:not(.select2-locked)", function () {
                c.search[0].focus(), c.selectChoice(aE(this))
            }), this.search.attr("id", "s2id_autogen" + ay()), this.search.prev().text(aE("label[for='" + this.opts.element.attr("id") + "']").text()).attr("for", this.search.attr("id")), this.search.on("input paste", this.bind(function () {
                this.search.attr("placeholder") && 0 == this.search.val().length || this.isInterfaceEnabled() && (this.opened() || this.open())
            })), this.search.attr("tabindex", this.elementTabIndex), this.keydowns = 0, this.search.on("keydown", this.bind(function (i) {
                if (this.isInterfaceEnabled()) {
                    ++this.keydowns;
                    var d = f.find(".select2-search-choice-focus"), m = d.prev(".select2-search-choice:not(.select2-locked)"), l = d.next(".select2-search-choice:not(.select2-locked)"), k = ae(this.search);
                    if (d.length && (i.which == aC.LEFT || i.which == aC.RIGHT || i.which == aC.BACKSPACE || i.which == aC.DELETE || i.which == aC.ENTER)) {
                        var j = d;
                        return i.which == aC.LEFT && m.length ? j = m : i.which == aC.RIGHT ? j = l.length ? l : null : i.which === aC.BACKSPACE ? this.unselect(d.first()) && (this.search.width(10), j = m.length ? m : l) : i.which == aC.DELETE ? this.unselect(d.first()) && (this.search.width(10), j = l.length ? l : null) : i.which == aC.ENTER && (j = null), this.selectChoice(j), ad(i), j && j.length || this.open(), void 0
                    }
                    if ((i.which === aC.BACKSPACE && 1 == this.keydowns || i.which == aC.LEFT) && 0 == k.offset && !k.length) {
                        return this.selectChoice(f.find(".select2-search-choice:not(.select2-locked)").last()), ad(i), void 0
                    }
                    if (this.selectChoice(null), this.opened()) {
                        switch (i.which) {
                            case aC.UP:
                            case aC.DOWN:
                                return this.moveHighlight(i.which === aC.UP ? -1 : 1), ad(i), void 0;
                            case aC.ENTER:
                                return this.selectHighlighted(), ad(i), void 0;
                            case aC.TAB:
                                return this.selectHighlighted({noFocus: !0}), this.close(), void 0;
                            case aC.ESC:
                                return this.cancel(i), ad(i), void 0
                        }
                    }
                    if (i.which !== aC.TAB && !aC.isControl(i) && !aC.isFunctionKey(i) && i.which !== aC.BACKSPACE && i.which !== aC.ESC) {
                        if (i.which === aC.ENTER) {
                            if (this.opts.openOnEnter === !1) {
                                return
                            }
                            if (i.altKey || i.ctrlKey || i.shiftKey || i.metaKey) {
                                return
                            }
                        }
                        this.open(), (i.which === aC.PAGE_UP || i.which === aC.PAGE_DOWN) && ad(i), i.which === aC.ENTER && ad(i)
                    }
                }
            })), this.search.on("keyup", this.bind(function () {
                this.keydowns = 0, this.resizeSearch()
            })), this.search.on("blur", this.bind(function (d) {
                this.container.removeClass("select2-container-active"), this.search.removeClass("select2-focused"), this.selectChoice(null), this.opened() || this.clearSearch(), d.stopImmediatePropagation(), this.opts.element.trigger(aE.Event("select2-blur"))
            })), this.container.on("click", a, this.bind(function (d) {
                this.isInterfaceEnabled() && (aE(d.target).closest(".select2-search-choice").length > 0 || (this.selectChoice(null), this.clearPlaceholder(), this.container.hasClass("select2-container-active") || this.opts.element.trigger(aE.Event("select2-focus")), this.open(), this.focusSearch(), d.preventDefault()))
            })), this.container.on("focus", a, this.bind(function () {
                this.isInterfaceEnabled() && (this.container.hasClass("select2-container-active") || this.opts.element.trigger(aE.Event("select2-focus")), this.container.addClass("select2-container-active"), this.dropdown.addClass("select2-drop-active"), this.clearPlaceholder())
            })), this.initContainerWidth(), this.opts.element.addClass("select2-offscreen"), this.clearSearch()
        }, enableInterface: function () {
            this.parent.enableInterface.apply(this, arguments) && this.search.prop("disabled", !this.isInterfaceEnabled())
        }, initSelection: function () {
            if ("" === this.opts.element.val() && "" === this.opts.element.text() && (this.updateSelection([]), this.close(), this.clearSearch()), this.select || "" !== this.opts.element.val()) {
                var a = this;
                this.opts.initSelection.call(null, this.opts.element, function (b) {
                    b !== aD && null !== b && (a.updateSelection(b), a.close(), a.clearSearch())
                })
            }
        }, clearSearch: function () {
            var b = this.getPlaceholder(), d = this.getMaxSearchWidth();
            b !== aD && 0 === this.getVal().length && this.search.hasClass("select2-focused") === !1 ? (this.search.val(b).addClass("select2-default"), this.search.width(d > 0 ? d : this.container.css("width"))) : this.search.val("").width(10)
        }, clearPlaceholder: function () {
            this.search.hasClass("select2-default") && this.search.val("").removeClass("select2-default")
        }, opening: function () {
            this.clearPlaceholder(), this.resizeSearch(), this.parent.opening.apply(this, arguments), this.focusSearch(), "" === this.search.val() && this.nextSearchTerm != aD && (this.search.val(this.nextSearchTerm), this.search.select()), this.updateResults(!0), this.opts.shouldFocusInput(this) && this.search.focus(), this.opts.element.trigger(aE.Event("select2-open"))
        }, close: function () {
            this.opened() && this.parent.close.apply(this, arguments)
        }, focus: function () {
            this.close(), this.search.focus()
        }, isFocused: function () {
            return this.search.hasClass("select2-focused")
        }, updateSelection: function (a) {
            var h = [], g = [], f = this;
            aE(a).each(function () {
                ao(f.id(this), h) < 0 && (h.push(f.id(this)), g.push(this))
            }), a = g, this.selection.find(".select2-search-choice").remove(), aE(a).each(function () {
                f.addSelectedChoice(this)
            }), f.postprocessResults()
        }, tokenize: function () {
            var b = this.search.val();
            b = this.opts.tokenizer.call(this, b, this.data(), this.bind(this.onSelect), this.opts), null != b && b != aD && (this.search.val(b), b.length > 0 && this.open())
        }, onSelect: function (b, d) {
            this.triggerSelect(b) && "" !== b.text && (this.addSelectedChoice(b), this.opts.element.trigger({type: "selected", val: this.id(b), choice: b}), this.nextSearchTerm = this.opts.nextSearchTerm(b, this.search.val()), this.clearSearch(), this.updateResults(), (this.select || !this.opts.closeOnSelect) && this.postprocessResults(b, !1, this.opts.closeOnSelect === !0), this.opts.closeOnSelect ? (this.close(), this.search.width(10)) : this.countSelectableResults() > 0 ? (this.search.width(10), this.resizeSearch(), this.getMaximumSelectionSize() > 0 && this.val().length >= this.getMaximumSelectionSize() ? this.updateResults(!0) : this.nextSearchTerm != aD && (this.search.val(this.nextSearchTerm), this.updateResults(), this.search.select()), this.positionDropdown()) : (this.close(), this.search.width(10)), this.triggerChange({added: b}), d && d.noFocus || this.focusSearch())
        }, cancel: function () {
            this.close(), this.focusSearch()
        }, addSelectedChoice: function (r) {
            var b, a, q = !r.locked, p = aE("<li class='select2-search-choice'>    <div></div>    <a href='#' class='select2-search-choice-close' tabindex='-1'></a></li>"), o = aE("<li class='select2-search-choice select2-locked'><div></div></li>"), n = q ? p : o, m = this.id(r), l = this.getVal();
            b = this.opts.formatSelection(r, n.find("div"), this.opts.escapeMarkup), b != aD && n.find("div").replaceWith("<div>" + b + "</div>"), a = this.opts.formatSelectionCssClass(r, n.find("div")), a != aD && n.addClass(a), q && n.find(".select2-search-choice-close").on("mousedown", ad).on("click dblclick", this.bind(function (c) {
                this.isInterfaceEnabled() && (this.unselect(aE(c.target)), this.selection.find(".select2-search-choice-focus").removeClass("select2-search-choice-focus"), ad(c), this.close(), this.focusSearch())
            })).on("focus", this.bind(function () {
                this.isInterfaceEnabled() && (this.container.addClass("select2-container-active"), this.dropdown.addClass("select2-drop-active"))
            })), n.data("select2-data", r), n.insertBefore(this.searchContainer), l.push(m), this.setVal(l)
        }, unselect: function (a) {
            var i, h, j = this.getVal();
            if (a = a.closest(".select2-search-choice"), 0 === a.length) {
                throw"Invalid argument: " + a + ". Must be .select2-search-choice"
            }
            if (i = a.data("select2-data")) {
                var g = aE.Event("select2-removing");
                if (g.val = this.id(i), g.choice = i, this.opts.element.trigger(g), g.isDefaultPrevented()) {
                    return !1
                }
                for (; (h = ao(this.id(i), j)) >= 0;) {
                    j.splice(h, 1), this.setVal(j), this.select && this.postprocessResults()
                }
                return a.remove(), this.opts.element.trigger({type: "select2-removed", val: this.id(i), choice: i}), this.triggerChange({removed: i}), !0
            }
        }, postprocessResults: function (i, h, n) {
            var m = this.getVal(), l = this.results.find(".select2-result"), k = this.results.find(".select2-result-with-children"), j = this;
            l.each2(function (e, d) {
                var f = j.id(d.data("select2-data"));
                ao(f, m) >= 0 && (d.addClass("select2-selected"), d.find(".select2-result-selectable").addClass("select2-selected"))
            }), k.each2(function (d, c) {
                c.is(".select2-result-selectable") || 0 !== c.find(".select2-result-selectable:not(.select2-selected)").length || c.addClass("select2-selected")
            }), -1 == this.highlight() && n !== !1 && j.highlight(0), !this.opts.createSearchChoice && !l.filter(".select2-result:not(.select2-selected)").length > 0 && (!i || i && !i.more && 0 === this.results.find(".select2-no-results").length) && U(j.opts.formatNoMatches, "formatNoMatches") && this.results.append("<li class='select2-no-results'>" + T(j.opts.formatNoMatches, j.opts.element, j.search.val()) + "</li>")
        }, getMaxSearchWidth: function () {
            return this.selection.width() - ak(this.search)
        }, resizeSearch: function () {
            var h, g, l, k, j, i = ak(this.search);
            h = ab(this.search) + 10, g = this.search.offset().left, l = this.selection.width(), k = this.selection.offset().left, j = l - (g - k) - i, h > j && (j = l - i), 40 > j && (j = l - i), 0 >= j && (j = h), this.search.width(Math.floor(j))
        }, getVal: function () {
            var b;
            return this.select ? (b = this.select.val(), null === b ? [] : b) : (b = this.opts.element.val(), al(b, this.opts.separator))
        }, setVal: function (a) {
            var d;
            this.select ? this.select.val(a) : (d = [], aE(a).each(function () {
                ao(this, d) < 0 && d.push(this)
            }), this.opts.element.val(0 === d.length ? "" : d.join(this.opts.separator)))
        }, buildChangeDetails: function (f, e) {
            for (var e = e.slice(0), f = f.slice(0), h = 0; h < e.length; h++) {
                for (var g = 0; g < f.length; g++) {
                    am(this.opts.id(e[h]), this.opts.id(f[g])) && (e.splice(h, 1), h > 0 && h--, f.splice(g, 1), g--)
                }
            }
            return{added: e, removed: f}
        }, val: function (h, g) {
            var b, a = this;
            if (0 === arguments.length) {
                return this.getVal()
            }
            if (b = this.data(), b.length || (b = []), !h && 0 !== h) {
                return this.opts.element.val(""), this.updateSelection([]), this.clearSearch(), g && this.triggerChange({added: this.data(), removed: b}), void 0
            }
            if (this.setVal(h), this.select) {
                this.opts.initSelection(this.select, this.bind(this.updateSelection)), g && this.triggerChange(this.buildChangeDetails(b, this.data()))
            } else {
                if (this.opts.initSelection === aD) {
                    throw new Error("val() cannot be called if initSelection() is not defined")
                }
                this.opts.initSelection(this.opts.element, function (d) {
                    var e = aE.map(d, a.id);
                    a.setVal(e), a.updateSelection(d), a.clearSearch(), g && a.triggerChange(a.buildChangeDetails(b, a.data()))
                })
            }
            this.clearSearch()
        }, onSortStart: function () {
            if (this.select) {
                throw new Error("Sorting of elements is not supported when attached to <select>. Attach to <input type='hidden'/> instead.")
            }
            this.search.width(0), this.searchContainer.hide()
        }, onSortEnd: function () {
            var a = [], d = this;
            this.searchContainer.show(), this.searchContainer.appendTo(this.searchContainer.parent()), this.resizeSearch(), this.selection.find(".select2-search-choice").each(function () {
                a.push(d.opts.id(aE(this).data("select2-data")))
            }), this.setVal(a), this.triggerChange()
        }, data: function (a, j) {
            var h, g, i = this;
            return 0 === arguments.length ? this.selection.children(".select2-search-choice").map(function () {
                return aE(this).data("select2-data")
            }).get() : (g = this.data(), a || (a = []), h = aE.map(a, function (b) {
                return i.opts.id(b)
            }), this.setVal(h), this.updateSelection(a), this.clearSearch(), j && this.triggerChange(this.buildChangeDetails(g, this.data())), void 0)
        }}), aE.fn.select2 = function () {
            var s, r, q, p, o, t = Array.prototype.slice.call(arguments, 0), n = ["val", "destroy", "opened", "open", "close", "focus", "isFocused", "container", "dropdown", "onSortStart", "onSortEnd", "enable", "disable", "readonly", "positionDropdown", "data", "search"], m = ["opened", "isFocused", "container", "dropdown"], b = ["val", "data"], a = {search: "externalSearch"};
            return this.each(function () {
                if (0 === t.length || "object" == typeof t[0]) {
                    s = 0 === t.length ? {} : aE.extend({}, t[0]), s.element = aE(this), "select" === s.element.get(0).tagName.toLowerCase() ? o = s.element.prop("multiple") : (o = s.multiple || !1, "tags" in s && (s.multiple = o = !0)), r = o ? new window.Select2["class"].multi : new window.Select2["class"].single, r.init(s)
                } else {
                    if ("string" != typeof t[0]) {
                        throw"Invalid arguments to select2 plugin: " + t
                    }
                    if (ao(t[0], n) < 0) {
                        throw"Unknown method: " + t[0]
                    }
                    if (p = aD, r = aE(this).data("select2"), r === aD) {
                        return
                    }
                    if (q = t[0], "container" === q ? p = r.container : "dropdown" === q ? p = r.dropdown : (a[q] && (q = a[q]), p = r[q].apply(r, t.slice(1))), ao(t[0], m) >= 0 || ao(t[0], b) >= 0 && 1 == t.length) {
                        return !1
                    }
                }
            }), p === aD ? this : p
        }, aE.fn.select2.defaults = {width: "copy", loadMorePadding: 0, closeOnSelect: !0, openOnEnter: !0, containerCss: {}, dropdownCss: {}, containerCssClass: "", dropdownCssClass: "", formatResult: function (g, f, j, i) {
            var h = [];
            return Z(g.text, j.term, h, i), h.join("")
        }, formatSelection: function (b, f, e) {
            return b ? e(b.text) : aD
        }, sortResults: function (b) {
            return b
        }, formatResultCssClass: function (b) {
            return b.css
        }, formatSelectionCssClass: function () {
            return aD
        }, minimumResultsForSearch: 0, minimumInputLength: 0, maximumInputLength: null, maximumSelectionSize: 0, id: function (b) {
            return b == aD ? null : b.id
        }, matcher: function (d, c) {
            return ap("" + c).toUpperCase().indexOf(ap("" + d).toUpperCase()) >= 0
        }, separator: ",", tokenSeparators: [], tokenizer: R, escapeMarkup: Y, blurOnChange: !1, selectOnBlur: !1, adaptContainerCssClass: function (b) {
            return b
        }, adaptDropdownCssClass: function () {
            return null
        }, nextSearchTerm: function () {
            return aD
        }, searchInputPlaceholder: "", createSearchChoicePosition: "top", shouldFocusInput: function (d) {
            var c = "ontouchstart" in window || navigator.msMaxTouchPoints > 0;
            return c ? d.opts.minimumResultsForSearch < 0 ? !1 : !0 : !0
        }}, aE.fn.select2.locales = [], aE.fn.select2.locales.en = {formatMatches: function (b) {
            return 1 === b ? "One result is available, press enter to select it." : b + " results are available, use up and down arrow keys to navigate."
        }, formatNoMatches: function () {
            return"No matches found"
        }, formatAjaxError: function () {
            return"Loading failed"
        }, formatInputTooShort: function (e, d) {
            var f = d - e.length;
            return"Please enter " + f + " or more character" + (1 == f ? "" : "s")
        }, formatInputTooLong: function (e, d) {
            var f = e.length - d;
            return"Please delete " + f + " character" + (1 == f ? "" : "s")
        }, formatSelectionTooBig: function (b) {
            return"You can only select " + b + " item" + (1 == b ? "" : "s")
        }, formatLoadMore: function () {
            return"Loading more results\u2026"
        }, formatSearching: function () {
            return"Searching\u2026"
        }}, aE.extend(aE.fn.select2.defaults, aE.fn.select2.locales.en), aE.fn.select2.ajaxDefaults = {transport: aE.ajax, params: {type: "GET", cache: !1, dataType: "json"}}, window.Select2 = {query: {ajax: X, local: W, tags: V}, util: {debounce: ah, markMatch: Z, escapeMarkup: Y, stripDiacritics: ap}, "class": {"abstract": aB, single: aA, multi: az}}
    }
}(jQuery);
$(document).ready(function () {
    $('form[data-name="sonata-ajax"]').on("submit", function (c) {
        c.preventDefault();
        var b = $(this);
        $.ajax({type: b.attr("method"), url: b.attr("action"), data: b.serialize(), success: function (e) {
            var d = b.attr("data-target");
            if (e) {
                $("#" + d).html(e)
            }
        }})
    });
    if ($(".basket")) {
        var a = false;
        $(".basket input[type=number]").on("change", function (b) {
            a = true
        });
        $(".basket input[type=checkbox]").on("change", function (b) {
            a = true
        });
        $(".sonata-basket-nextstep").on("click", function (b) {
            if (a) {
                if (!confirm(basket_update_confirmation_message)) {
                    b.preventDefault()
                }
            }
        })
    }
});