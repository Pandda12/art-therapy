import { unref, withCtx, createVNode, useSSRContext } from "vue";
import { ssrRenderComponent } from "vue/server-renderer";
import { Head } from "@inertiajs/vue3";
import { G as GuestLayout } from "./GuestLayout-DKi9i9hm.js";
import "./ApplicationLogo-tXd20BKH.js";
import "./_plugin-vue_export-helper-1tPrXgE0.js";
const _sfc_main = {
  __name: "Home",
  __ssrInlineRender: true,
  setup(__props) {
    return (_ctx, _push, _parent, _attrs) => {
      _push(`<!--[-->`);
      _push(ssrRenderComponent(unref(Head), null, {
        default: withCtx((_, _push2, _parent2, _scopeId) => {
          if (_push2) {
            _push2(`<title${_scopeId}>Art Store</title>`);
          } else {
            return [
              createVNode("title", null, "Art Store")
            ];
          }
        }),
        _: 1
      }, _parent));
      _push(ssrRenderComponent(GuestLayout, null, {
        default: withCtx((_, _push2, _parent2, _scopeId) => {
          if (_push2) {
            _push2(`<div class="text-4xl uppercase text-center"${_scopeId}>Join in making history</div><div class="text-lg text-center pt-3"${_scopeId}>Art store</div><div${_scopeId}><img src="/images/main-img.png" alt="Art Store" class="pt-6"${_scopeId}></div>`);
          } else {
            return [
              createVNode("div", { class: "text-4xl uppercase text-center" }, "Join in making history"),
              createVNode("div", { class: "text-lg text-center pt-3" }, "Art store"),
              createVNode("div", null, [
                createVNode("img", {
                  src: "/images/main-img.png",
                  alt: "Art Store",
                  class: "pt-6"
                })
              ])
            ];
          }
        }),
        _: 1
      }, _parent));
      _push(`<!--]-->`);
    };
  }
};
const _sfc_setup = _sfc_main.setup;
_sfc_main.setup = (props, ctx) => {
  const ssrContext = useSSRContext();
  (ssrContext.modules || (ssrContext.modules = /* @__PURE__ */ new Set())).add("resources/js/Pages/Home.vue");
  return _sfc_setup ? _sfc_setup(props, ctx) : void 0;
};
export {
  _sfc_main as default
};
