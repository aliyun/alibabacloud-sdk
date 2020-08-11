// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.SDK.Vpc20160428.Models
{
    public class ModifyIPv6TranslatorAclListEntryRequest : TeaModel {
        [NameInMap("RegionId")]
        [Validation(Required=true)]
        public string RegionId { get; set; }

        [NameInMap("AclId")]
        [Validation(Required=true)]
        public string AclId { get; set; }

        [NameInMap("AclEntryId")]
        [Validation(Required=true)]
        public string AclEntryId { get; set; }

        [NameInMap("AclEntryComment")]
        [Validation(Required=true)]
        public string AclEntryComment { get; set; }

    }

}
