// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.SDK.Cms20190101.Models
{
    public class PutContactGroupRequest : TeaModel {
        [NameInMap("ContactGroupName")]
        [Validation(Required=true)]
        public string ContactGroupName { get; set; }

        [NameInMap("Describe")]
        [Validation(Required=false)]
        public string Describe { get; set; }

        [NameInMap("ContactNames")]
        [Validation(Required=true)]
        public List<string> ContactNames { get; set; }

    }

}
