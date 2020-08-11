// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.SDK.Vpc20160428.Models
{
    public class AddIPv6TranslatorAclListEntryRequest : TeaModel {
        [NameInMap("RegionId")]
        [Validation(Required=true)]
        public string RegionId { get; set; }

        [NameInMap("AclId")]
        [Validation(Required=true)]
        public string AclId { get; set; }

        [NameInMap("AclEntryIp")]
        [Validation(Required=true)]
        public string AclEntryIp { get; set; }

        [NameInMap("AclEntryComment")]
        [Validation(Required=false)]
        public string AclEntryComment { get; set; }

    }

}
