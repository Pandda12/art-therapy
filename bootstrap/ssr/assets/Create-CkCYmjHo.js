import { reactive, mergeProps, withCtx, createVNode, withModifiers, withDirectives, vModelText, useSSRContext } from "vue";
import { ssrRenderComponent, ssrRenderAttr } from "vue/server-renderer";
import { router } from "@inertiajs/vue3";
import { _ as _sfc_main$1 } from "./AuthenticatedLayout-MqUK_Z5T.js";
import "./ApplicationLogo-tXd20BKH.js";
import "./_plugin-vue_export-helper-1tPrXgE0.js";
const _sfc_main = {
  __name: "Create",
  __ssrInlineRender: true,
  setup(__props) {
    const form = reactive({
      name: null
    });
    function submit() {
      router.post("/dashboard/brands", form);
    }
    return (_ctx, _push, _parent, _attrs) => {
      _push(ssrRenderComponent(_sfc_main$1, mergeProps({ "page-title": "Add Brand" }, _attrs), {
        default: withCtx((_, _push2, _parent2, _scopeId) => {
          if (_push2) {
            _push2(`<form action="" class="flex flex-col p-5 bg-white rounded-2xl drop-shadow-xl"${_scopeId}><h5 class="text-xl font-bold text-light-dark"${_scopeId}>Brand</h5><div class="flex flex-col px-3"${_scopeId}><label class="mt-6 mb-2 ml-1 font-bold text-size-xs text-slate-700" for="name"${_scopeId}> Brand name </label><input type="text"${ssrRenderAttr("value", form.name)} id="" class="rounded-lg border border-solid border-gray-300 bg-white" placeholder="Rembrandt" required${_scopeId}></div><div class="flex justify-end w-full mt-6"${_scopeId}><button type="submit" class="px-6 py-3 font-bold text-white bg-black rounded-lg"${_scopeId}> Add Brand </button></div></form>`);
          } else {
            return [
              createVNode("form", {
                onSubmit: withModifiers(submit, ["prevent"]),
                action: "",
                class: "flex flex-col p-5 bg-white rounded-2xl drop-shadow-xl"
              }, [
                createVNode("h5", { class: "text-xl font-bold text-light-dark" }, "Brand"),
                createVNode("div", { class: "flex flex-col px-3" }, [
                  createVNode("label", {
                    class: "mt-6 mb-2 ml-1 font-bold text-size-xs text-slate-700",
                    for: "name"
                  }, " Brand name "),
                  withDirectives(createVNode("input", {
                    type: "text",
                    "onUpdate:modelValue": ($event) => form.name = $event,
                    id: "",
                    class: "rounded-lg border border-solid border-gray-300 bg-white",
                    placeholder: "Rembrandt",
                    required: ""
                  }, null, 8, ["onUpdate:modelValue"]), [
                    [vModelText, form.name]
                  ])
                ]),
                createVNode("div", { class: "flex justify-end w-full mt-6" }, [
                  createVNode("button", {
                    type: "submit",
                    class: "px-6 py-3 font-bold text-white bg-black rounded-lg"
                  }, " Add Brand ")
                ])
              ], 32)
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
  (ssrContext.modules || (ssrContext.modules = /* @__PURE__ */ new Set())).add("resources/js/Pages/Dashboard/Brand/Create.vue");
  return _sfc_setup ? _sfc_setup(props, ctx) : void 0;
};
export {
  _sfc_main as default
};
