// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.SDK.CS20151215.Models
{
    public class DescribeClusterAddonUpgradeStatusResponseBody : TeaModel {
        [NameInMap("template")]
        [Validation(Required=true)]
        public string Template { get; set; }

        [NameInMap("can_upgrade")]
        [Validation(Required=true)]
        public bool? CanUpgrade { get; set; }

        [NameInMap("addon_info")]
        [Validation(Required=true)]
        public DescribeClusterAddonUpgradeStatusResponseBodyAddonInfo AddonInfo { get; set; }
        public class DescribeClusterAddonUpgradeStatusResponseBodyAddonInfo : TeaModel {
            [NameInMap("message")]
            [Validation(Required=true)]
            public string Message { get; set; }
            [NameInMap("category")]
            [Validation(Required=true)]
            public string Category { get; set; }
            [NameInMap("yaml")]
            [Validation(Required=true)]
            public string Yaml { get; set; }
            [NameInMap("component_name")]
            [Validation(Required=true)]
            public string ComponentName { get; set; }
            [NameInMap("version")]
            [Validation(Required=true)]
            public string Version { get; set; }
        };

    }

}
