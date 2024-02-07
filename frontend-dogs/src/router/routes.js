const routes = [
  {
    path: '/',
    component: () => import('layouts/MainLayout.vue'),
    children: [
      { path: '', component: () => import('pages/IndexPage.vue') },
      { path: 'add-dog', component: () => import('pages/AddDog.vue') },
      { path: 'dogs/:id', component: () => import('pages/DisplayDog.vue') }
    ]
  },
  {
    path: '/elj-copy',
    component: () => import('layouts/CopyLayout.vue'),
    children: [
      { path: '', component: () => import('pages/EljCopy.vue') }
    ]
  },

  // Always leave this as last one,
  // but you can also remove it
  {
    path: '/:catchAll(.*)*',
    component: () => import('pages/ErrorNotFound.vue')
  }
]

export default routes
