import{b as R,i as x,k as O,l as U}from"./index.66ecdd60.js";import{l as D}from"./license.6e70d73d.js";import{D as h}from"./datetime.f197aeae.js";import{u as J}from"./GoogleSearchConsole.2decf561.js";import{C as w,_ as P}from"./Caret.a21d4ca8.js";import"./translations.d159963e.js";import{_}from"./_plugin-vue_export-helper.eefbdd86.js";import{_ as o}from"./default-i18n.20001971.js";import{v as m,o as a,k as c,l as p,a as f,t as d,b as l,c as S,C as v,x as C,q as y,F}from"./runtime-dom.esm-bundler.5c3c7d72.js";import{B as N}from"./DatePicker.2367604d.js";import{_ as V}from"./ConnectCta.fc53e592.js";import{C as G}from"./Blur.edde4939.js";import{C as z}from"./Index.d3914775.js";import $ from"./ContentRankings.88780480.js";import{C as q}from"./Index.a76253da.js";import E from"./Dashboard.e4af0b75.js";import I from"./KeywordRankTracker.5c4ab587.js";import j from"./SeoStatistics.4ee2c5bb.js";import"./helpers.53868b98.js";import"./upperFirst.2cd99bdd.js";import"./_stringToArray.f9ddb970.js";import"./toString.f0787db8.js";import"./Calendar.b69b61c4.js";import"./pick.67675203.js";import"./_baseSet.9f9da1bd.js";import"./_getTag.1e50d0c4.js";import"./debounce.f7a8b998.js";import"./toNumber.90507ad4.js";import"./_baseTrim.11b89ad9.js";import"./isEqual.96d3394c.js";import"./_baseIsEqual.aba7ca44.js";import"./vue-router.2f910c93.js";import"./allowed.d6f4f70a.js";/* empty css             */import"./params.af7ed354.js";import"./Tabs.31818911.js";import"./ProBadge.751e0b85.js";import"./Information.13e8cece.js";import"./Slide.39c07c03.js";import"./Header.a2a032f7.js";import"./addons.a944c7fa.js";import"./LicenseKeyBar.feb70fd4.js";import"./ScrollTo.81bea8a7.js";import"./LogoGear.cb664d3b.js";import"./AnimatedNumber.f1ad3fb5.js";import"./numbers.9fc174f3.js";import"./Logo.6c9d2b19.js";import"./index.d0745c42.js";import"./Support.e867db75.js";import"./date.a0d85d51.js";import"./constants.a8a14dc3.js";import"./Url.24529655.js";import"./Exclamation.22e53a8b.js";import"./Gear.bd4e1565.js";import"./vue3-apexcharts.57b6886c.js";import"./Row.df38a5f6.js";import"./PostsTable.2d746db9.js";import"./PostTypes.dafa8837.js";import"./Statistic.91ff422a.js";import"./_baseClone.369b15e9.js";import"./_arrayEach.6af5abac.js";import"./Tooltip.73441134.js";import"./WpTable.36a192fd.js";import"./ScoreButton.c4b37708.js";import"./Table.d59967e2.js";import"./Download.17eb5e1f.js";import"./IndexStatus.944af9c5.js";import"./CheckSolid.a0a6d7e0.js";import"./Mobile.ada2591a.js";import"./Checkmark.e40641dd.js";import"./ExclamationSolid.4ca1f801.js";import"./Link.8ca9d57c.js";import"./RequiredPlans.f5463cc2.js";import"./License.faac32ec.js";import"./Card.a31a0c5f.js";import"./Overview.a3c4db4c.js";import"./DonutChartWithLegend.28d3472c.js";import"./KeywordsGraph.3163263e.js";import"./Graph.568c8d64.js";import"./SeoStatisticsOverview.f2e0dd18.js";import"./List.bcea3dfe.js";import"./Statistics.2cff8c0a.js";import"./Editor.2ca7f2e1.js";import"./Index.412f67cf.js";import"./SettingsRow.9f92e269.js";import"./External.3b8c2917.js";import"./External.c9d4f255.js";import"./Star.74b42a56.js";const K="all-in-one-seo-pack",Y={setup(){return{optionsStore:R(),searchStatisticsStore:x()}},components:{CoreAlert:w},data(){return{error:o("Your connection with Google Search Console has expired or is invalid. Please check that your site is verified in Google Search Console and try to reconnect. If the problem persists, please contact our support team.",K)}},computed:{invalidAuthentication(){var t,e;return this.searchStatisticsStore.unverifiedSite||typeof((e=(t=this.optionsStore.internalOptions.internal)==null?void 0:t.searchStatistics)==null?void 0:e.profile)!="object"}}};function Z(t,e,r,i,u,s){const g=m("core-alert");return s.invalidAuthentication?(a(),c(g,{key:0,class:"aioseo-input-error aioseo-search-statistics-authentication-alert",type:"red"},{default:p(()=>[f("strong",null,d(u.error),1)]),_:1})):l("",!0)}const H=_(Y,[["render",Z]]),Q={};function W(t,e){return a(),S("div")}const X=_(Q,[["render",W]]),tt={};function et(t,e){return a(),S("div")}const st=_(tt,[["render",et]]),n="all-in-one-seo-pack",at={emits:["rolling"],setup(){const{connect:t,loading:e}=J();return{connect:t,licenseStore:O(),links:U,loading:e,searchStatisticsStore:x()}},components:{AuthenticationAlert:H,BaseButton:P,BaseDatePicker:N,ConnectCta:V,CoreAlert:w,CoreBlur:G,CoreMain:z,ContentRankings:$,Cta:q,Dashboard:E,KeywordRankTracker:I,PostDetail:X,Settings:st,SeoStatistics:j},data(){return{maxDate:null,minDate:null,strings:{pageName:o("Search Statistics",n),sampleDataAlert:o("Sample data is available for you to explore. Connect your site to Google Search Console to receive insights on how content is being discovered. Identify areas for improvement and drive traffic to your website.",n),ctaButtonText:o("Connect to Google Search Console",n),ctaUnlockButtonText:o("Unlock Search Statistics",n)}}},computed:{defaultRange(){const t=new Date(`${this.searchStatisticsStore.range.start} 00:00:00`),e=new Date(`${this.searchStatisticsStore.range.end} 00:00:00`);return[t,e]},excludeTabs(){const t=["post-detail"];return(this.licenseStore.isUnlicensed||!D.hasCoreFeature("search-statistics"))&&t.push("settings"),t},isSettings(){return this.$route.name==="settings"},showSampleDataUnlockCta(){return D.hasCoreFeature("search-statistics")&&!this.searchStatisticsStore.isConnected||this.searchStatisticsStore.unverifiedSite},showConnectCta(){return(D.hasCoreFeature("search-statistics")&&!this.searchStatisticsStore.isConnected||this.searchStatisticsStore.unverifiedSite)&&!this.isSettings},showDatePicker(){const t=this.searchStatisticsStore.isConnected&&!this.searchStatisticsStore.unverifiedSite,e=this.searchStatisticsStore.range.start&&this.searchStatisticsStore.range.end;return!["settings","content-rankings"].includes(this.$route.name)&&t&&e},containerClasses(){const t=[];return this.searchStatisticsStore.fetching&&t.push("aioseo-blur"),t},getOriginalMaxDate(){return this.searchStatisticsStore.latestAvailableDate?h.fromFormat(this.searchStatisticsStore.latestAvailableDate,"yyyy-MM-dd").setZone(h.zone)||h.local().plus({days:-2}):h.local().plus({days:-2})},datepickerShortcuts(){return[{text:o("Last 7 Days",n),value:()=>(window.aioseoBus.$emit("rolling","last7Days"),[this.getOriginalMaxDate.plus({days:-6}).toJSDate(),this.getOriginalMaxDate.toJSDate()])},{text:o("Last 28 Days",n),value:()=>(window.aioseoBus.$emit("rolling","last28Days"),[this.getOriginalMaxDate.plus({days:-27}).toJSDate(),this.getOriginalMaxDate.toJSDate()])},{text:o("Last 3 Months",n),value:()=>(window.aioseoBus.$emit("rolling","last3Months"),[this.getOriginalMaxDate.plus({days:-89}).toJSDate(),this.getOriginalMaxDate.toJSDate()])}]}},methods:{isDisabledDate(t){return this.minDate===null?!0:t.getTime()<this.minDate.getTime()||t.getTime()>this.maxDate.getTime()},onDateChange(t,e){this.searchStatisticsStore.setDateRange({dateRange:t,rolling:e})},highlightShortcut(t){if(!t)return;document.querySelectorAll(".el-picker-panel__shortcut").forEach(r=>{switch(r.innerText){case o("Last 7 Days",n):t==="last7Days"?r.classList.add("active"):r.classList.remove("active");break;case o("Last 28 Days",n):t==="last28Days"?r.classList.add("active"):r.classList.remove("active");break;case o("Last 3 Months",n):t==="last3Months"?r.classList.add("active"):r.classList.remove("active");break;case o("Last 6 Months",n):t==="last6Months"?r.classList.add("active"):r.classList.remove("active");break;default:r.classList.remove("active")}})}},mounted(){this.minDate=h.now().plus({months:-16}).toJSDate(),this.maxDate=this.getOriginalMaxDate.toJSDate()}},rt=f("br",null,null,-1),ot=f("br",null,null,-1),it={key:1,class:"connect-cta"};function nt(t,e,r,i,u,s){const g=m("base-date-picker"),b=m("authentication-alert"),k=m("base-button"),L=m("core-alert"),B=m("core-blur"),M=m("connect-cta"),T=m("core-main");return a(),c(T,{"page-name":u.strings.pageName,"exclude-tabs":s.excludeTabs,showTabs:!s.excludeTabs.includes(t.$route.name),containerClasses:s.containerClasses},{extra:p(()=>[s.showDatePicker?(a(),c(g,{key:0,onChange:s.onDateChange,onUpdated:e[0]||(e[0]=A=>s.highlightShortcut(A)),clearable:!1,defaultValue:s.defaultRange,defaultRolling:i.searchStatisticsStore.rolling,isDisabledDate:s.isDisabledDate,shortcuts:s.datepickerShortcuts,size:"small"},null,8,["onChange","defaultValue","defaultRolling","isDisabledDate","shortcuts"])):l("",!0)]),default:p(()=>[f("div",null,[v(b),i.searchStatisticsStore.shouldShowSampleReports?(a(),S(F,{key:0},[v(L,{class:"description sample-data-alert",type:"yellow",onCloseAlert:()=>{}},{default:p(()=>[C(d(u.strings.sampleDataAlert)+" ",1),rt,ot,s.showSampleDataUnlockCta?(a(),c(k,{key:0,type:"green",size:"small",onClick:i.connect,loading:i.loading},{default:p(()=>[C(d(u.strings.ctaButtonText),1)]),_:1},8,["onClick","loading"])):l("",!0),s.showSampleDataUnlockCta?l("",!0):(a(),c(k,{key:1,tag:"a",href:i.links.getPricingUrl("search-statistics","search-statistics-demo-upsell",t.$route.name),target:"_blank",type:"green",size:"small",onClick:i.searchStatisticsStore.showSampleReports,loading:i.loading},{default:p(()=>[C(d(u.strings.ctaUnlockButtonText),1)]),_:1},8,["href","onClick","loading"]))]),_:1}),(a(),c(y(t.$route.name)))],64)):l("",!0),s.showConnectCta?(a(),S("div",it,[i.searchStatisticsStore.shouldShowSampleReports?l("",!0):(a(),c(B,{key:0},{default:p(()=>[(a(),c(y(t.$route.name)))]),_:1})),i.searchStatisticsStore.shouldShowSampleReports?l("",!0):(a(),c(M,{key:1}))])):l("",!0),!s.showConnectCta&&!i.searchStatisticsStore.shouldShowSampleReports?(a(),c(y(t.$route.name),{key:2})):l("",!0)])]),_:1},8,["page-name","exclude-tabs","showTabs","containerClasses"])}const $e=_(at,[["render",nt]]);export{$e as default};
