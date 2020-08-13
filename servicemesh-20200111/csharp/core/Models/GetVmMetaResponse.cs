// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.SDK.Servicemesh20200111.Models
{
    public class GetVmMetaResponse : TeaModel {
        [NameInMap("RequestId")]
        [Validation(Required=true)]
        public string RequestId { get; set; }

        [NameInMap("VmMetaInfo")]
        [Validation(Required=true)]
        public GetVmMetaResponseVmMetaInfo VmMetaInfo { get; set; }
        public class GetVmMetaResponseVmMetaInfo : TeaModel {
            [NameInMap("RootCertPath")]
            [Validation(Required=true)]
            public string RootCertPath { get; set; }
            [NameInMap("RootCertContent")]
            [Validation(Required=true)]
            public string RootCertContent { get; set; }
            [NameInMap("KeyPath")]
            [Validation(Required=true)]
            public string KeyPath { get; set; }
            [NameInMap("KeyContent")]
            [Validation(Required=true)]
            public string KeyContent { get; set; }
            [NameInMap("CertChainPath")]
            [Validation(Required=true)]
            public string CertChainPath { get; set; }
            [NameInMap("CertChainContent")]
            [Validation(Required=true)]
            public string CertChainContent { get; set; }
            [NameInMap("EnvoyEnvPath")]
            [Validation(Required=true)]
            public string EnvoyEnvPath { get; set; }
            [NameInMap("EnvoyEnvContent")]
            [Validation(Required=true)]
            public string EnvoyEnvContent { get; set; }
            [NameInMap("HostsPath")]
            [Validation(Required=true)]
            public string HostsPath { get; set; }
            [NameInMap("HostsContent")]
            [Validation(Required=true)]
            public string HostsContent { get; set; }
        };

    }

}
