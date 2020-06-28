<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="static/style.css">
    <title>Animasi Penjualan Listrik PT Energi Pelabuhan Indonesia</title>
</head>
<body>
<script> 
    window.Flourish = {
        "static_prefix": "static",
        "environment": "preview"
    }; 
</script>
<script>
    var template = function(t) {
        "use strict";
        var e = "undefined" != typeof globalThis ? globalThis : "undefined" != typeof window ? window : "undefined" != typeof global ? global : "undefined" != typeof self ? self : {};

        function n(t, e) {
            return t(e = {
                exports: {}
            }, e.exports), e.exports
        }
        var r = function(t) {
                return t && t.Math == Math && t
            },
            i = r("object" == typeof globalThis && globalThis) || r("object" == typeof window && window) || r("object" == typeof self && self) || r("object" == typeof e && e) || Function("return this")(),
            a = function(t) {
                try {
                    return !!t()
                } catch (t) {
                    return !0
                }
            },
            o = !a((function() {
                return 7 != Object.defineProperty({}, 1, {
                    get: function() {
                        return 7
                    }
                })[1]
            })),
            s = {}.propertyIsEnumerable,
            c = Object.getOwnPropertyDescriptor,
            l = {
                f: c && !s.call({
                    1: 2
                }, 1) ? function(t) {
                    var e = c(this, t);
                    return !!e && e.enumerable
                } : s
            },
            f = function(t, e) {
                return {
                    enumerable: !(1 & t),
                    configurable: !(2 & t),
                    writable: !(4 & t),
                    value: e
                }
            },
            u = {}.toString,
            d = function(t) {
                return u.call(t).slice(8, -1)
            },
            h = "".split,
            p = a((function() {
                return !Object("z").propertyIsEnumerable(0)
            })) ? function(t) {
                return "String" == d(t) ? h.call(t, "") : Object(t)
            } : Object,
            _ = function(t) {
                if (null == t) throw TypeError("Can't call method on " + t);
                return t
            },
            g = function(t) {
                return p(_(t))
            },
            b = function(t) {
                return "object" == typeof t ? null !== t : "function" == typeof t
            },
            m = function(t, e) {
                if (!b(t)) return t;
                var n, r;
                if (e && "function" == typeof(n = t.toString) && !b(r = n.call(t))) return r;
                if ("function" == typeof(n = t.valueOf) && !b(r = n.call(t))) return r;
                if (!e && "function" == typeof(n = t.toString) && !b(r = n.call(t))) return r;
                throw TypeError("Can't convert object to primitive value")
            },
            y = {}.hasOwnProperty,
            v = function(t, e) {
                return y.call(t, e)
            },
            w = i.document,
            x = b(w) && b(w.createElement),
            M = function(t) {
                return x ? w.createElement(t) : {}
            },
            k = !o && !a((function() {
                return 7 != Object.defineProperty(M("div"), "a", {
                    get: function() {
                        return 7
                    }
                }).a
            })),
            S = Object.getOwnPropertyDescriptor,
            A = {
                f: o ? S : function(t, e) {
                    if (t = g(t), e = m(e, !0), k) try {
                        return S(t, e)
                    } catch (t) {}
                    if (v(t, e)) return f(!l.f.call(t, e), t[e])
                }
            },
            T = function(t) {
                if (!b(t)) throw TypeError(String(t) + " is not an object");
                return t
            },
            C = Object.defineProperty,
            N = {
                f: o ? C : function(t, e, n) {
                    if (T(t), e = m(e, !0), T(n), k) try {
                        return C(t, e, n)
                    } catch (t) {}
                    if ("get" in n || "set" in n) throw TypeError("Accessors not supported");
                    return "value" in n && (t[e] = n.value), t
                }
            },
            O = o ? function(t, e, n) {
                return N.f(t, e, f(1, n))
            } : function(t, e, n) {
                return t[e] = n, t
            },
            E = function(t, e) {
                try {
                    O(i, t, e)
                } catch (n) {
                    i[t] = e
                }
                return e
            },
            z = i["__core-js_shared__"] || E("__core-js_shared__", {}),
            F = Function.toString;
        "function" != typeof z.inspectSource && (z.inspectSource = function(t) {
            return F.call(t)
        });
        var P, D, j, L = z.inspectSource,
            H = i.WeakMap,
            U = "function" == typeof H && /native code / .test(L(H)),
            R = n((function(t) {
            (t.exports = function(t, e) {
                return z[t] || (z[t] = void 0 !== e ? e : {})
            })("versions", []).push({
                version: "3.6.5",
                mode: "global",
                copyright: "© 2020 Denis Pushkarev (zloirock.ru)"
            })
        })), Y = 0, q = Math.random(), I = function(t) {
            return "Symbol(" + String(void 0 === t ? "" : t) + ")_" + (++Y + q).toString(36)
        }, B = R("keys"), $ = function(t) {
            return B[t] || (B[t] = I(t))
        }, V = {}, W = i.WeakMap;
        if (U) {
            var X = new W,
                G = X.get,
                Z = X.has,
                J = X.set;
            P = function(t, e) {
                return J.call(X, t, e), e
            }, D = function(t) {
                return G.call(X, t) || {}
            }, j = function(t) {
                return Z.call(X, t)
            }
        } else {
            var Q = $("state");
            V[Q] = !0, P = function(t, e) {
                return O(t, Q, e), e
            }, D = function(t) {
                return v(t, Q) ? t[Q] : {}
            }, j = function(t) {
                return v(t, Q)
            }
        }
        var K, tt, et = {
                set: P,
                get: D,
                has: j,
                enforce: function(t) {
                    return j(t) ? D(t) : P(t, {})
                },
                getterFor: function(t) {
                    return function(e) {
                        var n;
                        if (!b(e) || (n = D(e)).type !== t) throw TypeError("Incompatible receiver, " + t + " required");
                        return n
                    }
                }
            },
            nt = n((function(t) {
                var e = et.get,
                    n = et.enforce,
                    r = String(String).split("String");
                (t.exports = function(t, e, a, o) {
                    var s = !!o && !!o.unsafe,
                        c = !!o && !!o.enumerable,
                        l = !!o && !!o.noTargetGet;
                    "function" == typeof a && ("string" != typeof e || v(a, "name") || O(a, "name", e), n(a).source = r.join("string" == typeof e ? e : "")), t !== i ? (s ? !l && t[e] && (c = !0) : delete t[e], c ? t[e] = a : O(t, e, a)) : c ? t[e] = a : E(e, a)
                })(Function.prototype, "toString", (function() {
                    return "function" == typeof this && e(this).source || L(this)
                }))
            })),
            rt = i,
            it = function(t) {
                return "function" == typeof t ? t : void 0
            },
            at = function(t, e) {
                return arguments.length < 2 ? it(rt[t]) || it(i[t]) : rt[t] && rt[t][e] || i[t] && i[t][e]
            },
            ot = Math.ceil,
            st = Math.floor,
            ct = function(t) {
                return isNaN(t = +t) ? 0 : (t > 0 ? st : ot)(t)
            },
            lt = Math.min,
            ft = function(t) {
                return t > 0 ? lt(ct(t), 9007199254740991) : 0
            },
            ut = Math.max,
            dt = Math.min,
            ht = function(t) {
                return function(e, n, r) {
                    var i, a = g(e),
                        o = ft(a.length),
                        s = function(t, e) {
                            var n = ct(t);
                            return n < 0 ? ut(n + e, 0) : dt(n, e)
                        }(r, o);
                    if (t && n != n) {
                        for (; o > s;)
                            if ((i = a[s++]) != i) return !0
                    } else
                        for (; o > s; s++)
                            if ((t || s in a) && a[s] === n) return t || s || 0;
                    return !t && -1
                }
            },
            pt = {
                includes: ht(!0),
                indexOf: ht(!1)
            }.indexOf,
            _t = function(t, e) {
                var n, r = g(t),
                    i = 0,
                    a = [];
                for (n in r) !v(V, n) && v(r, n) && a.push(n);
                for (; e.length > i;) v(r, n = e[i++]) && (~pt(a, n) || a.push(n));
                return a
            },
            gt = ["constructor", "hasOwnProperty", "isPrototypeOf", "propertyIsEnumerable", "toLocaleString", "toString", "valueOf"],
            bt = gt.concat("length", "prototype"),
            mt = {
                f: Object.getOwnPropertyNames || function(t) {
                    return _t(t, bt)
                }
            },
            yt = {
                f: Object.getOwnPropertySymbols
            },
            vt = at("Reflect", "ownKeys") || function(t) {
                var e = mt.f(T(t)),
                    n = yt.f;
                return n ? e.concat(n(t)) : e
            },
            wt = function(t, e) {
                for (var n = vt(e), r = N.f, i = A.f, a = 0; a < n.length; a++) {
                    var o = n[a];
                    v(t, o) || r(t, o, i(e, o))
                }
            },
            xt = /#|\.prototype\./,
            Mt = function(t, e) {
                var n = St[kt(t)];
                return n == Tt || n != At && ("function" == typeof e ? a(e) : !!e)
            },
            kt = Mt.normalize = function(t) {
                return String(t).replace(xt, ".").toLowerCase()
            },
            St = Mt.data = {},
            At = Mt.NATIVE = "N",
            Tt = Mt.POLYFILL = "P",
            Ct = Mt,
            Nt = A.f,
            Ot = function(t, e) {
                var n, r, a, o, s, c = t.target,
                    l = t.global,
                    f = t.stat;
                if (n = l ? i : f ? i[c] || E(c, {}) : (i[c] || {}).prototype)
                    for (r in e) {
                        if (o = e[r], a = t.noTargetGet ? (s = Nt(n, r)) && s.value : n[r], !Ct(l ? r : c + (f ? "." : "#") + r, t.forced) && void 0 !== a) {
                            if (typeof o == typeof a) continue;
                            wt(o, a)
                        }(t.sham || a && a.sham) && O(o, "sham", !0), nt(n, r, o, t)
                    }
            },
            Et = Array.isArray || function(t) {
                return "Array" == d(t)
            },
            zt = function(t) {
                return Object(_(t))
            },
            Ft = function(t, e, n) {
                var r = m(e);
                r in t ? N.f(t, r, f(0, n)) : t[r] = n
            },
            Pt = !!Object.getOwnPropertySymbols && !a((function() {
                return !String(Symbol())
            })),
            Dt = Pt && !Symbol.sham && "symbol" == typeof Symbol.iterator,
            jt = R("wks"),
            Lt = i.Symbol,
            Ht = Dt ? Lt : Lt && Lt.withoutSetter || I,
            Ut = function(t) {
                return v(jt, t) || (Pt && v(Lt, t) ? jt[t] = Lt[t] : jt[t] = Ht("Symbol." + t)), jt[t]
            },
            Rt = Ut("species"),
            Yt = function(t, e) {
                var n;
                return Et(t) && ("function" != typeof(n = t.constructor) || n !== Array && !Et(n.prototype) ? b(n) && null === (n = n[Rt]) && (n = void 0) : n = void 0), new(void 0 === n ? Array : n)(0 === e ? 0 : e)
            },
            qt = at("navigator", "userAgent") || "",
            It = i.process,
            Bt = It && It.versions,
            $t = Bt && Bt.v8;
        $t ? tt = (K = $t.split("."))[0] + K[1] : qt && (!(K = qt.match(/Edge\/(\d+)/)) || K[1] >= 74) && (K = qt.match(/Chrome\/(\d+)/)) && (tt = K[1]);
        var Vt, Wt = tt && +tt,
            Xt = Ut("species"),
            Gt = Ut("isConcatSpreadable"),
            Zt = Wt >= 51 || !a((function() {
                var t = [];
                return t[Gt] = !1, t.concat()[0] !== t
            })),
            Jt = (Vt = "concat", Wt >= 51 || !a((function() {
                var t = [];
                return (t.constructor = {})[Xt] = function() {
                    return {
                        foo: 1
                    }
                }, 1 !== t[Vt](Boolean).foo
            }))),
            Qt = function(t) {
                if (!b(t)) return !1;
                var e = t[Gt];
                return void 0 !== e ? !!e : Et(t)
            };
        Ot({
            target: "Array",
            proto: !0,
            forced: !Zt || !Jt
        }, {
            concat: function(t) {
                var e, n, r, i, a, o = arguments,
                    s = zt(this),
                    c = Yt(s, 0),
                    l = 0;
                for (e = -1, r = arguments.length; e < r; e++)
                    if (a = -1 === e ? s : o[e], Qt(a)) {
                        if (l + (i = ft(a.length)) > 9007199254740991) throw TypeError("Maximum allowed index exceeded");
                        for (n = 0; n < i; n++, l++) n in a && Ft(c, l, a[n])
                    } else {
                        if (l >= 9007199254740991) throw TypeError("Maximum allowed index exceeded");
                        Ft(c, l++, a)
                    } return c.length = l, c
            }
        });
        var Kt = {};
        Kt[Ut("toStringTag")] = "z";
        var te = "[object z]" === String(Kt),
            ee = Ut("toStringTag"),
            ne = "Arguments" == d(function() {
                return arguments
            }()),
            re = te ? d : function(t) {
                var e, n, r;
                return void 0 === t ? "Undefined" : null === t ? "Null" : "string" == typeof(n = function(t, e) {
                    try {
                        return t[e]
                    } catch (t) {}
                }(e = Object(t), ee)) ? n : ne ? d(e) : "Object" == (r = d(e)) && "function" == typeof e.callee ? "Arguments" : r
            },
            ie = te ? {}.toString : function() {
                return "[object " + re(this) + "]"
            };
        te || nt(Object.prototype, "toString", ie, {
            unsafe: !0
        });
        var ae, oe = Object.keys || function(t) {
                return _t(t, gt)
            },
            se = o ? Object.defineProperties : function(t, e) {
                T(t);
                for (var n, r = oe(e), i = r.length, a = 0; i > a;) N.f(t, n = r[a++], e[n]);
                return t
            },
            ce = at("document", "documentElement"),
            le = $("IE_PROTO"),
            fe = function() {},
            ue = function(t) {
                return "<script>" + t + "<\/script>"
            },
            de = function() {
                try {
                    ae = document.domain && new ActiveXObject("htmlfile")
                } catch (t) {}
                var t, e;
                de = ae ? function(t) {
                    t.write(ue("")), t.close();
                    var e = t.parentWindow.Object;
                    return t = null, e
                }(ae) : ((e = M("iframe")).style.display = "none", ce.appendChild(e), e.src = String("javascript:"), (t = e.contentWindow.document).open(), t.write(ue("document.F=Object")), t.close(), t.F);
                for (var n = gt.length; n--;) delete de.prototype[gt[n]];
                return de()
            };
        V[le] = !0;
        var he = Object.create || function(t, e) {
                var n;
                return null !== t ? (fe.prototype = T(t), n = new fe, fe.prototype = null, n[le] = t) : n = de(), void 0 === e ? n : se(n, e)
            },
            pe = mt.f,
            _e = {}.toString,
            ge = "object" == typeof window && window && Object.getOwnPropertyNames ? Object.getOwnPropertyNames(window) : [],
            be = {
                f: function(t) {
                    return ge && "[object Window]" == _e.call(t) ? function(t) {
                        try {
                            return pe(t)
                        } catch (t) {
                            return ge.slice()
                        }
                    }(t) : pe(g(t))
                }
            },
            me = {
                f: Ut
            },
            ye = N.f,
            ve = function(t) {
                var e = rt.Symbol || (rt.Symbol = {});
                v(e, t) || ye(e, t, {
                    value: me.f(t)
                })
            },
            we = N.f,
            xe = Ut("toStringTag"),
            Me = function(t, e, n) {
                t && !v(t = n ? t : t.prototype, xe) && we(t, xe, {
                    configurable: !0,
                    value: e
                })
            },
            ke = function(t, e, n) {
                if (function(t) {
                        if ("function" != typeof t) throw TypeError(String(t) + " is not a function")
                    }(t), void 0 === e) return t;
                switch (n) {
                    case 0:
                        return function() {
                            return t.call(e)
                        };
                    case 1:
                        return function(n) {
                            return t.call(e, n)
                        };
                    case 2:
                        return function(n, r) {
                            return t.call(e, n, r)
                        };
                    case 3:
                        return function(n, r, i) {
                            return t.call(e, n, r, i)
                        }
                }
                return function() {
                    return t.apply(e, arguments)
                }
            },
            Se = [].push,
            Ae = function(t) {
                var e = 1 == t,
                    n = 2 == t,
                    r = 3 == t,
                    i = 4 == t,
                    a = 6 == t,
                    o = 5 == t || a;
                return function(s, c, l, f) {
                    for (var u, d, h = zt(s), _ = p(h), g = ke(c, l, 3), b = ft(_.length), m = 0, y = f || Yt, v = e ? y(s, b) : n ? y(s, 0) : void 0; b > m; m++)
                        if ((o || m in _) && (d = g(u = _[m], m, h), t))
                            if (e) v[m] = d;
                            else if (d) switch (t) {
                        case 3:
                            return !0;
                        case 5:
                            return u;
                        case 6:
                            return m;
                        case 2:
                            Se.call(v, u)
                    } else if (i) return !1;
                    return a ? -1 : r || i ? i : v
                }
            },
            Te = {
                forEach: Ae(0),
                map: Ae(1),
                filter: Ae(2),
                some: Ae(3),
                every: Ae(4),
                find: Ae(5),
                findIndex: Ae(6)
            }.forEach,
            Ce = $("hidden"),
            Ne = Ut("toPrimitive"),
            Oe = et.set,
            Ee = et.getterFor("Symbol"),
            ze = Object.prototype,
            Fe = i.Symbol,
            Pe = at("JSON", "stringify"),
            De = A.f,
            je = N.f,
            Le = be.f,
            He = l.f,
            Ue = R("symbols"),
            Re = R("op-symbols"),
            Ye = R("string-to-symbol-registry"),
            qe = R("symbol-to-string-registry"),
            Ie = R("wks"),
            Be = i.QObject,
            $e = !Be || !Be.prototype || !Be.prototype.findChild,
            Ve = o && a((function() {
                return 7 != he(je({}, "a", {
                    get: function() {
                        return je(this, "a", {
                            value: 7
                        }).a
                    }
                })).a
            })) ? function(t, e, n) {
                var r = De(ze, e);
                r && delete ze[e], je(t, e, n), r && t !== ze && je(ze, e, r)
            } : je,
            We = function(t, e) {
                var n = Ue[t] = he(Fe.prototype);
                return Oe(n, {
                    type: "Symbol",
                    tag: t,
                    description: e
                }), o || (n.description = e), n
            },
            Xe = Dt ? function(t) {
                return "symbol" == typeof t
            } : function(t) {
                return Object(t) instanceof Fe
            },
            Ge = function(t, e, n) {
                t === ze && Ge(Re, e, n), T(t);
                var r = m(e, !0);
                return T(n), v(Ue, r) ? (n.enumerable ? (v(t, Ce) && t[Ce][r] && (t[Ce][r] = !1), n = he(n, {
                    enumerable: f(0, !1)
                })) : (v(t, Ce) || je(t, Ce, f(1, {})), t[Ce][r] = !0), Ve(t, r, n)) : je(t, r, n)
            },
            Ze = function(t, e) {
                T(t);
                var n = g(e),
                    r = oe(n).concat(tn(n));
                return Te(r, (function(e) {
                    o && !Je.call(n, e) || Ge(t, e, n[e])
                })), t
            },
            Je = function(t) {
                var e = m(t, !0),
                    n = He.call(this, e);
                return !(this === ze && v(Ue, e) && !v(Re, e)) && (!(n || !v(this, e) || !v(Ue, e) || v(this, Ce) && this[Ce][e]) || n)
            },
            Qe = function(t, e) {
                var n = g(t),
                    r = m(e, !0);
                if (n !== ze || !v(Ue, r) || v(Re, r)) {
                    var i = De(n, r);
                    return !i || !v(Ue, r) || v(n, Ce) && n[Ce][r] || (i.enumerable = !0), i
                }
            },
            Ke = function(t) {
                var e = Le(g(t)),
                    n = [];
                return Te(e, (function(t) {
                    v(Ue, t) || v(V, t) || n.push(t)
                })), n
            },
            tn = function(t) {
                var e = t === ze,
                    n = Le(e ? Re : g(t)),
                    r = [];
                return Te(n, (function(t) {
                    !v(Ue, t) || e && !v(ze, t) || r.push(Ue[t])
                })), r
            };
        if (Pt || (nt((Fe = function() {
                if (this instanceof Fe) throw TypeError("Symbol is not a constructor");
                var t = arguments.length && void 0 !== arguments[0] ? String(arguments[0]) : void 0,
                    e = I(t),
                    n = function(t) {
                        this === ze && n.call(Re, t), v(this, Ce) && v(this[Ce], e) && (this[Ce][e] = !1), Ve(this, e, f(1, t))
                    };
                return o && $e && Ve(ze, e, {
                    configurable: !0,
                    set: n
                }), We(e, t)
            }).prototype, "toString", (function() {
                return Ee(this).tag
            })), nt(Fe, "withoutSetter", (function(t) {
                return We(I(t), t)
            })), l.f = Je, N.f = Ge, A.f = Qe, mt.f = be.f = Ke, yt.f = tn, me.f = function(t) {
                return We(Ut(t), t)
            }, o && (je(Fe.prototype, "description", {
                configurable: !0,
                get: function() {
                    return Ee(this).description
                }
            }), nt(ze, "propertyIsEnumerable", Je, {
                unsafe: !0
            }))), Ot({
                global: !0,
                wrap: !0,
                forced: !Pt,
                sham: !Pt
            }, {
                Symbol: Fe
            }), Te(oe(Ie), (function(t) {
                ve(t)
            })), Ot({
                target: "Symbol",
                stat: !0,
                forced: !Pt
            }, {
                for: function(t) {
                    var e = String(t);
                    if (v(Ye, e)) return Ye[e];
                    var n = Fe(e);
                    return Ye[e] = n, qe[n] = e, n
                },
                keyFor: function(t) {
                    if (!Xe(t)) throw TypeError(t + " is not a symbol");
                    if (v(qe, t)) return qe[t]
                },
                useSetter: function() {
                    $e = !0
                },
                useSimple: function() {
                    $e = !1
                }
            }), Ot({
                target: "Object",
                stat: !0,
                forced: !Pt,
                sham: !o
            }, {
                create: function(t, e) {
                    return void 0 === e ? he(t) : Ze(he(t), e)
                },
                defineProperty: Ge,
                defineProperties: Ze,
                getOwnPropertyDescriptor: Qe
            }), Ot({
                target: "Object",
                stat: !0,
                forced: !Pt
            }, {
                getOwnPropertyNames: Ke,
                getOwnPropertySymbols: tn
            }), Ot({
                target: "Object",
                stat: !0,
                forced: a((function() {
                    yt.f(1)
                }))
            }, {
                getOwnPropertySymbols: function(t) {
                    return yt.f(zt(t))
                }
            }), Pe) {
            var en = !Pt || a((function() {
                var t = Fe();
                return "[null]" != Pe([t]) || "{}" != Pe({
                    a: t
                }) || "{}" != Pe(Object(t))
            }));
            Ot({
                target: "JSON",
                stat: !0,
                forced: en
            }, {
                stringify: function(t, e, n) {
                    for (var r, i = arguments, a = [t], o = 1; arguments.length > o;) a.push(i[o++]);
                    if (r = e, (b(e) || void 0 !== t) && !Xe(t)) return Et(e) || (e = function(t, e) {
                        if ("function" == typeof r && (e = r.call(this, t, e)), !Xe(e)) return e
                    }), a[1] = e, Pe.apply(null, a)
                }
            })
        }
        Fe.prototype[Ne] || O(Fe.prototype, Ne, Fe.prototype.valueOf), Me(Fe, "Symbol"), V[Ce] = !0, ve("asyncIterator");
        var nn = N.f,
            rn = i.Symbol;
        if (o && "function" == typeof rn && (!("description" in rn.prototype) || void 0 !== rn().description)) {
            var an = {},
                on = function() {
                    var t = arguments.length < 1 || void 0 === arguments[0] ? void 0 : String(arguments[0]),
                        e = this instanceof on ? new rn(t) : void 0 === t ? rn() : rn(t);
                    return "" === t && (an[e] = !0), e
                };
            wt(on, rn);
            var sn = on.prototype = rn.prototype;
            sn.constructor = on;
            var cn = sn.toString,
                ln = "Symbol(test)" == String(rn("test")),
                fn = /^Symbol\((.*)\)[^)]+$/;
            nn(sn, "description", {
                configurable: !0,
                get: function() {
                    var t = b(this) ? this.valueOf() : this,
                        e = cn.call(t);
                    if (v(an, t)) return "";
                    var n = ln ? e.slice(7, -1) : e.replace(fn, "$1");
                    return "" === n ? void 0 : n
                }
            }), Ot({
                global: !0,
                forced: !0
            }, {
                Symbol: on
            })
        }
        ve("hasInstance"), ve("isConcatSpreadable"), ve("iterator"), ve("match"), ve("matchAll"), ve("replace"), ve("search"), ve("species"), ve("split"), ve("toPrimitive"), ve("toStringTag"), ve("unscopables"), Me(Math, "Math", !0), Me(i.JSON, "JSON", !0);
        rt.Symbol;
        ve("asyncDispose"), ve("dispose"), ve("observable"), ve("patternMatch"), ve("replaceAll");
        var un = Object.assign,
            dn = Object.defineProperty,
            hn = !un || a((function() {
                if (o && 1 !== un({
                        b: 1
                    }, un(dn({}, "a", {
                        enumerable: !0,
                        get: function() {
                            dn(this, "b", {
                                value: 3,
                                enumerable: !1
                            })
                        }
                    }), {
                        b: 2
                    })).b) return !0;
                var t = {},
                    e = {},
                    n = Symbol();
                return t[n] = 7, "abcdefghijklmnopqrst".split("").forEach((function(t) {
                    e[t] = t
                })), 7 != un({}, t)[n] || "abcdefghijklmnopqrst" != oe(un({}, e)).join("")
            })) ? function(t, e) {
                for (var n = arguments, r = zt(t), i = arguments.length, a = 1, s = yt.f, c = l.f; i > a;)
                    for (var f, u = p(n[a++]), d = s ? oe(u).concat(s(u)) : oe(u), h = d.length, _ = 0; h > _;) f = d[_++], o && !c.call(u, f) || (r[f] = u[f]);
                return r
            } : un;
        Ot({
            target: "Object",
            stat: !0,
            forced: Object.assign !== hn
        }, {
            assign: hn
        });
        rt.Object.assign;
        var pn, _n, gn, bn = function(t) {
                return function(e, n) {
                    var r, i, a = String(_(e)),
                        o = ct(n),
                        s = a.length;
                    return o < 0 || o >= s ? t ? "" : void 0 : (r = a.charCodeAt(o)) < 55296 || r > 56319 || o + 1 === s || (i = a.charCodeAt(o + 1)) < 56320 || i > 57343 ? t ? a.charAt(o) : r : t ? a.slice(o, o + 2) : i - 56320 + (r - 55296 << 10) + 65536
                }
            },
            mn = {
                codeAt: bn(!1),
                charAt: bn(!0)
            },
            yn = !a((function() {
                function t() {}
                return t.prototype.constructor = null, Object.getPrototypeOf(new t) !== t.prototype
            })),
            vn = $("IE_PROTO"),
            wn = Object.prototype,
            xn = yn ? Object.getPrototypeOf : function(t) {
                return t = zt(t), v(t, vn) ? t[vn] : "function" == typeof t.constructor && t instanceof t.constructor ? t.constructor.prototype : t instanceof Object ? wn : null
            },
            Mn = Ut("iterator"),
            kn = !1;
        [].keys && ("next" in (gn = [].keys()) ? (_n = xn(xn(gn))) !== Object.prototype && (pn = _n) : kn = !0), null == pn && (pn = {}), v(pn, Mn) || O(pn, Mn, (function() {
            return this
        }));
        var Sn = {
                IteratorPrototype: pn,
                BUGGY_SAFARI_ITERATORS: kn
            },
            An = {},
            Tn = Sn.IteratorPrototype,
            Cn = function() {
                return this
            },
            Nn = Object.setPrototypeOf || ("__proto__" in {} ? function() {
                var t, e = !1,
                    n = {};
                try {
                    (t = Object.getOwnPropertyDescriptor(Object.prototype, "__proto__").set).call(n, []), e = n instanceof Array
                } catch (t) {}
                return function(n, r) {
                    return T(n),
                        function(t) {
                            if (!b(t) && null !== t) throw TypeError("Can't set " + String(t) + " as a prototype")
                        }(r), e ? t.call(n, r) : n.__proto__ = r, n
                }
            }() : void 0),
            On = Sn.IteratorPrototype,
            En = Sn.BUGGY_SAFARI_ITERATORS,
            zn = Ut("iterator"),
            Fn = function() {
                return this
            },
            Pn = mn.charAt,
            Dn = et.set,
            jn = et.getterFor("String Iterator");
        ! function(t, e, n, r, i, a, o) {
            ! function(t, e, n) {
                var r = e + " Iterator";
                t.prototype = he(Tn, {
                    next: f(1, n)
                }), Me(t, r, !1), An[r] = Cn
            }(n, e, r);
            var s, c, l, u = function(t) {
                    if (t === i && g) return g;
                    if (!En && t in p) return p[t];
                    switch (t) {
                        case "keys":
                        case "values":
                        case "entries":
                            return function() {
                                return new n(this, t)
                            }
                    }
                    return function() {
                        return new n(this)
                    }
                },
                d = e + " Iterator",
                h = !1,
                p = t.prototype,
                _ = p[zn] || p["@@iterator"] || i && p[i],
                g = !En && _ || u(i),
                b = "Array" == e && p.entries || _;
            if (b && (s = xn(b.call(new t)), On !== Object.prototype && s.next && (xn(s) !== On && (Nn ? Nn(s, On) : "function" != typeof s[zn] && O(s, zn, Fn)), Me(s, d, !0))), "values" == i && _ && "values" !== _.name && (h = !0, g = function() {
                    return _.call(this)
                }), p[zn] !== g && O(p, zn, g), An[e] = g, i)
                if (c = {
                        values: u("values"),
                        keys: a ? g : u("keys"),
                        entries: u("entries")
                    }, o)
                    for (l in c)(En || h || !(l in p)) && nt(p, l, c[l]);
                else Ot({
                    target: e,
                    proto: !0,
                    forced: En || h
                }, c)
        }(String, "String", (function(t) {
            Dn(this, {
                type: "String Iterator",
                string: String(t),
                index: 0
            })
        }), (function() {
            var t, e = jn(this),
                n = e.string,
                r = e.index;
            return r >= n.length ? {
                value: void 0,
                done: !0
            } : (t = Pn(n, r), e.index += t.length, {
                value: t,
                done: !1
            })
        }));
        var Ln = function(t, e, n, r) {
                try {
                    return r ? e(T(n)[0], n[1]) : e(n)
                } catch (e) {
                    var i = t.return;
                    throw void 0 !== i && T(i.call(t)), e
                }
            },
            Hn = Ut("iterator"),
            Un = Array.prototype,
            Rn = function(t) {
                return void 0 !== t && (An.Array === t || Un[Hn] === t)
            },
            Yn = Ut("iterator"),
            qn = function(t) {
                if (null != t) return t[Yn] || t["@@iterator"] || An[re(t)]
            },
            In = Ut("iterator"),
            Bn = !1;
        try {
            var $n = 0,
                Vn = {
                    next: function() {
                        return {
                            done: !!$n++
                        }
                    },
                    return: function() {
                        Bn = !0
                    }
                };
            Vn[In] = function() {
                return this
            }, Array.from(Vn, (function() {
                throw 2
            }))
        } catch (t) {}
        var Wn = ! function(t, e) {
            if (!e && !Bn) return !1;
            var n = !1;
            try {
                var r = {};
                r[In] = function() {
                    return {
                        next: function() {
                            return {
                                done: n = !0
                            }
                        }
                    }
                }, t(r)
            } catch (t) {}
            return n
        }((function(t) {
            Array.from(t)
        }));
        Ot({
            target: "Array",
            stat: !0,
            forced: Wn
        }, {
            from: function(t) {
                var e, n, r, i, a, o, s = zt(t),
                    c = "function" == typeof this ? this : Array,
                    l = arguments.length,
                    f = l > 1 ? arguments[1] : void 0,
                    u = void 0 !== f,
                    d = qn(s),
                    h = 0;
                if (u && (f = ke(f, l > 2 ? arguments[2] : void 0, 2)), null == d || c == Array && Rn(d))
                    for (n = new c(e = ft(s.length)); e > h; h++) o = u ? f(s[h], h) : s[h], Ft(n, h, o);
                else
                    for (a = (i = d.call(s)).next, n = new c; !(r = a.call(i)).done; h++) o = u ? Ln(i, f, [r.value, h], !0) : r.value, Ft(n, h, o);
                return n.length = h, n
            }
        });
        rt.Array.from;
        var Xn = {},
            Gn = {
                localization: {},
                value_format: {
                    n_dec: 0
                },
                layout: {
                    space_between_sections: .5,
                    layout_order: "stack-3"
                },
                color: {},
                color_single: "#1d6996",
                color_single_overrides: "China: red",
                color_mode: "category",
                column_chart: !1,
                sort_enabled: !0,
                sort_control: !1,
                sort_ascending: !1,
                sort_descending_text: "Highest",
                sort_ascending_text: "Lowest",
                axis_color: "#dddddd",
                axis_text_color: null,
                axis_font_size: 1,
                label_max_size: 1,
                label_color_in: null,
                label_color_out: null,
                show_value: !0,
                label_mode: "axis",
                label_axis_width: 5,
                blank_cells: "interpolate",
                counter: !0,
                counter_font_size: 10,
                counter_line_height: 1,
                counter_color: "#cccccc",
                totaliser: !0,
                totaliser_label: "Total:",
                totaliser_font_size: 4,
                totaliser_space_before: 1.3,
                totaliser_color: "#cccccc",
                caption_mode: "text_legend",
                caption_font_size: 1.2,
                caption_text_color: "#000000",
                caption_background_color: "#ffffff",
                caption_opacity: 1,
                caption_border_color: "#ffffff",
                caption_text_align: "center",
                caption_border_radius: .5,
                caption_padding: 1,
                caption_position: "center-center",
                caption_space_between: 1,
                caption_image_width: 50,
                caption_image_position: "column",
                annotations_enabled: !0,
                annotations_content: "",
                annotations_align: "middle",
                annotations_offset: "on",
                annotations_text_color: null,
                annotations_text_size: 1,
                annotations_text_weight: "normal",
                annotations_line_color: null,
                annotations_line_opacity: 1,
                annotations_line_width: 1,
                annotations_line_dash: 0,
                bar_opacity: .85,
                padding_right: 7,
                legend: {},
                legend_filter: [],
                text_legend: "auto",
                text_legend_title: !0,
                text_legend_subtitle: !0,
                text_legend_caption: !0,
                text_legend_bold: !0,
                number_of_bars: 10,
                bar_min_value: null,
                bar_margin: 10,
                height_mode: "fill_space",
                bar_height: 2,
                bar_empty_spaces: !1,
                image_height: 90,
                image_width: 145,
                image_margin_right: -20,
                image_scale: "fill",
                image_circle: !0,
                index: 0,
                animation_duration: .5,
                timeline: {
                    color_background: "#ffffff",
                    color_axes: "#aaaaaa",
                    graph_height: 6,
                    graph: !1,
                    margin: {
                        top: .75,
                        left: .75,
                        right: 0,
                        bottom: 0
                    }
                },
                reloader: {},
                scale_type: "auto",
                scale_min: null,
                scale_max: 1e4
            },
            Zn = "http://www.w3.org/1999/xhtml",
            Jn = {
                svg: "http://www.w3.org/2000/svg",
                xhtml: Zn,
                xlink: "http://www.w3.org/1999/xlink",
                xml: "http://www.w3.org/XML/1998/namespace",
                xmlns: "http://www.w3.org/2000/xmlns/"
            };

        function Qn(t) {
            var e = t += "",
                n = e.indexOf(":");
            return n >= 0 && "xmlns" !== (e = t.slice(0, n)) && (t = t.slice(n + 1)), Jn.hasOwnProperty(e) ? {
                space: Jn[e],
                local: t
            } : t
        }

        function Kn(t) {
            return function() {
                var e = this.ownerDocument,
                    n = this.namespaceURI;
                return n === Zn && e.documentElement.namespaceURI === Zn ? e.createElement(t) : e.createElementNS(n, t)
            }
        }

        function tr(t) {
            return function() {
                return this.ownerDocument.createElementNS(t.space, t.local)
            }
        }

        function er(t) {
            var e = Qn(t);
            return (e.local ? tr : Kn)(e)
        }

        function nr() {}

        function rr(t) {
            return null == t ? nr : function() {
                return this.querySelector(t)
            }
        }

        function ir() {
            return []
        }

        function ar(t) {
            return null == t ? ir : function() {
                return this.querySelectorAll(t)
            }
        }

        function or(t) {
            return function() {
                return this.matches(t)
            }
        }

        function sr(t) {
            return new Array(t.length)
        }

        function cr(t, e) {
            this.ownerDocument = t.ownerDocument, this.namespaceURI = t.namespaceURI, this._next = null, this._parent = t, this.__data__ = e
        }
        cr.prototype = {
            constructor: cr,
            appendChild: function(t) {
                return this._parent.insertBefore(t, this._next)
            },
            insertBefore: function(t, e) {
                return this._parent.insertBefore(t, e)
            },
            querySelector: function(t) {
                return this._parent.querySelector(t)
            },
            querySelectorAll: function(t) {
                return this._parent.querySelectorAll(t)
            }
        };

        function lr(t, e, n, r, i, a) {
            for (var o, s = 0, c = e.length, l = a.length; s < l; ++s)(o = e[s]) ? (o.__data__ = a[s], r[s] = o) : n[s] = new cr(t, a[s]);
            for (; s < c; ++s)(o = e[s]) && (i[s] = o)
        }

        function fr(t, e, n, r, i, a, o) {
            var s, c, l, f = {},
                u = e.length,
                d = a.length,
                h = new Array(u);
            for (s = 0; s < u; ++s)(c = e[s]) && (h[s] = l = "$" + o.call(c, c.__data__, s, e), l in f ? i[s] = c : f[l] = c);
            for (s = 0; s < d; ++s)(c = f[l = "$" + o.call(t, a[s], s, a)]) ? (r[s] = c, c.__data__ = a[s], f[l] = null) : n[s] = new cr(t, a[s]);
            for (s = 0; s < u; ++s)(c = e[s]) && f[h[s]] === c && (i[s] = c)
        }

        function ur(t, e) {
            return t < e ? -1 : t > e ? 1 : t >= e ? 0 : NaN
        }

        function dr(t) {
            return function() {
                this.removeAttribute(t)
            }
        }

        function hr(t) {
            return function() {
                this.removeAttributeNS(t.space, t.local)
            }
        }

        function pr(t, e) {
            return function() {
                this.setAttribute(t, e)
            }
        }

        function _r(t, e) {
            return function() {
                this.setAttributeNS(t.space, t.local, e)
            }
        }

        function gr(t, e) {
            return function() {
                var n = e.apply(this, arguments);
                null == n ? this.removeAttribute(t) : this.setAttribute(t, n)
            }
        }

        function br(t, e) {
            return function() {
                var n = e.apply(this, arguments);
                null == n ? this.removeAttributeNS(t.space, t.local) : this.setAttributeNS(t.space, t.local, n)
            }
        }

        function mr(t) {
            return t.ownerDocument && t.ownerDocument.defaultView || t.document && t || t.defaultView
        }

        function yr(t) {
            return function() {
                this.style.removeProperty(t)
            }
        }

        function vr(t, e, n) {
            return function() {
                this.style.setProperty(t, e, n)
            }
        }

        function wr(t, e, n) {
            return function() {
                var r = e.apply(this, arguments);
                null == r ? this.style.removeProperty(t) : this.style.setProperty(t, r, n)
            }
        }

        function xr(t, e) {
            return t.style.getPropertyValue(e) || mr(t).getComputedStyle(t, null).getPropertyValue(e)
        }

        function Mr(t) {
            return function() {
                delete this[t]
            }
        }

        function kr(t, e) {
            return function() {
                this[t] = e
            }
        }

        function Sr(t, e) {
            return function() {
                var n = e.apply(this, arguments);
                null == n ? delete this[t] : this[t] = n
            }
        }

        function Ar(t) {
            return t.trim().split(/^|\s+/)
        }

        function Tr(t) {
            return t.classList || new Cr(t)
        }

        function Cr(t) {
            this._node = t, this._names = Ar(t.getAttribute("class") || "")
        }

        function Nr(t, e) {
            for (var n = Tr(t), r = -1, i = e.length; ++r < i;) n.add(e[r])
        }

        function Or(t, e) {
            for (var n = Tr(t), r = -1, i = e.length; ++r < i;) n.remove(e[r])
        }

        function Er(t) {
            return function() {
                Nr(this, t)
            }
        }

        function zr(t) {
            return function() {
                Or(this, t)
            }
        }

        function Fr(t, e) {
            return function() {
                (e.apply(this, arguments) ? Nr : Or)(this, t)
            }
        }

        function Pr() {
            this.textContent = ""
        }

        function Dr(t) {
            return function() {
                this.textContent = t
            }
        }

        function jr(t) {
            return function() {
                var e = t.apply(this, arguments);
                this.textContent = null == e ? "" : e
            }
        }

        function Lr() {
            this.innerHTML = ""
        }

        function Hr(t) {
            return function() {
                this.innerHTML = t
            }
        }

        function Ur(t) {
            return function() {
                var e = t.apply(this, arguments);
                this.innerHTML = null == e ? "" : e
            }
        }

        function Rr() {
            this.nextSibling && this.parentNode.appendChild(this)
        }

        function Yr() {
            this.previousSibling && this.parentNode.insertBefore(this, this.parentNode.firstChild)
        }

        function qr() {
            return null
        }

        function Ir() {
            var t = this.parentNode;
            t && t.removeChild(this)
        }

        function Br() {
            return this.parentNode.insertBefore(this.cloneNode(!1), this.nextSibling)
        }

        function $r() {
            return this.parentNode.insertBefore(this.cloneNode(!0), this.nextSibling)
        }
        Cr.prototype = {
            add: function(t) {
                this._names.indexOf(t) < 0 && (this._names.push(t), this._node.setAttribute("class", this._names.join(" ")))
            },
            remove: function(t) {
                var e = this._names.indexOf(t);
                e >= 0 && (this._names.splice(e, 1), this._node.setAttribute("class", this._names.join(" ")))
            },
            contains: function(t) {
                return this._names.indexOf(t) >= 0
            }
        };
        var Vr = {},
            Wr = null;
        "undefined" != typeof document && ("onmouseenter" in document.documentElement || (Vr = {
            mouseenter: "mouseover",
            mouseleave: "mouseout"
        }));

        function Xr(t, e, n) {
            return t = Gr(t, e, n),
                function(e) {
                    var n = e.relatedTarget;
                    n && (n === this || 8 & n.compareDocumentPosition(this)) || t.call(this, e)
                }
        }

        function Gr(t, e, n) {
            return function(r) {
                var i = Wr;
                Wr = r;
                try {
                    t.call(this, this.__data__, e, n)
                } finally {
                    Wr = i
                }
            }
        }

        function Zr(t) {
            return t.trim().split(/^|\s+/).map((function(t) {
                var e = "",
                    n = t.indexOf(".");
                return n >= 0 && (e = t.slice(n + 1), t = t.slice(0, n)), {
                    type: t,
                    name: e
                }
            }))
        }

        function Jr(t) {
            return function() {
                var e = this.__on;
                if (e) {
                    for (var n, r = 0, i = -1, a = e.length; r < a; ++r) n = e[r], t.type && n.type !== t.type || n.name !== t.name ? e[++i] = n : this.removeEventListener(n.type, n.listener, n.capture);
                    ++i ? e.length = i : delete this.__on
                }
            }
        }

        function Qr(t, e, n) {
            var r = Vr.hasOwnProperty(t.type) ? Xr : Gr;
            return function(i, a, o) {
                var s, c = this.__on,
                    l = r(e, a, o);
                if (c)
                    for (var f = 0, u = c.length; f < u; ++f)
                        if ((s = c[f]).type === t.type && s.name === t.name) return this.removeEventListener(s.type, s.listener, s.capture), this.addEventListener(s.type, s.listener = l, s.capture = n), void(s.value = e);
                this.addEventListener(t.type, l, n), s = {
                    type: t.type,
                    name: t.name,
                    value: e,
                    listener: l,
                    capture: n
                }, c ? c.push(s) : this.__on = [s]
            }
        }

        function Kr(t, e, n) {
            var r = mr(t),
                i = r.CustomEvent;
            "function" == typeof i ? i = new i(e, n) : (i = r.document.createEvent("Event"), n ? (i.initEvent(e, n.bubbles, n.cancelable), i.detail = n.detail) : i.initEvent(e, !1, !1)), t.dispatchEvent(i)
        }

        function ti(t, e) {
            return function() {
                return Kr(this, t, e)
            }
        }

        function ei(t, e) {
            return function() {
                return Kr(this, t, e.apply(this, arguments))
            }
        }
        var ni = [null];

        function ri(t, e) {
            this._groups = t, this._parents = e
        }

        function ii() {
            return new ri([
                [document.documentElement]
            ], ni)
        }

        function ai(t) {
            return "string" == typeof t ? new ri([
                [document.querySelector(t)]
            ], [document.documentElement]) : new ri([
                [t]
            ], ni)
        }

        function oi(t, e) {
            return t < e ? -1 : t > e ? 1 : t >= e ? 0 : NaN
        }

        function si(t) {
            return 1 === t.length && (t = function(t) {
                return function(e, n) {
                    return oi(t(e), n)
                }
            }(t)), {
                left: function(e, n, r, i) {
                    for (null == r && (r = 0), null == i && (i = e.length); r < i;) {
                        var a = r + i >>> 1;
                        t(e[a], n) < 0 ? r = a + 1 : i = a
                    }
                    return r
                },
                right: function(e, n, r, i) {
                    for (null == r && (r = 0), null == i && (i = e.length); r < i;) {
                        var a = r + i >>> 1;
                        t(e[a], n) > 0 ? i = a : r = a + 1
                    }
                    return r
                }
            }
        }
        ri.prototype = ii.prototype = {
            constructor: ri,
            select: function(t) {
                "function" != typeof t && (t = rr(t));
                for (var e = this._groups, n = e.length, r = new Array(n), i = 0; i < n; ++i)
                    for (var a, o, s = e[i], c = s.length, l = r[i] = new Array(c), f = 0; f < c; ++f)(a = s[f]) && (o = t.call(a, a.__data__, f, s)) && ("__data__" in a && (o.__data__ = a.__data__), l[f] = o);
                return new ri(r, this._parents)
            },
            selectAll: function(t) {
                "function" != typeof t && (t = ar(t));
                for (var e = this._groups, n = e.length, r = [], i = [], a = 0; a < n; ++a)
                    for (var o, s = e[a], c = s.length, l = 0; l < c; ++l)(o = s[l]) && (r.push(t.call(o, o.__data__, l, s)), i.push(o));
                return new ri(r, i)
            },
            filter: function(t) {
                "function" != typeof t && (t = or(t));
                for (var e = this._groups, n = e.length, r = new Array(n), i = 0; i < n; ++i)
                    for (var a, o = e[i], s = o.length, c = r[i] = [], l = 0; l < s; ++l)(a = o[l]) && t.call(a, a.__data__, l, o) && c.push(a);
                return new ri(r, this._parents)
            },
            data: function(t, e) {
                if (!t) return h = new Array(this.size()), l = -1, this.each((function(t) {
                    h[++l] = t
                })), h;
                var n = e ? fr : lr,
                    r = this._parents,
                    i = this._groups;
                "function" != typeof t && (t = function(t) {
                    return function() {
                        return t
                    }
                }(t));
                for (var a = i.length, o = new Array(a), s = new Array(a), c = new Array(a), l = 0; l < a; ++l) {
                    var f = r[l],
                        u = i[l],
                        d = u.length,
                        h = t.call(f, f && f.__data__, l, r),
                        p = h.length,
                        _ = s[l] = new Array(p),
                        g = o[l] = new Array(p);
                    n(f, u, _, g, c[l] = new Array(d), h, e);
                    for (var b, m, y = 0, v = 0; y < p; ++y)
                        if (b = _[y]) {
                            for (y >= v && (v = y + 1); !(m = g[v]) && ++v < p;);
                            b._next = m || null
                        }
                }
                return (o = new ri(o, r))._enter = s, o._exit = c, o
            },
            enter: function() {
                return new ri(this._enter || this._groups.map(sr), this._parents)
            },
            exit: function() {
                return new ri(this._exit || this._groups.map(sr), this._parents)
            },
            join: function(t, e, n) {
                var r = this.enter(),
                    i = this,
                    a = this.exit();
                return r = "function" == typeof t ? t(r) : r.append(t + ""), null != e && (i = e(i)), null == n ? a.remove() : n(a), r && i ? r.merge(i).order() : i
            },
            merge: function(t) {
                for (var e = this._groups, n = t._groups, r = e.length, i = n.length, a = Math.min(r, i), o = new Array(r), s = 0; s < a; ++s)
                    for (var c, l = e[s], f = n[s], u = l.length, d = o[s] = new Array(u), h = 0; h < u; ++h)(c = l[h] || f[h]) && (d[h] = c);
                for (; s < r; ++s) o[s] = e[s];
                return new ri(o, this._parents)
            },
            order: function() {
                for (var t = this._groups, e = -1, n = t.length; ++e < n;)
                    for (var r, i = t[e], a = i.length - 1, o = i[a]; --a >= 0;)(r = i[a]) && (o && 4 ^ r.compareDocumentPosition(o) && o.parentNode.insertBefore(r, o), o = r);
                return this
            },
            sort: function(t) {
                function e(e, n) {
                    return e && n ? t(e.__data__, n.__data__) : !e - !n
                }
                t || (t = ur);
                for (var n = this._groups, r = n.length, i = new Array(r), a = 0; a < r; ++a) {
                    for (var o, s = n[a], c = s.length, l = i[a] = new Array(c), f = 0; f < c; ++f)(o = s[f]) && (l[f] = o);
                    l.sort(e)
                }
                return new ri(i, this._parents).order()
            },
            call: function() {
                var t = arguments[0];
                return arguments[0] = this, t.apply(null, arguments), this
            },
            nodes: function() {
                var t = new Array(this.size()),
                    e = -1;
                return this.each((function() {
                    t[++e] = this
                })), t
            },
            node: function() {
                for (var t = this._groups, e = 0, n = t.length; e < n; ++e)
                    for (var r = t[e], i = 0, a = r.length; i < a; ++i) {
                        var o = r[i];
                        if (o) return o
                    }
                return null
            },
            size: function() {
                var t = 0;
                return this.each((function() {
                    ++t
                })), t
            },
            empty: function() {
                return !this.node()
            },
            each: function(t) {
                for (var e = this._groups, n = 0, r = e.length; n < r; ++n)
                    for (var i, a = e[n], o = 0, s = a.length; o < s; ++o)(i = a[o]) && t.call(i, i.__data__, o, a);
                return this
            },
            attr: function(t, e) {
                var n = Qn(t);
                if (arguments.length < 2) {
                    var r = this.node();
                    return n.local ? r.getAttributeNS(n.space, n.local) : r.getAttribute(n)
                }
                return this.each((null == e ? n.local ? hr : dr : "function" == typeof e ? n.local ? br : gr : n.local ? _r : pr)(n, e))
            },
            style: function(t, e, n) {
                return arguments.length > 1 ? this.each((null == e ? yr : "function" == typeof e ? wr : vr)(t, e, null == n ? "" : n)) : xr(this.node(), t)
            },
            property: function(t, e) {
                return arguments.length > 1 ? this.each((null == e ? Mr : "function" == typeof e ? Sr : kr)(t, e)) : this.node()[t]
            },
            classed: function(t, e) {
                var n = Ar(t + "");
                if (arguments.length < 2) {
                    for (var r = Tr(this.node()), i = -1, a = n.length; ++i < a;)
                        if (!r.contains(n[i])) return !1;
                    return !0
                }
                return this.each(("function" == typeof e ? Fr : e ? Er : zr)(n, e))
            },
            text: function(t) {
                return arguments.length ? this.each(null == t ? Pr : ("function" == typeof t ? jr : Dr)(t)) : this.node().textContent
            },
            html: function(t) {
                return arguments.length ? this.each(null == t ? Lr : ("function" == typeof t ? Ur : Hr)(t)) : this.node().innerHTML
            },
            raise: function() {
                return this.each(Rr)
            },
            lower: function() {
                return this.each(Yr)
            },
            append: function(t) {
                var e = "function" == typeof t ? t : er(t);
                return this.select((function() {
                    return this.appendChild(e.apply(this, arguments))
                }))
            },
            insert: function(t, e) {
                var n = "function" == typeof t ? t : er(t),
                    r = null == e ? qr : "function" == typeof e ? e : rr(e);
                return this.select((function() {
                    return this.insertBefore(n.apply(this, arguments), r.apply(this, arguments) || null)
                }))
            },
            remove: function() {
                return this.each(Ir)
            },
            clone: function(t) {
                return this.select(t ? $r : Br)
            },
            datum: function(t) {
                return arguments.length ? this.property("__data__", t) : this.node().__data__
            },
            on: function(t, e, n) {
                var r, i, a = Zr(t + ""),
                    o = a.length;
                if (!(arguments.length < 2)) {
                    for (s = e ? Qr : Jr, null == n && (n = !1), r = 0; r < o; ++r) this.each(s(a[r], e, n));
                    return this
                }
                var s = this.node().__on;
                if (s)
                    for (var c, l = 0, f = s.length; l < f; ++l)
                        for (r = 0, c = s[l]; r < o; ++r)
                            if ((i = a[r]).type === c.type && i.name === c.name) return c.value
            },
            dispatch: function(t, e) {
                return this.each(("function" == typeof e ? ei : ti)(t, e))
            }
        };
        var ci = si(oi).right;

        function li(t, e) {
            return e < t ? -1 : e > t ? 1 : e >= t ? 0 : NaN
        }
        var fi = Math.sqrt(50),
            ui = Math.sqrt(10),
            di = Math.sqrt(2);

        function hi(t, e, n) {
            var r = (e - t) / Math.max(0, n),
                i = Math.floor(Math.log(r) / Math.LN10),
                a = r / Math.pow(10, i);
            return i >= 0 ? (a >= fi ? 10 : a >= ui ? 5 : a >= di ? 2 : 1) * Math.pow(10, i) : -Math.pow(10, -i) / (a >= fi ? 10 : a >= ui ? 5 : a >= di ? 2 : 1)
        }

        function pi(t, e, n) {
            var r = Math.abs(e - t) / Math.max(0, n),
                i = Math.pow(10, Math.floor(Math.log(r) / Math.LN10)),
                a = r / i;
            return a >= fi ? i *= 10 : a >= ui ? i *= 5 : a >= di && (i *= 2), e < t ? -i : i
        }

        function _i(t, e) {
            var n;
            if (void 0 === e)
                for (var r = 0, i = t; r < i.length; r += 1) {
                    var a = i[r];
                    null != a && (n < a || void 0 === n && a >= a) && (n = a)
                } else
                    for (var o = -1, s = 0, c = t; s < c.length; s += 1) {
                        var l = c[s];
                        null != (l = e(l, ++o, t)) && (n < l || void 0 === n && l >= l) && (n = l)
                    }
            return n
        }

        function gi(t, e) {
            var n;
            if (void 0 === e)
                for (var r = 0, i = t; r < i.length; r += 1) {
                    var a = i[r];
                    null != a && (n > a || void 0 === n && a >= a) && (n = a)
                } else
                    for (var o = -1, s = 0, c = t; s < c.length; s += 1) {
                        var l = c[s];
                        null != (l = e(l, ++o, t)) && (n > l || void 0 === n && l >= l) && (n = l)
                    }
            return n
        }

        function bi(t, e) {
            return t < e ? -1 : t > e ? 1 : t >= e ? 0 : NaN
        }
        var mi, yi = (1 === (mi = bi).length && (mi = function(t) {
                return function(e, n) {
                    return bi(t(e), n)
                }
            }(mi)), {
                left: function(t, e, n, r) {
                    for (null == n && (n = 0), null == r && (r = t.length); n < r;) {
                        var i = n + r >>> 1;
                        mi(t[i], e) < 0 ? n = i + 1 : r = i
                    }
                    return n
                },
                right: function(t, e, n, r) {
                    for (null == n && (n = 0), null == r && (r = t.length); n < r;) {
                        var i = n + r >>> 1;
                        mi(t[i], e) > 0 ? r = i : n = i + 1
                    }
                    return n
                }
            }).right,
            vi = Math.sqrt(50),
            wi = Math.sqrt(10),
            xi = Math.sqrt(2);

        function Mi(t, e, n) {
            var r = (e - t) / Math.max(0, n),
                i = Math.floor(Math.log(r) / Math.LN10),
                a = r / Math.pow(10, i);
            return i >= 0 ? (a >= vi ? 10 : a >= wi ? 5 : a >= xi ? 2 : 1) * Math.pow(10, i) : -Math.pow(10, -i) / (a >= vi ? 10 : a >= wi ? 5 : a >= xi ? 2 : 1)
        }

        function ki(t, e) {
            switch (arguments.length) {
                case 0:
                    break;
                case 1:
                    this.range(t);
                    break;
                default:
                    this.range(e).domain(t)
            }
            return this
        }

        function Si(t, e) {
            switch (arguments.length) {
                case 0:
                    break;
                case 1:
                    this.interpolator(t);
                    break;
                default:
                    this.interpolator(e).domain(t)
            }
            return this
        }

        function Ai() {}

        function Ti(t, e) {
            var n = new Ai;
            if (t instanceof Ai) t.each((function(t, e) {
                n.set(e, t)
            }));
            else if (Array.isArray(t)) {
                var r, i = -1,
                    a = t.length;
                if (null == e)
                    for (; ++i < a;) n.set(i, t[i]);
                else
                    for (; ++i < a;) n.set(e(r = t[i], i, t), r)
            } else if (t)
                for (var o in t) n.set(o, t[o]);
            return n
        }

        function Ci() {}
        Ai.prototype = Ti.prototype = {
            constructor: Ai,
            has: function(t) {
                return "$" + t in this
            },
            get: function(t) {
                return this["$" + t]
            },
            set: function(t, e) {
                return this["$" + t] = e, this
            },
            remove: function(t) {
                var e = "$" + t;
                return e in this && delete this[e]
            },
            clear: function() {
                for (var t in this) "$" === t[0] && delete this[t]
            },
            keys: function() {
                var t = [];
                for (var e in this) "$" === e[0] && t.push(e.slice(1));
                return t
            },
            values: function() {
                var t = [];
                for (var e in this) "$" === e[0] && t.push(this[e]);
                return t
            },
            entries: function() {
                var t = [];
                for (var e in this) "$" === e[0] && t.push({
                    key: e.slice(1),
                    value: this[e]
                });
                return t
            },
            size: function() {
                var t = 0;
                for (var e in this) "$" === e[0] && ++t;
                return t
            },
            empty: function() {
                for (var t in this)
                    if ("$" === t[0]) return !1;
                return !0
            },
            each: function(t) {
                for (var e in this) "$" === e[0] && t(this[e], e.slice(1), this)
            }
        };
        var Ni = Ti.prototype;

        function Oi(t, e) {
            var n = new Ci;
            if (t instanceof Ci) t.each((function(t) {
                n.add(t)
            }));
            else if (t) {
                var r = -1,
                    i = t.length;
                if (null == e)
                    for (; ++r < i;) n.add(t[r]);
                else
                    for (; ++r < i;) n.add(e(t[r], r, t))
            }
            return n
        }
        Ci.prototype = Oi.prototype = {
            constructor: Ci,
            has: Ni.has,
            add: function(t) {
                return this["$" + (t += "")] = t, this
            },
            remove: Ni.remove,
            clear: Ni.clear,
            values: Ni.keys,
            size: Ni.size,
            empty: Ni.empty,
            each: Ni.each
        };
        var Ei = Array.prototype,
            zi = Ei.map,
            Fi = Ei.slice;

        function Pi(t, e, n) {
            t.prototype = e.prototype = n, n.constructor = t
        }

        function Di(t, e) {
            var n = Object.create(t.prototype);
            for (var r in e) n[r] = e[r];
            return n
        }

        function ji() {}
        var Li = "\\s*([+-]?\\d+)\\s*",
            Hi = "\\s*([+-]?\\d*\\.?\\d+(?:[eE][+-]?\\d+)?)\\s*",
            Ui = "\\s*([+-]?\\d*\\.?\\d+(?:[eE][+-]?\\d+)?)%\\s*",
            Ri = /^#([0-9a-f]{3})$/,
            Yi = /^#([0-9a-f]{6})$/,
            qi = new RegExp("^rgb\\(" + [Li, Li, Li] + "\\)$"),
            Ii = new RegExp("^rgb\\(" + [Ui, Ui, Ui] + "\\)$"),
            Bi = new RegExp("^rgba\\(" + [Li, Li, Li, Hi] + "\\)$"),
            $i = new RegExp("^rgba\\(" + [Ui, Ui, Ui, Hi] + "\\)$"),
            Vi = new RegExp("^hsl\\(" + [Hi, Ui, Ui] + "\\)$"),
            Wi = new RegExp("^hsla\\(" + [Hi, Ui, Ui, Hi] + "\\)$"),
            Xi = {
                aliceblue: 15792383,
                antiquewhite: 16444375,
                aqua: 65535,
                aquamarine: 8388564,
                azure: 15794175,
                beige: 16119260,
                bisque: 16770244,
                black: 0,
                blanchedalmond: 16772045,
                blue: 255,
                blueviolet: 9055202,
                brown: 10824234,
                burlywood: 14596231,
                cadetblue: 6266528,
                chartreuse: 8388352,
                chocolate: 13789470,
                coral: 16744272,
                cornflowerblue: 6591981,
                cornsilk: 16775388,
                crimson: 14423100,
                cyan: 65535,
                darkblue: 139,
                darkcyan: 35723,
                darkgoldenrod: 12092939,
                darkgray: 11119017,
                darkgreen: 25600,
                darkgrey: 11119017,
                darkkhaki: 12433259,
                darkmagenta: 9109643,
                darkolivegreen: 5597999,
                darkorange: 16747520,
                darkorchid: 10040012,
                darkred: 9109504,
                darksalmon: 15308410,
                darkseagreen: 9419919,
                darkslateblue: 4734347,
                darkslategray: 3100495,
                darkslategrey: 3100495,
                darkturquoise: 52945,
                darkviolet: 9699539,
                deeppink: 16716947,
                deepskyblue: 49151,
                dimgray: 6908265,
                dimgrey: 6908265,
                dodgerblue: 2003199,
                firebrick: 11674146,
                floralwhite: 16775920,
                forestgreen: 2263842,
                fuchsia: 16711935,
                gainsboro: 14474460,
                ghostwhite: 16316671,
                gold: 16766720,
                goldenrod: 14329120,
                gray: 8421504,
                green: 32768,
                greenyellow: 11403055,
                grey: 8421504,
                honeydew: 15794160,
                hotpink: 16738740,
                indianred: 13458524,
                indigo: 4915330,
                ivory: 16777200,
                khaki: 15787660,
                lavender: 15132410,
                lavenderblush: 16773365,
                lawngreen: 8190976,
                lemonchiffon: 16775885,
                lightblue: 11393254,
                lightcoral: 15761536,
                lightcyan: 14745599,
                lightgoldenrodyellow: 16448210,
                lightgray: 13882323,
                lightgreen: 9498256,
                lightgrey: 13882323,
                lightpink: 16758465,
                lightsalmon: 16752762,
                lightseagreen: 2142890,
                lightskyblue: 8900346,
                lightslategray: 7833753,
                lightslategrey: 7833753,
                lightsteelblue: 11584734,
                lightyellow: 16777184,
                lime: 65280,
                limegreen: 3329330,
                linen: 16445670,
                magenta: 16711935,
                maroon: 8388608,
                mediumaquamarine: 6737322,
                mediumblue: 205,
                mediumorchid: 12211667,
                mediumpurple: 9662683,
                mediumseagreen: 3978097,
                mediumslateblue: 8087790,
                mediumspringgreen: 64154,
                mediumturquoise: 4772300,
                mediumvioletred: 13047173,
                midnightblue: 1644912,
                mintcream: 16121850,
                mistyrose: 16770273,
                moccasin: 16770229,
                navajowhite: 16768685,
                navy: 128,
                oldlace: 16643558,
                olive: 8421376,
                olivedrab: 7048739,
                orange: 16753920,
                orangered: 16729344,
                orchid: 14315734,
                palegoldenrod: 15657130,
                palegreen: 10025880,
                paleturquoise: 11529966,
                palevioletred: 14381203,
                papayawhip: 16773077,
                peachpuff: 16767673,
                peru: 13468991,
                pink: 16761035,
                plum: 14524637,
                powderblue: 11591910,
                purple: 8388736,
                rebeccapurple: 6697881,
                red: 16711680,
                rosybrown: 12357519,
                royalblue: 4286945,
                saddlebrown: 9127187,
                salmon: 16416882,
                sandybrown: 16032864,
                seagreen: 3050327,
                seashell: 16774638,
                sienna: 10506797,
                silver: 12632256,
                skyblue: 8900331,
                slateblue: 6970061,
                slategray: 7372944,
                slategrey: 7372944,
                snow: 16775930,
                springgreen: 65407,
                steelblue: 4620980,
                tan: 13808780,
                teal: 32896,
                thistle: 14204888,
                tomato: 16737095,
                turquoise: 4251856,
                violet: 15631086,
                wheat: 16113331,
                white: 16777215,
                whitesmoke: 16119285,
                yellow: 16776960,
                yellowgreen: 10145074
            };

        function Gi(t) {
            var e;
            return t = (t + "").trim().toLowerCase(), (e = Ri.exec(t)) ? new ta((e = parseInt(e[1], 16)) >> 8 & 15 | e >> 4 & 240, e >> 4 & 15 | 240 & e, (15 & e) << 4 | 15 & e, 1) : (e = Yi.exec(t)) ? Zi(parseInt(e[1], 16)) : (e = qi.exec(t)) ? new ta(e[1], e[2], e[3], 1) : (e = Ii.exec(t)) ? new ta(255 * e[1] / 100, 255 * e[2] / 100, 255 * e[3] / 100, 1) : (e = Bi.exec(t)) ? Ji(e[1], e[2], e[3], e[4]) : (e = $i.exec(t)) ? Ji(255 * e[1] / 100, 255 * e[2] / 100, 255 * e[3] / 100, e[4]) : (e = Vi.exec(t)) ? na(e[1], e[2] / 100, e[3] / 100, 1) : (e = Wi.exec(t)) ? na(e[1], e[2] / 100, e[3] / 100, e[4]) : Xi.hasOwnProperty(t) ? Zi(Xi[t]) : "transparent" === t ? new ta(NaN, NaN, NaN, 0) : null
        }

        function Zi(t) {
            return new ta(t >> 16 & 255, t >> 8 & 255, 255 & t, 1)
        }

        function Ji(t, e, n, r) {
            return r <= 0 && (t = e = n = NaN), new ta(t, e, n, r)
        }

        function Qi(t) {
            return t instanceof ji || (t = Gi(t)), t ? new ta((t = t.rgb()).r, t.g, t.b, t.opacity) : new ta
        }

        function Ki(t, e, n, r) {
            return 1 === arguments.length ? Qi(t) : new ta(t, e, n, null == r ? 1 : r)
        }

        function ta(t, e, n, r) {
            this.r = +t, this.g = +e, this.b = +n, this.opacity = +r
        }

        function ea(t) {
            return ((t = Math.max(0, Math.min(255, Math.round(t) || 0))) < 16 ? "0" : "") + t.toString(16)
        }

        function na(t, e, n, r) {
            return r <= 0 ? t = e = n = NaN : n <= 0 || n >= 1 ? t = e = NaN : e <= 0 && (t = NaN), new aa(t, e, n, r)
        }

        function ra(t) {
            if (t instanceof aa) return new aa(t.h, t.s, t.l, t.opacity);
            if (t instanceof ji || (t = Gi(t)), !t) return new aa;
            if (t instanceof aa) return t;
            var e = (t = t.rgb()).r / 255,
                n = t.g / 255,
                r = t.b / 255,
                i = Math.min(e, n, r),
                a = Math.max(e, n, r),
                o = NaN,
                s = a - i,
                c = (a + i) / 2;
            return s ? (o = e === a ? (n - r) / s + 6 * (n < r) : n === a ? (r - e) / s + 2 : (e - n) / s + 4, s /= c < .5 ? a + i : 2 - a - i, o *= 60) : s = c > 0 && c < 1 ? 0 : o, new aa(o, s, c, t.opacity)
        }

        function ia(t, e, n, r) {
            return 1 === arguments.length ? ra(t) : new aa(t, e, n, null == r ? 1 : r)
        }

        function aa(t, e, n, r) {
            this.h = +t, this.s = +e, this.l = +n, this.opacity = +r
        }

        function oa(t, e, n) {
            return 255 * (t < 60 ? e + (n - e) * t / 60 : t < 180 ? n : t < 240 ? e + (n - e) * (240 - t) / 60 : e)
        }
        Pi(ji, Gi, {
            displayable: function() {
                return this.rgb().displayable()
            },
            hex: function() {
                return this.rgb().hex()
            },
            toString: function() {
                return this.rgb() + ""
            }
        }), Pi(ta, Ki, Di(ji, {
            brighter: function(t) {
                return t = null == t ? 1 / .7 : Math.pow(1 / .7, t), new ta(this.r * t, this.g * t, this.b * t, this.opacity)
            },
            darker: function(t) {
                return t = null == t ? .7 : Math.pow(.7, t), new ta(this.r * t, this.g * t, this.b * t, this.opacity)
            },
            rgb: function() {
                return this
            },
            displayable: function() {
                return 0 <= this.r && this.r <= 255 && 0 <= this.g && this.g <= 255 && 0 <= this.b && this.b <= 255 && 0 <= this.opacity && this.opacity <= 1
            },
            hex: function() {
                return "#" + ea(this.r) + ea(this.g) + ea(this.b)
            },
            toString: function() {
                var t = this.opacity;
                return (1 === (t = isNaN(t) ? 1 : Math.max(0, Math.min(1, t))) ? "rgb(" : "rgba(") + Math.max(0, Math.min(255, Math.round(this.r) || 0)) + ", " + Math.max(0, Math.min(255, Math.round(this.g) || 0)) + ", " + Math.max(0, Math.min(255, Math.round(this.b) || 0)) + (1 === t ? ")" : ", " + t + ")")
            }
        })), Pi(aa, ia, Di(ji, {
            brighter: function(t) {
                return t = null == t ? 1 / .7 : Math.pow(1 / .7, t), new aa(this.h, this.s, this.l * t, this.opacity)
            },
            darker: function(t) {
                return t = null == t ? .7 : Math.pow(.7, t), new aa(this.h, this.s, this.l * t, this.opacity)
            },
            rgb: function() {
                var t = this.h % 360 + 360 * (this.h < 0),
                    e = isNaN(t) || isNaN(this.s) ? 0 : this.s,
                    n = this.l,
                    r = n + (n < .5 ? n : 1 - n) * e,
                    i = 2 * n - r;
                return new ta(oa(t >= 240 ? t - 240 : t + 120, i, r), oa(t, i, r), oa(t < 120 ? t + 240 : t - 120, i, r), this.opacity)
            },
            displayable: function() {
                return (0 <= this.s && this.s <= 1 || isNaN(this.s)) && 0 <= this.l && this.l <= 1 && 0 <= this.opacity && this.opacity <= 1
            }
        }));
        var sa = Math.PI / 180,
            ca = 180 / Math.PI,
            la = 6 / 29,
            fa = 3 * la * la;

        function ua(t) {
            if (t instanceof ha) return new ha(t.l, t.a, t.b, t.opacity);
            if (t instanceof va) {
                if (isNaN(t.h)) return new ha(t.l, 0, 0, t.opacity);
                var e = t.h * sa;
                return new ha(t.l, Math.cos(e) * t.c, Math.sin(e) * t.c, t.opacity)
            }
            t instanceof ta || (t = Qi(t));
            var n, r, i = ba(t.r),
                a = ba(t.g),
                o = ba(t.b),
                s = pa((.2225045 * i + .7168786 * a + .0606169 * o) / 1);
            return i === a && a === o ? n = r = s : (n = pa((.4360747 * i + .3850649 * a + .1430804 * o) / .96422), r = pa((.0139322 * i + .0971045 * a + .7141733 * o) / .82521)), new ha(116 * s - 16, 500 * (n - s), 200 * (s - r), t.opacity)
        }

        function da(t, e, n, r) {
            return 1 === arguments.length ? ua(t) : new ha(t, e, n, null == r ? 1 : r)
        }

        function ha(t, e, n, r) {
            this.l = +t, this.a = +e, this.b = +n, this.opacity = +r
        }

        function pa(t) {
            return t > .008856451679035631 ? Math.pow(t, 1 / 3) : t / fa + 4 / 29
        }

        function _a(t) {
            return t > la ? t * t * t : fa * (t - 4 / 29)
        }

        function ga(t) {
            return 255 * (t <= .0031308 ? 12.92 * t : 1.055 * Math.pow(t, 1 / 2.4) - .055)
        }

        function ba(t) {
            return (t /= 255) <= .04045 ? t / 12.92 : Math.pow((t + .055) / 1.055, 2.4)
        }

        function ma(t) {
            if (t instanceof va) return new va(t.h, t.c, t.l, t.opacity);
            if (t instanceof ha || (t = ua(t)), 0 === t.a && 0 === t.b) return new va(NaN, 0, t.l, t.opacity);
            var e = Math.atan2(t.b, t.a) * ca;
            return new va(e < 0 ? e + 360 : e, Math.sqrt(t.a * t.a + t.b * t.b), t.l, t.opacity)
        }

        function ya(t, e, n, r) {
            return 1 === arguments.length ? ma(t) : new va(t, e, n, null == r ? 1 : r)
        }

        function va(t, e, n, r) {
            this.h = +t, this.c = +e, this.l = +n, this.opacity = +r
        }
        Pi(ha, da, Di(ji, {
            brighter: function(t) {
                return new ha(this.l + 18 * (null == t ? 1 : t), this.a, this.b, this.opacity)
            },
            darker: function(t) {
                return new ha(this.l - 18 * (null == t ? 1 : t), this.a, this.b, this.opacity)
            },
            rgb: function() {
                var t = (this.l + 16) / 116,
                    e = isNaN(this.a) ? t : t + this.a / 500,
                    n = isNaN(this.b) ? t : t - this.b / 200;
                return new ta(ga(3.1338561 * (e = .96422 * _a(e)) - 1.6168667 * (t = 1 * _a(t)) - .4906146 * (n = .82521 * _a(n))), ga(-.9787684 * e + 1.9161415 * t + .033454 * n), ga(.0719453 * e - .2289914 * t + 1.4052427 * n), this.opacity)
            }
        })), Pi(va, ya, Di(ji, {
            brighter: function(t) {
                return new va(this.h, this.c, this.l + 18 * (null == t ? 1 : t), this.opacity)
            },
            darker: function(t) {
                return new va(this.h, this.c, this.l - 18 * (null == t ? 1 : t), this.opacity)
            },
            rgb: function() {
                return ua(this).rgb()
            }
        }));
        var wa = -.14861,
            xa = 1.78277,
            Ma = -.29227,
            ka = -.90649,
            Sa = 1.97294,
            Aa = Sa * ka,
            Ta = Sa * xa,
            Ca = xa * Ma - ka * wa;

        function Na(t) {
            if (t instanceof Ea) return new Ea(t.h, t.s, t.l, t.opacity);
            t instanceof ta || (t = Qi(t));
            var e = t.r / 255,
                n = t.g / 255,
                r = t.b / 255,
                i = (Ca * r + Aa * e - Ta * n) / (Ca + Aa - Ta),
                a = r - i,
                o = (Sa * (n - i) - Ma * a) / ka,
                s = Math.sqrt(o * o + a * a) / (Sa * i * (1 - i)),
                c = s ? Math.atan2(o, a) * ca - 120 : NaN;
            return new Ea(c < 0 ? c + 360 : c, s, i, t.opacity)
        }

        function Oa(t, e, n, r) {
            return 1 === arguments.length ? Na(t) : new Ea(t, e, n, null == r ? 1 : r)
        }

        function Ea(t, e, n, r) {
            this.h = +t, this.s = +e, this.l = +n, this.opacity = +r
        }

        function za(t) {
            return function() {
                return t
            }
        }

        function Fa(t, e) {
            return function(n) {
                return t + n * e
            }
        }

        function Pa(t, e) {
            var n = e - t;
            return n ? Fa(t, n > 180 || n < -180 ? n - 360 * Math.round(n / 360) : n) : za(isNaN(t) ? e : t)
        }

        function Da(t) {
            return 1 == (t = +t) ? ja : function(e, n) {
                return n - e ? function(t, e, n) {
                    return t = Math.pow(t, n), e = Math.pow(e, n) - t, n = 1 / n,
                        function(r) {
                            return Math.pow(t + r * e, n)
                        }
                }(e, n, t) : za(isNaN(e) ? n : e)
            }
        }

        function ja(t, e) {
            var n = e - t;
            return n ? Fa(t, n) : za(isNaN(t) ? e : t)
        }
        Pi(Ea, Oa, Di(ji, {
            brighter: function(t) {
                return t = null == t ? 1 / .7 : Math.pow(1 / .7, t), new Ea(this.h, this.s, this.l * t, this.opacity)
            },
            darker: function(t) {
                return t = null == t ? .7 : Math.pow(.7, t), new Ea(this.h, this.s, this.l * t, this.opacity)
            },
            rgb: function() {
                var t = isNaN(this.h) ? 0 : (this.h + 120) * sa,
                    e = +this.l,
                    n = isNaN(this.s) ? 0 : this.s * e * (1 - e),
                    r = Math.cos(t),
                    i = Math.sin(t);
                return new ta(255 * (e + n * (wa * r + xa * i)), 255 * (e + n * (Ma * r + ka * i)), 255 * (e + n * (Sa * r)), this.opacity)
            }
        }));
        var La = function t(e) {
            var n = Da(e);

            function r(t, e) {
                var r = n((t = Ki(t)).r, (e = Ki(e)).r),
                    i = n(t.g, e.g),
                    a = n(t.b, e.b),
                    o = ja(t.opacity, e.opacity);
                return function(e) {
                    return t.r = r(e), t.g = i(e), t.b = a(e), t.opacity = o(e), t + ""
                }
            }
            return r.gamma = t, r
        }(1);
        var Ha, Ua = (Ha = function(t) {
            var e = t.length - 1;
            return function(n) {
                var r = n <= 0 ? n = 0 : n >= 1 ? (n = 1, e - 1) : Math.floor(n * e),
                    i = t[r],
                    a = t[r + 1],
                    o = r > 0 ? t[r - 1] : 2 * i - a,
                    s = r < e - 1 ? t[r + 2] : 2 * a - i;
                return function(t, e, n, r, i) {
                    var a = t * t,
                        o = a * t;
                    return ((1 - 3 * t + 3 * a - o) * e + (4 - 6 * a + 3 * o) * n + (1 + 3 * t + 3 * a - 3 * o) * r + o * i) / 6
                }((n - r / e) * e, o, i, a, s)
            }
        }, function(t) {
            var e, n, r = t.length,
                i = new Array(r),
                a = new Array(r),
                o = new Array(r);
            for (e = 0; e < r; ++e) n = Ki(t[e]), i[e] = n.r || 0, a[e] = n.g || 0, o[e] = n.b || 0;
            return i = Ha(i), a = Ha(a), o = Ha(o), n.opacity = 1,
                function(t) {
                    return n.r = i(t), n.g = a(t), n.b = o(t), n + ""
                }
        });

        function Ra(t, e) {
            e || (e = []);
            var n, r = t ? Math.min(e.length, t.length) : 0,
                i = e.slice();
            return function(a) {
                for (n = 0; n < r; ++n) i[n] = t[n] * (1 - a) + e[n] * a;
                return i
            }
        }

        function Ya(t, e) {
            var n, r = e ? e.length : 0,
                i = t ? Math.min(r, t.length) : 0,
                a = new Array(i),
                o = new Array(r);
            for (n = 0; n < i; ++n) a[n] = Xa(t[n], e[n]);
            for (; n < r; ++n) o[n] = e[n];
            return function(t) {
                for (n = 0; n < i; ++n) o[n] = a[n](t);
                return o
            }
        }

        function qa(t, e) {
            var n = new Date;
            return t = +t, e = +e,
                function(r) {
                    return n.setTime(t * (1 - r) + e * r), n
                }
        }

        function Ia(t, e) {
            return t = +t, e = +e,
                function(n) {
                    return t * (1 - n) + e * n
                }
        }

        function Ba(t, e) {
            var n, r = {},
                i = {};
            for (n in null !== t && "object" == typeof t || (t = {}), null !== e && "object" == typeof e || (e = {}), e) n in t ? r[n] = Xa(t[n], e[n]) : i[n] = e[n];
            return function(t) {
                for (n in r) i[n] = r[n](t);
                return i
            }
        }
        var $a = /[-+]?(?:\d+\.?\d*|\.?\d+)(?:[eE][-+]?\d+)?/g,
            Va = new RegExp($a.source, "g");

        function Wa(t, e) {
            var n, r, i, a = $a.lastIndex = Va.lastIndex = 0,
                o = -1,
                s = [],
                c = [];
            for (t += "", e += "";
                (n = $a.exec(t)) && (r = Va.exec(e));)(i = r.index) > a && (i = e.slice(a, i), s[o] ? s[o] += i : s[++o] = i), (n = n[0]) === (r = r[0]) ? s[o] ? s[o] += r : s[++o] = r : (s[++o] = null, c.push({
                i: o,
                x: Ia(n, r)
            })), a = Va.lastIndex;
            return a < e.length && (i = e.slice(a), s[o] ? s[o] += i : s[++o] = i), s.length < 2 ? c[0] ? function(t) {
                return function(e) {
                    return t(e) + ""
                }
            }(c[0].x) : function(t) {
                return function() {
                    return t
                }
            }(e) : (e = c.length, function(t) {
                for (var n, r = 0; r < e; ++r) s[(n = c[r]).i] = n.x(t);
                return s.join("")
            })
        }

        function Xa(t, e) {
            var n, r = typeof e;
            return null == e || "boolean" === r ? za(e) : ("number" === r ? Ia : "string" === r ? (n = Gi(e)) ? (e = n, La) : Wa : e instanceof Gi ? La : e instanceof Date ? qa : function(t) {
                return ArrayBuffer.isView(t) && !(t instanceof DataView)
            }(e) ? Ra : Array.isArray(e) ? Ya : "function" != typeof e.valueOf && "function" != typeof e.toString || isNaN(e) ? Ba : Ia)(t, e)
        }

        function Ga(t, e) {
            return t = +t, e = +e,
                function(n) {
                    return Math.round(t * (1 - n) + e * n)
                }
        }
        var Za, Ja, Qa, Ka, to = 180 / Math.PI,
            eo = {
                translateX: 0,
                translateY: 0,
                rotate: 0,
                skewX: 0,
                scaleX: 1,
                scaleY: 1
            };

        function no(t, e, n, r, i, a) {
            var o, s, c;
            return (o = Math.sqrt(t * t + e * e)) && (t /= o, e /= o), (c = t * n + e * r) && (n -= t * c, r -= e * c), (s = Math.sqrt(n * n + r * r)) && (n /= s, r /= s, c /= s), t * r < e * n && (t = -t, e = -e, c = -c, o = -o), {
                translateX: i,
                translateY: a,
                rotate: Math.atan2(e, t) * to,
                skewX: Math.atan(c) * to,
                scaleX: o,
                scaleY: s
            }
        }

        function ro(t, e, n, r) {
            function i(t) {
                return t.length ? t.pop() + " " : ""
            }
            return function(a, o) {
                var s = [],
                    c = [];
                return a = t(a), o = t(o),
                    function(t, r, i, a, o, s) {
                        if (t !== i || r !== a) {
                            var c = o.push("translate(", null, e, null, n);
                            s.push({
                                i: c - 4,
                                x: Ia(t, i)
                            }, {
                                i: c - 2,
                                x: Ia(r, a)
                            })
                        } else(i || a) && o.push("translate(" + i + e + a + n)
                    }(a.translateX, a.translateY, o.translateX, o.translateY, s, c),
                    function(t, e, n, a) {
                        t !== e ? (t - e > 180 ? e += 360 : e - t > 180 && (t += 360), a.push({
                            i: n.push(i(n) + "rotate(", null, r) - 2,
                            x: Ia(t, e)
                        })) : e && n.push(i(n) + "rotate(" + e + r)
                    }(a.rotate, o.rotate, s, c),
                    function(t, e, n, a) {
                        t !== e ? a.push({
                            i: n.push(i(n) + "skewX(", null, r) - 2,
                            x: Ia(t, e)
                        }) : e && n.push(i(n) + "skewX(" + e + r)
                    }(a.skewX, o.skewX, s, c),
                    function(t, e, n, r, a, o) {
                        if (t !== n || e !== r) {
                            var s = a.push(i(a) + "scale(", null, ",", null, ")");
                            o.push({
                                i: s - 4,
                                x: Ia(t, n)
                            }, {
                                i: s - 2,
                                x: Ia(e, r)
                            })
                        } else 1 === n && 1 === r || a.push(i(a) + "scale(" + n + "," + r + ")")
                    }(a.scaleX, a.scaleY, o.scaleX, o.scaleY, s, c), a = o = null,
                    function(t) {
                        for (var e, n = -1, r = c.length; ++n < r;) s[(e = c[n]).i] = e.x(t);
                        return s.join("")
                    }
            }
        }
        var io = ro((function(t) {
                return "none" === t ? eo : (Za || (Za = document.createElement("DIV"), Ja = document.documentElement, Qa = document.defaultView), Za.style.transform = t, t = Qa.getComputedStyle(Ja.appendChild(Za), null).getPropertyValue("transform"), Ja.removeChild(Za), no(+(t = t.slice(7, -1).split(","))[0], +t[1], +t[2], +t[3], +t[4], +t[5]))
            }), "px, ", "px)", "deg)"),
            ao = ro((function(t) {
                return null == t ? eo : (Ka || (Ka = document.createElementNS("http://www.w3.org/2000/svg", "g")), Ka.setAttribute("transform", t), (t = Ka.transform.baseVal.consolidate()) ? no((t = t.matrix).a, t.b, t.c, t.d, t.e, t.f) : eo)
            }), ", ", ")", ")");
        var oo = function(t) {
            return function(e, n) {
                var r = t((e = ia(e)).h, (n = ia(n)).h),
                    i = ja(e.s, n.s),
                    a = ja(e.l, n.l),
                    o = ja(e.opacity, n.opacity);
                return function(t) {
                    return e.h = r(t), e.s = i(t), e.l = a(t), e.opacity = o(t), e + ""
                }
            }
        }(Pa);

        function so(t, e) {
            var n = ja((t = da(t)).l, (e = da(e)).l),
                r = ja(t.a, e.a),
                i = ja(t.b, e.b),
                a = ja(t.opacity, e.opacity);
            return function(e) {
                return t.l = n(e), t.a = r(e), t.b = i(e), t.opacity = a(e), t + ""
            }
        }
        var co = function(t) {
            return function(e, n) {
                var r = t((e = ya(e)).h, (n = ya(n)).h),
                    i = ja(e.c, n.c),
                    a = ja(e.l, n.l),
                    o = ja(e.opacity, n.opacity);
                return function(t) {
                    return e.h = r(t), e.c = i(t), e.l = a(t), e.opacity = o(t), e + ""
                }
            }
        }(Pa);

        function lo(t) {
            return function e(n) {
                function r(e, r) {
                    var i = t((e = Oa(e)).h, (r = Oa(r)).h),
                        a = ja(e.s, r.s),
                        o = ja(e.l, r.l),
                        s = ja(e.opacity, r.opacity);
                    return function(t) {
                        return e.h = i(t), e.s = a(t), e.l = o(Math.pow(t, n)), e.opacity = s(t), e + ""
                    }
                }
                return n = +n, r.gamma = e, r
            }(1)
        }
        lo(Pa);
        var fo = lo(ja);

        function uo(t) {
            return +t
        }
        var ho = [0, 1];

        function po(t) {
            return t
        }

        function _o(t, e) {
            return (e -= t = +t) ? function(n) {
                return (n - t) / e
            } : function(t) {
                return function() {
                    return t
                }
            }(isNaN(e) ? NaN : .5)
        }

        function go(t) {
            var e, n = t[0],
                r = t[t.length - 1];
            return n > r && (e = n, n = r, r = e),
                function(t) {
                    return Math.max(n, Math.min(r, t))
                }
        }

        function bo(t, e, n) {
            var r = t[0],
                i = t[1],
                a = e[0],
                o = e[1];
            return i < r ? (r = _o(i, r), a = n(o, a)) : (r = _o(r, i), a = n(a, o)),
                function(t) {
                    return a(r(t))
                }
        }

        function mo(t, e, n) {
            var r = Math.min(t.length, e.length) - 1,
                i = new Array(r),
                a = new Array(r),
                o = -1;
            for (t[r] < t[0] && (t = t.slice().reverse(), e = e.slice().reverse()); ++o < r;) i[o] = _o(t[o], t[o + 1]), a[o] = n(e[o], e[o + 1]);
            return function(e) {
                var n = yi(t, e, 1, r) - 1;
                return a[n](i[n](e))
            }
        }

        function yo(t, e) {
            return e.domain(t.domain()).range(t.range()).interpolate(t.interpolate()).clamp(t.clamp()).unknown(t.unknown())
        }

        function vo(t, e) {
            return function() {
                var t, e, n, r, i, a, o = ho,
                    s = ho,
                    c = Xa,
                    l = po;

                function f() {
                    return r = Math.min(o.length, s.length) > 2 ? mo : bo, i = a = null, u
                }

                function u(e) {
                    return isNaN(e = +e) ? n : (i || (i = r(o.map(t), s, c)))(t(l(e)))
                }
                return u.invert = function(n) {
                        return l(e((a || (a = r(s, o.map(t), Ia)))(n)))
                    }, u.domain = function(t) {
                        return arguments.length ? (o = zi.call(t, uo), l === po || (l = go(o)), f()) : o.slice()
                    }, u.range = function(t) {
                        return arguments.length ? (s = Fi.call(t), f()) : s.slice()
                    }, u.rangeRound = function(t) {
                        return s = Fi.call(t), c = Ga, f()
                    }, u.clamp = function(t) {
                        return arguments.length ? (l = t ? go(o) : po, u) : l !== po
                    }, u.interpolate = function(t) {
                        return arguments.length ? (c = t, f()) : c
                    }, u.unknown = function(t) {
                        return arguments.length ? (n = t, u) : n
                    },
                    function(n, r) {
                        return t = n, e = r, f()
                    }
            }()(t, e)
        }

        function wo(t, e) {
            if ((n = (t = e ? t.toExponential(e - 1) : t.toExponential()).indexOf("e")) < 0) return null;
            var n, r = t.slice(0, n);
            return [r.length > 1 ? r[0] + r.slice(2) : r, +t.slice(n + 1)]
        }

        function xo(t) {
            return (t = wo(Math.abs(t))) ? t[1] : NaN
        }
        var Mo, ko = /^(?:(.)?([<>=^]))?([+\-( ])?([$#])?(0)?(\d+)?(,)?(\.\d+)?(~)?([a-z%])?$/i;

        function So(t) {
            return new Ao(t)
        }

        function Ao(t) {
            if (!(e = ko.exec(t))) throw new Error("invalid format: " + t);
            var e;
            this.fill = e[1] || " ", this.align = e[2] || ">", this.sign = e[3] || "-", this.symbol = e[4] || "", this.zero = !!e[5], this.width = e[6] && +e[6], this.comma = !!e[7], this.precision = e[8] && +e[8].slice(1), this.trim = !!e[9], this.type = e[10] || ""
        }

        function To(t, e) {
            var n = wo(t, e);
            if (!n) return t + "";
            var r = n[0],
                i = n[1];
            return i < 0 ? "0." + new Array(-i).join("0") + r : r.length > i + 1 ? r.slice(0, i + 1) + "." + r.slice(i + 1) : r + new Array(i - r.length + 2).join("0")
        }
        So.prototype = Ao.prototype, Ao.prototype.toString = function() {
            return this.fill + this.align + this.sign + this.symbol + (this.zero ? "0" : "") + (null == this.width ? "" : Math.max(1, 0 | this.width)) + (this.comma ? "," : "") + (null == this.precision ? "" : "." + Math.max(0, 0 | this.precision)) + (this.trim ? "~" : "") + this.type
        };
        var Co = {
            "%": function(t, e) {
                return (100 * t).toFixed(e)
            },
            b: function(t) {
                return Math.round(t).toString(2)
            },
            c: function(t) {
                return t + ""
            },
            d: function(t) {
                return Math.round(t).toString(10)
            },
            e: function(t, e) {
                return t.toExponential(e)
            },
            f: function(t, e) {
                return t.toFixed(e)
            },
            g: function(t, e) {
                return t.toPrecision(e)
            },
            o: function(t) {
                return Math.round(t).toString(8)
            },
            p: function(t, e) {
                return To(100 * t, e)
            },
            r: To,
            s: function(t, e) {
                var n = wo(t, e);
                if (!n) return t + "";
                var r = n[0],
                    i = n[1],
                    a = i - (Mo = 3 * Math.max(-8, Math.min(8, Math.floor(i / 3)))) + 1,
                    o = r.length;
                return a === o ? r : a > o ? r + new Array(a - o + 1).join("0") : a > 0 ? r.slice(0, a) + "." + r.slice(a) : "0." + new Array(1 - a).join("0") + wo(t, Math.max(0, e + a - 1))[0]
            },
            X: function(t) {
                return Math.round(t).toString(16).toUpperCase()
            },
            x: function(t) {
                return Math.round(t).toString(16)
            }
        };

        function No(t) {
            return t
        }
        var Oo, Eo, zo, Fo = ["y", "z", "a", "f", "p", "n", "µ", "m", "", "k", "M", "G", "T", "P", "E", "Z", "Y"];

        function Po(t) {
            var e, n, r = t.grouping && t.thousands ? (e = t.grouping, n = t.thousands, function(t, r) {
                    for (var i = t.length, a = [], o = 0, s = e[0], c = 0; i > 0 && s > 0 && (c + s + 1 > r && (s = Math.max(1, r - c)), a.push(t.substring(i -= s, i + s)), !((c += s + 1) > r));) s = e[o = (o + 1) % e.length];
                    return a.reverse().join(n)
                }) : No,
                i = t.currency,
                a = t.decimal,
                o = t.numerals ? function(t) {
                    return function(e) {
                        return e.replace(/[0-9]/g, (function(e) {
                            return t[+e]
                        }))
                    }
                }(t.numerals) : No,
                s = t.percent || "%";

            function c(t) {
                var e = (t = So(t)).fill,
                    n = t.align,
                    c = t.sign,
                    l = t.symbol,
                    f = t.zero,
                    u = t.width,
                    d = t.comma,
                    h = t.precision,
                    p = t.trim,
                    _ = t.type;
                "n" === _ ? (d = !0, _ = "g") : Co[_] || (null == h && (h = 12), p = !0, _ = "g"), (f || "0" === e && "=" === n) && (f = !0, e = "0", n = "=");
                var g = "$" === l ? i[0] : "#" === l && /[boxX]/.test(_) ? "0" + _.toLowerCase() : "",
                    b = "$" === l ? i[1] : /[%p]/.test(_) ? s : "",
                    m = Co[_],
                    y = /[defgprs%]/.test(_);

                function v(t) {
                    var i, s, l, v = g,
                        w = b;
                    if ("c" === _) w = m(t) + w, t = "";
                    else {
                        var x = (t = +t) < 0;
                        if (t = m(Math.abs(t), h), p && (t = function(t) {
                                t: for (var e, n = t.length, r = 1, i = -1; r < n; ++r) switch (t[r]) {
                                    case ".":
                                        i = e = r;
                                        break;
                                    case "0":
                                        0 === i && (i = r), e = r;
                                        break;
                                    default:
                                        if (i > 0) {
                                            if (!+t[r]) break t;
                                            i = 0
                                        }
                                }
                                return i > 0 ? t.slice(0, i) + t.slice(e + 1) : t
                            }(t)), x && 0 == +t && (x = !1), v = (x ? "(" === c ? c : "-" : "-" === c || "(" === c ? "" : c) + v, w = ("s" === _ ? Fo[8 + Mo / 3] : "") + w + (x && "(" === c ? ")" : ""), y)
                            for (i = -1, s = t.length; ++i < s;)
                                if (48 > (l = t.charCodeAt(i)) || l > 57) {
                                    w = (46 === l ? a + t.slice(i + 1) : t.slice(i)) + w, t = t.slice(0, i);
                                    break
                                }
                    }
                    d && !f && (t = r(t, 1 / 0));
                    var M = v.length + t.length + w.length,
                        k = M < u ? new Array(u - M + 1).join(e) : "";
                    switch (d && f && (t = r(k + t, k.length ? u - w.length : 1 / 0), k = ""), n) {
                        case "<":
                            t = v + t + w + k;
                            break;
                        case "=":
                            t = v + k + t + w;
                            break;
                        case "^":
                            t = k.slice(0, M = k.length >> 1) + v + t + w + k.slice(M);
                            break;
                        default:
                            t = k + v + t + w
                    }
                    return o(t)
                }
                return h = null == h ? 6 : /[gprs]/.test(_) ? Math.max(1, Math.min(21, h)) : Math.max(0, Math.min(20, h)), v.toString = function() {
                    return t + ""
                }, v
            }
            return {
                format: c,
                formatPrefix: function(t, e) {
                    var n = c(((t = So(t)).type = "f", t)),
                        r = 3 * Math.max(-8, Math.min(8, Math.floor(xo(e) / 3))),
                        i = Math.pow(10, -r),
                        a = Fo[8 + r / 3];
                    return function(t) {
                        return n(i * t) + a
                    }
                }
            }
        }

        function Do(t) {
            return Math.max(0, -xo(Math.abs(t)))
        }

        function jo(t, e) {
            return Math.max(0, 3 * Math.max(-8, Math.min(8, Math.floor(xo(e) / 3))) - xo(Math.abs(t)))
        }

        function Lo(t, e) {
            return t = Math.abs(t), e = Math.abs(e) - t, Math.max(0, xo(e) - xo(t)) + 1
        }

        function Ho(t, e, n, r) {
            var i, a = function(t, e, n) {
                var r = Math.abs(e - t) / Math.max(0, n),
                    i = Math.pow(10, Math.floor(Math.log(r) / Math.LN10)),
                    a = r / i;
                return a >= vi ? i *= 10 : a >= wi ? i *= 5 : a >= xi && (i *= 2), e < t ? -i : i
            }(t, e, n);
            switch ((r = So(null == r ? ",f" : r)).type) {
                case "s":
                    var o = Math.max(Math.abs(t), Math.abs(e));
                    return null != r.precision || isNaN(i = jo(a, o)) || (r.precision = i), zo(r, o);
                case "":
                case "e":
                case "g":
                case "p":
                case "r":
                    null != r.precision || isNaN(i = Lo(a, Math.max(Math.abs(t), Math.abs(e)))) || (r.precision = i - ("e" === r.type));
                    break;
                case "f":
                case "%":
                    null != r.precision || isNaN(i = Do(a)) || (r.precision = i - 2 * ("%" === r.type))
            }
            return Eo(r)
        }

        function Uo(t) {
            var e = t.domain;
            return t.ticks = function(t) {
                var n = e();
                return function(t, e, n) {
                    var r, i, a, o, s = -1;
                    if (n = +n, (t = +t) === (e = +e) && n > 0) return [t];
                    if ((r = e < t) && (i = t, t = e, e = i), 0 === (o = Mi(t, e, n)) || !isFinite(o)) return [];
                    if (o > 0)
                        for (t = Math.ceil(t / o), e = Math.floor(e / o), a = new Array(i = Math.ceil(e - t + 1)); ++s < i;) a[s] = (t + s) * o;
                    else
                        for (t = Math.floor(t * o), e = Math.ceil(e * o), a = new Array(i = Math.ceil(t - e + 1)); ++s < i;) a[s] = (t - s) / o;
                    return r && a.reverse(), a
                }(n[0], n[n.length - 1], null == t ? 10 : t)
            }, t.tickFormat = function(t, n) {
                var r = e();
                return Ho(r[0], r[r.length - 1], null == t ? 10 : t, n)
            }, t.nice = function(n) {
                null == n && (n = 10);
                var r, i = e(),
                    a = 0,
                    o = i.length - 1,
                    s = i[a],
                    c = i[o];
                return c < s && (r = s, s = c, c = r, r = a, a = o, o = r), (r = Mi(s, c, n)) > 0 ? r = Mi(s = Math.floor(s / r) * r, c = Math.ceil(c / r) * r, n) : r < 0 && (r = Mi(s = Math.ceil(s * r) / r, c = Math.floor(c * r) / r, n)), r > 0 ? (i[a] = Math.floor(s / r) * r, i[o] = Math.ceil(c / r) * r, e(i)) : r < 0 && (i[a] = Math.ceil(s * r) / r, i[o] = Math.floor(c * r) / r, e(i)), t
            }, t
        }
        Oo = Po({
            decimal: ".",
            thousands: ",",
            grouping: [3],
            currency: ["$", ""]
        }), Eo = Oo.format, zo = Oo.formatPrefix;
        var Ro = new Date,
            Yo = new Date;

        function qo(t, e, n, r) {
            function i(e) {
                return t(e = new Date(+e)), e
            }
            return i.floor = i, i.ceil = function(n) {
                return t(n = new Date(n - 1)), e(n, 1), t(n), n
            }, i.round = function(t) {
                var e = i(t),
                    n = i.ceil(t);
                return t - e < n - t ? e : n
            }, i.offset = function(t, n) {
                return e(t = new Date(+t), null == n ? 1 : Math.floor(n)), t
            }, i.range = function(n, r, a) {
                var o, s = [];
                if (n = i.ceil(n), a = null == a ? 1 : Math.floor(a), !(n < r && a > 0)) return s;
                do {
                    s.push(o = new Date(+n)), e(n, a), t(n)
                } while (o < n && n < r);
                return s
            }, i.filter = function(n) {
                return qo((function(e) {
                    if (e >= e)
                        for (; t(e), !n(e);) e.setTime(e - 1)
                }), (function(t, r) {
                    if (t >= t)
                        if (r < 0)
                            for (; ++r <= 0;)
                                for (; e(t, -1), !n(t););
                        else
                            for (; --r >= 0;)
                                for (; e(t, 1), !n(t););
                }))
            }, n && (i.count = function(e, r) {
                return Ro.setTime(+e), Yo.setTime(+r), t(Ro), t(Yo), Math.floor(n(Ro, Yo))
            }, i.every = function(t) {
                return t = Math.floor(t), isFinite(t) && t > 0 ? t > 1 ? i.filter(r ? function(e) {
                    return r(e) % t == 0
                } : function(e) {
                    return i.count(0, e) % t == 0
                }) : i : null
            }), i
        }
        var Io = qo((function() {}), (function(t, e) {
            t.setTime(+t + e)
        }), (function(t, e) {
            return e - t
        }));
        Io.every = function(t) {
            return t = Math.floor(t), isFinite(t) && t > 0 ? t > 1 ? qo((function(e) {
                e.setTime(Math.floor(e / t) * t)
            }), (function(e, n) {
                e.setTime(+e + n * t)
            }), (function(e, n) {
                return (n - e) / t
            })) : Io : null
        };
        qo((function(t) {
            t.setTime(t - t.getMilliseconds())
        }), (function(t, e) {
            t.setTime(+t + 1e3 * e)
        }), (function(t, e) {
            return (e - t) / 1e3
        }), (function(t) {
            return t.getUTCSeconds()
        })), qo((function(t) {
            t.setTime(t - t.getMilliseconds() - 1e3 * t.getSeconds())
        }), (function(t, e) {
            t.setTime(+t + 6e4 * e)
        }), (function(t, e) {
            return (e - t) / 6e4
        }), (function(t) {
            return t.getMinutes()
        })), qo((function(t) {
            t.setTime(t - t.getMilliseconds() - 1e3 * t.getSeconds() - 6e4 * t.getMinutes())
        }), (function(t, e) {
            t.setTime(+t + 36e5 * e)
        }), (function(t, e) {
            return (e - t) / 36e5
        }), (function(t) {
            return t.getHours()
        }));
        var Bo = qo((function(t) {
            t.setHours(0, 0, 0, 0)
        }), (function(t, e) {
            t.setDate(t.getDate() + e)
        }), (function(t, e) {
            return (e - t - 6e4 * (e.getTimezoneOffset() - t.getTimezoneOffset())) / 864e5
        }), (function(t) {
            return t.getDate() - 1
        }));

        function $o(t) {
            return qo((function(e) {
                e.setDate(e.getDate() - (e.getDay() + 7 - t) % 7), e.setHours(0, 0, 0, 0)
            }), (function(t, e) {
                t.setDate(t.getDate() + 7 * e)
            }), (function(t, e) {
                return (e - t - 6e4 * (e.getTimezoneOffset() - t.getTimezoneOffset())) / 6048e5
            }))
        }
        var Vo = $o(0),
            Wo = $o(1),
            Xo = ($o(2), $o(3), $o(4)),
            Go = ($o(5), $o(6), qo((function(t) {
                t.setDate(1), t.setHours(0, 0, 0, 0)
            }), (function(t, e) {
                t.setMonth(t.getMonth() + e)
            }), (function(t, e) {
                return e.getMonth() - t.getMonth() + 12 * (e.getFullYear() - t.getFullYear())
            }), (function(t) {
                return t.getMonth()
            })), qo((function(t) {
                t.setMonth(0, 1), t.setHours(0, 0, 0, 0)
            }), (function(t, e) {
                t.setFullYear(t.getFullYear() + e)
            }), (function(t, e) {
                return e.getFullYear() - t.getFullYear()
            }), (function(t) {
                return t.getFullYear()
            })));
        Go.every = function(t) {
            return isFinite(t = Math.floor(t)) && t > 0 ? qo((function(e) {
                e.setFullYear(Math.floor(e.getFullYear() / t) * t), e.setMonth(0, 1), e.setHours(0, 0, 0, 0)
            }), (function(e, n) {
                e.setFullYear(e.getFullYear() + n * t)
            })) : null
        };
        qo((function(t) {
            t.setUTCSeconds(0, 0)
        }), (function(t, e) {
            t.setTime(+t + 6e4 * e)
        }), (function(t, e) {
            return (e - t) / 6e4
        }), (function(t) {
            return t.getUTCMinutes()
        })), qo((function(t) {
            t.setUTCMinutes(0, 0, 0)
        }), (function(t, e) {
            t.setTime(+t + 36e5 * e)
        }), (function(t, e) {
            return (e - t) / 36e5
        }), (function(t) {
            return t.getUTCHours()
        }));
        var Zo = qo((function(t) {
            t.setUTCHours(0, 0, 0, 0)
        }), (function(t, e) {
            t.setUTCDate(t.getUTCDate() + e)
        }), (function(t, e) {
            return (e - t) / 864e5
        }), (function(t) {
            return t.getUTCDate() - 1
        }));

        function Jo(t) {
            return qo((function(e) {
                e.setUTCDate(e.getUTCDate() - (e.getUTCDay() + 7 - t) % 7), e.setUTCHours(0, 0, 0, 0)
            }), (function(t, e) {
                t.setUTCDate(t.getUTCDate() + 7 * e)
            }), (function(t, e) {
                return (e - t) / 6048e5
            }))
        }
        var Qo = Jo(0),
            Ko = Jo(1),
            ts = (Jo(2), Jo(3), Jo(4)),
            es = (Jo(5), Jo(6), qo((function(t) {
                t.setUTCDate(1), t.setUTCHours(0, 0, 0, 0)
            }), (function(t, e) {
                t.setUTCMonth(t.getUTCMonth() + e)
            }), (function(t, e) {
                return e.getUTCMonth() - t.getUTCMonth() + 12 * (e.getUTCFullYear() - t.getUTCFullYear())
            }), (function(t) {
                return t.getUTCMonth()
            })), qo((function(t) {
                t.setUTCMonth(0, 1), t.setUTCHours(0, 0, 0, 0)
            }), (function(t, e) {
                t.setUTCFullYear(t.getUTCFullYear() + e)
            }), (function(t, e) {
                return e.getUTCFullYear() - t.getUTCFullYear()
            }), (function(t) {
                return t.getUTCFullYear()
            })));

        function ns(t) {
            if (0 <= t.y && t.y < 100) {
                var e = new Date(-1, t.m, t.d, t.H, t.M, t.S, t.L);
                return e.setFullYear(t.y), e
            }
            return new Date(t.y, t.m, t.d, t.H, t.M, t.S, t.L)
        }

        function rs(t) {
            if (0 <= t.y && t.y < 100) {
                var e = new Date(Date.UTC(-1, t.m, t.d, t.H, t.M, t.S, t.L));
                return e.setUTCFullYear(t.y), e
            }
            return new Date(Date.UTC(t.y, t.m, t.d, t.H, t.M, t.S, t.L))
        }

        function is(t) {
            return {
                y: t,
                m: 0,
                d: 1,
                H: 0,
                M: 0,
                S: 0,
                L: 0
            }
        }
        es.every = function(t) {
            return isFinite(t = Math.floor(t)) && t > 0 ? qo((function(e) {
                e.setUTCFullYear(Math.floor(e.getUTCFullYear() / t) * t), e.setUTCMonth(0, 1), e.setUTCHours(0, 0, 0, 0)
            }), (function(e, n) {
                e.setUTCFullYear(e.getUTCFullYear() + n * t)
            })) : null
        };
        var as, os, ss, cs, ls = {
                "-": "",
                _: " ",
                0: "0"
            },
            fs = /^\s*\d+/,
            us = /^%/,
            ds = /[\\^$*+?|[\]().{}]/g;

        function hs(t, e, n) {
            var r = t < 0 ? "-" : "",
                i = (r ? -t : t) + "",
                a = i.length;
            return r + (a < n ? new Array(n - a + 1).join(e) + i : i)
        }

        function ps(t) {
            return t.replace(ds, "\\$&")
        }

        function _s(t) {
            return new RegExp("^(?:" + t.map(ps).join("|") + ")", "i")
        }

        function gs(t) {
            for (var e = {}, n = -1, r = t.length; ++n < r;) e[t[n].toLowerCase()] = n;
            return e
        }

        function bs(t, e, n) {
            var r = fs.exec(e.slice(n, n + 1));
            return r ? (t.w = +r[0], n + r[0].length) : -1
        }

        function ms(t, e, n) {
            var r = fs.exec(e.slice(n, n + 1));
            return r ? (t.u = +r[0], n + r[0].length) : -1
        }

        function ys(t, e, n) {
            var r = fs.exec(e.slice(n, n + 2));
            return r ? (t.U = +r[0], n + r[0].length) : -1
        }

        function vs(t, e, n) {
            var r = fs.exec(e.slice(n, n + 2));
            return r ? (t.V = +r[0], n + r[0].length) : -1
        }

        function ws(t, e, n) {
            var r = fs.exec(e.slice(n, n + 2));
            return r ? (t.W = +r[0], n + r[0].length) : -1
        }

        function xs(t, e, n) {
            var r = fs.exec(e.slice(n, n + 4));
            return r ? (t.y = +r[0], n + r[0].length) : -1
        }

        function Ms(t, e, n) {
            var r = fs.exec(e.slice(n, n + 2));
            return r ? (t.y = +r[0] + (+r[0] > 68 ? 1900 : 2e3), n + r[0].length) : -1
        }

        function ks(t, e, n) {
            var r = /^(Z)|([+-]\d\d)(?::?(\d\d))?/.exec(e.slice(n, n + 6));
            return r ? (t.Z = r[1] ? 0 : -(r[2] + (r[3] || "00")), n + r[0].length) : -1
        }

        function Ss(t, e, n) {
            var r = fs.exec(e.slice(n, n + 2));
            return r ? (t.m = r[0] - 1, n + r[0].length) : -1
        }

        function As(t, e, n) {
            var r = fs.exec(e.slice(n, n + 2));
            return r ? (t.d = +r[0], n + r[0].length) : -1
        }

        function Ts(t, e, n) {
            var r = fs.exec(e.slice(n, n + 3));
            return r ? (t.m = 0, t.d = +r[0], n + r[0].length) : -1
        }

        function Cs(t, e, n) {
            var r = fs.exec(e.slice(n, n + 2));
            return r ? (t.H = +r[0], n + r[0].length) : -1
        }

        function Ns(t, e, n) {
            var r = fs.exec(e.slice(n, n + 2));
            return r ? (t.M = +r[0], n + r[0].length) : -1
        }

        function Os(t, e, n) {
            var r = fs.exec(e.slice(n, n + 2));
            return r ? (t.S = +r[0], n + r[0].length) : -1
        }

        function Es(t, e, n) {
            var r = fs.exec(e.slice(n, n + 3));
            return r ? (t.L = +r[0], n + r[0].length) : -1
        }

        function zs(t, e, n) {
            var r = fs.exec(e.slice(n, n + 6));
            return r ? (t.L = Math.floor(r[0] / 1e3), n + r[0].length) : -1
        }

        function Fs(t, e, n) {
            var r = us.exec(e.slice(n, n + 1));
            return r ? n + r[0].length : -1
        }

        function Ps(t, e, n) {
            var r = fs.exec(e.slice(n));
            return r ? (t.Q = +r[0], n + r[0].length) : -1
        }

        function Ds(t, e, n) {
            var r = fs.exec(e.slice(n));
            return r ? (t.Q = 1e3 * +r[0], n + r[0].length) : -1
        }

        function js(t, e) {
            return hs(t.getDate(), e, 2)
        }

        function Ls(t, e) {
            return hs(t.getHours(), e, 2)
        }

        function Hs(t, e) {
            return hs(t.getHours() % 12 || 12, e, 2)
        }

        function Us(t, e) {
            return hs(1 + Bo.count(Go(t), t), e, 3)
        }

        function Rs(t, e) {
            return hs(t.getMilliseconds(), e, 3)
        }

        function Ys(t, e) {
            return Rs(t, e) + "000"
        }

        function qs(t, e) {
            return hs(t.getMonth() + 1, e, 2)
        }

        function Is(t, e) {
            return hs(t.getMinutes(), e, 2)
        }

        function Bs(t, e) {
            return hs(t.getSeconds(), e, 2)
        }

        function $s(t) {
            var e = t.getDay();
            return 0 === e ? 7 : e
        }

        function Vs(t, e) {
            return hs(Vo.count(Go(t), t), e, 2)
        }

        function Ws(t, e) {
            var n = t.getDay();
            return t = n >= 4 || 0 === n ? Xo(t) : Xo.ceil(t), hs(Xo.count(Go(t), t) + (4 === Go(t).getDay()), e, 2)
        }

        function Xs(t) {
            return t.getDay()
        }

        function Gs(t, e) {
            return hs(Wo.count(Go(t), t), e, 2)
        }

        function Zs(t, e) {
            return hs(t.getFullYear() % 100, e, 2)
        }

        function Js(t, e) {
            return hs(t.getFullYear() % 1e4, e, 4)
        }

        function Qs(t) {
            var e = t.getTimezoneOffset();
            return (e > 0 ? "-" : (e *= -1, "+")) + hs(e / 60 | 0, "0", 2) + hs(e % 60, "0", 2)
        }

        function Ks(t, e) {
            return hs(t.getUTCDate(), e, 2)
        }

        function tc(t, e) {
            return hs(t.getUTCHours(), e, 2)
        }

        function ec(t, e) {
            return hs(t.getUTCHours() % 12 || 12, e, 2)
        }

        function nc(t, e) {
            return hs(1 + Zo.count(es(t), t), e, 3)
        }

        function rc(t, e) {
            return hs(t.getUTCMilliseconds(), e, 3)
        }

        function ic(t, e) {
            return rc(t, e) + "000"
        }

        function ac(t, e) {
            return hs(t.getUTCMonth() + 1, e, 2)
        }

        function oc(t, e) {
            return hs(t.getUTCMinutes(), e, 2)
        }

        function sc(t, e) {
            return hs(t.getUTCSeconds(), e, 2)
        }

        function cc(t) {
            var e = t.getUTCDay();
            return 0 === e ? 7 : e
        }

        function lc(t, e) {
            return hs(Qo.count(es(t), t), e, 2)
        }

        function fc(t, e) {
            var n = t.getUTCDay();
            return t = n >= 4 || 0 === n ? ts(t) : ts.ceil(t), hs(ts.count(es(t), t) + (4 === es(t).getUTCDay()), e, 2)
        }

        function uc(t) {
            return t.getUTCDay()
        }

        function dc(t, e) {
            return hs(Ko.count(es(t), t), e, 2)
        }

        function hc(t, e) {
            return hs(t.getUTCFullYear() % 100, e, 2)
        }

        function pc(t, e) {
            return hs(t.getUTCFullYear() % 1e4, e, 4)
        }

        function _c() {
            return "+0000"
        }

        function gc() {
            return "%"
        }

        function bc(t) {
            return +t
        }

        function mc(t) {
            return Math.floor(+t / 1e3)
        }! function(t) {
            as = function(t) {
                var e = t.dateTime,
                    n = t.date,
                    r = t.time,
                    i = t.periods,
                    a = t.days,
                    o = t.shortDays,
                    s = t.months,
                    c = t.shortMonths,
                    l = _s(i),
                    f = gs(i),
                    u = _s(a),
                    d = gs(a),
                    h = _s(o),
                    p = gs(o),
                    _ = _s(s),
                    g = gs(s),
                    b = _s(c),
                    m = gs(c),
                    y = {
                        a: function(t) {
                            return o[t.getDay()]
                        },
                        A: function(t) {
                            return a[t.getDay()]
                        },
                        b: function(t) {
                            return c[t.getMonth()]
                        },
                        B: function(t) {
                            return s[t.getMonth()]
                        },
                        c: null,
                        d: js,
                        e: js,
                        f: Ys,
                        H: Ls,
                        I: Hs,
                        j: Us,
                        L: Rs,
                        m: qs,
                        M: Is,
                        p: function(t) {
                            return i[+(t.getHours() >= 12)]
                        },
                        Q: bc,
                        s: mc,
                        S: Bs,
                        u: $s,
                        U: Vs,
                        V: Ws,
                        w: Xs,
                        W: Gs,
                        x: null,
                        X: null,
                        y: Zs,
                        Y: Js,
                        Z: Qs,
                        "%": gc
                    },
                    v = {
                        a: function(t) {
                            return o[t.getUTCDay()]
                        },
                        A: function(t) {
                            return a[t.getUTCDay()]
                        },
                        b: function(t) {
                            return c[t.getUTCMonth()]
                        },
                        B: function(t) {
                            return s[t.getUTCMonth()]
                        },
                        c: null,
                        d: Ks,
                        e: Ks,
                        f: ic,
                        H: tc,
                        I: ec,
                        j: nc,
                        L: rc,
                        m: ac,
                        M: oc,
                        p: function(t) {
                            return i[+(t.getUTCHours() >= 12)]
                        },
                        Q: bc,
                        s: mc,
                        S: sc,
                        u: cc,
                        U: lc,
                        V: fc,
                        w: uc,
                        W: dc,
                        x: null,
                        X: null,
                        y: hc,
                        Y: pc,
                        Z: _c,
                        "%": gc
                    },
                    w = {
                        a: function(t, e, n) {
                            var r = h.exec(e.slice(n));
                            return r ? (t.w = p[r[0].toLowerCase()], n + r[0].length) : -1
                        },
                        A: function(t, e, n) {
                            var r = u.exec(e.slice(n));
                            return r ? (t.w = d[r[0].toLowerCase()], n + r[0].length) : -1
                        },
                        b: function(t, e, n) {
                            var r = b.exec(e.slice(n));
                            return r ? (t.m = m[r[0].toLowerCase()], n + r[0].length) : -1
                        },
                        B: function(t, e, n) {
                            var r = _.exec(e.slice(n));
                            return r ? (t.m = g[r[0].toLowerCase()], n + r[0].length) : -1
                        },
                        c: function(t, n, r) {
                            return k(t, e, n, r)
                        },
                        d: As,
                        e: As,
                        f: zs,
                        H: Cs,
                        I: Cs,
                        j: Ts,
                        L: Es,
                        m: Ss,
                        M: Ns,
                        p: function(t, e, n) {
                            var r = l.exec(e.slice(n));
                            return r ? (t.p = f[r[0].toLowerCase()], n + r[0].length) : -1
                        },
                        Q: Ps,
                        s: Ds,
                        S: Os,
                        u: ms,
                        U: ys,
                        V: vs,
                        w: bs,
                        W: ws,
                        x: function(t, e, r) {
                            return k(t, n, e, r)
                        },
                        X: function(t, e, n) {
                            return k(t, r, e, n)
                        },
                        y: Ms,
                        Y: xs,
                        Z: ks,
                        "%": Fs
                    };

                function x(t, e) {
                    return function(n) {
                        var r, i, a, o = [],
                            s = -1,
                            c = 0,
                            l = t.length;
                        for (n instanceof Date || (n = new Date(+n)); ++s < l;) 37 === t.charCodeAt(s) && (o.push(t.slice(c, s)), null != (i = ls[r = t.charAt(++s)]) ? r = t.charAt(++s) : i = "e" === r ? " " : "0", (a = e[r]) && (r = a(n, i)), o.push(r), c = s + 1);
                        return o.push(t.slice(c, s)), o.join("")
                    }
                }

                function M(t, e) {
                    return function(n) {
                        var r, i, a = is(1900);
                        if (k(a, t, n += "", 0) != n.length) return null;
                        if ("Q" in a) return new Date(a.Q);
                        if ("p" in a && (a.H = a.H % 12 + 12 * a.p), "V" in a) {
                            if (a.V < 1 || a.V > 53) return null;
                            "w" in a || (a.w = 1), "Z" in a ? (i = (r = rs(is(a.y))).getUTCDay(), r = i > 4 || 0 === i ? Ko.ceil(r) : Ko(r), r = Zo.offset(r, 7 * (a.V - 1)), a.y = r.getUTCFullYear(), a.m = r.getUTCMonth(), a.d = r.getUTCDate() + (a.w + 6) % 7) : (i = (r = e(is(a.y))).getDay(), r = i > 4 || 0 === i ? Wo.ceil(r) : Wo(r), r = Bo.offset(r, 7 * (a.V - 1)), a.y = r.getFullYear(), a.m = r.getMonth(), a.d = r.getDate() + (a.w + 6) % 7)
                        } else("W" in a || "U" in a) && ("w" in a || (a.w = "u" in a ? a.u % 7 : "W" in a ? 1 : 0), i = "Z" in a ? rs(is(a.y)).getUTCDay() : e(is(a.y)).getDay(), a.m = 0, a.d = "W" in a ? (a.w + 6) % 7 + 7 * a.W - (i + 5) % 7 : a.w + 7 * a.U - (i + 6) % 7);
                        return "Z" in a ? (a.H += a.Z / 100 | 0, a.M += a.Z % 100, rs(a)) : e(a)
                    }
                }

                function k(t, e, n, r) {
                    for (var i, a, o = 0, s = e.length, c = n.length; o < s;) {
                        if (r >= c) return -1;
                        if (37 === (i = e.charCodeAt(o++))) {
                            if (i = e.charAt(o++), !(a = w[i in ls ? e.charAt(o++) : i]) || (r = a(t, n, r)) < 0) return -1
                        } else if (i != n.charCodeAt(r++)) return -1
                    }
                    return r
                }
                return y.x = x(n, y), y.X = x(r, y), y.c = x(e, y), v.x = x(n, v), v.X = x(r, v), v.c = x(e, v), {
                    format: function(t) {
                        var e = x(t += "", y);
                        return e.toString = function() {
                            return t
                        }, e
                    },
                    parse: function(t) {
                        var e = M(t += "", ns);
                        return e.toString = function() {
                            return t
                        }, e
                    },
                    utcFormat: function(t) {
                        var e = x(t += "", v);
                        return e.toString = function() {
                            return t
                        }, e
                    },
                    utcParse: function(t) {
                        var e = M(t, rs);
                        return e.toString = function() {
                            return t
                        }, e
                    }
                }
            }(t), os = as.format, as.parse, ss = as.utcFormat, cs = as.utcParse
        }({
            dateTime: "%x, %X",
            date: "%-m/%-d/%Y",
            time: "%-I:%M:%S %p",
            periods: ["AM", "PM"],
            days: ["Sunday", "Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday"],
            shortDays: ["Sun", "Mon", "Tue", "Wed", "Thu", "Fri", "Sat"],
            months: ["January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December"],
            shortMonths: ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"]
        });
        Date.prototype.toISOString || ss("%Y-%m-%dT%H:%M:%S.%LZ"); + new Date("2000-01-01T00:00:00.000Z") || cs("%Y-%m-%dT%H:%M:%S.%LZ");

        function yc() {
            var t, e, n, r, i, a = 0,
                o = 1,
                s = po,
                c = !1;

            function l(e) {
                return isNaN(e = +e) ? i : s(0 === n ? .5 : (e = (r(e) - t) * n, c ? Math.max(0, Math.min(1, e)) : e))
            }
            return l.domain = function(i) {
                    return arguments.length ? (t = r(a = +i[0]), e = r(o = +i[1]), n = t === e ? 0 : 1 / (e - t), l) : [a, o]
                }, l.clamp = function(t) {
                    return arguments.length ? (c = !!t, l) : c
                }, l.interpolator = function(t) {
                    return arguments.length ? (s = t, l) : s
                }, l.unknown = function(t) {
                    return arguments.length ? (i = t, l) : i
                },
                function(i) {
                    return r = i, t = i(a), e = i(o), n = t === e ? 0 : 1 / (e - t), l
                }
        }

        function vc(t, e) {
            return e.domain(t.domain()).interpolator(t.interpolator()).clamp(t.clamp()).unknown(t.unknown())
        }

        function wc() {
            var t = Uo(yc()(po));
            return t.copy = function() {
                return vc(t, wc())
            }, Si.apply(t, arguments)
        }
        var xc = Array.prototype.slice;

        function Mc(t) {
            return t
        }

        function kc(t) {
            return "translate(" + (t + .5) + ",0)"
        }

        function Sc(t) {
            return "translate(0," + (t + .5) + ")"
        }

        function Ac(t) {
            return function(e) {
                return +t(e)
            }
        }

        function Tc(t) {
            var e = Math.max(0, t.bandwidth() - 1) / 2;
            return t.round() && (e = Math.round(e)),
                function(n) {
                    return +t(n) + e
                }
        }

        function Cc() {
            return !this.__axis
        }

        function Nc(t, e) {
            var n = [],
                r = null,
                i = null,
                a = 6,
                o = 6,
                s = 3,
                c = 1 === t || 4 === t ? -1 : 1,
                l = 4 === t || 2 === t ? "x" : "y",
                f = 1 === t || 3 === t ? kc : Sc;

            function u(u) {
                var d = null == r ? e.ticks ? e.ticks.apply(e, n) : e.domain() : r,
                    h = null == i ? e.tickFormat ? e.tickFormat.apply(e, n) : Mc : i,
                    p = Math.max(a, 0) + s,
                    _ = e.range(),
                    g = +_[0] + .5,
                    b = +_[_.length - 1] + .5,
                    m = (e.bandwidth ? Tc : Ac)(e.copy()),
                    y = u.selection ? u.selection() : u,
                    v = y.selectAll(".domain").data([null]),
                    w = y.selectAll(".tick").data(d, e).order(),
                    x = w.exit(),
                    M = w.enter().append("g").attr("class", "tick"),
                    k = w.select("line"),
                    S = w.select("text");
                v = v.merge(v.enter().insert("path", ".tick").attr("class", "domain").attr("stroke", "currentColor")), w = w.merge(M), k = k.merge(M.append("line").attr("stroke", "currentColor").attr(l + "2", c * a)), S = S.merge(M.append("text").attr("fill", "currentColor").attr(l, c * p).attr("dy", 1 === t ? "0em" : 3 === t ? "0.71em" : "0.32em")), u !== y && (v = v.transition(u), w = w.transition(u), k = k.transition(u), S = S.transition(u), x = x.transition(u).attr("opacity", 1e-6).attr("transform", (function(t) {
                    return isFinite(t = m(t)) ? f(t) : this.getAttribute("transform")
                })), M.attr("opacity", 1e-6).attr("transform", (function(t) {
                    var e = this.parentNode.__axis;
                    return f(e && isFinite(e = e(t)) ? e : m(t))
                }))), x.remove(), v.attr("d", 4 === t || 2 == t ? o ? "M" + c * o + "," + g + "H0.5V" + b + "H" + c * o : "M0.5," + g + "V" + b : o ? "M" + g + "," + c * o + "V0.5H" + b + "V" + c * o : "M" + g + ",0.5H" + b), w.attr("opacity", 1).attr("transform", (function(t) {
                    return f(m(t))
                })), k.attr(l + "2", c * a), S.attr(l, c * p).text(h), y.filter(Cc).attr("fill", "none").attr("font-size", 10).attr("font-family", "sans-serif").attr("text-anchor", 2 === t ? "start" : 4 === t ? "end" : "middle"), y.each((function() {
                    this.__axis = m
                }))
            }
            return u.scale = function(t) {
                return arguments.length ? (e = t, u) : e
            }, u.ticks = function() {
                return n = xc.call(arguments), u
            }, u.tickArguments = function(t) {
                return arguments.length ? (n = null == t ? [] : xc.call(t), u) : n.slice()
            }, u.tickValues = function(t) {
                return arguments.length ? (r = null == t ? null : xc.call(t), u) : r && r.slice()
            }, u.tickFormat = function(t) {
                return arguments.length ? (i = t, u) : i
            }, u.tickSize = function(t) {
                return arguments.length ? (a = o = +t, u) : a
            }, u.tickSizeInner = function(t) {
                return arguments.length ? (a = +t, u) : a
            }, u.tickSizeOuter = function(t) {
                return arguments.length ? (o = +t, u) : o
            }, u.tickPadding = function(t) {
                return arguments.length ? (s = +t, u) : s
            }, u
        }

        function Oc(t) {
            return Nc(1, t)
        }

        function Ec(t) {
            return Nc(3, t)
        }

        function zc(t) {
            return Nc(4, t)
        }
        var Fc = {
            value: function() {}
        };

        function Pc() {
            for (var t, e = arguments, n = 0, r = arguments.length, i = {}; n < r; ++n) {
                if (!(t = e[n] + "") || t in i || /[\s.]/.test(t)) throw new Error("illegal type: " + t);
                i[t] = []
            }
            return new Dc(i)
        }

        function Dc(t) {
            this._ = t
        }

        function jc(t, e) {
            return t.trim().split(/^|\s+/).map((function(t) {
                var n = "",
                    r = t.indexOf(".");
                if (r >= 0 && (n = t.slice(r + 1), t = t.slice(0, r)), t && !e.hasOwnProperty(t)) throw new Error("unknown type: " + t);
                return {
                    type: t,
                    name: n
                }
            }))
        }

        function Lc(t, e) {
            for (var n, r = 0, i = t.length; r < i; ++r)
                if ((n = t[r]).name === e) return n.value
        }

        function Hc(t, e, n) {
            for (var r = 0, i = t.length; r < i; ++r)
                if (t[r].name === e) {
                    t[r] = Fc, t = t.slice(0, r).concat(t.slice(r + 1));
                    break
                } return null != n && t.push({
                name: e,
                value: n
            }), t
        }
        Dc.prototype = Pc.prototype = {
            constructor: Dc,
            on: function(t, e) {
                var n, r = this._,
                    i = jc(t + "", r),
                    a = -1,
                    o = i.length;
                if (!(arguments.length < 2)) {
                    if (null != e && "function" != typeof e) throw new Error("invalid callback: " + e);
                    for (; ++a < o;)
                        if (n = (t = i[a]).type) r[n] = Hc(r[n], t.name, e);
                        else if (null == e)
                        for (n in r) r[n] = Hc(r[n], t.name, null);
                    return this
                }
                for (; ++a < o;)
                    if ((n = (t = i[a]).type) && (n = Lc(r[n], t.name))) return n
            },
            copy: function() {
                var t = {},
                    e = this._;
                for (var n in e) t[n] = e[n].slice();
                return new Dc(t)
            },
            call: function(t, e) {
                var n = arguments;
                if ((r = arguments.length - 2) > 0)
                    for (var r, i, a = new Array(r), o = 0; o < r; ++o) a[o] = n[o + 2];
                if (!this._.hasOwnProperty(t)) throw new Error("unknown type: " + t);
                for (o = 0, r = (i = this._[t]).length; o < r; ++o) i[o].value.apply(e, a)
            },
            apply: function(t, e, n) {
                if (!this._.hasOwnProperty(t)) throw new Error("unknown type: " + t);
                for (var r = this._[t], i = 0, a = r.length; i < a; ++i) r[i].value.apply(e, n)
            }
        };
        var Uc, Rc, Yc = 0,
            qc = 0,
            Ic = 0,
            Bc = 0,
            $c = 0,
            Vc = 0,
            Wc = "object" == typeof performance && performance.now ? performance : Date,
            Xc = "object" == typeof window && window.requestAnimationFrame ? window.requestAnimationFrame.bind(window) : function(t) {
                setTimeout(t, 17)
            };

        function Gc() {
            return $c || (Xc(Zc), $c = Wc.now() + Vc)
        }

        function Zc() {
            $c = 0
        }

        function Jc() {
            this._call = this._time = this._next = null
        }

        function Qc(t, e, n) {
            var r = new Jc;
            return r.restart(t, e, n), r
        }

        function Kc() {
            $c = (Bc = Wc.now()) + Vc, Yc = qc = 0;
            try {
                ! function() {
                    Gc(), ++Yc;
                    for (var t, e = Uc; e;)(t = $c - e._time) >= 0 && e._call.call(null, t), e = e._next;
                    --Yc
                }()
            } finally {
                Yc = 0,
                    function() {
                        var t, e, n = Uc,
                            r = 1 / 0;
                        for (; n;) n._call ? (r > n._time && (r = n._time), t = n, n = n._next) : (e = n._next, n._next = null, n = t ? t._next = e : Uc = e);
                        Rc = t, el(r)
                    }(), $c = 0
            }
        }

        function tl() {
            var t = Wc.now(),
                e = t - Bc;
            e > 1e3 && (Vc -= e, Bc = t)
        }

        function el(t) {
            Yc || (qc && (qc = clearTimeout(qc)), t - $c > 24 ? (t < 1 / 0 && (qc = setTimeout(Kc, t - Wc.now() - Vc)), Ic && (Ic = clearInterval(Ic))) : (Ic || (Bc = Wc.now(), Ic = setInterval(tl, 1e3)), Yc = 1, Xc(Kc)))
        }

        function nl(t, e, n) {
            var r = new Jc;
            return e = null == e ? 0 : +e, r.restart((function(n) {
                r.stop(), t(n + e)
            }), e, n), r
        }
        Jc.prototype = Qc.prototype = {
            constructor: Jc,
            restart: function(t, e, n) {
                if ("function" != typeof t) throw new TypeError("callback is not a function");
                n = (null == n ? Gc() : +n) + (null == e ? 0 : +e), this._next || Rc === this || (Rc ? Rc._next = this : Uc = this, Rc = this), this._call = t, this._time = n, el()
            },
            stop: function() {
                this._call && (this._call = null, this._time = 1 / 0, el())
            }
        };
        var rl = Pc("start", "end", "cancel", "interrupt"),
            il = [];

        function al(t, e, n, r, i, a) {
            var o = t.__transition;
            if (o) {
                if (n in o) return
            } else t.__transition = {};
            ! function(t, e, n) {
                var r, i = t.__transition;

                function a(c) {
                    var l, f, u, d;
                    if (1 !== n.state) return s();
                    for (l in i)
                        if ((d = i[l]).name === n.name) {
                            if (3 === d.state) return nl(a);
                            4 === d.state ? (d.state = 6, d.timer.stop(), d.on.call("interrupt", t, t.__data__, d.index, d.group), delete i[l]) : +l < e && (d.state = 6, d.timer.stop(), d.on.call("cancel", t, t.__data__, d.index, d.group), delete i[l])
                        } if (nl((function() {
                            3 === n.state && (n.state = 4, n.timer.restart(o, n.delay, n.time), o(c))
                        })), n.state = 2, n.on.call("start", t, t.__data__, n.index, n.group), 2 === n.state) {
                        for (n.state = 3, r = new Array(u = n.tween.length), l = 0, f = -1; l < u; ++l)(d = n.tween[l].value.call(t, t.__data__, n.index, n.group)) && (r[++f] = d);
                        r.length = f + 1
                    }
                }

                function o(e) {
                    for (var i = e < n.duration ? n.ease.call(null, e / n.duration) : (n.timer.restart(s), n.state = 5, 1), a = -1, o = r.length; ++a < o;) r[a].call(t, i);
                    5 === n.state && (n.on.call("end", t, t.__data__, n.index, n.group), s())
                }

                function s() {
                    for (var r in n.state = 6, n.timer.stop(), delete i[e], i) return;
                    delete t.__transition
                }
                i[e] = n, n.timer = Qc((function(t) {
                    n.state = 1, n.timer.restart(a, n.delay, n.time), n.delay <= t && a(t - n.delay)
                }), 0, n.time)
            }(t, n, {
                name: e,
                index: r,
                group: i,
                on: rl,
                tween: il,
                time: a.time,
                delay: a.delay,
                duration: a.duration,
                ease: a.ease,
                timer: null,
                state: 0
            })
        }

        function ol(t, e) {
            var n = cl(t, e);
            if (n.state > 0) throw new Error("too late; already scheduled");
            return n
        }

        function sl(t, e) {
            var n = cl(t, e);
            if (n.state > 3) throw new Error("too late; already running");
            return n
        }

        function cl(t, e) {
            var n = t.__transition;
            if (!n || !(n = n[e])) throw new Error("transition not found");
            return n
        }

        function ll(t, e) {
            var n, r;
            return function() {
                var i = sl(this, t),
                    a = i.tween;
                if (a !== n)
                    for (var o = 0, s = (r = n = a).length; o < s; ++o)
                        if (r[o].name === e) {
                            (r = r.slice()).splice(o, 1);
                            break
                        } i.tween = r
            }
        }

        function fl(t, e, n) {
            var r, i;
            if ("function" != typeof n) throw new Error;
            return function() {
                var a = sl(this, t),
                    o = a.tween;
                if (o !== r) {
                    i = (r = o).slice();
                    for (var s = {
                            name: e,
                            value: n
                        }, c = 0, l = i.length; c < l; ++c)
                        if (i[c].name === e) {
                            i[c] = s;
                            break
                        } c === l && i.push(s)
                }
                a.tween = i
            }
        }

        function ul(t, e, n) {
            var r = t._id;
            return t.each((function() {
                    var t = sl(this, r);
                    (t.value || (t.value = {}))[e] = n.apply(this, arguments)
                })),
                function(t) {
                    return cl(t, r).value[e]
                }
        }

        function dl(t, e) {
            var n;
            return ("number" == typeof e ? Ia : e instanceof Gi ? La : (n = Gi(e)) ? (e = n, La) : Wa)(t, e)
        }

        function hl(t) {
            return function() {
                this.removeAttribute(t)
            }
        }

        function pl(t) {
            return function() {
                this.removeAttributeNS(t.space, t.local)
            }
        }

        function _l(t, e, n) {
            var r, i, a = n + "";
            return function() {
                var o = this.getAttribute(t);
                return o === a ? null : o === r ? i : i = e(r = o, n)
            }
        }

        function gl(t, e, n) {
            var r, i, a = n + "";
            return function() {
                var o = this.getAttributeNS(t.space, t.local);
                return o === a ? null : o === r ? i : i = e(r = o, n)
            }
        }

        function bl(t, e, n) {
            var r, i, a;
            return function() {
                var o, s, c = n(this);
                if (null != c) return (o = this.getAttribute(t)) === (s = c + "") ? null : o === r && s === i ? a : (i = s, a = e(r = o, c));
                this.removeAttribute(t)
            }
        }

        function ml(t, e, n) {
            var r, i, a;
            return function() {
                var o, s, c = n(this);
                if (null != c) return (o = this.getAttributeNS(t.space, t.local)) === (s = c + "") ? null : o === r && s === i ? a : (i = s, a = e(r = o, c));
                this.removeAttributeNS(t.space, t.local)
            }
        }

        function yl(t, e) {
            return function(n) {
                this.setAttribute(t, e.call(this, n))
            }
        }

        function vl(t, e) {
            return function(n) {
                this.setAttributeNS(t.space, t.local, e.call(this, n))
            }
        }

        function wl(t, e) {
            var n, r;

            function i() {
                var i = e.apply(this, arguments);
                return i !== r && (n = (r = i) && vl(t, i)), n
            }
            return i._value = e, i
        }

        function xl(t, e) {
            var n, r;

            function i() {
                var i = e.apply(this, arguments);
                return i !== r && (n = (r = i) && yl(t, i)), n
            }
            return i._value = e, i
        }

        function Ml(t, e) {
            return function() {
                ol(this, t).delay = +e.apply(this, arguments)
            }
        }

        function kl(t, e) {
            return e = +e,
                function() {
                    ol(this, t).delay = e
                }
        }

        function Sl(t, e) {
            return function() {
                sl(this, t).duration = +e.apply(this, arguments)
            }
        }

        function Al(t, e) {
            return e = +e,
                function() {
                    sl(this, t).duration = e
                }
        }

        function Tl(t, e) {
            if ("function" != typeof e) throw new Error;
            return function() {
                sl(this, t).ease = e
            }
        }

        function Cl(t, e, n) {
            var r, i, a = function(t) {
                return (t + "").trim().split(/^|\s+/).every((function(t) {
                    var e = t.indexOf(".");
                    return e >= 0 && (t = t.slice(0, e)), !t || "start" === t
                }))
            }(e) ? ol : sl;
            return function() {
                var o = a(this, t),
                    s = o.on;
                s !== r && (i = (r = s).copy()).on(e, n), o.on = i
            }
        }
        var Nl = ii.prototype.constructor;

        function Ol(t) {
            return function() {
                this.style.removeProperty(t)
            }
        }

        function El(t, e, n) {
            return function(r) {
                this.style.setProperty(t, e.call(this, r), n)
            }
        }

        function zl(t, e, n) {
            var r, i;

            function a() {
                var a = e.apply(this, arguments);
                return a !== i && (r = (i = a) && El(t, a, n)), r
            }
            return a._value = e, a
        }

        function Fl(t) {
            return function(e) {
                this.textContent = t.call(this, e)
            }
        }

        function Pl(t) {
            var e, n;

            function r() {
                var r = t.apply(this, arguments);
                return r !== n && (e = (n = r) && Fl(r)), e
            }
            return r._value = t, r
        }
        var Dl = 0;

        function jl(t, e, n, r) {
            this._groups = t, this._parents = e, this._name = n, this._id = r
        }

        function Ll() {
            return ++Dl
        }
        var Hl = ii.prototype;
        jl.prototype = function(t) {
            return ii().transition(t)
        }.prototype = {
            constructor: jl,
            select: function(t) {
                var e = this._name,
                    n = this._id;
                "function" != typeof t && (t = rr(t));
                for (var r = this._groups, i = r.length, a = new Array(i), o = 0; o < i; ++o)
                    for (var s, c, l = r[o], f = l.length, u = a[o] = new Array(f), d = 0; d < f; ++d)(s = l[d]) && (c = t.call(s, s.__data__, d, l)) && ("__data__" in s && (c.__data__ = s.__data__), u[d] = c, al(u[d], e, n, d, u, cl(s, n)));
                return new jl(a, this._parents, e, n)
            },
            selectAll: function(t) {
                var e = this._name,
                    n = this._id;
                "function" != typeof t && (t = ar(t));
                for (var r = this._groups, i = r.length, a = [], o = [], s = 0; s < i; ++s)
                    for (var c, l = r[s], f = l.length, u = 0; u < f; ++u)
                        if (c = l[u]) {
                            for (var d, h = t.call(c, c.__data__, u, l), p = cl(c, n), _ = 0, g = h.length; _ < g; ++_)(d = h[_]) && al(d, e, n, _, h, p);
                            a.push(h), o.push(c)
                        } return new jl(a, o, e, n)
            },
            filter: function(t) {
                "function" != typeof t && (t = or(t));
                for (var e = this._groups, n = e.length, r = new Array(n), i = 0; i < n; ++i)
                    for (var a, o = e[i], s = o.length, c = r[i] = [], l = 0; l < s; ++l)(a = o[l]) && t.call(a, a.__data__, l, o) && c.push(a);
                return new jl(r, this._parents, this._name, this._id)
            },
            merge: function(t) {
                if (t._id !== this._id) throw new Error;
                for (var e = this._groups, n = t._groups, r = e.length, i = n.length, a = Math.min(r, i), o = new Array(r), s = 0; s < a; ++s)
                    for (var c, l = e[s], f = n[s], u = l.length, d = o[s] = new Array(u), h = 0; h < u; ++h)(c = l[h] || f[h]) && (d[h] = c);
                for (; s < r; ++s) o[s] = e[s];
                return new jl(o, this._parents, this._name, this._id)
            },
            selection: function() {
                return new Nl(this._groups, this._parents)
            },
            transition: function() {
                for (var t = this._name, e = this._id, n = Ll(), r = this._groups, i = r.length, a = 0; a < i; ++a)
                    for (var o, s = r[a], c = s.length, l = 0; l < c; ++l)
                        if (o = s[l]) {
                            var f = cl(o, e);
                            al(o, t, n, l, s, {
                                time: f.time + f.delay + f.duration,
                                delay: 0,
                                duration: f.duration,
                                ease: f.ease
                            })
                        } return new jl(r, this._parents, t, n)
            },
            call: Hl.call,
            nodes: Hl.nodes,
            node: Hl.node,
            size: Hl.size,
            empty: Hl.empty,
            each: Hl.each,
            on: function(t, e) {
                var n = this._id;
                return arguments.length < 2 ? cl(this.node(), n).on.on(t) : this.each(Cl(n, t, e))
            },
            attr: function(t, e) {
                var n = Qn(t),
                    r = "transform" === n ? ao : dl;
                return this.attrTween(t, "function" == typeof e ? (n.local ? ml : bl)(n, r, ul(this, "attr." + t, e)) : null == e ? (n.local ? pl : hl)(n) : (n.local ? gl : _l)(n, r, e))
            },
            attrTween: function(t, e) {
                var n = "attr." + t;
                if (arguments.length < 2) return (n = this.tween(n)) && n._value;
                if (null == e) return this.tween(n, null);
                if ("function" != typeof e) throw new Error;
                var r = Qn(t);
                return this.tween(n, (r.local ? wl : xl)(r, e))
            },
            style: function(t, e, n) {
                var r = "transform" == (t += "") ? io : dl;
                return null == e ? this.styleTween(t, function(t, e) {
                    var n, r, i;
                    return function() {
                        var a = xr(this, t),
                            o = (this.style.removeProperty(t), xr(this, t));
                        return a === o ? null : a === n && o === r ? i : i = e(n = a, r = o)
                    }
                }(t, r)).on("end.style." + t, Ol(t)) : "function" == typeof e ? this.styleTween(t, function(t, e, n) {
                    var r, i, a;
                    return function() {
                        var o = xr(this, t),
                            s = n(this),
                            c = s + "";
                        return null == s && (this.style.removeProperty(t), c = s = xr(this, t)), o === c ? null : o === r && c === i ? a : (i = c, a = e(r = o, s))
                    }
                }(t, r, ul(this, "style." + t, e))).each(function(t, e) {
                    var n, r, i, a, o = "style." + e,
                        s = "end." + o;
                    return function() {
                        var c = sl(this, t),
                            l = c.on,
                            f = null == c.value[o] ? a || (a = Ol(e)) : void 0;
                        l === n && i === f || (r = (n = l).copy()).on(s, i = f), c.on = r
                    }
                }(this._id, t)) : this.styleTween(t, function(t, e, n) {
                    var r, i, a = n + "";
                    return function() {
                        var o = xr(this, t);
                        return o === a ? null : o === r ? i : i = e(r = o, n)
                    }
                }(t, r, e), n).on("end.style." + t, null)
            },
            styleTween: function(t, e, n) {
                var r = "style." + (t += "");
                if (arguments.length < 2) return (r = this.tween(r)) && r._value;
                if (null == e) return this.tween(r, null);
                if ("function" != typeof e) throw new Error;
                return this.tween(r, zl(t, e, null == n ? "" : n))
            },
            text: function(t) {
                return this.tween("text", "function" == typeof t ? function(t) {
                    return function() {
                        var e = t(this);
                        this.textContent = null == e ? "" : e
                    }
                }(ul(this, "text", t)) : function(t) {
                    return function() {
                        this.textContent = t
                    }
                }(null == t ? "" : t + ""))
            },
            textTween: function(t) {
                var e = "text";
                if (arguments.length < 1) return (e = this.tween(e)) && e._value;
                if (null == t) return this.tween(e, null);
                if ("function" != typeof t) throw new Error;
                return this.tween(e, Pl(t))
            },
            remove: function() {
                return this.on("end.remove", function(t) {
                    return function() {
                        var e = this.parentNode;
                        for (var n in this.__transition)
                            if (+n !== t) return;
                        e && e.removeChild(this)
                    }
                }(this._id))
            },
            tween: function(t, e) {
                var n = this._id;
                if (t += "", arguments.length < 2) {
                    for (var r, i = cl(this.node(), n).tween, a = 0, o = i.length; a < o; ++a)
                        if ((r = i[a]).name === t) return r.value;
                    return null
                }
                return this.each((null == e ? ll : fl)(n, t, e))
            },
            delay: function(t) {
                var e = this._id;
                return arguments.length ? this.each(("function" == typeof t ? Ml : kl)(e, t)) : cl(this.node(), e).delay
            },
            duration: function(t) {
                var e = this._id;
                return arguments.length ? this.each(("function" == typeof t ? Sl : Al)(e, t)) : cl(this.node(), e).duration
            },
            ease: function(t) {
                var e = this._id;
                return arguments.length ? this.each(Tl(e, t)) : cl(this.node(), e).ease
            },
            end: function() {
                var t, e, n = this,
                    r = n._id,
                    i = n.size();
                return new Promise((function(a, o) {
                    var s = {
                            value: o
                        },
                        c = {
                            value: function() {
                                0 == --i && a()
                            }
                        };
                    n.each((function() {
                        var n = sl(this, r),
                            i = n.on;
                        i !== t && ((e = (t = i).copy())._.cancel.push(s), e._.interrupt.push(s), e._.end.push(c)), n.on = e
                    }))
                }))
            }
        };
        var Ul = {
            time: null,
            delay: 0,
            duration: 250,
            ease: function(t) {
                return ((t *= 2) <= 1 ? t * t * t : (t -= 2) * t * t + 2) / 2
            }
        };

        function Rl(t, e) {
            for (var n; !(n = t.__transition) || !(n = n[e]);)
                if (!(t = t.parentNode)) return Ul.time = Gc(), Ul;
            return n
        }
        ii.prototype.interrupt = function(t) {
            return this.each((function() {
                ! function(t, e) {
                    var n, r, i, a = t.__transition,
                        o = !0;
                    if (a) {
                        for (i in e = null == e ? null : e + "", a)(n = a[i]).name === e ? (r = n.state > 2 && n.state < 5, n.state = 6, n.timer.stop(), n.on.call(r ? "interrupt" : "cancel", t, t.__data__, n.index, n.group), delete a[i]) : o = !1;
                        o && delete t.__transition
                    }
                }(this, t)
            }))
        }, ii.prototype.transition = function(t) {
            var e, n;
            t instanceof jl ? (e = t._id, t = t._name) : (e = Ll(), (n = Ul).time = Gc(), t = null == t ? null : t + "");
            for (var r = this._groups, i = r.length, a = 0; a < i; ++a)
                for (var o, s = r[a], c = s.length, l = 0; l < c; ++l)(o = s[l]) && al(o, t, e, l, s, n || Rl(o, e));
            return new jl(r, this._parents, t, e)
        };
        var Yl = Object.freeze({
            input_decimal_separator: ".",
            output_separators: ",."
        });

        function ql(t) {
            for (var e in Yl) void 0 === t[e] && (t[e] = Yl[e]);
            return {
                getParser: function() {
                    return e = t.input_decimal_separator, n = new RegExp("[^-0-9eE" + e + "]", "g"),
                        function(t) {
                            return "number" == typeof t ? t : "" === t || void 0 === t ? NaN : parseFloat(t.replace(n, "").replace(e, "."))
                        };
                    var e, n
                },
                getFormatterFunction: function() {
                    return e = t.output_separators, n = e.length > 1, r = n ? e.charAt(1) : e.charAt(0), i = n ? e.charAt(0) : "", (a = Po(function(t, e) {
                        return {
                            decimal: t,
                            thousands: e,
                            grouping: [3],
                            currency: ["", ""]
                        }
                    }(r, i)).format).decimal = r, a.thousands = i, a;
                    var e, n, r, i, a
                }
            }
        }
        var Il, Bl, $l, Vl, Wl = Object.freeze({
            transform_labels: !1,
            transform: "multiply",
            multiply_divide_constant: 1,
            exponentiate_constant: 0,
            multiplier: 1,
            prefix: "",
            n_dec: 2,
            suffix: "",
            strip_zeros: !0,
            strip_separator: !0,
            negative_sign: "-$nk"
        });

        function Xl(t, e) {
            var n = t.n_dec >= 0 ? Math.floor(t.n_dec) : Math.ceil(t.n_dec),
                r = e(",." + (n > 0 ? n : "0") + "f"),
                i = e.decimal,
                a = e.thousands,
                o = t.strip_zeros && n > 0 ? new RegExp("\\" + i + "?0+$") : null,
                s = t.strip_separator && a,
                c = t.negative_sign,
                l = function(t) {
                    var e = 1;
                    return t.transform_labels && (e = "multiply" === t.transform ? t.multiply_divide_constant : "divide" === t.transform ? 1 / t.multiply_divide_constant : Math.pow(10, t.exponentiate_constant)),
                        function(t) {
                            return t * e
                        }
                }(t);
            return function(e) {
                var i = n >= 0 ? l(e) : function(t, e) {
                        if (!(e = e > 0 ? Math.floor(e) : Math.ceil(e))) return Math.round(t);
                        var n = Math.pow(10, Math.abs(e));
                        return e > 0 ? Math.round(t * n) / n : Math.round(t / n) * n
                    }(l(e), n),
                    f = i < 0,
                    u = Math.abs(i),
                    d = s && a && u >= 1e3 && u < 1e4,
                    h = r(u);
                return o && (h = h.replace(o, "")), d && (h = h.replace(a, "")), f && "none" !== c ? "-$nk" === c ? "-" + t.prefix + h + t.suffix : "$-nk" === c ? t.prefix + "-" + h + t.suffix : "($nk)" === c ? "(" + t.prefix + h + t.suffix + ")" : t.prefix + "(" + h + ")" + t.suffix : t.prefix + h + t.suffix
            }
        }

        function Gl() {
            $l = Il.getParser(), Vl = Bl(Il.getFormatterFunction())
        }

        function Zl(t, e) {
            return t.reduce((function(t, n) {
                return t[n] = e, t
            }), {})
        }

        function Jl(t, e) {
            return (e = e || Object.keys(t)).reduce((function(e, n) {
                return e[n] = t[n], e
            }), {})
        }
        var Ql = Object.freeze({
                compare: function(t, e) {
                    return t === e
                },
                assign: function(t) {
                    return t
                }
            }),
            Kl = Object.freeze({
                compare: function(t, e) {
                    return t == e
                },
                assign: Ql.assign
            }),
            tf = Object.freeze({
                compare: function(t, e) {
                    return !(!t || t.length !== e.length) && t.every((function(t, n) {
                        return t === e[n]
                    }))
                },
                assign: function(t) {
                    return t.slice()
                }
            });

        function ef(t) {
            return Array.isArray(t) ? function(t) {
                var e = t.slice();
                return Object.freeze({
                    compare: function(t, n) {
                        return !!t && e.every((function(e) {
                            return t[e] === n[e]
                        }))
                    },
                    assign: function(t) {
                        return Jl(t, e)
                    }
                })
            }(t) : "equality" === t ? Kl : "array-contents" === t ? tf : Ql
        }
        var nf, rf, af;
        nf = document.createElement("canvas").getContext("2d");

        function of (t) {
            return "string" == typeof t && null != t.match(/^(https?:\/\/|data:)/i)
        }
        var sf = function(t) {
            var e = Zl(t = t.slice(), !0),
                n = Zl(t, void 0),
                r = Zl(t, ef("strict-equality")),
                i = function(t, i) {
                    if (e[t]) {
                        var a = n[t],
                            o = r[t];
                        return !o.compare(a, i) && (n[t] = o.assign(i), !0)
                    }
                },
                a = function(e, n) {
                    if ("string" == typeof e) return i(e, n);
                    var r = 0;
                    return Array.isArray(e) ? e.forEach((function(e, n) {
                        i(t[n], e) && r++
                    })) : Object.keys(e).forEach((function(t) {
                        i(t, e[t]) && r++
                    })), !!r
                };
            return a.mode = function(t, n) {
                return void 0 === t ? r[t] : (e[t] && (r[t] = ef(n)), a)
            }, a.stored = function(t) {
                return "string" == typeof t ? n[t] : Jl(n)
            }, a
        }(["data", "blank_cells", "legend_filter", "separator"]).mode("legend_filter", "array-contents");
        var cf = Object.freeze({
            scale_type: "categorical",
            categorical_type: "palette",
            categorical_palette: ["#1D6996", "#EDAD08", "#73AF48", "#94346E", "#38A6A5", "#E17C05", "#5F4690", "#0F8554", "#6F4070", "#CC503E", "#994E95", "#666666"],
            categorical_extend: !0,
            categorical_seed_color: "#af5f68",
            categorical_rotation_angle: 222.49,
            categorical_color_space: "hcl",
            categorical_custom_palette: "",
            sequential_palette: "Blues",
            sequential_custom_min: "#FFFFFF",
            sequential_custom_max: "#000000",
            sequential_color_space: "rgb",
            sequential_reverse: !1,
            diverging_palette: "RdBu",
            diverging_custom_min: "#67001f",
            diverging_custom_mid: "#f7f7f7",
            diverging_custom_max: "#053061",
            diverging_color_space: "rgb",
            diverging_reverse: !1
        });

        function lf(t) {
            return "string" != typeof t && (t = "" + t), t.toLowerCase().replace(/\s+/g, "")
        }
        var ff = 360 / ((1 + Math.sqrt(5)) / 2);

        function uf(t, e, n) {
            return function(r, i) {
                Array.isArray(r) || (r = r ? [r] : ["#FF0000"]), i = void 0 !== i ? i : ff;
                var a = r.map((function(e) {
                    return t(e)
                })).filter((function(t) {
                    return !isNaN(t[e]) && !isNaN(t[n])
                }));
                a.length || (a = [t("#FF0000")]);
                var o, s = a.length,
                    c = a.reduce((function(t, n) {
                        return t + n[e]
                    }), 0) / s,
                    l = a.reduce((function(t, e) {
                        return t + e[n]
                    }), 0) / s,
                    f = s;
                do {
                    o = a[--f].h
                } while (isNaN(o) && f > 0);
                var u = 0;
                return function() {
                    var e = ++u * i;
                    return Gi(t((o + e) % 360, c, l)).hex()
                }
            }
        }
        var df = {
            hcl: uf(ya, "c", "l"),
            hsl: uf(ia, "s", "l")
        };

        function hf(t) {
            for (var e = t.length / 6 | 0, n = new Array(e), r = 0; r < e;) n[r] = "#" + t.slice(6 * r, 6 * ++r);
            return n
        }

        function pf(t) {
            return Ua(t[t.length - 1])
        }
        var _f = pf(new Array(3).concat("d8b365f5f5f55ab4ac", "a6611adfc27d80cdc1018571", "a6611adfc27df5f5f580cdc1018571", "8c510ad8b365f6e8c3c7eae55ab4ac01665e", "8c510ad8b365f6e8c3f5f5f5c7eae55ab4ac01665e", "8c510abf812ddfc27df6e8c3c7eae580cdc135978f01665e", "8c510abf812ddfc27df6e8c3f5f5f5c7eae580cdc135978f01665e", "5430058c510abf812ddfc27df6e8c3c7eae580cdc135978f01665e003c30", "5430058c510abf812ddfc27df6e8c3f5f5f5c7eae580cdc135978f01665e003c30").map(hf)),
            gf = pf(new Array(3).concat("af8dc3f7f7f77fbf7b", "7b3294c2a5cfa6dba0008837", "7b3294c2a5cff7f7f7a6dba0008837", "762a83af8dc3e7d4e8d9f0d37fbf7b1b7837", "762a83af8dc3e7d4e8f7f7f7d9f0d37fbf7b1b7837", "762a839970abc2a5cfe7d4e8d9f0d3a6dba05aae611b7837", "762a839970abc2a5cfe7d4e8f7f7f7d9f0d3a6dba05aae611b7837", "40004b762a839970abc2a5cfe7d4e8d9f0d3a6dba05aae611b783700441b", "40004b762a839970abc2a5cfe7d4e8f7f7f7d9f0d3a6dba05aae611b783700441b").map(hf)),
            bf = pf(new Array(3).concat("e9a3c9f7f7f7a1d76a", "d01c8bf1b6dab8e1864dac26", "d01c8bf1b6daf7f7f7b8e1864dac26", "c51b7de9a3c9fde0efe6f5d0a1d76a4d9221", "c51b7de9a3c9fde0eff7f7f7e6f5d0a1d76a4d9221", "c51b7dde77aef1b6dafde0efe6f5d0b8e1867fbc414d9221", "c51b7dde77aef1b6dafde0eff7f7f7e6f5d0b8e1867fbc414d9221", "8e0152c51b7dde77aef1b6dafde0efe6f5d0b8e1867fbc414d9221276419", "8e0152c51b7dde77aef1b6dafde0eff7f7f7e6f5d0b8e1867fbc414d9221276419").map(hf)),
            mf = pf(new Array(3).concat("998ec3f7f7f7f1a340", "5e3c99b2abd2fdb863e66101", "5e3c99b2abd2f7f7f7fdb863e66101", "542788998ec3d8daebfee0b6f1a340b35806", "542788998ec3d8daebf7f7f7fee0b6f1a340b35806", "5427888073acb2abd2d8daebfee0b6fdb863e08214b35806", "5427888073acb2abd2d8daebf7f7f7fee0b6fdb863e08214b35806", "2d004b5427888073acb2abd2d8daebfee0b6fdb863e08214b358067f3b08", "2d004b5427888073acb2abd2d8daebf7f7f7fee0b6fdb863e08214b358067f3b08").map(hf)),
            yf = pf(new Array(3).concat("ef8a62f7f7f767a9cf", "ca0020f4a58292c5de0571b0", "ca0020f4a582f7f7f792c5de0571b0", "b2182bef8a62fddbc7d1e5f067a9cf2166ac", "b2182bef8a62fddbc7f7f7f7d1e5f067a9cf2166ac", "b2182bd6604df4a582fddbc7d1e5f092c5de4393c32166ac", "b2182bd6604df4a582fddbc7f7f7f7d1e5f092c5de4393c32166ac", "67001fb2182bd6604df4a582fddbc7d1e5f092c5de4393c32166ac053061", "67001fb2182bd6604df4a582fddbc7f7f7f7d1e5f092c5de4393c32166ac053061").map(hf)),
            vf = pf(new Array(3).concat("ef8a62ffffff999999", "ca0020f4a582bababa404040", "ca0020f4a582ffffffbababa404040", "b2182bef8a62fddbc7e0e0e09999994d4d4d", "b2182bef8a62fddbc7ffffffe0e0e09999994d4d4d", "b2182bd6604df4a582fddbc7e0e0e0bababa8787874d4d4d", "b2182bd6604df4a582fddbc7ffffffe0e0e0bababa8787874d4d4d", "67001fb2182bd6604df4a582fddbc7e0e0e0bababa8787874d4d4d1a1a1a", "67001fb2182bd6604df4a582fddbc7ffffffe0e0e0bababa8787874d4d4d1a1a1a").map(hf)),
            wf = pf(new Array(3).concat("fc8d59ffffbf91bfdb", "d7191cfdae61abd9e92c7bb6", "d7191cfdae61ffffbfabd9e92c7bb6", "d73027fc8d59fee090e0f3f891bfdb4575b4", "d73027fc8d59fee090ffffbfe0f3f891bfdb4575b4", "d73027f46d43fdae61fee090e0f3f8abd9e974add14575b4", "d73027f46d43fdae61fee090ffffbfe0f3f8abd9e974add14575b4", "a50026d73027f46d43fdae61fee090e0f3f8abd9e974add14575b4313695", "a50026d73027f46d43fdae61fee090ffffbfe0f3f8abd9e974add14575b4313695").map(hf)),
            xf = pf(new Array(3).concat("fc8d59ffffbf91cf60", "d7191cfdae61a6d96a1a9641", "d7191cfdae61ffffbfa6d96a1a9641", "d73027fc8d59fee08bd9ef8b91cf601a9850", "d73027fc8d59fee08bffffbfd9ef8b91cf601a9850", "d73027f46d43fdae61fee08bd9ef8ba6d96a66bd631a9850", "d73027f46d43fdae61fee08bffffbfd9ef8ba6d96a66bd631a9850", "a50026d73027f46d43fdae61fee08bd9ef8ba6d96a66bd631a9850006837", "a50026d73027f46d43fdae61fee08bffffbfd9ef8ba6d96a66bd631a9850006837").map(hf)),
            Mf = pf(new Array(3).concat("fc8d59ffffbf99d594", "d7191cfdae61abdda42b83ba", "d7191cfdae61ffffbfabdda42b83ba", "d53e4ffc8d59fee08be6f59899d5943288bd", "d53e4ffc8d59fee08bffffbfe6f59899d5943288bd", "d53e4ff46d43fdae61fee08be6f598abdda466c2a53288bd", "d53e4ff46d43fdae61fee08bffffbfe6f598abdda466c2a53288bd", "9e0142d53e4ff46d43fdae61fee08be6f598abdda466c2a53288bd5e4fa2", "9e0142d53e4ff46d43fdae61fee08bffffbfe6f598abdda466c2a53288bd5e4fa2").map(hf)),
            kf = pf(new Array(3).concat("e5f5f999d8c92ca25f", "edf8fbb2e2e266c2a4238b45", "edf8fbb2e2e266c2a42ca25f006d2c", "edf8fbccece699d8c966c2a42ca25f006d2c", "edf8fbccece699d8c966c2a441ae76238b45005824", "f7fcfde5f5f9ccece699d8c966c2a441ae76238b45005824", "f7fcfde5f5f9ccece699d8c966c2a441ae76238b45006d2c00441b").map(hf)),
            Sf = pf(new Array(3).concat("e0ecf49ebcda8856a7", "edf8fbb3cde38c96c688419d", "edf8fbb3cde38c96c68856a7810f7c", "edf8fbbfd3e69ebcda8c96c68856a7810f7c", "edf8fbbfd3e69ebcda8c96c68c6bb188419d6e016b", "f7fcfde0ecf4bfd3e69ebcda8c96c68c6bb188419d6e016b", "f7fcfde0ecf4bfd3e69ebcda8c96c68c6bb188419d810f7c4d004b").map(hf)),
            Af = pf(new Array(3).concat("e0f3dba8ddb543a2ca", "f0f9e8bae4bc7bccc42b8cbe", "f0f9e8bae4bc7bccc443a2ca0868ac", "f0f9e8ccebc5a8ddb57bccc443a2ca0868ac", "f0f9e8ccebc5a8ddb57bccc44eb3d32b8cbe08589e", "f7fcf0e0f3dbccebc5a8ddb57bccc44eb3d32b8cbe08589e", "f7fcf0e0f3dbccebc5a8ddb57bccc44eb3d32b8cbe0868ac084081").map(hf)),
            Tf = pf(new Array(3).concat("fee8c8fdbb84e34a33", "fef0d9fdcc8afc8d59d7301f", "fef0d9fdcc8afc8d59e34a33b30000", "fef0d9fdd49efdbb84fc8d59e34a33b30000", "fef0d9fdd49efdbb84fc8d59ef6548d7301f990000", "fff7ecfee8c8fdd49efdbb84fc8d59ef6548d7301f990000", "fff7ecfee8c8fdd49efdbb84fc8d59ef6548d7301fb300007f0000").map(hf)),
            Cf = pf(new Array(3).concat("ece2f0a6bddb1c9099", "f6eff7bdc9e167a9cf02818a", "f6eff7bdc9e167a9cf1c9099016c59", "f6eff7d0d1e6a6bddb67a9cf1c9099016c59", "f6eff7d0d1e6a6bddb67a9cf3690c002818a016450", "fff7fbece2f0d0d1e6a6bddb67a9cf3690c002818a016450", "fff7fbece2f0d0d1e6a6bddb67a9cf3690c002818a016c59014636").map(hf)),
            Nf = pf(new Array(3).concat("ece7f2a6bddb2b8cbe", "f1eef6bdc9e174a9cf0570b0", "f1eef6bdc9e174a9cf2b8cbe045a8d", "f1eef6d0d1e6a6bddb74a9cf2b8cbe045a8d", "f1eef6d0d1e6a6bddb74a9cf3690c00570b0034e7b", "fff7fbece7f2d0d1e6a6bddb74a9cf3690c00570b0034e7b", "fff7fbece7f2d0d1e6a6bddb74a9cf3690c00570b0045a8d023858").map(hf)),
            Of = pf(new Array(3).concat("e7e1efc994c7dd1c77", "f1eef6d7b5d8df65b0ce1256", "f1eef6d7b5d8df65b0dd1c77980043", "f1eef6d4b9dac994c7df65b0dd1c77980043", "f1eef6d4b9dac994c7df65b0e7298ace125691003f", "f7f4f9e7e1efd4b9dac994c7df65b0e7298ace125691003f", "f7f4f9e7e1efd4b9dac994c7df65b0e7298ace125698004367001f").map(hf)),
            Ef = pf(new Array(3).concat("fde0ddfa9fb5c51b8a", "feebe2fbb4b9f768a1ae017e", "feebe2fbb4b9f768a1c51b8a7a0177", "feebe2fcc5c0fa9fb5f768a1c51b8a7a0177", "feebe2fcc5c0fa9fb5f768a1dd3497ae017e7a0177", "fff7f3fde0ddfcc5c0fa9fb5f768a1dd3497ae017e7a0177", "fff7f3fde0ddfcc5c0fa9fb5f768a1dd3497ae017e7a017749006a").map(hf)),
            zf = pf(new Array(3).concat("edf8b17fcdbb2c7fb8", "ffffcca1dab441b6c4225ea8", "ffffcca1dab441b6c42c7fb8253494", "ffffccc7e9b47fcdbb41b6c42c7fb8253494", "ffffccc7e9b47fcdbb41b6c41d91c0225ea80c2c84", "ffffd9edf8b1c7e9b47fcdbb41b6c41d91c0225ea80c2c84", "ffffd9edf8b1c7e9b47fcdbb41b6c41d91c0225ea8253494081d58").map(hf)),
            Ff = pf(new Array(3).concat("f7fcb9addd8e31a354", "ffffccc2e69978c679238443", "ffffccc2e69978c67931a354006837", "ffffccd9f0a3addd8e78c67931a354006837", "ffffccd9f0a3addd8e78c67941ab5d238443005a32", "ffffe5f7fcb9d9f0a3addd8e78c67941ab5d238443005a32", "ffffe5f7fcb9d9f0a3addd8e78c67941ab5d238443006837004529").map(hf)),
            Pf = pf(new Array(3).concat("fff7bcfec44fd95f0e", "ffffd4fed98efe9929cc4c02", "ffffd4fed98efe9929d95f0e993404", "ffffd4fee391fec44ffe9929d95f0e993404", "ffffd4fee391fec44ffe9929ec7014cc4c028c2d04", "ffffe5fff7bcfee391fec44ffe9929ec7014cc4c028c2d04", "ffffe5fff7bcfee391fec44ffe9929ec7014cc4c02993404662506").map(hf)),
            Df = pf(new Array(3).concat("ffeda0feb24cf03b20", "ffffb2fecc5cfd8d3ce31a1c", "ffffb2fecc5cfd8d3cf03b20bd0026", "ffffb2fed976feb24cfd8d3cf03b20bd0026", "ffffb2fed976feb24cfd8d3cfc4e2ae31a1cb10026", "ffffccffeda0fed976feb24cfd8d3cfc4e2ae31a1cb10026", "ffffccffeda0fed976feb24cfd8d3cfc4e2ae31a1cbd0026800026").map(hf)),
            jf = pf(new Array(3).concat("deebf79ecae13182bd", "eff3ffbdd7e76baed62171b5", "eff3ffbdd7e76baed63182bd08519c", "eff3ffc6dbef9ecae16baed63182bd08519c", "eff3ffc6dbef9ecae16baed64292c62171b5084594", "f7fbffdeebf7c6dbef9ecae16baed64292c62171b5084594", "f7fbffdeebf7c6dbef9ecae16baed64292c62171b508519c08306b").map(hf)),
            Lf = pf(new Array(3).concat("e5f5e0a1d99b31a354", "edf8e9bae4b374c476238b45", "edf8e9bae4b374c47631a354006d2c", "edf8e9c7e9c0a1d99b74c47631a354006d2c", "edf8e9c7e9c0a1d99b74c47641ab5d238b45005a32", "f7fcf5e5f5e0c7e9c0a1d99b74c47641ab5d238b45005a32", "f7fcf5e5f5e0c7e9c0a1d99b74c47641ab5d238b45006d2c00441b").map(hf)),
            Hf = pf(new Array(3).concat("f0f0f0bdbdbd636363", "f7f7f7cccccc969696525252", "f7f7f7cccccc969696636363252525", "f7f7f7d9d9d9bdbdbd969696636363252525", "f7f7f7d9d9d9bdbdbd969696737373525252252525", "fffffff0f0f0d9d9d9bdbdbd969696737373525252252525", "fffffff0f0f0d9d9d9bdbdbd969696737373525252252525000000").map(hf)),
            Uf = pf(new Array(3).concat("efedf5bcbddc756bb1", "f2f0f7cbc9e29e9ac86a51a3", "f2f0f7cbc9e29e9ac8756bb154278f", "f2f0f7dadaebbcbddc9e9ac8756bb154278f", "f2f0f7dadaebbcbddc9e9ac8807dba6a51a34a1486", "fcfbfdefedf5dadaebbcbddc9e9ac8807dba6a51a34a1486", "fcfbfdefedf5dadaebbcbddc9e9ac8807dba6a51a354278f3f007d").map(hf)),
            Rf = pf(new Array(3).concat("fee0d2fc9272de2d26", "fee5d9fcae91fb6a4acb181d", "fee5d9fcae91fb6a4ade2d26a50f15", "fee5d9fcbba1fc9272fb6a4ade2d26a50f15", "fee5d9fcbba1fc9272fb6a4aef3b2ccb181d99000d", "fff5f0fee0d2fcbba1fc9272fb6a4aef3b2ccb181d99000d", "fff5f0fee0d2fcbba1fc9272fb6a4aef3b2ccb181da50f1567000d").map(hf)),
            Yf = pf(new Array(3).concat("fee6cefdae6be6550d", "feeddefdbe85fd8d3cd94701", "feeddefdbe85fd8d3ce6550da63603", "feeddefdd0a2fdae6bfd8d3ce6550da63603", "feeddefdd0a2fdae6bfd8d3cf16913d948018c2d04", "fff5ebfee6cefdd0a2fdae6bfd8d3cf16913d948018c2d04", "fff5ebfee6cefdd0a2fdae6bfd8d3cf16913d94801a636037f2704").map(hf)),
            qf = fo(Oa(300, .5, 0), Oa(-240, .5, 1)),
            If = fo(Oa(-100, .75, .35), Oa(80, 1.5, .8)),
            Bf = fo(Oa(260, .75, .35), Oa(80, 1.5, .8));
        Oa();

        function $f(t) {
            var e = t.length;
            return function(n) {
                return t[Math.max(0, Math.min(e - 1, Math.floor(n * e)))]
            }
        }
        var Vf = $f(hf("44015444025645045745055946075a46085c460a5d460b5e470d60470e6147106347116447136548146748166848176948186a481a6c481b6d481c6e481d6f481f70482071482173482374482475482576482677482878482979472a7a472c7a472d7b472e7c472f7d46307e46327e46337f463480453581453781453882443983443a83443b84433d84433e85423f854240864241864142874144874045884046883f47883f48893e49893e4a893e4c8a3d4d8a3d4e8a3c4f8a3c508b3b518b3b528b3a538b3a548c39558c39568c38588c38598c375a8c375b8d365c8d365d8d355e8d355f8d34608d34618d33628d33638d32648e32658e31668e31678e31688e30698e306a8e2f6b8e2f6c8e2e6d8e2e6e8e2e6f8e2d708e2d718e2c718e2c728e2c738e2b748e2b758e2a768e2a778e2a788e29798e297a8e297b8e287c8e287d8e277e8e277f8e27808e26818e26828e26828e25838e25848e25858e24868e24878e23888e23898e238a8d228b8d228c8d228d8d218e8d218f8d21908d21918c20928c20928c20938c1f948c1f958b1f968b1f978b1f988b1f998a1f9a8a1e9b8a1e9c891e9d891f9e891f9f881fa0881fa1881fa1871fa28720a38620a48621a58521a68522a78522a88423a98324aa8325ab8225ac8226ad8127ad8128ae8029af7f2ab07f2cb17e2db27d2eb37c2fb47c31b57b32b67a34b67935b77937b87838b9773aba763bbb753dbc743fbc7340bd7242be7144bf7046c06f48c16e4ac16d4cc26c4ec36b50c46a52c56954c56856c66758c7655ac8645cc8635ec96260ca6063cb5f65cb5e67cc5c69cd5b6ccd5a6ece5870cf5773d05675d05477d1537ad1517cd2507fd34e81d34d84d44b86d54989d5488bd6468ed64590d74393d74195d84098d83e9bd93c9dd93ba0da39a2da37a5db36a8db34aadc32addc30b0dd2fb2dd2db5de2bb8de29bade28bddf26c0df25c2df23c5e021c8e020cae11fcde11dd0e11cd2e21bd5e21ad8e219dae319dde318dfe318e2e418e5e419e7e419eae51aece51befe51cf1e51df4e61ef6e620f8e621fbe723fde725")),
            Wf = $f(hf("00000401000501010601010802010902020b02020d03030f03031204041405041606051806051a07061c08071e0907200a08220b09240c09260d0a290e0b2b100b2d110c2f120d31130d34140e36150e38160f3b180f3d19103f1a10421c10441d11471e114920114b21114e22115024125325125527125829115a2a115c2c115f2d11612f116331116533106734106936106b38106c390f6e3b0f703d0f713f0f72400f74420f75440f764510774710784910784a10794c117a4e117b4f127b51127c52137c54137d56147d57157e59157e5a167e5c167f5d177f5f187f601880621980641a80651a80671b80681c816a1c816b1d816d1d816e1e81701f81721f817320817521817621817822817922827b23827c23827e24828025828125818326818426818627818827818928818b29818c29818e2a81902a81912b81932b80942c80962c80982d80992d809b2e7f9c2e7f9e2f7fa02f7fa1307ea3307ea5317ea6317da8327daa337dab337cad347cae347bb0357bb2357bb3367ab5367ab73779b83779ba3878bc3978bd3977bf3a77c03a76c23b75c43c75c53c74c73d73c83e73ca3e72cc3f71cd4071cf4070d0416fd2426fd3436ed5446dd6456cd8456cd9466bdb476adc4869de4968df4a68e04c67e24d66e34e65e44f64e55064e75263e85362e95462ea5661eb5760ec5860ed5a5fee5b5eef5d5ef05f5ef1605df2625df2645cf3655cf4675cf4695cf56b5cf66c5cf66e5cf7705cf7725cf8745cf8765cf9785df9795df97b5dfa7d5efa7f5efa815ffb835ffb8560fb8761fc8961fc8a62fc8c63fc8e64fc9065fd9266fd9467fd9668fd9869fd9a6afd9b6bfe9d6cfe9f6dfea16efea36ffea571fea772fea973feaa74feac76feae77feb078feb27afeb47bfeb67cfeb77efeb97ffebb81febd82febf84fec185fec287fec488fec68afec88cfeca8dfecc8ffecd90fecf92fed194fed395fed597fed799fed89afdda9cfddc9efddea0fde0a1fde2a3fde3a5fde5a7fde7a9fde9aafdebacfcecaefceeb0fcf0b2fcf2b4fcf4b6fcf6b8fcf7b9fcf9bbfcfbbdfcfdbf")),
            Xf = $f(hf("00000401000501010601010802010a02020c02020e03021004031204031405041706041907051b08051d09061f0a07220b07240c08260d08290e092b10092d110a30120a32140b34150b37160b39180c3c190c3e1b0c411c0c431e0c451f0c48210c4a230c4c240c4f260c51280b53290b552b0b572d0b592f0a5b310a5c320a5e340a5f3609613809623909633b09643d09653e0966400a67420a68440a68450a69470b6a490b6a4a0c6b4c0c6b4d0d6c4f0d6c510e6c520e6d540f6d550f6d57106e59106e5a116e5c126e5d126e5f136e61136e62146e64156e65156e67166e69166e6a176e6c186e6d186e6f196e71196e721a6e741a6e751b6e771c6d781c6d7a1d6d7c1d6d7d1e6d7f1e6c801f6c82206c84206b85216b87216b88226a8a226a8c23698d23698f24699025689225689326679526679727669827669a28659b29649d29649f2a63a02a63a22b62a32c61a52c60a62d60a82e5fa92e5eab2f5ead305dae305cb0315bb1325ab3325ab43359b63458b73557b93556ba3655bc3754bd3853bf3952c03a51c13a50c33b4fc43c4ec63d4dc73e4cc83f4bca404acb4149cc4248ce4347cf4446d04545d24644d34743d44842d54a41d74b3fd84c3ed94d3dda4e3cdb503bdd513ade5238df5337e05536e15635e25734e35933e45a31e55c30e65d2fe75e2ee8602de9612bea632aeb6429eb6628ec6726ed6925ee6a24ef6c23ef6e21f06f20f1711ff1731df2741cf3761bf37819f47918f57b17f57d15f67e14f68013f78212f78410f8850ff8870ef8890cf98b0bf98c0af98e09fa9008fa9207fa9407fb9606fb9706fb9906fb9b06fb9d07fc9f07fca108fca309fca50afca60cfca80dfcaa0ffcac11fcae12fcb014fcb216fcb418fbb61afbb81dfbba1ffbbc21fbbe23fac026fac228fac42afac62df9c72ff9c932f9cb35f8cd37f8cf3af7d13df7d340f6d543f6d746f5d949f5db4cf4dd4ff4df53f4e156f3e35af3e55df2e661f2e865f2ea69f1ec6df1ed71f1ef75f1f179f2f27df2f482f3f586f3f68af4f88ef5f992f6fa96f8fb9af9fc9dfafda1fcffa4")),
            Gf = $f(hf("0d088710078813078916078a19068c1b068d1d068e20068f2206902406912605912805922a05932c05942e05952f059631059733059735049837049938049a3a049a3c049b3e049c3f049c41049d43039e44039e46039f48039f4903a04b03a14c02a14e02a25002a25102a35302a35502a45601a45801a45901a55b01a55c01a65e01a66001a66100a76300a76400a76600a76700a86900a86a00a86c00a86e00a86f00a87100a87201a87401a87501a87701a87801a87a02a87b02a87d03a87e03a88004a88104a78305a78405a78606a68707a68808a68a09a58b0aa58d0ba58e0ca48f0da4910ea3920fa39410a29511a19613a19814a099159f9a169f9c179e9d189d9e199da01a9ca11b9ba21d9aa31e9aa51f99a62098a72197a82296aa2395ab2494ac2694ad2793ae2892b02991b12a90b22b8fb32c8eb42e8db52f8cb6308bb7318ab83289ba3388bb3488bc3587bd3786be3885bf3984c03a83c13b82c23c81c33d80c43e7fc5407ec6417dc7427cc8437bc9447aca457acb4679cc4778cc4977cd4a76ce4b75cf4c74d04d73d14e72d24f71d35171d45270d5536fd5546ed6556dd7566cd8576bd9586ada5a6ada5b69db5c68dc5d67dd5e66de5f65de6164df6263e06363e16462e26561e26660e3685fe4695ee56a5de56b5de66c5ce76e5be76f5ae87059e97158e97257ea7457eb7556eb7655ec7754ed7953ed7a52ee7b51ef7c51ef7e50f07f4ff0804ef1814df1834cf2844bf3854bf3874af48849f48948f58b47f58c46f68d45f68f44f79044f79143f79342f89441f89540f9973ff9983ef99a3efa9b3dfa9c3cfa9e3bfb9f3afba139fba238fca338fca537fca636fca835fca934fdab33fdac33fdae32fdaf31fdb130fdb22ffdb42ffdb52efeb72dfeb82cfeba2cfebb2bfebd2afebe2afec029fdc229fdc328fdc527fdc627fdc827fdca26fdcb26fccd25fcce25fcd025fcd225fbd324fbd524fbd724fad824fada24f9dc24f9dd25f8df25f8e125f7e225f7e425f6e626f6e826f5e926f5eb27f4ed27f3ee27f3f027f2f227f1f426f1f525f0f724f0f921")),
            Zf = Object.freeze(["#efeca4", "#e9e28f", "#dccf64", "#e3b23c", "#e49547", "#e37746", "#dc5b36", "#cb4144", "#bb2244", "#972545", "#6a2c4f"]),
            Jf = Object.freeze({
                Blues: jf,
                BuGn: kf,
                BuPu: Sf,
                Carrots: Ua(Zf),
                Cool: Bf,
                CubehelixDefault: qf,
                GnBu: Af,
                Greens: Lf,
                Greys: Hf,
                Inferno: Xf,
                Magma: Wf,
                Oranges: Yf,
                OrRd: Tf,
                Plasma: Gf,
                PuBu: Nf,
                PuBuGn: Cf,
                PuRd: Of,
                Purples: Uf,
                RdPu: Ef,
                Reds: Rf,
                Viridis: Vf,
                Warm: If,
                YlGn: Ff,
                YlGnBu: zf,
                YlOrBr: Pf,
                YlOrRd: Df
            }),
            Qf = {
                hcl: co,
                hsl: oo,
                lab: so,
                rgb: La
            };

        function Kf(t, e) {
            return wc(Jf[t.sequential_palette] || function(t) {
                var e = t.sequential_color_space,
                    n = t.sequential_custom_min,
                    r = t.sequential_custom_max;
                return Qf[e](n, r)
            }(t)).domain(t.sequential_reverse ? e.reverse() : e)
        }
        var tu, eu, nu, ru, iu, au = Object.freeze({
                BrBG: _f,
                PiYG: bf,
                PRGn: gf,
                PuOr: mf,
                RdBu: yf,
                RdGy: vf,
                RdYlBu: wf,
                RdYlGn: xf,
                Spectral: Mf
            }),
            ou = {
                hcl: co,
                hsl: oo,
                lab: so,
                rgb: La
            };

        function su(t) {
            var e = t.diverging_color_space,
                n = t.diverging_custom_min,
                r = t.diverging_custom_mid,
                i = t.diverging_custom_max;
            return function(t, e) {
                for (var n = 0, r = e.length - 1, i = e[0], a = new Array(r < 0 ? 0 : r); n < r;) a[n] = t(i, i = e[++n]);
                return function(t) {
                    var e = Math.max(0, Math.min(r - 1, Math.floor(t *= r)));
                    return a[e](t - e)
                }
            }(ou[e], [n, r, i])
        }

        function cu(t) {
            var e = null;
            for (var n in cf) void 0 === t[n] && (t[n] = cf[n]);
            var r = lf,
                i = null;
            return {
                getColor: function(t) {
                    return e && e(t, r) || i
                },
                updateColorScale: function(n) {
                    return n = Array.isArray(n) ? n.slice() : [0, 1], e = "categorical" === t.scale_type ? function(t, e, n) {
                        var r = {},
                            i = Oi(e.map(n)).values(),
                            a = "palette" === t.categorical_type ? t.categorical_palette : [t.categorical_seed_color],
                            o = a.length;
                        if (t.categorical_extend || "generated" === t.categorical_type) {
                            var s = "palette" === t.categorical_type ? cf.rotation_angle : t.categorical_rotation_angle,
                                c = "generated" === t.categorical_type ? t.categorical_color_space : "hcl",
                                l = df[c](a, s);
                            i.forEach((function(t, e) {
                                r[t] = e < o ? a[e] : l()
                            }))
                        } else i.forEach((function(t, e) {
                            r[t] = a[e % o]
                        }));
                        return t.categorical_custom_palette.split("\n").filter((function(t) {
                                return t
                            })).forEach((function(t) {
                                var e = t.lastIndexOf(":");
                                if (-1 !== e) {
                                    var i = n(t.slice(0, e).trim()),
                                        a = t.slice(e + 1).trim();
                                    i && a && (r[i] = a)
                                }
                            })),
                            function(t) {
                                return r[n(t)]
                            }
                    }(t, n, r) : "sequential" === t.scale_type ? Kf(t, n) : function(t, e) {
                        return wc(au[t.diverging_palette] || su(t)).domain(t.diverging_reverse ? e.reverse() : e)
                    }(t, n), this
                },
                fallback: function(t) {
                    return void 0 === t ? i : (i = "default" === t ? null : t, this)
                },
                stringNormalizer: function(t) {
                    return void 0 === t ? r : (r = "default" === t ? lf : "function" == typeof t ? t : function(t) {
                        return t
                    }, this)
                }
            }
        }

        function lu() {
            iu = [], nu = "category" == Gn.color_mode ? function() {
                for (var t = {}, e = [], n = 0; n < rf.length; n++) {
                    var r = rf[n].category;
                    t[r] || (t[r] = !0, e.push(r))
                }
                return e
            }() : [], ru = "bar" == Gn.color_mode ? function() {
                for (var t = [], e = 0; e < rf.length; e++) {
                    var n = rf[e].label;
                    t.push(n)
                }
                return t
            }() : [];
            var t = "category" == Gn.color_mode ? nu : ru;
            tu.updateColorScale(t), eu = function(t) {
                var e = "category" == Gn.color_mode ? "category" : "label",
                    n = "string" == typeof t ? t : t[e];
                return tu.getColor(n)
            }
        }

        function fu() {
            "single" == Gn.color_mode ? function() {
                nu = [], ru = [], iu = [];
                var t = {};
                Gn.color_single_overrides.split("\n").filter((function(t) {
                    return t.trim()
                })).forEach((function(e) {
                    var n = e.lastIndexOf(":");
                    if (-1 !== n) {
                        var r = e.slice(0, n).trim(),
                            i = e.slice(n + 1).trim();
                        r && i && void 0 === t[r] && (t[r] = i, iu.push(r))
                    }
                })), eu = function(e) {
                    var n = "string" == typeof e ? e : e.label;
                    return void 0 !== t[n] ? t[n] : Gn.color_single
                }
            }() : lu()
        }
        var uu = 0,
            du = Object.freeze({
                show_legend: !0,
                title: "",
                title_weight: "bold",
                swatch_width: .75,
                swatch_height: 1,
                swatch_radius: 3,
                order_override: "",
                orientation: "horizontal",
                text_color: null,
                text_size: 1
            });

        function hu(t) {
            for (var e in this._state = t, du) void 0 === this._state[e] && (this._state[e] = du[e]);
            return this._colorFunction = void 0, this._formatFunction = void 0, this._legend_items = [], this._filtered_items = [], this._eventListeners = [], this._id = "fl-legend-discrete-color-" + uu, this._visible = !0, this._container = ai(document.createElement("div")).attr("class", "fl-legend-container").attr("id", this._id), this._container.append("p").attr("class", "fl-legend-title"), uu++, this
        }
        hu.prototype.appendTo = function(t) {
            if (t.appendChild(this._container.node()), !document.querySelector("#legend-styles")) {
                var e = document.createElement("style");
                e.id = "legend-styles", e.type = "text/css", e.innerHTML = ".fl-legend-container.interactive .fl-legend-item:hover { opacity: 0.75; cursor: pointer; }", document.head.appendChild(e)
            }
            return this
        }, hu.prototype.format = function(t) {
            return this._formatFunction = t, this
        }, hu.prototype.getContainer = function() {
            return this._container
        }, hu.prototype.visible = function(t) {
            return void 0 === t ? this._visible : (this._visible = t, this)
        }, hu.prototype._updateTitle = function() {
            var t = this;
            this._container.select(".fl-legend-title").text(this._state.title).style("display", (function() {
                return t._state.title.trim() ? void 0 === t._state.orientation || "horizontal" == t._state.orientation ? "inline-block" : "block" : "none"
            })).style("font-weight", this._state.title_weight).style("color", this._state.text_color).style("vertical-align", "middle").style("font-size", this._state.text_size + "rem").style("line-height", "1.25rem").style("margin-top", 0).style("margin-bottom", 0).style("margin-right", this._state.text_size + "rem")
        }, hu.prototype.data = function(t, e) {
            return this._colorFunction = e, t || e ? (e ? Array.isArray(t) ? this._legend_items = t.slice().map((function(t, n) {
                var r = "object" == typeof t ? t.label || "" : t;
                return r ? {
                    label: r,
                    color: e(r, n)
                } : null
            })).filter((function(t) {
                return null !== t
            })) : this._legend_items = [] : this._legend_items = Array.isArray(t) ? t.slice() : [], this) : this._legend_items.slice()
        }, hu.prototype.filtered = function(t) {
            return t ? (this._filtered_items = Array.isArray(t) ? t.slice() : [], this) : this._filtered_items.slice()
        }, hu.prototype.on = function(t, e) {
            return this._container ? (this._eventListeners.indexOf(t) < 0 ? this._eventListeners.push(t) : e || this._eventListeners.splice(this._eventListeners.indexOf[t], 1), this._container.classed("interactive", this._eventListeners.length > 0), e ? this._container.on(t, (function(t, n) {
                var r = Wr.target,
                    i = r.parentNode,
                    a = r.classList.contains("fl-legend-item") ? r : i.classList.contains("fl-legend-item") ? i : null;
                a && e.call(a, a.__data__.label, n)
            })) : this._container.on(t, ""), this) : this
        }, hu.prototype.update = function() {
            var t = this._state.show_legend && this._visible && this._legend_items.length > 0;
            return this._container.style("display", t ? "" : "none"), t ? (this._updateTitle(), this._updateLegend(), this) : this
        }, hu.prototype._updateLegend = function() {
            var t, e = this,
                n = this._formatFunction;
            this._container.style("line-height", "1.25rem").style("display", "inline-flex").style("flex-wrap", "wrap").style("align-items", "horizontal" == this._state.orientation ? "center" : "start").style("flex-direction", "horizontal" == this._state.orientation ? null : "column"), t = this._state.order_override.trim() ? function(t, e) {
                for (var n = {}, r = e.split(/\s*\n\s*/), i = 0; i < r.length; i++) {
                    n[r[i]] = i
                }
                for (var a = [], o = 0; o < t.length; o++) {
                    var s = t[o],
                        c = n[s.label];
                    void 0 !== c && (a[c] = s)
                }
                return a.filter((function(t) {
                    return void 0 !== t
                }))
            }(this._legend_items, this._state.order_override) : this._legend_items;
            var r = this._container.selectAll(".fl-legend-item").data(t),
                i = r.enter().append("div").attr("class", "fl-legend-item");
            i.append("div").attr("class", "fl-legend-swatch"), i.append("p").attr("class", "fl-legend-label");
            var a = r.merge(i);
            return a.style("display", "horizontal" == this._state.orientation ? "inline-block" : "block").style("opacity", (function(t) {
                return e._filtered_items.indexOf(t.label) > -1 ? .2 : ""
            })).style("line-height", "0").style("vertical-align", "middle").style("margin-right", "horizontal" == this._state.orientation ? .5 * this._state.text_size + "rem" : ""), a.select(".fl-legend-swatch").style("height", this._state.swatch_height + "rem").style("width", this._state.swatch_width + "rem").style("margin-right", .25 * this._state.text_size + "rem").style("border-radius", this._state.swatch_radius + "px").style("background-color", (function(t) {
                return t.color
            })).style("vertical-align", "middle").style("display", "inline-block"), a.select(".fl-legend-label").style("font-size", this._state.text_size + "rem").style("color", this._state.text_color).text((function(t) {
                return n ? n(t.label) : t.label
            })).style("margin", 0).style("vertical-align", "middle").style("user-select", "none").style("line-height", "1.25rem").style("display", "inline-block"), r.exit().remove(), this._legend_item_els = a, this
        };
        var pu;
        Object.freeze({
            show_legend: !0,
            title: "",
            title_weight: "bold",
            color_band_width: 8,
            color_band_height: 1,
            color_band_radius: 3,
            text_color: null,
            text_size: 1,
            binned_label_mode: "thresholds",
            binned_label_custom: ""
        }), Object.freeze({
            show_legend: !0,
            title: "",
            title_weight: "bold",
            clip_height: 1,
            small_circle_size: .5,
            text_color: null,
            text_size: 1,
            shape_fill: "#eeeeee",
            shape_stroke: "#555555"
        });
        var _u, gu;

        function bu(t) {
            ("string" == typeof t || t instanceof HTMLElement) && (t = ai(t));
            var e = {
                    data: [],
                    element: null,
                    ignore_case: !0,
                    text: function(t) {
                        return t
                    },
                    class: "fl-spanner"
                },
                n = function(t, n) {
                    var r = e.text(t, n);
                    if (!r || "string" != typeof r) return null;
                    var i = r.trim();
                    return i ? {
                        original: r,
                        trimmed: i,
                        length: i.length,
                        d: t,
                        i: n
                    } : null
                },
                r = function() {
                    var r = t.node(),
                        i = t.text(),
                        a = e.element;
                    return a || (a = r instanceof SVGElement || "svg" === r.nodeName.toLowerCase() ? "tspan" : "span"), e.data.map(n).filter((function(t) {
                        return t
                    })).sort((function(t, e) {
                        return e.length - t.length || t.i - e.i
                    })).forEach((function(t) {
                        var n = function(t, n) {
                            var r = n.trimmed.replace(/[.*+?^${}()|[\]\\]/g, "\\$&"),
                                i = "<" + t + ".*?<\\/" + t + ">" + "|(?:" + ("(^|[^A-Za-zªµºÀ-ÖØ-öø-ˁˆ-ˑˠ-ˤˬˮͰ-ʹͶͷͺ-ͽΆΈ-ΊΌΎ-ΡΣ-ϵϷ-ҁҊ-ԧԱ-Ֆՙա-ևא-תװ-ײؠ-يٮٯٱ-ۓەۥۦۮۯۺ-ۼۿܐܒ-ܯݍ-ޥޱߊ-ߪߴߵߺࠀ-ࠕࠚࠤࠨࡀ-ࡘࢠࢢ-ࢬऄ-हऽॐक़-ॡॱ-ॷॹ-ॿঅ-ঌএঐও-নপ-রলশ-হঽৎড়ঢ়য়-ৡৰৱਅ-ਊਏਐਓ-ਨਪ-ਰਲਲ਼ਵਸ਼ਸਹਖ਼-ੜਫ਼ੲ-ੴઅ-ઍએ-ઑઓ-નપ-રલળવ-હઽૐૠૡଅ-ଌଏଐଓ-ନପ-ରଲଳଵ-ହଽଡ଼ଢ଼ୟ-ୡୱஃஅ-ஊஎ-ஐஒ-கஙசஜஞடணதந-பம-ஹௐఅ-ఌఎ-ఐఒ-నప-ళవ-హఽౘౙౠౡಅ-ಌಎ-ಐಒ-ನಪ-ಳವ-ಹಽೞೠೡೱೲഅ-ഌഎ-ഐഒ-ഺഽൎൠൡൺ-ൿඅ-ඖක-නඳ-රලව-ෆก-ะาำเ-ๆກຂຄງຈຊຍດ-ທນ-ຟມ-ຣລວສຫອ-ະາຳຽເ-ໄໆໜ-ໟༀཀ-ཇཉ-ཬྈ-ྌက-ဪဿၐ-ၕၚ-ၝၡၥၦၮ-ၰၵ-ႁႎႠ-ჅჇჍა-ჺჼ-ቈቊ-ቍቐ-ቖቘቚ-ቝበ-ኈኊ-ኍነ-ኰኲ-ኵኸ-ኾዀዂ-ዅወ-ዖዘ-ጐጒ-ጕጘ-ፚᎀ-ᎏᎠ-Ᏼᐁ-ᙬᙯ-ᙿᚁ-ᚚᚠ-ᛪᜀ-ᜌᜎ-ᜑᜠ-ᜱᝀ-ᝑᝠ-ᝬᝮ-ᝰក-ឳៗៜᠠ-ᡷᢀ-ᢨᢪᢰ-ᣵᤀ-ᤜᥐ-ᥭᥰ-ᥴᦀ-ᦫᧁ-ᧇᨀ-ᨖᨠ-ᩔᪧᬅ-ᬳᭅ-ᭋᮃ-ᮠᮮᮯᮺ-ᯥᰀ-ᰣᱍ-ᱏᱚ-ᱽᳩ-ᳬᳮ-ᳱᳵᳶᴀ-ᶿḀ-ἕἘ-Ἕἠ-ὅὈ-Ὅὐ-ὗὙὛὝὟ-ώᾀ-ᾴᾶ-ᾼιῂ-ῄῆ-ῌῐ-ΐῖ-Ίῠ-Ῥῲ-ῴῶ-ῼⁱⁿₐ-ₜℂℇℊ-ℓℕℙ-ℝℤΩℨK-ℭℯ-ℹℼ-ℿⅅ-ⅉⅎↃↄⰀ-Ⱞⰰ-ⱞⱠ-ⳤⳫ-ⳮⳲⳳⴀ-ⴥⴧⴭⴰ-ⵧⵯⶀ-ⶖⶠ-ⶦⶨ-ⶮⶰ-ⶶⶸ-ⶾⷀ-ⷆⷈ-ⷎⷐ-ⷖⷘ-ⷞⸯ々〆〱-〵〻〼ぁ-ゖゝ-ゟァ-ヺー-ヿㄅ-ㄭㄱ-ㆎㆠ-ㆺㇰ-ㇿ㐀-䶵一-鿌ꀀ-ꒌꓐ-ꓽꔀ-ꘌꘐ-ꘟꘪꘫꙀ-ꙮꙿ-ꚗꚠ-ꛥꜗ-ꜟꜢ-ꞈꞋ-ꞎꞐ-ꞓꞠ-Ɦꟸ-ꠁꠃ-ꠅꠇ-ꠊꠌ-ꠢꡀ-ꡳꢂ-ꢳꣲ-ꣷꣻꤊ-ꤥꤰ-ꥆꥠ-ꥼꦄ-ꦲꧏꨀ-ꨨꩀ-ꩂꩄ-ꩋꩠ-ꩶꩺꪀ-ꪯꪱꪵꪶꪹ-ꪽꫀꫂꫛ-ꫝꫠ-ꫪꫲ-ꫴꬁ-ꬆꬉ-ꬎꬑ-ꬖꬠ-ꬦꬨ-ꬮꯀ-ꯢ가-힣ힰ-ퟆퟋ-ퟻ豈-舘並-龎ﬀ-ﬆﬓ-ﬗיִײַ-ﬨשׁ-זּטּ-לּמּנּסּףּפּצּ-ﮱﯓ-ﴽﵐ-ﶏﶒ-ﷇﷰ-ﷻﹰ-ﹴﹶ-ﻼＡ-Ｚａ-ｚｦ-ﾾￂ-ￇￊ-ￏￒ-ￗￚ-ￜ])(" + r + ")($|[^A-Za-zªµºÀ-ÖØ-öø-ˁˆ-ˑˠ-ˤˬˮͰ-ʹͶͷͺ-ͽΆΈ-ΊΌΎ-ΡΣ-ϵϷ-ҁҊ-ԧԱ-Ֆՙա-ևא-תװ-ײؠ-يٮٯٱ-ۓەۥۦۮۯۺ-ۼۿܐܒ-ܯݍ-ޥޱߊ-ߪߴߵߺࠀ-ࠕࠚࠤࠨࡀ-ࡘࢠࢢ-ࢬऄ-हऽॐक़-ॡॱ-ॷॹ-ॿঅ-ঌএঐও-নপ-রলশ-হঽৎড়ঢ়য়-ৡৰৱਅ-ਊਏਐਓ-ਨਪ-ਰਲਲ਼ਵਸ਼ਸਹਖ਼-ੜਫ਼ੲ-ੴઅ-ઍએ-ઑઓ-નપ-રલળવ-હઽૐૠૡଅ-ଌଏଐଓ-ନପ-ରଲଳଵ-ହଽଡ଼ଢ଼ୟ-ୡୱஃஅ-ஊஎ-ஐஒ-கஙசஜஞடணதந-பம-ஹௐఅ-ఌఎ-ఐఒ-నప-ళవ-హఽౘౙౠౡಅ-ಌಎ-ಐಒ-ನಪ-ಳವ-ಹಽೞೠೡೱೲഅ-ഌഎ-ഐഒ-ഺഽൎൠൡൺ-ൿඅ-ඖක-නඳ-රලව-ෆก-ะาำเ-ๆກຂຄງຈຊຍດ-ທນ-ຟມ-ຣລວສຫອ-ະາຳຽເ-ໄໆໜ-ໟༀཀ-ཇཉ-ཬྈ-ྌက-ဪဿၐ-ၕၚ-ၝၡၥၦၮ-ၰၵ-ႁႎႠ-ჅჇჍა-ჺჼ-ቈቊ-ቍቐ-ቖቘቚ-ቝበ-ኈኊ-ኍነ-ኰኲ-ኵኸ-ኾዀዂ-ዅወ-ዖዘ-ጐጒ-ጕጘ-ፚᎀ-ᎏᎠ-Ᏼᐁ-ᙬᙯ-ᙿᚁ-ᚚᚠ-ᛪᜀ-ᜌᜎ-ᜑᜠ-ᜱᝀ-ᝑᝠ-ᝬᝮ-ᝰក-ឳៗៜᠠ-ᡷᢀ-ᢨᢪᢰ-ᣵᤀ-ᤜᥐ-ᥭᥰ-ᥴᦀ-ᦫᧁ-ᧇᨀ-ᨖᨠ-ᩔᪧᬅ-ᬳᭅ-ᭋᮃ-ᮠᮮᮯᮺ-ᯥᰀ-ᰣᱍ-ᱏᱚ-ᱽᳩ-ᳬᳮ-ᳱᳵᳶᴀ-ᶿḀ-ἕἘ-Ἕἠ-ὅὈ-Ὅὐ-ὗὙὛὝὟ-ώᾀ-ᾴᾶ-ᾼιῂ-ῄῆ-ῌῐ-ΐῖ-Ίῠ-Ῥῲ-ῴῶ-ῼⁱⁿₐ-ₜℂℇℊ-ℓℕℙ-ℝℤΩℨK-ℭℯ-ℹℼ-ℿⅅ-ⅉⅎↃↄⰀ-Ⱞⰰ-ⱞⱠ-ⳤⳫ-ⳮⳲⳳⴀ-ⴥⴧⴭⴰ-ⵧⵯⶀ-ⶖⶠ-ⶦⶨ-ⶮⶰ-ⶶⶸ-ⶾⷀ-ⷆⷈ-ⷎⷐ-ⷖⷘ-ⷞⸯ々〆〱-〵〻〼ぁ-ゖゝ-ゟァ-ヺー-ヿㄅ-ㄭㄱ-ㆎㆠ-ㆺㇰ-ㇿ㐀-䶵一-鿌ꀀ-ꒌꓐ-ꓽꔀ-ꘌꘐ-ꘟꘪꘫꙀ-ꙮꙿ-ꚗꚠ-ꛥꜗ-ꜟꜢ-ꞈꞋ-ꞎꞐ-ꞓꞠ-Ɦꟸ-ꠁꠃ-ꠅꠇ-ꠊꠌ-ꠢꡀ-ꡳꢂ-ꢳꣲ-ꣷꣻꤊ-ꤥꤰ-ꥆꥠ-ꥼꦄ-ꦲꧏꨀ-ꨨꩀ-ꩂꩄ-ꩋꩠ-ꩶꩺꪀ-ꪯꪱꪵꪶꪹ-ꪽꫀꫂꫛ-ꫝꫠ-ꫪꫲ-ꫴꬁ-ꬆꬉ-ꬎꬑ-ꬖꬠ-ꬦꬨ-ꬮꯀ-ꯢ가-힣ힰ-ퟆퟋ-ퟻ豈-舘並-龎ﬀ-ﬆﬓ-ﬗיִײַ-ﬨשׁ-זּטּ-לּמּנּסּףּפּצּ-ﮱﯓ-ﴽﵐ-ﶏﶒ-ﷇﷰ-ﷻﹰ-ﹴﹶ-ﻼＡ-Ｚａ-ｚｦ-ﾾￂ-ￇￊ-ￏￒ-ￗￚ-ￜ])") + ")",
                                a = e.ignore_case ? "gi" : "g";
                            return new RegExp(i, a)
                        }(a, t);
                        i = i.replace(n, (function(e, n, r, i) {
                            return r ? n + function(t, e, n) {
                                return "<" + t + " class='fl-spanner-" + n + "'>" + e + "</" + t + ">"
                            }(a, r, t.i) + i : e
                        }))
                    })), t.html(i), t.selectAll(a).each((function() {
                        var t = e.data[this.getAttribute("class").slice("fl-spanner-".length)];
                        ai(this).datum(t).attr("class", e.class)
                    }))
                };
            return r.data = function(t) {
                return void 0 === t ? e.data : (e.data = Array.isArray(t) ? t : [t], r)
            }, r.element = function(t) {
                return void 0 === t ? e.element : (e.element = t, r)
            }, r.ignoreCase = function(t) {
                return void 0 === t ? e.ignore_case : (e.ignore_case = !!t, r)
            }, r.text = function(t) {
                return void 0 === t ? e.text : (e.text = t, r)
            }, r.class = function(t) {
                return void 0 === t ? e.class : (e.class = t, r)
            }, r
        }

        function mu(t, e, n) {
            "off" !== Gn.text_legend && bu(t).data(e)().style("color", (function(t) {
                return eu(t)
            })).style("opacity", (function(t) {
                return -1 !== Gn.legend_filter.indexOf(t) ? .3 : 1
            })).style("font-weight", n).style("cursor", "category" == Gn.color_mode ? "pointer" : null).on("click", (function(t) {
                if ("category" === Gn.color_mode) {
                    var e = Gn.legend_filter.indexOf(t); - 1 !== e ? Gn.legend_filter.splice(e, 1) : Gn.legend_filter.length < nu.length - 1 && Gn.legend_filter.push(t), T_()
                }
            }))
        }

        function yu() {
            "category" == Gn.color_mode ? _u = nu : "bar" == Gn.color_mode ? _u = ru : "single" == Gn.color_mode && (_u = iu),
                function() {
                    if ("off" !== Gn.text_legend) {
                        var t = _u,
                            e = Gn.text_legend_bold ? "bold" : null;
                        ("auto" === Gn.text_legend || Gn.text_legend_title) && mu(ai("#fl-layout-header h1"), t, e), ("auto" === Gn.text_legend || Gn.text_legend_subtitle) && mu(ai("#fl-layout-header h2"), t, e)
                    }
                }(),
                function() {
                    if ("text_legend" == Gn.caption_mode) {
                        var t = [];
                        ("auto" === Gn.text_legend || Gn.text_legend_caption && "custom" === Gn.text_legend) && (t = _u), mu(ai("#caption #text"), t, Gn.text_legend_bold ? "bold" : null)
                    }
                }()
        }
        var vu, wu, xu, Mu, ku, Su = Object.freeze({
            "stack-default": ["header", "controls", "primary", "footer"],
            "stack-2": ["primary", "header", "controls", "footer"],
            "stack-3": ["header", "primary", "controls", "footer"],
            "stack-4": ["controls", "primary", "header", "footer"]
        });

        function Au(t, e, n) {
            t.prototype = e.prototype = n, n.constructor = t
        }

        function Tu(t, e) {
            var n = Object.create(t.prototype);
            for (var r in e) n[r] = e[r];
            return n
        }

        function Cu() {}
        var Nu, Ou, Eu, zu, Fu = "\\s*([+-]?\\d+)\\s*",
            Pu = "\\s*([+-]?\\d*\\.?\\d+(?:[eE][+-]?\\d+)?)\\s*",
            Du = "\\s*([+-]?\\d*\\.?\\d+(?:[eE][+-]?\\d+)?)%\\s*",
            ju = /^#([0-9a-f]{3,8})$/,
            Lu = new RegExp("^rgb\\(" + [Fu, Fu, Fu] + "\\)$"),
            Hu = new RegExp("^rgb\\(" + [Du, Du, Du] + "\\)$"),
            Uu = new RegExp("^rgba\\(" + [Fu, Fu, Fu, Pu] + "\\)$"),
            Ru = new RegExp("^rgba\\(" + [Du, Du, Du, Pu] + "\\)$"),
            Yu = new RegExp("^hsl\\(" + [Pu, Du, Du] + "\\)$"),
            qu = new RegExp("^hsla\\(" + [Pu, Du, Du, Pu] + "\\)$"),
            Iu = {
                aliceblue: 15792383,
                antiquewhite: 16444375,
                aqua: 65535,
                aquamarine: 8388564,
                azure: 15794175,
                beige: 16119260,
                bisque: 16770244,
                black: 0,
                blanchedalmond: 16772045,
                blue: 255,
                blueviolet: 9055202,
                brown: 10824234,
                burlywood: 14596231,
                cadetblue: 6266528,
                chartreuse: 8388352,
                chocolate: 13789470,
                coral: 16744272,
                cornflowerblue: 6591981,
                cornsilk: 16775388,
                crimson: 14423100,
                cyan: 65535,
                darkblue: 139,
                darkcyan: 35723,
                darkgoldenrod: 12092939,
                darkgray: 11119017,
                darkgreen: 25600,
                darkgrey: 11119017,
                darkkhaki: 12433259,
                darkmagenta: 9109643,
                darkolivegreen: 5597999,
                darkorange: 16747520,
                darkorchid: 10040012,
                darkred: 9109504,
                darksalmon: 15308410,
                darkseagreen: 9419919,
                darkslateblue: 4734347,
                darkslategray: 3100495,
                darkslategrey: 3100495,
                darkturquoise: 52945,
                darkviolet: 9699539,
                deeppink: 16716947,
                deepskyblue: 49151,
                dimgray: 6908265,
                dimgrey: 6908265,
                dodgerblue: 2003199,
                firebrick: 11674146,
                floralwhite: 16775920,
                forestgreen: 2263842,
                fuchsia: 16711935,
                gainsboro: 14474460,
                ghostwhite: 16316671,
                gold: 16766720,
                goldenrod: 14329120,
                gray: 8421504,
                green: 32768,
                greenyellow: 11403055,
                grey: 8421504,
                honeydew: 15794160,
                hotpink: 16738740,
                indianred: 13458524,
                indigo: 4915330,
                ivory: 16777200,
                khaki: 15787660,
                lavender: 15132410,
                lavenderblush: 16773365,
                lawngreen: 8190976,
                lemonchiffon: 16775885,
                lightblue: 11393254,
                lightcoral: 15761536,
                lightcyan: 14745599,
                lightgoldenrodyellow: 16448210,
                lightgray: 13882323,
                lightgreen: 9498256,
                lightgrey: 13882323,
                lightpink: 16758465,
                lightsalmon: 16752762,
                lightseagreen: 2142890,
                lightskyblue: 8900346,
                lightslategray: 7833753,
                lightslategrey: 7833753,
                lightsteelblue: 11584734,
                lightyellow: 16777184,
                lime: 65280,
                limegreen: 3329330,
                linen: 16445670,
                magenta: 16711935,
                maroon: 8388608,
                mediumaquamarine: 6737322,
                mediumblue: 205,
                mediumorchid: 12211667,
                mediumpurple: 9662683,
                mediumseagreen: 3978097,
                mediumslateblue: 8087790,
                mediumspringgreen: 64154,
                mediumturquoise: 4772300,
                mediumvioletred: 13047173,
                midnightblue: 1644912,
                mintcream: 16121850,
                mistyrose: 16770273,
                moccasin: 16770229,
                navajowhite: 16768685,
                navy: 128,
                oldlace: 16643558,
                olive: 8421376,
                olivedrab: 7048739,
                orange: 16753920,
                orangered: 16729344,
                orchid: 14315734,
                palegoldenrod: 15657130,
                palegreen: 10025880,
                paleturquoise: 11529966,
                palevioletred: 14381203,
                papayawhip: 16773077,
                peachpuff: 16767673,
                peru: 13468991,
                pink: 16761035,
                plum: 14524637,
                powderblue: 11591910,
                purple: 8388736,
                rebeccapurple: 6697881,
                red: 16711680,
                rosybrown: 12357519,
                royalblue: 4286945,
                saddlebrown: 9127187,
                salmon: 16416882,
                sandybrown: 16032864,
                seagreen: 3050327,
                seashell: 16774638,
                sienna: 10506797,
                silver: 12632256,
                skyblue: 8900331,
                slateblue: 6970061,
                slategray: 7372944,
                slategrey: 7372944,
                snow: 16775930,
                springgreen: 65407,
                steelblue: 4620980,
                tan: 13808780,
                teal: 32896,
                thistle: 14204888,
                tomato: 16737095,
                turquoise: 4251856,
                violet: 15631086,
                wheat: 16113331,
                white: 16777215,
                whitesmoke: 16119285,
                yellow: 16776960,
                yellowgreen: 10145074
            };

        function Bu() {
            return this.rgb().formatHex()
        }

        function $u() {
            return this.rgb().formatRgb()
        }

        function Vu(t) {
            var e, n;
            return t = (t + "").trim().toLowerCase(), (e = ju.exec(t)) ? (n = e[1].length, e = parseInt(e[1], 16), 6 === n ? Wu(e) : 3 === n ? new Zu(e >> 8 & 15 | e >> 4 & 240, e >> 4 & 15 | 240 & e, (15 & e) << 4 | 15 & e, 1) : 8 === n ? Xu(e >> 24 & 255, e >> 16 & 255, e >> 8 & 255, (255 & e) / 255) : 4 === n ? Xu(e >> 12 & 15 | e >> 8 & 240, e >> 8 & 15 | e >> 4 & 240, e >> 4 & 15 | 240 & e, ((15 & e) << 4 | 15 & e) / 255) : null) : (e = Lu.exec(t)) ? new Zu(e[1], e[2], e[3], 1) : (e = Hu.exec(t)) ? new Zu(255 * e[1] / 100, 255 * e[2] / 100, 255 * e[3] / 100, 1) : (e = Uu.exec(t)) ? Xu(e[1], e[2], e[3], e[4]) : (e = Ru.exec(t)) ? Xu(255 * e[1] / 100, 255 * e[2] / 100, 255 * e[3] / 100, e[4]) : (e = Yu.exec(t)) ? td(e[1], e[2] / 100, e[3] / 100, 1) : (e = qu.exec(t)) ? td(e[1], e[2] / 100, e[3] / 100, e[4]) : Iu.hasOwnProperty(t) ? Wu(Iu[t]) : "transparent" === t ? new Zu(NaN, NaN, NaN, 0) : null
        }

        function Wu(t) {
            return new Zu(t >> 16 & 255, t >> 8 & 255, 255 & t, 1)
        }

        function Xu(t, e, n, r) {
            return r <= 0 && (t = e = n = NaN), new Zu(t, e, n, r)
        }

        function Gu(t) {
            return t instanceof Cu || (t = Vu(t)), t ? new Zu((t = t.rgb()).r, t.g, t.b, t.opacity) : new Zu
        }

        function Zu(t, e, n, r) {
            this.r = +t, this.g = +e, this.b = +n, this.opacity = +r
        }

        function Ju() {
            return "#" + Ku(this.r) + Ku(this.g) + Ku(this.b)
        }

        function Qu() {
            var t = this.opacity;
            return (1 === (t = isNaN(t) ? 1 : Math.max(0, Math.min(1, t))) ? "rgb(" : "rgba(") + Math.max(0, Math.min(255, Math.round(this.r) || 0)) + ", " + Math.max(0, Math.min(255, Math.round(this.g) || 0)) + ", " + Math.max(0, Math.min(255, Math.round(this.b) || 0)) + (1 === t ? ")" : ", " + t + ")")
        }

        function Ku(t) {
            return ((t = Math.max(0, Math.min(255, Math.round(t) || 0))) < 16 ? "0" : "") + t.toString(16)
        }

        function td(t, e, n, r) {
            return r <= 0 ? t = e = n = NaN : n <= 0 || n >= 1 ? t = e = NaN : e <= 0 && (t = NaN), new nd(t, e, n, r)
        }

        function ed(t) {
            if (t instanceof nd) return new nd(t.h, t.s, t.l, t.opacity);
            if (t instanceof Cu || (t = Vu(t)), !t) return new nd;
            if (t instanceof nd) return t;
            var e = (t = t.rgb()).r / 255,
                n = t.g / 255,
                r = t.b / 255,
                i = Math.min(e, n, r),
                a = Math.max(e, n, r),
                o = NaN,
                s = a - i,
                c = (a + i) / 2;
            return s ? (o = e === a ? (n - r) / s + 6 * (n < r) : n === a ? (r - e) / s + 2 : (e - n) / s + 4, s /= c < .5 ? a + i : 2 - a - i, o *= 60) : s = c > 0 && c < 1 ? 0 : o, new nd(o, s, c, t.opacity)
        }

        function nd(t, e, n, r) {
            this.h = +t, this.s = +e, this.l = +n, this.opacity = +r
        }

        function rd(t, e, n) {
            return 255 * (t < 60 ? e + (n - e) * t / 60 : t < 180 ? n : t < 240 ? e + (n - e) * (240 - t) / 60 : e)
        }
        Au(Cu, Vu, {
            copy: function(t) {
                return Object.assign(new this.constructor, this, t)
            },
            displayable: function() {
                return this.rgb().displayable()
            },
            hex: Bu,
            formatHex: Bu,
            formatHsl: function() {
                return ed(this).formatHsl()
            },
            formatRgb: $u,
            toString: $u
        }), Au(Zu, (function(t, e, n, r) {
            return 1 === arguments.length ? Gu(t) : new Zu(t, e, n, null == r ? 1 : r)
        }), Tu(Cu, {
            brighter: function(t) {
                return t = null == t ? 1 / .7 : Math.pow(1 / .7, t), new Zu(this.r * t, this.g * t, this.b * t, this.opacity)
            },
            darker: function(t) {
                return t = null == t ? .7 : Math.pow(.7, t), new Zu(this.r * t, this.g * t, this.b * t, this.opacity)
            },
            rgb: function() {
                return this
            },
            displayable: function() {
                return -.5 <= this.r && this.r < 255.5 && -.5 <= this.g && this.g < 255.5 && -.5 <= this.b && this.b < 255.5 && 0 <= this.opacity && this.opacity <= 1
            },
            hex: Ju,
            formatHex: Ju,
            formatRgb: Qu,
            toString: Qu
        })), Au(nd, (function(t, e, n, r) {
            return 1 === arguments.length ? ed(t) : new nd(t, e, n, null == r ? 1 : r)
        }), Tu(Cu, {
            brighter: function(t) {
                return t = null == t ? 1 / .7 : Math.pow(1 / .7, t), new nd(this.h, this.s, this.l * t, this.opacity)
            },
            darker: function(t) {
                return t = null == t ? .7 : Math.pow(.7, t), new nd(this.h, this.s, this.l * t, this.opacity)
            },
            rgb: function() {
                var t = this.h % 360 + 360 * (this.h < 0),
                    e = isNaN(t) || isNaN(this.s) ? 0 : this.s,
                    n = this.l,
                    r = n + (n < .5 ? n : 1 - n) * e,
                    i = 2 * n - r;
                return new Zu(rd(t >= 240 ? t - 240 : t + 120, i, r), rd(t, i, r), rd(t < 120 ? t + 240 : t - 120, i, r), this.opacity)
            },
            displayable: function() {
                return (0 <= this.s && this.s <= 1 || isNaN(this.s)) && 0 <= this.l && this.l <= 1 && 0 <= this.opacity && this.opacity <= 1
            },
            formatHsl: function() {
                var t = this.opacity;
                return (1 === (t = isNaN(t) ? 1 : Math.max(0, Math.min(1, t))) ? "hsl(" : "hsla(") + (this.h || 0) + ", " + 100 * (this.s || 0) + "%, " + 100 * (this.l || 0) + "%" + (1 === t ? ")" : ", " + t + ")")
            }
        }));
        var id = !1;

        function ad(t) {
            return 0 !== t.indexOf("http://") && 0 !== t.indexOf("https://") ? "http://" + t : t
        }

        function od() {
            var t;
            return (t = document.createElement("style")).type = "text/css", t.innerHTML = ".flourish-footer { margin: 0; } .flourish-footer p { margin: 0; display: inline; } .flourish-footer p:empty { height: 0; } .flourish-footer a { color: inherit; }", document.head.appendChild(t), (Nu = document.createElement("footer")).className = "flourish-footer", (Ou = document.createElement("div")).className = "flourish-footer-text", (zu = document.createElement("a")).target = "_blank", (Eu = document.createElement("img")).className = "flourish-footer-logo", zu.appendChild(Eu), Nu.appendChild(Ou), Nu.appendChild(zu), Nu
        }

        function sd() {
            return pd.background_color_enabled && ! function(t) {
                if (t) {
                    var e = Vu(t);
                    return Math.round(299 * e.r + 587 * e.g + 114 * e.b) / 1e3 > 195
                }
                console.warn("No valid color", t)
            }(pd.background_color)
        }

        function cd() {
            var t = of (pd.footer_logo_src) ? pd.footer_logo_src : "";
            return of(pd.footer_logo_src_light) && sd() && (t = pd.footer_logo_src_light), t
        }

        function ld() {
            return pd.footer_logo_enabled && cd()
        }

        function fd() {
            ! function() {
                var t = "";
                ["mobile_small", "mobile_big", "tablet", "desktop", "big_screen"].forEach((function(e, n) {
                    var r = "@media(min-width: " + pd["breakpoint_" + e] + "px) {\n",
                        i = "html { font-size:" + pd["font_size_" + e] + "%; }";
                    t += (0 == n ? "" : r) + i + (0 == n ? "" : "\n}") + "\n\n"
                })), gu.innerHTML = t;
                var e = [pd.body_font, pd.title_font, pd.subtitle_font, pd.footer_font];
                e.forEach((function(t) {
                    if (t) {
                        for (var e = !1, n = document.head.querySelectorAll("link.layout-font"), r = 0; r < n.length; r++) {
                            n[r].href == t.url && (e = !0)
                        }
                        if (!e) {
                            var i = document.createElement("link");
                            i.setAttribute("rel", "stylesheet"), i.setAttribute("href", t.url), i.className = "layout-font", document.head.appendChild(i)
                        }
                    }
                }));
                for (var n = document.head.querySelectorAll("link.layout-font"), r = 0; r < n.length; r++) {
                    var i = n[r],
                        a = !1;
                    e.forEach((function(t) {
                        t && t.url == i.href && (a = !0)
                    })), a || i.parentElement.removeChild(i)
                }
                document.body.style.fontFamily = pd.body_font.name
            }(), vu.style.textAlign = pd.header_align, vu.style.margin = 0, vu.style.borderTop = "top" == pd.header_border ? pd.header_border_width + "px " + pd.header_border_style + " " + pd.header_border_color : null, vu.style.borderBottom = "bottom" == pd.header_border ? pd.header_border_width + "px " + pd.header_border_style + " " + pd.header_border_color : null, vu.style.paddingTop = "top" == pd.header_border ? pd.header_border_space + "rem" : "", vu.style.paddingBottom = "bottom" == pd.header_border ? pd.header_border_space + "rem" : "", wu.innerHTML = pd.title ? pd.title : "", wu.style.fontFamily = pd.title_font ? pd.title_font.name : "inherit", wu.style.fontSize = ("custom" != pd.title_size ? pd.title_size : pd.title_size_custom) + "rem", wu.style.lineHeight = pd.title_line_height, wu.style.fontWeight = pd.title_weight, wu.style.color = pd.title_color || pd.font_color, wu.style.margin = 0, wu.style.paddingTop = pd.title ? ("custom" == pd.title_space_above ? pd.title_space_above_custom : pd.title_space_above) + "rem" : 0, xu.innerHTML = pd.subtitle ? pd.subtitle : "", xu.style.fontFamily = pd.subtitle_font ? pd.subtitle_font.name : "inherit", xu.style.fontSize = ("custom" != pd.subtitle_size ? pd.subtitle_size : pd.subtitle_size_custom) + "rem", xu.style.lineHeight = pd.subtitle_line_height, xu.style.fontWeight = pd.subtitle_weight, xu.style.color = pd.subtitle_color || pd.font_color, xu.style.margin = 0, xu.style.paddingTop = pd.subtitle ? ("custom" == pd.subtitle_space_above ? pd.subtitle_space_above_custom : pd.subtitle_space_above) + "rem" : 0, Mu.innerHTML = pd.header_text ? pd.header_text : "", Mu.style.fontSize = ("custom" != pd.header_text_size ? pd.header_text_size : pd.header_text_size_custom) + "rem", Mu.style.lineHeight = pd.header_text_line_height, Mu.style.fontWeight = pd.header_text_weight, Mu.style.margin = 0, Mu.style.color = pd.header_text_color || pd.font_color, Mu.style.paddingTop = pd.header_text ? ("custom" == pd.header_text_space_above ? pd.header_text_space_above_custom : pd.header_text_space_above) + "rem" : 0, ku.style.display = pd.header_logo_enabled && of (pd.header_logo_src) ? "" : "none", ku.style.position = "inside" == pd.header_logo_align ? "" : "fixed", ku.style.height = pd.header_logo_height + "rem", ku.style.top = "outside" == pd.header_logo_align ? 0 : "", ku.style.left = "outside" == pd.header_logo_align && "left" == pd.header_logo_position_outside ? 0 : "", ku.style.right = "outside" == pd.header_logo_align && "right" == pd.header_logo_position_outside ? 0 : "", ku.style.marginTop = pd.header_logo_margin_top + "rem", ku.style.marginBottom = pd.header_logo_margin_bottom + "rem", ku.style.marginLeft = pd.header_logo_margin_left + "rem", ku.style.marginRight = pd.header_logo_margin_right + "rem", ku.style.float = "top" == pd.header_logo_position_inside || "outside" == pd.header_logo_align ? "" : pd.header_logo_position_inside, ku.style.width = "auto", ku.src = of (pd.header_logo_src) ? pd.header_logo_src : "",
                function() {
                    var t = [{
                        name: pd.source_name,
                        url: pd.source_url
                    }, {
                        name: pd.multiple_sources ? pd.source_name_2 : "",
                        url: pd.multiple_sources ? pd.source_url_2 : ""
                    }, {
                        name: pd.multiple_sources ? pd.source_name_3 : "",
                        url: pd.multiple_sources ? pd.source_url_3 : ""
                    }].filter((function(t) {
                        return t.name || t.url
                    }));
                    id = t.length > 0 || pd.footer_note || pd.footer_note_secondary || ld(), Nu.style.display = "flex", Nu.style.height = id ? null : 0, Nu.style.width = "100%", Nu.style.paddingTop = "top" == pd.footer_border ? pd.footer_border_space + "rem" : "", Nu.style.paddingBottom = "bottom" == pd.footer_border ? pd.footer_border_space + "rem" : "", Nu.style.borderTop = "top" == pd.footer_border ? pd.footer_border_width + "px " + pd.footer_border_style + " " + pd.footer_border_color : "", Nu.style.borderBottom = "bottom" == pd.footer_border ? pd.footer_border_width + "px " + pd.footer_border_style + " " + pd.footer_border_color : "", Nu.style.fontFamily = pd.footer_font ? pd.footer_font.name : "inherit", "justify" == pd.footer_align ? Nu.style.justifyContent = "space-between" : "left" == pd.footer_align ? Nu.style.justifyContent = "flex-start" : "right" == pd.footer_align ? Nu.style.justifyContent = "flex-end" : "center" == pd.footer_align && (Nu.style.justifyContent = "center"), Nu.style.fontSize = pd.footer_text_size + "rem", Nu.style.color = pd.footer_text_color || pd.font_color, Nu.style.alignItems = pd.footer_align_vertical;
                    var e = document.createElement("span");
                    t.forEach((function(t, n) {
                        var r = document.createElement("p");
                        if (n > 0 && (r.innerText = ", "), t.url) {
                            var i = document.createElement("a");
                            i.innerText = t.name || t.url, i.href = ad(t.url), i.target = "_blank", r.appendChild(i)
                        } else r.innerText += t.name || t.url;
                        e.innerHTML += r.innerHTML
                    })), Ou.style.order = "left" == pd.footer_logo_order ? 2 : "", Ou.style.textAlign = "justify" == pd.footer_align ? "" : pd.footer_align;
                    var n = "<p>";
                    n += "" !== e.innerHTML ? pd.source_label + " " + e.innerHTML : "", n += pd.footer_note ? ("" !== e.innerHTML ? " • " : "") + pd.footer_note : "", n += "</p>", n += pd.footer_note_secondary ? "<br /><p>" + pd.footer_note_secondary + "</p>" : "", Ou.innerHTML = n, Eu.src = cd(), Eu.style.height = pd.footer_logo_height + "rem", Eu.style.marginLeft = "right" == pd.footer_logo_order ? pd.footer_logo_margin + "rem" : "", Eu.style.marginRight = "left" == pd.footer_logo_order ? pd.footer_logo_margin + "rem" : "", Eu.style.verticalAlign = pd.footer_align_vertical, Eu.style.display = ld() ? "" : "none", zu.href = "" == pd.footer_logo_link_url ? "" : ad(pd.footer_logo_link_url), zu.style.cursor = "" == pd.footer_logo_link_url ? "default" : "pointer"
                }(), document.body.style.backgroundColor = pd.background_color_enabled ? pd.background_color : "transparent", document.body.style.backgroundImage = pd.background_image_enabled ? "url(" + pd.background_image_src + ")" : "", document.body.style.backgroundSize = pd.background_image_size, document.body.style.backgroundRepeat = "no-repeat", document.body.style.backgroundPosition = pd.background_image_position;
            var t = yd.wrapper.style;
            t.height = "100vh", t.color = pd.font_color, t.maxWidth = "wrapper" == pd.max_width_target ? pd.max_width + "px" : "", t.marginLeft = "wrapper" == pd.max_width_target && "left" != pd.max_width_align ? "auto" : "", t.marginRight = "wrapper" == pd.max_width_target && "right" != pd.max_width_align ? "auto" : "", t.padding = pd.margin_top + "rem " + pd.margin_right + "rem " + pd.margin_bottom + "rem " + pd.margin_left + "rem", t.borderTop = pd.border.enabled ? pd.border.top.width + "px " + pd.border.top.style + " " + pd.border.top.color : "", t.borderRight = pd.border.enabled ? pd.border.right.width + "px " + pd.border.right.style + " " + pd.border.right.color : "", t.borderBottom = pd.border.enabled ? pd.border.bottom.width + "px " + pd.border.bottom.style + " " + pd.border.bottom.color : "", t.borderLeft = pd.border.enabled ? pd.border.left.width + "px " + pd.border.left.style + " " + pd.border.left.color : "";
            var e = yd.primary.outer.style,
                n = yd.legend.outer.style,
                r = parseFloat(e.order) > parseFloat(n.order) ? "above" : "below";
            Su[pd.layout_order].forEach((function(t, e) {
                yd[t].outer.style.order = 10 * e
            })), e.flex = "1 1 auto", e.height = null, jd(r), n.textAlign = pd.header_align, yd.controls.outer.style.textAlign = pd.header_align, yd.primary.outer.style.maxWidth = "primary" == pd.max_width_target ? pd.max_width + "px" : "", yd.primary.outer.style.marginLeft = "primary" == pd.max_width_target && "left" != pd.max_width_align ? "auto" : "", yd.primary.outer.style.marginRight = "primary" == pd.max_width_target && "right" != pd.max_width_align ? "auto" : "";
            var i = ("custom" == pd.space_between_sections ? pd.space_between_sections_custom : pd.space_between_sections) / 2 + "rem";
            md.map((function(t) {
                var e = yd[t],
                    n = e.outer.style;
                return {
                    name: t,
                    height: wd(e.inner),
                    order: parseFloat(n.order),
                    style: n
                }
            })).sort((function(t, e) {
                return t.order - e.order
            })).filter((function(t) {
                if (t.height) return !0;
                t.style.paddingBottom = "", t.style.paddingTop = ""
            })).forEach((function(t, e, n) {
                t.style.paddingTop = e ? i : "", t.style.paddingBottom = e < n.length - 1 ? i : ""
            }))
        }
        var ud = Object.freeze({
            body_font: {
                name: "Source Sans Pro",
                url: "https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,700"
            },
            title_font: null,
            subtitle_font: null,
            footer_font: null,
            border: {
                enabled: !1,
                top: {
                    width: 1,
                    color: "#dddddd",
                    style: "solid"
                },
                right: {
                    width: 1,
                    color: "#dddddd",
                    style: "solid"
                },
                bottom: {
                    width: 1,
                    color: "#dddddd",
                    style: "solid"
                },
                left: {
                    width: 1,
                    color: "#dddddd",
                    style: "solid"
                }
            },
            layout_order: "stack-default",
            margin_top: .75,
            margin_right: .75,
            margin_bottom: .75,
            margin_left: .75,
            space_between_sections: 1,
            space_between_sections_custom: 1,
            background_color_enabled: !0,
            background_color: "#ffffff",
            background_image_enabled: !1,
            background_image_src: "",
            background_image_size: "cover",
            background_image_position: "center center",
            max_width: 600,
            max_width_target: "none",
            max_width_align: "center",
            breakpoint_mobile_small: 0,
            breakpoint_mobile_big: 380,
            breakpoint_tablet: 580,
            breakpoint_desktop: 1080,
            breakpoint_big_screen: 1280,
            font_color: "#333333",
            font_size_mobile_small: 62.5,
            font_size_mobile_big: 75,
            font_size_tablet: 87.5,
            font_size_desktop: 100,
            font_size_big_screen: 120,
            header_align: "left",
            header_border: "none",
            header_border_width: 1,
            header_border_color: "#dddddd",
            header_border_style: "solid",
            header_border_space: .5,
            header_logo_enabled: !1,
            header_logo_align: "inside",
            header_logo_src: "",
            header_logo_height: 3,
            header_logo_position_inside: "left",
            header_logo_position_outside: "left",
            header_logo_margin_top: .25,
            header_logo_margin_right: .5,
            header_logo_margin_bottom: 0,
            header_logo_margin_left: 0,
            title: "",
            title_size: 1.6,
            title_size_custom: 1.6,
            title_line_height: 1.2,
            title_color: null,
            title_weight: "bold",
            title_space_above: 0,
            title_space_above_custom: 1.5,
            title_styling: !1,
            subtitle: "",
            subtitle_size: 1.6,
            subtitle_size_custom: 1.6,
            subtitle_line_height: 1.2,
            subtitle_color: null,
            subtitle_weight: "normal",
            subtitle_space_above: 0,
            subtitle_space_above_custom: 1.5,
            subtitle_styling: !1,
            header_text: "",
            header_text_size: 1.2,
            header_text_size_custom: 1.2,
            header_text_line_height: 1.2,
            header_text_color: null,
            header_text_weight: "normal",
            header_text_space_above: .5,
            header_text_space_above_custom: 1.5,
            source_label: "Source: ",
            source_name: "",
            source_url: "",
            source_name_2: "",
            source_url_2: "",
            source_name_3: "",
            source_url_3: "",
            footer_note: "",
            footer_note_secondary: "",
            footer_text_size: 1,
            footer_text_color: null,
            footer_styling: !1,
            footer_align: "justify",
            footer_align_vertical: "center",
            footer_border: "none",
            footer_border_width: 1,
            footer_border_color: "#dddddd",
            footer_border_style: "solid",
            footer_border_space: .5,
            footer_logo_enabled: !1,
            footer_logo_src: "",
            footer_logo_src_light: "",
            footer_logo_link_url: "",
            footer_logo_height: 1.5,
            footer_logo_margin: .25,
            footer_logo_order: "right"
        });
        var dd, hd, pd;

        function _d(t) {
            return window.innerWidth !== dd && (dd = window.innerWidth, hd = parseFloat(getComputedStyle(document.documentElement).fontSize)), t * hd
        }
        var gd, bd, md = ["header", "controls", "legend", "primary", "footer"],
            yd = {};

        function vd(t) {
            return t.getBoundingClientRect().width
        }

        function wd(t) {
            return t.getBoundingClientRect().height
        }

        function xd() {
            return yd.wrapper
        }

        function Md() {
            return yd.sidebar
        }

        function kd(t) {
            return -1 !== md.indexOf(t) ? yd[t].inner : null
        }

        function Sd(t) {
            return yd[t] || void 0 === t ? vd("wrapper" == t || void 0 === t ? yd.wrapper : yd[t].outer) : null
        }

        function Ad(t) {
            return yd[t] || void 0 === t ? "wrapper" == t || void 0 === t ? vd(yd.wrapper) - Fd("horizontal") - Pd("horizontal") : vd(yd[t].inner) : null
        }

        function Td(t) {
            return yd[t] || void 0 === t ? wd("wrapper" == t || void 0 === t ? yd.wrapper : yd[t].outer) : null
        }

        function Cd(t) {
            return yd[t] || void 0 === t ? "wrapper" == t || void 0 === t ? wd(yd.wrapper) - Fd("vertical") - Pd("vertical") : wd(yd[t].inner) : null
        }

        function Nd() {
            return wd(yd.primary.outer) - Ed(yd.primary.outer)
        }

        function Od() {
            return vd(yd.primary.inner)
        }

        function Ed(t) {
            return (parseFloat(getComputedStyle(t).paddingTop) || 0) + (parseFloat(getComputedStyle(t).paddingBottom) || 0)
        }

        function zd() {
            return function() {
                if (Flourish.fixed_height) return window.innerHeight;
                var t = window.innerWidth;
                return t > 999 ? 650 : t > 599 ? 575 : 400
            }() - Fd("vertical") - Pd("vertical") - ["header", "controls", "legend", "footer"].reduce((function(t, e) {
                return t + Td(e)
            }), 0) - Ed(yd.primary.outer)
        }

        function Fd(t) {
            var e;
            return "left" == t ? e = pd.margin_left : "right" == t ? e = pd.margin_right : "top" == t ? e = pd.margin_top : "bottom" == t ? e = pd.margin_bottom : "horizontal" == t ? e = pd.margin_left + pd.margin_right : "vertical" == t && (e = pd.margin_top + pd.margin_bottom), _d(e)
        }

        function Pd(t) {
            return pd.border.enabled ? "vertical" == t ? pd.border.top.width + pd.border.bottom.width : "horizontal" == t ? pd.border.left.width + pd.border.right.width : null : 0
        }

        function Dd(t) {
            if (!Flourish.fixed_height && void 0 !== Flourish.fixed_height) {
                var e = null === t,
                    n = yd.primary,
                    r = e ? zd() : t;
                r + Ed(yd.primary.outer) !== parseFloat(n.outer.style.height) && (yd.wrapper.style.height = "", n.outer.style.flex = "", n.inner.style.height = r + "px", Flourish.setHeight(e ? null : Td()))
            }
        }

        function jd(t) {
            var e = parseFloat(yd.primary.outer.style.order);
            yd.legend.outer.style.order = e + 1 * ("below" === t.trim().toLowerCase() ? 1 : -1)
        }

        function Ld(t) {
            var e = gd.querySelector(".fl-layout-overlay-message");
            if (t) {
                gd.style.display = "block";
                var n = "string" == typeof t ? t : "Your web browser does not support the features used by this content. Consider updating to a modern browser.";
                e.innerHTML = n
            } else e.textContent = "", gd.style.display = "none"
        }

        function Hd() {
            return gd
        }

        function Ud(t) {
            for (var e in pd = t, ud) void 0 === pd[e] && (pd[e] = ud[e]);
            return (gu = document.createElement("style")).id = "flourish-page-styles", gu.type = "text/css", document.head.appendChild(gu), yd.wrapper = function() {
                    var t = document.createElement("div");
                    t.id = "fl-layout-wrapper-outer", t.style.display = "flex";
                    var e = document.createElement("main");
                    e.id = "fl-layout-wrapper", e.style.display = "flex", e.style.flexGrow = "1", e.style.flexDirection = "column", e.style.boxSizing = "border-box", e.style.overflow = "hidden";
                    var n = document.createElement("aside");
                    return n.id = "fl-layout-sidebar", n.style.position = "relative", yd.sidebar = n, t.appendChild(e), t.appendChild(n), document.body.appendChild(t), e
                }(), md.forEach((function(t, e) {
                    yd[t] = function(t, e) {
                        var n = "fl-layout-" + t,
                            r = document.createElement("section");
                        r.className = "fl-layout-container", r.id = n + "-container", r.style.width = "100%", r.style.position = "relative", r.style.order = e;
                        var i = document.createElement("div");
                        return i.className = "fl-layout-inner", i.id = n, i.style.width = "100%", i.style.position = "relative", "primary" == t && (r.style.display = "flex"), r.appendChild(i), yd.wrapper.appendChild(r), {
                            outer: r,
                            inner: i
                        }
                    }(t, e)
                })), kd("header").appendChild(function() {
                    (vu = document.createElement("header")).className = "flourish-header";
                    var t = document.createElement("hgroup");
                    return wu = document.createElement("h1"), xu = document.createElement("h2"), Mu = document.createElement("p"), ku = document.createElement("img"), vu.appendChild(ku), vu.appendChild(t), t.appendChild(wu), t.appendChild(xu), vu.appendChild(Mu), vu
                }()), kd("footer").appendChild(od()), yd.primary.outer.style.overflow = "hidden",
                function() {
                    var t = yd.primary.outer;
                    t.style.position = "relative", (gd = document.createElement("div")).id = "fl-layout-overlay";
                    var e = gd.style;
                    e.position = "absolute", e.display = "none", e.width = "100%", e.height = "100%", e.top = 0, e.left = 0, e.backgroundColor = "rgb(200,200,200)", e.zIndex = 999999, e.pointerEvents = "none";
                    var n = document.createElement("p");
                    n.className = "fl-layout-overlay-message", (e = n.style).color = "#333333", e.fontSize = "1.5rem", e.paddingLeft = "15%", e.paddingRight = "15%", e.width = "100%", e.boxSizing = "border-box", e.position = "absolute", e.top = "50%", e.transform = "translate(0, -50%)", e.margin = "0", e.textAlign = "center", gd.appendChild(n), t.appendChild(gd)
                }(), fd(), {
                    update: fd,
                    getWrapper: xd,
                    getSidebar: Md,
                    getSection: kd,
                    getOuterWidth: Sd,
                    getInnerWidth: Ad,
                    getOuterHeight: Td,
                    getInnerHeight: Cd,
                    getPrimaryHeight: Nd,
                    getPrimaryWidth: Od,
                    getDefaultPrimaryHeight: zd,
                    setHeight: Dd,
                    setLegendPosition: jd,
                    showOverlay: Ld,
                    remToPx: _d,
                    getOverlay: Hd
                }
        }

        function Rd(t, e) {
            switch (arguments.length) {
                case 0:
                    break;
                case 1:
                    this.range(t);
                    break;
                default:
                    this.range(e).domain(t)
            }
            return this
        }
        var Yd = Symbol("implicit");

        function qd(t) {
            return +t
        }
        var Id = [0, 1];

        function Bd(t) {
            return t
        }

        function $d(t, e) {
            return (e -= t = +t) ? function(n) {
                return (n - t) / e
            } : function(t) {
                return function() {
                    return t
                }
            }(isNaN(e) ? NaN : .5)
        }

        function Vd(t, e, n) {
            var r = t[0],
                i = t[1],
                a = e[0],
                o = e[1];
            return i < r ? (r = $d(i, r), a = n(o, a)) : (r = $d(r, i), a = n(a, o)),
                function(t) {
                    return a(r(t))
                }
        }

        function Wd(t, e, n) {
            var r = Math.min(t.length, e.length) - 1,
                i = new Array(r),
                a = new Array(r),
                o = -1;
            for (t[r] < t[0] && (t = t.slice().reverse(), e = e.slice().reverse()); ++o < r;) i[o] = $d(t[o], t[o + 1]), a[o] = n(e[o], e[o + 1]);
            return function(e) {
                var n = ci(t, e, 1, r) - 1;
                return a[n](i[n](e))
            }
        }

        function Xd(t, e) {
            return e.domain(t.domain()).range(t.range()).interpolate(t.interpolate()).clamp(t.clamp()).unknown(t.unknown())
        }

        function Gd() {
            var t, e, n, r, i, a, o = Id,
                s = Id,
                c = Xa,
                l = Bd;

            function f() {
                var t, e, n, c = Math.min(o.length, s.length);
                return l !== Bd && (t = o[0], e = o[c - 1], t > e && (n = t, t = e, e = n), l = function(n) {
                    return Math.max(t, Math.min(e, n))
                }), r = c > 2 ? Wd : Vd, i = a = null, u
            }

            function u(e) {
                return isNaN(e = +e) ? n : (i || (i = r(o.map(t), s, c)))(t(l(e)))
            }
            return u.invert = function(n) {
                    return l(e((a || (a = r(s, o.map(t), Ia)))(n)))
                }, u.domain = function(t) {
                    return arguments.length ? (o = Array.from(t, qd), f()) : o.slice()
                }, u.range = function(t) {
                    return arguments.length ? (s = Array.from(t), f()) : s.slice()
                }, u.rangeRound = function(t) {
                    return s = Array.from(t), c = Ga, f()
                }, u.clamp = function(t) {
                    return arguments.length ? (l = !!t || Bd, f()) : l !== Bd
                }, u.interpolate = function(t) {
                    return arguments.length ? (c = t, f()) : c
                }, u.unknown = function(t) {
                    return arguments.length ? (n = t, u) : n
                },
                function(n, r) {
                    return t = n, e = r, f()
                }
        }

        function Zd() {
            return Gd()(Bd, Bd)
        }

        function Jd(t) {
            var e = t.domain;
            return t.ticks = function(t) {
                var n = e();
                return function(t, e, n) {
                    var r, i, a, o, s = -1;
                    if (n = +n, (t = +t) === (e = +e) && n > 0) return [t];
                    if ((r = e < t) && (i = t, t = e, e = i), 0 === (o = hi(t, e, n)) || !isFinite(o)) return [];
                    if (o > 0)
                        for (t = Math.ceil(t / o), e = Math.floor(e / o), a = new Array(i = Math.ceil(e - t + 1)); ++s < i;) a[s] = (t + s) * o;
                    else
                        for (t = Math.floor(t * o), e = Math.ceil(e * o), a = new Array(i = Math.ceil(t - e + 1)); ++s < i;) a[s] = (t - s) / o;
                    return r && a.reverse(), a
                }(n[0], n[n.length - 1], null == t ? 10 : t)
            }, t.tickFormat = function(t, n) {
                var r = e();
                return function(t, e, n, r) {
                    var i, a = pi(t, e, n);
                    switch ((r = So(null == r ? ",f" : r)).type) {
                        case "s":
                            var o = Math.max(Math.abs(t), Math.abs(e));
                            return null != r.precision || isNaN(i = jo(a, o)) || (r.precision = i), zo(r, o);
                        case "":
                        case "e":
                        case "g":
                        case "p":
                        case "r":
                            null != r.precision || isNaN(i = Lo(a, Math.max(Math.abs(t), Math.abs(e)))) || (r.precision = i - ("e" === r.type));
                            break;
                        case "f":
                        case "%":
                            null != r.precision || isNaN(i = Do(a)) || (r.precision = i - 2 * ("%" === r.type))
                    }
                    return Eo(r)
                }(r[0], r[r.length - 1], null == t ? 10 : t, n)
            }, t.nice = function(n) {
                null == n && (n = 10);
                var r, i = e(),
                    a = 0,
                    o = i.length - 1,
                    s = i[a],
                    c = i[o];
                return c < s && (r = s, s = c, c = r, r = a, a = o, o = r), (r = hi(s, c, n)) > 0 ? r = hi(s = Math.floor(s / r) * r, c = Math.ceil(c / r) * r, n) : r < 0 && (r = hi(s = Math.ceil(s * r) / r, c = Math.floor(c * r) / r, n)), r > 0 ? (i[a] = Math.floor(s / r) * r, i[o] = Math.ceil(c / r) * r, e(i)) : r < 0 && (i[a] = Math.ceil(s * r) / r, i[o] = Math.floor(c * r) / r, e(i)), t
            }, t
        }

        function Qd() {
            var t = Zd();
            return t.copy = function() {
                return Xd(t, Qd())
            }, Rd.apply(t, arguments), Jd(t)
        }
        var Kd = new Date,
            th = new Date;

        function eh(t, e, n, r) {
            function i(e) {
                return t(e = 0 === arguments.length ? new Date : new Date(+e)), e
            }
            return i.floor = function(e) {
                return t(e = new Date(+e)), e
            }, i.ceil = function(n) {
                return t(n = new Date(n - 1)), e(n, 1), t(n), n
            }, i.round = function(t) {
                var e = i(t),
                    n = i.ceil(t);
                return t - e < n - t ? e : n
            }, i.offset = function(t, n) {
                return e(t = new Date(+t), null == n ? 1 : Math.floor(n)), t
            }, i.range = function(n, r, a) {
                var o, s = [];
                if (n = i.ceil(n), a = null == a ? 1 : Math.floor(a), !(n < r && a > 0)) return s;
                do {
                    s.push(o = new Date(+n)), e(n, a), t(n)
                } while (o < n && n < r);
                return s
            }, i.filter = function(n) {
                return eh((function(e) {
                    if (e >= e)
                        for (; t(e), !n(e);) e.setTime(e - 1)
                }), (function(t, r) {
                    if (t >= t)
                        if (r < 0)
                            for (; ++r <= 0;)
                                for (; e(t, -1), !n(t););
                        else
                            for (; --r >= 0;)
                                for (; e(t, 1), !n(t););
                }))
            }, n && (i.count = function(e, r) {
                return Kd.setTime(+e), th.setTime(+r), t(Kd), t(th), Math.floor(n(Kd, th))
            }, i.every = function(t) {
                return t = Math.floor(t), isFinite(t) && t > 0 ? t > 1 ? i.filter(r ? function(e) {
                    return r(e) % t == 0
                } : function(e) {
                    return i.count(0, e) % t == 0
                }) : i : null
            }), i
        }
        var nh = eh((function() {}), (function(t, e) {
            t.setTime(+t + e)
        }), (function(t, e) {
            return e - t
        }));
        nh.every = function(t) {
            return t = Math.floor(t), isFinite(t) && t > 0 ? t > 1 ? eh((function(e) {
                e.setTime(Math.floor(e / t) * t)
            }), (function(e, n) {
                e.setTime(+e + n * t)
            }), (function(e, n) {
                return (n - e) / t
            })) : nh : null
        };
        var rh = eh((function(t) {
                t.setTime(t - t.getMilliseconds())
            }), (function(t, e) {
                t.setTime(+t + 1e3 * e)
            }), (function(t, e) {
                return (e - t) / 1e3
            }), (function(t) {
                return t.getUTCSeconds()
            })),
            ih = eh((function(t) {
                t.setTime(t - t.getMilliseconds() - 1e3 * t.getSeconds())
            }), (function(t, e) {
                t.setTime(+t + 6e4 * e)
            }), (function(t, e) {
                return (e - t) / 6e4
            }), (function(t) {
                return t.getMinutes()
            })),
            ah = eh((function(t) {
                t.setTime(t - t.getMilliseconds() - 1e3 * t.getSeconds() - 6e4 * t.getMinutes())
            }), (function(t, e) {
                t.setTime(+t + 36e5 * e)
            }), (function(t, e) {
                return (e - t) / 36e5
            }), (function(t) {
                return t.getHours()
            })),
            oh = eh((function(t) {
                t.setHours(0, 0, 0, 0)
            }), (function(t, e) {
                t.setDate(t.getDate() + e)
            }), (function(t, e) {
                return (e - t - 6e4 * (e.getTimezoneOffset() - t.getTimezoneOffset())) / 864e5
            }), (function(t) {
                return t.getDate() - 1
            }));

        function sh(t) {
            return eh((function(e) {
                e.setDate(e.getDate() - (e.getDay() + 7 - t) % 7), e.setHours(0, 0, 0, 0)
            }), (function(t, e) {
                t.setDate(t.getDate() + 7 * e)
            }), (function(t, e) {
                return (e - t - 6e4 * (e.getTimezoneOffset() - t.getTimezoneOffset())) / 6048e5
            }))
        }
        var ch = sh(0),
            lh = (sh(1), sh(2), sh(3), sh(4), sh(5), sh(6), eh((function(t) {
                t.setDate(1), t.setHours(0, 0, 0, 0)
            }), (function(t, e) {
                t.setMonth(t.getMonth() + e)
            }), (function(t, e) {
                return e.getMonth() - t.getMonth() + 12 * (e.getFullYear() - t.getFullYear())
            }), (function(t) {
                return t.getMonth()
            }))),
            fh = eh((function(t) {
                t.setMonth(0, 1), t.setHours(0, 0, 0, 0)
            }), (function(t, e) {
                t.setFullYear(t.getFullYear() + e)
            }), (function(t, e) {
                return e.getFullYear() - t.getFullYear()
            }), (function(t) {
                return t.getFullYear()
            }));
        fh.every = function(t) {
            return isFinite(t = Math.floor(t)) && t > 0 ? eh((function(e) {
                e.setFullYear(Math.floor(e.getFullYear() / t) * t), e.setMonth(0, 1), e.setHours(0, 0, 0, 0)
            }), (function(e, n) {
                e.setFullYear(e.getFullYear() + n * t)
            })) : null
        };

        function uh(t) {
            return new Date(t)
        }

        function dh(t) {
            return t instanceof Date ? +t : +new Date(+t)
        }

        function hh(t, e, n, r, i, a, o, s, c) {
            var l = Zd(),
                f = l.invert,
                u = l.domain,
                d = c(".%L"),
                h = c(":%S"),
                p = c("%I:%M"),
                _ = c("%I %p"),
                g = c("%a %d"),
                b = c("%b %d"),
                m = c("%B"),
                y = c("%Y"),
                v = [
                    [o, 1, 1e3],
                    [o, 5, 5e3],
                    [o, 15, 15e3],
                    [o, 30, 3e4],
                    [a, 1, 6e4],
                    [a, 5, 3e5],
                    [a, 15, 9e5],
                    [a, 30, 18e5],
                    [i, 1, 36e5],
                    [i, 3, 108e5],
                    [i, 6, 216e5],
                    [i, 12, 432e5],
                    [r, 1, 864e5],
                    [r, 2, 1728e5],
                    [n, 1, 6048e5],
                    [e, 1, 2592e6],
                    [e, 3, 7776e6],
                    [t, 1, 31536e6]
                ];

            function w(s) {
                return (o(s) < s ? d : a(s) < s ? h : i(s) < s ? p : r(s) < s ? _ : e(s) < s ? n(s) < s ? g : b : t(s) < s ? m : y)(s)
            }

            function x(e, n, r) {
                if (null == e && (e = 10), "number" == typeof e) {
                    var i, a = Math.abs(r - n) / e,
                        o = si((function(t) {
                            return t[2]
                        })).right(v, a);
                    return o === v.length ? (i = pi(n / 31536e6, r / 31536e6, e), e = t) : o ? (i = (o = v[a / v[o - 1][2] < v[o][2] / a ? o - 1 : o])[1], e = o[0]) : (i = Math.max(pi(n, r, e), 1), e = s), e.every(i)
                }
                return e
            }
            return l.invert = function(t) {
                return new Date(f(t))
            }, l.domain = function(t) {
                return arguments.length ? u(Array.from(t, dh)) : u().map(uh)
            }, l.ticks = function(t) {
                var e, n = u(),
                    r = n[0],
                    i = n[n.length - 1],
                    a = i < r;
                return a && (e = r, r = i, i = e), e = (e = x(t, r, i)) ? e.range(r, i + 1) : [], a ? e.reverse() : e
            }, l.tickFormat = function(t, e) {
                return null == e ? w : c(e)
            }, l.nice = function(t) {
                var e = u();
                return (t = x(t, e[0], e[e.length - 1])) ? u(function(t, e) {
                    var n, r = 0,
                        i = (t = t.slice()).length - 1,
                        a = t[r],
                        o = t[i];
                    return o < a && (n = r, r = i, i = n, n = a, a = o, o = n), t[r] = e.floor(a), t[i] = e.ceil(o), t
                }(e, t)) : l
            }, l.copy = function() {
                return Xd(l, hh(t, e, n, r, i, a, o, s, c))
            }, l
        }

        function ph() {
            return Rd.apply(hh(fh, lh, ch, oh, ah, ih, rh, nh, os).domain([new Date(2e3, 0, 1), new Date(2e3, 0, 2)]), arguments)
        }
        var _h = Math.PI,
            gh = 2 * _h,
            bh = gh - 1e-6;

        function mh() {
            this._x0 = this._y0 = this._x1 = this._y1 = null, this._ = ""
        }

        function yh() {
            return new mh
        }

        function vh(t) {
            return function() {
                return t
            }
        }

        function wh(t) {
            this._context = t
        }

        function xh(t) {
            return new wh(t)
        }

        function Mh(t) {
            return t[0]
        }

        function kh(t) {
            return t[1]
        }

        function Sh() {
            var t = Mh,
                e = kh,
                n = vh(!0),
                r = null,
                i = xh,
                a = null;

            function o(o) {
                var s, c, l, f = o.length,
                    u = !1;
                for (null == r && (a = i(l = yh())), s = 0; s <= f; ++s) !(s < f && n(c = o[s], s, o)) === u && ((u = !u) ? a.lineStart() : a.lineEnd()), u && a.point(+t(c, s, o), +e(c, s, o));
                if (l) return a = null, l + "" || null
            }
            return o.x = function(e) {
                return arguments.length ? (t = "function" == typeof e ? e : vh(+e), o) : t
            }, o.y = function(t) {
                return arguments.length ? (e = "function" == typeof t ? t : vh(+t), o) : e
            }, o.defined = function(t) {
                return arguments.length ? (n = "function" == typeof t ? t : vh(!!t), o) : n
            }, o.curve = function(t) {
                return arguments.length ? (i = t, null != r && (a = i(r)), o) : i
            }, o.context = function(t) {
                return arguments.length ? (null == t ? r = a = null : a = i(r = t), o) : r
            }, o
        }

        function Ah(t, e, n) {
            t._context.bezierCurveTo(t._x1 + t._k * (t._x2 - t._x0), t._y1 + t._k * (t._y2 - t._y0), t._x2 + t._k * (t._x1 - e), t._y2 + t._k * (t._y1 - n), t._x2, t._y2)
        }

        function Th(t, e) {
            this._context = t, this._k = (1 - e) / 6
        }
        mh.prototype = yh.prototype = {
            constructor: mh,
            moveTo: function(t, e) {
                this._ += "M" + (this._x0 = this._x1 = +t) + "," + (this._y0 = this._y1 = +e)
            },
            closePath: function() {
                null !== this._x1 && (this._x1 = this._x0, this._y1 = this._y0, this._ += "Z")
            },
            lineTo: function(t, e) {
                this._ += "L" + (this._x1 = +t) + "," + (this._y1 = +e)
            },
            quadraticCurveTo: function(t, e, n, r) {
                this._ += "Q" + +t + "," + +e + "," + (this._x1 = +n) + "," + (this._y1 = +r)
            },
            bezierCurveTo: function(t, e, n, r, i, a) {
                this._ += "C" + +t + "," + +e + "," + +n + "," + +r + "," + (this._x1 = +i) + "," + (this._y1 = +a)
            },
            arcTo: function(t, e, n, r, i) {
                t = +t, e = +e, n = +n, r = +r, i = +i;
                var a = this._x1,
                    o = this._y1,
                    s = n - t,
                    c = r - e,
                    l = a - t,
                    f = o - e,
                    u = l * l + f * f;
                if (i < 0) throw new Error("negative radius: " + i);
                if (null === this._x1) this._ += "M" + (this._x1 = t) + "," + (this._y1 = e);
                else if (u > 1e-6)
                    if (Math.abs(f * s - c * l) > 1e-6 && i) {
                        var d = n - a,
                            h = r - o,
                            p = s * s + c * c,
                            _ = d * d + h * h,
                            g = Math.sqrt(p),
                            b = Math.sqrt(u),
                            m = i * Math.tan((_h - Math.acos((p + u - _) / (2 * g * b))) / 2),
                            y = m / b,
                            v = m / g;
                        Math.abs(y - 1) > 1e-6 && (this._ += "L" + (t + y * l) + "," + (e + y * f)), this._ += "A" + i + "," + i + ",0,0," + +(f * d > l * h) + "," + (this._x1 = t + v * s) + "," + (this._y1 = e + v * c)
                    } else this._ += "L" + (this._x1 = t) + "," + (this._y1 = e);
                else;
            },
            arc: function(t, e, n, r, i, a) {
                t = +t, e = +e, a = !!a;
                var o = (n = +n) * Math.cos(r),
                    s = n * Math.sin(r),
                    c = t + o,
                    l = e + s,
                    f = 1 ^ a,
                    u = a ? r - i : i - r;
                if (n < 0) throw new Error("negative radius: " + n);
                null === this._x1 ? this._ += "M" + c + "," + l : (Math.abs(this._x1 - c) > 1e-6 || Math.abs(this._y1 - l) > 1e-6) && (this._ += "L" + c + "," + l), n && (u < 0 && (u = u % gh + gh), u > bh ? this._ += "A" + n + "," + n + ",0,1," + f + "," + (t - o) + "," + (e - s) + "A" + n + "," + n + ",0,1," + f + "," + (this._x1 = c) + "," + (this._y1 = l) : u > 1e-6 && (this._ += "A" + n + "," + n + ",0," + +(u >= _h) + "," + f + "," + (this._x1 = t + n * Math.cos(i)) + "," + (this._y1 = e + n * Math.sin(i))))
            },
            rect: function(t, e, n, r) {
                this._ += "M" + (this._x0 = this._x1 = +t) + "," + (this._y0 = this._y1 = +e) + "h" + +n + "v" + +r + "h" + -n + "Z"
            },
            toString: function() {
                return this._
            }
        }, wh.prototype = {
            areaStart: function() {
                this._line = 0
            },
            areaEnd: function() {
                this._line = NaN
            },
            lineStart: function() {
                this._point = 0
            },
            lineEnd: function() {
                (this._line || 0 !== this._line && 1 === this._point) && this._context.closePath(), this._line = 1 - this._line
            },
            point: function(t, e) {
                switch (t = +t, e = +e, this._point) {
                    case 0:
                        this._point = 1, this._line ? this._context.lineTo(t, e) : this._context.moveTo(t, e);
                        break;
                    case 1:
                        this._point = 2;
                    default:
                        this._context.lineTo(t, e)
                }
            }
        }, Th.prototype = {
            areaStart: function() {
                this._line = 0
            },
            areaEnd: function() {
                this._line = NaN
            },
            lineStart: function() {
                this._x0 = this._x1 = this._x2 = this._y0 = this._y1 = this._y2 = NaN, this._point = 0
            },
            lineEnd: function() {
                switch (this._point) {
                    case 2:
                        this._context.lineTo(this._x2, this._y2);
                        break;
                    case 3:
                        Ah(this, this._x1, this._y1)
                }(this._line || 0 !== this._line && 1 === this._point) && this._context.closePath(), this._line = 1 - this._line
            },
            point: function(t, e) {
                switch (t = +t, e = +e, this._point) {
                    case 0:
                        this._point = 1, this._line ? this._context.lineTo(t, e) : this._context.moveTo(t, e);
                        break;
                    case 1:
                        this._point = 2, this._x1 = t, this._y1 = e;
                        break;
                    case 2:
                        this._point = 3;
                    default:
                        Ah(this, t, e)
                }
                this._x0 = this._x1, this._x1 = this._x2, this._x2 = t, this._y0 = this._y1, this._y1 = this._y2, this._y2 = e
            }
        };
        var Ch = function t(e) {
                function n(t) {
                    return new Th(t, e)
                }
                return n.tension = function(e) {
                    return t(+e)
                }, n
            }(0),
            Nh = function(t, e) {
                "string" == typeof e && (n = e, n = String(n).toUpperCase(), e = function(t) {
                    return n === t.nodeName
                });
                var n;
                "function" != typeof e && (r = e, e = function(t) {
                    return r === t
                });
                var r;
                for (; t && !e(t);) t = t.parentNode;
                return t || null
            };

        function Oh() {
            this._events = this._events || {}, this._maxListeners = this._maxListeners || void 0
        }
        var Eh = Oh;

        function zh(t) {
            return "function" == typeof t
        }

        function Fh(t) {
            return "object" == typeof t && null !== t
        }

        function Ph(t) {
            return void 0 === t
        }
        Oh.EventEmitter = Oh, Oh.prototype._events = void 0, Oh.prototype._maxListeners = void 0, Oh.defaultMaxListeners = 10, Oh.prototype.setMaxListeners = function(t) {
            if ("number" != typeof t || t < 0 || isNaN(t)) throw TypeError("n must be a positive number");
            return this._maxListeners = t, this
        }, Oh.prototype.emit = function(t) {
            var e, n, r, i, a, o;
            if (this._events || (this._events = {}), "error" === t && (!this._events.error || Fh(this._events.error) && !this._events.error.length)) {
                if ((e = arguments[1]) instanceof Error) throw e;
                var s = new Error('Uncaught, unspecified "error" event. (' + e + ")");
                throw s.context = e, s
            }
            if (Ph(n = this._events[t])) return !1;
            if (zh(n)) switch (arguments.length) {
                case 1:
                    n.call(this);
                    break;
                case 2:
                    n.call(this, arguments[1]);
                    break;
                case 3:
                    n.call(this, arguments[1], arguments[2]);
                    break;
                default:
                    i = Array.prototype.slice.call(arguments, 1), n.apply(this, i)
            } else if (Fh(n))
                for (i = Array.prototype.slice.call(arguments, 1), r = (o = n.slice()).length, a = 0; a < r; a++) o[a].apply(this, i);
            return !0
        }, Oh.prototype.addListener = function(t, e) {
            var n;
            if (!zh(e)) throw TypeError("listener must be a function");
            return this._events || (this._events = {}), this._events.newListener && this.emit("newListener", t, zh(e.listener) ? e.listener : e), this._events[t] ? Fh(this._events[t]) ? this._events[t].push(e) : this._events[t] = [this._events[t], e] : this._events[t] = e, Fh(this._events[t]) && !this._events[t].warned && (n = Ph(this._maxListeners) ? Oh.defaultMaxListeners : this._maxListeners) && n > 0 && this._events[t].length > n && (this._events[t].warned = !0, console.error("(node) warning: possible EventEmitter memory leak detected. %d listeners added. Use emitter.setMaxListeners() to increase limit.", this._events[t].length), "function" == typeof console.trace && console.trace()), this
        }, Oh.prototype.on = Oh.prototype.addListener, Oh.prototype.once = function(t, e) {
            if (!zh(e)) throw TypeError("listener must be a function");
            var n = !1;

            function r() {
                this.removeListener(t, r), n || (n = !0, e.apply(this, arguments))
            }
            return r.listener = e, this.on(t, r), this
        }, Oh.prototype.removeListener = function(t, e) {
            var n, r, i, a;
            if (!zh(e)) throw TypeError("listener must be a function");
            if (!this._events || !this._events[t]) return this;
            if (i = (n = this._events[t]).length, r = -1, n === e || zh(n.listener) && n.listener === e) delete this._events[t], this._events.removeListener && this.emit("removeListener", t, e);
            else if (Fh(n)) {
                for (a = i; a-- > 0;)
                    if (n[a] === e || n[a].listener && n[a].listener === e) {
                        r = a;
                        break
                    } if (r < 0) return this;
                1 === n.length ? (n.length = 0, delete this._events[t]) : n.splice(r, 1), this._events.removeListener && this.emit("removeListener", t, e)
            }
            return this
        }, Oh.prototype.removeAllListeners = function(t) {
            var e, n;
            if (!this._events) return this;
            if (!this._events.removeListener) return 0 === arguments.length ? this._events = {} : this._events[t] && delete this._events[t], this;
            if (0 === arguments.length) {
                for (e in this._events) "removeListener" !== e && this.removeAllListeners(e);
                return this.removeAllListeners("removeListener"), this._events = {}, this
            }
            if (zh(n = this._events[t])) this.removeListener(t, n);
            else if (n)
                for (; n.length;) this.removeListener(t, n[n.length - 1]);
            return delete this._events[t], this
        }, Oh.prototype.listeners = function(t) {
            return this._events && this._events[t] ? zh(this._events[t]) ? [this._events[t]] : this._events[t].slice() : []
        }, Oh.prototype.listenerCount = function(t) {
            if (this._events) {
                var e = this._events[t];
                if (zh(e)) return 1;
                if (e) return e.length
            }
            return 0
        }, Oh.listenerCount = function(t, e) {
            return t.listenerCount(e)
        };
        var Dh = ["touchstart", "touchmove", "touchend", "touchcancel", "mousedown", "mousemove", "mouseup"],
            jh = {
                left: 0,
                top: 0
            },
            Lh = function(t, e) {
                e = e || {}, t = t || window;
                var n = new Eh;
                n.target = e.target || t;
                var r = null,
                    i = e.filtered,
                    a = Dh;
                "string" == typeof e.type && (a = Dh.filter((function(t) {
                    return 0 === t.indexOf(e.type)
                })));
                var o = a.map((function(t) {
                    var a = function(t) {
                        return t.replace(/^(touch|mouse)/, "").replace(/up$/, "end").replace(/down$/, "start")
                    }(t);
                    return {
                        type: t,
                        listener: function(o) {
                            var s = o;
                            if (/^touch/.test(t) && (/^touchend$/.test(t) && !1 !== e.preventSimulated && o.preventDefault(), s = i ? function(t, e) {
                                    var i;
                                    r && /^touch(end|cancel)/.test(e) ? (i = Uh(t.changedTouches, r.identifier || 0)) && (r = null) : !r && /^touchstart/.test(e) ? r = i = Hh(t.changedTouches, n.target) : r && (i = Uh(t.changedTouches, r.identifier || 0));
                                    return i
                                }(o, t) : Hh(o.changedTouches, n.target)), s) {
                                var c = function(t, e) {
                                    var n = t.clientX || 0,
                                        r = t.clientY || 0,
                                        i = function(t) {
                                            return t === window || t === document || t === document.body ? jh : t.getBoundingClientRect()
                                        }(e);
                                    return [n - i.left, r - i.top]
                                }(s, n.target);
                                n.emit(a, o, c)
                            }
                        }
                    }
                }));
                return n.enable = function() {
                    return o.forEach(Rh(t, !0)), n
                }, n.disable = function() {
                    return r = null, o.forEach(Rh(t, !1)), n
                }, n.enable(), n
            };

        function Hh(t, e) {
            return Array.prototype.slice.call(t).filter((function(t) {
                return t.target === e
            }))[0] || t[0]
        }

        function Uh(t, e) {
            for (var n = 0; n < t.length; n++)
                if (t[n].identifier === e) return t[n];
            return null
        }

        function Rh(t, e) {
            return function(n) {
                e ? t.addEventListener(n.type, n.listener, {
                    passive: !1
                }) : t.removeEventListener(n.type, n.listener, {
                    passive: !1
                })
            }
        }
        var Yh, qh, Ih, Bh = function(t) {
                return null != t
            },
            $h = Object.keys,
            Vh = function() {
                try {
                    return Object.keys("primitive"), !0
                } catch (t) {
                    return !1
                }
            }() ? Object.keys : function(t) {
                return $h(Bh(t) ? Object(t) : t)
            },
            Wh = function(t) {
                if (!Bh(t)) throw new TypeError("Cannot use null or undefined");
                return t
            },
            Xh = Math.max,
            Gh = function() {
                var t, e = Object.assign;
                return "function" == typeof e && (e(t = {
                    foo: "raz"
                }, {
                    bar: "dwa"
                }, {
                    trzy: "trzy"
                }), t.foo + t.bar + t.trzy === "razdwatrzy")
            }() ? Object.assign : function(t, e) {
                var n, r, i, a = arguments,
                    o = Xh(arguments.length, 2);
                for (t = Object(Wh(t)), i = function(r) {
                        try {
                            t[r] = e[r]
                        } catch (t) {
                            n || (n = t)
                        }
                    }, r = 1; r < o; ++r) e = a[r], Vh(e).forEach(i);
                if (void 0 !== n) throw n;
                return t
            },
            Zh = Array.prototype.forEach,
            Jh = Object.create,
            Qh = function(t, e) {
                var n;
                for (n in t) e[n] = t[n]
            },
            Kh = function(t) {
                var e = Jh(null);
                return Zh.call(arguments, (function(t) {
                    Bh(t) && Qh(Object(t), e)
                })), e
            },
            tp = function(t) {
                return "function" == typeof t
            },
            ep = "razdwatrzy",
            np = String.prototype.indexOf,
            rp = "function" == typeof ep.contains && !0 === ep.contains("dwa") && !1 === ep.contains("foo") ? String.prototype.contains : function(t) {
                return np.call(this, t, arguments[1]) > -1
            },
            ip = n((function(t) {
                (t.exports = function(t, e) {
                    var n, r, i, a, o;
                    return arguments.length < 2 || "string" != typeof t ? (a = e, e = t, t = null) : a = arguments[2], null == t ? (n = i = !0, r = !1) : (n = rp.call(t, "c"), r = rp.call(t, "e"), i = rp.call(t, "w")), o = {
                        value: e,
                        configurable: n,
                        enumerable: r,
                        writable: i
                    }, a ? Gh(Kh(a), o) : o
                }).gs = function(t, e, n) {
                    var r, i, a, o;
                    return "string" != typeof t ? (a = n, n = e, e = t, t = null) : a = arguments[3], null == e ? e = void 0 : tp(e) ? null == n ? n = void 0 : tp(n) || (a = n, n = void 0) : (a = e, e = n = void 0), null == t ? (r = !0, i = !1) : (r = rp.call(t, "c"), i = rp.call(t, "e")), o = {
                        get: e,
                        set: n,
                        configurable: r,
                        enumerable: i
                    }, a ? Gh(Kh(a), o) : o
                }
            })),
            ap = function(t) {
                if (! function(t) {
                        return t && ("symbol" == typeof t || "Symbol" === t["@@toStringTag"]) || !1
                    }(t)) throw new TypeError(t + " is not a symbol");
                return t
            },
            op = Object.create,
            sp = Object.defineProperties,
            cp = Object.defineProperty,
            lp = Object.prototype,
            fp = op(null),
            up = (Ih = op(null), function(t) {
                for (var e, n = 0; Ih[t + (n || "")];) ++n;
                return Ih[t += n || ""] = !0, cp(lp, e = "@@" + t, ip.gs(null, (function(t) {
                    cp(this, e, ip(t))
                }))), e
            });
        qh = function t(e) {
            if (this instanceof qh) throw new TypeError("TypeError: Symbol is not a constructor");
            return t()
        };
        var dp = Yh = function t(e) {
            var n;
            if (this instanceof t) throw new TypeError("TypeError: Symbol is not a constructor");
            return n = op(qh.prototype), e = void 0 === e ? "" : String(e), sp(n, {
                __description__: ip("", e),
                __name__: ip("", up(e))
            })
        };
        sp(Yh, {
            for: ip((function(t) {
                return fp[t] ? fp[t] : fp[t] = Yh(String(t))
            })),
            keyFor: ip((function(t) {
                var e;
                for (e in ap(t), fp)
                    if (fp[e] === t) return e
            })),
            hasInstance: ip("", Yh("hasInstance")),
            isConcatSpreadable: ip("", Yh("isConcatSpreadable")),
            iterator: ip("", Yh("iterator")),
            match: ip("", Yh("match")),
            replace: ip("", Yh("replace")),
            search: ip("", Yh("search")),
            species: ip("", Yh("species")),
            split: ip("", Yh("split")),
            toPrimitive: ip("", Yh("toPrimitive")),
            toStringTag: ip("", Yh("toStringTag")),
            unscopables: ip("", Yh("unscopables"))
        }), sp(qh.prototype, {
            constructor: ip(Yh),
            toString: ip("", (function() {
                return this.__name__
            }))
        }), sp(Yh.prototype, {
            toString: ip((function() {
                return "Symbol (" + ap(this).__description__ + ")"
            })),
            valueOf: ip((function() {
                return ap(this)
            }))
        }), cp(Yh.prototype, Yh.toPrimitive, ip("", (function() {
            return ap(this)
        }))), cp(Yh.prototype, Yh.toStringTag, ip("c", "Symbol")), cp(qh.prototype, Yh.toPrimitive, ip("c", Yh.prototype[Yh.toPrimitive])), cp(qh.prototype, Yh.toStringTag, ip("c", Yh.prototype[Yh.toStringTag]));
        var hp = function() {
                var t;
                if ("function" != typeof Symbol) return !1;
                t = Symbol("test symbol");
                try {
                    String(t)
                } catch (t) {
                    return !1
                }
                return "symbol" == typeof Symbol.iterator || "object" == typeof Symbol.isConcatSpreadable && ("object" == typeof Symbol.iterator && ("object" == typeof Symbol.toPrimitive && ("object" == typeof Symbol.toStringTag && "object" == typeof Symbol.unscopables)))
            }() ? Symbol : dp,
            pp = bp,
            _p = function(t) {
                var e, n = t.length;
                return i(), r[gp] = !0, r;

                function r() {
                    return t.length !== n ? (n = t.length, i(), !0) : e()
                }

                function i() {
                    for (var n = [], r = 0; r < t.length; r++) ! function(e) {
                        n[e] = function() {
                            return t[e]
                        }
                    }(r);
                    e = bp(n)
                }
            },
            gp = hp("see-change-array");

        function bp(t) {
            for (var e = [], n = 0; n < t.length; n++) e[n] = t[n]();
            return function() {
                for (var n = !1, r = 0; r < t.length; r++) {
                    var i = t[r],
                        a = i();
                    if (i[gp]) a && (n = !0, e[r] = a);
                    else {
                        var o = e[r];
                        a !== o && (n = !0, e[r] = a)
                    }
                }
                return n
            }
        }
        pp.array = _p;
        var mp = {
                enabled: !0,
                loop: !0,
                graph: !0,
                graph_height: 6,
                scrubber_height: 3.25,
                scrubber_snap: !1,
                axis_nice_x: !1,
                axis_nice_y: !1,
                date_format_display: "",
                margin: {
                    top: .75,
                    left: .75,
                    right: 0,
                    bottom: 0
                },
                playback_button: {
                    margin_right: 1.25,
                    button_size: 1.25,
                    button_color: "#333333",
                    icon_size: 1.25,
                    icon_color: "#FFFFFF"
                },
                duration: 30,
                duration_tween: 2,
                duration_wait_at_end: 0,
                play_on_load: !0,
                playing: !0,
                playback_has_saved_range: !1,
                playback_has_saved_position: !1,
                playback_range: [0, 1],
                playback_position: 0,
                color_background: "#F2F2F2",
                color_axes: "#555555",
                curve: !1,
                _prevent_play_on_load: !1
            },
            yp = {
                getOrdinal: function() {
                    return !1
                },
                getOrdinalKeys: function() {
                    return []
                },
                getOrdinalValue: function(t, e) {
                    return 0
                },
                getMode: function() {
                    return "rate"
                },
                getLineColorCategorical: function() {
                    return "#000000"
                },
                getLineColorContinuous: function() {
                    return "#000000"
                },
                getCategorical: function() {
                    return !1
                },
                getData: function() {
                    return []
                },
                getDatumStartTime: function(t) {
                    return new Date
                },
                getDatumEndTime: function(t) {
                    return new Date
                },
                getDatumCount: function(t) {
                    return 1
                },
                getDatumCategory: function(t) {
                    return ""
                },
                getDatumSource: function(t) {
                    return null
                },
                getDatumTarget: function(t) {
                    return null
                },
                getPadding: function() {
                    return 0
                },
                getInterval: function(t, e) {
                    return "day"
                },
                isCategorySelected: function(t) {
                    return !1
                },
                formatNumber: function(t) {
                    return String(Number(t))
                },
                shouldUpdate: function(t) {
                    return !0
                },
                encodeProgress: function(t) {
                    return t
                },
                decodeProgress: function(t) {
                    return t
                }
            },
            vp = {
                year: fh,
                month: lh,
                week: ch,
                day: oh,
                hour: ah,
                minute: ih,
                second: rh
            };

        function wp(t) {
            var e = t.getMode(),
                n = Object.create({}),
                r = [],
                i = t.getCategorical(),
                a = t.getData();
            if (!a || !a.length) return {
                bins_by_category: {
                    "": []
                },
                bins_all: []
            };
            for (var o = 0; o < a.length; o++) {
                var s = a[o],
                    c = +t.getDatumStartTime(s),
                    l = +t.getDatumEndTime(s);
                if (c > l) {
                    var f = c;
                    c = l, l = f
                }
                s._tl_start_ms = c, s._tl_end_ms = l, s._tl_count = t.getDatumCount(s)
            }
            a.sort((function(t, e) {
                return t._tl_start_ms - e._tl_start_ms
            }));
            var u = a[0]._tl_start_ms,
                d = _i(a, (function(t) {
                    return +t._tl_end_ms
                })),
                h = function(t) {
                    if ("string" != typeof t) return t;
                    return vp[t]
                }(t.getInterval(u, d));
            if (!h) return {
                bins_by_category: {
                    "": []
                },
                bins_all: []
            };
            for (o = 0; o < a.length; o++) {
                (s = a[o])._tl_bin_sid = h.count(u, s._tl_start_ms), s._tl_bin_eid = h.count(u, s._tl_end_ms)
            }
            for (o = 0; o < a.length; o++) {
                s = a[o];
                if (!t.getDatumSource(s)) {
                    for (var p, _ = s; p = t.getDatumTarget(_);) _ = p;
                    for (var g = s._tl_bin_sid, b = _._tl_bin_eid, m = i && t.getDatumCategory(s) || "", y = n[m] || (n[m] = []); y.length <= b;) y[y.length] = 0;
                    for (; r.length <= b;) r[r.length] = 0;
                    for (var v = s, w = t.getDatumTarget(v), x = O(w), M = "total" !== e, k = "total" === e, S = !0, A = g; A <= b; A++) {
                        for (w && A >= x && k && (y[A] -= v._tl_count, r[A] -= v._tl_count); w && A >= x;) v = w, x = O(w = t.getDatumTarget(v)), S = !0;
                        S && (y[A] += v._tl_count, r[A] += v._tl_count), S = M
                    }
                }
            }
            for (var T in n)
                for (var C = n[T]; C.length < r.length;) C[C.length] = 0;
            if ("total" === e)
                for (var T in r = xp(r), n) n[T] = xp(n[T]);
            var N = Object.keys(n);
            return {
                min_value: N.reduce((function(t, e) {
                    return Math.min(t, gi(n[e]))
                }), 1 / 0),
                max_value: N.reduce((function(t, e) {
                    return Math.max(t, _i(n[e]))
                }), -1 / 0),
                min_time: u,
                max_time: d,
                count: h.count(u, d),
                bins_by_category: n,
                bins_all: r,
                categories: N
            };

            function O(t) {
                return t ? t._tl_bin_sid : a.length + 1
            }
        }

        function xp(t) {
            for (var e = 0, n = 0; n < t.length; n++) e += t[n], t[n] = e;
            return t
        }
        var Mp = function(t) {
                return 1 === t ? t : 1 - Math.pow(2, -10 * t)
            },
            kp = {
                size: 1792,
                path: "M1576 927l-1328 738q-23 13-39.5 3t-16.5-36v-1472q0-26 16.5-36t39.5 3l1328 738q23 13 23 31t-23 31z"
            },
            Sp = {
                size: 512,
                path: "M144 479H48c-26.5 0-48-21.5-48-48V79c0-26.5 21.5-48 48-48h96c26.5 0 48 21.5 48 48v352c0 26.5-21.5 48-48 48zm304-48V79c0-26.5-21.5-48-48-48h-96c-26.5 0-48 21.5-48 48v352c0 26.5 21.5 48 48 48h96c26.5 0 48-21.5 48-48z"
            },
            Ap = {
                size: 512,
                path: "M256.455 8c66.269.119 126.437 26.233 170.859 68.685l35.715-35.715C478.149 25.851 504 36.559 504 57.941V192c0 13.255-10.745 24-24 24H345.941c-21.382 0-32.09-25.851-16.971-40.971l41.75-41.75c-30.864-28.899-70.801-44.907-113.23-45.273-92.398-.798-170.283 73.977-169.484 169.442C88.764 348.009 162.184 424 256 424c41.127 0 79.997-14.678 110.629-41.556 4.743-4.161 11.906-3.908 16.368.553l39.662 39.662c4.872 4.872 4.631 12.815-.482 17.433C378.202 479.813 319.926 504 256 504 119.034 504 8.001 392.967 8 256.002 7.999 119.193 119.646 7.755 256.455 8z"
            },
            Tp = [512, "M256 8C119.043 8 8 119.083 8 256c0 136.997 111.043 248 248 248s248-111.003 248-248C504 119.083 392.957 8 256 8zm0 110c23.196 0 42 18.804 42 42s-18.804 42-42 42-42-18.804-42-42 18.804-42 42-42zm56 254c0 6.627-5.373 12-12 12h-88c-6.627 0-12-5.373-12-12v-24c0-6.627 5.373-12 12-12h12v-64h-12c-6.627 0-12-5.373-12-12v-24c0-6.627 5.373-12 12-12h64c6.627 0 12 5.373 12 12v100h12c6.627 0 12 5.373 12 12v24z"],
            Cp = [512, "M256 8C119 8 8 119 8 256s111 248 248 248 248-111 248-248S393 8 256 8zm121.6 313.1c4.7 4.7 4.7 12.3 0 17L338 377.6c-4.7 4.7-12.3 4.7-17 0L256 312l-65.1 65.6c-4.7 4.7-12.3 4.7-17 0L134.4 338c-4.7-4.7-4.7-12.3 0-17l65.6-65-65.6-65.1c-4.7-4.7-4.7-12.3 0-17l39.6-39.6c4.7-4.7 12.3-4.7 17 0l65 65.7 65.1-65.6c4.7-4.7 12.3-4.7 17 0l39.6 39.6c4.7 4.7 4.7 12.3 0 17L312 256l65.6 65.1z"];

        function Np(t, e) {
            var n = e / t[0];
            return t[1].replace(/-?\d+(?:\.\d+)?/g, (function(t) {
                return parseInt(t, 10) * n
            }))
        }
        var Op = document.createElement("style");
        Op.innerHTML = "\n\t.flourish-timeline {\n\t\tpointer-events: none;\n\t\t-webkit-user-select: none;\n\t\t-moz-user-select: none;\n\t\tuser-select: none;\n\t}\n\n\t.flourish-timeline .tl-interaction-box,\n\t.flourish-timeline .tl-playback-button {\n\t\tpointer-events: all;\n\t}\n\n\t.tl-interaction-box {\n\t\tvisibility: hidden;\n\t\tcursor: pointer;\n\t}\n\n\t.tl-playback-button {\n\t\tcursor: pointer;\n\t}\n\n\t.tl-playback-button path {\n\t\tfill: #FFF;\n\t}\n\n\t.tl-axis-bottom .tick:last-of-type text {\n\t\ttext-anchor: end;\n\t}\n\n\t.flourish-timeline-info {\n\t\tdisplay: none;\n\t\theight: 2rem;\n\t\tfont-size: 1rem;\n\t\talign-items: center;\n\t\tjustify-content: flex-start;\n\t\tcolor: #666;\n\t}\n\n\t.flourish-timeline-info.enabled {\n\t\tdisplay: flex;\n\t}\n\n\t.flourish-timeline-info svg {\n\t\tmargin-right: 0.35rem;\n\t}\n\n\t.flourish-timeline-info .tl-info-icon {\n\t\tflex-shrink: 0;\n\t}\n\n\t.flourish-timeline-info .tl-info-icon,\n\t.flourish-timeline-info .tl-info-text,\n\t.flourish-timeline-info .tl-info-clear {\n\t\topacity: 0;\n\t\ttransition: opacity 0.3s;\n\t}\n\n\t.flourish-timeline-info.active-info .tl-info-icon,\n\t.flourish-timeline-info.active-info .tl-info-text,\n\t.flourish-timeline-info.active-clear .tl-info-clear {\n\t\topacity: 1;\n\t}\n\n\t.flourish-timeline-info .tl-info-clear {\n\t\tcolor: #f66;\n\t\tcursor: pointer;\n\t\tborder-bottom: 1px solid transparent;\n\t\tmargin-left: auto;\n\t\ttext-align: right;\n\t\tposition: relative;\n\t\tmargin-right: 1rem;\n\t}\n\n\t.flourish-timeline-info .tl-info-clear:hover {\n\t\tborder-bottom-color: #f66;\n\t}\n\n\t.flourish-timeline-info .tl-info-clear > svg {\n\t\tposition: absolute;\n\t\ttop: 3px;\n\t\tright: -1.5rem;\n\t}\n", document.body.appendChild(Op);
        var Ep, zp, Fp, Pp, Dp, jp, Lp, Hp = "story_editor" === window.Flourish.environment || "sdk" === window.Flourish.environment,
            Up = function(t, e, n) {
                var r, i = this;

                function a(t) {
                    if (window.requestAnimationFrame(a), r) {
                        var e = t - r;
                        this.tick(e / 1e3)
                    }
                    r = t
                }
                console.log(arguments), n.getDatumStartTime && !n.getDatumEndTime && (n.getDatumEndTime = n.getDatumStartTime), this.container = t || document.body, this.state = Object.assign(e, Object.assign(mp, e)), this.options = Object.assign({}, yp, n), this.migrateState(), this.is_ordinal = !!this.options.getOrdinal(), Object.defineProperties(this.state, {
                    _instance: {
                        enumerable: !1,
                        value: this
                    }
                }), this.svg = ai(this.container).append("svg").classed("flourish-timeline", !0), this.layer_back = this.svg.append("g").classed("tl-layer-back", !0), this.layer_main = this.svg.append("g").classed("tl-layer-main", !0), this.layer_fore = this.svg.append("g").classed("tl-layer-fore", !0), this.interaction_box = this.svg.append("rect").classed("tl-interaction-box", !0), this.initInfoBox(), this.layer_back.append("rect").classed("tl-background", !0), this.x_scale = ph(), this.y_scale = Qd(), this.x_scale_cursor = Qd(), this.y_scale_cursor = Qd(), this.axis_bottom = Ec(this.x_scale), this.axis_bottom_group = this.layer_fore.append("g").classed("tl-axis-bottom", !0), this.axis_left = zc(this.y_scale), this.axis_left_group = this.layer_fore.append("g").classed("tl-axis-left", !0), this.range_box = this.layer_fore.append("g").classed("tl-range-box", !0), this.range_box_rect = this.range_box.selectAll("rect").data([0, 1]).enter().append("rect"), this.range_box_bars = this.range_box.selectAll("line").data([0, 1]).enter().append("line"), this.scrub_bar = this.layer_fore.append("line").classed("tl-scrub-bar", !0).attr("stroke", this.state.color_axes), this.scrub_node = this.layer_fore.append("path").classed("tl-scrub-node", !0).attr("d", "M 0 0 L -5 -7 L 5 -7 z").attr("fill", this.state.color_axes), this.progress = 0, this.progress_encoded = null, this.progress_is_animating = !1, this.progress_animation_source = 0, this.progress_animation_target = 1, this.progress_animation_amount = 0, this.progress_animation_duration = 2, this.loop_block_playback = !1, this.playback_group = this.svg.append("g").classed("tl-playback-button", !0), this.playback_group.node().addEventListener("click", this.onClickPlaybackButton.bind(this)), this.playback_button = this.playback_group.append("circle").attr("r", 16), this.playback_icon = this.playback_group.append("path"), this.defs = this.svg.append("defs"), this.mask = this.defs.append("clipPath").attr("id", "main-mask").append("rect"), this.layer_main.attr("clip-path", "url(#main-mask)"), document.addEventListener("touchstart", {}), this.is_dragging = !1, this.touches = Lh(window, {
                    preventSimulated: !1,
                    target: this.svg.node(),
                    filtered: !0
                }), this.touches.on("start", this.onTouchStart.bind(this)), this.touches.on("move", this.onTouchMove.bind(this)), this.touches.on("end", this.onTouchEnd.bind(this)), this.updateRemScale(), this.has_updated = !1, this.update(), this.shouldDrawMask = pp([function() {
                    return i.progress
                }, function() {
                    return i.state.axis_nice_x
                }, function() {
                    return i.state.axis_nice_y
                }, function() {
                    return i.is_ordinal
                }, function() {
                    return i.is_dragging
                }, function() {
                    return i.state.graph
                }, function() {
                    return i.state.graph_height
                }, function() {
                    return i.bin_results && i.bin_results.min_time
                }, function() {
                    return i.bin_results && i.bin_results.max_time
                }, function() {
                    return i.bin_results && i.bin_results.keys_string
                }]), a = a.bind(this), window.requestAnimationFrame(a)
            };

        function Rp(t) {
            return JSON.parse(JSON.stringify(t))
        }

        function Yp(t) {
            var e = [];
            Gn.annotations_enabled && (e = Gn.annotations_content.split("\n").filter((function(t) {
                return "" != t && void 0 !== t && t.split("::").length > 1
            })).map((function(t) {
                return {
                    text: t.split("::")[0].trim(),
                    value: $l(t.split("::")[1].trim())
                }
            })));
            var n = ai("#annotations").attr("clip-path", "url(#plot-clip)").style("display", Gn.annotations_enabled ? "" : "none").selectAll(".annotation").data(e);
            n.exit().remove();
            var r = n.enter().append("g").attr("class", "annotation");
            r.append("line").attr("y1", 0).attr("x1", 0).attr("x2", 0);
            var i = r.append("text").attr("transform", "rotate(90)");
            i.append("tspan").attr("class", "bg"), i.append("tspan").attr("class", "fg");
            var a = n.merge(r),
                o = 0,
                s = "-0.4em";
            "middle" == Gn.annotations_align && (o = t / 2), "end" == Gn.annotations_align && (o = t), "on" == Gn.annotations_offset && (s = "0.25em"), "below" == Gn.annotations_offset && (s = "1.2em"), a.attr("transform", (function(t) {
                return "translate(" + o_(t.value) + ", 0)"
            })), a.select("line").attr("stroke-width", Gn.annotations_line_width).attr("stroke", Gn.annotations_line_color || Gn.layout.font_color).attr("opacity", Gn.annotations_line_opacity).attr("stroke-dasharray", Gn.annotations_line_dash + " " + Gn.annotations_line_dash).attr("y2", t), a.select("text").attr("y", s).attr("fill", Gn.annotations_text_color).style("font-weight", Gn.annotations_text_weight).style("font-size", Gn.annotations_text_size + "rem"), a.select("tspan.bg").style("stroke-width", "on" == Gn.annotations_offset ? "0.5em" : "0.2em").attr("text-anchor", Gn.annotations_align).attr("x", o).text((function(t) {
                return t.text
            })).style("stroke", Gn.layout.background_color_enabled ? Gn.layout.background_color : "#ffffff"), a.select("tspan.fg").attr("text-anchor", Gn.annotations_align).attr("x", o).text((function(t) {
                return t.text
            }))
        }

        function qp() {
            var t = Ep.getProgress();
            zp !== t ? (A_(), zp = t, window.requestAnimationFrame(qp)) : window.requestAnimationFrame(qp)
        }
        Up.prototype.initInfoBox = function() {
            var t = this;
            if (Hp) {
                this.updateRemScale();
                var e = .875 * this.rem;
                this.info_box = ai(this.container).append("div").classed("flourish-timeline-info", !0).classed("enabled", Hp), this.info_box_icon = this.info_box.append("svg").classed("tl-info-icon", !0).attr("width", e).attr("height", e).append("path").attr("fill", "#666").attr("d", Np(Tp, e)), this.info_box_text = this.info_box.append("div").classed("tl-info-text", !0), this.info_box_clear = this.info_box.append("div").classed("tl-info-clear", !0).text("Reset timeline state").on("click", (function() {
                    t.state.playback_has_saved_position = !1, t.state.playback_has_saved_range = !1, t.drawInfoBox(), t.drawRangeBox()
                })), this.info_box_clear.append("svg").attr("width", e).attr("height", e).append("path").attr("fill", "#f66").attr("d", function(t) {
                    return Np(Cp, t)
                }(e))
            }
        }, Up.prototype.isEnabled = function() {
            return this.state.enabled && (!this.bin_results || this.bin_results.bins_all.length > 1)
        }, Up.prototype.getProgress = function() {
            var t = this.state.loop * this.state.duration_wait_at_end / this.state.duration,
                e = this.progress;
            return e -= Math.max(0, Math.min(this.progress - 1, t))
        }, Up.prototype.getHeight = function() {
            return this.height
        }, Up.prototype.update = function() {
            this.updateRemScale(), this.migrateState(), this.has_updated && !this.state._prevent_play_on_load && (this.state.playing = !!this.state.play_on_load, this.state._prevent_play_on_load = !0), this.has_updated = !0, this.bin_results && !this.options.shouldUpdate(this) || (this.is_ordinal = !!this.options.getOrdinal(), this.bin_results = this.state.enabled && (this.is_ordinal ? function(t) {
                var e = t.getMode(),
                    n = Object.create({}),
                    r = [],
                    i = t.getCategorical(),
                    a = t.getData();
                if (!a || !a.length) return {
                    bins_by_category: {
                        "": []
                    },
                    bins_all: []
                };
                for (var o = t.getOrdinalKeys(), s = 0; s < a.length; s++) {
                    for (var c = a[s], l = i && t.getDatumCategory(c) || "", f = n[l] || (n[l] = []); f.length < o.length;) f[f.length] = 0;
                    for (; r.length < o.length;) r[r.length] = 0;
                    for (var u = 0; u < o.length; u++) {
                        var d = t.getOrdinalValue(c, o[u], u) || 0;
                        f[u] += d, r[u] += d
                    }
                }
                for (var h in n)
                    for (f = n[h]; f.length < r.length;) f[f.length] = 0;
                if ("total" === e)
                    for (var h in r = xp(r), n) n[h] = xp(n[h]);
                var p = Object.keys(n);
                return {
                    min_value: p.reduce((function(t, e) {
                        return Math.min(t, gi(n[e]))
                    }), 1 / 0),
                    max_value: p.reduce((function(t, e) {
                        return Math.max(t, _i(n[e]))
                    }), -1 / 0),
                    keys: o,
                    keys_string: o.join("ÿ"),
                    count: o.length,
                    bins_by_category: n,
                    bins_all: r,
                    categories: p
                }
            }(this.options) : wp(this.options))), this.isEnabled() ? (this.svg.style("display", "block"), this.updateDimensions(), this.updateAxes(), null !== this.progress_encoded && (this.progress = this.options.decodeProgress.call(this, this.progress_encoded)), this.state.playback_has_saved_position && (this.progress_is_animating = !0, this.progress_animation_source = this.progress, this.progress_animation_target = this.options.decodeProgress.call(this, this.state.playback_position), this.progress_animation_amount = 0, this.progress_animation_duration = this.state.duration_tween), this.scrub_bar.attr("stroke", this.state.color_axes), this.draw()) : this.svg.style("display", "none")
        }, Up.prototype.updateDimensions = function() {
            var t = this.container.getBoundingClientRect();
            return this.width = Math.floor(t.width), this.height = this.rem * (this.state.graph ? this.state.graph_height : this.state.scrubber_height), this.svg.attr("width", this.width + "px"), this.svg.attr("height", this.getHeight() + "px"), t
        }, Up.prototype.updateAxes = function() {
            var t = this,
                e = this.width - this.rem * this.state.margin.right - 1,
                n = this.rem * (2 * this.state.playback_button.button_size + this.state.playback_button.margin_right + this.state.margin.left);
            if (this.y_scale = Qd().range([this.height - this.rem * this.state.margin.bottom - 18, this.rem * this.state.margin.top]).domain([0, this.bin_results.max_value || 0]), this.state.graph && (n += this.drawAndMeasureAxisY().width), this.is_ordinal) {
                var r = (this.bin_results.keys || []).map((function(r, i) {
                    var a = i / (t.bin_results.keys.length - 1);
                    return n + (e - n) * a
                }));
                this.x_scale = function t() {
                    var e = new Map,
                        n = [],
                        r = [],
                        i = Yd;

                    function a(t) {
                        var a = t + "",
                            o = e.get(a);
                        if (!o) {
                            if (i !== Yd) return i;
                            e.set(a, o = n.push(t))
                        }
                        return r[(o - 1) % r.length]
                    }
                    return a.domain = function(t) {
                        if (!arguments.length) return n.slice();
                        n = [], e = new Map;
                        for (var r = 0, i = t; r < i.length; r += 1) {
                            var o = i[r],
                                s = o + "";
                            e.has(s) || e.set(s, n.push(o))
                        }
                        return a
                    }, a.range = function(t) {
                        return arguments.length ? (r = Array.from(t), a) : r.slice()
                    }, a.unknown = function(t) {
                        return arguments.length ? (i = t, a) : i
                    }, a.copy = function() {
                        return t(n, r).unknown(i)
                    }, Rd.apply(a, arguments), a
                }().domain(this.bin_results.keys || []).range(r)
            } else this.x_scale = ph().range([n, e]).domain([this.bin_results.min_time, this.bin_results.max_time]);
            this.y_scale_chart = this.y_scale.copy().domain([0, 1]), this.x_scale_chart = Qd().range([n, e]).domain([0, 1]), this.state.axis_nice_y && (this.y_scale = this.y_scale.nice()), this.is_ordinal || this.state.axis_nice_x && (this.x_scale = this.x_scale.nice());
            var i = this.x_scale.range(),
                a = i.length - 1;
            this.x_scale_cursor = Qd().range([0, 1]).domain([this.is_ordinal ? i[0] : this.x_scale(this.bin_results.min_time), this.is_ordinal ? i[a] : this.x_scale(this.bin_results.max_time)])
        }, Up.prototype.draw = function() {
            this.updateRemScale(), this.state.graph ? (this.drawGraph(), this.drawAxisX(), this.drawAxisY(), this.drawMask()) : (this.drawScrubber(), this.drawAxisX()), this.drawPlaybackButton(), this.drawRangeBox(), this.drawInfoBox()
        }, Up.prototype.tick = function(t) {
            if (this.isEnabled()) {
                if (this.progress_is_animating) {
                    var e = this.progress_animation_source,
                        n = this.progress_animation_target,
                        r = this.progress_animation_amount += t / this.progress_animation_duration;
                    this.progress = e + (n - e) * Mp(r), this.progress_is_animating = r < 1
                } else this.progress += !this.is_dragging * !this.loop_block_playback * this.state.playing * t / this.state.duration, this.state.playing && !this.is_dragging && !this.state.loop && this.progress >= 1 && (this.progress = 1, this.loop_block_playback = !0, this.drawPlaybackButton()), this.progress = this.clampedProgress(this.progress, !this.is_dragging);
                this.progress_encoded = this.options.encodeProgress.call(this, this.progress), this.drawMask()
            }
        }, Up.prototype.onClickPlaybackButton = function(t) {
            this.state.playing = !this.state.playing, this.loop_block_playback = !1, !this.state.loop && this.state.playing && this.progress >= 1 && (this.progress = 0), this.state.playing && (this.state.playback_has_saved_position = !1), this.drawPlaybackButton(), this.drawInfoBox(), t.preventDefault(), t.stopPropagation()
        }, Up.prototype.onTouchStart = function(t, e) {
            Nh(t.target, this.interaction_box.node()) && (document.querySelector(".fl-annotations.is-editing") || (this.is_dragging = !0, this.updateDragPosition(e[0], !0), this.drawMask(), t.preventDefault(), t.stopPropagation()))
        }, Up.prototype.onTouchMove = function(t, e) {
            this.is_dragging && (this.updateDragPosition(e[0], !1), this.drawMask(), t.preventDefault(), t.stopPropagation())
        }, Up.prototype.onTouchEnd = function(t, e) {
            this.is_dragging && (this.is_dragging = !1, this.updateDragPosition(e[0], !1), this.drawMask(), t.preventDefault(), t.stopPropagation())
        }, Up.prototype.updateDragPosition = function(t, e) {
            if (t = Math.max(t, this.x_scale_chart(0)), t = Math.min(t, this.x_scale_chart(1)), this.progress = this.x_scale_cursor(t), this.loop_block_playback = !1, this.state.scrubber_snap) {
                var n = this.bin_results.count - 1;
                this.progress = Math.round(this.progress * n) / n
            }
            if (this.progress_is_animating = !1, Hp) {
                if (this.state.playing) {
                    var r = this.state.playback_range;
                    e && (r[0] = Rp(this.options.encodeProgress.call(this, this.progress))), r[1] = Rp(this.options.encodeProgress.call(this, this.progress)), this.state.playback_has_saved_range = !0, this.state.playback_has_saved_position = !1
                } else this.state.playback_position = Rp(this.options.encodeProgress.call(this, this.progress)), this.state.playback_has_saved_range = !1, this.state.playback_has_saved_position = !0;
                this.drawRangeBox(), this.drawInfoBox()
            } else this.progress = this.clampedProgress(this.progress, !1)
        }, Up.prototype.updateRemScale = function() {
            this.rem = parseFloat(getComputedStyle(document.documentElement).fontSize)
        }, Up.prototype.drawGraph = function() {
            var t = this,
                e = this.x_scale_chart(0),
                n = this.x_scale_chart(1) - e,
                r = this.y_scale_chart(1),
                i = this.y_scale_chart(0) - r;
            this.axis_left_group.style("visibility", "visible"), this.layer_back.select(".tl-background").style("fill", this.state.color_background).style("visibility", "visible").attr("x", e).attr("y", r).attr("width", n).attr("height", Math.max(0, i)), this.interaction_box.attr("x", e).attr("y", r).attr("width", n).attr("height", Math.max(0, i)), this.scrub_bar.attr("x1", 0).attr("x2", 0).attr("y1", r).attr("y2", r + i);
            var a = this.options.getCategorical();
            if (this.is_ordinal) l = Sh().curve(this.state.curve ? Ch : xh).x((function(e, n) {
                return t.x_scale(t.bin_results.keys[n])
            })).y((function(e) {
                return t.y_scale(e)
            }));
            else var o = this.bin_results.max_time - this.bin_results.min_time,
                s = +this.bin_results.min_time,
                c = this.bin_results.count,
                l = Sh().curve(this.state.curve ? Ch : xh).x((function(e, n) {
                    return t.x_scale(s + o * n / c)
                })).y((function(e) {
                    return t.y_scale(e)
                }));
            for (var f = function(t, e) {
                    return e ? Object.keys(t.bins_by_category).map((function(e) {
                        return {
                            category: e,
                            values: t.bins_by_category[e]
                        }
                    })) : [{
                        category: "",
                        values: t.bins_all
                    }]
                }(this.bin_results, a), u = {}, d = 0; d < f.length; d++) {
                var h = f[d].category;
                u[h] = !!this.options.isCategorySelected(h)
            }
            var p = this.layer_main.selectAll(".tl-line").data(f, (function(t) {
                return t.category
            }));
            p.enter().append("path").classed("tl-line", !0).attr("data-category", (function(t) {
                return t.category
            })).merge(p).sort((function(t, e) {
                return +u[t.category] - +u[e.category]
            })).attr("d", (function(t) {
                return l(t.values)
            })).style("fill", "none").style("opacity", (function(t) {
                return u[t.category] ? 1 : .15
            })).style("stroke-width", 2).style("stroke", a ? this.options.getLineColorCategorical : this.options.getLineColorContinuous), p.exit().remove()
        }, Up.prototype.drawAxisX = function() {
            if (this.axis_bottom.scale(this.x_scale.copy()).ticks(this.width / 100), this.is_ordinal) this.axis_bottom.tickFormat(null);
            else {
                var t = this.x_scale.tickFormat(this.width / 100, this.state.date_format_display || null);
                this.axis_bottom.tickFormat(t)
            }
            var e = -1 / 0;
            this.axis_bottom(this.axis_bottom_group), this.axis_bottom_group.attr("transform", "translate(0, " + this.y_scale_chart(0) + ")").style("color", this.state.color_axes).selectAll(".tick").each((function() {
                var t = ai(this),
                    n = t.select("text"),
                    r = n.node().getBoundingClientRect();
                e > r.left - 8 ? (n.style("visibility", "hidden"), t.select("line").attr("y2", 3).style("opacity", .5)) : 0 !== r.left && 0 !== r.right && (n.style("visibility", "visible"), t.select("line").attr("y2", 6).style("opacity", 1), e = r.right)
            }))
        }, Up.prototype.drawAxisY = function() {
            this.isEnabled() && (this.axis_left.scale(this.y_scale.copy()).ticks(this.height / 25).tickFormat(this.options.formatNumber), this.axis_left(this.axis_left_group), this.axis_left_group.attr("transform", "translate(" + this.x_scale_chart(0) + ", 0)").style("color", this.state.color_axes))
        }, Up.prototype.drawAndMeasureAxisY = function() {
            return this.axis_left.scale(this.y_scale.copy()).ticks(this.height / 25).tickFormat(this.options.formatNumber), this.axis_left(this.axis_left_group), this.axis_left_group.node().getBoundingClientRect()
        }, Up.prototype.drawRangeBox = function() {
            if (!this.state.playback_has_saved_range) return this.range_box.style("visibility", "hidden");
            var t = this.state.playback_range,
                e = this.options.decodeProgress.call(this, t[0]),
                n = this.options.decodeProgress.call(this, t[1]),
                r = Math.min(e, n),
                i = Math.max(e, n),
                a = this.x_scale.domain(),
                o = this.is_ordinal ? this.x_scale(a[0]) : this.x_scale(this.bin_results.min_time),
                s = this.is_ordinal ? this.x_scale(a[a.length - 1]) : this.x_scale(this.bin_results.max_time),
                c = this.x_scale_chart(0),
                l = this.x_scale_chart(1),
                f = o + (s - o) * r,
                u = o + (s - o) * i,
                d = this.y_scale_chart(1),
                h = this.y_scale_chart(0) - d;
            this.range_box.style("visibility", "visible"), this.range_box_rect.attr("fill", "rgba(80, 80, 80, 0.35)").attr("x", (function(t) {
                return t ? c : u
            })).attr("width", (function(t) {
                return t ? f - c : l - u
            })).attr("y", d).attr("height", Math.max(0, h))
        }, Up.prototype.drawScrubber = function() {
            var t = this.x_scale_chart(0),
                e = this.x_scale_chart(1) - t,
                n = this.y_scale_chart(1),
                r = this.y_scale_chart(0) - n;
            this.layer_main.selectAll(".tl-line").remove(), this.axis_left_group.style("visibility", "hidden"), this.scrub_bar.attr("visibility", "hidden"), this.layer_back.select(".tl-background").style("fill", "transparent").style("visibility", "visible").attr("x", t).attr("y", n).attr("width", e).attr("height", Math.max(0, r)), this.interaction_box.attr("x", t).attr("y", n).attr("width", e).attr("height", Math.max(0, this.height - n))
        }, Up.prototype.drawInfoBox = function() {
            if (Hp) {
                this.info_box.style("margin-left", this.x_scale_chart(0) + "px");
                var t = !1,
                    e = !1;
                this.state.playback_has_saved_range ? (this.info_box_text.text("This slide will only play the above portion of the timeline."), t = e = !0) : this.state.playback_has_saved_position && (this.info_box_text.text("This slide will start paused at the current position in the timeline."), t = e = !0), this.info_box.classed("active-info", e), this.info_box.classed("active-clear", t)
            }
        }, Up.prototype.drawMask = function() {
            if (!this.shouldDrawMask || this.shouldDrawMask()) {
                var t = this.x_scale.domain(),
                    e = this.x_scale_chart(0),
                    n = this.x_scale_chart(1) - e,
                    r = this.y_scale_chart(1),
                    i = this.y_scale_chart(0) - r,
                    a = this.is_ordinal ? this.x_scale(t[0]) : this.x_scale(this.bin_results.min_time),
                    o = this.is_ordinal ? this.x_scale(t[t.length - 1]) : this.x_scale(this.bin_results.max_time),
                    s = Math.min(Math.max(a + (o - a) * this.progress, e), e + n),
                    c = s > e && s < e + n;
                this.mask.attr("x", e).attr("y", r).attr("width", Math.max(0, s - e)).attr("height", Math.max(0, i)), this.state.graph ? (this.scrub_node.attr("visibility", "hidden"), this.scrub_bar.attr("transform", "translate(" + s + ", 0)").attr("visibility", this.is_dragging || c ? "visible" : "hidden")) : (this.scrub_bar.attr("visibility", "hidden"), this.scrub_node.attr("transform", "translate(" + s + ", " + (r + i) + ")").attr("visibility", "visible"))
            }
        }, Up.prototype.drawPlaybackButton = function() {
            var t = this.rem * (this.state.margin.left + this.state.playback_button.button_size),
                e = this.state.graph ? this.y_scale_chart(.5) : this.y_scale_chart(.5) + 9;
            this.playback_group.attr("transform", "translate(" + t + "," + e + ")"), this.playback_button.attr("fill", this.state.playback_button.button_color), this.playback_button.attr("r", this.rem * this.state.playback_button.button_size), this.playback_icon.style("fill", this.state.playback_button.icon_color);
            var n = this.rem * this.state.playback_button.icon_size;
            if (!this.state.loop && this.progress >= 1) {
                var r = n / Ap.size;
                this.playback_icon.attr("d", Ap.path).attr("transform", "translate(" + 8 * n / 16 + ", " + -8 * n / 16 + ") scale(" + -r + ", " + r + ")")
            } else if (this.state.playing) {
                var i = n / Sp.size;
                this.playback_icon.attr("d", Sp.path).attr("transform", "translate(" + -7 * n / 16 + ", " + -8 * n / 16 + ") scale(" + i + ")")
            } else {
                var a = n / kp.size;
                this.playback_icon.attr("d", kp.path).attr("transform", "translate(" + -6 * n / 16 + ", " + -8 * n / 16 + ") scale(" + a + ")")
            }
        }, Up.prototype.clampedProgress = function(t, e) {
            if (this.is_ordinal) var n = 0,
                r = 1;
            else {
                var i = this.x_scale.domain();
                n = (i[0] - this.bin_results.min_time) / (this.bin_results.max_time - this.bin_results.min_time), r = (i[1] - this.bin_results.min_time) / (this.bin_results.max_time - this.bin_results.min_time)
            }
            var a = this.state.loop * this.state.duration_wait_at_end / this.state.duration,
                o = this.options.getPadding() / this.state.duration,
                s = n - o,
                c = r + o + a;
            if (this.state.playback_has_saved_range) {
                var l = this.state.playback_range,
                    f = this.options.decodeProgress.call(this, l[0]),
                    u = this.options.decodeProgress.call(this, l[1]);
                s = Math.min(f, u), c = Math.max(f, u)
            }
            return e ? (t < s && (t = c), t > c && (t = s)) : (t < s && (t = s), t > c && (t = c)), t
        }, Up.prototype.annotationsDataFromCursor = function(t, e) {
            var n = this.interaction_box.node().getBoundingClientRect(),
                r = this.x_scale_cursor(e[0]),
                i = 1 - (e[1] - n.y + this.rem * this.state.margin.top) / n.height;
            if (!(r < 0 || r > 1 || i < 0 || i > 1)) {
                var a = this.x_scale.range(),
                    o = this.y_scale.range();
                return {
                    type: "timeline",
                    time: this.x_scale.invert(a[0] + (a[1] - a[0]) * r),
                    value: this.y_scale.invert(o[0] + (o[1] - o[0]) * i)
                }
            }
        }, Up.prototype.annotationsPositionFromData = function(t) {
            if ("timeline" === t.type) {
                var e = this.svg.node().getBoundingClientRect();
                return [this.x_scale(t.time), e.y - this.rem * this.state.margin.top + this.y_scale(t.value)]
            }
        }, Up.prototype.migrateState = function() {
            "number" == typeof this.state.margin && (this.state.margin = {
                top: this.state.margin,
                left: 0,
                right: 0,
                bottom: 0
            })
        }, Yp();
        var Ip, Bp;

        function $p() {
            Ip = Ip || ai("#caption");
            var t = Gn.caption_position.split("-")[0],
                e = Gn.caption_position.split("-")[1],
                n = bd.getPrimaryWidth() < 450,
                r = 0 == Gn.caption_image_position.indexOf("column") || n;
            Ip.select("#text").style("width", r ? null : 100 - Gn.caption_image_width + "%"), Ip.select("#image").style("max-height", r ? Gn.caption_image_width + "%" : null).style("width", r ? null : Gn.caption_image_width + "%").style("margin", (function() {
                return this.querySelector("img") ? "column" == Gn.caption_image_position || n ? Gn.caption_space_between + "rem 0 0" : "column-reverse" == Gn.caption_image_position ? "0 0 " + Gn.caption_space_between + "rem" : "row" == Gn.caption_image_position ? "0 0 0 " + Gn.caption_space_between + "rem" : "0 " + Gn.caption_space_between + "rem 0 0" : 0
            })), Ip.style("flex-direction", (function() {
                return n ? "column" : Gn.caption_image_position
            })).style("font-size", Gn.caption_font_size + "rem").style("padding", Gn.caption_padding + "rem").style("border-radius", Gn.caption_border_radius + "rem").style("align-items", 0 == Gn.caption_image_position.indexOf("column") ? Gn.caption_text_align : null).style("background", (function() {
                var t = Gn.caption_background_color.replace("#", "");
                return "rgba(" + parseInt(t.substring(0, t.length / 3), 16) + "," + parseInt(t.substring(t.length / 3, 2 * t.length / 3), 16) + "," + parseInt(t.substring(2 * t.length / 3, 3 * t.length / 3), 16) + "," + Gn.caption_opacity + ")"
            })).style("color", Gn.caption_text_color).style("border-color", Gn.caption_border_color).style("top", (function() {
                return "top" === t ? "5%" : "bottom" === t ? null : "50%"
            })).style("left", (function() {
                return "left" === e ? "5%" : "right" === e ? null : "50%"
            })).style("right", (function() {
                return "right" === e ? "5%" : null
            })).style("bottom", (function() {
                return "bottom" === t ? "5%" : null
            })).style("transform", (function() {
                return "translate(" + ("center" == e ? "-50%" : 0) + ", " + ("center" == t ? "-50%" : 0) + ")"
            }))
        }
        var Vp, Wp = !0;

        function Xp(t) {
            return "axis" == Gn.label_mode ? -5 : m_(t) - 5
        }

        function Gp(t) {
            if (Fp < 0 || 0 === t.values.length) return 0;
            var e = t.values[Pp] - t.values[Fp];
            return t.values[Fp] + e * Dp
        }
        var Zp, Jp, Qp, Kp, t_, e_, n_, r_, i_, a_, o_, s_, c_, l_, f_, u_, d_, h_, p_, __, g_ = {};

        function b_(t) {
            return Vl(Gp(t))
        }

        function m_(t) {
            return o_(Gp(t))
        }

        function y_(t, e) {
            return Gp(t) == Gp(e) ? oi(t.label, e.label) : (Gn.sort_ascending ? oi : li)(Gp(t), Gp(e))
        }

        function v_(t) {
            return null !== t.values[Fp] && null !== t.values[Pp] && (null !== Gp(t) && (null === Gn.bar_min_value || Gp(t) > Gn.bar_min_value))
        }

        function w_() {
            ai(this).classed("bar", !1).classed("exiting", !0).transition().duration(r_).attr("transform", "translate(0, " + Qp + ")").remove()
        }

        function x_(t, e) {
            var n = e * i_ + a_ / 2;
            n !== this._previous_offset && ai(this).transition().duration(r_).attr("transform", (function() {
                return "translate(0, " + n + ")"
            })), this._previous_offset = n
        }

        function M_(t) {
            return "bars" == Gn.label_mode ? -(c_ + f_) : m_(t) - c_ - f_
        }

        function k_(t) {
            return Vp ? "rotate(90 " + (M_(t) + c_ / 2) + " " + (l_ + s_ / 2) + ")" : null
        }

        function S_(t) {
            d_ = t || Gn.number_of_bars;
            var e = Gn.bar_empty_spaces ? Gn.number_of_bars : d_;
            Flourish.fixed_height || "specified" != Gn.height_mode || Gn.column_chart ? (bd.setHeight(null), Qp = t_ = Jp, Kp = e_ = Zp, Vp && (Kp = Jp, Qp = Zp), h_ = Qp - g_.top - g_.bottom, i_ = h_ / e) : (i_ = bd.remToPx(Gn.bar_height), Qp = t_ = (h_ = e * i_) + g_.top + g_.bottom, Kp = e_ = Zp, bd.setHeight(Qp)), ai("#viz").attr("width", Kp).attr("height", Qp).style("transform", Vp ? "rotate(-90deg) translate(" + -Kp + "px, 0)" : null)
        }

        function A_() {
            var t, e, n, r;
            t = Ep.getProgress(), e = Xn.data.column_names.values, n = (e.length - 1) * t, r = (Fp = Math.floor(n)) === e.length - 1, Pp = r ? Fp : Math.ceil(n), Dp = r ? 0 : n - Fp, Lp = Fp !== jp, jp = Fp, r_ = Wp ? 0 : 1e3 * Gn.animation_duration;
            var i = af.slice();
            Gn.sort_enabled && i.sort(y_);
            var a = Math.min(Gn.number_of_bars, rf.length);
            p_ = i.filter(v_).splice(0, a), d_ !== p_.length && S_(p_.length), a_ = i_ * Gn.bar_margin / 100;
            var o = i_ - a_;
            s_ = Gn.image_height / 100 * o, c_ = Gn.image_width / 100 * o, l_ = (o - s_) / 2, f_ = Gn.image_margin_right / 100 * o, u_ = f_ < 0 ? -f_ : 0;
            var s = g_.left;
            "axis" == Gn.label_mode ? s += bd.remToPx(Gn.label_axis_width) : void 0 !== Xn.data.column_names.image && (s += c_ + f_), ai("#plot").attr("transform", "translate(" + s + ", " + g_.top + ")");
            var c = Math.max(0, Kp - s - g_.right);
            ai("#plot-clip rect").attr("width", Kp - g_.left).attr("height", h_);
            var l = Gn.scale_max,
                f = Gn.scale_min || 0;
            "auto" == Gn.scale_type ? l = Math.max(f, _i(p_, Gp)) : "auto_fixed" == Gn.scale_type && (l = rf.max_value);
            var u = [0, l];
            o_ = function t() {
                var e = vo(po, po);
                return e.copy = function() {
                    return yo(e, t())
                }, ki.apply(e, arguments), Uo(e)
            }().domain(u).range([0, c]), "auto_fixed" == Gn.scale_type && o_.nice();
            var d = Math.min(.66 * o, bd.remToPx(Gn.label_max_size)),
                h = ai("#viz #bars").selectAll(".bar").data(p_, (function(t) {
                    return t.index
                })),
                p = h.enter().append("g").attr("class", "bar").attr("transform", "translate(0, " + Qp + ")");
            p.append("rect").attr("width", m_).attr("height", o).attr("fill", eu).style("opacity", Gn.bar_opacity), p.append("text").attr("class", "label").attr("font-size", d).attr("y", .5 * o).attr("dy", .25 * d).attr("x", Xp);
            var _ = p.append("g").attr("class", "bar-images");
            _.append("clipPath").attr("class", "image-clip").attr("id", (function(t) {
                return "clip-" + t.index
            })).attr("transform", (function(t) {
                return "translate(" + ("bars" == Gn.label_mode ? 0 : m_(t)) + ", 0)"
            })).append("circle").attr("transform", "translate(" + -(c_ / 2 + f_) + ", " + (s_ / 2 + l_) + ")").attr("r", Math.min(s_, c_) / 2), _.append("image").attr("height", s_).attr("width", c_).attr("x", M_).attr("y", l_).attr("transform", k_), p.append("text").attr("class", "value").text((function(t) {
                return Gp(t)
            })).attr("font-size", d).attr("y", .5 * o).attr("fill", Gn.label_color_out).attr("dy", .25 * d).attr("x", (function(t) {
                var e = "axis" == Gn.label_mode ? u_ : 0;
                return m_(t) + 5 + e
            })), h.exit().each(w_), h.exit().select("rect").style("opacity", Gn.bar_opacity).attr("width", m_), h.exit().select(".image-clip").attr("transform", (function(t) {
                return "translate(" + ("bars" == Gn.label_mode ? 0 : m_(t)) + ", 0)"
            })), h.exit().select(".image-clip circle").attr("transform", "translate(" + -(c_ / 2 + f_) + ", " + (s_ / 2 + l_) + ")"), h.exit().select("image").attr("x", M_).attr("y", l_).attr("transform", k_), h.exit().select("text.label").attr("x", Xp), h.exit().select("text.value").attr("x", (function(t) {
                return m_(t) + 5
            }));
            var g = h.merge(p);
            g.each(x_), g.select("rect").style("opacity", Gn.bar_opacity).attr("width", m_).attr("height", o).attr("fill", eu), g.select(".bar-images").attr("clip-path", "axis" == Gn.label_mode ? "url(#plot-clip)" : null), g.select(".image-clip").attr("transform", (function(t) {
                return "translate(" + ("bars" == Gn.label_mode ? 0 : m_(t)) + ", 0)"
            })), g.select(".image-clip circle").attr("transform", "translate(" + -(c_ / 2 + f_) + ", " + (s_ / 2 + l_) + ")").attr("r", Math.min(s_, c_) / 2), g.select("image").attr("clip-path", (function(t) {
                return Gn.image_circle ? "url(#clip-" + t.index + ")" : null
            })), g.select("image").attr("preserveAspectRatio", (function() {
                return "stretch" == Gn.image_scale ? "none" : "xMidYMid" + ("fit" == Gn.image_scale ? "" : " slice")
            })), g.select("image").each((function(t) {
                t.image != this.previous_image && ai(this).attr("xlink:href", t.image), this.previous_image = t.image
            })), g.select("image").attr("height", s_).attr("width", c_).attr("x", M_).attr("y", l_).attr("transform", k_), g.select("text.label").text((function(t) {
                return t.label
            })).attr("text-anchor", "end").attr("fill", Gn.label_color_in).attr("clip-path", "axis" == Gn.label_mode ? null : "url(#plot-clip)").attr("font-size", d).attr("y", .5 * o).attr("dy", .25 * d).attr("x", Xp), g.select("text.value").attr("font-size", d).attr("fill", Gn.label_color_out).attr("y", .5 * o).attr("dy", .25 * d).attr("x", (function(t) {
                var e = "axis" == Gn.label_mode ? u_ : 0;
                return m_(t) + 5 + e
            })).style("display", Gn.show_value ? "block" : "none").text(b_);
            var b = Math.min(3, Math.round(l)),
                m = Oc().scale(o_).ticks(b).tickSize(-h_).tickFormat(Vl);
            ai("#viz").select("#axis").call(m), ai("#viz").selectAll(".tick line").attr("stroke", Gn.axis_color).attr("stroke-dasharray", Gn.axis_gridline_dash ? Gn.axis_gridline_dash + " " + Gn.axis_gridline_dash : null), ai("#viz").select("#axis").selectAll(".tick text").style("font-size", n_).style("fill", Gn.axis_text_color).attr("dy", "-.33em"), Lp && ai("#viz").select("#axis").each((function() {
                    var t = 0,
                        e = 1 / 0;
                    ai(this).selectAll(".tick text").each((function() {
                        var n = this.getBoundingClientRect();
                        this.parentNode.getAttribute("opacity") < 1 || (!Vp && n.left < t + 5 || Vp && n.bottom + 5 > e ? ai(this).style("visibility", "hidden") : (ai(this).style("visibility", "visible"), t = n.left + n.width, e = n.top))
                    }))
                })),
                function() {
                    var t = Gn.counter_line_height,
                        e = Vp ? t_ : e_,
                        n = Gn.counter ? Gn.counter_font_size * e / 100 : 0,
                        r = Gn.totaliser ? Gn.totaliser_font_size * e / 100 : 0,
                        i = t * (n + r),
                        a = Gn.column_chart && Gn.sort_ascending,
                        o = Gn.sort_ascending || Gn.column_chart,
                        s = a ? g_.top + "px" : null,
                        c = o ? Vp ? "0px" : g_.top + "px" : t_ - i + "px";
                    ai("#now").style("left", s).style("right", 0).style("text-align", a ? "left" : "right").style("top", c), ai("#current-column").text(Xn.data.column_names.values[Fp]).style("line-height", t + "em").style("height", t + "em").style("font-weight", "bold").style("display", Gn.counter ? "block" : "none").style("color", Gn.counter_color).style("font-size", n + "px"), ai("#totaliser").style("line-height", t + "em").style("height", t + "em").style("display", Gn.totaliser ? "block" : "none").style("font-size", r + "px").style("color", Gn.totaliser_color).text((function() {
                        if (Gn.totaliser) {
                            var t = Gp({
                                values: rf.totals
                            });
                            return Gn.totaliser_label + " " + Vl(t)
                        }
                    }))
                }(),
                function() {
                    Ip = Ip || ai("#caption");
                    var t = Xn.data.column_names.values[Fp],
                        e = rf.captions[t];
                    e != Bp && (e ? Ip.style("opacity", 1).html(e) : Ip.style("opacity", 0), Bp = e, yu(), $p())
                }(), Yp(h_), Wp = !1
        }

        function T_() {
            var t, e, n, r;
            Vp = Gn.column_chart, Gl(),
                function() {
                    var t = sf({
                            data: Xn.data,
                            blank_cells: Gn.blank_cells,
                            separator: Gn.localization.input_decimal_separator
                        }),
                        e = sf("legend_filter", Gn.legend_filter);
                    if (t || e) {
                        for (var n = 0, r = [], i = {}, a = 0; a < Xn.data.column_names.values.length; a++) {
                            r[a] = 0, i[Xn.data.column_names.values[a]] = null
                        }
                        var o = "category" in Xn.data.column_names;
                        rf = Xn.data.map((function(t, e) {
                            var i = null,
                                a = t.values.map((function(e, n) {
                                    var a = $l(e);
                                    if (isNaN(a)) {
                                        if ("zero" == Gn.blank_cells) a = 0;
                                        else if ("remove" == Gn.blank_cells) a = null;
                                        else if ("last_valid" == Gn.blank_cells) a = i || 0;
                                        else if ("interpolate" == Gn.blank_cells)
                                            if (null == i) a = null;
                                            else {
                                                for (var o = null, s = 1; s < t.values.length; s++) {
                                                    var c = $l(t.values[n + s]);
                                                    if (!isNaN(c)) {
                                                        o = c;
                                                        break
                                                    }
                                                }
                                                null !== o ? i = a = i + (o - i) / (s + 1) : a = i
                                            }
                                    } else i = a;
                                    return r[n] += a, a
                                }));
                            n = Math.max(n, _i(a) || 0);
                            var s = of (t.image) ? t.image : null;
                            return null != t.image && null == s && console.warn("🐶 Flourish support: '" + t.image + "' is not a valid image URL"), {
                                label: t.label,
                                category: o ? t.category : "",
                                values: a,
                                image: s,
                                index: e
                            }
                        })), af = rf.filter((function(t) {
                            return -1 == Gn.legend_filter.indexOf(t.category)
                        }));
                        var s = Xn.captions || [];
                        for (a = 0; a < s.length; a++) {
                            var c = s[a],
                                l = !1;
                            for (var f in i)
                                if (f == c.from && (l = !0), l && (i[f] = "<div id='text'>" + c.text + "</div><div id='image' style='display: " + (c.image ? "inline-block" : "none") + ";'><img src='" + c.image + "' /></div>", f == c.to)) break
                        }
                        rf.max_value = n, rf.totals = r, rf.captions = i
                    }
                }(), fu(), t = Gn.sort_descending_text, e = Gn.sort_ascending_text, n = ai("#sort-control").style("border-radius", Gn.controls_border_radius + "rem").selectAll("button").data(Gn.sort_enabled && Gn.sort_control ? [t, e] : []), r = n.enter().append("button"), n.merge(r).text((function(t) {
                    return t
                })).style("display", "inline-block").classed("selected", (function(e) {
                    return e == t ? !Gn.sort_ascending : Gn.sort_ascending
                })).on("click", (function(e) {
                    Gn.sort_ascending = e != t, T_()
                })), n.exit().remove(), pu.data(nu, eu).filtered(Gn.legend_filter).update().on("click", (function(t) {
                    var e = Gn.legend_filter.indexOf(t); - 1 != e ? Gn.legend_filter.splice(e, 1) : Gn.legend_filter.length < nu.length - 1 && Gn.legend_filter.push(t), T_()
                })), Ep.update(), C_.update(), bd.update(), yu(), $p(), n_ = bd.remToPx(Gn.axis_font_size), g_ = {
                    right: bd.remToPx(Gn.padding_right),
                    left: 0,
                    bottom: 0,
                    top: 1.33 * n_
                }, Zp = bd.getPrimaryWidth(), Jp = bd.getPrimaryHeight(), S_(), A_()
        }
        Il = ql(Gn.localization), Bl = function(t) {
            for (var e in Wl) void 0 === t[e] && (t[e] = Wl[e]);
            return function(e) {
                return Xl(t, e)
            }
        }(Gn.value_format), Gl(), bd = Ud(Gn.layout), tu = cu(Gn.color), pu = function(t) {
            return new hu(t)
        }(Gn.legend), __ = {
            key0: "",
            key1: "",
            fraction: 0,
            fallback: 0
        }, Ep = new Up(bd.getSection("controls"), Gn.timeline, {
            getOrdinal: function() {
                return !0
            },
            getOrdinalKeys: function() {
                return Xn.data.column_names.values.map((function(t, e) {
                    return t || "column " + e
                }))
            },
            getOrdinalValue: function(t, e, n) {
                return t.values[n] || 0
            },
            getData: function() {
                return rf || []
            },
            getInterval: function() {
                return "second"
            },
            shouldUpdate: function() {
                return !rf || !Xn._timeline_processed
            },
            getCategorical: function() {
                return !0
            },
            getDatumCategory: function(t) {
                return t.category
            },
            getLineColorCategorical: function(t) {
                return eu(t.category)
            },
            isCategorySelected: function(t) {
                return -1 === Gn.legend_filter.indexOf(t)
            },
            formatNumber: function(t) {
                return Vl(t)
            },
            encodeProgress: function(t) {
                var e = Ep.bin_results.keys,
                    n = Math.min(Math.max(0, t), 1) * (e.length - 1),
                    r = Math.floor(n),
                    i = Math.ceil(n),
                    a = r === i ? 0 : Math.min(Math.max(0, (n - r) / (i - r)), 1);
                return __.key0 = e[r], __.key1 = e[i], __.fraction = a, __.fallback = t, __
            },
            decodeProgress: function(t) {
                var e = Ep.bin_results.keys,
                    n = e.indexOf(t.key0),
                    r = e.indexOf(t.key1);
                if (-1 === n) return t.fallback;
                if (-1 === r) return t.fallback;
                var i = n / (e.length - 1),
                    a = i + (r / (e.length - 1) - i) * t.fraction;
                return Math.min(1, a)
            }
        });
        var C_ = function(t, e) {
            var n;
            t || (t = document.body), e || (e = {});
            var r = {
                reload_enabled: !1,
                reload_time: 60,
                message_font_size: .85,
                message_prefix: "Refreshing in ",
                message_suffix: " seconds",
                message_show: !0,
                message_color: "#777777",
                message_interaction: "Paused during interaction",
                progress_show: !0,
                progress_height: .25,
                progress_width: 2,
                progress_color: "#dddddd",
                progress_color_inner: "#999999",
                interaction_pause_duration: 2
            };
            for (var i in r) e.hasOwnProperty[i] || (e[i] = r[i]);
            var a = document.createElement("div");
            a.className = "flourish-reloader", t.appendChild(a);
            var o = {};
            o.container = a;
            var s = Flourish.environment,
                c = "live" === s;
            c && window.location.search.match(/environment=story_player/) && (c = !1);
            var l = c || "editor" === s || "sdk" === s,
                f = document.createElement("div");
            f.id = "flourish-reloader-message", a.appendChild(f);
            var u = document.createElement("div");
            u.id = "flourish-reloader-progress", u.style.marginRight = "0.5em", u.style.borderRadius = "0.33em", u.style.overflow = "hidden", a.appendChild(u);
            var d = document.createElement("div");
            d.style.height = "100%", d.style.width = "0%", u.appendChild(d);
            var h, p, _ = !1;
            return document.body.addEventListener("mousemove", (function() {
                h && clearTimeout(h), _ = !0, h = setTimeout((function() {
                    _ = !1
                }), 1e3 * e.interaction_pause_duration)
            })), o.update = function() {
                var t = e.reload_enabled && l;

                function r(t, n) {
                    var r = Math.round(e.reload_time * (1 - t));
                    f.innerHTML = e.message_show ? n || e.message_prefix + r + e.message_suffix : "", d.style.width = 100 * t + "%"
                }
                a.style.display = t ? "block" : "none", d.style.background = e.progress_color_inner, f.style.fontSize = e.message_font_size + "rem", f.style.color = e.message_color, u.style.display = e.progress_show ? "block" : "none", u.style.width = e.progress_width + "rem", u.style.height = e.progress_height + "rem", u.style.background = e.progress_color, t && (r(0), void 0 !== n && cancelAnimationFrame(n), n = requestAnimationFrame((function i(a) {
                    p || (p = a);
                    var o = a - p,
                        s = o / (1e3 * e.reload_time),
                        l = s >= 1;
                    l && c ? window.location.reload() : ((l || _) && (s = 0, p += o), r(s, _ ? e.message_interaction : void 0), t && (n = requestAnimationFrame(i)))
                })))
            }, o
        }(bd.getSection("footer"), Gn.reloader);
        return t.data = Xn, t.draw = function() {
            pu.appendTo(bd.getSection("legend")),
            ai(bd.getSection("header")).append("div").attr("id", "sort-control").attr("class", "btn-group");
            var t = ai(bd.getSection("primary")),
                e = t.append("div").attr("id", "now");
            e.append("div").attr("id", "current-column"), e.append("div").attr("id", "totaliser");
            var n = t.append("svg").attr("id", "viz").attr("fill", "currentColor").append("g").attr("id", "plot");
            n.append("g").attr("id", "axis"), n.append("clipPath").attr("id", "plot-clip").append("rect"), n.append("g").attr("id", "bars"), n.append("g").attr("id", "annotations");
            var r = t.append("div").attr("id", "caption");
            r.append("div").attr("id", "text"), r.append("div").attr("id", "image").append("img"), T_(), qp(), window.addEventListener("resize", T_)
        }, 
        t.state = Gn, t.update = function() {
            T_()
        }, t
    }({});
    //# sourceMappingURL=template.js.map
</script>
<script src="https://public.flourish.studio/resources/v3/embedded.js"></script>
<script>
    function _Flourish_unflattenInto(dest, src) {
        dest = dest || {};
        for (var k in src) {
            var t = dest;
            for (var i = k.indexOf("."), p = 0; i >= 0; i = k.indexOf(".", p = i + 1)) {
                var s = k.substring(p, i);
                if (!(s in t)) t[s] = {};
                t = t[s];
            }
            t[k.substring(p)] = src[k];
        }
        return dest;
    }
    var _Flourish_settings = {
        "bar_empty_spaces": false,
        "bar_margin": 15,
        "counter_font_size": 12,
        "counter_line_height": 1,
        "layout.font_color": "#333333",
        "layout.title": "Animasi Penjualan Listrik PT. Energi Pelabuhan Indonesia",
        "number_of_bars": 30,
        "timeline.axis_nice_x": false,
        "timeline.duration": 120,
        "timeline.duration_wait_at_end": 2,
        "timeline.playback_button.margin_right": 1.25,
        "totaliser_font_size": 4,
        "totaliser_label": "Total (KWH):"
    };
    _Flourish_unflattenInto(window.template.state, _Flourish_settings);

    var _Flourish_data_column_names = {
            "captions": {
                "from": "From",
                "image": "Image",
                "text": "Caption",
                "to": "To"
            },
            "data": {
                "category": "URAIAN",
                "label": "NAMA_CUST",
                "values": ["201306", "201307", "201308", "201309", "201310", "201311", "201312", "201401", "201402", "201403", "201404", "201405", "201406", "201407", "201408", "201409", "201410", "201411", "201412", "201501", "201502", "201503", "201504", "201505", "201506", "201507", "201508", "201509", "201510", "201511", "201512", "201601", "201602", "201603", "201604", "201605", "201606", "201607", "201608", "201609", "201610", "201611", "201612", "201701", "201702", "201703", "201704", "201705", "201706", "201707", "201708", "201709", "201710", "201711", "201712", "201801", "201802", "201803", "201804", "201805", "201806", "201807", "201808", "201809", "201810", "201811", "201812", "201901", "201902", "201903", "201904", "201905", "201906", "201907", "201908", "201909", "201910", "201911", "201912", "202001", "202002", "202003", "202004", "202005", "202006"]
            }
        },
        _Flourish_data = {
            "captions": [],
            "data": [{
                "category": "IPC Pusat",
                "label": "PELABUHAN INDONESIA II (PERSERO), PT",
                "values": ["292000", "321200", "325037", "321200", "321200", "321200", "321200", "321200", "321200", "321200", "321200", "321200", "321200", "321200", "321200", "321200", "336325", "266590", "240030", "244380", "234015", "206010", "219335", "171530", "166680", "168150", "148130", "171810", "174705", "190295", "190880", "181675", "176300", "172690", "182890", "188840", "185820", "186955", "151335", "214830", "203825", "198005", "209025", "192290", "215475", "184230", "224850", "189530", "213000", "149935", "207689", "226180", "200978", "225469", "228764", "193239", "220414", "190752", "212244", "212829", "209424", "134004", "213889", "207594", "196884", "231189", "208409", "196389", "215889", "190324", "203814", "201374", "198909", "167534", "157534", "222334", "205629", "222664", "217809", "217004", "223594", "198784", "198632", "185029", "168533"]
            }, {
                "category": "Umum",
                "label": "PELABUHAN INDONESIA II (PERSERO) CAB TANJUNG PRIOK, PT",
                "values": ["873570.5", "959190", "1085638", "961722", "1350921", "1098398", "711473", "705202", "605124", "599626", "643409", "528001", "554454", "463740", "431547", "462731", "459032", "410231", "386187", "340459", "321612", "357007", "499398", "480899", "480611", "454645", "438281", "420314", "408841", "418326", "433116", "429844", "432063", "394525", "432073", "435241", "443858", "441567", "434440", "430565", "424819", "410997", "425008", "416226", "397760", "348764", "401088", "379360", "417974", "378118", "423096", "431411", "414320", "438031", "444691", "413612", "417907", "396834", "426890", "458633", "467751", "412641", "471702", "467548", "453529", "496632", "458556", "476242", "455009", "423899", "448718", "475076", "498197", "421507", "470747", "439748", "423212", "462712", "451413", "452702", "418842", "393266", "423777", "398239", "373114"]
            }, {
                "category": "Umum",
                "label": "A.E. BROTHER,S COMPANY, CV",
                "values": ["7920", "7920", "7920", "7920", "7920", "7920", "7920", "7920", "7920", "7920", "7920", "7920", "7920", "7920", "7920", "7920", "7920", "7920", "7920", "7920", "7920", "7920", "7920", "7920", "7920", "7920", "7920", "7920", "7920", "7920", "7920", "7920", "7920", "7920", "7920", "7920", "7920", "7920", "7920", "7920", "7920", "7920", "7920", "7920", "7920", "7920", "7920", "7920", "7920", "7920", "7920", "7920", "11686", "11983", "11552", "11212", "10231", "9347", "7920", "7920", "7920", "7920", "7920", "7920", "7920", "7920", "7920", "7920", "7920", "7920", "7920", "7920", "7920", "7920", "7920", "7920", "7920", "7920", "7920", "7920", "7920", "7920", "7920", "7920", "7920"]
            }, {
                "category": "Umum",
                "label": "PBM ADIPURUSA, PT",
                "values": ["7757", "9761", "8387", "8547", "11843", "8800", "8514", "9903", "7313", "7714", "8478", "10559", "10634", "11028", "9562", "9203", "12239", "11321", "10690", "11377", "10113", "11544", "14601", "14387", "13770", "12849", "15760", "16482", "15738", "18270", "17307", "17631", "18365", "15107", "17330", "16207", "16939", "15161", "15123", "16151", "15363", "15668", "14932", "15143", "16049", "13978", "15792", "15618", "16708", "13710", "16651", "16656", "16484", "17223", "16433", "16215", "15713", "16408", "14860", "17681", "17552", "14416", "16877", "16707", "16366", "18257", "16752", "16482", "16263", "15497", "16354", "16618", "17582", "14542", "16933", "16746", "17130", "18730", "19642", "97358", "139849", "159754", "205613", "205395", "204548"]
            }, {
                "category": "Umum",
                "label": "AGUNG RAYA, PT",
                "values": ["27810", "53320", "49997", "38243", "41730", "36181", "31379", "32864", "30601", "27132", "28092", "28727", "31074", "33182", "36082", "33245", "31946", "32052", "28651", "27958", "25511", "22412", "26280", "26078", "27252", "25977", "22521", "26270", "26465", "27204", "27454", "24387", "26619", "24283", "28264", "29364", "29956", "31563", "27998", "36589", "28696", "31353", "31700", "57663", "52197", "27383", "30029", "25272", "30929", "21820", "29944", "37764", "29002", "32625", "30857", "30283", "40473", "48437", "69343", "53516", "52697", "42583", "52312", "62089", "60708", "60218", "56069", "50201", "42288", "33640", "34323", "42437", "46051", "37846", "51016", "40166", "33671", "35183", "44002", "34983", "40621", "34406", "35417", "33142", "41660"]
            }, {
                "category": "Umum",
                "label": "AKR CORPORINDO Tbk, PT",
                "values": ["6329", "7215", "8780", "6602", "6586", "5728", "6201", "6219", "5999", "5799", "5658", "5592", "5717", "5651", "5520", "6002", "5799", "5621", "6035", "5686", "5617", "5520", "5598", "5904", "5817", "5740", "5654", "5814", "5827", "6055", "5975", "5762", "6038", "7424", "9356", "5975", "6463", "7492", "6184", "6350", "6266", "6264", "6333", "6460", "6002", "5825", "6147", "6000", "6126", "5930", "5971", "6044", "5941", "5960", "6000", "5878", "5998", "6028", "6355", "6025", "6120", "5941", "6127", "5970", "7054", "8476", "7484", "8795", "9400", "8120", "8782", "7495", "8311", "6212", "9022", "7605", "7386", "7100", "6889", "7496", "8482", "7607", "8462", "8274", "7921"]
            }, {
                "category": "Umum",
                "label": "ALI AKBAR",
                "values": ["36", "36", "36", "36", "36", "36", "36", "36", "36", "36", "36", "36", "36", "36", "36", "36", "36", "36", "36", "36", "36", "36", "36", "36", "36", "36", "36", "36", "36", "36", "36", "36", "36", "36", "36", "36", "36", "36", "36", "36", "36", "36", "36", "36", "36", "36", "36", "36", "36", "36", "36", "36", "36", "36", "36", "36", "36", "36", "36", "36", "36", "36", "36", "36", "36", "36", "36", "36", "36", "36", "36", "36", "36", "36", "36", "36", "36", "36", "36", "36", "36", "36", "36", "36", "36"]
            }, {
                "category": "Umum",
                "label": "PELAYARAN ALKAN ABADI, PT",
                "values": ["3750", "4142", "3946", "2498", "4615", "4077", "2577", "4702", "2011", "1893", "5254", "3314", "3190", "3673", "2261", "2810", "4539", "3743", "3337", "3238", "2870", "2463", "3353", "3380", "3010", "2857", "2731", "3822", "4019", "3481", "2807", "2170", "2301", "2272", "2416", "2198", "2833", "2002", "2286", "2865", "2694", "2167", "1828", "1973", "1374", "920", "920", "920", "920", "920", "920", "920", "920", "920", "920", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", ""]
            }, {
                "category": "Umum",
                "label": "ALKEN, PT",
                "values": ["1133", "1638", "1228", "1500", "1014", "711", "730", "735", "609", "491", "675", "597", "738", "644", "489", "664", "639", "176", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", ""]
            }, {
                "category": "Umum",
                "label": "AMALY MITRA ABADI, PT",
                "values": ["500", "467", "526", "443", "220", "315", "264", "282", "192", "168", "88", "224", "591", "519", "266", "96", "89", "107", "295", "247", "186", "190", "218", "171", "329", "294", "283", "297", "424", "566", "459", "408", "303", "259", "430", "411", "442", "428", "196", "347", "348", "445", "237", "287", "222", "200", "535", "446", "461", "372", "493", "477", "161", "100", "96", "162", "299", "286", "323", "292", "202", "88", "88", "88", "88", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", ""]
            }, {
                "category": "Umum",
                "label": "AMITAR RAYA, CV",
                "values": ["88", "88", "88", "88", "88", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", ""]
            }, {
                "category": "Umum",
                "label": "ANGGREANIE",
                "values": ["1077", "1399", "1340", "264", "264", "264", "264", "264", "974", "2530", "2530", "2530", "2530", "2530", "2530", "2640", "3869", "3740", "3719", "3651", "3094", "2910", "3179", "3614", "2530", "2530", "2530", "2530", "2530", "2013", "726", "726", "726", "726", "726", "726", "726", "726", "726", "726", "726", "726", "726", "726", "726", "726", "726", "726", "726", "726", "726", "726", "726", "726", "726", "726", "726", "726", "726", "726", "726", "726", "726", "726", "726", "726", "726", "726", "726", "709", "242", "242", "242", "242", "409", "549", "605", "605", "605", "605", "605", "605", "605", "605", "605"]
            }, {
                "category": "Umum",
                "label": "ANIMINDO KARYA ABADI, PT",
                "values": ["52", "52", "52", "52", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", ""]
            }, {
                "category": "Umum",
                "label": "ANUGERAH GELOMBANG S.J., PT",
                "values": ["413", "268", "287", "207", "170", "88", "88", "88", "88", "88", "88", "88", "88", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", ""]
            }, {
                "category": "Umum",
                "label": "ANUGERAH LESTARI ABADI MAKMUR, PT",
                "values": ["4200", "6710", "4200", "4200", "4200", "4200", "4200", "4200", "4200", "4200", "4200", "4200", "4200", "4200", "4200", "4200", "4200", "4200", "4200", "4200", "4200", "4200", "4200", "4200", "4200", "4200", "4200", "4200", "4200", "4200", "4200", "4200", "4200", "4200", "4200", "4200", "4200", "4200", "4200", "4200", "4200", "4200", "4200", "4200", "4200", "4200", "4200", "4200", "4200", "4200", "4200", "4200", "4200", "4200", "4200", "4200", "4200", "4200", "4200", "4200", "4200", "4200", "4200", "4200", "4200", "4200", "4200", "4200", "4200", "4200", "4200", "4200", "4200", "4200", "4200", "4200", "4200", "4200", "4200", "4200", "4200", "4200", "4200", "4200", "4200"]
            }, {
                "category": "Umum",
                "label": "BAHARI CARAKA SARANA INDONESIA, PT",
                "values": ["220", "220", "220", "220", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", ""]
            }, {
                "category": "Umum",
                "label": "BAHTERA ADHIGUNA, PT",
                "values": ["7912", "8226", "11528", "7884", "10855", "9887", "9102", "9176", "7964", "8761", "8827", "8802", "8470", "7908", "1564", "1195", "1256", "1214", "1241", "1144", "933", "711", "941", "717", "455", "378", "338", "472", "267", "775", "767", "640", "363", "186", "248", "205", "191", "184", "143", "197", "149", "143", "144", "155", "143", "143", "143", "143", "143", "143", "159", "143", "148", "178", "172", "212", "185", "152", "150", "143", "179", "143", "143", "143", "143", "143", "143", "143", "143", "143", "143", "143", "143", "143", "", "", "", "", "", "", "", "", "", "", ""]
            }, {
                "category": "Umum",
                "label": "BALAI BESAR KARANTINA PERTANIAN TANJUNG PRIOK",
                "values": ["88", "88", "88", "88", "160", "112", "134", "148", "111", "88", "135", "110", "198", "212", "155", "295", "279", "193", "95", "156", "177", "119", "179", "99", "206", "358", "605", "605", "605", "605", "605", "605", "605", "605", "605", "605", "605", "605", "605", "605", "605", "605", "605", "605", "605", "605", "605", "605", "605", "605", "605", "605", "605", "605", "605", "605", "24201", "21046", "25810", "24890", "27003", "21320", "26578", "27769", "27959", "31829", "27548", "27493", "27084", "24510", "26829", "28161", "28217", "24457", "27850", "26090", "29109", "31387", "28137", "25564", "25145", "21764", "25612", "25910", "25570"]
            }, {
                "category": "Umum",
                "label": "BAMBANG HERMANTO, PT",
                "values": ["321", "329", "260", "294", "301", "285", "308", "52", "303", "236", "379", "297", "416", "351", "265", "356", "473", "426", "416", "452", "370", "330", "387", "395", "453", "425", "326", "425", "468", "514", "495", "448", "429", "390", "413", "451", "447", "409", "384", "397", "417", "396", "400", "378", "338", "340", "368", "293", "303", "283", "408", "578", "378", "418", "403", "417", "200", "258", "397", "340", "399", "326", "387", "356", "315", "317", "291", "264", "290", "284", "275", "272", "290", "280", "290", "261", "280", "298", "313", "294", "284", "284", "310", "312", "277"]
            }, {
                "category": "Umum",
                "label": "BANDAR TEGUH NUSANTARA, PT",
                "values": ["312", "372", "562", "158", "88", "88", "88", "88", "88", "302", "907", "907", "594", "932", "1245", "1168", "287", "287", "413", "418", "356", "326", "485", "424", "", "", "", "", "", "495", "494", "414", "542", "449", "517", "527", "445", "461", "433", "392", "392", "386", "436", "486", "406", "280", "300", "280", "289", "242", "492", "319", "296", "339", "328", "289", "269", "224", "274", "254", "288", "242", "323", "336", "404", "370", "338", "272", "274", "249", "293", "272", "242", "242", "353", "383", "463", "442", "410", "364", "279", "242", "301", "248", "242"]
            }, {
                "category": "Umum",
                "label": "BANK ICB BUMIPUTERA Tbk, PT",
                "values": ["1460", "1878", "1417", "1648", "1601", "1304", "1445", "604", "1089", "1209", "1421", "1327", "1480", "1345", "779", "1172", "1598", "1496", "839", "835", "424", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", ""]
            }, {
                "category": "Umum",
                "label": "BANK MANDIRI (Persero) Tbk, PT",
                "values": ["7977", "11121", "8415", "7543", "9090", "8442", "8383", "9534", "7370", "7343", "8695", "9237", "9497", "9678", "8225", "9138", "9569", "10097", "9348", "9491", "8661", "7423", "8917", "9363", "8406", "8600", "8610", "8985", "8800", "8942", "8569", "8717", "8584", "7478", "7152", "7601", "7404", "7528", "5581", "7031", "6539", "6815", "6877", "6174", "5866", "5961", "7076", "5766", "6780", "5644", "6313", "6603", "5872", "6874", "7325", "6971", "7470", "6512", "7860", "7286", "7272", "5543", "6986", "6918", "6422", "7580", "7266", "6844", "6586", "6062", "5794", "5316", "6041", "5038", "6822", "6604", "6079", "6779", "6104", "5712", "5462", "5140", "5205", "2647", "3224"]
            }, {
                "category": "Umum",
                "label": "BANK MUAMALAT INDONESIA, PT",
                "values": ["2995", "2595", "2768", "1332", "3135", "1874", "1963", "2241", "1629", "1988", "2510", "2143", "2369", "2494", "1632", "2098", "2360", "2199", "1966", "2332", "1992", "1964", "1819", "1917", "2061", "2056", "1908", "2152", "2318", "2255", "2227", "2129", "2200", "1904", "2119", "2134", "1886", "1593", "1840", "1963", "1983", "2190", "1868", "2008", "1978", "1652", "1781", "1882", "2197", "1657", "2192", "2277", "2098", "2102", "1851", "1826", "1846", "1692", "1908", "2078", "2115", "1778", "2207", "2209", "2287", "3035", "2548", "2448", "2496", "2493", "2479", "2490", "2487", "1906", "2294", "2229", "2130", "2837", "2308", "1803", "2659", "2032", "1988", "1264", "1215"]
            }, {
                "category": "Umum",
                "label": "BANK SYARIAH MEGA INDONESIA, PT",
                "values": ["4769", "5140", "4914", "5127", "6165", "4890", "3929", "5556", "3275", "4431", "5036", "4722", "5106", "4397", "3557", "4233", "5028", "4165", "4262", "4405", "3816", "3526", "4099", "4150", "4191", "2641", "2381", "2503", "2676", "2778", "2927", "3165", "3445", "3760", "3982", "4256", "4163", "3167", "2862", "3087", "3077", "2635", "2820", "2650", "2446", "2585", "2770", "2585", "2415", "2055", "2537", "2644", "2554", "2407", "2491", "2288", "2335", "2644", "1965", "2369", "2767", "2220", "2664", "2824", "2188", "2728", "2534", "2017", "2216", "2068", "2443", "2198", "2492", "2102", "2502", "2393", "2224", "2570", "2335", "2321", "2342", "1798", "1999", "1591", "2034"]
            }, {
                "category": "Umum",
                "label": "BAYUMAS JASA MANDIRI, PT",
                "values": ["2613", "6629", "6686", "6136", "8789", "4666", "6068", "7348", "4224", "6577", "6816", "6098", "7502", "7166", "5002", "5275", "8836", "5654", "5155", "4968", "3954", "3863", "4220", "4852", "4582", "4357", "3856", "5480", "6451", "6322", "5818", "5341", "5528", "4747", "5224", "6057", "5836", "5136", "5115", "5965", "5827", "5981", "5225", "5751", "5237", "4666", "5577", "5209", "5838", "4355", "5253", "5487", "5630", "5817", "5079", "4601", "4453", "4068", "4818", "4862", "5246", "3465", "4700", "4166", "4265", "5048", "4935", "4362", "4368", "4118", "4088", "3903", "4318", "3356", "4273", "3704", "4169", "4049", "3974", "4064", "4029", "4022", "4038", "4030", "4030"]
            }, {
                "category": "Umum",
                "label": "BEDJO SUPARDJO",
                "values": ["36", "36", "36", "36", "36", "36", "36", "36", "36", "36", "36", "118", "201", "268", "200", "71", "251", "222", "192", "185", "136", "104", "97", "107", "114", "120", "126", "114", "108", "44", "36", "36", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", ""]
            }, {
                "category": "Umum",
                "label": "BIMA SEPAJA ABADI, PT",
                "values": ["6333", "5239", "5210", "3695", "6863", "3745", "4102", "6837", "3971", "4913", "5762", "4287", "5689", "4974", "3628", "5205", "6409", "5857", "5847", "5219", "4723", "4152", "5150", "4966", "4651", "4599", "3930", "4830", "4941", "5727", "5342", "4937", "5211", "4786", "5401", "5157", "4924", "4438", "3681", "4928", "5394", "5125", "5058", "4847", "4645", "3604", "3861", "3604", "3724", "2932", "4135", "4673", "4851", "5104", "5018", "4775", "4061", "3945", "4165", "3897", "3892", "2594", "3948", "4793", "4489", "5493", "5018", "4582", "5195", "4645", "4882", "4498", "4111", "3288", "4968", "4541", "4285", "4788", "4471", "4008", "4172", "3593", "2776", "1631", "1430"]
            }, {
                "category": "Umum",
                "label": "BINTANG LAUT SEMESTA, PT",
                "values": ["669", "628", "638", "308", "689", "528", "416", "447", "314", "407", "353", "308", "308", "308", "308", "308", "696", "473", "457", "441", "368", "308", "381", "428", "411", "308", "308", "308", "308", "341", "308", "308", "308", "308", "308", "308", "308", "308", "308", "308", "308", "308", "308", "308", "308", "308", "308", "308", "308", "308", "648", "926", "1069", "728", "499", "308", "308", "308", "308", "308", "308", "308", "308", "308", "308", "308", "308", "308", "308", "308", "308", "308", "308", "308", "308", "308", "308", "308", "308", "308", "308", "308", "573", "439", "308"]
            }, {
                "category": "Umum",
                "label": "BNI 1946, PT",
                "values": ["5556", "7293", "6908", "7122", "6833", "6824", "6382", "6157", "5606", "5318", "6241", "6280", "6581", "6779", "5856", "7180", "7068", "7305", "6565", "6679", "6088", "5494", "5889", "6848", "6170", "6055", "5704", "6155", "6415", "7392", "6684", "7014", "7046", "6490", "7275", "6949", "6825", "6471", "5537", "6660", "6258", "6180", "5549", "5728", "5799", "5090", "6174", "5755", "6409", "6152", "5732", "6656", "6341", "7006", "6712", "6138", "6447", "6281", "5840", "6015", "6322", "5159", "6017", "6214", "6404", "6496", "6168", "5729", "5167", "5248", "5718", "5495", "5480", "4922", "5457", "5231", "5502", "5732", "4978", "4841", "4699", "4502", "4130", "3201", "3281"]
            }, {
                "category": "Umum",
                "label": "BRI, PT",
                "values": ["285", "581", "496", "537", "379", "205", "372", "423", "209", "203", "286", "200", "280", "410", "295", "474", "632", "608", "511", "638", "571", "140", "266", "640", "537", "507", "431", "893", "709", "973", "882", "755", "763", "602", "503", "542", "552", "598", "522", "732", "566", "504", "465", "635", "545", "563", "656", "607", "649", "147", "507", "1200", "1076", "1350", "1269", "1441", "1262", "1549", "455", "466", "539", "490", "540", "326", "413", "511", "538", "642", "747", "778", "868", "754", "772", "812", "844", "856", "851", "841", "844", "627", "663", "640", "710", "311", "482"]
            }, {
                "category": "Umum",
                "label": "CAHAYA MANDIRI ABADI J, PT",
                "values": ["308", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", ""]
            }, {
                "category": "Umum",
                "label": "CAHAYA SAMUDERA MULIA, PT",
                "values": ["416", "611", "612", "905", "950", "733", "581", "744", "1051", "528", "1220", "1163", "509", "376", "235", "357", "422", "423", "397", "103", "88", "88", "88", "88", "442", "1135", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", ""]
            }, {
                "category": "Umum",
                "label": "CAKRAWALA, PT",
                "values": ["220", "220", "240", "220", "289", "220", "220", "220", "220", "220", "220", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", ""]
            }, {
                "category": "Umum",
                "label": "CELEBES MARITIME SERVICE, PT",
                "values": ["745.4", "1301", "992", "1141", "1594", "1544", "930", "1270", "1033", "990", "1153", "1537", "1454", "1727", "1414", "1237", "1876", "1571", "1638", "1527", "1535", "1480", "1109", "997", "1088", "909", "694", "954", "941", "806", "736", "926", "1000", "790", "987", "875", "1014", "856", "838", "896", "742", "797", "742", "752", "760", "686", "735", "686", "709", "572", "814", "788", "505", "925", "895", "621", "758", "677", "891", "821", "1099", "725", "968", "965", "910", "1028", "959", "1032", "805", "1156", "817", "688", "649", "458", "634", "586", "590", "646", "594", "598", "474", "558", "709", "660", "665"]
            }, {
                "category": "Umum",
                "label": "DAISY MUTIARA SAMUDRA, PT",
                "values": ["856", "1113", "617", "412", "616", "793", "855", "981", "686", "443", "623", "672", "856", "801", "613", "821", "869", "938", "836", "822", "662", "514", "643", "852", "810", "733", "909", "1389", "1276", "1543", "1686", "1476", "1717", "1353", "1638", "1771", "1557", "1533", "1385", "1540", "1644", "1247", "1472", "1462", "1651", "1491", "1826", "1668", "1723", "1390", "1821", "1762", "1809", "1982", "1918", "1982", "2144", "2171", "2189", "1963", "2258", "1180", "1982", "2165", "2081", "2359", "1998", "1945", "1647", "1453", "1583", "1762", "1708", "1933", "1939", "2227", "2351", "2704", "2486", "2288", "2191", "731", "551", "455", "242"]
            }, {
                "category": "Umum",
                "label": "DARSONO",
                "values": ["224", "211", "195", "78", "331", "223", "293", "348", "274", "208", "314", "248", "305", "337", "341", "36", "301", "295", "283", "277", "268", "252", "253", "258", "325", "314", "406", "264", "273", "309", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", ""]
            }, {
                "category": "Umum",
                "label": "DAVANCO MARINE SERVICE, PT",
                "values": ["722", "952", "729", "488", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", ""]
            }, {
                "category": "Umum",
                "label": "DEASY, PT",
                "values": ["52", "52", "52", "52", "52", "52", "52", "52", "52", "52", "52", "52", "52", "52", "52", "52", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", ""]
            }, {
                "category": "Umum",
                "label": "DEP KES PELABUHAN",
                "values": ["39680", "47657", "25351", "30856", "35304", "38992", "33723", "36050", "30963", "29364", "38226", "43834", "44153", "42015", "38232", "43351", "45148", "47496", "45105", "44918", "40030", "35828", "49938", "50620", "50769", "48729", "45072", "51462", "52437", "53954", "53293", "49239", "51646", "44183", "51012", "53264", "50982", "44960", "42033", "52925", "50912", "52648", "52858", "51700", "55564", "42911", "53555", "49265", "51870", "40143", "48476", "47583", "43180", "48444", "46156", "42355", "44309", "37766", "43243", "43548", "47489", "32646", "44726", "44310", "41347", "49837", "39292", "38771", "46679", "43468", "42015", "43767", "45706", "36625", "45724", "43034", "43239", "48668", "44150", "43557", "43893", "36954", "40829", "42942", "42934"]
            }, {
                "category": "Umum",
                "label": "DHARMA LAUTAN NUSANTARA, PT",
                "values": ["6575", "3870", "3327", "3268", "14931", "7244", "9391", "12114", "5874", "8788", "11118", "8929", "13563", "10997", "10150", "12291", "13264", "9672", "13750", "6752", "3291", "2358", "3147", "1372", "1527", "1320", "1320", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", ""]
            }, {
                "category": "Umum",
                "label": "DHARMA WANITA PELNI, PT",
                "values": ["222", "242", "257", "212", "380", "238", "220", "308", "268", "177", "319", "252", "297", "329", "333", "189", "297", "285", "275", "288", "228", "195", "236", "313", "407", "394", "400", "404", "378", "400", "385", "385", "383", "289", "302", "285", "340", "303", "301", "319", "336", "303", "323", "316", "304", "297", "324", "254", "263", "388", "359", "279", "294", "320", "309", "292", "278", "237", "311", "298", "307", "273", "293", "271", "326", "340", "311", "52", "52", "52", "52", "52", "206", "360", "446", "447", "454", "475", "450", "447", "395", "336", "300", "88", "88"]
            }, {
                "category": "Umum",
                "label": "KANTOR KESEHATAN PELABUHAN TANJUNG PRIOK",
                "values": ["52", "52", "52", "52", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", ""]
            }, {
                "category": "Umum",
                "label": "KPU BEA DAN CUKAI TIPE A TANJUNG PRIOK",
                "values": ["95590", "158219", "120873", "142044", "138005", "138292", "133573", "161115", "128764", "129367", "209194", "238659", "251042", "299363", "261162", "274273", "284561", "304401", "280576", "284092", "253790", "233012", "281466", "274238", "281289", "280429", "266984", "278377", "280892", "306128", "300895", "287981", "302605", "268249", "290989", "223685", "137579", "151856", "262949", "283797", "264882", "271493", "273545", "267413", "250560", "181550", "229771", "186307", "200874", "168769", "190080", "197330", "186428", "201224", "185759", "169121", "170527", "152774", "175234", "181519", "192643", "153326", "193363", "175702", "177888", "203398", "182960", "176863", "182952", "170930", "177095", "180749", "194172", "168677", "183232", "175484", "181366", "198766", "190073", "182889", "174497", "157778", "171445", "163644", "156274"]
            }, {
                "category": "Umum",
                "label": "DJASIAH",
                "values": ["70", "99", "73", "36", "149", "96", "105", "90", "91", "81", "85", "74", "73", "85", "36", "85", "111", "96", "94", "101", "89", "76", "92", "105", "106", "38", "36", "60", "61", "65", "65", "73", "62", "61", "71", "71", "71", "36", "50", "67", "57", "71", "73", "85", "68", "71", "76", "52", "73", "36", "74", "68", "70", "68", "69", "66", "67", "68", "70", "62", "53", "38", "67", "62", "72", "73", "57", "58", "63", "56", "60", "66", "42", "54", "76", "69", "72", "77", "78", "77", "77", "76", "80", "49", "43"]
            }, {
                "category": "Umum",
                "label": "DOK NUSANTARA, PT",
                "values": ["49360", "4200", "9062", "4200", "11401", "11593", "9543", "11737", "5667", "6923", "6479", "7312", "9766", "7359", "9197", "8920", "9424", "8972", "13864", "15119", "9714", "11206", "14694", "11746", "7169", "5830", "12615", "17824", "15552", "17503", "26660", "20665", "20965", "13680", "14652", "24635", "22338", "12295", "11924", "14940", "12291", "10552", "11914", "7867", "6833", "6000", "5457", "8538", "12766", "9102", "9483", "11378", "6013", "7340", "9406", "10317", "6665", "8796", "5699", "7265", "10970", "5288", "8558", "8725", "6855", "9409", "9180", "7740", "8276", "9636", "7885", "10579", "10543", "7054", "6150", "6493", "9255", "7499", "5916", "6043", "4904", "4200", "4200", "4200", "4200"]
            }, {
                "category": "Umum",
                "label": "DUTA BUANA PERKASA, PT",
                "values": ["772", "604", "615", "575", "1093", "850", "851", "854", "220", "220", "220", "220", "220", "220", "220", "220", "220", "220", "1076", "788", "668", "685", "735", "821", "938", "734", "574", "672", "710", "747", "763", "597", "731", "576", "682", "710", "793", "656", "632", "819", "858", "889", "723", "714", "678", "465", "499", "465", "481", "388", "773", "843", "918", "997", "706", "667", "659", "611", "617", "709", "699", "448", "765", "779", "755", "963", "864", "711", "804", "614", "663", "623", "716", "596", "812", "830", "835", "870", "944", "831", "821", "690", "702", "768", "569"]
            }, {
                "category": "Umum",
                "label": "DWI AWAN MANDIRI, CV",
                "values": ["364", "383", "360", "363", "847", "528", "559", "661", "571", "517", "689", "724", "695", "639", "552", "656", "744", "758", "700", "619", "686", "612", "691", "773", "740", "643", "574", "669", "725", "779", "655", "758", "518", "336", "421", "495", "459", "368", "468", "416", "538", "277", "468", "581", "367", "331", "534", "498", "514", "415", "592", "493", "393", "418", "404", "88", "128", "116", "118", "88", "100", "168", "286", "298", "268", "337", "384", "365", "427", "352", "369", "390", "383", "311", "552", "348", "289", "271", "270", "88", "", "", "", "", ""]
            }, {
                "category": "Umum",
                "label": "DWIPAHASTA UTAMADUTA, PT",
                "values": ["6457", "12402", "7102", "6639", "11093", "7079", "7485", "7378", "5392", "8673", "15086", "16364", "17117", "16967", "20855", "30777", "32714", "23175", "23235", "18232", "17754", "17782", "41395", "75717", "75062", "63624", "55289", "54951", "54496", "55988", "129787", "233254", "323292", "322478", "323597", "323316", "323210", "326057", "324599", "324149", "324414", "448296", "513348", "509664", "510911", "509481", "510581", "510037", "510418", "509856", "510604", "511047", "505474", "505306", "505201", "505304", "505092", "505018", "505561", "505935", "506709", "506286", "507109", "506882", "506897", "413761", "380605", "380925", "409293", "444036", "444459", "444464", "444950", "444405", "445685", "445630", "445729", "445805", "445578", "445651", "445817", "445413", "446489", "446426", "445104"]
            }, {
                "category": "Umum",
                "label": "EKADARMA EKASEMESTA",
                "values": ["186", "227", "211", "88", "352", "88", "103", "131", "118", "120", "133", "143", "112", "142", "147", "88", "148", "92", "88", "88", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", ""]
            }, {
                "category": "Umum",
                "label": "EMITRACO INVESTAMA M, PT",
                "values": ["4754", "4086", "210", "2943", "1668", "1754", "1576", "1701", "1348", "1238", "1509", "1868", "1797", "1867", "1249", "1965", "1631", "1284", "1365", "977", "274", "686", "921", "885", "955", "970", "942", "986", "845", "541", "1302", "1458", "1734", "1497", "1542", "1484", "1613", "1606", "1785", "912", "991", "1062", "668", "859", "807", "729", "998", "860", "889", "717", "1105", "1069", "1313", "1170", "1132", "1170", "404", "758", "981", "1121", "1377", "1201", "1333", "1105", "957", "1112", "1091", "903", "974", "871", "934", "1032", "948", "788", "853", "631", "791", "908", "802", "753", "765", "140", "140", "140", "140"]
            }, {
                "category": "Umum",
                "label": "ESCORINDO STEVEDORING, PT",
                "values": ["2851", "2622", "3240", "2931", "3732", "2932", "3049", "2785", "2211", "2029", "2028", "2139", "2265", "2346", "2065", "2108", "2657", "2726", "2442", "2232", "2092", "2026", "2617", "2324", "2607", "2339", "2150", "2176", "2440", "2277", "2217", "2479", "2163", "2035", "2294", "2450", "2407", "2282", "2317", "2020", "2105", "2089", "2082", "2089", "2025", "1661", "2400", "2395", "2797", "2357", "2806", "2875", "2261", "2752", "2610", "2339", "1882", "1554", "1695", "1736", "1695", "1410", "1623", "1610", "1581", "1643", "1612", "1629", "1601", "1535", "1670", "1700", "1697", "1572", "1166", "1166", "1166", "37672", "110173", "252658", "252626", "252626", "252626", "252626", "252626"]
            }, {
                "category": "Umum",
                "label": "GLORY KASIH INDONESIA, PT",
                "values": ["603", "476", "433", "384", "88", "88", "88", "88", "88", "351", "565", "480", "2917", "579", "339", "510", "604", "551", "433", "385", "275", "274", "277", "261", "88", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", ""]
            }, {
                "category": "Umum",
                "label": "GRAHA SEGARA, PT",
                "values": ["74520", "79146", "76060", "75360", "76270", "75000", "75000", "74100", "58980", "58930", "74820", "66840", "73800", "69300", "72825", "79963", "71816", "79241", "74322", "59528", "72605", "58027", "71611", "123722", "159500", "159500", "159500", "159500", "159500", "159500", "159500", "159500", "159500", "159500", "159500", "159500", "159500", "159500", "159500", "159500", "159500", "159500", "159500", "159500", "159500", "159500", "159500", "159500", "159500", "159500", "159500", "159500", "159500", "159500", "159500", "159500", "159500", "159500", "159500", "159500", "159500", "159500", "159500", "159500", "159500", "159500", "159500", "159500", "159500", "159500", "159500", "159500", "159500", "159500", "159500", "159786", "159885", "159885", "161443", "164065", "164065", "164065", "164065", "164065", "164516"]
            }, {
                "category": "Umum",
                "label": "HERFANDI",
                "values": ["88", "88", "88", "88", "765", "353", "293", "386", "261", "165", "276", "269", "286", "265", "267", "88", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", ""]
            }, {
                "category": "Umum",
                "label": "HUTAMA KARYA, PT",
                "values": ["176", "176", "176", "176", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", ""]
            }, {
                "category": "Umum",
                "label": "IDHAM S RAJALOA",
                "values": ["52", "52", "52", "52", "52", "52", "52", "52", "52", "52", "52", "53", "68", "54", "53", "77", "70", "59", "52", "52", "52", "52", "52", "52", "52", "52", "52", "52", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", ""]
            }, {
                "category": "Umum",
                "label": "IFBENOLLO",
                "values": ["73", "164", "57", "165", "161", "52", "52", "124", "104", "82", "108", "106", "108", "101", "90", "107", "104", "68", "80", "88", "67", "52", "76", "73", "76", "69", "121", "53", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", ""]
            }, {
                "category": "Umum",
                "label": "IKRAR BERSAMA MANDIRI, PT",
                "values": ["1501", "1432", "1432", "918", "1977", "1475", "2508", "528", "536", "1117", "1470", "1099", "1301", "1321", "991", "1331", "1648", "1507", "1474", "1414", "1229", "1092", "1329", "1314", "1232", "1305", "1003", "1293", "1372", "1611", "1603", "1430", "1463", "1290", "1387", "1417", "1345", "1499", "1133", "1450", "1487", "1677", "1668", "1586", "1678", "1478", "1584", "1478", "1936", "1146", "1717", "1832", "1795", "1988", "1834", "1581", "1612", "1557", "1630", "1616", "1644", "1057", "1624", "1602", "1575", "1953", "1774", "1661", "1812", "1560", "1775", "1818", "1940", "1446", "2217", "2317", "2470", "3074", "3120", "2977", "2971", "2429", "2623", "2458", "1987"]
            }, {
                "category": "Umum",
                "label": "INDO MEGA MARITIM, PT",
                "values": ["3092", "3356", "3225", "2841", "4204", "1194", "2210", "2299", "1188", "1188", "1188", "1188", "1188", "1188", "1188", "1188", "1374", "1406", "1409", "1238", "1217", "1468", "1360", "1188", "1188", "1188", "1188", "1188", "1188", "1188", "1188", "1188", "1188", "1188", "1188", "1188", "1188", "1188", "1188", "1188", "1188", "1188", "1188", "1188", "1188", "1188", "1188", "1188", "1188", "1188", "1188", "1188", "1188", "1188", "1188", "1188", "1188", "1188", "1188", "1188", "1188", "1188", "1188", "1188", "1188", "1188", "1188", "1188", "1188", "1188", "1188", "1188", "1188", "1188", "1188", "1188", "1188", "1188", "1188", "1188", "1188", "1188", "1188", "1188", "1188"]
            }, {
                "category": "Umum",
                "label": "INDOCEMENT TUNGGAL PR, PT",
                "values": ["69400", "69400", "69400", "69400", "69400", "69400", "69400", "69400", "69400", "69400", "69400", "69400", "69400", "69400", "90360", "69400", "111640", "110520", "87320", "71400", "69400", "69400", "73320", "69400", "69400", "69400", "69400", "69400", "76040", "69400", "89200", "132000", "143040", "83680", "69400", "69400", "69400", "69400", "69400", "69400", "69400", "86360", "72200", "110800", "116120", "126080", "69400", "85600", "79960", "75120", "93800", "99240", "146720", "188600", "212560", "173920", "159760", "147920", "217600", "205920", "211520", "154160", "174000", "174800", "200880", "183600", "166880", "157360", "102000", "104960", "148640", "91760", "169600", "174240", "203040", "129120", "127920", "116880", "89040", "69400", "69400", "69400", "69400", "69400", "69400"]
            }, {
                "category": "Umum",
                "label": "INDOMART",
                "values": ["3625", "4904", "4724", "5627", "5934", "4747", "4852", "4685", "4082", "5359", "6257", "5088", "5193", "6137", "4178", "5882", "5908", "5272", "5405", "5765", "5504", "5256", "5324", "5844", "5847", "5565", "5684", "5796", "5862", "6490", "5661", "6231", "6250", "6047", "6562", "6105", "6545", "5444", "4855", "8351", "6181", "6788", "5625", "6213", "6138", "5568", "6477", "6437", "6440", "6067", "6373", "5792", "6029", "6319", "5992", "6430", "6209", "5638", "6038", "6041", "6478", "5920", "6851", "6606", "6692", "7184", "6849", "7364", "6498", "5634", "6470", "6419", "6618", "6475", "6507", "5593", "6248", "6524", "6108", "6600", "5977", "4878", "6102", "5996", "5508"]
            }, {
                "category": "Umum",
                "label": "INDOSAT TBK, PT",
                "values": ["5431", "5023", "4460", "4778", "4827", "5425", "4384", "5602", "4422", "3873", "5073", "4316", "5088", "4724", "3066", "6279", "5435", "5195", "4224", "4820", "5021", "4411", "4759", "4827", "5059", "4104", "3741", "3733", "3594", "3737", "3666", "3937", "3824", "3792", "3798", "3795", "3923", "3610", "2888", "3473", "3181", "3407", "3989", "3934", "4047", "3684", "4081", "3932", "4093", "3886", "4169", "4264", "4142", "4263", "4051", "4169", "4119", "3888", "4713", "4510", "4565", "4173", "4613", "4516", "4530", "4524", "4524", "4525", "4524", "4524", "4524", "4524", "4524", "5074", "5083", "5327", "5299", "5352", "4865", "5075", "4912", "4651", "6420", "5818", "5629"]
            }, {
                "category": "Umum",
                "label": "INTRA FAEDAH UTAMA, PT",
                "values": ["91204", "89896", "89273", "59185", "97328", "62425", "76697", "73100", "48660", "64862", "73060", "70880", "85669", "84836", "66763", "71526", "84971", "77455", "75884", "73313", "66823", "62268", "72316", "76286", "77961", "78842", "67792", "77060", "76094", "83600", "83410", "78940", "82041", "73441", "82229", "83800", "82273", "75084", "70541", "77809", "78791", "72629", "69324", "71220", "70027", "62262", "70302", "69579", "73427", "61414", "79798", "83829", "78135", "82325", "80320", "69842", "64906", "51032", "51410", "54056", "56223", "42536", "55140", "55155", "54028", "61408", "57945", "55122", "54798", "52047", "54887", "55598", "57449", "47308", "58051", "53607", "55835", "62554", "59994", "55728", "56353", "52325", "53095", "51815", "47674"]
            }, {
                "category": "Umum",
                "label": "JAKA PERKASA ABADI, PT",
                "values": ["3396", "3767", "3700", "1971", "4737", "3309", "3422", "3941", "2364", "3330", "3958", "3131", "3969", "3551", "2786", "3726", "4225", "3595", "3240", "3475", "3211", "2588", "2909", "3244", "3384", "3097", "2603", "3238", "3284", "3611", "3322", "3251", "3245", "2880", "2797", "3186", "3136", "3026", "2824", "3025", "2943", "2854", "3017", "3061", "3033", "2190", "2405", "2584", "2614", "2400", "2804", "2936", "3018", "3273", "2718", "2335", "2175", "1999", "2144", "2369", "2466", "2172", "2414", "2340", "2421", "2496", "2498", "2515", "2324", "2221", "2180", "2461", "2598", "2298", "2768", "2606", "2578", "3052", "3097", "2866", "2801", "2698", "2969", "2865", "2898"]
            }, {
                "category": "Umum",
                "label": "JAKARTA TANK TERMINAL, PT",
                "values": ["175200", "175200", "175200", "175200", "175200", "175200", "175200", "233400", "175200", "175200", "175200", "175200", "175200", "175200", "175200", "175200", "175200", "175200", "175200", "175200", "175200", "175200", "181950", "175200", "175200", "175200", "175200", "175200", "175200", "175200", "175200", "175200", "175200", "175200", "175200", "175200", "175200", "175200", "175200", "175200", "175200", "175200", "175200", "175200", "175200", "175200", "175200", "175200", "175200", "175200", "175200", "175200", "175200", "175200", "175200", "175200", "175200", "175200", "175200", "175200", "175200", "175200", "175200", "175200", "175200", "175200", "175200", "175200", "175200", "175200", "175200", "175200", "175200", "175200", "175200", "175200", "175200", "175200", "175200", "175200", "175200", "175200", "175200", "175200", "175200"]
            }, {
                "category": "Umum",
                "label": "KALLA LINES, PT",
                "values": ["3365", "3455", "3263", "2325", "4333", "1869", "1924", "3533", "1853", "2763", "3358", "3409", "3461", "2979", "2393", "2967", "3644", "3168", "3200", "2877", "2419", "2222", "3090", "3309", "2911", "2629", "2331", "2922", "3108", "3415", "3323", "3014", "3211", "2731", "2740", "3816", "3607", "2462", "2641", "2989", "2975", "3002", "2830", "2894", "3095", "2419", "3337", "2652", "3176", "2138", "2962", "3307", "2889", "3128", "2940", "2550", "2900", "2413", "2828", "2988", "2857", "1808", "3114", "2911", "2813", "3550", "3052", "2545", "3031", "2768", "2710", "2814", "3539", "2538", "3742", "3222", "3410", "3794", "3360", "2873", "3037", "2809", "3372", "3054", "2734"]
            }, {
                "category": "Umum",
                "label": "KALUKU MARITIMA UTAMA, PT",
                "values": ["725", "1075", "899", "568", "1184", "663", "675", "668", "675", "589", "804", "828", "1011", "910", "918", "244", "680", "747", "892", "1024", "803", "784", "688", "773", "676", "693", "801", "980", "699", "831", "1084", "967", "1107", "972", "803", "460", "730", "1097", "775", "917", "712", "925", "655", "700", "705", "637", "682", "637", "658", "531", "756", "731", "708", "731", "707", "730", "707", "719", "715", "494", "385", "424", "607", "543", "606", "744", "748", "782", "752", "608", "576", "486", "725", "560", "742", "704", "775", "724", "730", "598", "610", "624", "694", "621", "527"]
            }, {
                "category": "Umum",
                "label": "KANTIN IBU NENI",
                "values": ["78", "101", "102", "55", "529", "324", "266", "236", "301", "219", "308", "243", "288", "290", "292", "203", "76", "286", "282", "155", "272", "274", "287", "298", "319", "36", "422", "284", "310", "330", "182", "148", "201", "179", "192", "185", "208", "184", "150", "295", "341", "366", "293", "266", "285", "258", "276", "258", "266", "215", "357", "375", "305", "339", "328", "339", "110", "258", "286", "297", "338", "108", "302", "269", "312", "302", "305", "210", "334", "261", "320", "308", "251", "139", "292", "297", "229", "332", "324", "308", "95", "148", "180", "182", "203"]
            }, {
                "category": "Umum",
                "label": "KANTIN IBU SAIRAH",
                "values": ["52", "52", "188", "68", "212", "100", "93", "131", "124", "149", "168", "150", "153", "155", "158", "103", "52", "52", "52", "116", "52", "369", "177", "183", "164", "52", "52", "387", "151", "117", "52", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", ""]
            }, {
                "category": "Umum",
                "label": "KANTIN KARTIKA",
                "values": ["327", "600", "487", "460", "439", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", ""]
            }, {
                "category": "Umum",
                "label": "KANTIN SUPENI",
                "values": ["381", "740", "442", "528", "772", "404", "536", "552", "461", "554", "647", "575", "711", "573", "308", "639", "719", "872", "1116", "1083", "1088", "862", "1282", "1017", "487", "458", "176", "462", "429", "411", "471", "434", "453", "183", "269", "226", "255", "225", "176", "483", "176", "226", "243", "235", "185", "176", "179", "176", "176", "176", "198", "176", "176", "176", "176", "176", "176", "176", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", ""]
            }, {
                "category": "Umum",
                "label": "KANTIN SUPRAPTO",
                "values": ["95", "139", "87", "52", "107", "52", "83", "92", "85", "75", "109", "100", "95", "131", "135", "101", "52", "52", "76", "64", "59", "92", "88", "721", "442", "165", "148", "177", "175", "231", "232", "268", "287", "216", "256", "261", "250", "206", "158", "211", "244", "241", "258", "215", "236", "247", "239", "181", "265", "162", "212", "226", "211", "218", "211", "285", "213", "192", "213", "213", "227", "94", "172", "74", "79", "74", "94", "58", "68", "59", "70", "77", "65", "52", "97", "77", "92", "82", "81", "80", "131", "74", "84", "79", "57"]
            }, {
                "category": "Umum",
                "label": "KANTOR IMIGRASI TANJUNG PRIOK",
                "values": ["2159", "2618", "2099", "1962", "3930", "2883", "2416", "2250", "2618", "1922", "2573", "2309", "2410", "1651", "1145", "1621", "1637", "1502", "1803", "1242", "1496", "1122", "1773", "2091", "2431", "2328", "1298", "1414", "1396", "1392", "1521", "1361", "1454", "808", "1303", "1056", "1219", "1119", "1618", "1246", "1256", "1654", "1375", "1070", "982", "866", "1456", "1578", "1393", "1186", "1707", "2050", "1833", "1807", "1396", "949", "1036", "1085", "1260", "1995", "2010", "1904", "1805", "1154", "1051", "1159", "2058", "2004", "1967", "2003", "2112", "2439", "2927", "1912", "2426", "2422", "2214", "2865", "2811", "2843", "2992", "2209", "2384", "2392", "2449"]
            }, {
                "category": "Umum",
                "label": "STASIUN KARANTINA IKAN",
                "values": ["3944", "4213", "4057", "2814", "3774", "3548", "5575", "3969", "660", "2918", "3771", "4064", "4482", "4350", "3368", "4162", "4234", "4678", "3712", "3680", "3112", "2605", "3063", "3728", "3461", "2781", "2485", "2449", "2964", "3032", "3158", "2903", "3097", "2997", "3494", "3729", "4784", "3821", "3882", "4177", "4114", "3999", "3441", "3188", "3104", "2550", "3223", "3072", "3552", "2559", "3143", "3552", "2999", "3337", "3053", "2570", "2892", "2495", "2808", "679", "660", "660", "660", "660", "660", "769", "1320", "2045", "5492", "5198", "6045", "6382", "6761", "5157", "6598", "6017", "7312", "8316", "7925", "6898", "6546", "5451", "6463", "7447", "7836"]
            }, {
                "category": "Umum",
                "label": "KARANTINA TUMBUHAN",
                "values": ["4200", "4200", "5647", "17127", "19120", "17297", "16288", "17735", "13964", "13290", "15454", "17689", "18709", "13974", "7970", "9660", "12506", "18966", "18593", "17898", "16268", "14808", "19672", "20841", "22876", "20735", "17207", "22684", "22541", "25317", "26387", "23707", "23739", "19678", "22396", "22817", "22327", "20708", "18437", "21507", "21920", "21633", "20588", "20672", "20920", "16813", "20251", "19445", "22796", "18375", "20449", "22251", "22477", "23010", "20278", "21939", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", ""]
            }, {
                "category": "Umum",
                "label": "KARYA ABDI LUHUR, PT",
                "values": ["220", "220", "1223", "1223", "612", "647", "220", "418", "533", "528", "623", "595", "639", "503", "328", "621", "597", "695", "792", "760", "317", "281", "319", "472", "602", "220", "220", "1000", "1004", "664", "671", "682", "648", "674", "753", "564", "581", "536", "429", "611", "508", "565", "530", "512", "645", "582", "624", "582", "602", "485", "591", "572", "683", "869", "840", "470", "504", "490", "612", "624", "770", "699", "586", "569", "684", "742", "791", "677", "554", "632", "568", "689", "792", "816", "792", "790", "900", "1112", "1016", "677", "709", "578", "744", "864", "950"]
            }, {
                "category": "Umum",
                "label": "KARYA BUDI MULYA, CV",
                "values": ["161", "162", "176", "173", "166", "155", "253", "200", "157", "181", "164", "180", "190", "167", "131", "195", "149", "120", "100", "119", "96", "101", "123", "154", "170", "145", "123", "157", "111", "120", "126", "125", "164", "144", "175", "177", "188", "176", "168", "121", "133", "127", "143", "135", "167", "151", "173", "162", "186", "135", "303", "221", "205", "230", "222", "81", "209", "129", "209", "206", "207", "156", "178", "188", "198", "155", "128", "149", "85", "134", "267", "199", "222", "180", "175", "166", "", "", "", "", "", "", "", "", ""]
            }, {
                "category": "Umum",
                "label": "KARYA SUTJIAMIN, PT",
                "values": ["8886", "9706", "9653", "8499", "11499", "7546", "6722", "8410", "4698", "7267", "6663", "5776", "7216", "6513", "5057", "6397", "7961", "6319", "7176", "6692", "5979", "5665", "5697", "6220", "6172", "6677", "5860", "6142", "4373", "4049", "4187", "3843", "3945", "3916", "4013", "4474", "4194", "3765", "3687", "3646", "4704", "4989", "2879", "3552", "2781", "2253", "3029", "2794", "2937", "2193", "3061", "2994", "2797", "3068", "2969", "2744", "2895", "2820", "2310", "2584", "2774", "2145", "2581", "2531", "2550", "2892", "2734", "2548", "2657", "2478", "2697", "2709", "2860", "2290", "3206", "2952", "3039", "3147", "3037", "2721", "2643", "2479", "2216", "2377", "2493"]
            }, {
                "category": "Umum",
                "label": "KAWASAN BERIKAT NUSANTARA, PT",
                "values": ["140000", "360560", "243520", "156320", "254240", "261600", "244960", "238960", "221680", "154880", "189920", "221360", "205520", "152480", "140000", "140000", "144160", "142480", "140000", "140000", "140000", "140000", "140000", "140000", "140000", "140000", "140000", "140000", "140000", "140000", "140000", "140000", "140000", "140000", "140000", "140000", "140000", "140000", "140000", "140000", "140000", "140000", "140000", "140000", "140000", "140000", "140000", "140000", "111547", "33040", "43800", "42808", "41520", "39736", "38304", "42968", "41936", "35328", "50480", "60792", "52264", "28448", "36760", "37784", "37672", "40112", "33000", "37608", "80216", "35704", "26376", "31568", "42264", "25968", "31736", "28416", "41840", "52136", "43632", "58992", "37928", "32592", "43168", "33312", "26520"]
            }, {
                "category": "Umum",
                "label": "KENCANA UNGU ABADI, PT",
                "values": ["88", "88", "88", "88", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", ""]
            }, {
                "category": "Umum",
                "label": "KERETA API INDONESIA  PT",
                "values": ["195", "475", "619", "825", "859", "294", "327", "996", "339", "490", "1055", "1082", "919", "691", "372", "744", "975", "779", "1007", "887", "747", "624", "430", "397", "381", "378", "328", "375", "333", "329", "329", "328", "352", "681", "456", "352", "401", "353", "282", "397", "351", "331", "327", "307", "306", "276", "296", "276", "285", "230", "328", "317", "307", "317", "307", "317", "307", "312", "581", "680", "612", "579", "642", "615", "658", "654", "616", "627", "654", "591", "626", "598", "657", "602", "724", "555", "674", "725", "543", "367", "436", "574", "719", "710", "503"]
            }, {
                "category": "Umum",
                "label": "KHARISMA NUSA PLASINDO, PT",
                "values": ["391", "402", "380", "264", "715", "1540", "650", "264", "264", "264", "264", "264", "314", "264", "264", "264", "264", "358", "324", "377", "330", "295", "306", "477", "264", "265", "264", "264", "291", "312", "351", "334", "378", "264", "264", "364", "370", "264", "264", "264", "264", "264", "264", "323", "635", "397", "425", "264", "264", "264", "264", "264", "264", "264", "264", "264", "264", "264", "264", "264", "264", "264", "264", "264", "264", "264", "264", "264", "264", "264", "264", "264", "264", "264", "264", "264", "264", "264", "264", "264", "264", "264", "264", "264", "264"]
            }, {
                "category": "Umum",
                "label": "KIOS BURHANUDIN",
                "values": ["129", "174", "69", "145", "206", "86", "100", "105", "109", "65", "104", "74", "85", "80", "63", "104", "102", "84", "88", "93", "77", "72", "72", "74", "69", "72", "65", "75", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", ""]
            }, {
                "category": "Umum",
                "label": "KIOS DESI MUNAWAROH",
                "values": ["52", "52", "52", "52", "109", "52", "52", "52", "52", "52", "68", "63", "52", "64", "56", "68", "99", "77", "130", "122", "69", "65", "52", "89", "101", "92", "115", "149", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", ""]
            }, {
                "category": "Umum",
                "label": "KIOS ESTHY TAMBUNAN",
                "values": ["135", "202", "85", "202", "230", "92", "177", "184", "123", "163", "192", "115", "167", "186", "192", "192", "122", "173", "142", "201", "170", "119", "52", "52", "52", "52", "314", "334", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", ""]
            }, {
                "category": "Umum",
                "label": "KIOS HARYANTO",
                "values": ["152", "203", "140", "128", "306", "137", "198", "167", "165", "190", "175", "164", "185", "141", "138", "194", "231", "204", "202", "182", "160", "153", "156", "160", "146", "140", "116", "164", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", ""]
            }, {
                "category": "Umum",
                "label": "KIOS HASAN BISRI",
                "values": ["121", "171", "75", "140", "213", "98", "113", "129", "121", "88", "129", "91", "99", "71", "52", "112", "63", "86", "87", "123", "107", "110", "113", "110", "118", "122", "138", "137", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", ""]
            }, {
                "category": "Umum",
                "label": "KIOS HELMINAH",
                "values": ["52", "52", "52", "285", "484", "256", "285", "245", "403", "236", "377", "283", "345", "308", "273", "395", "436", "306", "337", "362", "334", "238", "395", "335", "324", "303", "335", "291", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", ""]
            }, {
                "category": "Umum",
                "label": "KIOS IFBENOLLO (SANTI)",
                "values": ["285", "331", "146", "334", "434", "246", "257", "259", "256", "180", "242", "248", "277", "269", "136", "168", "335", "313", "315", "315", "201", "202", "266", "294", "293", "282", "162", "306", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", ""]
            }, {
                "category": "Umum",
                "label": "KIOS KOMARIAH",
                "values": ["324", "416", "178", "399", "625", "300", "327", "336", "272", "325", "351", "325", "377", "315", "245", "429", "399", "354", "286", "288", "302", "283", "290", "314", "371", "395", "319", "300", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", ""]
            }, {
                "category": "Umum",
                "label": "KIOS KUSMA",
                "values": ["163", "303", "122", "52", "607", "195", "191", "283", "215", "155", "251", "196", "257", "233", "224", "373", "442", "365", "311", "238", "262", "218", "250", "296", "241", "239", "242", "256", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", ""]
            }, {
                "category": "Umum",
                "label": "KIOS LA DALI MADEALI",
                "values": ["278", "341", "158", "250", "559", "327", "350", "371", "354", "226", "213", "331", "386", "342", "287", "373", "322", "210", "352", "363", "332", "325", "357", "386", "356", "345", "341", "358", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", ""]
            }, {
                "category": "Umum",
                "label": "KIOS MARSENO",
                "values": ["189", "273", "144", "253", "381", "206", "149", "169", "129", "139", "113", "136", "147", "117", "76", "163", "189", "171", "118", "183", "205", "270", "322", "352", "335", "334", "302", "318", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", ""]
            }, {
                "category": "Umum",
                "label": "KIOS MISTA ANDRIYANTO",
                "values": ["298", "389", "173", "350", "527", "271", "302", "312", "321", "220", "380", "301", "349", "310", "232", "356", "377", "316", "296", "308", "276", "265", "286", "357", "354", "342", "314", "371", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", ""]
            }, {
                "category": "Umum",
                "label": "KIOS MOHAMMAD DJAELANI",
                "values": ["156", "188", "83", "887", "52", "52", "52", "200", "186", "195", "207", "99", "158", "149", "122", "172", "145", "117", "99", "96", "91", "88", "125", "147", "144", "136", "156", "181", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", ""]
            }, {
                "category": "Umum",
                "label": "KIOS MURDINA",
                "values": ["217", "317", "127", "287", "390", "190", "193", "174", "52", "52", "144", "258", "356", "318", "256", "447", "395", "285", "259", "270", "257", "275", "262", "52", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", ""]
            }, {
                "category": "Umum",
                "label": "KIOS RAWI IDRIS",
                "values": ["52", "52", "52", "52", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", ""]
            }, {
                "category": "Umum",
                "label": "KIOS SAMIYAH",
                "values": ["398", "552", "225", "493", "741", "422", "405", "605", "488", "351", "538", "436", "537", "467", "367", "483", "572", "532", "515", "509", "429", "420", "403", "458", "445", "450", "400", "299", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", ""]
            }, {
                "category": "Umum",
                "label": "KIOS SIMSON MANURUNG",
                "values": ["84", "138", "60", "161", "216", "105", "131", "117", "158", "100", "152", "120", "154", "135", "150", "252", "242", "203", "203", "198", "214", "184", "158", "266", "267", "213", "239", "279", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", ""]
            }, {
                "category": "Umum",
                "label": "KIOS SUHARTI",
                "values": ["52", "52", "52", "52", "52", "63", "99", "52", "52", "52", "52", "63", "105", "114", "87", "116", "166", "153", "172", "176", "179", "150", "119", "117", "76", "67", "56", "143", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", ""]
            }, {
                "category": "Umum",
                "label": "KIOS SURYATI",
                "values": ["490", "670", "220", "478", "859", "366", "452", "483", "507", "362", "560", "449", "561", "509", "409", "533", "613", "540", "495", "483", "512", "476", "465", "502", "494", "494", "518", "528", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", ""]
            }, {
                "category": "Umum",
                "label": "KIOS TASMAN",
                "values": ["360", "563", "255", "471", "650", "367", "399", "429", "461", "318", "476", "351", "457", "422", "355", "361", "444", "414", "396", "412", "358", "297", "306", "326", "320", "321", "265", "367", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", ""]
            }, {
                "category": "Umum",
                "label": "KOHARUDDIN",
                "values": ["36", "36", "36", "36", "36", "36", "36", "36", "36", "36", "36", "36", "36", "36", "36", "36", "36", "36", "36", "36", "36", "36", "36", "36", "36", "36", "36", "36", "36", "36", "36", "36", "36", "36", "36", "36", "36", "36", "36", "36", "36", "36", "36", "36", "36", "36", "36", "36", "36", "36", "36", "36", "42", "36", "38", "36", "40", "40", "36", "41", "36", "36", "36", "36", "36", "39", "36", "36", "37", "36", "36", "36", "36", "36", "36", "36", "36", "36", "36", "36", "43", "50", "39", "36", "36"]
            }, {
                "category": "Umum",
                "label": "KOP  JANGKAR MARITIM",
                "values": ["142", "359", "232", "296", "296", "300", "220", "210", "329", "248", "348", "330", "330", "393", "259", "367", "447", "448", "265", "339", "204", "111", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", ""]
            }, {
                "category": "Umum",
                "label": "KOPERASI PEGAWAI MARITIM",
                "values": ["231", "273", "184", "98", "269", "136", "134", "129", "118", "109", "130", "131", "118", "109", "53", "88", "110", "76", "36", "36", "41", "36", "44", "57", "51", "53", "428", "36", "36", "36", "36", "38", "36", "36", "43", "41", "36", "36", "76", "37", "36", "36", "36", "116", "94", "95", "102", "95", "185", "100", "130", "123", "132", "155", "150", "145", "156", "171", "167", "176", "169", "163", "188", "167", "219", "249", "287", "312", "306", "259", "302", "279", "271", "268", "348", "283", "287", "307", "345", "339", "319", "288", "316", "303", "390"]
            }, {
                "category": "Umum",
                "label": "KURNIA TUNGGAL NUGRAHA, PT",
                "values": ["863", "1053", "700", "657", "1974", "1062", "1303", "1395", "1153", "908", "1568", "1270", "1603", "1415", "995", "1553", "1757", "1493", "1620", "1423", "1043", "1163", "1204", "1519", "1414", "1292", "1173", "1444", "1315", "1798", "1700", "1476", "1441", "1390", "1630", "1950", "1572", "1597", "1570", "1817", "1646", "1568", "2006", "1804", "1666", "1505", "1613", "1505", "1555", "1254", "1786", "1728", "1857", "2007", "1941", "1469", "1692", "1581", "1886", "1966", "1930", "1729", "2047", "1960", "1921", "2072", "1929", "1843", "1554", "1693", "1497", "1673", "1850", "1567", "1860", "1840", "1807", "1966", "1711", "1529", "1306", "1266", "1316", "1483", "1379"]
            }, {
                "category": "Umum",
                "label": "LAPANTIGA LINTAS BUANA, PT",
                "values": ["3006", "3305", "3053", "1777", "3853", "3452", "2379", "2887", "1940", "2578", "2941", "2391", "3082", "3040", "2381", "3561", "3927", "3862", "3639", "3234", "2599", "2190", "2559", "2834", "2671", "2698", "2377", "2899", "2784", "2819", "2935", "2825", "2993", "3059", "3184", "3233", "3239", "3056", "2532", "3660", "3551", "3010", "3521", "3462", "3133", "2949", "3159", "2949", "3047", "2457", "3398", "3375", "3648", "4810", "4653", "5374", "4542", "4624", "4054", "3539", "3454", "2766", "3338", "3341", "3305", "3916", "3546", "3501", "3592", "3344", "3516", "3310", "3368", "2289", "3771", "3389", "3337", "3918", "3827", "3463", "3381", "3204", "3446", "3096", "2829"]
            }, {
                "category": "Umum",
                "label": "LAYANAN LANCAR LINTAS LOGISTIC, PT",
                "values": ["845", "1270", "1230", "850", "1978", "1100", "1372", "1215", "1089", "762", "1438", "1215", "1247", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", ""]
            }, {
                "category": "Umum",
                "label": "LEJARDI SUNARSO",
                "values": ["2435", "2438", "2436", "1403", "2872", "1203", "1957", "2268", "1232", "1528", "2717", "2839", "3337", "2642", "1983", "2263", "2707", "2414", "2416", "2097", "1854", "1773", "2138", "2493", "2377", "2324", "1674", "2690", "2561", "2524", "2443", "2499", "2493", "2453", "2458", "2455", "2860", "2486", "1989", "2338", "2163", "2318", "3180", "2532", "2347", "1873", "2251", "1999", "2216", "1823", "2133", "2273", "1789", "2029", "1902", "1645", "1846", "1728", "2072", "1886", "1971", "1108", "1956", "1908", "1925", "2468", "2143", "1682", "1752", "1618", "1818", "2136", "1935", "1356", "2461", "1890", "1788", "1953", "2253", "2076", "2091", "1775", "1568", "920", "1042"]
            }, {
                "category": "Umum",
                "label": "LEMO UTAMA",
                "values": ["100", "136", "191", "187", "175", "115", "140", "154", "153", "142", "153", "100", "126", "145", "114", "179", "206", "189", "149", "435", "404", "375", "528", "470", "593", "572", "512", "522", "506", "602", "673", "565", "551", "479", "505", "549", "606", "595", "572", "556", "610", "542", "552", "522", "502", "454", "523", "451", "466", "376", "579", "561", "764", "604", "583", "603", "118", "398", "550", "608", "607", "430", "364", "333", "302", "327", "300", "263", "301", "240", "298", "286", "286", "213", "281", "368", "665", "705", "631", "577", "564", "526", "630", "622", "540"]
            }, {
                "category": "Umum",
                "label": "LENA LIE LIANA LIE",
                "values": ["1736", "1757", "1747", "660", "2174", "1860", "1323", "1138", "660", "859", "714", "660", "660", "660", "1417", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "117", "242", "242", "242", "242", "242", "242", "242", "242", "1276", "1630", "1559", "1533", "1773", "1206", "1292", "1206", "1247", "1235", "1431", "1500", "1636", "1790", "1748", "1806", "1855", "1830", "1675", "1523", "1983", "1706", "2020", "1822", "1923", "2223", "1997", "1903", "2337", "1441", "847", "847", "847", "", "", "", "", "", "", "", "", "", "", "", ""]
            }, {
                "category": "Umum",
                "label": "LINTANG EMAS PASIFIK, PT",
                "values": ["2993", "2961", "2977", "1794", "3994", "1057", "3004", "2715", "1800", "3079", "3305", "2673", "3250", "3121", "2360", "2946", "3732", "3018", "3104", "2903", "2902", "2450", "2656", "3007", "2780", "2814", "2238", "2846", "2794", "3016", "2834", "2536", "2783", "2537", "2661", "2850", "2834", "2485", "1963", "2940", "2707", "2735", "2902", "2668", "2786", "2379", "2549", "2379", "2459", "1983", "2988", "3027", "3038", "3257", "3519", "2434", "2337", "4311", "2198", "2508", "2682", "1841", "2782", "2499", "2496", "3237", "3189", "2829", "3020", "2748", "2557", "2452", "2419", "1850", "2357", "2328", "2518", "2658", "2517", "2350", "2370", "2147", "2206", "2094", "1709"]
            }, {
                "category": "Umum",
                "label": "LINTAS SAMUDERA RAYA, PT",
                "values": ["920", "920", "920", "920", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", ""]
            }, {
                "category": "Umum",
                "label": "LUGAS BINACIPTASELAR, PT",
                "values": ["195", "268", "362", "218", "601", "249", "293", "261", "204", "139", "282", "197", "226", "309", "309", "188", "329", "340", "308", "278", "234", "202", "240", "153", "120", "128", "88", "130", "120", "128", "150", "155", "160", "123", "143", "133", "144", "139", "88", "130", "137", "119", "124", "115", "97", "88", "88", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", ""]
            }, {
                "category": "Umum",
                "label": "MAJUAN MASITTAH LATIEF",
                "values": ["549", "856", "597", "533", "969", "664", "1571", "1950", "1557", "1391", "2279", "2117", "2223", "2053", "1728", "2288", "2534", "2470", "2067", "1940", "1824", "1945", "2048", "2385", "2240", "2233", "1924", "2465", "1987", "2327", "2397", "2118", "1973", "1759", "2033", "2111", "2024", "2094", "1468", "2137", "2093", "1943", "2060", "2251", "1940", "1753", "1879", "1753", "1811", "1461", "2080", "2012", "2173", "2307", "2231", "2407", "1841", "1716", "1736", "1692", "1821", "1290", "1751", "1935", "1927", "2141", "2076", "2198", "1925", "1447", "1788", "1736", "1887", "1388", "1788", "1669", "1809", "1863", "1870", "1949", "1881", "1788", "1831", "1828", "1609"]
            }, {
                "category": "Umum",
                "label": "MANDIRI ABADI BERKAH, PT",
                "values": ["2614", "2355", "2426", "2371", "660", "660", "660", "660", "660", "725", "858", "700", "1090", "1341", "1165", "1116", "1666", "1392", "1536", "1369", "1387", "1216", "1609", "1593", "1565", "1613", "1198", "1590", "1662", "1699", "1804", "1443", "1458", "1376", "1486", "1568", "1436", "1265", "1084", "1565", "1481", "1617", "1535", "1426", "1436", "1138", "1219", "1138", "775", "728", "1126", "1129", "1036", "1091", "1016", "1064", "1029", "1047", "1427", "1768", "1651", "1087", "1957", "1801", "1632", "1963", "1715", "1550", "1883", "1629", "1847", "1746", "1789", "1387", "1904", "1852", "1793", "2066", "1879", "1739", "1924", "1653", "1743", "1590", "1174"]
            }, {
                "category": "Umum",
                "label": "MARITIM POLYKARYA TAMA, PT",
                "values": ["569", "416", "652", "338", "793", "502", "722", "650", "180", "479", "444", "507", "729", "730", "732", "690", "88", "616", "709", "409", "707", "482", "606", "594", "709", "558", "88", "897", "548", "553", "539", "563", "532", "441", "567", "665", "504", "547", "583", "512", "572", "630", "579", "478", "314", "284", "304", "284", "293", "236", "336", "527", "435", "174", "168", "410", "261", "435", "458", "432", "472", "217", "209", "398", "632", "515", "506", "317", "368", "417", "360", "570", "515", "216", "321", "439", "359", "401", "332", "417", "260", "88", "223", "88", "88"]
            }, {
                "category": "Umum",
                "label": "MARLINDO TIRTA NUSANTARA, PT",
                "values": ["1499", "1545", "1462", "1226", "2056", "1125", "1152", "1868", "1187", "1931", "1474", "1864", "1688", "1977", "1430", "1574", "2399", "2043", "1656", "1821", "1402", "1503", "1544", "1483", "2023", "1594", "1302", "1481", "1902", "1863", "2043", "1854", "1939", "1642", "1764", "1890", "1956", "1612", "1349", "1730", "1888", "2158", "2082", "2104", "2071", "1794", "1923", "1794", "1854", "1695", "2638", "2075", "2214", "2376", "2054", "1737", "1702", "2153", "1931", "2185", "2093", "1597", "2183", "1933", "2103", "2465", "2189", "2030", "2165", "1893", "2054", "2119", "2146", "1685", "2146", "2150", "2182", "2278", "2252", "2237", "2124", "2077", "1966", "2074", "1881"]
            }, {
                "category": "Umum",
                "label": "MERATUS LINE, PT",
                "values": ["15173", "15440", "14704", "10867", "17576", "14704", "16286", "14578", "8319", "11289", "13181", "10995", "13123", "12917", "8889", "12827", "14693", "13215", "14390", "13491", "12231", "10329", "11639", "11550", "10992", "11451", "10964", "10923", "11813", "12335", "12314", "11210", "12050", "10202", "11219", "11910", "11433", "10259", "9446", "11420", "11768", "11736", "11373", "11027", "10140", "9376", "10670", "9580", "10302", "8472", "10976", "11231", "11130", "12537", "12439", "11332", "11031", "9427", "10088", "10068", "10274", "7469", "10087", "10150", "9359", "11429", "10681", "9832", "10718", "9700", "10469", "10251", "10416", "8246", "11255", "10427", "10954", "12318", "11881", "11376", "11484", "10637", "10489", "8013", "7501"]
            }, {
                "category": "Umum",
                "label": "STASIUN METEOROLOGI MARITIM TANJUNG PRIOK",
                "values": ["5658", "5945", "5837", "5873", "7398", "6217", "6223", "5829", "4117", "4828", "5781", "5455", "5635", "8311", "8312", "2077", "5947", "6031", "6120", "6025", "5000", "4427", "4925", "5661", "6337", "4763", "4569", "5145", "5108", "5664", "5703", "6024", "6160", "5278", "6187", "6011", "6078", "5220", "5834", "6460", "7124", "6031", "6590", "8400", "6701", "5184", "5555", "7106", "6543", "5256", "6518", "6474", "6564", "6348", "5612", "5430", "5817", "5241", "6620", "7056", "7047", "5796", "7108", "6602", "7195", "8430", "7866", "7411", "7266", "7144", "8312", "7985", "8872", "7175", "8520", "7637", "8039", "8942", "8205", "7857", "7563", "6642", "6752", "6154", "6209"]
            }, {
                "category": "Umum",
                "label": "METITO INDONESIA, PT",
                "values": ["162740", "288950", "197525", "227226", "194087", "192791", "210714", "212729", "171048", "137589", "176411", "201452", "205285", "202474", "192264", "196692", "188058", "190335", "185300", "204514", "194817", "151250", "205955", "197628", "198659", "218173", "203466", "220853", "214301", "254880", "218185", "236241", "229113", "206478", "201912", "206767", "251443", "269176", "238189", "251990", "250686", "268093", "283971", "301243", "285893", "229008", "274613", "286151", "283379", "252756", "275557", "284121", "265512", "278562", "232185", "272987", "265187", "227559", "222592", "245880", "275180", "258908", "260255", "246417", "267171", "282379", "322290", "339085", "310029", "279820", "256041", "276951", "306992", "282700", "257230", "297041", "326871", "339168", "329261", "323536", "295872", "240567", "212869", "256354", "267701"]
            }, {
                "category": "Umum",
                "label": "MHE-DEMAG INDONESIA, PT",
                "values": ["469", "140", "140", "140", "140", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", ""]
            }, {
                "category": "Umum",
                "label": "MIKIE OLEO NABATI INDUSTRI, PT",
                "values": ["5450", "9580", "4876", "4794", "6481", "4641", "3300", "12240", "6687", "5626", "6178", "3300", "7390", "3432", "5292", "4828", "5811", "6851", "6100", "6239", "3603", "5898", "6468", "7019", "3749", "6493", "3319", "4282", "5002", "4002", "4979", "3300", "3300", "3571", "3543", "3719", "3498", "4141", "3300", "3996", "3300", "3300", "3381", "3910", "3510", "3300", "3300", "3300", "3437", "4237", "3749", "3902", "3996", "4488", "3641", "3621", "3300", "3300", "3300", "3300", "4069", "4349", "3967", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", ""]
            }, {
                "category": "Umum",
                "label": "MITRA SENTOSA ABADI, PT",
                "values": ["2037", "3013", "2305", "2777", "2820", "1677", "2055", "1931", "1299", "1017", "1489", "2467", "2245", "2774", "1569", "3076", "2769", "2355", "2456", "2509", "2314", "1720", "34636", "253522", "253690", "253558", "253808", "203677", "128202", "128551", "128207", "128119", "128124", "127779", "128299", "128074", "142301", "177597", "178599", "178716", "178414", "178164", "178374", "178525", "178048", "177807", "178124", "177983", "178193", "178090", "178398", "179808", "182569", "182713", "182335", "181758", "181780", "181552", "182606", "182452", "182828", "181553", "211967", "205836", "204524", "219856", "198436", "195265", "182830", "182201", "193745", "189410", "203481", "183230", "215221", "199030", "191542", "198903", "194050", "195534", "187213", "183640", "193727", "192957", "183866"]
            }, {
                "category": "Umum",
                "label": "MONANG SIANIPAR ABADI, PT",
                "values": ["88", "88", "88", "88", "88", "88", "88", "88", "88", "88", "88", "88", "88", "88", "88", "88", "88", "193", "120", "89", "164", "88", "88", "88", "88", "88", "88", "88", "88", "88", "88", "88", "88", "88", "88", "88", "88", "88", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", ""]
            }, {
                "category": "Umum",
                "label": "MUSTIKA ALAM LESTARI, PT",
                "values": ["31560", "52420", "39400", "31333", "32362", "35915", "34979", "37378", "33885", "32970", "32501", "39948", "43145", "41490", "43750", "42364", "38887", "42222", "44619", "41533", "37567", "37394", "43849", "45391", "45231", "46654", "44172", "41208", "43264", "49622", "43486", "40429", "44620", "42035", "46104", "46414", "48361", "42845", "45651", "41171", "41691", "44578", "45528", "42484", "39793", "35006", "46878", "52979", "54170", "42358", "50702", "52508", "41946", "46506", "45030", "44758", "39116", "41935", "41117", "54259", "53388", "43277", "40937", "42319", "39590", "45003", "44959", "43995", "43552", "41350", "41318", "41821", "49678", "48634", "48386", "44130", "44061", "45976", "40746", "40107", "43745", "36824", "43054", "39569", "38503"]
            }, {
                "category": "Umum",
                "label": "NASIONAL TRANPORTASI LOGISTIC, PT",
                "values": ["2804", "2326", "2307", "1179", "3578", "2813", "3028", "3267", "1658", "2180", "2880", "2091", "2618", "2345", "1724", "2082", "2458", "2707", "2184", "1941", "1337", "1737", "2163", "2189", "2006", "1600", "1857", "2331", "2425", "2429", "2163", "2332", "1595", "1810", "2333", "2255", "2405", "2342", "2046", "2251", "1831", "2512", "2065", "2300", "2279", "1874", "2253", "1908", "2648", "1966", "2493", "2537", "2017", "2636", "2509", "2248", "2289", "1955", "2181", "2176", "1879", "1219", "1538", "1559", "1497", "1671", "1618", "1714", "1437", "1121", "997", "901", "892", "804", "1126", "951", "1046", "1230", "1349", "1010", "1075", "918", "1058", "1023", "845"]
            }, {
                "category": "Umum",
                "label": "NIAGA SAMUDRA BUANA PO, PT",
                "values": ["340", "176", "176", "176", "176", "357", "319", "436", "239", "385", "447", "273", "338", "394", "307", "345", "443", "369", "398", "438", "377", "320", "410", "400", "393", "396", "317", "371", "354", "391", "408", "380", "411", "377", "448", "440", "382", "393", "283", "419", "415", "385", "366", "358", "309", "313", "335", "313", "514", "262", "418", "421", "407", "431", "461", "394", "435", "444", "395", "416", "476", "199", "524", "479", "434", "557", "567", "549", "556", "397", "504", "455", "441", "374", "557", "471", "469", "510", "458", "410", "445", "415", "380", "310", "277"]
            }, {
                "category": "Umum",
                "label": "OLAH JASA TRISARI ANDAL, PT",
                "values": ["3039", "5149", "3710", "3929", "5321", "4510", "4356", "3915", "2025", "2643", "3830", "3133", "4096", "3649", "2431", "3189", "2703", "3170", "2855", "2683", "2351", "2164", "2742", "2419", "2429", "2699", "2299", "2510", "1944", "1787", "1521", "1575", "1813", "1513", "2037", "1775", "3320", "2357", "2709", "2882", "2802", "2832", "2513", "2842", "2867", "2346", "2362", "2335", "3095", "2521", "2975", "3337", "3238", "2968", "2729", "2650", "2798", "2295", "2874", "3038", "3354", "3085", "3516", "2908", "3432", "4236", "3428", "3515", "3132", "3168", "3604", "3159", "2688", "2378", "2575", "2465", "2545", "2715", "2769", "2400", "2565", "2271", "2422", "2412", "2569"]
            }, {
                "category": "Umum",
                "label": "ORGANDA DKI JAKARTA, PT",
                "values": ["528", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", ""]
            }, {
                "category": "Umum",
                "label": "KANTOR OTORITAS PELABUHAN",
                "values": ["2640", "2640", "2640", "2640", "2640", "2640", "2640", "2640", "2640", "2640", "9711", "13319", "12927", "16213", "14099", "15225", "17676", "18579", "17175", "17306", "14726", "13339", "17248", "18550", "17578", "18528", "17136", "17955", "18436", "20919", "20670", "20543", "20875", "17529", "19794", "20578", "20547", "18876", "17103", "19821", "19001", "20074", "19424", "18098", "17472", "15391", "19007", "16426", "18431", "15429", "16870", "18311", "16465", "18092", "17593", "15886", "16019", "15102", "14086", "16422", "16757", "12996", "16011", "15301", "6658", "2882", "2882", "9843", "15329", "13904", "14162", "15737", "17156", "13838", "16759", "15897", "16332", "19703", "18848", "16836", "16260", "13278", "12452", "10334", "13998"]
            }, {
                "category": "Umum",
                "label": "PANCA BINA PERSADA, PT",
                "values": ["449", "743", "544", "580", "774", "458", "605", "675", "479", "616", "557", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", ""]
            }, {
                "category": "Umum",
                "label": "PANIN BANK, PT",
                "values": ["4290", "3879", "4085", "5196", "7419", "5789", "5780", "5169", "4151", "4196", "1660", "4918", "5305", "5842", "3451", "4354", "4735", "4677", "4223", "4394", "3853", "4011", "3905", "4623", "4334", "4288", "4348", "3961", "3884", "4615", "4221", "4186", "4637", "3781", "4175", "3737", "4089", "3634", "4247", "4267", "4203", "4333", "4145", "3842", "3850", "3593", "3849", "3593", "3713", "3744", "4262", "3512", "2948", "3408", "3301", "3052", "3417", "2973", "3551", "3672", "3773", "2910", "3510", "3367", "3194", "3877", "3566", "3383", "3366", "3045", "3215", "3337", "3654", "3116", "3686", "3009", "3179", "3637", "3453", "3216", "3287", "2872", "3020", "2912", "2951"]
            }, {
                "category": "Umum",
                "label": "PARVI INDAH PERSADA, PT",
                "values": ["1778", "1430", "2139", "1162", "1926", "1535", "1801", "2083", "1134", "1744", "1688", "1077", "1190", "665", "826", "1164", "906", "623", "1065", "1318", "1295", "798", "1033", "1287", "1501", "1461", "1379", "1493", "1603", "1903", "1857", "1770", "1724", "891", "1152", "1482", "1589", "1460", "1251", "1561", "1625", "1431", "1442", "1509", "1673", "1511", "1620", "1511", "1562", "1260", "1593", "1542", "1784", "2061", "1993", "2059", "1672", "1866", "1713", "2074", "1885", "1582", "1989", "1751", "1807", "1997", "1760", "1640", "1605", "1515", "1654", "1594", "1715", "1350", "1495", "1372", "1422", "1627", "1545", "1410", "1412", "1334", "1541", "1553", "1511"]
            }, {
                "category": "Umum",
                "label": "PBM OLAH JASA ANDAL, PT",
                "values": ["94512", "110151", "174260", "165897", "150755", "144153", "142153", "97221", "99150", "96345", "96345", "106129", "151864", "109591", "96805", "102968", "128734", "98319", "101103", "100066", "99058", "98684", "99191", "99931", "100060", "99712", "99055", "99813", "109226", "157265", "120012", "136640", "153411", "121611", "186862", "194676", "191348", "377061", "265867", "323867", "279405", "314534", "331396", "441310", "306686", "284511", "311785", "321179", "335247", "281319", "269149", "342379", "290674", "311568", "331029", "387653", "290934", "233100", "308182", "227998", "283621", "235132", "278817", "238138", "267515", "255010", "270049", "313059", "229471", "190369", "243710", "247728", "218422", "100475", "112922", "101052", "100913", "132368", "119123", "111984", "100428", "99016", "99761", "110129", "195361"]
            }, {
                "category": "Umum",
                "label": "PELNI, PT",
                "values": ["11312", "17674", "23563", "16806", "21034", "18268", "18845", "15776", "15525", "14568", "16637", "15134", "15826", "20723", "18295", "21829", "24245", "26108", "27316", "26999", "24101", "21168", "27083", "26112", "26272", "26955", "25952", "27550", "29006", "30744", "32573", "31691", "30917", "28318", "31040", "30257", "31173", "26330", "22290", "24339", "22399", "21489", "22244", "22164", "23213", "19098", "22544", "20552", "24213", "21170", "24684", "24286", "24200", "27680", "27403", "25235", "26767", "22800", "22687", "23241", "24253", "19393", "23043", "22486", "22234", "25642", "25025", "24441", "24773", "21289", "24589", "25766", "27791", "21882", "24659", "22644", "22227", "25700", "24888", "24820", "24841", "20580", "21499", "20352", "20601"]
            }, {
                "category": "TNI, Polri",
                "label": "POLDA METROJAYA",
                "values": ["31176", "30984", "16916", "19334", "19406", "20724", "19585", "24724", "16703", "14510", "23115", "26813", "31247", "29969", "28962", "27121", "23130", "36506", "33717", "32737", "29681", "26041", "32233", "32254", "33928", "31924", "30373", "32525", "32255", "34957", "36863", "35465", "35289", "31609", "35837", "33911", "36687", "35261", "33289", "36468", "35421", "36107", "38040", "37352", "36824", "31002", "34940", "34405", "36537", "32134", "35993", "38039", "37818", "39884", "34932", "34565", "32354", "29033", "33146", "34464", "37455", "32233", "36080", "33739", "33536", "38806", "34325", "34954", "35775", "32458", "33460", "37566", "38668", "32474", "35945", "35519", "34188", "39929", "37239", "34955", "33409", "31444", "34248", "35296", "36053"]
            }, {
                "category": "TNI, Polri",
                "label": "POLRI",
                "values": ["16480", "17764", "37252", "22263", "32476", "24596", "19240", "16421", "14166", "16398", "17304", "21810", "23312", "26344", "21928", "25697", "25152", "27614", "30013", "29029", "21439", "22726", "25974", "29514", "26963", "22912", "19085", "29389", "30734", "48146", "40215", "18005", "18193", "15934", "18200", "19276", "17669", "18587", "16182", "19815", "20943", "20002", "22578", "18783", "17007", "16416", "15160", "19592", "14503", "11494", "17591", "15584", "20004", "15281", "11421", "9347", "12680", "10389", "14327", "11840", "13343", "10939", "14808", "12818", "11217", "18271", "11396", "10519", "13812", "11269", "14077", "13036", "13770", "13313", "19621", "17455", "17116", "18384", "25692", "14668", "17269", "15132", "14095", "12956", "12413"]
            }, {
                "category": "Umum",
                "label": "PRIMA BATAVIA INDOBULKING, PT",
                "values": ["8450", "5280", "5280", "5280", "5280", "5280", "5280", "5280", "5280", "5280", "5280", "5280", "6917", "5280", "6630", "5280", "5280", "5280", "5280", "5692", "5984", "6122", "6082", "7070", "7064", "5947", "6599", "6161", "5742", "8014", "7362", "9222", "8854", "6826", "7324", "7102", "7960", "5481", "5455", "5280", "5280", "5280", "5280", "5280", "6458", "5280", "7369", "7420", "7130", "6317", "5280", "5280", "5280", "5280", "5280", "5280", "5280", "5280", "5280", "6182", "5280", "5280", "7158", "6569", "5280", "7573", "6840", "7743", "6582", "5685", "5280", "5280", "6134", "5280", "5280", "6117", "7347", "6737", "5627", "6383", "5280", "5280", "5376", "5533", "5280"]
            }, {
                "category": "Umum",
                "label": "PRIMA NUR PANURJWAN, PT",
                "values": ["24582", "28533", "26397", "25664", "30099", "26430", "27586", "29075", "22060", "22804", "24909", "26739", "31234", "27918", "23184", "24419", "24704", "27808", "28823", "26673", "22997", "22784", "29407", "30078", "30016", "29727", "28267", "30290", "29889", "30726", "29296", "28376", "28020", "27697", "32161", "31703", "32615", "28511", "25440", "26064", "26758", "26765", "26627", "28041", "27614", "24222", "27653", "25608", "26781", "21657", "24655", "24078", "24017", "26084", "24703", "23072", "20933", "19223", "16329", "19041", "18708", "16345", "17825", "16589", "15990", "17808", "16164", "16270", "15840", "14690", "15931", "15694", "16827", "13852", "15165", "14449", "15104", "16508", "16094", "14851", "13807", "12087", "14382", "13699", "13797"]
            }, {
                "category": "Umum",
                "label": "PRIMANATA JASA PERSADA, PT",
                "values": ["2606", "2212", "2409", "2311", "2385", "2368", "528", "528", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", ""]
            }, {
                "category": "Umum",
                "label": "PRIMATAMA SEJAHTERA MANDIRI, PT",
                "values": ["440", "495", "626", "849", "1038", "671", "568", "497", "531", "526", "485", "482", "521", "547", "471", "513", "475", "440", "440", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", ""]
            }, {
                "category": "IPC Cabang",
                "label": "JASA ARMADA INDONESIA TBK, PT",
                "values": ["31700", "34870", "53805", "47743", "49689", "48839", "47372", "49651", "44740", "43890", "50778", "33049", "34618", "28820", "28820", "28820", "37354", "43336", "40184", "33255", "30034", "26339", "33921", "36237", "33444", "36345", "30303", "40402", "42150", "47178", "45508", "43154", "44160", "40265", "42743", "43269", "44179", "41972", "41932", "41905", "45132", "39843", "43157", "42788", "39928", "35715", "40622", "41261", "46495", "34671", "40674", "40221", "41848", "43350", "37056", "35128", "36824", "34331", "36645", "36762", "37905", "33537", "35539", "36368", "37350", "37170", "38436", "34048", "28250", "29602", "29613", "31734", "30177", "25627", "26149", "25172", "24450", "28305", "28014", "28438", "25806", "26901", "26061", "34449", "27614"]
            }, {
                "category": "IPC Group",
                "label": "JAKARTA INTERNATIONAL CONTAINER TERMINAL, PT",
                "values": ["1179150", "1704025", "1225031", "882544", "901537", "898615", "879517", "872572", "876898", "876850", "888874", "895387", "900175", "906538", "878629", "881806", "888040", "760920", "699511", "699543", "638381", "590600", "678684", "673048", "697193", "657826", "627063", "646890", "642999", "664598", "646311", "630665", "655906", "496347", "336223", "330804", "348990", "738746", "717619", "728020", "710376", "710180", "790980", "1137380", "961725", "640053", "713422", "693300", "729460", "677860", "735106", "706456", "692570", "735292", "692520", "760420", "736580", "620980", "682820", "835680", "663520", "519280", "569440", "634720", "675840", "611440", "672800", "874320", "574240", "505760", "550160", "583920", "672400", "590960", "604080", "575840", "588240", "637280", "746720", "775280", "615360", "518800", "592240", "615840", "617040"]
            }, {
                "category": "Umum",
                "label": "MULTI TERMINAL INDONESIA, PT",
                "values": ["69107", "119668", "121783", "96773", "111028", "109378", "104599", "103570", "103727", "99249", "110619", "118403", "123515", "120260", "110887", "119433", "120862", "137854", "131323", "126095", "112056", "101814", "120356", "115471", "123997", "117971", "106655", "119648", "127158", "139124", "132721", "125051", "123018", "108467", "114353", "114736", "124842", "117587", "106219", "116822", "113373", "112758", "114273", "152990", "277430", "207210", "218135", "218399", "224573", "212334", "234821", "274152", "249800", "274959", "229020", "224413", "273410", "209930", "221680", "313605", "320384", "206467", "217488", "216486", "222757", "224510", "261031", "296715", "339271", "292859", "266884", "264601", "320428", "260271", "278876", "273239", "269169", "282862", "309658", "336302", "343673", "340276", "347310", "345110", "351332"]
            }, {
                "category": "Umum",
                "label": "NEW PRIOK CONTAINER TERMINAL ONE, PT",
                "values": ["4669", "7762", "9368", "8985", "7230", "6551", "7301", "7546", "5660", "6181", "7117", "7783", "7397", "7284", "6941", "7707", "7326", "7642", "7192", "7464", "6929", "6009", "7174", "7129", "7347", "7364", "6557", "6833", "6859", "7102", "7230", "6649", "5456", "211505", "244983", "244740", "474701", "577632", "577023", "577613", "577868", "577567", "577624", "776554", "832273", "707580", "769909", "769654", "1030634", "1054083", "1078458", "1283310", "1164753", "1274086", "1263509", "1413452", "1096484", "1052866", "1122189", "1311203", "1532451", "1053432", "1343931", "1278638", "1242503", "1214532", "1277839", "1490689", "1108311", "1053269", "1132909", "1194622", "1279287", "1053445", "1203099", "1091396", "1163756", "1082614", "1171950", "1289957", "1053364", "1053049", "1075890", "1052909", "1053399"]
            }, {
                "category": "Umum",
                "label": "PELABUHAN TANJUNG PRIOK, PT",
                "values": ["764712", "817091", "736111", "649004", "767806", "709743", "669907", "685001", "634141", "625124", "676514", "444833", "457316", "497886", "467707", "482276", "486088", "377521", "355826", "347285", "327156", "291075", "382096", "439594", "470346", "462588", "434994", "460189", "465516", "531159", "509995", "511549", "519086", "486278", "531797", "545176", "550745", "512599", "498588", "524438", "524377", "516460", "503268", "495471", "485249", "452817", "509975", "502925", "527335", "473181", "515072", "507947", "459971", "491683", "470167", "500013", "501578", "457908", "512026", "510139", "532815", "471912", "536229", "299872", "278597", "301000", "279058", "304797", "303573", "291546", "293228", "292734", "292070", "505756", "523693", "526172", "518394", "540201", "523932", "548644", "544445", "509459", "534786", "621096", "595276"]
            }, {
                "category": "Umum",
                "label": "RATO JAYA MANDIRI, PT",
                "values": ["88", "88", "389", "389", "823", "554", "802", "550", "447", "310", "321", "264", "536", "418", "307", "432", "510", "289", "129", "91", "47", "242", "242", "242", "242", "242", "242", "242", "242", "242", "242", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", ""]
            }, {
                "category": "Umum",
                "label": "RITRA SAFIRA, PT",
                "values": ["2472", "2573", "2523", "1804", "3110", "2670", "1827", "2849", "1677", "2264", "2893", "2172", "2948", "2722", "2204", "2481", "3232", "2707", "2930", "2925", "2448", "2245", "2867", "2748", "2738", "2759", "2151", "2694", "2838", "2852", "2795", "2665", "2623", "2493", "2516", "2528", "2822", "2451", "1917", "2741", "2984", "2740", "2951", "2430", "2688", "2172", "2327", "2172", "2244", "1762", "2764", "3027", "3445", "2733", "2547", "2229", "2292", "2261", "2195", "2340", "2572", "1396", "2584", "2576", "2241", "2846", "2597", "2185", "2384", "2237", "2451", "2402", "2339", "1816", "2592", "2433", "2529", "2922", "2467", "2192", "2296", "2041", "2289", "2104", "1502"]
            }, {
                "category": "Umum",
                "label": "RIZWAN THAHER",
                "values": ["89", "108", "90", "55", "135", "88", "91", "79", "73", "83", "93", "93", "99", "107", "51", "98", "109", "92", "95", "95", "84", "82", "87", "99", "96", "81", "54", "90", "94", "104", "93", "84", "94", "81", "122", "115", "114", "36", "36", "36", "36", "36", "36", "36", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", ""]
            }, {
                "category": "Umum",
                "label": "RM RINDU ALAM",
                "values": ["671", "908", "775", "519", "1268", "805", "846", "829", "724", "711", "838", "748", "826", "910", "821", "559", "901", "858", "803", "876", "743", "715", "754", "956", "906", "851", "639", "800", "828", "893", "801", "892", "874", "766", "850", "862", "847", "840", "648", "903", "973", "898", "936", "881", "830", "788", "1059", "741", "765", "924", "1127", "904", "908", "967", "935", "965", "787", "772", "978", "904", "1030", "617", "976", "971", "911", "1032", "1085", "983", "875", "877", "1034", "1049", "783", "554", "665", "791", "1004", "999", "893", "859", "863", "778", "779", "644", "665"]
            }, {
                "category": "Umum",
                "label": "RORO SAMUDERA PUTRA HARMONIMAS, PT",
                "values": ["2418", "2244", "2312", "1772", "2480", "2125", "1863", "2380", "1240", "1952", "2390", "1993", "2317", "2499", "1812", "2168", "2806", "2459", "2457", "2090", "1465", "1116", "1403", "1380", "1266", "1255", "1158", "1422", "1223", "1430", "1560", "1420", "1777", "2275", "1659", "1671", "1836", "1495", "1281", "1477", "1536", "1320", "1620", "1356", "1243", "1053", "1129", "1053", "1095", "829", "1330", "1414", "1532", "1881", "1988", "1786", "1317", "1309", "1223", "1525", "1210", "738", "1390", "1557", "1615", "2007", "2010", "1431", "1698", "1358", "1366", "1103", "1132", "848", "1217", "1230", "1190", "1409", "1374", "1340", "1194", "1091", "1248", "858", "616"]
            }, {
                "category": "Umum",
                "label": "ROSIBA PRATAMA, PT",
                "values": ["2280", "2090", "2132", "880", "2832", "1500", "1790", "2130", "1234", "1265", "1405", "1424", "1424", "1262", "1046", "1171", "1637", "1241", "1396", "1214", "1012", "977", "903", "1106", "1078", "1256", "1034", "1158", "1050", "1498", "1954", "1910", "2109", "1644", "1554", "2600", "1968", "1697", "1557", "1914", "1976", "2172", "1774", "1562", "1754", "1376", "1475", "1376", "1422", "1147", "1633", "1635", "1845", "2185", "2132", "2203", "1658", "1254", "1374", "1490", "1514", "793", "1595", "1171", "1181", "1392", "1408", "1272", "1515", "866", "818", "746", "755", "440", "440", "440", "440", "440", "440", "440", "440", "440", "440", "440", "440"]
            }, {
                "category": "Umum",
                "label": "S.M.A.R.T. CORPORATION, PT",
                "values": ["5340", "7228", "5421", "5626", "7371", "6308", "5835", "6026", "6184", "4034", "6830", "5026", "6471", "5574", "4267", "6450", "6294", "5765", "6005", "5915", "5200", "4117", "5154", "4824", "5923", "4780", "5004", "5086", "4841", "5611", "5852", "4190", "5013", "4463", "4798", "4630", "4534", "3875", "3990", "4144", "3703", "3666", "4015", "3853", "4116", "3231", "3790", "3305", "4065", "4279", "4240", "4051", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", ""]
            }, {
                "category": "Umum",
                "label": "SADIKIN H",
                "values": ["36", "162", "154", "72", "297", "195", "223", "205", "190", "192", "221", "266", "267", "295", "235", "267", "409", "459", "471", "467", "388", "364", "383", "431", "458", "488", "279", "405", "411", "385", "424", "455", "450", "438", "448", "434", "451", "445", "315", "460", "480", "514", "480", "540", "415", "458", "491", "458", "547", "454", "543", "496", "506", "409", "517", "534", "375", "466", "449", "450", "547", "498", "517", "492", "495", "498", "478", "347", "188", "167", "189", "185", "217", "191", "187", "191", "177", "193", "185", "180", "179", "160", "169", "139", "130"]
            }, {
                "category": "Umum",
                "label": "SALAM PACIFIC INDONESIA LINES, PT",
                "values": ["140", "140", "140", "140", "140", "140", "140", "140", "140", "1820", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "505", "1443"]
            }, {
                "category": "Umum",
                "label": "SALIM IVOMAS PRATAMA, PT",
                "values": ["69200", "69200", "69200", "69200", "229460", "148220", "69200", "96940", "69200", "69200", "69200", "69200", "69200", "69200", "69200", "69200", "69200", "69200", "69200", "69200", "111220", "69200", "69200", "69200", "69200", "69200", "69200", "69200", "77640", "105980", "352360", "293160", "195940", "186660", "144660", "110580", "175000", "138760", "280120", "223540", "116220", "69200", "69200", "69200", "69200", "69200", "69200", "69200", "69200", "94400", "69200", "69200", "69200", "69200", "69200", "69200", "69200", "69200", "69200", "69200", "69200", "119080", "69200", "69200", "69200", "69200", "69200", "69200", "69200", "69200", "69200", "69200", "69200", "107220", "69200", "69200", "69200", "94160", "75900", "74440", "69200", "69200", "69200", "69200", "159100"]
            }, {
                "category": "Umum",
                "label": "SAMUDRA MEGATAMA, PT",
                "values": ["2677", "2794", "2645", "949", "2680", "2680", "2409", "3220", "1786", "2588", "3423", "2894", "3488", "3112", "2225", "2975", "3766", "3308", "3355", "3192", "2893", "2571", "3299", "3137", "3066", "2870", "1968", "2959", "2997", "3273", "3248", "3170", "3027", "2677", "3010", "3717", "3024", "3153", "3073", "3756", "3605", "3593", "3438", "3442", "3847", "2662", "3392", "2853", "3120", "1773", "2972", "2393", "2054", "2437", "2218", "1901", "1417", "920", "920", "920", "920", "920", "920", "920", "920", "920", "920", "920", "920", "920", "1869", "1851", "2363", "2009", "2331", "2036", "1745", "2195", "2147", "2028", "1959", "1646", "1908", "1773", "1887"]
            }, {
                "category": "Umum",
                "label": "SARANA BANDAR NASIONAL, PT",
                "values": ["2641", "52", "52", "52", "52", "52", "6642", "6316", "3658", "2627", "2965", "2117", "2757", "2183", "1633", "3019", "3392", "3106", "2792", "2649", "2050", "1783", "2147", "2097", "2137", "2282", "2276", "2100", "1166", "1166", "1355", "1225", "1227", "1191", "1353", "1271", "5302", "5494", "5560", "5544", "5578", "5547", "5565", "5449", "5321", "5342", "5499", "5441", "5510", "5450", "5526", "5484", "5409", "5503", "5496", "5519", "5580", "5366", "5500", "5437", "5531", "5641", "5510", "5103", "5148", "5111", "5142", "4948", "4919", "4796", "4796", "4796", "4796", "4796", "4796", "5030", "5054", "4968", "5064", "5156", "4796", "4796", "4796", "4796", "4796"]
            }, {
                "category": "Umum",
                "label": "SEMPURNA, PT",
                "values": ["2962", "3074", "2885", "1997", "3655", "1845", "2050", "2822", "1676", "2247", "2648", "2247", "2787", "2054", "1159", "1772", "1831", "1621", "1526", "1550", "440", "440", "440", "440", "440", "440", "440", "440", "440", "525", "564", "763", "999", "860", "987", "1014", "956", "914", "1073", "1089", "1083", "999", "1038", "1055", "964", "748", "801", "748", "568", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", ""]
            }, {
                "category": "Umum",
                "label": "SOPIYAH",
                "values": ["46", "43", "36", "36", "36", "36", "36", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", ""]
            }, {
                "category": "Umum",
                "label": "SOUVI DHANY",
                "values": ["2081", "1946", "2014", "1592", "3249", "2547", "1928", "2173", "1223", "1821", "2466", "1962", "2241", "1955", "1615", "1790", "2372", "1932", "2067", "2045", "1533", "1332", "1523", "1579", "1349", "1336", "845", "1423", "1530", "1603", "1526", "1331", "1784", "1525", "1482", "1480", "1357", "1478", "1039", "1644", "1329", "1265", "1341", "1044", "1169", "917", "983", "917", "948", "765", "1231", "1278", "1410", "1539", "1511", "1561", "1564", "1272", "1223", "1319", "1359", "989", "1557", "1435", "1358", "1801", "1805", "1466", "1823", "1674", "1488", "1935", "1645", "1006", "1993", "1775", "1825", "1966", "1408", "1872", "2349", "1162", "1276", "1169", "561"]
            }, {
                "category": "Umum",
                "label": "SRI DARMANI",
                "values": ["36", "38", "36", "36", "50", "36", "36", "36", "36", "36", "36", "36", "36", "36", "36", "36", "36", "36", "36", "36", "36", "36", "36", "36", "36", "36", "36", "36", "36", "36", "36", "36", "36", "36", "36", "36", "36", "36", "36", "36", "36", "36", "36", "36", "36", "36", "36", "36", "36", "36", "36", "36", "36", "36", "36", "36", "36", "36", "36", "36", "36", "36", "36", "36", "36", "36", "36", "36", "36", "36", "36", "36", "36", "36", "36", "36", "36", "36", "36", "36", "36", "36", "36", "36", "36"]
            }, {
                "category": "Umum",
                "label": "SRIJAYA SEGARA UTAMA, PT",
                "values": ["441", "801", "560", "560", "694", "546", "600", "595", "398", "456", "631", "548", "580", "619", "414", "611", "536", "556", "529", "526", "385", "348", "396", "287", "458", "495", "391", "418", "388", "535", "451", "353", "409", "362", "430", "478", "566", "488", "261", "402", "430", "413", "458", "516", "354", "373", "399", "373", "448", "200", "261", "270", "264", "249", "240", "185", "173", "88", "143", "143", "143", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", ""]
            }, {
                "category": "Umum",
                "label": "SUMATRA PUTRA, PT",
                "values": ["1610", "1884", "1612", "1043", "5326", "2514", "2783", "2684", "1470", "1963", "3076", "5726", "5348", "1859", "1388", "2134", "2142", "2146", "4505", "4763", "4911", "5626", "5615", "4498", "5051", "2976", "2907", "4048", "3727", "4018", "2291", "1984", "1134", "985", "1655", "1663", "1800", "2258", "1738", "1852", "1729", "1617", "1724", "1717", "1578", "1425", "1527", "1425", "1272", "1188", "1590", "2166", "2095", "3183", "3080", "3078", "2979", "3028", "3119", "1817", "2668", "2635", "2654", "1310", "2443", "4396", "1824", "6662", "8854", "7067", "7016", "6036", "6413", "5418", "4672", "2497", "3780", "4908", "4743", "2142", "3870", "5930", "6583", "6004", "4283"]
            }, {
                "category": "Umum",
                "label": "SUMBER NIAGA ABADI, PT",
                "values": ["2327", "2609", "2468", "2319", "3203", "2168", "2221", "2407", "1512", "1870", "2722", "1942", "2009", "2375", "1687", "2284", "2521", "2429", "2211", "2443", "1763", "1622", "1603", "1890", "2222", "2264", "1383", "1886", "1945", "1827", "2241", "1935", "1881", "1768", "2093", "2074", "2303", "2053", "1555", "1534", "1324", "1767", "1582", "1723", "1989", "1414", "1334", "1282", "1711", "1355", "1558", "1564", "1677", "1242", "1146", "1086", "1119", "1299", "1297", "1175", "1096", "724", "1124", "1054", "1231", "1244", "926", "1074", "1233", "1038", "1381", "1381", "1486", "1029", "1316", "1222", "1307", "1389", "1266", "1456", "1429", "1136", "1228", "1571", "671"]
            }, {
                "category": "Umum",
                "label": "SURATMI",
                "values": ["165", "197", "166", "58", "141", "128", "145", "216", "124", "123", "184", "160", "187", "225", "156", "204", "226", "225", "148", "211", "152", "109", "162", "154", "169", "117", "93", "157", "130", "154", "159", "139", "108", "90", "123", "163", "137", "58", "36", "36", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", ""]
            }, {
                "category": "Umum",
                "label": "SURYA SAMUDERA PRATAMA, PT",
                "values": ["88", "420", "524", "371", "736", "415", "489", "410", "548", "582", "619", "610", "657", "570", "442", "609", "521", "405", "497", "417", "393", "368", "461", "450", "507", "430", "401", "466", "467", "591", "577", "536", "521", "469", "531", "594", "516", "435", "111", "223", "319", "340", "383", "409", "391", "340", "459", "364", "479", "304", "88", "521", "734", "454", "439", "438", "392", "375", "412", "442", "509", "396", "488", "439", "422", "485", "435", "457", "451", "409", "435", "450", "371", "88", "88", "88", "88", "88", "88", "88", "88", "88", "88", "88", "88"]
            }, {
                "category": "Umum",
                "label": "KANTOR SYAHBANDAR TANJUNG PRIOK",
                "values": ["5440", "7360", "5058", "4760", "5988", "7006", "6206", "11246", "8911", "7545", "8004", "24805", "29672", "29952", "25986", "29848", "30203", "32829", "33630", "34149", "28803", "22930", "30587", "32689", "32699", "34056", "29920", "33308", "34564", "38032", "38221", "35769", "38357", "34514", "40016", "41100", "41125", "53169", "34753", "39658", "36668", "37453", "35240", "33638", "35371", "29753", "35817", "33937", "36764", "28775", "32750", "35574", "32472", "32284", "26885", "22311", "28173", "26604", "27518", "30163", "28818", "24557", "28530", "27867", "29991", "34294", "32058", "31112", "32869", "26037", "29157", "31632", "31819", "27662", "33796", "28962", "32189", "40706", "37658", "37529", "37506", "29542", "32854", "33336", "33148"]
            }, {
                "category": "Umum",
                "label": "SYAMSUDIN",
                "values": ["48", "54", "36", "36", "36", "36", "43", "40", "37", "43", "47", "83", "129", "167", "123", "36", "193", "182", "101", "103", "126", "180", "207", "204", "188", "192", "169", "160", "132", "135", "36", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", ""]
            }, {
                "category": "Umum",
                "label": "TABITHA EXPRESS, PT",
                "values": ["660", "660", "660", "660", "660", "660", "660", "1002", "1127", "1027", "1030", "660", "691", "1338", "884", "835", "1437", "1326", "2131", "2589", "2229", "2104", "2020", "2585", "2598", "2309", "1951", "2347", "2914", "2948", "2931", "2925", "2938", "660", "1642", "1192", "1195", "899", "1365", "2140", "2460", "2635", "2121", "2508", "2623", "1862", "2531", "2289", "2464", "1803", "2040", "1925", "1723", "2066", "1879", "1572", "1713", "1643", "1509", "1978", "2337", "1585", "2287", "1861", "1760", "2058", "1952", "2031", "1857", "1774", "1777", "1763", "1834", "1295", "1714", "1418", "1797", "2410", "2324", "2150", "2087", "1783", "1678", "1401", "1182"]
            }, {
                "category": "Umum",
                "label": "TANGGUH SAMUDERA JAYA, PT",
                "values": ["9892", "13410", "2989", "3024", "3089", "3020", "2853", "2760", "2754", "2799", "11688", "12862", "13669", "12862", "12114", "12510", "21162", "27358", "27271", "14000", "11854", "10298", "11931", "11821", "12941", "12416", "12163", "13106", "13527", "14768", "13368", "12007", "12923", "11975", "14985", "15951", "16790", "15518", "14190", "16722", "15423", "15257", "15890", "16178", "17312", "14765", "17599", "17688", "19346", "15777", "18488", "18817", "17779", "19179", "17807", "17130", "16539", "14230", "17167", "17438", "18800", "15247", "18406", "17101", "17363", "18226", "15467", "16056", "14738", "14033", "14917", "14933", "16833", "13978", "15198", "14389", "15463", "16845", "14839", "14294", "13687", "11864", "14661", "15155", "14584"]
            }, {
                "category": "Umum",
                "label": "TANTO INTIM LINE, PT",
                "values": ["1238", "1851", "1329", "1550", "2237", "1534", "1740", "1818", "1432", "1753", "1887", "1853", "1996", "1883", "8313", "2949", "2993", "2814", "2792", "2475", "1815", "2315", "2243", "2426", "2456", "2263", "2124", "1690", "1200", "375", "505", "458", "525", "413", "517", "538", "651", "487", "423", "544", "512", "502", "500", "480", "491", "443", "475", "443", "458", "369", "526", "509", "551", "626", "605", "725", "741", "815", "661", "513", "642", "356", "468", "522", "568", "756", "1003", "883", "857", "785", "849", "893", "986", "704", "891", "862", "718", "913", "814", "787", "684", "700", "775", "834", "750"]
            }, {
                "category": "Umum",
                "label": "TASIK MADU, PT",
                "values": ["3883", "4223", "2530", "2371", "4774", "2604", "2954", "3350", "3103", "3052", "3851", "3782", "4741", "3214", "2751", "3035", "3241", "3253", "3826", "3071", "2602", "2570", "2635", "1855", "2663", "3673", "2324", "2940", "3359", "3042", "2934", "2518", "2151", "2167", "2603", "2263", "2012", "1856", "1638", "1725", "1572", "1308", "1002", "1161", "1412", "1275", "617", "609", "660", "708", "915", "882", "880", "1078", "1046", "1177", "1164", "1221", "954", "1018", "969", "911", "895", "1005", "896", "996", "952", "931", "848", "705", "739", "749", "633", "569", "615", "648", "634", "653", "498", "448", "448", "448", "448", "", ""]
            }, {
                "category": "Umum",
                "label": "TEGAR PRIMA MANDIRI, PT",
                "values": ["156", "224", "265", "126", "387", "245", "261", "229", "203", "177", "219", "189", "207", "227", "232", "88", "246", "314", "204", "221", "161", "88", "133", "91", "88", "88", "88", "137", "88", "88", "88", "120", "181", "204", "200", "228", "201", "181", "107", "155", "192", "190", "176", "138", "97", "88", "88", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", ""]
            }, {
                "category": "Umum",
                "label": "TELKOM, PT",
                "values": ["296", "665", "511", "638", "605", "497", "630", "456", "524", "618", "678", "693", "704", "705", "616", "731", "788", "739", "695", "713", "724", "700", "442", "1111", "744", "712", "732", "741", "697", "742", "726", "724", "720", "1546", "2191", "2299", "2250", "2264", "2280", "2310", "2281", "2250", "2298", "2288", "2266", "2209", "2389", "2223", "2247", "2101", "2324", "2298", "2272", "2298", "2271", "2297", "2371", "2091", "2170", "2208", "2259", "2235", "2282", "2269", "2251", "2247", "2116", "2124", "1776", "1776", "1776", "1776", "1776", "1776", "1776", "1776", "1776", "1776", "1776", "1776", "1776", "1776", "1776", "1776", "1776"]
            }, {
                "category": "Umum",
                "label": "TELKOMSEL, PT",
                "values": ["816", "788", "1029", "909", "1069", "848", "853", "1003", "955", "1400", "2548", "2470", "2593", "2497", "2152", "2765", "2639", "2524", "2448", "2530", "2589", "2446", "2494", "2518", "2589", "2802", "2753", "2725", "2673", "2732", "2668", "2685", "2681", "2595", "2669", "2624", "2686", "2577", "2352", "3229", "2711", "2691", "2828", "3073", "3191", "3138", "3292", "3196", "3282", "3222", "3327", "3369", "3347", "3436", "3388", "3437", "3474", "3743", "4025", "3882", "4202", "6735", "7743", "7765", "7716", "7841", "7708", "7818", "7786", "7571", "7792", "7767", "7815", "7596", "7850", "7767", "7768", "7859", "7693", "7741", "7783", "7284", "7716", "7800", "7719"]
            }, {
                "category": "Umum",
                "label": "TEPIAN SAMUDERA MANDIRI, PT",
                "values": ["11600", "6355", "4200", "4200", "9794", "10706", "13540", "14921", "15453", "8032", "8489", "6129", "4896", "7724", "4200", "10702", "14376", "17631", "15108", "15019", "15550", "7230", "11825", "8501", "6978", "6002", "11239", "8029", "10261", "8863", "8692", "10212", "12638", "9373", "6012", "6751", "10981", "5272", "4200", "4822", "6554", "6873", "7659", "8947", "8326", "15915", "8101", "17177", "19747", "15082", "14735", "15667", "8272", "5831", "4576", "11518", "17666", "14133", "6267", "7520", "6604", "8395", "9563", "5874", "7787", "11636", "14184", "8301", "4316", "4582", "5032", "4200", "8366", "4632", "9880", "4835", "7456", "9629", "13256", "12809", "9866", "21358", "19843", "24144", "16609"]
            }, {
                "category": "Umum",
                "label": "TIRTA EKASABDA, PT",
                "values": ["1551", "2266", "1545", "1873", "2340", "1824", "1449", "1940", "1320", "1320", "1947", "1580", "2008", "1808", "1428", "1418", "2462", "1692", "1836", "1599", "1440", "1320", "1476", "1489", "1528", "1558", "1320", "1493", "1424", "1497", "1519", "1620", "1726", "1621", "2221", "1922", "1526", "1612", "2151", "2054", "2339", "1692", "1379", "1688", "1796", "1796", "1743", "2844", "3179", "2039", "2496", "1707", "1716", "2263", "2069", "2283", "1950", "2047", "2005", "2222", "2262", "2051", "1809", "1944", "2014", "1657", "1625", "1844", "1807", "1759", "1941", "1856", "1852", "1320", "2093", "2186", "2305", "2085", "1892", "1479", "1795", "1616", "2572", "1567", "1514"]
            }, {
                "category": "Umum",
                "label": "TIRTA JAYA SHIPBUILDING, PT",
                "values": ["6925", "6763", "6623", "3382", "9529", "5618", "5910", "6865", "5281", "7113", "7484", "6381", "7149", "6708", "4820", "6677", "7000", "7295", "7122", "6895", "6347", "6110", "6728", "7006", "7661", "6952", "5348", "7078", "6443", "7517", "7847", "7332", "8258", "7340", "7738", "8096", "7843", "7200", "6360", "8216", "7065", "7477", "7258", "8674", "6856", "6192", "9088", "8174", "8014", "6812", "7071", "7310", "7753", "9110", "8815", "6012", "7172", "6347", "6828", "8370", "7268", "5830", "7898", "7349", "7653", "8123", "7605", "7482", "7908", "7207", "7147", "7687", "6971", "5947", "7901", "6675", "7408", "8186", "7838", "7087", "6922", "6852", "6890", "6379", "5218"]
            }, {
                "category": "Umum",
                "label": "TJETOT, PT",
                "values": ["2553", "2792", "2520", "2157", "4735", "3126", "4059", "4274", "3090", "3931", "3859", "3738", "3147", "3593", "2349", "3102", "3717", "3077", "3018", "2926", "2688", "2019", "2287", "2112", "1939", "1700", "1607", "2152", "2448", "2499", "2099", "2444", "2307", "2141", "2371", "2305", "2008", "1913", "1710", "2507", "2568", "2726", "1006", "1005", "935", "855", "1007", "940", "947", "788", "1013", "982", "1036", "1036", "1003", "720", "448", "424", "424", "424", "441", "424", "424", "424", "424", "424", "424", "424", "424", "424", "424", "424", "424", "424", "424", "424", "424", "424", "424", "424", "424", "424", "", "", ""]
            }, {
                "category": "TNI, Polri",
                "label": "TNI AD",
                "values": ["9087", "5151", "16345", "9818", "171671", "9641", "147104", "112849", "110725", "7996", "11680", "25426", "25090", "26446", "28574", "26381", "27602", "29016", "28104", "28665", "27526", "20340", "25975", "24180", "21370", "24887", "19151", "26106", "26386", "27394", "29670", "25158", "22232", "19434", "25900", "26356", "29505", "27640", "17593", "19582", "23039", "25152", "23899", "22470", "20835", "21146", "20000", "23782", "140", "140", "140", "140", "140", "161", "156", "379", "330", "242", "263", "292", "345", "206", "365", "357", "359", "423", "352", "329", "365", "319", "342", "411", "395", "334", "448", "400", "419", "483", "403", "392", "451", "339", "373", "286", "209"]
            }, {
                "category": "TNI, Polri",
                "label": "TNI AD",
                "values": ["12908", "12845", "11878", "10856", "14914", "12409", "11198", "12790", "11651", "12691", "14881", "17497", "17735", "16519", "13796", "16890", "16361", "16543", "19512", "17523", "17191", "14569", "17146", "18338", "19006", "16597", "18358", "19229", "18707", "19808", "18748", "17721", "20763", "17088", "19462", "13628", "13541", "15349", "16953", "14454", "13613", "7228", "7294", "9832", "9008", "8524", "18167", "15898", "37649", "32336", "44118", "47112", "45518", "50103", "48829", "46319", "47102", "45057", "48148", "44039", "49917", "37520", "50374", "52614", "50800", "55303", "53740", "52656", "52481", "46932", "54057", "54702", "58753", "51721", "57597", "54980", "60523", "66309", "56295", "52579", "50038", "47198", "52133", "54455", "53784"]
            }, {
                "category": "Umum",
                "label": "TOYOFUJI LOGISTICS INDONESIA, PT",
                "values": ["1478", "1445", "1300", "1372", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", ""]
            }, {
                "category": "Umum",
                "label": "TRANS MUTIARA MANDIRI, PT",
                "values": ["1741", "1743", "1742", "1181", "2347", "2015", "1160", "1863", "1236", "1520", "1960", "1707", "2304", "1812", "1288", "1606", "2077", "2057", "1888", "1669", "1398", "1147", "1526", "1628", "1563", "1627", "1208", "1458", "1723", "2041", "1916", "1776", "1808", "1694", "1816", "2075", "2090", "1926", "1265", "2048", "1957", "1785", "1913", "1772", "1755", "1301", "1394", "1301", "1345", "1084", "1544", "1679", "1811", "1867", "1848", "1886", "1908", "1508", "1493", "1545", "1623", "853", "1599", "1579", "1428", "1794", "1574", "1407", "1628", "1351", "1518", "1559", "1595", "1189", "1667", "1512", "1603", "1870", "1759", "1553", "1782", "1530", "1671", "1752", "1284"]
            }, {
                "category": "Umum",
                "label": "TRANSINDO INTERDWIPANTARA, PT",
                "values": ["5235", "5417", "9058", "5169", "7408", "5991", "5869", "5774", "2188", "2188", "4407", "5185", "5404", "5312", "4473", "5191", "5291", "5267", "6898", "7592", "6187", "5929", "7346", "7619", "8300", "7540", "7337", "7980", "8305", "9449", "8875", "8622", "8818", "7051", "8505", "9135", "8780", "7964", "7206", "8179", "8135", "7949", "8260", "8112", "8450", "7036", "8651", "8533", "9106", "8658", "8273", "8230", "7830", "8683", "7718", "6894", "6667", "6998", "7372", "7527", "8127", "7460", "7890", "7488", "6997", "7586", "7276", "6770", "6424", "6037", "6860", "6726", "8537", "7530", "8083", "7910", "7720", "8511", "7228", "5900", "", "", "", "", ""]
            }, {
                "category": "Umum",
                "label": "UNION YARD, PT",
                "values": ["8360", "23139", "15079", "12471", "18085", "17706", "12731", "13473", "10960", "12331", "11141", "11640", "21782", "12852", "16609", "9718", "24513", "21216", "18327", "23728", "18188", "15976", "13676", "8125", "4200", "4200", "4200", "5523", "4200", "4200", "4200", "4200", "4200", "4200", "5859", "6971", "5218", "4704", "4200", "4200", "4200", "4200", "4200", "4200", "4200", "4200", "4200", "4200", "4200", "4200", "4200", "4200", "4200", "4200", "4200", "4200", "4200", "4200", "4200", "6086", "4256", "4200", "4200", "4200", "4200", "4200", "4200", "4200", "4200", "4200", "4200", "4200", "4200", "4200", "4200", "4200", "4648", "4200", "4200", "8635", "5634", "4200", "4200", "4200", "4200"]
            }, {
                "category": "Umum",
                "label": "USAHA KARYA, PT",
                "values": ["6401", "9729", "1940", "1870", "2107", "1912", "1982", "1844", "1828", "1812", "2659", "1735", "1758", "1752", "7425", "8136", "8209", "8633", "8432", "8084", "6745", "6365", "7965", "7751", "8435", "7629", "6241", "7618", "7287", "7732", "7571", "7451", "7948", "6710", "7974", "8360", "8257", "7832", "6780", "8884", "8422", "8601", "8547", "8992", "8622", "7628", "9395", "8650", "9721", "7907", "8921", "9367", "9432", "10204", "9629", "9105", "9394", "7919", "8936", "9021", "8638", "6774", "8899", "8884", "9115", "11067", "10068", "9955", "9801", "9183", "9466", "9866", "10671", "8675", "10348", "10256", "10274", "11841", "11612", "10387", "9620", "7190", "8152", "8542", "7823"]
            }, {
                "category": "Umum",
                "label": "UTOMO SH. KPLP",
                "values": ["88", "237", "111", "111", "852", "674", "678", "605", "326", "255", "399", "368", "354", "377", "255", "173", "351", "319", "287", "288", "288", "227", "287", "267", "234", "268", "142", "238", "245", "267", "267", "151", "236", "88", "258", "174", "213", "299", "222", "298", "349", "379", "417", "416", "406", "367", "174", "226", "233", "188", "193", "187", "403", "358", "345", "357", "256", "185", "449", "374", "439", "248", "454", "460", "429", "420", "410", "372", "416", "354", "361", "358", "386", "346", "442", "475", "498", "537", "479", "448", "433", "419", "437", "423", "403"]
            }, {
                "category": "Umum",
                "label": "WALIE JAYA TELADAN, PT",
                "values": ["7776", "11544", "8959", "9395", "15116", "6998", "10415", "9628", "8788", "6860", "10837", "9487", "12570", "12054", "9030", "11457", "13753", "12391", "11069", "11605", "9925", "8147", "10643", "10240", "10705", "11103", "10860", "10605", "10273", "11349", "11316", "9685", "9785", "8556", "10075", "10142", "10875", "9706", "10519", "12263", "12078", "10399", "10776", "11608", "11438", "9338", "11097", "10667", "11679", "10293", "11031", "11686", "11924", "12368", "11948", "11025", "11170", "9858", "10572", "11578", "12141", "10497", "11885", "10879", "9481", "9657", "8384", "7503", "5506", "5189", "5568", "5687", "6375", "4714", "6186", "6567", "6916", "8262", "7478", "6728", "6869", "6076", "7332", "7269", "7798"]
            }, {
                "category": "Umum",
                "label": "WARZUQNI",
                "values": ["88", "88", "88", "88", "88", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", ""]
            }, {
                "category": "Umum",
                "label": "WASILAH CAHAYA ABADI, PT",
                "values": ["232", "472", "879", "633", "1353", "651", "731", "645", "551", "193", "844", "603", "737", "733", "516", "636", "360", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", ""]
            }, {
                "category": "Umum",
                "label": "WASKITA KARYA, PT",
                "values": ["176", "176", "176", "176", "176", "396", "207", "176", "176", "309", "1163", "1832", "2375", "1437", "1443", "756", "176", "176", "176", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", ""]
            }, {
                "category": "Umum",
                "label": "WIRATAMA MARINE SERVICE, PT",
                "values": ["4200", "4200", "16321", "6319", "4200", "4200", "4200", "4200", "4200", "6793", "6155", "4288", "4200", "5607", "4200", "4200", "4200", "4200", "4200", "4200", "4200", "4200", "4200", "4200", "4200", "4200", "4200", "4200", "4200", "4200", "4200", "4200", "4200", "4200", "4200", "4200", "4200", "4200", "4200", "4200", "4200", "4200", "4200", "4200", "4200", "4200", "4200", "4200", "4200", "4200", "4200", "4200", "4200", "4200", "4200", "4200", "4200", "4200", "4481", "4200", "4200", "4200", "4200", "4200", "4200", "4200", "4557", "7216", "5247", "5823", "6041", "4363", "4321", "4200", "4200", "4200", "4200", "4200", "4502", "4200", "4200", "4200", "", "", ""]
            }, {
                "category": "Umum",
                "label": "YURNIATI",
                "values": ["36", "40", "38", "36", "59", "36", "42", "49", "48", "36", "40", "36", "36", "39", "36", "36", "42", "39", "37", "43", "43", "37", "36", "38", "39", "41", "36", "36", "39", "36", "36", "38", "37", "38", "36", "36", "39", "39", "40", "37", "36", "36", "36", "38", "36", "151", "162", "151", "273", "191", "193", "197", "215", "186", "209", "186", "171", "182", "168", "185", "234", "135", "218", "233", "206", "314", "358", "511", "567", "643", "640", "639", "645", "625", "628", "575", "315", "399", "440", "448", "439", "397", "436", "376", "353"]
            }, {
                "category": "Umum",
                "label": "ZHULIA THAHIR",
                "values": ["36", "103", "89", "54", "130", "86", "91", "79", "61", "69", "88", "87", "90", "95", "49", "82", "98", "82", "85", "83", "68", "66", "69", "84", "86", "75", "56", "79", "85", "97", "89", "79", "93", "52", "36", "36", "36", "36", "36", "65", "49", "61", "36", "36", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", ""]
            }, {
                "category": "Umum",
                "label": "DISTRIK NAVIGASI KELAS I",
                "values": ["", "", "", "", "", "7003", "3652", "6175", "4591", "3416", "4365", "4371", "4872", "4281", "2954", "5613", "5801", "5239", "4843", "4966", "4188", "3377", "4057", "4515", "4173", "4506", "4970", "4676", "4056", "4749", "4682", "5204", "6005", "5596", "6980", "6288", "6855", "8752", "8519", "8632", "7901", "6418", "7284", "7041", "7740", "6546", "7654", "7560", "8400", "7334", "7649", "7227", "7200", "7419", "7398", "7717", "7789", "6297", "7486", "8165", "8190", "7873", "7788", "7370", "7744", "8511", "7783", "7913", "7148", "6584", "7238", "7462", "7368", "6839", "7500", "7486", "6846", "7405", "7265", "7472", "7224", "6911", "7692", "7718", "7745"]
            }, {
                "category": "IPC Group",
                "label": "INDONESIA KENDARAAN TERMINAL, PT",
                "values": ["", "", "", "", "", "121896", "129536", "135904", "130832", "118632", "148320", "158048", "167720", "158240", "160344", "166968", "161736", "161416", "154744", "150792", "154553", "129321", "174316", "171917", "171451", "171352", "167319", "174127", "165862", "179071", "171779", "171519", "166127", "148206", "169150", "159563", "158843", "144479", "143884", "154392", "147340", "153648", "132162", "146420", "138595", "118560", "129075", "129060", "141725", "122999", "143245", "187002", "174735", "186506", "172048", "164013", "164885", "146401", "165669", "175086", "182278", "161000", "172720", "172044", "162189", "177813", "165902", "166892", "159913", "150996", "160401", "170939", "187746", "173153", "183917", "175312", "179465", "199806", "191817", "184804", "181143", "161507", "179263", "173381", "176954"]
            }, {
                "category": "Umum",
                "label": "BFS LOGISTICS, PT",
                "values": ["", "", "", "", "", "", "145", "1452", "1452", "2414", "2530", "2530", "3185", "3567", "2747", "3456", "3733", "3544", "3079", "3243", "3025", "2785", "3104", "3241", "3391", "3263", "2699", "3052", "2925", "3764", "2993", "2863", "3071", "2667", "3050", "3024", "3195", "2831", "3021", "3182", "3192", "3147", "2530", "2530", "2530", "2530", "2583", "2530", "2862", "2949", "3231", "3105", "2741", "2832", "2741", "2832", "2741", "2786", "2794", "2530", "2530", "2530", "2530", "2649", "2530", "3051", "2797", "2640", "2664", "2544", "2880", "3175", "3256", "2880", "3190", "2806", "2967", "3288", "3083", "3048", "2855", "2692", "3093", "3089", "2954"]
            }, {
                "category": "Umum",
                "label": "SPIL, PT",
                "values": ["", "", "", "", "", "", "", "", "1554", "1560", "1581", "3417", "846", "931", "931", "", "631", "768", "1421", "1376", "1168", "1219", "1227", "1501", "1525", "1544", "1187", "1447", "1429", "1698", "1395", "1398", "1427", "1265", "1364", "2289", "3817", "3746", "3560", "3904", "3814", "3823", "3756", "4655", "4790", "4416", "5624", "5900", "6535", "5665", "6067", "3791", "3795", "4457", "4376", "2988", "696", "733", "1185", "1193", "1401", "995", "1400", "1300", "1378", "1501", "1245", "1290", "1248", "1250", "1396", "1324", "1620", "1137", "1484", "1395", "1471", "1664", "1550", "1549", "1370", "1212", "1327", "1175", "1091"]
            }, {
                "category": "Umum",
                "label": "SENTOSA OCEAN LINE, PT",
                "values": ["", "", "", "", "", "", "", "", "835", "767", "143", "143", "143", "143", "143", "143", "143", "143", "396", "526", "425", "143", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", ""]
            }, {
                "category": "Umum",
                "label": "KANTIN OTORITAS PELB",
                "values": ["", "", "", "", "", "", "", "", "574", "550", "859", "273", "382", "280", "242", "627", "317", "277", "286", "293", "279", "219", "285", "286", "143", "233", "286", "318", "357", "403", "368", "406", "427", "364", "418", "391", "418", "143", "143", "863", "693", "520", "467", "522", "479", "373", "400", "373", "386", "173", "381", "347", "358", "385", "372", "325", "383", "330", "334", "274", "225", "184", "302", "285", "282", "291", "211", "172", "268", "246", "284", "280", "149", "260", "454", "446", "425", "507", "472", "395", "405", "521", "527", "484", "484"]
            }, {
                "category": "Umum",
                "label": "KIOS NENENG AAM",
                "values": ["", "", "", "", "", "", "", "", "37", "143", "143", "143", "143", "143", "143", "143", "143", "143", "143", "143", "143", "143", "143", "143", "143", "143", "143", "143", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", ""]
            }, {
                "category": "Umum",
                "label": "SANDI LAUT CARAKA, PT",
                "values": ["", "", "", "", "", "", "", "", "", "6188", "11550", "20087", "12501", "13677", "11550", "15713", "13420", "12510", "11550", "13407", "11550", "12832", "12594", "12246", "14972", "12845", "11550", "11550", "11550", "11550", "11550", "11550", "11550", "11550", "11550", "11550", "11550", "11550", "11550", "11550", "11550", "11550", "11550", "11550", "11550", "11550", "11550", "11550", "11550", "11550", "11550", "11550", "11550", "15326", "11550", "11550", "11550", "11550", "11550", "11550", "11550", "11550", "11550", "11550", "11550", "11550", "11550", "13727", "16297", "16196", "14054", "14561", "12149", "11550", "11550", "11550", "18075", "11550", "11550", "16622", "19835", "11550", "14597", "19188", "14731"]
            }, {
                "category": "Umum",
                "label": "CIPTA P. MANDIRI, PT",
                "values": ["", "", "", "", "", "", "", "", "", "17", "143", "143", "143", "143", "143", "296", "301", "338", "148", "224", "181", "143", "167", "143", "143", "143", "143", "143", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", ""]
            }, {
                "category": "Umum",
                "label": "PBM SUP, PT",
                "values": ["", "", "", "", "", "", "", "", "", "", "", "81", "470", "304", "232", "414", "158", "432", "371", "412", "355", "333", "489", "525", "423", "426", "312", "412", "447", "536", "407", "464", "496", "350", "377", "492", "511", "441", "300", "418", "359", "385", "387", "374", "439", "397", "396", "456", "514", "338", "439", "425", "550", "527", "509", "302", "351", "318", "326", "343", "412", "210", "143", "143", "143", "143", "143", "143", "143", "143", "143", "143", "143", "143", "143", "143", "143", "143", "143", "143", "143", "143", "143", "143", "143"]
            }, {
                "category": "IPC Group",
                "label": "JASA PERALATAN PELABUHAN INDONESIA, PT",
                "values": ["", "", "", "", "", "", "", "", "", "", "", "40", "1190", "1144", "871", "955", "1019", "919", "484", "963", "1384", "1462", "1640", "1067", "2774", "2091", "2058", "5727", "5776", "6270", "5075", "4915", "4826", "4555", "4946", "5553", "6153", "5474", "5624", "6145", "5112", "5013", "5439", "5672", "4822", "4715", "5374", "4691", "4738", "4544", "4756", "1450", "1509", "1732", "1681", "1731", "1541", "1063", "1858", "1138", "1387", "1336", "1419", "1163", "870", "853", "945", "1025", "1029", "198703", "256575", "260238", "260238", "8778", "8778", "8778", "8778", "8778", "8950", "8961", "8937", "9371", "11547", "9223", "10625"]
            }, {
                "category": "Umum",
                "label": "TRIAGUNG JAYA ABADI, PT",
                "values": ["", "", "", "", "", "", "", "", "", "", "", "", "1054", "3630", "3630", "5781", "4780", "5208", "3630", "3630", "3630", "3630", "3630", "3630", "4179", "3630", "7469", "9378", "8321", "9838", "9825", "9090", "3630", "3630", "3630", "3630", "3630", "3630", "3630", "3630", "3630", "3630", "3630", "3630", "3630", "3630", "3630", "3630", "3630", "3630", "3630", "3630", "3808", "4735", "4582", "4734", "4582", "4659", "4238", "3630", "3630", "3630", "3630", "3630", "3630", "3630", "3630", "3630", "3630", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", ""]
            }, {
                "category": "Umum",
                "label": "KARYA BAKTI, PT",
                "values": ["", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "375", "618", "558", "586", "562", "549", "329", "331", "321", "286", "286", "334", "316", "368", "368", "366", "336", "313", "360", "387", "389", "286", "286", "286", "286", "286", "306", "286", "294", "286", "314", "286", "286", "286", "332", "326", "286", "303", "297", "302", "291", "257", "547", "522", "494", "385", "489", "549", "547", "604", "564", "486", "532", "486", "512", "483", "447", "444", "494", "519", "525", "502", "444", "444", "456", "497", "525", "430", "385"]
            }, {
                "category": "Umum",
                "label": "ANDHIKA ANDALANTAMA, PT",
                "values": ["", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "114", "143", "143", "143", "143", "143", "143", "143", "143", "143", "143", "143", "143", "143", "143", "143", "143", "143", "143", "143", "143", "143", "143", "143", "143", "143", "143", "143", "143", "143", "143", "143", "143", "143", "143", "143", "143", "143", "143", "143", "143", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", ""]
            }, {
                "category": "Umum",
                "label": "MITRA KARUNIA SAMUDERA, PT",
                "values": ["", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "257", "372", "509", "558", "652", "683", "677", "708", "610", "689", "664", "642", "614", "562", "602", "534", "619", "579", "211", "374", "704", "682", "701", "708", "636", "575", "466", "585", "605", "488", "516", "500", "846", "888", "859", "439", "555", "466", "631", "571", "734", "651", "433", "659", "680", "639", "598", "604", "602", "546", "631", "706", "719", "625", "677", "676", "731", "705", "671", "619", "510", "262", "", "", ""]
            }, {
                "category": "Umum",
                "label": "TUBAGUS JAYA MARITIM, PT",
                "values": ["", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "47", "726", "1436", "2530", "2530", "2530", "2530", "2530", "2530", "2530", "2530", "2530", "2530", "2530", "2530", "2530", "2530", "2530", "2530", "2530", "2530", "2530", "2530", "2530", "2530", "2530", "2530", "2530", "2530", "2530", "2530", "2530", "2530", "2530", "2530", "2530", "2530", "2530", "2530", "2530", "2530", "2530", "2530", "2530", "2530", "2530", "2530", "2530", "2530", "2530", "2530", "2530", "2530", "2530", "2530", "2530", "2530", "2530", "2530", "2530", "2530", "2530", "2530", "2530"]
            }, {
                "category": "IPC Cabang",
                "label": "IPC TPK PERWAKILAN PONTIANAK, PT",
                "values": ["", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "87200", "87200", "87200", "87200", "87200", "87200", "87200", "87200", "87200", "87200", "87200", "87200", "87200", "87200", "87200", "87200", "87200", "87200", "87200", "87200", "87200", "87200", "87200", "87200", "87200", "87680", "87200", "87200", "87200", "87200", "87200", "87200", "87200", "87200", "87200", "87200", "87200", "87200", "87200", "87200", "87200", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", ""]
            }, {
                "category": "Umum",
                "label": "SILVIA ERWANTI",
                "values": ["", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "683", "847", "847", "847", "847", "847", "847", "847", "847", "847", "847", "847", "847", "847", "847", "847", "847", "847", "847", "847", "847", "847", "847", "847", "847", "847", "847", "847", "847", "847", "847", "847", "847", "847", "847", "847", "847", "847", "847", "847", "847", "1341", "1815", "1815", "1815", "1815", "1815", "1815", "1815", "1815", "1815", "1815", "1815", "1836", "1815", "1815", "1815", "1815", "1815", "1815", "1815"]
            }, {
                "category": "Umum",
                "label": "DARMANUSA TRITUNGGAL, PT",
                "values": ["", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "2916", "3648", "4664", "5849", "7112", "6853", "7594", "7859", "8188", "8970", "8336", "8947", "8084", "9148", "9806", "10837", "11855", "11294", "13255", "13004", "12187", "14753", "14426", "14634", "14058", "15008", "15034", "13956", "13761", "13351", "14028", "", "83", "1166", "1166", "1448", "1414", "1461", "1465", "1380", "1333", "1293", "1678", "2343", "2087", "2232", "2245", "2285", "2064", "2228", "2113", "2129", "2310", "2161", "2145", "2155", "1921", "2051", "2026", "2193"]
            }, {
                "category": "Umum",
                "label": "ANDI SAKKA",
                "values": ["", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "211", "239", "250", "263", "277", "265", "251", "279", "277", "265", "261", "272", "272", "284", "254", "246", "291", "245", "226", "304", "251", "285", "294", "241", "314", "257", "245", "318", "260", "251", "260", "288", "224", "310", "330", "261", "304", "285", "305", "294", "365", "308", "249", "295", "372", "462", "379", "392", "395", "347", "396", "423", "390", "364", "353", "384", "381", "404"]
            }, {
                "category": "Umum",
                "label": "BONE JAYA BAR, PT",
                "values": ["", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "143", "143", "143", "143", "143", "143", "143", "143", "143", "143", "158", "213", "179", "175", "143", "143", "143", "143", "143", "143", "143", "143", "143", "143", "171", "143", "169", "415", "283", "293", "340", "414", "202", "243", "207", "223", "155", "143", "232", "143", "143", "143", "143", "143", "143", "143", "143", "143", "143", "143", "143", "171", "143", "143", "189", "143", "149", "188"]
            }, {
                "category": "Umum",
                "label": "DPC PELRA, PT",
                "values": ["", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "204", "183", "164", "196", "207", "195", "179", "204", "204", "185", "179", "176", "143", "143", "143", "143", "143", "143", "143", "146", "143", "143", "143", "143", "143", "143", "148", "203", "154", "172", "198", "218", "165", "271", "223", "157", "259", "253", "262", "287", "338", "276", "238", "270", "282", "302", "235", "230", "212", "143", "143", "143", "143", "143", "143", "143", "143", "143"]
            }, {
                "category": "Umum",
                "label": "PELABUHAN INDONESIA II (PERSERO) CAB PALEMBANG, PT",
                "values": ["", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "318174", "319622", "321448", "322177", "323269", "321017", "318090", "307141", "317315", "313564", "311516", "209292", "211737", "211390", "207812", "208852", "212151", "241145", "244621", "252727", "250123", "252832", "248648", "247921", "256274", "250314", "256419", "253507", "253469", "251368", "255013", "260579", "256658", "256357", "253967", "69395", "69536", "65062", "71308", "68776", "68238", "61662", "53798", "61873", "58399", "60301", "55773", "53376", "62615", "65890", "74920", "76572", "72194", "48422", "45640", "45837", "42747", "45008"]
            }, {
                "category": "Umum",
                "label": "JUNAEDI",
                "values": ["", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "143", "143", "143", "143", "143", "143", "143", "143", "143", "143", "143", "143", "143", "143", "143", "143", "143", "143", "143", "143", "143", "143", "143", "165", "205", "143", "143", "174", "166", "147", "143", "143", "143", "165", "143", "143", "155", "143", "143", "143", "187", "154", "155", "160", "143", "143", "143", "178", "218", "190", "157", "158", "178", "224", "178", "166", "143", "143"]
            }, {
                "category": "Umum",
                "label": "KANTOR PIP",
                "values": ["", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "234", "242", "242", "242", "242", "242", "242", "242", "242", "242", "242", "242", "242", "242", "242", "242", "242", "242", "242", "242", "242", "242", "242", "242", "242", "242", "242", "242", "242", "242", "242", "242", "242", "242", "242", "242", "242", "242", "242", "242", "242", "242", "242", "242", "242", "242", "242", "242", "242", "242", "242", "242", "242", "242", "242", "242", "242", "242"]
            }, {
                "category": "Umum",
                "label": "KANTOR TKBM",
                "values": ["", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "247", "242", "242", "242", "242", "242", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", ""]
            }, {
                "category": "Umum",
                "label": "KARYA JAYA AG, PT",
                "values": ["", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "143", "143", "143", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", ""]
            }, {
                "category": "Umum",
                "label": "KOKARPEL",
                "values": ["", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "408", "385", "485", "487", "385", "385", "385", "385", "385", "385", "385", "385", "385", "385", "385", "385", "385", "385", "385", "385", "385", "385", "385", "385", "385", "385", "385", "385", "385", "385", "385", "385", "385", "385", "385", "385", "385", "385", "385", "385", "385", "385", "385", "385", "385", "385", "385", "385", "385", "385", "385", "385", "385", "385", "385", "385", "385", "385"]
            }, {
                "category": "Umum",
                "label": "LK SUMBER BANGKA, PT",
                "values": ["", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "96", "99", "99", "99", "99", "99", "99", "99", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", ""]
            }, {
                "category": "Umum",
                "label": "LK.EKSPRES BAHARI, PT",
                "values": ["", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "96", "99", "99", "99", "99", "99", "99", "99", "99", "99", "99", "99", "99", "99", "99", "99", "99", "99", "99", "99", "99", "99", "99", "99", "99", "99", "99", "99", "99", "99", "99", "99", "99", "99", "99", "99", "99", "99", "99", "99", "99", "99", "99", "99", "99", "99", "99", "99", "99", "99", "99", "99", "99", "99", "99", "99", "99", "99"]
            }, {
                "category": "Umum",
                "label": "PATISINDO, PT",
                "values": ["", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "4565", "4565", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", ""]
            }, {
                "category": "Umum",
                "label": "RM TLAGA BARU",
                "values": ["", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "506", "417", "411", "415", "404", "424", "242", "242", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", ""]
            }, {
                "category": "Umum",
                "label": "SITI AMINAH",
                "values": ["", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "351", "161", "169", "156", "189", "178", "158", "169", "192", "223", "204", "203", "190", "187", "167", "192", "206", "175", "149", "193", "170", "195", "183", "144", "226", "177", "182", "207", "163", "160", "168", "186", "151", "193", "198", "170", "197", "183", "177", "174", "188", "145", "154", "179", "378", "453", "231", "204", "187", "163", "167", "211", "191", "178", "184", "179", "207", "238"]
            }, {
                "category": "Umum",
                "label": "SULEHA",
                "values": ["", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "143", "143", "143", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", ""]
            }, {
                "category": "Umum",
                "label": "WARUNG ATIN SUPRIATIN",
                "values": ["", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "211", "240", "298", "342", "344", "346", "315", "330", "345", "338", "341", "322", "319", "302", "292", "270", "344", "248", "272", "346", "298", "299", "307", "277", "328", "239", "290", "272", "304", "257", "240", "308", "275", "210", "240", "290", "185", "99", "100", "99", "99", "99", "99", "113", "114", "111", "123", "133", "136", "226", "277", "271", "99", "115", "108", "99", "99", "99"]
            }, {
                "category": "Umum",
                "label": "WARUNG DASWATI",
                "values": ["", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "209", "202", "214", "203", "231", "222", "191", "209", "214", "206", "197", "221", "216", "226", "199", "204", "228", "184", "199", "233", "197", "207", "211", "187", "240", "169", "216", "198", "231", "191", "211", "202", "191", "192", "193", "223", "229", "198", "223", "99", "99", "99", "182", "213", "198", "220", "210", "210", "201", "210", "259", "248", "219", "246", "235", "241", "209", "188"]
            }, {
                "category": "Umum",
                "label": "WARUNG IDRIS SARDI",
                "values": ["", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "96", "99", "101", "107", "99", "99", "99", "99", "118", "99", "99", "99", "99", "99", "99", "99", "99", "99", "99", "103", "99", "99", "99", "99", "110", "99", "117", "99", "109", "106", "112", "130", "116", "119", "119", "129", "130", "171", "214", "212", "190", "155", "150", "186", "168", "184", "158", "169", "161", "158", "172", "188", "199", "189", "182", "194", "170", "169"]
            }, {
                "category": "Umum",
                "label": "WARUNG JUNAIDI",
                "values": ["", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "210", "205", "209", "252", "228", "222", "219", "239", "243", "268", "258", "274", "283", "273", "262", "261", "290", "222", "231", "265", "229", "257", "258", "225", "305", "216", "287", "257", "296", "238", "239", "274", "252", "258", "284", "289", "269", "230", "263", "257", "247", "239", "226", "275", "250", "267", "230", "262", "261", "263", "274", "260", "232", "245", "213", "217", "195", "153"]
            }, {
                "category": "Umum",
                "label": "WARUNG WINNAH",
                "values": ["", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "96", "99", "127", "167", "158", "154", "145", "157", "154", "147", "99", "100", "99", "99", "99", "99", "99", "99", "99", "99", "99", "99", "99", "99", "99", "99", "99", "99", "99", "99", "99", "99", "99", "99", "99", "99", "99", "99", "99", "99", "99", "99", "99", "103", "99", "102", "115", "103", "104", "101", "106", "104", "105", "101", "99", "104", "99", "99"]
            }, {
                "category": "Umum",
                "label": "WORKSHOP PAK KUS",
                "values": ["", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "385", "385", "385", "385", "385", "385", "385", "385", "385", "385", "385", "385", "385", "385", "385", "385", "385", "385", "385", "385", "385", "385", "385", "385", "385", "385", "385", "385", "385", "385", "385", "385", "385", "385", "385", "385", "385", "385", "385", "385", "385", "385", "385", "385", "385", "385", "385", "385", "385", "385", "385", "385", "385", "385", "385", "385", "385", "385"]
            }, {
                "category": "Umum",
                "label": "PRIMKOPAD HERLULY",
                "values": ["", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "69", "290", "372", "276", "250", "295", "272", "306", "355", "332", "327", "304", "366", "409", "385", "447", "387", "359", "324", "620", "318", "328", "291", "386", "374", "585", "975", "943", "298", "602", "758", "629", "500", "473", "319", "495", "520", "608", "650", "632", "612", "592", "641", "731", "721", "697", "486", "669", "640", "617", "658", "649", "715", "791", "805", "1031", "780", "762"]
            }, {
                "category": "Umum",
                "label": "WARUNG JAMU",
                "values": ["", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "79", "99", "99", "99", "99", "99", "99", "99", "99", "99", "99", "99", "99", "99", "99", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", ""]
            }, {
                "category": "Umum",
                "label": "WARUNG KARAWANG TEH NIA",
                "values": ["", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "81", "143", "143", "143", "143", "143", "143", "143", "143", "143", "143", "143", "143", "143", "143", "143", "143", "143", "143", "143", "143", "143", "143", "143", "143", "143", "143", "143", "143", "143", "92", "143", "143", "143", "143", "143", "143", "143", "165", "143", "143", "143", "143", "143", "143", "143", "176", "178", "212", "231", "196", "180", "185", "156", "143", "143", "143"]
            }, {
                "category": "Umum",
                "label": "CURAH LAJU REKLAMASI P, PT",
                "values": ["", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "453", "484", "484", "484", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", ""]
            }, {
                "category": "IPC Cabang",
                "label": "PELABUHAN INDONESIA II (PERSERO) CAB PANJANG, PT",
                "values": ["", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "184523", "271865", "271963", "356720", "349237", "373457", "365250", "371008", "364461", "353646", "379333", "362684", "374435", "374953", "360551", "359650", "365984", "367391", "365050", "363177", "368631", "350098", "368092", "312092", "323161", "345421", "349433", "326804", "350387", "344449", "325483", "342075", "323403", "316248", "320509", "302443", "321379", "321580", "311916", "308509", "311572", "316014", "348682", "368124", "328116", "339021", "307277", "329814", "373955", "148648", "140748"]
            }, {
                "category": "Umum",
                "label": "KANTOR IKAPENDA",
                "values": ["", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "125", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", ""]
            }, {
                "category": "Umum",
                "label": "KANTIN KPPP",
                "values": ["", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "137", "308", "319", "292", "253", "312", "321", "279", "307", "326", "253", "228", "341", "250", "259", "209", "378", "365", "354", "635", "614", "635", "143", "379", "370", "240", "282", "241", "266", "265", "264", "292", "267", "286", "299", "293", "305", "319", "335", "297", "345", "343", "352", "374", "372", "354", "355", "327", "361", "360", "361"]
            }, {
                "category": "Umum",
                "label": "KOPERASI BERKAH JAYA",
                "values": ["", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "232", "577", "417", "465", "242", "288", "275", "303", "308", "265", "254", "242", "265", "242", "242", "242", "293", "284", "275", "368", "356", "368", "242", "296", "364", "421", "391", "242", "412", "387", "314", "331", "535", "429", "420", "360", "383", "362", "332", "256", "365", "351", "360", "424", "440", "414", "398", "360", "409", "377", "242"]
            }, {
                "category": "Umum",
                "label": "YUSMINDO M.S., PT",
                "values": ["", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "376", "2459", "2902", "2790", "2873", "2815", "2857", "2527", "2468", "2672", "2262", "2343", "2510", "2343", "3685", "2811", "2642", "2452", "2527", "2817", "2786", "2575", "2604", "2590", "2501", "2745", "2850", "2531", "2672", "2678", "2646", "2844", "2606", "2672", "2497", "2579", "2797", "2960", "3218", "2832", "3042", "3050", "3018", "3109", "2961", "2823", "2805", "2625", "2934", "2894", "2822"]
            }, {
                "category": "Umum",
                "label": "LANCAR KARYA BANDAR, PT",
                "values": ["", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "158", "1272", "1056", "845", "1058", "951", "1019", "1021", "987", "897", "785", "841", "785", "811", "654", "931", "901", "1430", "1478", "1430", "1477", "1430", "997", "950", "749", "850", "605", "609", "688", "789", "868", "778", "865", "791", "754", "739", "639", "643", "605", "608", "605", "617", "752", "605", "605", "605", "605", "605", "605", "605"]
            }, {
                "category": "IPC Group",
                "label": "IPC TERMINAL PETI KEMAS, PT",
                "values": ["", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "19657", "54740", "54367", "54273", "54903", "51745", "46487", "52634", "54194", "50071", "49835", "45983", "49141", "45389", "46748", "47726", "47709", "49331", "49658", "49720", "46937", "43941", "49333", "49594", "45922", "43102", "231564", "467632", "569615", "595410", "570930", "557272", "504907", "495279", "504251", "507672", "490068", "474284", "491869", "487660", "488605", "502800", "504318", "500897", "455975", "433647", "456968", "628531", "626680"]
            }, {
                "category": "Umum",
                "label": "PRIMKOP KARTIKA MULTI TEK, PT",
                "values": ["", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "403", "926", "988", "1200", "1015", "1040", "963", "1064", "961", "986", "994", "1027", "828", "1092", "1426", "1097", "1366", "1321", "548", "866", "832", "859", "808", "905", "579", "1024", "918", "956", "1613", "966", "727", "708", "695", "711", "706", "629", "484", "668", "484", "484", "484", "484", "484", "484", "484", "719", "615", "589"]
            }, {
                "category": "Umum",
                "label": "ATOSIM LAMPUNG PELAYAR, PT",
                "values": ["", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "773", "3832", "3174", "3577", "3669", "3666", "3571", "3725", "3454", "4638", "4973", "5666", "4380", "4109", "4301", "3983", "4676", "4309", "4097", "3937", "4018", "3124", "4223", "4740", "3356", "3930", "3498", "4125", "4726", "4491", "3839", "3869", "4027", "3814", "4088", "4663", "3397", "3535", "3449", "4328", "4610", "4527", "3755", "3339", "2769", "3203", "3276", "3299"]
            }, {
                "category": "Umum",
                "label": "BETHARIA A SIMATUPANG",
                "values": ["", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "112", "638", "907", "958", "1067", "889", "973", "863", "672", "720", "748", "691", "755", "851", "645", "605", "693", "670", "1077", "830", "799", "733", "857", "924", "938", "992", "858", "780", "892", "836", "724", "827", "738", "924", "901", "1062", "1016", "981", "969", "983", "984", "668", "690", "605", "605", "605", "605", "605"]
            }, {
                "category": "Umum",
                "label": "RINI",
                "values": ["", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "16", "242", "254", "242", "323", "301", "399", "403", "387", "415", "495", "419", "330", "715", "753", "755", "767", "742", "844", "699", "741", "739", "749", "824", "471", "592", "595", "583", "739", "746", "804", "792", "753", "853", "806", "884", "611", "842", "832", "869", "912", "964", "983", "966", "866", "974", "665", "250"]
            }, {
                "category": "Umum",
                "label": "DJUNAENAH BT J.",
                "values": ["", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "80", "602", "651", "525", "566", "445", "509", "536", "509", "545", "664", "461", "434", "487", "458", "389", "460", "444", "567", "513", "525", "529", "360", "433", "388", "576", "571", "616", "610", "602", "690", "723", "660", "746", "676", "693", "593", "631", "540", "546", "571", "589", "614", "640", "569", "562", "387", "439"]
            }, {
                "category": "Umum",
                "label": "SURYATI",
                "values": ["", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "9", "242", "242", "242", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", ""]
            }, {
                "category": "Umum",
                "label": "EVANI ROSARI",
                "values": ["", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "186", "242", "242", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", ""]
            }, {
                "category": "Umum",
                "label": "SAAB, PT",
                "values": ["", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "928", "5416", "6910", "7812", "6938", "6802", "7479", "6828", "6997", "8099", "7402", "7341", "7819", "8648", "8629", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", ""]
            }, {
                "category": "Umum",
                "label": "NITA THERESIA",
                "values": ["", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "255", "264", "264", "264", "264", "264", "895", "1166", "1166", "1166", "1166", "1166", "1166", "1166", "1166", "1166", "1310", "1166", "1166", "1166", "1166", "1166", "1166", "1166", "1166", "1166", "1166", "1166", "1166", "1166", "1166", "1166", "1166", "1166", "1166", "1166", "1177", "1344", "1397", "1285", "1166", "1485", "1284", "1166"]
            }, {
                "category": "Umum",
                "label": "SARI AGROTAMA PERSADA, PT",
                "values": ["", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "137", "242", "242", "242", "242", "242", "242", "242", "242", "242", "242", "242", "242", "242", "242", "242", "242", "242", "242", "242", "242", "242", "242", "253", "301", "325", "390", "279", "245", "242", "298", "242", "242", "242", "242", "243", "242", "242", "242", "242", "242", "242", "242"]
            }, {
                "category": "Umum",
                "label": "MISTA ANDRIANTO",
                "values": ["", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "223", "263", "255", "273", "312", "318", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", ""]
            }, {
                "category": "Umum",
                "label": "DMT, PT",
                "values": ["", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "1242", "2618", "2618", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", ""]
            }, {
                "category": "Umum",
                "label": "TIRTA INDRA KENCANA, PT",
                "values": ["", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "526", "242", "242", "242", "771", "369", "362", "563", "545", "242", "337", "242", "414", "242", "455", "242", "388", "446", "362", "242", "473", "242", "293", "353", "661", "300", "242", "242", "242", "493", "488", "244", "312", "257", "422", "468", "327", "419", "242"]
            }, {
                "category": "Umum",
                "label": "BOBBY JAYA, CV",
                "values": ["", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "62", "242", "242", "242", "242", "242", "242", "17", "242", "242", "242", "242", "242", "242", "242", "242", "242", "242", "242", "242", "242", "242", "242", "242", "", "", "", "", "", "", "", "", "", "", ""]
            }, {
                "category": "Umum",
                "label": "KANTIN IBU LENTENG",
                "values": ["", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "46", "143", "143", "143", "143", "143", "110", "143", "143", "143", "143", "160", "157", "148", "160", "157", "320", "386", "262", "171", "182", "195", "187", "190", "155", "157", "156", "197", "280", "279", "231", "284", "161", "337"]
            }, {
                "category": "Umum",
                "label": "NINDYA KARYA (PERSERO), PT",
                "values": ["", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "1484", "4313", "4935", "5005", "5257", "6682", "8533", "7134", "5746", "7763", "9493", "10499", "12268", "11770", "10611", "9169", "7371", "3716", "2382", "1750", "1355", "1648", "2141", "2245", "2569", "2506", "2193", "2347", "2235", "2335", "2448", "1710"]
            }, {
                "category": "Umum",
                "label": "PELAYARAN CTP LINE, PT",
                "values": ["", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "55", "242", "292", "390", "348", "385", "407", "419", "325", "397", "313", "293", "313", "323", "274", "354", "346", "313", "339", "353", "242", "301", "312", "297", "319", "290", "261", "", "", "", "", ""]
            }, {
                "category": "Umum",
                "label": "SALIM IVOMAS PRATAMA, PT",
                "values": ["2032", "3441", "3103", "2427", "6056", "3292", "4488", "4123", "3434", "3622", "4342", "3499", "4957", "4139", "3704", "4873", "4533", "4488", "4865", "4831", "3891", "3820", "4459", "4318", "4517", "4510", "4267", "3997", "4485", "4073", "4915", "4663", "4912", "4337", "5116", "4774", "5288", "4593", "4098", "4776", "3974", "2279", "3616", "4840", "4532", "3545", "5195", "4672", "4401", "4154", "5022", "5096", "4979", "5580", "5587", "5004", "5319", "4098", "4616", "4370", "4691", "3652", "4857", "4542", "4661", "5392", "4473", "4792", "4918", "4785", "4907", "4786", "5158", "4110", "4613", "4650", "4547", "4854", "4174", "4497", "4461", "3966", "4363", "4436", "4117"]
            }, {
                "category": "Umum",
                "label": "EDDY SUSANTO SUMINTO",
                "values": ["", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "12792", "15897", "14410", "14410", "15614", "16213", "16609", "14943", "14837", "15101", "14410", "14687", "15189", "14793", "14410", "14410", "16812", "18388", "17003", "16076", "15652", "14896", "14410", "15105", "15855", "16383", "16879", "18461", "18745", "16469", "14410", "6502", "429", "429", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", ""]
            }, {
                "category": "Umum",
                "label": "SAMUDERA SARANA TERMINAL INDONESIA, PT",
                "values": ["", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "981", "4152", "4088", "3955", "4243", "3024", "3995", "2644", "2674", "2909", "2275", "2510", "2216", "1943", "2284", "2522", "2723", "2412", "2662", "2652", "3023", "3201", "2779", "2785", "2729", "2367", "2604", "2570", "2645"]
            }, {
                "category": "Umum",
                "label": "PAGAYUBAN KOPERASI KPLP",
                "values": ["", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "147", "156", "242", "242", "242", "242", "242", "242", "242", "242", "242", "242", "242", "242", "242", "242", "242", "242", "242", "242", "370", "420", "370", "331", "327", "400", "315", "318"]
            }, {
                "category": "Umum",
                "label": "SAMUDERA PERDANA, PT",
                "values": ["", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "466", "672", "741", "847", "680", "783", "589", "794", "857", "825", "805", "732", "674", "780", "1007", "794", "544", "668", "654", "675", "795", "507", "417", "431", "411", "509", "487", "385"]
            }, {
                "category": "Umum",
                "label": "THREE G DIVING, PT",
                "values": ["", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "3419", "1452", "1452", "1452", "1452", "1452", "1452", "1452", "1452", "1452", "1452", "1452", "1452", "1452", "1452", "1452", "1452", "1452", "1452", "1452", "1452", "1452", "1452", "1452", "1452", "1452", "1452"]
            }, {
                "category": "Umum",
                "label": "TJ CARGO/KARGO EXPRESS, PT",
                "values": ["", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "124", "311", "419", "458", "488", "436", "385", "385", "464", "385", "744", "719", "981", "844", "758", "757", "720", "656", "1081", "1079", "1187", "1497", "1487", "1178", "1507", "1290", "1341", "1235", "1169"]
            }, {
                "category": "Umum",
                "label": "ASTARIKA STUWARINDO, PT",
                "values": ["", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "666", "1277", "1228", "1399", "1058", "1265", "1157", "1129", "1332", "1182", "1221", "1238", "1116", "1225", "1283", "1343", "1012", "1299", "1249", "1282", "1394", "1445", "1450", "1433", "1318", "1399", "1374", "1365"]
            }, {
                "category": "Umum",
                "label": "KOMET INFRA NUSANTARA, PT",
                "values": ["", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "865", "1166", "1166", "1166", "1166", "1607", "2118", "2381", "2305", "2124", "1166", "2328", "1792", "1768", "1947", "2233", "1850", "2287", "2316", "2576", "2286", "2619", "2522", "2172", "2437", "2379", "2491"]
            }, {
                "category": "Umum",
                "label": "WARUNG BAROKAH/MABUHAI",
                "values": ["", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "128", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", ""]
            }, {
                "category": "Umum",
                "label": "NYK LINE INDONESIA, PT",
                "values": ["", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "2335", "2291", "1262", "1301", "920", "920", "920", "920", "920", "1362", "920", "920", "920", "920", "920", "920", "", "", "", "", "", "", "", "", "", "", "", "", ""]
            }, {
                "category": "Umum",
                "label": "XL AXIATA TBK, PT",
                "values": ["", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "13224", "12731", "13297", "13535", "15396", "14801", "16018", "16113", "15392", "16209", "15476", "15422", "15208", "13756", "14566", "13715", "13119", "13600", "14006", "13960", "14010", "14708", "13964", "14073", "14221", "13093", "13618", "13649", "13595"]
            }, {
                "category": "IPC Group",
                "label": "JASA PERALATAN PELABUHAN INDONESIA CAB PALEMBANG, PT",
                "values": ["", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "4860", "4237", "4542", "4336", "4453", "3630", "3630", "3672", "4234", "4436", "4198", "4915", "5432", "4343", "4308", "3941", "3969", "3671", "3630", "3758", "3630", "4340", "3931", "4511", "5015", "4823", "5732", "4811", "4395", "4462", "4104", "4555", "4383", "4412"]
            }, {
                "category": "Umum",
                "label": "KANTIN KOPKAR PT AGUNG RAYA",
                "values": ["", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "295", "286", "390", "413", "533", "526", "518", "619", "549", "584", "603", "376", "362", "526", "531", "386", "569", "563", "588", "652", "662", "544", "543", "516", "529", "493", "385"]
            }, {
                "category": "Umum",
                "label": "HANDAL MANDIRI TRASINDO, PT",
                "values": ["", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "2272", "2221", "2284", "2526", "2588", "1222", "2498", "2211", "1893", "2362", "2123", "1897", "2120", "1876", "1915", "1951", "1946", "1460", "2102", "2063", "1912", "2096", "1974", "1872", "1840", "1421", "1521", "1395", "1087"]
            }, {
                "category": "Umum",
                "label": "CAHAYA ABADI SEJAHTERA, CV",
                "values": ["", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "611", "561", "598", "652", "590", "397", "603", "576", "608", "762", "654", "580", "676", "590", "677", "658", "649", "484", "715", "702", "734", "827", "848", "584", "774", "725", "727", "653", "492"]
            }, {
                "category": "TNI, Polri",
                "label": "DITPOLAIR POLDA METRO JAYA",
                "values": ["", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "9251", "11340", "11993", "13559", "13349", "12742", "13121", "13074", "13448", "11918", "12571", "11388", "12443", "12713", "11286", "11857", "11682", "12998", "11389", "10472", "11337", "8417", "11031", "10833", "12032", "8908", "9966", "11164", "10285", "11773", "10973", "8937", "9943", "9161", "10018", "10408", "10988", "7662", "10375", "10105", "10525", "13168", "11936", "10683", "12556", "11115", "11114", "11727", "12639", "9119", "10648", "11129", "9307", "11355", "10906", "10624", "12344", "9342", "10782", "10862", "9294"]
            }, {
                "category": "Umum",
                "label": "KINTETSU WORLD EXPRESS INDONESIA, PT",
                "values": ["", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "7892", "8003", "7588", "8414", "6494", "8242", "8163", "8139", "10139", "9399", "8505", "8637", "7772", "8736", "8134", "8857", "7274", "8579", "8291", "8404", "9457", "9499", "8754", "8060", "6880", "7929", "7881", "6756"]
            }, {
                "category": "IPC Group",
                "label": "JASA ARMADA INDONESIA, PT",
                "values": ["", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "4222", "4345", "4439", "3339", "3302", "3235", "2952", "3436", "3458", "3525", "3744", "3459", "3456", "2670", "3123", "2530", "2530", "2530", "2530", "2530", "2530", "7231", "6764", "4498", "", "", "", "", "", "", "", ""]
            }, {
                "category": "Umum",
                "label": "DWISATU MUSTIKA BUMI, PT",
                "values": ["", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "5136", "4650", "4350", "4660", "3620", "3022", "3009", "3100", "3324", "1683", "3526", "2692", "3091", "1660", "2789", "2772", "1869", "3042", "4896", "2941", "1660", "1660", "1660", "1660", "1660", "1660", "1660", "1660", "1660", "1660", "1660", "1868", "1660"]
            }, {
                "category": "Umum",
                "label": "MNC BANK KK TANJUNG PRIOK, PT",
                "values": ["", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "1417", "1725", "1393", "1291", "1191", "1487", "1563", "484", "440", "440", "440", "440", "440", "440", "440", "440", "440", "440", "440", "440", "440", "440", "440", "440", "440", "440", "440", "440", "440", "440", "440", "440", "440"]
            }, {
                "category": "Umum",
                "label": "BANK RAKYAT INDONESIA KK PALEMBANG, PT",
                "values": ["", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "467", "409", "438", "535", "691", "746", "545", "552", "519", "658", "639", "625", "719", "633", "668", "281", "528", "143", "143", "", "", "", "", "", "", "", ""]
            }, {
                "category": "Umum",
                "label": "BANK DBS INDONESIA, PT",
                "values": ["", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "1815", "1963", "1950", "1986", "1815", "2071", "1998", "1988", "2324", "2038", "1929", "1865", "1815", "1815", "1815", "", "", "", "", "", "", "", "", "", "", "", "", ""]
            }, {
                "category": "Umum",
                "label": "INDOTEL GRAHA PRATAMA, PT",
                "values": ["", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "32", "143", "260", "399", "291", "329", "319", "303", "265", "287", "313", "277", "271", "167", "300", "178", "143", "", "", "", "", "", "", "", ""]
            }, {
                "category": "Umum",
                "label": "BANDAR KRIDA JASINDO, PT",
                "values": ["", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "957", "1464", "1292", "1536", "1597", "1341", "1568", "1441", "1398", "779", "601", "634", "623", "", "", "", "", "", "", "", "", "", "", "", "", ""]
            }, {
                "category": "Umum",
                "label": "MBS LOGISTIK",
                "values": ["", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "1930", "2093", "2141", "2509", "2491", "2701", "1758", "2745", "2459", "2860", "3664", "3319", "2911", "3159", "2816", "2496", "2842", "3144", "2637", "3566", "3694", "2716", "1496", "1692", "2482", "1559", "1403", "1639", "2143", "2079"]
            }, {
                "category": "Umum",
                "label": "HUTCHISON 3 INDONESIA, PT",
                "values": ["", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "689", "920", "997", "1049", "1092", "1108", "1110", "1145", "1003", "1182", "1093", "1118", "1075", "1138", "1142", "1113", "1180", "1027", "1054", "1071", "989", "1038", "977", "981"]
            }, {
                "category": "Umum",
                "label": "BIFOSTR LOGISTIC",
                "values": ["", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "1400", "1820", "1679", "982", "1603", "1548", "1486", "1814", "1528", "1570", "1966", "1543", "1677", "1796", "1813", "1535", "2111", "2072", "2061", "2720", "2345", "2133", "2432", "1983", "2066", "2025", "2025"]
            }, {
                "category": "IPC Group",
                "label": "JASA PERALATAN PELABUHAN INDONESIA CAB TANJUNG PRIOK, PT",
                "values": ["", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "726", "726", "726", "726", "726", "726", "726", "726", "726", "726", "726", "726", "750", "", "", "", "", "", "", "", "", "", "", "", "", ""]
            }, {
                "category": "Umum",
                "label": "PT JUMA BERLIAN EXIM",
                "values": ["", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "403", "1578", "1080", "667", "804", "596", "770", "728", "725", "1111", "675", "797", "828", "780", "561", "818", "790", "784", "895", "903", "898", "826", "594", "562", "489", "484"]
            }, {
                "category": "Umum",
                "label": "PT INTI BANGUN SEJAHTERA",
                "values": ["", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "109", "484", "484", "484", "565", "968", "968", "968", "968", "968", "1369", "1291", "1305", "811", "767", "872", "885", "918", "930", "863", "924", "841", "980", "932", "934"]
            }, {
                "category": "Umum",
                "label": "JASMANINDO SAPTA PERKASA, PT",
                "values": ["", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "4114", "7797", "7260", "7260", "7260", "7260", "7260", "7260", "7260", "7260", "7260", "7260", "7260", "", "", "", "", "", "", "", ""]
            }, {
                "category": "Umum",
                "label": "BELAWAN BERLIAN INDONESIA, PT",
                "values": ["", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "4096", "3312", "6243", "3731", "3895", "4434", "4816", "5326", "3844", "4307", "3817", "4490", "4152", "4499", "4301", "4293", "4045", "3985", "3883", "3678", "4148", "4270"]
            }, {
                "category": "Umum",
                "label": "SUMARDI",
                "values": ["", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "234", "496", "484", "484", "484", "484", "548", "706", "484", "571", "647", "588", "648", "669", "616", "587", "535", "714", "669", "576"]
            }, {
                "category": "Umum",
                "label": "TUBAGUS JASA SAMUDERA, PT",
                "values": ["", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "32", "383", "484", "894", "1343", "1182", "1122", "712", "484", "242", "242", "", "", "", "", "", "", "", ""]
            }, {
                "category": "Umum",
                "label": "ASURANSI JASA INDONESIA (PERSERO), PT",
                "values": ["", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "51", "385", "385", "385", "385", "385", "385", "407", "385", "385", "385", "385", "385", "385", "385", "385", "385", "385", "385"]
            }, {
                "category": "Umum",
                "label": "BAHTERA PRIMA PERSADA",
                "values": ["", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "1210", "1452", "1452", "1452", "1452", "1452", "1452", "1452", "1452", "1452", "1452", "2557", "2562", "2978", "2814", "2577", "3789", "3929", "3574"]
            }, {
                "category": "Umum",
                "label": "WARYA",
                "values": ["", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "168", "189", "174", "182", "175", "186", "209", "233", "330", "238", "213", "172", "143", "143"]
            }, {
                "category": "Umum",
                "label": "RATNA ROSMALASARI",
                "values": ["", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "81", "244", "246", "431", "491", "509", "555", "468", "406", "427", "346", "468", "457", "366"]
            }, {
                "category": "Umum",
                "label": "LILIS ETI ROHAETI",
                "values": ["", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "90", "245", "194", "143", "174", "212", "336", "366", "366", "433", "307", "397", "360", "338"]
            }, {
                "category": "Umum",
                "label": "MURYATI",
                "values": ["", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "133", "338", "173", "363", "461", "469", "455", "445", "413", "402", "329", "369", "352", "272"]
            }, {
                "category": "Umum",
                "label": "SANTI MARDIYANAH",
                "values": ["", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "121", "202", "226", "229", "220", "305", "296", "328", "286", "239", "350", "320", "294"]
            }, {
                "category": "Umum",
                "label": "INDONESIA COMNETS PLUS, PT",
                "values": ["", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "76", "143", "143", "143", "143", "143", "143", "143", "143", "143", "143", "143"]
            }, {
                "category": "Umum",
                "label": "KARYA TEHNIK PASIRINDO, PT",
                "values": ["", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "78", "529", "454", "365", "321", "414", "398", "491", "242", "283", "535", "563"]
            }, {
                "category": "Umum",
                "label": "ROSWELL PASIFIC INDONESIA, PT",
                "values": ["", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "211", "242", "242", "242", "242", "242", "242", "242", "242", "242", "242"]
            }, {
                "category": "Umum",
                "label": "JASA ANUGERAH SAMUDRA, PT",
                "values": ["", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "180", "242", "242", "242", "242", "242", "242", "242", "242", "242", "242"]
            }, {
                "category": "Umum",
                "label": "ESCORINDO MITRA SETIA, PT",
                "values": ["", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "464", "689", "729", "780", "734", "476", "449", "", "", "", ""]
            }, {
                "category": "Umum",
                "label": "CAKEP ASTONI",
                "values": ["", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "55", "243", "239", "250", "253", "244", "242", "212", "229", "242", "255"]
            }, {
                "category": "Umum",
                "label": "KOPERASI KARYAWAN SYAHBANDAR TANJUNG PRIOK \"PERKASA\"",
                "values": ["", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "77", "385", "385", "385", "385", "385", "385", "385", ""]
            }, {
                "category": "Umum",
                "label": "HIDUP SUKSES MANDIRI, CV",
                "values": ["", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "486", "508", "470", "420", "320", "428", "476", "460"]
            }, {
                "category": "Umum",
                "label": "GENTA SUMARLAN",
                "values": ["", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "43", "143", "143", "143", "143", "143", "143"]
            }, {
                "category": "Umum",
                "label": "PRIMA BANDAR SAMUDERA, PT",
                "values": ["", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "286", "385", "432", "880", "697"]
            }, {
                "category": "Umum",
                "label": "CINTA HARAPAN JAYA, PT",
                "values": ["", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "437", "484", "484"]
            }, {
                "category": "IPC Group",
                "label": "JASA ARMADA INDONESIA TBK, PT",
                "values": ["", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "6440", "6440", "6440"]
            }, {
                "category": "IPC Group",
                "label": "PELABUHAN TANJUNG PRIOK CABANG PALEMBANG, PT",
                "values": ["", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "21558"]
            }]
        };
    for (var _Flourish_dataset in _Flourish_data) {
        window.template.data[_Flourish_dataset] = _Flourish_data[_Flourish_dataset];
        window.template.data[_Flourish_dataset].column_names = _Flourish_data_column_names[_Flourish_dataset];
    }
    window.template.draw(); 
</script>
</body>
</html>