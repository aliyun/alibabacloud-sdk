// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.SDK.Rds20140815.Models
{
    public class DescribeDBInstanceProxyConfigurationResponse : TeaModel {
        [NameInMap("RequestId")]
        [Validation(Required=true)]
        public string RequestId { get; set; }

        [NameInMap("TransparentSwitchConfiguration")]
        [Validation(Required=true)]
        public string TransparentSwitchConfiguration { get; set; }

        [NameInMap("PersistentConnectionsConfiguration")]
        [Validation(Required=true)]
        public string PersistentConnectionsConfiguration { get; set; }

        [NameInMap("AttacksProtectionConfiguration")]
        [Validation(Required=true)]
        public string AttacksProtectionConfiguration { get; set; }

    }

}
