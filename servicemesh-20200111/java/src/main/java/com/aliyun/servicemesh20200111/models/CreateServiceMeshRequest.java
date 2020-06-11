// This file is auto-generated, don't edit it. Thanks.
package com.aliyun.servicemesh20200111.models;

import com.aliyun.tea.*;

public class CreateServiceMeshRequest extends TeaModel {
    @NameInMap("RegionId")
    @Validation(required = true)
    public String regionId;

    @NameInMap("IstioVersion")
    public String istioVersion;

    @NameInMap("VpcId")
    @Validation(required = true)
    public String vpcId;

    @NameInMap("ApiServerPublicEip")
    public Boolean apiServerPublicEip;

    @NameInMap("PilotPublicEip")
    public Boolean pilotPublicEip;

    @NameInMap("Tracing")
    public Boolean tracing;

    @NameInMap("Name")
    public String name;

    @NameInMap("VSwitches")
    public String VSwitches;

    @NameInMap("TraceSampling")
    public Double traceSampling;

    @NameInMap("LocalityLoadBalancing")
    public Boolean localityLoadBalancing;

    @NameInMap("Telemetry")
    public Boolean telemetry;

    @NameInMap("OpenAgentPolicy")
    public Boolean openAgentPolicy;

    @NameInMap("OPALogLevel")
    public String OPALogLevel;

    @NameInMap("OPARequestCPU")
    public String OPARequestCPU;

    @NameInMap("OPARequestMemory")
    public String OPARequestMemory;

    @NameInMap("OPALimitCPU")
    public String OPALimitCPU;

    @NameInMap("OPALimitMemory")
    public String OPALimitMemory;

    @NameInMap("EnableAudit")
    public Boolean enableAudit;

    @NameInMap("AuditProject")
    public String auditProject;

    public static CreateServiceMeshRequest build(java.util.Map<String, ?> map) throws Exception {
        CreateServiceMeshRequest self = new CreateServiceMeshRequest();
        return TeaModel.build(map, self);
    }

}
