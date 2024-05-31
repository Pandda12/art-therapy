import { unref, withCtx, createTextVNode, useSSRContext } from "vue";
import { ssrRenderComponent, ssrRenderSlot, ssrInterpolate } from "vue/server-renderer";
import "./ApplicationLogo-tXd20BKH.js";
import { Link } from "@inertiajs/vue3";
import { _ as _export_sfc } from "./_plugin-vue_export-helper-1tPrXgE0.js";
const _sfc_main = {
  __name: "GuestLayout",
  __ssrInlineRender: true,
  setup(__props) {
    return (_ctx, _push, _parent, _attrs) => {
      _push(`<!--[--><header class="bg-white" data-v-bde42b91><div class="container 2xl mx-auto px-5 flex justify-between py-10" data-v-bde42b91><div class="h-nav" data-v-bde42b91><nav data-v-bde42b91><ul class="flex gap-5 font-medium" data-v-bde42b91><li class="home mr-5 font-bold uppercase" data-v-bde42b91>`);
      _push(ssrRenderComponent(unref(Link), {
        href: _ctx.route("home")
      }, {
        default: withCtx((_, _push2, _parent2, _scopeId) => {
          if (_push2) {
            _push2(`Art therapy`);
          } else {
            return [
              createTextVNode("Art therapy")
            ];
          }
        }),
        _: 1
      }, _parent));
      _push(`</li><li data-v-bde42b91>`);
      _push(ssrRenderComponent(unref(Link), {
        href: _ctx.route("brand.index")
      }, {
        default: withCtx((_, _push2, _parent2, _scopeId) => {
          if (_push2) {
            _push2(`Brands`);
          } else {
            return [
              createTextVNode("Brands")
            ];
          }
        }),
        _: 1
      }, _parent));
      _push(`</li><li data-v-bde42b91>`);
      _push(ssrRenderComponent(unref(Link), { href: "/" }, {
        default: withCtx((_, _push2, _parent2, _scopeId) => {
          if (_push2) {
            _push2(`Products`);
          } else {
            return [
              createTextVNode("Products")
            ];
          }
        }),
        _: 1
      }, _parent));
      _push(`</li><li data-v-bde42b91>`);
      _push(ssrRenderComponent(unref(Link), { href: "/" }, {
        default: withCtx((_, _push2, _parent2, _scopeId) => {
          if (_push2) {
            _push2(`About Us`);
          } else {
            return [
              createTextVNode("About Us")
            ];
          }
        }),
        _: 1
      }, _parent));
      _push(`</li><li data-v-bde42b91>`);
      _push(ssrRenderComponent(unref(Link), { href: "/" }, {
        default: withCtx((_, _push2, _parent2, _scopeId) => {
          if (_push2) {
            _push2(`Stores`);
          } else {
            return [
              createTextVNode("Stores")
            ];
          }
        }),
        _: 1
      }, _parent));
      _push(`</li><li data-v-bde42b91>`);
      _push(ssrRenderComponent(unref(Link), { href: "/" }, {
        default: withCtx((_, _push2, _parent2, _scopeId) => {
          if (_push2) {
            _push2(`Contact`);
          } else {
            return [
              createTextVNode("Contact")
            ];
          }
        }),
        _: 1
      }, _parent));
      _push(`</li><li data-v-bde42b91>`);
      _push(ssrRenderComponent(unref(Link), { href: "/" }, {
        default: withCtx((_, _push2, _parent2, _scopeId) => {
          if (_push2) {
            _push2(`News`);
          } else {
            return [
              createTextVNode("News")
            ];
          }
        }),
        _: 1
      }, _parent));
      _push(`</li></ul></nav></div><div class="h-bar flex" data-v-bde42b91><div class="search-icon" data-v-bde42b91><svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" viewBox="0 0 26 26" fill="none" data-v-bde42b91><path d="M18.0479 16.6608L17.9419 16.7998L18.0655 16.9234L24.4754 23.3358C24.6819 23.543 24.8018 23.821 24.8107 24.1134C24.8196 24.4058 24.7169 24.6907 24.5234 24.9101C24.3299 25.1295 24.0602 25.2671 23.7689 25.2948C23.4798 25.3224 23.191 25.2396 22.9604 25.0633L22.843 24.9597L16.4347 18.5542L16.311 18.4306L16.172 18.5366C14.9174 19.4932 13.453 20.1373 11.9001 20.4157C10.3471 20.694 8.7502 20.5985 7.24147 20.1371C5.73274 19.6757 4.35557 18.8617 3.22392 17.7624C2.09227 16.6631 1.23868 15.3101 0.733778 13.8154C0.228873 12.3207 0.0871697 10.7273 0.320394 9.16698C0.553619 7.60666 1.15507 6.12431 2.07497 4.84258C2.99487 3.56085 4.20678 2.51659 5.61042 1.79623C7.01406 1.07586 8.56907 0.700083 10.1468 0.7C11.9988 0.699925 13.814 1.21747 15.3876 2.19423C16.9611 3.17099 18.2303 4.56809 19.0519 6.22785C19.8736 7.88762 20.215 9.74398 20.0375 11.5875C19.8601 13.4309 19.171 15.1881 18.0479 16.6608ZM10.1468 3.00286C8.12234 3.00286 6.18083 3.80704 4.74934 5.23848C3.31785 6.66992 2.51365 8.61137 2.51365 10.6357C2.51365 12.6601 3.31785 14.6016 4.74934 16.033C6.18083 17.4644 8.12234 18.2686 10.1468 18.2686C12.1712 18.2686 14.1127 17.4644 15.5442 16.033C16.9757 14.6016 17.7799 12.6601 17.7799 10.6357C17.7799 8.61137 16.9757 6.66992 15.5442 5.23848C14.1127 3.80704 12.1712 3.00286 10.1468 3.00286Z" fill="#13100E" stroke="white" stroke-width="0.4" data-v-bde42b91></path></svg></div><a href="/cart" class="cart-icon" data-v-bde42b91><svg xmlns="http://www.w3.org/2000/svg" width="28" height="26" viewBox="0 0 28 26" fill="none" data-v-bde42b91><path d="M5.16688 4.55556H26.5002L23.8336 16.1111H7.83355M23.8336 19.6667H8.72244L4.27799 1H1.61133" stroke="#13100E" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" data-v-bde42b91></path><path d="M22.0556 25.0001C23.0374 25.0001 23.8334 24.2042 23.8334 23.2224C23.8334 22.2405 23.0374 21.4446 22.0556 21.4446C21.0738 21.4446 20.2778 22.2405 20.2778 23.2224C20.2778 24.2042 21.0738 25.0001 22.0556 25.0001Z" stroke="#13100E" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" data-v-bde42b91></path><path d="M10.4999 25.0001C11.4818 25.0001 12.2777 24.2042 12.2777 23.2224C12.2777 22.2405 11.4818 21.4446 10.4999 21.4446C9.51811 21.4446 8.72217 22.2405 8.72217 23.2224C8.72217 24.2042 9.51811 25.0001 10.4999 25.0001Z" stroke="#13100E" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" data-v-bde42b91></path></svg></a></div></div></header><div id="main" data-v-bde42b91><div class="container 2xl mx-auto px-5 flex flex-col" data-v-bde42b91>`);
      ssrRenderSlot(_ctx.$slots, "default", {}, null, _push, _parent);
      _push(`</div></div><footer data-v-bde42b91><div class="container 2xl mx-auto px-5 flex" data-v-bde42b91><div class="w-1/2" data-v-bde42b91><div class="text-xl uppercase" data-v-bde42b91>Art therapy</div><div data-v-bde42b91> ©${ssrInterpolate((/* @__PURE__ */ new Date()).getFullYear())}</div></div><div class="w-1/2 flex justify-center" data-v-bde42b91><ul data-v-bde42b91><li data-v-bde42b91>`);
      _push(ssrRenderComponent(unref(Link), { href: "/" }, {
        default: withCtx((_, _push2, _parent2, _scopeId) => {
          if (_push2) {
            _push2(`Brands`);
          } else {
            return [
              createTextVNode("Brands")
            ];
          }
        }),
        _: 1
      }, _parent));
      _push(`</li><li data-v-bde42b91>`);
      _push(ssrRenderComponent(unref(Link), { href: "/" }, {
        default: withCtx((_, _push2, _parent2, _scopeId) => {
          if (_push2) {
            _push2(`Products`);
          } else {
            return [
              createTextVNode("Products")
            ];
          }
        }),
        _: 1
      }, _parent));
      _push(`</li><li data-v-bde42b91>`);
      _push(ssrRenderComponent(unref(Link), { href: "/" }, {
        default: withCtx((_, _push2, _parent2, _scopeId) => {
          if (_push2) {
            _push2(`About Us`);
          } else {
            return [
              createTextVNode("About Us")
            ];
          }
        }),
        _: 1
      }, _parent));
      _push(`</li><li data-v-bde42b91>`);
      _push(ssrRenderComponent(unref(Link), { href: "/" }, {
        default: withCtx((_, _push2, _parent2, _scopeId) => {
          if (_push2) {
            _push2(`Stores`);
          } else {
            return [
              createTextVNode("Stores")
            ];
          }
        }),
        _: 1
      }, _parent));
      _push(`</li><li data-v-bde42b91>`);
      _push(ssrRenderComponent(unref(Link), { href: "/" }, {
        default: withCtx((_, _push2, _parent2, _scopeId) => {
          if (_push2) {
            _push2(`Contact`);
          } else {
            return [
              createTextVNode("Contact")
            ];
          }
        }),
        _: 1
      }, _parent));
      _push(`</li><li data-v-bde42b91>`);
      _push(ssrRenderComponent(unref(Link), { href: "/" }, {
        default: withCtx((_, _push2, _parent2, _scopeId) => {
          if (_push2) {
            _push2(`News`);
          } else {
            return [
              createTextVNode("News")
            ];
          }
        }),
        _: 1
      }, _parent));
      _push(`</li></ul></div></div></footer><!--]-->`);
    };
  }
};
const _sfc_setup = _sfc_main.setup;
_sfc_main.setup = (props, ctx) => {
  const ssrContext = useSSRContext();
  (ssrContext.modules || (ssrContext.modules = /* @__PURE__ */ new Set())).add("resources/js/Layouts/GuestLayout.vue");
  return _sfc_setup ? _sfc_setup(props, ctx) : void 0;
};
const GuestLayout = /* @__PURE__ */ _export_sfc(_sfc_main, [["__scopeId", "data-v-bde42b91"]]);
export {
  GuestLayout as G
};
