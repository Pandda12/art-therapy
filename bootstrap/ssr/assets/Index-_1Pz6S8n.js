import { withCtx, openBlock, createBlock, Fragment, renderList, createVNode, toDisplayString, useSSRContext } from "vue";
import { ssrRenderComponent, ssrRenderList, ssrInterpolate } from "vue/server-renderer";
import { G as GuestLayout } from "./GuestLayout-DKi9i9hm.js";
import "./ApplicationLogo-tXd20BKH.js";
import "@inertiajs/vue3";
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
      _push(ssrRenderComponent(GuestLayout, _attrs, {
        default: withCtx((_, _push2, _parent2, _scopeId) => {
          if (_push2) {
            if (!__props.brands.length) {
              _push2(`<div${_scopeId}>No Brands</div>`);
            } else {
              _push2(`<ul${_scopeId}><!--[-->`);
              ssrRenderList(__props.brands, (brand, index) => {
                _push2(`<li${_scopeId}><div${_scopeId}>${ssrInterpolate(brand.name)}</div></li>`);
              });
              _push2(`<!--]--></ul>`);
            }
          } else {
            return [
              !__props.brands.length ? (openBlock(), createBlock("div", { key: 0 }, "No Brands")) : (openBlock(), createBlock("ul", { key: 1 }, [
                (openBlock(true), createBlock(Fragment, null, renderList(__props.brands, (brand, index) => {
                  return openBlock(), createBlock("li", null, [
                    createVNode("div", null, toDisplayString(brand.name), 1)
                  ]);
                }), 256))
              ]))
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
  (ssrContext.modules || (ssrContext.modules = /* @__PURE__ */ new Set())).add("resources/js/Pages/Guest/Brand/Index.vue");
  return _sfc_setup ? _sfc_setup(props, ctx) : void 0;
};
export {
  _sfc_main as default
};
