const Ziggy = {
  'url': 'http:\/\/localhost:8000',
  'port': 8000,
  'defaults': {},
  'routes': {
    'ignition.healthCheck': { 'uri': '_ignition\/health-check', 'methods': ['GET', 'HEAD'] },
    'ignition.executeSolution': { 'uri': '_ignition\/execute-solution', 'methods': ['POST'] },
    'ignition.updateConfig': { 'uri': '_ignition\/update-config', 'methods': ['POST'] },
    'home': { 'uri': 'home', 'methods': ['GET', 'HEAD'] },
    'auth.create': { 'uri': 'login', 'methods': ['GET', 'HEAD'] },
    'auth.store': { 'uri': 'login', 'methods': ['POST'] },
    'members.teams.index': {
      'uri': 'members\/{member}\/teams',
      'methods': ['GET', 'HEAD'],
      'bindings': { 'member': 'id' }
    },
    'members.index': { 'uri': 'members', 'methods': ['GET', 'HEAD'] },
    'members.show': { 'uri': 'members\/{member}', 'methods': ['GET', 'HEAD'], 'bindings': { 'member': 'id' } },
    'members.edit': { 'uri': 'members\/{member}\/edit', 'methods': ['GET', 'HEAD'], 'bindings': { 'member': 'id' } },
    'members.update': { 'uri': 'members\/{member}', 'methods': ['PUT', 'PATCH'], 'bindings': { 'member': 'id' } },
    'teams.show': { 'uri': 'teams\/{team}', 'methods': ['GET', 'HEAD'], 'bindings': { 'team': 'id' } },
    'auth.destroy': { 'uri': 'logout', 'methods': ['POST'] }
  }
}

if (typeof window !== 'undefined' && typeof window.Ziggy !== 'undefined') {
  Object.assign(Ziggy.routes, window.Ziggy.routes)
}

export { Ziggy }
