var App = webpackJsonpApp([3], {
    "+Ywr": function (e, t) {},
    "/wvp": function (e, t, a) {
        "use strict";

        function i(e) {
            a("kCmP")
        }
        var n = a("y1vT"),
            s = a.n(n),
            r = {
                props: {
                    item: Object,
                    status: Number,
                    rated: Number,
                    showRating: {
                        type: Boolean,
                        default: !0
                    }
                },
                data: function () {
                    return {
                        loading: !1,
                        loading_manage: !1
                    }
                },
                mounted: function () {},
                computed: {
                    selected: {
                        set: function (e) {
                            this.$emit("update:status", e)
                        },
                        get: function () {
                            return this.status
                        }
                    },
                    rating: {
                        set: function (e) {
                            this.$emit("update:rated", e)
                        },
                        get: function () {
                            return this.rated
                        }
                    },
                    icon_class: function () {
                        return this.selected > 0 ? "far fa-pencil" : "far fa-plus"
                    },
                    statuses: function () {
                        return this.selected ? {
                            3: "Plan to Watch",
                            1: "Watching",
                            2: "Completed",
                            4: "On-Hold",
                            5: "Dropped",
                            6: "Not Interested"
                        } : {
                            3: "Plan to Watch",
                            1: "Currently Watching",
                            2: "Completed",
                            4: "On-Hold",
                            5: "Dropped",
                            6: "Not Interested"
                        }
                    },
                    selected_label: function () {
                        return this.statuses.hasOwnProperty(this.selected) ? this.statuses[this.selected] : "Plan to Watch"
                    }
                },
                methods: {
                    updatedRating: function (e) {
                        e > 0 && (this.rating = e, this.updateWatchStatus(2))
                    },
                    manageTitle: function () {
                        var e = this;
                        this.loading_manage = !0, setTimeout(function () {
                            e.loading_manage = !1
                        }, 600), this.$emit("open", this.item.id)
                    },
                    updateByCommand: function (e) {
                        switch (e) {
                            case "add_to_list":
                                this.manageTitle();
                                break;
                            case "not_interested":
                                this.updateWatchStatus(6)
                        }
                    },
                    updatePlanToWatch: function () {
                        this.selected <= 0 && this.updateWatchStatus(3)
                    },
                    updateWatchStatus: s()(function (e) {
                        var t = this,
                            a = !1,
                            i = parseInt(e);
                        switch (i) {
                            case 3:
                            case 4:
                            case 6:
                                this.selected = i, this.rating = 0, a = !0;
                                break;
                            case 1:
                            case 2:
                            case 5:
                                this.selected = i, a = !0;
                                break;
                            case 10:
                                this.rating = 0, this.$http.Delete("/v1/users/watchaction/" + this.item.id, function () {
                                    t.selected = 0, t.loading = !1
                                })
                        }
                        a && (this.loading = !0, this.$http.Patch("/v1/users/watchaction/" + this.item.id, {
                            watch_status: i,
                            score: this.rating
                        }, function (e) {
                            t.loading = !1, t.selected = e.watch_status, t.$emit("update", {
                                watch_status: i,
                                score: t.rating
                            })
                        }))
                    }, 600)
                }
            },
            o = function () {
                var e = this,
                    t = e.$createElement,
                    a = e._self._c || t;
                return a("div", {
                    directives: [{
                        name: "loading",
                        rawName: "v-loading",
                        value: e.loading,
                        expression: "loading"
                    }],
                    staticClass: "film-footer"
                }, [e.showRating ? a("rating", {
                    attrs: {
                        rating: e.rating,
                        showRated: !0,
                        size: "medium",
                        showRating: !1
                    },
                    on: {
                        "update:rating": [function (t) {
                            e.rating = t
                        }, e.updatedRating]
                    }
                }) : e._e(), e._v(" "), a("el-button-group", {
                    class: ["btn-mylist-group", {
                        active: e.selected > 0
                    }]
                }, [a("el-button", {
                    staticClass: "btn-ptw",
                    attrs: {
                        plain: ""
                    },
                    on: {
                        click: e.updatePlanToWatch
                    }
                }, [e._v(e._s(e.selected_label))]), e._v(" "), e.selected > 0 ? a("el-button", {
                    staticClass: "btn-custom",
                    attrs: {
                        plain: "",
                        icon: e.icon_class,
                        loading: e.loading_manage
                    },
                    on: {
                        click: e.manageTitle
                    }
                }) : a("el-dropdown", {
                    on: {
                        command: e.updateByCommand
                    }
                }, [a("el-button", {
                    staticClass: "btn-custom",
                    attrs: {
                        plain: "",
                        icon: e.icon_class,
                        loading: e.loading_manage
                    },
                    on: {
                        click: e.manageTitle
                    }
                }), e._v(" "), a("el-dropdown-menu", {
                    attrs: {
                        slot: "dropdown"
                    },
                    slot: "dropdown"
                }, [a("el-dropdown-item", {
                    attrs: {
                        command: "add_to_list"
                    }
                }, [e._v("Add to List")]), e._v(" "), a("el-dropdown-item", {
                    attrs: {
                        command: "not_interested"
                    }
                }, [e._v("Not Interested")])], 1)], 1)], 1)], 1)
            },
            l = [],
            c = {
                render: o,
                staticRenderFns: l
            },
            d = c,
            u = a("VU/8"),
            p = i,
            h = u(r, d, !1, p, null, null);
        t.a = h.exports
    },
    "0iPh": function (e, t) {
        e.exports = jQuery
    },
    "4Qrm": function (e, t, a) {
        var i, n, s;
        ! function (r, o) {
            "use strict";
            n = [a("0iPh")], i = o, void 0 !== (s = "function" == typeof i ? i.apply(t, n) : i) && (e.exports = s)
        }(0, function e(t, a) {
            "use strict";

            function i(e) {
                var t = v[f.locale];
                return t ? t[e] : v.en[e]
            }

            function n(e, a, i) {
                e.stopPropagation(), e.preventDefault(), t.isFunction(i) && !1 === i.call(a, e) || a.modal("hide")
            }

            function s(e) {
                var t, a = 0;
                for (t in e) a++;
                return a
            }

            function r(e, a) {
                var i = 0;
                t.each(e, function (e, t) {
                    a(e, t, i++)
                })
            }

            function o(e) {
                var a, i;
                if ("object" != typeof e) throw new Error("Please supply an object of options");
                if (!e.message) throw new Error("Please specify a message");
                return e = t.extend({}, f, e), e.buttons || (e.buttons = {}), a = e.buttons, i = s(a), r(a, function (e, n, s) {
                    if (t.isFunction(n) && (n = a[e] = {
                            callback: n
                        }), "object" !== t.type(n)) throw new Error("button with key " + e + " must be an object");
                    n.label || (n.label = e), n.className || (n.className = i <= 2 && s === i - 1 ? "btn-primary" : "btn-default")
                }), e
            }

            function l(e, t) {
                var a = e.length,
                    i = {};
                if (a < 1 || a > 2) throw new Error("Invalid argument length");
                return 2 === a || "string" == typeof e[0] ? (i[t[0]] = e[0], i[t[1]] = e[1]) : i = e[0], i
            }

            function c(e, a, i) {
                return t.extend(!0, {}, e, l(a, i))
            }

            function d(e, t, a, i) {
                return p(c({
                    className: "bootbox-" + e,
                    buttons: u.apply(null, t)
                }, i, a), t)
            }

            function u() {
                for (var e = {}, t = 0, a = arguments.length; t < a; t++) {
                    var n = arguments[t],
                        s = n.toLowerCase(),
                        r = n.toUpperCase();
                    e[s] = {
                        label: i(r)
                    }
                }
                return e
            }

            function p(e, t) {
                var i = {};
                return r(t, function (e, t) {
                    i[t] = !0
                }), r(e.buttons, function (e) {
                    if (i[e] === a) throw new Error("button key " + e + " is not allowed (options are " + t.join("\n") + ")")
                }), e
            }
            var h = {
                    dialog: "<div class='bootbox modal' tabindex='-1' role='dialog'><div class='modal-dialog'><div class='modal-content'><div class='modal-body'><div class='bootbox-body'></div></div></div></div></div>",
                    header: "<div class='modal-header'><h4 class='modal-title'></h4></div>",
                    footer: "<div class='modal-footer'></div>",
                    closeButton: "<button type='button' class='bootbox-close-button close' data-dismiss='modal' aria-hidden='true'>&times;</button>",
                    form: "<form class='bootbox-form'></form>",
                    inputs: {
                        text: "<input class='bootbox-input bootbox-input-text form-control' autocomplete=off type=text />",
                        textarea: "<textarea class='bootbox-input bootbox-input-textarea form-control'></textarea>",
                        email: "<input class='bootbox-input bootbox-input-email form-control' autocomplete='off' type='email' />",
                        select: "<select class='bootbox-input bootbox-input-select form-control'></select>",
                        checkbox: "<div class='checkbox'><label><input class='bootbox-input bootbox-input-checkbox' type='checkbox' /></label></div>",
                        date: "<input class='bootbox-input bootbox-input-date form-control' autocomplete=off type='date' />",
                        time: "<input class='bootbox-input bootbox-input-time form-control' autocomplete=off type='time' />",
                        number: "<input class='bootbox-input bootbox-input-number form-control' autocomplete=off type='number' />",
                        password: "<input class='bootbox-input bootbox-input-password form-control' autocomplete='off' type='password' />"
                    }
                },
                f = {
                    locale: "en",
                    backdrop: "static",
                    animate: !0,
                    className: null,
                    closeButton: !0,
                    show: !0,
                    container: "body"
                },
                m = {};
            m.alert = function () {
                var e;
                if (e = d("alert", ["ok"], ["message", "callback"], arguments), e.callback && !t.isFunction(e.callback)) throw new Error("alert requires callback property to be a function when provided");
                return e.buttons.ok.callback = e.onEscape = function () {
                    return !t.isFunction(e.callback) || e.callback.call(this)
                }, m.dialog(e)
            }, m.confirm = function () {
                var e;
                if (e = d("confirm", ["cancel", "confirm"], ["message", "callback"], arguments), e.buttons.cancel.callback = e.onEscape = function () {
                        return e.callback.call(this, !1)
                    }, e.buttons.confirm.callback = function () {
                        return e.callback.call(this, !0)
                    }, !t.isFunction(e.callback)) throw new Error("confirm requires a callback");
                return m.dialog(e)
            }, m.prompt = function () {
                var e, i, n, s, o, l, d;
                if (s = t(h.form), i = {
                        className: "bootbox-prompt",
                        buttons: u("cancel", "confirm"),
                        value: "",
                        inputType: "text"
                    }, e = p(c(i, arguments, ["title", "callback"]), ["cancel", "confirm"]), l = e.show === a || e.show, e.message = s, e.buttons.cancel.callback = e.onEscape = function () {
                        return e.callback.call(this, null)
                    }, e.buttons.confirm.callback = function () {
                        var a;
                        switch (e.inputType) {
                            case "text":
                            case "textarea":
                            case "email":
                            case "select":
                            case "date":
                            case "time":
                            case "number":
                            case "password":
                                a = o.val();
                                break;
                            case "checkbox":
                                var i = o.find("input:checked");
                                a = [], r(i, function (e, i) {
                                    a.push(t(i).val())
                                })
                        }
                        return e.callback.call(this, a)
                    }, e.show = !1, !e.title) throw new Error("prompt requires a title");
                if (!t.isFunction(e.callback)) throw new Error("prompt requires a callback");
                if (!h.inputs[e.inputType]) throw new Error("invalid prompt type");
                switch (o = t(h.inputs[e.inputType]), e.inputType) {
                    case "text":
                    case "textarea":
                    case "email":
                    case "date":
                    case "time":
                    case "number":
                    case "password":
                        o.val(e.value);
                        break;
                    case "select":
                        var f = {};
                        if (d = e.inputOptions || [], !t.isArray(d)) throw new Error("Please pass an array of input options");
                        if (!d.length) throw new Error("prompt with select requires options");
                        r(d, function (e, i) {
                            var n = o;
                            if (i.value === a || i.text === a) throw new Error("given options in wrong format");
                            i.group && (f[i.group] || (f[i.group] = t("<optgroup/>").attr("label", i.group)), n = f[i.group]), n.append("<option value='" + i.value + "'>" + i.text + "</option>")
                        }), r(f, function (e, t) {
                            o.append(t)
                        }), o.val(e.value);
                        break;
                    case "checkbox":
                        var v = t.isArray(e.value) ? e.value : [e.value];
                        if (d = e.inputOptions || [], !d.length) throw new Error("prompt with checkbox requires options");
                        if (!d[0].value || !d[0].text) throw new Error("given options in wrong format");
                        o = t("<div/>"), r(d, function (a, i) {
                            var n = t(h.inputs[e.inputType]);
                            n.find("input").attr("value", i.value), n.find("label").append(i.text), r(v, function (e, t) {
                                t === i.value && n.find("input").prop("checked", !0)
                            }), o.append(n)
                        })
                }
                return e.placeholder && o.attr("placeholder", e.placeholder), e.pattern && o.attr("pattern", e.pattern), e.maxlength && o.attr("maxlength", e.maxlength), s.append(o), s.on("submit", function (e) {
                    e.preventDefault(), e.stopPropagation(), n.find(".btn-primary").click()
                }), n = m.dialog(e), n.off("shown.bs.modal"), n.on("shown.bs.modal", function () {
                    o.focus()
                }), !0 === l && n.modal("show"), n
            }, m.dialog = function (e) {
                e = o(e);
                var i = t(h.dialog),
                    s = i.find(".modal-dialog"),
                    l = i.find(".modal-body"),
                    c = e.buttons,
                    d = "",
                    u = {
                        onEscape: e.onEscape
                    };
                if (t.fn.modal === a) throw new Error("$.fn.modal is not defined; please double check you have included the Bootstrap JavaScript library. See http://getbootstrap.com/javascript/ for more details.");
                if (r(c, function (e, t) {
                        d += "<button data-bb-handler='" + e + "' type='button' class='btn " + t.className + "'>" + t.label + "</button>", u[e] = t.callback
                    }), l.find(".bootbox-body").html(e.message), !0 === e.animate && i.addClass("fade"), e.className && i.addClass(e.className), "large" === e.size ? s.addClass("modal-lg") : "small" === e.size && s.addClass("modal-sm"), e.title && l.before(h.header), e.closeButton) {
                    var p = t(h.closeButton);
                    e.title ? i.find(".modal-header").prepend(p) : p.css("margin-top", "-10px").prependTo(l)
                }
                return e.title && i.find(".modal-title").html(e.title), d.length && (l.after(h.footer), i.find(".modal-footer").html(d)), i.on("hidden.bs.modal", function (e) {
                    e.target === this && i.remove()
                }), i.on("shown.bs.modal", function () {
                    i.find(".btn-primary:first").focus()
                }), "static" !== e.backdrop && i.on("click.dismiss.bs.modal", function (e) {
                    i.children(".modal-backdrop").length && (e.currentTarget = i.children(".modal-backdrop").get(0)), e.target === e.currentTarget && i.trigger("escape.close.bb")
                }), i.on("escape.close.bb", function (e) {
                    u.onEscape && n(e, i, u.onEscape)
                }), i.on("click", ".modal-footer button", function (e) {
                    var a = t(this).data("bb-handler");
                    n(e, i, u[a])
                }), i.on("click", ".bootbox-close-button", function (e) {
                    n(e, i, u.onEscape)
                }), i.on("keyup", function (e) {
                    27 === e.which && i.trigger("escape.close.bb")
                }), t(e.container).append(i), i.modal({
                    backdrop: !!e.backdrop && "static",
                    keyboard: !1,
                    show: !1
                }), e.show && i.modal("show"), i
            }, m.setDefaults = function () {
                var e = {};
                2 === arguments.length ? e[arguments[0]] = arguments[1] : e = arguments[0], t.extend(f, e)
            }, m.hideAll = function () {
                return t(".bootbox").modal("hide"), m
            };
            var v = {
                bg_BG: {
                    OK: "Ок",
                    CANCEL: "Отказ",
                    CONFIRM: "Потвърждавам"
                },
                br: {
                    OK: "OK",
                    CANCEL: "Cancelar",
                    CONFIRM: "Sim"
                },
                cs: {
                    OK: "OK",
                    CANCEL: "Zrušit",
                    CONFIRM: "Potvrdit"
                },
                da: {
                    OK: "OK",
                    CANCEL: "Annuller",
                    CONFIRM: "Accepter"
                },
                de: {
                    OK: "OK",
                    CANCEL: "Abbrechen",
                    CONFIRM: "Akzeptieren"
                },
                el: {
                    OK: "Εντάξει",
                    CANCEL: "Ακύρωση",
                    CONFIRM: "Επιβεβαίωση"
                },
                en: {
                    OK: "OK",
                    CANCEL: "Cancel",
                    CONFIRM: "OK"
                },
                es: {
                    OK: "OK",
                    CANCEL: "Cancelar",
                    CONFIRM: "Aceptar"
                },
                et: {
                    OK: "OK",
                    CANCEL: "Katkesta",
                    CONFIRM: "OK"
                },
                fa: {
                    OK: "قبول",
                    CANCEL: "لغو",
                    CONFIRM: "تایید"
                },
                fi: {
                    OK: "OK",
                    CANCEL: "Peruuta",
                    CONFIRM: "OK"
                },
                fr: {
                    OK: "OK",
                    CANCEL: "Annuler",
                    CONFIRM: "D'accord"
                },
                he: {
                    OK: "אישור",
                    CANCEL: "ביטול",
                    CONFIRM: "אישור"
                },
                hu: {
                    OK: "OK",
                    CANCEL: "Mégsem",
                    CONFIRM: "Megerősít"
                },
                hr: {
                    OK: "OK",
                    CANCEL: "Odustani",
                    CONFIRM: "Potvrdi"
                },
                id: {
                    OK: "OK",
                    CANCEL: "Batal",
                    CONFIRM: "OK"
                },
                it: {
                    OK: "OK",
                    CANCEL: "Annulla",
                    CONFIRM: "Conferma"
                },
                ja: {
                    OK: "OK",
                    CANCEL: "キャンセル",
                    CONFIRM: "確認"
                },
                lt: {
                    OK: "Gerai",
                    CANCEL: "Atšaukti",
                    CONFIRM: "Patvirtinti"
                },
                lv: {
                    OK: "Labi",
                    CANCEL: "Atcelt",
                    CONFIRM: "Apstiprināt"
                },
                nl: {
                    OK: "OK",
                    CANCEL: "Annuleren",
                    CONFIRM: "Accepteren"
                },
                no: {
                    OK: "OK",
                    CANCEL: "Avbryt",
                    CONFIRM: "OK"
                },
                pl: {
                    OK: "OK",
                    CANCEL: "Anuluj",
                    CONFIRM: "Potwierdź"
                },
                pt: {
                    OK: "OK",
                    CANCEL: "Cancelar",
                    CONFIRM: "Confirmar"
                },
                ru: {
                    OK: "OK",
                    CANCEL: "Отмена",
                    CONFIRM: "Применить"
                },
                sq: {
                    OK: "OK",
                    CANCEL: "Anulo",
                    CONFIRM: "Prano"
                },
                sv: {
                    OK: "OK",
                    CANCEL: "Avbryt",
                    CONFIRM: "OK"
                },
                th: {
                    OK: "ตกลง",
                    CANCEL: "ยกเลิก",
                    CONFIRM: "ยืนยัน"
                },
                tr: {
                    OK: "Tamam",
                    CANCEL: "İptal",
                    CONFIRM: "Onayla"
                },
                zh_CN: {
                    OK: "OK",
                    CANCEL: "取消",
                    CONFIRM: "确认"
                },
                zh_TW: {
                    OK: "OK",
                    CANCEL: "取消",
                    CONFIRM: "確認"
                }
            };
            return m.addLocale = function (e, a) {
                return t.each(["OK", "CANCEL", "CONFIRM"], function (e, t) {
                    if (!a[t]) throw new Error("Please supply a translation for '" + t + "'")
                }), v[e] = {
                    OK: a.OK,
                    CANCEL: a.CANCEL,
                    CONFIRM: a.CONFIRM
                }, m
            }, m.removeLocale = function (e) {
                return delete v[e], m
            }, m.setLocale = function (e) {
                return m.setDefaults("locale", e)
            }, m.init = function (a) {
                return e(a || t)
            }, m
        })
    },
    "4U5d": function (e, t) {},
    "7ZsJ": function (e, t, a) {
        var i, n, s;
        ! function (r) {
            n = [a("0iPh")], i = r, void 0 !== (s = "function" == typeof i ? i.apply(t, n) : i) && (e.exports = s)
        }(function (e) {
            var t = Array.prototype.slice,
                a = Array.prototype.splice,
                i = {
                    topSpacing: 0,
                    bottomSpacing: 0,
                    className: "is-sticky",
                    wrapperClassName: "sticky-wrapper",
                    center: !1,
                    getWidthFrom: "",
                    widthFromWrapper: !0,
                    responsiveWidth: !1,
                    zIndex: "auto"
                },
                n = e(window),
                s = e(document),
                r = [],
                o = n.height(),
                l = function () {
                    for (var t = n.scrollTop(), a = s.height(), i = a - o, l = t > i ? i - t : 0, c = 0, d = r.length; c < d; c++) {
                        var u = r[c],
                            p = u.stickyWrapper.offset().top,
                            h = p - u.topSpacing - l;
                        if (u.stickyWrapper.css("height", u.stickyElement.outerHeight()), t <= h) null !== u.currentTop && (u.stickyElement.css({
                            width: "",
                            position: "",
                            top: "",
                            "z-index": ""
                        }), u.stickyElement.parent().removeClass(u.className), u.stickyElement.trigger("sticky-end", [u]), u.currentTop = null);
                        else {
                            var f = a - u.stickyElement.outerHeight() - u.topSpacing - u.bottomSpacing - t - l;
                            if (f < 0 ? f += u.topSpacing : f = u.topSpacing, u.currentTop !== f) {
                                var m;
                                u.getWidthFrom ? m = e(u.getWidthFrom).width() || null : u.widthFromWrapper && (m = u.stickyWrapper.width()), null == m && (m = u.stickyElement.width()), u.stickyElement.css("width", m).css("position", "fixed").css("top", f).css("z-index", u.zIndex), u.stickyElement.parent().addClass(u.className), null === u.currentTop ? u.stickyElement.trigger("sticky-start", [u]) : u.stickyElement.trigger("sticky-update", [u]), u.currentTop === u.topSpacing && u.currentTop > f || null === u.currentTop && f < u.topSpacing ? u.stickyElement.trigger("sticky-bottom-reached", [u]) : null !== u.currentTop && f === u.topSpacing && u.currentTop < f && u.stickyElement.trigger("sticky-bottom-unreached", [u]), u.currentTop = f
                            }
                            var v = u.stickyWrapper.parent();
                            u.stickyElement.offset().top + u.stickyElement.outerHeight() >= v.offset().top + v.outerHeight() && u.stickyElement.offset().top <= u.topSpacing ? u.stickyElement.css("position", "absolute").css("top", "").css("bottom", 0).css("z-index", "") : u.stickyElement.css("position", "fixed").css("top", f).css("bottom", "").css("z-index", u.zIndex)
                        }
                    }
                },
                c = function () {
                    o = n.height();
                    for (var t = 0, a = r.length; t < a; t++) {
                        var i = r[t],
                            s = null;
                        i.getWidthFrom ? i.responsiveWidth && (s = e(i.getWidthFrom).width()) : i.widthFromWrapper && (s = i.stickyWrapper.width()), null != s && i.stickyElement.css("width", s)
                    }
                },
                d = {
                    init: function (t) {
                        var a = e.extend({}, i, t);
                        return this.each(function () {
                            var t = e(this),
                                n = t.attr("id"),
                                s = n ? n + "-" + i.wrapperClassName : i.wrapperClassName,
                                o = e("<div></div>").attr("id", s).addClass(a.wrapperClassName);
                            t.wrapAll(o);
                            var l = t.parent();
                            a.center && l.css({
                                width: t.outerWidth(),
                                marginLeft: "auto",
                                marginRight: "auto"
                            }), "right" === t.css("float") && t.css({
                                float: "none"
                            }).parent().css({
                                float: "right"
                            }), a.stickyElement = t, a.stickyWrapper = l, a.currentTop = null, r.push(a), d.setWrapperHeight(this), d.setupChangeListeners(this)
                        })
                    },
                    setWrapperHeight: function (t) {
                        var a = e(t),
                            i = a.parent();
                        i && i.css("height", a.outerHeight())
                    },
                    setupChangeListeners: function (e) {
                        if (window.MutationObserver) {
                            new window.MutationObserver(function (t) {
                                (t[0].addedNodes.length || t[0].removedNodes.length) && d.setWrapperHeight(e)
                            }).observe(e, {
                                subtree: !0,
                                childList: !0
                            })
                        } else e.addEventListener("DOMNodeInserted", function () {
                            d.setWrapperHeight(e)
                        }, !1), e.addEventListener("DOMNodeRemoved", function () {
                            d.setWrapperHeight(e)
                        }, !1)
                    },
                    update: l,
                    unstick: function (t) {
                        return this.each(function () {
                            for (var t = this, i = e(t), n = -1, s = r.length; s-- > 0;) r[s].stickyElement.get(0) === t && (a.call(r, s, 1), n = s); - 1 !== n && (i.unwrap(), i.css({
                                width: "",
                                position: "",
                                top: "",
                                float: "",
                                "z-index": ""
                            }))
                        })
                    }
                };
            window.addEventListener ? (window.addEventListener("scroll", l, !1), window.addEventListener("resize", c, !1)) : window.attachEvent && (window.attachEvent("onscroll", l), window.attachEvent("onresize", c)), e.fn.sticky = function (a) {
                return d[a] ? d[a].apply(this, t.call(arguments, 1)) : "object" != typeof a && a ? void e.error("Method " + a + " does not exist on jQuery.sticky") : d.init.apply(this, arguments)
            }, e.fn.unstick = function (a) {
                return d[a] ? d[a].apply(this, t.call(arguments, 1)) : "object" != typeof a && a ? void e.error("Method " + a + " does not exist on jQuery.sticky") : d.unstick.apply(this, arguments)
            }, e(function () {
                setTimeout(l, 0)
            })
        })
    },
    Bwlq: function (e, t) {},
    EPAd: function (e, t, a) {
        ! function (e, a) {
            a(t)
        }(0, function (e) {
            "use strict";
            /*!
             * perfect-scrollbar v1.4.0
             * (c) 2018 Hyunje Jun
             * @license MIT
             */
            function t(e) {
                return getComputedStyle(e)
            }

            function a(e, t) {
                for (var a in t) {
                    var i = t[a];
                    "number" == typeof i && (i += "px"), e.style[a] = i
                }
                return e
            }

            function i(e) {
                var t = document.createElement("div");
                return t.className = e, t
            }

            function n(e, t) {
                if (!y) throw new Error("No element matching method supported");
                return y.call(e, t)
            }

            function s(e) {
                e.remove ? e.remove() : e.parentNode && e.parentNode.removeChild(e)
            }

            function r(e, t) {
                return Array.prototype.filter.call(e.children, function (e) {
                    return n(e, t)
                })
            }

            function o(e, t) {
                var a = e.element.classList,
                    i = w.state.scrolling(t);
                a.contains(i) ? clearTimeout(C[t]) : a.add(i)
            }

            function l(e, t) {
                C[t] = setTimeout(function () {
                    return e.isAlive && e.element.classList.remove(w.state.scrolling(t))
                }, e.settings.scrollingThreshold)
            }

            function c(e, t) {
                o(e, t), l(e, t)
            }

            function d(e) {
                if ("function" == typeof window.CustomEvent) return new CustomEvent(e);
                var t = document.createEvent("CustomEvent");
                return t.initCustomEvent(e, !1, !1, void 0), t
            }

            function u(e, t, a, i, n) {
                var s = a[0],
                    r = a[1],
                    o = a[2],
                    l = a[3],
                    u = a[4],
                    p = a[5];
                void 0 === i && (i = !0), void 0 === n && (n = !1);
                var h = e.element;
                e.reach[l] = null, h[o] < 1 && (e.reach[l] = "start"), h[o] > e[s] - e[r] - 1 && (e.reach[l] = "end"), t && (h.dispatchEvent(d("ps-scroll-" + l)), t < 0 ? h.dispatchEvent(d("ps-scroll-" + u)) : t > 0 && h.dispatchEvent(d("ps-scroll-" + p)), i && c(e, l)), e.reach[l] && (t || n) && h.dispatchEvent(d("ps-" + l + "-reach-" + e.reach[l]))
            }

            function p(e) {
                return parseInt(e, 10) || 0
            }

            function h(e) {
                return n(e, "input,[contenteditable]") || n(e, "select,[contenteditable]") || n(e, "textarea,[contenteditable]") || n(e, "button,[contenteditable]")
            }

            function f(e) {
                var a = t(e);
                return p(a.width) + p(a.paddingLeft) + p(a.paddingRight) + p(a.borderLeftWidth) + p(a.borderRightWidth)
            }

            function m(e, t) {
                return e.settings.minScrollbarLength && (t = Math.max(t, e.settings.minScrollbarLength)), e.settings.maxScrollbarLength && (t = Math.min(t, e.settings.maxScrollbarLength)), t
            }

            function v(e, t) {
                var i = {
                        width: t.railXWidth
                    },
                    n = Math.floor(e.scrollTop);
                t.isRtl ? i.left = t.negativeScrollAdjustment + e.scrollLeft + t.containerWidth - t.contentWidth : i.left = e.scrollLeft, t.isScrollbarXUsingBottom ? i.bottom = t.scrollbarXBottom - n : i.top = t.scrollbarXTop + n, a(t.scrollbarXRail, i);
                var s = {
                    top: n,
                    height: t.railYHeight
                };
                t.isScrollbarYUsingRight ? t.isRtl ? s.right = t.contentWidth - (t.negativeScrollAdjustment + e.scrollLeft) - t.scrollbarYRight - t.scrollbarYOuterWidth : s.right = t.scrollbarYRight - e.scrollLeft : t.isRtl ? s.left = t.negativeScrollAdjustment + e.scrollLeft + 2 * t.containerWidth - t.contentWidth - t.scrollbarYLeft - t.scrollbarYOuterWidth : s.left = t.scrollbarYLeft + e.scrollLeft, a(t.scrollbarYRail, s), a(t.scrollbarX, {
                    left: t.scrollbarXLeft,
                    width: t.scrollbarXWidth - t.railBorderXWidth
                }), a(t.scrollbarY, {
                    top: t.scrollbarYTop,
                    height: t.scrollbarYHeight - t.railBorderYWidth
                })
            }

            function g(e, t) {
                function a(t) {
                    m[p] = v + b * (t[r] - g), o(e, h), M(e), t.stopPropagation(), t.preventDefault()
                }

                function i() {
                    l(e, h), e[f].classList.remove(w.state.clicking), e.event.unbind(e.ownerDocument, "mousemove", a)
                }
                var n = t[0],
                    s = t[1],
                    r = t[2],
                    c = t[3],
                    d = t[4],
                    u = t[5],
                    p = t[6],
                    h = t[7],
                    f = t[8],
                    m = e.element,
                    v = null,
                    g = null,
                    b = null;
                e.event.bind(e[d], "mousedown", function (t) {
                    v = m[p], g = t[r], b = (e[s] - e[n]) / (e[c] - e[u]), e.event.bind(e.ownerDocument, "mousemove", a), e.event.once(e.ownerDocument, "mouseup", i), e[f].classList.add(w.state.clicking), t.stopPropagation(), t.preventDefault()
                })
            }

            function b(e, t) {
                t && (t.name && "string" == typeof t.name && (H.name = t.name), t.options && "object" == typeof t.options && (H.props.options.default = function () {
                    return t.options
                }), t.tag && "string" == typeof t.tag && (H.props.tag.default = t.tag), t.watchOptions && "boolean" == typeof t.watchOptions && (H.props.watchOptions = t.watchOptions)), e.component(H.name, H)
            }
            var y = "undefined" != typeof Element && (Element.prototype.matches || Element.prototype.webkitMatchesSelector || Element.prototype.mozMatchesSelector || Element.prototype.msMatchesSelector),
                w = {
                    main: "ps",
                    element: {
                        thumb: function (e) {
                            return "ps__thumb-" + e
                        },
                        rail: function (e) {
                            return "ps__rail-" + e
                        },
                        consuming: "ps__child--consume"
                    },
                    state: {
                        focus: "ps--focus",
                        clicking: "ps--clicking",
                        active: function (e) {
                            return "ps--active-" + e
                        },
                        scrolling: function (e) {
                            return "ps--scrolling-" + e
                        }
                    }
                },
                C = {
                    x: null,
                    y: null
                },
                S = function (e) {
                    this.element = e, this.handlers = {}
                },
                T = {
                    isEmpty: {
                        configurable: !0
                    }
                };
            S.prototype.bind = function (e, t) {
                void 0 === this.handlers[e] && (this.handlers[e] = []), this.handlers[e].push(t), this.element.addEventListener(e, t, !1)
            }, S.prototype.unbind = function (e, t) {
                var a = this;
                this.handlers[e] = this.handlers[e].filter(function (i) {
                    return !(!t || i === t) || (a.element.removeEventListener(e, i, !1), !1)
                })
            }, S.prototype.unbindAll = function () {
                var e = this;
                for (var t in e.handlers) e.unbind(t)
            }, T.isEmpty.get = function () {
                var e = this;
                return Object.keys(this.handlers).every(function (t) {
                    return 0 === e.handlers[t].length
                })
            }, Object.defineProperties(S.prototype, T);
            var _ = function () {
                this.eventElements = []
            };
            _.prototype.eventElement = function (e) {
                var t = this.eventElements.filter(function (t) {
                    return t.element === e
                })[0];
                return t || (t = new S(e), this.eventElements.push(t)), t
            }, _.prototype.bind = function (e, t, a) {
                this.eventElement(e).bind(t, a)
            }, _.prototype.unbind = function (e, t, a) {
                var i = this.eventElement(e);
                i.unbind(t, a), i.isEmpty && this.eventElements.splice(this.eventElements.indexOf(i), 1)
            }, _.prototype.unbindAll = function () {
                this.eventElements.forEach(function (e) {
                    return e.unbindAll()
                }), this.eventElements = []
            }, _.prototype.once = function (e, t, a) {
                var i = this.eventElement(e),
                    n = function (e) {
                        i.unbind(t, n), a(e)
                    };
                i.bind(t, n)
            };
            var x = function (e, t, a, i, n) {
                    void 0 === i && (i = !0), void 0 === n && (n = !1);
                    var s;
                    if ("top" === t) s = ["contentHeight", "containerHeight", "scrollTop", "y", "up", "down"];
                    else {
                        if ("left" !== t) throw new Error("A proper axis should be provided");
                        s = ["contentWidth", "containerWidth", "scrollLeft", "x", "left", "right"]
                    }
                    u(e, a, s, i, n)
                },
                E = {
                    isWebKit: "undefined" != typeof document && "WebkitAppearance" in document.documentElement.style,
                    supportsTouch: "undefined" != typeof window && ("ontouchstart" in window || window.DocumentTouch && document instanceof window.DocumentTouch),
                    supportsIePointer: "undefined" != typeof navigator && navigator.msMaxTouchPoints,
                    isChrome: "undefined" != typeof navigator && /Chrome/i.test(navigator && navigator.userAgent)
                },
                M = function (e) {
                    var t = e.element,
                        a = Math.floor(t.scrollTop);
                    e.containerWidth = t.clientWidth, e.containerHeight = t.clientHeight, e.contentWidth = t.scrollWidth, e.contentHeight = t.scrollHeight, t.contains(e.scrollbarXRail) || (r(t, w.element.rail("x")).forEach(function (e) {
                        return s(e)
                    }), t.appendChild(e.scrollbarXRail)), t.contains(e.scrollbarYRail) || (r(t, w.element.rail("y")).forEach(function (e) {
                        return s(e)
                    }), t.appendChild(e.scrollbarYRail)), !e.settings.suppressScrollX && e.containerWidth + e.settings.scrollXMarginOffset < e.contentWidth ? (e.scrollbarXActive = !0, e.railXWidth = e.containerWidth - e.railXMarginWidth, e.railXRatio = e.containerWidth / e.railXWidth, e.scrollbarXWidth = m(e, p(e.railXWidth * e.containerWidth / e.contentWidth)), e.scrollbarXLeft = p((e.negativeScrollAdjustment + t.scrollLeft) * (e.railXWidth - e.scrollbarXWidth) / (e.contentWidth - e.containerWidth))) : e.scrollbarXActive = !1, !e.settings.suppressScrollY && e.containerHeight + e.settings.scrollYMarginOffset < e.contentHeight ? (e.scrollbarYActive = !0, e.railYHeight = e.containerHeight - e.railYMarginHeight, e.railYRatio = e.containerHeight / e.railYHeight, e.scrollbarYHeight = m(e, p(e.railYHeight * e.containerHeight / e.contentHeight)), e.scrollbarYTop = p(a * (e.railYHeight - e.scrollbarYHeight) / (e.contentHeight - e.containerHeight))) : e.scrollbarYActive = !1, e.scrollbarXLeft >= e.railXWidth - e.scrollbarXWidth && (e.scrollbarXLeft = e.railXWidth - e.scrollbarXWidth), e.scrollbarYTop >= e.railYHeight - e.scrollbarYHeight && (e.scrollbarYTop = e.railYHeight - e.scrollbarYHeight), v(t, e), e.scrollbarXActive ? t.classList.add(w.state.active("x")) : (t.classList.remove(w.state.active("x")), e.scrollbarXWidth = 0, e.scrollbarXLeft = 0, t.scrollLeft = 0), e.scrollbarYActive ? t.classList.add(w.state.active("y")) : (t.classList.remove(w.state.active("y")), e.scrollbarYHeight = 0, e.scrollbarYTop = 0, t.scrollTop = 0)
                },
                k = function (e) {
                    e.event.bind(e.scrollbarY, "mousedown", function (e) {
                        return e.stopPropagation()
                    }), e.event.bind(e.scrollbarYRail, "mousedown", function (t) {
                        var a = t.pageY - window.pageYOffset - e.scrollbarYRail.getBoundingClientRect().top,
                            i = a > e.scrollbarYTop ? 1 : -1;
                        e.element.scrollTop += i * e.containerHeight, M(e), t.stopPropagation()
                    }), e.event.bind(e.scrollbarX, "mousedown", function (e) {
                        return e.stopPropagation()
                    }), e.event.bind(e.scrollbarXRail, "mousedown", function (t) {
                        var a = t.pageX - window.pageXOffset - e.scrollbarXRail.getBoundingClientRect().left,
                            i = a > e.scrollbarXLeft ? 1 : -1;
                        e.element.scrollLeft += i * e.containerWidth, M(e), t.stopPropagation()
                    })
                },
                P = function (e) {
                    g(e, ["containerWidth", "contentWidth", "pageX", "railXWidth", "scrollbarX", "scrollbarXWidth", "scrollLeft", "x", "scrollbarXRail"]), g(e, ["containerHeight", "contentHeight", "pageY", "railYHeight", "scrollbarY", "scrollbarYHeight", "scrollTop", "y", "scrollbarYRail"])
                },
                D = function (e) {
                    function t(t, i) {
                        var n = Math.floor(a.scrollTop);
                        if (0 === t) {
                            if (!e.scrollbarYActive) return !1;
                            if (0 === n && i > 0 || n >= e.contentHeight - e.containerHeight && i < 0) return !e.settings.wheelPropagation
                        }
                        var s = a.scrollLeft;
                        if (0 === i) {
                            if (!e.scrollbarXActive) return !1;
                            if (0 === s && t < 0 || s >= e.contentWidth - e.containerWidth && t > 0) return !e.settings.wheelPropagation
                        }
                        return !0
                    }
                    var a = e.element,
                        i = function () {
                            return n(a, ":hover")
                        },
                        s = function () {
                            return n(e.scrollbarX, ":focus") || n(e.scrollbarY, ":focus")
                        };
                    e.event.bind(e.ownerDocument, "keydown", function (n) {
                        if (!(n.isDefaultPrevented && n.isDefaultPrevented() || n.defaultPrevented) && (i() || s())) {
                            var r = document.activeElement ? document.activeElement : e.ownerDocument.activeElement;
                            if (r) {
                                if ("IFRAME" === r.tagName) r = r.contentDocument.activeElement;
                                else
                                    for (; r.shadowRoot;) r = r.shadowRoot.activeElement;
                                if (h(r)) return
                            }
                            var o = 0,
                                l = 0;
                            switch (n.which) {
                                case 37:
                                    o = n.metaKey ? -e.contentWidth : n.altKey ? -e.containerWidth : -30;
                                    break;
                                case 38:
                                    l = n.metaKey ? e.contentHeight : n.altKey ? e.containerHeight : 30;
                                    break;
                                case 39:
                                    o = n.metaKey ? e.contentWidth : n.altKey ? e.containerWidth : 30;
                                    break;
                                case 40:
                                    l = n.metaKey ? -e.contentHeight : n.altKey ? -e.containerHeight : -30;
                                    break;
                                case 32:
                                    l = n.shiftKey ? e.containerHeight : -e.containerHeight;
                                    break;
                                case 33:
                                    l = e.containerHeight;
                                    break;
                                case 34:
                                    l = -e.containerHeight;
                                    break;
                                case 36:
                                    l = e.contentHeight;
                                    break;
                                case 35:
                                    l = -e.contentHeight;
                                    break;
                                default:
                                    return
                            }
                            e.settings.suppressScrollX && 0 !== o || e.settings.suppressScrollY && 0 !== l || (a.scrollTop -= l, a.scrollLeft += o, M(e), t(o, l) && n.preventDefault())
                        }
                    })
                },
                $ = function (e) {
                    function a(t, a) {
                        var i = Math.floor(r.scrollTop),
                            n = 0 === r.scrollTop,
                            s = i + r.offsetHeight === r.scrollHeight,
                            o = 0 === r.scrollLeft,
                            l = r.scrollLeft + r.offsetWidth === r.scrollWidth;
                        return !(Math.abs(a) > Math.abs(t) ? n || s : o || l) || !e.settings.wheelPropagation
                    }

                    function i(e) {
                        var t = e.deltaX,
                            a = -1 * e.deltaY;
                        return void 0 !== t && void 0 !== a || (t = -1 * e.wheelDeltaX / 6, a = e.wheelDeltaY / 6), e.deltaMode && 1 === e.deltaMode && (t *= 10, a *= 10), t !== t && a !== a && (t = 0, a = e.wheelDelta), e.shiftKey ? [-a, -t] : [t, a]
                    }

                    function n(e, a, i) {
                        if (!E.isWebKit && r.querySelector("select:focus")) return !0;
                        if (!r.contains(e)) return !1;
                        for (var n = e; n && n !== r;) {
                            if (n.classList.contains(w.element.consuming)) return !0;
                            var s = t(n);
                            if ([s.overflow, s.overflowX, s.overflowY].join("").match(/(scroll|auto)/)) {
                                var o = n.scrollHeight - n.clientHeight;
                                if (o > 0 && !(0 === n.scrollTop && i > 0 || n.scrollTop === o && i < 0)) return !0;
                                var l = n.scrollWidth - n.clientWidth;
                                if (l > 0 && !(0 === n.scrollLeft && a < 0 || n.scrollLeft === l && a > 0)) return !0
                            }
                            n = n.parentNode
                        }
                        return !1
                    }

                    function s(t) {
                        var s = i(t),
                            o = s[0],
                            l = s[1];
                        if (!n(t.target, o, l)) {
                            var c = !1;
                            e.settings.useBothWheelAxes ? e.scrollbarYActive && !e.scrollbarXActive ? (l ? r.scrollTop -= l * e.settings.wheelSpeed : r.scrollTop += o * e.settings.wheelSpeed, c = !0) : e.scrollbarXActive && !e.scrollbarYActive && (o ? r.scrollLeft += o * e.settings.wheelSpeed : r.scrollLeft -= l * e.settings.wheelSpeed, c = !0) : (r.scrollTop -= l * e.settings.wheelSpeed, r.scrollLeft += o * e.settings.wheelSpeed), M(e), c = c || a(o, l), c && !t.ctrlKey && (t.stopPropagation(), t.preventDefault())
                        }
                    }
                    var r = e.element;
                    void 0 !== window.onwheel ? e.event.bind(r, "wheel", s) : void 0 !== window.onmousewheel && e.event.bind(r, "mousewheel", s)
                },
                L = function (e) {
                    function a(t, a) {
                        var i = Math.floor(d.scrollTop),
                            n = d.scrollLeft,
                            s = Math.abs(t),
                            r = Math.abs(a);
                        if (r > s) {
                            if (a < 0 && i === e.contentHeight - e.containerHeight || a > 0 && 0 === i) return 0 === window.scrollY && a > 0 && E.isChrome
                        } else if (s > r && (t < 0 && n === e.contentWidth - e.containerWidth || t > 0 && 0 === n)) return !0;
                        return !0
                    }

                    function i(t, a) {
                        d.scrollTop -= a, d.scrollLeft -= t, M(e)
                    }

                    function n(e) {
                        return e.targetTouches ? e.targetTouches[0] : e
                    }

                    function s(e) {
                        return (!e.pointerType || "pen" !== e.pointerType || 0 !== e.buttons) && (!(!e.targetTouches || 1 !== e.targetTouches.length) || !(!e.pointerType || "mouse" === e.pointerType || e.pointerType === e.MSPOINTER_TYPE_MOUSE))
                    }

                    function r(e) {
                        if (s(e)) {
                            var t = n(e);
                            u.pageX = t.pageX, u.pageY = t.pageY, p = (new Date).getTime(), null !== f && clearInterval(f)
                        }
                    }

                    function o(e, a, i) {
                        if (!d.contains(e)) return !1;
                        for (var n = e; n && n !== d;) {
                            if (n.classList.contains(w.element.consuming)) return !0;
                            var s = t(n);
                            if ([s.overflow, s.overflowX, s.overflowY].join("").match(/(scroll|auto)/)) {
                                var r = n.scrollHeight - n.clientHeight;
                                if (r > 0 && !(0 === n.scrollTop && i > 0 || n.scrollTop === r && i < 0)) return !0;
                                var o = n.scrollLeft - n.clientWidth;
                                if (o > 0 && !(0 === n.scrollLeft && a < 0 || n.scrollLeft === o && a > 0)) return !0
                            }
                            n = n.parentNode
                        }
                        return !1
                    }

                    function l(e) {
                        if (s(e)) {
                            var t = n(e),
                                r = {
                                    pageX: t.pageX,
                                    pageY: t.pageY
                                },
                                l = r.pageX - u.pageX,
                                c = r.pageY - u.pageY;
                            if (o(e.target, l, c)) return;
                            i(l, c), u = r;
                            var d = (new Date).getTime(),
                                f = d - p;
                            f > 0 && (h.x = l / f, h.y = c / f, p = d), a(l, c) && e.preventDefault()
                        }
                    }

                    function c() {
                        e.settings.swipeEasing && (clearInterval(f), f = setInterval(function () {
                            return e.isInitialized ? void clearInterval(f) : h.x || h.y ? Math.abs(h.x) < .01 && Math.abs(h.y) < .01 ? void clearInterval(f) : (i(30 * h.x, 30 * h.y), h.x *= .8, void(h.y *= .8)) : void clearInterval(f)
                        }, 10))
                    }
                    if (E.supportsTouch || E.supportsIePointer) {
                        var d = e.element,
                            u = {},
                            p = 0,
                            h = {},
                            f = null;
                        E.supportsTouch ? (e.event.bind(d, "touchstart", r), e.event.bind(d, "touchmove", l), e.event.bind(d, "touchend", c)) : E.supportsIePointer && (window.PointerEvent ? (e.event.bind(d, "pointerdown", r), e.event.bind(d, "pointermove", l), e.event.bind(d, "pointerup", c)) : window.MSPointerEvent && (e.event.bind(d, "MSPointerDown", r), e.event.bind(d, "MSPointerMove", l), e.event.bind(d, "MSPointerUp", c)))
                    }
                },
                A = function () {
                    return {
                        handlers: ["click-rail", "drag-thumb", "keyboard", "wheel", "touch"],
                        maxScrollbarLength: null,
                        minScrollbarLength: null,
                        scrollingThreshold: 1e3,
                        scrollXMarginOffset: 0,
                        scrollYMarginOffset: 0,
                        suppressScrollX: !1,
                        suppressScrollY: !1,
                        swipeEasing: !0,
                        useBothWheelAxes: !1,
                        wheelPropagation: !0,
                        wheelSpeed: 1
                    }
                },
                O = {
                    "click-rail": k,
                    "drag-thumb": P,
                    keyboard: D,
                    wheel: $,
                    touch: L
                },
                I = function (e, n) {
                    var s = this;
                    if (void 0 === n && (n = {}), "string" == typeof e && (e = document.querySelector(e)), !e || !e.nodeName) throw new Error("no element is specified to initialize PerfectScrollbar");
                    this.element = e, e.classList.add(w.main), this.settings = A();
                    for (var r in n) s.settings[r] = n[r];
                    this.containerWidth = null, this.containerHeight = null, this.contentWidth = null, this.contentHeight = null;
                    var o = function () {
                            return e.classList.add(w.state.focus)
                        },
                        l = function () {
                            return e.classList.remove(w.state.focus)
                        };
                    this.isRtl = "rtl" === t(e).direction, this.isNegativeScroll = function () {
                        var t = e.scrollLeft,
                            a = null;
                        return e.scrollLeft = -1, a = e.scrollLeft < 0, e.scrollLeft = t, a
                    }(), this.negativeScrollAdjustment = this.isNegativeScroll ? e.scrollWidth - e.clientWidth : 0, this.event = new _, this.ownerDocument = e.ownerDocument || document, this.scrollbarXRail = i(w.element.rail("x")), e.appendChild(this.scrollbarXRail), this.scrollbarX = i(w.element.thumb("x")), this.scrollbarXRail.appendChild(this.scrollbarX), this.scrollbarX.setAttribute("tabindex", 0), this.event.bind(this.scrollbarX, "focus", o), this.event.bind(this.scrollbarX, "blur", l), this.scrollbarXActive = null, this.scrollbarXWidth = null, this.scrollbarXLeft = null;
                    var c = t(this.scrollbarXRail);
                    this.scrollbarXBottom = parseInt(c.bottom, 10), isNaN(this.scrollbarXBottom) ? (this.isScrollbarXUsingBottom = !1, this.scrollbarXTop = p(c.top)) : this.isScrollbarXUsingBottom = !0, this.railBorderXWidth = p(c.borderLeftWidth) + p(c.borderRightWidth), a(this.scrollbarXRail, {
                        display: "block"
                    }), this.railXMarginWidth = p(c.marginLeft) + p(c.marginRight), a(this.scrollbarXRail, {
                        display: ""
                    }), this.railXWidth = null, this.railXRatio = null, this.scrollbarYRail = i(w.element.rail("y")), e.appendChild(this.scrollbarYRail), this.scrollbarY = i(w.element.thumb("y")), this.scrollbarYRail.appendChild(this.scrollbarY), this.scrollbarY.setAttribute("tabindex", 0), this.event.bind(this.scrollbarY, "focus", o), this.event.bind(this.scrollbarY, "blur", l), this.scrollbarYActive = null, this.scrollbarYHeight = null, this.scrollbarYTop = null;
                    var d = t(this.scrollbarYRail);
                    this.scrollbarYRight = parseInt(d.right, 10), isNaN(this.scrollbarYRight) ? (this.isScrollbarYUsingRight = !1, this.scrollbarYLeft = p(d.left)) : this.isScrollbarYUsingRight = !0, this.scrollbarYOuterWidth = this.isRtl ? f(this.scrollbarY) : null, this.railBorderYWidth = p(d.borderTopWidth) + p(d.borderBottomWidth), a(this.scrollbarYRail, {
                        display: "block"
                    }), this.railYMarginHeight = p(d.marginTop) + p(d.marginBottom), a(this.scrollbarYRail, {
                        display: ""
                    }), this.railYHeight = null, this.railYRatio = null, this.reach = {
                        x: e.scrollLeft <= 0 ? "start" : e.scrollLeft >= this.contentWidth - this.containerWidth ? "end" : null,
                        y: e.scrollTop <= 0 ? "start" : e.scrollTop >= this.contentHeight - this.containerHeight ? "end" : null
                    }, this.isAlive = !0, this.settings.handlers.forEach(function (e) {
                        return O[e](s)
                    }), this.lastScrollTop = Math.floor(e.scrollTop), this.lastScrollLeft = e.scrollLeft, this.event.bind(this.element, "scroll", function (e) {
                        return s.onScroll(e)
                    }), M(this)
                };
            I.prototype.update = function () {
                this.isAlive && (this.negativeScrollAdjustment = this.isNegativeScroll ? this.element.scrollWidth - this.element.clientWidth : 0, a(this.scrollbarXRail, {
                    display: "block"
                }), a(this.scrollbarYRail, {
                    display: "block"
                }), this.railXMarginWidth = p(t(this.scrollbarXRail).marginLeft) + p(t(this.scrollbarXRail).marginRight), this.railYMarginHeight = p(t(this.scrollbarYRail).marginTop) + p(t(this.scrollbarYRail).marginBottom), a(this.scrollbarXRail, {
                    display: "none"
                }), a(this.scrollbarYRail, {
                    display: "none"
                }), M(this), x(this, "top", 0, !1, !0), x(this, "left", 0, !1, !0), a(this.scrollbarXRail, {
                    display: ""
                }), a(this.scrollbarYRail, {
                    display: ""
                }))
            }, I.prototype.onScroll = function (e) {
                this.isAlive && (M(this), x(this, "top", this.element.scrollTop - this.lastScrollTop), x(this, "left", this.element.scrollLeft - this.lastScrollLeft), this.lastScrollTop = Math.floor(this.element.scrollTop), this.lastScrollLeft = this.element.scrollLeft)
            }, I.prototype.destroy = function () {
                this.isAlive && (this.event.unbindAll(), s(this.scrollbarX), s(this.scrollbarY), s(this.scrollbarXRail), s(this.scrollbarYRail), this.removePsClasses(), this.element = null, this.scrollbarX = null, this.scrollbarY = null, this.scrollbarXRail = null, this.scrollbarYRail = null, this.isAlive = !1)
            }, I.prototype.removePsClasses = function () {
                this.element.className = this.element.className.split(" ").filter(function (e) {
                    return !e.match(/^ps([-_].+|)$/)
                }).join(" ")
            };
            var H = {
                name: "PerfectScrollbar",
                props: {
                    options: {
                        type: Object,
                        required: !1,
                        default: function () {}
                    },
                    tag: {
                        type: String,
                        required: !1,
                        default: "div"
                    },
                    watchOptions: {
                        type: Boolean,
                        required: !1,
                        default: !1
                    }
                },
                data: function () {
                    return {
                        ps: null
                    }
                },
                watch: {
                    watchOptions: function (e) {
                        !e && this.watcher ? this.watcher() : this.createWatcher()
                    }
                },
                mounted: function () {
                    this.create(), this.watchOptions && this.createWatcher()
                },
                updated: function () {
                    this.update()
                },
                beforeDestroy: function () {
                    this.destroy()
                },
                methods: {
                    create: function () {
                        this.ps && this.$isServer || (this.ps = new I(this.$refs.container, this.options))
                    },
                    createWatcher: function () {
                        var e = this;
                        this.watcher = this.$watch("options", function () {
                            e.destroy(), e.create()
                        }, {
                            deep: !0
                        })
                    },
                    update: function () {
                        this.ps && this.ps.update()
                    },
                    destroy: function () {
                        this.ps && (this.ps.destroy(), this.ps = null)
                    }
                },
                render: function (e) {
                    return e(this.tag, {
                        ref: "container",
                        class: "ps",
                        on: this.$listeners
                    }, this.$slots.default)
                }
            };
            e.install = b, e.PerfectScrollbar = H, e.default = b, Object.defineProperty(e, "__esModule", {
                value: !0
            })
        })
    },
    Eq4J: function (e, t, a) {
        "use strict";
        var i = {
                props: ["visible", "data"],
                data: function () {
                    return {
                        report_type: null,
                        submit_loading: !1,
                        explain: "",
                        options: {
                            duplicate: !0,
                            offensive_or_spam: !0,
                            incorrect_information: !0,
                            no_longer_relevant: !0,
                            spoiler_alert: !0
                        }
                    }
                },
                mounted: function () {
                    switch (this.data.type) {
                        case "post":
                            this.options.duplicate = !1, this.options.no_longer_relevant = !1
                    }
                },
                computed: {
                    isVisible: {
                        get: function () {
                            return this.visible
                        },
                        set: function (e) {
                            this.$emit("update:visible", e)
                        }
                    }
                },
                methods: {
                    submit: function () {
                        var e = this;
                        this.submit_loading = !0;
                        var t = {
                            id: this.data.id,
                            type: this.data.type,
                            url: window.location.pathname,
                            title: $("title").text(),
                            explain: this.explain,
                            reason: this.report_type
                        };
                        this.$http.Post("/v1/users/flags", t, function () {
                            e.submit_loading = !1, e.isVisible = !1, e.$notify({
                                offset: 60,
                                type: "success",
                                message: "Report Submitted Successfully."
                            })
                        }).fail(function () {
                            e.submit_loading = !1
                        })
                    }
                }
            },
            n = function () {
                var e = this,
                    t = e.$createElement,
                    a = e._self._c || t;
                return a("div", {
                    attrs: {
                        id: "mdl-modal"
                    }
                }, [a("el-dialog", {
                    attrs: {
                        visible: e.isVisible,
                        title: "Report an issue",
                        width: "700px",
                        "append-to-body": !0
                    },
                    on: {
                        "update:visible": function (t) {
                            e.isVisible = t
                        }
                    }
                }, [a("div", {
                    staticClass: "form-group"
                }, [a("div", {
                    staticClass: "row"
                }, [e.options.duplicate ? a("div", {
                    staticClass: "col-lg-4"
                }, [a("el-radio", {
                    attrs: {
                        label: "10"
                    },
                    model: {
                        value: e.report_type,
                        callback: function (t) {
                            e.report_type = t
                        },
                        expression: "report_type"
                    }
                }, [e._v("Duplicate")])], 1) : e._e(), e._v(" "), e.options.offensive_or_spam ? a("div", {
                    staticClass: "col-lg-4"
                }, [a("el-radio", {
                    attrs: {
                        label: "1"
                    },
                    model: {
                        value: e.report_type,
                        callback: function (t) {
                            e.report_type = t
                        },
                        expression: "report_type"
                    }
                }, [e._v("Offensive or Spam")])], 1) : e._e(), e._v(" "), e.options.incorrect_information ? a("div", {
                    staticClass: "col-lg-4"
                }, [a("el-radio", {
                    attrs: {
                        label: "3"
                    },
                    model: {
                        value: e.report_type,
                        callback: function (t) {
                            e.report_type = t
                        },
                        expression: "report_type"
                    }
                }, [e._v("Incorrect Information")])], 1) : e._e(), e._v(" "), e.options.no_longer_relevant ? a("div", {
                    staticClass: "col-lg-4"
                }, [a("el-radio", {
                    attrs: {
                        label: "4"
                    },
                    model: {
                        value: e.report_type,
                        callback: function (t) {
                            e.report_type = t
                        },
                        expression: "report_type"
                    }
                }, [e._v("No longer relevant")])], 1) : e._e(), e._v(" "), e.options.spoiler_alert ? a("div", {
                    staticClass: "col-lg-4"
                }, [a("el-radio", {
                    attrs: {
                        label: "5"
                    },
                    model: {
                        value: e.report_type,
                        callback: function (t) {
                            e.report_type = t
                        },
                        expression: "report_type"
                    }
                }, [e._v("Spoiler Alert")])], 1) : e._e()])]), e._v(" "), a("div", {
                    staticClass: "form-group"
                }, [a("label", {
                    attrs: {
                        for: "form-label"
                    }
                }, [a("b", [e._v("Explanation*:")])]), e._v(" "), a("el-input", {
                    attrs: {
                        type: "textarea",
                        autosize: {
                            minRows: 5
                        }
                    },
                    model: {
                        value: e.explain,
                        callback: function (t) {
                            e.explain = t
                        },
                        expression: "explain"
                    }
                })], 1), e._v(" "), a("div", {
                    staticClass: "m-t clearfix"
                }, [a("el-button", {
                    staticClass: "btn pull-right",
                    attrs: {
                        loading: e.submit_loading,
                        type: "primary"
                    },
                    on: {
                        click: e.submit
                    }
                }, [a("span", [e._v("Submit")])])], 1)])], 1)
            },
            s = [],
            r = {
                render: n,
                staticRenderFns: s
            },
            o = r,
            l = a("VU/8"),
            c = l(i, o, !1, null, null, null);
        t.a = c.exports
    },
    JzXo: function (e, t, a) {
        "use strict";
        var i = a("7+uW"),
            n = a("HJMx"),
            s = a.n(n),
            r = a("qubY"),
            o = a.n(r),
            l = a("vqwl"),
            c = a.n(l),
            d = a("Mezo"),
            u = a.n(d),
            p = a("e0Bm"),
            h = a.n(p),
            f = a("wxbk"),
            m = a.n(f),
            v = a("STLj"),
            g = a.n(v),
            b = a("YJmC"),
            y = a.n(b),
            w = a("0kY3"),
            C = a.n(w),
            S = a("o6kb"),
            T = a.n(S),
            _ = a("+nRk"),
            x = a.n(_),
            E = a("BrEC"),
            M = a.n(E),
            k = a("nu7/"),
            P = a.n(k),
            D = a("wOhx"),
            $ = a.n(D),
            L = a("mtrD"),
            A = a.n(L),
            O = a("zAL+"),
            I = a.n(O),
            H = a("EKTV"),
            R = a.n(H),
            z = a("s3ue"),
            F = a.n(z),
            N = a("+TD8"),
            j = a.n(N),
            V = a("orbS"),
            K = a.n(V),
            W = a("yg6k"),
            Y = a.n(W),
            B = a("SExR"),
            X = a.n(B),
            G = a("exT9"),
            q = a.n(G),
            U = a("ACGT"),
            J = a.n(U),
            Z = a("D8db"),
            Q = a.n(Z),
            ee = a("NoPp"),
            te = a.n(ee),
            ae = a("LaeV"),
            ie = a.n(ae),
            ne = a("8gwe"),
            se = a("6oiW"),
            re = a.n(se),
            oe = a("SXzR"),
            le = a.n(oe),
            ce = a("RDoK"),
            de = a.n(ce),
            ue = a("GegP"),
            pe = a.n(ue),
            he = a("1ZIF"),
            fe = a.n(he),
            me = a("raHz"),
            ve = a.n(me),
            ge = a("9Y4M"),
            be = a.n(ge),
            ye = a("g2bL"),
            we = a.n(ye),
            Ce = a("tLa+"),
            Se = a.n(Ce),
            Te = a("bFD8"),
            _e = a.n(Te),
            xe = a("4ZDJ"),
            Ee = a.n(xe),
            Me = a("PJh5"),
            ke = a.n(Me),
            Pe = a("QSLu"),
            De = (a.n(Pe), a("LoAJ")),
            $e = (a.n(De), a("lpbP")),
            Le = (a.n($e), a("lDaQ")),
            Ae = (a.n(Le), a("wTjc")),
            Oe = (a.n(Ae), a("3mHh")),
            Ie = (a.n(Oe), a("0Ofu")),
            He = (a.n(Ie), a("6zN3")),
            Re = (a.n(He), a("iTew")),
            ze = (a.n(Re), a("0GAR")),
            Fe = (a.n(ze), a("oaLa")),
            Ne = (a.n(Fe), a("TaQe")),
            je = (a.n(Ne), a("6at4")),
            Ve = (a.n(je), a("uBa6")),
            Ke = (a.n(Ve), a("1PlY")),
            We = (a.n(Ke), a("Ln+g")),
            Ye = (a.n(We), a("Y105")),
            Be = (a.n(Ye), a("eGe6")),
            Xe = (a.n(Be), a("trjM")),
            Ge = (a.n(Xe), a("plBU")),
            qe = (a.n(Ge), a("r0dJ")),
            Ue = (a.n(qe), a("MyvF")),
            Je = (a.n(Ue), a("F57M")),
            Ze = (a.n(Je), a("XU7M")),
            Qe = (a.n(Ze), a("LL0z")),
            et = (a.n(Qe), a("FMii")),
            tt = (a.n(et), a("HA7m")),
            at = (a.n(tt), a("CEdZ")),
            it = (a.n(at), a("RPLQ")),
            nt = (a.n(it), a("SIQw")),
            st = (a.n(nt), a("clND")),
            rt = (a.n(st), a("4ov9")),
            ot = (a.n(rt), a("eGX4")),
            lt = (a.n(ot), a("nJi5")),
            ct = (a.n(lt), a("PtGu")),
            dt = (a.n(ct), a("Tfx5")),
            ut = (a.n(dt), a("31nb")),
            pt = (a.n(ut), a("infu")),
            ht = (a.n(pt), a("m7Ae")),
            ft = (a.n(ht), a("Jasp")),
            mt = (a.n(ft), a("D52Z")),
            vt = (a.n(mt), a("fISv")),
            gt = (a.n(vt), a("EA7H"));
        i.default.component("input-tag", gt.a), i.default.use(o.a), i.default.use(c.a), i.default.use(u.a), i.default.use(h.a), i.default.use(g.a), i.default.use(y.a), i.default.use(m.a), i.default.use(s.a), i.default.use(C.a), i.default.use(T.a), i.default.use(x.a), i.default.use(M.a), i.default.use(P.a), i.default.use($.a), i.default.use(ne.a), i.default.use(A.a), i.default.use(I.a), i.default.use(R.a), i.default.use(X.a), i.default.use(q.a), i.default.use(J.a), i.default.use(Q.a), i.default.use(K.a), i.default.use(te.a), i.default.use(ie.a), i.default.use(F.a), i.default.use(re.a), i.default.use(le.a), i.default.use(de.a), i.default.use(pe.a), i.default.use(fe.a), i.default.use(ve.a), i.default.use(be.a), i.default.use(Se.a), i.default.use(_e.a), i.default.use(Ee.a), i.default.use(we.a), i.default.prototype.$msgbox = j.a, i.default.prototype.$alert = j.a.alert, i.default.prototype.$confirm = j.a.confirm, i.default.prototype.$prompt = j.a.prompt, i.default.prototype.$notify = Y.a, ke.a.locale(document.documentElement.lang), window.moment = ke.a, i.default.prototype.$moment = ke.a
    },
    "L/hj": function (e, t, a) {
        "use strict";

        function i(e) {
            var t = "0123456789abcdef",
                a = parseInt(e);
            return 0 == a || isNaN(e) ? "00" : (a = Math.round(Math.min(Math.max(0, a), 255)), t.charAt((a - a % 16) / 16) + t.charAt(a % 16))
        }

        function n(e) {
            return i(e[0]) + i(e[1]) + i(e[2])
        }

        function s(e) {
            return "#" == e.charAt(0) ? e.substring(1, 7) : e
        }

        function r(e) {
            var t = [];
            return t[0] = parseInt(s(e).substring(0, 2), 16), t[1] = parseInt(s(e).substring(2, 4), 16), t[2] = parseInt(s(e).substring(4, 6), 16), t
        }

        function o(e, t, a) {
            for (var i = r(e), s = r(t), o = a, l = 0, c = [], d = 0; d < o; d++) {
                var u = [];
                l += 1 / o, u[0] = i[0] * l + (1 - l) * s[0], u[1] = i[1] * l + (1 - l) * s[1], u[2] = i[2] * l + (1 - l) * s[2], c.push(n(u))
            }
            return c
        }

        function l(e) {
            if (Array.isArray(e)) return e.map(l);
            if (e && "object" === (void 0 === e ? "undefined" : h()(e))) {
                for (var t = {}, a = u()(e), i = 0, n = a.length; i < n; i++) {
                    var s = a[i];
                    t[s] = l(e[s])
                }
                return t
            }
            return e
        }

        function c(e) {
            return e.toString().toLowerCase().replace(/\s+/g, "-").replace(/[^\w\-]+/g, "").replace(/\-\-+/g, "-").replace(/^-+/, "").replace(/-+$/, "")
        }
        var d = a("fZjL"),
            u = a.n(d),
            p = a("pFYg"),
            h = a.n(p),
            f = {
                _keyStr: "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789+/=",
                encode: function (e) {
                    var t, a, i, n, s, r, o, l = "",
                        c = 0;
                    for (e = f._utf8_encode(e); c < e.length;) t = e.charCodeAt(c++), a = e.charCodeAt(c++), i = e.charCodeAt(c++), n = t >> 2, s = (3 & t) << 4 | a >> 4, r = (15 & a) << 2 | i >> 6, o = 63 & i, isNaN(a) ? r = o = 64 : isNaN(i) && (o = 64), l = l + this._keyStr.charAt(n) + this._keyStr.charAt(s) + this._keyStr.charAt(r) + this._keyStr.charAt(o);
                    return l
                },
                decode: function (e) {
                    var t, a, i, n, s, r, o, l = "",
                        c = 0;
                    for (e = e.replace(/[^A-Za-z0-9+\/=]/g, ""); c < e.length;) n = this._keyStr.indexOf(e.charAt(c++)), s = this._keyStr.indexOf(e.charAt(c++)), r = this._keyStr.indexOf(e.charAt(c++)), o = this._keyStr.indexOf(e.charAt(c++)), t = n << 2 | s >> 4, a = (15 & s) << 4 | r >> 2, i = (3 & r) << 6 | o, l += String.fromCharCode(t), 64 != r && (l += String.fromCharCode(a)), 64 != o && (l += String.fromCharCode(i));
                    return l = f._utf8_decode(l)
                },
                _utf8_encode: function (e) {
                    e = e.replace(/\r\n/g, "\n");
                    for (var t = "", a = 0; a < e.length; a++) {
                        var i = e.charCodeAt(a);
                        i < 128 ? t += String.fromCharCode(i) : i > 127 && i < 2048 ? (t += String.fromCharCode(i >> 6 | 192), t += String.fromCharCode(63 & i | 128)) : (t += String.fromCharCode(i >> 12 | 224), t += String.fromCharCode(i >> 6 & 63 | 128), t += String.fromCharCode(63 & i | 128))
                    }
                    return t
                },
                _utf8_decode: function (e) {
                    for (var t, a = "", i = 0, n = 0; i < e.length;) t = e.charCodeAt(i), t < 128 ? (a += String.fromCharCode(t), i++) : t > 191 && t < 224 ? (n = e.charCodeAt(i + 1), a += String.fromCharCode((31 & t) << 6 | 63 & n), i += 2) : (n = e.charCodeAt(i + 1), c3 = e.charCodeAt(i + 2), a += String.fromCharCode((15 & t) << 12 | (63 & n) << 6 | 63 & c3), i += 3);
                    return a
                }
            };
        t.a = {
            Base64: f,
            slugify: c,
            deepClone: l,
            generateColor: o,
            getUrlVars: function () {
                for (var e, t = {}, a = window.location.href.slice(window.location.href.indexOf("?") + 1).split("&"), i = 0; i < a.length; i++) e = a[i].split("="), t[e[0]] = e[1];
                return t
            },
            getQueryVariable: function (e) {
                for (var t = window.location.search.substring(1), a = t.split("&"), i = 0; i < a.length; i++) {
                    var n = a[i].split("=");
                    if (n[0] == e) return n[1]
                }
                return !1
            },
            br2nl: function (e) {
                return e.replace(/([^>\r\n]?)(\r\n|\n\r|\r|\n)/g, "").replace(/<br\s*\/?>/gm, "\n")
            },
            nl2br: function (e) {
                return (e + "").replace(/([^>\r\n]?)(\r\n|\n\r|\r|\n)/g, "$1<br>$2")
            },
            varsReplace: function (e, t, a) {
                var i = e;
                return $.each(t, function (e, t) {
                    i = i.replace(new RegExp("\\{" + e + "\\}", "g"), t)
                }), a && (i = $(i)), i
            },
            isMobileDevice: function () {
                return window.isMobile
            },
            popupCenter: function (e, t, a, i) {
                var n = void 0 !== window.screenLeft ? window.screenLeft : screen.left,
                    s = void 0 !== window.screenTop ? window.screenTop : screen.top,
                    r = window.innerWidth ? window.innerWidth : document.documentElement.clientWidth ? document.documentElement.clientWidth : screen.width,
                    o = window.innerHeight ? window.innerHeight : document.documentElement.clientHeight ? document.documentElement.clientHeight : screen.height,
                    l = r / 2 - a / 2 + n,
                    c = o / 3 - i / 3 + s,
                    d = window.open(e, t, "scrollbars=yes, width=" + a + ", height=" + i + ", top=" + c + ", left=" + l);
                window.focus && d.focus()
            }
        }
    },
    LGuY: function (e, t) {
        e.exports = function () {
            throw new Error("define cannot be used indirect")
        }
    },
    NHnr: function (e, t, a) {
        "use strict";

        function i(e) {
            for (var t in e) {
                var a = void 0;
                switch (t) {
                    case "e_reviews":
                    case "reviews":
                        l(e[t]);
                        break;
                    case "mylist":
                        s(e[t]);
                        break;
                    case "photo":
                        a = "photos";
                    case "article":
                    case "clist":
                    case "people":
                        o(e[t], void 0 !== a ? a : t);
                        break;
                    case "mlikes":
                        r(e[t])
                }
            }
        }

        function n(e) {
            return void 0 !== Ne[e] ? Ne[e] : "Error Status"
        }

        function s(e) {
            for (var t = 0; t < e.length; t++) {
                var a = $("#mdl-" + e[t].rid);
                if (a.length <= 0 && (a = $(".mdl-" + e[t].rid)), a.find(".btn-manage-list").each(function () {
                        var a = $(this);
                        a.hasClass("simple") ? a.find("span").html('<i class="fa fa-pencil-alt"></i>') : a.text(n(e[t].status))
                    }), e[t].rating) {
                    var i = $("#your-rating-" + e[t].rid);
                    i.length && (i.find(".fill").width(10 * e[t].rating + "%"), i.find(".score > b").text(e[t].rating))
                }
            }
        }

        function r(e) {
            for (var t = {}, a = 0; a < e.length; a++) void 0 === t[e[a].type] && (t[e[a].type] = []), t[e[a].type].push(e[a]);
            this.HandleUserStatsData(t)
        }

        function o(e, t) {
            for (var a = 0; a < e.length; a++) {
                var i = $("[data-stats=" + t + "\\:" + e[a].id + "]");
                e[a].liked && i.addClass("active"), i.find(".like-cntb,.like-cntb-nohl").text(e[a].likes)
            }
        }

        function l(e) {
            for (var t = 0; t < e.length; t++) {
                var a = e[t].voted ? "voted-true" : "voted-false";
                $("#review-" + e[t].id).addClass(a)
            }
        }

        function c(e) {
            f.a.Post("/v1/trailers/" + e + "/broken")
        }

        function d() {
            u.default.prototype.$notify({
                offset: 60,
                duration: 0,
                title: "Please verify your email address",
                dangerouslyUseHTMLString: !0,
                message: 'In order to activate your account we need to verify your email. Please check your inbox and verify your email address. <a class="btn-resend-verifye _600" href="#">Re-send verification email</a>'
            }), $(document).on("click", ".btn-resend-verifye", function (e) {
                e.preventDefault();
                var t = $(this);
                t.hasClass("sent") || (t.addClass("sent"), f.a.Post("/v1/account/resend_verify_email", {}, function (e) {
                    t.removeClass("sent"), u.default.prototype.$notify({
                        offset: 60,
                        type: "success",
                        title: "Success",
                        message: "Email verification sent!"
                    })
                }))
            })
        }
        Object.defineProperty(t, "__esModule", {
            value: !0
        });
        var u = a("7+uW"),
            p = a("d0Uw"),
            h = a("L/hj"),
            f = (a("JzXo"), a("qmEX")),
            m = a("Usg1"),
            v = a("TaMM"),
            g = a("tTep"),
            b = {
                props: {
                    rid: Number,
                    visible: Boolean,
                    appendToBody: Boolean,
                    isMobilePhone: !1
                },
                components: {
                    Playlist: g.a
                },
                data: function () {
                    return {
                        title: "",
                        width: "1034px",
                        fullscreen: !1
                    }
                },
                computed: {
                    top: function () {
                        return this.isMobilePhone ? "56px" : $(window).width() <= 834 ? "56px" : "15vh"
                    },
                    isVisible: {
                        get: function () {
                            return this.visible
                        },
                        set: function (e) {
                            this.$emit("update:visible", e)
                        }
                    }
                },
                methods: {
                    update: function (e) {
                        this.title = e.title
                    }
                }
            },
            y = function () {
                var e = this,
                    t = e.$createElement,
                    a = e._self._c || t;
                return a("div", {
                    attrs: {
                        id: "mdl-trailer-modal"
                    }
                }, [a("el-dialog", {
                    attrs: {
                        visible: e.isVisible,
                        title: e.title,
                        "lock-scroll": !0,
                        top: e.top,
                        width: e.width,
                        fullscreen: e.fullscreen,
                        "append-to-body": e.appendToBody
                    },
                    on: {
                        "update:visible": function (t) {
                            e.isVisible = t
                        }
                    }
                }, [e.isVisible ? a("playlist", {
                    attrs: {
                        rid: e.rid
                    },
                    on: {
                        "now-playing": e.update
                    }
                }) : e._e()], 1)], 1)
            },
            w = [],
            C = {
                render: y,
                staticRenderFns: w
            },
            S = C,
            T = a("VU/8"),
            _ = T(b, S, !1, null, null, null),
            x = _.exports,
            E = a("uW0T"),
            M = {
                props: ["items"],
                data: function () {
                    return {
                        loading: !1,
                        clear_loading: !1,
                        notifications: []
                    }
                },
                mounted: function () {
                    this.notifications = this.items.slice()
                },
                methods: {
                    clearAll: function (e) {
                        var t = this;
                        e.preventDefault(), e.stopPropagation(), this.clear_loading = !0, this.$http.Post("/v1/users/notifications/clear", {}, function () {
                            t.clear_loading = !1, t.notifications = [], $(".nav-notifications .notif-count").remove()
                        })
                    }
                }
            },
            k = function () {
                var e = this,
                    t = e.$createElement,
                    a = e._self._c || t;
                return a("div", [a("el-button", {
                    staticClass: "btn btn-default btn-clear",
                    attrs: {
                        disabled: !e.items.length,
                        loading: e.clear_loading,
                        icon: "fa fa-check"
                    },
                    on: {
                        click: e.clearAll
                    }
                }, [e._v("Mark these as read")]), e._v(" "), a("a", {
                    staticClass: "menu-header-link",
                    attrs: {
                        href: "/notifications"
                    }
                }, [a("strong", [e._v("See All Notifications")]), e.notifications.length ? a("span", {
                    staticClass: "unread-count"
                }, [e._v("(" + e._s(e.notifications.length) + ")")]) : e._e()]), e._v(" "), a("ul", {
                    staticClass: "list-group"
                }, e._l(e.notifications, function (t, i) {
                    return a("li", {
                        key: i,
                        class: ["list-group-item unseen", {
                            system: "SYSTEM" == t.username
                        }]
                    }, [a("a", {
                        staticClass: "overlay",
                        attrs: {
                            href: t.url,
                            "data-notif": t.id
                        }
                    }), e._v(" "), a("span", {
                        staticClass: "avatar"
                    }, [a("img", {
                        staticClass: "w-40 img-circle",
                        attrs: {
                            src: t.avatar_url
                        }
                    })]), e._v(" "), a("span", {
                        staticClass: "message"
                    }, ["SYSTEM" != t.username ? a("a", {
                        attrs: {
                            href: "/profile/" + t.username
                        }
                    }, [e._v(e._s(t.display_name))]) : e._e(), e._v(" "), a("span", {
                        domProps: {
                            innerHTML: e._s(t.message)
                        }
                    }), a("br"), a("small", {
                        staticClass: "timeago"
                    }, [e._v(e._s(e._f("time_ago")(t.created_at)))])])])
                })), e._v(" "), e.notifications.length ? e._e() : a("div", {
                    directives: [{
                        name: "loading",
                        rawName: "v-loading",
                        value: e.loading,
                        expression: "loading"
                    }],
                    staticClass: "empty-board"
                }, [a("h2", [e._v("No Unread Notifications")]), e._v(" "), a("a", {
                    staticClass: "btn primary",
                    attrs: {
                        href: "/notifications"
                    }
                }, [e._v("See Past Notifications")])])], 1)
            },
            P = [],
            D = {
                render: k,
                staticRenderFns: P
            },
            L = D,
            A = a("VU/8"),
            O = A(M, L, !1, null, null, null),
            I = O.exports,
            H = {
                props: ["item", "show_cover"],
                data: function () {
                    return {}
                },
                computed: {
                    rating_value: function () {
                        var e = parseFloat(this.item.rating);
                        return isNaN(e) || e <= 0 ? "" : e >= 10 ? 10 : e.toFixed(1)
                    },
                    rating_width: function () {
                        var e = parseFloat(this.item.rating);
                        return isNaN(e) && (e = 0), 10 * parseFloat(e)
                    },
                    show_cover_class: function () {
                        return this.show_cover ? "col-lg-9 col-xs-9" : "col-lg-12 col-xs-12"
                    }
                }
            },
            R = function () {
                var e = this,
                    t = e.$createElement,
                    a = e._self._c || t;
                return a("div", [a("div", {
                    staticClass: "film-popover"
                }, [a("div", {
                    staticClass: "header"
                }, [a("h2", [a("a", {
                    attrs: {
                        href: e.item.url
                    }
                }, [e._v(e._s(e.item.title))]), e._v(" "), a("span", [e._v(e._s(e.item.year))])]), e._v(" "), a("p", {
                    staticClass: "original-title"
                }, [e._v(e._s(e.item.original_title) + " (" + e._s(e.$t(e.item.film_type)) + ")")])]), e._v(" "), a("div", {
                    staticClass: "row"
                }, [e.show_cover ? a("div", {
                    staticClass: "col-lg-3 col-xs-3"
                }, [a("img", {
                    staticClass: "img-responsive",
                    attrs: {
                        src: e.item.thumbnail
                    }
                }), e._v(" "), e._m(0)]) : e._e(), e._v(" "), a("div", {
                    class: e.show_cover_class
                }, [a("div", {
                    staticClass: "stats"
                }, [a("div", {
                    staticClass: "ranking"
                }, [e._v("#" + e._s(e.item.rank) + " Highest Rated")]), e._v(" "), a("span", {
                    staticClass: "rating"
                }, [a("span", {
                    staticClass: "fill",
                    style: {
                        width: e.rating_width + "%"
                    }
                })]), a("span", {
                    staticClass: "score"
                }, [e._v(e._s(e.rating_value))])]), e._v(" "), a("p", {
                    staticClass: "synopsis"
                }, [e._v(e._s(e.item.synopsis))]), e._v(" "), a("p", {
                    staticClass: "genre-tags"
                }, e._l(e.item.genres, function (t) {
                    return a("a", {
                        key: t.id,
                        attrs: {
                            href: "/search?adv=titles&ge=" + t.id + "&so=top"
                        }
                    }, [e._v(e._s(e.$t(t.name)))])
                }))])])])])
            },
            F = [function () {
                var e = this,
                    t = e.$createElement,
                    a = e._self._c || t;
                return a("button", {
                    staticClass: "btn-trailer btn-sm btn-block btn white m-t",
                    attrs: {
                        "data-id": "10540"
                    }
                }, [a("i", {
                    staticClass: "fa fa-play-circle"
                }), e._v(" Watch Trailer")])
            }],
            N = {
                render: R,
                staticRenderFns: F
            },
            j = N,
            V = a("VU/8"),
            K = V(H, j, !1, null, null, null),
            W = K.exports,
            Y = {
                data: function () {
                    return {
                        loading: !1,
                        languages: [{
                            code: "en-US",
                            group: "en",
                            name: "English (US)"
                        }, {
                            code: "es",
                            group: "es",
                            name: "Español"
                        }, {
                            code: "pt",
                            group: "pt",
                            name: "Português (Brasil)"
                        }, {
                            code: "it",
                            group: "it",
                            name: "Italiano"
                        }],
                        language: document.documentElement.lang
                    }
                },
                computed: {
                    languages_map: function () {
                        return this.languages.reduce(function (e, t) {
                            return e[t.code] = t, e
                        }, {})
                    },
                    language_group: function () {
                        return this.languages_map.hasOwnProperty(this.language) ? this.languages_map[this.language].group : "??"
                    }
                },
                methods: {
                    switchLanguage: function (e) {
                        this.loading = !0, this.language = e, this.$http.Post(window.site.url + "/i18n-switcher", {
                            lang: e
                        }, function (t) {
                            for (var a = {}, i = window.location.search.substring(1), n = i.split("&"), s = 0; s < n.length; s++) {
                                var r = n[s].split("=");
                                "" != r[0] && "" != r[1] && (a[r[0]] = r[1])
                            }
                            a.lang = e, window.location.href = location.pathname + "?" + $.param(a)
                        })
                    }
                }
            },
            B = function () {
                var e = this,
                    t = e.$createElement,
                    a = e._self._c || t;
                return a("div", {
                    attrs: {
                        id: "mdl-lang"
                    }
                }, [a("el-dropdown", {
                    attrs: {
                        trigger: "click",
                        placement: "bottom"
                    },
                    on: {
                        command: e.switchLanguage
                    }
                }, [e.loading ? e._e() : a("span", [e._v(e._s(e.language_group))]), e._v(" "), e.loading ? a("span", [a("i", {
                    staticClass: "fal fa-spinner fa-spin"
                })]) : e._e(), e._v(" "), a("el-dropdown-menu", {
                    staticClass: "mdl-lang-dropdown",
                    attrs: {
                        slot: "dropdown"
                    },
                    slot: "dropdown"
                }, e._l(e.languages, function (t) {
                    return a("el-dropdown-item", {
                        key: t.code,
                        class: {
                            active: e.language == t.code
                        },
                        attrs: {
                            command: t.code
                        }
                    }, [e._v(e._s(t.name))])
                }))], 1)], 1)
            },
            X = [],
            G = {
                render: B,
                staticRenderFns: X
            },
            q = G,
            U = a("VU/8"),
            J = U(Y, q, !1, null, null, null),
            Z = J.exports,
            Q = a("qSHN"),
            ee = (a("7ZsJ"), a("EPAd")),
            te = a.n(ee),
            ae = (a("4U5d"), a("4Qrm")),
            ie = a.n(ae),
            ne = a("vQJi"),
            se = a.n(ne),
            re = a("a9wy"),
            oe = a.n(re),
            le = (a("Lokx"), a("gsqX")),
            ce = a.n(le),
            de = a("wvfG"),
            ue = a.n(de),
            pe = a("9fd9"),
            he = a.n(pe),
            fe = a("Eq4J"),
            me = {
                props: ["visible", "data"],
                data: function () {
                    return {
                        loading: !0,
                        submit_loading: !1,
                        form: {
                            title: "",
                            description: ""
                        }
                    }
                },
                mounted: function () {
                    this.fetchData()
                },
                computed: {
                    isVisible: {
                        get: function () {
                            return this.visible
                        },
                        set: function (e) {
                            this.$emit("update:visible", e)
                        }
                    }
                },
                methods: {
                    fetchData: function () {
                        var e = this;
                        this.$http.Get("/v1/photos/" + this.data.id, function (t) {
                            e.loading = !1, e.form = t
                        })
                    },
                    submit: function () {
                        var e = this;
                        this.submit_loading = !0, this.$http.Patch("/v1/photos/" + this.data.id, this.form, function () {
                            e.submit_loading = !1, e.loading = !0, window.location.reload()
                        }).fail(function () {
                            e.submit_loading = !1
                        })
                    }
                }
            },
            ve = function () {
                var e = this,
                    t = e.$createElement,
                    a = e._self._c || t;
                return a("div", [a("el-dialog", {
                    attrs: {
                        visible: e.isVisible,
                        title: "Edit Photo",
                        width: "700px",
                        "append-to-body": !0
                    },
                    on: {
                        "update:visible": function (t) {
                            e.isVisible = t
                        }
                    }
                }, [a("div", {
                    directives: [{
                        name: "loading",
                        rawName: "v-loading",
                        value: e.loading,
                        expression: "loading"
                    }]
                }, [a("div", {
                    staticClass: "form-group"
                }, [a("label", {
                    attrs: {
                        for: "form-label"
                    }
                }, [a("b", [e._v("Title:")])]), e._v(" "), a("el-input", {
                    model: {
                        value: e.form.title,
                        callback: function (t) {
                            e.$set(e.form, "title", t)
                        },
                        expression: "form.title"
                    }
                })], 1), e._v(" "), a("div", {
                    staticClass: "form-group"
                }, [a("label", {
                    attrs: {
                        for: "form-label"
                    }
                }, [a("b", [e._v("Description:")])]), e._v(" "), a("el-input", {
                    attrs: {
                        type: "textarea",
                        autosize: {
                            minRows: 5
                        }
                    },
                    model: {
                        value: e.form.description,
                        callback: function (t) {
                            e.$set(e.form, "description", t)
                        },
                        expression: "form.description"
                    }
                })], 1), e._v(" "), a("div", {
                    staticClass: "m-t clearfix"
                }, [a("el-button", {
                    staticClass: "btn pull-right",
                    attrs: {
                        loading: e.submit_loading,
                        type: "primary"
                    },
                    on: {
                        click: e.submit
                    }
                }, [a("span", [e._v("Save Changes")])])], 1)])])], 1)
            },
            ge = [],
            be = {
                render: ve,
                staticRenderFns: ge
            },
            ye = be,
            we = a("VU/8"),
            Ce = we(me, ye, !1, null, null, null),
            Se = Ce.exports,
            Te = a("Eg0l"),
            _e = {
                components: {
                    Share: Te.a
                },
                props: ["visible", "data"],
                data: function () {
                    return {}
                },
                mounted: function () {},
                computed: {
                    isVisible: {
                        get: function () {
                            return this.visible
                        },
                        set: function (e) {
                            this.$emit("update:visible", e)
                        }
                    }
                }
            },
            xe = function () {
                var e = this,
                    t = e.$createElement,
                    a = e._self._c || t;
                return a("el-dialog", {
                    attrs: {
                        visible: e.isVisible,
                        title: "Share",
                        width: "500px",
                        "append-to-body": !0
                    },
                    on: {
                        "update:visible": function (t) {
                            e.isVisible = t
                        }
                    }
                }, [a("share", {
                    attrs: {
                        url: e.data.url
                    }
                })], 1)
            },
            Ee = [],
            Me = {
                render: xe,
                staticRenderFns: Ee
            },
            ke = Me,
            Pe = a("VU/8"),
            De = Pe(_e, ke, !1, null, null, null),
            $e = De.exports,
            Le = (a("R5rG"), {
                props: ["data", "visible"],
                data: function () {
                    return {
                        loading: !0,
                        submit_loading: !1,
                        post: {},
                        config: {
                            key: "iF2E2H2C5zA3B2D2G3F4E1C1A10C1D6mF-11jpgwzyushhC2A-7pm==",
                            heightMin: 200,
                            theme: "mdl",
                            toolbarInline: !1,
                            toolbarSticky: !0,
                            imageResizeWithPercent: !0,
                            toolbarStickyOffset: 56,
                            imageUpload: !1,
                            charCounterCount: !1,
                            imagePaste: !1,
                            toolbarButtons: ["bold", "italic", "underline", "strikeThrough", "color", "paragraphFormat", "align", "formatOL", "formatUL", "insertHR", "insertTable", "-", "indent", "outdent", "insertImage", "insertLink", "undo", "redo", "cvideoBtn", "spoiler"],
                            pluginsEnabled: ["image", "cvideo", "link", "table", "cquote", "url", "paragraphFormat", "quote", "link", "word_paste", "lists", "line_breaker", "help", "draggable", "colors", "char_counter", "align", "spoiler"],
                            quickInsertButtons: ["table", "ul", "ol", "hr"],
                            paragraphFormat: {
                                N: "Normal",
                                H2: "Heading 2",
                                H3: "Heading 3",
                                PRE: "Code"
                            },
                            events: {
                                "froalaEditor.html.set": function (e, t) {
                                    t.$el.find(".yt-container").ytLazyLoad(), t.$el.find(".quote").attr("contenteditable", !1), t.$el.find(".yt-container").attr("contenteditable", !1).html("")
                                },
                                "froalaEditor.destroy": function (e, t) {
                                    z
                                },
                                "froalaEditor.initialized": function (e, t) {
                                    $(".el-dialog__wrapper").length && $(".el-dialog__wrapper").scroll(function () {
                                        $(document).trigger("scroll")
                                    })
                                }
                            }
                        }
                    }
                },
                mounted: function () {
                    this.fetchData()
                },
                computed: {
                    is_visible: {
                        set: function (e) {
                            this.$emit("update:visible", e)
                        },
                        get: function () {
                            return this.visible
                        }
                    },
                    url: function () {
                        var e = "/v1/forums/posts/" + this.data.id;
                        return "topic" == this.data.type ? "/v1/forums/topics/" + this.data.id : e
                    }
                },
                methods: {
                    fetchData: function () {
                        var e = this;
                        this.loading = !0, this.$http.Get(this.url + "/edit", function (t) {
                            e.loading = !1, e.post = t
                        }).fail(function () {
                            e.is_visible = !1
                        })
                    },
                    submit: function () {
                        var e = this;
                        this.submit_loading = !0;
                        var t = {
                            title: this.post.topic_title,
                            text: this.post.message
                        };
                        this.$http.Patch(this.url, t, function (t) {
                            e.is_visible = !1, $("#post-" + e.post.id).find(".post__message").html(t.message)
                        }).fail(function () {
                            e.submit_loading = !1
                        })
                    }
                }
            }),
            Ae = function () {
                var e = this,
                    t = e.$createElement,
                    a = e._self._c || t;
                return a("el-dialog", {
                    attrs: {
                        visible: e.is_visible,
                        title: "Edit Post",
                        width: "640px",
                        "append-to-body": !0,
                        "close-on-click-modal": !1
                    },
                    on: {
                        "update:visible": function (t) {
                            e.is_visible = t
                        }
                    }
                }, [e.post.first_post ? a("div", {
                    staticClass: "form-group"
                }, [a("el-input", {
                    attrs: {
                        placeholder: "Subject"
                    },
                    model: {
                        value: e.post.topic_title,
                        callback: function (t) {
                            e.$set(e.post, "topic_title", t)
                        },
                        expression: "post.topic_title"
                    }
                })], 1) : e._e(), e._v(" "), a("div", {
                    staticClass: "form-group"
                }, [a("froala", {
                    attrs: {
                        tag: "textarea",
                        config: e.config,
                        placeholder: "Type something"
                    },
                    model: {
                        value: e.post.message,
                        callback: function (t) {
                            e.$set(e.post, "message", t)
                        },
                        expression: "post.message"
                    }
                })], 1), e._v(" "), a("div", {
                    staticClass: "dialog-footer",
                    attrs: {
                        slot: "footer"
                    },
                    slot: "footer"
                }, [a("el-button", {
                    attrs: {
                        disabled: e.submit_loading
                    },
                    on: {
                        click: function (t) {
                            e.is_visible = !1
                        }
                    }
                }, [e._v("Cancel")]), e._v(" "), a("el-button", {
                    attrs: {
                        type: "primary",
                        loading: e.submit_loading
                    },
                    on: {
                        click: e.submit
                    }
                }, [e._v("Save")])], 1)])
            },
            Oe = [],
            Ie = {
                render: Ae,
                staticRenderFns: Oe
            },
            He = Ie,
            Re = a("VU/8"),
            ze = Re(Le, He, !1, null, null, null),
            Fe = ze.exports;
        u.default.use(te.a), u.default.use(he.a), window.bootbox = ie.a, window.toastr = se.a, window.Swiper = ce.a, u.default.use(ue.a), u.default.component("edit-post-dialog", Fe), u.default.component("report-dialog", fe.a), u.default.component("edit-photo-dialog", Se), u.default.component("share-dialog", $e), u.default.component("rating", v.a), u.default.prototype.$http = f.a, u.default.prototype.$bus = m.a, u.default.filter("time_ago", function (e) {
            return moment(e).fromNow()
        }), $.fn.loading = function (e) {
            var t = $(this);
            if (1 == e) {
                var a = t.outerWidth(),
                    i = t[0].getBoundingClientRect().height;
                t.hasClass("input-group-addon") || t.css({
                    width: a,
                    height: i
                }), t.addClass("loading").prop("disabled", !0), t.children("span").length ? t.children("span:first-child").after('<i class="fal fa-spinner fa-spin"></i>') : t.append('<i class="fal fa-spinner fa-spin"></i>'), t.find("input").prop("disabled", !0)
            } else t.removeClass("loading").prop("disabled", !1).css({
                width: !1,
                height: !1
            }).children("i").remove(), t.find("input").prop("disabled", !1)
        }, $.fn.ytLazyLoad = function (e) {
            this.each(function () {
                var t = $(this).data(),
                    a = $(this);
                if ("" == t.id) return void a.remove();
                a.css({
                    width: t.width,
                    height: t.height,
                    "background-image": "url(https://i.ytimg.com/vi/" + t.id + "/hqdefault.jpg)"
                }).removeClass("loaded"), e ? a.html("") : a.html('<a class="yt-title">' + t.title + "</a>")
            })
        }, $.fn.loadYtp = function () {
            $(this).addClass("loaded").html(h.a.varsReplace('<iframe width="{width}" height="{height}" src="//www.youtube.com/embed/{id}?wmode=opaque&autoplay=1" data-id="{id}" frameborder="0" allowfullscreen></iframe>', $(this).data()))
        }, $.fn.stickyBox = function () {
            $(this).sticky({
                topSpacing: 78,
                bottomSpacing: $("#footer").outerHeight() + 40
            })
        };
        var Ne = ["ERROR", "Currently watching", "Completed", "Plan to watch", "On-hold", "Dropped", "Not Interested"];
        t.default = {
            reportBrokenTrailer: c,
            accountNotVerified: d
        };
        $(document).ready(function () {
            var e = new oe.a({
                panel: document.getElementById("content"),
                menu: document.getElementById("menu"),
                padding: 300,
                side: "right",
                touch: !1,
                tolerance: 70
            });
            $(".sticky").stickyBox();
            var t = $("meta[property=mdl\\:rid]");
            if (t.length) {
                var a = t.attr("content"),
                    n = $("meta[property=mdl\\:type]").attr("content");
                f.a.Collect({
                    eid: a,
                    e: n
                })
            }
            $(".btn-slide-menu").on("click", function () {
                e.toggle()
            });
            var s = document.querySelector(".app-header");
            if (e.on("translate", function (e) {
                    s.style.transform = "translateX(" + e + "px)"
                }), e.on("beforeopen", function () {
                    s.style.transition = "transform 300ms ease", s.style.transform = "translateX(-300px)"
                }), e.on("beforeclose", function () {
                    s.style.transition = "transform 300ms ease", s.style.transform = "translateX(0px)"
                }), e.on("open", function () {
                    s.style.transition = "", $("#content").one("click", function (t) {
                        t.preventDefault(), e.close()
                    })
                }), e.on("close", function () {
                    s.style.transition = ""
                }), $(document).on("click", ".mdl-verified", function () {
                    window.location.href = "/account/privacy"
                }), $(document).on("click", ".vip-tag", function () {
                    window.location.href = "/vip"
                }), $(document).on("click", ".in-link", function () {
                    $(this).data("href") && (window.location.href = $(this).data("href"))
                }), $(window).resize(function () {
                    $(".app-header").width($(this).width())
                }).trigger("resize"), $(".read-more").click(function (e) {
                    e.preventDefault(), $(this).closest("div").addClass("full-read")
                }), $(".btn-menu:not(.loaded)").on("mouseenter", function (e) {
                    var t = $(this);
                    if (!t.hasClass("loaded")) {
                        t.addClass("loaded");
                        var a = t.data();
                        new u.default({
                            el: t.parent()[0],
                            template: "<menu-action></menu-action>",
                            render: function (e) {
                                return e(Q.a, {
                                    props: {
                                        data: {
                                            items: [],
                                            cid: a.id,
                                            ctype: a.type
                                        },
                                        loaded: !0
                                    }
                                })
                            }
                        })
                    }
                }), $(document).on("click", ".btn-trailer", function (e) {
                    e.preventDefault();
                    var t = $(this),
                        a = t.data("id");
                    if (!$("#mdl-trailer-modal").length) {
                        var i = $('<div id="mdl-trailer-modal">');
                        $("body").append(i)
                    }
                    new u.default({
                        i18n: p.a,
                        el: "#mdl-trailer-modal",
                        template: "<trailer-modal></trailer-modal>",
                        data: {
                            visible: !0
                        },
                        render: function (e) {
                            var t = this;
                            return e(x, {
                                props: {
                                    isMobilePhone: window.isMobilePh,
                                    rid: a,
                                    visible: this.visible
                                },
                                on: {
                                    "update:visible": function (e) {
                                        t.visible = e
                                    }
                                }
                            })
                        }
                    })
                }),  $("[data-stats]").length && "" != f.a.access_token) {
                var r = {},
                    o = {},
                    l = {},
                    c = 0;
                if ($("[data-stats]").each(function () {
                        var e = $(this).data("stats"),
                            t = e.split(":");
                        void 0 === o[e] && (o[e] = !0, void 0 === r[t[0]] ? (c++, r[t[0]] = t[1], l[t[0]] = 1) : (r[t[0]] += "-" + t[1], l[t[0]]++))
                    }), c > 0) {
                    if (void 0 !== l.mylist && l.mylist > 40) {
                        var d = r.mylist;
                        delete r.mylist, c--;
                        var m, v, g, b = d.split("-");
                        for (m = 0, v = b.length; m < v; m += 40) g = b.slice(m, m + 40), f.a.Get("/v1/users/data", {
                            mylist: g.join("-")
                        }, function (e) {
                            i(e)
                        })
                    }
                    c > 0 && f.a.Get("/v1/users/data", r, function (e) {
                        i(e)
                    })
                }
            }
            if ($(".nav-notifications").length || window.location.href.indexOf("notif") >= 0) {
                var y = h.a.getUrlVars();
                if ("notif" == y.r) {
                    var w = parseInt(y._nid),
                        C = $(".nav-notifications .notif-count");
                    w > 0 && C.length && (C.fadeOut(), f.a.Post("/v1/users/notifications/" + w + "/clear", {}, function (e) {
                        if (void 0 === e.cleared) return void C.fadeIn();
                        var t = parseInt(C.text());
                        isNaN(t) ? C.remove() : (t--, t <= 0 ? C.remove() : (C.text(t), C.fadeIn()))
                    }).fail(function () {
                        C.fadeIn()
                    }))
                }
            }
            $(".share-container .btn-social").on("click", function (e) {
                e.preventDefault();
                var t = $(this).attr("href");
                if (void 0 !== t && t.length) return "#comments" == t ? void $("body, html").animate({
                    scrollTop: $("#cmtsapp").offset().top
                }, 600) : void h.a.popupCenter(t, "", 580, 470)
            }), $(".nav-notifications").one("click", function (e) {
                e.preventDefault();
                var t = $(this);
                if (!t.hasClass("open")) {
                    var a = t.find("> .nav-link");
                    "dropdown" != a.attr("data-toggle") && f.a.Get("/v1/users/notifications?filter=new", function (e) {
                        a.attr("data-toggle", "dropdown").dropdown("toggle"), new u.default({
                            el: "#mdl-notify-dropdown",
                            template: "<notifications-dropdown></notifications-dropdown>",
                            render: function (t) {
                                return t(I, {
                                    props: {
                                        isMobilePhone: window.isMobilePh,
                                        items: e.items
                                    }
                                })
                            }
                        })
                    })
                }
            });
            var S = null;
            if ($(document).on("click", ".report-link", function (e) {
                    var t = $(this).data("id"),
                        a = $(this).data("type");
                    new u.default({
                        el: "#mdl-modal",
                        template: "<report-dialog></report-dialog>",
                        data: {
                            visible: !0
                        },
                        render: function (e) {
                            var i = this;
                            return e(fe.a, {
                                props: {
                                    data: {
                                        id: t,
                                        type: a
                                    },
                                    visible: this.visible
                                },
                                on: {
                                    "update:visible": function (e) {
                                        i.visible = e
                                    }
                                }
                            })
                        }
                    })
                }), $(document).on("mouseenter.info", "a[data-info]", function (e) {
                    if (e.preventDefault(), h.a.isMobileDevice()) return void $(document).unbind("mouseenter.info");
                    var t = $(this);
                    S = setTimeout(function () {
                        var e = t.data("info").split(":"),
                            a = void 0 === t.data("cover") || a;
                        t.removeAttr("data-info"), t.qtip({
                            id: e[1] + "-" + e[0],
                            content: {
                                text: function (t, i) {
                                    return f.a.Get("/v1/titles/" + e[1], function (t) {
                                        var n = new u.default({
                                            template: "<film-popover></film-popover>",
                                            i18n: p.a,
                                            render: function (e) {
                                                return e(W, {
                                                    props: {
                                                        isMobilePhone: window.isMobilePh,
                                                        show_cover: a,
                                                        item: t
                                                    }
                                                })
                                            }
                                        }).$mount("#popover-" + e[1] + "-" + e[0]);
                                        i.set("content.text", n.$el.innerHTML)
                                    }), '<div id="popover-' + e[1] + "-" + e[0] + '"><i class="fa fa-spinner fa-spin"></i></div>'
                                }
                            },
                            show: {
                                delay: 600,
                                ready: !0,
                                event: "mouseenter"
                            },
                            hide: {
                                fixed: !0,
                                delay: 300
                            },
                            position: {
                                my: "center left",
                                at: "center right",
                                adjust: {
                                    method: "flip flip"
                                },
                                viewport: $(window)
                            },
                            style: "qtip-wiki"
                        })
                    }, 600)
                }).on("mouseleave.info", "a[data-info]", function () {
                    clearTimeout(S)
                }), $(".film-info").click(function (e) {
                    e.preventDefault();
                    var t = $(this).data("info").split(":");
                    ie.a.hideAll(), f.a.Get("/v1/titles/" + t[1], function (e) {
                        ie.a.dialog({
                            message: '<div id="popover-' + t[1] + "-" + t[0] + '"></div>',
                            backdrop: !1,
                            onEscape: !0
                        }).init(function () {
                            new u.default({
                                template: "<film-popover></film-popover>",
                                i18n: p.a,
                                render: function (t) {
                                    return t(W, {
                                        props: {
                                            isMobilePhone: window.isMobilePh,
                                            item: e
                                        }
                                    })
                                }
                            }).$mount("#popover-" + t[1] + "-" + t[0])
                        })
                    })
                }), $(".nav-search").bind("shown.bs.dropdown", function () {
                    $(this).find(".form-control").focus()
                }), $(".current-avatar").length) {
                var T = $(".header-user-avatar").attr("src");
                "" == T && (T = "https://i.mydramalist.com/letter/anon"), $(".current-avatar").each(function () {
                    $(this).attr("src", T)
                })
            }
            $("#mdl-lang").one("mouseenter", function () {
                new u.default({
                    el: "#mdl-lang",
                    template: "<lang-switcher></lang-switcher>",
                    components: {
                        LangSwitcher: Z
                    }
                })
            }), $("#top-nav li.dropdown").hover(function () {
                $(this).find(".dropdown-menu").stop(!0, !0).delay(100).fadeIn(300)
            }, function () {
                $(this).find(".dropdown-menu").stop(!0, !0).delay(100).fadeOut(300)
            }), $(".btnQuickEpisodeUpdate a").click(function (e) {
                e.preventDefault(), console.log("quick update");
                var t = $(this).parent().data("id"),
                    a = $("#ml" + t).find(".episode-seen"),
                    i = parseInt(a.text());
                isNaN(i) && (i = 0), "+" == $(this).text() ? i++ : i--, f.a.Patch("/v1/users/watchaction/" + t, {
                    episode_seen: i,
                    quick_action: !0
                }, function (e, t, i) {
                    u.default.prototype.$notify({
                        offset: 60,
                        type: "success",
                        message: "Success!"
                    }), a.text(e.episode_seen)
                })
            })
        })
    },
    QW9K: function (e, t, a) {
        "use strict";
        var i = function (e, t) {
            if (!(e instanceof t)) throw new TypeError("Cannot call a class as a function")
        };
        t.__esModule = !0;
        var n = function () {
            function e() {
                i(this, e)
            }
            return e.prototype.on = function (e, t) {
                return this._eventCollection = this._eventCollection || {}, this._eventCollection[e] = this._eventCollection[e] || [], this._eventCollection[e].push(t), this
            }, e.prototype.once = function (e, t) {
                function a() {
                    i.off(e, a), t.apply(this, arguments)
                }
                var i = this;
                return a.listener = t, this.on(e, a), this
            }, e.prototype.off = function (e, t) {
                var a = void 0;
                return this._eventCollection && (a = this._eventCollection[e]) ? (a.forEach(function (e, i) {
                    e !== t && e.listener !== t || a.splice(i, 1)
                }), 0 === a.length && delete this._eventCollection[e], this) : this
            }, e.prototype.emit = function (e) {
                for (var t = this, a = arguments.length, i = Array(a > 1 ? a - 1 : 0), n = 1; n < a; n++) i[n - 1] = arguments[n];
                var s = void 0;
                return this._eventCollection && (s = this._eventCollection[e]) ? (s = s.slice(0), s.forEach(function (e) {
                    return e.apply(t, i)
                }), this) : this
            }, e
        }();
        t.default = n, e.exports = t.default
    },
    R5rG: function (e, t, a) {
        "use strict";
        var i = a("qmEX");
        $.fn.ytLazyLoad = function (e) {
            this.each(function () {
                var t = $(this).data(),
                    a = $(this);
                if (console.log(t), "" == t.id) return void a.remove();
                a.css({
                    width: t.width,
                    height: t.height,
                    "background-image": "url(https://i.ytimg.com/vi/" + t.id + "/hqdefault.jpg)"
                }).removeClass("loaded"), e ? a.html("") : a.html('<a class="yt-title">' + t.title + "</a>")
            })
        }, void 0 !== $.FroalaEditor && ($.FroalaEditor.DEFAULTS = $.extend($.FroalaEditor.DEFAULTS, {
            myOption: !1
        }), $.FroalaEditor.PLUGINS.cquote = function (e) {
            function t(t) {
                var a = $("<div>" + t.message + "</div>");
                a.find(".quote").remove();
                var i = e.clean.html($.trim(a.html()), ["strong"]),
                    n = '<blockquote class="quote fr-deletable" contenteditable="false" data-post="' + t.post + '" data-topic="' + t.topic + '" data-user="' + t.username + '">';
                n += '<div class="quote-user"><img src="' + t.avatar + '" class="avatar"> ' + t.display_name + ":</div>", n += "" + i, n += "</blockquote>", e.html.insert(n), e.cursor.enter(), e.$el.find(".yt-container").ytLazyLoad(!0), e.$el.find(".yt-container").attr("contenteditable", !1)
            }

            function a() {
                e.$el.on("click", "blockquote.quote", function (e) {})
            }
            return {
                _init: a,
                create: t
            }
        }, $.extend($.FroalaEditor.POPUP_TEMPLATES, {
            "cvideo.popup": "[_BUTTONS_][_CUSTOM_LAYER_]"
        }), $.extend($.FroalaEditor.DEFAULTS, {
            popupButtons: ["popupGoBack"]
        }), $.FroalaEditor.PLUGINS.cvideo = function (e) {
            function t() {
                console.log("cvideo2")
            }

            function a() {
                var t = $.FroalaEditor.POPUP_TEMPLATES.customPopup;
                "function" == typeof t && (t = t.apply(e));
                var a = "";
                e.opts.popupButtons.length > 1 && (a += '<div class="fr-buttons">', a += e.button.buildList(e.opts.popupButtons), a += "</div>");
                var t = {
                    buttons: a,
                    custom_layer: '<div class="fr-layer fr-active">\n        \t\t\t\t<div class="fr-input-line">\n        \t\t\t\t\t<input id="fr-link-insert-layer-url-1" name="href" type="text" class="fr-link-attr" placeholder="URL" tabindex="1" dir="auto">\n        \t\t\t\t\t<label for="fr-link-insert-layer-url-1">URL</label>\n        \t\t\t\t</div>\n        \t\t\t\t<div class="fr-action-buttons"><button class="fr-command fr-submit" role="button" data-cmd="videoInsert" href="#" tabindex="4" type="button">Insert</button></div>\n                    </div>'
                };
                return e.popups.create("cvideo.popup", t)
            }

            function n() {
                var t = e.popups.get("cvideo.popup");
                t || (t = a()), e.popups.setContainer("cvideo.popup", e.$tb);
                var i = e.$tb.find('.fr-command[data-cmd="cvideoBtn"]'),
                    n = i.offset().left + i.outerWidth() / 2,
                    s = i.offset().top + (e.opts.toolbarBottom ? 10 : i.outerHeight() - 10);
                e.popups.show("cvideo.popup", n, s, i.outerHeight())
            }

            function s() {
                e.popups.hide("cvideo.popup")
            }

            function r() {
                var t = e.popups.get("cvideo.popup"),
                    a = t.find('input.fr-link-attr[type="text"]'),
                    i = a.filter('[name="href"]').val(),
                    n = {};
                a.filter('[name="href"]').val("");
                var s = e.helpers.scrollTop();
                o(i, n), $(e.o_win).scrollTop(s)
            }

            function o(t, a) {
                if (console.log("test: ", t, a), !t.match(l)) return "";
                s(), i.a.Get("/v1/users/feeds/embed", {
                    url: t
                }, function (a) {
                    var i = t.replace(l, '<div class="yt-container fr-deletable" tabindex="1" data-id="$1" data-title="' + a.title + '" data-width="585" data-height="329"><br></div>');
                    e.html.insert(i), e.cursor.enter(), e.$el.find(".yt-container").ytLazyLoad(!0), e.$el.find(".yt-container").attr("contenteditable", !1)
                })
            }
            var l = /https?:\/\/(?:[0-9A-Z-]+\.)?(?:youtu\.be\/|youtube\.com\S*[^\w\-\s])([\w\-]{11})(?=[^\w\-]|$)(?![?=&+%\w.-]*(?:['"][^<>]*>|<\/a>))[?=&+%\w.-]*/gi;
            return {
                _init: t,
                showPopup: n,
                hidePopup: s,
                insertCallback: r
            }
        }, $.FroalaEditor.DefineIcon("cvideoBtn", {
            NAME: "youtube"
        }), $.FroalaEditor.RegisterCommand("cvideoBtn", {
            title: "Embed Video",
            undo: !1,
            focus: !1,
            popup: !0,
            plugin: "cvideo",
            callback: function () {
                this.popups.isVisible("cvideo.popup") ? this.popups.hide("cvideo.popup") : this.cvideo.showPopup()
            }
        }), $.FroalaEditor.RegisterCommand("videoInsert", {
            focus: !1,
            refreshAfterCallback: !1,
            callback: function () {
                this.cvideo.insertCallback()
            },
            refresh: function (e) {}
        }), $.FroalaEditor.DefineIcon("popupGoBack", {
            NAME: "arrow-left"
        }), $.FroalaEditor.RegisterCommand("popupGoBack", {
            title: "Back",
            undo: !1,
            focus: !1,
            callback: function () {
                this.cvideo.hidePopup()
            }
        }), $.FroalaEditor.DefineIcon("popupButton1", {
            NAME: "link"
        }), $.FroalaEditor.RegisterCommand("popupButton1", {
            title: "By URL",
            undo: !1,
            focus: !0,
            callback: function () {
                alert("popupButton1 was pressed")
            }
        }), $.FroalaEditor.PLUGINS.spoiler = function (e) {
            function t(t) {
                e.format.toggle("span", {
                    class: "spoiler"
                })
            }
            return {
                apply: t
            }
        }, $.FroalaEditor.DefineIcon("spoiler", {
            NAME: "exclamation-triangle"
        }), $.FroalaEditor.RegisterCommand("spoiler", {
            title: "Spoiler",
            focus: !0,
            undo: !0,
            refreshOnCallback: !1,
            callback: function (e, t) {
                this.spoiler.apply(t)
            },
            refresh: function (e) {
                var t = this.format.is("span", {
                    class: "spoiler"
                });
                e.toggleClass("fr-active", t).attr("aria-pressed", t)
            },
            plugin: "spoiler"
        }))
    },
    Usg1: function (e, t, a) {
        "use strict";
        var i = a("7+uW"),
            n = new i.default;
        t.a = n
    },
    a9wy: function (e, t, a) {
        "use strict";

        function i(e, t) {
            for (var a in t) t[a] && (e[a] = t[a]);
            return e
        }

        function n(e) {
            for (; e.parentNode;) {
                if (null !== e.getAttribute("data-slideout-ignore")) return e;
                e = e.parentNode
            }
            return null
        }

        function s(e) {
            e = e || {}, this._startOffsetX = 0, this._currentOffsetX = 0, this._opening = !1, this._moved = !1, this._opened = !1, this._preventOpen = !1, this._touch = void 0 === e.touch || e.touch && !0, this._side = e.side || "left", this.panel = e.panel, this.menu = e.menu, this.panel.classList.contains("slideout-panel") || this.panel.classList.add("slideout-panel"), this.panel.classList.contains("slideout-panel-" + this._side) || this.panel.classList.add("slideout-panel-" + this._side), this.menu.classList.contains("slideout-menu") || this.menu.classList.add("slideout-menu"), this.menu.classList.contains("slideout-menu-" + this._side) || this.menu.classList.add("slideout-menu-" + this._side), this._fx = e.fx || "ease", this._duration = parseInt(e.duration, 10) || 300, this._tolerance = parseInt(e.tolerance, 10) || 70, this._padding = this._translateTo = parseInt(e.padding, 10) || 256, this._orientation = "right" === this._side ? -1 : 1, this._translateTo *= this._orientation, this._touch && this._initTouchEvents()
        }
        var r, o = a("wr1V"),
            l = a("QW9K"),
            c = !1,
            d = window.document,
            u = d.documentElement,
            p = window.navigator.msPointerEnabled,
            h = {
                start: p ? "MSPointerDown" : "touchstart",
                move: p ? "MSPointerMove" : "touchmove",
                end: p ? "MSPointerUp" : "touchend"
            },
            f = function () {
                var e = /^(Webkit|Khtml|Moz|ms|O)(?=[A-Z])/,
                    t = d.getElementsByTagName("script")[0].style;
                for (var a in t)
                    if (e.test(a)) return "-" + a.match(e)[0].toLowerCase() + "-";
                return "WebkitOpacity" in t ? "-webkit-" : "KhtmlOpacity" in t ? "-khtml-" : ""
            }();
        ! function (e, t) {
            e.prototype = i(e.prototype || {}, t.prototype)
        }(s, l), s.prototype.open = function () {
            var e = this;
            return this.emit("beforeopen"), u.classList.contains("slideout-open") || u.classList.add("slideout-open"), this._setTransition(), this._translateXTo(this._translateTo), this._opened = !0, setTimeout(function () {
                e.panel.style.transition = e.panel.style["-webkit-transition"] = "", e.emit("open")
            }, this._duration + 50), this
        }, s.prototype.close = function () {
            var e = this;
            return this.isOpen() || this._opening ? (this.emit("beforeclose"), this._setTransition(), this._translateXTo(0), this._opened = !1, setTimeout(function () {
                u.classList.remove("slideout-open"), e.panel.style.transition = e.panel.style["-webkit-transition"] = e.panel.style[f + "transform"] = e.panel.style.transform = "", e.emit("close")
            }, this._duration + 50), this) : this
        }, s.prototype.toggle = function () {
            return this.isOpen() ? this.close() : this.open()
        }, s.prototype.isOpen = function () {
            return this._opened
        }, s.prototype._translateXTo = function (e) {
            return this._currentOffsetX = e, this.panel.style[f + "transform"] = this.panel.style.transform = "translateX(" + e + "px)", this
        }, s.prototype._setTransition = function () {
            return this.panel.style[f + "transition"] = this.panel.style.transition = f + "transform " + this._duration + "ms " + this._fx, this
        }, s.prototype._initTouchEvents = function () {
            var e = this;
            return this._onScrollFn = o(d, "scroll", function () {
                e._moved || (clearTimeout(r), c = !0, r = setTimeout(function () {
                    c = !1
                }, 250))
            }), this._preventMove = function (t) {
                e._moved && t.preventDefault()
            }, d.addEventListener(h.move, this._preventMove), this._resetTouchFn = function (t) {
                void 0 !== t.touches && (e._moved = !1, e._opening = !1, e._startOffsetX = t.touches[0].pageX, e._preventOpen = !e._touch || !e.isOpen() && 0 !== e.menu.clientWidth)
            }, this.panel.addEventListener(h.start, this._resetTouchFn), this._onTouchCancelFn = function () {
                e._moved = !1, e._opening = !1
            }, this.panel.addEventListener("touchcancel", this._onTouchCancelFn), this._onTouchEndFn = function () {
                e._moved && (e.emit("translateend"), e._opening && Math.abs(e._currentOffsetX) > e._tolerance ? e.open() : e.close()), e._moved = !1
            }, this.panel.addEventListener(h.end, this._onTouchEndFn), this._onTouchMoveFn = function (t) {
                if (!(c || e._preventOpen || void 0 === t.touches || n(t.target))) {
                    var a = t.touches[0].clientX - e._startOffsetX,
                        i = e._currentOffsetX = a;
                    if (!(Math.abs(i) > e._padding) && Math.abs(a) > 20) {
                        e._opening = !0;
                        var s = a * e._orientation;
                        if (e._opened && s > 0 || !e._opened && s < 0) return;
                        e._moved || e.emit("translatestart"), s <= 0 && (i = a + e._padding * e._orientation, e._opening = !1), e._moved && u.classList.contains("slideout-open") || u.classList.add("slideout-open"), e.panel.style[f + "transform"] = e.panel.style.transform = "translateX(" + i + "px)", e.emit("translate", i), e._moved = !0
                    }
                }
            }, this.panel.addEventListener(h.move, this._onTouchMoveFn), this
        }, s.prototype.enableTouch = function () {
            return this._touch = !0, this
        }, s.prototype.disableTouch = function () {
            return this._touch = !1, this
        }, s.prototype.destroy = function () {
            return this.close(), d.removeEventListener(h.move, this._preventMove), this.panel.removeEventListener(h.start, this._resetTouchFn), this.panel.removeEventListener("touchcancel", this._onTouchCancelFn), this.panel.removeEventListener(h.end, this._onTouchEndFn), this.panel.removeEventListener(h.move, this._onTouchMoveFn), d.removeEventListener("scroll", this._onScrollFn), this.open = this.close = function () {}, this
        }, e.exports = s
    },
    d0Uw: function (e, t, a) {
        "use strict";

        function i(e) {
            Object.defineProperty(e.prototype, "$i18n", {
                get: function () {
                    return this._i18n
                }
            }), e.prototype.$t = function (e) {
                for (var t = this.$i18n, a = arguments.length, i = Array(a > 1 ? a - 1 : 0), n = 1; n < a; n++) i[n - 1] = arguments[n];
                return t._t.apply(t, [e, t.locale, t._getMessages(), this].concat(i))
            }, e.prototype.$tc = function (e, t, a) {
                for (var i = this.$i18n, n = arguments.length, s = Array(n > 3 ? n - 3 : 0), r = 3; r < n; r++) s[r - 3] = arguments[r];
                return i._tc.apply(i, [e, t, i.locale, i._getMessages(), this, a].concat(s))
            }, e.prototype.$x = function (e, t, a) {
                for (var i = this.$i18n, n = arguments.length, s = Array(n > 3 ? n - 3 : 0), r = 3; r < n; r++) s[r - 3] = arguments[r];
                return i._x.apply(i, [e, t, i.locale, i._getMessages(), this, a].concat(s))
            }
        }

        function n(e) {
            return null !== e && "object" === (void 0 === e ? "undefined" : M()(e))
        }

        function s(e) {
            return k.call(e) === P
        }

        function r(e) {
            return null === e || void 0 === e
        }

        function o() {
            var e = null,
                t = null;
            return 1 === arguments.length ? n(arguments.length <= 0 ? void 0 : arguments[0]) || Array.isArray(arguments.length <= 0 ? void 0 : arguments[0]) ? t = arguments.length <= 0 ? void 0 : arguments[0] : "string" == typeof (arguments.length <= 0 ? void 0 : arguments[0]) && (e = arguments.length <= 0 ? void 0 : arguments[0]) : 2 === arguments.length && ("string" == typeof (arguments.length <= 0 ? void 0 : arguments[0]) && (e = arguments.length <= 0 ? void 0 : arguments[0]), (n(arguments.length <= 1 ? void 0 : arguments[1]) || Array.isArray(arguments.length <= 1 ? void 0 : arguments[1])) && (t = arguments.length <= 1 ? void 0 : arguments[1])), {
                locale: e,
                params: t
            }
        }

        function l(e) {
            return e ? e > 1 ? 1 : 0 : 1
        }

        function c(e, t) {
            return e = Math.abs(e), 2 === t ? l(e) : e ? Math.min(e, 2) : 1
        }

        function d(e, t) {
            if (!e && "object" !== (void 0 === e ? "undefined" : M()(e))) return null;
            var a = e;
            return t = c(t, a.length), a[t] ? a[t].trim() : e
        }

        function u(e, t) {
            if (e.length) {
                var a = e.indexOf(t);
                if (a > -1) return e.splice(a, 1)
            }
        }

        function p(e, t) {
            return D.call(e, t)
        }

        function h(e) {
            for (var t = Object(e), a = 1; a < arguments.length; a++) {
                var i = arguments[a];
                if (void 0 !== i && null !== i) {
                    var s = void 0;
                    for (s in i) p(i, s) && (n(i[s]) ? t[s] = h(t[s], i[s]) : t[s] = i[s])
                }
            }
            return t
        }

        function f(e) {
            L = e;
            L.version && Number(L.version.split(".")[0]);
            f.installed = !0, i(L), L.mixin($);
            var t = L.config.optionMergeStrategies;
            t.i18n = t.methods
        }

        function m(e) {
            for (var t = [], a = 0, i = ""; a < e.length;) {
                var n = e[a++];
                if ("{" === n) {
                    i && t.push({
                        type: "text",
                        value: i
                    }), i = "";
                    var s = "";
                    for (n = e[a++];
                        "}" !== n;) s += n, n = e[a++];
                    var r = R.test(s) ? "list" : z.test(s) ? "named" : "unknown";
                    t.push({
                        value: s,
                        type: r
                    })
                } else "%" === n ? "{" !== e[a] && (i += n) : i += n
            }
            return i && t.push({
                type: "text",
                value: i
            }), t
        }

        function v(e, t) {
            var a = [],
                i = 0,
                s = Array.isArray(t) ? "list" : n(t) ? "named" : "unknown";
            if ("unknown" === s) return a;
            for (; i < e.length;) {
                var r = e[i];
                switch (r.type) {
                    case "text":
                        a.push(r.value);
                        break;
                    case "list":
                        a.push(t[parseInt(r.value, 10)]);
                        break;
                    case "named":
                        "named" === s && a.push(t[r.value])
                }
                i++
            }
            return a
        }

        function g(e) {
            return [e]
        }

        function b(e) {
            return !!Array.isArray(e) && 0 === e.length
        }
        var y = a("7+uW"),
            w = a("Zrlr"),
            C = a.n(w),
            S = a("wxAW"),
            T = a.n(S),
            _ = a("fZjL"),
            x = a.n(_),
            E = (a("mvHQ"), a("pFYg")),
            M = a.n(E),
            k = Object.prototype.toString,
            P = "[object Object]",
            D = Object.prototype.hasOwnProperty,
            $ = ("undefined" != typeof Intl && Intl.DateTimeFormat, "undefined" != typeof Intl && Intl.NumberFormat, {
                beforeCreate: function () {
                    var e = this.$options;
                    if (e.i18n = e.i18n || (e.__i18n ? {} : null), e.i18n) {
                        if (e.i18n instanceof K) {
                            if (e.__i18n) try {
                                var t = {};
                                e.__i18n.forEach(function (e) {
                                    t = h(t, JSON.parse(e))
                                }), x()(t).forEach(function (a) {
                                    e.i18n.mergeLocaleMessage(a, t[a])
                                })
                            } catch (e) {}
                            this._i18n = e.i18n, this._i18nWatcher = this._i18n.watchI18nData(), this._i18n.subscribeDataChanging(this), this._subscribing = !0
                        } else if (s(e.i18n)) {
                            if (this.$root && this.$root.$i18n && this.$root.$i18n instanceof K && (e.i18n.root = this.$root.$i18n, e.i18n.formatter = this.$root.$i18n.formatter, e.i18n.fallbackLocale = this.$root.$i18n.fallbackLocale, e.i18n.silentTranslationWarn = this.$root.$i18n.silentTranslationWarn), e.__i18n) try {
                                var a = {};
                                e.__i18n.forEach(function (e) {
                                    a = h(a, JSON.parse(e))
                                }), e.i18n.messages = a
                            } catch (e) {}
                            this._i18n = new K(e.i18n), this._i18nWatcher = this._i18n.watchI18nData(), this._i18n.subscribeDataChanging(this), this._subscribing = !0, (void 0 === e.i18n.sync || e.i18n.sync) && (this._localeWatcher = this.$i18n.watchLocale())
                        }
                    } else this.$root && this.$root.$i18n && this.$root.$i18n instanceof K ? (this._i18n = this.$root.$i18n, this._i18n.subscribeDataChanging(this), this._subscribing = !0) : e.parent && e.parent.$i18n && e.parent.$i18n instanceof K && (this._i18n = e.parent.$i18n, this._i18n.subscribeDataChanging(this), this._subscribing = !0)
                },
                beforeDestroy: function () {
                    this._i18n && (this._subscribing && (this._i18n.unsubscribeDataChanging(this), delete this._subscribing), this._i18nWatcher && (this._i18nWatcher(), delete this._i18nWatcher), this._localeWatcher && (this._localeWatcher(), delete this._localeWatcher), this._i18n = null)
                }
            }),
            L = void 0,
            A = a("OvRC"),
            O = a.n(A),
            I = function () {
                function e() {
                    C()(this, e), this._caches = O()(null)
                }
                return T()(e, [{
                    key: "interpolate",
                    value: function (e, t) {
                        if (!t) return [e];
                        var a = this._caches[e];
                        return a || (a = m(e), this._caches[e] = a), v(a, t)
                    }
                }]), e
            }(),
            H = I,
            R = /^(\d)+/,
            z = /^(\w)+/,
            F = [];
        F[0] = {
            ws: [0],
            ident: [3, 0],
            "[": [4],
            eof: [7]
        }, F[1] = {
            ws: [1],
            ".": [2],
            "[": [4],
            eof: [7]
        }, F[2] = {
            ws: [2],
            ident: [3, 0],
            0: [3, 0],
            number: [3, 0]
        }, F[3] = {
            ident: [3, 0],
            0: [3, 0],
            number: [3, 0],
            ws: [1, 1],
            ".": [2, 1],
            "[": [4, 1],
            eof: [7, 1]
        }, F[4] = {
            "'": [5, 0],
            '"': [6, 0],
            "[": [4, 2],
            "]": [1, 3],
            eof: 8,
            else: [4, 0]
        }, F[5] = {
            "'": [4, 0],
            eof: 8,
            else: [5, 0]
        }, F[6] = {
            '"': [4, 0],
            eof: 8,
            else: [6, 0]
        };
        var N = function () {
                function e() {
                    C()(this, e), this._cache = O()(null)
                }
                return T()(e, [{
                    key: "parsePath",
                    value: function (e) {
                        var t = this._cache[e];
                        return t || (t = g(e)) && (this._cache[e] = t), t || []
                    }
                }, {
                    key: "getPathValue",
                    value: function (e, t) {
                        if (!n(e)) return null;
                        var a = this.parsePath(t);
                        if (b(a)) return null;
                        for (var i = a.length, s = e, r = 0; r < i;) {
                            var o = s[a[r]];
                            if (void 0 === o) {
                                s = null;
                                break
                            }
                            s = o, r++
                        }
                        return s
                    }
                }]), e
            }(),
            j = N,
            V = function () {
                function e() {
                    var t = this,
                        a = arguments.length > 0 && void 0 !== arguments[0] ? arguments[0] : {};
                    C()(this, e), this.version = "", this.install = function () {};
                    var i = a.locale || "en-US",
                        n = a.fallbackLocale || "en-US",
                        s = a.messages || {};
                    a.dateTimeFormats, a.numberFormats;
                    this._vm = null, this._formatter = a.formatter || new H, this._missing = a.missing || null, this._root = a.root || null, this._sync = void 0 === a.sync || !!a.sync, this._fallbackRoot = void 0 === a.fallbackRoot || !!a.fallbackRoot, this._silentTranslationWarn = void 0 !== a.silentTranslationWarn && !!a.silentTranslationWarn, this._dateTimeFormatters = {}, this._numberFormatters = {}, this._path = new j, this._dataListeners = [], this._exist = function (e, a) {
                        return !(!e || !a) && !r(t._path.getPathValue(e, a))
                    }, this._initVM({
                        locale: i,
                        fallbackLocale: n,
                        messages: s
                    })
                }
                return T()(e, [{
                    key: "_initVM",
                    value: function (e) {
                        var t = L.config.silent;
                        L.config.silent = !0, this._vm = new L({
                            data: e
                        }), L.config.silent = t
                    }
                }, {
                    key: "subscribeDataChanging",
                    value: function (e) {
                        this._dataListeners.push(e)
                    }
                }, {
                    key: "unsubscribeDataChanging",
                    value: function (e) {
                        u(this._dataListeners, e)
                    }
                }, {
                    key: "watchI18nData",
                    value: function () {
                        var e = this;
                        return this._vm.$watch("$data", function () {
                            for (var t = e._dataListeners.length; t--;) L.nextTick(function () {
                                e._dataListeners[t] && e._dataListeners[t].$forceUpdate()
                            })
                        }, {
                            deep: !0
                        })
                    }
                }, {
                    key: "_getMessages",
                    value: function () {
                        return this._vm.messages
                    }
                }, {
                    key: "watchLocale",
                    value: function () {
                        if (!this._sync || !this._root) return null;
                        var e = this._vm;
                        return this._root.vm.$watch("locale", function (t) {
                            e.$set(e, "locale", t), e.$forceUpdate()
                        }, {
                            immediate: !0
                        })
                    }
                }, {
                    key: "_interpolate",
                    value: function (e, t, a, i, n, o) {
                        if (!t) return null;
                        var l = this._path.getPathValue(t, a);
                        if (Array.isArray(l) || s(l)) return l;
                        var c = void 0;
                        if (r(l)) {
                            if (!s(t)) return null;
                            if ("string" != typeof (c = t[a])) return null
                        } else {
                            if ("string" != typeof l) return null;
                            c = l
                        }
                        return c.indexOf("@:") >= 0 && (c = this._link(e, t, c, i, n, o)), this._render(c, n, o)
                    }
                }, {
                    key: "_render",
                    value: function (e, t, a) {
                        var i = this._formatter.interpolate(e, a);
                        return "string" === t ? i.join("") : i
                    }
                }, {
                    key: "_isFallbackRoot",
                    value: function (e) {
                        return !e && !r(this._root) && this._fallbackRoot
                    }
                }, {
                    key: "_translate",
                    value: function (e, t, a, i, n, s, o) {
                        var l = this._interpolate(t, e[t], i, n, s, o);
                        return r(l) && r(l) ? null : l
                    }
                }, {
                    key: "_t",
                    value: function (e, t, a, i) {
                        if (!e) return "";
                        for (var n = arguments.length, s = Array(n > 4 ? n - 4 : 0), r = 4; r < n; r++) s[r - 4] = arguments[r];
                        var l = o.apply(void 0, s),
                            c = l.locale || t,
                            d = this._translate(a, c, this.fallbackLocale, e, i, "string", l.params);
                        if (this._isFallbackRoot(d)) {
                            var u;
                            if (!this._root) throw Error("unexpected error");
                            return (u = this._root).t.apply(u, [e].concat(s))
                        }
                        return this._warnDefault(c, e, d, i, s)
                    }
                }, {
                    key: "_tc",
                    value: function (e, t, a, i, n, s) {
                        if (!e) return "";
                        void 0 === s && (s = 1);
                        var l = this._interpolate(a, i[a], e, n);
                        r(l) && (l = [e, t]);
                        for (var c = d(l, s), u = arguments.length, p = Array(u > 6 ? u - 6 : 0), h = 6; h < u; h++) p[h - 6] = arguments[h];
                        var f = o.apply(void 0, p);
                        return this._render(c, "string", f.params)
                    }
                }, {
                    key: "_x",
                    value: function (e, t, a, i, n, s) {
                        if (!e) return "";
                        for (var r = arguments.length, l = Array(r > 6 ? r - 6 : 0), c = 6; c < r; c++) l[c - 6] = arguments[c];
                        var d = o.apply(void 0, l),
                            u = d.locale || a,
                            p = this._translate(i, u, this.fallbackLocale, t + ":" + e, n, "string", d.params);
                        if (this._isFallbackRoot(p)) {
                            var h;
                            if (!this._root) throw Error("unexpected error");
                            return (h = this._root).t.apply(h, [e].concat(l))
                        }
                        return this._warnDefault(u, e, p, n, l)
                    }
                }, {
                    key: "_warnDefault",
                    value: function (e, t, a, i, n) {
                        if (!r(a)) return a;
                        if (this._missing) {
                            var s = this._missing.apply(null, [e, t, i, n]);
                            if ("string" == typeof s) return s
                        }
                        return t
                    }
                }, {
                    key: "vm",
                    get: function () {
                        return this._vm
                    }
                }, {
                    key: "locale",
                    get: function () {
                        return this._vm.locale
                    },
                    set: function (e) {
                        this._vm.$set(this._vm, "locale", e)
                    }
                }, {
                    key: "fallbackLocale",
                    get: function () {
                        return this._vm.fallbackLocale
                    },
                    set: function (e) {
                        this._vm.$set(this._vm, "fallbackLocale", e)
                    }
                }]), e
            }(),
            K = V;
        V.install = f, V.version = "__VERSION__";
        var W = {
                "1 change": ["1 change", "{count} changes"],
                "1 cup of coffee monthly": ["1 cup of coffee monthly", "{count} cups of coffee monthly"],
                "1 cup of coffee yearly": ["1 cup of coffee yearly", "{count} cups of coffee yearly"],
                "1 day": ["1 day", "{count} days"],
                Action: "Action",
                Adaptation: "Adaptation",
                Adventure: "Adventure",
                All: "All",
                "All Languages": "All Languages",
                Alphabetical: "Alphabetical",
                American: "American",
                Animals: "Animals",
                Arabic: "Arabic",
                Australian: "Australian",
                British: "British",
                Business: "Business",
                "Buy 1 Cup of Coffee": ["Buy 1 Cup of Coffee", "Buy {count} Cups of Coffee"],
                Cambodian: "Cambodian",
                Canadian: "Canadian",
                Cantonese: "Cantonese",
                China: "China",
                Chinese: "Chinese",
                "Chinese (Sim.)": "Chinese (Sim.)",
                "Chinese (Trad.)": "Chinese (Trad.)",
                "Chinese Drama": "Chinese Drama",
                "Chinese Drama Special": "Chinese Drama Special",
                "Chinese Movie": "Chinese Movie",
                "Chinese Special": "Chinese Special",
                "Chinese TV Show": "Chinese TV Show",
                Comedy: "Comedy",
                Compilation: "Compilation",
                Completed: "Completed",
                Crime: "Crime",
                "Currently watching": "Currently watching",
                Czech: "Czech",
                Danish: "Danish",
                Detective: "Detective",
                Director: "Director",
                Documentary: "Documentary",
                Drama: "Drama",
                "Drama Recaps": "Drama Recaps",
                "Drama Special": "Drama Special",
                "Drama Special Status": "Drama Special Status",
                "Drama Status": "Drama Status",
                Dramas: "Dramas",
                Dutch: "Dutch",
                Editorials: "Editorials",
                English: "English",
                Family: "Family",
                Fantasy: "Fantasy",
                Female: "Female",
                Filipino: "Filipino",
                "Filipino Drama": "Filipino Drama",
                "Filipino Drama Special": "Filipino Drama Special",
                "Filipino Movie": "Filipino Movie",
                "Filipino Special": "Filipino Special",
                "Filipino TV Show": "Filipino TV Show",
                Finnish: "Finnish",
                Food: "Food",
                French: "French",
                Friendship: "Friendship",
                German: "German",
                Ghanaian: "Ghanaian",
                Greek: "Greek",
                Guest: "Guest",
                "Guest Role": "Guest Role",
                Hebrew: "Hebrew",
                Historical: "Historical",
                "Hong Kong": "Hong Kong",
                "Hong Kong Drama": "Hong Kong Drama",
                "Hong Kong Drama Special": "Hong Kong Drama Special",
                "Hong Kong Movie": "Hong Kong Movie",
                "Hong Kong Special": "Hong Kong Special",
                "Hong Kong TV Show": "Hong Kong TV Show",
                "Hong Konger": "Hong Konger",
                "Hong Kongers": "Hong Kongers",
                Horror: "Horror",
                Hungarian: "Hungarian",
                Indian: "Indian",
                Indonesian: "Indonesian",
                Interviews: "Interviews",
                Investigation: "Investigation",
                Italian: "Italian",
                Japan: "Japan",
                Japanese: "Japanese",
                "Japanese Drama": "Japanese Drama",
                "Japanese Drama Special": "Japanese Drama Special",
                "Japanese Movie": "Japanese Movie",
                "Japanese Special": "Japanese Special",
                "Japanese TV Show": "Japanese TV Show",
                Korean: "Korean",
                "Korean Drama": "Korean Drama",
                "Korean Drama Special": "Korean Drama Special",
                "Korean Movie": "Korean Movie",
                "Korean Special": "Korean Special",
                "Korean TV Show": "Korean TV Show",
                Law: "Law",
                Life: "Life",
                "MDL News": "MDL News",
                "Main Host": "Main Host",
                "Main Role": "Main Role",
                Malaysian: "Malaysian",
                Male: "Male",
                Mandarin: "Mandarin",
                Manga: "Manga",
                Martial: "Martial",
                "Martial Arts": "Martial Arts",
                Mature: "Mature",
                Medical: "Medical",
                Melodrama: "Melodrama",
                Military: "Military",
                Mongolian: "Mongolian",
                "Most Popular": "Most Popular",
                "Most Recent": "Most Recent",
                Movie: "Movie",
                "Movie Status": "Movie Status",
                Movies: "Movies",
                Music: "Music",
                Mystery: "Mystery",
                News: "News",
                Norwegian: "Norwegian",
                "Not Interested": "Not Interested",
                "On-hold": "On-hold",
                Ongoing: "Ongoing",
                "Parent Story": "Parent Story",
                Philippines: "Philippines",
                "Plan to watch": "Plan to watch",
                Polish: "Polish",
                Political: "Political",
                Popularity: "Popularity",
                Prequel: "Prequel",
                Psychological: "Psychological",
                "Publish Date": "Publish Date",
                "Recently Added": "Recently Added",
                "Regular Member": "Regular Member",
                "Release Date": "Release Date",
                Relevance: "Relevance",
                Remake: "Remake",
                Romance: "Romance",
                Russian: "Russian",
                School: "School",
                Sci: "Sci",
                "Sci-Fi": "Sci-Fi",
                "Sci-fi": "Sci-fi",
                Screenwriter: "Screenwriter",
                "Screenwriter & Director": "Screenwriter & Director",
                Sequel: "Sequel",
                Serbian: "Serbian",
                "Side Story": "Side Story",
                Singaporean: "Singaporean",
                Sitcom: "Sitcom",
                Slovak: "Slovak",
                "South Korea": "South Korea",
                "South Korean": "South Korean",
                Spanish: "Spanish",
                Spinoff: "Spinoff",
                Sports: "Sports",
                Status: "Status",
                Supernatural: "Supernatural",
                "Support Role": "Support Role",
                Suspense: "Suspense",
                Swedish: "Swedish",
                "TV Show": "TV Show",
                "TV Show Status": "TV Show Status",
                "TV Shows": "TV Shows",
                Taiwan: "Taiwan",
                Taiwanese: "Taiwanese",
                "Taiwanese Drama": "Taiwanese Drama",
                "Taiwanese Drama Special": "Taiwanese Drama Special",
                "Taiwanese Movie": "Taiwanese Movie",
                "Taiwanese Special": "Taiwanese Special",
                Thai: "Thai",
                "Thai Drama": "Thai Drama",
                "Thai Drama Special": "Thai Drama Special",
                "Thai Movie": "Thai Movie",
                "Thai Special": "Thai Special",
                "Thai TV Show": "Thai TV Show",
                Thailand: "Thailand",
                Thriller: "Thriller",
                Tokusatsu: "Tokusatsu",
                "Top Rated": "Top Rated",
                Tragedy: "Tragedy",
                Turkish: "Turkish",
                Unknown: "Unknown",
                Upcoming: "Upcoming",
                Vampire: "Vampire",
                Vietnamese: "Vietnamese",
                War: "War",
                Western: "Western",
                Wuxia: "Wuxia",
                "You have rated 1 title": ["You have rated 1 title", "You have rated {count} titles"],
                "Your VIP subscription will automatically renew on {date} and you'll be charged {amount}.": "Your VIP subscription will automatically renew on {date} and you'll be charged {amount}.",
                Youth: "Youth",
                Zombies: "Zombies",
                "feminine:American": "American",
                "feminine:Australian": "Australian",
                "feminine:British": "British",
                "feminine:Cambodian": "Cambodian",
                "feminine:Canadian": "Canadian",
                "feminine:Chinese": "Chinese",
                "feminine:English": "English",
                "feminine:Filipino": "Filipino",
                "feminine:French": "French",
                "feminine:German": "German",
                "feminine:Ghanaian": "Ghanaian",
                "feminine:Hong Konger": "Hong Konger",
                "feminine:Hong Kongers": "Hong Kongers",
                "feminine:Indian": "Indian",
                "feminine:Indonesian": "Indonesian",
                "feminine:Japanese": "Japanese",
                "feminine:Malaysian": "Malaysian",
                "feminine:Mandarin": "Mandarin",
                "feminine:Mongolian": "Mongolian",
                "feminine:Newest": "Newest",
                "feminine:Russian": "Russian",
                "feminine:Singaporean": "Singaporean",
                "feminine:South Korean": "South Korean",
                "feminine:Taiwanese": "Taiwanese",
                "feminine:Thai": "Thai",
                "feminine:Vietnamese": "Vietnamese",
                "filter:Arabic": "Arabic",
                "filter:Brazil": "Brazil",
                "filter:Chinese (Sim.)": "Chinese (Sim.)",
                "filter:Chinese (Trad.)": "Chinese (Trad.)",
                "filter:Czech": "Czech",
                "filter:Danish": "Danish",
                "filter:Dutch": "Dutch",
                "filter:English": "English",
                "filter:Finnish": "Finnish",
                "filter:Greek": "Greek",
                "filter:Hebrew": "Hebrew",
                "filter:Hungarian": "Hungarian",
                "filter:Italian": "Italian",
                "filter:Norwegian": "Norwegian",
                "filter:Polish": "Polish",
                "filter:Portuguese": "Portuguese",
                "filter:Serbian": "Serbian",
                "filter:Slovak": "Slovak",
                "filter:Spanish": "Spanish",
                "filter:Swedish": "Swedish",
                "filter:Turkish": "Turkish",
                "masculine:American": "American",
                "masculine:Australian": "Australian",
                "masculine:British": "British",
                "masculine:Cambodian": "Cambodian",
                "masculine:Canadian": "Canadian",
                "masculine:Chinese": "Chinese",
                "masculine:English": "English",
                "masculine:Filipino": "Filipino",
                "masculine:French": "French",
                "masculine:German": "German",
                "masculine:Ghanaian": "Ghanaian",
                "masculine:Hong Konger": "Hong Konger",
                "masculine:Hong Kongers": "Hong Kongers",
                "masculine:Indian": "Indian",
                "masculine:Indonesian": "Indonesian",
                "masculine:Japanese": "Japanese",
                "masculine:Malaysian": "Malaysian",
                "masculine:Mandarin": "Mandarin",
                "masculine:Mongolian": "Mongolian",
                "masculine:Newest": "Newest",
                "masculine:Russian": "Russian",
                "masculine:Singaporean": "Singaporean",
                "masculine:South Korean": "South Korean",
                "masculine:Taiwanese": "Taiwanese",
                "masculine:Thai": "Thai",
                "masculine:Vietnamese": "Vietnamese",
                "{count} Vote": ["{count} Vote", "{count} Votes"],
                "{votes} vote remaining!": ["{votes} vote remaining!", "{votes} votes remaining!"]
            },
            Y = {
                "1 change": ["1 cambio", "{count} cambios"],
                "1 cup of coffee monthly": ["1 taza de café al mes", "{count} tazas de café al mes"],
                "1 cup of coffee yearly": ["1 taza de café al año", "{count} tazas de café al año"],
                "1 day": ["1 día", "{count} días"],
                Action: "Acción",
                Adaptation: "Adaptación",
                Adventure: "Aventuras",
                All: "Todos",
                "All Languages": "Todos los idiomas",
                Alphabetical: "Alfabéticamente",
                American: "Americano",
                Animals: "Animales",
                Arabic: "Árabe",
                Australian: "Australiano",
                British: "Británica",
                Business: "Negocios",
                "Buy 1 Cup of Coffee": ["Comprar 1 taza de café", "Comprar {count} tazas de café"],
                Cambodian: "Camboyano",
                Canadian: "Canadiense",
                Cantonese: "Cantonés",
                China: "China",
                Chinese: "Chino",
                "Chinese (Sim.)": "Chino (simplificado)",
                "Chinese (Trad.)": "Chino (trad.)",
                "Chinese Drama": "Drama chino",
                "Chinese Drama Special": "Especial de drama chino",
                "Chinese Movie": "Película china",
                "Chinese Special": "Especial chino",
                "Chinese TV Show": "Programa de TV chino",
                Comedy: "Comedia",
                Compilation: "Recopilación",
                Completed: "Visto",
                Crime: "Crimen",
                "Currently watching": "Viendo",
                Czech: "Checo",
                Danish: "Danés",
                Detective: "Detectives",
                Director: "Director",
                Documentary: "Documental",
                Drama: "Drama",
                "Drama Recaps": "Recapitulaciones de drama",
                "Drama Special": "Especial de drama",
                "Drama Special Status": "Estado del especial de drama",
                "Drama Status": "Estado del drama",
                Dramas: "Dramas",
                Dutch: "Holandés",
                Editorials: "Editoriales",
                English: "Inglés",
                Family: "Familia",
                Fantasy: "Fantasía",
                Female: "Mujer",
                Filipino: "Filipina",
                "Filipino Drama": "Drama filipino",
                "Filipino Drama Special": "Especial de Drama filipino",
                "Filipino Movie": "Película filipina",
                "Filipino Special": "Especial filipino",
                "Filipino TV Show": "Programa de TV filipino",
                Finnish: "Finlandés",
                Food: "Comida",
                French: "Francés",
                Friendship: "Amistad",
                German: "Alemán",
                Ghanaian: "Ghanés",
                Greek: "Griego",
                Guest: "Visita",
                "Guest Role": "Invitado",
                Hebrew: "Hebreo",
                Historical: "Histórico",
                "Hong Kong": "Hong Kong",
                "Hong Kong Drama": "Drama hongkonés",
                "Hong Kong Drama Special": "Especial de drama hongkonés",
                "Hong Kong Movie": "Película hongkonesa",
                "Hong Kong Special": "Especial hongkonés",
                "Hong Kong TV Show": "Programa de TV hongkonés",
                "Hong Konger": "Hongkonés",
                "Hong Kongers": "Hongkoneses",
                Horror: "Terror",
                Hungarian: "Húngaro",
                Indian: "Indio",
                Indonesian: "Indonesio",
                Interviews: "Entrevistas",
                Investigation: "Investigación",
                Italian: "Italiano",
                Japan: "Japón",
                Japanese: "Japonés",
                "Japanese Drama": "Drama japonés",
                "Japanese Drama Special": "Especial de drama japonés",
                "Japanese Movie": "Película japonesa",
                "Japanese Special": "Especial Japonés",
                "Japanese TV Show": "Programa de TV japonés",
                Korean: "Coreano",
                "Korean Drama": "Drama coreano",
                "Korean Drama Special": "Especial de drama coreano",
                "Korean Movie": "Película coreana",
                "Korean Special": "Especial coreano",
                "Korean TV Show": "Programa de TV coreano",
                Law: "Legal",
                Life: "Vida",
                "MDL News": "Noticias de MDL",
                "Main Host": "Anfitrión principal",
                "Main Role": "Papel principal",
                Malaysian: "Malasio",
                Male: "Hombre",
                Mandarin: "Mandarín",
                Manga: "Manga",
                Martial: "Artes marciales",
                "Martial Arts": "Artes marciales",
                Mature: "Maduro",
                Medical: "Médico",
                Melodrama: "Melodrama",
                Military: "Militar",
                Mongolian: "Mongol",
                "Most Popular": "Más populares",
                "Most Recent": "Últimas",
                Movie: "Película",
                "Movie Status": "Estado de la película",
                Movies: "Películas",
                Music: "Música",
                Mystery: "Misterio",
                News: "Noticias",
                Norwegian: "Noruego",
                "Not Interested": "Sin interés",
                "On-hold": "En pausa",
                Ongoing: "En curso",
                "Parent Story": "Historia originaria",
                Philippines: "Filipinas",
                "Plan to watch": "Por ver",
                Polish: "Polaco",
                Political: "Político",
                Popularity: "Popularidad",
                Prequel: "Precuela",
                Psychological: "Psicológico",
                "Publish Date": "Fecha de publicación",
                "Recently Added": "Añadido recientemente",
                "Regular Member": "Miembro regular",
                "Release Date": "Fecha de estreno",
                Relevance: "Relevancia",
                Remake: "Refundición",
                Romance: "Romance",
                Russian: "Rusa",
                School: "Escuela",
                Sci: "Ciencia",
                "Sci-Fi": "Ciencia ficción",
                "Sci-fi": "Ciencia ficción",
                Screenwriter: "Guionista",
                "Screenwriter & Director": "Guionista y Director",
                Sequel: "Secuela",
                Serbian: "Serbio",
                "Side Story": "Historia Paralela",
                Singaporean: "Singapurense",
                Sitcom: "Comedia",
                Slovak: "Eslovaco",
                "South Korea": "Corea del Sur",
                "South Korean": "Surcoreano",
                Spanish: "Español",
                Spinoff: "Historia Derivada",
                Sports: "Deportes",
                Status: "Estado",
                Supernatural: "Sobrenatural",
                "Support Role": "Papel secundario",
                Suspense: "Intriga",
                Swedish: "Sueco",
                "TV Show": "Programa de TV",
                "TV Show Status": "Estado del programa",
                "TV Shows": "Dramas",
                Taiwan: "Taiwán",
                Taiwanese: "Taiwanés",
                "Taiwanese Drama": "Drama taiwanés",
                "Taiwanese Drama Special": "Especial de drama taiwanés",
                "Taiwanese Movie": "Película taiwanesa",
                "Taiwanese Special": "Especial taiwanés",
                Thai: "Tailandés",
                "Thai Drama": "Drama tailandés",
                "Thai Drama Special": "Especial de drama tailandés",
                "Thai Movie": "Película tailandesa",
                "Thai Special": "Especial tailandés",
                "Thai TV Show": "Programa de TV tailandés",
                Thailand: "Tailandia",
                Thriller: "Thriller",
                Tokusatsu: "Tokusatsu",
                "Top Rated": "Mejor valorados",
                Tragedy: "Tragedia",
                Turkish: "Turco",
                Unknown: "Desconocido",
                Upcoming: "Próximamente",
                Vampire: "Vampiros",
                Vietnamese: "Vietnamita",
                War: "Guerra",
                Western: "Oeste",
                Wuxia: "Wuxia",
                "You have rated 1 title": ["Has calificado 1 título", "Has calificado {count} títulos"],
                "Your VIP subscription will automatically renew on {date} and you'll be charged {amount}.": "Tu suscripción VIP se renovará automáticamente el {date} y se te cobrará {amount}.",
                Youth: "Juventud",
                Zombies: "Zombis",
                "feminine:American": "Estadounidense",
                "feminine:Australian": "Australiana",
                "feminine:British": "Británica",
                "feminine:Cambodian": "Camboyana",
                "feminine:Canadian": "Canadiense",
                "feminine:Chinese": "China",
                "feminine:English": "Británica",
                "feminine:Filipino": "Filipina",
                "feminine:French": "Francesa",
                "feminine:German": "Alemana",
                "feminine:Ghanaian": "Ghanesa",
                "feminine:Hong Konger": "Hongkonesa",
                "feminine:Hong Kongers": "Hongkonesas",
                "feminine:Indian": "India",
                "feminine:Indonesian": "Indonesia",
                "feminine:Japanese": "Japonesa",
                "feminine:Malaysian": "Malasia",
                "feminine:Mandarin": "China",
                "feminine:Mongolian": "Mongola",
                "feminine:Newest": "Últimas",
                "feminine:Russian": "Rusa",
                "feminine:Singaporean": "Singapurense",
                "feminine:South Korean": "Surcoreana",
                "feminine:Taiwanese": "Taiwanesa",
                "feminine:Thai": "Tailandesa",
                "feminine:Vietnamese": "Vietnamita",
                "filter:Arabic": "árabe",
                "filter:Brazil": "brasil",
                "filter:Chinese (Sim.)": "chino (sim.)",
                "filter:Chinese (Trad.)": "chino (trad.)",
                "filter:Czech": "checo",
                "filter:Danish": "danés",
                "filter:Dutch": "holandés",
                "filter:English": "inglés",
                "filter:Finnish": "finlandés",
                "filter:Greek": "griego",
                "filter:Hebrew": "hebreo",
                "filter:Hungarian": "húngaro",
                "filter:Italian": "italiano",
                "filter:Norwegian": "noruego",
                "filter:Polish": "polaco",
                "filter:Portuguese": "portugués",
                "filter:Serbian": "serbio",
                "filter:Slovak": "eslovaco",
                "filter:Spanish": "español",
                "filter:Swedish": "sueco",
                "filter:Turkish": "turco",
                "masculine:American": "Estadounidense",
                "masculine:Australian": "Australiano",
                "masculine:British": "Británico",
                "masculine:Cambodian": "Camboyano",
                "masculine:Canadian": "Canadiense",
                "masculine:Chinese": "Chino",
                "masculine:English": "Británico",
                "masculine:Filipino": "Filipino",
                "masculine:French": "Francés",
                "masculine:German": "Alemán",
                "masculine:Ghanaian": "Ghanés",
                "masculine:Hong Konger": "Hongkonés",
                "masculine:Hong Kongers": "Hongkoneses",
                "masculine:Indian": "Indio",
                "masculine:Indonesian": "Indonesio",
                "masculine:Japanese": "Japonés",
                "masculine:Malaysian": "Malasio",
                "masculine:Mandarin": "Chino",
                "masculine:Mongolian": "Mongol",
                "masculine:Newest": "Últimos",
                "masculine:Russian": "Ruso",
                "masculine:Singaporean": "Singapurense",
                "masculine:South Korean": "Surcoreano",
                "masculine:Taiwanese": "Taiwanés",
                "masculine:Thai": "Tailandés",
                "masculine:Vietnamese": "Vietnamita",
                "{count} Vote": ["{count} voto", "{count} votos"],
                "{votes} vote remaining!": ["¡Queda {votes} voto!", "¡Quedan {votes} votos!"]
            },
            B = {
                "1 change": ["Alteração", "Alterações"],
                "1 cup of coffee monthly": ["1 xícara de café por mês", "{count} xícaras de café por mês"],
                "1 cup of coffee yearly": ["1 xícara de café por ano", "{count} xícaras de café por ano"],
                "1 day": ["1 dia", "{count} dias"],
                Action: "Ação",
                Adaptation: "Adaptação",
                Adventure: "Aventura",
                All: "Tudo",
                "All Languages": "Todos os idiomas",
                Alphabetical: "Alfabético",
                American: "Americano",
                Animals: "Animais",
                Arabic: "Árabe",
                Australian: "Australiano",
                British: "Britânico",
                Business: "Negócios",
                "Buy 1 Cup of Coffee": ["Compre 1 xícara de café", "Compre {count} xícaras de café"],
                Cambodian: "Cambojano",
                Canadian: "Canadense",
                Cantonese: "Cantonês",
                China: "China",
                Chinese: "Chinês",
                "Chinese (Sim.)": "Chinês (Sim.)",
                "Chinese (Trad.)": "Chinês (Trad.)",
                "Chinese Drama": "Drama chinês",
                "Chinese Drama Special": "Drama especial chinês",
                "Chinese Movie": "Filme Chinês",
                "Chinese Special": "Especial chinês",
                "Chinese TV Show": "Programa de TV Chinês",
                Comedy: "Comédia",
                Compilation: "Compilação",
                Completed: "Completados",
                Crime: "Crime",
                "Currently watching": "Assistindo atualmente",
                Czech: "Checo",
                Danish: "Dinamarquês",
                Detective: "Detetive",
                Director: "Diretor",
                Documentary: "Documentário",
                Drama: "Drama",
                "Drama Recaps": "Resumo dos episodios",
                "Drama Special": "Mini drama",
                "Drama Special Status": "Status do mini drama",
                "Drama Status": "Status do drama",
                Dramas: "Dramas",
                Dutch: "Holandês",
                Editorials: "Editoriais",
                English: "Inglês",
                Family: "Família",
                Fantasy: "Fantasia",
                Female: "Feminino",
                Filipino: "Filipino",
                "Filipino Drama": "Drama filipino",
                "Filipino Drama Special": "Drama Especial Filipino",
                "Filipino Movie": "Filme Filipino",
                "Filipino Special": "Especial Filipino",
                "Filipino TV Show": "Programa de TV Filipino",
                Finnish: "Finlandês",
                Food: "Comida",
                French: "Francês",
                Friendship: "Amizade",
                German: "Alemão",
                Ghanaian: "Ganense",
                Greek: "Grego",
                Guest: "Convidado",
                "Guest Role": "Convidado",
                Hebrew: "Hebraico",
                Historical: "Histórico",
                "Hong Kong": "Hong Kong",
                "Hong Kong Drama": "Drama de Hong Kong",
                "Hong Kong Drama Special": "Mini drama de Hong Kong",
                "Hong Kong Movie": "Filme de Hong Kong",
                "Hong Kong Special": "Especial de Hong Kong",
                "Hong Kong TV Show": "Programa de TV de Hong Kong",
                "Hong Konger": "Honconguês",
                "Hong Kongers": "Honcongueses",
                Horror: "Terror",
                Hungarian: "Húngaro",
                Indian: "Indiano",
                Indonesian: "Indonésio",
                Interviews: "Entrevistas",
                Investigation: "Investigação",
                Italian: "Italiano",
                Japan: "Japão",
                Japanese: "Japonês",
                "Japanese Drama": "Drama japonês",
                "Japanese Drama Special": "Mini drama japonês",
                "Japanese Movie": "Filme japonês",
                "Japanese Special": "Especial Japonês",
                "Japanese TV Show": "Programa de TV Japonês",
                Korean: "Coreano",
                "Korean Drama": "Drama coreano",
                "Korean Drama Special": "Mini drama coreano",
                "Korean Movie": "Filme coreano",
                "Korean Special": "Especial Coreano",
                "Korean TV Show": "Programa de TV Coreano",
                Law: "Direito",
                Life: "Vida",
                "MDL News": "Notícias MDL",
                "Main Host": "Anfitrião Principal",
                "Main Role": "Papel Principal",
                Malaysian: "Malaio",
                Male: "Masculino",
                Mandarin: "Mandarim",
                Manga: "Mangá",
                Martial: "Marcial",
                "Martial Arts": "Artes Marciais",
                Mature: "Adulto",
                Medical: "Médico",
                Melodrama: "Melodrama",
                Military: "Militar",
                Mongolian: "Mongol",
                "Most Popular": "Mais populares",
                "Most Recent": "Mais Recente",
                Movie: "Filme",
                "Movie Status": "Status do Filme",
                Movies: "Filmes",
                Music: "Musical",
                Mystery: "Mistério",
                News: "Notícias",
                Norwegian: "Norueguês",
                "Not Interested": "Não Me Interessa",
                "On-hold": "Em espera",
                Ongoing: "Em andamento",
                "Parent Story": "História de Origem",
                Philippines: "Filipinas",
                "Plan to watch": "Planejo assistir",
                Polish: "Polonês",
                Political: "Político",
                Popularity: "Popularidade",
                Prequel: "Prequela",
                Psychological: "Psicológico",
                "Publish Date": "Data de Publicação",
                "Recently Added": "Adicionados recentemente",
                "Regular Member": "Membro regular",
                "Release Date": "Data de Lançamento",
                Relevance: "Relevância",
                Remake: "Remake",
                Romance: "Romance",
                Russian: "Russo",
                School: "Escola",
                Sci: "Sci",
                "Sci-Fi": "Ficção científica",
                "Sci-fi": "Ficção científica",
                Screenwriter: "Roteirista",
                "Screenwriter & Director": "Roteirista e Diretor",
                Sequel: "Sequência",
                Serbian: "Sérvio",
                "Side Story": "História Paralela",
                Singaporean: "Singapurense",
                Sitcom: "Sitcom",
                Slovak: "Eslovaco",
                "South Korea": "Coreia do Sul",
                "South Korean": "Sul-coreano",
                Spanish: "Espanhol",
                Spinoff: "Spinoff",
                Sports: "Esportes",
                Status: "Status",
                Supernatural: "Sobrenatural",
                "Support Role": "Papel Secundário",
                Suspense: "Suspense",
                Swedish: "Sueco",
                "TV Show": "Programa de TV",
                "TV Show Status": "Status do Programa de TV",
                "TV Shows": "Programas de TV",
                Taiwan: "Taiwan",
                Taiwanese: "Taiwanês",
                "Taiwanese Drama": "Drama taiwanês",
                "Taiwanese Drama Special": "Mini drama taiwanês",
                "Taiwanese Movie": "Filme taiwanês",
                "Taiwanese Special": "Especial Taiwanês",
                Thai: "Tailandês",
                "Thai Drama": "Drama tailandês",
                "Thai Drama Special": "Mini drama tailandês",
                "Thai Movie": "Filme Tailandês",
                "Thai Special": "Especial Tailandês",
                "Thai TV Show": "Programa de TV Tailandês",
                Thailand: "Tailândia",
                Thriller: "Thriller",
                Tokusatsu: "Tokusatsu",
                "Top Rated": "Melhores",
                Tragedy: "Tragédia",
                Turkish: "Turco",
                Unknown: "Desconhecido",
                Upcoming: "Próximos",
                Vampire: "Vampiro",
                Vietnamese: "Vietnamita",
                War: "Guerra",
                Western: "Ocidental",
                Wuxia: "Wuxia",
                "You have rated 1 title": ["Você avaliou 1 título", "Você avaliou {count} títulos"],
                "Your VIP subscription will automatically renew on {date} and you'll be charged {amount}.": "Sua assinatura VIP será automaticamente renovada em {date} e você será cobrado no valor de {amount}",
                Youth: "Juventude",
                Zombies: "Zumbis",
                "feminine:American": "Americana",
                "feminine:Australian": "Australiana",
                "feminine:British": "Britânica",
                "feminine:Cambodian": "Cambojana",
                "feminine:Canadian": "Canadense",
                "feminine:Chinese": "Chinesa",
                "feminine:English": "Inglesa",
                "feminine:Filipino": "Filipina",
                "feminine:French": "Francesa",
                "feminine:German": "Alemã",
                "feminine:Ghanaian": "Ganesa",
                "feminine:Hong Konger": "Honconguesa",
                "feminine:Hong Kongers": "Honconguesas",
                "feminine:Indian": "Indiana",
                "feminine:Indonesian": "Indonésia",
                "feminine:Japanese": "Japonesa",
                "feminine:Malaysian": "Malaia",
                "feminine:Mandarin": "Mandarim",
                "feminine:Mongolian": "Mongol",
                "feminine:Newest": "Mais novas",
                "feminine:Russian": "Russa",
                "feminine:Singaporean": "Singapurense",
                "feminine:South Korean": "Sul-coreana",
                "feminine:Taiwanese": "Taiwanesa",
                "feminine:Thai": "Tailandesa",
                "feminine:Vietnamese": "Vietnamita",
                "filter:Arabic": "Árabe",
                "filter:Brazil": "Brasil",
                "filter:Chinese (Sim.)": "Chinês (simplificado)",
                "filter:Chinese (Trad.)": "Chinês (Tradicional)",
                "filter:Czech": "Tcheco/Checo",
                "filter:Danish": "Dinamarquês",
                "filter:Dutch": "Holandês",
                "filter:English": "Inglês",
                "filter:Finnish": "Finlandês",
                "filter:Greek": "Grego",
                "filter:Hebrew": "Hebreu/Hebraico",
                "filter:Hungarian": "Húngaro",
                "filter:Italian": "Italiano",
                "filter:Norwegian": "Norueguês",
                "filter:Polish": "Polonês",
                "filter:Portuguese": "Português",
                "filter:Serbian": "Sérvio",
                "filter:Slovak": "Eslovaco",
                "filter:Spanish": "Espanhol",
                "filter:Swedish": "Sueco",
                "filter:Turkish": "Turco",
                "masculine:American": "Americano",
                "masculine:Australian": "Australiano",
                "masculine:British": "Britânico",
                "masculine:Cambodian": "Cambojano",
                "masculine:Canadian": "Canadense",
                "masculine:Chinese": "Chinês",
                "masculine:English": "Inglês",
                "masculine:Filipino": "Filipino",
                "masculine:French": "Francês",
                "masculine:German": "Alemão",
                "masculine:Ghanaian": "Ganês",
                "masculine:Hong Konger": "Honconguês",
                "masculine:Hong Kongers": "Honcongueses",
                "masculine:Indian": "Indiano",
                "masculine:Indonesian": "Indonésio",
                "masculine:Japanese": "Japonês",
                "masculine:Malaysian": "Malaio",
                "masculine:Mandarin": "Mandarim",
                "masculine:Mongolian": "Mongol",
                "masculine:Newest": "Mais novos",
                "masculine:Russian": "Russo",
                "masculine:Singaporean": "Singapurense",
                "masculine:South Korean": "Sul-coreano",
                "masculine:Taiwanese": "Taiwanês",
                "masculine:Thai": "Tailandês",
                "masculine:Vietnamese": "Vietnamita",
                "{count} Vote": ["{count} Voto", "{count} Votos"],
                "{votes} vote remaining!": ["{votes} voto restante!", "{votes} votos restantes!"]
            },
            X = {
                "1 change": ["1 verandering", "{count} veranderingen"],
                "1 cup of coffee monthly": ["Maandelijks 1 kopje koffie", "Maandelijks {count} koppen koffie"],
                "1 cup of coffee yearly": ["Jaarlijks 1 kopje koffie", "{count} kopjes koffie jaarlijks"],
                "1 day": ["1 dag", "{count} dagen"],
                Action: "Actie",
                Adaptation: "Verfilming",
                Adventure: "Avontuur",
                All: "Alle",
                "All Languages": "Alle talen",
                Alphabetical: "Alfabetisch",
                American: "Amerikaans",
                Animals: "Dieren",
                Arabic: "Arabisch",
                Australian: "Australisch",
                British: "Brits",
                Business: "Business",
                "Buy 1 Cup of Coffee": ["Koop 1 kop koffie", "Koop {count} kopjes koffie"],
                Cambodian: "Cambodjaans",
                Canadian: "Canadees",
                Cantonese: "Cantonese",
                China: "China",
                Chinese: "Chinees",
                "Chinese (Sim.)": "Chinees (Sim.)",
                "Chinese (Trad.)": "Chinees (Trad.)",
                "Chinese Drama": "Chinees drama",
                "Chinese Drama Special": "Chinese Drama Special",
                "Chinese Movie": "Chinese Films",
                "Chinese Special": "Chinees Special",
                "Chinese TV Show": "Chinees tv-programma",
                Comedy: "Komedie",
                Compilation: "Compilatie",
                Completed: "Voltooid",
                Crime: "Misdaad",
                "Currently watching": "Momenteel aan het kijken",
                Czech: "Tsjechisch",
                Danish: "Deens",
                Detective: "Detective",
                Director: "Regisseur",
                Documentary: "Documentaire",
                Drama: "Drama",
                "Drama Recaps": "Drama-samenvattingen",
                "Drama Special": "Drama Special",
                "Drama Special Status": "Drama Special Status",
                "Drama Status": "Drama Status",
                Dramas: "Drama's",
                Dutch: "Nederlands",
                Editorials: "Editorials",
                English: "Engels",
                Family: "Familie",
                Fantasy: "Fantasie",
                Female: "Vrouw",
                Filipino: "Filippijn",
                "Filipino Drama": "Filipijns drama",
                "Filipino Drama Special": "Filipijnse Drama Special",
                "Filipino Movie": "Filipijnse film",
                "Filipino Special": "Filipijnse Special",
                "Filipino TV Show": "Filipijnse tv-show",
                Finnish: "Fins",
                Food: "Eten",
                French: "Frans",
                Friendship: "Vriendschap",
                German: "Duits",
                Ghanaian: "Ghanees",
                Greek: "Grieks",
                Guest: "Gast",
                "Guest Role": "Gastrol",
                Hebrew: "Hebreeuws",
                Historical: "Historisch",
                "Hong Kong": "Hong Kong",
                "Hong Kong Drama": "Hong Kong-drama",
                "Hong Kong Drama Special": "Hong Kong Drama Special",
                "Hong Kong Movie": "Hong Kong-film",
                "Hong Kong Special": "Hong Kong Special",
                "Hong Kong TV Show": "Hong Kong tv-programma",
                "Hong Konger": "Hong Konger",
                "Hong Kongers": "Hong Kongers",
                Horror: "Horror",
                Hungarian: "Hongaars",
                Indian: "Indisch",
                Indonesian: "Indonesisch",
                Interviews: "Interviews",
                Investigation: "Onderzoek",
                Italian: "Italiaans",
                Japan: "Japan",
                Japanese: "Japans",
                "Japanese Drama": "Japans drama",
                "Japanese Drama Special": "Japanse Drama Special",
                "Japanese Movie": "Japanse film",
                "Japanese Special": "Japanse Special",
                "Japanese TV Show": "Japanse TV-Show",
                Korean: "Koreaans",
                "Korean Drama": "Koreaans drama",
                "Korean Drama Special": "Koreaanse Drama Special",
                "Korean Movie": "Koreaanse film",
                "Korean Special": "Koreaanse Special",
                "Korean TV Show": "Koreaans tv-programma",
                Law: "Recht",
                Life: "Leven",
                "MDL News": "MDL Nieuws",
                "Main Host": "Presentator",
                "Main Role": "Hoofdrol",
                Malaysian: "Maleisisch",
                Male: "Man",
                Mandarin: "Mandarijn",
                Manga: "Manga",
                Martial: "krijgshaftig",
                "Martial Arts": "Vechtsporten",
                Mature: "Volwassen",
                Medical: "Medisch",
                Melodrama: "Melodrama",
                Military: "Leger",
                Mongolian: "Mongools",
                "Most Popular": "Meest populair",
                "Most Recent": "Meest recente",
                Movie: "Film",
                "Movie Status": "Filmstatus",
                Movies: "Films",
                Music: "Muziek",
                Mystery: "Mysterie",
                News: "Nieuws",
                Norwegian: "Noors",
                "Not Interested": "Niet geïnteresseerd",
                "On-hold": "In de wacht",
                Ongoing: "Lopend",
                "Parent Story": "Parent Story",
                Philippines: "Filippijnen",
                "Plan to watch": "Van plan te kijken",
                Polish: "Pools",
                Political: "Politiek",
                Popularity: "populariteit",
                Prequel: "Prequel",
                Psychological: "psychologisch",
                "Publish Date": "Publiceer datum",
                "Recently Added": "Recent toegevoegd",
                "Regular Member": "Normale gebruiker",
                "Release Date": "Publicatiedatum",
                Relevance: "Relevantie",
                Remake: "Remake",
                Romance: "Romance",
                Russian: "Russisch",
                School: "School",
                Sci: "Sci",
                "Sci-Fi": "Sci-Fi",
                "Sci-fi": "Sci-fi",
                Screenwriter: "Scenarioschrijver",
                "Screenwriter & Director": "Scenarioschrijver & regisseur",
                Sequel: "Sequel",
                Serbian: "Servisch",
                "Side Story": "Zij verhaal",
                Singaporean: "Singaporees",
                Sitcom: "Sitcom",
                Slovak: "Slowaaks",
                "South Korea": "Zuid-Korea",
                "South Korean": "Zuid-Koreaans",
                Spanish: "Spaans",
                Spinoff: "Spin-off",
                Sports: "Sport",
                Status: "Status",
                Supernatural: "Bovennatuurlijk",
                "Support Role": "Bijrol",
                Suspense: "Suspense",
                Swedish: "Zweeds",
                "TV Show": "Tv programma",
                "TV Show Status": "Status tv-programma",
                "TV Shows": "Tv programma's",
                Taiwan: "Taiwan",
                Taiwanese: "Taiwanees",
                "Taiwanese Drama": "Taiwanese Drama",
                "Taiwanese Drama Special": "Taiwanese Drama Special",
                "Taiwanese Movie": "Taiwanese film",
                "Taiwanese Special": "Taiwanese Special",
                Thai: "Thais",
                "Thai Drama": "Thais drama",
                "Thai Drama Special": "Thai Drama Special",
                "Thai Movie": "Thaise film",
                "Thai Special": "Thaise Special",
                "Thai TV Show": "Thaise tv-programma",
                Thailand: "Thailand",
                Thriller: "Thriller",
                Tokusatsu: "Speciale effecten",
                "Top Rated": "Best beoordeeld",
                Tragedy: "Tragedie",
                Turkish: "Turks",
                Unknown: "Onbekend",
                Upcoming: "Aankomende",
                Vampire: "Vampier",
                Vietnamese: "Vietnamees",
                War: "Oorlog",
                Western: "Westers",
                Wuxia: "Wuxia",
                "You have rated 1 title": ["U heeft 1 titel beoordeeld", "U heeft {count} titels beoordeeld"],
                "Your VIP subscription will automatically renew on {date} and you'll be charged {amount}.": "Uw VIP-abonnement wordt automatisch verlengd op {date} en er wordt {bedrag} kosten in rekening gebracht.",
                Youth: "Jeugd",
                Zombies: "Zombies",
                "feminine:American": "Amerikaans",
                "feminine:Australian": "Australisch",
                "feminine:British": "Brits",
                "feminine:Cambodian": "Cambodjaans",
                "feminine:Canadian": "Canadees",
                "feminine:Chinese": "chinese",
                "feminine:English": "Engelse",
                "feminine:Filipino": "Filipijns",
                "feminine:French": "Frans",
                "feminine:German": "Duits",
                "feminine:Ghanaian": "Ghanees",
                "feminine:Hong Konger": "Hong Konger",
                "feminine:Hong Kongers": "Hong Kongers",
                "feminine:Indian": "Indisch",
                "feminine:Indonesian": "Indonesisch",
                "feminine:Japanese": "Japans",
                "feminine:Malaysian": "Maleis",
                "feminine:Mandarin": "Mandarijn",
                "feminine:Mongolian": "Mongools",
                "feminine:Newest": "Nieuwste",
                "feminine:Russian": "Russisch",
                "feminine:Singaporean": "Singaporees",
                "feminine:South Korean": "Zuid-Koreaans",
                "feminine:Taiwanese": "Taiwanese",
                "feminine:Thai": "Thais",
                "feminine:Vietnamese": "Vietnamees",
                "filter:Arabic": "Arabisch",
                "filter:Brazil": "Brazilië",
                "filter:Chinese (Sim.)": "Chinees (Sim.)",
                "filter:Chinese (Trad.)": "Chinees (Trad.)",
                "filter:Czech": "Tsjechisch",
                "filter:Danish": "Deens",
                "filter:Dutch": "Nederlands",
                "filter:English": "Engels",
                "filter:Finnish": "Fins",
                "filter:Greek": "Grieks",
                "filter:Hebrew": "Hebreeuws",
                "filter:Hungarian": "Hongaars",
                "filter:Italian": "Italiaans",
                "filter:Norwegian": "Noors",
                "filter:Polish": "Pools",
                "filter:Portuguese": "Portugees",
                "filter:Serbian": "Servisch",
                "filter:Slovak": "Slowaaks",
                "filter:Spanish": "Spaans",
                "filter:Swedish": "Zweeds",
                "filter:Turkish": "Turks",
                "masculine:American": "Amerikaan",
                "masculine:Australian": "Australisch",
                "masculine:British": "Brits",
                "masculine:Cambodian": "Cambodjaanse",
                "masculine:Canadian": "Canadees",
                "masculine:Chinese": "Chinees",
                "masculine:English": "Engels",
                "masculine:Filipino": "Filippijn",
                "masculine:French": "Frans",
                "masculine:German": "Duitser",
                "masculine:Ghanaian": "Ghanees",
                "masculine:Hong Konger": "Hong Konger",
                "masculine:Hong Kongers": "Hong Kongers",
                "masculine:Indian": "Indisch",
                "masculine:Indonesian": "Indonesisch",
                "masculine:Japanese": "Japanse",
                "masculine:Malaysian": "Maleisisch",
                "masculine:Mandarin": "Mandarijn",
                "masculine:Mongolian": "Mongools",
                "masculine:Newest": "Nieuwste",
                "masculine:Russian": "Russisch",
                "masculine:Singaporean": "Singaporees",
                "masculine:South Korean": "Zuid-Koreaans",
                "masculine:Taiwanese": "Taiwanees",
                "masculine:Thai": "Thai",
                "masculine:Vietnamese": "Vietnamese",
                "{count} Vote": ["{count} stem", "{count} stemmen"],
                "{votes} vote remaining!": ["{votes} stem over!", "{votes} stemmen over!"]
            };
        y.default.use(K);
        var G = {
                es: Y,
                pt: B,
                nl: X,
                en: W
            },
            q = new K({
                locale: "en",
                fallbackLocale: "en",
                messages: G
            }),
            U = document.documentElement.lang;
        "en-US" == U && (U = "en"),
            function (e) {
                q.locale = e
            }(U);
        t.a = q
    },
    gsqX: function (e, t, a) {
        ! function (t, a) {
            e.exports = a()
        }(0, function () {
            "use strict";

            function e(e, t) {
                var a = [],
                    i = 0;
                if (e && !t && e instanceof Re) return e;
                if (e)
                    if ("string" == typeof e) {
                        var n, s, r = e.trim();
                        if (r.indexOf("<") >= 0 && r.indexOf(">") >= 0) {
                            var o = "div";
                            for (0 === r.indexOf("<li") && (o = "ul"), 0 === r.indexOf("<tr") && (o = "tbody"), 0 !== r.indexOf("<td") && 0 !== r.indexOf("<th") || (o = "tr"), 0 === r.indexOf("<tbody") && (o = "table"), 0 === r.indexOf("<option") && (o = "select"), s = Ie.createElement(o), s.innerHTML = r, i = 0; i < s.childNodes.length; i += 1) a.push(s.childNodes[i])
                        } else
                            for (n = t || "#" !== e[0] || e.match(/[ .<>:~]/) ? (t || Ie).querySelectorAll(e.trim()) : [Ie.getElementById(e.trim().split("#")[1])], i = 0; i < n.length; i += 1) n[i] && a.push(n[i])
                    } else if (e.nodeType || e === He || e === Ie) a.push(e);
                else if (e.length > 0 && e[0].nodeType)
                    for (i = 0; i < e.length; i += 1) a.push(e[i]);
                return new Re(a)
            }

            function t(e) {
                for (var t = [], a = 0; a < e.length; a += 1) - 1 === t.indexOf(e[a]) && t.push(e[a]);
                return t
            }

            function a(e) {
                var t = this;
                if (void 0 === e) return this;
                for (var a = e.split(" "), i = 0; i < a.length; i += 1)
                    for (var n = 0; n < this.length; n += 1) void 0 !== t[n].classList && t[n].classList.add(a[i]);
                return this
            }

            function i(e) {
                for (var t = this, a = e.split(" "), i = 0; i < a.length; i += 1)
                    for (var n = 0; n < this.length; n += 1) void 0 !== t[n].classList && t[n].classList.remove(a[i]);
                return this
            }

            function n(e) {
                return !!this[0] && this[0].classList.contains(e)
            }

            function s(e) {
                for (var t = this, a = e.split(" "), i = 0; i < a.length; i += 1)
                    for (var n = 0; n < this.length; n += 1) void 0 !== t[n].classList && t[n].classList.toggle(a[i]);
                return this
            }

            function r(e, t) {
                var a = arguments,
                    i = this;
                if (1 !== arguments.length || "string" != typeof e) {
                    for (var n = 0; n < this.length; n += 1)
                        if (2 === a.length) i[n].setAttribute(e, t);
                        else
                            for (var s in e) i[n][s] = e[s], i[n].setAttribute(s, e[s]);
                    return this
                }
                if (this[0]) return this[0].getAttribute(e)
            }

            function o(e) {
                for (var t = this, a = 0; a < this.length; a += 1) t[a].removeAttribute(e);
                return this
            }

            function l(e, t) {
                var a, i = this;
                if (void 0 !== t) {
                    for (var n = 0; n < this.length; n += 1) a = i[n], a.dom7ElementDataStorage || (a.dom7ElementDataStorage = {}), a.dom7ElementDataStorage[e] = t;
                    return this
                }
                if (a = this[0]) {
                    if (a.dom7ElementDataStorage && e in a.dom7ElementDataStorage) return a.dom7ElementDataStorage[e];
                    var s = a.getAttribute("data-" + e);
                    if (s) return s
                } else;
            }

            function c(e) {
                for (var t = this, a = 0; a < this.length; a += 1) {
                    var i = t[a].style;
                    i.webkitTransform = e, i.transform = e
                }
                return this
            }

            function d(e) {
                var t = this;
                "string" != typeof e && (e += "ms");
                for (var a = 0; a < this.length; a += 1) {
                    var i = t[a].style;
                    i.webkitTransitionDuration = e, i.transitionDuration = e
                }
                return this
            }

            function u() {
                function t(t) {
                    var a = t.target;
                    if (a) {
                        var i = t.target.dom7EventData || [];
                        if (i.indexOf(t) < 0 && i.unshift(t), e(a).is(l)) c.apply(a, i);
                        else
                            for (var n = e(a).parents(), s = 0; s < n.length; s += 1) e(n[s]).is(l) && c.apply(n[s], i)
                    }
                }

                function a(e) {
                    var t = e && e.target ? e.target.dom7EventData || [] : [];
                    t.indexOf(e) < 0 && t.unshift(e), c.apply(this, t)
                }
                for (var i, n = this, s = [], r = arguments.length; r--;) s[r] = arguments[r];
                var o = s[0],
                    l = s[1],
                    c = s[2],
                    d = s[3];
                "function" == typeof s[1] && (i = s, o = i[0], c = i[1], d = i[2], l = void 0), d || (d = !1);
                for (var u, p = o.split(" "), h = 0; h < this.length; h += 1) {
                    var f = n[h];
                    if (l)
                        for (u = 0; u < p.length; u += 1) {
                            var m = p[u];
                            f.dom7LiveListeners || (f.dom7LiveListeners = {}), f.dom7LiveListeners[m] || (f.dom7LiveListeners[m] = []), f.dom7LiveListeners[m].push({
                                listener: c,
                                proxyListener: t
                            }), f.addEventListener(m, t, d)
                        } else
                            for (u = 0; u < p.length; u += 1) {
                                var v = p[u];
                                f.dom7Listeners || (f.dom7Listeners = {}), f.dom7Listeners[v] || (f.dom7Listeners[v] = []), f.dom7Listeners[v].push({
                                    listener: c,
                                    proxyListener: a
                                }), f.addEventListener(v, a, d)
                            }
                }
                return this
            }

            function p() {
                for (var e, t = this, a = [], i = arguments.length; i--;) a[i] = arguments[i];
                var n = a[0],
                    s = a[1],
                    r = a[2],
                    o = a[3];
                "function" == typeof a[1] && (e = a, n = e[0], r = e[1], o = e[2], s = void 0), o || (o = !1);
                for (var l = n.split(" "), c = 0; c < l.length; c += 1)
                    for (var d = l[c], u = 0; u < this.length; u += 1) {
                        var p = t[u],
                            h = void 0;
                        if (!s && p.dom7Listeners ? h = p.dom7Listeners[d] : s && p.dom7LiveListeners && (h = p.dom7LiveListeners[d]), h && h.length)
                            for (var f = h.length - 1; f >= 0; f -= 1) {
                                var m = h[f];
                                r && m.listener === r ? (p.removeEventListener(d, m.proxyListener, o), h.splice(f, 1)) : r || (p.removeEventListener(d, m.proxyListener, o), h.splice(f, 1))
                            }
                    }
                return this
            }

            function h() {
                for (var e = this, t = [], a = arguments.length; a--;) t[a] = arguments[a];
                for (var i = t[0].split(" "), n = t[1], s = 0; s < i.length; s += 1)
                    for (var r = i[s], o = 0; o < this.length; o += 1) {
                        var l = e[o],
                            c = void 0;
                        try {
                            c = new He.CustomEvent(r, {
                                detail: n,
                                bubbles: !0,
                                cancelable: !0
                            })
                        } catch (e) {
                            c = Ie.createEvent("Event"), c.initEvent(r, !0, !0), c.detail = n
                        }
                        l.dom7EventData = t.filter(function (e, t) {
                            return t > 0
                        }), l.dispatchEvent(c), l.dom7EventData = [], delete l.dom7EventData
                    }
                return this
            }

            function f(e) {
                function t(s) {
                    if (s.target === this)
                        for (e.call(this, s), a = 0; a < i.length; a += 1) n.off(i[a], t)
                }
                var a, i = ["webkitTransitionEnd", "transitionend"],
                    n = this;
                if (e)
                    for (a = 0; a < i.length; a += 1) n.on(i[a], t);
                return this
            }

            function m(e) {
                if (this.length > 0) {
                    if (e) {
                        var t = this.styles();
                        return this[0].offsetWidth + parseFloat(t.getPropertyValue("margin-right")) + parseFloat(t.getPropertyValue("margin-left"))
                    }
                    return this[0].offsetWidth
                }
                return null
            }

            function v(e) {
                if (this.length > 0) {
                    if (e) {
                        var t = this.styles();
                        return this[0].offsetHeight + parseFloat(t.getPropertyValue("margin-top")) + parseFloat(t.getPropertyValue("margin-bottom"))
                    }
                    return this[0].offsetHeight
                }
                return null
            }

            function g() {
                if (this.length > 0) {
                    var e = this[0],
                        t = e.getBoundingClientRect(),
                        a = Ie.body,
                        i = e.clientTop || a.clientTop || 0,
                        n = e.clientLeft || a.clientLeft || 0,
                        s = e === He ? He.scrollY : e.scrollTop,
                        r = e === He ? He.scrollX : e.scrollLeft;
                    return {
                        top: t.top + s - i,
                        left: t.left + r - n
                    }
                }
                return null
            }

            function b() {
                return this[0] ? He.getComputedStyle(this[0], null) : {}
            }

            function y(e, t) {
                var a, i = this;
                if (1 === arguments.length) {
                    if ("string" != typeof e) {
                        for (a = 0; a < this.length; a += 1)
                            for (var n in e) i[a].style[n] = e[n];
                        return this
                    }
                    if (this[0]) return He.getComputedStyle(this[0], null).getPropertyValue(e)
                }
                if (2 === arguments.length && "string" == typeof e) {
                    for (a = 0; a < this.length; a += 1) i[a].style[e] = t;
                    return this
                }
                return this
            }

            function w(e) {
                var t = this;
                if (!e) return this;
                for (var a = 0; a < this.length; a += 1)
                    if (!1 === e.call(t[a], a, t[a])) return t;
                return this
            }

            function C(e) {
                var t = this;
                if (void 0 === e) return this[0] ? this[0].innerHTML : void 0;
                for (var a = 0; a < this.length; a += 1) t[a].innerHTML = e;
                return this
            }

            function S(e) {
                var t = this;
                if (void 0 === e) return this[0] ? this[0].textContent.trim() : null;
                for (var a = 0; a < this.length; a += 1) t[a].textContent = e;
                return this
            }

            function T(t) {
                var a, i, n = this[0];
                if (!n || void 0 === t) return !1;
                if ("string" == typeof t) {
                    if (n.matches) return n.matches(t);
                    if (n.webkitMatchesSelector) return n.webkitMatchesSelector(t);
                    if (n.msMatchesSelector) return n.msMatchesSelector(t);
                    for (a = e(t), i = 0; i < a.length; i += 1)
                        if (a[i] === n) return !0;
                    return !1
                }
                if (t === Ie) return n === Ie;
                if (t === He) return n === He;
                if (t.nodeType || t instanceof Re) {
                    for (a = t.nodeType ? [t] : t, i = 0; i < a.length; i += 1)
                        if (a[i] === n) return !0;
                    return !1
                }
                return !1
            }

            function _() {
                var e, t = this[0];
                if (t) {
                    for (e = 0; null !== (t = t.previousSibling);) 1 === t.nodeType && (e += 1);
                    return e
                }
            }

            function x(e) {
                if (void 0 === e) return this;
                var t, a = this.length;
                return e > a - 1 ? new Re([]) : e < 0 ? (t = a + e, new Re(t < 0 ? [] : [this[t]])) : new Re([this[e]])
            }

            function E() {
                for (var e = this, t = [], a = arguments.length; a--;) t[a] = arguments[a];
                for (var i, n = 0; n < t.length; n += 1) {
                    i = t[n];
                    for (var s = 0; s < this.length; s += 1)
                        if ("string" == typeof i) {
                            var r = Ie.createElement("div");
                            for (r.innerHTML = i; r.firstChild;) e[s].appendChild(r.firstChild)
                        } else if (i instanceof Re)
                        for (var o = 0; o < i.length; o += 1) e[s].appendChild(i[o]);
                    else e[s].appendChild(i)
                }
                return this
            }

            function M(e) {
                var t, a, i = this;
                for (t = 0; t < this.length; t += 1)
                    if ("string" == typeof e) {
                        var n = Ie.createElement("div");
                        for (n.innerHTML = e, a = n.childNodes.length - 1; a >= 0; a -= 1) i[t].insertBefore(n.childNodes[a], i[t].childNodes[0])
                    } else if (e instanceof Re)
                    for (a = 0; a < e.length; a += 1) i[t].insertBefore(e[a], i[t].childNodes[0]);
                else i[t].insertBefore(e, i[t].childNodes[0]);
                return this
            }

            function k(t) {
                return new Re(this.length > 0 ? t ? this[0].nextElementSibling && e(this[0].nextElementSibling).is(t) ? [this[0].nextElementSibling] : [] : this[0].nextElementSibling ? [this[0].nextElementSibling] : [] : [])
            }

            function P(t) {
                var a = [],
                    i = this[0];
                if (!i) return new Re([]);
                for (; i.nextElementSibling;) {
                    var n = i.nextElementSibling;
                    t ? e(n).is(t) && a.push(n) : a.push(n), i = n
                }
                return new Re(a)
            }

            function D(t) {
                if (this.length > 0) {
                    var a = this[0];
                    return new Re(t ? a.previousElementSibling && e(a.previousElementSibling).is(t) ? [a.previousElementSibling] : [] : a.previousElementSibling ? [a.previousElementSibling] : [])
                }
                return new Re([])
            }

            function $(t) {
                var a = [],
                    i = this[0];
                if (!i) return new Re([]);
                for (; i.previousElementSibling;) {
                    var n = i.previousElementSibling;
                    t ? e(n).is(t) && a.push(n) : a.push(n), i = n
                }
                return new Re(a)
            }

            function L(a) {
                for (var i = this, n = [], s = 0; s < this.length; s += 1) null !== i[s].parentNode && (a ? e(i[s].parentNode).is(a) && n.push(i[s].parentNode) : n.push(i[s].parentNode));
                return e(t(n))
            }

            function A(a) {
                for (var i = this, n = [], s = 0; s < this.length; s += 1)
                    for (var r = i[s].parentNode; r;) a ? e(r).is(a) && n.push(r) : n.push(r), r = r.parentNode;
                return e(t(n))
            }

            function O(e) {
                var t = this;
                return void 0 === e ? new Re([]) : (t.is(e) || (t = t.parents(e).eq(0)), t)
            }

            function I(e) {
                for (var t = this, a = [], i = 0; i < this.length; i += 1)
                    for (var n = t[i].querySelectorAll(e), s = 0; s < n.length; s += 1) a.push(n[s]);
                return new Re(a)
            }

            function H(a) {
                for (var i = this, n = [], s = 0; s < this.length; s += 1)
                    for (var r = i[s].childNodes, o = 0; o < r.length; o += 1) a ? 1 === r[o].nodeType && e(r[o]).is(a) && n.push(r[o]) : 1 === r[o].nodeType && n.push(r[o]);
                return new Re(t(n))
            }

            function R() {
                for (var e = this, t = 0; t < this.length; t += 1) e[t].parentNode && e[t].parentNode.removeChild(e[t]);
                return this
            }

            function z() {
                for (var t = [], a = arguments.length; a--;) t[a] = arguments[a];
                var i, n, s = this;
                for (i = 0; i < t.length; i += 1) {
                    var r = e(t[i]);
                    for (n = 0; n < r.length; n += 1) s[s.length] = r[n], s.length += 1
                }
                return s
            }

            function F() {
                var e, t, a = this,
                    i = a.$el;
                e = void 0 !== a.params.width ? a.params.width : i[0].clientWidth, t = void 0 !== a.params.height ? a.params.height : i[0].clientHeight, 0 === e && a.isHorizontal() || 0 === t && a.isVertical() || (e = e - parseInt(i.css("padding-left"), 10) - parseInt(i.css("padding-right"), 10), t = t - parseInt(i.css("padding-top"), 10) - parseInt(i.css("padding-bottom"), 10), Fe.extend(a, {
                    width: e,
                    height: t,
                    size: a.isHorizontal() ? e : t
                }))
            }

            function N() {
                var e = this,
                    t = e.params,
                    a = e.$wrapperEl,
                    i = e.size,
                    n = e.rtlTranslate,
                    s = e.wrongRTL,
                    r = e.virtual && t.virtual.enabled,
                    o = r ? e.virtual.slides.length : e.slides.length,
                    l = a.children("." + e.params.slideClass),
                    c = r ? e.virtual.slides.length : l.length,
                    d = [],
                    u = [],
                    p = [],
                    h = t.slidesOffsetBefore;
                "function" == typeof h && (h = t.slidesOffsetBefore.call(e));
                var f = t.slidesOffsetAfter;
                "function" == typeof f && (f = t.slidesOffsetAfter.call(e));
                var m = e.snapGrid.length,
                    v = e.snapGrid.length,
                    g = t.spaceBetween,
                    b = -h,
                    y = 0,
                    w = 0;
                if (void 0 !== i) {
                    "string" == typeof g && g.indexOf("%") >= 0 && (g = parseFloat(g.replace("%", "")) / 100 * i), e.virtualSize = -g, n ? l.css({
                        marginLeft: "",
                        marginTop: ""
                    }) : l.css({
                        marginRight: "",
                        marginBottom: ""
                    });
                    var C;
                    t.slidesPerColumn > 1 && (C = Math.floor(c / t.slidesPerColumn) === c / e.params.slidesPerColumn ? c : Math.ceil(c / t.slidesPerColumn) * t.slidesPerColumn, "auto" !== t.slidesPerView && "row" === t.slidesPerColumnFill && (C = Math.max(C, t.slidesPerView * t.slidesPerColumn)));
                    for (var S, T = t.slidesPerColumn, _ = C / T, x = _ - (t.slidesPerColumn * _ - c), E = 0; E < c; E += 1) {
                        S = 0;
                        var M = l.eq(E);
                        if (t.slidesPerColumn > 1) {
                            var k = void 0,
                                P = void 0,
                                D = void 0;
                            "column" === t.slidesPerColumnFill ? (P = Math.floor(E / T), D = E - P * T, (P > x || P === x && D === T - 1) && (D += 1) >= T && (D = 0, P += 1), k = P + D * C / T, M.css({
                                "-webkit-box-ordinal-group": k,
                                "-moz-box-ordinal-group": k,
                                "-ms-flex-order": k,
                                "-webkit-order": k,
                                order: k
                            })) : (D = Math.floor(E / _), P = E - D * _), M.css("margin-" + (e.isHorizontal() ? "top" : "left"), 0 !== D && t.spaceBetween && t.spaceBetween + "px").attr("data-swiper-column", P).attr("data-swiper-row", D)
                        }
                        if ("none" !== M.css("display")) {
                            if ("auto" === t.slidesPerView) {
                                var $ = He.getComputedStyle(M[0], null),
                                    L = M[0].style.transform,
                                    A = M[0].style.webkitTransform;
                                L && (M[0].style.transform = "none"), A && (M[0].style.webkitTransform = "none"), S = e.isHorizontal() ? M[0].getBoundingClientRect().width + parseFloat($.getPropertyValue("margin-left")) + parseFloat($.getPropertyValue("margin-right")) : M[0].getBoundingClientRect().height + parseFloat($.getPropertyValue("margin-top")) + parseFloat($.getPropertyValue("margin-bottom")), L && (M[0].style.transform = L), A && (M[0].style.webkitTransform = A), t.roundLengths && (S = Math.floor(S))
                            } else S = (i - (t.slidesPerView - 1) * g) / t.slidesPerView, t.roundLengths && (S = Math.floor(S)), l[E] && (e.isHorizontal() ? l[E].style.width = S + "px" : l[E].style.height = S + "px");
                            l[E] && (l[E].swiperSlideSize = S), p.push(S), t.centeredSlides ? (b = b + S / 2 + y / 2 + g, 0 === y && 0 !== E && (b = b - i / 2 - g), 0 === E && (b = b - i / 2 - g), Math.abs(b) < .001 && (b = 0), t.roundLengths && (b = Math.floor(b)), w % t.slidesPerGroup == 0 && d.push(b), u.push(b)) : (t.roundLengths && (b = Math.floor(b)), w % t.slidesPerGroup == 0 && d.push(b), u.push(b), b = b + S + g), e.virtualSize += S + g, y = S, w += 1
                        }
                    }
                    e.virtualSize = Math.max(e.virtualSize, i) + f;
                    var O;
                    if (n && s && ("slide" === t.effect || "coverflow" === t.effect) && a.css({
                            width: e.virtualSize + t.spaceBetween + "px"
                        }), Ne.flexbox && !t.setWrapperSize || (e.isHorizontal() ? a.css({
                            width: e.virtualSize + t.spaceBetween + "px"
                        }) : a.css({
                            height: e.virtualSize + t.spaceBetween + "px"
                        })), t.slidesPerColumn > 1 && (e.virtualSize = (S + t.spaceBetween) * C, e.virtualSize = Math.ceil(e.virtualSize / t.slidesPerColumn) - t.spaceBetween, e.isHorizontal() ? a.css({
                            width: e.virtualSize + t.spaceBetween + "px"
                        }) : a.css({
                            height: e.virtualSize + t.spaceBetween + "px"
                        }), t.centeredSlides)) {
                        O = [];
                        for (var I = 0; I < d.length; I += 1) {
                            var H = d[I];
                            t.roundLengths && (H = Math.floor(H)), d[I] < e.virtualSize + d[0] && O.push(H)
                        }
                        d = O
                    }
                    if (!t.centeredSlides) {
                        O = [];
                        for (var R = 0; R < d.length; R += 1) {
                            var z = d[R];
                            t.roundLengths && (z = Math.floor(z)), d[R] <= e.virtualSize - i && O.push(z)
                        }
                        d = O, Math.floor(e.virtualSize - i) - Math.floor(d[d.length - 1]) > 1 && d.push(e.virtualSize - i)
                    }
                    0 === d.length && (d = [0]), 0 !== t.spaceBetween && (e.isHorizontal() ? n ? l.css({
                        marginLeft: g + "px"
                    }) : l.css({
                        marginRight: g + "px"
                    }) : l.css({
                        marginBottom: g + "px"
                    })), Fe.extend(e, {
                        slides: l,
                        snapGrid: d,
                        slidesGrid: u,
                        slidesSizesGrid: p
                    }), c !== o && e.emit("slidesLengthChange"), d.length !== m && (e.params.watchOverflow && e.checkOverflow(), e.emit("snapGridLengthChange")), u.length !== v && e.emit("slidesGridLengthChange"), (t.watchSlidesProgress || t.watchSlidesVisibility) && e.updateSlidesOffset()
                }
            }

            function j(e) {
                var t, a = this,
                    i = [],
                    n = 0;
                if ("number" == typeof e ? a.setTransition(e) : !0 === e && a.setTransition(a.params.speed), "auto" !== a.params.slidesPerView && a.params.slidesPerView > 1)
                    for (t = 0; t < Math.ceil(a.params.slidesPerView); t += 1) {
                        var s = a.activeIndex + t;
                        if (s > a.slides.length) break;
                        i.push(a.slides.eq(s)[0])
                    } else i.push(a.slides.eq(a.activeIndex)[0]);
                for (t = 0; t < i.length; t += 1)
                    if (void 0 !== i[t]) {
                        var r = i[t].offsetHeight;
                        n = r > n ? r : n
                    } n && a.$wrapperEl.css("height", n + "px")
            }

            function V() {
                for (var e = this, t = e.slides, a = 0; a < t.length; a += 1) t[a].swiperSlideOffset = e.isHorizontal() ? t[a].offsetLeft : t[a].offsetTop
            }

            function K(e) {
                void 0 === e && (e = this && this.translate || 0);
                var t = this,
                    a = t.params,
                    i = t.slides,
                    n = t.rtlTranslate;
                if (0 !== i.length) {
                    void 0 === i[0].swiperSlideOffset && t.updateSlidesOffset();
                    var s = -e;
                    n && (s = e), i.removeClass(a.slideVisibleClass);
                    for (var r = 0; r < i.length; r += 1) {
                        var o = i[r],
                            l = (s + (a.centeredSlides ? t.minTranslate() : 0) - o.swiperSlideOffset) / (o.swiperSlideSize + a.spaceBetween);
                        if (a.watchSlidesVisibility) {
                            var c = -(s - o.swiperSlideOffset),
                                d = c + t.slidesSizesGrid[r];
                            (c >= 0 && c < t.size || d > 0 && d <= t.size || c <= 0 && d >= t.size) && i.eq(r).addClass(a.slideVisibleClass)
                        }
                        o.progress = n ? -l : l
                    }
                }
            }

            function W(e) {
                void 0 === e && (e = this && this.translate || 0);
                var t = this,
                    a = t.params,
                    i = t.maxTranslate() - t.minTranslate(),
                    n = t.progress,
                    s = t.isBeginning,
                    r = t.isEnd,
                    o = s,
                    l = r;
                0 === i ? (n = 0, s = !0, r = !0) : (n = (e - t.minTranslate()) / i, s = n <= 0, r = n >= 1), Fe.extend(t, {
                    progress: n,
                    isBeginning: s,
                    isEnd: r
                }), (a.watchSlidesProgress || a.watchSlidesVisibility) && t.updateSlidesProgress(e), s && !o && t.emit("reachBeginning toEdge"), r && !l && t.emit("reachEnd toEdge"), (o && !s || l && !r) && t.emit("fromEdge"), t.emit("progress", n)
            }

            function Y() {
                var e = this,
                    t = e.slides,
                    a = e.params,
                    i = e.$wrapperEl,
                    n = e.activeIndex,
                    s = e.realIndex,
                    r = e.virtual && a.virtual.enabled;
                t.removeClass(a.slideActiveClass + " " + a.slideNextClass + " " + a.slidePrevClass + " " + a.slideDuplicateActiveClass + " " + a.slideDuplicateNextClass + " " + a.slideDuplicatePrevClass);
                var o;
                o = r ? e.$wrapperEl.find("." + a.slideClass + '[data-swiper-slide-index="' + n + '"]') : t.eq(n), o.addClass(a.slideActiveClass), a.loop && (o.hasClass(a.slideDuplicateClass) ? i.children("." + a.slideClass + ":not(." + a.slideDuplicateClass + ')[data-swiper-slide-index="' + s + '"]').addClass(a.slideDuplicateActiveClass) : i.children("." + a.slideClass + "." + a.slideDuplicateClass + '[data-swiper-slide-index="' + s + '"]').addClass(a.slideDuplicateActiveClass));
                var l = o.nextAll("." + a.slideClass).eq(0).addClass(a.slideNextClass);
                a.loop && 0 === l.length && (l = t.eq(0), l.addClass(a.slideNextClass));
                var c = o.prevAll("." + a.slideClass).eq(0).addClass(a.slidePrevClass);
                a.loop && 0 === c.length && (c = t.eq(-1), c.addClass(a.slidePrevClass)), a.loop && (l.hasClass(a.slideDuplicateClass) ? i.children("." + a.slideClass + ":not(." + a.slideDuplicateClass + ')[data-swiper-slide-index="' + l.attr("data-swiper-slide-index") + '"]').addClass(a.slideDuplicateNextClass) : i.children("." + a.slideClass + "." + a.slideDuplicateClass + '[data-swiper-slide-index="' + l.attr("data-swiper-slide-index") + '"]').addClass(a.slideDuplicateNextClass), c.hasClass(a.slideDuplicateClass) ? i.children("." + a.slideClass + ":not(." + a.slideDuplicateClass + ')[data-swiper-slide-index="' + c.attr("data-swiper-slide-index") + '"]').addClass(a.slideDuplicatePrevClass) : i.children("." + a.slideClass + "." + a.slideDuplicateClass + '[data-swiper-slide-index="' + c.attr("data-swiper-slide-index") + '"]').addClass(a.slideDuplicatePrevClass))
            }

            function B(e) {
                var t, a = this,
                    i = a.rtlTranslate ? a.translate : -a.translate,
                    n = a.slidesGrid,
                    s = a.snapGrid,
                    r = a.params,
                    o = a.activeIndex,
                    l = a.realIndex,
                    c = a.snapIndex,
                    d = e;
                if (void 0 === d) {
                    for (var u = 0; u < n.length; u += 1) void 0 !== n[u + 1] ? i >= n[u] && i < n[u + 1] - (n[u + 1] - n[u]) / 2 ? d = u : i >= n[u] && i < n[u + 1] && (d = u + 1) : i >= n[u] && (d = u);
                    r.normalizeSlideIndex && (d < 0 || void 0 === d) && (d = 0)
                }
                if (t = s.indexOf(i) >= 0 ? s.indexOf(i) : Math.floor(d / r.slidesPerGroup), t >= s.length && (t = s.length - 1), d === o) return void(t !== c && (a.snapIndex = t, a.emit("snapIndexChange")));
                var p = parseInt(a.slides.eq(d).attr("data-swiper-slide-index") || d, 10);
                Fe.extend(a, {
                    snapIndex: t,
                    realIndex: p,
                    previousIndex: o,
                    activeIndex: d
                }), a.emit("activeIndexChange"), a.emit("snapIndexChange"), l !== p && a.emit("realIndexChange"), a.emit("slideChange")
            }

            function X(t) {
                var a = this,
                    i = a.params,
                    n = e(t.target).closest("." + i.slideClass)[0],
                    s = !1;
                if (n)
                    for (var r = 0; r < a.slides.length; r += 1) a.slides[r] === n && (s = !0);
                if (!n || !s) return a.clickedSlide = void 0, void(a.clickedIndex = void 0);
                a.clickedSlide = n, a.virtual && a.params.virtual.enabled ? a.clickedIndex = parseInt(e(n).attr("data-swiper-slide-index"), 10) : a.clickedIndex = e(n).index(), i.slideToClickedSlide && void 0 !== a.clickedIndex && a.clickedIndex !== a.activeIndex && a.slideToClickedSlide()
            }

            function G(e) {
                void 0 === e && (e = this.isHorizontal() ? "x" : "y");
                var t = this,
                    a = t.params,
                    i = t.rtlTranslate,
                    n = t.translate,
                    s = t.$wrapperEl;
                if (a.virtualTranslate) return i ? -n : n;
                var r = Fe.getTranslate(s[0], e);
                return i && (r = -r), r || 0
            }

            function q(e, t) {
                var a = this,
                    i = a.rtlTranslate,
                    n = a.params,
                    s = a.$wrapperEl,
                    r = a.progress,
                    o = 0,
                    l = 0;
                a.isHorizontal() ? o = i ? -e : e : l = e, n.roundLengths && (o = Math.floor(o), l = Math.floor(l)), n.virtualTranslate || (Ne.transforms3d ? s.transform("translate3d(" + o + "px, " + l + "px, 0px)") : s.transform("translate(" + o + "px, " + l + "px)")), a.previousTranslate = a.translate, a.translate = a.isHorizontal() ? o : l;
                var c, d = a.maxTranslate() - a.minTranslate();
                c = 0 === d ? 0 : (e - a.minTranslate()) / d, c !== r && a.updateProgress(e), a.emit("setTranslate", a.translate, t)
            }

            function U() {
                return -this.snapGrid[0]
            }

            function J() {
                return -this.snapGrid[this.snapGrid.length - 1]
            }

            function Z(e, t) {
                var a = this;
                a.$wrapperEl.transition(e), a.emit("setTransition", e, t)
            }

            function Q(e, t) {
                void 0 === e && (e = !0);
                var a = this,
                    i = a.activeIndex,
                    n = a.params,
                    s = a.previousIndex;
                n.autoHeight && a.updateAutoHeight();
                var r = t;
                if (r || (r = i > s ? "next" : i < s ? "prev" : "reset"), a.emit("transitionStart"), e && i !== s) {
                    if ("reset" === r) return void a.emit("slideResetTransitionStart");
                    a.emit("slideChangeTransitionStart"), "next" === r ? a.emit("slideNextTransitionStart") : a.emit("slidePrevTransitionStart")
                }
            }

            function ee(e, t) {
                void 0 === e && (e = !0);
                var a = this,
                    i = a.activeIndex,
                    n = a.previousIndex;
                a.animating = !1, a.setTransition(0);
                var s = t;
                if (s || (s = i > n ? "next" : i < n ? "prev" : "reset"), a.emit("transitionEnd"), e && i !== n) {
                    if ("reset" === s) return void a.emit("slideResetTransitionEnd");
                    a.emit("slideChangeTransitionEnd"), "next" === s ? a.emit("slideNextTransitionEnd") : a.emit("slidePrevTransitionEnd")
                }
            }

            function te(e, t, a, i) {
                void 0 === e && (e = 0), void 0 === t && (t = this.params.speed), void 0 === a && (a = !0);
                var n = this,
                    s = e;
                s < 0 && (s = 0);
                var r = n.params,
                    o = n.snapGrid,
                    l = n.slidesGrid,
                    c = n.previousIndex,
                    d = n.activeIndex,
                    u = n.rtlTranslate;
                if (n.animating && r.preventIntercationOnTransition) return !1;
                var p = Math.floor(s / r.slidesPerGroup);
                p >= o.length && (p = o.length - 1), (d || r.initialSlide || 0) === (c || 0) && a && n.emit("beforeSlideChangeStart");
                var h = -o[p];
                if (n.updateProgress(h), r.normalizeSlideIndex)
                    for (var f = 0; f < l.length; f += 1) - Math.floor(100 * h) >= Math.floor(100 * l[f]) && (s = f);
                if (n.initialized && s !== d) {
                    if (!n.allowSlideNext && h < n.translate && h < n.minTranslate()) return !1;
                    if (!n.allowSlidePrev && h > n.translate && h > n.maxTranslate() && (d || 0) !== s) return !1
                }
                var m;
                return m = s > d ? "next" : s < d ? "prev" : "reset", u && -h === n.translate || !u && h === n.translate ? (n.updateActiveIndex(s), r.autoHeight && n.updateAutoHeight(), n.updateSlidesClasses(), "slide" !== r.effect && n.setTranslate(h), "reset" !== m && (n.transitionStart(a, m), n.transitionEnd(a, m)), !1) : (0 !== t && Ne.transition ? (n.setTransition(t), n.setTranslate(h), n.updateActiveIndex(s), n.updateSlidesClasses(), n.emit("beforeTransitionStart", t, i), n.transitionStart(a, m), n.animating || (n.animating = !0, n.onSlideToWrapperTransitionEnd || (n.onSlideToWrapperTransitionEnd = function (e) {
                    n && !n.destroyed && e.target === this && (n.$wrapperEl[0].removeEventListener("transitionend", n.onSlideToWrapperTransitionEnd), n.$wrapperEl[0].removeEventListener("webkitTransitionEnd", n.onSlideToWrapperTransitionEnd), n.transitionEnd(a, m))
                }), n.$wrapperEl[0].addEventListener("transitionend", n.onSlideToWrapperTransitionEnd), n.$wrapperEl[0].addEventListener("webkitTransitionEnd", n.onSlideToWrapperTransitionEnd))) : (n.setTransition(0), n.setTranslate(h), n.updateActiveIndex(s), n.updateSlidesClasses(), n.emit("beforeTransitionStart", t, i), n.transitionStart(a, m), n.transitionEnd(a, m)), !0)
            }

            function ae(e, t, a, i) {
                void 0 === e && (e = 0), void 0 === t && (t = this.params.speed), void 0 === a && (a = !0);
                var n = this,
                    s = e;
                return n.params.loop && (s += n.loopedSlides), n.slideTo(s, t, a, i)
            }

            function ie(e, t, a) {
                void 0 === e && (e = this.params.speed), void 0 === t && (t = !0);
                var i = this,
                    n = i.params,
                    s = i.animating;
                return n.loop ? !s && (i.loopFix(), i._clientLeft = i.$wrapperEl[0].clientLeft, i.slideTo(i.activeIndex + n.slidesPerGroup, e, t, a)) : i.slideTo(i.activeIndex + n.slidesPerGroup, e, t, a)
            }

            function ne(e, t, a) {
                function i(e) {
                    return e < 0 ? -Math.floor(Math.abs(e)) : Math.floor(e)
                }
                void 0 === e && (e = this.params.speed), void 0 === t && (t = !0);
                var n = this,
                    s = n.params,
                    r = n.animating,
                    o = n.snapGrid,
                    l = n.slidesGrid,
                    c = n.rtlTranslate;
                if (s.loop) {
                    if (r) return !1;
                    n.loopFix(), n._clientLeft = n.$wrapperEl[0].clientLeft
                }
                var d, u = c ? n.translate : -n.translate,
                    p = i(u),
                    h = o.map(function (e) {
                        return i(e)
                    }),
                    f = (l.map(function (e) {
                        return i(e)
                    }), o[h.indexOf(p)], o[h.indexOf(p) - 1]);
                return void 0 !== f && (d = l.indexOf(f)) < 0 && (d = n.activeIndex - 1), n.slideTo(d, e, t, a)
            }

            function se(e, t, a) {
                void 0 === e && (e = this.params.speed), void 0 === t && (t = !0);
                var i = this;
                return i.slideTo(i.activeIndex, e, t, a)
            }

            function re(e, t, a) {
                void 0 === e && (e = this.params.speed), void 0 === t && (t = !0);
                var i = this,
                    n = i.activeIndex,
                    s = Math.floor(n / i.params.slidesPerGroup);
                if (s < i.snapGrid.length - 1) {
                    var r = i.rtlTranslate ? i.translate : -i.translate,
                        o = i.snapGrid[s];
                    r - o > (i.snapGrid[s + 1] - o) / 2 && (n = i.params.slidesPerGroup)
                }
                return i.slideTo(n, e, t, a)
            }

            function oe() {
                var t, a = this,
                    i = a.params,
                    n = a.$wrapperEl,
                    s = "auto" === i.slidesPerView ? a.slidesPerViewDynamic() : i.slidesPerView,
                    r = a.clickedIndex;
                if (i.loop) {
                    if (a.animating) return;
                    t = parseInt(e(a.clickedSlide).attr("data-swiper-slide-index"), 10), i.centeredSlides ? r < a.loopedSlides - s / 2 || r > a.slides.length - a.loopedSlides + s / 2 ? (a.loopFix(), r = n.children("." + i.slideClass + '[data-swiper-slide-index="' + t + '"]:not(.' + i.slideDuplicateClass + ")").eq(0).index(), Fe.nextTick(function () {
                        a.slideTo(r)
                    })) : a.slideTo(r) : r > a.slides.length - s ? (a.loopFix(), r = n.children("." + i.slideClass + '[data-swiper-slide-index="' + t + '"]:not(.' + i.slideDuplicateClass + ")").eq(0).index(), Fe.nextTick(function () {
                        a.slideTo(r)
                    })) : a.slideTo(r)
                } else a.slideTo(r)
            }

            function le() {
                var t = this,
                    a = t.params,
                    i = t.$wrapperEl;
                i.children("." + a.slideClass + "." + a.slideDuplicateClass).remove();
                var n = i.children("." + a.slideClass);
                if (a.loopFillGroupWithBlank) {
                    var s = a.slidesPerGroup - n.length % a.slidesPerGroup;
                    if (s !== a.slidesPerGroup) {
                        for (var r = 0; r < s; r += 1) {
                            var o = e(Ie.createElement("div")).addClass(a.slideClass + " " + a.slideBlankClass);
                            i.append(o)
                        }
                        n = i.children("." + a.slideClass)
                    }
                }
                "auto" !== a.slidesPerView || a.loopedSlides || (a.loopedSlides = n.length), t.loopedSlides = parseInt(a.loopedSlides || a.slidesPerView, 10), t.loopedSlides += a.loopAdditionalSlides, t.loopedSlides > n.length && (t.loopedSlides = n.length);
                var l = [],
                    c = [];
                n.each(function (a, i) {
                    var s = e(i);
                    a < t.loopedSlides && c.push(i), a < n.length && a >= n.length - t.loopedSlides && l.push(i), s.attr("data-swiper-slide-index", a)
                });
                for (var d = 0; d < c.length; d += 1) i.append(e(c[d].cloneNode(!0)).addClass(a.slideDuplicateClass));
                for (var u = l.length - 1; u >= 0; u -= 1) i.prepend(e(l[u].cloneNode(!0)).addClass(a.slideDuplicateClass))
            }

            function ce() {
                var e, t = this,
                    a = t.params,
                    i = t.activeIndex,
                    n = t.slides,
                    s = t.loopedSlides,
                    r = t.allowSlidePrev,
                    o = t.allowSlideNext,
                    l = t.snapGrid,
                    c = t.rtlTranslate;
                t.allowSlidePrev = !0, t.allowSlideNext = !0;
                var d = -l[i],
                    u = d - t.getTranslate();
                if (i < s) {
                    e = n.length - 3 * s + i, e += s;
                    t.slideTo(e, 0, !1, !0) && 0 !== u && t.setTranslate((c ? -t.translate : t.translate) - u)
                } else if ("auto" === a.slidesPerView && i >= 2 * s || i >= n.length - s) {
                    e = -n.length + i + s, e += s;
                    var p = t.slideTo(e, 0, !1, !0);
                    p && 0 !== u && t.setTranslate((c ? -t.translate : t.translate) - u)
                }
                t.allowSlidePrev = r, t.allowSlideNext = o
            }

            function de() {
                var e = this,
                    t = e.$wrapperEl,
                    a = e.params,
                    i = e.slides;
                t.children("." + a.slideClass + "." + a.slideDuplicateClass).remove(), i.removeAttr("data-swiper-slide-index")
            }

            function ue(e) {
                var t = this;
                if (!(Ne.touch || !t.params.simulateTouch || t.params.watchOverflow && t.isLocked)) {
                    var a = t.el;
                    a.style.cursor = "move", a.style.cursor = e ? "-webkit-grabbing" : "-webkit-grab", a.style.cursor = e ? "-moz-grabbin" : "-moz-grab", a.style.cursor = e ? "grabbing" : "grab"
                }
            }

            function pe() {
                var e = this;
                Ne.touch || e.params.watchOverflow && e.isLocked || (e.el.style.cursor = "")
            }

            function he(e) {
                var t = this,
                    a = t.$wrapperEl,
                    i = t.params;
                if (i.loop && t.loopDestroy(), "object" == typeof e && "length" in e)
                    for (var n = 0; n < e.length; n += 1) e[n] && a.append(e[n]);
                else a.append(e);
                i.loop && t.loopCreate(), i.observer && Ne.observer || t.update()
            }

            function fe(e) {
                var t = this,
                    a = t.params,
                    i = t.$wrapperEl,
                    n = t.activeIndex;
                a.loop && t.loopDestroy();
                var s = n + 1;
                if ("object" == typeof e && "length" in e) {
                    for (var r = 0; r < e.length; r += 1) e[r] && i.prepend(e[r]);
                    s = n + e.length
                } else i.prepend(e);
                a.loop && t.loopCreate(), a.observer && Ne.observer || t.update(), t.slideTo(s, 0, !1)
            }

            function me(e, t) {
                var a = this,
                    i = a.$wrapperEl,
                    n = a.params,
                    s = a.activeIndex,
                    r = s;
                n.loop && (r -= a.loopedSlides, a.loopDestroy(), a.slides = i.children("." + n.slideClass));
                var o = a.slides.length;
                if (e <= 0) return void a.prependSlide(t);
                if (e >= o) return void a.appendSlide(t);
                for (var l = r > e ? r + 1 : r, c = [], d = o - 1; d >= e; d -= 1) {
                    var u = a.slides.eq(d);
                    u.remove(), c.unshift(u)
                }
                if ("object" == typeof t && "length" in t) {
                    for (var p = 0; p < t.length; p += 1) t[p] && i.append(t[p]);
                    l = r > e ? r + t.length : r
                } else i.append(t);
                for (var h = 0; h < c.length; h += 1) i.append(c[h]);
                n.loop && a.loopCreate(), n.observer && Ne.observer || a.update(), n.loop ? a.slideTo(l + a.loopedSlides, 0, !1) : a.slideTo(l, 0, !1)
            }

            function ve(e) {
                var t = this,
                    a = t.params,
                    i = t.$wrapperEl,
                    n = t.activeIndex,
                    s = n;
                a.loop && (s -= t.loopedSlides, t.loopDestroy(), t.slides = i.children("." + a.slideClass));
                var r, o = s;
                if ("object" == typeof e && "length" in e) {
                    for (var l = 0; l < e.length; l += 1) r = e[l], t.slides[r] && t.slides.eq(r).remove(), r < o && (o -= 1);
                    o = Math.max(o, 0)
                } else r = e, t.slides[r] && t.slides.eq(r).remove(), r < o && (o -= 1), o = Math.max(o, 0);
                a.loop && t.loopCreate(), a.observer && Ne.observer || t.update(), a.loop ? t.slideTo(o + t.loopedSlides, 0, !1) : t.slideTo(o, 0, !1)
            }

            function ge() {
                for (var e = this, t = [], a = 0; a < e.slides.length; a += 1) t.push(a);
                e.removeSlide(t)
            }

            function be(t) {
                var a = this,
                    i = a.touchEventsData,
                    n = a.params,
                    s = a.touches;
                if (!a.animating || !n.preventIntercationOnTransition) {
                    var r = t;
                    if (r.originalEvent && (r = r.originalEvent), i.isTouchEvent = "touchstart" === r.type, (i.isTouchEvent || !("which" in r) || 3 !== r.which) && (!i.isTouched || !i.isMoved)) {
                        if (n.noSwiping && e(r.target).closest(n.noSwipingSelector ? n.noSwipingSelector : "." + n.noSwipingClass)[0]) return void(a.allowClick = !0);
                        if (!n.swipeHandler || e(r).closest(n.swipeHandler)[0]) {
                            s.currentX = "touchstart" === r.type ? r.targetTouches[0].pageX : r.pageX, s.currentY = "touchstart" === r.type ? r.targetTouches[0].pageY : r.pageY;
                            var o = s.currentX,
                                l = s.currentY;
                            if (!Ue.ios || Ue.cordova || !n.iOSEdgeSwipeDetection || !(o <= n.iOSEdgeSwipeThreshold || o >= He.screen.width - n.iOSEdgeSwipeThreshold)) {
                                if (Fe.extend(i, {
                                        isTouched: !0,
                                        isMoved: !1,
                                        allowTouchCallbacks: !0,
                                        isScrolling: void 0,
                                        startMoving: void 0
                                    }), s.startX = o, s.startY = l, i.touchStartTime = Fe.now(), a.allowClick = !0, a.updateSize(), a.swipeDirection = void 0, n.threshold > 0 && (i.allowThresholdMove = !1), "touchstart" !== r.type) {
                                    var c = !0;
                                    e(r.target).is(i.formElements) && (c = !1), Ie.activeElement && e(Ie.activeElement).is(i.formElements) && Ie.activeElement !== r.target && Ie.activeElement.blur(), c && a.allowTouchMove && r.preventDefault()
                                }
                                a.emit("touchStart", r)
                            }
                        }
                    }
                }
            }

            function ye(t) {
                var a = this,
                    i = a.touchEventsData,
                    n = a.params,
                    s = a.touches,
                    r = a.rtlTranslate,
                    o = t;
                if (o.originalEvent && (o = o.originalEvent), !i.isTouched) return void(i.startMoving && i.isScrolling && a.emit("touchMoveOpposite", o));
                if (!i.isTouchEvent || "mousemove" !== o.type) {
                    var l = "touchmove" === o.type ? o.targetTouches[0].pageX : o.pageX,
                        c = "touchmove" === o.type ? o.targetTouches[0].pageY : o.pageY;
                    if (o.preventedByNestedSwiper) return s.startX = l, void(s.startY = c);
                    if (!a.allowTouchMove) return a.allowClick = !1, void(i.isTouched && (Fe.extend(s, {
                        startX: l,
                        startY: c,
                        currentX: l,
                        currentY: c
                    }), i.touchStartTime = Fe.now()));
                    if (i.isTouchEvent && n.touchReleaseOnEdges && !n.loop)
                        if (a.isVertical()) {
                            if (c < s.startY && a.translate <= a.maxTranslate() || c > s.startY && a.translate >= a.minTranslate()) return i.isTouched = !1, void(i.isMoved = !1)
                        } else if (l < s.startX && a.translate <= a.maxTranslate() || l > s.startX && a.translate >= a.minTranslate()) return;
                    if (i.isTouchEvent && Ie.activeElement && o.target === Ie.activeElement && e(o.target).is(i.formElements)) return i.isMoved = !0, void(a.allowClick = !1);
                    if (i.allowTouchCallbacks && a.emit("touchMove", o), !(o.targetTouches && o.targetTouches.length > 1)) {
                        s.currentX = l, s.currentY = c;
                        var d = s.currentX - s.startX,
                            u = s.currentY - s.startY;
                        if (void 0 === i.isScrolling) {
                            var p;
                            a.isHorizontal() && s.currentY === s.startY || a.isVertical() && s.currentX === s.startX ? i.isScrolling = !1 : d * d + u * u >= 25 && (p = 180 * Math.atan2(Math.abs(u), Math.abs(d)) / Math.PI, i.isScrolling = a.isHorizontal() ? p > n.touchAngle : 90 - p > n.touchAngle)
                        }
                        if (i.isScrolling && a.emit("touchMoveOpposite", o), "undefined" == typeof startMoving && (s.currentX === s.startX && s.currentY === s.startY || (i.startMoving = !0)), i.isScrolling) return void(i.isTouched = !1);
                        if (i.startMoving) {
                            a.allowClick = !1, o.preventDefault(), n.touchMoveStopPropagation && !n.nested && o.stopPropagation(), i.isMoved || (n.loop && a.loopFix(), i.startTranslate = a.getTranslate(), a.setTransition(0), a.animating && a.$wrapperEl.trigger("webkitTransitionEnd transitionend"), i.allowMomentumBounce = !1, !n.grabCursor || !0 !== a.allowSlideNext && !0 !== a.allowSlidePrev || a.setGrabCursor(!0), a.emit("sliderFirstMove", o)), a.emit("sliderMove", o), i.isMoved = !0;
                            var h = a.isHorizontal() ? d : u;
                            s.diff = h, h *= n.touchRatio, r && (h = -h), a.swipeDirection = h > 0 ? "prev" : "next", i.currentTranslate = h + i.startTranslate;
                            var f = !0,
                                m = n.resistanceRatio;
                            if (n.touchReleaseOnEdges && (m = 0), h > 0 && i.currentTranslate > a.minTranslate() ? (f = !1, n.resistance && (i.currentTranslate = a.minTranslate() - 1 + Math.pow(-a.minTranslate() + i.startTranslate + h, m))) : h < 0 && i.currentTranslate < a.maxTranslate() && (f = !1, n.resistance && (i.currentTranslate = a.maxTranslate() + 1 - Math.pow(a.maxTranslate() - i.startTranslate - h, m))), f && (o.preventedByNestedSwiper = !0), !a.allowSlideNext && "next" === a.swipeDirection && i.currentTranslate < i.startTranslate && (i.currentTranslate = i.startTranslate), !a.allowSlidePrev && "prev" === a.swipeDirection && i.currentTranslate > i.startTranslate && (i.currentTranslate = i.startTranslate), n.threshold > 0) {
                                if (!(Math.abs(h) > n.threshold || i.allowThresholdMove)) return void(i.currentTranslate = i.startTranslate);
                                if (!i.allowThresholdMove) return i.allowThresholdMove = !0, s.startX = s.currentX, s.startY = s.currentY, i.currentTranslate = i.startTranslate, void(s.diff = a.isHorizontal() ? s.currentX - s.startX : s.currentY - s.startY)
                            }
                            n.followFinger && ((n.freeMode || n.watchSlidesProgress || n.watchSlidesVisibility) && (a.updateActiveIndex(), a.updateSlidesClasses()), n.freeMode && (0 === i.velocities.length && i.velocities.push({
                                position: s[a.isHorizontal() ? "startX" : "startY"],
                                time: i.touchStartTime
                            }), i.velocities.push({
                                position: s[a.isHorizontal() ? "currentX" : "currentY"],
                                time: Fe.now()
                            })), a.updateProgress(i.currentTranslate), a.setTranslate(i.currentTranslate))
                        }
                    }
                }
            }

            function we(e) {
                var t = this,
                    a = t.touchEventsData,
                    i = t.params,
                    n = t.touches,
                    s = t.rtlTranslate,
                    r = t.$wrapperEl,
                    o = t.slidesGrid,
                    l = t.snapGrid,
                    c = e;
                if (c.originalEvent && (c = c.originalEvent), a.allowTouchCallbacks && t.emit("touchEnd", c), a.allowTouchCallbacks = !1, !a.isTouched) return a.isMoved && i.grabCursor && t.setGrabCursor(!1), a.isMoved = !1, void(a.startMoving = !1);
                i.grabCursor && a.isMoved && a.isTouched && (!0 === t.allowSlideNext || !0 === t.allowSlidePrev) && t.setGrabCursor(!1);
                var d = Fe.now(),
                    u = d - a.touchStartTime;
                if (t.allowClick && (t.updateClickedSlide(c), t.emit("tap", c), u < 300 && d - a.lastClickTime > 300 && (a.clickTimeout && clearTimeout(a.clickTimeout), a.clickTimeout = Fe.nextTick(function () {
                        t && !t.destroyed && t.emit("click", c)
                    }, 300)), u < 300 && d - a.lastClickTime < 300 && (a.clickTimeout && clearTimeout(a.clickTimeout), t.emit("doubleTap", c))), a.lastClickTime = Fe.now(), Fe.nextTick(function () {
                        t.destroyed || (t.allowClick = !0)
                    }), !a.isTouched || !a.isMoved || !t.swipeDirection || 0 === n.diff || a.currentTranslate === a.startTranslate) return a.isTouched = !1, a.isMoved = !1, void(a.startMoving = !1);
                a.isTouched = !1, a.isMoved = !1, a.startMoving = !1;
                var p;
                if (p = i.followFinger ? s ? t.translate : -t.translate : -a.currentTranslate, i.freeMode) {
                    if (p < -t.minTranslate()) return void t.slideTo(t.activeIndex);
                    if (p > -t.maxTranslate()) return void(t.slides.length < l.length ? t.slideTo(l.length - 1) : t.slideTo(t.slides.length - 1));
                    if (i.freeModeMomentum) {
                        if (a.velocities.length > 1) {
                            var h = a.velocities.pop(),
                                f = a.velocities.pop(),
                                m = h.position - f.position,
                                v = h.time - f.time;
                            t.velocity = m / v, t.velocity /= 2, Math.abs(t.velocity) < i.freeModeMinimumVelocity && (t.velocity = 0), (v > 150 || Fe.now() - h.time > 300) && (t.velocity = 0)
                        } else t.velocity = 0;
                        t.velocity *= i.freeModeMomentumVelocityRatio, a.velocities.length = 0;
                        var g = 1e3 * i.freeModeMomentumRatio,
                            b = t.velocity * g,
                            y = t.translate + b;
                        s && (y = -y);
                        var w, C, S = !1,
                            T = 20 * Math.abs(t.velocity) * i.freeModeMomentumBounceRatio;
                        if (y < t.maxTranslate()) i.freeModeMomentumBounce ? (y + t.maxTranslate() < -T && (y = t.maxTranslate() - T), w = t.maxTranslate(), S = !0, a.allowMomentumBounce = !0) : y = t.maxTranslate(), i.loop && i.centeredSlides && (C = !0);
                        else if (y > t.minTranslate()) i.freeModeMomentumBounce ? (y - t.minTranslate() > T && (y = t.minTranslate() + T), w = t.minTranslate(), S = !0, a.allowMomentumBounce = !0) : y = t.minTranslate(), i.loop && i.centeredSlides && (C = !0);
                        else if (i.freeModeSticky) {
                            for (var _, x = 0; x < l.length; x += 1)
                                if (l[x] > -y) {
                                    _ = x;
                                    break
                                } y = Math.abs(l[_] - y) < Math.abs(l[_ - 1] - y) || "next" === t.swipeDirection ? l[_] : l[_ - 1], y = -y
                        }
                        if (C && t.once("transitionEnd", function () {
                                t.loopFix()
                            }), 0 !== t.velocity) g = s ? Math.abs((-y - t.translate) / t.velocity) : Math.abs((y - t.translate) / t.velocity);
                        else if (i.freeModeSticky) return void t.slideToClosest();
                        i.freeModeMomentumBounce && S ? (t.updateProgress(w), t.setTransition(g), t.setTranslate(y), t.transitionStart(!0, t.swipeDirection), t.animating = !0, r.transitionEnd(function () {
                            t && !t.destroyed && a.allowMomentumBounce && (t.emit("momentumBounce"), t.setTransition(i.speed), t.setTranslate(w), r.transitionEnd(function () {
                                t && !t.destroyed && t.transitionEnd()
                            }))
                        })) : t.velocity ? (t.updateProgress(y), t.setTransition(g), t.setTranslate(y), t.transitionStart(!0, t.swipeDirection), t.animating || (t.animating = !0, r.transitionEnd(function () {
                            t && !t.destroyed && t.transitionEnd()
                        }))) : t.updateProgress(y), t.updateActiveIndex(), t.updateSlidesClasses()
                    } else if (i.freeModeSticky) return void t.slideToClosest();
                    return void((!i.freeModeMomentum || u >= i.longSwipesMs) && (t.updateProgress(), t.updateActiveIndex(), t.updateSlidesClasses()))
                }
                for (var E = 0, M = t.slidesSizesGrid[0], k = 0; k < o.length; k += i.slidesPerGroup) void 0 !== o[k + i.slidesPerGroup] ? p >= o[k] && p < o[k + i.slidesPerGroup] && (E = k, M = o[k + i.slidesPerGroup] - o[k]) : p >= o[k] && (E = k, M = o[o.length - 1] - o[o.length - 2]);
                var P = (p - o[E]) / M;
                if (u > i.longSwipesMs) {
                    if (!i.longSwipes) return void t.slideTo(t.activeIndex);
                    "next" === t.swipeDirection && (P >= i.longSwipesRatio ? t.slideTo(E + i.slidesPerGroup) : t.slideTo(E)), "prev" === t.swipeDirection && (P > 1 - i.longSwipesRatio ? t.slideTo(E + i.slidesPerGroup) : t.slideTo(E))
                } else {
                    if (!i.shortSwipes) return void t.slideTo(t.activeIndex);
                    "next" === t.swipeDirection && t.slideTo(E + i.slidesPerGroup), "prev" === t.swipeDirection && t.slideTo(E)
                }
            }

            function Ce() {
                var e = this,
                    t = e.params,
                    a = e.el;
                if (!a || 0 !== a.offsetWidth) {
                    t.breakpoints && e.setBreakpoint();
                    var i = e.allowSlideNext,
                        n = e.allowSlidePrev,
                        s = e.snapGrid;
                    if (e.allowSlideNext = !0, e.allowSlidePrev = !0, e.updateSize(), e.updateSlides(), t.freeMode) {
                        var r = Math.min(Math.max(e.translate, e.maxTranslate()), e.minTranslate());
                        e.setTranslate(r), e.updateActiveIndex(), e.updateSlidesClasses(), t.autoHeight && e.updateAutoHeight()
                    } else e.updateSlidesClasses(), ("auto" === t.slidesPerView || t.slidesPerView > 1) && e.isEnd && !e.params.centeredSlides ? e.slideTo(e.slides.length - 1, 0, !1, !0) : e.slideTo(e.activeIndex, 0, !1, !0);
                    e.allowSlidePrev = n, e.allowSlideNext = i, e.params.watchOverflow && s !== e.snapGrid && e.checkOverflow()
                }
            }

            function Se(e) {
                var t = this;
                t.allowClick || (t.params.preventClicks && e.preventDefault(), t.params.preventClicksPropagation && t.animating && (e.stopPropagation(), e.stopImmediatePropagation()))
            }

            function Te() {
                var e = this,
                    t = e.params,
                    a = e.touchEvents,
                    i = e.el,
                    n = e.wrapperEl;
                e.onTouchStart = be.bind(e), e.onTouchMove = ye.bind(e), e.onTouchEnd = we.bind(e), e.onClick = Se.bind(e);
                var s = "container" === t.touchEventsTarget ? i : n,
                    r = !!t.nested;
                if (Ne.touch || !Ne.pointerEvents && !Ne.prefixedPointerEvents) {
                    if (Ne.touch) {
                        var o = !("touchstart" !== a.start || !Ne.passiveListener || !t.passiveListeners) && {
                            passive: !0,
                            capture: !1
                        };
                        s.addEventListener(a.start, e.onTouchStart, o), s.addEventListener(a.move, e.onTouchMove, Ne.passiveListener ? {
                            passive: !1,
                            capture: r
                        } : r), s.addEventListener(a.end, e.onTouchEnd, o)
                    }(t.simulateTouch && !Ue.ios && !Ue.android || t.simulateTouch && !Ne.touch && Ue.ios) && (s.addEventListener("mousedown", e.onTouchStart, !1), Ie.addEventListener("mousemove", e.onTouchMove, r), Ie.addEventListener("mouseup", e.onTouchEnd, !1))
                } else s.addEventListener(a.start, e.onTouchStart, !1), Ie.addEventListener(a.move, e.onTouchMove, r), Ie.addEventListener(a.end, e.onTouchEnd, !1);
                (t.preventClicks || t.preventClicksPropagation) && s.addEventListener("click", e.onClick, !0), e.on(Ue.ios || Ue.android ? "resize orientationchange observerUpdate" : "resize observerUpdate", Ce, !0)
            }

            function _e() {
                var e = this,
                    t = e.params,
                    a = e.touchEvents,
                    i = e.el,
                    n = e.wrapperEl,
                    s = "container" === t.touchEventsTarget ? i : n,
                    r = !!t.nested;
                if (Ne.touch || !Ne.pointerEvents && !Ne.prefixedPointerEvents) {
                    if (Ne.touch) {
                        var o = !("onTouchStart" !== a.start || !Ne.passiveListener || !t.passiveListeners) && {
                            passive: !0,
                            capture: !1
                        };
                        s.removeEventListener(a.start, e.onTouchStart, o), s.removeEventListener(a.move, e.onTouchMove, r), s.removeEventListener(a.end, e.onTouchEnd, o)
                    }(t.simulateTouch && !Ue.ios && !Ue.android || t.simulateTouch && !Ne.touch && Ue.ios) && (s.removeEventListener("mousedown", e.onTouchStart, !1), Ie.removeEventListener("mousemove", e.onTouchMove, r), Ie.removeEventListener("mouseup", e.onTouchEnd, !1))
                } else s.removeEventListener(a.start, e.onTouchStart, !1), Ie.removeEventListener(a.move, e.onTouchMove, r), Ie.removeEventListener(a.end, e.onTouchEnd, !1);
                (t.preventClicks || t.preventClicksPropagation) && s.removeEventListener("click", e.onClick, !0), e.off(Ue.ios || Ue.android ? "resize orientationchange observerUpdate" : "resize observerUpdate", Ce)
            }

            function xe() {
                var e = this,
                    t = e.activeIndex,
                    a = e.initialized,
                    i = e.loopedSlides;
                void 0 === i && (i = 0);
                var n = e.params,
                    s = n.breakpoints;
                if (s && (!s || 0 !== Object.keys(s).length)) {
                    var r = e.getBreakpoint(s);
                    if (r && e.currentBreakpoint !== r) {
                        var o = r in s ? s[r] : e.originalParams,
                            l = n.loop && o.slidesPerView !== n.slidesPerView;
                        Fe.extend(e.params, o), Fe.extend(e, {
                            allowTouchMove: e.params.allowTouchMove,
                            allowSlideNext: e.params.allowSlideNext,
                            allowSlidePrev: e.params.allowSlidePrev
                        }), e.currentBreakpoint = r, l && a && (e.loopDestroy(), e.loopCreate(), e.updateSlides(), e.slideTo(t - i + e.loopedSlides, 0, !1)), e.emit("breakpoint", o)
                    }
                }
            }

            function Ee(e) {
                if (e) {
                    var t = !1,
                        a = [];
                    Object.keys(e).forEach(function (e) {
                        a.push(e)
                    }), a.sort(function (e, t) {
                        return parseInt(e, 10) - parseInt(t, 10)
                    });
                    for (var i = 0; i < a.length; i += 1) {
                        var n = a[i];
                        n >= He.innerWidth && !t && (t = n)
                    }
                    return t || "max"
                }
            }

            function Me() {
                var e = this,
                    t = e.classNames,
                    a = e.params,
                    i = e.rtl,
                    n = e.$el,
                    s = [];
                s.push(a.direction), a.freeMode && s.push("free-mode"), Ne.flexbox || s.push("no-flexbox"), a.autoHeight && s.push("autoheight"), i && s.push("rtl"), a.slidesPerColumn > 1 && s.push("multirow"), Ue.android && s.push("android"), Ue.ios && s.push("ios"), Qe.isIE && (Ne.pointerEvents || Ne.prefixedPointerEvents) && s.push("wp8-" + a.direction), s.forEach(function (e) {
                    t.push(a.containerModifierClass + e)
                }), n.addClass(t.join(" "))
            }

            function ke() {
                var e = this,
                    t = e.$el,
                    a = e.classNames;
                t.removeClass(a.join(" "))
            }

            function Pe(e, t, a, i, n, s) {
                function r() {
                    s && s()
                }
                var o;
                e.complete && n ? r() : t ? (o = new He.Image, o.onload = r, o.onerror = r, i && (o.sizes = i), a && (o.srcset = a), t && (o.src = t)) : r()
            }

            function De() {
                function e() {
                    void 0 !== t && null !== t && t && !t.destroyed && (void 0 !== t.imagesLoaded && (t.imagesLoaded += 1), t.imagesLoaded === t.imagesToLoad.length && (t.params.updateOnImagesReady && t.update(), t.emit("imagesReady")))
                }
                var t = this;
                t.imagesToLoad = t.$el.find("img");
                for (var a = 0; a < t.imagesToLoad.length; a += 1) {
                    var i = t.imagesToLoad[a];
                    t.loadImage(i, i.currentSrc || i.getAttribute("src"), i.srcset || i.getAttribute("srcset"), i.sizes || i.getAttribute("sizes"), !0, e)
                }
            }

            function $e() {
                var e = this,
                    t = e.isLocked;
                e.isLocked = 1 === e.snapGrid.length, e.allowSlideNext = !e.isLocked, e.allowSlidePrev = !e.isLocked, t !== e.isLocked && e.emit(e.isLocked ? "lock" : "unlock"), t && t !== e.isLocked && (e.isEnd = !1, e.navigation.update())
            }

            function Le() {
                var e = "onwheel" in Ie;
                if (!e) {
                    var t = Ie.createElement("div");
                    t.setAttribute("onwheel", "return;"), e = "function" == typeof t.onwheel
                }
                return !e && Ie.implementation && Ie.implementation.hasFeature && !0 !== Ie.implementation.hasFeature("", "") && (e = Ie.implementation.hasFeature("Events.wheel", "3.0")), e
            }
            var Ae;
            Ae = "undefined" == typeof document ? {
                body: {},
                addEventListener: function () {},
                removeEventListener: function () {},
                activeElement: {
                    blur: function () {},
                    nodeName: ""
                },
                querySelector: function () {
                    return null
                },
                querySelectorAll: function () {
                    return []
                },
                getElementById: function () {
                    return null
                },
                createEvent: function () {
                    return {
                        initEvent: function () {}
                    }
                },
                createElement: function () {
                    return {
                        children: [],
                        childNodes: [],
                        style: {},
                        setAttribute: function () {},
                        getElementsByTagName: function () {
                            return []
                        }
                    }
                },
                location: {
                    hash: ""
                }
            } : document;
            var Oe, Ie = Ae;
            Oe = "undefined" == typeof window ? {
                document: Ie,
                navigator: {
                    userAgent: ""
                },
                location: {},
                history: {},
                CustomEvent: function () {
                    return this
                },
                addEventListener: function () {},
                removeEventListener: function () {},
                getComputedStyle: function () {
                    return {
                        getPropertyValue: function () {
                            return ""
                        }
                    }
                },
                Image: function () {},
                Date: function () {},
                screen: {},
                setTimeout: function () {},
                clearTimeout: function () {}
            } : window;
            var He = Oe,
                Re = function (e) {
                    for (var t = this, a = 0; a < e.length; a += 1) t[a] = e[a];
                    return t.length = e.length, this
                };
            e.fn = Re.prototype, e.Class = Re, e.Dom7 = Re;
            var ze = {
                addClass: a,
                removeClass: i,
                hasClass: n,
                toggleClass: s,
                attr: r,
                removeAttr: o,
                data: l,
                transform: c,
                transition: d,
                on: u,
                off: p,
                trigger: h,
                transitionEnd: f,
                outerWidth: m,
                outerHeight: v,
                offset: g,
                css: y,
                each: w,
                html: C,
                text: S,
                is: T,
                index: _,
                eq: x,
                append: E,
                prepend: M,
                next: k,
                nextAll: P,
                prev: D,
                prevAll: $,
                parent: L,
                parents: A,
                closest: O,
                find: I,
                children: H,
                remove: R,
                add: z,
                styles: b
            };
            Object.keys(ze).forEach(function (t) {
                e.fn[t] = ze[t]
            });
            var Fe = {
                    deleteProps: function (e) {
                        var t = e;
                        Object.keys(t).forEach(function (e) {
                            try {
                                t[e] = null
                            } catch (e) {}
                            try {
                                delete t[e]
                            } catch (e) {}
                        })
                    },
                    nextTick: function (e, t) {
                        return void 0 === t && (t = 0), setTimeout(e, t)
                    },
                    now: function () {
                        return Date.now()
                    },
                    getTranslate: function (e, t) {
                        void 0 === t && (t = "x");
                        var a, i, n, s = He.getComputedStyle(e, null);
                        return He.WebKitCSSMatrix ? (i = s.transform || s.webkitTransform, i.split(",").length > 6 && (i = i.split(", ").map(function (e) {
                            return e.replace(",", ".")
                        }).join(", ")), n = new He.WebKitCSSMatrix("none" === i ? "" : i)) : (n = s.MozTransform || s.OTransform || s.MsTransform || s.msTransform || s.transform || s.getPropertyValue("transform").replace("translate(", "matrix(1, 0, 0, 1,"), a = n.toString().split(",")), "x" === t && (i = He.WebKitCSSMatrix ? n.m41 : 16 === a.length ? parseFloat(a[12]) : parseFloat(a[4])), "y" === t && (i = He.WebKitCSSMatrix ? n.m42 : 16 === a.length ? parseFloat(a[13]) : parseFloat(a[5])), i || 0
                    },
                    parseUrlQuery: function (e) {
                        var t, a, i, n, s = {},
                            r = e || He.location.href;
                        if ("string" == typeof r && r.length)
                            for (r = r.indexOf("?") > -1 ? r.replace(/\S*\?/, "") : "", a = r.split("&").filter(function (e) {
                                    return "" !== e
                                }), n = a.length, t = 0; t < n; t += 1) i = a[t].replace(/#\S+/g, "").split("="), s[decodeURIComponent(i[0])] = void 0 === i[1] ? void 0 : decodeURIComponent(i[1]) || "";
                        return s
                    },
                    isObject: function (e) {
                        return "object" == typeof e && null !== e && e.constructor && e.constructor === Object
                    },
                    extend: function () {
                        for (var e = [], t = arguments.length; t--;) e[t] = arguments[t];
                        for (var a = Object(e[0]), i = 1; i < e.length; i += 1) {
                            var n = e[i];
                            if (void 0 !== n && null !== n)
                                for (var s = Object.keys(Object(n)), r = 0, o = s.length; r < o; r += 1) {
                                    var l = s[r],
                                        c = Object.getOwnPropertyDescriptor(n, l);
                                    void 0 !== c && c.enumerable && (Fe.isObject(a[l]) && Fe.isObject(n[l]) ? Fe.extend(a[l], n[l]) : !Fe.isObject(a[l]) && Fe.isObject(n[l]) ? (a[l] = {}, Fe.extend(a[l], n[l])) : a[l] = n[l])
                                }
                        }
                        return a
                    }
                },
                Ne = function () {
                    var e = Ie.createElement("div");
                    return {
                        touch: He.Modernizr && !0 === He.Modernizr.touch || function () {
                            return !!("ontouchstart" in He || He.DocumentTouch && Ie instanceof He.DocumentTouch)
                        }(),
                        pointerEvents: !(!He.navigator.pointerEnabled && !He.PointerEvent),
                        prefixedPointerEvents: !!He.navigator.msPointerEnabled,
                        transition: function () {
                            var t = e.style;
                            return "transition" in t || "webkitTransition" in t || "MozTransition" in t
                        }(),
                        transforms3d: He.Modernizr && !0 === He.Modernizr.csstransforms3d || function () {
                            var t = e.style;
                            return "webkitPerspective" in t || "MozPerspective" in t || "OPerspective" in t || "MsPerspective" in t || "perspective" in t
                        }(),
                        flexbox: function () {
                            for (var t = e.style, a = "alignItems webkitAlignItems webkitBoxAlign msFlexAlign mozBoxAlign webkitFlexDirection msFlexDirection mozBoxDirection mozBoxOrient webkitBoxDirection webkitBoxOrient".split(" "), i = 0; i < a.length; i += 1)
                                if (a[i] in t) return !0;
                            return !1
                        }(),
                        observer: function () {
                            return "MutationObserver" in He || "WebkitMutationObserver" in He
                        }(),
                        passiveListener: function () {
                            var e = !1;
                            try {
                                var t = Object.defineProperty({}, "passive", {
                                    get: function () {
                                        e = !0
                                    }
                                });
                                He.addEventListener("testPassiveListener", null, t)
                            } catch (e) {}
                            return e
                        }(),
                        gestures: function () {
                            return "ongesturestart" in He
                        }()
                    }
                }(),
                je = function (e) {
                    void 0 === e && (e = {});
                    var t = this;
                    t.params = e, t.eventsListeners = {}, t.params && t.params.on && Object.keys(t.params.on).forEach(function (e) {
                        t.on(e, t.params.on[e])
                    })
                },
                Ve = {
                    components: {
                        configurable: !0
                    }
                };
            je.prototype.on = function (e, t, a) {
                var i = this;
                if ("function" != typeof t) return i;
                var n = a ? "unshift" : "push";
                return e.split(" ").forEach(function (e) {
                    i.eventsListeners[e] || (i.eventsListeners[e] = []), i.eventsListeners[e][n](t)
                }), i
            }, je.prototype.once = function (e, t, a) {
                function i() {
                    for (var a = [], s = arguments.length; s--;) a[s] = arguments[s];
                    t.apply(n, a), n.off(e, i)
                }
                var n = this;
                return "function" != typeof t ? n : n.on(e, i, a)
            }, je.prototype.off = function (e, t) {
                var a = this;
                return a.eventsListeners ? (e.split(" ").forEach(function (e) {
                    void 0 === t ? a.eventsListeners[e] = [] : a.eventsListeners[e].forEach(function (i, n) {
                        i === t && a.eventsListeners[e].splice(n, 1)
                    })
                }), a) : a
            }, je.prototype.emit = function () {
                for (var e = [], t = arguments.length; t--;) e[t] = arguments[t];
                var a = this;
                if (!a.eventsListeners) return a;
                var i, n, s;
                return "string" == typeof e[0] || Array.isArray(e[0]) ? (i = e[0], n = e.slice(1, e.length), s = a) : (i = e[0].events, n = e[0].data, s = e[0].context || a), (Array.isArray(i) ? i : i.split(" ")).forEach(function (e) {
                    if (a.eventsListeners && a.eventsListeners[e]) {
                        var t = [];
                        a.eventsListeners[e].forEach(function (e) {
                            t.push(e)
                        }), t.forEach(function (e) {
                            e.apply(s, n)
                        })
                    }
                }), a
            }, je.prototype.useModulesParams = function (e) {
                var t = this;
                t.modules && Object.keys(t.modules).forEach(function (a) {
                    var i = t.modules[a];
                    i.params && Fe.extend(e, i.params)
                })
            }, je.prototype.useModules = function (e) {
                void 0 === e && (e = {});
                var t = this;
                t.modules && Object.keys(t.modules).forEach(function (a) {
                    var i = t.modules[a],
                        n = e[a] || {};
                    i.instance && Object.keys(i.instance).forEach(function (e) {
                        var a = i.instance[e];
                        t[e] = "function" == typeof a ? a.bind(t) : a
                    }), i.on && t.on && Object.keys(i.on).forEach(function (e) {
                        t.on(e, i.on[e])
                    }), i.create && i.create.bind(t)(n)
                })
            }, Ve.components.set = function (e) {
                var t = this;
                t.use && t.use(e)
            }, je.installModule = function (e) {
                for (var t = [], a = arguments.length - 1; a-- > 0;) t[a] = arguments[a + 1];
                var i = this;
                i.prototype.modules || (i.prototype.modules = {});
                var n = e.name || Object.keys(i.prototype.modules).length + "_" + Fe.now();
                return i.prototype.modules[n] = e, e.proto && Object.keys(e.proto).forEach(function (t) {
                    i.prototype[t] = e.proto[t]
                }), e.static && Object.keys(e.static).forEach(function (t) {
                    i[t] = e.static[t]
                }), e.install && e.install.apply(i, t), i
            }, je.use = function (e) {
                for (var t = [], a = arguments.length - 1; a-- > 0;) t[a] = arguments[a + 1];
                var i = this;
                return Array.isArray(e) ? (e.forEach(function (e) {
                    return i.installModule(e)
                }), i) : i.installModule.apply(i, [e].concat(t))
            }, Object.defineProperties(je, Ve);
            var Ke = {
                    updateSize: F,
                    updateSlides: N,
                    updateAutoHeight: j,
                    updateSlidesOffset: V,
                    updateSlidesProgress: K,
                    updateProgress: W,
                    updateSlidesClasses: Y,
                    updateActiveIndex: B,
                    updateClickedSlide: X
                },
                We = {
                    getTranslate: G,
                    setTranslate: q,
                    minTranslate: U,
                    maxTranslate: J
                },
                Ye = {
                    setTransition: Z,
                    transitionStart: Q,
                    transitionEnd: ee
                },
                Be = {
                    slideTo: te,
                    slideToLoop: ae,
                    slideNext: ie,
                    slidePrev: ne,
                    slideReset: se,
                    slideToClosest: re,
                    slideToClickedSlide: oe
                },
                Xe = {
                    loopCreate: le,
                    loopFix: ce,
                    loopDestroy: de
                },
                Ge = {
                    setGrabCursor: ue,
                    unsetGrabCursor: pe
                },
                qe = {
                    appendSlide: he,
                    prependSlide: fe,
                    addSlide: me,
                    removeSlide: ve,
                    removeAllSlides: ge
                },
                Ue = function () {
                    var e = He.navigator.userAgent,
                        t = {
                            ios: !1,
                            android: !1,
                            androidChrome: !1,
                            desktop: !1,
                            windows: !1,
                            iphone: !1,
                            ipod: !1,
                            ipad: !1,
                            cordova: He.cordova || He.phonegap,
                            phonegap: He.cordova || He.phonegap
                        },
                        a = e.match(/(Windows Phone);?[\s\/]+([\d.]+)?/),
                        i = e.match(/(Android);?[\s\/]+([\d.]+)?/),
                        n = e.match(/(iPad).*OS\s([\d_]+)/),
                        s = e.match(/(iPod)(.*OS\s([\d_]+))?/),
                        r = !n && e.match(/(iPhone\sOS|iOS)\s([\d_]+)/);
                    if (a && (t.os = "windows", t.osVersion = a[2], t.windows = !0), i && !a && (t.os = "android", t.osVersion = i[2], t.android = !0, t.androidChrome = e.toLowerCase().indexOf("chrome") >= 0), (n || r || s) && (t.os = "ios", t.ios = !0), r && !s && (t.osVersion = r[2].replace(/_/g, "."), t.iphone = !0), n && (t.osVersion = n[2].replace(/_/g, "."), t.ipad = !0), s && (t.osVersion = s[3] ? s[3].replace(/_/g, ".") : null, t.iphone = !0), t.ios && t.osVersion && e.indexOf("Version/") >= 0 && "10" === t.osVersion.split(".")[0] && (t.osVersion = e.toLowerCase().split("version/")[1].split(" ")[0]), t.desktop = !(t.os || t.android || t.webView), t.webView = (r || n || s) && e.match(/.*AppleWebKit(?!.*Safari)/i), t.os && "ios" === t.os) {
                        var o = t.osVersion.split("."),
                            l = Ie.querySelector('meta[name="viewport"]');
                        t.minimalUi = !t.webView && (s || r) && (1 * o[0] == 7 ? 1 * o[1] >= 1 : 1 * o[0] > 7) && l && l.getAttribute("content").indexOf("minimal-ui") >= 0
                    }
                    return t.pixelRatio = He.devicePixelRatio || 1, t
                }(),
                Je = {
                    attachEvents: Te,
                    detachEvents: _e
                },
                Ze = {
                    setBreakpoint: xe,
                    getBreakpoint: Ee
                },
                Qe = function () {
                    return {
                        isIE: !!He.navigator.userAgent.match(/Trident/g) || !!He.navigator.userAgent.match(/MSIE/g),
                        isSafari: function () {
                            var e = He.navigator.userAgent.toLowerCase();
                            return e.indexOf("safari") >= 0 && e.indexOf("chrome") < 0 && e.indexOf("android") < 0
                        }(),
                        isUiWebView: /(iPhone|iPod|iPad).*AppleWebKit(?!.*Safari)/i.test(He.navigator.userAgent)
                    }
                }(),
                et = {
                    addClasses: Me,
                    removeClasses: ke
                },
                tt = {
                    loadImage: Pe,
                    preloadImages: De
                },
                at = {
                    checkOverflow: $e
                },
                it = {
                    init: !0,
                    direction: "horizontal",
                    touchEventsTarget: "container",
                    initialSlide: 0,
                    speed: 300,
                    preventIntercationOnTransition: !1,
                    iOSEdgeSwipeDetection: !1,
                    iOSEdgeSwipeThreshold: 20,
                    freeMode: !1,
                    freeModeMomentum: !0,
                    freeModeMomentumRatio: 1,
                    freeModeMomentumBounce: !0,
                    freeModeMomentumBounceRatio: 1,
                    freeModeMomentumVelocityRatio: 1,
                    freeModeSticky: !1,
                    freeModeMinimumVelocity: .02,
                    autoHeight: !1,
                    setWrapperSize: !1,
                    virtualTranslate: !1,
                    effect: "slide",
                    breakpoints: void 0,
                    spaceBetween: 0,
                    slidesPerView: 1,
                    slidesPerColumn: 1,
                    slidesPerColumnFill: "column",
                    slidesPerGroup: 1,
                    centeredSlides: !1,
                    slidesOffsetBefore: 0,
                    slidesOffsetAfter: 0,
                    normalizeSlideIndex: !0,
                    watchOverflow: !1,
                    roundLengths: !1,
                    touchRatio: 1,
                    touchAngle: 45,
                    simulateTouch: !0,
                    shortSwipes: !0,
                    longSwipes: !0,
                    longSwipesRatio: .5,
                    longSwipesMs: 300,
                    followFinger: !0,
                    allowTouchMove: !0,
                    threshold: 0,
                    touchMoveStopPropagation: !0,
                    touchReleaseOnEdges: !1,
                    uniqueNavElements: !0,
                    resistance: !0,
                    resistanceRatio: .85,
                    watchSlidesProgress: !1,
                    watchSlidesVisibility: !1,
                    grabCursor: !1,
                    preventClicks: !0,
                    preventClicksPropagation: !0,
                    slideToClickedSlide: !1,
                    preloadImages: !0,
                    updateOnImagesReady: !0,
                    loop: !1,
                    loopAdditionalSlides: 0,
                    loopedSlides: null,
                    loopFillGroupWithBlank: !1,
                    allowSlidePrev: !0,
                    allowSlideNext: !0,
                    swipeHandler: null,
                    noSwiping: !0,
                    noSwipingClass: "swiper-no-swiping",
                    noSwipingSelector: null,
                    passiveListeners: !0,
                    containerModifierClass: "swiper-container-",
                    slideClass: "swiper-slide",
                    slideBlankClass: "swiper-slide-invisible-blank",
                    slideActiveClass: "swiper-slide-active",
                    slideDuplicateActiveClass: "swiper-slide-duplicate-active",
                    slideVisibleClass: "swiper-slide-visible",
                    slideDuplicateClass: "swiper-slide-duplicate",
                    slideNextClass: "swiper-slide-next",
                    slideDuplicateNextClass: "swiper-slide-duplicate-next",
                    slidePrevClass: "swiper-slide-prev",
                    slideDuplicatePrevClass: "swiper-slide-duplicate-prev",
                    wrapperClass: "swiper-wrapper",
                    runCallbacksOnInit: !0
                },
                nt = {
                    update: Ke,
                    translate: We,
                    transition: Ye,
                    slide: Be,
                    loop: Xe,
                    grabCursor: Ge,
                    manipulation: qe,
                    events: Je,
                    breakpoints: Ze,
                    checkOverflow: at,
                    classes: et,
                    images: tt
                },
                st = {},
                rt = function (t) {
                    function a() {
                        for (var i, n = [], s = arguments.length; s--;) n[s] = arguments[s];
                        var r, o;
                        1 === n.length && n[0].constructor && n[0].constructor === Object ? o = n[0] : (i = n, r = i[0], o = i[1]), o || (o = {}), o = Fe.extend({}, o), r && !o.el && (o.el = r), t.call(this, o), Object.keys(nt).forEach(function (e) {
                            Object.keys(nt[e]).forEach(function (t) {
                                a.prototype[t] || (a.prototype[t] = nt[e][t])
                            })
                        });
                        var l = this;
                        void 0 === l.modules && (l.modules = {}), Object.keys(l.modules).forEach(function (e) {
                            var t = l.modules[e];
                            if (t.params) {
                                var a = Object.keys(t.params)[0],
                                    i = t.params[a];
                                if ("object" != typeof i) return;
                                if (!(a in o && "enabled" in i)) return;
                                !0 === o[a] && (o[a] = {
                                    enabled: !0
                                }), "object" != typeof o[a] || "enabled" in o[a] || (o[a].enabled = !0), o[a] || (o[a] = {
                                    enabled: !1
                                })
                            }
                        });
                        var c = Fe.extend({}, it);
                        l.useModulesParams(c), l.params = Fe.extend({}, c, st, o), l.originalParams = Fe.extend({}, l.params), l.passedParams = Fe.extend({}, o), l.$ = e;
                        var d = e(l.params.el);
                        if (r = d[0]) {
                            if (d.length > 1) {
                                var u = [];
                                return d.each(function (e, t) {
                                    var i = Fe.extend({}, o, {
                                        el: t
                                    });
                                    u.push(new a(i))
                                }), u
                            }
                            r.swiper = l, d.data("swiper", l);
                            var p = d.children("." + l.params.wrapperClass);
                            return Fe.extend(l, {
                                $el: d,
                                el: r,
                                $wrapperEl: p,
                                wrapperEl: p[0],
                                classNames: [],
                                slides: e(),
                                slidesGrid: [],
                                snapGrid: [],
                                slidesSizesGrid: [],
                                isHorizontal: function () {
                                    return "horizontal" === l.params.direction
                                },
                                isVertical: function () {
                                    return "vertical" === l.params.direction
                                },
                                rtl: "rtl" === r.dir.toLowerCase() || "rtl" === d.css("direction"),
                                rtlTranslate: "horizontal" === l.params.direction && ("rtl" === r.dir.toLowerCase() || "rtl" === d.css("direction")),
                                wrongRTL: "-webkit-box" === p.css("display"),
                                activeIndex: 0,
                                realIndex: 0,
                                isBeginning: !0,
                                isEnd: !1,
                                translate: 0,
                                previousTranslate: 0,
                                progress: 0,
                                velocity: 0,
                                animating: !1,
                                allowSlideNext: l.params.allowSlideNext,
                                allowSlidePrev: l.params.allowSlidePrev,
                                touchEvents: function () {
                                    var e = ["touchstart", "touchmove", "touchend"],
                                        t = ["mousedown", "mousemove", "mouseup"];
                                    return Ne.pointerEvents ? t = ["pointerdown", "pointermove", "pointerup"] : Ne.prefixedPointerEvents && (t = ["MSPointerDown", "MSPointerMove", "MSPointerUp"]), l.touchEventsTouch = {
                                        start: e[0],
                                        move: e[1],
                                        end: e[2]
                                    }, l.touchEventsDesktop = {
                                        start: t[0],
                                        move: t[1],
                                        end: t[2]
                                    }, Ne.touch || !l.params.simulateTouch ? l.touchEventsTouch : l.touchEventsDesktop
                                }(),
                                touchEventsData: {
                                    isTouched: void 0,
                                    isMoved: void 0,
                                    allowTouchCallbacks: void 0,
                                    touchStartTime: void 0,
                                    isScrolling: void 0,
                                    currentTranslate: void 0,
                                    startTranslate: void 0,
                                    allowThresholdMove: void 0,
                                    formElements: "input, select, option, textarea, button, video",
                                    lastClickTime: Fe.now(),
                                    clickTimeout: void 0,
                                    velocities: [],
                                    allowMomentumBounce: void 0,
                                    isTouchEvent: void 0,
                                    startMoving: void 0
                                },
                                allowClick: !0,
                                allowTouchMove: l.params.allowTouchMove,
                                touches: {
                                    startX: 0,
                                    startY: 0,
                                    currentX: 0,
                                    currentY: 0,
                                    diff: 0
                                },
                                imagesToLoad: [],
                                imagesLoaded: 0
                            }), l.useModules(), l.params.init && l.init(), l
                        }
                    }
                    t && (a.__proto__ = t), a.prototype = Object.create(t && t.prototype), a.prototype.constructor = a;
                    var i = {
                        extendedDefaults: {
                            configurable: !0
                        },
                        defaults: {
                            configurable: !0
                        },
                        Class: {
                            configurable: !0
                        },
                        $: {
                            configurable: !0
                        }
                    };
                    return a.prototype.slidesPerViewDynamic = function () {
                        var e = this,
                            t = e.params,
                            a = e.slides,
                            i = e.slidesGrid,
                            n = e.size,
                            s = e.activeIndex,
                            r = 1;
                        if (t.centeredSlides) {
                            for (var o, l = a[s].swiperSlideSize, c = s + 1; c < a.length; c += 1) a[c] && !o && (l += a[c].swiperSlideSize, r += 1, l > n && (o = !0));
                            for (var d = s - 1; d >= 0; d -= 1) a[d] && !o && (l += a[d].swiperSlideSize, r += 1, l > n && (o = !0))
                        } else
                            for (var u = s + 1; u < a.length; u += 1) i[u] - i[s] < n && (r += 1);
                        return r
                    }, a.prototype.update = function () {
                        function e() {
                            var e = t.rtlTranslate ? -1 * t.translate : t.translate,
                                a = Math.min(Math.max(e, t.maxTranslate()), t.minTranslate());
                            t.setTranslate(a), t.updateActiveIndex(), t.updateSlidesClasses()
                        }
                        var t = this;
                        if (t && !t.destroyed) {
                            var a = t.snapGrid,
                                i = t.params;
                            i.breakpoints && t.setBreakpoint(), t.updateSize(), t.updateSlides(), t.updateProgress(), t.updateSlidesClasses();
                            t.params.freeMode ? (e(), t.params.autoHeight && t.updateAutoHeight()) : (("auto" === t.params.slidesPerView || t.params.slidesPerView > 1) && t.isEnd && !t.params.centeredSlides ? t.slideTo(t.slides.length - 1, 0, !1, !0) : t.slideTo(t.activeIndex, 0, !1, !0)) || e(), i.watchOverflow && a !== t.snapGrid && t.checkOverflow(), t.emit("update")
                        }
                    }, a.prototype.init = function () {
                        var e = this;
                        e.initialized || (e.emit("beforeInit"), e.params.breakpoints && e.setBreakpoint(), e.addClasses(), e.params.loop && e.loopCreate(), e.updateSize(), e.updateSlides(), e.params.watchOverflow && e.checkOverflow(), e.params.grabCursor && e.setGrabCursor(), e.params.preloadImages && e.preloadImages(), e.params.loop ? e.slideTo(e.params.initialSlide + e.loopedSlides, 0, e.params.runCallbacksOnInit) : e.slideTo(e.params.initialSlide, 0, e.params.runCallbacksOnInit), e.attachEvents(), e.initialized = !0, e.emit("init"))
                    }, a.prototype.destroy = function (e, t) {
                        void 0 === e && (e = !0), void 0 === t && (t = !0);
                        var a = this,
                            i = a.params,
                            n = a.$el,
                            s = a.$wrapperEl,
                            r = a.slides;
                        return void 0 === a.params || a.destroyed ? null : (a.emit("beforeDestroy"), a.initialized = !1, a.detachEvents(), i.loop && a.loopDestroy(), t && (a.removeClasses(), n.removeAttr("style"), s.removeAttr("style"), r && r.length && r.removeClass([i.slideVisibleClass, i.slideActiveClass, i.slideNextClass, i.slidePrevClass].join(" ")).removeAttr("style").removeAttr("data-swiper-slide-index").removeAttr("data-swiper-column").removeAttr("data-swiper-row")), a.emit("destroy"), Object.keys(a.eventsListeners).forEach(function (e) {
                            a.off(e)
                        }), !1 !== e && (a.$el[0].swiper = null, a.$el.data("swiper", null), Fe.deleteProps(a)), a.destroyed = !0, null)
                    }, a.extendDefaults = function (e) {
                        Fe.extend(st, e)
                    }, i.extendedDefaults.get = function () {
                        return st
                    }, i.defaults.get = function () {
                        return it
                    }, i.Class.get = function () {
                        return t
                    }, i.$.get = function () {
                        return e
                    }, Object.defineProperties(a, i), a
                }(je),
                ot = {
                    name: "device",
                    proto: {
                        device: Ue
                    },
                    static: {
                        device: Ue
                    }
                },
                lt = {
                    name: "support",
                    proto: {
                        support: Ne
                    },
                    static: {
                        support: Ne
                    }
                },
                ct = {
                    name: "browser",
                    proto: {
                        browser: Qe
                    },
                    static: {
                        browser: Qe
                    }
                },
                dt = {
                    name: "resize",
                    create: function () {
                        var e = this;
                        Fe.extend(e, {
                            resize: {
                                resizeHandler: function () {
                                    e && !e.destroyed && e.initialized && (e.emit("beforeResize"), e.emit("resize"))
                                },
                                orientationChangeHandler: function () {
                                    e && !e.destroyed && e.initialized && e.emit("orientationchange")
                                }
                            }
                        })
                    },
                    on: {
                        init: function () {
                            var e = this;
                            He.addEventListener("resize", e.resize.resizeHandler), He.addEventListener("orientationchange", e.resize.orientationChangeHandler)
                        },
                        destroy: function () {
                            var e = this;
                            He.removeEventListener("resize", e.resize.resizeHandler), He.removeEventListener("orientationchange", e.resize.orientationChangeHandler)
                        }
                    }
                },
                ut = {
                    func: He.MutationObserver || He.WebkitMutationObserver,
                    attach: function (e, t) {
                        void 0 === t && (t = {});
                        var a = this,
                            i = ut.func,
                            n = new i(function (e) {
                                e.forEach(function (e) {
                                    a.emit("observerUpdate", e)
                                })
                            });
                        n.observe(e, {
                            attributes: void 0 === t.attributes || t.attributes,
                            childList: void 0 === t.childList || t.childList,
                            characterData: void 0 === t.characterData || t.characterData
                        }), a.observer.observers.push(n)
                    },
                    init: function () {
                        var e = this;
                        if (Ne.observer && e.params.observer) {
                            if (e.params.observeParents)
                                for (var t = e.$el.parents(), a = 0; a < t.length; a += 1) e.observer.attach(t[a]);
                            e.observer.attach(e.$el[0], {
                                childList: !1
                            }), e.observer.attach(e.$wrapperEl[0], {
                                attributes: !1
                            })
                        }
                    },
                    destroy: function () {
                        var e = this;
                        e.observer.observers.forEach(function (e) {
                            e.disconnect()
                        }), e.observer.observers = []
                    }
                },
                pt = {
                    name: "observer",
                    params: {
                        observer: !1,
                        observeParents: !1
                    },
                    create: function () {
                        var e = this;
                        Fe.extend(e, {
                            observer: {
                                init: ut.init.bind(e),
                                attach: ut.attach.bind(e),
                                destroy: ut.destroy.bind(e),
                                observers: []
                            }
                        })
                    },
                    on: {
                        init: function () {
                            this.observer.init()
                        },
                        destroy: function () {
                            this.observer.destroy()
                        }
                    }
                },
                ht = {
                    update: function (e) {
                        function t() {
                            a.updateSlides(), a.updateProgress(), a.updateSlidesClasses(), a.lazy && a.params.lazy.enabled && a.lazy.load()
                        }
                        var a = this,
                            i = a.params,
                            n = i.slidesPerView,
                            s = i.slidesPerGroup,
                            r = i.centeredSlides,
                            o = a.virtual,
                            l = o.from,
                            c = o.to,
                            d = o.slides,
                            u = o.slidesGrid,
                            p = o.renderSlide,
                            h = o.offset;
                        a.updateActiveIndex();
                        var f, m = a.activeIndex || 0;
                        f = a.rtlTranslate ? "right" : a.isHorizontal() ? "left" : "top";
                        var v, g;
                        r ? (v = Math.floor(n / 2) + s, g = Math.floor(n / 2) + s) : (v = n + (s - 1), g = s);
                        var b = Math.max((m || 0) - g, 0),
                            y = Math.min((m || 0) + v, d.length - 1),
                            w = (a.slidesGrid[b] || 0) - (a.slidesGrid[0] || 0);
                        if (Fe.extend(a.virtual, {
                                from: b,
                                to: y,
                                offset: w,
                                slidesGrid: a.slidesGrid
                            }), l === b && c === y && !e) return a.slidesGrid !== u && w !== h && a.slides.css(f, w + "px"), void a.updateProgress();
                        if (a.params.virtual.renderExternal) return a.params.virtual.renderExternal.call(a, {
                            offset: w,
                            from: b,
                            to: y,
                            slides: function () {
                                for (var e = [], t = b; t <= y; t += 1) e.push(d[t]);
                                return e
                            }()
                        }), void t();
                        var C = [],
                            S = [];
                        if (e) a.$wrapperEl.find("." + a.params.slideClass).remove();
                        else
                            for (var T = l; T <= c; T += 1)(T < b || T > y) && a.$wrapperEl.find("." + a.params.slideClass + '[data-swiper-slide-index="' + T + '"]').remove();
                        for (var _ = 0; _ < d.length; _ += 1) _ >= b && _ <= y && (void 0 === c || e ? S.push(_) : (_ > c && S.push(_), _ < l && C.push(_)));
                        S.forEach(function (e) {
                            a.$wrapperEl.append(p(d[e], e))
                        }), C.sort(function (e, t) {
                            return e < t
                        }).forEach(function (e) {
                            a.$wrapperEl.prepend(p(d[e], e))
                        }), a.$wrapperEl.children(".swiper-slide").css(f, w + "px"), t()
                    },
                    renderSlide: function (t, a) {
                        var i = this,
                            n = i.params.virtual;
                        if (n.cache && i.virtual.cache[a]) return i.virtual.cache[a];
                        var s = e(n.renderSlide ? n.renderSlide.call(i, t, a) : '<div class="' + i.params.slideClass + '" data-swiper-slide-index="' + a + '">' + t + "</div>");
                        return s.attr("data-swiper-slide-index") || s.attr("data-swiper-slide-index", a), n.cache && (i.virtual.cache[a] = s), s
                    },
                    appendSlide: function (e) {
                        var t = this;
                        t.virtual.slides.push(e), t.virtual.update(!0)
                    },
                    prependSlide: function (e) {
                        var t = this;
                        if (t.virtual.slides.unshift(e), t.params.virtual.cache) {
                            var a = t.virtual.cache,
                                i = {};
                            Object.keys(a).forEach(function (e) {
                                i[e + 1] = a[e]
                            }), t.virtual.cache = i
                        }
                        t.virtual.update(!0), t.slideNext(0)
                    }
                },
                ft = {
                    name: "virtual",
                    params: {
                        virtual: {
                            enabled: !1,
                            slides: [],
                            cache: !0,
                            renderSlide: null,
                            renderExternal: null
                        }
                    },
                    create: function () {
                        var e = this;
                        Fe.extend(e, {
                            virtual: {
                                update: ht.update.bind(e),
                                appendSlide: ht.appendSlide.bind(e),
                                prependSlide: ht.prependSlide.bind(e),
                                renderSlide: ht.renderSlide.bind(e),
                                slides: e.params.virtual.slides,
                                cache: {}
                            }
                        })
                    },
                    on: {
                        beforeInit: function () {
                            var e = this;
                            if (e.params.virtual.enabled) {
                                e.classNames.push(e.params.containerModifierClass + "virtual");
                                var t = {
                                    watchSlidesProgress: !0
                                };
                                Fe.extend(e.params, t), Fe.extend(e.originalParams, t), e.virtual.update()
                            }
                        },
                        setTranslate: function () {
                            var e = this;
                            e.params.virtual.enabled && e.virtual.update()
                        }
                    }
                },
                mt = {
                    handle: function (e) {
                        var t = this,
                            a = t.rtlTranslate,
                            i = e;
                        i.originalEvent && (i = i.originalEvent);
                        var n = i.keyCode || i.charCode;
                        if (!t.allowSlideNext && (t.isHorizontal() && 39 === n || t.isVertical() && 40 === n)) return !1;
                        if (!t.allowSlidePrev && (t.isHorizontal() && 37 === n || t.isVertical() && 38 === n)) return !1;
                        if (!(i.shiftKey || i.altKey || i.ctrlKey || i.metaKey || Ie.activeElement && Ie.activeElement.nodeName && ("input" === Ie.activeElement.nodeName.toLowerCase() || "textarea" === Ie.activeElement.nodeName.toLowerCase()))) {
                            if (t.params.keyboard.onlyInViewport && (37 === n || 39 === n || 38 === n || 40 === n)) {
                                var s = !1;
                                if (t.$el.parents("." + t.params.slideClass).length > 0 && 0 === t.$el.parents("." + t.params.slideActiveClass).length) return;
                                var r = He.innerWidth,
                                    o = He.innerHeight,
                                    l = t.$el.offset();
                                a && (l.left -= t.$el[0].scrollLeft);
                                for (var c = [[l.left, l.top], [l.left + t.width, l.top], [l.left, l.top + t.height], [l.left + t.width, l.top + t.height]], d = 0; d < c.length; d += 1) {
                                    var u = c[d];
                                    u[0] >= 0 && u[0] <= r && u[1] >= 0 && u[1] <= o && (s = !0)
                                }
                                if (!s) return
                            }
                            t.isHorizontal() ? (37 !== n && 39 !== n || (i.preventDefault ? i.preventDefault() : i.returnValue = !1), (39 === n && !a || 37 === n && a) && t.slideNext(), (37 === n && !a || 39 === n && a) && t.slidePrev()) : (38 !== n && 40 !== n || (i.preventDefault ? i.preventDefault() : i.returnValue = !1), 40 === n && t.slideNext(), 38 === n && t.slidePrev()), t.emit("keyPress", n)
                        }
                    },
                    enable: function () {
                        var t = this;
                        t.keyboard.enabled || (e(Ie).on("keydown", t.keyboard.handle), t.keyboard.enabled = !0)
                    },
                    disable: function () {
                        var t = this;
                        t.keyboard.enabled && (e(Ie).off("keydown", t.keyboard.handle), t.keyboard.enabled = !1)
                    }
                },
                vt = {
                    name: "keyboard",
                    params: {
                        keyboard: {
                            enabled: !1,
                            onlyInViewport: !0
                        }
                    },
                    create: function () {
                        var e = this;
                        Fe.extend(e, {
                            keyboard: {
                                enabled: !1,
                                enable: mt.enable.bind(e),
                                disable: mt.disable.bind(e),
                                handle: mt.handle.bind(e)
                            }
                        })
                    },
                    on: {
                        init: function () {
                            var e = this;
                            e.params.keyboard.enabled && e.keyboard.enable()
                        },
                        destroy: function () {
                            var e = this;
                            e.keyboard.enabled && e.keyboard.disable()
                        }
                    }
                },
                gt = {
                    lastScrollTime: Fe.now(),
                    event: function () {
                        return He.navigator.userAgent.indexOf("firefox") > -1 ? "DOMMouseScroll" : Le() ? "wheel" : "mousewheel"
                    }(),
                    normalize: function (e) {
                        var t = 0,
                            a = 0,
                            i = 0,
                            n = 0;
                        return "detail" in e && (a = e.detail), "wheelDelta" in e && (a = -e.wheelDelta / 120), "wheelDeltaY" in e && (a = -e.wheelDeltaY / 120), "wheelDeltaX" in e && (t = -e.wheelDeltaX / 120), "axis" in e && e.axis === e.HORIZONTAL_AXIS && (t = a, a = 0), i = 10 * t, n = 10 * a, "deltaY" in e && (n = e.deltaY), "deltaX" in e && (i = e.deltaX), (i || n) && e.deltaMode && (1 === e.deltaMode ? (i *= 40, n *= 40) : (i *= 800, n *= 800)), i && !t && (t = i < 1 ? -1 : 1), n && !a && (a = n < 1 ? -1 : 1), {
                            spinX: t,
                            spinY: a,
                            pixelX: i,
                            pixelY: n
                        }
                    },
                    handleMouseEnter: function () {
                        this.mouseEntered = !0
                    },
                    handleMouseLeave: function () {
                        this.mouseEntered = !1
                    },
                    handle: function (e) {
                        var t = e,
                            a = this,
                            i = a.params.mousewheel;
                        if (!a.mouseEntered && !i.releaseOnEdges) return !0;
                        t.originalEvent && (t = t.originalEvent);
                        var n = 0,
                            s = a.rtlTranslate ? -1 : 1,
                            r = gt.normalize(t);
                        if (i.forceToAxis)
                            if (a.isHorizontal()) {
                                if (!(Math.abs(r.pixelX) > Math.abs(r.pixelY))) return !0;
                                n = r.pixelX * s
                            } else {
                                if (!(Math.abs(r.pixelY) > Math.abs(r.pixelX))) return !0;
                                n = r.pixelY
                            }
                        else n = Math.abs(r.pixelX) > Math.abs(r.pixelY) ? -r.pixelX * s : -r.pixelY;
                        if (0 === n) return !0;
                        if (i.invert && (n = -n), a.params.freeMode) {
                            a.params.loop && a.loopFix();
                            var o = a.getTranslate() + n * i.sensitivity,
                                l = a.isBeginning,
                                c = a.isEnd;
                            if (o >= a.minTranslate() && (o = a.minTranslate()), o <= a.maxTranslate() && (o = a.maxTranslate()), a.setTransition(0), a.setTranslate(o), a.updateProgress(), a.updateActiveIndex(), a.updateSlidesClasses(), (!l && a.isBeginning || !c && a.isEnd) && a.updateSlidesClasses(), a.params.freeModeSticky && (clearTimeout(a.mousewheel.timeout), a.mousewheel.timeout = Fe.nextTick(function () {
                                    a.slideToClosest()
                                }, 300)), a.emit("scroll", t), a.params.autoplay && a.params.autoplayDisableOnInteraction && a.autoplay.stop(), o === a.minTranslate() || o === a.maxTranslate()) return !0
                        } else {
                            if (Fe.now() - a.mousewheel.lastScrollTime > 60)
                                if (n < 0)
                                    if (a.isEnd && !a.params.loop || a.animating) {
                                        if (i.releaseOnEdges) return !0
                                    } else a.slideNext(), a.emit("scroll", t);
                            else if (a.isBeginning && !a.params.loop || a.animating) {
                                if (i.releaseOnEdges) return !0
                            } else a.slidePrev(), a.emit("scroll", t);
                            a.mousewheel.lastScrollTime = (new He.Date).getTime()
                        }
                        return t.preventDefault ? t.preventDefault() : t.returnValue = !1, !1
                    },
                    enable: function () {
                        var t = this;
                        if (!gt.event) return !1;
                        if (t.mousewheel.enabled) return !1;
                        var a = t.$el;
                        return "container" !== t.params.mousewheel.eventsTarged && (a = e(t.params.mousewheel.eventsTarged)), a.on("mouseenter", t.mousewheel.handleMouseEnter), a.on("mouseleave", t.mousewheel.handleMouseLeave), a.on(gt.event, t.mousewheel.handle), t.mousewheel.enabled = !0, !0
                    },
                    disable: function () {
                        var t = this;
                        if (!gt.event) return !1;
                        if (!t.mousewheel.enabled) return !1;
                        var a = t.$el;
                        return "container" !== t.params.mousewheel.eventsTarged && (a = e(t.params.mousewheel.eventsTarged)), a.off(gt.event, t.mousewheel.handle), t.mousewheel.enabled = !1, !0
                    }
                },
                bt = {
                    name: "mousewheel",
                    params: {
                        mousewheel: {
                            enabled: !1,
                            releaseOnEdges: !1,
                            invert: !1,
                            forceToAxis: !1,
                            sensitivity: 1,
                            eventsTarged: "container"
                        }
                    },
                    create: function () {
                        var e = this;
                        Fe.extend(e, {
                            mousewheel: {
                                enabled: !1,
                                enable: gt.enable.bind(e),
                                disable: gt.disable.bind(e),
                                handle: gt.handle.bind(e),
                                handleMouseEnter: gt.handleMouseEnter.bind(e),
                                handleMouseLeave: gt.handleMouseLeave.bind(e),
                                lastScrollTime: Fe.now()
                            }
                        })
                    },
                    on: {
                        init: function () {
                            var e = this;
                            e.params.mousewheel.enabled && e.mousewheel.enable()
                        },
                        destroy: function () {
                            var e = this;
                            e.mousewheel.enabled && e.mousewheel.disable()
                        }
                    }
                },
                yt = {
                    update: function () {
                        var e = this,
                            t = e.params.navigation;
                        if (!e.params.loop) {
                            var a = e.navigation,
                                i = a.$nextEl,
                                n = a.$prevEl;
                            n && n.length > 0 && (e.isBeginning ? n.addClass(t.disabledClass) : n.removeClass(t.disabledClass), n[e.params.watchOverflow && e.isLocked ? "addClass" : "removeClass"](t.lockClass)), i && i.length > 0 && (e.isEnd ? i.addClass(t.disabledClass) : i.removeClass(t.disabledClass), i[e.params.watchOverflow && e.isLocked ? "addClass" : "removeClass"](t.lockClass))
                        }
                    },
                    init: function () {
                        var t = this,
                            a = t.params.navigation;
                        if (a.nextEl || a.prevEl) {
                            var i, n;
                            a.nextEl && (i = e(a.nextEl), t.params.uniqueNavElements && "string" == typeof a.nextEl && i.length > 1 && 1 === t.$el.find(a.nextEl).length && (i = t.$el.find(a.nextEl))), a.prevEl && (n = e(a.prevEl), t.params.uniqueNavElements && "string" == typeof a.prevEl && n.length > 1 && 1 === t.$el.find(a.prevEl).length && (n = t.$el.find(a.prevEl))), i && i.length > 0 && i.on("click", function (e) {
                                e.preventDefault(), t.isEnd && !t.params.loop || t.slideNext()
                            }), n && n.length > 0 && n.on("click", function (e) {
                                e.preventDefault(), t.isBeginning && !t.params.loop || t.slidePrev()
                            }), Fe.extend(t.navigation, {
                                $nextEl: i,
                                nextEl: i && i[0],
                                $prevEl: n,
                                prevEl: n && n[0]
                            })
                        }
                    },
                    destroy: function () {
                        var e = this,
                            t = e.navigation,
                            a = t.$nextEl,
                            i = t.$prevEl;
                        a && a.length && (a.off("click"), a.removeClass(e.params.navigation.disabledClass)), i && i.length && (i.off("click"), i.removeClass(e.params.navigation.disabledClass))
                    }
                },
                wt = {
                    name: "navigation",
                    params: {
                        navigation: {
                            nextEl: null,
                            prevEl: null,
                            hideOnClick: !1,
                            disabledClass: "swiper-button-disabled",
                            hiddenClass: "swiper-button-hidden",
                            lockClass: "swiper-button-lock"
                        }
                    },
                    create: function () {
                        var e = this;
                        Fe.extend(e, {
                            navigation: {
                                init: yt.init.bind(e),
                                update: yt.update.bind(e),
                                destroy: yt.destroy.bind(e)
                            }
                        })
                    },
                    on: {
                        init: function () {
                            var e = this;
                            e.navigation.init(), e.navigation.update()
                        },
                        toEdge: function () {
                            this.navigation.update()
                        },
                        fromEdge: function () {
                            this.navigation.update()
                        },
                        destroy: function () {
                            this.navigation.destroy()
                        },
                        click: function (t) {
                            var a = this,
                                i = a.navigation,
                                n = i.$nextEl,
                                s = i.$prevEl;
                            !a.params.navigation.hideOnClick || e(t.target).is(s) || e(t.target).is(n) || (n && n.toggleClass(a.params.navigation.hiddenClass), s && s.toggleClass(a.params.navigation.hiddenClass))
                        }
                    }
                },
                Ct = {
                    update: function () {
                        var t = this,
                            a = t.rtl,
                            i = t.params.pagination;
                        if (i.el && t.pagination.el && t.pagination.$el && 0 !== t.pagination.$el.length) {
                            var n, s = t.virtual && t.params.virtual.enabled ? t.virtual.slides.length : t.slides.length,
                                r = t.pagination.$el,
                                o = t.params.loop ? Math.ceil((s - 2 * t.loopedSlides) / t.params.slidesPerGroup) : t.snapGrid.length;
                            if (t.params.loop ? (n = Math.ceil((t.activeIndex - t.loopedSlides) / t.params.slidesPerGroup), n > s - 1 - 2 * t.loopedSlides && (n -= s - 2 * t.loopedSlides), n > o - 1 && (n -= o), n < 0 && "bullets" !== t.params.paginationType && (n = o + n)) : n = void 0 !== t.snapIndex ? t.snapIndex : t.activeIndex || 0, "bullets" === i.type && t.pagination.bullets && t.pagination.bullets.length > 0) {
                                var l, c, d, u = t.pagination.bullets;
                                if (i.dynamicBullets && (t.pagination.bulletSize = u.eq(0)[t.isHorizontal() ? "outerWidth" : "outerHeight"](!0), r.css(t.isHorizontal() ? "width" : "height", t.pagination.bulletSize * (i.dynamicMainBullets + 4) + "px"), i.dynamicMainBullets > 1 && void 0 !== t.previousIndex && (t.pagination.dynamicBulletIndex += n - t.previousIndex, t.pagination.dynamicBulletIndex > i.dynamicMainBullets - 1 ? t.pagination.dynamicBulletIndex = i.dynamicMainBullets - 1 : t.pagination.dynamicBulletIndex < 0 && (t.pagination.dynamicBulletIndex = 0)), l = n - t.pagination.dynamicBulletIndex, c = l + (Math.min(u.length, i.dynamicMainBullets) - 1), d = (c + l) / 2), u.removeClass(i.bulletActiveClass + " " + i.bulletActiveClass + "-next " + i.bulletActiveClass + "-next-next " + i.bulletActiveClass + "-prev " + i.bulletActiveClass + "-prev-prev " + i.bulletActiveClass + "-main"), r.length > 1) u.each(function (t, a) {
                                    var s = e(a),
                                        r = s.index();
                                    r === n && s.addClass(i.bulletActiveClass), i.dynamicBullets && (r >= l && r <= c && s.addClass(i.bulletActiveClass + "-main"), r === l && s.prev().addClass(i.bulletActiveClass + "-prev").prev().addClass(i.bulletActiveClass + "-prev-prev"), r === c && s.next().addClass(i.bulletActiveClass + "-next").next().addClass(i.bulletActiveClass + "-next-next"))
                                });
                                else {
                                    if (u.eq(n).addClass(i.bulletActiveClass), i.dynamicBullets) {
                                        for (var p = u.eq(l), h = u.eq(c), f = l; f <= c; f += 1) u.eq(f).addClass(i.bulletActiveClass + "-main");
                                        p.prev().addClass(i.bulletActiveClass + "-prev").prev().addClass(i.bulletActiveClass + "-prev-prev"), h.next().addClass(i.bulletActiveClass + "-next").next().addClass(i.bulletActiveClass + "-next-next")
                                    }
                                }
                                if (i.dynamicBullets) {
                                    var m = Math.min(u.length, i.dynamicMainBullets + 4),
                                        v = (t.pagination.bulletSize * m - t.pagination.bulletSize) / 2 - d * t.pagination.bulletSize,
                                        g = a ? "right" : "left";
                                    u.css(t.isHorizontal() ? g : "top", v + "px")
                                }
                            }
                            if ("fraction" === i.type && (r.find("." + i.currentClass).text(i.formatFractionCurrent(n + 1)), r.find("." + i.totalClass).text(i.formatFractionTotal(o))), "progressbar" === i.type) {
                                var b;
                                b = i.progressbarOpposite ? t.isHorizontal() ? "vertical" : "horizontal" : t.isHorizontal() ? "horizontal" : "vertical";
                                var y = (n + 1) / o,
                                    w = 1,
                                    C = 1;
                                "horizontal" === b ? w = y : C = y, r.find("." + i.progressbarFillClass).transform("translate3d(0,0,0) scaleX(" + w + ") scaleY(" + C + ")").transition(t.params.speed)
                            }
                            "custom" === i.type && i.renderCustom ? (r.html(i.renderCustom(t, n + 1, o)), t.emit("paginationRender", t, r[0])) : t.emit("paginationUpdate", t, r[0]), r[t.params.watchOverflow && t.isLocked ? "addClass" : "removeClass"](i.lockClass)
                        }
                    },
                    render: function () {
                        var e = this,
                            t = e.params.pagination;
                        if (t.el && e.pagination.el && e.pagination.$el && 0 !== e.pagination.$el.length) {
                            var a = e.virtual && e.params.virtual.enabled ? e.virtual.slides.length : e.slides.length,
                                i = e.pagination.$el,
                                n = "";
                            if ("bullets" === t.type) {
                                for (var s = e.params.loop ? Math.ceil((a - 2 * e.loopedSlides) / e.params.slidesPerGroup) : e.snapGrid.length, r = 0; r < s; r += 1) t.renderBullet ? n += t.renderBullet.call(e, r, t.bulletClass) : n += "<" + t.bulletElement + ' class="' + t.bulletClass + '"></' + t.bulletElement + ">";
                                i.html(n), e.pagination.bullets = i.find("." + t.bulletClass)
                            }
                            "fraction" === t.type && (n = t.renderFraction ? t.renderFraction.call(e, t.currentClass, t.totalClass) : '<span class="' + t.currentClass + '"></span> / <span class="' + t.totalClass + '"></span>', i.html(n)), "progressbar" === t.type && (n = t.renderProgressbar ? t.renderProgressbar.call(e, t.progressbarFillClass) : '<span class="' + t.progressbarFillClass + '"></span>', i.html(n)), "custom" !== t.type && e.emit("paginationRender", e.pagination.$el[0])
                        }
                    },
                    init: function () {
                        var t = this,
                            a = t.params.pagination;
                        if (a.el) {
                            var i = e(a.el);
                            0 !== i.length && (t.params.uniqueNavElements && "string" == typeof a.el && i.length > 1 && 1 === t.$el.find(a.el).length && (i = t.$el.find(a.el)), "bullets" === a.type && a.clickable && i.addClass(a.clickableClass), i.addClass(a.modifierClass + a.type), "bullets" === a.type && a.dynamicBullets && (i.addClass("" + a.modifierClass + a.type + "-dynamic"), t.pagination.dynamicBulletIndex = 0, a.dynamicMainBullets < 1 && (a.dynamicMainBullets = 1)), "progressbar" === a.type && a.progressbarOpposite && i.addClass(a.progressbarOppositeClass), a.clickable && i.on("click", "." + a.bulletClass, function (a) {
                                a.preventDefault();
                                var i = e(this).index() * t.params.slidesPerGroup;
                                t.params.loop && (i += t.loopedSlides), t.slideTo(i)
                            }), Fe.extend(t.pagination, {
                                $el: i,
                                el: i[0]
                            }))
                        }
                    },
                    destroy: function () {
                        var e = this,
                            t = e.params.pagination;
                        if (t.el && e.pagination.el && e.pagination.$el && 0 !== e.pagination.$el.length) {
                            var a = e.pagination.$el;
                            a.removeClass(t.hiddenClass), a.removeClass(t.modifierClass + t.type), e.pagination.bullets && e.pagination.bullets.removeClass(t.bulletActiveClass), t.clickable && a.off("click", "." + t.bulletClass)
                        }
                    }
                },
                St = {
                    name: "pagination",
                    params: {
                        pagination: {
                            el: null,
                            bulletElement: "span",
                            clickable: !1,
                            hideOnClick: !1,
                            renderBullet: null,
                            renderProgressbar: null,
                            renderFraction: null,
                            renderCustom: null,
                            progressbarOpposite: !1,
                            type: "bullets",
                            dynamicBullets: !1,
                            dynamicMainBullets: 1,
                            formatFractionCurrent: function (e) {
                                return e
                            },
                            formatFractionTotal: function (e) {
                                return e
                            },
                            bulletClass: "swiper-pagination-bullet",
                            bulletActiveClass: "swiper-pagination-bullet-active",
                            modifierClass: "swiper-pagination-",
                            currentClass: "swiper-pagination-current",
                            totalClass: "swiper-pagination-total",
                            hiddenClass: "swiper-pagination-hidden",
                            progressbarFillClass: "swiper-pagination-progressbar-fill",
                            progressbarOppositeClass: "swiper-pagination-progressbar-opposite",
                            clickableClass: "swiper-pagination-clickable",
                            lockClass: "swiper-pagination-lock"
                        }
                    },
                    create: function () {
                        var e = this;
                        Fe.extend(e, {
                            pagination: {
                                init: Ct.init.bind(e),
                                render: Ct.render.bind(e),
                                update: Ct.update.bind(e),
                                destroy: Ct.destroy.bind(e),
                                dynamicBulletIndex: 0
                            }
                        })
                    },
                    on: {
                        init: function () {
                            var e = this;
                            e.pagination.init(), e.pagination.render(), e.pagination.update()
                        },
                        activeIndexChange: function () {
                            var e = this;
                            e.params.loop ? e.pagination.update() : void 0 === e.snapIndex && e.pagination.update()
                        },
                        snapIndexChange: function () {
                            var e = this;
                            e.params.loop || e.pagination.update()
                        },
                        slidesLengthChange: function () {
                            var e = this;
                            e.params.loop && (e.pagination.render(), e.pagination.update())
                        },
                        snapGridLengthChange: function () {
                            var e = this;
                            e.params.loop || (e.pagination.render(), e.pagination.update())
                        },
                        destroy: function () {
                            this.pagination.destroy()
                        },
                        click: function (t) {
                            var a = this;
                            a.params.pagination.el && a.params.pagination.hideOnClick && a.pagination.$el.length > 0 && !e(t.target).hasClass(a.params.pagination.bulletClass) && a.pagination.$el.toggleClass(a.params.pagination.hiddenClass)
                        }
                    }
                },
                Tt = {
                    setTranslate: function () {
                        var e = this;
                        if (e.params.scrollbar.el && e.scrollbar.el) {
                            var t = e.scrollbar,
                                a = e.rtlTranslate,
                                i = e.progress,
                                n = t.dragSize,
                                s = t.trackSize,
                                r = t.$dragEl,
                                o = t.$el,
                                l = e.params.scrollbar,
                                c = n,
                                d = (s - n) * i;
                            a ? (d = -d, d > 0 ? (c = n - d, d = 0) : -d + n > s && (c = s + d)) : d < 0 ? (c = n + d, d = 0) : d + n > s && (c = s - d), e.isHorizontal() ? (Ne.transforms3d ? r.transform("translate3d(" + d + "px, 0, 0)") : r.transform("translateX(" + d + "px)"), r[0].style.width = c + "px") : (Ne.transforms3d ? r.transform("translate3d(0px, " + d + "px, 0)") : r.transform("translateY(" + d + "px)"), r[0].style.height = c + "px"), l.hide && (clearTimeout(e.scrollbar.timeout), o[0].style.opacity = 1, e.scrollbar.timeout = setTimeout(function () {
                                o[0].style.opacity = 0, o.transition(400)
                            }, 1e3))
                        }
                    },
                    setTransition: function (e) {
                        var t = this;
                        t.params.scrollbar.el && t.scrollbar.el && t.scrollbar.$dragEl.transition(e)
                    },
                    updateSize: function () {
                        var e = this;
                        if (e.params.scrollbar.el && e.scrollbar.el) {
                            var t = e.scrollbar,
                                a = t.$dragEl,
                                i = t.$el;
                            a[0].style.width = "", a[0].style.height = "";
                            var n, s = e.isHorizontal() ? i[0].offsetWidth : i[0].offsetHeight,
                                r = e.size / e.virtualSize,
                                o = r * (s / e.size);
                            n = "auto" === e.params.scrollbar.dragSize ? s * r : parseInt(e.params.scrollbar.dragSize, 10), e.isHorizontal() ? a[0].style.width = n + "px" : a[0].style.height = n + "px", i[0].style.display = r >= 1 ? "none" : "", e.params.scrollbarHide && (i[0].style.opacity = 0), Fe.extend(t, {
                                trackSize: s,
                                divider: r,
                                moveDivider: o,
                                dragSize: n
                            }), t.$el[e.params.watchOverflow && e.isLocked ? "addClass" : "removeClass"](e.params.scrollbar.lockClass)
                        }
                    },
                    setDragPosition: function (e) {
                        var t, a = this,
                            i = a.scrollbar,
                            n = a.rtlTranslate,
                            s = i.$el,
                            r = i.dragSize,
                            o = i.trackSize;
                        t = a.isHorizontal() ? "touchstart" === e.type || "touchmove" === e.type ? e.targetTouches[0].pageX : e.pageX || e.clientX : "touchstart" === e.type || "touchmove" === e.type ? e.targetTouches[0].pageY : e.pageY || e.clientY;
                        var l;
                        l = (t - s.offset()[a.isHorizontal() ? "left" : "top"] - r / 2) / (o - r), l = Math.max(Math.min(l, 1), 0), n && (l = 1 - l);
                        var c = a.minTranslate() + (a.maxTranslate() - a.minTranslate()) * l;
                        a.updateProgress(c), a.setTranslate(c), a.updateActiveIndex(), a.updateSlidesClasses()
                    },
                    onDragStart: function (e) {
                        var t = this,
                            a = t.params.scrollbar,
                            i = t.scrollbar,
                            n = t.$wrapperEl,
                            s = i.$el,
                            r = i.$dragEl;
                        t.scrollbar.isTouched = !0, e.preventDefault(), e.stopPropagation(), n.transition(100), r.transition(100), i.setDragPosition(e), clearTimeout(t.scrollbar.dragTimeout), s.transition(0), a.hide && s.css("opacity", 1), t.emit("scrollbarDragStart", e)
                    },
                    onDragMove: function (e) {
                        var t = this,
                            a = t.scrollbar,
                            i = t.$wrapperEl,
                            n = a.$el,
                            s = a.$dragEl;
                        t.scrollbar.isTouched && (e.preventDefault ? e.preventDefault() : e.returnValue = !1, a.setDragPosition(e), i.transition(0), n.transition(0), s.transition(0), t.emit("scrollbarDragMove", e))
                    },
                    onDragEnd: function (e) {
                        var t = this,
                            a = t.params.scrollbar,
                            i = t.scrollbar,
                            n = i.$el;
                        t.scrollbar.isTouched && (t.scrollbar.isTouched = !1, a.hide && (clearTimeout(t.scrollbar.dragTimeout), t.scrollbar.dragTimeout = Fe.nextTick(function () {
                            n.css("opacity", 0), n.transition(400)
                        }, 1e3)), t.emit("scrollbarDragEnd", e), a.snapOnRelease && t.slideToClosest())
                    },
                    enableDraggable: function () {
                        var e = this;
                        if (e.params.scrollbar.el) {
                            var t = e.scrollbar,
                                a = e.touchEvents,
                                i = e.touchEventsDesktop,
                                n = e.params,
                                s = t.$el,
                                r = s[0],
                                o = !(!Ne.passiveListener || !n.passiveListener) && {
                                    passive: !1,
                                    capture: !1
                                },
                                l = !(!Ne.passiveListener || !n.passiveListener) && {
                                    passive: !0,
                                    capture: !1
                                };
                            Ne.touch || !Ne.pointerEvents && !Ne.prefixedPointerEvents ? (Ne.touch && (r.addEventListener(a.start, e.scrollbar.onDragStart, o), r.addEventListener(a.move, e.scrollbar.onDragMove, o), r.addEventListener(a.end, e.scrollbar.onDragEnd, l)), (n.simulateTouch && !Ue.ios && !Ue.android || n.simulateTouch && !Ne.touch && Ue.ios) && (r.addEventListener("mousedown", e.scrollbar.onDragStart, o), Ie.addEventListener("mousemove", e.scrollbar.onDragMove, o), Ie.addEventListener("mouseup", e.scrollbar.onDragEnd, l))) : (r.addEventListener(i.start, e.scrollbar.onDragStart, o), Ie.addEventListener(i.move, e.scrollbar.onDragMove, o), Ie.addEventListener(i.end, e.scrollbar.onDragEnd, l))
                        }
                    },
                    disableDraggable: function () {
                        var e = this;
                        if (e.params.scrollbar.el) {
                            var t = e.scrollbar,
                                a = e.touchEvents,
                                i = e.touchEventsDesktop,
                                n = e.params,
                                s = t.$el,
                                r = s[0],
                                o = !(!Ne.passiveListener || !n.passiveListener) && {
                                    passive: !1,
                                    capture: !1
                                },
                                l = !(!Ne.passiveListener || !n.passiveListener) && {
                                    passive: !0,
                                    capture: !1
                                };
                            Ne.touch || !Ne.pointerEvents && !Ne.prefixedPointerEvents ? (Ne.touch && (r.removeEventListener(a.start, e.scrollbar.onDragStart, o), r.removeEventListener(a.move, e.scrollbar.onDragMove, o), r.removeEventListener(a.end, e.scrollbar.onDragEnd, l)), (n.simulateTouch && !Ue.ios && !Ue.android || n.simulateTouch && !Ne.touch && Ue.ios) && (r.removeEventListener("mousedown", e.scrollbar.onDragStart, o), Ie.removeEventListener("mousemove", e.scrollbar.onDragMove, o), Ie.removeEventListener("mouseup", e.scrollbar.onDragEnd, l))) : (r.removeEventListener(i.start, e.scrollbar.onDragStart, o), Ie.removeEventListener(i.move, e.scrollbar.onDragMove, o), Ie.removeEventListener(i.end, e.scrollbar.onDragEnd, l))
                        }
                    },
                    init: function () {
                        var t = this;
                        if (t.params.scrollbar.el) {
                            var a = t.scrollbar,
                                i = t.$el,
                                n = t.params.scrollbar,
                                s = e(n.el);
                            t.params.uniqueNavElements && "string" == typeof n.el && s.length > 1 && 1 === i.find(n.el).length && (s = i.find(n.el));
                            var r = s.find("." + t.params.scrollbar.dragClass);
                            0 === r.length && (r = e('<div class="' + t.params.scrollbar.dragClass + '"></div>'), s.append(r)), Fe.extend(a, {
                                $el: s,
                                el: s[0],
                                $dragEl: r,
                                dragEl: r[0]
                            }), n.draggable && a.enableDraggable()
                        }
                    },
                    destroy: function () {
                        this.scrollbar.disableDraggable()
                    }
                },
                _t = {
                    name: "scrollbar",
                    params: {
                        scrollbar: {
                            el: null,
                            dragSize: "auto",
                            hide: !1,
                            draggable: !1,
                            snapOnRelease: !0,
                            lockClass: "swiper-scrollbar-lock",
                            dragClass: "swiper-scrollbar-drag"
                        }
                    },
                    create: function () {
                        var e = this;
                        Fe.extend(e, {
                            scrollbar: {
                                init: Tt.init.bind(e),
                                destroy: Tt.destroy.bind(e),
                                updateSize: Tt.updateSize.bind(e),
                                setTranslate: Tt.setTranslate.bind(e),
                                setTransition: Tt.setTransition.bind(e),
                                enableDraggable: Tt.enableDraggable.bind(e),
                                disableDraggable: Tt.disableDraggable.bind(e),
                                setDragPosition: Tt.setDragPosition.bind(e),
                                onDragStart: Tt.onDragStart.bind(e),
                                onDragMove: Tt.onDragMove.bind(e),
                                onDragEnd: Tt.onDragEnd.bind(e),
                                isTouched: !1,
                                timeout: null,
                                dragTimeout: null
                            }
                        })
                    },
                    on: {
                        init: function () {
                            var e = this;
                            e.scrollbar.init(), e.scrollbar.updateSize(), e.scrollbar.setTranslate()
                        },
                        update: function () {
                            this.scrollbar.updateSize()
                        },
                        resize: function () {
                            this.scrollbar.updateSize()
                        },
                        observerUpdate: function () {
                            this.scrollbar.updateSize()
                        },
                        setTranslate: function () {
                            this.scrollbar.setTranslate()
                        },
                        setTransition: function (e) {
                            this.scrollbar.setTransition(e)
                        },
                        destroy: function () {
                            this.scrollbar.destroy()
                        }
                    }
                },
                xt = {
                    setTransform: function (t, a) {
                        var i = this,
                            n = i.rtl,
                            s = e(t),
                            r = n ? -1 : 1,
                            o = s.attr("data-swiper-parallax") || "0",
                            l = s.attr("data-swiper-parallax-x"),
                            c = s.attr("data-swiper-parallax-y"),
                            d = s.attr("data-swiper-parallax-scale"),
                            u = s.attr("data-swiper-parallax-opacity");
                        if (l || c ? (l = l || "0", c = c || "0") : i.isHorizontal() ? (l = o, c = "0") : (c = o, l = "0"), l = l.indexOf("%") >= 0 ? parseInt(l, 10) * a * r + "%" : l * a * r + "px", c = c.indexOf("%") >= 0 ? parseInt(c, 10) * a + "%" : c * a + "px", void 0 !== u && null !== u) {
                            var p = u - (u - 1) * (1 - Math.abs(a));
                            s[0].style.opacity = p
                        }
                        if (void 0 === d || null === d) s.transform("translate3d(" + l + ", " + c + ", 0px)");
                        else {
                            var h = d - (d - 1) * (1 - Math.abs(a));
                            s.transform("translate3d(" + l + ", " + c + ", 0px) scale(" + h + ")")
                        }
                    },
                    setTranslate: function () {
                        var t = this,
                            a = t.$el,
                            i = t.slides,
                            n = t.progress,
                            s = t.snapGrid;
                        a.children("[data-swiper-parallax], [data-swiper-parallax-x], [data-swiper-parallax-y]").each(function (e, a) {
                            t.parallax.setTransform(a, n)
                        }), i.each(function (a, i) {
                            var r = i.progress;
                            t.params.slidesPerGroup > 1 && "auto" !== t.params.slidesPerView && (r += Math.ceil(a / 2) - n * (s.length - 1)), r = Math.min(Math.max(r, -1), 1), e(i).find("[data-swiper-parallax], [data-swiper-parallax-x], [data-swiper-parallax-y]").each(function (e, a) {
                                t.parallax.setTransform(a, r)
                            })
                        })
                    },
                    setTransition: function (t) {
                        void 0 === t && (t = this.params.speed), this.$el.find("[data-swiper-parallax], [data-swiper-parallax-x], [data-swiper-parallax-y]").each(function (a, i) {
                            var n = e(i),
                                s = parseInt(n.attr("data-swiper-parallax-duration"), 10) || t;
                            0 === t && (s = 0), n.transition(s)
                        })
                    }
                },
                Et = {
                    name: "parallax",
                    params: {
                        parallax: {
                            enabled: !1
                        }
                    },
                    create: function () {
                        var e = this;
                        Fe.extend(e, {
                            parallax: {
                                setTransform: xt.setTransform.bind(e),
                                setTranslate: xt.setTranslate.bind(e),
                                setTransition: xt.setTransition.bind(e)
                            }
                        })
                    },
                    on: {
                        beforeInit: function () {
                            var e = this;
                            e.params.parallax.enabled && (e.params.watchSlidesProgress = !0)
                        },
                        init: function () {
                            var e = this;
                            e.params.parallax && e.parallax.setTranslate()
                        },
                        setTranslate: function () {
                            var e = this;
                            e.params.parallax && e.parallax.setTranslate()
                        },
                        setTransition: function (e) {
                            var t = this;
                            t.params.parallax && t.parallax.setTransition(e)
                        }
                    }
                },
                Mt = {
                    getDistanceBetweenTouches: function (e) {
                        if (e.targetTouches.length < 2) return 1;
                        var t = e.targetTouches[0].pageX,
                            a = e.targetTouches[0].pageY,
                            i = e.targetTouches[1].pageX,
                            n = e.targetTouches[1].pageY;
                        return Math.sqrt(Math.pow(i - t, 2) + Math.pow(n - a, 2))
                    },
                    onGestureStart: function (t) {
                        var a = this,
                            i = a.params.zoom,
                            n = a.zoom,
                            s = n.gesture;
                        if (n.fakeGestureTouched = !1, n.fakeGestureMoved = !1, !Ne.gestures) {
                            if ("touchstart" !== t.type || "touchstart" === t.type && t.targetTouches.length < 2) return;
                            n.fakeGestureTouched = !0, s.scaleStart = Mt.getDistanceBetweenTouches(t)
                        }
                        if (!(s.$slideEl && s.$slideEl.length || (s.$slideEl = e(t.target).closest(".swiper-slide"), 0 === s.$slideEl.length && (s.$slideEl = a.slides.eq(a.activeIndex)), s.$imageEl = s.$slideEl.find("img, svg, canvas"), s.$imageWrapEl = s.$imageEl.parent("." + i.containerClass), s.maxRatio = s.$imageWrapEl.attr("data-swiper-zoom") || i.maxRatio, 0 !== s.$imageWrapEl.length))) return void(s.$imageEl = void 0);
                        s.$imageEl.transition(0), a.zoom.isScaling = !0
                    },
                    onGestureChange: function (e) {
                        var t = this,
                            a = t.params.zoom,
                            i = t.zoom,
                            n = i.gesture;
                        if (!Ne.gestures) {
                            if ("touchmove" !== e.type || "touchmove" === e.type && e.targetTouches.length < 2) return;
                            i.fakeGestureMoved = !0, n.scaleMove = Mt.getDistanceBetweenTouches(e)
                        }
                        n.$imageEl && 0 !== n.$imageEl.length && (Ne.gestures ? t.zoom.scale = e.scale * i.currentScale : i.scale = n.scaleMove / n.scaleStart * i.currentScale, i.scale > n.maxRatio && (i.scale = n.maxRatio - 1 + Math.pow(i.scale - n.maxRatio + 1, .5)), i.scale < a.minRatio && (i.scale = a.minRatio + 1 - Math.pow(a.minRatio - i.scale + 1, .5)), n.$imageEl.transform("translate3d(0,0,0) scale(" + i.scale + ")"))
                    },
                    onGestureEnd: function (e) {
                        var t = this,
                            a = t.params.zoom,
                            i = t.zoom,
                            n = i.gesture;
                        if (!Ne.gestures) {
                            if (!i.fakeGestureTouched || !i.fakeGestureMoved) return;
                            if ("touchend" !== e.type || "touchend" === e.type && e.changedTouches.length < 2 && !Ue.android) return;
                            i.fakeGestureTouched = !1, i.fakeGestureMoved = !1
                        }
                        n.$imageEl && 0 !== n.$imageEl.length && (i.scale = Math.max(Math.min(i.scale, n.maxRatio), a.minRatio), n.$imageEl.transition(t.params.speed).transform("translate3d(0,0,0) scale(" + i.scale + ")"), i.currentScale = i.scale, i.isScaling = !1, 1 === i.scale && (n.$slideEl = void 0))
                    },
                    onTouchStart: function (e) {
                        var t = this,
                            a = t.zoom,
                            i = a.gesture,
                            n = a.image;
                        i.$imageEl && 0 !== i.$imageEl.length && (n.isTouched || (Ue.android && e.preventDefault(), n.isTouched = !0, n.touchesStart.x = "touchstart" === e.type ? e.targetTouches[0].pageX : e.pageX, n.touchesStart.y = "touchstart" === e.type ? e.targetTouches[0].pageY : e.pageY))
                    },
                    onTouchMove: function (e) {
                        var t = this,
                            a = t.zoom,
                            i = a.gesture,
                            n = a.image,
                            s = a.velocity;
                        if (i.$imageEl && 0 !== i.$imageEl.length && (t.allowClick = !1, n.isTouched && i.$slideEl)) {
                            n.isMoved || (n.width = i.$imageEl[0].offsetWidth, n.height = i.$imageEl[0].offsetHeight, n.startX = Fe.getTranslate(i.$imageWrapEl[0], "x") || 0, n.startY = Fe.getTranslate(i.$imageWrapEl[0], "y") || 0, i.slideWidth = i.$slideEl[0].offsetWidth, i.slideHeight = i.$slideEl[0].offsetHeight, i.$imageWrapEl.transition(0), t.rtl && (n.startX = -n.startX, n.startY = -n.startY));
                            var r = n.width * a.scale,
                                o = n.height * a.scale;
                            if (!(r < i.slideWidth && o < i.slideHeight)) {
                                if (n.minX = Math.min(i.slideWidth / 2 - r / 2, 0), n.maxX = -n.minX, n.minY = Math.min(i.slideHeight / 2 - o / 2, 0), n.maxY = -n.minY, n.touchesCurrent.x = "touchmove" === e.type ? e.targetTouches[0].pageX : e.pageX, n.touchesCurrent.y = "touchmove" === e.type ? e.targetTouches[0].pageY : e.pageY, !n.isMoved && !a.isScaling) {
                                    if (t.isHorizontal() && (Math.floor(n.minX) === Math.floor(n.startX) && n.touchesCurrent.x < n.touchesStart.x || Math.floor(n.maxX) === Math.floor(n.startX) && n.touchesCurrent.x > n.touchesStart.x)) return void(n.isTouched = !1);
                                    if (!t.isHorizontal() && (Math.floor(n.minY) === Math.floor(n.startY) && n.touchesCurrent.y < n.touchesStart.y || Math.floor(n.maxY) === Math.floor(n.startY) && n.touchesCurrent.y > n.touchesStart.y)) return void(n.isTouched = !1)
                                }
                                e.preventDefault(), e.stopPropagation(), n.isMoved = !0, n.currentX = n.touchesCurrent.x - n.touchesStart.x + n.startX, n.currentY = n.touchesCurrent.y - n.touchesStart.y + n.startY, n.currentX < n.minX && (n.currentX = n.minX + 1 - Math.pow(n.minX - n.currentX + 1, .8)), n.currentX > n.maxX && (n.currentX = n.maxX - 1 + Math.pow(n.currentX - n.maxX + 1, .8)), n.currentY < n.minY && (n.currentY = n.minY + 1 - Math.pow(n.minY - n.currentY + 1, .8)), n.currentY > n.maxY && (n.currentY = n.maxY - 1 + Math.pow(n.currentY - n.maxY + 1, .8)), s.prevPositionX || (s.prevPositionX = n.touchesCurrent.x), s.prevPositionY || (s.prevPositionY = n.touchesCurrent.y), s.prevTime || (s.prevTime = Date.now()), s.x = (n.touchesCurrent.x - s.prevPositionX) / (Date.now() - s.prevTime) / 2, s.y = (n.touchesCurrent.y - s.prevPositionY) / (Date.now() - s.prevTime) / 2, Math.abs(n.touchesCurrent.x - s.prevPositionX) < 2 && (s.x = 0), Math.abs(n.touchesCurrent.y - s.prevPositionY) < 2 && (s.y = 0), s.prevPositionX = n.touchesCurrent.x, s.prevPositionY = n.touchesCurrent.y, s.prevTime = Date.now(), i.$imageWrapEl.transform("translate3d(" + n.currentX + "px, " + n.currentY + "px,0)")
                            }
                        }
                    },
                    onTouchEnd: function () {
                        var e = this,
                            t = e.zoom,
                            a = t.gesture,
                            i = t.image,
                            n = t.velocity;
                        if (a.$imageEl && 0 !== a.$imageEl.length) {
                            if (!i.isTouched || !i.isMoved) return i.isTouched = !1, void(i.isMoved = !1);
                            i.isTouched = !1, i.isMoved = !1;
                            var s = 300,
                                r = 300,
                                o = n.x * s,
                                l = i.currentX + o,
                                c = n.y * r,
                                d = i.currentY + c;
                            0 !== n.x && (s = Math.abs((l - i.currentX) / n.x)), 0 !== n.y && (r = Math.abs((d - i.currentY) / n.y));
                            var u = Math.max(s, r);
                            i.currentX = l, i.currentY = d;
                            var p = i.width * t.scale,
                                h = i.height * t.scale;
                            i.minX = Math.min(a.slideWidth / 2 - p / 2, 0), i.maxX = -i.minX, i.minY = Math.min(a.slideHeight / 2 - h / 2, 0), i.maxY = -i.minY, i.currentX = Math.max(Math.min(i.currentX, i.maxX), i.minX), i.currentY = Math.max(Math.min(i.currentY, i.maxY), i.minY), a.$imageWrapEl.transition(u).transform("translate3d(" + i.currentX + "px, " + i.currentY + "px,0)")
                        }
                    },
                    onTransitionEnd: function () {
                        var e = this,
                            t = e.zoom,
                            a = t.gesture;
                        a.$slideEl && e.previousIndex !== e.activeIndex && (a.$imageEl.transform("translate3d(0,0,0) scale(1)"), a.$imageWrapEl.transform("translate3d(0,0,0)"), a.$slideEl = void 0, a.$imageEl = void 0, a.$imageWrapEl = void 0, t.scale = 1, t.currentScale = 1)
                    },
                    toggle: function (e) {
                        var t = this,
                            a = t.zoom;
                        a.scale && 1 !== a.scale ? a.out() : a.in(e)
                    },
                    in: function (t) {
                        var a = this,
                            i = a.zoom,
                            n = a.params.zoom,
                            s = i.gesture,
                            r = i.image;
                        if (s.$slideEl || (s.$slideEl = a.clickedSlide ? e(a.clickedSlide) : a.slides.eq(a.activeIndex), s.$imageEl = s.$slideEl.find("img, svg, canvas"), s.$imageWrapEl = s.$imageEl.parent("." + n.containerClass)), s.$imageEl && 0 !== s.$imageEl.length) {
                            s.$slideEl.addClass("" + n.zoomedSlideClass);
                            var o, l, c, d, u, p, h, f, m, v, g, b, y, w, C, S, T, _;
                            void 0 === r.touchesStart.x && t ? (o = "touchend" === t.type ? t.changedTouches[0].pageX : t.pageX, l = "touchend" === t.type ? t.changedTouches[0].pageY : t.pageY) : (o = r.touchesStart.x, l = r.touchesStart.y), i.scale = s.$imageWrapEl.attr("data-swiper-zoom") || n.maxRatio, i.currentScale = s.$imageWrapEl.attr("data-swiper-zoom") || n.maxRatio, t ? (T = s.$slideEl[0].offsetWidth, _ = s.$slideEl[0].offsetHeight, c = s.$slideEl.offset().left, d = s.$slideEl.offset().top, u = c + T / 2 - o, p = d + _ / 2 - l, m = s.$imageEl[0].offsetWidth, v = s.$imageEl[0].offsetHeight, g = m * i.scale, b = v * i.scale, y = Math.min(T / 2 - g / 2, 0), w = Math.min(_ / 2 - b / 2, 0), C = -y, S = -w, h = u * i.scale, f = p * i.scale, h < y && (h = y), h > C && (h = C), f < w && (f = w), f > S && (f = S)) : (h = 0, f = 0), s.$imageWrapEl.transition(300).transform("translate3d(" + h + "px, " + f + "px,0)"), s.$imageEl.transition(300).transform("translate3d(0,0,0) scale(" + i.scale + ")")
                        }
                    },
                    out: function () {
                        var t = this,
                            a = t.zoom,
                            i = t.params.zoom,
                            n = a.gesture;
                        n.$slideEl || (n.$slideEl = t.clickedSlide ? e(t.clickedSlide) : t.slides.eq(t.activeIndex), n.$imageEl = n.$slideEl.find("img, svg, canvas"), n.$imageWrapEl = n.$imageEl.parent("." + i.containerClass)), n.$imageEl && 0 !== n.$imageEl.length && (a.scale = 1, a.currentScale = 1, n.$imageWrapEl.transition(300).transform("translate3d(0,0,0)"), n.$imageEl.transition(300).transform("translate3d(0,0,0) scale(1)"), n.$slideEl.removeClass("" + i.zoomedSlideClass), n.$slideEl = void 0)
                    },
                    enable: function () {
                        var e = this,
                            t = e.zoom;
                        if (!t.enabled) {
                            t.enabled = !0;
                            var a = !("touchstart" !== e.touchEvents.start || !Ne.passiveListener || !e.params.passiveListeners) && {
                                passive: !0,
                                capture: !1
                            };
                            Ne.gestures ? (e.$wrapperEl.on("gesturestart", ".swiper-slide", t.onGestureStart, a), e.$wrapperEl.on("gesturechange", ".swiper-slide", t.onGestureChange, a), e.$wrapperEl.on("gestureend", ".swiper-slide", t.onGestureEnd, a)) : "touchstart" === e.touchEvents.start && (e.$wrapperEl.on(e.touchEvents.start, ".swiper-slide", t.onGestureStart, a), e.$wrapperEl.on(e.touchEvents.move, ".swiper-slide", t.onGestureChange, a), e.$wrapperEl.on(e.touchEvents.end, ".swiper-slide", t.onGestureEnd, a)), e.$wrapperEl.on(e.touchEvents.move, "." + e.params.zoom.containerClass, t.onTouchMove)
                        }
                    },
                    disable: function () {
                        var e = this,
                            t = e.zoom;
                        if (t.enabled) {
                            e.zoom.enabled = !1;
                            var a = !("touchstart" !== e.touchEvents.start || !Ne.passiveListener || !e.params.passiveListeners) && {
                                passive: !0,
                                capture: !1
                            };
                            Ne.gestures ? (e.$wrapperEl.off("gesturestart", ".swiper-slide", t.onGestureStart, a), e.$wrapperEl.off("gesturechange", ".swiper-slide", t.onGestureChange, a), e.$wrapperEl.off("gestureend", ".swiper-slide", t.onGestureEnd, a)) : "touchstart" === e.touchEvents.start && (e.$wrapperEl.off(e.touchEvents.start, ".swiper-slide", t.onGestureStart, a), e.$wrapperEl.off(e.touchEvents.move, ".swiper-slide", t.onGestureChange, a), e.$wrapperEl.off(e.touchEvents.end, ".swiper-slide", t.onGestureEnd, a)), e.$wrapperEl.off(e.touchEvents.move, "." + e.params.zoom.containerClass, t.onTouchMove)
                        }
                    }
                },
                kt = {
                    name: "zoom",
                    params: {
                        zoom: {
                            enabled: !1,
                            maxRatio: 3,
                            minRatio: 1,
                            toggle: !0,
                            containerClass: "swiper-zoom-container",
                            zoomedSlideClass: "swiper-slide-zoomed"
                        }
                    },
                    create: function () {
                        var e = this,
                            t = {
                                enabled: !1,
                                scale: 1,
                                currentScale: 1,
                                isScaling: !1,
                                gesture: {
                                    $slideEl: void 0,
                                    slideWidth: void 0,
                                    slideHeight: void 0,
                                    $imageEl: void 0,
                                    $imageWrapEl: void 0,
                                    maxRatio: 3
                                },
                                image: {
                                    isTouched: void 0,
                                    isMoved: void 0,
                                    currentX: void 0,
                                    currentY: void 0,
                                    minX: void 0,
                                    minY: void 0,
                                    maxX: void 0,
                                    maxY: void 0,
                                    width: void 0,
                                    height: void 0,
                                    startX: void 0,
                                    startY: void 0,
                                    touchesStart: {},
                                    touchesCurrent: {}
                                },
                                velocity: {
                                    x: void 0,
                                    y: void 0,
                                    prevPositionX: void 0,
                                    prevPositionY: void 0,
                                    prevTime: void 0
                                }
                            };
                        "onGestureStart onGestureChange onGestureEnd onTouchStart onTouchMove onTouchEnd onTransitionEnd toggle enable disable in out".split(" ").forEach(function (a) {
                            t[a] = Mt[a].bind(e)
                        }), Fe.extend(e, {
                            zoom: t
                        })
                    },
                    on: {
                        init: function () {
                            var e = this;
                            e.params.zoom.enabled && e.zoom.enable()
                        },
                        destroy: function () {
                            this.zoom.disable()
                        },
                        touchStart: function (e) {
                            var t = this;
                            t.zoom.enabled && t.zoom.onTouchStart(e)
                        },
                        touchEnd: function (e) {
                            var t = this;
                            t.zoom.enabled && t.zoom.onTouchEnd(e)
                        },
                        doubleTap: function (e) {
                            var t = this;
                            t.params.zoom.enabled && t.zoom.enabled && t.params.zoom.toggle && t.zoom.toggle(e)
                        },
                        transitionEnd: function () {
                            var e = this;
                            e.zoom.enabled && e.params.zoom.enabled && e.zoom.onTransitionEnd()
                        }
                    }
                },
                Pt = {
                    loadInSlide: function (t, a) {
                        void 0 === a && (a = !0);
                        var i = this,
                            n = i.params.lazy;
                        if (void 0 !== t && 0 !== i.slides.length) {
                            var s = i.virtual && i.params.virtual.enabled,
                                r = s ? i.$wrapperEl.children("." + i.params.slideClass + '[data-swiper-slide-index="' + t + '"]') : i.slides.eq(t),
                                o = r.find("." + n.elementClass + ":not(." + n.loadedClass + "):not(." + n.loadingClass + ")");
                            !r.hasClass(n.elementClass) || r.hasClass(n.loadedClass) || r.hasClass(n.loadingClass) || (o = o.add(r[0])), 0 !== o.length && o.each(function (t, s) {
                                var o = e(s);
                                o.addClass(n.loadingClass);
                                var l = o.attr("data-background"),
                                    c = o.attr("data-src"),
                                    d = o.attr("data-srcset"),
                                    u = o.attr("data-sizes");
                                i.loadImage(o[0], c || l, d, u, !1, function () {
                                    if (void 0 !== i && null !== i && i && (!i || i.params) && !i.destroyed) {
                                        if (l ? (o.css("background-image", 'url("' + l + '")'), o.removeAttr("data-background")) : (d && (o.attr("srcset", d), o.removeAttr("data-srcset")), u && (o.attr("sizes", u), o.removeAttr("data-sizes")), c && (o.attr("src", c), o.removeAttr("data-src"))), o.addClass(n.loadedClass).removeClass(n.loadingClass), r.find("." + n.preloaderClass).remove(), i.params.loop && a) {
                                            var e = r.attr("data-swiper-slide-index");
                                            if (r.hasClass(i.params.slideDuplicateClass)) {
                                                var t = i.$wrapperEl.children('[data-swiper-slide-index="' + e + '"]:not(.' + i.params.slideDuplicateClass + ")");
                                                i.lazy.loadInSlide(t.index(), !1)
                                            } else {
                                                var s = i.$wrapperEl.children("." + i.params.slideDuplicateClass + '[data-swiper-slide-index="' + e + '"]');
                                                i.lazy.loadInSlide(s.index(), !1)
                                            }
                                        }
                                        i.emit("lazyImageReady", r[0], o[0])
                                    }
                                }), i.emit("lazyImageLoad", r[0], o[0])
                            })
                        }
                    },
                    load: function () {
                        function t(e) {
                            if (l) {
                                if (n.children("." + s.slideClass + '[data-swiper-slide-index="' + e + '"]').length) return !0
                            } else if (r[e]) return !0;
                            return !1
                        }

                        function a(t) {
                            return l ? e(t).attr("data-swiper-slide-index") : e(t).index()
                        }
                        var i = this,
                            n = i.$wrapperEl,
                            s = i.params,
                            r = i.slides,
                            o = i.activeIndex,
                            l = i.virtual && s.virtual.enabled,
                            c = s.lazy,
                            d = s.slidesPerView;
                        if ("auto" === d && (d = 0), i.lazy.initialImageLoaded || (i.lazy.initialImageLoaded = !0), i.params.watchSlidesVisibility) n.children("." + s.slideVisibleClass).each(function (t, a) {
                            var n = l ? e(a).attr("data-swiper-slide-index") : e(a).index();
                            i.lazy.loadInSlide(n)
                        });
                        else if (d > 1)
                            for (var u = o; u < o + d; u += 1) t(u) && i.lazy.loadInSlide(u);
                        else i.lazy.loadInSlide(o);
                        if (c.loadPrevNext)
                            if (d > 1 || c.loadPrevNextAmount && c.loadPrevNextAmount > 1) {
                                for (var p = c.loadPrevNextAmount, h = d, f = Math.min(o + h + Math.max(p, h), r.length), m = Math.max(o - Math.max(h, p), 0), v = o + d; v < f; v += 1) t(v) && i.lazy.loadInSlide(v);
                                for (var g = m; g < o; g += 1) t(g) && i.lazy.loadInSlide(g)
                            } else {
                                var b = n.children("." + s.slideNextClass);
                                b.length > 0 && i.lazy.loadInSlide(a(b));
                                var y = n.children("." + s.slidePrevClass);
                                y.length > 0 && i.lazy.loadInSlide(a(y))
                            }
                    }
                },
                Dt = {
                    name: "lazy",
                    params: {
                        lazy: {
                            enabled: !1,
                            loadPrevNext: !1,
                            loadPrevNextAmount: 1,
                            loadOnTransitionStart: !1,
                            elementClass: "swiper-lazy",
                            loadingClass: "swiper-lazy-loading",
                            loadedClass: "swiper-lazy-loaded",
                            preloaderClass: "swiper-lazy-preloader"
                        }
                    },
                    create: function () {
                        var e = this;
                        Fe.extend(e, {
                            lazy: {
                                initialImageLoaded: !1,
                                load: Pt.load.bind(e),
                                loadInSlide: Pt.loadInSlide.bind(e)
                            }
                        })
                    },
                    on: {
                        beforeInit: function () {
                            var e = this;
                            e.params.lazy.enabled && e.params.preloadImages && (e.params.preloadImages = !1)
                        },
                        init: function () {
                            var e = this;
                            e.params.lazy.enabled && !e.params.loop && 0 === e.params.initialSlide && e.lazy.load()
                        },
                        scroll: function () {
                            var e = this;
                            e.params.freeMode && !e.params.freeModeSticky && e.lazy.load()
                        },
                        resize: function () {
                            var e = this;
                            e.params.lazy.enabled && e.lazy.load()
                        },
                        scrollbarDragMove: function () {
                            var e = this;
                            e.params.lazy.enabled && e.lazy.load()
                        },
                        transitionStart: function () {
                            var e = this;
                            e.params.lazy.enabled && (e.params.lazy.loadOnTransitionStart || !e.params.lazy.loadOnTransitionStart && !e.lazy.initialImageLoaded) && e.lazy.load()
                        },
                        transitionEnd: function () {
                            var e = this;
                            e.params.lazy.enabled && !e.params.lazy.loadOnTransitionStart && e.lazy.load()
                        }
                    }
                },
                $t = {
                    LinearSpline: function (e, t) {
                        var a = function () {
                            var e, t, a;
                            return function (i, n) {
                                for (t = -1, e = i.length; e - t > 1;) a = e + t >> 1, i[a] <= n ? t = a : e = a;
                                return e
                            }
                        }();
                        this.x = e, this.y = t, this.lastIndex = e.length - 1;
                        var i, n;
                        return this.interpolate = function (e) {
                            return e ? (n = a(this.x, e), i = n - 1, (e - this.x[i]) * (this.y[n] - this.y[i]) / (this.x[n] - this.x[i]) + this.y[i]) : 0
                        }, this
                    },
                    getInterpolateFunction: function (e) {
                        var t = this;
                        t.controller.spline || (t.controller.spline = t.params.loop ? new $t.LinearSpline(t.slidesGrid, e.slidesGrid) : new $t.LinearSpline(t.snapGrid, e.snapGrid))
                    },
                    setTranslate: function (e, t) {
                        function a(e) {
                            var t = s.rtlTranslate ? -s.translate : s.translate;
                            "slide" === s.params.controller.by && (s.controller.getInterpolateFunction(e), n = -s.controller.spline.interpolate(-t)), n && "container" !== s.params.controller.by || (i = (e.maxTranslate() - e.minTranslate()) / (s.maxTranslate() - s.minTranslate()), n = (t - s.minTranslate()) * i + e.minTranslate()), s.params.controller.inverse && (n = e.maxTranslate() - n), e.updateProgress(n), e.setTranslate(n, s), e.updateActiveIndex(), e.updateSlidesClasses()
                        }
                        var i, n, s = this,
                            r = s.controller.control;
                        if (Array.isArray(r))
                            for (var o = 0; o < r.length; o += 1) r[o] !== t && r[o] instanceof rt && a(r[o]);
                        else r instanceof rt && t !== r && a(r)
                    },
                    setTransition: function (e, t) {
                        function a(t) {
                            t.setTransition(e, n), 0 !== e && (t.transitionStart(), t.$wrapperEl.transitionEnd(function () {
                                s && (t.params.loop && "slide" === n.params.controller.by && t.loopFix(), t.transitionEnd())
                            }))
                        }
                        var i, n = this,
                            s = n.controller.control;
                        if (Array.isArray(s))
                            for (i = 0; i < s.length; i += 1) s[i] !== t && s[i] instanceof rt && a(s[i]);
                        else s instanceof rt && t !== s && a(s)
                    }
                },
                Lt = {
                    name: "controller",
                    params: {
                        controller: {
                            control: void 0,
                            inverse: !1,
                            by: "slide"
                        }
                    },
                    create: function () {
                        var e = this;
                        Fe.extend(e, {
                            controller: {
                                control: e.params.controller.control,
                                getInterpolateFunction: $t.getInterpolateFunction.bind(e),
                                setTranslate: $t.setTranslate.bind(e),
                                setTransition: $t.setTransition.bind(e)
                            }
                        })
                    },
                    on: {
                        update: function () {
                            var e = this;
                            e.controller.control && e.controller.spline && (e.controller.spline = void 0, delete e.controller.spline)
                        },
                        resize: function () {
                            var e = this;
                            e.controller.control && e.controller.spline && (e.controller.spline = void 0, delete e.controller.spline)
                        },
                        observerUpdate: function () {
                            var e = this;
                            e.controller.control && e.controller.spline && (e.controller.spline = void 0, delete e.controller.spline)
                        },
                        setTranslate: function (e, t) {
                            var a = this;
                            a.controller.control && a.controller.setTranslate(e, t)
                        },
                        setTransition: function (e, t) {
                            var a = this;
                            a.controller.control && a.controller.setTransition(e, t)
                        }
                    }
                },
                At = {
                    makeElFocusable: function (e) {
                        return e.attr("tabIndex", "0"), e
                    },
                    addElRole: function (e, t) {
                        return e.attr("role", t), e
                    },
                    addElLabel: function (e, t) {
                        return e.attr("aria-label", t), e
                    },
                    disableEl: function (e) {
                        return e.attr("aria-disabled", !0), e
                    },
                    enableEl: function (e) {
                        return e.attr("aria-disabled", !1), e
                    },
                    onEnterKey: function (t) {
                        var a = this,
                            i = a.params.a11y;
                        if (13 === t.keyCode) {
                            var n = e(t.target);
                            a.navigation && a.navigation.$nextEl && n.is(a.navigation.$nextEl) && (a.isEnd && !a.params.loop || a.slideNext(), a.isEnd ? a.a11y.notify(i.lastSlideMessage) : a.a11y.notify(i.nextSlideMessage)), a.navigation && a.navigation.$prevEl && n.is(a.navigation.$prevEl) && (a.isBeginning && !a.params.loop || a.slidePrev(), a.isBeginning ? a.a11y.notify(i.firstSlideMessage) : a.a11y.notify(i.prevSlideMessage)), a.pagination && n.is("." + a.params.pagination.bulletClass) && n[0].click()
                        }
                    },
                    notify: function (e) {
                        var t = this,
                            a = t.a11y.liveRegion;
                        0 !== a.length && (a.html(""), a.html(e))
                    },
                    updateNavigation: function () {
                        var e = this;
                        if (!e.params.loop) {
                            var t = e.navigation,
                                a = t.$nextEl,
                                i = t.$prevEl;
                            i && i.length > 0 && (e.isBeginning ? e.a11y.disableEl(i) : e.a11y.enableEl(i)), a && a.length > 0 && (e.isEnd ? e.a11y.disableEl(a) : e.a11y.enableEl(a))
                        }
                    },
                    updatePagination: function () {
                        var t = this,
                            a = t.params.a11y;
                        t.pagination && t.params.pagination.clickable && t.pagination.bullets && t.pagination.bullets.length && t.pagination.bullets.each(function (i, n) {
                            var s = e(n);
                            t.a11y.makeElFocusable(s), t.a11y.addElRole(s, "button"), t.a11y.addElLabel(s, a.paginationBulletMessage.replace(/{{index}}/, s.index() + 1))
                        })
                    },
                    init: function () {
                        var e = this;
                        e.$el.append(e.a11y.liveRegion);
                        var t, a, i = e.params.a11y;
                        e.navigation && e.navigation.$nextEl && (t = e.navigation.$nextEl), e.navigation && e.navigation.$prevEl && (a = e.navigation.$prevEl), t && (e.a11y.makeElFocusable(t), e.a11y.addElRole(t, "button"), e.a11y.addElLabel(t, i.nextSlideMessage), t.on("keydown", e.a11y.onEnterKey)), a && (e.a11y.makeElFocusable(a), e.a11y.addElRole(a, "button"), e.a11y.addElLabel(a, i.prevSlideMessage), a.on("keydown", e.a11y.onEnterKey)), e.pagination && e.params.pagination.clickable && e.pagination.bullets && e.pagination.bullets.length && e.pagination.$el.on("keydown", "." + e.params.pagination.bulletClass, e.a11y.onEnterKey)
                    },
                    destroy: function () {
                        var e = this;
                        e.a11y.liveRegion && e.a11y.liveRegion.length > 0 && e.a11y.liveRegion.remove();
                        var t, a;
                        e.navigation && e.navigation.$nextEl && (t = e.navigation.$nextEl), e.navigation && e.navigation.$prevEl && (a = e.navigation.$prevEl), t && t.off("keydown", e.a11y.onEnterKey), a && a.off("keydown", e.a11y.onEnterKey), e.pagination && e.params.pagination.clickable && e.pagination.bullets && e.pagination.bullets.length && e.pagination.$el.off("keydown", "." + e.params.pagination.bulletClass, e.a11y.onEnterKey)
                    }
                },
                Ot = {
                    name: "a11y",
                    params: {
                        a11y: {
                            enabled: !0,
                            notificationClass: "swiper-notification",
                            prevSlideMessage: "Previous slide",
                            nextSlideMessage: "Next slide",
                            firstSlideMessage: "This is the first slide",
                            lastSlideMessage: "This is the last slide",
                            paginationBulletMessage: "Go to slide {{index}}"
                        }
                    },
                    create: function () {
                        var t = this;
                        Fe.extend(t, {
                            a11y: {
                                liveRegion: e('<span class="' + t.params.a11y.notificationClass + '" aria-live="assertive" aria-atomic="true"></span>')
                            }
                        }), Object.keys(At).forEach(function (e) {
                            t.a11y[e] = At[e].bind(t)
                        })
                    },
                    on: {
                        init: function () {
                            var e = this;
                            e.params.a11y.enabled && (e.a11y.init(), e.a11y.updateNavigation())
                        },
                        toEdge: function () {
                            var e = this;
                            e.params.a11y.enabled && e.a11y.updateNavigation()
                        },
                        fromEdge: function () {
                            var e = this;
                            e.params.a11y.enabled && e.a11y.updateNavigation()
                        },
                        paginationUpdate: function () {
                            var e = this;
                            e.params.a11y.enabled && e.a11y.updatePagination()
                        },
                        destroy: function () {
                            var e = this;
                            e.params.a11y.enabled && e.a11y.destroy()
                        }
                    }
                },
                It = {
                    init: function () {
                        var e = this;
                        if (e.params.history) {
                            if (!He.history || !He.history.pushState) return e.params.history.enabled = !1, void(e.params.hashNavigation.enabled = !0);
                            var t = e.history;
                            t.initialized = !0, t.paths = It.getPathValues(), (t.paths.key || t.paths.value) && (t.scrollToSlide(0, t.paths.value, e.params.runCallbacksOnInit), e.params.history.replaceState || He.addEventListener("popstate", e.history.setHistoryPopState))
                        }
                    },
                    destroy: function () {
                        var e = this;
                        e.params.history.replaceState || He.removeEventListener("popstate", e.history.setHistoryPopState)
                    },
                    setHistoryPopState: function () {
                        var e = this;
                        e.history.paths = It.getPathValues(), e.history.scrollToSlide(e.params.speed, e.history.paths.value, !1)
                    },
                    getPathValues: function () {
                        var e = He.location.pathname.slice(1).split("/").filter(function (e) {
                                return "" !== e
                            }),
                            t = e.length;
                        return {
                            key: e[t - 2],
                            value: e[t - 1]
                        }
                    },
                    setHistory: function (e, t) {
                        var a = this;
                        if (a.history.initialized && a.params.history.enabled) {
                            var i = a.slides.eq(t),
                                n = It.slugify(i.attr("data-history"));
                            He.location.pathname.includes(e) || (n = e + "/" + n);
                            var s = He.history.state;
                            s && s.value === n || (a.params.history.replaceState ? He.history.replaceState({
                                value: n
                            }, null, n) : He.history.pushState({
                                value: n
                            }, null, n))
                        }
                    },
                    slugify: function (e) {
                        return e.toString().toLowerCase().replace(/\s+/g, "-").replace(/[^\w-]+/g, "").replace(/--+/g, "-").replace(/^-+/, "").replace(/-+$/, "")
                    },
                    scrollToSlide: function (e, t, a) {
                        var i = this;
                        if (t)
                            for (var n = 0, s = i.slides.length; n < s; n += 1) {
                                var r = i.slides.eq(n),
                                    o = It.slugify(r.attr("data-history"));
                                if (o === t && !r.hasClass(i.params.slideDuplicateClass)) {
                                    var l = r.index();
                                    i.slideTo(l, e, a)
                                }
                            } else i.slideTo(0, e, a)
                    }
                },
                Ht = {
                    name: "history",
                    params: {
                        history: {
                            enabled: !1,
                            replaceState: !1,
                            key: "slides"
                        }
                    },
                    create: function () {
                        var e = this;
                        Fe.extend(e, {
                            history: {
                                init: It.init.bind(e),
                                setHistory: It.setHistory.bind(e),
                                setHistoryPopState: It.setHistoryPopState.bind(e),
                                scrollToSlide: It.scrollToSlide.bind(e),
                                destroy: It.destroy.bind(e)
                            }
                        })
                    },
                    on: {
                        init: function () {
                            var e = this;
                            e.params.history.enabled && e.history.init()
                        },
                        destroy: function () {
                            var e = this;
                            e.params.history.enabled && e.history.destroy()
                        },
                        transitionEnd: function () {
                            var e = this;
                            e.history.initialized && e.history.setHistory(e.params.history.key, e.activeIndex)
                        }
                    }
                },
                Rt = {
                    onHashCange: function () {
                        var e = this,
                            t = Ie.location.hash.replace("#", "");
                        t !== e.slides.eq(e.activeIndex).attr("data-hash") && e.slideTo(e.$wrapperEl.children("." + e.params.slideClass + '[data-hash="' + t + '"]').index())
                    },
                    setHash: function () {
                        var e = this;
                        if (e.hashNavigation.initialized && e.params.hashNavigation.enabled)
                            if (e.params.hashNavigation.replaceState && He.history && He.history.replaceState) He.history.replaceState(null, null, "#" + e.slides.eq(e.activeIndex).attr("data-hash") || "");
                            else {
                                var t = e.slides.eq(e.activeIndex),
                                    a = t.attr("data-hash") || t.attr("data-history");
                                Ie.location.hash = a || ""
                            }
                    },
                    init: function () {
                        var t = this;
                        if (!(!t.params.hashNavigation.enabled || t.params.history && t.params.history.enabled)) {
                            t.hashNavigation.initialized = !0;
                            var a = Ie.location.hash.replace("#", "");
                            if (a)
                                for (var i = 0, n = t.slides.length; i < n; i += 1) {
                                    var s = t.slides.eq(i),
                                        r = s.attr("data-hash") || s.attr("data-history");
                                    if (r === a && !s.hasClass(t.params.slideDuplicateClass)) {
                                        var o = s.index();
                                        t.slideTo(o, 0, t.params.runCallbacksOnInit, !0)
                                    }
                                }
                            t.params.hashNavigation.watchState && e(He).on("hashchange", t.hashNavigation.onHashCange)
                        }
                    },
                    destroy: function () {
                        var t = this;
                        t.params.hashNavigation.watchState && e(He).off("hashchange", t.hashNavigation.onHashCange)
                    }
                },
                zt = {
                    name: "hash-navigation",
                    params: {
                        hashNavigation: {
                            enabled: !1,
                            replaceState: !1,
                            watchState: !1
                        }
                    },
                    create: function () {
                        var e = this;
                        Fe.extend(e, {
                            hashNavigation: {
                                initialized: !1,
                                init: Rt.init.bind(e),
                                destroy: Rt.destroy.bind(e),
                                setHash: Rt.setHash.bind(e),
                                onHashCange: Rt.onHashCange.bind(e)
                            }
                        })
                    },
                    on: {
                        init: function () {
                            var e = this;
                            e.params.hashNavigation.enabled && e.hashNavigation.init()
                        },
                        destroy: function () {
                            var e = this;
                            e.params.hashNavigation.enabled && e.hashNavigation.destroy()
                        },
                        transitionEnd: function () {
                            var e = this;
                            e.hashNavigation.initialized && e.hashNavigation.setHash()
                        }
                    }
                },
                Ft = {
                    run: function () {
                        var e = this,
                            t = e.slides.eq(e.activeIndex),
                            a = e.params.autoplay.delay;
                        t.attr("data-swiper-autoplay") && (a = t.attr("data-swiper-autoplay") || e.params.autoplay.delay), e.autoplay.timeout = Fe.nextTick(function () {
                            e.params.autoplay.reverseDirection ? e.params.loop ? (e.loopFix(), e.slidePrev(e.params.speed, !0, !0), e.emit("autoplay")) : e.isBeginning ? e.params.autoplay.stopOnLastSlide ? e.autoplay.stop() : (e.slideTo(e.slides.length - 1, e.params.speed, !0, !0), e.emit("autoplay")) : (e.slidePrev(e.params.speed, !0, !0), e.emit("autoplay")) : e.params.loop ? (e.loopFix(), e.slideNext(e.params.speed, !0, !0), e.emit("autoplay")) : e.isEnd ? e.params.autoplay.stopOnLastSlide ? e.autoplay.stop() : (e.slideTo(0, e.params.speed, !0, !0), e.emit("autoplay")) : (e.slideNext(e.params.speed, !0, !0), e.emit("autoplay"))
                        }, a)
                    },
                    start: function () {
                        var e = this;
                        return void 0 === e.autoplay.timeout && (!e.autoplay.running && (e.autoplay.running = !0, e.emit("autoplayStart"), e.autoplay.run(), !0))
                    },
                    stop: function () {
                        var e = this;
                        return !!e.autoplay.running && (void 0 !== e.autoplay.timeout && (e.autoplay.timeout && (clearTimeout(e.autoplay.timeout), e.autoplay.timeout = void 0), e.autoplay.running = !1, e.emit("autoplayStop"), !0))
                    },
                    pause: function (e) {
                        var t = this;
                        t.autoplay.running && (t.autoplay.paused || (t.autoplay.timeout && clearTimeout(t.autoplay.timeout), t.autoplay.paused = !0, 0 !== e && t.params.autoplay.waitForTransition ? (t.$wrapperEl[0].addEventListener("transitionend", t.autoplay.onTransitionEnd), t.$wrapperEl[0].addEventListener("webkitTransitionEnd", t.autoplay.onTransitionEnd)) : (t.autoplay.paused = !1, t.autoplay.run())))
                    }
                },
                Nt = {
                    name: "autoplay",
                    params: {
                        autoplay: {
                            enabled: !1,
                            delay: 3e3,
                            waitForTransition: !0,
                            disableOnInteraction: !0,
                            stopOnLastSlide: !1,
                            reverseDirection: !1
                        }
                    },
                    create: function () {
                        var e = this;
                        Fe.extend(e, {
                            autoplay: {
                                running: !1,
                                paused: !1,
                                run: Ft.run.bind(e),
                                start: Ft.start.bind(e),
                                stop: Ft.stop.bind(e),
                                pause: Ft.pause.bind(e),
                                onTransitionEnd: function (t) {
                                    e && !e.destroyed && e.$wrapperEl && t.target === this && (e.$wrapperEl[0].removeEventListener("transitionend", e.autoplay.onTransitionEnd), e.$wrapperEl[0].removeEventListener("webkitTransitionEnd", e.autoplay.onTransitionEnd), e.autoplay.paused = !1, e.autoplay.running ? e.autoplay.run() : e.autoplay.stop())
                                }
                            }
                        })
                    },
                    on: {
                        init: function () {
                            var e = this;
                            e.params.autoplay.enabled && e.autoplay.start()
                        },
                        beforeTransitionStart: function (e, t) {
                            var a = this;
                            a.autoplay.running && (t || !a.params.autoplay.disableOnInteraction ? a.autoplay.pause(e) : a.autoplay.stop())
                        },
                        sliderFirstMove: function () {
                            var e = this;
                            e.autoplay.running && (e.params.autoplay.disableOnInteraction ? e.autoplay.stop() : e.autoplay.pause())
                        },
                        destroy: function () {
                            var e = this;
                            e.autoplay.running && e.autoplay.stop()
                        }
                    }
                },
                jt = {
                    setTranslate: function () {
                        for (var e = this, t = e.slides, a = 0; a < t.length; a += 1) {
                            var i = e.slides.eq(a),
                                n = i[0].swiperSlideOffset,
                                s = -n;
                            e.params.virtualTranslate || (s -= e.translate);
                            var r = 0;
                            e.isHorizontal() || (r = s, s = 0);
                            var o = e.params.fadeEffect.crossFade ? Math.max(1 - Math.abs(i[0].progress), 0) : 1 + Math.min(Math.max(i[0].progress, -1), 0);
                            i.css({
                                opacity: o
                            }).transform("translate3d(" + s + "px, " + r + "px, 0px)")
                        }
                    },
                    setTransition: function (e) {
                        var t = this,
                            a = t.slides,
                            i = t.$wrapperEl;
                        if (a.transition(e), t.params.virtualTranslate && 0 !== e) {
                            var n = !1;
                            a.transitionEnd(function () {
                                if (!n && t && !t.destroyed) {
                                    n = !0, t.animating = !1;
                                    for (var e = ["webkitTransitionEnd", "transitionend"], a = 0; a < e.length; a += 1) i.trigger(e[a])
                                }
                            })
                        }
                    }
                },
                Vt = {
                    name: "effect-fade",
                    params: {
                        fadeEffect: {
                            crossFade: !1
                        }
                    },
                    create: function () {
                        var e = this;
                        Fe.extend(e, {
                            fadeEffect: {
                                setTranslate: jt.setTranslate.bind(e),
                                setTransition: jt.setTransition.bind(e)
                            }
                        })
                    },
                    on: {
                        beforeInit: function () {
                            var e = this;
                            if ("fade" === e.params.effect) {
                                e.classNames.push(e.params.containerModifierClass + "fade");
                                var t = {
                                    slidesPerView: 1,
                                    slidesPerColumn: 1,
                                    slidesPerGroup: 1,
                                    watchSlidesProgress: !0,
                                    spaceBetween: 0,
                                    virtualTranslate: !0
                                };
                                Fe.extend(e.params, t), Fe.extend(e.originalParams, t)
                            }
                        },
                        setTranslate: function () {
                            var e = this;
                            "fade" === e.params.effect && e.fadeEffect.setTranslate()
                        },
                        setTransition: function (e) {
                            var t = this;
                            "fade" === t.params.effect && t.fadeEffect.setTransition(e)
                        }
                    }
                },
                Kt = {
                    setTranslate: function () {
                        var t, a = this,
                            i = a.$el,
                            n = a.$wrapperEl,
                            s = a.slides,
                            r = a.width,
                            o = a.height,
                            l = a.rtlTranslate,
                            c = a.size,
                            d = a.params.cubeEffect,
                            u = a.isHorizontal(),
                            p = a.virtual && a.params.virtual.enabled,
                            h = 0;
                        d.shadow && (u ? (t = n.find(".swiper-cube-shadow"), 0 === t.length && (t = e('<div class="swiper-cube-shadow"></div>'), n.append(t)), t.css({
                            height: r + "px"
                        })) : (t = i.find(".swiper-cube-shadow"), 0 === t.length && (t = e('<div class="swiper-cube-shadow"></div>'), i.append(t))));
                        for (var f = 0; f < s.length; f += 1) {
                            var m = s.eq(f),
                                v = f;
                            p && (v = parseInt(m.attr("data-swiper-slide-index"), 10));
                            var g = 90 * v,
                                b = Math.floor(g / 360);
                            l && (g = -g, b = Math.floor(-g / 360));
                            var y = Math.max(Math.min(m[0].progress, 1), -1),
                                w = 0,
                                C = 0,
                                S = 0;
                            v % 4 == 0 ? (w = 4 * -b * c, S = 0) : (v - 1) % 4 == 0 ? (w = 0, S = 4 * -b * c) : (v - 2) % 4 == 0 ? (w = c + 4 * b * c, S = c) : (v - 3) % 4 == 0 && (w = -c, S = 3 * c + 4 * c * b), l && (w = -w), u || (C = w, w = 0);
                            var T = "rotateX(" + (u ? 0 : -g) + "deg) rotateY(" + (u ? g : 0) + "deg) translate3d(" + w + "px, " + C + "px, " + S + "px)";
                            if (y <= 1 && y > -1 && (h = 90 * v + 90 * y, l && (h = 90 * -v - 90 * y)), m.transform(T), d.slideShadows) {
                                var _ = u ? m.find(".swiper-slide-shadow-left") : m.find(".swiper-slide-shadow-top"),
                                    x = u ? m.find(".swiper-slide-shadow-right") : m.find(".swiper-slide-shadow-bottom");
                                0 === _.length && (_ = e('<div class="swiper-slide-shadow-' + (u ? "left" : "top") + '"></div>'), m.append(_)), 0 === x.length && (x = e('<div class="swiper-slide-shadow-' + (u ? "right" : "bottom") + '"></div>'), m.append(x)), _.length && (_[0].style.opacity = Math.max(-y, 0)), x.length && (x[0].style.opacity = Math.max(y, 0))
                            }
                        }
                        if (n.css({
                                "-webkit-transform-origin": "50% 50% -" + c / 2 + "px",
                                "-moz-transform-origin": "50% 50% -" + c / 2 + "px",
                                "-ms-transform-origin": "50% 50% -" + c / 2 + "px",
                                "transform-origin": "50% 50% -" + c / 2 + "px"
                            }), d.shadow)
                            if (u) t.transform("translate3d(0px, " + (r / 2 + d.shadowOffset) + "px, " + -r / 2 + "px) rotateX(90deg) rotateZ(0deg) scale(" + d.shadowScale + ")");
                            else {
                                var E = Math.abs(h) - 90 * Math.floor(Math.abs(h) / 90),
                                    M = 1.5 - (Math.sin(2 * E * Math.PI / 360) / 2 + Math.cos(2 * E * Math.PI / 360) / 2),
                                    k = d.shadowScale,
                                    P = d.shadowScale / M,
                                    D = d.shadowOffset;
                                t.transform("scale3d(" + k + ", 1, " + P + ") translate3d(0px, " + (o / 2 + D) + "px, " + -o / 2 / P + "px) rotateX(-90deg)")
                            } var $ = Qe.isSafari || Qe.isUiWebView ? -c / 2 : 0;
                        n.transform("translate3d(0px,0," + $ + "px) rotateX(" + (a.isHorizontal() ? 0 : h) + "deg) rotateY(" + (a.isHorizontal() ? -h : 0) + "deg)")
                    },
                    setTransition: function (e) {
                        var t = this,
                            a = t.$el;
                        t.slides.transition(e).find(".swiper-slide-shadow-top, .swiper-slide-shadow-right, .swiper-slide-shadow-bottom, .swiper-slide-shadow-left").transition(e), t.params.cubeEffect.shadow && !t.isHorizontal() && a.find(".swiper-cube-shadow").transition(e)
                    }
                },
                Wt = {
                    name: "effect-cube",
                    params: {
                        cubeEffect: {
                            slideShadows: !0,
                            shadow: !0,
                            shadowOffset: 20,
                            shadowScale: .94
                        }
                    },
                    create: function () {
                        var e = this;
                        Fe.extend(e, {
                            cubeEffect: {
                                setTranslate: Kt.setTranslate.bind(e),
                                setTransition: Kt.setTransition.bind(e)
                            }
                        })
                    },
                    on: {
                        beforeInit: function () {
                            var e = this;
                            if ("cube" === e.params.effect) {
                                e.classNames.push(e.params.containerModifierClass + "cube"), e.classNames.push(e.params.containerModifierClass + "3d");
                                var t = {
                                    slidesPerView: 1,
                                    slidesPerColumn: 1,
                                    slidesPerGroup: 1,
                                    watchSlidesProgress: !0,
                                    resistanceRatio: 0,
                                    spaceBetween: 0,
                                    centeredSlides: !1,
                                    virtualTranslate: !0
                                };
                                Fe.extend(e.params, t), Fe.extend(e.originalParams, t)
                            }
                        },
                        setTranslate: function () {
                            var e = this;
                            "cube" === e.params.effect && e.cubeEffect.setTranslate()
                        },
                        setTransition: function (e) {
                            var t = this;
                            "cube" === t.params.effect && t.cubeEffect.setTransition(e)
                        }
                    }
                },
                Yt = {
                    setTranslate: function () {
                        for (var t = this, a = t.slides, i = t.rtlTranslate, n = 0; n < a.length; n += 1) {
                            var s = a.eq(n),
                                r = s[0].progress;
                            t.params.flipEffect.limitRotation && (r = Math.max(Math.min(s[0].progress, 1), -1));
                            var o = s[0].swiperSlideOffset,
                                l = -180 * r,
                                c = l,
                                d = 0,
                                u = -o,
                                p = 0;
                            if (t.isHorizontal() ? i && (c = -c) : (p = u, u = 0, d = -c, c = 0), s[0].style.zIndex = -Math.abs(Math.round(r)) + a.length, t.params.flipEffect.slideShadows) {
                                var h = t.isHorizontal() ? s.find(".swiper-slide-shadow-left") : s.find(".swiper-slide-shadow-top"),
                                    f = t.isHorizontal() ? s.find(".swiper-slide-shadow-right") : s.find(".swiper-slide-shadow-bottom");
                                0 === h.length && (h = e('<div class="swiper-slide-shadow-' + (t.isHorizontal() ? "left" : "top") + '"></div>'), s.append(h)), 0 === f.length && (f = e('<div class="swiper-slide-shadow-' + (t.isHorizontal() ? "right" : "bottom") + '"></div>'), s.append(f)), h.length && (h[0].style.opacity = Math.max(-r, 0)), f.length && (f[0].style.opacity = Math.max(r, 0))
                            }
                            s.transform("translate3d(" + u + "px, " + p + "px, 0px) rotateX(" + d + "deg) rotateY(" + c + "deg)")
                        }
                    },
                    setTransition: function (e) {
                        var t = this,
                            a = t.slides,
                            i = t.activeIndex,
                            n = t.$wrapperEl;
                        if (a.transition(e).find(".swiper-slide-shadow-top, .swiper-slide-shadow-right, .swiper-slide-shadow-bottom, .swiper-slide-shadow-left").transition(e), t.params.virtualTranslate && 0 !== e) {
                            var s = !1;
                            a.eq(i).transitionEnd(function () {
                                if (!s && t && !t.destroyed) {
                                    s = !0, t.animating = !1;
                                    for (var e = ["webkitTransitionEnd", "transitionend"], a = 0; a < e.length; a += 1) n.trigger(e[a])
                                }
                            })
                        }
                    }
                },
                Bt = {
                    name: "effect-flip",
                    params: {
                        flipEffect: {
                            slideShadows: !0,
                            limitRotation: !0
                        }
                    },
                    create: function () {
                        var e = this;
                        Fe.extend(e, {
                            flipEffect: {
                                setTranslate: Yt.setTranslate.bind(e),
                                setTransition: Yt.setTransition.bind(e)
                            }
                        })
                    },
                    on: {
                        beforeInit: function () {
                            var e = this;
                            if ("flip" === e.params.effect) {
                                e.classNames.push(e.params.containerModifierClass + "flip"), e.classNames.push(e.params.containerModifierClass + "3d");
                                var t = {
                                    slidesPerView: 1,
                                    slidesPerColumn: 1,
                                    slidesPerGroup: 1,
                                    watchSlidesProgress: !0,
                                    spaceBetween: 0,
                                    virtualTranslate: !0
                                };
                                Fe.extend(e.params, t), Fe.extend(e.originalParams, t)
                            }
                        },
                        setTranslate: function () {
                            var e = this;
                            "flip" === e.params.effect && e.flipEffect.setTranslate()
                        },
                        setTransition: function (e) {
                            var t = this;
                            "flip" === t.params.effect && t.flipEffect.setTransition(e)
                        }
                    }
                },
                Xt = {
                    setTranslate: function () {
                        for (var t = this, a = t.width, i = t.height, n = t.slides, s = t.$wrapperEl, r = t.slidesSizesGrid, o = t.params.coverflowEffect, l = t.isHorizontal(), c = t.translate, d = l ? a / 2 - c : i / 2 - c, u = l ? o.rotate : -o.rotate, p = o.depth, h = 0, f = n.length; h < f; h += 1) {
                            var m = n.eq(h),
                                v = r[h],
                                g = m[0].swiperSlideOffset,
                                b = (d - g - v / 2) / v * o.modifier,
                                y = l ? u * b : 0,
                                w = l ? 0 : u * b,
                                C = -p * Math.abs(b),
                                S = l ? 0 : o.stretch * b,
                                T = l ? o.stretch * b : 0;
                            Math.abs(T) < .001 && (T = 0), Math.abs(S) < .001 && (S = 0), Math.abs(C) < .001 && (C = 0), Math.abs(y) < .001 && (y = 0), Math.abs(w) < .001 && (w = 0);
                            var _ = "translate3d(" + T + "px," + S + "px," + C + "px)  rotateX(" + w + "deg) rotateY(" + y + "deg)";
                            if (m.transform(_), m[0].style.zIndex = 1 - Math.abs(Math.round(b)), o.slideShadows) {
                                var x = l ? m.find(".swiper-slide-shadow-left") : m.find(".swiper-slide-shadow-top"),
                                    E = l ? m.find(".swiper-slide-shadow-right") : m.find(".swiper-slide-shadow-bottom");
                                0 === x.length && (x = e('<div class="swiper-slide-shadow-' + (l ? "left" : "top") + '"></div>'), m.append(x)), 0 === E.length && (E = e('<div class="swiper-slide-shadow-' + (l ? "right" : "bottom") + '"></div>'), m.append(E)), x.length && (x[0].style.opacity = b > 0 ? b : 0), E.length && (E[0].style.opacity = -b > 0 ? -b : 0)
                            }
                        }
                        if (Ne.pointerEvents || Ne.prefixedPointerEvents) {
                            s[0].style.perspectiveOrigin = d + "px 50%"
                        }
                    },
                    setTransition: function (e) {
                        this.slides.transition(e).find(".swiper-slide-shadow-top, .swiper-slide-shadow-right, .swiper-slide-shadow-bottom, .swiper-slide-shadow-left").transition(e)
                    }
                },
                Gt = {
                    name: "effect-coverflow",
                    params: {
                        coverflowEffect: {
                            rotate: 50,
                            stretch: 0,
                            depth: 100,
                            modifier: 1,
                            slideShadows: !0
                        }
                    },
                    create: function () {
                        var e = this;
                        Fe.extend(e, {
                            coverflowEffect: {
                                setTranslate: Xt.setTranslate.bind(e),
                                setTransition: Xt.setTransition.bind(e)
                            }
                        })
                    },
                    on: {
                        beforeInit: function () {
                            var e = this;
                            "coverflow" === e.params.effect && (e.classNames.push(e.params.containerModifierClass + "coverflow"), e.classNames.push(e.params.containerModifierClass + "3d"), e.params.watchSlidesProgress = !0, e.originalParams.watchSlidesProgress = !0)
                        },
                        setTranslate: function () {
                            var e = this;
                            "coverflow" === e.params.effect && e.coverflowEffect.setTranslate()
                        },
                        setTransition: function (e) {
                            var t = this;
                            "coverflow" === t.params.effect && t.coverflowEffect.setTransition(e)
                        }
                    }
                },
                qt = [ot, lt, ct, dt, pt, ft, vt, bt, wt, St, _t, Et, kt, Dt, Lt, Ot, Ht, zt, Nt, Vt, Wt, Bt, Gt];
            return void 0 === rt.use && (rt.use = rt.Class.use, rt.installModule = rt.Class.installModule), rt.use(qt), rt
        })
    },
    kCmP: function (e, t) {},
    qSHN: function (e, t, a) {
        "use strict";
        var i = a("pFYg"),
            n = a.n(i),
            s = a("Dd8w"),
            r = a.n(s),
            o = {
                props: {
                    data: Object,
                    loaded: {
                        type: Boolean,
                        default: !1
                    }
                },
                data: function () {
                    return {
                        trigger: "click",
                        is_loaded: !1,
                        options_loading: !0,
                        current_component: "",
                        component_visible: !1,
                        component_data: {},
                        report_dialog: !1,
                        params: {
                            items: []
                        }
                    }
                },
                mounted: function () {
                    this.params = r()({}, this.data), this.component_data = {
                        type: this.params.ctype,
                        id: this.params.cid
                    }
                },
                computed: {
                    options: function () {
                        return this.params.items.slice()
                    }
                },
                methods: {
                    mouseEnter: function () {
                        this.is_loaded || this.reloadMenu()
                    },
                    reloadMenu: function () {
                        var e = this;
                        this.is_loaded = !0, this.$http.Get("/v1/users/actions", this.component_data, function (t) {
                            e.params = t
                        }).fail(function () {
                            e.is_loaded = !1
                        })
                    },
                    redirect: function (e) {
                        window.location.href = e
                    },
                    toDashcase: function (e) {
                        for (var t = e.split(" "), a = 1, i = t.length; a < i; a++) t[a] = t[a].charAt(0).toUpperCase() + t[a].slice(1);
                        return t.join("")
                    },
                    handleCommand: function (e) {
                        if ("edit" == e.value && e.hasOwnProperty("url")) return this.redirect(e.url);
                        if ("report" == e.value) return this.report(e);
                        "ban" == e.value && (this.params.ctype = "user");
                        var t = this.toDashcase(e.value + " " + this.params.ctype);
                        if (this.hasOwnProperty(t)) return this[t](e);
                        console.log(t)
                    },
                    report: function () {
                        console.log("report dialog"), this.current_component = "report-dialog", this.component_visible = !0
                    },
                    confirmCommand: function (e, t, a) {
                        var i = this,
                            s = {};
                        "object" === (void 0 === e ? "undefined" : n()(e)) ? (s = e, s.hasOwnProperty("auc") || (s.auc = !1), s.hasOwnProperty("type") || (s.type = "DELETE")) : (s.url = e, s.type = "DELETE", s.auc = !1), this.$confirm(t, "Warning", {
                            confirmButtonText: "OK",
                            cancelButtonText: "Cancel",
                            type: "warning"
                        }).then(function () {
                            i.$http.Ajax({
                                url: s.url,
                                type: s.type,
                                auc: s.auc,
                                dataType: "json",
                                success: function () {
                                    i.$notify({
                                        type: "success",
                                        offset: 60,
                                        message: "Successfully deleted!"
                                    }), "function" == typeof a && a()
                                },
                                fail: function () {}
                            })
                        }).catch(function () {})
                    },
                    deleteArticle: function () {
                        this.confirmCommand("/v1/articles/" + this.params.cid, "Are you sure you want delete this article?", function (e) {
                            window.location.reload()
                        })
                    },
                    permalinkPost: function () {
                        var e = $("#post-" + this.params.cid);
                        this.component_data.url = window.site.url + e.find(".permalink").attr("href"), this.current_component = "share-dialog", this.component_visible = !0
                    },
                    deletePost: function () {
                        this.confirmCommand("/v1/forums/posts/" + this.params.cid, "Are you sure you want delete this post?", function (e) {
                            window.location.reload()
                        })
                    },
                    editTopic: function () {
                        this.current_component = "edit-post-dialog", this.component_visible = !0
                    },
                    stickyTopic: function (e) {
                        var t = this;
                        this.$http.Patch("/v1/forums/topics/" + this.params.cid + "/sticky", {}, function (a) {
                            var i = $(".discussion-header > .options-menu");
                            i.find(".icon-sticky").remove(), "sticky" == e.key && i.prepend('<i class="icon-sticky"></i>'), t.reloadMenu()
                        })
                    },
                    subscribeTopic: function (e) {
                        var t = this;
                        this.$http.Post("/v1/users/notifications/subscribe", {
                            id: this.params.cid,
                            do: e.label.toLowerCase(),
                            type: "topic.reply"
                        }, function (a) {
                            t.reloadMenu();
                            var i = $(".notify-status");
                            if ("unsubscribe" == e.key) return i.removeClass("active"), void i.attr("title", "You are not subscribed to this topic.");
                            i.addClass("active"), i.attr("title", "You are subscribed to this topic.")
                        })
                    },
                    resolvedTopic: function (e) {
                        this.$http.Patch("/v1/forums/topics/" + this.params.cid + "/resolve", {
                            resolved: "mark-resolved" == e.key
                        }, function (t) {
                            var a = $(".discussion-header > .options-menu");
                            a.find(".icon-sticky").remove(), "mark-resolved" == e.key ? a.find(".ticket-status").addClass("resolved").text("Resolved") : a.find(".ticket-status").removeClass("resolved").text("Unresolved"), window.location.reload()
                        })
                    },
                    closeTopic: function (e) {
                        this.$http.Patch("/v1/forums/topics/" + this.params.cid + "/close", {}, function (e) {
                            window.location.reload()
                        })
                    },
                    deleteTopic: function () {
                        this.confirmCommand("/v1/forums/topics/" + this.params.cid, "Are you sure you want delete this topic?", function (e) {
                            window.location.reload()
                        })
                    },
                    MoveTopic: function () {},
                    editPost: function () {
                        this.current_component = "edit-post-dialog", this.component_visible = !0
                    },
                    editPhoto: function () {
                        this.current_component = "edit-photo-dialog", this.component_visible = !0
                    },
                    deletePhoto: function () {
                        this.confirmCommand("/v1/photos/" + this.params.cid, "Are you sure you want delete this post?", function (e) {
                            window.location.reload()
                        })
                    },
                    banUser: function (e) {
                        this.confirmCommand({
                            url: "/v1/admin/users/" + e.extra + "/ban",
                            type: "PATCH",
                            auc: !0
                        }, "Are you sure you want ban this user?", function (e) {
                            window.location.reload()
                        })
                    },
                    unbanUser: function (e) {
                        this.confirmCommand({
                            url: "/v1/admin/users/" + e.extra + "/unban",
                            type: "PATCH",
                            auc: !0
                        }, "Are you sure you want unban this user?", function (e) {
                            window.location.reload()
                        })
                    },
                    deleteRec: function () {
                        var e = this;
                        this.confirmCommand("/v1/recs/" + this.params.cid, "Are you sure you want delete this recommendation?", function () {
                            if ($("#more-recs-" + e.params.cid).length) return void setTimeout(function () {
                                location.reload()
                            }, 1e3);
                            $("#rec_" + e.params.cid).fadeOut(function () {
                                $(this).remove()
                            })
                        })
                    }
                }
            },
            l = function () {
                var e = this,
                    t = e.$createElement,
                    a = e._self._c || t;
                return a("div", {
                    staticClass: "mdl-dropdown",
                    on: {
                        mouseenter: e.mouseEnter
                    }
                }, [a("el-dropdown", {
                    attrs: {
                        trigger: e.trigger
                    },
                    on: {
                        command: e.handleCommand
                    }
                }, [a("span", {
                    staticClass: "el-dropdown-link"
                }, [a("i", {
                    staticClass: "far fa-chevron-down"
                })]), e._v(" "), a("el-dropdown-menu", {
                    attrs: {
                        slot: "dropdown"
                    },
                    slot: "dropdown"
                }, [e.options.length <= 0 ? a("div", {
                    staticClass: "el-dropdown-menu__item"
                }) : e._e(), e._v(" "), e._l(e.options, function (t) {
                    return a("el-dropdown-item", {
                        key: t.value,
                        attrs: {
                            command: t
                        }
                    }, [t.icon ? a("i", {
                        class: t.icon
                    }) : e._e(), e._v(e._s(t.label))])
                })], 2)], 1), e._v(" "), e.component_visible ? a(e.current_component, {
                    tag: "component",
                    attrs: {
                        visible: e.component_visible,
                        data: e.component_data
                    },
                    on: {
                        "update:visible": function (t) {
                            e.component_visible = t
                        }
                    }
                }) : e._e()], 1)
            },
            c = [],
            d = {
                render: l,
                staticRenderFns: c
            },
            u = d,
            p = a("VU/8"),
            h = p(o, u, !1, null, null, null);
        t.a = h.exports
    },
    qmEX: function (e, t, a) {
        "use strict";

        function i(e, t) {
            
        }

        function n() {
            this._locked = !1, this.domain = window.location.hostname.indexOf("beta4b") >= 0 ? "https://dev-api2.mydramalist.com" : "", this.interval_delay = 1e4, this.cdata = [], this.access_token = "", this.lang = null, this.auc = !1, document.documentElement.lang && (this.lang = document.documentElement.lang);
            var e = ("; " + document.cookie).split("; jl_sess=").pop().split(";").shift();
            "" != e && (this.access_token = e)
        }
        var s = a("pFYg"),
            r = a.n(s),
            o = a("7+uW"),
            l = a("L/hj");
        n.prototype.SetToken = function (e) {
            "" != e && (this.access_token = e, $(".beta4").text("v4.1"))
        }, n.prototype.SetLang = function (e) {
            this.lang = e
        }, n.prototype.getAUCToken = function (e) {
            return void 0 === this.auc_token && (this.auc_token = ("; " + document.cookie).split("; jl_auc=").pop().split(";").shift()), this.auc_token
        }, n.prototype.Lock = function (e) {
            return !!this._locked || (this._locked = !0, "function" == typeof e && e(), !1)
        }, n.prototype.Release = function (e) {
            this._locked = !1, "function" == typeof e && e()
        }, n.prototype.IsLocked = function () {
            return this._locked
        }, n.prototype.GetDomain = function () {
            return this.domain
        }, n.prototype.BuildParams = function (e) {
            return $.param(e)
        }, n.prototype.buildURL = function (e) {
            if (e.indexOf("https://") >= 0) return e;
            var t = {
                token: this.access_token
            };
            "" !== this.lang && e.indexOf("lang=") < 0 && (t.lang = this.lang);
            var a = $.param(t);
            return e.indexOf("?") >= 0 ? this.domain + e + "&" + a : this.domain + e + "?" + a
        }, n.prototype.setCpushInternval = function (e, t) {
            this.cpush_internval = setInterval(function () {
                console.log("push interval")
            }, this.interval_delay)
        }, n.prototype.CPush = function (e, t) {}, n.prototype.Collect = function (e, t, a) {
            var i = {
                url: "https://stats.mydramalist.com/collect",
                type: "GET"
            };
            e.token = this.access_token, i.data = e, "function" == typeof t && "function" != typeof i.success && (i.success = t);
            $.ajax(i)
        }, n.prototype.Ajax = function (e, t, a) {
            e.dataType = "json", e.url = this.buildURL(e.url), !0 !== e.auc && !0 !== this.auc || (e.headers = {
                Authorization: l.a.Base64.encode(this.getAUCToken())
            }), "function" == typeof t && "function" != typeof e.success && (e.success = t), "function" == typeof e.fail && "function" != typeof a && (a = e.fail);
            var n = $.ajax(e);
            return i(n, function (e) {
                "function" == typeof a && a(e)
            }), n
        }, n.prototype.Get = function (e, t, a, i) {
            return "object" === (void 0 === e ? "undefined" : r()(e)) ? (e.type = "GET", this.Ajax(e)) : ("function" == typeof t && (a = t, t = {}), this.Ajax({
                url: e,
                type: "GET",
                data: t,
                dataType: "json",
                success: a,
                fail: i
            }))
        }, n.prototype.Delete = function (e, t, a) {
            return "object" === (void 0 === e ? "undefined" : r()(e)) ? (e.type = "DELETE", this.Ajax(e)) : this.Ajax({
                url: e,
                type: "DELETE",
                dataType: "json",
                success: t,
                fail: a
            })
        }, n.prototype.Post = function (e, t, a, i) {
            return "object" === (void 0 === e ? "undefined" : r()(e)) ? (e.type = "POST", this.Ajax(e)) : this.Ajax({
                url: e,
                type: "POST",
                data: t,
                dataType: "json",
                success: a,
                fail: i
            })
        }, n.prototype.Patch = function (e, t, a, i) {
            return "object" === (void 0 === e ? "undefined" : r()(e)) ? (e.type = "PATCH", this.Ajax(e)) : this.Ajax({
                url: e,
                type: "PATCH",
                data: t,
                dataType: "json",
                success: a,
                fail: i
            })
        }, t.a = new n
    },
    savY: function (e, t, a) {
        "use strict";
        t.a = {
            data: function () {
                return {
                    player: null,
                    player_id: "trailer-video",
                    playlist: [],
                    options: {
                        autoplay: !0,
                        width: 1030,
                        height: 579
                    },
                    video: {
                        started: !1,
                        adInit: !1,
                        vastUrl: "",
                        Timeout: 2e3,
                        Retry: 30,
                        RetryInterval: 100,
                        RetryCount: 0,
                        Played: !1,
                        AfterEachPlayNumber: 3
                    }
                }
            },
            beforeDestroy: function () {
                this.player && this.player.dispose()
            },
            methods: {
                initPlayer: function () {
                    if (!this.player) {
                        var e = this;
                        this.player = videojs(this.player_id, this.options, function () {
                            this.on("play", function () {
                                ga("send", "event", "Trailer", "play", "")
                            }), this.on("pause", function () {
                                ga("send", "event", "Trailer", "pause", "")
                            }), this.on("ended", function () {
                                ga("send", "event", "Trailer", "ended", "")
                            }), this.on("error", function (t) {
                                3 == t.target.player.error().code && (this.player.playlist, e.$http.Post("/v1/trailers/" + e.playlist[this.playlist.currentIndex()].extra.trailer.id + "/broken"))
                            })
                        }), this.player.on("ended", function (t) {
                            e.video.adInit && this.playlist && this.playlist.next()
                        })
                    }
                }
            }
        }
    },
    tTep: function (e, t, a) {
        "use strict";

        function i(e) {
            a("Bwlq")
        }
        var n = a("/wvp"),
            s = a("uW0T"),
            r = a("savY"),
            o = {
                props: {
                    rid: Number
                },
                components: {
                    RateAdd: n.a,
                    ManageList: s.a
                },
                mixins: [r.a],
                data: function () {
                    return {
                        player_id: "playlist-trailer",
                        items: [],
                        mldialog_visible: !1,
                        mldialog: {
                            resp: {},
                            rid: null
                        },
                        now_playing: {}
                    }
                },
                mounted: function () {
                    this.rid ? this.fetchTrailerPlaylist() : this.fetchPlaylist(), this.startPlayer()
                },
                computed: {
                    items_map: function () {
                        return this.items.reduce(function (e, t) {
                            return e[t.id] = t, e
                        }, {})
                    }
                },
                methods: {
                    hoverTest: function (e) {
                        console.log(e)
                    },
                    startPlayer: function () {
                        this.initPlayer();
                        var e = this;
                        this.player.on("playlistitem", function (t) {
                            e.now_playing = e.playlist[this.playlist.currentIndex()].extra, e.$refs.hasOwnProperty("qtip") && $(e.$refs.qtip).data("info", "title:" + e.now_playing.id), e.$emit("now-playing", e.now_playing), e.$bus.$emit("yml", e.playlist[this.playlist.currentIndex()].extra.id)
                        }), this.player.playlistUi()
                    },
                    fetchTrailerPlaylist: function () {
                        var e = this;
                        this.$http.Get("/v1/trailers/" + this.rid, function (t) {
                            var a = t.similars;
                            a.unshift(t.trailer), e.items = a, e.playlist = a.reduce(function (e, t) {
                                return t.trailer.id && e.push({
                                    sources: [{
                                        src: t.trailer.source,
                                        type: "video/mp4"
                                    }],
                                    thumbnail: t.thumbnail,
                                    name: t.title,
                                    extra: t
                                }), e
                            }, []), e.player.playlist(e.playlist), e.player.playlist.autoadvance(0), e.video.started = !0
                        })
                    },
                    fetchPlaylist: function () {
                        var e = this;
                        this.$http.Get("/v1/trailers/playlist/" + this.$route.params.category, function (t) {
                            e.items = t, e.playlist = t.reduce(function (e, t) {
                                return t.trailer.id && e.push({
                                    sources: [{
                                        src: t.trailer.source,
                                        type: "video/mp4"
                                    }],
                                    thumbnail: t.thumbnail,
                                    name: t.title,
                                    extra: t
                                }), e
                            }, []), e.player.playlist(e.playlist), e.player.playlist.autoadvance(0), e.video.started = !0
                        })
                    },
                    updateManageList: function (e) {
                        if (this.items_map.hasOwnProperty(this.mldialog.rid)) {
                            var t = this.items_map[this.mldialog.rid];
                            t.watch_status.status = e.watch_status, t.watch_status.rated = e.score, this.mldialog = {}
                        }
                    },
                    openManageHandle: function (e) {
                        var t = this;
                        if (this.mldialog.rid == e) return void(this.mldialog_visible = !0);
                        this.$http.Get("/v1/users/watchaction/" + e, function (a) {
                            t.mldialog.resp = a, t.mldialog.rid = e, t.mldialog_visible = !0
                        })
                    }
                }
            },
            l = function () {
                var e = this,
                    t = e.$createElement,
                    a = e._self._c || t;
                return a("div", {
                    staticClass: "playlist-container",
                    attrs: {
                        id: "playlist-" + this.now_playing.id
                    }
                }, [a("div", {
                    staticClass: "playlist-left"
                }, [a("video", {
                    staticClass: "video-js vjs-default-skin vjs-big-play-centered vjs-16-9",
                    attrs: {
                        id: e.player_id,
                        "webkit-playsinline": "",
                        playsinline: "",
                        controls: "",
                        autoplay: "",
                        width: "1030",
                        height: "579"
                    }
                }), e._v(" "), e.now_playing.id ? a("div", {
                    staticClass: "m-t mdl-now-playing-trailer"
                }, [a("div", {
                    staticClass: "pull-right"
                }, [a("rate-add", {
                    attrs: {
                        item: e.now_playing,
                        status: e.now_playing.watch_status.status,
                        "show-rating": !1,
                        rated: e.now_playing.watch_status.rated
                    },
                    on: {
                        "update:status": function (t) {
                            e.now_playing.watch_status.status = t
                        },
                        "update:rated": function (t) {
                            e.$set(e.now_playing.watch_status, "rated", t)
                        },
                        update: e.updateManageList,
                        open: e.openManageHandle
                    }
                })], 1), e._v(" "), a("a", {
                    ref: "qtip",
                    staticClass: "title text-primary",
                    attrs: {
                        "data-info": "title:" + this.now_playing.id,
                        href: e.now_playing.permalink,
                        target: "_blank"
                    }
                }, [a("b", [e._v(e._s(e.now_playing.title))])]), e._v(" "), a("span", {
                    staticClass: "text-muted"
                }, [e._v("(" + e._s(e.now_playing.year) + ")")]), e._v(" "), a("div", [e._v(e._s(e.$t(e.now_playing.type)))])]) : e._e()]), e._v(" "), a("div", {
                    staticClass: "playlist-right"
                }, [a("perfect-scrollbar", {
                    ref: "scroll",
                    staticClass: "vjs-container"
                }, [a("div", {
                    staticClass: "vjs-playlist"
                })])], 1), e._v(" "), e.mldialog_visible ? a("manage-list", {
                    attrs: {
                        visible: e.mldialog_visible,
                        resp: e.mldialog.resp,
                        rid: e.mldialog.rid,
                        "append-to-body": ""
                    },
                    on: {
                        "update:visible": function (t) {
                            e.mldialog_visible = t
                        },
                        update: e.updateManageList
                    }
                }) : e._e()], 1)
            },
            c = [],
            d = {
                render: l,
                staticRenderFns: c
            },
            u = d,
            p = a("VU/8"),
            h = i,
            f = p(o, u, !1, h, null, null);
        t.a = f.exports
    },
    uW0T: function (e, t, a) {
        "use strict";

        function i(e) {
            a("+Ywr")
        }
        var n = a("woOf"),
            s = a.n(n),
            r = a("fZjL"),
            o = a.n(r),
            l = a("Dd8w"),
            c = a.n(l),
            d = {
                props: {
                    rid: Number,
                    resp: Object,
                    visible: Boolean,
                    appendToBody: Boolean
                },
                data: function () {
                    return {
                        dialogReaction: !1,
                        formLabelWidth: "140px",
                        reaction: {
                            name: "",
                            comment: "",
                            region: "",
                            date1: "",
                            date2: "",
                            delivery: !1,
                            type: [],
                            resource: "",
                            desc: ""
                        },
                        gridData: {},
                        loading: !1,
                        history_loading: !0,
                        submit_loading: !1,
                        delete_loading: !1,
                        title: {},
                        activeTab: "",
                        history: {
                            timeline: []
                        },
                        data: {
                            id: null,
                            score: 0,
                            watch_status: 0,
                            episode_seen: 0,
                            social: [],
                            priority: 0,
                            times_rewatched: 0,
                            rewatch_value: 0,
                            date_start: "0000-00-00",
                            date_finish: "0000-00-00",
                            note: "",
                            post_status: "",
                            watch_points: []
                        },
                        date_selection: {},
                        watch_points: [{
                            id: "production",
                            name: "Production",
                            selected: !1
                        }, {
                            id: "story",
                            name: "Story",
                            selected: !1
                        }, {
                            id: "acting",
                            name: "Acting",
                            selected: !1
                        }, {
                            id: "visual",
                            name: "Visual FX",
                            selected: !1
                        }, {
                            id: "ost",
                            name: "OST",
                            selected: !1
                        }],
                        shares: [{
                            icon: "fa-twitter",
                            color: "light-blue",
                            type: "twitter",
                            active: !1
                        }, {
                            icon: "fa-mdl",
                            color: "primary",
                            type: "mdl",
                            active: !1
                        }],
                        watch_status_labels: ["Currently watching", "Completed", "Plan to watch", "On-hold", "Dropped", "Not Interested"]
                    }
                },
                mounted: function () {
                    if (this.data = c()({}, this.resp.data), this.title = this.resp.title, this.selectTab("General"), this.isVisible = !0, this.data.watch_points)
                        for (var e = o()(this.data.watch_points), t = 0; t < e.length; t++) this.watch_points_map[e[t]].selected = this.data.watch_points[e[t]]
                },
                computed: {
                    isVisible: {
                        get: function () {
                            return this.visible
                        },
                        set: function (e) {
                            this.$emit("update:visible", e)
                        }
                    },
                    mdl_share_active: function () {
                        return this.social_status.share_mdl
                    },
                    social_status: function () {
                        return this.shares.reduce(function (e, t) {
                            return e["share_" + t.type] = t.active, e
                        }, {})
                    },
                    params: function () {
                        return s()({
                            watch_status: this.watch_status,
                            episode_seen: this.episode_seen,
                            id: this.data.id,
                            score: this.data.score,
                            priority: this.data.priority,
                            times_rewatched: this.data.times_rewatched,
                            rewatch_value: this.data.rewatch_value,
                            date_start: this.data.date_start,
                            date_finish: this.data.date_finish,
                            note: this.data.note,
                            post_status: this.data.post_status,
                            watch_points: this.watch_points_selected
                        }, this.social_status)
                    },
                    tabs: function () {
                        var e = [{
                            value: "General",
                            label: "General"
                        }, {
                            value: "Advanced",
                            label: "Advanced"
                        }];
                        return this.data.id > 0 && e.push({
                            value: "History",
                            label: "History"
                        }), e
                    },
                    months: function () {
                        return ["January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December"]
                    },
                    watch_points_selected: function () {
                        return this.watch_points.reduce(function (e, t) {
                            return t.selected && e.push(t.id), e
                        }, [])
                    },
                    watch_points_map: function () {
                        return this.watch_points.reduce(function (e, t) {
                            return e[t.id] = t, e
                        }, {})
                    },
                    disabledEpisodeRating: function () {
                        var e = this.watch_status;
                        return 3 == e || 6 == e || 0 == this.data.episode_seen
                    },
                    disabledStatus: function () {
                        var e = this.watch_status;
                        return 2 == e || 3 == e || 6 == e
                    },
                    disabledRating: function () {
                        var e = this.watch_status;
                        return 3 == e || 6 == e
                    },
                    ratings: function () {
                        for (var e = [], t = 10; t >= 1; t -= .5) {
                            var a = t < 10 ? t.toFixed(1) : t + "";
                            e.push({
                                value: parseFloat(a),
                                label: a
                            })
                        }
                        return e
                    },
                    date_months: function () {
                        var e = this.setRange(1, 12, 2).map(function (e, t) {
                            return e
                        });
                        return e.unshift({
                            value: "00",
                            label: "Month"
                        }), e
                    },
                    date_days: function () {
                        var e = this.setRange(1, 31, 2);
                        return e.unshift({
                            value: "00",
                            label: "Day"
                        }), e
                    },
                    date_years: function () {
                        var e = this.setRange((new Date).getUTCFullYear(), 1900);
                        return e.unshift({
                            value: "0000",
                            label: "Year"
                        }), e
                    },
                    episode_seen: {
                        set: function (e) {
                            e < 0 ? e = 0 : e > this.title.episodes && (e = this.title.episodes), this.data.episode_seen = e
                        },
                        get: function () {
                            return 2 == this.watch_status ? this.title.episodes : this.data.episode_seen
                        }
                    },
                    watch_status: {
                        set: function (e) {
                            this.data.watch_status = e
                        },
                        get: function () {
                            var e = this.data.watch_status;
                            return 0 == this.title.released && 3 != e && 6 != e ? 3 : this.data.watch_status
                        }
                    },
                    rating_score: {
                        set: function (e) {
                            this.data.score = parseFloat(e)
                        },
                        get: function () {
                            return this.data.score
                        }
                    },
                    finish_month: {
                        get: function () {
                            return ("" == this.data.date_finish ? "0000-00-00" : this.data.date_finish).split("-")[1]
                        },
                        set: function (e) {
                            var t = this.data.date_finish.split("-");
                            t[1] = e, this.data.date_finish = t.join("-")
                        }
                    },
                    finish_day: {
                        get: function () {
                            return ("" == this.data.date_finish ? "0000-00-00" : this.data.date_finish).split("-")[2]
                        },
                        set: function (e) {
                            var t = this.data.date_finish.split("-");
                            t[2] = e, this.data.date_finish = t.join("-")
                        }
                    },
                    finish_year: {
                        get: function () {
                            return ("" == this.data.date_finish ? "0000-00-00" : this.data.date_finish).split("-")[0]
                        },
                        set: function (e) {
                            var t = this.data.date_finish.split("-");
                            t[0] = e, this.data.date_finish = t.join("-")
                        }
                    },
                    start_month: {
                        get: function () {
                            return ("" == this.data.date_start ? "0000-00-00" : this.data.date_start).split("-")[1]
                        },
                        set: function (e) {
                            var t = this.data.date_start.split("-");
                            t[1] = e, this.data.date_start = t.join("-")
                        }
                    },
                    start_day: {
                        get: function () {
                            return ("" == this.data.date_start ? "0000-00-00" : this.data.date_start).split("-")[2]
                        },
                        set: function (e) {
                            var t = this.data.date_start.split("-");
                            t[2] = e, this.data.date_start = t.join("-")
                        }
                    },
                    start_year: {
                        get: function () {
                            return ("" == this.data.date_start ? "0000-00-00" : this.data.date_start).split("-")[0]
                        },
                        set: function (e) {
                            var t = this.data.date_start.split("-");
                            t[0] = e, this.data.date_start = t.join("-")
                        }
                    },
                    is_tvseries: function () {
                        return "Movie" != this.title.type
                    },
                    section_general: function () {
                        return "General" == this.activeTab
                    },
                    section_advanced: function () {
                        return "Advanced" == this.activeTab
                    },
                    section_rewatch_value: function () {
                        return "Rewatch" == this.activeTab
                    },
                    section_history: function () {
                        return "History" == this.activeTab
                    },
                    watch_status_label: function () {
                        return this.watch_status_labels[this.watch_status - 1]
                    }
                },
                methods: {
                    deleteEntry: function () {
                        var e = this,
                            t = this;
                        this.delete_loading = !0, this.$http.Delete("/v1/users/watchaction/" + this.rid, function (a) {
                            e.delete_loading = !1, e.isVisible = !1, e.$emit("update", {
                                watch_status: 0,
                                score: 0
                            }), $(".btn-manage-list[data-id=" + e.title.id + "]").each(function () {
                                $(this).hasClass("simple") ? ($("#ml" + t.title.id).fadeOut(), $(this).find("span:first-child").html('<i class="fa fa-plus"></i>')) : $(this).html('<i class="far fa-plus"></i> Add to List')
                            })
                        }).fail(function () {
                            e.delete_loading = !1
                        })
                    },
                    submitData: function () {
                        var e = this,
                            t = this.params,
                            a = this;
                        this.submit_loading = !0, this.$http.Patch("/v1/users/watchaction/" + this.rid, t, function (t) {
                            e.submit_loading = !1, e.isVisible = !1, e.$emit("update", t), $(".btn-manage-list[data-id=" + e.title.id + "]").each(function () {
                                if ($(this).hasClass("simple")) {
                                    var e = $("#ml" + a.title.id);
                                    e.find(".watch-status").text(a.watch_status_label), $(this).find("span").html('<i class="fa fa-pencil">');
                                    var t = e.find(".episode-seen");
                                    t.length && (t.text(a.episode_seen), e.find(".fill").css("width", 10 * parseFloat(a.data.score) + "%"), e.find(".score").text(a.data.score))
                                } else $(this).hasClass("ratingPanel") ? ($(".your-rating .score > b").text(a.data.score), $(".your-rating .fill").css("width", 10 * parseFloat(a.data.score) + "%")) : $(this).text(a.watch_status_label)
                            })
                        }).fail(function () {
                            e.submit_loading = !1
                        })
                    },
                    fetchHistory: function () {
                        var e = this;
                        this.history_loading = !0, this.$http.Get("/v1/users/watchaction/" + this.rid + "/history", function (t) {
                            e.history = t, e.history_loading = !1
                        }).fail(function () {
                            e.history_loading = !1
                        })
                    },
                    increaseEpisodeSeen: function () {
                        this.disabledStatus || this.episode_seen >= this.title.episodes || (this.episode_seen = this.episode_seen + 1)
                    },
                    fetchData: function () {
                        var e = this;
                        this.$http.Get("/v1/users/watchaction/" + this.rid, function (t) {
                            e.title = t.title, e.data = t.data, e.loading = !1
                        }).fail(function () {
                            e.isVisible = !1
                        })
                    },
                    pad: function (e, t) {
                        var a = "000000000" + e;
                        return a.substr(a.length - t)
                    },
                    selectWatchPoint: function (e) {
                        e.selected = !e.selected
                    },
                    setCurrentDate: function (e) {
                        var t = (new Date).getFullYear(),
                            a = (new Date).getDate(),
                            i = (new Date).getMonth() + 1;
                        this.$set(this.data, "date_" + e, t + "-" + this.pad(i, 2) + "-" + this.pad(a, 2))
                    },
                    setRange: function (e, t, a) {
                        var i = [];
                        if (e > t) {
                            for (var n = e; n >= t; n--) {
                                var s = n + "",
                                    r = a ? this.pad(n, a) : n + "";
                                i.push({
                                    value: r,
                                    label: s
                                })
                            }
                            return i
                        }
                        for (var n = e; n <= t; n++) {
                            var o = n + "",
                                l = a ? this.pad(n, a) : n + "";
                            i.push({
                                value: l,
                                label: o
                            })
                        }
                        return i
                    },
                    selectTab: function (e) {
                        this.activeTab = e, "History" == e && this.fetchHistory()
                    }
                }
            },
            u = function () {
                var e = this,
                    t = e.$createElement,
                    a = e._self._c || t;
                return a("div", {
                    staticClass: "manage-list-modal",
                    attrs: {
                        id: "mdl-manage-modal"
                    }
                }, [a("el-dialog", {
                    attrs: {
                        visible: e.isVisible,
                        title: e.title.title + " (" + e.title.year + ")",
                        width: "898px",
                        "append-to-body": e.appendToBody
                    },
                    on: {
                        "update:visible": function (t) {
                            e.isVisible = t
                        }
                    }
                }, [a("div", {
                    directives: [{
                        name: "loading",
                        rawName: "v-loading",
                        value: e.loading,
                        expression: "loading"
                    }],
                    staticStyle: {
                        "min-height": "408px"
                    }
                }, [e.loading ? e._e() : a("div", {
                    staticClass: "row-col"
                }, [a("div", {
                    staticClass: "col-sm-3 light"
                }, [a("div", {
                    staticClass: "padding hidden-xs-down p-b-0"
                }, [a("img", {
                    staticClass: "img-responsive",
                    attrs: {
                        src: e.title.cover
                    }
                })]), e._v(" "), a("div", {
                    staticClass: "left-menu padding pos-rlt"
                }, [a("div", {
                    staticClass: "nav-active-primary"
                }, [a("div", {
                    staticClass: "nav nav-pills nav-sm"
                }, e._l(e.tabs, function (t) {
                    return a("a", {
                        key: t.value,
                        class: ["nav-link", {
                            active: e.activeTab == t.value
                        }],
                        on: {
                            click: function (a) {
                                e.selectTab(t.value)
                            }
                        }
                    }, [e._v(e._s(t.label))])
                }))])])]), e._v(" "), a("div", {
                    staticClass: "col-sm-9"
                }, [a("div", {
                    staticClass: "padding"
                }, [e.section_general ? [a("div", {
                    staticClass: "form-group"
                }, [a("div", {
                    staticClass: "row"
                }, [a("div", {
                    staticClass: "col-sm-3"
                }, [a("label", {
                    staticClass: "control-label",
                    attrs: {
                        for: "username"
                    }
                }, [a("b", [e._v("Status")])])]), e._v(" "), a("div", {
                    staticClass: "col-sm-5"
                }, [a("select", {
                    directives: [{
                        name: "model",
                        rawName: "v-model",
                        value: e.watch_status,
                        expression: "watch_status"
                    }],
                    staticClass: "form-control select-watch-status custom",
                    on: {
                        change: function (t) {
                            var a = Array.prototype.filter.call(t.target.options, function (e) {
                                return e.selected
                            }).map(function (e) {
                                return "_value" in e ? e._value : e.value
                            });
                            e.watch_status = t.target.multiple ? a : a[0]
                        }
                    }
                }, [e.title.released ? [a("option", {
                    attrs: {
                        value: "1"
                    }
                }, [e._v("Currently watching")]), e._v(" "), a("option", {
                    attrs: {
                        value: "2",
                        disabled: !e.title.ended
                    }
                }, [e._v("Completed")]), e._v(" "), a("option", {
                    attrs: {
                        value: "3"
                    }
                }, [e._v("Plan to watch")]), e._v(" "), a("option", {
                    attrs: {
                        value: "4"
                    }
                }, [e._v("On-hold")]), e._v(" "), a("option", {
                    attrs: {
                        value: "5"
                    }
                }, [e._v("Dropped")]), e._v(" "), a("option", {
                    attrs: {
                        value: "6"
                    }
                }, [e._v("Not Interested")])] : [a("option", {
                    attrs: {
                        value: "1",
                        disabled: ""
                    }
                }, [e._v("Currently watching")]), e._v(" "), a("option", {
                    attrs: {
                        value: "2",
                        disabled: ""
                    }
                }, [e._v("Completed")]), e._v(" "), a("option", {
                    attrs: {
                        value: "3",
                        selected: ""
                    }
                }, [e._v("Plan to watch")]), e._v(" "), a("option", {
                    attrs: {
                        value: "4",
                        disabled: ""
                    }
                }, [e._v("On-hold")]), e._v(" "), a("option", {
                    attrs: {
                        value: "5",
                        disabled: ""
                    }
                }, [e._v("Dropped")]), e._v(" "), a("option", {
                    attrs: {
                        value: "6"
                    }
                }, [e._v("Not Interested")])]], 2), e._v(" "), e.title.released ? e._e() : a("small", {
                    staticClass: "text-muted"
                }, [e._v("This show has not started yet.")])])])]), e._v(" "), a("div", {
                    staticClass: "form-group"
                }, [a("div", {
                    staticClass: "row"
                }, [a("div", {
                    staticClass: "col-sm-3"
                }, [a("label", {
                    staticClass: "control-label",
                    attrs: {
                        for: "shares"
                    }
                }, [a("b", [e._v("Share")])])]), e._v(" "), a("div", {
                    staticClass: "col-sm-5"
                }, [a("div", {
                    staticClass: "share-container"
                }, e._l(e.shares, function (e, t) {
                    return a("a", {
                        key: t,
                        class: ["btn btn-icon btn-social rounded light", {
                            active: e.active
                        }],
                        attrs: {
                            rel: "nofollow"
                        },
                        on: {
                            click: function (t) {
                                e.active = !e.active
                            }
                        }
                    }, [a("i", {
                        class: ["fab", e.icon]
                    }), a("i", {
                        class: ["fab", e.icon, e.color]
                    })])
                }))])])]), e._v(" "), e.mdl_share_active ? a("div", {
                    staticClass: "form-group"
                }, [a("div", {
                    staticClass: "row"
                }, [a("div", {
                    staticClass: "col-sm-3"
                }, [a("label", {
                    staticClass: "control-label"
                })]), e._v(" "), a("div", {
                    staticClass: "col-sm-9"
                }, [a("el-input", {
                    attrs: {
                        type: "textarea",
                        autosize: {
                            minRows: 2
                        },
                        placeholder: "Write a comment..."
                    },
                    model: {
                        value: e.data.post_status,
                        callback: function (t) {
                            e.$set(e.data, "post_status", t)
                        },
                        expression: "data.post_status"
                    }
                })], 1)])]) : e._e(), e._v(" "), e.is_tvseries ? [a("hr"), e._v(" "), a("div", {
                    class: ["form-group episode-seen", {
                        disabled: e.disabledStatus
                    }]
                }, [a("div", {
                    staticClass: "row"
                }, [a("div", {
                    staticClass: "col-sm-3"
                }, [a("label", {
                    staticClass: "control-label",
                    attrs: {
                        for: "username"
                    }
                }, [a("b", [e._v("Episodes Watched")])])]), e._v(" "), a("div", {
                    staticClass: "col-sm-9"
                }, [a("div", {
                    staticClass: "row no-gutter"
                }, [a("div", {
                    staticClass: "col-xs-6 col-sm-6"
                }, [a("div", {
                    staticClass: "col-sm-4 col-xs-4 episode-input"
                }, [a("el-input", {
                    staticClass: "input-episode-seen",
                    attrs: {
                        type: "number",
                        min: 0,
                        max: e.title.episodes,
                        disabled: e.disabledStatus
                    },
                    model: {
                        value: e.episode_seen,
                        callback: function (t) {
                            e.episode_seen = t
                        },
                        expression: "episode_seen"
                    }
                })], 1), e._v(" "), a("div", {
                    staticClass: "col-sm-5 col-xs-5 episode-control m-l-sm"
                }, [a("a", {
                    on: {
                        click: e.increaseEpisodeSeen
                    }
                }, [e._v("+")]), e._v(" / " + e._s(e.title.episodes))])]), e._v(" "), e.disabledEpisodeRating ? e._e() : a("div", {
                    staticClass: "text-right col-xs-6"
                }, [a("div", [a("a", {
                    staticClass: "text-primary",
                    attrs: {
                        target: "x_blank",
                        href: e.title.url + "/episode/" + e.data.episode_seen + "/write_review"
                    }
                }, [e._v("Rate/Review this episode!")])])])])])])])] : e._e(), e._v(" "), a("hr"), e._v(" "), a("div", {
                    class: ["form-group", {
                        disabled: e.disabledRating
                    }]
                }, [a("div", {
                    staticClass: "row"
                }, [a("div", {
                    staticClass: "col-sm-3"
                }, [a("label", {
                    staticClass: "control-label",
                    attrs: {
                        for: "username"
                    }
                }, [a("b", [e._v("Overall Rating")])])]), e._v(" "), a("div", {
                    staticClass: "col-sm-9"
                }, [a("div", {
                    staticClass: "row"
                }, [a("div", {
                    staticClass: "col-sm-3 col-xs-3"
                }, [a("select", {
                    directives: [{
                        name: "model",
                        rawName: "v-model",
                        value: e.rating_score,
                        expression: "rating_score"
                    }],
                    staticClass: "form-control custom select-rating",
                    attrs: {
                        disabled: e.disabledRating
                    },
                    on: {
                        change: function (t) {
                            var a = Array.prototype.filter.call(t.target.options, function (e) {
                                return e.selected
                            }).map(function (e) {
                                return "_value" in e ? e._value : e.value
                            });
                            e.rating_score = t.target.multiple ? a : a[0]
                        }
                    }
                }, [a("option", {
                    attrs: {
                        value: "0"
                    }
                }, [e._v("--")]), e._v(" "), e._l(e.ratings, function (t) {
                    return a("option", {
                        key: t.value,
                        domProps: {
                            value: t.value
                        }
                    }, [e._v(e._s(t.label))])
                })], 2)]), e._v(" "), a("div", {
                    staticClass: "col-sm-9 col-xs-9"
                }, [a("rating", {
                    staticClass: "m-t-xs",
                    attrs: {
                        rating: e.rating_score,
                        showRating: !0,
                        disabled: e.disabledRating
                    },
                    on: {
                        "update:rating": function (t) {
                            e.rating_score = t
                        }
                    }
                })], 1)]), e._v(" "), e.rating_score > 0 ? a("div", {
                    staticClass: "m-t watch-points animated fadeIn"
                }, [a("div", {
                    staticClass: "p-b-sm"
                }, [a("label", {
                    staticClass: "m-b-0"
                }, [a("b", [e._v("What do you like most about it?")])]), e._v(" "), a("span", {
                    staticClass: "text-muted m-l-xs text-xs"
                }, [e._v("Multiple selection (optional)")])]), e._v(" "), a("div", {
                    staticClass: "m-y-sm text-center"
                }, e._l(e.watch_points, function (t) {
                    return a("el-button", {
                        key: t.name,
                        class: ["m-l-0 m-r-sm m-b-sm", {
                            selected: t.selected
                        }],
                        attrs: {
                            size: "small"
                        },
                        on: {
                            click: function (a) {
                                e.selectWatchPoint(t)
                            }
                        }
                    }, [e._v(e._s(t.name))])
                }))]) : e._e()])])]), e._v(" "), a("div", {
                    staticClass: "form-group"
                }, [a("div", {
                    staticClass: "row"
                }, [a("div", {
                    staticClass: "col-sm-3"
                }, [a("label", {
                    staticClass: "control-label",
                    attrs: {
                        for: "note"
                    }
                }, [a("b", [e._v("Notes")])])]), e._v(" "), a("div", {
                    staticClass: "col-sm-9"
                }, [a("el-input", {
                    attrs: {
                        type: "textarea",
                        autosize: {
                            minRows: 3
                        }
                    },
                    model: {
                        value: e.data.note,
                        callback: function (t) {
                            e.$set(e.data, "note", t)
                        },
                        expression: "data.note"
                    }
                })], 1)])])] : e._e(), e._v(" "), e.section_advanced ? [a("div", {
                    staticClass: "form-group"
                }, [a("div", {
                    staticClass: "row"
                }, [a("div", {
                    staticClass: "col-sm-3"
                }, [a("label", {
                    staticClass: "control-label",
                    attrs: {
                        for: "note"
                    }
                }, [a("b", [e._v("Priority")])])]), e._v(" "), a("div", {
                    staticClass: "col-sm-3"
                }, [a("select", {
                    directives: [{
                        name: "model",
                        rawName: "v-model",
                        value: e.data.priority,
                        expression: "data.priority"
                    }],
                    staticClass: "form-control custom",
                    on: {
                        change: function (t) {
                            var a = Array.prototype.filter.call(t.target.options, function (e) {
                                return e.selected
                            }).map(function (e) {
                                return "_value" in e ? e._value : e.value
                            });
                            e.$set(e.data, "priority", t.target.multiple ? a : a[0])
                        }
                    }
                }, [a("option", {
                    attrs: {
                        value: "0"
                    }
                }, [e._v("Select priority")]), e._v(" "), a("option", {
                    attrs: {
                        value: "1"
                    }
                }, [e._v("Low")]), e._v(" "), a("option", {
                    attrs: {
                        value: "2"
                    }
                }, [e._v("Medium")]), e._v(" "), a("option", {
                    attrs: {
                        value: "3"
                    }
                }, [e._v("High")])])])])]), e._v(" "), a("div", {
                    staticClass: "form-group"
                }, [a("div", {
                    staticClass: "row"
                }, [a("div", {
                    staticClass: "col-sm-3"
                }, [a("label", {
                    staticClass: "control-label",
                    attrs: {
                        for: "note"
                    }
                }, [a("b", [e._v("Total Times Rewatched")])])]), e._v(" "), a("div", {
                    staticClass: "col-sm-2"
                }, [a("el-input", {
                    attrs: {
                        type: "number"
                    },
                    model: {
                        value: e.data.times_rewatched,
                        callback: function (t) {
                            e.$set(e.data, "times_rewatched", t)
                        },
                        expression: "data.times_rewatched"
                    }
                })], 1)])]), e._v(" "), a("div", {
                    staticClass: "form-group"
                }, [a("div", {
                    staticClass: "row"
                }, [a("div", {
                    staticClass: "col-sm-3"
                }, [a("label", {
                    staticClass: "control-label",
                    attrs: {
                        for: "note"
                    }
                }, [a("b", [e._v("Rewatch Value")])])]), e._v(" "), a("div", {
                    staticClass: "col-sm-5"
                }, [a("select", {
                    directives: [{
                        name: "model",
                        rawName: "v-model",
                        value: e.data.rewatch_value,
                        expression: "data.rewatch_value"
                    }],
                    staticClass: "form-control custom",
                    on: {
                        change: function (t) {
                            var a = Array.prototype.filter.call(t.target.options, function (e) {
                                return e.selected
                            }).map(function (e) {
                                return "_value" in e ? e._value : e.value
                            });
                            e.$set(e.data, "rewatch_value", t.target.multiple ? a : a[0])
                        }
                    }
                }, [a("option", {
                    attrs: {
                        value: "0"
                    }
                }, [e._v("Select rewatch value")]), e._v(" "), a("option", {
                    attrs: {
                        value: "1"
                    }
                }, [e._v("Very Low")]), e._v(" "), a("option", {
                    attrs: {
                        value: "2"
                    }
                }, [e._v("Low")]), e._v(" "), a("option", {
                    attrs: {
                        value: "3"
                    }
                }, [e._v("Medium")]), e._v(" "), a("option", {
                    attrs: {
                        value: "4"
                    }
                }, [e._v("High")]), e._v(" "), a("option", {
                    attrs: {
                        value: "5"
                    }
                }, [e._v("Very High")])])])])]), e._v(" "), a("div", {
                    staticClass: "form-group"
                }, [a("div", {
                    staticClass: "row"
                }, [a("div", {
                    staticClass: "col-sm-3"
                }, [a("label", [a("b", [e._v("Start Date")])]), e._v(" "), a("div", [a("el-button", {
                    attrs: {
                        type: "text"
                    },
                    on: {
                        click: function (t) {
                            e.setCurrentDate("start")
                        }
                    }
                }, [e._v("Today date")])], 1)]), e._v(" "), a("div", {
                    staticClass: "col-sm-9"
                }, [a("div", {
                    staticClass: "row start-finish-date"
                }, [a("div", {
                    staticClass: "col-lg-4 col-xs-4"
                }, [a("select", {
                    directives: [{
                        name: "model",
                        rawName: "v-model",
                        value: e.start_month,
                        expression: "start_month"
                    }],
                    staticClass: "form-control custom",
                    attrs: {
                        placeholder: "Month"
                    },
                    on: {
                        change: function (t) {
                            var a = Array.prototype.filter.call(t.target.options, function (e) {
                                return e.selected
                            }).map(function (e) {
                                return "_value" in e ? e._value : e.value
                            });
                            e.start_month = t.target.multiple ? a : a[0]
                        }
                    }
                }, e._l(e.date_months, function (t) {
                    return a("option", {
                        key: t.value,
                        domProps: {
                            value: t.value
                        }
                    }, [e._v(e._s(t.label))])
                }))]), e._v(" "), a("div", {
                    staticClass: "col-lg-4 col-xs-4"
                }, [a("select", {
                    directives: [{
                        name: "model",
                        rawName: "v-model",
                        value: e.start_day,
                        expression: "start_day"
                    }],
                    staticClass: "form-control custom",
                    attrs: {
                        placeholder: "Day"
                    },
                    on: {
                        change: function (t) {
                            var a = Array.prototype.filter.call(t.target.options, function (e) {
                                return e.selected
                            }).map(function (e) {
                                return "_value" in e ? e._value : e.value
                            });
                            e.start_day = t.target.multiple ? a : a[0]
                        }
                    }
                }, e._l(e.date_days, function (t) {
                    return a("option", {
                        key: t.value,
                        domProps: {
                            value: t.value
                        }
                    }, [e._v(e._s(t.label))])
                }))]), e._v(" "), a("div", {
                    staticClass: "col-lg-4 col-xs-4"
                }, [a("select", {
                    directives: [{
                        name: "model",
                        rawName: "v-model",
                        value: e.start_year,
                        expression: "start_year"
                    }],
                    staticClass: "form-control custom",
                    attrs: {
                        placeholder: "Year"
                    },
                    on: {
                        change: function (t) {
                            var a = Array.prototype.filter.call(t.target.options, function (e) {
                                return e.selected
                            }).map(function (e) {
                                return "_value" in e ? e._value : e.value
                            });
                            e.start_year = t.target.multiple ? a : a[0]
                        }
                    }
                }, e._l(e.date_years, function (t) {
                    return a("option", {
                        key: t.value,
                        domProps: {
                            value: t.value
                        }
                    }, [e._v(e._s(t.label))])
                }))])])])])]), e._v(" "), a("div", {
                    staticClass: "form-group"
                }, [a("div", {
                    staticClass: "row"
                }, [a("div", {
                    staticClass: "col-sm-3"
                }, [a("label", [a("b", [e._v("Finish Date")])]), e._v(" "), a("div", [a("el-button", {
                    attrs: {
                        type: "text"
                    },
                    on: {
                        click: function (t) {
                            e.setCurrentDate("finish")
                        }
                    }
                }, [e._v("Today date")])], 1)]), e._v(" "), a("div", {
                    staticClass: "col-sm-9"
                }, [a("div", {
                    staticClass: "row start-finish-date"
                }, [a("div", {
                    staticClass: "col-lg-4 col-xs-4"
                }, [a("select", {
                    directives: [{
                        name: "model",
                        rawName: "v-model",
                        value: e.finish_month,
                        expression: "finish_month"
                    }],
                    staticClass: "form-control custom",
                    attrs: {
                        placeholder: "Month"
                    },
                    on: {
                        change: function (t) {
                            var a = Array.prototype.filter.call(t.target.options, function (e) {
                                return e.selected
                            }).map(function (e) {
                                return "_value" in e ? e._value : e.value
                            });
                            e.finish_month = t.target.multiple ? a : a[0]
                        }
                    }
                }, e._l(e.date_months, function (t) {
                    return a("option", {
                        key: t.value,
                        domProps: {
                            value: t.value
                        }
                    }, [e._v(e._s(t.label))])
                }))]), e._v(" "), a("div", {
                    staticClass: "col-lg-4 col-xs-4"
                }, [a("select", {
                    directives: [{
                        name: "model",
                        rawName: "v-model",
                        value: e.finish_day,
                        expression: "finish_day"
                    }],
                    staticClass: "form-control custom",
                    attrs: {
                        placeholder: "Day"
                    },
                    on: {
                        change: function (t) {
                            var a = Array.prototype.filter.call(t.target.options, function (e) {
                                return e.selected
                            }).map(function (e) {
                                return "_value" in e ? e._value : e.value
                            });
                            e.finish_day = t.target.multiple ? a : a[0]
                        }
                    }
                }, e._l(e.date_days, function (t) {
                    return a("option", {
                        key: t.value,
                        domProps: {
                            value: t.value
                        }
                    }, [e._v(e._s(t.label))])
                }))]), e._v(" "), a("div", {
                    staticClass: "col-lg-4 col-xs-4"
                }, [a("select", {
                    directives: [{
                        name: "model",
                        rawName: "v-model",
                        value: e.finish_year,
                        expression: "finish_year"
                    }],
                    staticClass: "form-control custom",
                    attrs: {
                        placeholder: "Year"
                    },
                    on: {
                        change: function (t) {
                            var a = Array.prototype.filter.call(t.target.options, function (e) {
                                return e.selected
                            }).map(function (e) {
                                return "_value" in e ? e._value : e.value
                            });
                            e.finish_year = t.target.multiple ? a : a[0]
                        }
                    }
                }, e._l(e.date_years, function (t) {
                    return a("option", {
                        key: t.value,
                        domProps: {
                            value: t.value
                        }
                    }, [e._v(e._s(t.label))])
                }))])])])])])] : e._e(), e._v(" "), e.section_history ? [a("div", {
                    directives: [{
                        name: "loading",
                        rawName: "v-loading",
                        value: e.history_loading,
                        expression: "history_loading"
                    }],
                    staticClass: "form-group history-tab",
                    staticStyle: {
                        "min-height": "343px"
                    }
                }, [e.history.timeline.length ? [a("h5", [e._v("Timeline")]), e._v(" "), a("table", {
                    staticClass: "table"
                }, [a("thead", [a("tr", [a("th", [e._v("Watch Status")]), e._v(" "), e.is_tvseries ? a("th", [e._v("Episode Seen")]) : e._e(), e._v(" "), a("th", [e._v("Overall Rating")]), e._v(" "), a("th", [e._v("Timestamp")])])]), e._v(" "), a("tbody", e._l(e.history.timeline, function (t) {
                    return a("tr", [a("td", [e._v(e._s(e.$t(t.watch_status)))]), e._v(" "), e.is_tvseries ? a("td", {
                        attrs: {
                            align: "center"
                        }
                    }, [e._v(e._s(t.episode_seen))]) : e._e(), e._v(" "), a("td", [a("rating", {
                        attrs: {
                            size: "small",
                            rating: t.overall_rating,
                            showRating: !0,
                            disabled: !0
                        }
                    })], 1), e._v(" "), a("td", [e._v(e._s(e._f("time_ago")(t.timestamp)))])])
                }))])] : [e._v("\n\t\t\t\t\t\t\t\tThere is no history available.\n\t\t\t\t\t\t\t\t")]], 2)] : e._e()], 2)])])]), e._v(" "), a("div", {
                    staticClass: "dialog-footer",
                    attrs: {
                        slot: "footer"
                    },
                    slot: "footer"
                }, [e.data.id > 0 ? a("el-button", {
                    staticClass: "pull-left",
                    attrs: {
                        type: "danger",
                        plain: "",
                        loading: e.delete_loading,
                        disabled: e.submit_loading
                    },
                    on: {
                        click: e.deleteEntry
                    }
                }, [e._v("Delete")]) : e._e(), e._v(" "), a("el-button", {
                    staticClass: "btn btn-default",
                    attrs: {
                        disabled: e.submit_loading || e.delete_loading
                    },
                    on: {
                        click: function (t) {
                            e.isVisible = !1
                        }
                    }
                }, [e._v("Cancel")]), e._v(" "), a("el-button", {
                    staticClass: "btn btn-success",
                    attrs: {
                        type: "primary",
                        loading: e.submit_loading,
                        disabled: e.delete_loading
                    },
                    on: {
                        click: e.submitData
                    }
                }, [e._v("Submit")])], 1)]), e._v(" "), a("el-dialog", {
                    attrs: {
                        width: "600px",
                        title: "New Reaction",
                        visible: e.dialogReaction
                    },
                    on: {
                        "update:visible": function (t) {
                            e.dialogReaction = t
                        }
                    }
                }, [a("el-form", {
                    attrs: {
                        model: e.reaction
                    }
                }, [a("el-form-item", {
                    staticClass: "_600",
                    attrs: {
                        label: "How was it?",
                        "label-width": e.formLabelWidth
                    }
                }, [a("div", {
                    staticStyle: {
                        poistion: "relative"
                    }
                }, [a("rating", {
                    staticClass: "m-t-xs",
                    attrs: {
                        rating: e.rating_score,
                        showRating: !0,
                        disabled: e.disabledRating
                    },
                    on: {
                        "update:rating": function (t) {
                            e.rating_score = t
                        }
                    }
                })], 1)]), e._v(" "), a("el-form-item", {
                    staticClass: "_600",
                    attrs: {
                        label: "What was your reaction?",
                        "label-width": e.formLabelWidth
                    }
                }, [a("el-input", {
                    staticClass: "_400",
                    attrs: {
                        type: "textarea",
                        placeholder: "Add a comment about your reaction",
                        autosize: {
                            minRows: 2
                        }
                    },
                    model: {
                        value: e.reaction.comment,
                        callback: function (t) {
                            e.$set(e.reaction, "comment", t)
                        },
                        expression: "reaction.comment"
                    }
                })], 1)], 1), e._v(" "), a("div", {
                    staticClass: "dialog-footer",
                    attrs: {
                        slot: "footer"
                    },
                    slot: "footer"
                }, [a("el-button", {
                    on: {
                        click: function (t) {
                            e.dialogReaction = !1
                        }
                    }
                }, [e._v("Cancel")]), e._v(" "), a("el-button", {
                    attrs: {
                        type: "primary"
                    },
                    on: {
                        click: function (t) {
                            e.dialogReaction = !1
                        }
                    }
                }, [e._v("Post")])], 1)], 1)], 1)
            },
            p = [],
            h = {
                render: u,
                staticRenderFns: p
            },
            f = h,
            m = a("VU/8"),
            v = i,
            g = m(d, f, !1, v, null, null);
        t.a = g.exports
    },
    uslO: function (e, t, a) {
        function i(e) {
            return a(n(e))
        }

        function n(e) {
            var t = s[e];
            if (!(t + 1)) throw new Error("Cannot find module '" + e + "'.");
            return t
        }
        var s = {
            "./af": "3CJN",
            "./af.js": "3CJN",
            "./ar": "3MVc",
            "./ar-dz": "tkWw",
            "./ar-dz.js": "tkWw",
            "./ar-kw": "j8cJ",
            "./ar-kw.js": "j8cJ",
            "./ar-ly": "wPpW",
            "./ar-ly.js": "wPpW",
            "./ar-ma": "dURR",
            "./ar-ma.js": "dURR",
            "./ar-sa": "7OnE",
            "./ar-sa.js": "7OnE",
            "./ar-tn": "BEem",
            "./ar-tn.js": "BEem",
            "./ar.js": "3MVc",
            "./az": "eHwN",
            "./az.js": "eHwN",
            "./be": "3hfc",
            "./be.js": "3hfc",
            "./bg": "lOED",
            "./bg.js": "lOED",
            "./bm": "hng5",
            "./bm.js": "hng5",
            "./bn": "aM0x",
            "./bn.js": "aM0x",
            "./bo": "w2Hs",
            "./bo.js": "w2Hs",
            "./br": "OSsP",
            "./br.js": "OSsP",
            "./bs": "aqvp",
            "./bs.js": "aqvp",
            "./ca": "wIgY",
            "./ca.js": "wIgY",
            "./cs": "ssxj",
            "./cs.js": "ssxj",
            "./cv": "N3vo",
            "./cv.js": "N3vo",
            "./cy": "ZFGz",
            "./cy.js": "ZFGz",
            "./da": "YBA/",
            "./da.js": "YBA/",
            "./de": "DOkx",
            "./de-at": "8v14",
            "./de-at.js": "8v14",
            "./de-ch": "Frex",
            "./de-ch.js": "Frex",
            "./de.js": "DOkx",
            "./dv": "rIuo",
            "./dv.js": "rIuo",
            "./el": "CFqe",
            "./el.js": "CFqe",
            "./en-au": "Sjoy",
            "./en-au.js": "Sjoy",
            "./en-ca": "Tqun",
            "./en-ca.js": "Tqun",
            "./en-gb": "hPuz",
            "./en-gb.js": "hPuz",
            "./en-ie": "ALEw",
            "./en-ie.js": "ALEw",
            "./en-il": "QZk1",
            "./en-il.js": "QZk1",
            "./en-nz": "dyB6",
            "./en-nz.js": "dyB6",
            "./eo": "Nd3h",
            "./eo.js": "Nd3h",
            "./es": "LT9G",
            "./es-do": "7MHZ",
            "./es-do.js": "7MHZ",
            "./es-us": "INcR",
            "./es-us.js": "INcR",
            "./es.js": "LT9G",
            "./et": "XlWM",
            "./et.js": "XlWM",
            "./eu": "sqLM",
            "./eu.js": "sqLM",
            "./fa": "2pmY",
            "./fa.js": "2pmY",
            "./fi": "nS2h",
            "./fi.js": "nS2h",
            "./fo": "OVPi",
            "./fo.js": "OVPi",
            "./fr": "tzHd",
            "./fr-ca": "bXQP",
            "./fr-ca.js": "bXQP",
            "./fr-ch": "VK9h",
            "./fr-ch.js": "VK9h",
            "./fr.js": "tzHd",
            "./fy": "g7KF",
            "./fy.js": "g7KF",
            "./gd": "nLOz",
            "./gd.js": "nLOz",
            "./gl": "FuaP",
            "./gl.js": "FuaP",
            "./gom-latn": "+27R",
            "./gom-latn.js": "+27R",
            "./gu": "rtsW",
            "./gu.js": "rtsW",
            "./he": "Nzt2",
            "./he.js": "Nzt2",
            "./hi": "ETHv",
            "./hi.js": "ETHv",
            "./hr": "V4qH",
            "./hr.js": "V4qH",
            "./hu": "xne+",
            "./hu.js": "xne+",
            "./hy-am": "GrS7",
            "./hy-am.js": "GrS7",
            "./id": "yRTJ",
            "./id.js": "yRTJ",
            "./is": "upln",
            "./is.js": "upln",
            "./it": "FKXc",
            "./it.js": "FKXc",
            "./ja": "ORgI",
            "./ja.js": "ORgI",
            "./jv": "JwiF",
            "./jv.js": "JwiF",
            "./ka": "RnJI",
            "./ka.js": "RnJI",
            "./kk": "j+vx",
            "./kk.js": "j+vx",
            "./km": "5j66",
            "./km.js": "5j66",
            "./kn": "gEQe",
            "./kn.js": "gEQe",
            "./ko": "eBB/",
            "./ko.js": "eBB/",
            "./ky": "6cf8",
            "./ky.js": "6cf8",
            "./lb": "z3hR",
            "./lb.js": "z3hR",
            "./lo": "nE8X",
            "./lo.js": "nE8X",
            "./lt": "/6P1",
            "./lt.js": "/6P1",
            "./lv": "jxEH",
            "./lv.js": "jxEH",
            "./me": "svD2",
            "./me.js": "svD2",
            "./mi": "gEU3",
            "./mi.js": "gEU3",
            "./mk": "Ab7C",
            "./mk.js": "Ab7C",
            "./ml": "oo1B",
            "./ml.js": "oo1B",
            "./mn": "CqHt",
            "./mn.js": "CqHt",
            "./mr": "5vPg",
            "./mr.js": "5vPg",
            "./ms": "ooba",
            "./ms-my": "G++c",
            "./ms-my.js": "G++c",
            "./ms.js": "ooba",
            "./mt": "oCzW",
            "./mt.js": "oCzW",
            "./my": "F+2e",
            "./my.js": "F+2e",
            "./nb": "FlzV",
            "./nb.js": "FlzV",
            "./ne": "/mhn",
            "./ne.js": "/mhn",
            "./nl": "3K28",
            "./nl-be": "Bp2f",
            "./nl-be.js": "Bp2f",
            "./nl.js": "3K28",
            "./nn": "C7av",
            "./nn.js": "C7av",
            "./pa-in": "pfs9",
            "./pa-in.js": "pfs9",
            "./pl": "7LV+",
            "./pl.js": "7LV+",
            "./pt": "ZoSI",
            "./pt-br": "AoDM",
            "./pt-br.js": "AoDM",
            "./pt.js": "ZoSI",
            "./ro": "wT5f",
            "./ro.js": "wT5f",
            "./ru": "ulq9",
            "./ru.js": "ulq9",
            "./sd": "fW1y",
            "./sd.js": "fW1y",
            "./se": "5Omq",
            "./se.js": "5Omq",
            "./si": "Lgqo",
            "./si.js": "Lgqo",
            "./sk": "OUMt",
            "./sk.js": "OUMt",
            "./sl": "2s1U",
            "./sl.js": "2s1U",
            "./sq": "V0td",
            "./sq.js": "V0td",
            "./sr": "f4W3",
            "./sr-cyrl": "c1x4",
            "./sr-cyrl.js": "c1x4",
            "./sr.js": "f4W3",
            "./ss": "7Q8x",
            "./ss.js": "7Q8x",
            "./sv": "Fpqq",
            "./sv.js": "Fpqq",
            "./sw": "DSXN",
            "./sw.js": "DSXN",
            "./ta": "+7/x",
            "./ta.js": "+7/x",
            "./te": "Nlnz",
            "./te.js": "Nlnz",
            "./tet": "gUgh",
            "./tet.js": "gUgh",
            "./tg": "5SNd",
            "./tg.js": "5SNd",
            "./th": "XzD+",
            "./th.js": "XzD+",
            "./tl-ph": "3LKG",
            "./tl-ph.js": "3LKG",
            "./tlh": "m7yE",
            "./tlh.js": "m7yE",
            "./tr": "k+5o",
            "./tr.js": "k+5o",
            "./tzl": "iNtv",
            "./tzl.js": "iNtv",
            "./tzm": "FRPF",
            "./tzm-latn": "krPU",
            "./tzm-latn.js": "krPU",
            "./tzm.js": "FRPF",
            "./ug-cn": "To0v",
            "./ug-cn.js": "To0v",
            "./uk": "ntHu",
            "./uk.js": "ntHu",
            "./ur": "uSe8",
            "./ur.js": "uSe8",
            "./uz": "XU1s",
            "./uz-latn": "/bsm",
            "./uz-latn.js": "/bsm",
            "./uz.js": "XU1s",
            "./vi": "0X8Q",
            "./vi.js": "0X8Q",
            "./x-pseudo": "e/KL",
            "./x-pseudo.js": "e/KL",
            "./yo": "YXlc",
            "./yo.js": "YXlc",
            "./zh-cn": "Vz2w",
            "./zh-cn.js": "Vz2w",
            "./zh-hk": "ZUyn",
            "./zh-hk.js": "ZUyn",
            "./zh-tw": "BbgG",
            "./zh-tw.js": "BbgG"
        };
        i.keys = function () {
            return Object.keys(s)
        }, i.resolve = n, e.exports = i, i.id = "uslO"
    },
    vQJi: function (e, t, a) {
        var i, n;
        ! function (s) {
            i = [a("0iPh")], void 0 !== (n = function (e) {
                return function () {
                    function t(e, t, a) {
                        return f({
                            type: C.error,
                            iconClass: m().iconClasses.error,
                            message: e,
                            optionsOverride: a,
                            title: t
                        })
                    }

                    function a(t, a) {
                        return t || (t = m()), g = e("#" + t.containerId), g.length ? g : (a && (g = u(t)), g)
                    }

                    function i(e, t, a) {
                        return f({
                            type: C.info,
                            iconClass: m().iconClasses.info,
                            message: e,
                            optionsOverride: a,
                            title: t
                        })
                    }

                    function n(e) {
                        b = e
                    }

                    function s(e, t, a) {
                        return f({
                            type: C.success,
                            iconClass: m().iconClasses.success,
                            message: e,
                            optionsOverride: a,
                            title: t
                        })
                    }

                    function r(e, t, a) {
                        return f({
                            type: C.warning,
                            iconClass: m().iconClasses.warning,
                            message: e,
                            optionsOverride: a,
                            title: t
                        })
                    }

                    function o(e, t) {
                        var i = m();
                        g || a(i), d(e, i, t) || c(i)
                    }

                    function l(t) {
                        var i = m();
                        if (g || a(i), t && 0 === e(":focus", t).length) return void v(t);
                        g.children().length && g.remove()
                    }

                    function c(t) {
                        for (var a = g.children(), i = a.length - 1; i >= 0; i--) d(e(a[i]), t)
                    }

                    function d(t, a, i) {
                        var n = !(!i || !i.force) && i.force;
                        return !(!t || !n && 0 !== e(":focus", t).length) && (t[a.hideMethod]({
                            duration: a.hideDuration,
                            easing: a.hideEasing,
                            complete: function () {
                                v(t)
                            }
                        }), !0)
                    }

                    function u(t) {
                        return g = e("<div/>").attr("id", t.containerId).addClass(t.positionClass), g.appendTo(e(t.target)), g
                    }

                    function p() {
                        return {
                            tapToDismiss: !0,
                            toastClass: "toast",
                            containerId: "toast-container",
                            debug: !1,
                            showMethod: "fadeIn",
                            showDuration: 300,
                            showEasing: "swing",
                            onShown: void 0,
                            hideMethod: "fadeOut",
                            hideDuration: 1e3,
                            hideEasing: "swing",
                            onHidden: void 0,
                            closeMethod: !1,
                            closeDuration: !1,
                            closeEasing: !1,
                            closeOnHover: !0,
                            extendedTimeOut: 1e3,
                            iconClasses: {
                                error: "toast-error",
                                info: "toast-info",
                                success: "toast-success",
                                warning: "toast-warning"
                            },
                            iconClass: "toast-info",
                            positionClass: "toast-top-right",
                            timeOut: 5e3,
                            titleClass: "toast-title",
                            messageClass: "toast-message",
                            escapeHtml: !1,
                            target: "body",
                            closeHtml: '<button type="button">&times;</button>',
                            closeClass: "toast-close-button",
                            newestOnTop: !0,
                            preventDuplicates: !1,
                            progressBar: !1,
                            progressClass: "toast-progress",
                            rtl: !1
                        }
                    }

                    function h(e) {
                        b && b(e)
                    }

                    function f(t) {
                        function i(e) {
                            return null == e && (e = ""), e.replace(/&/g, "&amp;").replace(/"/g, "&quot;").replace(/'/g, "&#39;").replace(/</g, "&lt;").replace(/>/g, "&gt;")
                        }

                        function n() {
                            var e = "";
                            switch (t.iconClass) {
                                case "toast-success":
                                case "toast-info":
                                    e = "polite";
                                    break;
                                default:
                                    e = "assertive"
                            }
                            x.attr("aria-live", e)
                        }

                        function s() {
                            t.iconClass && x.addClass(S.toastClass).addClass(T)
                        }

                        function r() {
                            S.newestOnTop ? g.prepend(x) : g.append(x)
                        }

                        function o() {
                            if (t.title) {
                                var e = t.title;
                                S.escapeHtml && (e = i(t.title)), E.append(e).addClass(S.titleClass), x.append(E)
                            }
                        }

                        function l() {
                            if (t.message) {
                                var e = t.message;
                                S.escapeHtml && (e = i(t.message)), M.append(e).addClass(S.messageClass), x.append(M)
                            }
                        }

                        function c() {
                            S.closeButton && (P.addClass(S.closeClass).attr("role", "button"), x.prepend(P))
                        }

                        function d() {
                            S.progressBar && (k.addClass(S.progressClass), x.prepend(k))
                        }

                        function u() {
                            S.rtl && x.addClass("rtl")
                        }

                        function p(t) {
                            var a = t && !1 !== S.closeMethod ? S.closeMethod : S.hideMethod,
                                i = t && !1 !== S.closeDuration ? S.closeDuration : S.hideDuration,
                                n = t && !1 !== S.closeEasing ? S.closeEasing : S.hideEasing;
                            if (!e(":focus", x).length || t) return clearTimeout(D.intervalId), x[a]({
                                duration: i,
                                easing: n,
                                complete: function () {
                                    v(x), clearTimeout(_), S.onHidden && "hidden" !== $.state && S.onHidden(), $.state = "hidden", $.endTime = new Date, h($)
                                }
                            })
                        }

                        function f() {
                            (S.timeOut > 0 || S.extendedTimeOut > 0) && (_ = setTimeout(p, S.extendedTimeOut), D.maxHideTime = parseFloat(S.extendedTimeOut), D.hideEta = (new Date).getTime() + D.maxHideTime)
                        }

                        function b() {
                            clearTimeout(_), D.hideEta = 0, x.stop(!0, !0)[S.showMethod]({
                                duration: S.showDuration,
                                easing: S.showEasing
                            })
                        }

                        function C() {
                            var e = (D.hideEta - (new Date).getTime()) / D.maxHideTime * 100;
                            k.width(e + "%")
                        }
                        var S = m(),
                            T = t.iconClass || S.iconClass;
                        if (void 0 !== t.optionsOverride && (S = e.extend(S, t.optionsOverride), T = t.optionsOverride.iconClass || T), ! function (e, t) {
                                if (e.preventDuplicates) {
                                    if (t.message === y) return !0;
                                    y = t.message
                                }
                                return !1
                            }(S, t)) {
                            w++, g = a(S, !0);
                            var _ = null,
                                x = e("<div/>"),
                                E = e("<div/>"),
                                M = e("<div/>"),
                                k = e("<div/>"),
                                P = e(S.closeHtml),
                                D = {
                                    intervalId: null,
                                    hideEta: null,
                                    maxHideTime: null
                                },
                                $ = {
                                    toastId: w,
                                    state: "visible",
                                    startTime: new Date,
                                    options: S,
                                    map: t
                                };
                            return function () {
                                    s(), o(), l(), c(), d(), u(), r(), n()
                                }(),
                                function () {
                                    x.hide(), x[S.showMethod]({
                                        duration: S.showDuration,
                                        easing: S.showEasing,
                                        complete: S.onShown
                                    }), S.timeOut > 0 && (_ = setTimeout(p, S.timeOut), D.maxHideTime = parseFloat(S.timeOut), D.hideEta = (new Date).getTime() + D.maxHideTime, S.progressBar && (D.intervalId = setInterval(C, 10)))
                                }(),
                                function () {
                                    S.closeOnHover && x.hover(b, f), !S.onclick && S.tapToDismiss && x.click(p), S.closeButton && P && P.click(function (e) {
                                        e.stopPropagation ? e.stopPropagation() : void 0 !== e.cancelBubble && !0 !== e.cancelBubble && (e.cancelBubble = !0), S.onCloseClick && S.onCloseClick(e), p(!0)
                                    }), S.onclick && x.click(function (e) {
                                        S.onclick(e), p()
                                    })
                                }(), h($), S.debug && console && console.log($), x
                        }
                    }

                    function m() {
                        return e.extend({}, p(), S.options)
                    }

                    function v(e) {
                        g || (g = a()), e.is(":visible") || (e.remove(), e = null, 0 === g.children().length && (g.remove(), y = void 0))
                    }
                    var g, b, y, w = 0,
                        C = {
                            error: "error",
                            info: "info",
                            success: "success",
                            warning: "warning"
                        },
                        S = {
                            clear: o,
                            remove: l,
                            error: t,
                            getContainer: a,
                            info: i,
                            options: {},
                            subscribe: n,
                            success: s,
                            version: "2.1.4",
                            warning: r
                        };
                    return S
                }()
            }.apply(t, i)) && (e.exports = n)
        }(a("LGuY"))
    },
    wr1V: function (e, t, a) {
        "use strict";

        function i(e, t, a) {
            function i(e) {
                o = e, s()
            }

            function s() {
                l || (n(r), l = !0)
            }

            function r() {
                a.call(e, o), l = !1
            }
            var o, l = !1;
            return e.addEventListener(t, i, !1), i
        }
        var n = function () {
            return window.requestAnimationFrame || window.webkitRequestAnimationFrame || function (e) {
                window.setTimeout(e, 1e3 / 60)
            }
        }();
        e.exports = i
    }
}, ["NHnr"]);
