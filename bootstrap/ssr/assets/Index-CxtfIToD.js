import { mergeProps, withCtx, unref, createTextVNode, toDisplayString, createVNode, openBlock, createBlock, Fragment, renderList, useSSRContext } from "vue";
import { ssrRenderComponent, ssrRenderList, ssrInterpolate } from "vue/server-renderer";
import { _ as _sfc_main$1 } from "./AuthenticatedLayout-MqUK_Z5T.js";
import { Link } from "@inertiajs/vue3";
import "./ApplicationLogo-tXd20BKH.js";
import "./_plugin-vue_export-helper-1tPrXgE0.js";
const _sfc_main = {
  __name: "Index",
  __ssrInlineRender: true,
  props: {
    brands: {
      type: Array,
      required: true
    }
  },
  setup(__props) {
    return (_ctx, _push, _parent, _attrs) => {
      _push(ssrRenderComponent(_sfc_main$1, mergeProps({ "page-title": "Brands" }, _attrs), {
        default: withCtx((_, _push2, _parent2, _scopeId) => {
          if (_push2) {
            _push2(`<div class="flex flex-col p-5 bg-white rounded-2xl drop-shadow-xl"${_scopeId}><h5 class="text-xl font-bold text-light-dark"${_scopeId}>Brand list</h5><div class="text-right my-6"${_scopeId}>`);
            _push2(ssrRenderComponent(unref(Link), {
              href: _ctx.route("dashboard.brand.create"),
              class: "px-6 py-3 font-bold text-white rounded-lg bg-black"
            }, {
              default: withCtx((_2, _push3, _parent3, _scopeId2) => {
                if (_push3) {
                  _push3(` Add Brand `);
                } else {
                  return [
                    createTextVNode(" Add Brand ")
                  ];
                }
              }),
              _: 1
            }, _parent2, _scopeId));
            _push2(`</div>`);
            if (!__props.brands.length) {
              _push2(`<div${_scopeId}>No Brands</div>`);
            } else {
              _push2(`<div${_scopeId}><table class="w-full"${_scopeId}><thead${_scopeId}><tr class="text-left"${_scopeId}><th colspan="2"${_scopeId}>Brand</th></tr></thead><tbody${_scopeId}><!--[-->`);
              ssrRenderList(__props.brands, (brand, index) => {
                _push2(`<tr${_scopeId}><td${_scopeId}>`);
                _push2(ssrRenderComponent(unref(Link), {
                  href: _ctx.route("dashboard.brand.edit", brand.id)
                }, {
                  default: withCtx((_2, _push3, _parent3, _scopeId2) => {
                    if (_push3) {
                      _push3(`${ssrInterpolate(brand.name)}`);
                    } else {
                      return [
                        createTextVNode(toDisplayString(brand.name), 1)
                      ];
                    }
                  }),
                  _: 2
                }, _parent2, _scopeId));
                _push2(`</td><td${_scopeId}>`);
                _push2(ssrRenderComponent(unref(Link), {
                  href: _ctx.route("dashboard.brand.edit", brand.id)
                }, {
                  default: withCtx((_2, _push3, _parent3, _scopeId2) => {
                    if (_push3) {
                      _push3(` edit `);
                    } else {
                      return [
                        createTextVNode(" edit ")
                      ];
                    }
                  }),
                  _: 2
                }, _parent2, _scopeId));
                _push2(`</td></tr>`);
              });
              _push2(`<!--]--></tbody></table></div>`);
            }
            _push2(`</div>`);
          } else {
            return [
              createVNode("div", { class: "flex flex-col p-5 bg-white rounded-2xl drop-shadow-xl" }, [
                createVNode("h5", { class: "text-xl font-bold text-light-dark" }, "Brand list"),
                createVNode("div", { class: "text-right my-6" }, [
                  createVNode(unref(Link), {
                    href: _ctx.route("dashboard.brand.create"),
                    class: "px-6 py-3 font-bold text-white rounded-lg bg-black"
                  }, {
                    default: withCtx(() => [
                      createTextVNode(" Add Brand ")
                    ]),
                    _: 1
                  }, 8, ["href"])
                ]),
                !__props.brands.length ? (openBlock(), createBlock("div", { key: 0 }, "No Brands")) : (openBlock(), createBlock("div", { key: 1 }, [
                  createVNode("table", { class: "w-full" }, [
                    createVNode("thead", null, [
                      createVNode("tr", { class: "text-left" }, [
                        createVNode("th", { colspan: "2" }, "Brand")
                      ])
                    ]),
                    createVNode("tbody", null, [
                      (openBlock(true), createBlock(Fragment, null, renderList(__props.brands, (brand, index) => {
                        return openBlock(), createBlock("tr", null, [
                          createVNode("td", null, [
                            createVNode(unref(Link), {
                              href: _ctx.route("dashboard.brand.edit", brand.id)
                            }, {
                              default: withCtx(() => [
                                createTextVNode(toDisplayString(brand.name), 1)
                              ]),
                              _: 2
                            }, 1032, ["href"])
                          ]),
                          createVNode("td", null, [
                            createVNode(unref(Link), {
                              href: _ctx.route("dashboard.brand.edit", brand.id)
                            }, {
                              default: withCtx(() => [
                                createTextVNode(" edit ")
                              ]),
                              _: 2
                            }, 1032, ["href"])
                          ])
                        ]);
                      }), 256))
                    ])
                  ])
                ]))
              ])
            ];
          }
        }),
        _: 1
      }, _parent));
    };
  }
};
const _sfc_setup = _sfc_main.setup;
_sfc_main.setup = (props, ctx) => {
  const ssrContext = useSSRContext();
  (ssrContext.modules || (ssrContext.modules = /* @__PURE__ */ new Set())).add("resources/js/Pages/Dashboard/Brand/Index.vue");
  return _sfc_setup ? _sfc_setup(props, ctx) : void 0;
};
export {
  _sfc_main as default
};
