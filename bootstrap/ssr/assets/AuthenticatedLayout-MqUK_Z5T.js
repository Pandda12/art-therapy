import { useSSRContext, mergeProps, resolveComponent, unref, withCtx, createTextVNode, createVNode, ref } from "vue";
import { ssrRenderAttrs, ssrRenderComponent, ssrInterpolate, ssrRenderSlot } from "vue/server-renderer";
import "./ApplicationLogo-tXd20BKH.js";
import { Link } from "@inertiajs/vue3";
import { _ as _export_sfc } from "./_plugin-vue_export-helper-1tPrXgE0.js";
const _sfc_main$4 = {
  props: {
    x: {
      type: Number,
      required: true
    },
    y: {
      type: Number,
      required: true
    }
  }
};
function _sfc_ssrRender$2(_ctx, _push, _parent, _attrs, $props, $setup, $data, $options) {
  _push(`<svg${ssrRenderAttrs(mergeProps({
    xmlns: "http://www.w3.org/2000/svg",
    version: "1.1",
    "xmlns:xlink": "http://www.w3.org/1999/xlink",
    width: $props.x,
    height: $props.y,
    x: "0",
    y: "0",
    viewBox: "0 0 512 512",
    style: { "enable-background": "new 0 0 512 512" },
    "xml:space": "preserve",
    class: ""
  }, _attrs))}><g><path d="M197.332 170.668h-160C16.746 170.668 0 153.922 0 133.332v-96C0 16.746 16.746 0 37.332 0h160c20.59 0 37.336 16.746 37.336 37.332v96c0 20.59-16.746 37.336-37.336 37.336zM37.332 32A5.336 5.336 0 0 0 32 37.332v96a5.337 5.337 0 0 0 5.332 5.336h160a5.338 5.338 0 0 0 5.336-5.336v-96A5.337 5.337 0 0 0 197.332 32zM197.332 512h-160C16.746 512 0 495.254 0 474.668v-224c0-20.59 16.746-37.336 37.332-37.336h160c20.59 0 37.336 16.746 37.336 37.336v224c0 20.586-16.746 37.332-37.336 37.332zm-160-266.668A5.337 5.337 0 0 0 32 250.668v224A5.336 5.336 0 0 0 37.332 480h160a5.337 5.337 0 0 0 5.336-5.332v-224a5.338 5.338 0 0 0-5.336-5.336zM474.668 512h-160c-20.59 0-37.336-16.746-37.336-37.332v-96c0-20.59 16.746-37.336 37.336-37.336h160c20.586 0 37.332 16.746 37.332 37.336v96C512 495.254 495.254 512 474.668 512zm-160-138.668a5.338 5.338 0 0 0-5.336 5.336v96a5.337 5.337 0 0 0 5.336 5.332h160a5.336 5.336 0 0 0 5.332-5.332v-96a5.337 5.337 0 0 0-5.332-5.336zM474.668 298.668h-160c-20.59 0-37.336-16.746-37.336-37.336v-224C277.332 16.746 294.078 0 314.668 0h160C495.254 0 512 16.746 512 37.332v224c0 20.59-16.746 37.336-37.332 37.336zM314.668 32a5.337 5.337 0 0 0-5.336 5.332v224a5.338 5.338 0 0 0 5.336 5.336h160a5.337 5.337 0 0 0 5.332-5.336v-224A5.336 5.336 0 0 0 474.668 32zm0 0" opacity="1" data-original="#000000"></path></g></svg>`);
}
const _sfc_setup$4 = _sfc_main$4.setup;
_sfc_main$4.setup = (props, ctx) => {
  const ssrContext = useSSRContext();
  (ssrContext.modules || (ssrContext.modules = /* @__PURE__ */ new Set())).add("resources/js/Components/Logo/DashboardLogo.vue");
  return _sfc_setup$4 ? _sfc_setup$4(props, ctx) : void 0;
};
const DashboardLogo = /* @__PURE__ */ _export_sfc(_sfc_main$4, [["ssrRender", _sfc_ssrRender$2]]);
const _sfc_main$3 = {
  props: {
    x: {
      type: Number,
      default: 512
    },
    y: {
      type: Number,
      default: 512
    }
  }
};
function _sfc_ssrRender$1(_ctx, _push, _parent, _attrs, $props, $setup, $data, $options) {
  _push(`<svg${ssrRenderAttrs(mergeProps({
    xmlns: "http://www.w3.org/2000/svg",
    version: "1.1",
    "xmlns:xlink": "http://www.w3.org/1999/xlink",
    width: $props.x,
    height: $props.y,
    x: "0",
    y: "0",
    viewBox: "0 0 24 24",
    style: { "enable-background": "new 0 0 512 512" },
    "xml:space": "preserve",
    class: ""
  }, _attrs))}><g><path d="M6.25 19.5a3.744 3.744 0 0 1-3.542-2.551l-.035-.115A3.648 3.648 0 0 1 2.5 15.75V8.932L.074 17.03a2.271 2.271 0 0 0 1.592 2.755l15.463 4.141c.193.05.386.074.576.074.996 0 1.906-.661 2.161-1.635l.901-2.865zM9 9c1.103 0 2-.897 2-2s-.897-2-2-2-2 .897-2 2 .897 2 2 2z" opacity="1" data-original="#000000" class=""></path><path d="M21.5 2h-15A2.503 2.503 0 0 0 4 4.5v11C4 16.878 5.122 18 6.5 18h15c1.378 0 2.5-1.122 2.5-2.5v-11C24 3.122 22.878 2 21.5 2zm-15 2h15a.5.5 0 0 1 .5.5v7.099l-3.159-3.686a1.791 1.791 0 0 0-1.341-.615 1.749 1.749 0 0 0-1.336.631l-3.714 4.458-1.21-1.207a1.755 1.755 0 0 0-2.48 0L6 13.939V4.5a.5.5 0 0 1 .5-.5z" opacity="1" data-original="#000000" class=""></path></g></svg>`);
}
const _sfc_setup$3 = _sfc_main$3.setup;
_sfc_main$3.setup = (props, ctx) => {
  const ssrContext = useSSRContext();
  (ssrContext.modules || (ssrContext.modules = /* @__PURE__ */ new Set())).add("resources/js/Components/Logo/ImagesLogo.vue");
  return _sfc_setup$3 ? _sfc_setup$3(props, ctx) : void 0;
};
const ImagesLogo = /* @__PURE__ */ _export_sfc(_sfc_main$3, [["ssrRender", _sfc_ssrRender$1]]);
const _sfc_main$2 = {
  props: {
    x: {
      type: Number,
      required: true
    },
    y: {
      type: Number,
      required: true
    }
  }
};
function _sfc_ssrRender(_ctx, _push, _parent, _attrs, $props, $setup, $data, $options) {
  _push(`<svg${ssrRenderAttrs(mergeProps({
    xmlns: "http://www.w3.org/2000/svg",
    version: "1.1",
    "xmlns:xlink": "http://www.w3.org/1999/xlink",
    width: $props.x,
    height: $props.y,
    x: "0",
    y: "0",
    viewBox: "0 0 512 512",
    style: { "enable-background": "new 0 0 512 512" },
    "xml:space": "preserve",
    class: ""
  }, _attrs))}><g><path d="m111.264 70.942-92.367 49.023a35.543 35.543 0 0 0-4.488 2.806L250.6 245.934l98.905-48.92L111.264 70.942zM511.954 150.122l-118.163 58.444v65.843c0 8.281-6.714 14.995-14.995 14.995-8.281 0-14.995-6.714-14.995-14.995V223.4l-98.386 48.663v238.295c.308-.143.62-.275.925-.427l226.182-114.605c12.016-6.008 19.478-18.08 19.478-31.519v-212.36c0-.445-.03-.884-.046-1.325zM492.522 119.927 266.433 5.37l-.094-.047c-10.067-5.012-22.029-4.9-32.002.3l-91.062 48.329 239.37 126.669 115.54-57.147a35.601 35.601 0 0 0-5.663-3.547zM.071 149.117A35.53 35.53 0 0 0 0 151.186v212.881c0 13.162 7.24 25.118 18.896 31.221L234.241 509.58l.097.051c.358.187.724.352 1.087.525V271.843L.071 149.117z" opacity="1" data-original="#000000" class=""></path></g></svg>`);
}
const _sfc_setup$2 = _sfc_main$2.setup;
_sfc_main$2.setup = (props, ctx) => {
  const ssrContext = useSSRContext();
  (ssrContext.modules || (ssrContext.modules = /* @__PURE__ */ new Set())).add("resources/js/Components/Logo/ProductsLogo.vue");
  return _sfc_setup$2 ? _sfc_setup$2(props, ctx) : void 0;
};
const ProductsLogo = /* @__PURE__ */ _export_sfc(_sfc_main$2, [["ssrRender", _sfc_ssrRender]]);
const _sfc_main$1 = {
  __name: "Sidebar",
  __ssrInlineRender: true,
  setup(__props) {
    return (_ctx, _push, _parent, _attrs) => {
      const _component_UsersLogo = resolveComponent("UsersLogo");
      _push(`<aside${ssrRenderAttrs(mergeProps({ class: "w-1/5" }, _attrs))} data-v-9c2cc286><div class="px-8 py-6 m-0" data-v-9c2cc286>`);
      _push(ssrRenderComponent(unref(Link), {
        class: "text-slate-700",
        href: _ctx.route("dashboard")
      }, {
        default: withCtx((_, _push2, _parent2, _scopeId) => {
          if (_push2) {
            _push2(` Art therapy `);
          } else {
            return [
              createTextVNode(" Art therapy ")
            ];
          }
        }),
        _: 1
      }, _parent));
      _push(`</div><hr class="" data-v-9c2cc286><div class="mb-4" data-v-9c2cc286><ul class="flex flex-col pl-0 mb-0 list-none" data-v-9c2cc286><li class="mt-1 w-full" data-v-9c2cc286>`);
      _push(ssrRenderComponent(unref(Link), {
        class: ["flex px-4 py-2 mx-4 my-0 text-slate-700 font-semibold bg-transparent", { "active rounded-lg drop-shadow-xl": _ctx.route().current("dashboard") }],
        href: _ctx.route("dashboard")
      }, {
        default: withCtx((_, _push2, _parent2, _scopeId) => {
          if (_push2) {
            _push2(`<div class="flex justify-center items-center p-2.5 mr-2 rounded-lg bg-white drop-shadow-xl" data-v-9c2cc286${_scopeId}>`);
            _push2(ssrRenderComponent(DashboardLogo, {
              x: 20,
              y: 20
            }, null, _parent2, _scopeId));
            _push2(`</div><span class="flex items-center" data-v-9c2cc286${_scopeId}>Dashboard</span>`);
          } else {
            return [
              createVNode("div", { class: "flex justify-center items-center p-2.5 mr-2 rounded-lg bg-white drop-shadow-xl" }, [
                createVNode(DashboardLogo, {
                  x: 20,
                  y: 20
                })
              ]),
              createVNode("span", { class: "flex items-center" }, "Dashboard")
            ];
          }
        }),
        _: 1
      }, _parent));
      _push(`</li><li class="mt-1 w-full" data-v-9c2cc286>`);
      _push(ssrRenderComponent(unref(Link), {
        class: ["flex px-4 py-2 mx-4 my-0 text-slate-700 font-semibold bg-transparent", { "active rounded-lg drop-shadow-xl": _ctx.route().current("media.index") }],
        href: "route('media.index')"
      }, {
        default: withCtx((_, _push2, _parent2, _scopeId) => {
          if (_push2) {
            _push2(`<div class="flex justify-center items-center p-2.5 mr-2 rounded-lg bg-white drop-shadow-xl" data-v-9c2cc286${_scopeId}>`);
            _push2(ssrRenderComponent(ImagesLogo, {
              x: 20,
              y: 20
            }, null, _parent2, _scopeId));
            _push2(`</div><span class="flex items-center" data-v-9c2cc286${_scopeId}>Картинки</span>`);
          } else {
            return [
              createVNode("div", { class: "flex justify-center items-center p-2.5 mr-2 rounded-lg bg-white drop-shadow-xl" }, [
                createVNode(ImagesLogo, {
                  x: 20,
                  y: 20
                })
              ]),
              createVNode("span", { class: "flex items-center" }, "Картинки")
            ];
          }
        }),
        _: 1
      }, _parent));
      _push(`</li><li class="mt-1 w-full" data-v-9c2cc286>`);
      _push(ssrRenderComponent(unref(Link), {
        class: ["flex px-4 py-2 mx-4 my-0 text-slate-700 font-semibold bg-transparent", { "active rounded-lg drop-shadow-xl": _ctx.route().current("dashboard.brand.index") }],
        href: _ctx.route("dashboard.brand.index")
      }, {
        default: withCtx((_, _push2, _parent2, _scopeId) => {
          if (_push2) {
            _push2(`<div class="flex justify-center items-center p-2.5 mr-2 rounded-lg bg-white drop-shadow-xl" data-v-9c2cc286${_scopeId}>`);
            _push2(ssrRenderComponent(ProductsLogo, {
              x: 20,
              y: 20
            }, null, _parent2, _scopeId));
            _push2(`</div><span class="flex items-center" data-v-9c2cc286${_scopeId}>Brands</span>`);
          } else {
            return [
              createVNode("div", { class: "flex justify-center items-center p-2.5 mr-2 rounded-lg bg-white drop-shadow-xl" }, [
                createVNode(ProductsLogo, {
                  x: 20,
                  y: 20
                })
              ]),
              createVNode("span", { class: "flex items-center" }, "Brands")
            ];
          }
        }),
        _: 1
      }, _parent));
      _push(`</li><li class="mt-1 w-full" data-v-9c2cc286>`);
      _push(ssrRenderComponent(unref(Link), {
        class: ["flex px-4 py-2 mx-4 my-0 text-slate-700 font-semibold bg-transparent", { "active rounded-lg drop-shadow-xl": _ctx.route().current("dashboard.category.index") }],
        href: _ctx.route("dashboard.category.index")
      }, {
        default: withCtx((_, _push2, _parent2, _scopeId) => {
          if (_push2) {
            _push2(`<div class="flex justify-center items-center p-2.5 mr-2 rounded-lg bg-white drop-shadow-xl" data-v-9c2cc286${_scopeId}>`);
            _push2(ssrRenderComponent(ProductsLogo, {
              x: 20,
              y: 20
            }, null, _parent2, _scopeId));
            _push2(`</div><span class="flex items-center" data-v-9c2cc286${_scopeId}>Categories</span>`);
          } else {
            return [
              createVNode("div", { class: "flex justify-center items-center p-2.5 mr-2 rounded-lg bg-white drop-shadow-xl" }, [
                createVNode(ProductsLogo, {
                  x: 20,
                  y: 20
                })
              ]),
              createVNode("span", { class: "flex items-center" }, "Categories")
            ];
          }
        }),
        _: 1
      }, _parent));
      _push(`</li><li class="mt-1 w-full" data-v-9c2cc286>`);
      _push(ssrRenderComponent(unref(Link), {
        class: ["flex px-4 py-2 mx-4 my-0 text-slate-700 font-semibold bg-transparent", { "active rounded-lg drop-shadow-xl": _ctx.route().current("dashboard.product.index") }],
        href: "route('dashboard.product.index')"
      }, {
        default: withCtx((_, _push2, _parent2, _scopeId) => {
          if (_push2) {
            _push2(`<div class="flex justify-center items-center p-2.5 mr-2 rounded-lg bg-white drop-shadow-xl" data-v-9c2cc286${_scopeId}>`);
            _push2(ssrRenderComponent(ProductsLogo, {
              x: 20,
              y: 20
            }, null, _parent2, _scopeId));
            _push2(`</div><span class="flex items-center" data-v-9c2cc286${_scopeId}>Товары</span>`);
          } else {
            return [
              createVNode("div", { class: "flex justify-center items-center p-2.5 mr-2 rounded-lg bg-white drop-shadow-xl" }, [
                createVNode(ProductsLogo, {
                  x: 20,
                  y: 20
                })
              ]),
              createVNode("span", { class: "flex items-center" }, "Товары")
            ];
          }
        }),
        _: 1
      }, _parent));
      _push(`</li><li class="mt-1 w-full" data-v-9c2cc286>`);
      _push(ssrRenderComponent(unref(Link), {
        class: ["flex px-4 py-2 mx-4 my-0 text-slate-700 font-semibold bg-transparent", { "active rounded-lg drop-shadow-xl": _ctx.route().current("user.index") }],
        href: "route('user.index')"
      }, {
        default: withCtx((_, _push2, _parent2, _scopeId) => {
          if (_push2) {
            _push2(`<div class="flex justify-center items-center p-2.5 mr-2 rounded-lg bg-white drop-shadow-xl" data-v-9c2cc286${_scopeId}>`);
            _push2(ssrRenderComponent(_component_UsersLogo, {
              x: 20,
              y: 20
            }, null, _parent2, _scopeId));
            _push2(`</div><span class="flex items-center" data-v-9c2cc286${_scopeId}>Пользователи</span>`);
          } else {
            return [
              createVNode("div", { class: "flex justify-center items-center p-2.5 mr-2 rounded-lg bg-white drop-shadow-xl" }, [
                createVNode(_component_UsersLogo, {
                  x: 20,
                  y: 20
                })
              ]),
              createVNode("span", { class: "flex items-center" }, "Пользователи")
            ];
          }
        }),
        _: 1
      }, _parent));
      _push(`</li></ul></div></aside>`);
    };
  }
};
const _sfc_setup$1 = _sfc_main$1.setup;
_sfc_main$1.setup = (props, ctx) => {
  const ssrContext = useSSRContext();
  (ssrContext.modules || (ssrContext.modules = /* @__PURE__ */ new Set())).add("resources/js/Components/Dashboard/Sidebar.vue");
  return _sfc_setup$1 ? _sfc_setup$1(props, ctx) : void 0;
};
const Sidebar = /* @__PURE__ */ _export_sfc(_sfc_main$1, [["__scopeId", "data-v-9c2cc286"]]);
const __default__ = {
  props: {
    pageTitle: String
  }
};
const _sfc_main = /* @__PURE__ */ Object.assign(__default__, {
  __name: "AuthenticatedLayout",
  __ssrInlineRender: true,
  setup(__props) {
    ref(false);
    return (_ctx, _push, _parent, _attrs) => {
      _push(`<div${ssrRenderAttrs(mergeProps({ id: "dashboard" }, _attrs))}><div class="container mx-auto flex">`);
      _push(ssrRenderComponent(Sidebar, null, null, _parent));
      _push(`<main class="w-5/6 px-8 py-6 m-0"><nav class="flex"><div class="breadcrumbs">`);
      _push(ssrRenderComponent(unref(Link), {
        class: "opacity-50",
        href: "/"
      }, {
        default: withCtx((_, _push2, _parent2, _scopeId) => {
          if (_push2) {
            _push2(` Админ панель `);
          } else {
            return [
              createTextVNode(" Админ панель ")
            ];
          }
        }),
        _: 1
      }, _parent));
      if (__props.pageTitle) {
        _push(`<span><span class="mx-2 opacity-50">/</span><span>${ssrInterpolate(__props.pageTitle)}</span></span>`);
      } else {
        _push(`<!---->`);
      }
      _push(`</div></nav><div class="pt-8"><h2 class="page_heading text-3xl font-bold p-4 mb-6">${ssrInterpolate(__props.pageTitle)}</h2>`);
      ssrRenderSlot(_ctx.$slots, "default", {}, null, _push, _parent);
      _push(`</div></main></div></div>`);
    };
  }
});
const _sfc_setup = _sfc_main.setup;
_sfc_main.setup = (props, ctx) => {
  const ssrContext = useSSRContext();
  (ssrContext.modules || (ssrContext.modules = /* @__PURE__ */ new Set())).add("resources/js/Layouts/AuthenticatedLayout.vue");
  return _sfc_setup ? _sfc_setup(props, ctx) : void 0;
};
export {
  _sfc_main as _
};
