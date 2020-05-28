# This file is auto-generated, don't edit it. Thanks.
from Tea.model import TeaModel


class ResumeComponentUpgradeRequest(TeaModel):
    def __init__(self, headers=None):
        self.headers = {}

    def validate(self):
        pass

    def to_map(self):
        result = {}
        result['headers'] = self.headers
        return result

    def from_map(self, map={}):
        self.headers = map.get('headers')
        return self


class ResumeComponentUpgradeResponseBody(TeaModel):
    def __init__(self, request_id=""):
        self.request_id = request_id

    def validate(self):
        self.validate_required(self.request_id, 'request_id')

    def to_map(self):
        result = {}
        result['RequestId'] = self.request_id
        return result

    def from_map(self, map={}):
        self.request_id = map.get('RequestId')
        return self


class ResumeComponentUpgradeResponse(TeaModel):
    def __init__(self, headers=None, body=None):
        self.headers = {}
        self.body = body

    def validate(self):
        self.validate_required(self.headers, 'headers')
        self.validate_required(self.body, 'body')
        if self.body:
            self.body.validate()

    def to_map(self):
        result = {}
        result['headers'] = self.headers
        if self.body is not None:
            result['body'] = self.body.to_map()
        else:
            result['body'] = None
        return result

    def from_map(self, map={}):
        self.headers = map.get('headers')
        if map.get('body') is not None:
            temp_model = ResumeComponentUpgradeResponseBody()
            self.body = temp_model.from_map(map['body'])
        else:
            self.body = None
        return self


class PauseComponentUpgradeRequest(TeaModel):
    def __init__(self, headers=None):
        self.headers = {}

    def validate(self):
        pass

    def to_map(self):
        result = {}
        result['headers'] = self.headers
        return result

    def from_map(self, map={}):
        self.headers = map.get('headers')
        return self


class PauseComponentUpgradeResponseBody(TeaModel):
    def __init__(self, request_id=""):
        self.request_id = request_id

    def validate(self):
        self.validate_required(self.request_id, 'request_id')

    def to_map(self):
        result = {}
        result['RequestId'] = self.request_id
        return result

    def from_map(self, map={}):
        self.request_id = map.get('RequestId')
        return self


class PauseComponentUpgradeResponse(TeaModel):
    def __init__(self, headers=None, body=None):
        self.headers = {}
        self.body = body

    def validate(self):
        self.validate_required(self.headers, 'headers')
        self.validate_required(self.body, 'body')
        if self.body:
            self.body.validate()

    def to_map(self):
        result = {}
        result['headers'] = self.headers
        if self.body is not None:
            result['body'] = self.body.to_map()
        else:
            result['body'] = None
        return result

    def from_map(self, map={}):
        self.headers = map.get('headers')
        if map.get('body') is not None:
            temp_model = PauseComponentUpgradeResponseBody()
            self.body = temp_model.from_map(map['body'])
        else:
            self.body = None
        return self


class CancelComponentUpgradeRequest(TeaModel):
    def __init__(self, headers=None):
        self.headers = {}

    def validate(self):
        pass

    def to_map(self):
        result = {}
        result['headers'] = self.headers
        return result

    def from_map(self, map={}):
        self.headers = map.get('headers')
        return self


class CancelComponentUpgradeResponseBody(TeaModel):
    def __init__(self, request_id=""):
        self.request_id = request_id

    def validate(self):
        self.validate_required(self.request_id, 'request_id')

    def to_map(self):
        result = {}
        result['RequestId'] = self.request_id
        return result

    def from_map(self, map={}):
        self.request_id = map.get('RequestId')
        return self


class CancelComponentUpgradeResponse(TeaModel):
    def __init__(self, headers=None, body=None):
        self.headers = {}
        self.body = body

    def validate(self):
        self.validate_required(self.headers, 'headers')
        self.validate_required(self.body, 'body')
        if self.body:
            self.body.validate()

    def to_map(self):
        result = {}
        result['headers'] = self.headers
        if self.body is not None:
            result['body'] = self.body.to_map()
        else:
            result['body'] = None
        return result

    def from_map(self, map={}):
        self.headers = map.get('headers')
        if map.get('body') is not None:
            temp_model = CancelComponentUpgradeResponseBody()
            self.body = temp_model.from_map(map['body'])
        else:
            self.body = None
        return self


class CancelWorkflowRequest(TeaModel):
    def __init__(self, headers=None):
        self.headers = {}

    def validate(self):
        pass

    def to_map(self):
        result = {}
        result['headers'] = self.headers
        return result

    def from_map(self, map={}):
        self.headers = map.get('headers')
        return self


class CancelWorkflowResponse(TeaModel):
    def __init__(self, headers=None):
        self.headers = {}

    def validate(self):
        self.validate_required(self.headers, 'headers')

    def to_map(self):
        result = {}
        result['headers'] = self.headers
        return result

    def from_map(self, map={}):
        self.headers = map.get('headers')
        return self


class DescirbeWorkflowRequest(TeaModel):
    def __init__(self, headers=None):
        self.headers = {}

    def validate(self):
        pass

    def to_map(self):
        result = {}
        result['headers'] = self.headers
        return result

    def from_map(self, map={}):
        self.headers = map.get('headers')
        return self


class DescirbeWorkflowResponse(TeaModel):
    def __init__(self, headers=None):
        self.headers = {}

    def validate(self):
        self.validate_required(self.headers, 'headers')

    def to_map(self):
        result = {}
        result['headers'] = self.headers
        return result

    def from_map(self, map={}):
        self.headers = map.get('headers')
        return self


class RemoveWorkflowRequest(TeaModel):
    def __init__(self, headers=None):
        self.headers = {}

    def validate(self):
        pass

    def to_map(self):
        result = {}
        result['headers'] = self.headers
        return result

    def from_map(self, map={}):
        self.headers = map.get('headers')
        return self


class RemoveWorkflowResponse(TeaModel):
    def __init__(self, headers=None):
        self.headers = {}

    def validate(self):
        self.validate_required(self.headers, 'headers')

    def to_map(self):
        result = {}
        result['headers'] = self.headers
        return result

    def from_map(self, map={}):
        self.headers = map.get('headers')
        return self


class DescribeWorkflowsRequest(TeaModel):
    def __init__(self, headers=None):
        self.headers = {}

    def validate(self):
        pass

    def to_map(self):
        result = {}
        result['headers'] = self.headers
        return result

    def from_map(self, map={}):
        self.headers = map.get('headers')
        return self


class DescribeWorkflowsResponse(TeaModel):
    def __init__(self, headers=None):
        self.headers = {}

    def validate(self):
        self.validate_required(self.headers, 'headers')

    def to_map(self):
        result = {}
        result['headers'] = self.headers
        return result

    def from_map(self, map={}):
        self.headers = map.get('headers')
        return self


class StartWorkflowRequest(TeaModel):
    def __init__(self, headers=None):
        self.headers = {}

    def validate(self):
        pass

    def to_map(self):
        result = {}
        result['headers'] = self.headers
        return result

    def from_map(self, map={}):
        self.headers = map.get('headers')
        return self


class StartWorkflowResponse(TeaModel):
    def __init__(self, headers=None):
        self.headers = {}

    def validate(self):
        self.validate_required(self.headers, 'headers')

    def to_map(self):
        result = {}
        result['headers'] = self.headers
        return result

    def from_map(self, map={}):
        self.headers = map.get('headers')
        return self


class CreateServiceMeshRequest(TeaModel):
    def __init__(self, headers=None):
        self.headers = {}

    def validate(self):
        pass

    def to_map(self):
        result = {}
        result['headers'] = self.headers
        return result

    def from_map(self, map={}):
        self.headers = map.get('headers')
        return self


class CreateServiceMeshResponseBody(TeaModel):
    def __init__(self, request_id=""):
        self.request_id = request_id

    def validate(self):
        self.validate_required(self.request_id, 'request_id')

    def to_map(self):
        result = {}
        result['RequestId'] = self.request_id
        return result

    def from_map(self, map={}):
        self.request_id = map.get('RequestId')
        return self


class CreateServiceMeshResponse(TeaModel):
    def __init__(self, headers=None, body=None):
        self.headers = {}
        self.body = body

    def validate(self):
        self.validate_required(self.headers, 'headers')
        self.validate_required(self.body, 'body')
        if self.body:
            self.body.validate()

    def to_map(self):
        result = {}
        result['headers'] = self.headers
        if self.body is not None:
            result['body'] = self.body.to_map()
        else:
            result['body'] = None
        return result

    def from_map(self, map={}):
        self.headers = map.get('headers')
        if map.get('body') is not None:
            temp_model = CreateServiceMeshResponseBody()
            self.body = temp_model.from_map(map['body'])
        else:
            self.body = None
        return self


class ServiceMeshAddClusterRequest(TeaModel):
    def __init__(self, headers=None):
        self.headers = {}

    def validate(self):
        pass

    def to_map(self):
        result = {}
        result['headers'] = self.headers
        return result

    def from_map(self, map={}):
        self.headers = map.get('headers')
        return self


class ServiceMeshAddClusterResponseBody(TeaModel):
    def __init__(self, request_id=""):
        self.request_id = request_id

    def validate(self):
        self.validate_required(self.request_id, 'request_id')

    def to_map(self):
        result = {}
        result['RequestId'] = self.request_id
        return result

    def from_map(self, map={}):
        self.request_id = map.get('RequestId')
        return self


class ServiceMeshAddClusterResponse(TeaModel):
    def __init__(self, headers=None, body=None):
        self.headers = {}
        self.body = body

    def validate(self):
        self.validate_required(self.headers, 'headers')
        self.validate_required(self.body, 'body')
        if self.body:
            self.body.validate()

    def to_map(self):
        result = {}
        result['headers'] = self.headers
        if self.body is not None:
            result['body'] = self.body.to_map()
        else:
            result['body'] = None
        return result

    def from_map(self, map={}):
        self.headers = map.get('headers')
        if map.get('body') is not None:
            temp_model = ServiceMeshAddClusterResponseBody()
            self.body = temp_model.from_map(map['body'])
        else:
            self.body = None
        return self


class ServiceMeshRemoveClusterRequest(TeaModel):
    def __init__(self, headers=None):
        self.headers = {}

    def validate(self):
        pass

    def to_map(self):
        result = {}
        result['headers'] = self.headers
        return result

    def from_map(self, map={}):
        self.headers = map.get('headers')
        return self


class ServiceMeshRemoveClusterResponseBody(TeaModel):
    def __init__(self, request_id=""):
        self.request_id = request_id

    def validate(self):
        self.validate_required(self.request_id, 'request_id')

    def to_map(self):
        result = {}
        result['RequestId'] = self.request_id
        return result

    def from_map(self, map={}):
        self.request_id = map.get('RequestId')
        return self


class ServiceMeshRemoveClusterResponse(TeaModel):
    def __init__(self, headers=None, body=None):
        self.headers = {}
        self.body = body

    def validate(self):
        self.validate_required(self.headers, 'headers')
        self.validate_required(self.body, 'body')
        if self.body:
            self.body.validate()

    def to_map(self):
        result = {}
        result['headers'] = self.headers
        if self.body is not None:
            result['body'] = self.body.to_map()
        else:
            result['body'] = None
        return result

    def from_map(self, map={}):
        self.headers = map.get('headers')
        if map.get('body') is not None:
            temp_model = ServiceMeshRemoveClusterResponseBody()
            self.body = temp_model.from_map(map['body'])
        else:
            self.body = None
        return self


class UpdateServiceMeshRequest(TeaModel):
    def __init__(self, headers=None):
        self.headers = {}

    def validate(self):
        pass

    def to_map(self):
        result = {}
        result['headers'] = self.headers
        return result

    def from_map(self, map={}):
        self.headers = map.get('headers')
        return self


class UpdateServiceMeshResponseBody(TeaModel):
    def __init__(self, request_id=""):
        self.request_id = request_id

    def validate(self):
        self.validate_required(self.request_id, 'request_id')

    def to_map(self):
        result = {}
        result['RequestId'] = self.request_id
        return result

    def from_map(self, map={}):
        self.request_id = map.get('RequestId')
        return self


class UpdateServiceMeshResponse(TeaModel):
    def __init__(self, headers=None, body=None):
        self.headers = {}
        self.body = body

    def validate(self):
        self.validate_required(self.headers, 'headers')
        self.validate_required(self.body, 'body')
        if self.body:
            self.body.validate()

    def to_map(self):
        result = {}
        result['headers'] = self.headers
        if self.body is not None:
            result['body'] = self.body.to_map()
        else:
            result['body'] = None
        return result

    def from_map(self, map={}):
        self.headers = map.get('headers')
        if map.get('body') is not None:
            temp_model = UpdateServiceMeshResponseBody()
            self.body = temp_model.from_map(map['body'])
        else:
            self.body = None
        return self


class ServiceMeshApiServerRequest(TeaModel):
    def __init__(self, headers=None):
        self.headers = {}

    def validate(self):
        pass

    def to_map(self):
        result = {}
        result['headers'] = self.headers
        return result

    def from_map(self, map={}):
        self.headers = map.get('headers')
        return self


class ServiceMeshApiServerResponse(TeaModel):
    def __init__(self, headers=None):
        self.headers = {}

    def validate(self):
        self.validate_required(self.headers, 'headers')

    def to_map(self):
        result = {}
        result['headers'] = self.headers
        return result

    def from_map(self, map={}):
        self.headers = map.get('headers')
        return self


class UnInstallClusterAddonsBody(TeaModel):
    def __init__(self, name=""):
        self.name = name

    def validate(self):
        self.validate_required(self.name, 'name')

    def to_map(self):
        result = {}
        result['name'] = self.name
        return result

    def from_map(self, map={}):
        self.name = map.get('name')
        return self


class UnInstallClusterAddonsRequest(TeaModel):
    def __init__(self, headers=None, body=None):
        self.headers = {}
        self.body = body

    def validate(self):
        self.validate_required(self.body, 'body')
        if self.body:
            self.body.validate()

    def to_map(self):
        result = {}
        result['headers'] = self.headers
        if self.body is not None:
            result['body'] = self.body.to_map()
        else:
            result['body'] = None
        return result

    def from_map(self, map={}):
        self.headers = map.get('headers')
        if map.get('body') is not None:
            temp_model = UnInstallClusterAddonsBody()
            self.body = temp_model.from_map(map['body'])
        else:
            self.body = None
        return self


class UnInstallClusterAddonsResponseBody(TeaModel):
    def __init__(self, request_id=""):
        self.request_id = request_id

    def validate(self):
        self.validate_required(self.request_id, 'request_id')

    def to_map(self):
        result = {}
        result['RequestId'] = self.request_id
        return result

    def from_map(self, map={}):
        self.request_id = map.get('RequestId')
        return self


class UnInstallClusterAddonsResponse(TeaModel):
    def __init__(self, headers=None, body=None):
        self.headers = {}
        self.body = body

    def validate(self):
        self.validate_required(self.headers, 'headers')
        self.validate_required(self.body, 'body')
        if self.body:
            self.body.validate()

    def to_map(self):
        result = {}
        result['headers'] = self.headers
        if self.body is not None:
            result['body'] = self.body.to_map()
        else:
            result['body'] = None
        return result

    def from_map(self, map={}):
        self.headers = map.get('headers')
        if map.get('body') is not None:
            temp_model = UnInstallClusterAddonsResponseBody()
            self.body = temp_model.from_map(map['body'])
        else:
            self.body = None
        return self


class DescribeAddonsQuery(TeaModel):
    def __init__(self, region="", cluster_type=""):
        self.region = region
        self.cluster_type = cluster_type

    def validate(self):
        pass

    def to_map(self):
        result = {}
        result['region'] = self.region
        result['cluster_type'] = self.cluster_type
        return result

    def from_map(self, map={}):
        self.region = map.get('region')
        self.cluster_type = map.get('cluster_type')
        return self


class DescribeAddonsRequest(TeaModel):
    def __init__(self, headers=None, query=None):
        self.headers = {}
        self.query = query

    def validate(self):
        if self.query:
            self.query.validate()

    def to_map(self):
        result = {}
        result['headers'] = self.headers
        if self.query is not None:
            result['query'] = self.query.to_map()
        else:
            result['query'] = None
        return result

    def from_map(self, map={}):
        self.headers = map.get('headers')
        if map.get('query') is not None:
            temp_model = DescribeAddonsQuery()
            self.query = temp_model.from_map(map['query'])
        else:
            self.query = None
        return self


class DescribeAddonsResponseBody(TeaModel):
    def __init__(self, component_groups=None, standard_components=None):
        self.component_groups = []
        self.standard_components = standard_components

    def validate(self):
        self.validate_required(self.component_groups, 'component_groups')
        if self.component_groups:
            for k in self.component_groups:
                if k:
                    k.validate()
        self.validate_required(self.standard_components, 'standard_components')
        if self.standard_components:
            self.standard_components.validate()

    def to_map(self):
        result = {}
        result['ComponentGroups'] = []
        if self.component_groups is not None:
            for k in self.component_groups:
                result['ComponentGroups'].append(k.to_map() if k else None)
        else:
            result['ComponentGroups'] = None
        if self.standard_components is not None:
            result['StandardComponents'] = self.standard_components.to_map()
        else:
            result['StandardComponents'] = None
        return result

    def from_map(self, map={}):
        self.component_groups = []
        if map.get('ComponentGroups') is not None:
            for k in map.get('ComponentGroups'):
                temp_model = DescribeAddonsResponseBodyComponentGroups()
                temp_model = temp_model.from_map(k)
                self.component_groups.append(temp_model)
        else:
            self.component_groups = None
        if map.get('StandardComponents') is not None:
            temp_model = DescribeAddonsResponseBodyStandardComponents()
            self.standard_components = temp_model.from_map(map['StandardComponents'])
        else:
            self.standard_components = None
        return self


class DescribeAddonsResponseBodyComponentGroupsItems(TeaModel):
    def __init__(self, name="", config="", required="", disabled=False, version=""):
        self.name = name
        self.config = config
        self.required = required
        self.disabled = disabled
        self.version = version

    def validate(self):
        self.validate_required(self.name, 'name')
        self.validate_required(self.config, 'config')
        self.validate_required(self.required, 'required')
        self.validate_required(self.disabled, 'disabled')
        self.validate_required(self.version, 'version')

    def to_map(self):
        result = {}
        result['name'] = self.name
        result['config'] = self.config
        result['required'] = self.required
        result['disabled'] = self.disabled
        result['version'] = self.version
        return result

    def from_map(self, map={}):
        self.name = map.get('name')
        self.config = map.get('config')
        self.required = map.get('required')
        self.disabled = map.get('disabled')
        self.version = map.get('version')
        return self


class DescribeAddonsResponseBodyComponentGroups(TeaModel):
    def __init__(self, group_name="", items=None, default_=None):
        self.group_name = group_name
        self.items = []
        self.default_ = []

    def validate(self):
        self.validate_required(self.group_name, 'group_name')
        self.validate_required(self.items, 'items')
        if self.items:
            for k in self.items:
                if k:
                    k.validate()
        self.validate_required(self.default_, 'default_')

    def to_map(self):
        result = {}
        result['group_name'] = self.group_name
        result['items'] = []
        if self.items is not None:
            for k in self.items:
                result['items'].append(k.to_map() if k else None)
        else:
            result['items'] = None
        result['default'] = []
        if self.default_ is not None:
            for k in self.default_:
                result['default'].append(k)
        else:
            result['default'] = None
        return result

    def from_map(self, map={}):
        self.group_name = map.get('group_name')
        self.items = []
        if map.get('items') is not None:
            for k in map.get('items'):
                temp_model = DescribeAddonsResponseBodyComponentGroupsItems()
                temp_model = temp_model.from_map(k)
                self.items.append(temp_model)
        else:
            self.items = None
        self.default_ = []
        if map.get('default') is not None:
            for k in map.get('default'):
                self.default_.append(k)
        else:
            self.default_ = None
        return self


class DescribeAddonsResponseBodyStandardComponentsAddonName(TeaModel):
    def __init__(self, name="", config="", required="", disabled=False, version=""):
        self.name = name
        self.config = config
        self.required = required
        self.disabled = disabled
        self.version = version

    def validate(self):
        self.validate_required(self.name, 'name')
        self.validate_required(self.config, 'config')
        self.validate_required(self.required, 'required')
        self.validate_required(self.disabled, 'disabled')
        self.validate_required(self.version, 'version')

    def to_map(self):
        result = {}
        result['name'] = self.name
        result['config'] = self.config
        result['required'] = self.required
        result['disabled'] = self.disabled
        result['version'] = self.version
        return result

    def from_map(self, map={}):
        self.name = map.get('name')
        self.config = map.get('config')
        self.required = map.get('required')
        self.disabled = map.get('disabled')
        self.version = map.get('version')
        return self


class DescribeAddonsResponseBodyStandardComponents(TeaModel):
    def __init__(self, addon_name=None):
        self.addon_name = addon_name

    def validate(self):
        self.validate_required(self.addon_name, 'addon_name')
        if self.addon_name:
            self.addon_name.validate()

    def to_map(self):
        result = {}
        if self.addon_name is not None:
            result['addon_name'] = self.addon_name.to_map()
        else:
            result['addon_name'] = None
        return result

    def from_map(self, map={}):
        if map.get('addon_name') is not None:
            temp_model = DescribeAddonsResponseBodyStandardComponentsAddonName()
            self.addon_name = temp_model.from_map(map['addon_name'])
        else:
            self.addon_name = None
        return self


class DescribeAddonsResponse(TeaModel):
    def __init__(self, headers=None, body=None):
        self.headers = {}
        self.body = body

    def validate(self):
        self.validate_required(self.headers, 'headers')
        self.validate_required(self.body, 'body')
        if self.body:
            self.body.validate()

    def to_map(self):
        result = {}
        result['headers'] = self.headers
        if self.body is not None:
            result['body'] = self.body.to_map()
        else:
            result['body'] = None
        return result

    def from_map(self, map={}):
        self.headers = map.get('headers')
        if map.get('body') is not None:
            temp_model = DescribeAddonsResponseBody()
            self.body = temp_model.from_map(map['body'])
        else:
            self.body = None
        return self


class CancelClusterUpgradeRequest(TeaModel):
    def __init__(self, headers=None):
        self.headers = {}

    def validate(self):
        pass

    def to_map(self):
        result = {}
        result['headers'] = self.headers
        return result

    def from_map(self, map={}):
        self.headers = map.get('headers')
        return self


class CancelClusterUpgradeResponseBody(TeaModel):
    def __init__(self, request_id=""):
        self.request_id = request_id

    def validate(self):
        self.validate_required(self.request_id, 'request_id')

    def to_map(self):
        result = {}
        result['RequestId'] = self.request_id
        return result

    def from_map(self, map={}):
        self.request_id = map.get('RequestId')
        return self


class CancelClusterUpgradeResponse(TeaModel):
    def __init__(self, headers=None, body=None):
        self.headers = {}
        self.body = body

    def validate(self):
        self.validate_required(self.headers, 'headers')
        self.validate_required(self.body, 'body')
        if self.body:
            self.body.validate()

    def to_map(self):
        result = {}
        result['headers'] = self.headers
        if self.body is not None:
            result['body'] = self.body.to_map()
        else:
            result['body'] = None
        return result

    def from_map(self, map={}):
        self.headers = map.get('headers')
        if map.get('body') is not None:
            temp_model = CancelClusterUpgradeResponseBody()
            self.body = temp_model.from_map(map['body'])
        else:
            self.body = None
        return self


class DescribeUserQuotaRequest(TeaModel):
    def __init__(self, headers=None):
        self.headers = {}

    def validate(self):
        pass

    def to_map(self):
        result = {}
        result['headers'] = self.headers
        return result

    def from_map(self, map={}):
        self.headers = map.get('headers')
        return self


class DescribeUserQuotaResponseBody(TeaModel):
    def __init__(self, cluster_quota=0, node_quota=0, ask_cluster_quota=0, amk_cluster_quota=0):
        self.cluster_quota = cluster_quota
        self.node_quota = node_quota
        self.ask_cluster_quota = ask_cluster_quota
        self.amk_cluster_quota = amk_cluster_quota

    def validate(self):
        self.validate_required(self.cluster_quota, 'cluster_quota')
        self.validate_required(self.node_quota, 'node_quota')
        self.validate_required(self.ask_cluster_quota, 'ask_cluster_quota')
        self.validate_required(self.amk_cluster_quota, 'amk_cluster_quota')

    def to_map(self):
        result = {}
        result['cluster_quota'] = self.cluster_quota
        result['node_quota'] = self.node_quota
        result['ask_cluster_quota'] = self.ask_cluster_quota
        result['amk_cluster_quota'] = self.amk_cluster_quota
        return result

    def from_map(self, map={}):
        self.cluster_quota = map.get('cluster_quota')
        self.node_quota = map.get('node_quota')
        self.ask_cluster_quota = map.get('ask_cluster_quota')
        self.amk_cluster_quota = map.get('amk_cluster_quota')
        return self


class DescribeUserQuotaResponse(TeaModel):
    def __init__(self, headers=None, body=None):
        self.headers = {}
        self.body = body

    def validate(self):
        self.validate_required(self.headers, 'headers')
        self.validate_required(self.body, 'body')
        if self.body:
            self.body.validate()

    def to_map(self):
        result = {}
        result['headers'] = self.headers
        if self.body is not None:
            result['body'] = self.body.to_map()
        else:
            result['body'] = None
        return result

    def from_map(self, map={}):
        self.headers = map.get('headers')
        if map.get('body') is not None:
            temp_model = DescribeUserQuotaResponseBody()
            self.body = temp_model.from_map(map['body'])
        else:
            self.body = None
        return self


class DescribeClusterV2UserKubeconfigQuery(TeaModel):
    def __init__(self, private_ip_address=False):
        self.private_ip_address = private_ip_address

    def validate(self):
        pass

    def to_map(self):
        result = {}
        result['PrivateIpAddress'] = self.private_ip_address
        return result

    def from_map(self, map={}):
        self.private_ip_address = map.get('PrivateIpAddress')
        return self


class DescribeClusterV2UserKubeconfigRequest(TeaModel):
    def __init__(self, headers=None, query=None):
        self.headers = {}
        self.query = query

    def validate(self):
        if self.query:
            self.query.validate()

    def to_map(self):
        result = {}
        result['headers'] = self.headers
        if self.query is not None:
            result['query'] = self.query.to_map()
        else:
            result['query'] = None
        return result

    def from_map(self, map={}):
        self.headers = map.get('headers')
        if map.get('query') is not None:
            temp_model = DescribeClusterV2UserKubeconfigQuery()
            self.query = temp_model.from_map(map['query'])
        else:
            self.query = None
        return self


class DescribeClusterV2UserKubeconfigResponseBody(TeaModel):
    def __init__(self, request_id=""):
        self.request_id = request_id

    def validate(self):
        self.validate_required(self.request_id, 'request_id')

    def to_map(self):
        result = {}
        result['RequestId'] = self.request_id
        return result

    def from_map(self, map={}):
        self.request_id = map.get('RequestId')
        return self


class DescribeClusterV2UserKubeconfigResponse(TeaModel):
    def __init__(self, headers=None, body=None):
        self.headers = {}
        self.body = body

    def validate(self):
        self.validate_required(self.headers, 'headers')
        self.validate_required(self.body, 'body')
        if self.body:
            self.body.validate()

    def to_map(self):
        result = {}
        result['headers'] = self.headers
        if self.body is not None:
            result['body'] = self.body.to_map()
        else:
            result['body'] = None
        return result

    def from_map(self, map={}):
        self.headers = map.get('headers')
        if map.get('body') is not None:
            temp_model = DescribeClusterV2UserKubeconfigResponseBody()
            self.body = temp_model.from_map(map['body'])
        else:
            self.body = None
        return self


class RemoveClusterNodesBody(TeaModel):
    def __init__(self, release_node=False, drain_node=False, nodes=None):
        self.release_node = release_node
        self.drain_node = drain_node
        self.nodes = []

    def validate(self):
        self.validate_required(self.nodes, 'nodes')
        if self.nodes:
            for k in self.nodes:
                if k:
                    k.validate()

    def to_map(self):
        result = {}
        result['release_node'] = self.release_node
        result['drain_node'] = self.drain_node
        result['nodes'] = []
        if self.nodes is not None:
            for k in self.nodes:
                result['nodes'].append(k.to_map() if k else None)
        else:
            result['nodes'] = None
        return result

    def from_map(self, map={}):
        self.release_node = map.get('release_node')
        self.drain_node = map.get('drain_node')
        self.nodes = []
        if map.get('nodes') is not None:
            for k in map.get('nodes'):
                temp_model = RemoveClusterNodesBodyNodes()
                temp_model = temp_model.from_map(k)
                self.nodes.append(temp_model)
        else:
            self.nodes = None
        return self


class RemoveClusterNodesBodyNodes(TeaModel):
    def __init__(self, node_name=""):
        self.node_name = node_name

    def validate(self):
        pass

    def to_map(self):
        result = {}
        result['node_name'] = self.node_name
        return result

    def from_map(self, map={}):
        self.node_name = map.get('node_name')
        return self


class RemoveClusterNodesRequest(TeaModel):
    def __init__(self, headers=None, body=None):
        self.headers = {}
        self.body = body

    def validate(self):
        if self.body:
            self.body.validate()

    def to_map(self):
        result = {}
        result['headers'] = self.headers
        if self.body is not None:
            result['body'] = self.body.to_map()
        else:
            result['body'] = None
        return result

    def from_map(self, map={}):
        self.headers = map.get('headers')
        if map.get('body') is not None:
            temp_model = RemoveClusterNodesBody()
            self.body = temp_model.from_map(map['body'])
        else:
            self.body = None
        return self


class RemoveClusterNodesResponse(TeaModel):
    def __init__(self, headers=None):
        self.headers = {}

    def validate(self):
        self.validate_required(self.headers, 'headers')

    def to_map(self):
        result = {}
        result['headers'] = self.headers
        return result

    def from_map(self, map={}):
        self.headers = map.get('headers')
        return self


class UpgradeClusterBody(TeaModel):
    def __init__(self, version=""):
        self.version = version

    def validate(self):
        pass

    def to_map(self):
        result = {}
        result['version'] = self.version
        return result

    def from_map(self, map={}):
        self.version = map.get('version')
        return self


class UpgradeClusterRequest(TeaModel):
    def __init__(self, headers=None, body=None):
        self.headers = {}
        self.body = body

    def validate(self):
        if self.body:
            self.body.validate()

    def to_map(self):
        result = {}
        result['headers'] = self.headers
        if self.body is not None:
            result['body'] = self.body.to_map()
        else:
            result['body'] = None
        return result

    def from_map(self, map={}):
        self.headers = map.get('headers')
        if map.get('body') is not None:
            temp_model = UpgradeClusterBody()
            self.body = temp_model.from_map(map['body'])
        else:
            self.body = None
        return self


class UpgradeClusterResponse(TeaModel):
    def __init__(self, headers=None):
        self.headers = {}

    def validate(self):
        self.validate_required(self.headers, 'headers')

    def to_map(self):
        result = {}
        result['headers'] = self.headers
        return result

    def from_map(self, map={}):
        self.headers = map.get('headers')
        return self


class PauseClusterUpgradeRequest(TeaModel):
    def __init__(self, headers=None):
        self.headers = {}

    def validate(self):
        pass

    def to_map(self):
        result = {}
        result['headers'] = self.headers
        return result

    def from_map(self, map={}):
        self.headers = map.get('headers')
        return self


class PauseClusterUpgradeResponse(TeaModel):
    def __init__(self, headers=None):
        self.headers = {}

    def validate(self):
        self.validate_required(self.headers, 'headers')

    def to_map(self):
        result = {}
        result['headers'] = self.headers
        return result

    def from_map(self, map={}):
        self.headers = map.get('headers')
        return self


class ResumeUpgradeClusterRequest(TeaModel):
    def __init__(self, headers=None):
        self.headers = {}

    def validate(self):
        pass

    def to_map(self):
        result = {}
        result['headers'] = self.headers
        return result

    def from_map(self, map={}):
        self.headers = map.get('headers')
        return self


class ResumeUpgradeClusterResponse(TeaModel):
    def __init__(self, headers=None):
        self.headers = {}

    def validate(self):
        self.validate_required(self.headers, 'headers')

    def to_map(self):
        result = {}
        result['headers'] = self.headers
        return result

    def from_map(self, map={}):
        self.headers = map.get('headers')
        return self


class GetUpgradeStatusRequest(TeaModel):
    def __init__(self, headers=None):
        self.headers = {}

    def validate(self):
        pass

    def to_map(self):
        result = {}
        result['headers'] = self.headers
        return result

    def from_map(self, map={}):
        self.headers = map.get('headers')
        return self


class GetUpgradeStatusResponseBody(TeaModel):
    def __init__(self, status="", precheck_report_id="", upgrade_step="", error_message=""):
        self.status = status
        self.precheck_report_id = precheck_report_id
        self.upgrade_step = upgrade_step
        self.error_message = error_message

    def validate(self):
        self.validate_required(self.status, 'status')
        self.validate_required(self.precheck_report_id, 'precheck_report_id')
        self.validate_required(self.upgrade_step, 'upgrade_step')
        self.validate_required(self.error_message, 'error_message')

    def to_map(self):
        result = {}
        result['status'] = self.status
        result['precheck_report_id'] = self.precheck_report_id
        result['upgrade_step'] = self.upgrade_step
        result['error_message'] = self.error_message
        return result

    def from_map(self, map={}):
        self.status = map.get('status')
        self.precheck_report_id = map.get('precheck_report_id')
        self.upgrade_step = map.get('upgrade_step')
        self.error_message = map.get('error_message')
        return self


class GetUpgradeStatusResponse(TeaModel):
    def __init__(self, headers=None, body=None):
        self.headers = {}
        self.body = body

    def validate(self):
        self.validate_required(self.headers, 'headers')
        self.validate_required(self.body, 'body')
        if self.body:
            self.body.validate()

    def to_map(self):
        result = {}
        result['headers'] = self.headers
        if self.body is not None:
            result['body'] = self.body.to_map()
        else:
            result['body'] = None
        return result

    def from_map(self, map={}):
        self.headers = map.get('headers')
        if map.get('body') is not None:
            temp_model = GetUpgradeStatusResponseBody()
            self.body = temp_model.from_map(map['body'])
        else:
            self.body = None
        return self


class ModifyClusterBody(TeaModel):
    def __init__(self, deletion_protection=False, ingress_loadbalancer_id="", resource_group_id=""):
        self.deletion_protection = deletion_protection
        self.ingress_loadbalancer_id = ingress_loadbalancer_id
        self.resource_group_id = resource_group_id

    def validate(self):
        pass

    def to_map(self):
        result = {}
        result['deletion_protection'] = self.deletion_protection
        result['ingress_loadbalancer_id'] = self.ingress_loadbalancer_id
        result['resource_group_id'] = self.resource_group_id
        return result

    def from_map(self, map={}):
        self.deletion_protection = map.get('deletion_protection')
        self.ingress_loadbalancer_id = map.get('ingress_loadbalancer_id')
        self.resource_group_id = map.get('resource_group_id')
        return self


class ModifyClusterRequest(TeaModel):
    def __init__(self, headers=None, body=None):
        self.headers = {}
        self.body = body

    def validate(self):
        if self.body:
            self.body.validate()

    def to_map(self):
        result = {}
        result['headers'] = self.headers
        if self.body is not None:
            result['body'] = self.body.to_map()
        else:
            result['body'] = None
        return result

    def from_map(self, map={}):
        self.headers = map.get('headers')
        if map.get('body') is not None:
            temp_model = ModifyClusterBody()
            self.body = temp_model.from_map(map['body'])
        else:
            self.body = None
        return self


class ModifyClusterResponse(TeaModel):
    def __init__(self, headers=None):
        self.headers = {}

    def validate(self):
        self.validate_required(self.headers, 'headers')

    def to_map(self):
        result = {}
        result['headers'] = self.headers
        return result

    def from_map(self, map={}):
        self.headers = map.get('headers')
        return self


class InstallClusterAddonsBody(TeaModel):
    def __init__(self, name="", version="", disabled=False, required="", config=""):
        self.name = name
        self.version = version
        self.disabled = disabled
        self.required = required
        self.config = config

    def validate(self):
        pass

    def to_map(self):
        result = {}
        result['name'] = self.name
        result['version'] = self.version
        result['disabled'] = self.disabled
        result['required'] = self.required
        result['config'] = self.config
        return result

    def from_map(self, map={}):
        self.name = map.get('name')
        self.version = map.get('version')
        self.disabled = map.get('disabled')
        self.required = map.get('required')
        self.config = map.get('config')
        return self


class InstallClusterAddonsRequest(TeaModel):
    def __init__(self, headers=None, body=None):
        self.headers = {}
        self.body = body

    def validate(self):
        if self.body:
            self.body.validate()

    def to_map(self):
        result = {}
        result['headers'] = self.headers
        if self.body is not None:
            result['body'] = self.body.to_map()
        else:
            result['body'] = None
        return result

    def from_map(self, map={}):
        self.headers = map.get('headers')
        if map.get('body') is not None:
            temp_model = InstallClusterAddonsBody()
            self.body = temp_model.from_map(map['body'])
        else:
            self.body = None
        return self


class InstallClusterAddonsResponse(TeaModel):
    def __init__(self, headers=None):
        self.headers = {}

    def validate(self):
        self.validate_required(self.headers, 'headers')

    def to_map(self):
        result = {}
        result['headers'] = self.headers
        return result

    def from_map(self, map={}):
        self.headers = map.get('headers')
        return self


class DeleteTriggerHookRequest(TeaModel):
    def __init__(self, headers=None):
        self.headers = {}

    def validate(self):
        pass

    def to_map(self):
        result = {}
        result['headers'] = self.headers
        return result

    def from_map(self, map={}):
        self.headers = map.get('headers')
        return self


class DeleteTriggerHookResponse(TeaModel):
    def __init__(self, headers=None):
        self.headers = {}

    def validate(self):
        self.validate_required(self.headers, 'headers')

    def to_map(self):
        result = {}
        result['headers'] = self.headers
        return result

    def from_map(self, map={}):
        self.headers = map.get('headers')
        return self


class ModifyClusterTagsBody(TeaModel):
    def __init__(self, key="", value=""):
        self.key = key
        self.value = value

    def validate(self):
        self.validate_required(self.key, 'key')
        self.validate_required(self.value, 'value')

    def to_map(self):
        result = {}
        result['key'] = self.key
        result['value'] = self.value
        return result

    def from_map(self, map={}):
        self.key = map.get('key')
        self.value = map.get('value')
        return self


class ModifyClusterTagsRequest(TeaModel):
    def __init__(self, headers=None, body=None):
        self.headers = {}
        self.body = body

    def validate(self):
        self.validate_required(self.body, 'body')
        if self.body:
            self.body.validate()

    def to_map(self):
        result = {}
        result['headers'] = self.headers
        if self.body is not None:
            result['body'] = self.body.to_map()
        else:
            result['body'] = None
        return result

    def from_map(self, map={}):
        self.headers = map.get('headers')
        if map.get('body') is not None:
            temp_model = ModifyClusterTagsBody()
            self.body = temp_model.from_map(map['body'])
        else:
            self.body = None
        return self


class ModifyClusterTagsResponseBody(TeaModel):
    def __init__(self, request_id=""):
        self.request_id = request_id

    def validate(self):
        self.validate_required(self.request_id, 'request_id')

    def to_map(self):
        result = {}
        result['requestId'] = self.request_id
        return result

    def from_map(self, map={}):
        self.request_id = map.get('requestId')
        return self


class ModifyClusterTagsResponse(TeaModel):
    def __init__(self, headers=None, body=None):
        self.headers = {}
        self.body = body

    def validate(self):
        self.validate_required(self.headers, 'headers')
        self.validate_required(self.body, 'body')
        if self.body:
            self.body.validate()

    def to_map(self):
        result = {}
        result['headers'] = self.headers
        if self.body is not None:
            result['body'] = self.body.to_map()
        else:
            result['body'] = None
        return result

    def from_map(self, map={}):
        self.headers = map.get('headers')
        if map.get('body') is not None:
            temp_model = ModifyClusterTagsResponseBody()
            self.body = temp_model.from_map(map['body'])
        else:
            self.body = None
        return self


class DescribeExternalAgentRequest(TeaModel):
    def __init__(self, headers=None):
        self.headers = {}

    def validate(self):
        pass

    def to_map(self):
        result = {}
        result['headers'] = self.headers
        return result

    def from_map(self, map={}):
        self.headers = map.get('headers')
        return self


class DescribeExternalAgentResponseBody(TeaModel):
    def __init__(self, config=""):
        self.config = config

    def validate(self):
        self.validate_required(self.config, 'config')

    def to_map(self):
        result = {}
        result['config'] = self.config
        return result

    def from_map(self, map={}):
        self.config = map.get('config')
        return self


class DescribeExternalAgentResponse(TeaModel):
    def __init__(self, headers=None, body=None):
        self.headers = {}
        self.body = body

    def validate(self):
        self.validate_required(self.headers, 'headers')
        self.validate_required(self.body, 'body')
        if self.body:
            self.body.validate()

    def to_map(self):
        result = {}
        result['headers'] = self.headers
        if self.body is not None:
            result['body'] = self.body.to_map()
        else:
            result['body'] = None
        return result

    def from_map(self, map={}):
        self.headers = map.get('headers')
        if map.get('body') is not None:
            temp_model = DescribeExternalAgentResponseBody()
            self.body = temp_model.from_map(map['body'])
        else:
            self.body = None
        return self


class DescribeClusterAttachScriptsBody(TeaModel):
    def __init__(self, options=None):
        self.options = options

    def validate(self):
        self.validate_required(self.options, 'options')
        if self.options:
            self.options.validate()

    def to_map(self):
        result = {}
        if self.options is not None:
            result['options'] = self.options.to_map()
        else:
            result['options'] = None
        return result

    def from_map(self, map={}):
        if map.get('options') is not None:
            temp_model = DescribeClusterAttachScriptsBodyOptions()
            self.options = temp_model.from_map(map['options'])
        else:
            self.options = None
        return self


class DescribeClusterAttachScriptsBodyOptions(TeaModel):
    def __init__(self, flannel_iface="", enable_iptables=False, manage_runtime=False, node_name_strategy="",
                 node_name="", node_name_prefix=""):
        self.flannel_iface = flannel_iface
        self.enable_iptables = enable_iptables
        self.manage_runtime = manage_runtime
        self.node_name_strategy = node_name_strategy
        self.node_name = node_name
        self.node_name_prefix = node_name_prefix

    def validate(self):
        pass

    def to_map(self):
        result = {}
        result['flannelIface'] = self.flannel_iface
        result['enableIptables'] = self.enable_iptables
        result['manageRuntime'] = self.manage_runtime
        result['nodeNameStrategy'] = self.node_name_strategy
        result['nodeName'] = self.node_name
        result['nodeNamePrefix'] = self.node_name_prefix
        return result

    def from_map(self, map={}):
        self.flannel_iface = map.get('flannelIface')
        self.enable_iptables = map.get('enableIptables')
        self.manage_runtime = map.get('manageRuntime')
        self.node_name_strategy = map.get('nodeNameStrategy')
        self.node_name = map.get('nodeName')
        self.node_name_prefix = map.get('nodeNamePrefix')
        return self


class DescribeClusterAttachScriptsRequest(TeaModel):
    def __init__(self, headers=None, body=None):
        self.headers = {}
        self.body = body

    def validate(self):
        self.validate_required(self.body, 'body')
        if self.body:
            self.body.validate()

    def to_map(self):
        result = {}
        result['headers'] = self.headers
        if self.body is not None:
            result['body'] = self.body.to_map()
        else:
            result['body'] = None
        return result

    def from_map(self, map={}):
        self.headers = map.get('headers')
        if map.get('body') is not None:
            temp_model = DescribeClusterAttachScriptsBody()
            self.body = temp_model.from_map(map['body'])
        else:
            self.body = None
        return self


class DescribeClusterAttachScriptsResponse(TeaModel):
    def __init__(self, headers=None):
        self.headers = {}

    def validate(self):
        self.validate_required(self.headers, 'headers')

    def to_map(self):
        result = {}
        result['headers'] = self.headers
        return result

    def from_map(self, map={}):
        self.headers = map.get('headers')
        return self


class ScaleOutClusterBody(TeaModel):
    def __init__(self, count=0, worker_instance_charge_type="", worker_period=0, worker_period_unit="",
                 worker_auto_renew=False, worker_auto_renew_period=0, worker_system_disk_category="",
                 worker_system_disk_size=0, worker_data_disk=False, key_pair="", login_password="",
                 cloud_monitor_flags=False, cpu_policy="", disable_rollback=False, worker_data_disks=None, tags=None,
                 taints=None, vswitch_ids=None, worker_instance_types=None):
        self.count = count
        self.worker_instance_charge_type = worker_instance_charge_type
        self.worker_period = worker_period
        self.worker_period_unit = worker_period_unit
        self.worker_auto_renew = worker_auto_renew
        self.worker_auto_renew_period = worker_auto_renew_period
        self.worker_system_disk_category = worker_system_disk_category
        self.worker_system_disk_size = worker_system_disk_size
        self.worker_data_disk = worker_data_disk
        self.key_pair = key_pair
        self.login_password = login_password
        self.cloud_monitor_flags = cloud_monitor_flags
        self.cpu_policy = cpu_policy
        self.disable_rollback = disable_rollback
        self.worker_data_disks = []
        self.tags = []
        self.taints = []
        self.vswitch_ids = []
        self.worker_instance_types = []

    def validate(self):
        self.validate_required(self.count, 'count')
        self.validate_required(self.worker_data_disk, 'worker_data_disk')
        self.validate_required(self.key_pair, 'key_pair')
        self.validate_required(self.login_password, 'login_password')
        self.validate_required(self.worker_data_disks, 'worker_data_disks')
        if self.worker_data_disks:
            for k in self.worker_data_disks:
                if k:
                    k.validate()
        self.validate_required(self.tags, 'tags')
        if self.tags:
            for k in self.tags:
                if k:
                    k.validate()
        self.validate_required(self.taints, 'taints')
        if self.taints:
            for k in self.taints:
                if k:
                    k.validate()
        self.validate_required(self.vswitch_ids, 'vswitch_ids')
        self.validate_required(self.worker_instance_types, 'worker_instance_types')

    def to_map(self):
        result = {}
        result['count'] = self.count
        result['worker_instance_charge_type'] = self.worker_instance_charge_type
        result['worker_period'] = self.worker_period
        result['worker_period_unit'] = self.worker_period_unit
        result['worker_auto_renew'] = self.worker_auto_renew
        result['worker_auto_renew_period'] = self.worker_auto_renew_period
        result['worker_system_disk_category'] = self.worker_system_disk_category
        result['worker_system_disk_size'] = self.worker_system_disk_size
        result['worker_data_disk'] = self.worker_data_disk
        result['key_pair'] = self.key_pair
        result['login_password'] = self.login_password
        result['cloud_monitor_flags'] = self.cloud_monitor_flags
        result['cpu_policy'] = self.cpu_policy
        result['disable_rollback'] = self.disable_rollback
        result['worker_data_disks'] = []
        if self.worker_data_disks is not None:
            for k in self.worker_data_disks:
                result['worker_data_disks'].append(k.to_map() if k else None)
        else:
            result['worker_data_disks'] = None
        result['tags'] = []
        if self.tags is not None:
            for k in self.tags:
                result['tags'].append(k.to_map() if k else None)
        else:
            result['tags'] = None
        result['taints'] = []
        if self.taints is not None:
            for k in self.taints:
                result['taints'].append(k.to_map() if k else None)
        else:
            result['taints'] = None
        result['vswitch_ids'] = []
        if self.vswitch_ids is not None:
            for k in self.vswitch_ids:
                result['vswitch_ids'].append(k)
        else:
            result['vswitch_ids'] = None
        result['worker_instance_types'] = []
        if self.worker_instance_types is not None:
            for k in self.worker_instance_types:
                result['worker_instance_types'].append(k)
        else:
            result['worker_instance_types'] = None
        return result

    def from_map(self, map={}):
        self.count = map.get('count')
        self.worker_instance_charge_type = map.get('worker_instance_charge_type')
        self.worker_period = map.get('worker_period')
        self.worker_period_unit = map.get('worker_period_unit')
        self.worker_auto_renew = map.get('worker_auto_renew')
        self.worker_auto_renew_period = map.get('worker_auto_renew_period')
        self.worker_system_disk_category = map.get('worker_system_disk_category')
        self.worker_system_disk_size = map.get('worker_system_disk_size')
        self.worker_data_disk = map.get('worker_data_disk')
        self.key_pair = map.get('key_pair')
        self.login_password = map.get('login_password')
        self.cloud_monitor_flags = map.get('cloud_monitor_flags')
        self.cpu_policy = map.get('cpu_policy')
        self.disable_rollback = map.get('disable_rollback')
        self.worker_data_disks = []
        if map.get('worker_data_disks') is not None:
            for k in map.get('worker_data_disks'):
                temp_model = ScaleOutClusterBodyWorkerDataDisks()
                temp_model = temp_model.from_map(k)
                self.worker_data_disks.append(temp_model)
        else:
            self.worker_data_disks = None
        self.tags = []
        if map.get('tags') is not None:
            for k in map.get('tags'):
                temp_model = ScaleOutClusterBodyTags()
                temp_model = temp_model.from_map(k)
                self.tags.append(temp_model)
        else:
            self.tags = None
        self.taints = []
        if map.get('taints') is not None:
            for k in map.get('taints'):
                temp_model = ScaleOutClusterBodyTaints()
                temp_model = temp_model.from_map(k)
                self.taints.append(temp_model)
        else:
            self.taints = None
        self.vswitch_ids = []
        if map.get('vswitch_ids') is not None:
            for k in map.get('vswitch_ids'):
                self.vswitch_ids.append(k)
        else:
            self.vswitch_ids = None
        self.worker_instance_types = []
        if map.get('worker_instance_types') is not None:
            for k in map.get('worker_instance_types'):
                self.worker_instance_types.append(k)
        else:
            self.worker_instance_types = None
        return self


class ScaleOutClusterBodyWorkerDataDisks(TeaModel):
    def __init__(self, category="", size="", encrypted=""):
        self.category = category
        self.size = size
        self.encrypted = encrypted

    def validate(self):
        pass

    def to_map(self):
        result = {}
        result['category'] = self.category
        result['size'] = self.size
        result['encrypted'] = self.encrypted
        return result

    def from_map(self, map={}):
        self.category = map.get('category')
        self.size = map.get('size')
        self.encrypted = map.get('encrypted')
        return self


class ScaleOutClusterBodyTags(TeaModel):
    def __init__(self, key="", value=""):
        self.key = key
        self.value = value

    def validate(self):
        pass

    def to_map(self):
        result = {}
        result['key'] = self.key
        result['value'] = self.value
        return result

    def from_map(self, map={}):
        self.key = map.get('key')
        self.value = map.get('value')
        return self


class ScaleOutClusterBodyTaints(TeaModel):
    def __init__(self, key="", value="", effect=""):
        self.key = key
        self.value = value
        self.effect = effect

    def validate(self):
        pass

    def to_map(self):
        result = {}
        result['key'] = self.key
        result['value'] = self.value
        result['effect'] = self.effect
        return result

    def from_map(self, map={}):
        self.key = map.get('key')
        self.value = map.get('value')
        self.effect = map.get('effect')
        return self


class ScaleOutClusterRequest(TeaModel):
    def __init__(self, headers=None, body=None):
        self.headers = {}
        self.body = body

    def validate(self):
        self.validate_required(self.body, 'body')
        if self.body:
            self.body.validate()

    def to_map(self):
        result = {}
        result['headers'] = self.headers
        if self.body is not None:
            result['body'] = self.body.to_map()
        else:
            result['body'] = None
        return result

    def from_map(self, map={}):
        self.headers = map.get('headers')
        if map.get('body') is not None:
            temp_model = ScaleOutClusterBody()
            self.body = temp_model.from_map(map['body'])
        else:
            self.body = None
        return self


class ScaleOutClusterResponseBody(TeaModel):
    def __init__(self, cluster_id="", request_id="", task_id="", instance_id=""):
        self.cluster_id = cluster_id
        self.request_id = request_id
        self.task_id = task_id
        self.instance_id = instance_id

    def validate(self):
        self.validate_required(self.cluster_id, 'cluster_id')
        self.validate_required(self.request_id, 'request_id')
        self.validate_required(self.task_id, 'task_id')
        self.validate_required(self.instance_id, 'instance_id')

    def to_map(self):
        result = {}
        result['cluster_id'] = self.cluster_id
        result['request_id'] = self.request_id
        result['task_id'] = self.task_id
        result['instanceId'] = self.instance_id
        return result

    def from_map(self, map={}):
        self.cluster_id = map.get('cluster_id')
        self.request_id = map.get('request_id')
        self.task_id = map.get('task_id')
        self.instance_id = map.get('instanceId')
        return self


class ScaleOutClusterResponse(TeaModel):
    def __init__(self, headers=None, body=None):
        self.headers = {}
        self.body = body

    def validate(self):
        self.validate_required(self.headers, 'headers')
        self.validate_required(self.body, 'body')
        if self.body:
            self.body.validate()

    def to_map(self):
        result = {}
        result['headers'] = self.headers
        if self.body is not None:
            result['body'] = self.body.to_map()
        else:
            result['body'] = None
        return result

    def from_map(self, map={}):
        self.headers = map.get('headers')
        if map.get('body') is not None:
            temp_model = ScaleOutClusterResponseBody()
            self.body = temp_model.from_map(map['body'])
        else:
            self.body = None
        return self


class CreateTriggerHookBody(TeaModel):
    def __init__(self, region_id="", cluster_id="", project_id="", action="", trigger_url=""):
        self.region_id = region_id
        self.cluster_id = cluster_id
        self.project_id = project_id
        self.action = action
        self.trigger_url = trigger_url

    def validate(self):
        pass

    def to_map(self):
        result = {}
        result['region_id'] = self.region_id
        result['cluster_id'] = self.cluster_id
        result['project_id'] = self.project_id
        result['action'] = self.action
        result['trigger_url'] = self.trigger_url
        return result

    def from_map(self, map={}):
        self.region_id = map.get('region_id')
        self.cluster_id = map.get('cluster_id')
        self.project_id = map.get('project_id')
        self.action = map.get('action')
        self.trigger_url = map.get('trigger_url')
        return self


class CreateTriggerHookRequest(TeaModel):
    def __init__(self, headers=None, body=None):
        self.headers = {}
        self.body = body

    def validate(self):
        if self.body:
            self.body.validate()

    def to_map(self):
        result = {}
        result['headers'] = self.headers
        if self.body is not None:
            result['body'] = self.body.to_map()
        else:
            result['body'] = None
        return result

    def from_map(self, map={}):
        self.headers = map.get('headers')
        if map.get('body') is not None:
            temp_model = CreateTriggerHookBody()
            self.body = temp_model.from_map(map['body'])
        else:
            self.body = None
        return self


class CreateTriggerHookResponse(TeaModel):
    def __init__(self, headers=None):
        self.headers = {}

    def validate(self):
        self.validate_required(self.headers, 'headers')

    def to_map(self):
        result = {}
        result['headers'] = self.headers
        return result

    def from_map(self, map={}):
        self.headers = map.get('headers')
        return self


class UpgradeClusterAddonsBody(TeaModel):
    def __init__(self, component_name="", version=""):
        self.component_name = component_name
        self.version = version

    def validate(self):
        pass

    def to_map(self):
        result = {}
        result['component_name'] = self.component_name
        result['version'] = self.version
        return result

    def from_map(self, map={}):
        self.component_name = map.get('component_name')
        self.version = map.get('version')
        return self


class UpgradeClusterAddonsRequest(TeaModel):
    def __init__(self, headers=None, body=None):
        self.headers = {}
        self.body = body

    def validate(self):
        if self.body:
            self.body.validate()

    def to_map(self):
        result = {}
        result['headers'] = self.headers
        if self.body is not None:
            result['body'] = self.body.to_map()
        else:
            result['body'] = None
        return result

    def from_map(self, map={}):
        self.headers = map.get('headers')
        if map.get('body') is not None:
            temp_model = UpgradeClusterAddonsBody()
            self.body = temp_model.from_map(map['body'])
        else:
            self.body = None
        return self


class UpgradeClusterAddonsResponse(TeaModel):
    def __init__(self, headers=None):
        self.headers = {}

    def validate(self):
        self.validate_required(self.headers, 'headers')

    def to_map(self):
        result = {}
        result['headers'] = self.headers
        return result

    def from_map(self, map={}):
        self.headers = map.get('headers')
        return self


class DescribeClusterAddonsVersionRequest(TeaModel):
    def __init__(self, headers=None):
        self.headers = {}

    def validate(self):
        pass

    def to_map(self):
        result = {}
        result['headers'] = self.headers
        return result

    def from_map(self, map={}):
        self.headers = map.get('headers')
        return self


class DescribeClusterAddonsVersionResponseBody(TeaModel):
    def __init__(self, template="", next_version="", can_upgrade=False, component_name="", version="", changed="",
                 message="", required=False):
        self.template = template
        self.next_version = next_version
        self.can_upgrade = can_upgrade
        self.component_name = component_name
        self.version = version
        self.changed = changed
        self.message = message
        self.required = required

    def validate(self):
        self.validate_required(self.template, 'template')
        self.validate_required(self.next_version, 'next_version')
        self.validate_required(self.can_upgrade, 'can_upgrade')
        self.validate_required(self.component_name, 'component_name')
        self.validate_required(self.version, 'version')
        self.validate_required(self.changed, 'changed')
        self.validate_required(self.message, 'message')
        self.validate_required(self.required, 'required')

    def to_map(self):
        result = {}
        result['template'] = self.template
        result['next_version'] = self.next_version
        result['can_upgrade'] = self.can_upgrade
        result['component_name'] = self.component_name
        result['version'] = self.version
        result['changed'] = self.changed
        result['message'] = self.message
        result['required'] = self.required
        return result

    def from_map(self, map={}):
        self.template = map.get('template')
        self.next_version = map.get('next_version')
        self.can_upgrade = map.get('can_upgrade')
        self.component_name = map.get('component_name')
        self.version = map.get('version')
        self.changed = map.get('changed')
        self.message = map.get('message')
        self.required = map.get('required')
        return self


class DescribeClusterAddonsVersionResponse(TeaModel):
    def __init__(self, headers=None, body=None):
        self.headers = {}
        self.body = body

    def validate(self):
        self.validate_required(self.headers, 'headers')
        self.validate_required(self.body, 'body')
        if self.body:
            self.body.validate()

    def to_map(self):
        result = {}
        result['headers'] = self.headers
        if self.body is not None:
            result['body'] = self.body.to_map()
        else:
            result['body'] = None
        return result

    def from_map(self, map={}):
        self.headers = map.get('headers')
        if map.get('body') is not None:
            temp_model = DescribeClusterAddonsVersionResponseBody()
            self.body = temp_model.from_map(map['body'])
        else:
            self.body = None
        return self


class DescribeClusterAddonUpgradeStatusRequest(TeaModel):
    def __init__(self, headers=None):
        self.headers = {}

    def validate(self):
        pass

    def to_map(self):
        result = {}
        result['headers'] = self.headers
        return result

    def from_map(self, map={}):
        self.headers = map.get('headers')
        return self


class DescribeClusterAddonUpgradeStatusResponseBody(TeaModel):
    def __init__(self, template="", can_upgrade=False, addon_info=None):
        self.template = template
        self.can_upgrade = can_upgrade
        self.addon_info = addon_info

    def validate(self):
        self.validate_required(self.template, 'template')
        self.validate_required(self.can_upgrade, 'can_upgrade')
        self.validate_required(self.addon_info, 'addon_info')
        if self.addon_info:
            self.addon_info.validate()

    def to_map(self):
        result = {}
        result['template'] = self.template
        result['can_upgrade'] = self.can_upgrade
        if self.addon_info is not None:
            result['addon_info'] = self.addon_info.to_map()
        else:
            result['addon_info'] = None
        return result

    def from_map(self, map={}):
        self.template = map.get('template')
        self.can_upgrade = map.get('can_upgrade')
        if map.get('addon_info') is not None:
            temp_model = DescribeClusterAddonUpgradeStatusResponseBodyAddonInfo()
            self.addon_info = temp_model.from_map(map['addon_info'])
        else:
            self.addon_info = None
        return self


class DescribeClusterAddonUpgradeStatusResponseBodyAddonInfo(TeaModel):
    def __init__(self, message="", category="", yaml="", component_name="", version=""):
        self.message = message
        self.category = category
        self.yaml = yaml
        self.component_name = component_name
        self.version = version

    def validate(self):
        self.validate_required(self.message, 'message')
        self.validate_required(self.category, 'category')
        self.validate_required(self.yaml, 'yaml')
        self.validate_required(self.component_name, 'component_name')
        self.validate_required(self.version, 'version')

    def to_map(self):
        result = {}
        result['message'] = self.message
        result['category'] = self.category
        result['yaml'] = self.yaml
        result['component_name'] = self.component_name
        result['version'] = self.version
        return result

    def from_map(self, map={}):
        self.message = map.get('message')
        self.category = map.get('category')
        self.yaml = map.get('yaml')
        self.component_name = map.get('component_name')
        self.version = map.get('version')
        return self


class DescribeClusterAddonUpgradeStatusResponse(TeaModel):
    def __init__(self, headers=None, body=None):
        self.headers = {}
        self.body = body

    def validate(self):
        self.validate_required(self.headers, 'headers')
        self.validate_required(self.body, 'body')
        if self.body:
            self.body.validate()

    def to_map(self):
        result = {}
        result['headers'] = self.headers
        if self.body is not None:
            result['body'] = self.body.to_map()
        else:
            result['body'] = None
        return result

    def from_map(self, map={}):
        self.headers = map.get('headers')
        if map.get('body') is not None:
            temp_model = DescribeClusterAddonUpgradeStatusResponseBody()
            self.body = temp_model.from_map(map['body'])
        else:
            self.body = None
        return self


class DeleteClusterNodesBody(TeaModel):
    def __init__(self, release_node="", nodes=None):
        self.release_node = release_node
        self.nodes = []

    def validate(self):
        self.validate_required(self.nodes, 'nodes')

    def to_map(self):
        result = {}
        result['release_node'] = self.release_node
        result['nodes'] = []
        if self.nodes is not None:
            for k in self.nodes:
                result['nodes'].append(k)
        else:
            result['nodes'] = None
        return result

    def from_map(self, map={}):
        self.release_node = map.get('release_node')
        self.nodes = []
        if map.get('nodes') is not None:
            for k in map.get('nodes'):
                self.nodes.append(k)
        else:
            self.nodes = None
        return self


class DeleteClusterNodesRequest(TeaModel):
    def __init__(self, headers=None, body=None):
        self.headers = {}
        self.body = body

    def validate(self):
        self.validate_required(self.body, 'body')
        if self.body:
            self.body.validate()

    def to_map(self):
        result = {}
        result['headers'] = self.headers
        if self.body is not None:
            result['body'] = self.body.to_map()
        else:
            result['body'] = None
        return result

    def from_map(self, map={}):
        self.headers = map.get('headers')
        if map.get('body') is not None:
            temp_model = DeleteClusterNodesBody()
            self.body = temp_model.from_map(map['body'])
        else:
            self.body = None
        return self


class DeleteClusterNodesResponseBody(TeaModel):
    def __init__(self, request_id=""):
        self.request_id = request_id

    def validate(self):
        self.validate_required(self.request_id, 'request_id')

    def to_map(self):
        result = {}
        result['RequestId'] = self.request_id
        return result

    def from_map(self, map={}):
        self.request_id = map.get('RequestId')
        return self


class DeleteClusterNodesResponse(TeaModel):
    def __init__(self, headers=None, body=None):
        self.headers = {}
        self.body = body

    def validate(self):
        self.validate_required(self.headers, 'headers')
        self.validate_required(self.body, 'body')
        if self.body:
            self.body.validate()

    def to_map(self):
        result = {}
        result['headers'] = self.headers
        if self.body is not None:
            result['body'] = self.body.to_map()
        else:
            result['body'] = None
        return result

    def from_map(self, map={}):
        self.headers = map.get('headers')
        if map.get('body') is not None:
            temp_model = DeleteClusterNodesResponseBody()
            self.body = temp_model.from_map(map['body'])
        else:
            self.body = None
        return self


class DeleteTemplateRequest(TeaModel):
    def __init__(self, headers=None):
        self.headers = {}

    def validate(self):
        pass

    def to_map(self):
        result = {}
        result['headers'] = self.headers
        return result

    def from_map(self, map={}):
        self.headers = map.get('headers')
        return self


class DeleteTemplateResponse(TeaModel):
    def __init__(self, headers=None):
        self.headers = {}

    def validate(self):
        self.validate_required(self.headers, 'headers')

    def to_map(self):
        result = {}
        result['headers'] = self.headers
        return result

    def from_map(self, map={}):
        self.headers = map.get('headers')
        return self


class DescribeClusterUserKubeconfigQuery(TeaModel):
    def __init__(self, private_ip_address=False):
        self.private_ip_address = private_ip_address

    def validate(self):
        pass

    def to_map(self):
        result = {}
        result['PrivateIpAddress'] = self.private_ip_address
        return result

    def from_map(self, map={}):
        self.private_ip_address = map.get('PrivateIpAddress')
        return self


class DescribeClusterUserKubeconfigRequest(TeaModel):
    def __init__(self, headers=None, query=None):
        self.headers = {}
        self.query = query

    def validate(self):
        if self.query:
            self.query.validate()

    def to_map(self):
        result = {}
        result['headers'] = self.headers
        if self.query is not None:
            result['query'] = self.query.to_map()
        else:
            result['query'] = None
        return result

    def from_map(self, map={}):
        self.headers = map.get('headers')
        if map.get('query') is not None:
            temp_model = DescribeClusterUserKubeconfigQuery()
            self.query = temp_model.from_map(map['query'])
        else:
            self.query = None
        return self


class DescribeClusterUserKubeconfigResponseBody(TeaModel):
    def __init__(self, config=""):
        self.config = config

    def validate(self):
        self.validate_required(self.config, 'config')

    def to_map(self):
        result = {}
        result['config'] = self.config
        return result

    def from_map(self, map={}):
        self.config = map.get('config')
        return self


class DescribeClusterUserKubeconfigResponse(TeaModel):
    def __init__(self, headers=None, body=None):
        self.headers = {}
        self.body = body

    def validate(self):
        self.validate_required(self.headers, 'headers')
        self.validate_required(self.body, 'body')
        if self.body:
            self.body.validate()

    def to_map(self):
        result = {}
        result['headers'] = self.headers
        if self.body is not None:
            result['body'] = self.body.to_map()
        else:
            result['body'] = None
        return result

    def from_map(self, map={}):
        self.headers = map.get('headers')
        if map.get('body') is not None:
            temp_model = DescribeClusterUserKubeconfigResponseBody()
            self.body = temp_model.from_map(map['body'])
        else:
            self.body = None
        return self


class DescribeClusterNodesQuery(TeaModel):
    def __init__(self, page_size="", page_number="", nodepool_id="", state=""):
        self.page_size = page_size
        self.page_number = page_number
        self.nodepool_id = nodepool_id
        self.state = state

    def validate(self):
        pass

    def to_map(self):
        result = {}
        result['pageSize'] = self.page_size
        result['pageNumber'] = self.page_number
        result['nodepool_id'] = self.nodepool_id
        result['state'] = self.state
        return result

    def from_map(self, map={}):
        self.page_size = map.get('pageSize')
        self.page_number = map.get('pageNumber')
        self.nodepool_id = map.get('nodepool_id')
        self.state = map.get('state')
        return self


class DescribeClusterNodesRequest(TeaModel):
    def __init__(self, headers=None, query=None):
        self.headers = {}
        self.query = query

    def validate(self):
        if self.query:
            self.query.validate()

    def to_map(self):
        result = {}
        result['headers'] = self.headers
        if self.query is not None:
            result['query'] = self.query.to_map()
        else:
            result['query'] = None
        return result

    def from_map(self, map={}):
        self.headers = map.get('headers')
        if map.get('query') is not None:
            temp_model = DescribeClusterNodesQuery()
            self.query = temp_model.from_map(map['query'])
        else:
            self.query = None
        return self


class DescribeClusterNodesResponseBody(TeaModel):
    def __init__(self, nodes=None, page=None):
        self.nodes = nodes
        self.page = page

    def validate(self):
        self.validate_required(self.nodes, 'nodes')
        if self.nodes:
            self.nodes.validate()
        self.validate_required(self.page, 'page')
        if self.page:
            self.page.validate()

    def to_map(self):
        result = {}
        if self.nodes is not None:
            result['nodes'] = self.nodes.to_map()
        else:
            result['nodes'] = None
        if self.page is not None:
            result['page'] = self.page.to_map()
        else:
            result['page'] = None
        return result

    def from_map(self, map={}):
        if map.get('nodes') is not None:
            temp_model = DescribeClusterNodesResponseBodyNodes()
            self.nodes = temp_model.from_map(map['nodes'])
        else:
            self.nodes = None
        if map.get('page') is not None:
            temp_model = DescribeClusterNodesResponseBodyPage()
            self.page = temp_model.from_map(map['page'])
        else:
            self.page = None
        return self


class DescribeClusterNodesResponseBodyNodesNodesIpAddress(TeaModel):
    def __init__(self, ip=None):
        self.ip = []

    def validate(self):
        self.validate_required(self.ip, 'ip')

    def to_map(self):
        result = {}
        result['ip'] = []
        if self.ip is not None:
            for k in self.ip:
                result['ip'].append(k)
        else:
            result['ip'] = None
        return result

    def from_map(self, map={}):
        self.ip = []
        if map.get('ip') is not None:
            for k in map.get('ip'):
                self.ip.append(k)
        else:
            self.ip = None
        return self


class DescribeClusterNodesResponseBodyNodesNodes(TeaModel):
    def __init__(self, instance_id="", instance_role="", instance_name="", host_name="", node_name="", instance_type="",
                 instance_charge_type="", image_id="", instance_type_family="", docker_version="", agent_version="",
                 is_leader=False, containers=0, is_aliyun_node=False, state="", nodepool_id="", error_message="",
                 ip_address=None):
        self.instance_id = instance_id
        self.instance_role = instance_role
        self.instance_name = instance_name
        self.host_name = host_name
        self.node_name = node_name
        self.instance_type = instance_type
        self.instance_charge_type = instance_charge_type
        self.image_id = image_id
        self.instance_type_family = instance_type_family
        self.docker_version = docker_version
        self.agent_version = agent_version
        self.is_leader = is_leader
        self.containers = containers
        self.is_aliyun_node = is_aliyun_node
        self.state = state
        self.nodepool_id = nodepool_id
        self.error_message = error_message
        self.ip_address = ip_address

    def validate(self):
        self.validate_required(self.instance_id, 'instance_id')
        self.validate_required(self.instance_role, 'instance_role')
        self.validate_required(self.instance_name, 'instance_name')
        self.validate_required(self.host_name, 'host_name')
        self.validate_required(self.node_name, 'node_name')
        self.validate_required(self.instance_type, 'instance_type')
        self.validate_required(self.instance_charge_type, 'instance_charge_type')
        self.validate_required(self.image_id, 'image_id')
        self.validate_required(self.instance_type_family, 'instance_type_family')
        self.validate_required(self.docker_version, 'docker_version')
        self.validate_required(self.agent_version, 'agent_version')
        self.validate_required(self.is_leader, 'is_leader')
        self.validate_required(self.containers, 'containers')
        self.validate_required(self.is_aliyun_node, 'is_aliyun_node')
        self.validate_required(self.state, 'state')
        self.validate_required(self.nodepool_id, 'nodepool_id')
        self.validate_required(self.error_message, 'error_message')
        self.validate_required(self.ip_address, 'ip_address')
        if self.ip_address:
            self.ip_address.validate()

    def to_map(self):
        result = {}
        result['instance_id'] = self.instance_id
        result['instance_role'] = self.instance_role
        result['instance_name'] = self.instance_name
        result['host_name'] = self.host_name
        result['node_name'] = self.node_name
        result['instance_type'] = self.instance_type
        result['instance_charge_type'] = self.instance_charge_type
        result['image_id'] = self.image_id
        result['instance_type_family'] = self.instance_type_family
        result['docker_version'] = self.docker_version
        result['agent_version'] = self.agent_version
        result['is_leader'] = self.is_leader
        result['containers'] = self.containers
        result['is_aliyun_node'] = self.is_aliyun_node
        result['state'] = self.state
        result['nodepool_id'] = self.nodepool_id
        result['error_message'] = self.error_message
        if self.ip_address is not None:
            result['ip_address'] = self.ip_address.to_map()
        else:
            result['ip_address'] = None
        return result

    def from_map(self, map={}):
        self.instance_id = map.get('instance_id')
        self.instance_role = map.get('instance_role')
        self.instance_name = map.get('instance_name')
        self.host_name = map.get('host_name')
        self.node_name = map.get('node_name')
        self.instance_type = map.get('instance_type')
        self.instance_charge_type = map.get('instance_charge_type')
        self.image_id = map.get('image_id')
        self.instance_type_family = map.get('instance_type_family')
        self.docker_version = map.get('docker_version')
        self.agent_version = map.get('agent_version')
        self.is_leader = map.get('is_leader')
        self.containers = map.get('containers')
        self.is_aliyun_node = map.get('is_aliyun_node')
        self.state = map.get('state')
        self.nodepool_id = map.get('nodepool_id')
        self.error_message = map.get('error_message')
        if map.get('ip_address') is not None:
            temp_model = DescribeClusterNodesResponseBodyNodesNodesIpAddress()
            self.ip_address = temp_model.from_map(map['ip_address'])
        else:
            self.ip_address = None
        return self


class DescribeClusterNodesResponseBodyNodes(TeaModel):
    def __init__(self, nodes=None):
        self.nodes = []

    def validate(self):
        self.validate_required(self.nodes, 'nodes')
        if self.nodes:
            for k in self.nodes:
                if k:
                    k.validate()

    def to_map(self):
        result = {}
        result['nodes'] = []
        if self.nodes is not None:
            for k in self.nodes:
                result['nodes'].append(k.to_map() if k else None)
        else:
            result['nodes'] = None
        return result

    def from_map(self, map={}):
        self.nodes = []
        if map.get('nodes') is not None:
            for k in map.get('nodes'):
                temp_model = DescribeClusterNodesResponseBodyNodesNodes()
                temp_model = temp_model.from_map(k)
                self.nodes.append(temp_model)
        else:
            self.nodes = None
        return self


class DescribeClusterNodesResponseBodyPage(TeaModel):
    def __init__(self, total_count=0, page_number=0, page_size=0):
        self.total_count = total_count
        self.page_number = page_number
        self.page_size = page_size

    def validate(self):
        self.validate_required(self.total_count, 'total_count')
        self.validate_required(self.page_number, 'page_number')
        self.validate_required(self.page_size, 'page_size')

    def to_map(self):
        result = {}
        result['total_count'] = self.total_count
        result['page_number'] = self.page_number
        result['page_size'] = self.page_size
        return result

    def from_map(self, map={}):
        self.total_count = map.get('total_count')
        self.page_number = map.get('page_number')
        self.page_size = map.get('page_size')
        return self


class DescribeClusterNodesResponse(TeaModel):
    def __init__(self, headers=None, body=None):
        self.headers = {}
        self.body = body

    def validate(self):
        self.validate_required(self.headers, 'headers')
        self.validate_required(self.body, 'body')
        if self.body:
            self.body.validate()

    def to_map(self):
        result = {}
        result['headers'] = self.headers
        if self.body is not None:
            result['body'] = self.body.to_map()
        else:
            result['body'] = None
        return result

    def from_map(self, map={}):
        self.headers = map.get('headers')
        if map.get('body') is not None:
            temp_model = DescribeClusterNodesResponseBody()
            self.body = temp_model.from_map(map['body'])
        else:
            self.body = None
        return self


class DescribeClusterLogsRequest(TeaModel):
    def __init__(self, headers=None):
        self.headers = {}

    def validate(self):
        pass

    def to_map(self):
        result = {}
        result['headers'] = self.headers
        return result

    def from_map(self, map={}):
        self.headers = map.get('headers')
        return self


class DescribeClusterLogsResponseBody(TeaModel):
    def __init__(self, cluster_id="", cluster_log="", log_level="", created=""):
        self.cluster_id = cluster_id
        self.cluster_log = cluster_log
        self.log_level = log_level
        self.created = created

    def validate(self):
        self.validate_required(self.cluster_id, 'cluster_id')
        self.validate_required(self.cluster_log, 'cluster_log')
        self.validate_required(self.log_level, 'log_level')
        self.validate_required(self.created, 'created')

    def to_map(self):
        result = {}
        result['cluster_id'] = self.cluster_id
        result['cluster_log'] = self.cluster_log
        result['log_level'] = self.log_level
        result['created'] = self.created
        return result

    def from_map(self, map={}):
        self.cluster_id = map.get('cluster_id')
        self.cluster_log = map.get('cluster_log')
        self.log_level = map.get('log_level')
        self.created = map.get('created')
        return self


class DescribeClusterLogsResponse(TeaModel):
    def __init__(self, headers=None, body=None):
        self.headers = {}
        self.body = body

    def validate(self):
        self.validate_required(self.headers, 'headers')
        self.validate_required(self.body, 'body')
        if self.body:
            self.body.validate()

    def to_map(self):
        result = {}
        result['headers'] = self.headers
        if self.body is not None:
            result['body'] = self.body.to_map()
        else:
            result['body'] = None
        return result

    def from_map(self, map={}):
        self.headers = map.get('headers')
        if map.get('body') is not None:
            temp_model = DescribeClusterLogsResponseBody()
            self.body = temp_model.from_map(map['body'])
        else:
            self.body = None
        return self


class AttachInstancesBody(TeaModel):
    def __init__(self, format_disk=False, keep_instance_name=False, cpu_policy="", key_pair="", password="", tags=None,
                 instances=None):
        self.format_disk = format_disk
        self.keep_instance_name = keep_instance_name
        self.cpu_policy = cpu_policy
        self.key_pair = key_pair
        self.password = password
        self.tags = []
        self.instances = []

    def validate(self):
        self.validate_required(self.key_pair, 'key_pair')
        self.validate_required(self.password, 'password')
        self.validate_required(self.tags, 'tags')
        if self.tags:
            for k in self.tags:
                if k:
                    k.validate()
        self.validate_required(self.instances, 'instances')

    def to_map(self):
        result = {}
        result['format_disk'] = self.format_disk
        result['keep_instance_name'] = self.keep_instance_name
        result['cpu_policy'] = self.cpu_policy
        result['key_pair'] = self.key_pair
        result['password'] = self.password
        result['tags'] = []
        if self.tags is not None:
            for k in self.tags:
                result['tags'].append(k.to_map() if k else None)
        else:
            result['tags'] = None
        result['instances'] = []
        if self.instances is not None:
            for k in self.instances:
                result['instances'].append(k)
        else:
            result['instances'] = None
        return result

    def from_map(self, map={}):
        self.format_disk = map.get('format_disk')
        self.keep_instance_name = map.get('keep_instance_name')
        self.cpu_policy = map.get('cpu_policy')
        self.key_pair = map.get('key_pair')
        self.password = map.get('password')
        self.tags = []
        if map.get('tags') is not None:
            for k in map.get('tags'):
                temp_model = AttachInstancesBodyTags()
                temp_model = temp_model.from_map(k)
                self.tags.append(temp_model)
        else:
            self.tags = None
        self.instances = []
        if map.get('instances') is not None:
            for k in map.get('instances'):
                self.instances.append(k)
        else:
            self.instances = None
        return self


class AttachInstancesBodyTags(TeaModel):
    def __init__(self, key="", value=""):
        self.key = key
        self.value = value

    def validate(self):
        pass

    def to_map(self):
        result = {}
        result['key'] = self.key
        result['value'] = self.value
        return result

    def from_map(self, map={}):
        self.key = map.get('key')
        self.value = map.get('value')
        return self


class AttachInstancesRequest(TeaModel):
    def __init__(self, headers=None, body=None):
        self.headers = {}
        self.body = body

    def validate(self):
        self.validate_required(self.body, 'body')
        if self.body:
            self.body.validate()

    def to_map(self):
        result = {}
        result['headers'] = self.headers
        if self.body is not None:
            result['body'] = self.body.to_map()
        else:
            result['body'] = None
        return result

    def from_map(self, map={}):
        self.headers = map.get('headers')
        if map.get('body') is not None:
            temp_model = AttachInstancesBody()
            self.body = temp_model.from_map(map['body'])
        else:
            self.body = None
        return self


class AttachInstancesResponseBody(TeaModel):
    def __init__(self, task_id="", list_=None):
        self.task_id = task_id
        self.list_ = []

    def validate(self):
        self.validate_required(self.task_id, 'task_id')
        self.validate_required(self.list_, 'list_')
        if self.list_:
            for k in self.list_:
                if k:
                    k.validate()

    def to_map(self):
        result = {}
        result['task_id'] = self.task_id
        result['list'] = []
        if self.list_ is not None:
            for k in self.list_:
                result['list'].append(k.to_map() if k else None)
        else:
            result['list'] = None
        return result

    def from_map(self, map={}):
        self.task_id = map.get('task_id')
        self.list_ = []
        if map.get('list') is not None:
            for k in map.get('list'):
                temp_model = AttachInstancesResponseBodyList()
                temp_model = temp_model.from_map(k)
                self.list_.append(temp_model)
        else:
            self.list_ = None
        return self


class AttachInstancesResponseBodyList(TeaModel):
    def __init__(self, code="", instance_id="", message=""):
        self.code = code
        self.instance_id = instance_id
        self.message = message

    def validate(self):
        self.validate_required(self.code, 'code')
        self.validate_required(self.instance_id, 'instance_id')
        self.validate_required(self.message, 'message')

    def to_map(self):
        result = {}
        result['code'] = self.code
        result['instanceId'] = self.instance_id
        result['message'] = self.message
        return result

    def from_map(self, map={}):
        self.code = map.get('code')
        self.instance_id = map.get('instanceId')
        self.message = map.get('message')
        return self


class AttachInstancesResponse(TeaModel):
    def __init__(self, headers=None, body=None):
        self.headers = {}
        self.body = body

    def validate(self):
        self.validate_required(self.headers, 'headers')
        self.validate_required(self.body, 'body')
        if self.body:
            self.body.validate()

    def to_map(self):
        result = {}
        result['headers'] = self.headers
        if self.body is not None:
            result['body'] = self.body.to_map()
        else:
            result['body'] = None
        return result

    def from_map(self, map={}):
        self.headers = map.get('headers')
        if map.get('body') is not None:
            temp_model = AttachInstancesResponseBody()
            self.body = temp_model.from_map(map['body'])
        else:
            self.body = None
        return self


class DescribeTemplatesQuery(TeaModel):
    def __init__(self, template_type=""):
        self.template_type = template_type

    def validate(self):
        pass

    def to_map(self):
        result = {}
        result['template_type'] = self.template_type
        return result

    def from_map(self, map={}):
        self.template_type = map.get('template_type')
        return self


class DescribeTemplatesRequest(TeaModel):
    def __init__(self, headers=None, query=None):
        self.headers = {}
        self.query = query

    def validate(self):
        if self.query:
            self.query.validate()

    def to_map(self):
        result = {}
        result['headers'] = self.headers
        if self.query is not None:
            result['query'] = self.query.to_map()
        else:
            result['query'] = None
        return result

    def from_map(self, map={}):
        self.headers = map.get('headers')
        if map.get('query') is not None:
            temp_model = DescribeTemplatesQuery()
            self.query = temp_model.from_map(map['query'])
        else:
            self.query = None
        return self


class DescribeTemplatesResponseBody(TeaModel):
    def __init__(self, template="", acl="", name="", tags="", template_type="", description=""):
        self.template = template
        self.acl = acl
        self.name = name
        self.tags = tags
        self.template_type = template_type
        self.description = description

    def validate(self):
        self.validate_required(self.template, 'template')
        self.validate_required(self.acl, 'acl')
        self.validate_required(self.name, 'name')
        self.validate_required(self.tags, 'tags')
        self.validate_required(self.template_type, 'template_type')
        self.validate_required(self.description, 'description')

    def to_map(self):
        result = {}
        result['template'] = self.template
        result['acl'] = self.acl
        result['name'] = self.name
        result['tags'] = self.tags
        result['template_type'] = self.template_type
        result['description'] = self.description
        return result

    def from_map(self, map={}):
        self.template = map.get('template')
        self.acl = map.get('acl')
        self.name = map.get('name')
        self.tags = map.get('tags')
        self.template_type = map.get('template_type')
        self.description = map.get('description')
        return self


class DescribeTemplatesResponse(TeaModel):
    def __init__(self, headers=None, body=None):
        self.headers = {}
        self.body = body

    def validate(self):
        self.validate_required(self.headers, 'headers')
        self.validate_required(self.body, 'body')
        if self.body:
            self.body.validate()

    def to_map(self):
        result = {}
        result['headers'] = self.headers
        if self.body is not None:
            result['body'] = self.body.to_map()
        else:
            result['body'] = None
        return result

    def from_map(self, map={}):
        self.headers = map.get('headers')
        if map.get('body') is not None:
            temp_model = DescribeTemplatesResponseBody()
            self.body = temp_model.from_map(map['body'])
        else:
            self.body = None
        return self


class CreateTemplateBody(TeaModel):
    def __init__(self, name="", template="", tags="", template_type=""):
        self.name = name
        self.template = template
        self.tags = tags
        self.template_type = template_type

    def validate(self):
        self.validate_required(self.name, 'name')
        self.validate_required(self.template, 'template')

    def to_map(self):
        result = {}
        result['name'] = self.name
        result['template'] = self.template
        result['tags'] = self.tags
        result['template_type'] = self.template_type
        return result

    def from_map(self, map={}):
        self.name = map.get('name')
        self.template = map.get('template')
        self.tags = map.get('tags')
        self.template_type = map.get('template_type')
        return self


class CreateTemplateRequest(TeaModel):
    def __init__(self, headers=None, body=None):
        self.headers = {}
        self.body = body

    def validate(self):
        self.validate_required(self.body, 'body')
        if self.body:
            self.body.validate()

    def to_map(self):
        result = {}
        result['headers'] = self.headers
        if self.body is not None:
            result['body'] = self.body.to_map()
        else:
            result['body'] = None
        return result

    def from_map(self, map={}):
        self.headers = map.get('headers')
        if map.get('body') is not None:
            temp_model = CreateTemplateBody()
            self.body = temp_model.from_map(map['body'])
        else:
            self.body = None
        return self


class CreateTemplateResponseBody(TeaModel):
    def __init__(self, template_id=""):
        self.template_id = template_id

    def validate(self):
        self.validate_required(self.template_id, 'template_id')

    def to_map(self):
        result = {}
        result['template_id'] = self.template_id
        return result

    def from_map(self, map={}):
        self.template_id = map.get('template_id')
        return self


class CreateTemplateResponse(TeaModel):
    def __init__(self, headers=None, body=None):
        self.headers = {}
        self.body = body

    def validate(self):
        self.validate_required(self.headers, 'headers')
        self.validate_required(self.body, 'body')
        if self.body:
            self.body.validate()

    def to_map(self):
        result = {}
        result['headers'] = self.headers
        if self.body is not None:
            result['body'] = self.body.to_map()
        else:
            result['body'] = None
        return result

    def from_map(self, map={}):
        self.headers = map.get('headers')
        if map.get('body') is not None:
            temp_model = CreateTemplateResponseBody()
            self.body = temp_model.from_map(map['body'])
        else:
            self.body = None
        return self


class CreateClusterBody(TeaModel):
    def __init__(self, cluster_type="", name="", region_id="", kubernetes_version="", snat_entry=False,
                 endpoint_public_access=False, ssh_flags=False, cloud_monitor_flags=False, deletion_protection=False,
                 node_cidr_mask="", proxy_mode="", os_type="", platform="", node_port_range="", key_pair="",
                 login_password="", master_instance_charge_type="", worker_instance_charge_type="", master_period=0,
                 worker_period=0, master_period_unit="", worker_period_unit="", master_auto_renew=False,
                 master_auto_renew_period=0, worker_auto_renew=False, worker_auto_renew_period=0, cpu_policy="",
                 master_count=0, master_system_disk_category="", master_system_disk_size=0, runtime=None,
                 num_of_nodes=0, worker_system_disk_category="", worker_system_disk_size=0, worker_data_disk=False,
                 vpcid="", security_group_id="", container_cidr="", service_cidr="", disable_rollback=False,
                 timeout_mins=0, tags=None, addons=None, taints=None, worker_data_disks=None, master_vswitch_ids=None,
                 master_instance_types=None, worker_instance_types=None, worker_vswitch_ids=None):
        self.cluster_type = cluster_type
        self.name = name
        self.region_id = region_id
        self.kubernetes_version = kubernetes_version
        self.snat_entry = snat_entry
        self.endpoint_public_access = endpoint_public_access
        self.ssh_flags = ssh_flags
        self.cloud_monitor_flags = cloud_monitor_flags
        self.deletion_protection = deletion_protection
        self.node_cidr_mask = node_cidr_mask
        self.proxy_mode = proxy_mode
        self.os_type = os_type
        self.platform = platform
        self.node_port_range = node_port_range
        self.key_pair = key_pair
        self.login_password = login_password
        self.master_instance_charge_type = master_instance_charge_type
        self.worker_instance_charge_type = worker_instance_charge_type
        self.master_period = master_period
        self.worker_period = worker_period
        self.master_period_unit = master_period_unit
        self.worker_period_unit = worker_period_unit
        self.master_auto_renew = master_auto_renew
        self.master_auto_renew_period = master_auto_renew_period
        self.worker_auto_renew = worker_auto_renew
        self.worker_auto_renew_period = worker_auto_renew_period
        self.cpu_policy = cpu_policy
        self.master_count = master_count
        self.master_system_disk_category = master_system_disk_category
        self.master_system_disk_size = master_system_disk_size
        self.runtime = {}
        self.num_of_nodes = num_of_nodes
        self.worker_system_disk_category = worker_system_disk_category
        self.worker_system_disk_size = worker_system_disk_size
        self.worker_data_disk = worker_data_disk
        self.vpcid = vpcid
        self.security_group_id = security_group_id
        self.container_cidr = container_cidr
        self.service_cidr = service_cidr
        self.disable_rollback = disable_rollback
        self.timeout_mins = timeout_mins
        self.tags = []
        self.addons = []
        self.taints = []
        self.worker_data_disks = []
        self.master_vswitch_ids = []
        self.master_instance_types = []
        self.worker_instance_types = []
        self.worker_vswitch_ids = []

    def validate(self):
        self.validate_required(self.cluster_type, 'cluster_type')
        self.validate_required(self.name, 'name')
        self.validate_required(self.region_id, 'region_id')
        self.validate_required(self.snat_entry, 'snat_entry')
        self.validate_required(self.key_pair, 'key_pair')
        self.validate_required(self.login_password, 'login_password')
        self.validate_required(self.master_system_disk_category, 'master_system_disk_category')
        self.validate_required(self.master_system_disk_size, 'master_system_disk_size')
        self.validate_required(self.num_of_nodes, 'num_of_nodes')
        self.validate_required(self.worker_system_disk_category, 'worker_system_disk_category')
        self.validate_required(self.worker_system_disk_size, 'worker_system_disk_size')
        self.validate_required(self.tags, 'tags')
        if self.tags:
            for k in self.tags:
                if k:
                    k.validate()
        self.validate_required(self.addons, 'addons')
        if self.addons:
            for k in self.addons:
                if k:
                    k.validate()
        self.validate_required(self.taints, 'taints')
        if self.taints:
            for k in self.taints:
                if k:
                    k.validate()
        self.validate_required(self.worker_data_disks, 'worker_data_disks')
        if self.worker_data_disks:
            for k in self.worker_data_disks:
                if k:
                    k.validate()
        self.validate_required(self.master_vswitch_ids, 'master_vswitch_ids')
        self.validate_required(self.master_instance_types, 'master_instance_types')
        self.validate_required(self.worker_instance_types, 'worker_instance_types')
        self.validate_required(self.worker_vswitch_ids, 'worker_vswitch_ids')

    def to_map(self):
        result = {}
        result['cluster_type'] = self.cluster_type
        result['name'] = self.name
        result['region_id'] = self.region_id
        result['kubernetes_version'] = self.kubernetes_version
        result['snat_entry'] = self.snat_entry
        result['endpoint_public_access'] = self.endpoint_public_access
        result['ssh_flags'] = self.ssh_flags
        result['cloud_monitor_flags'] = self.cloud_monitor_flags
        result['deletion_protection'] = self.deletion_protection
        result['node_cidr_mask'] = self.node_cidr_mask
        result['proxy_mode'] = self.proxy_mode
        result['os_type'] = self.os_type
        result['platform'] = self.platform
        result['node_port_range'] = self.node_port_range
        result['key_pair'] = self.key_pair
        result['login_password'] = self.login_password
        result['master_instance_charge_type'] = self.master_instance_charge_type
        result['worker_instance_charge_type'] = self.worker_instance_charge_type
        result['master_period'] = self.master_period
        result['worker_period'] = self.worker_period
        result['master_period_unit'] = self.master_period_unit
        result['worker_period_unit'] = self.worker_period_unit
        result['master_auto_renew'] = self.master_auto_renew
        result['master_auto_renew_period'] = self.master_auto_renew_period
        result['worker_auto_renew'] = self.worker_auto_renew
        result['worker_auto_renew_period'] = self.worker_auto_renew_period
        result['cpu_policy'] = self.cpu_policy
        result['master_count'] = self.master_count
        result['master_system_disk_category'] = self.master_system_disk_category
        result['master_system_disk_size'] = self.master_system_disk_size
        result['runtime'] = self.runtime
        result['num_of_nodes'] = self.num_of_nodes
        result['worker_system_disk_category'] = self.worker_system_disk_category
        result['worker_system_disk_size'] = self.worker_system_disk_size
        result['worker_data_disk'] = self.worker_data_disk
        result['vpcid'] = self.vpcid
        result['security_group_id'] = self.security_group_id
        result['container_cidr'] = self.container_cidr
        result['service_cidr'] = self.service_cidr
        result['disable_rollback'] = self.disable_rollback
        result['timeout_mins'] = self.timeout_mins
        result['tags'] = []
        if self.tags is not None:
            for k in self.tags:
                result['tags'].append(k.to_map() if k else None)
        else:
            result['tags'] = None
        result['addons'] = []
        if self.addons is not None:
            for k in self.addons:
                result['addons'].append(k.to_map() if k else None)
        else:
            result['addons'] = None
        result['taints'] = []
        if self.taints is not None:
            for k in self.taints:
                result['taints'].append(k.to_map() if k else None)
        else:
            result['taints'] = None
        result['worker_data_disks'] = []
        if self.worker_data_disks is not None:
            for k in self.worker_data_disks:
                result['worker_data_disks'].append(k.to_map() if k else None)
        else:
            result['worker_data_disks'] = None
        result['master_vswitch_ids'] = []
        if self.master_vswitch_ids is not None:
            for k in self.master_vswitch_ids:
                result['master_vswitch_ids'].append(k)
        else:
            result['master_vswitch_ids'] = None
        result['master_instance_types'] = []
        if self.master_instance_types is not None:
            for k in self.master_instance_types:
                result['master_instance_types'].append(k)
        else:
            result['master_instance_types'] = None
        result['worker_instance_types'] = []
        if self.worker_instance_types is not None:
            for k in self.worker_instance_types:
                result['worker_instance_types'].append(k)
        else:
            result['worker_instance_types'] = None
        result['worker_vswitch_ids'] = []
        if self.worker_vswitch_ids is not None:
            for k in self.worker_vswitch_ids:
                result['worker_vswitch_ids'].append(k)
        else:
            result['worker_vswitch_ids'] = None
        return result

    def from_map(self, map={}):
        self.cluster_type = map.get('cluster_type')
        self.name = map.get('name')
        self.region_id = map.get('region_id')
        self.kubernetes_version = map.get('kubernetes_version')
        self.snat_entry = map.get('snat_entry')
        self.endpoint_public_access = map.get('endpoint_public_access')
        self.ssh_flags = map.get('ssh_flags')
        self.cloud_monitor_flags = map.get('cloud_monitor_flags')
        self.deletion_protection = map.get('deletion_protection')
        self.node_cidr_mask = map.get('node_cidr_mask')
        self.proxy_mode = map.get('proxy_mode')
        self.os_type = map.get('os_type')
        self.platform = map.get('platform')
        self.node_port_range = map.get('node_port_range')
        self.key_pair = map.get('key_pair')
        self.login_password = map.get('login_password')
        self.master_instance_charge_type = map.get('master_instance_charge_type')
        self.worker_instance_charge_type = map.get('worker_instance_charge_type')
        self.master_period = map.get('master_period')
        self.worker_period = map.get('worker_period')
        self.master_period_unit = map.get('master_period_unit')
        self.worker_period_unit = map.get('worker_period_unit')
        self.master_auto_renew = map.get('master_auto_renew')
        self.master_auto_renew_period = map.get('master_auto_renew_period')
        self.worker_auto_renew = map.get('worker_auto_renew')
        self.worker_auto_renew_period = map.get('worker_auto_renew_period')
        self.cpu_policy = map.get('cpu_policy')
        self.master_count = map.get('master_count')
        self.master_system_disk_category = map.get('master_system_disk_category')
        self.master_system_disk_size = map.get('master_system_disk_size')
        self.runtime = map.get('runtime')
        self.num_of_nodes = map.get('num_of_nodes')
        self.worker_system_disk_category = map.get('worker_system_disk_category')
        self.worker_system_disk_size = map.get('worker_system_disk_size')
        self.worker_data_disk = map.get('worker_data_disk')
        self.vpcid = map.get('vpcid')
        self.security_group_id = map.get('security_group_id')
        self.container_cidr = map.get('container_cidr')
        self.service_cidr = map.get('service_cidr')
        self.disable_rollback = map.get('disable_rollback')
        self.timeout_mins = map.get('timeout_mins')
        self.tags = []
        if map.get('tags') is not None:
            for k in map.get('tags'):
                temp_model = CreateClusterBodyTags()
                temp_model = temp_model.from_map(k)
                self.tags.append(temp_model)
        else:
            self.tags = None
        self.addons = []
        if map.get('addons') is not None:
            for k in map.get('addons'):
                temp_model = CreateClusterBodyAddons()
                temp_model = temp_model.from_map(k)
                self.addons.append(temp_model)
        else:
            self.addons = None
        self.taints = []
        if map.get('taints') is not None:
            for k in map.get('taints'):
                temp_model = CreateClusterBodyTaints()
                temp_model = temp_model.from_map(k)
                self.taints.append(temp_model)
        else:
            self.taints = None
        self.worker_data_disks = []
        if map.get('worker_data_disks') is not None:
            for k in map.get('worker_data_disks'):
                temp_model = CreateClusterBodyWorkerDataDisks()
                temp_model = temp_model.from_map(k)
                self.worker_data_disks.append(temp_model)
        else:
            self.worker_data_disks = None
        self.master_vswitch_ids = []
        if map.get('master_vswitch_ids') is not None:
            for k in map.get('master_vswitch_ids'):
                self.master_vswitch_ids.append(k)
        else:
            self.master_vswitch_ids = None
        self.master_instance_types = []
        if map.get('master_instance_types') is not None:
            for k in map.get('master_instance_types'):
                self.master_instance_types.append(k)
        else:
            self.master_instance_types = None
        self.worker_instance_types = []
        if map.get('worker_instance_types') is not None:
            for k in map.get('worker_instance_types'):
                self.worker_instance_types.append(k)
        else:
            self.worker_instance_types = None
        self.worker_vswitch_ids = []
        if map.get('worker_vswitch_ids') is not None:
            for k in map.get('worker_vswitch_ids'):
                self.worker_vswitch_ids.append(k)
        else:
            self.worker_vswitch_ids = None
        return self


class CreateClusterBodyTags(TeaModel):
    def __init__(self, key="", value=""):
        self.key = key
        self.value = value

    def validate(self):
        pass

    def to_map(self):
        result = {}
        result['key'] = self.key
        result['value'] = self.value
        return result

    def from_map(self, map={}):
        self.key = map.get('key')
        self.value = map.get('value')
        return self


class CreateClusterBodyAddons(TeaModel):
    def __init__(self, name="", config=""):
        self.name = name
        self.config = config

    def validate(self):
        pass

    def to_map(self):
        result = {}
        result['name'] = self.name
        result['config'] = self.config
        return result

    def from_map(self, map={}):
        self.name = map.get('name')
        self.config = map.get('config')
        return self


class CreateClusterBodyTaints(TeaModel):
    def __init__(self, key="", value="", effect=""):
        self.key = key
        self.value = value
        self.effect = effect

    def validate(self):
        pass

    def to_map(self):
        result = {}
        result['key'] = self.key
        result['value'] = self.value
        result['effect'] = self.effect
        return result

    def from_map(self, map={}):
        self.key = map.get('key')
        self.value = map.get('value')
        self.effect = map.get('effect')
        return self


class CreateClusterBodyWorkerDataDisks(TeaModel):
    def __init__(self, category="", size="", encrypted=""):
        self.category = category
        self.size = size
        self.encrypted = encrypted

    def validate(self):
        pass

    def to_map(self):
        result = {}
        result['category'] = self.category
        result['size'] = self.size
        result['encrypted'] = self.encrypted
        return result

    def from_map(self, map={}):
        self.category = map.get('category')
        self.size = map.get('size')
        self.encrypted = map.get('encrypted')
        return self


class CreateClusterRequest(TeaModel):
    def __init__(self, headers=None, body=None):
        self.headers = {}
        self.body = body

    def validate(self):
        self.validate_required(self.body, 'body')
        if self.body:
            self.body.validate()

    def to_map(self):
        result = {}
        result['headers'] = self.headers
        if self.body is not None:
            result['body'] = self.body.to_map()
        else:
            result['body'] = None
        return result

    def from_map(self, map={}):
        self.headers = map.get('headers')
        if map.get('body') is not None:
            temp_model = CreateClusterBody()
            self.body = temp_model.from_map(map['body'])
        else:
            self.body = None
        return self


class CreateClusterResponseBody(TeaModel):
    def __init__(self, cluster_id="", request_id="", task_id=""):
        self.cluster_id = cluster_id
        self.request_id = request_id
        self.task_id = task_id

    def validate(self):
        self.validate_required(self.cluster_id, 'cluster_id')
        self.validate_required(self.request_id, 'request_id')
        self.validate_required(self.task_id, 'task_id')

    def to_map(self):
        result = {}
        result['cluster_id'] = self.cluster_id
        result['request_id'] = self.request_id
        result['task_id'] = self.task_id
        return result

    def from_map(self, map={}):
        self.cluster_id = map.get('cluster_id')
        self.request_id = map.get('request_id')
        self.task_id = map.get('task_id')
        return self


class CreateClusterResponse(TeaModel):
    def __init__(self, headers=None, body=None):
        self.headers = {}
        self.body = body

    def validate(self):
        self.validate_required(self.headers, 'headers')
        self.validate_required(self.body, 'body')
        if self.body:
            self.body.validate()

    def to_map(self):
        result = {}
        result['headers'] = self.headers
        if self.body is not None:
            result['body'] = self.body.to_map()
        else:
            result['body'] = None
        return result

    def from_map(self, map={}):
        self.headers = map.get('headers')
        if map.get('body') is not None:
            temp_model = CreateClusterResponseBody()
            self.body = temp_model.from_map(map['body'])
        else:
            self.body = None
        return self


class ScaleClusterRequest(TeaModel):
    def __init__(self, headers=None):
        self.headers = {}

    def validate(self):
        pass

    def to_map(self):
        result = {}
        result['headers'] = self.headers
        return result

    def from_map(self, map={}):
        self.headers = map.get('headers')
        return self


class ScaleClusterResponseBody(TeaModel):
    def __init__(self, request_id=""):
        self.request_id = request_id

    def validate(self):
        self.validate_required(self.request_id, 'request_id')

    def to_map(self):
        result = {}
        result['RequestId'] = self.request_id
        return result

    def from_map(self, map={}):
        self.request_id = map.get('RequestId')
        return self


class ScaleClusterResponse(TeaModel):
    def __init__(self, headers=None, body=None):
        self.headers = {}
        self.body = body

    def validate(self):
        self.validate_required(self.headers, 'headers')
        self.validate_required(self.body, 'body')
        if self.body:
            self.body.validate()

    def to_map(self):
        result = {}
        result['headers'] = self.headers
        if self.body is not None:
            result['body'] = self.body.to_map()
        else:
            result['body'] = None
        return result

    def from_map(self, map={}):
        self.headers = map.get('headers')
        if map.get('body') is not None:
            temp_model = ScaleClusterResponseBody()
            self.body = temp_model.from_map(map['body'])
        else:
            self.body = None
        return self


class DescribeClustersQuery(TeaModel):
    def __init__(self, name="", cluster_type=""):
        self.name = name
        self.cluster_type = cluster_type

    def validate(self):
        pass

    def to_map(self):
        result = {}
        result['name'] = self.name
        result['clusterType'] = self.cluster_type
        return result

    def from_map(self, map={}):
        self.name = map.get('name')
        self.cluster_type = map.get('clusterType')
        return self


class DescribeClustersRequest(TeaModel):
    def __init__(self, headers=None, query=None):
        self.headers = {}
        self.query = query

    def validate(self):
        if self.query:
            self.query.validate()

    def to_map(self):
        result = {}
        result['headers'] = self.headers
        if self.query is not None:
            result['query'] = self.query.to_map()
        else:
            result['query'] = None
        return result

    def from_map(self, map={}):
        self.headers = map.get('headers')
        if map.get('query') is not None:
            temp_model = DescribeClustersQuery()
            self.query = temp_model.from_map(map['query'])
        else:
            self.query = None
        return self


class DescribeClustersResponseBody(TeaModel):
    def __init__(self, name="", cluster_id="", region_id="", state="", cluster_type="", current_version="",
                 meta_data="", resource_group_id="", vpc_id="", vswitch_id="", vswitch_cidr="", data_disk_size=0,
                 data_disk_category="", security_group_id="", zone_id="", network_mode="", master_url="",
                 docker_version="", deletion_protection=False, tags=None):
        self.name = name
        self.cluster_id = cluster_id
        self.region_id = region_id
        self.state = state
        self.cluster_type = cluster_type
        self.current_version = current_version
        self.meta_data = meta_data
        self.resource_group_id = resource_group_id
        self.vpc_id = vpc_id
        self.vswitch_id = vswitch_id
        self.vswitch_cidr = vswitch_cidr
        self.data_disk_size = data_disk_size
        self.data_disk_category = data_disk_category
        self.security_group_id = security_group_id
        self.zone_id = zone_id
        self.network_mode = network_mode
        self.master_url = master_url
        self.docker_version = docker_version
        self.deletion_protection = deletion_protection
        self.tags = []

    def validate(self):
        self.validate_required(self.name, 'name')
        self.validate_required(self.cluster_id, 'cluster_id')
        self.validate_required(self.region_id, 'region_id')
        self.validate_required(self.state, 'state')
        self.validate_required(self.cluster_type, 'cluster_type')
        self.validate_required(self.current_version, 'current_version')
        self.validate_required(self.meta_data, 'meta_data')
        self.validate_required(self.resource_group_id, 'resource_group_id')
        self.validate_required(self.vpc_id, 'vpc_id')
        self.validate_required(self.vswitch_id, 'vswitch_id')
        self.validate_required(self.vswitch_cidr, 'vswitch_cidr')
        self.validate_required(self.data_disk_size, 'data_disk_size')
        self.validate_required(self.data_disk_category, 'data_disk_category')
        self.validate_required(self.security_group_id, 'security_group_id')
        self.validate_required(self.zone_id, 'zone_id')
        self.validate_required(self.network_mode, 'network_mode')
        self.validate_required(self.master_url, 'master_url')
        self.validate_required(self.docker_version, 'docker_version')
        self.validate_required(self.deletion_protection, 'deletion_protection')
        self.validate_required(self.tags, 'tags')
        if self.tags:
            for k in self.tags:
                if k:
                    k.validate()

    def to_map(self):
        result = {}
        result['name'] = self.name
        result['cluster_id'] = self.cluster_id
        result['region_id'] = self.region_id
        result['state'] = self.state
        result['cluster_type'] = self.cluster_type
        result['current_version'] = self.current_version
        result['meta_data'] = self.meta_data
        result['resource_group_id'] = self.resource_group_id
        result['vpc_id'] = self.vpc_id
        result['vswitch_id'] = self.vswitch_id
        result['vswitch_cidr'] = self.vswitch_cidr
        result['data_disk_size'] = self.data_disk_size
        result['data_disk_category'] = self.data_disk_category
        result['security_group_id'] = self.security_group_id
        result['zone_id'] = self.zone_id
        result['network_mode'] = self.network_mode
        result['master_url'] = self.master_url
        result['docker_version'] = self.docker_version
        result['deletion_protection'] = self.deletion_protection
        result['tags'] = []
        if self.tags is not None:
            for k in self.tags:
                result['tags'].append(k.to_map() if k else None)
        else:
            result['tags'] = None
        return result

    def from_map(self, map={}):
        self.name = map.get('name')
        self.cluster_id = map.get('cluster_id')
        self.region_id = map.get('region_id')
        self.state = map.get('state')
        self.cluster_type = map.get('cluster_type')
        self.current_version = map.get('current_version')
        self.meta_data = map.get('meta_data')
        self.resource_group_id = map.get('resource_group_id')
        self.vpc_id = map.get('vpc_id')
        self.vswitch_id = map.get('vswitch_id')
        self.vswitch_cidr = map.get('vswitch_cidr')
        self.data_disk_size = map.get('data_disk_size')
        self.data_disk_category = map.get('data_disk_category')
        self.security_group_id = map.get('security_group_id')
        self.zone_id = map.get('zone_id')
        self.network_mode = map.get('network_mode')
        self.master_url = map.get('master_url')
        self.docker_version = map.get('docker_version')
        self.deletion_protection = map.get('deletion_protection')
        self.tags = []
        if map.get('tags') is not None:
            for k in map.get('tags'):
                temp_model = DescribeClustersResponseBodyTags()
                temp_model = temp_model.from_map(k)
                self.tags.append(temp_model)
        else:
            self.tags = None
        return self


class DescribeClustersResponseBodyTags(TeaModel):
    def __init__(self, key="", value=""):
        self.key = key
        self.value = value

    def validate(self):
        self.validate_required(self.key, 'key')
        self.validate_required(self.value, 'value')

    def to_map(self):
        result = {}
        result['key'] = self.key
        result['value'] = self.value
        return result

    def from_map(self, map={}):
        self.key = map.get('key')
        self.value = map.get('value')
        return self


class DescribeClustersResponse(TeaModel):
    def __init__(self, headers=None, body=None):
        self.headers = {}
        self.body = []

    def validate(self):
        self.validate_required(self.headers, 'headers')
        self.validate_required(self.body, 'body')
        if self.body:
            for k in self.body:
                if k:
                    k.validate()

    def to_map(self):
        result = {}
        result['headers'] = self.headers
        result['body'] = []
        if self.body is not None:
            for k in self.body:
                result['body'].append(k.to_map() if k else None)
        else:
            result['body'] = None
        return result

    def from_map(self, map={}):
        self.headers = map.get('headers')
        self.body = []
        if map.get('body') is not None:
            for k in map.get('body'):
                temp_model = DescribeClustersResponseBody()
                temp_model = temp_model.from_map(k)
                self.body.append(temp_model)
        else:
            self.body = None
        return self


class DescribeClusterDetailRequest(TeaModel):
    def __init__(self, headers=None):
        self.headers = {}

    def validate(self):
        pass

    def to_map(self):
        result = {}
        result['headers'] = self.headers
        return result

    def from_map(self, map={}):
        self.headers = map.get('headers')
        return self


class DescribeClusterDetailResponseBody(TeaModel):
    def __init__(self, name="", cluster_id="", region_id="", state="", cluster_type="", current_version="",
                 meta_data="", resource_group_id="", instance_type="", vpc_id="", vswitch_id="", vswitch_cidr="",
                 data_disk_size=0, data_disk_category="", security_group_id="", zone_id="", network_mode="",
                 docker_version="", deletion_protection=False, tags=None):
        self.name = name
        self.cluster_id = cluster_id
        self.region_id = region_id
        self.state = state
        self.cluster_type = cluster_type
        self.current_version = current_version
        self.meta_data = meta_data
        self.resource_group_id = resource_group_id
        self.instance_type = instance_type
        self.vpc_id = vpc_id
        self.vswitch_id = vswitch_id
        self.vswitch_cidr = vswitch_cidr
        self.data_disk_size = data_disk_size
        self.data_disk_category = data_disk_category
        self.security_group_id = security_group_id
        self.zone_id = zone_id
        self.network_mode = network_mode
        self.docker_version = docker_version
        self.deletion_protection = deletion_protection
        self.tags = []

    def validate(self):
        self.validate_required(self.name, 'name')
        self.validate_required(self.cluster_id, 'cluster_id')
        self.validate_required(self.region_id, 'region_id')
        self.validate_required(self.state, 'state')
        self.validate_required(self.cluster_type, 'cluster_type')
        self.validate_required(self.current_version, 'current_version')
        self.validate_required(self.meta_data, 'meta_data')
        self.validate_required(self.resource_group_id, 'resource_group_id')
        self.validate_required(self.instance_type, 'instance_type')
        self.validate_required(self.vpc_id, 'vpc_id')
        self.validate_required(self.vswitch_id, 'vswitch_id')
        self.validate_required(self.vswitch_cidr, 'vswitch_cidr')
        self.validate_required(self.data_disk_size, 'data_disk_size')
        self.validate_required(self.data_disk_category, 'data_disk_category')
        self.validate_required(self.security_group_id, 'security_group_id')
        self.validate_required(self.zone_id, 'zone_id')
        self.validate_required(self.network_mode, 'network_mode')
        self.validate_required(self.docker_version, 'docker_version')
        self.validate_required(self.deletion_protection, 'deletion_protection')
        self.validate_required(self.tags, 'tags')
        if self.tags:
            for k in self.tags:
                if k:
                    k.validate()

    def to_map(self):
        result = {}
        result['name'] = self.name
        result['cluster_id'] = self.cluster_id
        result['region_id'] = self.region_id
        result['state'] = self.state
        result['cluster_type'] = self.cluster_type
        result['current_version'] = self.current_version
        result['meta_data'] = self.meta_data
        result['resource_group_id'] = self.resource_group_id
        result['instance_type'] = self.instance_type
        result['vpc_id'] = self.vpc_id
        result['vswitch_id'] = self.vswitch_id
        result['vswitch_cidr'] = self.vswitch_cidr
        result['data_disk_size'] = self.data_disk_size
        result['data_disk_category'] = self.data_disk_category
        result['security_group_id'] = self.security_group_id
        result['zone_id'] = self.zone_id
        result['network_mode'] = self.network_mode
        result['docker_version'] = self.docker_version
        result['deletion_protection'] = self.deletion_protection
        result['tags'] = []
        if self.tags is not None:
            for k in self.tags:
                result['tags'].append(k.to_map() if k else None)
        else:
            result['tags'] = None
        return result

    def from_map(self, map={}):
        self.name = map.get('name')
        self.cluster_id = map.get('cluster_id')
        self.region_id = map.get('region_id')
        self.state = map.get('state')
        self.cluster_type = map.get('cluster_type')
        self.current_version = map.get('current_version')
        self.meta_data = map.get('meta_data')
        self.resource_group_id = map.get('resource_group_id')
        self.instance_type = map.get('instance_type')
        self.vpc_id = map.get('vpc_id')
        self.vswitch_id = map.get('vswitch_id')
        self.vswitch_cidr = map.get('vswitch_cidr')
        self.data_disk_size = map.get('data_disk_size')
        self.data_disk_category = map.get('data_disk_category')
        self.security_group_id = map.get('security_group_id')
        self.zone_id = map.get('zone_id')
        self.network_mode = map.get('network_mode')
        self.docker_version = map.get('docker_version')
        self.deletion_protection = map.get('deletion_protection')
        self.tags = []
        if map.get('tags') is not None:
            for k in map.get('tags'):
                temp_model = DescribeClusterDetailResponseBodyTags()
                temp_model = temp_model.from_map(k)
                self.tags.append(temp_model)
        else:
            self.tags = None
        return self


class DescribeClusterDetailResponseBodyTags(TeaModel):
    def __init__(self, key="", value=""):
        self.key = key
        self.value = value

    def validate(self):
        self.validate_required(self.key, 'key')
        self.validate_required(self.value, 'value')

    def to_map(self):
        result = {}
        result['key'] = self.key
        result['value'] = self.value
        return result

    def from_map(self, map={}):
        self.key = map.get('key')
        self.value = map.get('value')
        return self


class DescribeClusterDetailResponse(TeaModel):
    def __init__(self, headers=None, body=None):
        self.headers = {}
        self.body = body

    def validate(self):
        self.validate_required(self.headers, 'headers')
        self.validate_required(self.body, 'body')
        if self.body:
            self.body.validate()

    def to_map(self):
        result = {}
        result['headers'] = self.headers
        if self.body is not None:
            result['body'] = self.body.to_map()
        else:
            result['body'] = None
        return result

    def from_map(self, map={}):
        self.headers = map.get('headers')
        if map.get('body') is not None:
            temp_model = DescribeClusterDetailResponseBody()
            self.body = temp_model.from_map(map['body'])
        else:
            self.body = None
        return self


class DeleteClusterRequest(TeaModel):
    def __init__(self, headers=None):
        self.headers = {}

    def validate(self):
        pass

    def to_map(self):
        result = {}
        result['headers'] = self.headers
        return result

    def from_map(self, map={}):
        self.headers = map.get('headers')
        return self


class DeleteClusterResponseBody(TeaModel):
    def __init__(self, request_id=""):
        self.request_id = request_id

    def validate(self):
        self.validate_required(self.request_id, 'request_id')

    def to_map(self):
        result = {}
        result['RequestId'] = self.request_id
        return result

    def from_map(self, map={}):
        self.request_id = map.get('RequestId')
        return self


class DeleteClusterResponse(TeaModel):
    def __init__(self, headers=None, body=None):
        self.headers = {}
        self.body = body

    def validate(self):
        self.validate_required(self.headers, 'headers')
        self.validate_required(self.body, 'body')
        if self.body:
            self.body.validate()

    def to_map(self):
        result = {}
        result['headers'] = self.headers
        if self.body is not None:
            result['body'] = self.body.to_map()
        else:
            result['body'] = None
        return result

    def from_map(self, map={}):
        self.headers = map.get('headers')
        if map.get('body') is not None:
            temp_model = DeleteClusterResponseBody()
            self.body = temp_model.from_map(map['body'])
        else:
            self.body = None
        return self


class DescribeApiVersionRequest(TeaModel):
    def __init__(self, headers=None):
        self.headers = {}

    def validate(self):
        pass

    def to_map(self):
        result = {}
        result['headers'] = self.headers
        return result

    def from_map(self, map={}):
        self.headers = map.get('headers')
        return self


class DescribeApiVersionResponseBody(TeaModel):
    def __init__(self, version="", build="", docker_version="", docker_region_versions=""):
        self.version = version
        self.build = build
        self.docker_version = docker_version
        self.docker_region_versions = docker_region_versions

    def validate(self):
        self.validate_required(self.version, 'version')
        self.validate_required(self.build, 'build')
        self.validate_required(self.docker_version, 'docker_version')
        self.validate_required(self.docker_region_versions, 'docker_region_versions')

    def to_map(self):
        result = {}
        result['version'] = self.version
        result['build'] = self.build
        result['docker_version'] = self.docker_version
        result['docker_region_versions'] = self.docker_region_versions
        return result

    def from_map(self, map={}):
        self.version = map.get('version')
        self.build = map.get('build')
        self.docker_version = map.get('docker_version')
        self.docker_region_versions = map.get('docker_region_versions')
        return self


class DescribeApiVersionResponse(TeaModel):
    def __init__(self, headers=None, body=None):
        self.headers = {}
        self.body = body

    def validate(self):
        self.validate_required(self.headers, 'headers')
        self.validate_required(self.body, 'body')
        if self.body:
            self.body.validate()

    def to_map(self):
        result = {}
        result['headers'] = self.headers
        if self.body is not None:
            result['body'] = self.body.to_map()
        else:
            result['body'] = None
        return result

    def from_map(self, map={}):
        self.headers = map.get('headers')
        if map.get('body') is not None:
            temp_model = DescribeApiVersionResponseBody()
            self.body = temp_model.from_map(map['body'])
        else:
            self.body = None
        return self
