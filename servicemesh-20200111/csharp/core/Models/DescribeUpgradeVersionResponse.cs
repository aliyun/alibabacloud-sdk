// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.SDK.Servicemesh20200111.Models
{
    public class DescribeUpgradeVersionResponse : TeaModel {
        [NameInMap("RequestId")]
        [Validation(Required=true)]
        public string RequestId { get; set; }

        [NameInMap("Version")]
        [Validation(Required=true)]
        public DescribeUpgradeVersionResponseVersion Version { get; set; }
        public class DescribeUpgradeVersionResponseVersion : TeaModel {
            [NameInMap("IstioVersion")]
            [Validation(Required=true)]
            public string IstioVersion { get; set; }
            [NameInMap("IstioOperatorVersion")]
            [Validation(Required=true)]
            public string IstioOperatorVersion { get; set; }
            [NameInMap("KubernetesVersion")]
            [Validation(Required=true)]
            public string KubernetesVersion { get; set; }
        };

    }

}
