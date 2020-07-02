// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.SDK.Dataworks_public20200518.Models
{
    public class GetMetaTableIntroWikiRequest : TeaModel {
        [NameInMap("TableGuid")]
        [Validation(Required=true)]
        public string TableGuid { get; set; }

        [NameInMap("WikiVersion")]
        [Validation(Required=false)]
        public long WikiVersion { get; set; }

    }

}
